<h2>Register page</h2>

<form action="{{ route('auth.postregis') }}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Full Name">
    <input type="text" name="username" placeholder="username">
    <input type="email" name="email" placeholder="email@test.com">
    <input type="password" name="password" placeholder="****">
    <input type="password" name="password_confirmation" placeholder="confirm password">

    <br><br>
    <button type="submit">Register</button>
</form>

@if ($errors->any())
    <div style="color: red; margin-bottom: 10px;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<br>
<a href="{{ route('auth.login') }}">Kembali</a>
