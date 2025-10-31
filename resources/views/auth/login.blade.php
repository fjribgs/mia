<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    {{-- Mobile & Tablet Device --}}
    <img src="{{ asset('images/auth-bg.svg') }}" alt="Background"
        class="-z-10 absolute w-full object-cover h-full">

    <section id="mobile-device"
        class="xl:hidden block">
        <header class="px-[26px] pt-9 md:px-[38px]">
            <a href="{{ route('dashboard.user') }}">
                <img src="{{ asset('images/logo.svg') }}" alt=""
                    class="w-[100px]">
            </a>
            <h1 class="font-bold text-white md:hidden text-[32px] pt-8">Selamat <br> Datang <br> Kembali di <br> LokaHub!</h1>
            <h1 class="font-bold text-white md:block text-[40px] hidden pt-8">Selamat Datang di LokaHub</h1>
        </header>

        <div class="items-center justify-center bg-[var(--bg)] w-full px-[26px] rounded-t-2xl mt-10 pt-[33px] h-[700px] md:px-[38px]">
            <header>
                <h1 class="font-semibold text-[36px] md:text-[48px]">Masuk</h1>
                <p class="text-gray-500 -mt-2 text-[13px] md:text-[20px] font-[Montserrat]">Masuk untuk Melanjutkan</p>
            </header>
            
            <div class="mt-[40px]">
                <form action="{{ route('auth.postlogin') }}" method="post"
                    class="">
                    @csrf
                    <div>
                        <label for="username"
                            class="block font-medium text-[14px] md:text-[20px] text-gray-800">
                            Username
                        </label>
                        <input type="text" name="username" placeholder="Masukkan username"
                            class="border-1 w-full rounded-sm border-[var(--soft-border)] px-[16px]
                            py-[10px] text-[13px] md:text-[18px]">
                    </div>
                    
                    <div class="mt-[20px]">
                        <label for="password"
                            class="block font-medium text-[14px] text-[var(--caption)] md:text-[20px]">
                            Password
                        </label>
                        <input type="password" name="password" placeholder="********"
                            class="border-1 w-full rounded-sm border-[var(--soft-border)] px-[16px]
                            py-[10px] text-[13px] md:text-[18px]">
                    </div>
                    
                    <div class="">
                        <button type="submit"
                        class="bg-[var(--primary-700)] w-full justify-center text-white md:text-[22px] px-[28px] py-[12px] rounded-[50px] mt-13">Masuk</button>
                        <p class="text-[12px] md:text-[18px] justify-center mt-3 flex">Belum punya akun? <a href="{{ route('auth.register') }}" class="ml-1">Daftar Sekarang</a></p>
                    </div>
                    
                </form>
            </div>
        </div>
        {{-- <a href="{{ route('dashboard.user') }}">back</a> --}}
    </section>


    {{-- Desktop View --}}
    <section class="hidden justify-between xl:flex">
        <div class="px-35 py-12 h-screen w-50% flex flex-col justify-start">
            <div>
                <a href="{{ route('dashboard.user') }}">
                    <img src="{{ asset('images/logo.svg') }}" alt="Logo" class="w-[167px]">
                </a>
            </div>

            <div class="flex-grow flex items-center">
                <h1 class="2xl:text-[68px] text-[60px] font-bold text-white">Selamat <br> Datang<br> Kembali di <br>LokaHub!</h1>
            </div>
        </div>

        <div class="w-[50%] bg-white h-screen items-center flex flex-col justify-center rounded-l-[20px]">
            <header class="px-[26px] pt-9 md:px-[38px]">

                <h1 class="font-bold text-white md:hidden text-[32px] pt-8">Selamat <br> Datang <br> Kembali di <br> LokaHub</h1>

            </header>

            <div class="items-center justify-center bg-white w-full 2xl:px-56 xl:px-40 px-26 pt-[33px]">
                <header>
                    <h1 class="font-semibold text-[36px] md:text-[48px]">Masuk</h1>
                    <p class="text-[var(--secondary-text)] -mt-2 text-[13px] md:text-[20px] font-[Montserrat]">Masuk untuk Melanjutkan</p>
                </header>
                
                <div class="mt-[40px]">
                    <form action="{{ route('auth.postlogin') }}" method="post"
                            class="">
                            @csrf
                        <div>
                            <label for="username"
                                class="block font-medium text-[20px]
                                    text-gray-800">
                                Username
                            </label>
                                <input type="text" name="username" placeholder="Masukkan username"
                                    class="border-[2px] w-full rounded-md border-[var(--soft-bg)] px-[16px]
                                    py-[13px] text-[18px]">
                            </div>
                            
                            <div class="mt-[20px]">
                                <label for="password"
                                    class="block font-medium text-[20px] text-gray-800">
                                    Password
                                </label>
                                <input type="password" name="password" placeholder="********"
                                    class="border-[2px] w-full rounded-md border-[var(--soft-bg)] px-[16px]
                                    py-[13px] text-[18px]">
                            </div>
                        
                            <div class="mt-20">
                                <button type="submit"
                                    class="bg-[var(--primary-500)] hover:bg-[var(--primary-400)] w-full justify-center text-white md:text-[22px] px-[28px] py-[12px] rounded-[50px] mt-13 transition-all hover:cursor-pointer">Masuk</button>
                                <p class="text-[15px] text-[var(--secondary-text)] justify-center mt-4 flex">Belum punya akun? <a href="{{ route('auth.register') }}" class="ml-1"> Daftar Sekarang</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>      
        </div>
    </section>
</div>
</body>
</html>
