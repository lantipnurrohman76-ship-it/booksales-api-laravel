<!DOCTYPE html>
<html>
<head>
    <title>Daftar Penulis</title>
</head>
<body>
    <!-- Navigasi antar halaman -->
    <nav>
        <a href="/">Home</a> |
        <a href="/genre">Genre</a> |
        <a href="/author">Author</a> |
        <a href="/book">Book</a>
    </nav>
    <hr>

    <h1>Daftar Penulis</h1>

    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Negara</th>
                <th>Jumlah Buku</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($authors as $author)
                <tr>
                    <td>{{ $author['id'] }}</td>
                    <td>{{ $author['name'] }}</td>
                    <td>{{ $author['country'] }}</td>
                    <td>{{ $author['books_written'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
