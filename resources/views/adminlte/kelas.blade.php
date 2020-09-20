<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kelas</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h2>Kelas</h2>

                <a href="/kelas/tambah">+ Tambah Kelas</a>
                <br><br>
                <table border="1">
                    <tr>
                        <th>Id</th>
                        <th>Kode</th>
                        <th>Semester</th>
                        <th>Dosen_id</th>
                        <th>Matakuliah_id</th>
                        <th>Prodi_id</th>
                    </tr>
                    @foreach ($kelas as $k)
                        <tr>
                            <td>{{ $k->id}}</td>
                            <td>{{ $k->kode}}</td>
                            <td>{{ $k->semester}}</td>
                            <td>{{ $k->dosen_id}}</td>
                            <td>{{ $k->matakuliah_id}}</td>
                            <td>{{ $k->prodi_id}}</td>
                            <td>
                                <a href="/kelas/edit/{{ $k->id}}">Edit</a>
                                <a href="/kelas/hapus/{{ $k->id}}">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</body>
</html>
