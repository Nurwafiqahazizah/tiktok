@extends('layouts.app')

@section('content')
<div class="container"> 
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Form Tambah Jenis Bantuan</h5>
            <div class="col-sm-8">
                <form class="row g-3 mt-2" action="{{ url('jenis') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="jenis_bansos" class="form-label">Jenis Bantuan*</label>
                        <input type="text" class="form-control" id="jenis_bansos" name="jenis_bansos" placeholder="Inputkan Jenis Bantuan..." required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi*</label>
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Inputkan Deskripsi..." required>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ url('jenis') }}" class="btn btn-warning" >Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
