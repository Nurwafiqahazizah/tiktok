@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-warning text-white">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p class="mb-4">{{ __('Halo,') }} <strong>{{ Auth::user()->name }}</strong>! {{ __('Selamat datang di Sistem Penyaluran Bantuan Sosial!') }}</p>
                    
                    <div class="alert alert-info" role="alert">
                        {{ __('Kami mengapresiasi peran penting Anda dalam mengelola dan memastikan kelancaran penyaluran bantuan sosial. Dengan akses yang Anda miliki, Anda memiliki kemampuan untuk memastikan bahwa bantuan disalurkan secara efisien dan sesuai dengan tujuan program.') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
