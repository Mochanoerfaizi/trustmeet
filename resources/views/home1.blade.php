<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.tailwinds.com"></script>
    <title>Home</title>
</head>

<body class="h-full text-white">

    <!-- Navbar -->

    <body class="h-full text-white">
        <nav class="bg-[#44b6ea] py-4 fixed top-0 w-full shadow-lg">
            <div class="container mx-auto flex justify-between items-center px-4">
                <div class="flex items-center space-x-4">
                    <img src="images/nobgg.png" alt="Trust Meet Logo" class="w-16 h-16">
                </div>
                <div class="hidden md:flex nav-links space-x-6">
                    <a class="nav-link active text-black font-semibold hover:text-blue-500" aria-current="page"
                        href="#home">Home</a>
                    <a class="nav-link active text-black font-semibold hover:text-blue-500" aria-current="page"
                        href="#about">About Us</a>
                    <a class="nav-link active text-black font-semibold hover:text-blue-500" aria-current="page"
                        href="#kontak">Contact</a>
                    <a class="nav-link active text-black font-semibold hover:text-blue-500" aria-current="page"
                        href="/user">Find your partner</a>
                </div>
                <div class="md:hidden flex items-center ml-auto">
                    <button id="menu-toggle" class="text-white focus:outline-none">
                        <!-- Hamburger Icon -->
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>

                <!-- Login Button (Visible on all screen sizes) -->
                <div class="relative">
                    <!-- Profile Picture -->
                    <button id="profile-menu-toggle" class="hidden md:flex items-center focus:outline-none">
                        <img src="images/temann.png" alt="User Profile"
                            class="w-10 h-10 ">
                    </button>
                    <!-- Dropdown Menu -->
                    <div id="profile-menu"
                        class="hidden absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg py-2 z-50">
                        <a href="/user/2" class="block px-4 py-2 text-gray-800 hover:bg-blue-100">Edit Profile</a>
                        <a href="/logout" class="block px-4 py-2 text-gray-800 hover:bg-blue-100">Log Out</a>
                    </div>
                </div>

                <script>
                    // JavaScript for toggling profile dropdown menu
                    document.getElementById('profile-menu-toggle').addEventListener('click', function () {
                        const profileMenu = document.getElementById('profile-menu');
                        profileMenu.classList.toggle('hidden');
                    });


                </script>

            </div>
            <!-- Mobile Navigation Menu -->
            <div id="mobile-menu" class="md:hidden hidden flex flex-col bg-[#44b6ea] text-center text-white">
                <a href="#home" class="py-2 text-blue-700 font-semibold hover:text-blue-500">Home</a>
                <a href="#about" class="py-2 text-blue-700 font-semibold hover:text-blue-500">About Us</a>
                <a href="#kontak" class="py-2 text-blue-700 font-semibold hover:text-blue-500">Contact</a>
                <a href="/user/1" class="py-2 text-blue-700 font-semibold hover:text-blue-500">Find your partner</a>
                <div class="relative py-2">
                    <!-- Profile Picture -->
                    <button id="mobile-profile-menu-toggle"
                        class="flex items-center justify-center mx-auto focus:outline-none">
                        <img src="images/temann.png" alt="User Profile"
                            class="w-10 h-10">
                    </button>
                </div>


        </nav>

        <script>
            // JavaScript for toggling mobile menu visibility
            document.getElementById('menu-toggle').addEventListener('click', function () {
                const mobileMenu = document.getElementById('mobile-menu');
                mobileMenu.classList.toggle('hidden');
            });
        </script>
        </div>
        </nav>


        <!-- Main Section with Navbar on the left and Image on the right -->
        <section class="flex flex-col md:flex-row bg-blue-300 items-center pt-36 pb-12 " id="home">
            <!-- Content Section (Left) -->
            <div class="text-center md:text-left md:w-1/2 px-36 jumbotron">
                <h1 class="text-5xl font-extrabold mb-4">Find the <span class="text-blue-500">Perfect Tutor</span>,
                    Enjoy a
                    Better Learning Experience!</h1>
                <div class="mt-10">
                    <!-- <a href="#" class="bg-blue-500 text-white py-2 px-6 rounded-full font-semibold hover:bg-blue-600">
                        Hubungi Kami
                    </a> -->
                </div>
                <p class="text-black mt-8 ">
                    "Trust Meet connects you with experienced tutors ready to support your learning journey. Whether
                    you're
                    preparing for exams, enhancing skills, or seeking focused guidance – we offer a safe, comfortable,
                    and
                    personalized learning solution."
                </p>
            </div>

            <!-- Illustration Section (Right) -->
            <div class="md:w-auto flex justify-center mt-1 md:mt-0 container img">
                <img src="images/temann.png" alt="Two characters shaking hands" class="w-full h-96">
            </div>
            </div>
        </section>
    </body>
    <section class="" id="about">
        <div class="container mx-auto p-10">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="text-blue-500 font-semibold">About Us</h2>
                <h1 class="text-4xl font-bold text-gray-900 mt-2">
                    Bermula dari Pengalaman Belajar bareng atau bisa disebut Kerkom
                </h1>
            </div>

            <!-- Main Content Section -->
            <div class="flex flex-wrap items-center justify-between gap-8">
                <!-- Left Section with Cards and Image -->
                <div class="relative flex-1">
                    <!-- Top Left Card -->
                    <!-- <div class="absolute bg-white text-blue-500 shadow-lg rounded-lg p-4 text-center translate-y-50">
                        <h3 class="text-3xl font-bold">20+</h3>
                        <p class="text-gray-600 text-sm">Rekan Belajar</p>
                    </div> -->

                    <!-- Image in the Center -->
                    <div class="relative">
                        <img class="rounded-lg" src="images/fotokitaa.png" alt="Student Studying">
                    </div>

                    <!-- Bottom Right Card -->
                    <!-- <div
                class="absolute bottom-0 right-0 bg-white text-orange-500 shadow-lg rounded-lg p-4 text-center translate-y-0">
                <h3 class="text-3xl font-bold">30+</h3>
                <p class="text-gray-600 text-sm">Cabang</p>
            </div> -->
                </div>

                <!-- Right Section with Text Content -->
                <div class="flex-1 max-w-lg">
                    <p class="text-gray-600 font-semibold">
                        <span class="text-blue-600 font-bold">TEMAN BELAJAR</span> didirikan oleh 4 Mahasiswa Telkom
                        University yang berlatarkan Anak Informatika, yang berpengalaman lebih
                        dari 2 tahun berkolaborasi dengan generasi milenial profesional, Teman Belajar berhasil
                        memodifikasi pengelolaan Aplikasi sesuai kebutuhan pelajar Indonesia.
                    </p>
                </div>
            </div>

            <!-- Services Section -->
            <div class="bg-blue-600 rounded-lg p-6 text-center">
                <h2 class="text-white text-xl font-bold mb-4">Layanan Unggulan Teman Belajar</h2>
                <!-- Horizontal Scrollable Container -->
                <div class="flex space-x-4 overflow-x-auto scrollbar-auto py-4">
                    <!-- Service Card 1 -->
                    <div class="flex-shrink-0 bg-white rounded-lg p-4 text-center w-56 shadow-md">
                        <div class="w-11 h-11 mx-auto mb-2 flex items-center justify-center">
                            <img src="https://img.icons8.com/?size=100&id=119436&format=png&color=000000" alt="Icon">
                        </div>
                        <p class="text-blue-600 font-semibold">Teman Tanya Mapel</p>
                    </div>
                    <!-- Service Card 2 -->
                    <div class="flex-shrink-0 bg-white rounded-lg p-4 text-center w-56 shadow-md">
                        <div class="w-11 h-11 mx-auto mb-2 flex items-center justify-center">
                            <img src="https://img.icons8.com/?size=100&id=fKXXelWgP1B6&format=png&color=000000"
                                alt="Icon">
                        </div>
                        <p class="text-blue-600 font-semibold">Aplikasi Online</p>
                    </div>
                    <!-- Service Card 3 -->
                    <div class="flex-shrink-0 bg-white rounded-lg p-4 text-center w-56 shadow-md">
                        <div class="w-11 h-11 mx-auto mb-2 flex items-center justify-center">
                            <img src="https://img.icons8.com/?size=100&id=S1S2dXgVEl2Q&format=png&color=000000"
                                alt="Icon">
                        </div>
                        <p class="text-blue-600 font-semibold">Teman Curhat</p>
                    </div>
                    <!-- Service Card 4 -->
                    <div class="flex-shrink-0 bg-white rounded-lg p-4 text-center w-56 shadow-md">
                        <div class="w-11 h-11 mx-auto mb-2 flex items-center justify-center">
                            <img src="https://img.icons8.com/?size=100&id=UCUKVPqeS1Cg&format=png&color=000000"
                                alt="Icon">
                        </div>
                        <p class="text-blue-600 font-semibold">Teman Bakat</p>
                    </div>
                    <!-- Service Card 5 -->
                    <div class="flex-shrink-0 bg-white rounded-lg p-4 text-center w-56 shadow-md">
                        <div class="w-11 h-11 mx-auto mb-2 flex items-center justify-center">
                            <img src="https://img.icons8.com/?size=100&id=34028&format=png&color=000000" alt="Icon">
                        </div>
                        <p class="text-blue-600 font-semibold">Teman Sultan</p>
                    </div>
                    <!-- Service Card 6 -->
                    <div class="flex-shrink-0 bg-white rounded-lg p-4 text-center w-56 shadow-md">
                        <div class="w-11 h-11 mx-auto mb-2 flex items-center justify-center">
                            <img src="https://img.icons8.com/?size=100&id=12131&format=png&color=000000" alt="Icon">
                        </div>
                        <p class="text-blue-600 font-semibold">Teman Ortu</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mx-auto px-4 py-10">
            <h1 class="text-3xl text-black font-bold text-center mb-6">Keunggulan Aplikasi Trust Meet</h1>
            <p class="text-lg text-center text-black mb-10">Layanan Teman Belajar Unggul dan Terlengkap, Bukan Hanya
                Memperhatikan Aspek
                Akademis Namun Juga Dari Aspek Pengembangan Diri Siswa</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div
                    class="bg-white rounded-lg shadow-md p-6 hover:bg-[#44b6ea] hover:shadow-lg hover:scale-105 transition duration-300 ease-in-out">
                    <div class="flex items-center mb-4">
                        <div class="w-16 h-16 flex items-center justify-center text-white">
                            <img src="https://img.icons8.com/?size=100&id=_g3uh79pino7&format=png&color=000000" alt="">
                        </div>
                    </div>
                    <h2 class="text-xl font-bold text-black mb-2">Modul Sesuai Kurikulum</h2>
                    <p class="text-gray-600 text-sm">Modul belajar yang sesuai dengan kurikulum terbaru dengan sajian
                        yang mudah dipahami dan lengkap untuk semua materi sekolah.</p>
                </div>

                <div
                    class="bg-white rounded-lg shadow-md p-6 hover:bg-[#44b6ea] hover:shadow-lg hover:scale-105 transition duration-300 ease-in-out">
                    <div class="flex items-center mb-4">
                        <div class="w-16 h-16 flex items-center justify-center text-white">
                            <img src="https://img.icons8.com/?size=100&id=mBzT9ySeO_go&format=png&color=000000" alt="">
                        </div>
                    </div>
                    <h2 class="text-xl font-bold text-black mb-2">Pengajar Berpengalaman</h2>
                    <p class="text-gray-600 text-sm">Pengajar yang berpengalaman dan profesional di bidangnya, siap
                        membantu siswa mencapai tujuan belajar mereka.</p>
                </div>

                <div
                    class="bg-white rounded-lg shadow-md p-6 hover:bg-[#44b6ea] hover:shadow-lg hover:scale-105 transition duration-300 ease-in-out">
                    <div class="flex items-center mb-4">
                        <div class="w-16 h-16 flex items-center justify-center text-white">
                            <img src="https://img.icons8.com/?size=100&id=110190&format=png&color=000000" alt="">
                        </div>
                    </div>
                    <h2 class="text-xl font-bold text-black mb-2">Fleksibilitas Waktu</h2>
                    <p class="text-gray-600 text-sm">Jadwal belajar yang fleksibel, memungkinkan siswa untuk belajar
                        kapan saja dan di mana saja sesuai kebutuhan mereka.</p>
                </div>
            </div>

        </div>
        <!-- Footer Section -->
        <footer class="bg-gray-50 text-gray-700 py-10">
            <div class="container mx-auto px-6 lg:px-20 grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Logo and Description -->
                <div>
                    <img src="images/nobgg.png" alt="" class="h-16 w-16 mb-4">
                    <p class="text-gray-500">Adalah BIMBEL yang menyediakan layanan personal, inovatif, dan fokus pada
                        kebutuhan
                        individu.</p>
                    <div class="flex space-x-3 mt-4">
                        <!-- Social media icons -->
                        <a href="#" class="w-8 h-8 flex items-center justify-center bg-blue-600 rounded">
                            <img src="https://img.icons8.com/?size=100&id=16713&format=png&color=000000" alt=""
                                class="h-5">
                        </a>
                        <a href="#" class="w-8 h-8 flex items-center justify-center bg-blue-600 rounded">
                            <img src="https://img.icons8.com/?size=100&id=21746&format=png&color=000000" alt=""
                                class="h-5">
                        </a>
                        <a href="#" class="w-8 h-8 flex items-center justify-center bg-blue-600 rounded">
                            <img src="https://img.icons8.com/?size=100&id=Xy10Jcu1L2Su&format=png&color=000000" alt=""
                                class="h-5">
                        </a>
                    </div>
                </div>

                <!-- Contact Info -->

                <div>
                    <section class="" id="kontak">
                        <h3 class="font-bold mb-2">Kontak</h3>
                        <ul class="space-y-1 text-gray-500">
                            <li><span>📍 Bojongsoang, Bandung Jawa Barat</span></li>
                            <li><span>📞 0819-1792-6078</span></li>
                            <li><span>✉️ admin@temanpelajar.com</span></li>
                            <li><span>🕒 Jam Kerja: 09.00 - 17.00 WIB</span></li>
                        </ul>
                </div>

                <!-- Partnership Info -->
                <div>
                    <h3 class="font-bold mb-2">Info </h3>
                    <p class="text-gray-500 mb-4">Teman Pelajar membuka kemitraan untuk mendirikan Cabang Bimbel Teman
                        Pelajar
                        di seluruh Kota/Kab. di Indonesia.</p>
                    <a href="#"
                        class="inline-block px-4 py-2 bg-yellow-500 text-white font-semibold rounded-lg hover:bg-yellow-600">Info
                        Kemitraan</a>
                </div>
            </div>
        </footer>


        <!-- Footer -->
        <footer class="bg-[#44b6ea] py-8 mt-1">
            <div class="container mx-auto text-center text-white">
                <p>&copy; 2024 Teman Belajar. All rights reserved.</p>
                <p>Contact us: info@temanbelajar.com</p>
            </div>
        </footer>
</body>

</html>
