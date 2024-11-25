<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
<script src="https://cdn.tailwindcss.com"></script>
<body class="bg-yellow-50 text-center text-xl text-black-500 flex items-center justify-center min-h-screen">
<div class="w-full max-w-xs">
<div class="bg-[#C39D81] p-8 rounded-lg shadow-lg">
<h2 class="text-2xl font-semibold text-center text-[#4e351f] mb-4">Login</h2>
<div class="mb-4">
<form id="loginForm">
        <div>
        <label class="block text-[#4e351f] mb-2" for="username">Username :</label>            
        <input class="w-full px-3 py-2 border rounded bg-[#f5e8c8] text-[#4e351f]" id="username" type="text" placeholder="Username">
        </div>
        <div class="mb-6">
        <label class="block text-[#4e351f] mb-2" for="password">Password :</label>            
        <input class="w-full px-3 py-2 border rounded bg-[#f5e8c8] text-[#4e351f]" id="password" type="password" placeholder="Password">
        </div>
        <div class="flex items-center justify-center">
        <button class="w-full px-4 py-2 border rounded border-2	text-black bg-[#4e351f] rounded hover:bg-[#3c2816] focus:outline-none focus:ring-2 focus:ring-[#4e351f] focus:ring-opacity-50">
            LOGIN
        </button>
</div>
        </form>
    <script src="assets/js/login.js"></script>

</body>
    </html>