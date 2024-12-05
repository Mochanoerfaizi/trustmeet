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
        <nav class="bg-[#44b6ea] py-4  top-0 w-full shadow-lg">
            <div class="container mx-auto flex justify-between items-center px-4">
                <div class="flex items-center space-x-4">
                    <img src="images/nobgg.png" alt="Trust Meet Logo" class="w-16 h-16">
                </div>
                <div class="hidden md:flex nav-links space-x-6">
                    <a href="/siswa"
                        class="nav-link active flex flex-col items-center border-b-2 border-white hover:text-blue-600 rounded-md text-white font-semibold"
                        aria-current="page">
                        <img src="https://img.icons8.com/?size=100&id=PmkXCJ6t2lBA&format=png&color=000000"
                            alt="Home Icon" class="w-8 h-8 mb-2">
                        <span>Home</span>
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
                        <img src="images/temann.png" alt="User Profile" class="w-10 h-10 ">
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
                <a href="/siswa"
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
                        <img src="images/temann.png" alt="User Profile" class="w-10 h-10">
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

        <!-- Main Content -->
        <div class="container mx-auto p-6">
            <!-- Section: Kelas Kamu -->
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-semibold text-gray-800">Kelas Kamu</h2>
                <!-- Button Buat Kelas -->
                <div class="relative">
                    <button
                        class="bg-orange-500 text-white px-4 py-2 rounded-lg hover:bg-orange-600 transition duration-300"
                        id="createClassButton">+ Gabung Kelas</button>
                    <!-- Dropdown Menu -->
                    <div id="dropdownMenu"
                        class="hidden absolute right-0 mt-2 w-60 bg-white border border-gray-300 rounded-lg shadow-lg">
                        <a class="flex items-center px-4 py-2 hover:bg-gray-100 transition duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-gray-600"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11V7a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2z"
                                    clip-rule="evenodd" />
                            </svg>
                            <button class=" text-black p-2 " onclick="openPopup()">Gabung Kelas</button>
                        </a>
                        <div id="popup"
                            class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center hidden">
                            <div class="bg-white rounded-lg shadow-lg p-6 transform transition-all scale-90 opacity-0"
                                id="popup-content">
                                <h2 class="text-black font-bold mb-4">Gabung Kelas Baru</h2>
                                <!-- Kontainer untuk label dan select yang sejajar -->
                                <div class="grid grid-cols-1  items-start">
                                    <!-- Label dan Select pertama -->
                                    <div class="flex flex-col">
                                        <label class="block mb-2 font-semibold text-gray-700">Masukkan kode kelas</label>
                                        <input type="text" placeholder="Contoh: A12BC4"
                                            class="w-full text-black mb-4 p-2 border border-gray-300 rounded">
                                        </select>
                                    </div>
                                </div>

                                <button class="mt-4 bg-blue-500 text-white p-2 w-20 rounded-md" onclick="closePopup()">
                                    Masuk
                                </button>
                                <button class="mt-4 bg-red-500 text-white p-2 rounded-md" onclick="closePopup()">
                                    Batal
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <script>
                // JavaScript untuk toggle dropdown menu
                const createClassButton = document.getElementById('createClassButton');
                const dropdownMenu = document.getElementById('dropdownMenu');

                createClassButton.addEventListener('click', () => {
                    dropdownMenu.classList.toggle('hidden');
                });

                // Menutup dropdown ketika klik di luar area
                window.addEventListener('click', (e) => {
                    if (!createClassButton.contains(e.target) && !dropdownMenu.contains(e.target)) {
                        dropdownMenu.classList.add('hidden');
                    }
                });

                function openPopup() {
                    const popup = document.getElementById('popup');
                    const popupContent = document.getElementById('popup-content');
                    popup.classList.remove('hidden');
                    setTimeout(() => {
                        popupContent.classList.add('scale-100', 'opacity-100');
                    }, 10);
                }

                function closePopup() {
                    const popup = document.getElementById('popup');
                    const popupContent = document.getElementById('popup-content');
                    popupContent.classList.remove('scale-100', 'opacity-100');
                    setTimeout(() => {
                        popup.classList.add('hidden');
                    }, 300);
                }
            </script>


            <!-- Search Bar -->
            <div class="mb-4">
                <input type="text" placeholder="Cari Kelas" class="w-full p-2 border text-black border-gray-300 rounded-md">
            </div>

            <!-- Kelas Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <!-- Kelas Card -->
                <div class="bg-white p-4 rounded-lg shadow-md"
                    style="background-image: url('images/2.jpeg'); background-size: cover; background-position: center;">
                    <div class="flex items-center space-x-4">
                        <div>
                            <h3 class="text-black font-semibold">12 IPA 1</h3>
                            <p class="text-sm text-gray-600">Bahasa Indonesia</p>
                        </div>
                    </div>
                    <div class="mt-4 flex justify-between items-center"><a href="/siswa/1" class="bg-blue-500 text-white px-3 py-1 rounded-lg">Lihat Kelas</a>

                        <button class="bg-red-500 text-white px-3 py-1 rounded-lg">Hapus</button>
                    </div>
                </div>
            </div>


            <!-- Add more classes here (replicate the above card) -->

        </div>

        <!-- Pagination -->
        <div class="flex justify-center mt-6">
            <button class="px-4 py-2 bg-gray-200 rounded-l-md hover:bg-gray-300">←</button>
            <button class="px-4 py-2 bg-teal-500 text-white">1</button>
            <button class="px-4 py-2 bg-gray-200 rounded-r-md hover:bg-gray-300">→</button>
        </div>
        </div>

    </body>

    </html>
