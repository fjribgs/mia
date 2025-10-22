<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LokaHub</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>
    @vite('resources/css/app.css')
</head>
<body class="">
    <nav id="navbar"
    class="flex absolute mx-35 my-10">
        <div class="text-4xl font-bold text-white">LokaHub</div>
        <div></div>
    </nav>
    <section id="hero-section" 
    class="relative flex items-center">
        <img src="{{ asset('images/hero-section.png')}}" 
        alt="Background"
        class="-z-10">
        <div class="absolute mx-35">
            <h1 class="text-white text-7xl w-90">Temukan <b>UMKM terbaik</b> di sekitarmu!</h1>
            <button class="font-semibold text-[19px] bg-white rounded-4xl py-[15px] px-[33px] my-[52px]">Jelajahi Sekarang</button>
        </div>
        <div></div>
    </section>
</body>
</html>