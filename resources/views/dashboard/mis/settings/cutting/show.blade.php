@extends('dashboard.layout.lte')

@section('title', 'Form Cutting')

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
            <label class="col-sm-2 col-form-label my-2">Cutting</label>
            <div class="col-sm-5 my-2">
                <input id="cutting" type="text" class="form-control @error('cutting') is-invalid @enderror" name="cutting"
                    value="{{ $cutting->cutting }}" readonly />
                @error('cutting')
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
                    name="description" value="{{ $cutting->description }}" readonly />
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
            <a href="{{ route('cutting.index') }}" class="btn btn-danger">BACK</a>
        </div>
    </div>


@endsection
