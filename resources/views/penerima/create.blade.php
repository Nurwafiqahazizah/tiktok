@extends('layouts.app')

@section('content')
<div class="container"> 
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Form Tambah Penerima Bantuan</h5>
            <div class="col-sm-8">
                <form class="row g-3 mt-2" action="{{ url('penerima') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="nik" class="form-label">NIK*</label>
                        <input type="text" class="form-control" id="nik" name="nik" placeholder="Inputkan NIK Penerima..." required>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Penerima*</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Inputkan Nama Penerima..." required>
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat*</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Inputkan Alamat..." required>
                    </div>

                    <div class="mb-3">
                        <label for="telepon" class="form-label">Telepon*</label>
                        <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Inputkan Nomor Telepon..." required>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ url('penerima') }}" class="btn btn-warning" >Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
