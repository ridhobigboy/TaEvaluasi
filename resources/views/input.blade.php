 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
     <style type="text/css">
        .dropdown-toggle{
            height: 40px;
            width: 400px !important;
        }
     </style>
     <title>Form Evaluasi Dosen</title>
 </head>
 <body>
    {{-- <h2>Form Evaluasi Dosen</h2>
    <br><br>
    @foreach ($k ?? ''uisionerkelas ?? '' as $K)
    <form method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $k ?? ''->id}}"><br>
        nim <input type="text" name="nim" value="{{ $k ?? ''->nim}}">
        kelas <input type="text" name="kelas" value="{{ $k ?? ''->kelas}}">
        Pelaksanaan Kuliah Dimulai & Diakhiri tepat waktu <br>
        <input type="radio" id="jawaban_id" value="{{ $k ?? ''->jawaban_id}}">
        <label for="Pelaksanaan Kuliah Dimulai & Diakhiri tepat waktu">Sangat Tidak Setuju</label>
        <input type="radio" id="jawaban_id" value="{{ $k ?? ''->jawaban_id}}">
        <label for="Pelaksanaan Kuliah Dimulai & Diakhiri tepat waktu"> Tidak Setuju</label>
        <input type="radio" id="jawaban_id" value="{{ $k ?? ''->jawaban_id}}">
        <label for="Pelaksanaan Kuliah Dimulai & Diakhiri tepat waktu">Agak Setuju</label>
        <input type="radio" id="jawaban_id" value="{{ $k ?? ''->jawaban_id}}">
        <label for="Pelaksanaan Kuliah Dimulai & Diakhiri tepat waktu">Setuju</label>
        <input type="radio" id="jawaban_id" value="{{ $k ?? ''->jawaban_id}}">
        <label for="Pelaksanaan Kuliah Dimulai & Diakhiri tepat waktu">Sangat Setuju</label><br><br>
        Dosen menguasai materi & menyampaikan dengan baik <br>
        <input type="radio" id="jawaban_id" value="{{ $k ?? ''->jawaban_id}}">
        <label for="Dosen menguasai materi & menyampaikan dengan baik">Sangat Tidak Setuju</label>
        <input type="radio" id="jawaban_id" value="{{ $k ?? ''->jawaban_id}}">
        <label for="Dosen menguasai materi & menyampaikan dengan baik"> Tidak Setuju</label>
        <input type="radio" id="jawaban_id" value="{{ $k ?? ''->jawaban_id}}">
        <label for="Dosen menguasai materi & menyampaikan dengan baik">Agak Setuju</label>
        <input type="radio" id="jawaban_id" value="{{ $k ?? ''->jawaban_id}}">
        <label for="Dosen menguasai materi & menyampaikan dengan baik">Setuju</label>
        <input type="radio" id="jawaban_id" value="{{ $k ?? ''->jawaban_id}}">
        <label for="Dosen menguasai materi & menyampaikan dengan baik">Sangat Setuju</label><br><br>
        Diskusi materi & pembahasan tugas/ujian berjalan baik, didalam/luar kelas <br>
        <input type="radio" id="jawaban_id" value="{{ $k ?? ''->jawaban_id}}">
        <label for="Diskusi materi & pembahasan tugas/ujian berjalan baik, didalam/luar kelas">Sangat Tidak Setuju</label>
        <input type="radio" id="jawaban_id" value="{{ $k ?? ''->jawaban_id}}">
        <label for="Diskusi materi & pembahasan tugas/ujian berjalan baik, didalam/luar kelas"> Tidak Setuju</label>
        <input type="radio" id="jawaban_id" value="{{ $k ?? ''->jawaban_id}}">
        <label for="Diskusi materi & pembahasan tugas/ujian berjalan baik, didalam/luar kelas">Agak Setuju</label>
        <input type="radio" id="jawaban_id" value="{{ $k ?? ''->jawaban_id}}">
        <label for="Diskusi materi & pembahasan tugas/ujian berjalan baik, didalam/luar kelas">Setuju</label>
        <input type="radio" id="jawaban_id" value="{{ $k ?? ''->jawaban_id}}">
        <label for="Diskusi materi & pembahasan tugas/ujian berjalan baik, didalam/luar kelas">Sangat Setuju</label><br><br>
        <input type="submit" value="simpan">
    </form>
    @endforeach --}}
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                <strong>Form Evaluasi Dosen</strong>
            </div>
            <div class="card-body">
                <form action="input/proses" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Nim</label>
                        <input type="text" name="nim" class="form-control" placeholder="Nim">
                        @if ($errors->has('nim'))
                            <div class="text-danger">
                                {{$errors->first('nim')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Kelas</label>
                        <input type="text" name="kelas_id" class="form-control" placeholder="Kelas">
                        @if ($errors->has('kelas_id'))
                            <div class="text-danger">
                                {{$errors->first('kelas')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Pelaksanaan Kuliah Dimulai & Diakhiri tepat waktu</label> <br>
                        {{-- @foreach ($data ?? '' as $jawabankuisioner)
                    <label><input type="checkbox" name="jawaban_id[]" value="{{$jawabankuisioner->id}}">{{$jawabankuisioner->jawaban}}}</label>
                        @endforeach --}}
                        <select class="form-control" name="jawaban_id[]" multiple="">
                            <option value="Sangat tidak setuju">Sangat tidak setuju</option>
                            <option value="Tidak setuju">Tidak setuju</option>
                            <option value="Agak setuju">Agak setuju</option>
                            <option value="Setuju">Setuju</option>
                            <option value="Sangat setuju">Sangat setuju</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Dosen menguasai materi & menyampaikan dengan baik</label> <br>
                        {{-- <label><input type="checkbox" name="jawaban_id[]" value="Sangat tidak setuju">Sangat tidak setuju</label>
                        <label><input type="checkbox" name="jawaban_id[]" value="Tidak setuju">Tidak setuju</label>
                        <label><input type="checkbox" name="jawaban_id[]" value="Agak setuju">Agak setuju</label>
                        <label><input type="checkbox" name="jawaban_id[]" value="Setuju">Setuju</label>
                        <label><input type="checkbox" name="jawaban_id[]" value="Sangat setuju">Sangat setuju</label> --}}
                        <select class="selectpicker" multiple data-live-search="true" name="jawaban_id[]">
                            <option value="Sangat tidak setuju">Sangat tidak setuju</option>
                            <option value="Tidak setuju">Tidak setuju</option>
                            <option value="Agak setuju">Agak setuju</option>
                            <option value="Setuju">Setuju</option>
                            <option value="Sangat setuju">Sangat setuju</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Diskusi materi & pembahasan tugas/ujian berjalan baik, didalam/luar kelas</label> <br>
                        {{-- <label><input type="checkbox" name="jawaban_id[]" value="Sangat tidak setuju">Sangat tidak setuju</label>
                        <label><input type="checkbox" name="jawaban_id[]" value="Tidak setuju">Tidak setuju</label>
                        <label><input type="checkbox" name="jawaban_id[]" value="Agak setuju">Agak setuju</label>
                        <label><input type="checkbox" name="jawaban_id[]" value="Setuju">Setuju</label>
                        <label><input type="checkbox" name="jawaban_id[]" value="Sangat setuju">Sangat setuju</label> --}}
                        <select class="form-control" name="jawaban_id[]" multiple="">
                            <option value="Sangat tidak setuju">Sangat tidak setuju</option>
                            <option value="Tidak setuju">Tidak setuju</option>
                            <option value="Agak setuju">Agak setuju</option>
                            <option value="Setuju">Setuju</option>
                            <option value="Sangat setuju">Sangat setuju</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Ada saran yang diberikan untuk dosen terkait</label>
                        <input type="text" name="jawaban_text" class="form-control" placeholder="Jawaban">
                        @if ($errors->has('jawaban_text'))
                            <div class="text-danger">
                                {{$errors->first('jawaban')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="simpan">
                    </div>
                </form>
            </div>
        </div>
    </div>
 </body>
 <!-- Initialize the plugin: -->
<script type="text/javascript">
    $(document).ready(function() {
        $('select').selectpicker();
    });
</script>
 </html>
