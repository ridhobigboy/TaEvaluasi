<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kuisioner Dosen</title>
</head>
<body>
    <h2>Kuisioner Dosen</h2>
    <a href="{{route('pertanyaan.index')}}"> Kembali</a>
    <br><br>

    <form action="{{route('pertanyaan.baru')}}" method="POST">
        {{ csrf_field() }}
        id <input type="text" name="id" required="required"><br>
        pertanyaan <input type="text" name="pertanyaan" required="required"><br>
        aktif <input type="text" name="aktif" required="required"><br>
        choice <input type="text" name="choice" required="required"><br><br>
        <input type="submit" value="Simpan Data">
    </form>
</body>
</html>
