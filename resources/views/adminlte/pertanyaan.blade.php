<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Pertanyaan Dosen</title>
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                <div class="card-body">
                    <a href="{{route('pertanyaan.tambah')}}" class="btn btn-primary">Input Pertanyaan Baru</a>
                    <br><br>
                    <table class="table table-bordered table-haver table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Pertanyaan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pertanyaan as $p)
                            <tr>
                                <td>{{$p->id}}</td>
                                <td>{{$p->pertanyaan}}</td>
                                <td>
                                    <a href="/pertanyaan/edit/{{$p->id}}" class="btn btn-warning">Edit</a>
                                    <a href="/pertanyaan/hapus/{{$p->id}}" class="btn btn-warning">Hapus</a>
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
