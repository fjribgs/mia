<form action="{{ route('auth.postlogin') }}" method="post">
    @csrf
    <input type="text" name="username" placeholder="username">
    <input type="password" name="password" placeholder="***">

    <button type="submit">login</button>
</form>
<p>Tidak punya akun? <a href="{{ route('auth.register') }}">Daftar</a></p>
<a href="{{ route('dashboard') }}">back</a>
