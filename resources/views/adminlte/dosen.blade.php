<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <title>Dosen</title>
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                <div class="card-body">
                    <a href="{{route('dosen.tambah')}}" class="btn btn-primary">Input Dosen</a>
                    <br><br>
                    <table>
                        <tr>
                            <th>Id</th>
                            <th>Nama</th>
                        </tr>
                    </table>
                    <tbody>
                        @foreach ($dosen as $d)
                            <tr>
                                <td>{{$d->id}}</td>
                                <td>{{$d->nama}}</td>
                                <td>
                                    <a href="{{route('dosen.edit')}}" class="btn btn-warning">Edit</a>
                                    <a href="{{route('dosen.hapus')}}" class="btn btn-warning">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

{{--
<h2>Dosen</h2>
    <br><br>

    <ul>
        @foreach ($dosen as $d)
            <li>{{"id : ".$d->id,'| Nama :'. $d->nama}}</li>
        @endforeach
    </ul> --}}
