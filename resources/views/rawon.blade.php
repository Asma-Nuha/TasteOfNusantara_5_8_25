<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Taste of Nusantara</title>
  </head>
  <body class="bg-amber-50 text-gray-800 font-serif text-xl">
    <!-- Header -->
    <header class="flex justify-between items-center px-6 py-4 bg-[#4e351f] shadow-md">
      <a href="dashboard.html">
        <button class="px-4 py-2 bg-[#D3C2B5] text-[#4e351f] rounded-md hover:bg-gray-700">Beranda</button>
      </a>
      <h1 class="text-lg font-bold italic text-[#fdf6e4] italic">TasteOfNusantara</h1>
      <button class="px-4 py-2 bg-[#D3C2B5] text-[#4e351f] rounded-md hover:bg-gray-700">Kuliner Nusantara</button>
    </header>

    <!-- Welcome Section -->
    <section class="text-center my-8 px-6">
      <h2 class="text-3xl font-semibold text-gray-700 mb-4">RAWON</h2>
      <img
        src="assets/images/rawon.png"
        alt="Gado-Gado"
        class="w-64 h-64 mx-auto rounded-md shadow-md"
      />
    </section>

    <!-- Description Section -->
    <div class="container mx-auto px-6 py-4">
      <header>
        <p class="text-lg leading-relaxed text-gray-700 text-xl">
          Rawon adalah sup daging sapi khas Indonesia. Berasal dari Jawa Timur, rawon menggunakan keluak hitam sebagai bumbu utama, yang memberikan warna gelap dan rasa kacang pada sup, sehingga rawon sering disebut sebagai "sup daging hitam".
        </p>
      </header>

      <hr class="my-6 border-t-2 border-gray-300">

      <!-- Recipe Section -->
      <section class="recipe mb-6">
        <h2 class="text-2xl font-semibold mb-4">Resep</h2>

        <h3 class="text-xl font-medium">Bahan Kuah Rawon</h3>
        <ul class="list-disc ml-6 mb-4">
          <li>500 gram daging sapi, potong dadu</li>
          <li>2 liter air</li>
          <li>3 batang serai, memarkan</li>
          <li>3 lembar daun salam</li>
          <li>2 lembar daun jeruk</li>
          <li>1 sendok makan garam</li>
          <li>1 sendok teh gula pasir</li>
          <li>1 sendok teh kaldu bubuk (opsional)</li>
          <li>Minyak untuk menumis</li>
        </ul>

        <h3 class="text-xl font-medium">Bumbu Halus</h3>
        <ul class="list-disc ml-6 mb-4">
          <li>6 butir bawang merah</li>
          <li>4 siung bawang putih</li>
          <li>4 buah cabe merah (sesuaikan dengan selera)</li>
          <li>2 cm jahe</li>
          <li>1 ruas jahe</li>
          <li>2 cm kunyit</li>
          <li>2 cm lengkuas</li>
          <li>1 sendok teh ketumbar</li>
          <li>1 sendok teh jintan</li>
          <li>1 sendok teh terasi (opsional)</li>
        </ul>

        <h3 class="text-xl font-medium">Pelengkap</h3>
        <ul class="list-disc ml-6 mb-4">
          <li>Taoge, seduh air panas</li>
          <li>Telur asin, rebus</li>
          <li>Kerupuk</li>
          <li>Daun bawang, iris halus</li>
          <li>Sambal rawit</li>
          <li>Nasi putih</li>
        </ul>
      </section>

      <hr class="my-6 border-t-2 border-gray-300">

      <!-- Instructions Section -->
      <section class="instructions mb-6">
        <h2 class="text-2xl font-semibold mb-4">Cara Membuat</h2>

        <h3 class="text-xl font-medium">Menyiapkan Daging</h3>
        <ol class="list-decimal ml-6 mb-4">
          <li>Rebus 500 gram daging sapi dalam 2 liter air hingga empuk.</li>
          <li>Angkat daging, tiriskan, dan potong dadu.</li>
        </ol>

        <h3 class="text-xl font-medium">Menyiapkan Kuah</h3>
        <ol class="list-decimal ml-6 mb-4">
          <li>Tumis Bumbu: Panaskan minyak dalam wajan. Tumis bawang merah, bawang putih, cabe merah, jahe, kunyit, lengkuas, ketumbar, jintan, dan terasi (opsional) hingga harum dan matang. Masukkan serai, daun salam, dan daun jeruk. Aduk rata.</li>
          <li>Masak Kuah: Tambahkan bumbu tumis ke dalam panci besar. Didihkan, lalu masukkan daging sapi, garam, gula, dan kaldu bubuk (opsional). Masak dengan api kecil hingga kuah mengental dan bumbu meresap (sekitar 30 menit).</li>
          <li>Koreksi Rasa: Cicipi kuahnya, dan tambahkan garam atau gula jika diperlukan. Jika kuah terlalu pekat, tambahkan sedikit air.</li>
        </ol>

        <h3 class="text-xl font-medium">Menyiapkan Pelengkap</h3>
        <ol class="list-decimal ml-6 mb-4">
          <li>Seduh taoge dalam air panas dan tiriskan.</li>
          <li>Rebus telur asin hingga matang.</li>
          <li>Goreng kerupuk hingga renyah.</li>
          <li>Iris daun bawang halus sebagai taburan.</li>
          <li>Siapkan sambal rawit sesuai selera.</li>
        </ol>

        <h3 class="text-xl font-medium">Penyajian</h3>
        <ol class="list-decimal ml-6 mb-4">
          <li>Sajikan rawon hangat di atas piring atau mangkuk.</li>
          <li>Letakkan nasi putih di samping rawon.</li>
          <li>Tambahkan taoge, telur asin, kerupuk, dan taburi dengan daun bawang.</li>
          <li>Sajikan dengan sambal rawit sebagai pelengkap.</li>
        </ol>
      </section>
    </div>
  </body>
</html>
