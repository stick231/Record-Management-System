<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Record</title>
</head>
<body>
    <a href="{{ route('record.index') }}">Back</a>
    <form action="{{ route('record.update', $record->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $record->id }}">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ $record->title }}"><br><br>
        <label for="description">Description:</label>
        <textarea name="description" id="description">{{ $record->description }}</textarea><br><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
