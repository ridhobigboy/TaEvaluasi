 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Form Evaluasi Dosen</title>
 </head>
 <body>
    <h2>Form Evaluasi Dosen</h2>
    <br><br>
    @foreach ($kuisionerkelas as $K)
    <form method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $k->id}}"><br>
        nim <input type="text" name="nim" value="{{ $k->nim}}">
        kelas <input type="text" name="kelas" value="{{ $k->kelas}}">
        Pelaksanaan Kuliah Dimulai & Diakhiri tepat waktu <br>
        <input type="radio" id="jawaban_id" value="{{ $k->jawaban_id}}">
        <label for="Pelaksanaan Kuliah Dimulai & Diakhiri tepat waktu">Sangat Tidak Setuju</label>
        <input type="radio" id="jawaban_id" value="{{ $k->jawaban_id}}">
        <label for="Pelaksanaan Kuliah Dimulai & Diakhiri tepat waktu"> Tidak Setuju</label>
        <input type="radio" id="jawaban_id" value="{{ $k->jawaban_id}}">
        <label for="Pelaksanaan Kuliah Dimulai & Diakhiri tepat waktu">Agak Setuju</label>
        <input type="radio" id="jawaban_id" value="{{ $k->jawaban_id}}">
        <label for="Pelaksanaan Kuliah Dimulai & Diakhiri tepat waktu">Setuju</label>
        <input type="radio" id="jawaban_id" value="{{ $k->jawaban_id}}">
        <label for="Pelaksanaan Kuliah Dimulai & Diakhiri tepat waktu">Sangat Setuju</label><br><br>
        Dosen menguasai materi & menyampaikan dengan baik <br>
        <input type="radio" id="jawaban_id" value="{{ $k->jawaban_id}}">
        <label for="Dosen menguasai materi & menyampaikan dengan baik">Sangat Tidak Setuju</label>
        <input type="radio" id="jawaban_id" value="{{ $k->jawaban_id}}">
        <label for="Dosen menguasai materi & menyampaikan dengan baik"> Tidak Setuju</label>
        <input type="radio" id="jawaban_id" value="{{ $k->jawaban_id}}">
        <label for="Dosen menguasai materi & menyampaikan dengan baik">Agak Setuju</label>
        <input type="radio" id="jawaban_id" value="{{ $k->jawaban_id}}">
        <label for="Dosen menguasai materi & menyampaikan dengan baik">Setuju</label>
        <input type="radio" id="jawaban_id" value="{{ $k->jawaban_id}}">
        <label for="Dosen menguasai materi & menyampaikan dengan baik">Sangat Setuju</label><br><br>
        Diskusi materi & pembahasan tugas/ujian berjalan baik, didalam/luar kelas <br>
        <input type="radio" id="jawaban_id" value="{{ $k->jawaban_id}}">
        <label for="Diskusi materi & pembahasan tugas/ujian berjalan baik, didalam/luar kelas">Sangat Tidak Setuju</label>
        <input type="radio" id="jawaban_id" value="{{ $k->jawaban_id}}">
        <label for="Diskusi materi & pembahasan tugas/ujian berjalan baik, didalam/luar kelas"> Tidak Setuju</label>
        <input type="radio" id="jawaban_id" value="{{ $k->jawaban_id}}">
        <label for="Diskusi materi & pembahasan tugas/ujian berjalan baik, didalam/luar kelas">Agak Setuju</label>
        <input type="radio" id="jawaban_id" value="{{ $k->jawaban_id}}">
        <label for="Diskusi materi & pembahasan tugas/ujian berjalan baik, didalam/luar kelas">Setuju</label>
        <input type="radio" id="jawaban_id" value="{{ $k->jawaban_id}}">
        <label for="Diskusi materi & pembahasan tugas/ujian berjalan baik, didalam/luar kelas">Sangat Setuju</label><br><br>
        <input type="submit" value="simpan">
    </form>
    @endforeach
 </body>
 </html>
