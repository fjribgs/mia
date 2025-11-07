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

{{-- <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inspira</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="overflow-auto">

    <img src="{{ asset('images/hero-section.svg')}}"
            alt=""
            class="-z-10 absolute w-full object-cover h-full">

    <header>

        <livewire:navbar />

    </header>

    <main class="relative">

        <section id="hero-section"
            class="flex items-center min-h-screen justify-between w-full px-[36px] md:px-35 top-2 relative">

            <div class="text-center md:text-left mx-auto md:mx-0 pt-[20px] md:pt-[110px] max-w-170">

                <h1 class="text-white text-[29px] md:text-[40px] lg:text-[54px] md:w-[667px]">Memberdayakan UMKM <br />Disabilitas untuk <br><b>Tumbuh</b> dan <br>Menginspirasi</h1>

                <p class="text-white pt-[32px] text-[12px] font-medium xl:text-[20px] md:text-[16px] max-w-160">Jelajahi kisah inspiratif, dukung produk lokal, dan bantu UMKM disabilitas untuk meraih kemandirian ekonomi.</p>

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

        <section class="flex flex-col justify-center items-center px-[36px] md:px-35 py-10 h-screen text-center bg-[var(--bg)]">

            <h2 class="text-[var(--primary-500)] text-[23px] font-medium">Wujudkan UMKM <b>Berdaya</b></h2>

            <p class="text-[var(--secondary-text)] text-[12px] font-light pt-2.5">Temukan berbagai UMKM yang dikelola oleh penyandang disabilitas di sekitar Bandung!</p>

            <div id="umkm-card"
                class="flex flex-col justify-between bg-[#FFFFFF] h-[300px] w-[200px] shadow-md px-5 py-7 mt-10 rounded-[18px]">

                <img src="#" alt="">

                <div class="flex flex-col justify-center items-start gap-3">

                    <h3 class="text-[13px] font-semibold text-[var(--primary-500)]">Lorem Ipsum</h3>

                    <div id="kategori"
                        class="border-1 border-[var(--info)] text-[var(--info)] rounded-2xl px-2 py-0.5 text-[10px]">Kerajinan</div>

                    <div id="lokasi"
                        class="flex gap-1">

                        <img src="{{ asset('images/lokasi-gps.svg') }}" alt="" class="w-3">

                        <p class="text-[11px] text-[var(--caption)]">Bandung</p>

                    </div>

                    <button class="bg-[var(--primary-500)] rounded-4xl text-white w-full text-[12px] mt-3 py-2 items-center justify-center">Lihat Detail</button>

                </div>
                <button class="font-semibold text-[12px] xl:text-[19px] md:text-[15px]
                    text-white
                    py-[10px] xl:py-[15px] md:py-[14px]
                    px-[11px] xl:px-[33px] md:px-[22px]
                    underline">
                    @if (Auth::check())
                        <a href="{{ route('umkm.logout_already_login') }}">Daftarkan Bisnismu</a>
                    @else
                        <a href="{{ route('umkm.regis') }}">Daftarkan Bisnismu</a>
                    @endif
                </button>

            </div>

            <button class="flex gap-1 mt-13 border-1 border-[var(--primary-500)] rounded-4xl py-2 px-4">
                <div class="text-[13px] text-[var(--primary-500)]">Lihat UMKM Lainnya</div>
                <img src="{{ asset('images/arrow-right.svg') }}" alt="arrow-right"
                    class="w-5">
            </button>

        </section>
    </main>

    <footer>

        <x-footer></x-footer>

    </footer>

    <a href="https://maps.app.goo.gl/SqGff3Yg4EUSeL6a7?g_st=aw"
        class="hidden">link gmaps</a>

</body>
</html> --}}


@extends('template.main')

@section('title', 'Home |')

@push('css')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>
@endpush

@section('content')
    <img src="{{ asset('images/hero-section.svg')}}"
            alt=""
            class="-z-10 absolute w-full object-cover h-full">

    <header>

        <livewire:navbar />

    </header>

    <main class="relative">

        <section id="hero-section"
            class="flex items-center min-h-screen justify-between w-full px-[36px] md:px-35 top-2 relative">

            <div class="text-center md:text-left mx-auto md:mx-0 pt-[20px] md:pt-[110px] xl:max-w-170 max-w-124">

                <h1 class="text-white text-[29px] md:text-[40px] lg:text-[54px] md:w-[667px]">Memberdayakan UMKM <br />Disabilitas untuk <br><b>Tumbuh</b> dan <br>Menginspirasi</h1>

                <p class="text-white pt-[32px] text-[12px] font-medium xl:text-[20px] md:text-[16px] max-w-160">Jelajahi kisah inspiratif, dukung produk lokal, dan bantu UMKM disabilitas untuk meraih kemandirian ekonomi.</p>

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
                        underline">
                        @if (Auth::check())
                            <a href="{{ route('umkm.logout_already_login') }}">Daftarkan Bisnismu</a>
                        @else
                            <a href="{{ route('umkm.regis') }}">Daftarkan Bisnismu</a>
                        @endif
                    </button>

                </div>

            </div>

        </section>

        <section class="flex flex-col justify-center items-center px-[36px] md:px-35 py-10 h-screen text-center bg-[var(--bg)]">

            <h2 class="text-[var(--primary-500)] text-[23px] font-medium">Wujudkan UMKM <b>Berdaya</b></h2>

            <p class="text-[var(--secondary-text)] text-[12px] font-light pt-2.5">Temukan berbagai UMKM yang dikelola oleh penyandang disabilitas di sekitar Bandung!</p>

            <div id="umkm-card"
                class="flex flex-col justify-between bg-[#FFFFFF] h-[400px] w-[250px] shadow-md px-5 py-7 mt-10 rounded-[18px] top-[100px]">

                <img src="#" alt="">

                <div class="flex flex-col justify-center items-start gap-3">

                    <h3 class="text-[13px] font-semibold text-[var(--primary-500)] font-[Montserrat]">Lorem Ipsum</h3>

                    <div id="kategori"
                        class="border-1 border-[var(--info)] text-[var(--info)] rounded-2xl px-2 py-0.5 text-[10px]">Kerajinan</div>

                    <div id="kolaborasi"
                        class="flex gap-2 bg-[var(--primary-50)] py-2 px-3 items-center rounded-md min-w-full">

                        <img src="{{ asset('images/kolaborasi.svg') }}" alt=""
                            class="w-8">

                        <p class="text-[8px] text-start text-[var(--primary-500)] font-[Montserrat]">Berkolaborasi dengan <br> <b>Lorem Ipsum</b></p>

                    </div>

                    <div id="lokasi"
                        class="flex gap-1">

                        <img src="{{ asset('images/lokasi-gps.svg') }}" alt="" class="w-3">

                        <p class="text-[11px] text-[var(--caption)]">Bandung</p>

                    </div>

                    <button class="bg-[var(--primary-500)] rounded-4xl text-white w-full text-[12px] mt-3 py-2 items-center justify-center">Lihat Detail</button>

                </div>

            </div>



            <button class="flex gap-1 mt-13 border-1 border-[var(--primary-500)] rounded-4xl py-2 px-4">
                <div class="text-[13px] text-[var(--primary-500)]">Lihat UMKM Lainnya</div>
                <img src="{{ asset('images/arrow-right.svg') }}" alt="arrow-right"
                    class="w-5">
            </button>

        </section>
    </main>

    <footer>

        <x-footer></x-footer>

    </footer>

    <a href="https://maps.app.goo.gl/SqGff3Yg4EUSeL6a7?g_st=aw"
        class="hidden">link gmaps</a>
@endsection
