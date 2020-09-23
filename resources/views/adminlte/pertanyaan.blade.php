<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pertanyaan Dosen</title>
</head>
<body>
    <h2>Pertanyaan Dosen</h2>

    <a href="{{route('pertanyaan.tambah')}}"> + Tambah Pertanyaan</a>
    <br><br>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Pertanyaan</th>
            <th>Aktif</th>
            <th>Choice</th>
        </tr>
        @foreach ($pertanyaan as $p)
            <tr>
                <td>{{ $p->id}}</td>
                <td>{{ $p->pertanyaan}}</td>
                <td>{{ $p->aktif}}</td>
                <td>{{ $p->choice}}</td>
                <td>
                <a href="{{route('pertanyaan.edit', $p->id)}}"> Edit</a>
                    <a href="{{route('pertanyaan.hapus', $p->id)}}"> Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
