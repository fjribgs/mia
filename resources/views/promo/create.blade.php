<h2>Create Promo</h2>

<select name="type">
    <option disabled selected>select type</option>
    <option value="Diskon">Diskon</option>
    <option value="Promo">Promo</option>
</select>
<input type="text" name="name" placeholder="promo name">
<label for="description">Description</label>
<textarea name="description" id="description" cols="30" rows="5"></textarea>
<label for="start_date">Start date</label>
<input type="date" name="start_date" id="start_date" value="{{ date('Y-m-d') }}" min="{{ date('Y-m-d') }}">
<label for="end_date">End date</label>

{{-- ! NOTE FOR FE: end date nanti dibuat gabisa select date di hari yang sama atau kurang daru start date --}}

<input type="date" name="end_date" id="end_date" value="{{ date('Y-m-d') }}">
<input type="number" name="discount_percent" placeholder="50">%

<br><br>
<button type="submit">submit</button>
