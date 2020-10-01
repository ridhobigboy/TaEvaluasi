<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <title>Prodi</title>
</head>
<body>
    {{-- <h2>Prodi</h2>
    <a href="/prodi">Kembali</a>
    <br><br>
    <form action="/prodi/new" method="POST">
        {{ csrf_field() }}
        id <input type="text" name="id" required="required"><br>
        nama <input type="text" name="nama" required="required"><br>
        <input type="submit" value="Simpan Data">
    </form> --}}
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                CRUD Prodi <strong>Tambah Prodi</strong>
            </div>
            <div class="card-body">
            <a href="{{route('prodi.index')}}" class="btn btn-primary">Kembali</a>
                <br><br>

                <form action="{{route('prodi.new')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Id</label>
                        <input type="text" name="id" class="form-control" placeholder="Id Prodi">
                        @if ($errors->has('id'))
                            <div class="text-danger">
                                {{$errors->first('id')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama Prodi">
                        @if ($errors->has('nama'))
                            <div class="text-danger">
                                {{$errors->first('nama')}}
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
