<h2>Promo management</h2>

<table>
    <tr>
        <th>No</th>
        <th>type</th>
        <th>promo name</th>
        <th>description</th>
        <th>start date</th>
        <th>end date</th>
        <th>status</th>
        <th>discount percent (if promo type = discount)</th>
        <th>action</th>
    </tr>
    @foreach ($promos as $promo)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $promo->type }}</td>
            <td>{{ $promo->name }}</td>
            @if ($promo->description != null)
                <td>{{ $promo->description }}</td>
            @else
                <td style="text-align: center">-</td>
            @endif
            <td>{{ $promo->start_date }}</td>
            <td>{{ $promo->end_date }}</td>
            <td>{{ $promo->status }}</td>
            @if ($promo->type == 'Diskon')
                <td style="text-align: center">{{ $promo->discount_percent }}%</td>
            @else
                <td style="text-align: center">-</td>
            @endif
            <td>
                <a href="">Edit</a>
                <a href="">Delete</a>
            </td>
        </tr>
    @endforeach
    @empty($promo)
        <td colspan="100%" style="text-align: center">Belum ada data promo</td>
    @endempty
</table>

<br>
<a href="{{ route('promo.create') }}">create promo</a>

<br><br>
<a href="{{ route('dashboard.umkm', ['umkm_id' => Auth::user()->umkm->id]) }}">back</a>
