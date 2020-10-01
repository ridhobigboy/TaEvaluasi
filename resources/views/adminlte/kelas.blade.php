<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <title>Kelas</title>
</head>
<body>
  <div class="container">
      <div class="card m-5">
          <div class="card-header text-center">
              <div class="card-body">

                <a href="{{route('kelas.tambah')}}" class="btn btn-primary">Input Kelas Baru</a>
                <br><br>
                <table class="table table-bordered table-haver table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Kode</th>
                            <th>semester</th>
                            <th>dosen_id</th>
                            <th>matakuliah_id</th>
                            <th>prodi_id</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kelas as $k)
                            <tr>
                                <td>{{$k->id}}</td>
                                <td>{{$k->kode}}</td>
                                <td>{{$k->semester}}</td>
                                <td>{{$k->dosen_id}}</td>
                                <td>{{$k->matakuliah_id}}</td>
                                <td>{{$k->prodi_id}}</td>
                                <td>
                                    <a href="{{route('kelas.edit')}}" class="btn btn-warning">Edit</a>
                                    <a href="{{route('kelas.hapus')}}" class="btn btn-warning">Hapus</a>
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

{{-- <h2>Kelas</h2>
<br><br>
<ul>
    @foreach ($kelas as $k)
        <li>{{"id :".$k->id,'| kode :'.$k->kode,'semester :'.$k->semester,'dosen_id :'.$k->dosen_id,'matakuliah_id : '.$k->matakuliah_id,'prodi_id : '.$k->prodi_id}}</li>
    @endforeach
</ul> --}}
