<nav id="navbar"
    class="flex fixed py-10 px-[36px] md:px-35 justify-between items-center w-screen">

    <div>
        <a href="/">
            <img src="{{ asset('images/logo.svg') }}" alt=""
                class="xl:w-43 h-auto w-26 md:w-40">
        </a>
    </div> 

    <div class="xl:flex gap-[35px] font-[Montserrat] hidden">
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

    <div class="hidden xl:block">
        <button class="border-white border-1 rounded-3xl px-[25px] py-[10px] text-white font-semibold">Login</button>
        <button class="border-white border-1 rounded-3xl px-[25px] py-[10px] text-black font-medium bg-white">Register</button>
    </div>

    <div class="xl:hidden">
        <img src="{{ asset('images/sidebar.svg')}}" alt="Sidebar"
            class="md:scale-150">
    </div>
</nav>