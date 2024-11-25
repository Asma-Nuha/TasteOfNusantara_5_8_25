<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Taste of Nusantara</title>
</head>
<body class="bg-[#fdf6e4] text-gray-800 font-sans">

    <!-- Header -->
    <header class="flex justify-between items-center px-8 py-4 bg-[#4e351f] shadow-md">
        <a href="/.html">
            <button class="px-4 py-2 bg-[#D3C2B5] text-[#4e351f] rounded hover:bg-[#4a3228]">Beranda</button>
        </a>
        <h1 class="text-2xl font-bold italic text-[#fdf6e4]">TasteOfNusantara</h1>
        <button class="px-4 py-2 bg-[#D3C2B5] text-[#4e351f] rounded hover:bg-[#4a3228]">Kuliner Nusantara</button>
    </header>

    <!-- Welcome Section -->
    <section class="text-center py-8 pt-12">
        <h2 class="text-3xl font-bold text-[#8C6450]">KULINER NUSANTARA</h2>
    </section>

    <!-- Food Section -->
    <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 px-8 py-8">
        <!-- Gado Gado -->
        <div class="bg-[#4e351f] rounded-lg shadow-md p-4 flex flex-col items-center">
            <h3 class="text-xl font-semibold mb-2 text-[#fdf6e4]">GADO GADO</h3>
            <img src="assets/images/gadogado.png" alt="Gado Gado" class="rounded-full w-32 h-32 object-cover mb-4">
            <p class="text-[#fdf6e4] mb-4 text-xl">Betawi</p>
            <button 
            class="mt-8 px-6 py-3 bg-[#D3C2B5] text-[#8C6450] font-semibold rounded-lg"
            onclick="location.href='{{ route('gado') }}'">
            Baca Selengkapnya
            </button>
        </div>

        <!-- Bakso -->
        <div class="bg-[#D3C2B5] rounded-lg shadow-md p-4 flex flex-col items-center">
            <h3 class="text-xl font-semibold mb-2">BAKSO</h3>
            <img src="assets/images/bakso.png" alt="Bakso" class="rounded-full w-32 h-32 object-cover mb-4">
            <p class="text-[#5C4033] mb-4 text-xl">Jawa Timur</p>
            <button 
            class="mt-8 px-6 py-3 bg-[#4e351f] text-white font-semibold rounded-lg"
            onclick="location.href='{{ route('bakso') }}'">
            Baca Selengkapnya
            </button>
        </div>

        <!-- Soto Banjar -->
        <div class="bg-[#4e351f] rounded-lg shadow-md p-4 flex flex-col items-center">
            <h3 class="text-xl font-semibold mb-2 text-[#fdf6e4]">SOTO BANJAR</h3>
            <img src="assets/images/sotobanjar.png" alt="Soto Banjar" class="rounded-full w-32 h-32 object-cover mb-4">
            <p class="text-[#fdf6e4] mb-4 text-xl">Kalimantan Selatan</p>
            <button 
            class="mt-8 px-6 py-3 bg-[#D3C2B5] text-[#8C6450] font-semibold rounded-lg"
            onclick="location.href='{{ route('sotobanjar') }}'">
            Baca Selengkapnya
            </button>
        </div>

        <!-- Rendang -->
        <div class="bg-[#D3C2B5] rounded-lg shadow-md p-4 flex flex-col items-center">
            <h3 class="text-xl font-semibold mb-2">RENDANG</h3>
            <img src="assets/images/rendang.png" alt="Rendang" class="rounded-full w-32 h-32 object-cover mb-4">
            <p class="text-[#5C4033] mb-4 text-xl">Sumatera Barat</p>
            <button 
            class="mt-8 px-6 py-3 bg-[#4e351f] text-white font-semibold rounded-lg"
            onclick="location.href='{{ route('rendang') }}'">
            Baca Selengkapnya
            </button>
        </div>

        <!-- Ayam Betutu -->
        <div class="bg-[#D3C2B5] rounded-lg shadow-md p-4 flex flex-col items-center">
            <h3 class="text-xl font-semibold mb-2">AYAM BETUTU</h3>
            <img src="assets/images/ayambetutu.png" alt="Ayam Betutu" class="rounded-full w-32 h-32 object-cover mb-4">
            <p class="text-[#5C4033] mb-4 text-xl">Bali</p>
            <button 
            class="mt-8 px-6 py-3 bg-[#4e351f] text-white font-semibold rounded-lg"
            onclick="location.href='{{ route('ayambetutu') }}'">
            Baca Selengkapnya
            </button>
        </div>

        <!-- Rawon -->
        <div class="bg-[#4e351f] rounded-lg shadow-md p-4 flex flex-col items-center">
            <h3 class="text-xl font-semibold mb-2 text-[#fdf6e4]">RAWON</h3>
            <img src="assets/images/rawon.png" alt="Rawon" class="rounded-full w-32 h-32 object-cover mb-4">
            <p class="text-[#fdf6e4] mb-4 text-xl">Jawa Timur</p>
            <button 
            class="mt-8 px-6 py-3 bg-[#D3C2B5] text-[#8C6450] font-semibold rounded-lg"
            onclick="location.href='{{ route('rawon') }}'">
            Baca Selengkapnya
            </button>
        </div>

        <!-- Sate -->
        <div class="bg-[#D3C2B5] rounded-lg shadow-md p-4 flex flex-col items-center">
            <h3 class="text-xl font-semibold mb-2">SATE</h3>
            <img src="assets/images/sate.png" alt="Sate" class="rounded-full w-32 h-32 object-cover mb-4">
            <p class="text-[#5C4033] mb-4 text-xl">Jawa Timur</p>
            <button 
            class="mt-8 px-6 py-3 bg-[#4e351f] text-white font-semibold rounded-lg"
            onclick="location.href='{{ route('sate') }}'">
            Baca Selengkapnya
            </button>
        </div>

        <!-- Nasi Liwet -->
        <div class="bg-[#4e351f] rounded-lg shadow-md p-4 flex flex-col items-center">
            <h3 class="text-xl font-semibold mb-2 text-[#fdf6e4]">NASI LIWET</h3>
            <img src="assets/images/nasiliwet.png" alt="Nasi Liwet" class="rounded-full w-32 h-32 object-cover mb-4">
            <p class="text-[#fdf6e4] mb-4 text-xl">Jawa Barat</p>
            <button 
            class="mt-8 px-6 py-3 bg-[#D3C2B5] text-[#8C6450] font-semibold rounded-lg"
            onclick="location.href='{{ route('nasiliwet') }}'">
            Baca Selengkapnya
            </button>
        </div>
    </section>

</body>
</html>
