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
                    <a href="#" class="active flex  items-center p-2 border-b-2 border-white hover:bg-blue-600 rounded-md text-white font-semibold">
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
                    <a href="/siswa/4" class="flex items-center p-2 rounded-md hover:bg-blue-600">
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

    <!-- Main Content -->
    <div class="flex-1 p-9">
        <!-- Tabs Section -->
        <div class="flex justify-between items-center bg-white rounded-lg shadow p-4">
            <div class="flex space-x-6">
                <button class="border-b-2 border-teal-500 text-teal-500 font-semibold">Daftar Materi</button>
            </div>
        </div>
        <!-- Filter Section -->
        <div class="mt-4">
            <select class="w-full bg-white border border-gray-300 rounded px-4 py-2">
                <option>Semua Materi</option>
            </select>
        </div>

        <!-- Materi Section -->
        <a href="/siswa/5" class="block mt-6 bg-white rounded-lg shadow p-6 hover:bg-gray-100 transition">
    <!-- Header -->
    <div class="flex items-start space-x-4">
        <div class="flex-shrink-0">
            <img src="https://img.icons8.com/?size=100&id=119436&format=png&color=000000" alt="Icon" class="w-10 h-10 rounded-full">
        </div>
        <div class="flex-1">
            <div class="flex justify-between items-center">
                <h3 class="text-base font-semibold">Materi Judul</h3>
            </div>
            <div class="text-sm text-gray-500 flex items-center space-x-2 mt-1">
                <span>Tidak masuk Modul ajar</span>
                <span>•</span>
                <span>Puisi</span>
                <i class="fas fa-star text-yellow-500"></i>
            </div>
            <p class="mt-2 text-sm text-gray-700">Deskripsi materi.</p>
        </div>
    </div>
    <!-- Footer -->
    <div class="flex justify-between items-center mt-4 text-gray-500 text-sm">
        <div class="flex items-center space-x-6">
            <button class="flex items-center space-x-1 hover:text-gray-700">
                <i class="fas fa-comments"></i> <span>0 Komentar</span>
            </button>
            <button class="flex items-center space-x-1 hover:text-gray-700">
                <i class="fas fa-paperclip"></i> <span>1 Lampiran</span>
            </button>
        </div>
        <button class="flex items-center space-x-1 hover:text-gray-700">
            <i class="fas fa-share"></i> <span>Bagikan</span>
        </button>
    </div>
</a>


        <!-- Pagination -->
        <div class="flex justify-center mt-6">
            <button class="px-4 py-2 bg-white border border-gray-300 rounded-l hover:bg-gray-200">❮</button>
            <button class="px-4 py-2 bg-teal-500 text-white">1</button>
            <button class="px-4 py-2 bg-white border border-gray-300 rounded-r hover:bg-gray-200">❯</button>
        </div>
    </div>

    <script>
        // Sidebar toggle
        document.getElementById('menu-toggle').addEventListener('click', function () {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('-translate-x-full');
        });
    </script>
</body>

</html>
