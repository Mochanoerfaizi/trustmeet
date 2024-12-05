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
                    <a href="guru/3" class="flex items-center p-2 rounded-md hover:bg-blue-600">
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
                    <a href="#" class="active flex  items-center p-2 border-b-2 border-white hover:bg-blue-600 rounded-md text-white font-semibold">
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
<div class="flex-1 p-4 md:p-9">
    <div class="bg-white shadow rounded p-4">
        <h1 class="text-2xl font-bold mb-4">Data Member</h1>
        <button class="bg-green-500 text-white px-4 py-2 rounded mb-4">Download</button>

        <!-- Wrapper to make table scrollable horizontally -->
        <div class="overflow-x-auto">
            <table class="min-w-full border-collapse border border-gray-300 text-left">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="px-4 py-2 border border-gray-300">No</th>
                        <th class="px-4 py-2 border border-gray-300">Nama Customer</th>
                        <th class="px-4 py-2 border border-gray-300">Tgl Pesan</th>
                        <th class="px-4 py-2 border border-gray-300">Nomer Customer</th>
                        <th class="px-4 py-2 border border-gray-300">Total</th>
                        <th class="px-4 py-2 border border-gray-300">Bukti</th>
                        <th class="px-4 py-2 border border-gray-300">Konfir</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="px-4 py-2 border border-gray-300 text-center">1</td>
                        <td class="px-4 py-2 border border-gray-300">andry</td>
                        <td class="px-4 py-2 border border-gray-300">2024-11-22</td>
                        <td class="px-4 py-2 border border-gray-300">0819-1792-6078</td>
                        <td class="px-4 py-2 border border-gray-300 text-right">480000</td>
                        <td class="px-4 py-2 border border-gray-300">
                            <img src="https://via.placeholder.com/50" alt="Bukti"
                                class="w-12 h-12 object-cover mx-auto" />
                        </td>
                        <td class="px-4 py-2 border border-gray-300 text-center">
                            <span class="block mb-2">Sudah Bayar</span>
                            <button class="bg-green-500 text-white px-2 py-1 rounded mb-1">Konfir</button>
                            <button class="bg-red-500 text-white px-2 py-1 rounded">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="flex justify-center mt-4">
            <button class="bg-blue-600 text-white px-4 py-2 rounded">1</button>
        </div>
    </div>
</div>
<script>
     const menuToggle = document.getElementById("menu-toggle");
        const sidebar = document.getElementById("sidebar");


        menuToggle.addEventListener("click", () => {
            sidebar.classList.toggle("-translate-x-full");
        });

</script>

</body>
</html>
