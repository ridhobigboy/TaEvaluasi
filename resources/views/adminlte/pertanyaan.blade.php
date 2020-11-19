@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Pertanyaan</h1>
@stop

@section('content')
<div class="container">
    <div class="card mt-5">
        <div class="card-header text-center">
            <div class="card-body">

                {{-- jadi cara pemanggilan menggunakan Name kaya gini --}}
                <a href="{{route('pertanyaan.tambah')}}" class="btn btn-primary">Input Pertanyaan Baru</a>
                <br><br>
                <table class="table table-bordered table-haver table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Pertanyaan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pertanyaan as $p)
                        <tr>
                            <td>{{$p->id}}</td>
                            <td>{{$p->pertanyaan}}</td>
                            <td>
                                {{-- Ini nanti di ubah jadi kaya diatas --}}
                                <a href="{{route('pertanyaan.edit', $id ?? '')}}" class="btn btn-warning">Edit</a>
                                <a href="{{route('pertanyaan.hapus', $id ?? '')}}" class="btn btn-warning">Hapus</a>
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
