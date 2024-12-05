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
                    <a href="/home1" class="flex items-center p-2 rounded-md hover:bg-blue-600">
                        <i class="fas fa-tachometer-alt mr-2"></i> Home
                    </a>
                </li>
                <li>
                    <a href="#" class=" active flex items-center p-2 rounded-md hover:bg-blue-600 border-b-2 border-white">
                        <i class="fas fa-search mr-2"></i> Find your partner
                    </a>
                </li>
                <li>
                    <a href="/user/1" class="flex items-center p-2 rounded-md hover:bg-blue-600">
                        <i class="fas fa-envelope mr-2"></i> Menu Pembayaran
                    </a>
                </li>
                <li>
                    <a href="/siswa" class="flex items-center p-2 rounded-md hover:bg-blue-600">
                        <i class="fa fa-graduation-cap mr-2"></i> Gabung Kelas
                    </a>
                </li>
                <li>
                    <a href="/user/2" class="flex items-center p-2 rounded-md hover:bg-blue-600">
                        <i class="fas fa-user mr-2"></i> Profile
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
    <div class="w-full ml-auto p-14">
        <h1 class="text-2xl font-bold mb-4">Find Your Partner!</h1>
        <div class="flex items-center mb-8">
            <input class="w-full p-2 border border-gray-300 rounded-l-md"
                placeholder="Special expertise from the peer you want to find" type="text" />
            <button class="bg-blue-500 text-white p-2 rounded-r-md flex items-center justify-center w-10 h-10">
                <i class="fas fa-search"></i>
            </button>
        </div>
        <div class="box grid grid-cols-3 gap-4">
            <!-- Card 1 -->
            <div class="bg-white p-4 rounded-md shadow-md card">
                <img alt="Tutor Image" class="w-full h-48 object-cover rounded-md mb-4"
                    src="https://storage.googleapis.com/a1aa/image/XpzFTepm4hW6M67e48rOBwitseVFiinZ5EM9bYsAhepKIqAPB.jpg"
                    width="150" />
                <h2 class="text-lg font-bold mb-2">Learn math from scratch to advanced level</h2>
                <p class="text-gray-500 mb-2">10 years</p>
                <p class="text-blue-500 font-bold mb-2">IDR 500.000</p>
                <button class="bg-blue-500 text-white p-2 rounded-md" onclick="openPopup()">Details</button>
                <!-- Popup Modal -->
                <div id="popup" class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center hidden">
                    <div class="bg-white rounded-lg shadow-lg p-6 transform transition-all scale-90 opacity-0"
                        id="popup-content">
                        <!-- Kiri: Foto Tutor -->
                        <div class="flex items-left p-6">
                            <img src="{{ asset('images/temann.png') }}" alt="Tutor Photo" class="w-32 h-32 rounded-full">
                        </div>
                        <!-- Kanan: Detail Tutor -->
                        <div class="flex-1 p-6">
                            <h2 class="text-xl font-bold mb-4">Tutor Details</h2>
                            <p><strong>Name:</strong> John Doe</p>
                            <p><strong>Experience:</strong> 10 years</p>
                            <p><strong>Price:</strong> IDR 500.000</p>
                            <p><strong>Description:</strong> Teaching math from basic to advanced level.</p>
                            <button class="mt-4 bg-blue-500 text-white p-2 w-20 rounded-md" onclick="closePopup()">
                                Booking
                            </button>
                            <button class="mt-4 bg-red-500 text-white p-2 rounded-md" onclick="closePopup()">
                                Close
                            </button>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Card 2 -->
            <div class="bg-white p-4 rounded-md shadow-md card">
                <img alt="Tutor Image" class="w-full h-48 object-cover rounded-md mb-4"
                    src="https://storage.googleapis.com/a1aa/image/XpzFTepm4hW6M67e48rOBwitseVFiinZ5EM9bYsAhepKIqAPB.jpg"
                    width="150" />
                <h2 class="text-lg font-bold mb-2">Learn math from scratch to advanced level</h2>
                <p class="text-gray-500 mb-2">10 years</p>
                <p class="text-blue-500 font-bold mb-2">IDR 500.000</p>
                <button class="bg-blue-500 text-white p-2 rounded-md" onclick="openPopup()">Details</button>
            </div>
            <!-- Card 3 -->
            <div class="bg-white p-4 rounded-md shadow-md card">
                <img alt="Tutor Image" class="w-full h-48 object-cover rounded-md mb-4"
                    src="https://storage.googleapis.com/a1aa/image/XpzFTepm4hW6M67e48rOBwitseVFiinZ5EM9bYsAhepKIqAPB.jpg"
                    width="150" />
                <h2 class="text-lg font-bold mb-2">Learn math from scratch to advanced level</h2>
                <p class="text-gray-500 mb-2">10 years</p>
                <p class="text-blue-500 font-bold mb-2">IDR 500.000</p>
                <button class="bg-blue-500 text-white p-2 rounded-md" onclick="openPopup()">Details</button>
            </div>
            <!-- Card 4 -->
            <div class="bg-white p-4 rounded-md shadow-md card">
                <img alt="Tutor Image" class="w-full h-48 object-cover rounded-md mb-4"
                    src="https://storage.googleapis.com/a1aa/image/XpzFTepm4hW6M67e48rOBwitseVFiinZ5EM9bYsAhepKIqAPB.jpg"
                    width="150" />
                <h2 class="text-lg font-bold mb-2">Learn math from scratch to advanced level</h2>
                <p class="text-gray-500 mb-2">10 years</p>
                <p class="text-blue-500 font-bold mb-2">IDR 500.000</p>
                <button class="bg-blue-500 text-white p-2 rounded-md" onclick="openPopup()">Details</button>
            </div>
            <!-- Card 5 -->
            <div class="bg-white p-4 rounded-md shadow-md card">
                <img alt="Tutor Image" class="w-full h-48 object-cover rounded-md mb-4"
                    src="https://storage.googleapis.com/a1aa/image/XpzFTepm4hW6M67e48rOBwitseVFiinZ5EM9bYsAhepKIqAPB.jpg"
                    width="150" />
                <h2 class="text-lg font-bold mb-2">Learn math from scratch to advanced level</h2>
                <p class="text-gray-500 mb-2">10 years</p>
                <p class="text-blue-500 font-bold mb-2">IDR 500.000</p>
                <button class="bg-blue-500 text-white p-2 rounded-md" onclick="openPopup()">Details</button>
            </div>
            <!-- Card 6 -->
            <div class="bg-white p-4 rounded-md shadow-md card">
                <img alt="Tutor Image" class="w-full h-48 object-cover rounded-md mb-4"
                    src="https://storage.googleapis.com/a1aa/image/XpzFTepm4hW6M67e48rOBwitseVFiinZ5EM9bYsAhepKIqAPB.jpg"
                    width="150" />
                <h2 class="text-lg font-bold mb-2">Learn math from scratch to advanced level</h2>
                <p class="text-gray-500 mb-2">10 years</p>
                <p class="text-blue-500 font-bold mb-2">IDR 500.000</p>
                <button class="bg-blue-500 text-white p-2 rounded-md" onclick="openPopup()">Details</button>
            </div>
        </div>
    </div>

    <!-- CSS untuk animasi -->
    <style>
        .box {
            cursor: pointer;
            animation: verticalShake 1s ease-in-out;

            /* Animasi berjalan otomatis sekali */

        }

        @keyframes verticalShake {

            0%,
            100% {
                transform: translateY(0);
            }

            25% {
                transform: translateY(-5px);
            }

            50% {
                transform: translateY(5px);
            }

            75% {
                transform: translateY(-5px);
            }
        }
    </style>

    <script>
        const menuToggle = document.getElementById("menu-toggle");
        const sidebar = document.getElementById("sidebar");


        menuToggle.addEventListener("click", () => {
            sidebar.classList.toggle("-translate-x-full");
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
</body>

</html>
