<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Books List</h1>
    <a href="{{ route('books.create') }}" class="btn btn-primary">Create New Book</a>
    <ul>
        @foreach ($books as $book)
            <li>{{ $book->title }} by {{ $book->author }}</li>
        @endforeach
    </ul>
</body>
</html>