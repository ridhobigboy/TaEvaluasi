<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dosen</title>
</head>
<body>
    <h2>Dosen</h2>
    <br><br>

    <ul>
        @foreach ($dosen as $d)
            <li>{{"id : ".$d->id,'| Nama :'. $d->nama}}</li>
        @endforeach
    </ul>
</body>
</html>
