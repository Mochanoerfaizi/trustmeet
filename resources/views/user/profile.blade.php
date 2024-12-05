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
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.tailwinds.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> -->
    <title>Trust Meet</title>
</head>

<body class="flex bg-blue-50 h-screen">
    <!-- Toggle Button -->
    <button id="menu-toggle" class="fixed top-4 left-4 z-20 text-white bg-blue-500 p-2 rounded-md">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Sidebar -->
    <div id="sidebar"
        class="fixed top-0 left-0 w-64 h-full bg-[#40A8C5] text-white p-6 transform -translate-x-full transition-transform duration-300 z-10 lg:translate-x-0 lg:static lg:block">
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
                    <a href="#" class="active flex  items-center p-2 border-b-2 border-white hover:bg-blue-600 rounded-md text-white font-semibold">
                        <img src="https://img.icons8.com/?size=100&id=64656&format=png&color=000000" class="w-6 h-6"
                            alt="Icon">
                        <span class="ml-2">Materi</span>
                    </a>
                </li>
                <li>
                    <a href="/guru/3" class="flex items-center p-2 rounded-md hover:bg-blue-600">
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
            </ul>
        </nav>

        <button id="profile-menu-toggle" class="md:flex items-center mx-auto mt-24 focus:outline-none">
            <img src="{{ asset('images/temann.png') }}" alt="User Profile" class="w-16 h-16 ">
        </button>
        <!-- Dropdown Menu -->
        <div id="profile-menu" class="hidden absolute right-1 mt-0 w-48 bg-white rounded-lg shadow-lg py-0 z-50">
            <div class="flex items-center space-x-3 px-3">
                <img src="{{ asset('images/temann.png') }}" alt="User Profile" class="w-8 h-8 rounded-full">
                <p class="font-semibold text-gray-800">Andry Ganteng</p>
            </div>
            <a href="/user/2" class="block px-4 py-2 text-gray-800 hover:bg-blue-100">Edit Profile</a>
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
    <div class="flex-auto p-6">


        <!-- Content -->
        <h1 class="text-2xl font-bold text-center  text-black mb-6">Profile Picture</h1>
        <div class="max-w-lg mx-auto">
    <img class="w-16 h-16 mb-4 mx-auto" src="{{ asset('images/temann.png') }}" alt="Trust Meet Logo">
</div>

            <input type="text" placeholder="Profile name" class="w-full mb-4 p-2 border border-gray-300 rounded">
            <div class="flex flex-wrap gap-2 mb-4">
                <button class="bg-teal-500 text-white px-4 py-2 rounded hover:bg-teal-600">Change Picture</button>
                <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Delete Picture</button>
            </div>
            <input type="text" placeholder="Location" class="w-full mb-4 p-2 border border-gray-300 rounded">
            <div class="flex flex-wrap gap-4 mb-4">
                <div class="flex-1">
                    <label class="block mb-2">Date of Birth</label>
                    <input type="date" class="w-full p-2 border border-gray-300 rounded">
                </div>
                <div class="flex-1">
                    <label class="block mb-2">Gender</label>
                    <select class="w-full p-2 border border-gray-300 rounded">
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>
            </div>
            <input type="text" placeholder="Interests" class="w-full mb-4 p-2 border border-gray-300 rounded">
            <textarea placeholder="Bio" class="w-full p-2 border border-gray-300 rounded"></textarea>
            <div class="mt-4">
            <button class="bg-teal-500 text-white px-4 py-2 rounded hover:bg-teal-600">Confirm</button>
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
