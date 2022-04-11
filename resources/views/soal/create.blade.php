@extends('admin-tmp.tmp')

@section('judul', 'Tambah Data Soal')

@section('isi')

    <div class="row mt10">
        <div class="col10">
            <div class="card">
                <div class="card-header">Tambah Data Soal
                    <a class="btn btn-sm btn-info float-right" 
                    href="{{url('Soal')}}"><i class="fas fa-backward"></i>Kembali</a></div>
                <div class="card-body">
                    <form action="{{url('Soal/create')}}" method="post">
                        @csrf
                        <div class="from-group">
                            <label>Mata Kuliah</label>
                            <input type="text" name="nama_mk" class="form-control">
                        </div>

                        <div class="from-group">
                            <label>Dosen</label>
                            <input type="text" name="dosen" class="form-control">
                        </div>

                        <div class="from-group">
                            <label>Jumlah Soal</label>
                            <input type="text" name="jumlah_soal" class="form-control">
                        </div>

                        <div class="from-group">
                            <label>Keterangan</label>
                            <input type="text" name="keterangan" class="form-control">
                        </div>

                        <input type="submit" class="btn btn-primary" name="submit" value="Save Soal">
                        <a class="btn btn-warning float-right" 
                        href="{{url('Soal')}}"><i class="fas fa-backward"></i>Batal</a>

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
@endsection