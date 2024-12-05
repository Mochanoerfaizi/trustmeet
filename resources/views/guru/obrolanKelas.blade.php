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
                    <a href="/guru" class="flex items-center p-2 rounded-md hover:bg-blue-600">
                        <img src="https://img.icons8.com/?size=100&id=dJTZMvvYZzxA&format=png&color=000000"
                            class="w-6 h-6" alt="Icon">
                        <span class="ml-2">Home</span>
                    </a>
                </li>
                <li>
                    <a href="/guru/1" class="flex items-center p-2 rounded-md hover:bg-blue-600">
                        <img src="https://img.icons8.com/?size=100&id=IU3ZdsRY0p85&format=png&color=000000"
                            class="w-6 h-6" alt="Icon">
                        <span class="ml-2">TimeLine</span>
                    </a>
                </li>
                <li>
                    <a href="/guru/2" class="flex items-center p-2 rounded-md hover:bg-blue-600">
                        <img src="https://img.icons8.com/?size=100&id=64656&format=png&color=000000" class="w-6 h-6"
                            alt="Icon">
                        <span class="ml-2">Materi</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="active flex  items-center p-2 border-b-2 border-white hover:bg-blue-600 rounded-md text-white font-semibold">
                        <img src="https://img.icons8.com/?size=100&id=118380&format=png&color=000000" class="w-6 h-6"
                            alt="Icon">
                        <span class="ml-2">Obrolan Kelas</span>
                    </a>
                </li>
                <li>
                    <a href="/guru/4" class="flex items-center p-2 rounded-md hover:bg-blue-600">
                        <img src="https://img.icons8.com/?size=100&id=VzoCadwFiwaQ&format=png&color=000000"
                            class="w-6 h-6" alt="Icon">
                        <span class="ml-2">Anggota Kelas</span>
                    </a>
                </li>
                <li>
                    <a href="/guru/5" class="flex items-center p-2 rounded-md hover:bg-blue-600">
                        <img src="https://img.icons8.com/?size=100&id=bpb1NWfrmmHv&format=png&color=000000"
                            class="w-6 h-6" alt="Icon">
                        <span class="ml-2">Daftar Pesanan</span>
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
    <div class="w-screen p-10">
        <!-- Header -->
        <div class="bg-blue-600 text-white p-4 flex items-center justify-between">
            <h1 class="text-xl font-semibold">Obrolan</h1>
        </div>

        <!-- Chat Container -->
        <div class="flex-1 overflow-y-auto p-4 space-y-4">
            <!-- Date -->
            <div class="text-center text-gray-500 text-sm">HARI INI</div>

            <!-- User Message -->
            <div class="flex justify-end">
                <div class="bg-yellow-200 text-gray-800 px-4 py-2 rounded-lg max-w-xs">
                    <p>halo</p>
                    <span class="text-xs text-gray-500 block mt-1 text-right">20:56</span>
                </div>
            </div>

            <!-- Other User Message -->
            <div class="flex items-start space-x-2">
                <div class="bg-pink-500 text-white w-8 h-8 rounded-full flex items-center justify-center font-bold">
                    AA
                </div>
                <div>
                    <p class="text-sm font-semibold text-pink-500">Andry Adi Satriya</p>
                    <div class="bg-white text-gray-800 px-4 py-2 rounded-lg max-w-xs shadow">
                        <p>halo</p>
                        <span class="text-xs text-gray-500 block mt-1 text-right">20:59</span>
                    </div>
                </div>
            </div>

            <!-- File Message -->
            <div class="flex justify-end">
                <div class="bg-yellow-200 text-gray-800 px-4 py-2 rounded-lg max-w-xs">
                    <p class="font-semibold">asasd</p>
                    <span class="text-xs text-gray-500">Materi</span>
                    <span class="text-xs text-gray-500 block mt-1 text-right">21:28</span>
                </div>
            </div>

            <div class="flex items-start space-x-2">
                <div class="bg-pink-500 text-white w-8 h-8 rounded-full flex items-center justify-center font-bold">
                    AA
                </div>
                <div>
                    <p class="text-sm font-semibold text-pink-500">Andry Adi Satriya</p>
                    <div class="bg-white text-gray-800 px-4 py-2 rounded-lg max-w-xs shadow">
                        <p>halo</p>
                        <span class="text-xs text-gray-500 block mt-1 text-right">20:59</span>
                    </div>
                </div>
            </div>

            <div class="flex justify-end">
                <div class="bg-yellow-200 text-gray-800 px-4 py-2 rounded-lg max-w-xs">
                    <p class="font-semibold">asasd</p>
                    <span class="text-xs text-gray-500">Materi</span>
                    <span class="text-xs text-gray-500 block mt-1 text-right">21:28</span>
                </div>

            </div>

        </div>

        <!-- Input Chat -->
        <div class="bg-white p-4 flex items-center space-x-2">
            <input type="text" placeholder="Enter message" class="flex-1 border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring focus:ring-blue-300">
            <button class="bg-blue-500 text-white px-4 py-2 rounded-lg">Kirim</button>
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
