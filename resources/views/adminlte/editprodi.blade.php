<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Prodi</title>
</head>
<body>
    <h2>Edit Prodi</h2>
    <a href="/prodi">Kembali</a>
    <br><br>

    @foreach ($prodi as $p)
         {{ csrf_field() }}
         <input type="hidden" name="id" value="{{ $p->id}}"><br>
         id <input type="text" required="required" value="{{ $p->id}}"><br>
         nama <input type="text" required="required" value="{{ $p->nama}}"><br>
         <input type="submit" value="Simpan Data">
    @endforeach
</body>
</html>
