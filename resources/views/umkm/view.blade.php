<h2>Detail umkm</h2>

<label for="name">Nama Umkm: </label>
<input type="text" name="name" value="{{ $umkm[0]->umkm->user->name }}" disabled>
<br>
<label for="category">Kategori: </label>
<input type="text" name="category" value="{{ $umkm[0]->category->category_name }}" disabled>
<br>
<label for="address">Alamat: </label>
<textarea name="address" cols="30" rows="5" disabled>{{ $umkm[0]->umkm->address }}</textarea>
<br>
<label for="average_rating">Rating: </label>
<input type="number" name="average_rating" value="{{ $umkm[0]->umkm->average_rating }}" disabled>
<br><br>
<a href="{{ route('umkm.index') }}">back</a>
{{-- TODO: pokonya disini nanti tinggal ambli datanya kaya yg di contoh yaa gas --}}

<br><br><br>

<h2>Ini product umkm nya</h2>

@foreach ($products as $product)
    <label for="name">Nama Produk</label>
    <input type="text" name="name" value="{{ $product->name }}" disabled>
    <br>
    <label for="description">Deskripsi</label>
    <textarea name="description" cols="30" rows="5" disabled>{{ $product->description }}</textarea>
    <br>
    <label for="price">Harga</label>
    <input type="number" name="price" value="{{ $product->price }}" disabled>
    <br><br>
@endforeach

<br><br>

<h2>Ini rating umkm nya</h2>

    <table>
        <tr>
            <th>No</th>
            <th>Penilai</th>
            <th>Rating</th>
            <th>Comment</th>
        </tr>
        @foreach ($reviews as $review)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $review->user->name }}</td>
                <td>{{ $review->rating }}</td>
                @if ($review->comment != null)
                    <td>{{ $review->comment }}</td>
                @else
                    <td>-</td>
                @endif
            </tr>
        @endforeach
        @empty($review)
            <td colspan="100%" style="text-align: center;">Belum ada data penilaian</td>
        @endempty
    </table>

    <br><br>

    @if (Auth::check())
        @if($show_review === true)
            <h3>Penilaian Anda</h3>

            <label for="rating">Penilaian: </label>
            <input type="number" name="rating" id="rating" value="{{ $user_review->rating }}" disabled>
            <br>
            <label for="comment">Komentar: </label>
            <textarea name="comment" id="comment" cols="30" rows="5" disabled>{{ $user_review->comment }}</textarea>
            <br><br>
        @else
            <form action="{{ route('review.store', ['umkm_id' => $umkm[0]->umkm->id]) }}" method="post">
                @csrf
                <label for="rating">Penilaian: </label>
                <input type="number" name="rating" id="rating" min="1" max="5">
                <br>
                <label for="comment">Komentar: </label>
                <textarea name="comment" id="comment" cols="30" rows="5"></textarea>
                <br><br>
                <button type="submit">Kirim Penilaian</button>
            </form>
            <br>
            {{-- TODO: Tambahin pesan berhasilnya nanti gass --}}
        @endif
    @endif


