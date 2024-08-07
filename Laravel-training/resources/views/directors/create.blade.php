<!DOCTYPE html>
<html>
<head>
    <title>Create Director</title>
</head>
<body>
    <h1>Create Director</h1>
    <form method="POST" action="{{ route('directors.store') }}">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Create</button>
    </form>
</body>
</html>
