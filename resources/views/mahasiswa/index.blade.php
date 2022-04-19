@extends('template.master')

@section('judul', 'Data Soal')

@section('isi')
<h1>Data Mahasiswa</h1>

<table class="table table-hover table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama Mahasiswa</th>
            <th>Semester</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $row)

        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $row->nim }}</td>
            <td>{{ $row->nama_mahasiswa }}</td>
            <td>{{ $row->semester}}</td>
            <td>
                <form action="{{route('delete.mahasiswa', $row->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm"
                    onclick="return confirm('Anda Yakin?')"
                    >Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection