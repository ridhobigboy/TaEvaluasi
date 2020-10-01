<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <title>Edit Prodi</title>
</head>
<body>
   <div class="container">
       <div class="card mt-5">
           <div class="card-header text-center">
               CRUD Prodi - <strong>EDIT PRODI</strong>
           </div>
           <div class="card-body">
               <a href="{{route('prodi.index')}}" class="btn btn-primary">Kembali</a>
               <br><br>
               <form action="prodi/update/{{ $prodi->id}}" method="POST">
                {{ csrf_field() }}
                {{ method_field('put')}}
                <div class="form-group">
                    <label>Id</label>
                    <input type="text" name="id" class="form-control" placeholder="Id Prodi" value="{{ $prodi->id}}">

                    @if ($errors->has($id))
                        <div class="text-danger">
                            {{ $errors->first('id')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama Prodi" value="{{ $prodi->nama}}">

                    @if ($errors->has($id))
                        <div class="text-danger">
                            {{$errors->first('nama')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="simpan">
                </div>
               </form>
           </div>
       </div>
   </div>
</body>
</html>

{{--
<h2>Edit Prodi</h2>
<a href="/prodi">Kembali</a>
<br><br>

@foreach ($prodi as $p)
     {{ csrf_field() }}
     <input type="hidden" name="id" value="{{ $p->id}}"><br>
     id <input type="text" required="required" value="{{ $p->id}}"><br>
     nama <input type="text" required="required" value="{{ $p->nama}}"><br>
     <input type="submit" value="Simpan Data">
@endforeach --}}
