<h2>Edit Promo</h2>

<form action="{{ route('promo.update', ['promo_id' => $promo->id]) }}" method="post">
    @csrf
    <label for="type">Promo Type</label>
    <select name="type" id="type">
        <option value="Diskon" {{ $promo->type == 'Diskon' ? 'selected' : '' }}>Diskon</option>
        <option value="Promo" {{ $promo->type == 'Promo' ? 'selected' : '' }}>Promo</option>
    </select>
    <label for="name">Promo Name</label>
    <input type="text" id="name" name="name" value="{{ $promo->name }}">
    <label for="description">Description</label>
    <textarea name="description" id="description" cols="30" rows="5">{{ $promo->description }}</textarea>
    <label for="start_date">Start Date</label>
    <input type="date" name="start_date" id="start_date" value="{{ $promo->start_date }}">
    @error('start_date')
        {{ $message }}
    @enderror
    <label for="end_date">End Date</label>
    <input type="date" name="end_date" id="end_date" value="{{ $promo->end_date }}">
    <label for="discount_percent">Discount Percent</label>
    <input type="number" name="discount_percent" id="discount_percent" value="{{ $promo->discount_percent }}">%

    <br><br>

    <button type="submit">Update</button>
</form>

<br>
<a href="{{ route('promo.index') }}">back</a>
