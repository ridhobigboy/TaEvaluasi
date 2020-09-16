<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Matakuliah</title>
</head>
<body>
    <h2>Matakuliah</h2>
    <a href="/matkul">Kembali</a>
    <br><br>
    <form action="/matkul/new" method="POST">
        {{ csrf_field() }}
        id <input type="text" name="id" required="required"><br>
        nama <input type="text" name="nama" required="required"><br>
        sks <input type="text" name="sks" required="required"><br>
        <input type="submit" value="Simpan Data">
    </form>
</body>
</html>
