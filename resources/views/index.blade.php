<!DOCTYPE html>
<html>
<head>
    <title>Records</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($records as $record)
                <tr>
                    <td>{{ $record->id }}</td>
                    <td>{{ $record->title }}</td>
                    <td>{{ $record->description }}</td>
                    <form action="{{route('record.destroy', $record->id)}}" method="POST">
                        <td><a href="{{route('record.show', $record->id)}}">show</a></td>
                        <td><a href="{{route('record.edit', $record->id)}}">edit</a></td>
                        @csrf
                        @method('DELETE')
                        <td><button type="submit">delete</button></td>
                    </form>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>