<!-- resources/views/directors/show.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Director Details</title>
</head>
<body>
    <h1>Director Details</h1>
    <p>Name: {{ $director->name }}</p>
    <a href="{{ route('directors.edit', $director->id) }}">Edit</a>
    <form action="{{ route('directors.destroy', $director->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    <a href="{{ route('directors.index') }}">Back to List</a>
</body>
</html>
