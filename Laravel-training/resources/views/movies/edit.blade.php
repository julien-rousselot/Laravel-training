<!-- resources/views/movies/edit.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Edit Movie</title>
</head>
<body>
    <h1>Edit Movie</h1>
    <form action="{{ route('movies.update', $movie->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="{{ $movie->title }}" required>

        <label for="release_date">Release Date:</label>
        <input type="date" id="release_date" name="release_date" value="{{ $movie->release_date }}" required>

        <label for="description">Description:</label>
        <textarea id="description" name="description">{{ $movie->description }}</textarea>

        <button type="submit">Update Movie</button>
    </form>
    <a href="{{ route('movies.index') }}">Back to List</a>
</body>
</html>
