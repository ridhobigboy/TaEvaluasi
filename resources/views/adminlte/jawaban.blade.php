<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jawaban Kuisioner</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    {{-- <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                <div class="card-body">
                    <a href="/jawaban/tambah" class="btn btn-primary">Input Jawaban Baru</a>
                    <br><br>
                    <table class="table table-bordered table-haver table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Jawaban</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jawaban as $j)
                                <tr>
                                    <td>{{$j->id}}</td>
                                    <td>{{$j->jawaban}}</td>
                                    <td>
                                        <a href="/jawaban/edit/{{$j->id}}" class="btn btn-warning">Edit</a>
                                        <a href="/jawaban/hapus/{{$j->id}}" class="btn btn-warning">Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                <div class="card-body">

                    {{-- jadi cara pemanggilan menggunakan Name kaya gini --}}
                    <a href="{{route('jawaban.tambah')}}" class="btn btn-primary">Input Jawaban Baru</a>
                    <br><br>
                    <table class="table table-bordered table-haver table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Jawaban</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jawaban as $j)
                            <tr>
                                <td>{{$j->id}}</td>
                                <td>{{$j->jawaban}}</td>
                                <td>
                                    {{-- Ini nanti di ubah jadi kaya diatas --}}
                                    <a href="{{route('jawaban.edit', $id ?? '')}}" class="btn btn-warning">Edit</a>
                                    <a href="{{route('jawaban.hapus', $id ?? '')}}" class="btn btn-warning">Hapus</a>
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
