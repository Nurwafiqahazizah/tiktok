@extends('layouts.app')

@section('content')
<div class="container"> 
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Form Edit Penyaluran Bantuan</h5>
            <div class="col-sm-8">
                <form class="row g-3 mt-2" action="{{ url('penyaluran/' . $row->id) }}" method="POST">
                    <input type="hidden" name="_method" value="PATCH">
                    @csrf

                    <div class="mb-3">
                        <label for="id_penerima" class="form-label">Penerima Bantuan*</label>
                        <select class="form-control" name="id_penerima" id="id_penerima">
                            <option value="">-- Pilih --</option>
                            @foreach($penerimas as $penerima)
                            <option value="{{ $penerima->id }}" {{ $row->id_penerima == $penerima->id ? 'selected' : ''}}>{{ $penerima->nama }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="id_jenis" class="form-label">Jenis Bantuan*</label>
                        <select class="form-control" name="id_jenis" id="id_jenis">
                            <option value="">-- Pilih --</option>
                            @foreach($jeniss as $jenis)
                            <option value="{{ $jenis->id }}" {{ $row->id_jenis == $jenis->id ? 'selected' : ''}}>{{ $jenis->jenis_bansos }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="jumlah_bantuan" class="form-label">Jumlah Bantuan*</label>
                        <input type="number" class="form-control" id="jumlah_bantuan" name="jumlah_bantuan" value="{{ $row->jumlah_bantuan }}" placeholder="Inputkan Jumlah Bantuan..." required>
                    </div>

                    <div class="mb-3">
                        <label for="tgl_penyaluran" class="form-label">Tanggal Penyaluran*</label>
                        <input type="date" class="form-control" id="tgl_penyaluran" name="tgl_penyaluran" value="{{ $row->tgl_penyaluran }}" placeholder="Inputkan Tanggal Penyaluran..." required>
                    </div>


                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ url('penyaluran') }}" class="btn btn-warning" >Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
