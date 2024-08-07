<!-- resources/views/movies/show.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Movie Details</title>
</head>
<body>
    <h1>Movie Details</h1>
    <p>Title: {{ $movie->title }}</p>
    <p>Release Date: {{ $movie->release_date }}</p>
    <p>Description: {{ $movie->description }}</p>
    <a href="{{ route('movies.edit', $movie->id) }}">Edit</a>
    <form action="{{ route('movies.destroy', $movie->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    <a href="{{ route('movies.index') }}">Back to List</a>
</body>
</html>
