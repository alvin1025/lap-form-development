@extends('dashboard.layout.lte')

@section('title', 'Form Tipe Perusahaan')

@section('content')

    {{-- <form action="{{ route('classes.update', ['class' => $class->id]) }}" method="post">
        @csrf
        @method('put') --}}
    <div class="row">
        <h5 class="text-center">@yield('title')</h5>
        {{-- </div> --}}
    </div>
    <hr>


    <div class="container">
        <div class="d-flex justify-content-center">
            <label class="col-sm-2 col-form-label my-2">Tipe Perusahaan</label>
            <div class="col-sm-5 my-2">
                <input id="tipe_perusahaan" type="text" class="form-control @error('tipe_perusahaan') is-invalid @enderror"
                    name="tipe_perusahaan" value="{{ $tipePerusahaan->tipe_perusahaan }}" readonly />
                @error('tipe_perusahaan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <label class="col-sm-2 col-form-label my-2">Description</label>
            <div class="col-sm-5 my-2">
                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror"
                    name="description" value="{{ $tipePerusahaan->description }}" readonly />
                @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>


    <div class="
                            d-flex justify-content-end mb-5">
        <div class="col-sm-1 mr-5">
            <a href="{{ route('tipePerusahaan.index') }}" class="btn btn-danger">BACK</a>
        </div>
    </div>

@endsection
