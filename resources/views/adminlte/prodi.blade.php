<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Prodi</title>
</head>
<body>
    {{-- <h2>Prodi</h2>
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
    </table> --}}
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                <div class="card-body">

                    {{-- jadi cara pemanggilan menggunakan Name kaya gini --}}
                    <a href="{{route('prodi.tambah')}}" class="btn btn-primary">Input Prodi Baru</a>
                    <br><br>
                    <table class="table table-bordered table-haver table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nama</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($prodi as $pro)
                            <tr>
                                <td>{{$pro->id}}</td>
                                <td>{{$pro->nama}}</td>
                                <td>
                                    {{-- Ini nanti di ubah jadi kaya diatas --}}
                                    <a href="{{route('prodi.edit', $id ?? '')}}" class="btn btn-warning">Edit</a>
                                    <a href="{{route('prodi.hapus', $id ?? '')}}" class="btn btn-warning">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
