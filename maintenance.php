<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maintenance Mode</title>
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
            <div class="p-5 bg-blue-100 rounded-full">
                <i data-lucide="settings" class="w-12 h-12 text-blue-600 animate-spin-slow"></i>
            </div>
        </div>

        <h1 id="title" class="text-3xl font-bold text-gray-900 mb-4">
            Under Maintenance
        </h1>
        <p id="description" class="text-gray-600 mb-8 leading-relaxed">
            We are currently performing scheduled maintenance to improve our services. We'll be back shortly!
        </p>

        <div class="w-full bg-gray-200 rounded-full h-2 mb-8">
            <div class="bg-blue-600 h-2 rounded-full" style="width: 70%"></div>
        </div>

        <div class="text-sm text-gray-400">
            &copy; 2026 Selaras Recruitment. <span id="footer">Thank you for your patience.</span>
        </div>
    </div>

    <script>
        const content = {
            en: {
                title: "Under Maintenance",
                description: "We are currently performing scheduled maintenance to improve our services. We'll be back shortly!",
                footer: "Thank you for your patience."
            },
            id: {
                title: "Sedang Dalam Perbaikan",
                description: "Kami sedang melakukan pemeliharaan rutin untuk meningkatkan layanan kami. Kami akan segera kembali!",
                footer: "Terima kasih atas kesabaran Anda."
            }
        };

        function setLanguage(lang) {
            document.getElementById('title').innerText = content[lang].title;
            document.getElementById('description').innerText = content[lang].description;
            document.getElementById('footer').innerText = content[lang].footer;
            
            localStorage.setItem('prefLang', lang);
        }

        lucide.createIcons();

        const savedLang = localStorage.getItem('prefLang') || 'en';
        setLanguage(savedLang);
    </script>

    <style>
        @keyframes spin-slow {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        .animate-spin-slow {
            animation: spin-slow 8s linear infinite;
        }
    </style>
</body>
</html>