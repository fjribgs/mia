<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LokaHub</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>
    @vite('resources/css/app.css')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <img src="{{ asset('images/hero-section.png')}}" 
        alt="Background"
        class="-z-10 absolute">
    <nav id="navbar"
    class="flex fixed py-10 px-35 justify-between items-center w-screen">
        <div>
            <h1 class="text-4xl font-bold text-white">LokaHub</h1>
        </div> 
        <div>
            <button class="border-green-200 border-1 rounded-3xl px-[28px] py-[13px] text-green-200 font-bold">Login</button>
            <button class="border-green-500 border-1 rounded-3xl px-[28px] py-[13px] text-white font-bold bg-green-500">Register</button>
        </div>
    </nav>
    <section id="hero-section" 
    class="flex items-center h-300 justify-content-between">
        <div class="absolute mx-35">
            <h1 class="text-white text-[74px] w-140">Temukan <b>UMKM terbaik</b> di sekitarmu!</h1>
            <button class="font-semibold text-[19px] bg-white rounded-4xl py-[15px] px-[33px] my-[52px]">Jelajahi Sekarang</button>
        </div>
        <div>
            <img src="{{ asset('images/hero-section-2.png')}}" alt=""
            class="w-[790px] h-[950px] absolute top-[306px] left-[1127px]">
        </div>
    </div>

    <a href="https://maps.app.goo.gl/SqGff3Yg4EUSeL6a7?g_st=aw"
    class="hidden">link gmaps</a>
    
</body>
</html>