<!DOCTYPE html>
<html>
<head>
    <title>Movies List</title>
</head>
<body>
    <h1>Movies List</h1>
    <a href="{{ route('movies.create') }}">Create New Movie</a>
    @if (session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif
    <ul>
        @foreach($movies as $movie)
            <li>
                <a href="{{ route('movies.show', $movie->id) }}">{{ $movie->title }}</a>
                @if ($movie->release_year)
                    ({{ $movie->release_year }})
                @else
                    (No Release Year)
                @endif
                by {{ $movie->director->name }}
                <a href="{{ route('movies.edit', $movie->id) }}">Edit</a>
                <form action="{{ route('movies.destroy', $movie->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
