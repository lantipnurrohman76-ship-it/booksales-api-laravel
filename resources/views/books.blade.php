<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>
    <ul>
        @foreach($books as $book)
            <li>{{ $book->title }} - Author ID: {{ $book->author_id }}</li>
        @endforeach
    </ul>
</body>
</html>
