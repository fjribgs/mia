<div>
    <nav id="navbar"
        class="flex fixed top-6 md:top-5 left-7 right-7 py-4 px-5 md:left-25 md:right-25 md:py-[15px] md:px-[40px] justify-between items-center border border-[#E6F2F1]/30 bg-[#E6F2F1]/10 rounded-[16px] z-70 transition-all duration-500">

        <div>
            <a href="/">
                <img src="{{ asset('images/logo.svg') }}" alt=""
                    class="xl:w-43 h-auto w-22 md:w-28">
            </a>
        </div>

        <div class="xl:flex gap-[35px] font-[Montserrat] hidden justify-end items-center w-full pr-10">

            <a href="#"
                class="text-white hover:font-bold transition-all ease-in">Beranda</a>
            <a href="#"
                class="text-white hover:font-bold transition-all ease-in">UMKM</a>
            <a href="#"
                class="text-white hover:font-bold transition-all ease-in">Postingan</a>
            <a href="#"
                class="text-white hover:font-bold transition-all ease-in">Tentang Kami</a>
            <a href="#"
                class="text-white hover:font-bold transition-all ease-in">Kontak</a>
            <div id="separator"
                class="h-7 w-0.5 bg-gray-500"></div>

        </div>

        @if (Auth::check())
            <div class="hidden xl:flex cursor-pointer" wire:click="toggle">

                <div class="flex text-white gap-3">
                    <h2>{{ Auth::user()->name }}</h2>
                    <img src="{{ asset('images/arrow-dropdown.svg') }}" alt="">
                </div>

            </div>
            {{-- <a href="{{ route('auth.logout') }}">logout</a> --}}
        @else
            <div class="hidden xl:flex gap-2">

                <a href="{{ route('auth.login') }}"
                    class="border-white border-1 rounded-3xl px-[21px] py-[10px] text-white font-semibold hover:scale-105 transition-all duration-300">Login</a>
                    
                <a href="{{ route('auth.register') }}"
                    class="border-white border-1 rounded-3xl px-[21px] py-[10px] text-black font-medium bg-white hover:scale-105 transition-all duration-300">Register</a>
            
            </div>
        @endif


        <div class="xl:hidden cursor-pointer" wire:click="toggleSidebar">

            <img src="{{ asset('images/sidebar.svg')}}" alt="Sidebar"
                class="md:scale-150">

        </div>

    </nav>

    <div class=" {{ $isOpen ? 'max-h-60 opacity-100' : 'max-h-0 opacity-0 pointer-events-none' }} xl:fixed hidden right-30 mt-20 w-40 bg-white text-black rounded-lg shadow-lg z-50 transition-all" >
        
        <a href="/profile" class="block px-4 py-2 hover:bg-gray-200 hover:rounded-lg transition-all duration-300">Profil</a>
        
        <a href="{{ route('auth.logout') }}" class="block px-4 py-2 hover:bg-gray-200 hover:rounded-lg transition-all duration-300">Logout</a>
    
    </div>

    <div id="background-sidebar"
        class="{{ $isSidebarOpen ? 'bg-black/30 pointer-events-none' : 'bg-black/0 pointer-events-none' }} w-screen h-screen fixed z-90 transition-all"></div>

    <div id="sidebar"
        class="flex flex-col fixed right-0 top-0 {{ $isSidebarOpen ? 'translate-x-0' : 'translate-x-full' }} bg-[var(--primary-600)]/97 border-2 border-[var(--primary-500)] h-screen w-[60vw] md:w-[50vw] lg:w-[40vw] cursor-pointer transition-all duration-400 z-100 rounded-lg gap-6 px-6 py-10 end">

        <div id="back" wire:click="toggleSidebar"
            class="cursor-pointer">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5061 3.43558C12.8178 3.16282 13.2917 3.1944 13.5644 3.50613L20.5644 11.5061C20.8119 11.7889 20.8119 12.2111 20.5644 12.4939L13.5644 20.4939C13.2917 20.8056 12.8178 20.8372 12.5061 20.5644C12.1944 20.2917 12.1628 19.8179 12.4356 19.5061L18.3472 12.75H4C3.58579 12.75 3.25 12.4142 3.25 12C3.25 11.5858 3.58579 11.25 4 11.25H18.3472L12.4356 4.49389C12.1628 4.18216 12.1944 3.70834 12.5061 3.43558Z" fill="white"/>
            </svg>
        </div>
        

        <div id="navigation"
            class="flex flex-col gap-3 transition-all duration-150 w-full">
            <a href="#"
                class="text-white active:bg-[var(--primary-700)] active:active:px-4 py-1 rounded-sm transition-all duration-150">Beranda</a>
            <a href="#"
                class="text-white active:bg-[var(--primary-700)] active:px-4 py-1 rounded-sm transition-all duration-150">UMKM</a>
            <a href="#"
                class="text-white active:bg-[var(--primary-700)] active:px-4 py-1 rounded-sm transition-all duration-150">Postingan</a>
            <a href="#"
                class="text-white active:bg-[var(--primary-700)] active:px-4 py-1 rounded-sm transition-all duration-150">Tentang Kami</a>
            <a href="#"
                class="text-white active:bg-[var(--primary-700)] active:px-4 py-1 rounded-sm transition-all duration-150">Kontak</a>
        </div>

        <div id="separator"
            class="bg-gray-400 h-0.5 w-full">

        </div>
        
        <div id="account">

            @if (Auth::check())
                <div class="flex xl:hidden cursor-pointer" wire:click="toggle">

                    <div class="flex text-white gap-3">
                        <h2>{{ Auth::user()->name }}</h2>
                        <img src="{{ asset('images/arrow-dropdown.svg') }}" alt="">
                    </div>

                </div>
                {{-- <a href="{{ route('auth.logout') }}">logout</a> --}}
            @else
                <div class="flex gap-2">

                    <a href="{{ route('auth.login') }}"
                        class="border-white border-1 text-[12px] rounded-3xl px-[21px] py-[10px] text-white font-semibold hover:scale-105 transition-all duration-300">Login</a>
                    <a href="{{ route('auth.register') }}"
                        class="border-white border-1 text-[12px] rounded-3xl px-[21px] py-[10px] text-[var(--primary-500)] font-medium bg-white hover:scale-105 transition-all duration-300">Register</a>
                
                </div>
            @endif

            <div class=" {{ $isOpen ? 'max-h-60 opacity-100' : 'max-h-0 opacity-0 pointer-events-none' }} fixed xl:hidden w-full mt-4 bg-white text-black rounded-lg shadow-lg z-50 transition-all" >
        
                <a href="/profile" class="block px-4 py-2 hover:bg-gray-200 hover:rounded-lg transition-all duration-300 text-[12px]">Profil</a>
        
                <a href="{{ route('auth.logout') }}" class="block px-4 py-2 hover:bg-gray-200 hover:rounded-lg transition-all duration-300 text-[12px]">Logout</a>
    
            </div>
        </div>
        
    </div>
</div>
