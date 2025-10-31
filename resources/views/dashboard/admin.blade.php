{{--

LIST FEATURE ADMIN:
- all feature

--}}

@if (Auth::check())
<a href="{{ route('category.index') }}">Category</a>
<br>
<a href="{{ route('dashboard.umkm', ['umkm_id' => Auth::user()->umkm->id]) }}">Umkm Account</a>

<br><br>
<a href="{{ route('auth.logout') }}">logout</a>

@else
<a href="{{ route('auth.login') }}">login</a>
@endif
