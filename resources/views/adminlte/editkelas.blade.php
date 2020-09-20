<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Kelas</title>
</head>
<body>
    <h2>Edit Kelas</h2>

    <a href="/kelas">Back</a>
    <br><br>

    @foreach ($kelas as $k)
        <form action="/kelas/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $k->id}}"><br>
            id <input type="text" required="required" name="id" value="{{ $k->id}}"> <br>
            kode <input type="text" required="required" name="kode" value="{{ $k->kode}}"><br>
            semester <input type="text" required="required" name="semester" value="{{ $k->semester}}"><br>
            Dosen_id <input type="text" required="required" name="Dosen_id" value="{{ $k->dosen_id}}"><br>
            Matakuliah_id <input type="text" required="required" name="matakuliah_id" value="{{ $k->matakuliah_id}}"><br>
            Prodi_id <input type="text" required="required" name="prodi_id" value="{{ $k->prodi_id}}"><br>
            <input type="submit" value="Simpan Data">
        </form>
    @endforeach
</body>
</html>
