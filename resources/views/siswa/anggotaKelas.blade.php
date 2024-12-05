<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trust Meet - Profile</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script src="https://cdn.tailwinds.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="https://rsms.me/inter/inter.css"> -->
    <link rel="stylesheet" href="css/style.css">
    <!-- <script src="https://cdn.tailwinds.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> -->
    <title>Trust Meet</title>
</head>

<body class="flex bg-blue-50 ">
    <!-- Toggle Button -->
    <button id="menu-toggle" class="fixed top-4 left-4 z-20 text-white bg-blue-500 p-3 rounded-md">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Sidebar -->
    <div id="sidebar"
        class="fixed top-0 left-0 w-64 h-full bg-[#40A8C5] text-white p-6 transform -translate-x-full transition-transform duration-300 z-10">
        <div class="flex items-center justify-center mb-8">
            <img alt="Trust Meet Logo" class="w-20 h-20" src="{{ asset('images/nobgg.png') }}" />
        </div>

        <nav>
            <ul class="space-y-4">
            <li>
                    <a href="/siswa" class="flex items-center p-2 rounded-md hover:bg-blue-600">
                        <img src="https://img.icons8.com/?size=100&id=dJTZMvvYZzxA&format=png&color=000000"
                            class="w-6 h-6" alt="Icon">
                        <span class="ml-2">Home</span>
                    </a>
                </li>
                <li>
                    <a href="/siswa/1" class="flex items-center p-2 rounded-md hover:bg-blue-600">
                        <img src="https://img.icons8.com/?size=100&id=IU3ZdsRY0p85&format=png&color=000000"
                            class="w-6 h-6" alt="Icon">
                        <span class="ml-2">TimeLine</span>
                    </a>
                </li>
                <li>
                    <a href="/siswa/2" class="flex items-center p-2 rounded-md hover:bg-blue-600">
                        <img src="https://img.icons8.com/?size=100&id=64656&format=png&color=000000" class="w-6 h-6"
                            alt="Icon">
                        <span class="ml-2">Materi</span>
                    </a>
                </li>
                <li>
                    <a href="/siswa/3" class="flex items-center p-2 rounded-md hover:bg-blue-600">
                        <img src="https://img.icons8.com/?size=100&id=118380&format=png&color=000000" class="w-6 h-6"
                            alt="Icon">
                        <span class="ml-2">Obrolan Kelas</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="active flex  items-center p-2 border-b-2 border-white hover:bg-blue-600 rounded-md text-white font-semibold">
                        <img src="https://img.icons8.com/?size=100&id=VzoCadwFiwaQ&format=png&color=000000"
                            class="w-6 h-6" alt="Icon">
                        <span class="ml-2">Anggota Kelas</span>
                    </a>
                </li>
            </ul>
        </nav>

        <button id="profile-menu-toggle" class="md:flex items-center mx-auto mt-24 focus:outline-none">
            <img src="{{ asset('images/temann.png') }}" alt="User Profile" class="w-16 h-16 ">
        </button>
        <!-- Dropdown Menu -->
        <div id="profile-menu" class="hidden absolute right-1 mt-0 w-48 bg-white rounded-lg shadow-lg py-2 z-50">
            <div class="flex items-center space-x-3 px-3">
                <img src="{{ asset('images/temann.png') }}" alt="User Profile" class="w-8 h-8 rounded-full">
                <p class="font-semibold text-gray-800">Andry Ganteng</p>
            </div>
            <a href="/logout" class="block px-4 py-2 text-gray-800 hover:bg-blue-100">Log Out</a>
        </div>
    </div>
    </div>

    <script>
        // JavaScript for toggling profile dropdown menu
        document.getElementById('profile-menu-toggle').addEventListener('click', function () {
            const profileMenu = document.getElementById('profile-menu');
            profileMenu.classList.toggle('hidden');
        });


    </script>
    <!-- Konten Utama -->
    <main class="flex-1 bg-gray-50 p-14">
        <!-- Header -->
        <header class="flex items-center justify-between border-b pb-4">
            <h2 class="text-2xl font-semibold">Kelas Anda</h2>
        </header>

        <!-- Konten -->
        <section class="mt-6">
            <!-- Daftar Guru -->
            <div class="bg-white p-6 rounded-lg shadow-md mb-6">
                <div class="flex items-center justify-between">
                    <h3 class="text-xl font-semibold text-gray-800">Daftar Guru</h3>
                </div>
                <div class="mt-4 flex items-center space-x-4">
                    <img src="https://img.icons8.com/ios-filled/50/000000/teacher.png" alt="Guru"
                        class="w-12 h-12 rounded-full">
                    <div>
                        <h4 class="text-lg font-semibold">Andry Satriya</h4>
                        <p class="text-sm text-blue-500">Pemilik Kelas</p>
                    </div>
                </div>
            </div>

            <!-- Daftar Siswa -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="flex items-center justify-between">
                    <h3 class="text-xl font-semibold text-gray-800">Daftar Siswa</h3>
                    <button class="bg-orange-500 text-white px-4 py-2 rounded-lg hover:bg-orange-600"
                        onclick="openPopup()">Undang Siswa</button>
                </div>
                <div class="mt-4 flex items-center space-x-4">
                    <img src="https://img.icons8.com/ios-filled/50/000000/student-male.png" alt="Siswa"
                        class="w-12 h-12 rounded-full">
                    <div>
                        <h4 class="text-lg font-semibold">Andry Adi Satriya</h4>
                        <button class="text-red-500 text-sm hover:underline">Tinggalkan Kelas</button>
                    </div>
                </div>

                <!-- Tombol Undang Siswa -->

                <!-- Popup: Undang Siswa -->
                <div id="popup"
                    class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden z-50">
                    <div class="bg-white rounded-lg shadow-lg max-w-md w-full p-6">
                        <!-- Popup Header -->
                        <div class="flex justify-between items-center">
                            <h2 class="text-xl font-semibold mb-4">Undang siswa ke kelas</h2>
                            <button class="text-gray-500 hover:text-gray-800" onclick="closePopup()">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>

                        <!-- Tab Menu -->
                        <div class="mt-4 border-b">
                            <ul class="flex">
                                <li class="mr-4">
                                    <button class="text-teal-500 border-b-2 border-teal-500 pb-2">Kode Kelas</button>
                                </li>
                                <li>
                                    <button class="text-gray-500 hover:text-teal-500">QR Code</button>
                                </li>
                            </ul>
                        </div>

                        <!-- Popup Content -->
                        <div class="mt-6">
                            <p class="text-gray-700">
                                Salin dan bagikan kode kelas ini ke siswa yang akan kamu undang masuk ke dalam kelas.
                            </p>
                            <button class="mt-2 text-teal-600 font-medium hover:underline">Instruksi undang
                                siswa</button>

                            <!-- Kode Kelas -->
                            <div class="mt-4 bg-gray-100 p-4 rounded-lg flex items-center justify-between">
                                <span class="text-lg font-semibold">AR5WXF4I</span>
                                <button
                                    class="text-white bg-orange-500 hover:bg-orange-600 px-4 py-2 rounded-lg">Salin</button>
                            </div>
                        </div>
                    </div>
                </div>

                <script>

const menuToggle = document.getElementById("menu-toggle");
        const sidebar = document.getElementById("sidebar");


        menuToggle.addEventListener("click", () => {
            sidebar.classList.toggle("-translate-x-full");
        });

                    // Fungsi untuk membuka popup
                    function openPopup() {
                        const popup = document.getElementById('popup');
                        popup.classList.remove('hidden');
                    }

                    // Fungsi untuk menutup popup
                    function closePopup() {
                        const popup = document.getElementById('popup');
                        popup.classList.add('hidden');
                    }
                </script>
</body>

</html>
