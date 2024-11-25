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
      <h2 class="text-3xl font-semibold text-gray-700 mb-4">GADO-GADO</h2>
      <img
        src="assets/images/gadogado.png"
        alt="Gado-Gado"
        class="w-64 h-64 mx-auto rounded-md shadow-md"
      />
    </section>

    <!-- Main Content -->
    <div class="container mx-auto px-6 py-4">
      <header>
        <p class="text-lg leading-relaxed text-gray-700 text-xl">
          Berasal dari Betawi, gado-gado adalah hidangan khas Indonesia yang terdiri dari campuran
          sayuran, tahu, tempe, dan telur rebus. Gado-gado disiram dengan bumbu kacang yang
          dicampur dengan bumbu seperti cabai, gula merah, dan air asam. Biasanya gado-gado
          dimakan dengan lontong atau nasi serta kerupuk.
        </p>
      </header>
      <hr class="my-6 border-t-2 border-gray-300">

      <!-- Recipe Section -->
      <section>
        <h2 class="text-2xl font-bold mb-4 text-gray-800">Resep</h2>

        <h3 class="text-lg font-semibold mb-2 text-gray-700">Bahan Salad</h3>
        <ul class="list-disc pl-6 text-gray-600">
          <li>200 gram kentang, potong dadu.</li>
          <li>150 gram wortel, potong dadu.</li>
          <li>100 gram buncis, potong kecil.</li>
          <li>100 gram tauge.</li>
          <li>2 lembar kol, iris halus.</li>
          <li>2-3 lembar selada, sobek-sobek.</li>
          <li>100 gram tahu, potong dadu.</li>
          <li>100 gram tempe, potong dadu.</li>
          <li>2 buah telur.</li>
        </ul>

        <h3 class="text-lg font-semibold mt-6 mb-2 text-gray-700">Bahan Saus Kacang</h3>
        <ul class="list-disc pl-6 text-gray-600">
          <li>200 gram kacang tanah.</li>
          <li>4 siung bawang putih, goreng.</li>
          <li>3-4 buah cabai merah, goreng.</li>
          <li>2 sendok makan gula merah serut.</li>
          <li>2 sendok makan kecap manis.</li>
          <li>1 sendok makan air asam jawa (opsional).</li>
          <li>250 ml air matang.</li>
          <li>Garam secukupnya.</li>
        </ul>

        <h3 class="text-lg font-semibold mt-6 mb-2 text-gray-700">Pelengkap</h3>
        <ul class="list-disc pl-6 text-gray-600">
          <li>Kerupuk</li>
          <li>Bawang goreng</li>
        </ul>
      </section>
      <hr class="my-8 border-gray-300" />

      <!-- Instructions Section -->
      <section>
        <h2 class="text-2xl font-bold mb-4 text-gray-800">Cara Membuat</h2>

        <h3 class="text-lg font-semibold mb-2 text-gray-700">Menyiapkan Salad</h3>
        <ol class="list-decimal pl-6 text-gray-600">
          <li>Rebus kentang, wortel, buncis, dan kol hingga matang tapi masih renyah. Tiriskan.</li>
          <li>Rebus tauge sebentar hingga layu, lalu tiriskan.</li>
          <li>Goreng tahu dan tempe hingga kecokelatan dan tiriskan.</li>
          <li>Rebus telur hingga matang, kupas, dan belah dua.</li>
        </ol>

        <h3 class="text-lg font-semibold mt-6 mb-2 text-gray-700">Membuat Saus Kacang</h3>
        <ol class="list-decimal pl-6 text-gray-600">
          <li>
            Dalam blender atau food processor, haluskan kacang tanah, bawang putih, dan cabai merah.
          </li>
          <li>
            Pindahkan ke dalam wajan, tambahkan gula merah, kecap manis, dan air asam jawa (jika
            digunakan). Aduk rata.
          </li>
          <li>
            Tambahkan air sedikit-sedikit sambil diaduk hingga mendapatkan konsistensi yang
            diinginkan (tidak terlalu kental atau terlalu encer).
          </li>
          <li>
            Masak dengan api kecil sambil terus diaduk hingga bumbu menyatu dan saus mengental.
            Koreksi rasa dengan garam sesuai selera.
          </li>
        </ol>

        <h3 class="text-lg font-semibold mt-6 mb-2 text-gray-700">Penyajian</h3>
        <ol class="list-decimal pl-6 text-gray-600">
          <li>Susun sayuran, tahu, dan tempe di piring saji atau mangkuk besar.</li>
          <li>Siram dengan saus kacang hingga merata.</li>
          <li>Tambahkan telur rebus di atasnya.</li>
          <li>Taburi dengan kerupuk dan bawang goreng.</li>
        </ol>
      </section>
    </div>
  </body>
</html>
