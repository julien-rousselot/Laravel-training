<!-- resources/views/directors/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Directors List</title>
</head>
<body>
    <h1>Directors List</h1>
    <ul>
        @foreach($directors as $director)
            <li>{{ $director->name }} - <a href="{{ route('directors.show', $director->id) }}">View</a></li>
        @endforeach
    </ul>
    <a href="{{ route('directors.create') }}">Add New Director</a>
</body>
</html>
