<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dosen</title>
</head>
<body>
    <h2>Dosen</h2>
    <a href="/dosen/tambah">+ Tambah Dosen</a>
    <br><br>
    <table border="1">
        <tr>
            <th>id</th>
            <th>nama</th>
        </tr>
        @foreach ($dosen as $d)
            <tr>
                <td>{{ $d->id}}</td>
                <td>{{ $d->nama}}</td>
                <td>
                    <a href="/dosen/edit/{{ $d->id}}">Edit</a>
                    <a href="/dosen/edit/{{ $d->id}}">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
