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
    {{-- <h2>Kelas</h2>
    <a href="/kelas">Kembali</a>
    <br><br>
    <form action="/kelas/new" method="POST">
       {{ csrf_field() }}
       id <input type="text" name="id" required="required"><br>
       kode <input type="text" name="kode" required="required"><br>
       semester <input type="number" name="semester" required="required"><br>
       dosen_id <input type="number" name="dosen_id" required="required"><br>
       matakuliah_id <input type="number" name="matakuliah_id" required="required"><br>
       prodi_id <input type="number" name="prodi_id" required="required"> <br>
       <input type="submit" value="Simpan Data">
    </form> --}}
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                CRUD Kelas <strong>Tambah Kelas</strong>
            </div>
            <div class="card-body">
            <a href="{{route('kelas.index')}}" class="btn btn-primary">Kembali</a>
                <br><br>

                <form action="{{route('kelas.baru')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Id</label>
                        <input type="text" name="id" class="form-control" placeholder="Id Kelas">
                        @if ($errors->has('id'))
                            <div class="text-danger">
                                {{$errors->first('id')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Kode</label>
                        <input type="text" name="kode" class="form-control" placeholder="Kode">
                        @if ($errors->has('kode'))
                            <div class="text-danger">
                                {{$errors->first('kode')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Semester</label>
                        <input type="text" name="semester" class="form-control" placeholder="semester">
                        @if ($errors->has('semester'))
                            <div class="text-danger">
                                {{$errors->first('semester')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Dosen_id</label>
                        <input type="text" name="dosen_id" class="form-control" placeholder="dosen_id">
                        @if ($errors->has('dosen_id'))
                            <div class="text-danger">
                                {{$errors->first('dosen_id')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Matakuliah_id</label>
                        <input type="text" name="matakuliah_id" class="form-control" placeholder="matakuliah_id">
                        @if ($errors->has('matakuliah_id'))
                            <div class="text-danger">
                                {{$errors->first('matakuliah_id')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Prodi_id</label>
                        <input type="text" name="Prodi_id" class="form-control" placeholder="prodi_id">
                        @if ($errors->has('prodi_id'))
                            <div class="text-danger">
                                {{$errors->first('prodi_id')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Simpan">
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
