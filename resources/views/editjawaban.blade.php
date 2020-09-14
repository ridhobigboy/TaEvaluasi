<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Jawaban</title>
</head>
<body>
    <h2>Edit Jawaban</h2>

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
    @endforeach
</body>
</html>
