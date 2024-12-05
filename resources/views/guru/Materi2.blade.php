<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RuangKelas</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full">

    <!-- Navbar -->

    <body class="h-full text-white">
        <nav class="bg-[#44b6ea] py-4  top-0 w-full shadow-lg">
            <div class="container mx-auto flex justify-between items-center px-4">
                <div class="flex items-center space-x-4">
                    <img src="{{ asset('images/nobgg.png') }}" alt="Trust Meet Logo" class="w-16 h-16">
                </div>
                <div class="hidden md:flex nav-links space-x-6">
                    <a href="/guru"
                        class="nav-link active flex flex-col items-center border-b-2 border-white hover:text-blue-600 rounded-md text-white font-semibold"
                        aria-current="page">
                        <img src="https://img.icons8.com/?size=100&id=PmkXCJ6t2lBA&format=png&color=000000"
                            alt="Home Icon" class="w-8 h-8 mb-2">
                        <span>Kelas Anda</span>
                    </a>

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
                        <img src="{{ asset('images/temann.png') }}" alt="User Profile" class="w-10 h-10 ">
                    </button>
                    <!-- Dropdown Menu -->
                    <div id="profile-menu"
                        class="hidden absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg py-2 z-50">
                        <div class="flex items-center space-x-3 px-3">
                            <img src="{{ asset('images/temann.png') }}" alt="User Profile" class="w-8 h-8 rounded-full">
                            <p class="font-semibold text-gray-800">Andry Ganteng</p>
                        </div>
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
                <a href="/guru"
                    class="nav-link active flex flex-col items-center text-white font-semibold hover:text-blue-500"
                    aria-current="page">
                    <img src="https://img.icons8.com/?size=100&id=PmkXCJ6t2lBA&format=png&color=000000" alt="Home Icon"
                        class="w-8 h-8 mb-2">
                    <span>Home</span>
                </a>
                <div class="relative py-2">
                    <!-- Mobile Profile Menu -->
                    <button id="mobile-profile-menu-toggle"
                        class="flex items-center justify-center mx-auto focus:outline-none">
                        <img src="{{ asset('images/temann.png') }}" alt="User Profile" class="w-10 h-10">
                    </button>
                    <!-- Dropdown Menu -->
                    <div id="mobile-profile-menu"
                        class="hidden absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg py-2 z-50">
                        <div class="flex items-center space-x-3 px-3">
                            <img src="{{ asset('images/temann.png') }}" alt="User Profile" class="w-8 h-8 rounded-full">
                            <p class="font-semibold text-gray-800">Andry Ganteng</p>
                        </div>
                        <a href="/logout" class="block px-4 py-2 text-gray-800 hover:bg-blue-100">Log Out</a>
                    </div>
                </div>
            </div>

        </nav>

        <script>
            // JavaScript for toggling mobile menu visibility
            document.getElementById('menu-toggle').addEventListener('click', function () {
                const mobileMenu = document.getElementById('mobile-menu');
                mobileMenu.classList.toggle('hidden');
            });

            // Menampilkan dan menyembunyikan Mobile Profile Menu
            document.getElementById('mobile-profile-menu-toggle').addEventListener('click', function () {
                const mobileProfileMenu = document.getElementById('mobile-profile-menu');
                mobileProfileMenu.classList.toggle('hidden');
            });


        </script>
        </div>
        </nav>
        <div>

    <!-- Content -->
    <div class="max-w-7xl mx-auto p-6">

        <!-- Breadcrumb -->
        <div class="text-sm text-gray-600 mb-4">
            <a href="/guru/1" class="hover:underline">12 IPA 1</a> &gt;
            <a href="/guru/2" class="hover:underline">Materi</a> &gt;
            <span>asdaasdasdadsasasd</span>
        </div>

        <!-- Card -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <!-- Header -->
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-lg font-semibold">asdaasdasdadsasasd</h2>
                <span class="text-gray-500 text-sm">Dikirim 4 Dec 2024 12:46:39</span>
            </div>

            <!-- Informasi -->
            <div class="mb-4">
                <div class="flex items-center space-x-2 mb-2">
                    <img src="https://img.icons8.com/?size=100&id=119436&format=png&color=000000" alt="">
                    <span class="text-sm font-medium bg-gray-200 px-2 py-1 rounded">Tidak masuk Modul ajar</span>
                    <span class="text-sm bg-blue-100 text-blue-500 px-2 py-1 rounded">Materi</span>
                    <span class="text-sm bg-yellow-100 text-yellow-500 px-2 py-1 rounded">Biografi ⚡</span>
                </div>
            </div>

            <div class="bg-gray-100 rounded-lg p-4">
    <a href="/path/to/lampiran1.pdf" target="_blank" class="text-blue-500 hover:underline flex items-center space-x-2">
        <i class="fas fa-file-pdf"></i>
        <span>Lampiran 1: Biografi.pdf</span>
    </a>
</div>

            <!-- Komentar -->
            <div class="mt-6">
                <h3 class="font-semibold text-lg mb-2">Komentar (1)</h3>
                <div class="mb-4 rounded-lg shadow-lg ">
                    <div class="flex items-start space-x-4">
                        <div class="bg-pink-500 text-white rounded-full h-10 w-10 flex items-center justify-center">AA</div>
                        <div>
                            <div class="flex items-center space-x-2">
                                <h4 class="font-medium">Andry Adi Satriya</h4>
                                <span class="text-sm text-gray-500">4 Dec 2024 12:50:12</span>
                            </div>
                            <p class="text-gray-700">asdaasdasdads</p>
                            <button class="text-blue-500 hover:underline text-sm">Balas</button>
                        </div>
                    </div>
                </div>

                <!-- Tulis Komentar -->
                <div class="flex items-start space-x-4">
                    <div class="bg-pink-500 text-white rounded-full h-10 w-10 flex items-center justify-center">AA</div>
                    <div class="flex-grow">
                        <textarea placeholder="Tulis komentar"
                                  class="w-full border-gray-300 rounded px-4 py-2 focus:ring focus:ring-blue-100"></textarea>
                        <div class="text-right mt-2">
                            <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Kirim</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="mt-6 flex justify-center space-x-2">
                <button class="w-8 h-8 flex items-center justify-center rounded bg-gray-200 hover:bg-gray-300">❮</button>
                <button class="w-8 h-8 flex items-center justify-center rounded bg-blue-500 text-white">1</button>
                <button class="w-8 h-8 flex items-center justify-center rounded bg-gray-200 hover:bg-gray-300">❯</button>
            </div>
        </div>

    </div>

    <!-- Footer Help -->
    <div class="fixed bottom-4 left-4 bg-blue-100 text-blue-500 p-3 rounded-lg shadow-lg cursor-pointer">
        ? Bantuan
    </div>

</body>
</html>
