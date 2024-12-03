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
        <a href="/index">
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
        @foreach ($makanans as $makanan)
        <div class="bg-[#4e351f] rounded-lg shadow-md p-4 flex flex-col items-center">
            <h3 class="text-xl font-semibold mb-2 text-[#fdf6e4]">{{ $makanan->name }}</h3>
            <img src="{{ asset('storage/' . $makanan->image) }}" alt="{{ $makanan->name }}" class="rounded-full w-32 h-32 object-cover mb-4">
            <p class="text-[#fdf6e4] mb-4 text-xl">{{ $makanan->place }}</p>
            <p class="text-[#fdf6e4] mb-4 text-xl text-center">{{ strip_tags($makanan->description) }}</p>

            
        
           
        </div>
        @endforeach
    </section>

</body>
</html>
