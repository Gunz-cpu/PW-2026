@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('Anda Berhasil Masuk!!!' ) }}
                </div>
                <a href="{{ route('index.barang') }}" class="btn btn-secondary">Menu Utama</a>
            </div>
    </div>
</div>
@endsection
