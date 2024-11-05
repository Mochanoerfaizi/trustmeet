<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="css/style.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Home</title>
</head>

<body class="h-full">

<div class="min-h-full">
<nav class="bg-[#44b6ea]">
    <div class="container mx-auto max-w-7xl flex justify-between items-center px-4 sm:px-6 lg:px-8">
        <!-- Logo -->
        <div class="logo flex-shrink-0">
            <img class="h-16 w-16" src="{{ asset('images/nobgg.png') }}" alt="Trust Meet Logo">
        </div>

        <!-- Navigation Links -->
        <div class="nav-links hidden md:flex space-x-8">
            <a href="#" class="rounded-md text-white px-3 py-2 text-sm font-medium hover:bg-teal-400">Home</a>
            <a href="#" class="rounded-md text-white px-3 py-2 text-sm font-medium hover:bg-teal-400">Features</a>
            <a href="#" class="rounded-md text-white px-3 py-2 text-sm font-medium hover:bg-teal-400">About Us</a>
            <a href="contact" class="rounded-md text-white px-3 py-2 text-sm font-medium hover:bg-teal-400">Contact Us</a>
        </div>

        <!-- Login Button -->
        <div class="nav-links login">
            <a href="#" class="rounded-md text-white px-3 py-2 text-sm font-medium hover:bg-teal-400">
                Login
            </a>
        </div>
    </div>
</nav>


        <!-- Jumbotron -->
        <section class="jumbotron bg-blue-50 py-20" id="home">
            <div class="container mx-auto text-center">
                <h1 class="text-white text-4xl font-extrabold">We help <span class="text-[#44b6ea]">Find Colleagues</span> and <span class="text-[#44b6ea]">Friends</span> at <span class="text-[#44b6ea]">Trust Meet</span></h1>
                <p class="mt-4 text-[#44b6ea] text-sm max-w-lg mx-auto">Trust Meet connects you with experienced tutors ready to support your learning journey. Whether you're preparing for exams, enhancing skills, or seeking focused guidance - we offer a safe, comfortable, and personalized learning solution.</p>

                            <div class="mt-10 flex justify-center space-x-20">
                        <a href="#" class="bg-blue-500 text-white py-2 px-6 rounded-full font-semibold hover:bg-blue-600">
                            Hubungi Kami
                        </a>
                        <a href="{{ route('register') }}" class="bg-blue-500 text-white py-2 px-6 rounded-full font-semibold hover:bg-blue-600">
                            Daftar Sekarang
                        </a>

                    </div>

                <div class="mt-20">
                <div class="container img">
                <img src="{{ asset('images/temann.png') }}" alt="">

                </div>
            </div>
        </section>

       <!-- About Us Section -->
<section class="bg-white py-20">
    <div class="container mx-auto text-center">
        <!-- Section Title -->
        <h2 class="text-3xl font-extrabold text-gray-900 mb-4">About Us</h2>
        <!-- Subtitle -->
        <h3 class="text-xl font-semibold text-gray-400 mb-6">Pengajar Ramah dan Akrab</h3>

        <!-- Description Text -->
        <p class="text-gray-700 max-w-2xl mx-auto mb-6 leading-relaxed">
        Teman Belajar adalah platform edukasi yang menghubungkan siswa dengan tutor berkualitas secara interaktif dan mudah diakses. Aplikasi ini dirancang untuk mendukung berbagai gaya belajar, mulai dari kolaborasi antar-siswa hingga bimbingan khusus dari tutor berpengalaman. Melalui fitur-fitur seperti pembagian materi, sesi belajar bersama, dan metode pembelajaran yang fleksibel, Teman Belajar membantu siswa untuk mencapai potensi terbaik mereka dengan cara yang paling sesuai dengan kebutuhan individu. Baik untuk persiapan ujian, peningkatan pemahaman, atau pengembangan keterampilan, Teman Belajar hadir sebagai solusi belajar yang aman, nyaman, dan efektif.
        </p>

        <!-- Bulleted List -->
       <!-- <ul class="text-left max-w-lg mx-auto list-decimal list-inside text-gray-700">
            <li>Bimbel Terbaik dengan Kelulusan Siswa Terbanyak ke PTN dan PT Kedinasan se-Indonesia.</li>
            <li>Bimbel Terbesar dengan Lokasi Terbanyak se-Indonesia yang Dikelola Secara Terpusat (no franchise).</li>
            <li>Bimbel Pertama yang Menyelenggarakan E-Sport Pendidikan.</li>
            <li>Bimbel Terlama yang Masih Beroperasi sampai Saat Ini.</li>
        </ul>
        <-->
        <!-- Additional Information -->
        <p class="text-gray-700 max-w-2xl mx-auto mt-6 leading-relaxed">
            TrustMe dan memiliki visi untuk menjadi bimbingan belajar terbaik dan terbesar se-Indonesia.
        </p>

        <!-- Social Media Icons (optional, requires icons to be linked or SVGs) -->
        <div class="flex justify-center space-x-4 mt-8">
            <a href="#"><img src="images/ig.png" alt="Instagram" class="h-6 w-6"></a>
            <a href="#"><img src="images/line.png" alt="Twitter" class="h-6 w-6"></a>
            <a href="#"><img src="images/wa.png" alt="WhatsApp" class="h-6 w-6"></a>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-[#44b6ea] py-6">
    <div class="container mx-auto text-center text-white">
        <p>&copy; 2024 Teman Belajar. All rights reserved.</p>
        <p>Contact us: info@temanbelajar.com</p>
    </div>
</footer>
</body>
</html>
