<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prodi</title>
</head>
<body>
    <h2>Prodi</h2>
    <a href="/prodi">Kembali</a>
    <br><br>
    <form action="/prodi/new" method="POST">
        {{ csrf_field() }}
        id <input type="text" name="id" required="required"><br>
        nama <input type="text" name="nama" required="required"><br>
        <input type="submit" value="Simpan Data">
    </form>
</body>
</html>
