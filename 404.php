<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 flex items-center justify-center min-h-screen p-6">

    <div class="fixed top-6 right-6 flex space-x-2">
        <button onclick="setLanguage('en')" class="flex items-center gap-2 px-4 py-2 bg-white border rounded-full shadow-sm hover:bg-gray-100 transition">
            <i data-lucide="languages" class="w-4 h-4"></i>
            <span class="text-sm font-medium">English</span>
        </button>
        <button onclick="setLanguage('id')" class="flex items-center gap-2 px-4 py-2 bg-white border rounded-full shadow-sm hover:bg-gray-100 transition">
            <i data-lucide="map-pin" class="w-4 h-4"></i>
            <span class="text-sm font-medium">Indonesia</span>
        </button>
    </div>

    <div class="max-w-md w-full text-center">
        <div class="mb-8 flex justify-center">
            <div class="p-5 bg-red-100 rounded-full">
                <i data-lucide="alert-circle" class="w-12 h-12 text-red-600"></i>
            </div>
        </div>

        <h1 class="text-6xl font-bold text-gray-900 mb-2">404</h1>

        <h2 id="title" class="text-2xl font-semibold text-gray-800 mb-4">
            Page Not Found
        </h2>

        <p id="description" class="text-gray-600 mb-8 leading-relaxed">
            The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.
        </p>

        <a href="/" class="inline-flex items-center gap-2 px-6 py-3 bg-blue-600 text-white rounded-full shadow hover:bg-blue-700 transition">
            <i data-lucide="arrow-left" class="w-4 h-4"></i>
            <span id="back">Back to Home</span>
        </a>

        <div class="mt-8 text-sm text-gray-400">
            &copy; 2026 Selaras Recruitment. <span id="footer">Please check the URL or return home.</span>
        </div>
    </div>

    <script>
        const content = {
            en: {
                title: "Page Not Found",
                description: "The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.",
                back: "Back to Home",
                footer: "Please check the URL or return home."
            },
            id: {
                title: "Halaman Tidak Ditemukan",
                description: "Halaman yang Anda cari mungkin telah dihapus, diubah namanya, atau sementara tidak tersedia.",
                back: "Kembali ke Beranda",
                footer: "Silakan periksa URL atau kembali ke beranda."
            }
        };

        function setLanguage(lang) {
            document.getElementById('title').innerText = content[lang].title;
            document.getElementById('description').innerText = content[lang].description;
            document.getElementById('back').innerText = content[lang].back;
            document.getElementById('footer').innerText = content[lang].footer;
            localStorage.setItem('prefLang', lang);
        }

        lucide.createIcons();

        const savedLang = localStorage.getItem('prefLang') || 'en';
        setLanguage(savedLang);
    </script>

</body>
</html>