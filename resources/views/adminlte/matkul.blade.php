<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <title>Matakuliah</title>
</head>
<body>
   <div class="container">
       <div class="card m-5">
           <div class="card-header text-center">
               <div class="card-body">
                   <a href="{{route('matkul.tambah')}}" class="btn btn-primary">Tambah Matkul</a>
                   <br><br>
                   <table class="table table-bordered table-haver table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nama</th>
                                <th>Sks</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($matakuliah as $m)
                                <tr>
                                    <td>{{$m->id}}</td>
                                    <td>{{$m->nama}}</td>
                                    <td>{{$m->sks}}</td>
                                    <td>
                                        <a href="{{route('matkul.edit')}}" class="btn btn-warning">Edit</a>
                                        <a href="{{route('matkul.hapus')}}" class="btn btn-warning">Hapus</a>
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

{{--
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
</table> --}}
