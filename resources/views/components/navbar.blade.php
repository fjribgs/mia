<nav id="navbar"
    class="flex fixed py-9 px-[36px] md:px-35 justify-between items-center w-screen">

    <div>
        <a href="/">
            <img src="{{ asset('images/logo.svg') }}" alt=""
                class="xl:w-43 h-auto w-26 md:w-40">
        </a>
    </div> 

    <div class="xl:flex gap-[35px] font-[Montserrat] hidden absolute left-1/2 -translate-x-1/2">
        <a href="#"
            class="text-white hover:font-bold transition-all ease-in">Beranda</a>
        <a href="#" 
            class="text-white hover:font-bold transition-all ease-in">Fitur</a>
        <a href="#"
            class="text-white hover:font-bold transition-all ease-in">Kolaborasi</a>
        <a href="#"
            class="text-white hover:font-bold transition-all ease-in">Event</a>
        <a href="#"
            class="text-white hover:font-bold transition-all ease-in">Tentang Kami</a>
    </div>

    @if (Auth::check())
        <div class="flex text-white gap-3">
            <h2>{{ Auth::user()->name }}</h2>
            <img src="{{ asset('images/arrow-dropdown.svg') }}" alt="">
        </div>
        {{-- <a href="{{ route('auth.logout') }}">logout</a> --}}
    @else
        <div class="hidden xl:flex gap-2">
            <a href="{{ route('auth.login') }}"
                class="border-white border-1 rounded-3xl px-[21px] py-[10px] text-white font-semibold hover:scale-105 transition-all duration-300"">Login</a>
            <a href="{{ route('auth.register') }}"
                class="border-white border-1 rounded-3xl px-[21px] py-[10px] text-black font-medium bg-white hover:scale-105 transition-all">Register</a>
        </div>
    @endif


    <div class="xl:hidden">
        <img src="{{ asset('images/sidebar.svg')}}" alt="Sidebar"
            class="md:scale-150">
    </div>
</nav>