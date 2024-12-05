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
    <style>
    @media (min-width: 1024px) {
      .custom-grid {
        display: grid;
        grid-template-areas:
          "delivery payment"
          "summary summary";
        grid-template-columns: 2fr 1fr;
        gap: 1.5rem;
      }
    }
    @media (max-width: 1023px) {
      .custom-grid {
        display: grid;
        grid-template-areas:
          "delivery"
          "payment"
          "summary";
        grid-template-columns: 1fr;
        gap: 1.5rem;
      }
    }
  </style>

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
                    <a href="/user" class="flex items-center p-2 rounded-md hover:bg-blue-600">
                        <i class="fas fa-search mr-2"></i> Find your partner
                    </a>
                </li>
                <li>
                    <a href="#" class="active flex items-center p-2 rounded-md hover:bg-blue-600 border-b-2 border-white">
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

<body class="bg-gray-100">
  <div class="container mx-auto p-6">
    <!-- Progress bar -->
    <ol class="flex items-center justify-center text-sm font-medium text-gray-500 mb-6">
      <li class="flex items-center">
        <span class="text-primary-700">Cart</span>
        <span class="mx-3">/</span>
      </li>
      <li class="flex items-center">
        <span class="text-primary-700">Checkout</span>
        <span class="mx-3">/</span>
      </li>
      <li>
        <span class="text-gray-500">Order summary</span>
      </li>
    </ol>

    <!-- Main Layout -->
    <div class="bg-white p-6 rounded-lg shadow-md custom-grid">
      <!-- Delivery Details -->
      <div class="space-y-6" style="grid-area: delivery;">
        <h2 class="text-xl font-semibold text-gray-900">Delivery Details</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
          <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Your name</label>
            <input type="text" id="name" class="mt-1 block w-full rounded-md border-gray-300 py-3 text-base shadow-md focus:ring-primary-500 focus:border-primary-500" placeholder="Bonnie Green">
          </div>
          <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Your email</label>
            <input type="email" id="email" class="mt-1 block w-full rounded-md border-gray-300 py-3 text-base shadow-md focus:ring-primary-500 focus:border-primary-500" placeholder="name@flowbite.com">
          </div>
          <div>
            <label for="city" class="block text-sm font-medium text-gray-700 mt-8">City</label>
            <select id="city" class="mt-1 block w-full rounded-md border-gray-300 py-3 text-base shadow-md focus:ring-primary-500 focus:border-primary-500">
              <option>San Francisco</option>
              <option>New York</option>
              <option>Los Angeles</option>
            </select>
          </div>
          <div>
            <label for="phone" class="block text-sm font-medium text-gray-700 mt-8">Phone Number</label>
            <input type="text" id="phone" class="mt-1 block w-full rounded-md border-gray-300 py-3 text-base shadow-md focus:ring-primary-500 focus:border-primary-500" placeholder="+1 123-456-7890">
          </div>
        </div>
      </div>

      <!-- Payment Options -->
      <div class="space-y-6" style="grid-area: payment;">
        <h2 class="text-xl font-semibold text-gray-900">Payment</h2>
        <div class="grid grid-cols-1 gap-4 md:grid-cols-1">
          <div class="rounded-lg border border-gray-200 bg-gray-50 p-4 dark:border-gray-700 dark:bg-gray-800">
            <div class="flex items-start">
              <input id="credit-card" type="radio" name="payment-method" class="h-4 w-4 text-primary-600 focus:ring-2 focus:ring-primary-600">
              <label for="credit-card" class="ml-3 text-sm font-medium text-gray-900">Credit Card</label>
            </div>
          </div>
          <div class="rounded-lg border border-gray-200 bg-gray-50 p-4 dark:border-gray-700 dark:bg-gray-800">
            <div class="flex items-start">
              <input id="pay-on-delivery" type="radio" name="payment-method" class="h-4 w-4 text-primary-600 focus:ring-2 focus:ring-primary-600">
              <label for="pay-on-delivery" class="ml-3 text-sm font-medium text-gray-900">Pay on Delivery</label>
            </div>
          </div>
          <div class="rounded-lg border border-gray-200 bg-gray-50 p-4 dark:border-gray-700 dark:bg-gray-800">
            <div class="flex items-start">
              <input id="paypal" type="radio" name="payment-method" class="h-4 w-4 text-primary-600 focus:ring-2 focus:ring-primary-600">
              <label for="paypal" class="ml-3 text-sm font-medium text-gray-900">PayPal</label>
            </div>
          </div>
        </div>
      </div>

      <!-- Summary -->
      <div style="grid-area: summary;">
        <h2 class="text-xl font-semibold text-gray-900">Summary</h2>
        <div class="space-y-2 mt-4">
          <div class="flex justify-between text-sm">
            <span>Subtotal</span>
            <span>$8,094.00</span>
          </div>
          <div class="flex justify-between text-sm">
            <span>Savings</span>
            <span class="text-green-500">0</span>
          </div>
          <div class="flex justify-between text-sm">
            <span>Store Pickup</span>
            <span>$99</span>
          </div>
          <div class="flex justify-between text-sm">
            <span>Tax</span>
            <span>$199</span>
          </div>
          <div class="flex justify-between font-semibold text-gray-900 text-lg mt-4">
            <span>Total</span>
            <span>$8,392.00</span>
          </div>
        </div>
        <button class="w-full bg-blue-600 text-white py-3 rounded-lg mt-6 hover:bg-blue-700">Proceed to Payment</button>
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
