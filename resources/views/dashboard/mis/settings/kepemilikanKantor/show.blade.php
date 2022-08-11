@extends('dashboard.layout.lte')

@section('title', 'Form Jenis Bisnis')

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
            <label class="col-sm-2 col-form-label my-2">Kepemilikan Kantor</label>
            <div class="col-sm-5 my-2">
                <input id="kepemilikan_kantor" type="text"
                    class="form-control @error('kepemilikan_kantor') is-invalid @enderror" name="kepemilikan_kantor"
                    value="{{ $kepemilikanKantor->kepemilikan_kantor }}" readonly />
                @error('kepemilikan_kantor')
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
                    name="description" value="{{ $kepemilikanKantor->description }}" readonly />
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
            <a href="{{ route('kepemilikanKantor.index') }}" class="btn btn-danger">BACK</a>
        </div>
    </div>

@endsection
