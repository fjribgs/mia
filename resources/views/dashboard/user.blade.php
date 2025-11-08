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

                <h1 class="text-white text-[29px] sm:text-[37px] md:text-[40px] lg:text-[48px] md:w-[667px]">Memberdayakan UMKM <br />Disabilitas untuk <br><b>Tumbuh</b> dan <br> <b>Menginspirasi</b></h1>

                <p class="text-white pt-[32px] text-[12px] sm:text-[14px] font-normal xl:text-[19px] md:text-[16px] max-w-160">Jelajahi kisah inspiratif, dukung produk lokal, dan bantu UMKM disabilitas untuk meraih kemandirian ekonomi.</p>

                <div class="flex gap-2 justify-center md:justify-start mt-8 md:my-9">

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
                class="flex items-center xl:gap-5 gap-3 sm:mt-5">

                <div id="umkm-card-left"
                    class="flex flex-col justify-between bg-[#FFFFFF] h-[340px] xl:h-[450px] w-[250px] xl:w-[300px] shadow-md px-5 py-7 mt-10 rounded-[18px] top-[100px] xl:hover:w-[350px] transition-all duration-300">  

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
                    class="flex flex-col justify-between bg-[#FFFFFF] h-[400px] xl:h-[500px] w-[250px] xl:w-[320px] shadow-md px-5 py-7 mt-10 rounded-[18px] top-[100px] z-7 xl:hover:w-[370px] transition-all duration-300">  

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
                    class="flex flex-col justify-between bg-[#FFFFFF] h-[340px] xl:h-[450px] w-[250px] xl:w-[300px] shadow-md px-5 py-7 mt-10 rounded-[18px] top-[100px] xl:hover:w-[350px] transition-all duration-300">  

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
                    class="relative xl:top-3 xl:left-3 bg-white rounded-md w-70 xl:w-120 py-5 shadow-md z-8">

                    <div class="flex items-center mb-4 px-6">

                        <img src="{{ asset('images/default_profile_picture.svg') }}" alt="Default Picture"
                            class="w-7 xl:w-10 mr-3">

                        <div class="text-[10px] xl:text-[11px] flex flex-col justify-start text-[var(--primary-500)]">

                            <p class="text-start font-medium">Warung Lorem Ipsum</p>
                            <p class="text-start font-normal">2 jam yang lalu</p>

                        </div>

                        <img src="{{ asset('images/more-button-post.svg')}}" alt="More Button"
                            class="ml-16 xl:ml-56 w-4">
                    
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
                    class="absolute top-6 left-6 group-hover:top-15 group-hover:left-15 bg-white rounded-md w-70 xl:w-120 py-5 shadow-md hidden xl:block duration-300 transition-all">

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
                    class="absolute top-0 left-0 group-hover:-top-9 group-hover:-left-9 bg-white rounded-md w-70 xl:w-120 py-5 shadow-md hidden xl:block transition-all duration-300">

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

                <p class="text-[10px] sm:text-[13px] xl:text-[15px] 2xl:text-[17px] text-center xl:text-end font-[Montserrat] xl:w-160 ">Dukung dan berinteraksi langsung dengan komunitas untuk mengikuti perkembangan terbaru dari UMKM inklusif di daerah Bandung</p>

                <a class="flex gap-2 mt-7 border-1 border-[var(--primary-600)] rounded-4xl py-2 px-4 hover:bg-[var(--primary-600)] transition-all duration-300 text-[var(--primary-600)] hover:text-[var(--bg)] items-center cursor-pointer">

                    <div class="text-[13px] sm:text-[16px] xl:text-[18px]">Lihat Cerita Lainnya</div>

                        <div id="back" wire:click="toggleSidebar"
                            class="cursor-pointer">
                        
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5061 3.43558C12.8178 3.16282 13.2917 3.1944 13.5644 3.50613L20.5644 11.5061C20.8119 11.7889 20.8119 12.2111 20.5644 12.4939L13.5644 20.4939C13.2917 20.8056 12.8178 20.8372 12.5061 20.5644C12.1944 20.2917 12.1628 19.8179 12.4356 19.5061L18.3472 12.75H4C3.58579 12.75 3.25 12.4142 3.25 12C3.25 11.5858 3.58579 11.25 4 11.25H18.3472L12.4356 4.49389C12.1628 4.18216 12.1944 3.70834 12.5061 3.43558Z" fill="currentColor" class=""/>
                        </svg>
                    </div>
                </a>
            </div>

        </section>

        <section id="maps-section"
            class="flex flex-col h-[120vh] bg-[var(--bg)] lg:px-35 px-9 items-center justify-center">

            <div class="flex flex-col w-full gap-1">

                <h3 class="font-semibold text-[var(--primary-500)] text-[25px] sm:text-[38px] xl:text-[42px] 2xl:text-[50px]">Peta Lokasi</h3>

                <p class="text-[11px] sm:text-[13px] lg:text-[15px] xl:text-[19px] text-[var(--secondary-text)] font-[Montserrat] lg:w-140 xl:w-200">Ikuti perkembangan terbaru mengenai lokasi UMKM inklusif di daerah Bandung.</p>

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
                    class="mt-0 flex-[3] xl:flex-[4] border-2 border-[var(--soft-bg)] rounded-[6px] w-full lg:h-full relative shadow-md">

                    <img src="{{  asset('images/maps.webp') }}" alt="Maps"
                        class="w-full blur-[3px] h-70 lg:h-140 object-cover">

                    <div class="absolute inset-0 flex items-center justify-center flex-col text-center text-[var(--primary-500)] px-7">

                        <div class="bg-white blur-lg w-50 xl:w-120 h-30 absolute z-1 rounded-4xl"></div>

                        <img src="{{ asset('images/locations.webp') }}" alt=""
                            class="z-2 w-10 xl:w-28">

                        <h5 class="text-[21px] lg:text-[26px] font-semibold z-2 mt-4 xl:mt-5">Peta Interaktif</h5>

                        <p class="text-[12px] lg:text-[15px] font-[Montserrat] font-medium z-2 xl:mb-4">Peta akan menampilkan lokasi UMKM dengan pin interaktif.</p>

                        <a href="#" class="bg-[var(--primary-500)] hover:bg-[var(--primary-400)] px-5 py-3 rounded-4xl mt-4 z-2 flex gap-2 items-center duration-200 transition-all cursor-pointer">

                            <svg width="18" height="18" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.0721 3.19692C17.1375 3.02881 16.9718 2.86318 16.8037 2.92855L3.0431 8.27991C2.86985 8.34729 2.86597 8.59103 3.037 8.66387L8.32008 10.9141C8.66499 11.061 8.93967 11.3357 9.08657 11.6806L11.3368 16.9637C11.4096 17.1347 11.6534 17.1308 11.7207 16.9576L17.0721 3.19692ZM16.3529 1.76921C17.5297 1.31158 18.6891 2.47101 18.2314 3.64777L12.8801 17.4084C12.4085 18.6212 10.7022 18.6483 10.1923 17.4511L7.94214 12.168C7.92115 12.1187 7.88191 12.0795 7.83264 12.0585L2.54955 9.80831C1.35239 9.29841 1.37949 7.5922 2.59224 7.12057L16.3529 1.76921Z" fill="#E6F2F1"/>
                            </svg>

                            <p class="text-[13px] lg:text-[15px] xl:text-[18px] text-[var(--bg)] ">Lihat Lokasi UMKM</p>

                        </a>

                    </div>

                </div>

            </div>

        </section>

        <section id="about-us-section"
            class="h-[120vh] flex flex-col relative items-center justify-center px-6 lg:px-35 text-[var(--primary-500)] w-full">

            <div class="flex gap-20 items-center justify-center">

                <div class="flex flex-col gap-3 mt-2 w-full text-[var(--primary-500)]">

                    <h2 class="font-semibold text-[20px] md:text-[27px] xl:text-[45px] md:max-w-130 xl:max-w-180">Memberdayakan UMKM untuk Indonesia yang lebih Inklusif</h2>

                    <div class="flex flex-col gap-5 font-[Montserrat] text-[11px] md:text-[14px] xl:text-[16px]">

                        <p>Inspira adalah platform digital yang didedikasikan untuk mendukung dan mengambangkan Usaha Mikro Kecil dan Menengah (UMKM) yang dikelola oleh penyandang disabilitas di Indonesia. </p>

                        <p>Kami percaya bahwa setiap orang memiliki potensi untuk berkontribusi dalam perekonomian. Melalui Inspira, kami  menciptakan ekosistem diamana UMKM inklusif dapat tumbuh, berkolaborasi, dan mencapai kesuksesan bersama. </p>

                    </div>

                    <div class="flex flex-col mt-7 gap-3">

                        <div class="flex gap-3 flex-1 justify-between">

                            <div id="inklusif"
                                class="flex flex-col gap-1 shadow-md border-1 border-[var(--soft-bg)] rounded-[8px] px-4 py-5 flex-[1]">

                                <svg width="16" height="20" viewBox="0 0 26 22" fill="none" xmlns="http://www.w3.org/2000/svg"
                                    class="bg-[var(--primary-50)] rounded-4xl px-2 pl-2 size-8">
                                <path d="M18.3965 0.100586C20.2126 0.0871452 21.9601 0.778521 23.2549 2.02344C24.5498 3.26861 25.2858 4.96566 25.2998 6.74121C25.3137 8.51688 24.6044 10.2248 23.3291 11.4893V11.4902L13.708 20.8857C13.436 21.1513 13.0673 21.2997 12.6836 21.2998C12.2998 21.2998 11.9304 21.1514 11.6582 20.8857L2.03516 11.4893L2.0332 11.4883V11.4873C0.780807 10.2259 0.0864749 8.53323 0.100586 6.77539C0.114798 5.01746 0.836693 3.33579 2.10938 2.09375L2.2793 1.92773V1.93848C2.87885 1.39176 3.57323 0.952459 4.33203 0.645508C5.16321 0.309305 6.05456 0.136719 6.9541 0.136719C7.85346 0.136772 8.74418 0.30939 9.5752 0.645508C10.4063 0.981716 11.1615 1.47526 11.7979 2.09668H11.7988C12.029 2.32229 12.3236 2.60024 12.6826 2.93066C13.0402 2.6002 13.3353 2.32226 13.5674 2.0957C14.8427 0.831347 16.5801 0.11413 18.3965 0.100586ZM18.4004 1.89062C17.0653 1.90081 15.7895 2.42911 14.8535 3.35742H14.8525C14.7224 3.48447 14.5753 3.6265 14.4102 3.78223L13.8623 4.29199L12.751 5.31348L12.6836 5.37598L12.6152 5.31348L11.5039 4.29199C11.103 3.9225 10.7728 3.61054 10.5127 3.35742H10.5117C9.56848 2.43665 8.28889 1.91905 6.9541 1.91895C5.61913 1.91895 4.33885 2.43651 3.39551 3.35742C1.45299 5.25542 1.4302 8.32301 3.32227 10.2295L12.6826 19.3691L22.0264 10.2451L22.1963 10.0674C23.0245 9.16016 23.4805 7.98283 23.4707 6.7627C23.4602 5.46134 22.9213 4.21652 21.9707 3.30273C21.5 2.85022 20.9417 2.49229 20.3291 2.25C19.7167 2.00784 19.0612 1.8856 18.4004 1.89062Z" fill="#007F6E" stroke="#007F6E" stroke-width="0.2"/>
                                </svg>

                                <h3 class="font-medium text-[15px] lg:text-[17px]">Inklusif</h3>

                                <p class="font-[Montserrat] text-[11px] lg:text-[14px]">Mendukung ekosistem bisnis yang setara untuk semua</p>
                            </div>

                            <div id="kolaboratif"
                                class="flex flex-col gap-1 shadow-md border-1 border-[var(--soft-bg)] rounded-[8px] px-4 py-5 flex-[1]">

                                <svg width="16" height="20" viewBox="0 0 25 25" fill="none" class="bg-[var(--primary-50)] rounded-4xl px-2 pl-2 size-8" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.2033 1.92308C7.00326 1.92308 5.21978 3.70656 5.21978 5.90659C5.21978 8.10663 7.00326 9.89011 9.2033 9.89011C11.4033 9.89011 13.1868 8.10663 13.1868 5.90659C13.1868 3.70656 11.4033 1.92308 9.2033 1.92308ZM3.2967 5.90659C3.2967 2.64447 5.94117 0 9.2033 0C12.4654 0 15.1099 2.64447 15.1099 5.90659C15.1099 9.16871 12.4654 11.8132 9.2033 11.8132C5.94117 11.8132 3.2967 9.16871 3.2967 5.90659Z" fill="#007F6E"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.76441 16.7582C4.09061 16.7582 1.92308 18.9258 1.92308 21.5996C1.92308 21.7326 1.94603 21.8245 1.96907 21.8766C1.98764 21.9185 2.00132 21.9265 2.00739 21.93C2.66691 22.3176 4.56417 23.0769 9.20329 23.0769C13.8424 23.0769 15.7391 22.3179 16.3986 21.9303C16.4047 21.9268 16.4189 21.9185 16.4375 21.8766C16.4606 21.8245 16.4835 21.7326 16.4835 21.5996C16.4835 18.9258 14.316 16.7582 11.6422 16.7582H6.76441ZM0 21.5996C0 17.8637 3.02853 14.8352 6.76441 14.8352H11.6422C15.3781 14.8352 18.4066 17.8637 18.4066 21.5996C18.4066 22.243 18.1891 23.1086 17.3731 23.5882C16.2976 24.2203 14.0111 25 9.20329 25C4.39548 25 2.10902 24.2203 1.03354 23.5882C0.21747 23.1086 0 22.243 0 21.5996Z" fill="#007F6E"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.9289 2.35901C17.0675 1.84637 17.5954 1.5431 18.108 1.68165C20.229 2.2549 21.7033 4.34937 21.7033 6.73077C21.7033 9.24703 19.9786 11.5158 17.5597 11.8063C17.0325 11.8697 16.5537 11.4936 16.4904 10.9663C16.427 10.4391 16.8031 9.96031 17.3304 9.89697C18.6203 9.74203 19.7802 8.44676 19.7802 6.73077C19.7802 5.10267 18.782 3.85588 17.6063 3.53812C17.0936 3.39957 16.7904 2.87166 16.9289 2.35901Z" fill="#007F6E"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.798 15.6126C19.8997 15.0914 20.4046 14.7513 20.9258 14.8529C23.2922 15.3144 25 17.3875 25 19.7985V20.4668C25 21.0586 24.8224 21.9015 24.0505 22.3949C23.5308 22.7271 22.7247 23.0811 21.4819 23.3326C20.9614 23.4379 20.4541 23.1013 20.3488 22.5808C20.2435 22.0603 20.58 21.553 21.1005 21.4477C22.1608 21.2331 22.7339 20.9541 23.0147 20.7746L23.017 20.7724C23.0191 20.7698 23.0266 20.7596 23.0359 20.7369C23.0564 20.6872 23.0769 20.598 23.0769 20.4668V19.7985C23.0769 18.3077 22.0209 17.0258 20.5577 16.7405C20.0365 16.6388 19.6964 16.1339 19.798 15.6126Z" fill="#007F6E"/>
                                </svg>


                                <h3 class="font-medium text-[15px] lg:text-[17px]">Kolaboratif</h3>

                                <p class="font-[Montserrat] text-[11px] lg:text-[14px]">Membangun jaringan dan kolaborasi yang kuat</p>
                            </div>

                        </div>

                        <div class="flex gap-3 flex-1 justify-between">

                            <div id="berdampak"
                                class="flex flex-col gap-1 shadow-md border-1 border-[var(--soft-bg)] rounded-[8px] px-4 py-5 flex-[1]">

                                <svg width="16" height="20" viewBox="0 0 27 27" fill="none" class="bg-[var(--primary-50)] rounded-4xl px-2 pl-2 size-8" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.25 25.75C20.1537 25.75 25.75 20.1537 25.75 13.25C25.75 6.34625 20.1537 0.75 13.25 0.75C6.34625 0.75 0.75 6.34625 0.75 13.25C0.75 20.1537 6.34625 25.75 13.25 25.75Z" stroke="#007F6E" stroke-width="1.5" stroke-miterlimit="10" stroke-linejoin="round"/>
                                <path d="M13.25 20.75C15.2391 20.75 17.1468 19.9598 18.5533 18.5533C19.9598 17.1468 20.75 15.2391 20.75 13.25C20.75 11.2609 19.9598 9.35322 18.5533 7.9467C17.1468 6.54018 15.2391 5.75 13.25 5.75C11.2609 5.75 9.35322 6.54018 7.9467 7.9467C6.54018 9.35322 5.75 11.2609 5.75 13.25C5.75 15.2391 6.54018 17.1468 7.9467 18.5533C9.35322 19.9598 11.2609 20.75 13.25 20.75Z" stroke="#007F6E" stroke-width="1.5" stroke-miterlimit="10" stroke-linejoin="round"/>
                                <path d="M13.25 15.75C13.913 15.75 14.5489 15.4866 15.0178 15.0178C15.4866 14.5489 15.75 13.913 15.75 13.25C15.75 12.587 15.4866 11.9511 15.0178 11.4822C14.5489 11.0134 13.913 10.75 13.25 10.75C12.587 10.75 11.9511 11.0134 11.4822 11.4822C11.0134 11.9511 10.75 12.587 10.75 13.25C10.75 13.913 11.0134 14.5489 11.4822 15.0178C11.9511 15.4866 12.587 15.75 13.25 15.75Z" stroke="#007F6E" stroke-width="1.5" stroke-miterlimit="10" stroke-linejoin="round"/>
                                </svg>


                                <h3 class="font-medium text-[15px] lg:text-[17px]">Berdampak</h3>

                                <p class="font-[Montserrat] text-[11px] lg:text-[14px]">Menciptakan perubahan yang nyata bagi UMKM</p>
                            </div>

                            <div id="berkelanjutan"
                                class="flex flex-col gap-1 shadow-md border-1 border-[var(--soft-bg)] rounded-[8px] px-4 py-5 flex-[1]">

                                <svg width="16" height="20" viewBox="0 0 27 27" fill="none" class="bg-[var(--primary-50)] rounded-4xl px-2 pl-2 size-8" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.9699 17.0671L14.7886 21.1989C14.3459 22.7455 12.1541 22.7455 11.7114 21.1989L10.5315 17.0671C10.4568 16.8058 10.3167 16.5677 10.1245 16.3755C9.93226 16.1833 9.69424 16.0432 9.43287 15.9685L5.30109 14.7886C3.75451 14.3459 3.75451 12.1541 5.30109 11.7114L9.43287 10.5315C9.69424 10.4568 9.93226 10.3167 10.1245 10.1245C10.3167 9.93226 10.4568 9.69424 10.5315 9.43287L11.7114 5.30109C12.1541 3.75451 14.3459 3.75451 14.7886 5.30109L15.9685 9.43287C16.0432 9.69424 16.1833 9.93226 16.3755 10.1245C16.5677 10.3167 16.8058 10.4568 17.0671 10.5315L21.1989 11.7114C22.7455 12.1541 22.7455 14.3459 21.1989 14.7886L17.0671 15.9685C16.8058 16.0432 16.5677 16.1833 16.3755 16.3755C16.1833 16.5677 16.0432 16.8058 15.9685 17.0671M23.3428 23.5374L22.8415 25.548C22.7748 25.8173 22.3922 25.8173 22.3242 25.548L21.8215 23.5374C21.8098 23.4908 21.7856 23.4482 21.7515 23.4141C21.7175 23.3801 21.6749 23.3559 21.6282 23.3441L19.6177 22.8415C19.3483 22.7748 19.3483 22.3922 19.6177 22.3242L21.6282 21.8215C21.6749 21.8098 21.7175 21.7856 21.7515 21.7515C21.7856 21.7175 21.8098 21.6749 21.8215 21.6282L22.3242 19.6177C22.3908 19.3483 22.7735 19.3483 22.8415 19.6177L23.3441 21.6282C23.3559 21.6749 23.3801 21.7175 23.4141 21.7515C23.4482 21.7856 23.4908 21.8098 23.5374 21.8215L25.548 22.3242C25.8173 22.3908 25.8173 22.7735 25.548 22.8415L23.5374 23.3441C23.4908 23.3559 23.4482 23.3801 23.4141 23.4141C23.3801 23.4482 23.3546 23.4908 23.3428 23.5374ZM4.67712 4.87178L4.17582 6.88234C4.10915 7.15166 3.72517 7.15166 3.65851 6.88234L3.15587 4.87178C3.1441 4.82511 3.11991 4.78249 3.08587 4.74846C3.05184 4.71442 3.00922 4.69023 2.96255 4.67846L0.951989 4.17582C0.68267 4.10915 0.68267 3.72517 0.951989 3.65851L2.96255 3.15587C3.00922 3.1441 3.05184 3.11991 3.08587 3.08587C3.11991 3.05184 3.1441 3.00922 3.15587 2.96255L3.65851 0.951989C3.72517 0.68267 4.10915 0.68267 4.17582 0.951989L4.67846 2.96255C4.69023 3.00922 4.71442 3.05184 4.74846 3.08587C4.78249 3.11991 4.82511 3.1441 4.87178 3.15587L6.88234 3.65851C7.15166 3.72517 7.15166 4.10915 6.88234 4.17582L4.87178 4.67846C4.82511 4.69023 4.78249 4.71442 4.74846 4.74846C4.71442 4.78249 4.6889 4.82511 4.67712 4.87178Z" stroke="#007F6E" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>


                                <h3 class="font-medium text-[15px] lg:text-[17px]">Berkelanjutan</h3>

                                <p class="font-[Montserrat] text-[11px] lg:text-[14px]">Pertumbuhan bisnis yang berkelanjutan</p>
                            </div>

                        </div>
            
                    </div>
        
                </div>

                <div class="hidden xl:block">

                    <div id="images">

                        <img src="{{ asset('images/about-us-section.webp') }}" alt=""
                            class="w-150 hidden xl:block rounded-[15px] shadow-md">

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