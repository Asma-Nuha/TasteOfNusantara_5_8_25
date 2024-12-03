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

    

    <!-- Lihat Lainnya -->
    <button 
    class="mt-8 px-6 py-3 bg-[#4e351f] text-white font-semibold rounded-lg"
    onclick="location.href='{{ route('dbselengkapnya') }}'">
    Lihat Lainnya
    </button>
  </main>
</body>
</html>
