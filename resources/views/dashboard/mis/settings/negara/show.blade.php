@extends('dashboard.layout.lte')

@section('title', 'Form Negara')

@section('content')

    <h3 class="text-center">@yield('title')</h3>
    <hr class="my-3">
    <div class="container">
        <div class="d-flex justify-content-center">
            <label class="col-sm-2 col-form-label my-2">Kode Negara</label>
            <div class="col-sm-5 my-2">
                <input id="kode_negara" type="text" class="form-control @error('kode_negara') is-invalid @enderror"
                    name="kode_negara" value="{{ $negara->kode_negara }}" readonly />
                @error('kode_negara')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <label class="col-sm-2 col-form-label my-2">Nama Negara</label>
            <div class="col-sm-5 my-2">
                <input id="nama_negara" type="text" class="form-control @error('nama_negara') is-invalid @enderror"
                    name="nama_negara" value="{{ $negara->nama_negara }}" readonly />
                @error('nama_negara')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="d-flex justify-content-end mb-5">
            <div class="col-sm-1 mr-5">
                <a href="{{ route('negara.index') }}" class="btn btn-danger">BACK</a>
            </div>
        </div>
    </div>




@endsection
