@extends('template.master')

@section('judul', 'Tambah Mahasiswa')

@section('isi')
    <h1>Tambah Mahasiswa</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ url('simpan-mahasiswa') }}" method="POST">
        @csrf
        <div class="form-grup">
            <label for="">NIM</label>
            <input type="text" class="form-control" name="nim" value="{{old('nim')}}">
        </div>
        <div class="form-grup">
            <label for="">Nama Mahasiswa</label>
            <input type="text" class="form-control" name="nama_mahasiswa" value="{{old('nama_mahasiswa')}}">
        </div>
        <div class="form-grup">
            <label for="">Semester</label>
            <input type="number" class="form-control" name="semester" value="{{old('semester')}}">
        </div>
        <input type="submit" name="simpan" value="Simpan" class="btn btn-success"> 
    </form>
@endsection