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
                        bg-white rounded-4xl text-[var(--primary-500)]
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
            class="flex flex-col justify-center items-center px-[36px] sm:px-30 md:px-35 py-10 h-[120vh] text-center bg-[var(--bg)] relative">

            <div class="absolute bg-[var(--bg)] h-130 w-13 sm:w-20 md:w-27 blur-lg -left-[30px]"></div>
            <div class="absolute bg-[var(--bg)] h-130 w-13 sm:w-20 md:w-27 blur-lg -right-[30px]"></div>

            <h2 class="text-[var(--primary-500)] text-[23px] sm:text-[29px] lg:text-[40px] xl:text-[42px] font-semibold">Wujudkan UMKM Berdaya</h2>

            <p class="text-[var(--secondary-text)] text-[12px] sm:text-[15px] lg:text-[16px] xl:text-[17px] font-light pt-2.5">Temukan berbagai UMKM yang dikelola oleh penyandang disabilitas di sekitar Bandung!</p>

            <div id="umkm-cards"
                class="flex items-center xl:gap-5 gap-3 sm:mt-10">

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

            <button class="flex gap-2 mt-13 border-1 border-[var(--primary-600)] rounded-4xl py-2 px-4 hover:bg-[var(--primary-600)] transition-all duration-300 text-[var(--primary-600)] hover:text-[var(--bg)] items-center cursor-pointer">
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
            class="h-[100vh] bg-[var(--bg)] flex flex-col xl:flex-row justify-center xl:justify-between items-center w-full xl:px-45">

            <div class="group relative">

                <div id="postingan-card"
                    class="relative xl:top-3 xl:left-3 bg-white rounded-md w-70 xl:w-90 py-5 shadow-md z-8">

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
                    class="absolute top-6 left-6 group-hover:top-15 group-hover:left-15 bg-white rounded-md w-70 xl:w-90 py-5 shadow-md hidden xl:block duration-300 transition-all">

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
                    class="absolute top-0 left-0 group-hover:-top-9 group-hover:-left-9 bg-white rounded-md w-70 xl:w-90 py-5 shadow-md hidden xl:block transition-all duration-300">

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
                class="mt-9 xl:mt-20 flex flex-col items-center xl:items-end justify-center xl:justify-end px-8 xl:gap-3.5">

                <h3 class="font-semibold text-[var(--primary-500)] text-[25px] sm:text-[38px] xl:text-[42px] 2xl:text-[50px]">Cerita & Aktivitas UMKM</h3>

                <p class="text-[10px] sm:text-[13px] xl:text-[15px] 2xl:text-[17px] text-center xl:text-end font-[Montserrat] w-160">Ikuti perkembangan terbaru dari UMKM inklusif di daerah Bandung. Dukung dan berinteraksi langsung dengan komunitas</p>

                <button class="font-semibold text-[var(--bg)] text-[12px] sm:text-[14px]
                        bg-[var(--primary-600)] rounded-4xl
                        py-[10px]  md:py-[13px] sm:py-[12px]
                        px-[14px]  md:px-[24px] sm:px-[19px]
                        mt-7">Lihat Lainnya</button>
            </div>

        </section>

        <section id="maps-section"
            class="flex flex-col h-[120vh] bg-[var(--bg)] lg:px-35 px-9 items-center justify-center">

            <div class="flex flex-col w-full gap-1">

                <h3 class="font-semibold text-[var(--primary-500)] text-[25px] sm:text-[38px] xl:text-[42px] 2xl:text-[50px]">Peta Lokasi</h3>

                <p class="text-[11px] sm:text-[13px] lg:text-[15px] xl:text-[19px] text-[var(--secondary-text)] font-[Montserrat] lg:w-140 xl:w-180">Ikuti perkembangan terbaru dari UMKM inklusif di daerah Bandung. Dukung dan berinteraksi langsung dengan komunitas</p>

            </div>

            <div class="flex lg:flex-row flex-col w-full gap-5 items-center justify-center lg:mt-7">

                <div id="information"
                    class="flex flex-row flex-[1] lg:flex-col gap-2 w-full lg:h-full justify-between mt-3 lg:mt-0 text-center">

                    <div class="flex flex-col items-center justify-center bg-white shadow-md rounded-[10px] flex-1 h-[90px]">
                        
                        <h4 class="text-[22px] lg:text-[32px] text-[var(--primary-500)] font-medium">20+</h4>
                        <p class="text-[10px] lg:text-[13px] xl:text-[16px] text-[var(--primary-500)]">Lokasi UMKM Disabilitas</p>

                    </div>

                    <div class="flex flex-col items-center justify-center bg-white shadow-md rounded-[10px] flex-1 h-[90px]">
                        
                        <h4 class="text-[22px] lg:text-[32px] text-[var(--primary-500)] font-medium">15+</h4>
                        <p class="text-[10px] lg:text-[13px] xl:text-[16px] text-[var(--primary-500)]">Pelaku Usaha Terdaftar</p>

                    </div>

                    <div class="flex flex-col items-center justify-center bg-white shadow-md rounded-[10px] flex-1 h-[90px]">
                        
                        <h4 class="text-[22px] lg:text-[32px] text-[var(--primary-500)] font-medium">8+</h4>
                        <p class="text-[10px] lg:text-[13px] xl:text-[16px] text-[var(--primary-500)]">Kolaborasi Aktif</p>

                    </div>

                </div>

                <div id="maps"
                    class="mt-7 lg:mt-0 flex-[3] xl:flex-[4] border-2 border-[var(--soft-bg)] rounded-[6px] w-full lg:h-full relative shadow-md">

                    <img src="{{  asset('images/maps.webp') }}" alt="Maps"
                        class="w-full blur-[3px] h-70 lg:h-150 object-cover">

                    <div class="absolute inset-0 flex items-center justify-center flex-col text-center text-[var(--primary-500)] px-7">

                        <div class="bg-white blur-lg w-50 h-30 absolute z-1 rounded-4xl"></div>

                        <h5 class="text-[21px] lg:text-[26px] font-semibold z-2">Peta Interaktif</h5>

                        <p class="text-[12px] lg:text-[15px] font-[Montserrat] font-medium z-2">Peta akan menampilkan lokasi UMKM dengan pin interaktif.</p>

                        <a href="#" class="bg-[var(--primary-500)] hover:bg-[var(--primary-400)] px-4 py-2 rounded-4xl mt-4 z-2 flex gap-2 items-center duration-200 transition-all cursor-pointer">

                            <svg width="18" height="18" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.0721 3.19692C17.1375 3.02881 16.9718 2.86318 16.8037 2.92855L3.0431 8.27991C2.86985 8.34729 2.86597 8.59103 3.037 8.66387L8.32008 10.9141C8.66499 11.061 8.93967 11.3357 9.08657 11.6806L11.3368 16.9637C11.4096 17.1347 11.6534 17.1308 11.7207 16.9576L17.0721 3.19692ZM16.3529 1.76921C17.5297 1.31158 18.6891 2.47101 18.2314 3.64777L12.8801 17.4084C12.4085 18.6212 10.7022 18.6483 10.1923 17.4511L7.94214 12.168C7.92115 12.1187 7.88191 12.0795 7.83264 12.0585L2.54955 9.80831C1.35239 9.29841 1.37949 7.5922 2.59224 7.12057L16.3529 1.76921Z" fill="#E6F2F1"/>
                            </svg>

                            <p class="text-[13px] lg:text-[15px] text-[var(--bg)] ">Lihat Lokasi UMKM</p>

                        </a>

                    </div>

                </div>

            </div>

        </section>

    </main>
    
    <footer>

        <x-footer></x-footer>

    </footer>

    <a href="https://maps.app.goo.gl/SqGff3Yg4EUSeL6a7?g_st=aw" 
        class="hidden">link gmaps</a>
@endsection