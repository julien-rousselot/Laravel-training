<!DOCTYPE html>
<html>
<head>
    <title>Create Movie</title>
</head>
<body>
    <h1>Create Movie</h1>
    <form method="POST" action="{{ route('movies.store') }}">
        @csrf
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>
        <br>
        <label for="release_year">Release Year:</label>
        <input type="number" id="release_year" name="release_year" required>
        <br>
        <label for="director_id">Director:</label>
        <select id="director_id" name="director_id" required>
            @foreach($directors as $director)
                <option value="{{ $director->id }}">{{ $director->name }}</option>
            @endforeach
        </select>
        <br>
        <button type="submit">Create</button>
    </form>
</body>
</html>
