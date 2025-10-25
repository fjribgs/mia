<h2>Edit Category</h2>

<form action="{{ route('category.update', ['category_id' => $category->id]) }}" method="post">
    @csrf
    <input type="text" name="category_name" value="{{ $category->category_name }}">
    <button type="submit">edit</button>
</form>

<br>
<a href="{{ route('category.index') }}">back</a>
