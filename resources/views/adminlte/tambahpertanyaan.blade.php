<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <title>Kuisioner Dosen</title>
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                CRUD Pertanyaan <strong>Tambah Pertanyaan</strong>
            </div>
            <div class="card-body">
                <a href="/pertanyaan" class="btn btn-primary">Kembali</a>
                <br><br>

                <form action="/pertanyaan/baru" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Id</label>
                        <input type="text" name="id" class="form-control" placeholder="Id pertanyaan">
                        @if ($errors->has('id'))
                            <div class="text-danger">
                                {{$errors->first('id')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>pertanyaan</label>
                        <textarea name="pertanyaan" class="form-control" placeholder="Pertanyaan"></textarea>
                        @if ($errors->has('pertanyaan'))
                            <div class="text-danger">
                                {{$errors->first('pertanyaan')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Aktif</label>
                        <input type="text" name="aktif" class="form-control" placeholder="aktif">
                        @if ($errors->has('aktif'))
                            <div class="text-danger">
                                {{$errors->first('aktif')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Choice</label>
                        <input type="text" name="choice" class="form-control" placeholder="choice">
                        @if ($errors->has('choice'))
                            <div class="text-danger">
                                {{$errors->fist('choice')}}
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
