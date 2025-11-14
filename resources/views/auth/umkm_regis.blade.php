@extends('template.main')

@section('content')
    <h2>Daftar Akun UMKM</h2>

    <form action="" method="post">
        @csrf
        <input type="text" name="username" placeholder="username">
        <input type="text" name="name" placeholder="full name">
        <input type="email" name="email" placeholder="email@gmail.com">
        <input type="password" name="password" placeholder="****">
        <input type="password" name="password_confirmation" placeholder="password confirmation">

        <br><br>

        <h5>Umkm data</h5>
        {{-- MENTOK, inputnya di filter aja, jadi harus isi province->city->district->village --}}
        <select name="province_id">
            <option value="">Pilih Provinsi</option>
            @foreach ($provinces as $province)
                <option value="{{ $province->code }}">{{ $province->name }}</option>
            @endforeach
        </select>

        <livewire:location-selector :cities="$cities" />

    </form>
@endsection
