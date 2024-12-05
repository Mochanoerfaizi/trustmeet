<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Trust Meet</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
</head>

<body>
    <div class="min-h-screen bg-gray-50 p-4 md:p-8">
        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-lg md:text-xl font-semibold text-gray-800">Tambah Materi</h1>
            <button id="close-button" class="text-gray-600 hover:text-gray-800">
                <img src="https://img.icons8.com/ios-glyphs/30/000000/multiply.png" alt="Close">
            </button>
        </div>
        <p class="text-sm text-gray-600">Bahasa Indonesia - 12 IPA 1</p>

        <div class="mt-6 flex flex-col lg:flex-row gap-6">
            <!-- Sidebar Progres -->
            <div class="w-full lg:w-1/4 bg-white rounded-lg shadow-md p-4">
                <div class="space-y-4">
                    <!-- Step 1 -->
                    <div class="flex active items-center space-x-2 border-b-2 hover:bg-gray-200 border-teal-300 font-semibold">
                        <div class="w-8 h-8 bg-blue-500 text-white rounded-full flex items-center justify-center font-bold">1</div>
                        <div>
                            <h2 class="font-semibold text-gray-800">Detail Materi</h2>
                            <p class="text-sm text-gray-600">Isi judul materi, topik, dan deskripsi</p>
                        </div>
                    </div>
                    <script>
                         // Tambahkan event listener untuk setiap elemen
        menuLinks.forEach(link => {
            link.addEventListener('click', function (event) {
                // Hapus kelas 'active' dari semua elemen
                menuLinks.forEach(item => item.classList.remove('active'));

                // Tambahkan kelas 'active' ke elemen yang diklik
                this.classList.add('active');
            });
        });

                    </script>
                    <!-- Step 2 -->
                    <div class="flex items-center space-x-2 hover:bg-gray-200">
                        <div class="w-8 h-8 bg-gray-200 text-gray-500 rounded-full flex items-center justify-center font-bold">2</div>
                        <div>
                            <h2 class="font-semibold text-gray-800">Buat Materi</h2>
                            <p class="text-sm text-gray-600">Tambahkan materi dari berbagai sumber</p>
                        </div>
                    </div>
                    <!-- Step 3 -->
                    <div class="flex items-center space-x-2 hover:bg-gray-200">
                        <div class="w-8 h-8 bg-gray-200 text-gray-500 rounded-full flex items-center justify-center font-bold">3</div>
                        <div>
                            <h2 class="font-semibold text-gray-800">Bagikan Materi</h2>
                            <p class="text-sm text-gray-600">Pilih kelas dan jadwal pembagian materi</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Konten Utama -->
            <div class="flex-1 bg-white rounded-lg shadow-md p-4 md:p-6">
                <h2 class="text-md md:text-lg font-semibold text-gray-800 mb-4">Detail Materi</h2>
                <form class="space-y-4">
                    <!-- Judul -->
                    <div>
                        <label for="judul" class="block text-sm font-medium text-gray-600">Judul *</label>
                        <input type="text" id="judul" placeholder="Contoh: Latihan Sebelum UTS"
                            class="w-full mt-1 border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    </div>
                    <!-- Topik -->
                    <div>
                        <label for="topik" class="block text-sm font-medium text-gray-600">Topik *</label>
                        <select id="topik"
                            class="w-full mt-1 border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                            <option>Pilih Judul Bab</option>
                        </select>
                        <a href="#" class="text-sm text-blue-500 mt-1 block">+ Buat Judul Bab Baru</a>
                    </div>
                    <!-- Modul Ajar -->
                    <div>
                        <label for="modul" class="block text-sm font-medium text-gray-600">Modul Ajar</label>
                        <select id="modul"
                            class="w-full mt-1 border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                            <option>Tidak dimasukkan ke dalam modul ajar</option>
                        </select>
                    </div>
                    <!-- Deskripsi -->
                    <div>
                        <label for="deskripsi" class="block text-sm font-medium text-gray-600">Deskripsi</label>
                        <textarea id="deskripsi" placeholder="Jelaskan detail materi secara singkat dan jelas"
                            class="w-full mt-1 border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"></textarea>
                    </div>
                    <!-- Tombol -->
                    <div class="flex flex-col md:flex-row justify-between gap-4 mt-6">
                        <button type="submit"
                            class="w-full md:w-auto px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Lanjut
                            Tambah Materi</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Dialog Konfirmasi -->
        <div id="confirmation-dialog" class="fixed inset-0 bg-black bg-opacity-50 hidden flex justify-center items-center">
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                <p class="mb-4 text-gray-700">Apakah Anda yakin ingin keluar?</p>
                <p class="mb-4 text-gray-600 text-sm">Perubahan yang Anda lakukan tidak akan tersimpan.</p>
                <div class="flex justify-center gap-4">
                    <button id="cancel-button" class="px-4 py-2 bg-gray-200 rounded-lg text-gray-700">Tidak</button>
                    <button id="confirm-button" class="px-4 py-2 bg-orange-500 text-white rounded-lg">Ya</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        const closeButton = document.getElementById('close-button');
        const confirmationDialog = document.getElementById('confirmation-dialog');
        const cancelButton = document.getElementById('cancel-button');
        const confirmButton = document.getElementById('confirm-button');

        closeButton.addEventListener('click', () => {
            confirmationDialog.classList.remove('hidden');
        });

        cancelButton.addEventListener('click', () => {
            confirmationDialog.classList.add('hidden');
        });

        confirmButton.addEventListener('click', () => {
            // Arahkan ke menu awal
            window.location.href = "/guru/2"; // Ganti dengan URL atau file menu awal
        });
    </script>
    <div class="fixed bottom-8 left-8">
        <button
            class="flex items-center space-x-2 px-4 py-2 bg-blue-100 text-blue-500 rounded-full shadow-lg hover:bg-blue-200">
            <img src="https://img.icons8.com/ios-glyphs/24/000000/help.png" alt="Help">
            <span>Bantuan</span>
        </button>
    </div>
</body>

</html>
