<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Matakuliah</title>
</head>
<body>
    <h2>Edit Matakuliah</h2>
    <a href="/matkul">Kembali</a>
    <br><br>
    @foreach ($matakuliah as $m)
        <form action="/matkul/update" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $m->id}}"><br>
            id <input type="text" name="id" required="required" value="{{ $m->id}}"><br>
            nama <input type="text" name="nama" required="required" value="{{ $m->nama}}"><br>
            sks <input type="text" name="sks" required="required" value="{{ $m->sks}}"><br>
            <input type="submit" value="Simpan Data">
        </form>
    @endforeach
</body>
</html>
