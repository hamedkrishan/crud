<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4 p-4 border rounded shadow">
    <h2 class="text-center mb-4">Edit Student</h2>

    <form action="{{ route('oranges.update', $hamed->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label fw-bold">Name:</label>
            <input type="text" id="name" name="name" value="{{ $hamed->name }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label fw-bold">Email:</label>
            <input type="email" id="email" name="email" value="{{ $hamed->email }}" class="form-control" required>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary px-4">Submit</button>
        </div>
    </form>
</div>

</body>
</html>
