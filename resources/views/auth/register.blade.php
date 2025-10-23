<h2>Register page</h2>

<form action="{{ route('auth.postregis') }}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Full Name" value="{{ old('name') }}">
    <input type="text" name="username" placeholder="username" value="{{ old('username') }}">
    <input type="email" name="email" placeholder="email@test.com" value="{{ old('email') }}">
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
