<div>

    {{-- city --}}
    <select wire:model="cityCode" name="city_id">
        <option value="">Pilih Kota</option>
        @foreach ($cities as $city)
            <option value="{{ $city->code }}">{{ $city->name }}</option>
        @endforeach
    </select>

    {{-- district --}}
    <select wire:model="districtCode" name="district_id" @disabled(!$cityCode)>
        <option value="">Pilih Kecamatan</option>
        @foreach ($districts as $district)
            <option value="{{ $district->code }}">{{ $district->name }}</option>
        @endforeach
    </select>

</div>
