<h2>Create Category</h2>

<form action="{{ route('category.store') }}" method="post">
    @csrf
    <input type="text" name="category_name" placeholder="category name" required>
    <button type="submit">submit</button>
</form>

<br>
<a href="{{ route('category.index') }}">back</a>
