<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vehicle Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Vehicle Details</h2>
        <a href="{{ route('vehicles.index') }}" class="btn btn-secondary mb-3">Back</a>

        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <td>{{ $vehicle->id }}</td>
            </tr>
            <tr>
                <th>Make</th>
                <td>{{ $vehicle->make }}</td>
            </tr>
            <tr>
                <th>Model</th>
                <td>{{ $vehicle->model }}</td>
            </tr>
            <tr>
                <th>Year</th>
                <td>{{ $vehicle->year }}</td>
            </tr>
            <tr>
                <th>Category</th>
                <td>{{ $vehicle->category }}</td>
            </tr>
            <tr>
                <th>Availability</th>
                <td>{{ $vehicle->availability ? 'Available' : 'Unavailable' }}</td>
            </tr>
        </table>
    </div>
</body>
</html>
