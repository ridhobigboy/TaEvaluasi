<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Matakuliah</title>
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                CRUD Matkul - <strong>EDIT MATAKULIAH</strong>
            </div>
            <div class="card-body">
                <a href="{{route('matkul.index')}}" class="btn btn-primary">Kembali</a>
            </div>
            <br><br>
            <form method="POST" action="matkul/update/{{$matkul->id}}">
                <div class="form-group">
                    <label>Id</label>
                    <input type="text" name="id" class="form-group" placeholder="id matkul" value="{{ $matkul->id}}">

                    @if ($errors->has('id'))
                        <div class="text-danger">
                            {{$errors->first('id')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-group" placeholder="nama matkul" value="{{ $matkul->nama}}">

                    @if ($errors->has('nama'))
                        <div class="text-danger">
                            {{ $errors->first('nama')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label>Sks</label>
                    <input type="text" name="sks" class="form-group" placeholder="sks matkul" value="{{$matkul->sks}}">

                    @if ($errors->has('sks'))
                        <div class="text-danger">
                            {{$errors->first('sks')}}
                        </div>
                    @endif
                </div>
                <div class="form-gruop">
                    <input type="submit" class="btn btn-success" value="simpan">
                </div>
            </form>
        </div>
    </div>
</body>
</html>

{{--
<h2>Edit Matakuliah</h2>
    <a href="/matkul">Kembali</a>
    <br><br>
    @foreach ($matakuliah as $m)
        <form action="/matkul/update" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $m->id}}"><br>
            id <input type="text" name="id" required="required" value="{{ $m->id}}"><br>
            nama <input type="text" name="nama" required="required" value="{{ $m->nama}}"><br>
            sks <input type="text" name="sks" required="required" value="{{ $m->sks}}"><br>
            <input type="submit" value="Simpan Data">
        </form>
    @endforeach --}}
