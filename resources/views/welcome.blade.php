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
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <img src="{{ asset('images/hero-section.svg')}}" 
            alt="Background"
            class="-z-10 absolute w-full">

    <x-navbar></x-navbar>

    <section id="hero-section" 
    class="flex items-center h-270 justify-between w-full px-35 rounded-b-2xl">
        <div>
            <h1 class="text-white text-[74px] w-140">Temukan <b>UMKM terbaik</b> di sekitarmu!</h1>
            <button class="font-semibold text-[19px] bg-white rounded-4xl py-[15px] px-[33px] my-[52px]">Jelajahi Sekarang</button>
        </div>
    </section>

    <x-footer></x-footer>

    <a href="https://maps.app.goo.gl/SqGff3Yg4EUSeL6a7?g_st=aw"
    class="hidden">link gmaps</a>
    
</body>
</html>