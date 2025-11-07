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
            class="flex items-center min-h-screen justify-between w-full px-[36px] md:px-35 relative">

            <div class="text-center md:text-left mx-auto md:mx-0 pt-[20px] md:pt-[90px] xl:max-w-170 max-w-124">

                <h1 class="text-white text-[29px] sm:text-[37px] md:text-[40px] lg:text-[54px] md:w-[667px]">Memberdayakan UMKM <br />Disabilitas untuk <br><b>Tumbuh</b> dan <br> <b>Menginspirasi</b></h1>

                <p class="text-white pt-[32px] text-[12px] sm:text-[14px] font-normal xl:text-[20px] md:text-[16px] max-w-160">Jelajahi kisah inspiratif, dukung produk lokal, dan bantu UMKM disabilitas untuk meraih kemandirian ekonomi.</p>

                <div class="flex gap-[5px] justify-center md:justify-start my-8 md:my-[52px]">

                    <button class="font-semibold text-[12px] sm:text-[14px] xl:text-[19px] md:text-[15px]
                        bg-white rounded-4xl
                        py-[10px] xl:py-[15px] md:py-[14px] sm:py-[12px]
                        px-[14px] xl:px-[33px] md:px-[22px] sm:px-[19px]
                        ">Jelajahi Sekarang</button>

                    <button class="font-semibold text-[12px] sm:text-[14px] xl:text-[19px] md:text-[15px]
                        text-white
                        py-[10px] xl:py-[15px] md:py-[14px] sm:py-[12px]
                        px-[11px] xl:px-[33px] md:px-[22px] sm:px-[19px]
                        underline">Daftarkan Bisnismu</button>

                </div>

            </div>

        </section>

        <section id="umkm-section" 
            class="flex flex-col justify-center items-center px-[36px] sm:px-30 md:px-35 py-10 h-screen xl:h-[120vh] text-center bg-[var(--bg)] relative">

            <div class="absolute bg-[var(--bg)] h-130 w-13 sm:w-20 md:w-27 blur-lg -left-[30px]"></div>
            <div class="absolute bg-[var(--bg)] h-130 w-13 sm:w-20 md:w-27 blur-lg -right-[30px]"></div>

            <h2 class="text-[var(--primary-500)] text-[23px] sm:text-[29px] lg:text-[40px] xl:text-[50px] font-medium">Wujudkan UMKM <b>Berdaya</b></h2>

            <p class="text-[var(--secondary-text)] text-[12px] sm:text-[15px] lg:text-[16px] xl:text-[20px] font-light pt-2.5">Temukan berbagai UMKM yang dikelola oleh penyandang disabilitas di sekitar Bandung!</p>

            <div id="umkm-cards"
                class="flex items-center gap-2 sm:mt-10">

                <div id="umkm-card-left"
                    class="flex flex-col justify-between bg-[#FFFFFF] h-[340px] xl:h-[450px] w-[250px] xl:w-[300px] shadow-md px-5 py-7 mt-10 rounded-[18px] top-[100px] xl:hover:size-110 transition-all duration-300">  

                    <img src="#" alt="">

                    <div class="flex flex-col justify-center items-start gap-3">

                        <h3 class="text-[13px] lg:text-[16px] font-semibold text-[var(--primary-500)] font-[Montserrat]">Lorem Ipsum</h3>

                        <div id="kategori"
                            class="border-1 border-[var(--info)] text-[var(--info)] rounded-2xl px-2 py-0.5 text-[10px] xl:text-[12px]">Kerajinan</div>
                        
                        <div id="lokasi"
                            class="flex gap-1">

                            <img src="{{ asset('images/lokasi-gps.svg') }}" alt="" class="w-3">

                            <p class="text-[11px] xl:text-[13px] text-[var(--caption)]">Bandung</p>

                        </div>

                        <button class="bg-[var(--primary-500)] rounded-4xl text-white w-full text-[12px] lg:text-[16px] mt-3 py-2 items-center justify-center">Lihat Detail</button>
                        
                    </div>
                </div>

                <div id="umkm-card-middle"
                    class="flex flex-col justify-between bg-[#FFFFFF] h-[400px] xl:h-[500px] w-[250px] xl:w-[320px] shadow-md px-5 py-7 mt-10 rounded-[18px] top-[100px] z-7 xl:hover:size-130 transition-all duration-300">  

                    <img src="#" alt="">

                    <div class="flex flex-col justify-center items-start gap-3">

                        <h3 class="text-[13px] lg:text-[16px] font-semibold text-[var(--primary-500)] font-[Montserrat]">Lorem Ipsum</h3>

                        <div id="kategori"
                            class="border-1 border-[var(--info)] text-[var(--info)] rounded-2xl px-2 py-0.5 text-[10px] xl:text-[12px]">Kerajinan</div>

                        <div id="kolaborasi"
                            class="flex gap-2 bg-[var(--primary-50)] py-2 px-3 items-center rounded-md min-w-full">
                            
                            <img src="{{ asset('images/kolaborasi.svg') }}" alt=""
                                class="w-8 xl:w-11">
                                
                            <p class="text-[8px] lg:text-[10px] xl:text-[13px] text-start text-[var(--primary-500)] font-[Montserrat]">Berkolaborasi dengan <br> <b>Lorem Ipsum</b></p>
                        
                        </div>
                        
                        <div id="lokasi"
                            class="flex gap-1">

                            <img src="{{ asset('images/lokasi-gps.svg') }}" alt="" class="w-3">

                            <p class="text-[11px] xl:text-[13px] text-[var(--caption)]">Bandung</p>

                        </div>

                        <button class="bg-[var(--primary-500)] rounded-4xl text-white w-full text-[12px] lg:text-[16px] mt-3 py-2 items-center justify-center">Lihat Detail</button>

                    </div>
                </div>

                <div id="umkm-card-right"
                    class="flex flex-col justify-between bg-[#FFFFFF] h-[340px] xl:h-[450px] w-[250px] xl:w-[300px] shadow-md px-5 py-7 mt-10 rounded-[18px] top-[100px] xl:hover:size-110 transition-all duration-300">  

                    <img src="#" alt="">

                    <div class="flex flex-col justify-center items-start gap-3">

                        <h3 class="text-[13px] lg:text-[16px] font-semibold text-[var(--primary-500)] font-[Montserrat]">Lorem Ipsum</h3>

                        <div id="kategori"
                            class="border-1 border-[var(--info)] text-[var(--info)] rounded-2xl px-2 py-0.5 text-[10px] xl:text-[12px]">Kerajinan</div>
                        
                        <div id="lokasi"
                            class="flex gap-1">

                            <img src="{{ asset('images/lokasi-gps.svg') }}" alt="" class="w-3">

                            <p class="text-[11px] xl:text-[13px] text-[var(--caption)]">Bandung</p>

                        </div>

                        <button class="bg-[var(--primary-500)] rounded-4xl text-white w-full text-[12px] lg:text-[16px] mt-3 py-2 items-center justify-center">Lihat Detail</button>
                        
                    </div>
                </div>
            </div>

            <button class="flex gap-2 mt-13 border-1 border-[var(--primary-600)] rounded-4xl py-2 px-4 hover:bg-[var(--primary-600)] transition-all duration-300 text-[var(--primary-600)] hover:text-[var(--bg)] items-center">
                <div class="text-[13px] sm:text-[16px] xl:text-[18px]">Lihat UMKM Lainnya</div>
                <div id="back" wire:click="toggleSidebar"
                    class="cursor-pointer">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5061 3.43558C12.8178 3.16282 13.2917 3.1944 13.5644 3.50613L20.5644 11.5061C20.8119 11.7889 20.8119 12.2111 20.5644 12.4939L13.5644 20.4939C13.2917 20.8056 12.8178 20.8372 12.5061 20.5644C12.1944 20.2917 12.1628 19.8179 12.4356 19.5061L18.3472 12.75H4C3.58579 12.75 3.25 12.4142 3.25 12C3.25 11.5858 3.58579 11.25 4 11.25H18.3472L12.4356 4.49389C12.1628 4.18216 12.1944 3.70834 12.5061 3.43558Z" fill="currentColor" class=""/>
                </svg>
            </div>
            </button>

        </section>

        <section id="post-section"
            class="h-[120vh] bg-[var(--bg)] flex flex-col xl:flex-row justify-center xl:justify-between items-center w-full xl:px-35">

            <div class="group relative">

                <div id="postingan-card"
                    class="absolute top-0 left-0 group-hover:-top-10 group-hover:left-30 bg-white border-1 border-[var(--soft-bg)] rounded-md w-70 xl:w-90 py-5 shadow-md hidden 2xl:block duration-300 transition-all">

                    <div class="flex items-center mb-4 px-6">

                        <img src="{{ asset('images/default_profile_picture.svg') }}" alt="Default Picture"
                            class="w-7 xl:w-10 mr-3">

                        <div class="text-[10px] xl:text-[11px] flex flex-col justify-start text-[var(--primary-500)]">

                            <p class="text-start font-medium">Warung Lorem Ipsum</p>
                            <p class="text-start font-normal">2 jam yang lalu</p>

                        </div>

                        <img src="{{ asset('images/more-button-post.svg')}}" alt="More Button"
                            class="ml-16 xl:ml-25 w-4">
                    
                    </div>

                    <p id="deskripsi"
                        class="text-[10px] xl:text-[12px] font-[Montserrat] text-[var(--secondary-text)] px-6">
                        Deskripsi atau caption lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum
                    </p>

                    <img src="{{ asset('images/hero-section.svg') }}" alt="Picture Post"
                        class="my-4 w-full">

                    <div class="flex items-center gap-1.5">

                        <img src="{{ asset('images/like.svg') }}" alt="Like"
                            class="w-10 xl:w-11 pl-6">
                        
                        <p class="text-[10px] xl:text-[13px] text-[var(--secondary-text)]">30</p>

                    </div>

                    <p class="px-6 text-[9px] xl:text-[12px] text-[var(--secondary-text)] mt-2.5 font-[Montserrat]">
                        Disukai oleh Lorem Ipsum dan 29 Lainnya
                    </p>

                </div>

                <div id="postingan-card"
                    class="absolute top-0 left-0 group-hover:top-10 group-hover:left-18 bg-white rounded-md w-70 xl:w-90 py-5 shadow-md hidden 2xl:block transition-all duration-300">

                    <div class="flex items-center mb-4 px-6">

                        <img src="{{ asset('images/default_profile_picture.svg') }}" alt="Default Picture"
                            class="w-7 xl:w-10 mr-3">

                        <div class="text-[10px] xl:text-[11px] flex flex-col justify-start text-[var(--primary-500)]">

                            <p class="text-start font-medium">Warung Lorem Ipsum</p>
                            <p class="text-start font-normal">2 jam yang lalu</p>

                        </div>

                        <img src="{{ asset('images/more-button-post.svg')}}" alt="More Button"
                            class="ml-16 xl:ml-25 w-4">
                    
                    </div>

                    <p id="deskripsi"
                        class="text-[10px] xl:text-[12px] font-[Montserrat] text-[var(--secondary-text)] px-6">
                        Deskripsi atau caption lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum
                    </p>

                    <img src="{{ asset('images/hero-section.svg') }}" alt="Picture Post"
                        class="my-4 w-full">

                    <div class="flex items-center gap-1.5">

                        <img src="{{ asset('images/like.svg') }}" alt="Like"
                            class="w-10 xl:w-11 pl-6">
                        
                        <p class="text-[10px] xl:text-[13px] text-[var(--secondary-text)]">30</p>

                    </div>

                    <p class="px-6 text-[9px] xl:text-[12px] text-[var(--secondary-text)] mt-2.5 font-[Montserrat]">
                        Disukai oleh Lorem Ipsum dan 29 Lainnya
                    </p>

                </div>

                <div id="postingan-card"
                    class=" bg-white border-1 border-[var(--soft-bg)] rounded-md w-70 xl:w-90 py-5 shadow-md">

                    <div class="flex items-center mb-4 px-6">

                        <img src="{{ asset('images/default_profile_picture.svg') }}" alt="Default Picture"
                            class="w-7 xl:w-10 mr-3">

                        <div class="text-[10px] xl:text-[11px] flex flex-col justify-start text-[var(--primary-500)]">

                            <p class="text-start font-medium">Warung Lorem Ipsum</p>
                            <p class="text-start font-normal">2 jam yang lalu</p>

                        </div>

                        <img src="{{ asset('images/more-button-post.svg')}}" alt="More Button"
                            class="ml-16 xl:ml-25 w-4">
                    
                    </div>

                    <p id="deskripsi"
                        class="text-[10px] xl:text-[12px] font-[Montserrat] text-[var(--secondary-text)] px-6">
                        Deskripsi atau caption lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum
                    </p>

                    <img src="{{ asset('images/hero-section.svg') }}" alt="Picture Post"
                        class="my-4 w-full">

                    <div class="flex items-center gap-1.5">

                        <img src="{{ asset('images/like.svg') }}" alt="Like"
                            class="w-10 xl:w-11 pl-6">
                        
                        <p class="text-[10px] xl:text-[13px] text-[var(--secondary-text)]">30</p>

                    </div>

                    <p class="px-6 text-[9px] xl:text-[12px] text-[var(--secondary-text)] mt-2.5 font-[Montserrat]">
                        Disukai oleh Lorem Ipsum dan 29 Lainnya
                    </p>

                </div>
            </div>
            

            <div id="post-umkm-desc"
                class="mt-9 flex flex-col items-center xl:items-end justify-center xl:justify-end px-8 xl:gap-3.5">

                <h3 class="font-semibold text-[var(--primary-500)] text-[25px] sm:text-[38px] xl:text-[42px] 2xl:text-[50px]">Cerita & Aktivitas UMKM</h3>

                <p class="text-[9px] sm:text-[13px] xl:text-[15px] 2xl:text-[17px] text-center xl:text-end font-[Montserrat]">Ikuti perkembangan terbaru dari UMKM inklusif di daerah Bandung. <br>Dukung dan berinteraksi langsung dengan komunitas</p>

                <button class="font-semibold text-[var(--bg)] text-[12px] sm:text-[14px] md:text-[15px]
                        bg-[var(--primary-600)] rounded-4xl
                        py-[10px]  md:py-[14px] sm:py-[12px]
                        px-[14px]  md:px-[22px] sm:px-[19px]
                        mt-7">Lihat Lainnya</button>
            </div>

        </section>

    </main>
    
    <footer>

        <x-footer></x-footer>

    </footer>

    <a href="https://maps.app.goo.gl/SqGff3Yg4EUSeL6a7?g_st=aw" 
        class="hidden">link gmaps</a>
@endsection