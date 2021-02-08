@extends('adminlte::page')

@section('title', 'Kelas')

@section('content_header')
    <h1>Kelas</h1>
@stop

@section('content')
<div class="container">
    <div class="card mt-5">
        <div class="card-header text-center">
            <div class="card-body">

                {{-- jadi cara pemanggilan menggunakan Name kaya gini --}}
                <a href="{{route('kelas.tambah')}}" class="btn btn-primary">Input Pertanyaan Baru</a>
                <br><br>
                <table class="table table-bordered table-haver table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Kode</th>
                            <th>Semester</th>
                            <th>Dosen_id</th>
                            <th>Matakuliah_id</th>
                            <th>Prodi_id</th>
                        </tr>
                        </thead>
                        <tbody>
                         @foreach ($kelas as $k)
                            <tr>
                                <td>{{ $k->id}}</td>
                                <td>{{ $k->kode}}</td>
                                <td>{{ $k->semester}}</td>
                                <td>{{ $k->dosen_id}}</td>
                                <td>{{ $k->matakuliah_id}}</td>
                                <td>{{ $k->prodi_id}}</td>
                                <td>
                                    <a href="{{route('kelas.edit', $id ?? '')}}" class="btn btn-warning">Edit</a>
                                    <a href="{{route('kelas.hapus', $id ?? '')}}" class="btn btn-warning">Hapus</a>
                                </td>
                            </tr>
                         @endforeach
                        </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>consle.log('HI!')</script>
@stop
