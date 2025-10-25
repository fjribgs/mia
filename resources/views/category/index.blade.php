<h2>Category</h2>

@if (session('success'))
    <div style="color: green; margin-bottom: 10px;">
        {{ session('success') }}
    </div>
@endif

<table>
    <tr>
        <th>No</th>
        <th>Category Name</th>
        <th>Action</th>
    </tr>
    @foreach ($categories as $category)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $category->category_name }}</td>
            <td>
                <a href="{{ route('category.edit', ['category_id' => $category->id]) }}">Edit</a>
                <a href="{{ route('category.destroy', ['category_id' => $category->id]) }}">Delete</a>
            </td>
        </tr>
    @endforeach
    @empty($category)
        <tr>
            <td colspan="100%">category data is not yet available</td>
        </tr>
    @endempty
</table>

<br>
<a href="{{ route('category.create') }}">create a new category</a>
<br><br>
<a href="{{ route('dashboard.admin') }}">back</a>
