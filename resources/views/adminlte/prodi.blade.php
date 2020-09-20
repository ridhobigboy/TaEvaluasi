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
    <a href="/prodi/tambah">+ Tambah prodi</a>
    <br><br>
    <table border="1">
        <tr>
            <th>id</th>
            <th>nama</th>
        </tr>
        @foreach ($prodi as $p)
            <tr>
                <td>{{ $p->id}}</td>
                <td>{{ $p->nama}}</td>
                <td>
                    <a href="/prodi/edit/{{ $p->id}}">Edit</a>
                    <a href="/prodi/hapus/{{ $p->id}}">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
