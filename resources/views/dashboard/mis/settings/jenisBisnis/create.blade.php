@extends('dashboard.layout.lte')

@section('title', 'Form Jenis Bisnis')

@section('content')

    <form action="{{ route('jenisBisnis.store') }}" method="post">
        @csrf
        <div class="row">
            <h5 class="text-center">@yield('title')</h5>
            {{-- </div> --}}
        </div>
        <hr>

        <div class="container">
            <div class="d-flex justify-content-center">
                <label class="col-sm-2 col-form-label my-2">Jenis Bisnis</label>
                <div class="col-sm-5 my-2">
                    <input id="jenis_bisnis" type="text" class="form-control @error('jenis_bisnis') is-invalid @enderror"
                        name="jenis_bisnis" />
                    @error('jenis_bisnis')
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
                        name="description" />
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
            <div class="col-sm-1">
                <a href="{{ route('jenisBisnis.index') }}" class="btn btn-danger">BACK</a>
            </div>
            <div class="col-sm-1 mr-5">
                <button type="submit" class="btn btn-primary">SUBMIT</button>
            </div>
        </div>
    </form>



@endsection
