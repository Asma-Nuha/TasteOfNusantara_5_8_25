<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Taste of Nusantara</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      background-color: #fdf6e4; /* Warna latar cream */
      color: #5c4033; /* Warna teks cokelat */
      font-family: 'Arial', sans-serif;
    }
  </style>
</head>
<body>
  <!-- Header -->
  <header class="flex justify-between items-center p-4">
    <button class="px-4 py-2 border border-brown rounded-md text-brown">Beranda</button>
    <h1 class="text-2xl font-medium italic">TasteOfNusantara</h1>
    <button class="px-4 py-2 bg-brown text-brown rounded-md">Kuliner Nusantara</button>
  </header>

  <!-- Main Content -->
  <main class="max-w-5xl mx-auto text-center py-10 px-4">
    <h2 class="text-3xl font-bold mb-4">SELAMAT DATANG DI DUNIA RASA INDONESIA!</h2>
    <div class="flex flex-col md:flex-row justify-between items-center md:space-x-10">
      <p class="text-md md:text-lg w-full md:w-1/3">
        Kenali dan nikmati aneka masakan Indonesia dengan kekayaan budaya dan rasa.
      </p>
      <img src="assets/images/sotobanjar.png" class="rounded-full w-64 h-64">
      <p class="text-md md:text-lg w-full md:w-1/3">
        Temukan hidangan tradisional favorit dari berbagai daerah dan rasakan kelezatan asli Nusantara di setiap gigitan!
      </p>
    </div>

    <!-- Card Section -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mt-8">
      <!-- Gado-Gado -->
      <div class="bg-[#4e351f] shadow-lg rounded-lg p-4 text-center">
        <img src="assets/images/gadogado.png" alt="Gado-Gado" class="mx-auto rounded-full mb-2">
        <h3 class="font-bold text-white">GADO GADO</h3>
        <p class="text-sm text-white">Betawi</p>
        <button class="mt-2 px-4 py-2 bg-brown text-white rounded-md text-sm">Baca Selengkapnya</button>
      </div>
      <!-- Rawon -->
      <div class="bg-[#4e351f] shadow-lg rounded-lg p-4 text-center">
        <img src="assets/images/rawon.png" alt="Rawon" class="mx-auto rounded-full mb-2">
        <h3 class="font-bold text-white">RAWON</h3>
        <p class="text-sm text-white">Jawa Timur</p>
        <button class="mt-2 px-4 py-2 bg-brown text-white rounded-md text-sm">Baca Selengkapnya</button>
      </div>
      <!-- Sate -->
      <div class="bg-[#4e351f] shadow-lg rounded-lg p-4 text-center">
        <img src="assets/images/sate.png" alt="Sate" class="mx-auto rounded-full mb-2">
        <h3 class="font-bold text-white">SATE</h3>
        <p class="text-sm text-white">Jawa Timur</p>
        <button class="mt-2 px-4 py-2 bg-brown text-white rounded-md text-sm">Baca Selengkapnya</button>
      </div>
      <!-- Rendang -->
      <div class="bg-[#4e351f] shadow-lg rounded-lg p-4 text-center">
        <img src="assets/images/rendang.png" alt="Rendang" class="mx-auto rounded-full mb-2">
        <h3 class="font-bold text-white">RENDANG</h3>
        <p class="text-sm text-white">Sumatera Barat</p>
        <button class="mt-2 px-4 py-2 bg-brown text-white rounded-md text-sm">Baca Selengkapnya</button>
      </div>
    </div>

    <!-- Lihat Lainnya -->
    <button 
    class="mt-8 px-6 py-3 bg-[#4e351f] text-white font-semibold rounded-lg"
    onclick="location.href='{{ route('dbselengkapnya') }}'">
    Lihat Lainnya
    </button>
  </main>
</body>
</html>
