@extends('dashboard.layout.lte')

@section('title', 'Form Delivery Term')

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
            <label class="col-sm-2 col-form-label my-2">elivery Term</label>
            <div class="col-sm-5 my-2">
                <input id="key" type="text" class="form-control @error('key') is-invalid @enderror" name="key"
                    value="{{ $delivTerm->key }}" readonly />
                @error('key')
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
                    name="description" value="{{ $delivTerm->description }}" readonly />
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
            <a href="{{ route('delivTerm.index') }}" class="btn btn-danger">BACK</a>
        </div>
    </div>
    {{-- </form> --}}



@endsection
