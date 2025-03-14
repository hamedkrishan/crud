<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show All Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h1 class="mb-4 text-center">Show All Students</h1>

    <table class="table table-striped table-bordered text-center">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($oranges as $orange)
                <tr>
                    <td>{{ $orange->id }}</td>
                    <td>{{ $orange->name }}</td>
                    <td>{{ $orange->email }}</td>
                    <td>
                        <a href="{{ route('oranges.edit', $orange->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('oranges.destroy', $orange->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="text-center mt-4">
        <a href="{{ route('oranges.create') }}" class="btn btn-success">Add New Student</a>
    </div>
</div>

</body>
</html>
