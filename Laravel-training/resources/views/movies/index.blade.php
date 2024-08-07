<!-- resources/views/movies/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Movies List</title>
</head>
<body>
    <h1>Movies List</h1>
    <ul>
        @foreach($movies as $movie)
            <li>{{ $movie->title }} - <a href="{{ route('movies.show', $movie->id) }}">View</a></li>
        @endforeach
    </ul>
    <a href="{{ route('movies.create') }}">Add New Movie</a>
</body>
</html>
