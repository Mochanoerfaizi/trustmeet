<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Tambah Materi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
</head>

<body>
    <div class="min-h-screen bg-gray-50 p-4 sm:p-8">
        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-xl font-semibold text-gray-800">Tambah Materi</h1>
            <button id="close-button" class="text-gray-600 hover:text-gray-800">
                <img src="https://img.icons8.com/ios-glyphs/30/000000/multiply.png" alt="Close">
            </button>
        </div>
        <p class="text-sm text-gray-600">Bahasa Indonesia - 12 IPA 1</p>

        <div class="mt-6 grid grid-cols-1 lg:grid-cols-4 gap-6">
            <!-- Sidebar Progres -->
            <div class="bg-white rounded-lg shadow-md p-4 lg:col-span-1">
                <div class="space-y-4">
                    <!-- Step 1 -->
                    <div class="flex items-center space-x-2 hover:bg-gray-200">
                        <div
                            class="w-8 h-8 bg-blue-500 text-white rounded-full flex items-center justify-center font-bold">
                            1</div>
                        <div>
                            <h2 class="font-semibold text-gray-800 ">Detail Materi</h2>
                            <p class="text-sm text-gray-600">Isi judul materi, topik, dan deskripsi</p>
                        </div>
                    </div>
                    <!-- Step 2 -->
                    <div class="flex active items-center space-x-2 border-b-2 hover:bg-gray-200 border-teal-300 font-semibold">
                        <div
                            class="w-8 h-8 bg-blue-500 text-white rounded-full flex items-center justify-center font-bold">
                            2</div>
                        <div>
                            <h2 class="font-semibold text-gray-800">Buat Materi</h2>
                            <p class="text-sm text-gray-600">Tambahkan materi dari berbagai sumber</p>
                        </div>
                    </div>
                    <!-- Step 3 -->
                    <div class="flex items-center space-x-2 hover:bg-gray-200">
                        <div
                            class="w-8 h-8 bg-gray-200 text-gray-500 rounded-full flex items-center justify-center font-bold">
                            3</div>
                        <div>
                            <h2 class="font-semibold text-gray-800">Bagikan Materi</h2>
                            <p class="text-sm text-gray-600">Pilih kelas dan jadwal pembagian materi</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="bg-white rounded-lg shadow-md p-6 lg:col-span-3">
                <h2 class="text-lg font-semibold mb-4">Buat Materi</h2>
                <div class="bg-gray-100 p-4 rounded-lg flex items-center gap-4">
                    <div class="bg-gray-200 p-4 rounded-lg">
                        <img src="https://img.icons8.com/?size=100&id=119436&format=png&color=000000" alt="Icon"
                            class="w-12 h-12">
                    </div>
                    <div>
                        <p class="text-gray-600">Belum ada materi</p>
                        <p class="text-sm text-gray-500">Tekan "Tambah Materi" untuk menambahkan materi belajar</p>
                    </div>
                </div>
                <div class="flex flex-wrap gap-4 mt-4">
                    <button id="tambah-materi-btn"
                        class="bg-orange-500 hover:bg-orange-400 text-white px-4 py-2 rounded-lg flex items-center gap-2">
                        <span class="text-xl">+</span> Tambah Materi
                    </button>
                    <button
                        class="border border-orange-500 text-orange-500 px-4 py-2 rounded-lg flex items-center gap-2 hover:bg-orange-200">
                        <a href="https://sites.google.com/ruangguru.com/ruangkelas-pptpembelajaran/materi-sd/kelas-6-bahasa-indonesia"
                            target="_blank" class=" flex items-center gap-2">
                            <span class="text-xl">🔍</span> Cari PPT Pembelajaran
                        </a>

                    </button>
                </div>
                <div class="flex flex-wrap justify-between mt-6 gap-4">
                    <p class=" px-4 py-2"></p>
                    <div class="flex gap-4 px-4 py-2">
                        <a href="/guru/6"
                            class="border border-orange-500 text-orange-500 px-4 py-2 rounded-lg hover:bg-orange-200">Kembali
                            ke Detail Materi</a>
                        <button class="bg-gray-200 text-gray-500 px-4 py-2 rounded-lg">Lanjut Bagikan Materi</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Dialog Konfirmasi -->
    <div id="confirmation-dialog" class="fixed inset-0 bg-black bg-opacity-50 hidden flex justify-center items-center">
        <div class="bg-white p-6 rounded-lg shadow-lg text-center">
            <p class="mb-4 text-gray-700">Apakah Anda yakin akan keluar?</p>
            <p class="mb-4 text-gray-700">Perubahan di halaman ini tidak akan tersimpan.</p>
            <div class="flex justify-center gap-4">
                <button id="cancel-button" class="px-4 py-2 bg-gray-200 hover:bg-gray-300 rounded-lg text-gray-700">Tidak</button>
                <button id="confirm-button" class="px-4 py-2 bg-orange-500 hover:bg-orange-400 text-white rounded-lg">Ya</button>
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

    <!-- Popup Dialog -->
    <div id="popup-dialog" class="fixed inset-0 bg-black bg-opacity-50 hidden flex justify-center items-center">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-lg font-semibold text-gray-800">Cari Materi Belajar:</h2>
                <button id="close-popup-btn"
                    class="text-gray-500 border border-orange-500 hover:bg-orange-200 px-4 py-2 rounded-lg">Batal</button>
            </div>
            <div class="space-y-4">

                <!-- Tombol "Unggah Materi" -->
                <button id="unggah-materi-btn" class="w-full flex items-center gap-4 px-4 py-2 bg-blue-100 hover:bg-blue-200 rounded-lg">
                    <img src="https://img.icons8.com/?size=100&id=113794&format=png&color=000000" alt="Icon"
                        class="w-10 h-10">
                    <div>
                        <p class="text-blue-500 font-semibold">Unggah Materi</p>
                        <p class="text-gray-500 text-sm">Tambahkan materi belajar yang Anda buat</p>
                    </div>
                </button>


            </div>
        </div>
    </div>

    <!-- Popup Dialog Unggah Materi -->
    <div id="unggah-materi-dialog" class="fixed inset-0 bg-black bg-opacity-50 hidden flex justify-center items-center">
        <div class="bg-white p-6 rounded-lg shadow-lg w-auto">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-lg font-semibold text-gray-800">Unggah Materi</h2>
                <button id="close-unggah-materi-btn" class="text-gray-500 hover:text-gray-700">
                    ✖
                </button>
            </div>
            <div class="space-y-4">
                <div class="bg-gray-100 p-3 rounded-lg text-center">

                        <!-- Tombol Tambah Materi -->
                        <label for="file-upload"
                            class="bg-orange-500 w-full justify-center text-white px-4 py-2 rounded-lg hover:bg-orange-400 flex items-center gap-2 cursor-pointer">
                            <span class="text-xl">+</span> Unggah Materi
                        </label>
                        <input id="file-upload" type="file" class="hidden" />

                    <ul class="text-sm text-gray-600 mt-2">
                        <li>• Maksimal file 10MB dengan format .jpg, .jpeg, .png.</li>
                        <li>• Maksimal file 100MB dengan format .doc, .ppt, .xls, .mp4.</li>
                    </ul>
                </div>
                <div>
                    <label for="judul-file" class="block text-gray-600 font-semibold">Judul File *</label>
                    <input id="judul-file" type="text" placeholder="Contoh: Referensi Materi Belajar"
                        class="w-full border-gray-300 shadow-sm mt-2">
                </div>
                <div class="flex justify-end gap-4">
                    <button id="batal-btn" class="bg-gray-200 hover:bg-gray-300 text-gray-500 px-4 py-2 rounded-lg">Batal</button>
                    <button class="bg-orange-500 hover:bg-orange-400 text-white px-4 py-2 rounded-lg">Tambah File</button>
                </div>
            </div>
        </div>
    </div>


    <script>

        // Ambil elemen dialog utama
        const popupDialog = document.getElementById('popup-dialog');
        const closePopupBtn = document.getElementById('close-popup-btn');

        // Ambil elemen tombol unggah materi dan dialog unggah materi
        const unggahMateriBtn = document.getElementById('unggah-materi-btn');
        const unggahMateriDialog = document.getElementById('unggah-materi-dialog');
        const closeUnggahMateriBtn = document.getElementById('close-unggah-materi-btn');

        // Buka dialog utama
        document.getElementById('tambah-materi-btn').addEventListener('click', () => {
            popupDialog.classList.remove('hidden');
        });

        // Tutup dialog utama
        closePopupBtn.addEventListener('click', () => {
            popupDialog.classList.add('hidden');
        });

        // Buka dialog "Unggah Materi" dari dialog utama
        unggahMateriBtn.addEventListener('click', () => {
            popupDialog.classList.add('hidden'); // Tutup dialog utama
            unggahMateriDialog.classList.remove('hidden'); // Buka dialog unggah materi
        });

        // Tutup dialog "Unggah Materi"
        closeUnggahMateriBtn.addEventListener('click', () => {
            unggahMateriDialog.classList.add('hidden');
        });

        // Tutup dialog jika klik di luar area dialog
        window.addEventListener('click', (e) => {
            if (e.target === popupDialog) {
                popupDialog.classList.add('hidden');
            } else if (e.target === unggahMateriDialog) {
                unggahMateriDialog.classList.add('hidden');
            }
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
