<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <title>Jawaban Kuisioner</title>
</head>
<body>
    {{-- <h2>Jawaban Kuisioner</h2>
    <a href="/jawaban"> Kembali</a>
    <br><br>

    <form action="/jawaban/new" method="POST">
        {{ csrf_field() }}
        Id <input type="text" name="id" required="required"><br>
        Jawaban <input type="text" name="jawaban" required="required"><br>
        <input type="submit" value="Simpan Data">
    </form> --}}
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                CRUD Jawaban <strong>Tambah Jawaban</strong>
            </div>
            <div class="card-body">
            <a href="{{route('jawaban.index')}}" class="btn btn-primary">Kembali</a>
                <br><br>

                <form action="{{route('jawaban.new')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Id</label>
                        <input type="text" name="id" class="form-control" placeholder="Id jawaban">
                        @if ($errors->has('id'))
                            <div class="text-danger">
                                {{$errors->first('id')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Jawaban</label>
                        <textarea name="jawaban" class="form-control" placeholder="Jawaban"></textarea>
                        @if ($errors->has('jawaban'))
                            <div class="text-danger">
                                {{$errors->first('jawaban')}}
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
