<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Praktikum 5</title>
    <link rel="stylesheet" href="{{ asset('styles/style_grace.css') }}">
    <!-- Menggunakan CDN Tailwind CSS -->
    <link rel="stylesheet" href="{{ asset('styles/tailwindcss3.4.1.js') }}">


</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen p-6">
    <!-- Wrapper untuk konten -->
    <div class="max-w-4xl w-full bg-white rounded-lg shadow-lg p-6">
        <!-- Judul -->
        <h1 class="text-red-600 text-4xl font-semibold text-center mb-6">Ini Judul Warna Merah</h1>

        <!-- Gambar Container -->
        <div class="grid grid-cols-2 gap-6">
            <!-- Gambar 1 -->
            <div class="flex space-x-4">
                <img class="w-full h-64 object-cover rounded-lg shadow-md" src="{{ asset('images/gambar_1.png') }}" alt="Gambar 1">
                <img class="w-full h-64 object-cover rounded-lg shadow-md" src="{{ asset('images/gambar_2.jpg') }}" alt="Gambar 2">
            </div>
        </div>
    </div>
</body>
</html>
