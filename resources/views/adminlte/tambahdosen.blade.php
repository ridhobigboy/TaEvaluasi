<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <title>Dosen</title>
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                CRUD Dosen <strong>Tambah Dosen</strong>
            </div>
            <div class="card-body">
            <a href="{{route('dosen.index')}}" class="btn btn-primary">Kembali</a>
                <br><br>

                <form action="{{route('dosen.new')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Id</label>
                        <input type="text" name="id" class="form-control" placeholder="Id Dosen">
                        @if ($errors->has('id'))
                            <div class="text-danger">
                                {{$errors->first('id')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <textarea name="nama" class="form-control" placeholder="Nama Dosen"></textarea>
                        @if ($errors->has('nama'))
                            <div class="text-danger">
                                {{$errors->first('nama')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Simpan">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
@extends('adminlte::page')

@section('title', 'Dosen')

@section('content_header')

@stop

@section('content')
<div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                CRUD Dosen <strong>Tambah Dosen</strong>
            </div>
            <div class="card-body">
            <a href="{{route('dosen.index')}}" class="btn btn-primary">Kembali</a>
                <br><br>

                <form action="{{route('dosen.new')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Id</label>
                        <input type="text" name="id" class="form-control" placeholder="Id Dosen">
                        @if ($errors->has('id'))
                            <div class="text-danger">
                                {{$errors->first('id')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <textarea name="nama" class="form-control" placeholder="Nama Dosen"></textarea>
                        @if ($errors->has('nama'))
                            <div class="text-danger">
                                {{$errors->first('nama')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Simpan">
                    </div>
                </form>
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
