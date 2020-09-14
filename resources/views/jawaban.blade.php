<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jawaban Kuisioner</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>
   <div class="container">
       <div class="card">
           <div class="card-body">
            <h2>Jawaban Kuisioner</h2>

            <a href="/jawaban/tambah"> + Tambah Jawaban</a>
            <br><br>
            <table border="1">
                <tr>
                    <th>Id</th>
                    <th>Jawaban</th>
                </tr>
                @foreach ($jawaban as $j)
                    <tr>
                        <td>{{ $j->id}}</td>
                        <td>{{ $j->jawaban}}</td>
                        <td>
                            <a href="/jawaban/edit/{{ $j->id}}"> Edit</a>
                            <a href="/jawaban/hapus/{{ $j->id}}"> Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </table>
           </div>
       </div>
   </div>
</body>
</html>
