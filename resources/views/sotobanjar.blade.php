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
      <h2 class="text-3xl font-semibold text-gray-700 mb-4">SOTO BANJAR</h2>
      <img
        src="assets/images/sotobanjar.png"
        alt="Gado-Gado"
        class="w-64 h-64 mx-auto rounded-md shadow-md"
      />
    </section>

    <!-- Description Section -->
    <div class="container mx-auto px-6 py-4">
      <header>
        <p class="text-xl leading-relaxed text-gray-700">
          Soto Banjar adalah sup khas Kalimantan Selatan. Hidangan ini menggunakan kaldu ayam yang gurih dan kaya rempah,
          biasanya disajikan dengan potongan ayam rebus, telur rebus, dan bihun. Soto Banjar memiliki rasa yang unik karena terdapat
          perasan jeruk nipis di dalamnya. Makanan ini biasa dimakan bersama nasi atau lontong.
        </p>
      </header>
      <hr class="my-6 border-t-2 border-gray-300">

      <!-- Recipe Section -->
      <section class="recipe">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Resep</h2>

        <h3 class="text-xl font-medium text-gray-700">Bahan Soto Banjar</h3>
        <ul class="list-disc pl-5 text-gray-600 mb-4">
          <li>1 ekor ayam, potong menjadi beberapa bagian</li>
          <li>2 liter air</li>
          <li>2 batang serai, memarkan</li>
          <li>3 lembar daun salam</li>
          <li>2 lembar daun jeruk</li>
          <li>1 ruas jahe, memarkan</li>
          <li>1 ruas lengkuas, memarkan</li>
          <li>1 sendok makan minyak goreng (untuk menumis)</li>
        </ul>

        <h3 class="text-xl font-medium text-gray-700">Bumbu Halus</h3>
        <ul class="list-disc pl-5 text-gray-600 mb-4">
          <li>6 siung bawang merah</li>
          <li>4 siung bawang putih</li>
          <li>1 sendok teh ketumbar</li>
          <li>1 sendok teh jintan</li>
          <li>1 sendok teh kunyit bubuk</li>
          <li>1 sendok teh garam</li>
        </ul>

        <h3 class="text-xl font-medium text-gray-700">Pelengkap</h3>
        <ul class="list-disc pl-5 text-gray-600 mb-4">
          <li>2 butir telur rebus, belah dua</li>
          <li>2 buah kentang, potong dadu dan goreng</li>
          <li>100 gram tauge, rebus</li>
          <li>2 batang daun bawang, iris halus</li>
          <li>2 sendok makan bawang goreng</li>
          <li>1 buah jeruk nipis, potong-potong</li>
          <li>Sambal</li>
          <li>Kecap manis</li>
          <li>Kerupuk (opsional)</li>
        </ul>
      </section>
      <hr class="my-6 border-t-2 border-gray-300">

      <!-- Instructions Section -->
      <section class="instructions">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Cara Membuat</h2>

        <h3 class="text-xl font-medium text-gray-700 mb-2">Membuat Kuah</h3>
        <ol class="list-decimal pl-5 text-gray-600 mb-4">
          <li>Rebus ayam dalam air hingga empuk. Angkat ayam dan saring kaldu, sisihkan.</li>
          <li>Tumis bumbu halus dengan minyak goreng hingga harum dan matang.</li>
          <li>Masukkan bumbu tumis ke dalam kaldu ayam yang sudah disaring. Tambahkan serai, daun salam, daun jeruk, jahe, dan lengkuas.</li>
          <li>Masak kuah dengan api kecil selama 15-20 menit, kemudian koreksi rasa dengan garam jika diperlukan.</li>
        </ol>

        <h3 class="text-xl font-medium text-gray-700 mb-2">Menyiapkan Ayam</h3>
        <ol class="list-decimal pl-5 text-gray-600 mb-4">
          <li>Setelah ayam dingin, suwir-suwir daging ayam dan buang tulangnya.</li>
        </ol>

        <h3 class="text-xl font-medium text-gray-700 mb-2">Penyajian</h3>
        <ol class="list-decimal pl-5 text-gray-600">
          <li>Susun ayam suwir dalam mangkuk saji.</li>
          <li>Siram dengan kuah panas.</li>
          <li>Tambahkan telur rebus, kentang goreng, tauge, dan taburi dengan daun bawang dan bawang goreng.</li>
          <li>Sajikan dengan irisan jeruk nipis, sambal, kecap manis, dan kerupuk jika suka.</li>
        </ol>
      </section>
    </div>
  </body>
</html>
