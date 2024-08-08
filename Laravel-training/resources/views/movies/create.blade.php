<!-- resources/views/movies/create.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Create Movie</title>
</head>
<body>
    <h1>Create Movie</h1>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('movies.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>
        <br>
        <label for="release_year">Release year:</label>
        <input type="number" id="release_year" name="release_year" value="{{ old('release_year') }}" required>
        <br>
        <label for="director_id">Director:</label>
        <select id="director_id" name="director_id" required>
            @foreach($directors as $director)
                <option value="{{ $director->id }}">{{ $director->name }}</option>
            @endforeach
        </select>
        <br>
        <button type="submit">Add Movie</button>
    </form>
    <a href="{{ route('movies.index') }}">Back to List</a>
</body>
</html>
