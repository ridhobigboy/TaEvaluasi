<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jawaban Kuisioner</title>
</head>
<body>
    <h2>Jawaban Kuisioner</h2>
    <a href="/jawaban"> Kembali</a>
    <br><br>

    <form action="/jawaban/new" method="POST">
        {{ csrf_field() }}
        Id <input type="text" name="id" required="required"><br>
        Jawaban <input type="text" name="jawaban" required="required"><br>
        <input type="submit" value="Simpan Data">
    </form>
</body>
</html>
