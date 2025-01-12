<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trust Meet - Profile</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="https://rsms.me/inter/inter.css"> -->
    <link rel="stylesheet" href="css/style.css">
    <!-- <script src="https://cdn.tailwindcss.com"></script>
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
                    <a href="#"
                        class=" active flex items-center p-2 rounded-md hover:bg-blue-600 border-b-2 border-white">
                        <i class="fas fa-search mr-2"></i> Find your partner
                    </a>
                </li>
                <li>
                    <a href="user/pembayaran" class="flex items-center p-2 rounded-md hover:bg-blue-600">
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
        document.getElementById('profile-menu-toggle').addEventListener('click', function() {
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
            @foreach ($materi as $tampilMateri)
                <div class="bg-white p-4 rounded-md shadow-md card">
                    <img alt="Tutor Image" class="w-full h-48 object-cover rounded-md mb-4"
                        src="{{ asset('storage/public/gambar/' . $tampilMateri->gambar) }}" width="150" />
                    <h2 class="text-lg font-bold mb-2">{{ $tampilMateri->judul }}</h2>
                    <p class="text-gray-500 mb-2">Tutor: {{ $tampilMateri->user->name }}</p>
                    <p class="text-gray-500 mb-2">{{ $tampilMateri->deskripsi }}</p>
                    <p class="text-blue-500 font-bold mb-2">{{ $tampilMateri->harga }}</p>
                    <button class="bg-blue-500 text-white p-2 rounded-md"
                        onclick="openPopup('{{ $tampilMateri->id }}')">Details</button>

                    <!-- Popup Modal -->
                    <div id="popup-{{ $tampilMateri->id }}"
                        class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center hidden">
                        <div class="bg-white min-w-[400px] rounded-lg shadow-lg p-6 transform transition-all scale-90 opacity-0"
                            id="popup-content-{{ $tampilMateri->id }}">
                            <div class="flex items-left p-6">
                                <img src="{{ asset('images/temann.png') }}" alt="Tutor Photo"
                                    class="w-32 h-32 rounded-full">
                            </div>
                            <div class="flex-1 p-6">
                                <h2 class="text-xl font-bold mb-4">Tutor Details</h2>
                                <p><strong>Name:</strong> {{ $tampilMateri->user->name }}</p>
                                <p><strong>Experience:</strong> 10 years</p>
                                <p><strong>Price:</strong> {{ $tampilMateri->harga }}</p>
                                <p><strong>Description:</strong> {{ $tampilMateri->deskripsi }}</p>

                                <form id="form-action-{{ $tampilMateri->id }}"
                                    action="{{ route('userBokingMateri', ['id' => $tampilMateri->id]) }}"
                                    method="POST">
                                    @csrf
                                </form>

                                <button type="button" onclick="boking('{{ $tampilMateri->id }}')"
                                    class="mt-4 bg-blue-500 text-white p-2 w-20 rounded-md">Booking</button>
                                <button class="mt-4 bg-red-500 text-white p-2 rounded-md"
                                    onclick="closePopup('{{ $tampilMateri->id }}')">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

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
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        const menuToggle = document.getElementById("menu-toggle");
        const sidebar = document.getElementById("sidebar");


        menuToggle.addEventListener("click", () => {
            sidebar.classList.toggle("-translate-x-full");
        });

        // function openPopup() {
        //     const popup = document.getElementById('popup');
        //     const popupContent = document.getElementById('popup-content');
        //     popup.classList.remove('hidden');
        //     setTimeout(() => {
        //         popupContent.classList.add('scale-100', 'opacity-100');
        //     }, 10);
        // }

        // function closePopup() {
        //     const popup = document.getElementById('popup');
        //     const popupContent = document.getElementById('popup-content');
        //     popupContent.classList.remove('scale-100', 'opacity-100');
        //     setTimeout(() => {
        //         popup.classList.add('hidden');
        //     }, 300);
        // }

        $("#order").click(function() {
            $.ajax({
                url: "{{ route('orders.store') }}",
                method: "POST",
                data: {
                    katalog_id: 2,
                    price: 500000,
                    _token: $('meta[name="csrf-token"]').attr('content'),
                },

                success: function(response) {
                    alert('order sukses');
                },
                error: function(xhr) {
                    // Tangani validasi atau error lainnya
                    let errors = xhr.responseJSON.errors;
                    let message = 'Error: ';
                    for (let key in errors) {
                        message += errors[key][0] + ' ';
                    }
                    $('#response-message').text(message).css('color', 'red');
                }
            });
        });
    </script>
    <style>
        .hidden {
            display: none;
        }
        .visible {
            display: flex;
        }
        .scale-100 {
            transform: scale(1);
            opacity: 1;
        }
        </style>
        
        <script>
            function openPopup(id) {
                const popup = document.getElementById(`popup-${id}`);
                const popupContent = document.getElementById(`popup-content-${id}`);
                popup.classList.remove('hidden');
                popup.classList.add('visible');
                setTimeout(() => {
                    popupContent.classList.add('scale-100', 'opacity-100');
                }, 10);
            }
        
            function closePopup(id) {
                const popup = document.getElementById(`popup-${id}`);
                const popupContent = document.getElementById(`popup-content-${id}`);
                popupContent.classList.remove('scale-100', 'opacity-100');
                setTimeout(() => {
                    popup.classList.remove('visible');
                    popup.classList.add('hidden');
                }, 300);
            }
        
            function boking(id) {
                // alert(`Booking ID: ${id}`);
                const form = document.getElementById(`form-action-${id}`);
                form.submit();
            }
        </script>
</body>

</html>
