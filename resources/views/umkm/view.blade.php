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
{{-- pokonya disini nanti tinggal ambli datanya kaya yg di contoh yaa gas --}}

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
