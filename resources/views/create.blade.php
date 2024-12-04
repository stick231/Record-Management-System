<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Record</title>
</head>
<body>
    <a href="{{ route('record.index') }}">Back</a>
    <form action="{{ route('record.store') }}" method="post">
        @csrf
        <label for="title">Title:</label><br>
        <input type="text" name="title" id="title"><br>
        <label for="description">Description:</label><br>
        <textarea name="description" id="description"></textarea><br>
        <button type="submit">Save</button>
    </form>
</body>
</html>