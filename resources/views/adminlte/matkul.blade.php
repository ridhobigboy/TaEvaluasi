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
    <a href="/matkul/tambah">+ tambah matkul</a>
    <br><br>
    <table border="1">
        <tr>
            <th>id</th>
            <th>nama</th>
            <th>sks</th>
        </tr>
        @foreach ($matakuliah as $m)
            <tr>
                <td>{{ $m->id}}</td>
                <td>{{ $m->nama}}</td>
                <td>{{ $m->sks}}</td>
                <td>
                    <a href="/matkul/edit/{{ $m->id}}">Edit</a>
                    <a href="/matkul/hapus/{{ $m->id}}">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
