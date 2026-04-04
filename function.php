<?php
function lang($text) {
    $lang = isset($_GET['lang']) ? $_GET['lang'] : 'en';

    if ($lang == 'id') {
        $translations = [
            // Meta description
            'PT. Talenta Selaras Utama (Selaras Recruitment) is a trusted partner for Executive Search, Mass Recruitment, Project-Based Hiring, and Temporary & Contract Staffing in Indonesia.' =>
            'PT. Talenta Selaras Utama (Selaras Recruitment) adalah mitra terpercaya untuk Executive Search, Mass Recruitment, Project-Based Hiring, serta Temporary & Contract Staffing di Indonesia.',

            'Indonesia recruitment, executive search, mass recruitment, staffing agency, PT Talenta Selaras Utama, selarasrecruitment.id' =>
            'Rekrutmen Indonesia, pencarian eksekutif, rekrutmen massal, agensi tenaga kerja, PT Talenta Selaras Utama, selarasrecruitment.id',

            'Trusted recruitment partner to find the best talent: Executive Search, Mass Recruitment, Project-Based Hiring, and Staffing.' =>
            'Mitra rekrutmen terpercaya untuk menemukan talenta terbaik: Pencarian Eksekutif, Rekrutmen Massal, Rekrutmen Berbasis Proyek, dan Penyediaan Tenaga Kerja.',

            // Title
            'PT. Talenta Selaras Utama | Recruitment & Executive Search Indonesia' =>
            'PT. Talenta Selaras Utama | Recruitment & Executive Search Indonesia',

            'Professional recruitment solutions for companies in Indonesia' =>
            'Professional recruitment solutions for companies in Indonesia',

            'Call to Our Experts' => 
            'Hubungi Pakar Kami',

            'Welcome To' => 
            'Selamat Datang Di',

            'Connecting Great People With Great Companies' => 
            'Menghubungkan Orang Hebat dengan Perusahaan Hebat',

            'We help organizations find the right talent and empower professionals to achieve their career goals. With a strategic and personalized approach, Selaras Recruitment connects great people with great companies for long-term success.' => 
            'Kami membantu organisasi menemukan talenta yang tepat dan memberdayakan profesional untuk mencapai tujuan karier mereka. Dengan pendekatan yang strategis dan personal, Selaras Recruitment menghubungkan orang-orang hebat dengan perusahaan-perusahaan hebat untuk kesuksesan jangka panjang.',
            
            'Learn More' =>
            'Detail Lengkap',

            'Job Vacancy' =>
            //'Lowongan',
            'Lowongan Kerja',

            'Selaras Recruitment was built on a simple belief—that the right talent has the power to transform the direction of a business.' =>
            'Selaras Recruitment dibangun atas keyakinan sederhana—bahwa talenta yang tepat memiliki kekuatan untuk mengubah arah sebuah bisnis.',
            
            'Behind Selaras Recruitment are two women with strong and complementary professional journeys: Anne Yuliana and Sagita Bidari Putri.' =>
            'Di balik Selaras Recruitment terdapat dua wanita dengan perjalanan profesional yang kuat dan saling melengkapi: Anne Yuliana dan Sagita Bidari Putri.',
            
            'Anne Yuliana has dedicated more than a decade to the field of human capital development, with a deep understanding of how individual potential can be shaped into organizational strength.' =>
            'Anne Yuliana telah mendedikasikan lebih dari satu dekade di bidang pengembangan sumber daya manusia, dengan pemahaman mendalam tentang bagaimana potensi individu dapat dibentuk menjadi kekuatan organisasi.',
            
            'Meanwhile, Sagita Bidari Putri brings over 15 years of experience in the banking industry—an environment that demands precision, integrity, and the highest standards of professionalism.' =>
            'Sementara itu, Sagita Bidari Putri membawa pengalaman lebih dari 15 tahun di industri perbankan—lingkungan yang menuntut presisi, integritas, dan standar profesionalisme tertinggi.',
            
            'From these two distinct backgrounds, a shared vision was formed: to deliver a recruitment process that goes beyond simply filling positions, but truly creates meaningful impact.' =>
            'Dari dua latar belakang yang berbeda ini, terbentuk visi bersama: menghadirkan proses rekrutmen yang tidak hanya mengisi posisi, tetapi benar-benar menciptakan dampak yang berarti.',
            
            'At Selaras Recruitment, we believe that the best candidates are not defined solely by their experience, but by the alignment between competence, character, and business needs.' =>
            'Di Selaras Recruitment, kami percaya bahwa kandidat terbaik tidak hanya ditentukan oleh pengalaman mereka, tetapi oleh keselarasan antara kompetensi, karakter, dan kebutuhan bisnis.',
            
            'Through in-depth assessment, a structured approach, and a strong commitment to quality, we ensure that every talent we present is not only ready to perform, but also prepared to grow and contribute meaningfully.' =>
            'Melalui penilaian mendalam, pendekatan terstruktur, dan komitmen kuat terhadap kualitas, kami memastikan setiap talenta yang kami hadirkan tidak hanya siap bekerja, tetapi juga siap berkembang dan memberikan kontribusi yang bermakna.',
            
            'Because for us, recruitment is not just a process—it is part of building the future, for both organizations and the individuals within them.' =>
            'Karena bagi kami, rekrutmen bukan sekadar proses—ini adalah bagian dari membangun masa depan, bagi organisasi maupun individu di dalamnya.',
            
            'Connecting Talent, Creating Impact' =>
            'Menghubungkan Bakat, Menciptakan Dampak',

            'Selaras Recruitment is built by a team of dedicated professionals committed to delivering excellence in human capital solutions. We continuously uphold the highest standards in every engagement—ensuring precision, reliability, and meaningful outcomes for our clients.' =>
            'Selaras Recruitment dibangun oleh tim profesional yang berdedikasi, berkomitmen untuk menghadirkan keunggulan dalam solusi sumber daya manusia. Kami secara konsisten menjaga standar tertinggi di setiap keterlibatan—menjamin presisi, keandalan, dan hasil yang bermakna bagi klien kami.',

            'As one of the early players in Indonesia`s professional HR consulting industry, Selaras Recruitment began with a small yet highly driven team. Since then, we have grown steadily in a dynamic and evolving market, guided by consistency, strong execution, and the trust we build with every client we serve.' =>
            'Sebagai salah satu pelaku awal dalam industri konsultan HR profesional di Indonesia, Selaras Recruitment memulai dengan tim kecil namun sangat bersemangat. Sejak saat itu, kami berkembang secara stabil di pasar yang dinamis dan terus berubah, dipandu oleh konsistensi, eksekusi yang kuat, dan kepercayaan yang kami bangun dengan setiap klien.',

            'Our culture is defined by courage and commitment. We embrace open thinking, adapt with agility, and take decisive steps even in uncertain situations. We believe that every client need can be addressed with the right strategy, strong collaboration, and unwavering professionalism.' =>
            'Budaya kami didefinisikan oleh keberanian dan komitmen. Kami menerima pemikiran terbuka, beradaptasi dengan gesit, dan mengambil langkah tegas bahkan dalam situasi yang tidak pasti. Kami percaya bahwa setiap kebutuhan klien dapat diatasi dengan strategi yang tepat, kolaborasi yang kuat, dan profesionalisme yang tak tergoyahkan.',

            'At Selaras Recruitment, we do not simply aim to fulfill hiring needs—we are committed to delivering impactful and sustainable talent solutions.' =>
            'Di Selaras Recruitment, kami tidak sekadar bertujuan memenuhi kebutuhan perekrutan—kami berkomitmen untuk menghadirkan solusi talenta yang berdampak dan berkelanjutan.',

            'Our Culture' =>
            'Budaya Kami',

            'The Culture at' =>
            'Budaya Kami Di',

            'Precision & Excellence' => 'Presisi & Keunggulan',

            'Growth & Trust' => 'Pertumbuhan & Kepercayaan',

            'Courage & Commitment' => 'Keberanian & Komitmen',

            'Impactful Talent Solutions' => 'Solusi Talent yang Berdampak',

            'About Us' => 'Tentang Kami',

            'About' => 'Tentang',
            'Culture' => 'Budaya',
            'Home' => 'Beranda',
            'Our Core' => 'Fondasi Kita',
            'The principles that drive how we work and grow with our clients.' => 'Prinsip yang menjadi dasar cara kami bekerja dan berkembang bersama klien.',

            'Integrity' => 'Integritas',
            'We operate with honesty, transparency, and strong ethical principles in every process, building trust as the foundation of long-term partnerships.' => 'Kami menjalankan setiap proses dengan kejujuran, transparansi, dan prinsip etika yang kuat, membangun kepercayaan sebagai dasar kemitraan jangka panjang.',

            'Precision' => 'Presisi',
            'We approach every search with accuracy and attention to detail, ensuring each candidate is carefully selected and aligned with our clients’ specific needs.' => 'Kami menjalankan setiap pencarian dengan akurasi dan perhatian terhadap detail, memastikan setiap kandidat dipilih dengan tepat sesuai kebutuhan spesifik klien.',

            'Partnership' => 'Kemitraan',
            'We work closely with our clients as trusted advisors, fostering collaborative relationships to understand and support their long-term business goals.' => 'Kami bekerja erat dengan klien sebagai mitra terpercaya, membangun hubungan kolaboratif untuk memahami dan mendukung tujuan bisnis jangka panjang mereka.',

            'Impact' => 'Dampak',
            'We focus on delivering talent that creates real value—contributing not only to immediate needs but also to sustainable growth and organizational success.' => 'Kami berfokus menghadirkan talenta yang memberikan nilai nyata—tidak hanya untuk kebutuhan saat ini, tetapi juga untuk pertumbuhan berkelanjutan dan kesuksesan organisasi.',
            'Core' => 'Inti',
            'Others' => 'Lainnya',
            'Psychological Test' => 'Tes Psikologi',
            'Training Service'  => 'Layanan Pelatihan',
            'Site Link' => 'Tautan Situs',
            'Find Us' => 'Temukan Kami',
            'Load More' => 'Lebih Banyak',
            'Contact' => 'Hubungi',
            'Contact Us' => 'Hubungi Kami',
            'Service' => 'Melayani',
            'Our Services' => 'Layanan Kami',
            'Client' => 'Klien',
            'Our Client' => 'Klien Kami',
            
            'Innovative Companies That Trust Us' => 'Dipercaya oleh Perusahaan Inovatif',
            'Professional Solutions Tailored for Your Business Growth' => 'Solusi Profesional yang Disesuaikan untuk Pertumbuhan Bisnis Anda',
            'Executive Search' => 'Pencarian Eksekutif',
            'We offer Executive Search services to help companies find and recruit top-level executives and senior leaders. Our approach is highly targeted, discreet, and designed to attract high-performing candidates, including those not actively seeking new opportunities.' => 'Kami menyediakan layanan Executive Search untuk membantu perusahaan menemukan dan merekrut eksekutif tingkat atas serta pemimpin senior. Pendekatan kami sangat terarah, rahasia, dan dirancang untuk menarik kandidat berkinerja tinggi, termasuk mereka yang tidak sedang aktif mencari peluang baru.',
            'Key Features' => 'Fitur Utama',
            'Focused on Senior Roles: C-level, directors, and key leadership positions.' => 'Fokus pada posisi senior: level C, direktur, dan posisi kepemimpinan utama.',
            'Direct Headhunting: We proactively approach the best candidates in the market.' => 'Headhunting langsung: kami secara proaktif mendekati kandidat terbaik di pasar.',
            'Confidential Process: Ensuring privacy for both clients and candidates.' => 'Proses rahasia: menjaga privasi klien dan kandidat.',
            'Comprehensive Screening: In-depth interviews, assessments, and reference checks.' => 'Seleksi komprehensif: wawancara mendalam, asesmen, dan pengecekan referensi.',
            'Why Choose Us' => 'Mengapa Memilih Kami',
            'Access to exclusive executive talent' => 'Akses ke talenta eksekutif eksklusif',
            'Tailored search based on your company`s culture and needs' => 'Pencarian yang disesuaikan dengan budaya dan kebutuhan perusahaan Anda',
            'Faster, more accurate placement for critical roles' => 'Penempatan lebih cepat dan akurat untuk posisi krusial',
            'Let`s discuss your needs' => 'Mari diskusikan kebutuhan Anda',
            'Call Us' => 'Hubungi Kami',
            'Interest & Talent' => 'Minat & Bakat',
            'The flow of psychological test to determine an individual potential to direct their interest' => 'Alur tes psikologi untuk menentukan potensi individu dalam mengarahkan minatnya',
            'Counseling' => 'Konseling',
            'Helping, understanding, & handling about emotional problems, psychology, or someone behavior' => 'Membantu memahami dan menangani masalah emosional, psikologis, atau perilaku seseorang',
            'Outing' => 'Outing',
            'Activities in outdoor places to strengthen team relations' => 'Kegiatan di luar ruangan untuk mempererat hubungan tim',
            'Training' => 'Pelatihan',
            'Developing individual potential through training that matches compan`s needs' => 'Mengembangkan potensi individu melalui pelatihan yang sesuai dengan kebutuhan perusahaan',
            'Organizational Development' => 'Pengembangan Organisasi',
            'Helping companies enhance and develop their team performance for better results' => 'Membantu perusahaan meningkatkan dan mengembangkan kinerja tim untuk hasil yang lebih baik',
            'Assessment Centre' => 'Pusat Asesmen',
            'Identification of employee competence through profiling assessment centre executive search' => 'Identifikasi kompetensi karyawan melalui profiling di assessment centre',

            'If you have any comments please apply now' => 'Jika Anda memiliki komentar, silakan kirimkan sekarang',
            'Send Your Message' => 'Kirim Pesan Anda',
            'Feel free to send us your questions or inquiries. Our team will get back to you as soon as possible.' 
                => 'Silakan kirim pertanyaan atau kebutuhan Anda. Tim kami akan merespons secepat mungkin.',

            'Send Message' => 'Kirim Pesan',
            'Your Name' => 'Nama Anda',
            'Your Email' => 'Email Anda',
            'Your Phone' => 'Nomor Telepon Anda',
            'Subject' => 'Subjek',
            'Message' => 'Pesan',
            'Name' => 'Nama',
            'Email' => 'Email',
            'Telepon' => 'Telepon',
            'Subject' => 'Subjek',
            'Name, Phone, Subject, and Message are required fields.' => 'Nama, Telepon, Subjek, dan Pesan wajib diisi',
            'Close' => 'Tutup',
            'Start Your Career With Us Today' => 'Mulai Karier Anda Bersama Kami Hari Ini'
        ];

        return $translations[$text] ?? $text;
    }

    return $text;
}

function isActive($segment){
    $path = rtrim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    $base = rtrim(str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']), '/');

    if($segment === 'home'){
        return $path === $base ? 'active' : '';
    }

    return strpos($path, $segment) !== false ? 'active' : '';
}

function base_url($atRoot = false, $atCore = false, $parse = false) {
    if (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) || 
        isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
        $protocol = 'https://';
    } else {
        $protocol = 'http://';
    }
    
    $host = $_SERVER['HTTP_HOST'];
    $url = $protocol . $host;
    
    return $url;
}

function home($path = ''){
    $dir = str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
    $base = (isset($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $dir;
    return rtrim($base, '/') . '/' . ltrim($path, '/');
}

?>