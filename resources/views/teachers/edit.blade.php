<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document Title</title>
</head>
<body>
    <h1>Edit Teacher</h1>

    <form action="{{ route('teachers.update', $teacher->id) }}" method="POST">
        @csrf
        @method('PUT')

        <input type="text"
            name="firstname"
            value="{{ $teacher->firstname }}">
        <br><br>

        <input type="text"
            name="middlename"
            value="{{ $teacher->middlename }}">
        <br><br>

        <input type="text"
            name="lastname"
            value="{{ $teacher->lastname }}">
        <br><br>

        <button type="submit">
            Update
        </button>
    </form>
</body>
</html>
