{{-- <h2>List UMKM for user views</h2>

<table>
    <tr>
        <th>no</th>
        <th>image</th>
        <th>nama bisni</th>
        <th>alamat</th>
        <th>description</th>
        <th>type</th>
        <th>position (gmaps)</th>
        <th>no telp</th>
        <th>hari buka</th>
        <th>jam buka</th>
        <th>jam tutup</th>
    </tr>
    @foreach ($umkms as $umkm)
        <tr>
            <td>{{ $loop->iteration }}</td>
            @if ($umkm->image != null)
                ! temporary
                <td>
                    <img src="{{ asset('storage/defaults/default_store.webp') }}" alt="default store image" style="width: 200px;">
                </td>
            @else
                <td>
                    <img src="{{ asset('storage/defaults/default_store.webp') }}" alt="default store image" style="width: 200px;">
                </td>
            @endif
            <td>{{ $umkm->user->name }}</td>
            <td>{{ $umkm->address }}</td>
            @if ($umkm->description != null)
                <td>{{ $umkm->description }}</td>
            @else
                <td>-</td>
            @endif
            <td>{{ $umkm->type }}</td>
            <td>
                <a href="{{ $umkm->gmaps_link }}">Lihat UMKM</a>
            </td>
            <td>{{ $umkm->phone_number }}</td>
            <td>{{ $umkm->open_days }}</td>
            <td>{{ $umkm->open_time }}</td>
            <td>{{ $umkm->close_time }}</td>
        </tr>
    @endforeach
</table>

<br><br>
<a href="{{ route('dashboard.user') }}">back</a> --}}

@extends('template.main')

@section('title', 'Direktori UMKM |')

@push('css')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>
@endpush

@section('content')
    
    <livewire:navbar />

    <livewire:umkm-index />

    <x-footer />

@endsection