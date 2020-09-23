<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kelas</title>
</head>
<body>
   <h2>Kelas</h2>
   <br><br>
   <ul>
       @foreach ($kelas as $k)
           <li>{{"id :".$k->id,'| kode :'.$k->kode,'semester :'.$k->semester,'dosen_id :'.$k->dosen_id,'matakuliah_id : '.$k->matakuliah_id,'prodi_id : '.$k->prodi_id}}</li>
       @endforeach
   </ul>
</body>
</html>
