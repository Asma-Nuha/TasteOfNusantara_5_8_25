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
      <h2 class="text-3xl font-semibold text-gray-700 mb-4">SATE</h2>
      <img
        src="assets/images/sate.png"
        alt="Gado-Gado"
        class="w-64 h-64 mx-auto rounded-md shadow-md"
      />
    </section>

    <!-- Description Section -->
    <div class="container mx-auto px-6 py-4">
      <header>
        <p class="leading-relaxed text-gray-700 text-xl">
          Sate adalah makanan khas Indonesia yang berasal dari Jawa Timur. Terbuat dari daging ayam, sapi atau kambing yang dipotong kecil-kecil lalu ditusuk pada tusuk sate, kemudian dibakar. Sate biasanya disajikan bersama dengan bumbu kacang, kecap manis dan irisan bawang merah. Sate memiliki banyak macam tergantung pada bumbu, seperti sate Madura.
        </p>
      </header>

      <hr class="my-6 border-t-2 border-gray-300">

      <!-- Recipe Section -->
      <section class="recipe mb-6">
        <h2 class="text-2xl font-semibold mb-4">Resep</h2>

        <h3 class="text-xl font-medium">Bahan Ayam</h3>
        <ul class="list-disc ml-6 mb-4">
          <li>500 gram daging ayam, potong dadu</li>
          <li>10-15 tusuk sate</li>
        </ul>

        <h3 class="text-xl font-medium">Bumbu Kacang</h3>
        <ul class="list-disc ml-6 mb-4">
          <li>150 gram kacang tanah, goreng dan haluskan</li>
          <li>3 siung bawang putih, goreng</li>
          <li>4 buah cabai merah, goreng (sesuai selera)</li>
          <li>2 sendok makan gula merah serut</li>
          <li>2 sendok makan kecap manis</li>
          <li>1 sendok makan air asam jawa (opsional)</li>
          <li>250 ml air matang</li>
          <li>Garam secukupnya</li>
        </ul>

        <h3 class="text-xl font-medium">Pelengkap</h3>
        <ul class="list-disc ml-6 mb-4">
          <li>Irisan bawang merah</li>
          <li>Irisan cabai rawit (opsional)</li>
          <li>Ketupat atau lontong</li>
        </ul>
      </section>

      <hr class="my-6 border-t-2 border-gray-300">

      <!-- Instructions Section -->
      <section class="instructions mb-6">
        <h2 class="text-2xl font-semibold mb-4">Cara Membuat</h2>

        <h3 class="text-xl font-medium">Menyiapkan Bumbu Kacang</h3>
        <ol class="list-decimal ml-6 mb-4">
          <li>
            Dalam blender atau food processor, haluskan kacang tanah, bawang putih, dan cabai merah. Pindahkan ke dalam wajan, tambahkan gula merah, kecap manis, dan air asam jawa (jika digunakan). Aduk rata. Tambahkan air sedikit-sedikit hingga mencapai konsistensi yang diinginkan (tidak terlalu kental atau terlalu encer). Masak dengan api kecil sambil diaduk hingga bumbu menyatu dan saus mengental. Koreksi rasa dengan garam sesuai selera.
          </li>
        </ol>

        <h3 class="text-xl font-medium">Menyiapkan Panggangan Sate</h3>
        <ol class="list-decimal ml-6 mb-4">
          <li>
            Tusuk potongan ayam yang telah dimarinasi pada tusuk sate.
          </li>
          <li>
            Panaskan grill atau panggangan. Panggang sate dengan api sedang sambil diolesi sedikit minyak hingga daging matang dan sedikit berwarna kecokelatan. Balikkan sate secara berkala agar matang merata.
          </li>
        </ol>

        <h3 class="text-xl font-medium">Penyajian</h3>
        <ol class="list-decimal ml-6 mb-4">
          <li>
            Sajikan sate ayam dengan bumbu kacang di sampingnya.
          </li>
          <li>
            Tambahkan irisan bawang merah dan cabai rawit jika suka.
          </li>
          <li>
            Sajikan dengan ketupat atau lontong sebagai pelengkap.
          </li>
        </ol>
      </section>
    </div>
  </body>
</html>
