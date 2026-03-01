@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route("update.barang", $barang->uuid) }}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <p>{{ __('Edit Data barang') }}</p>
                            <a href="{{ route('index.barang') }}" class="btn btn-secondary">Kembali</a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (session('berhasil'))
                            <div class="alert alert-success" role="alert">
                                {{ session('berhasil') }}
                            </div>
                        @endif

                        @if (session('gagal'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('gagal') }}
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-md-12">
                                <label class="form-label">Kode Barang<span class="text-danger">*</span></label>
                                <input type="text" name="kode" id="kode" class="form-control" placeholder="..."  value="{{ $barang->kode ?? null }}" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label class="form-label">Nama Barang<span class="text-danger">*</span></label>
                                <input type="text" name="nama" id="nama" class="form-control" placeholder="..." value="{{ $barang->nama ?? null }}" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label class="form-label">Nama Barang<span class="text-danger">*</span></label>
                                <input type="text" name="jenis" id="jenis" class="form-control" placeholder="..." value="{{ $barang->jenis ?? null }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-end">
                            <button type="submit" class="btn btn-success">Ubah Data</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
