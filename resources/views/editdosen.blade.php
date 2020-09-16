<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Dosen</title>
</head>
<body>
    <h2>Edit Dosen</h2>
    <a href="/dosen">Kembali</a>
    <br><br>
    @foreach ($dosen as $d)
    <form action="/dosen/update" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $d->id}}"><br>
        id <input type="text" required="required" name="id" value="{{ $d->id}}"><br>
        nama <input type="text" required="required" name="nama" value="{{ $d->nama}}"><br>
        <input type="submit" value="Simpan Data">
    </form>
    @endforeach
</body>
</html>
