<!-- resources/views/movies/show.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Show Movie</title>
</head>
<body>
    <h1>{{ $movie->title }}</h1>
    <p><strong>Release Date:</strong> {{ $movie->release_date->format('Y-m-d') }}</p>
    <p><strong>Director:</strong> {{ $movie->director->name }}</p>
    <a href="{{ route('movies.index') }}">Back to List</a>
</body>
</html>
