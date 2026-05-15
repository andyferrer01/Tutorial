<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document Title</title>
</head>
<body>
    <h1>Create Teacher</h1>
    <a href="{{ route('teachers.index') }}">
        Go back
    </a>

    <form action="{{ route('teachers.store') }}" method="POST">
        @csrf

        <input type="text" name="firstname" placeholder="First Name">
        <br><br>

        <input type="text" name="middlename" placeholder="Middle Name">
        <br><br>

        <input type="text" name="lastname" placeholder="Last Name">
        <br><br>

        <button type="submit">
            Save
        </button>
    </form>
</body>
</html>
