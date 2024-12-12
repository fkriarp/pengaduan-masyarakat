<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>Pengaduan Masyarakat</title>
    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>
    <div class="p-8 w-screen h-screen flex justify-between">
        <div class="w-1/2 h-full flex flex-col justify-center">
            <div class="w-4/5 mx-auto">
                <h1 class="font-bold text-7xl tracking-wide">Pengaduan Masyarakat</h1>
                <p class="my-12 text-lg leading-relaxed">
                    Selamat datang di <span class="font-bold">SUARA<span class="text-blue-500">KITA</span></span>! Kami adalah platform pengaduan masyarakat yang dirancang untuk memudahkan Anda menyampaikan keluhan, aspirasi, atau saran secara cepat, aman, dan transparan. Dengan semangat kebersamaan, <span class="font-bold">SUARA<span class="text-blue-500">KITA</span></span> menghubungkan masyarakat dengan pihak terkait untuk menciptakan solusi nyata. Mari bersama-sama membangun lingkungan yang lebih baik, di mana setiap suara didengar dan setiap masalah menemukan penyelesaian. Karena kami percaya, perubahan besar dimulai dari langkah kecil yang kita ambil bersama.
                </p>
                <a href="{{ route('showLogin') }}" class="py-3 px-6 mt-10 bg-blue-500 border-2 border-sky-700 rounded-md text-sky-700 font-semibold hover:bg-blue-600 text-white transition ease-in-out">
                    Bergabung
                </a>
            </div>
        </div>

        <div class="w-1/2 h-full flex justify-center align-middle">
            <img src="{{ asset('assets/gif/kelompok-masyarakat.gif') }}" alt="">
        </div>        
    </div>
</body>
</html>