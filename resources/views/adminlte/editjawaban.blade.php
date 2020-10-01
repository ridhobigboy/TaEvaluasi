<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <title>Edit Jawaban</title>
</head>
<body>
   <div class="container">
       <div class="card mt-5">
           <div class="card-header text-center">
               CRUD Jawaban - <strong>EDIT JAWABAN</strong>
           </div>
           <div class="card-body">
            <a href="{{route('jawaban.index')}}" class="btn btn-primary">Kembali</a>
            <br><br>

            <form action="jawaban/new/{{$jawaban->id}}" method="POST">
                {{ csrf_field() }}
                {{ method_field('put')}}

                <div class="form-group">
                    <label>Id</label>
                    <input type="text" name="id" class="form-control" placeholder="Id Jawaban" value=" {{ $jawaban->id}}">

                    @if ($errors->has('id'))
                        <div class="text-danger">
                            {{ $errors->first('id')}}
                        </div>
                    @endif
                </div>
            </form>
           </div>
           <div class="form-group">
               <label>Jawaban</label>
               <textarea name="jawaban" class="from-control" placeholder=" Jawaban...">{{ $jawaban->jawaban}}</textarea>

               @if ($errors->has('jawaban'))
                   <div class="text-danger">
                       {{ $errors->first('jawaban')}}
                   </div>
               @endif
           </div>
           <div class="form-group">
               <input type="submit" class="btn btn-success" value="Simpan">
           </div>
       </div>
   </div>
</body>
</html>


{{-- <h2>Edit Jawaban</h2>

<a href="/jawaban"> Back</a>
<br><br>

@foreach ($jawaban as $j)
    <form action="/jawaban/update" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $j->id}}"><br>
        id <input type="text" required="required" name="id" value="{{$j->id}}"> <br>
        jawaban <input type="text" required="required" name="jawaban" value="{{$j->jawaban}}">
        <input type="submit" value="SImpan Data">
    </form>
@endforeach --}}
