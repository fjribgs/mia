<h2>Tambah Product</h2>

<form action="" method="POST">
    @csrf
    <input type="text" name="name" placeholder="nama produk">
    <label for="description">Deskirpsi produk</label>
    <textarea name="description" id="description" cols="30" rows="5"></textarea>
    <select name="category_id">
        <option disabled selected>Pilih Kategori</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
        @endforeach
    </select>
    <select name="promo_id">
        <option disabled selected>Pilih Promo (opsional)</option>
        @foreach ($promos as $promo)
            <option value="{{ $promo->id }}">{{ $promo->name }}</option>
        @endforeach
    </select>
    <input type="number" name="price" placeholder="harga">
    <select name="status">
        <option disabled selected>Pilih status</option>
        <option value="Tersedia">Tersedia</option>
        <option value="Habis">Habis</option>
        <option value="Dihentikan">Dihentikan</option>
    </select>
    <label for="image">Foto Produk</label>
    <input type="file" name="image" id="image">

    <br><br>
    <button type="submit">tambah produk</button>
</form>
