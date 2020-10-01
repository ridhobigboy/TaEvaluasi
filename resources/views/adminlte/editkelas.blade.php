<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Edit Kelas</title>
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                CRUD Kelas - <strong>EDIT KELAS</strong>
            </div>
            <div class="card-body">
                <a href="{{route('kelas.index')}}" class="btn btn-primary">Kembali</a>
                <br/>
                <br/>


                <form method="post" action="kelas/update/{{ $kelas->id }}">

                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <div class="form-group">
                        <label>Id</label>
                        <input type="text" name="id" class="form-control" placeholder="Id Pertanyaan" value=" {{ $kelas->id }}">

                        @if($errors->has('Id'))
                            <div class="text-danger">
                                {{ $errors->first('Id')}}
                            </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Kode</label>
                        <input type="text" name="kode" class="form-control" placeholder="kode" value=" {{ $kelas->kode }}">

                         @if($errors->has('kelas'))
                            <div class="text-danger">
                                {{ $errors->first('kelas')}}
                            </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>semester</label>
                        <input type="text" name="semester" class="form-control" placeholder="aktif" value="{{$kelas->semester}}">

                        @if ($errors->has('semester'))
                            <div class="text-danger">
                                {{$errors->fisrt('semester')}}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>dosen_id</label>
                        <input type="text" name="dosen_id" class="form-control" placeholder="choice" value="{{$kelas->dosen_id}}">

                        @if ($errors->has('dosen_id'))
                            <div class="text-danger">
                                {{$errors->first('dosen_id')}}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>matakuliah_id</label>
                        <input type="text" name="matakuliah_id" class="form-control" placeholder="choice" value="{{$kelas->matakuliah_id}}">

                        @if ($errors->has('matakuliah_id'))
                            <div class="text-danger">
                                {{$errors->first('matakuliah_id')}}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>prodi_id</label>
                        <input type="text" name="prodi_id" class="form-control" placeholder="choice" value="{{$kelas->prodi_id}}">

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

{{-- <body>
    <h2>Edit Kelas</h2>

    <a href="/kelas">Back</a>
    <br><br>

    @foreach ($kelas as $k)
        <form action="/kelas/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $k->id}}"><br>
            id <input type="text" required="required" name="id" value="{{ $k->id}}"> <br>
            kode <input type="text" required="required" name="kode" value="{{ $k->kode}}"><br>
            semester <input type="text" required="required" name="semester" value="{{ $k->semester}}"><br>
            Dosen_id <input type="text" required="required" name="Dosen_id" value="{{ $k->dosen_id}}"><br>
            Matakuliah_id <input type="text" required="required" name="matakuliah_id" value="{{ $k->matakuliah_id}}"><br>
            Prodi_id <input type="text" required="required" name="prodi_id" value="{{ $k->prodi_id}}"><br>
            <input type="submit" value="Simpan Data">
        </form>
    @endforeach
</body>
</html> --}}
