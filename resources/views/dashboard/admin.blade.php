{{--

LIST FEATURE ADMIN:
- all feature

--}}

@if (Auth::check())
<a href="{{ route('category.index') }}">Category</a>

<br><br>
<a href="{{ route('auth.logout') }}">logout</a>

@else
<a href="{{ route('auth.login') }}">login</a>
@endif
