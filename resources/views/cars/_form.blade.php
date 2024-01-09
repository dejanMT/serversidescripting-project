@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Add New Car</h1>
    <form method="POST" action="{{ route('cars.store') }}">
        @csrf
        <!-- Model Input -->
        <div class="form-group">
            <label for="model">Model</label>
            <input type="text" class="form-control" id="model" name="model" required>
        </div>

        <!-- Year Input -->
        <div class="form-group">
            <label for="year">Year</label>
            <input type="text" class="form-control" id="year" name="year" required>
        </div>

        <!-- Salesperson Email Input -->
        <div class="form-group">
            <label for="salesperson_email">Salesperson Email</label>
            <input type="email" class="form-control" id="salesperson_email" name="salesperson_email" required>
        </div>

        <!-- Manufacturer Dropdown -->
        <div class="form-group">
            <label for="manufacturer_id">Manufacturer</label>
            <select class="form-control" id="manufacturer_id" name="manufacturer_id">
                @foreach ($manufactors as $id => $name)
                    <option value="{{ $id }}">{{ $name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Add Car</button>
    </form>
</div>
@endsection