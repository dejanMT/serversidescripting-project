<div class="row">
    <div class="col-md-6"></div>
    <div class="col-md-6">
      <div class="row">
        <div class="col">
          <form action="{{ route('cars.index') }}" method="GET">
            <div class="input-group mb-3">
              <select id="filter_manufacturer_id" name="manufacturer_id" class="custom-select" onchange="this.form.submit()">
                @foreach ($manufactors as $id => $name)
                  <option {{ $id == request('manufacturer_id') ? 'selected' : '' }} value="{{ $id }}">{{ $name }}</option>
                @endforeach
              </select>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>