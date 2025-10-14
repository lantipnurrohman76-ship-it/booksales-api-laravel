<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
</head>
<body>
    <nav>
        <a href="/">Home</a> |
        <a href="/genre">Genre</a> |
        <a href="/author">Author</a> |
        <a href="/book">Book</a>
    </nav>
    <hr>

    <h1>Daftar Buku</h1>
    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Tahun Terbit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book['id'] }}</td>
                    <td>{{ $book['title'] }}</td>
                    <td>{{ $book['author'] }}</td>
                    <td>{{ $book['year'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
