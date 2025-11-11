<h2>List UMKM for user views</h2>

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
                {{-- ! temporary --}}
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
<a href="{{ route('dashboard.user') }}">back</a>
