{{--

LIST FEATURE USER:
- view umkms
- view products
- view promos
- giving review
- view posts
- manage his data (profile(?))

--}}

{{-- @if (Auth::check())
    <h2>Selamat Datang {{ Auth::user()->name }}</h2>
    <a href="{{ route('auth.logout') }}">logout</a>
@else
    <h2>Selamat Datang! Silakan login terlebih dahulu!</h2>
    <a href="{{ route('auth.login') }}">login</a>
@endif --}}

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
            class="-z-10 absolute w-full object-cover h-full">

    <livewire:navbar />

    <section id="hero-section" 
        class="flex items-center 
        h-screen justify-between 
        w-full px-[36px] 
        md:px-35 md:top-10">

        <div class="text-center md:text-left mx-auto md:mx-0
                    pt-[20px] md:pt-[110px]">

            <h1 class="text-white text-[29px] md:text-[40px] lg:text-[54px] md:w-[667px]">Temukan, Promosikan <br />& Kolaborasikan <br><b>UMKM terbaik</b> <br>di sekitarmu!</h1>

            <p class="text-white pt-[32px] text-[10.3px] font-medium xl:text-[20px] md:text-[16px]">Menjelajahi UMKM sekitar, membangun kolaborasi, <br>dan menumbuhkan ekosistem bisnis lokal</p>

            <div class="flex gap-[5px] justify-center md:justify-start my-8 md:my-[52px]">

                <button class="font-semibold text-[12px] xl:text-[19px] md:text-[15px]
                    bg-white rounded-4xl
                    py-[10px] xl:py-[15px] md:py-[14px]
                    px-[14px] xl:px-[33px] md:px-[22px]
                    ">Jelajahi Sekarang</button>

                <button class="font-semibold text-[12px] xl:text-[19px] md:text-[15px]
                    text-white
                    py-[10px] xl:py-[15px] md:py-[14px]
                    px-[11px] xl:px-[33px] md:px-[22px]
                    underline">Daftarkan Bisnismu</button>

            </div>

        </div>

    </section>

    <x-footer></x-footer>

    <a href="https://maps.app.goo.gl/SqGff3Yg4EUSeL6a7?g_st=aw"
    class="hidden">link gmaps</a>

</body>
</html>
