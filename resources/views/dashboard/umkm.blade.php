{{--

LIST FEATURE UMKM:
- manage his data (profile maybe(?))
- manage products
- manage promos
- view review
- manage posts
- collaborations (on going)

 --}}

 <a href="{{ route('promo.index', ['umkm_id' => Auth::user()->umkm->id]) }}">promo</a>

 <br><br>
 <a href="{{ route('auth.logout') }}">logout</a>
