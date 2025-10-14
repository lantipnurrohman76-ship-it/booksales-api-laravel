<!DOCTYPE html>
<html>
<head>
    <title>Daftar Genre Buku</title>
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

    <h1>Daftar Genre Buku</h1>

    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Genre</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($genres as $index => $genre)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $genre }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
