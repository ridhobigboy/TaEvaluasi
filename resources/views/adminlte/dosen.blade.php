@extends('adminlte::page')

@section('title', 'Dosen')

@section('content_header')
    <h1>Dosen</h1>
@stop

@section('content')
<div class="container">
    <div class="card mt-5">
        <div class="card-header text-center">
            <div class="card-body">
                <a href="{{route('dosen.tambah')}}" class="btn btn-primary">Input Dosen</a>
                <br><br>
            <table class="table table-bordered tabel-haver table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dosen as $d)
                        <tr>
                            <td>{{$d->id}}</td>
                            <td>{{$d->nama}}</td>
                            <td>
                                <a href="{{route('dosen.edit', $id ?? '')}}" class="btn btn-warning">Edit</a>
                                <a href="{{route('dosen.hapus', $id ?? '')}}" class="btn btn-warning">Hapus</a>
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
    <script>console.log('HI!')</script>
@stop
