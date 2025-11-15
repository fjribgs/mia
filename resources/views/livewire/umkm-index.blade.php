<div class="w-screen flex flex-col">

    <header class="flex flex-col w-full bg-[var(--primary-50)] justify-end fixed z-9 shadow-md">
        
        <div class="py-4 px-5 md:py-[15px] md:px-35 mt-21 xl:mt-25 flex flex-col">

            <div id="search-bar" 
                class="relative bg-[var(--bg)] border-2 border-[var(--soft-bg)] rounded-[100px]">

                <div class="absolute flex items-center inset-y-0 pl-3 w-7 pointer-events-none">
                    <img src="{{ asset('images/search.svg') }}" alt="">
                </div>

                <input type="text" wire:model.live.debounce.300ms="search" placeholder="Cari UMKM..." class="w-full rounded-[100px] px-[35px] py-[10px] text-[13px] md:text-[18px]">

            </div>       

        </div>

    </header>

    <main class="py-4 px-5 md:py-[15px] md:px-35 mt-43 relative z-1">

        <div class="grid gap-5 grid-cols-[repeat(auto-fit,minmax(280px,1fr))] items-center sm:my-8 [&>div]:text-start [&>div>div]:px-5 [&>div>div]:py-5">

            @if ($umkms->count() > 0)

                @foreach ($umkms as $umkm)

                    <div class="flex flex-col justify-between bg-[#FFFFFF] w-full shadow-md rounded-[18px] xl:hover:-mt-5 transition-all duration-300">  

                        <img src="{{ asset('storage/' . $umkm->umkm->umkm_picture) }}"
                            alt="Foto UMKM"
                            class="w-full h-48 object-cover rounded-[18px]">

                        <div class="flex flex-col justify-center items-start gap-3">

                            <h3 class="text-[13px] lg:text-[16px] font-semibold text-[var(--primary-500)] font-[Montserrat]">{{ $umkm->name }}</h3>

                            <div id="kategori"
                                class="border-1 border-[var(--info)] text-[var(--info)] rounded-2xl px-2 py-0.5 text-[10px] xl:text-[12px]">
                                @foreach ($umkm->umkm->categories as $cat)
                                    <span>{{ $cat->category_name }}</span>
                                @endforeach
                            </div>

                            <div id="rating"
                                class="flex gap-1 items-center text-[var(--secondary-text)] text-[13px]">
                                
                                <img src="{{ asset('images/star.svg') }}" alt=""
                                    class="w-5">
                                <p>{{ $umkm->umkm->average_rating }}</p> 

                            </div>

                            <div id="lokasi"
                                class="flex gap-1">

                                <img src="{{ asset('images/lokasi-gps.svg') }}" alt="" class="w-3">

                                <p class="text-[11px] xl:text-[13px] text-[var(--caption)]">Bandung</p>

                            </div>

                            <button class="bg-[var(--primary-500)] rounded-4xl text-white w-full text-[12px] lg:text-[16px] py-2 items-center justify-center">Lihat Detail</button>

                        </div>
                    </div>

                @endforeach

            @else

                <p class="text-gray-500">Tidak ada hasil.</p>

            @endif

        </div>

    </main>

</div>