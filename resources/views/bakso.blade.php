<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Taste of Nusantara</title>
  </head>
  <body class="bg-amber-50 text-gray-800 font-serif">
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
      <h2 class="text-3xl font-semibold text-gray-700 mb-4">BAKSO</h2>
      <img
        src="assets/images/bakso.png"
        alt="Gado-Gado"
        class="w-64 h-64 mx-auto rounded-md shadow-md"
      />
    </section>

    <!-- Description Section -->
    <div class="container mx-auto px-6 py-4">
      <header>
        <p class="text-xl leading-relaxed text-gray-700">
          Bakso, makanan khas Jawa Timur adalah bola daging dari campuran daging sapi giling.
          Biasanya disajikan dengan kuah kaldu sapi dan mi kuning. Biasanya disantap panas dengan
          tambahan saus, kecap, sambal, atau cuka. Bakso dijual di warung atau gerobak kaki lima.
        </p>
      </header>
      <hr class="my-8 border-gray-300" />

      <!-- Recipe Section -->
      <section>
        <h2 class="text-2xl font-bold mb-4 text-gray-800">Resep</h2>

        <h3 class="text-xl font-semibold mb-2 text-gray-700">Bahan Bakso</h3>
        <ul class="list-disc pl-6 text-gray-600 text-xl">
          <li>500 gram daging sapi giling</li>
          <li>50 gram tepung tapioka</li>
          <li>1 butir telur</li>
          <li>3 siung bawang putih, haluskan</li>
          <li>1 sendok teh garam</li>
          <li>1/2 sendok teh lada bubuk</li>
          <li>1/2 sendok teh kaldu bubuk (optional)</li>
          <li>Ice bath air es</li>
        </ul>

        <h3 class="text-xl font-semibold mt-6 mb-2 text-gray-700">Bahan Kuah</h3>
        <ul class="list-disc pl-6 text-gray-600 text-xl">
          <li>1 liter kaldu sapi</li>
          <li>5 siung bawang putih, geprek</li>
          <li>1 batang daun seledri</li>
          <li>1 batang daun bawang</li>
          <li>Garam secukupnya</li>
          <li>Lada secukupnya</li>
          <li>Kaldu bubuk (optional)</li>
          <li>Minyak untuk menumis</li>
          <li>Bawang merah goreng (untuk menumis)</li>
        </ul>

        <h3 class="text-xl font-semibold mt-6 mb-2 text-gray-700">Pelengkap</h3>
        <ul class="list-disc pl-6 text-gray-600 text-xl">
          <li>Mi kuning atau bihun</li>
          <li>Tahu atau siomay goreng</li>
          <li>Sayur seperti sawi hijau, kangkung, atau kol</li>
          <li>Kecap manis</li>
          <li>Sambal</li>
          <li>Bawang goreng</li>
        </ul>
      </section>
      <hr class="my-8 border-gray-300" />

      <!-- Instructions Section -->
      <section>
        <h2 class="text-2xl font-bold mb-4 text-gray-800">Cara Membuat</h2>

        <h3 class="text-xl font-semibold mb-2 text-gray-700">Membuat Bakso</h3>
        <ol class="list-decimal pl-6 text-gray-600 text-xl">
          <li>
            Masukkan daging sapi giling, tepung tapioka, bawang putih halus, garam, lada, kaldu
            bubuk, dan telur ke dalam mangkuk besar.
          </li>
          <li>
            Uleni adonan hingga rata. Gunakan ice bath air es untuk menjaga suhu adonan tetap
            dingin.
          </li>
          <li>
            Ambil sedikit adonan, bentuk bulat dengan tangan, dan masukkan ke dalam air panas.
            Masak hingga mengapung, lalu angkat.
          </li>
        </ol>

        <h3 class="text-xl font-semibold mt-6 mb-2 text-gray-700">Membuat Kuah</h3>
        <ol class="list-decimal pl-6 text-gray-600 text-xl">
          <li>Tumis bawang putih dan bawang merah hingga harum dengan minyak.</li>
          <li>
            Masukkan kaldu sapi, daun bawang, dan seledri, serta bumbu lainnya seperti garam dan
            lada. Rebus hingga mendidih.
          </li>
        </ol>

        <h3 class="text-xl font-semibold mt-6 mb-2 text-gray-700">Penyajian</h3>
        <ol class="list-decimal pl-6 text-gray-600 text-xl">
          <li>Susun mi kuning, bihun, atau sayuran dalam mangkuk.</li>
          <li>Tambahkan bakso, tahu, dan siomay goreng.</li>
          <li>
            Siram kuah panas di atasnya dan beri pelengkap seperti kecap, sambal, dan bawang goreng
            sesuai selera.
          </li>
        </ol>
      </section>
    </div>
  </body>
</html>
