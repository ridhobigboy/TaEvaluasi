<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <title>Edit Dosen</title>
</head>
<body>
   <div class="container">
       <div class="card mt-5">
           <div class="card-header text-center">
               CRUD Dosen - <strong>EDIT DOSEN</strong>
           </div>
           <div class="card-body">
               <a href="{{route('dosen.index')}}" class="btn btn-primary">Kembali</a>
               <br><br>
               <form action="dosen/update/{{$dosen->id}}" method="POST">
                 {{ csrf_field() }}
                 {{method_field('put')}}

                 <div class="form-group">
                     <label>Id</label>
                     <input type="text" name="id" class="form-control" placeholder="Id dosen" value="{{$dosen->id}}">

                     @if ($errors->has('id'))
                         <div class="text-danger">
                             {{$errors->first('id')}}
                         </div>
                     @endif
                 </div>
                 <div class="form-group">
                     <label>Nama</label>
                     <textarea name="nama" class="form-control" placeholder="Nama Dosen"> {{$dosen->nama}}</textarea>

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


{{--
<h2>Edit Dosen</h2>
<a href="/dosen">Kembali</a>
<br><br>
@foreach ($dosen as $d)
<form action="/dosen/update" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $d->id}}"><br>
    id <input type="text" required="required" name="id" value="{{ $d->id}}"><br>
    nama <input type="text" required="required" name="nama" value="{{ $d->nama}}"><br>
    <input type="submit" value="Simpan Data">
</form>
@endforeach --}}
