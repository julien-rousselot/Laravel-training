<!-- resources/views/directors/edit.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Edit Director</title>
</head>
<body>
    <h1>Edit Director</h1>
    <form action="{{ route('directors.update', $director->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $director->name }}" required>
        <button type="submit">Update Director</button>
    </form>
    <a href="{{ route('directors.index') }}">Back to List</a>
</body>
</html>
