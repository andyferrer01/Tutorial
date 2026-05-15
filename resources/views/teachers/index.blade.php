<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teachers List</title>
</head>
<body>
    <h1>Teachers</h1>

    <a href="{{ route('teachers.create') }}">
        Add teacher
    </a>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="10">
        <tr>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Actions</th>
        </tr>

        @foreach($teachers as $teacher)
        <tr>
            <td>{{ $teacher->firstname }}</td>
            <td>{{ $teacher->middlename }}</td>
            <td>{{ $teacher->lastname }}</td>
            <td>
                <a href="{{ route('teachers.edit', $teacher->id) }}">
                    Edit
                </a>

                <form action="{{ route('teachers.destroy', $teacher->id) }}"
                    method="POST"
                    style="display:inline;">
                    @csrf
                    @method('DELETE')

                    <button type="submit">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
