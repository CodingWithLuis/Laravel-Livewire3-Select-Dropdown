<div>
    <div class="mb-3">
        <label for="country" class="form-label">País</label>
        <select class="form-control" wire:model.live="countryId">
            <option value="">Seleccione</option>
            @foreach ($countries as $country)
            <option value="{{ $country->id }}">{{ $country->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="city" class="form-label">Ciudad</label>
        <select class="form-control" wire:model="cityId">
            @if($cities->count() == 0)
            <option>Debe seleccionar un pais antes</option>
            @endif
            @foreach ($cities as $city)
            <option value="{{ $city->id }}">{{ $city->name }}</option>
            @endforeach
        </select>
    </div>
</div>
