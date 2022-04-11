@extends('admin-tmp.tmp')

@section('judul', 'Soal')

@section('isi')

    <div class="row mt4">
        <div class="col10">
            <div class="card">
                <div class="card-header">Data Soal
                    <a class="btn btn-sm btn-primary float-right" 
                    href="{{url('Soal/create')}}">Tambah Soal</a></div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Mata Kuliah</th>
                                <th>Dosen</th>
                                <th>Jumlah Soal</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($soal as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->nama_mk }}</td>
                                <td>{{ $row->dosen }}</td>
                                <td>{{ $row->jumlah_soal }}</td>
                                <td>{{ $row->keterangan }}</td>
                                <td></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection