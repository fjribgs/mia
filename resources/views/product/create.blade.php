<h2>Tambah Product</h2>

<form action="" method="POST">
    @csrf
    <select name="category_id">
        <option disabled selected>Pilih Kategori</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
        @endforeach
    </select>
</form>
