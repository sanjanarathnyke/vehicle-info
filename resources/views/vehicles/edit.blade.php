<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Vehicle</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Edit Vehicle</h2>
        <a href="{{ route('vehicles.index') }}" class="btn btn-secondary mb-3">Back</a>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('vehicles.update', $vehicle->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Make</label>
                <input type="text" name="make" class="form-control" value="{{ $vehicle->make }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Model</label>
                <input type="text" name="model" class="form-control" value="{{ $vehicle->model }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Year</label>
                <input type="number" name="year" class="form-control" value="{{ $vehicle->year }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Category</label>
                <input type="text" name="category" class="form-control" value="{{ $vehicle->category }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Availability</label>
                <select name="availability" class="form-control">
                    <option value="1" {{ $vehicle->availability ? 'selected' : '' }}>Available</option>
                    <option value="0" {{ !$vehicle->availability ? 'selected' : '' }}>Unavailable</option>
                </select>
            </div>
            <button type="submit" class="btn btn-warning">Update Vehicle</button>
        </form>
    </div>
</body>
</html>
