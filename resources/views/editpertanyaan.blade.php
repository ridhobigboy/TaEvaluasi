<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Pertanyaan</title>
</head>
<body>
    <h2>Edit Pertanyaan</h2>

    <a href="/pertanyaan"> Back</a>
    <br><br>

    @foreach ($pertanyaan as $p)
        <form action="/pertanyaan/update" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{$p->id}}"><br>
            id <input type="text" required="required" name="id" value="{{$p->id}}"><br>
            pertanyaan <input type="text" required="required" name="pertanyaan" value="{{$p->pertanyaan}}"><br>
            aktif <input type="text" required="required" name="aktif" value="{{$p->aktif}}"><br>
            choice <input type="text" required="required" name="choice" value="{{$p->choice}}"><br>
            <input type="submit" value="Simpan Data">
        </form>
    @endforeach
</body>
</html>
