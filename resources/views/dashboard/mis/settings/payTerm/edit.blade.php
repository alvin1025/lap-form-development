@extends('dashboard.layout.lte')

@section('title', 'Form Pay Term')

@section('content')

    <form action="{{ route('payTerm.update', ['payTerm' => $payTerm->id]) }}" method="post">
        @csrf
        @method('put')
        <div class="row">
            <h5 class="text-center">@yield('title')</h5>
            {{-- </div> --}}
        </div>
        <hr>

        <div class="container">
            <div class="d-flex justify-content-center">
                <label class="col-sm-2 col-form-label my-2">Pay Term</label>
                <div class="col-sm-5 my-2">
                    <input id="pay_term" type="text" class="form-control @error('pay_term') is-invalid @enderror"
                        name="pay_term" value="{{ $payTerm->pay_term }}" />
                    @error('pay_term')
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
                        name="description" value="{{ $payTerm->description }}" />
                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <label class="col-sm-2 col-form-label my-2">Value</label>
                <div class="col-sm-5 my-2">
                    <input id="value" type="text" class="form-control @error('value') is-invalid @enderror"
                        name="value" value="{{ $payTerm->value }}" />
                    @error('value')
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
                <a href="{{ route('payTerm.index') }}" class="btn btn-danger">BACK</a>
            </div>
            <div class="col-sm-1 mr-5">
                <button type="submit" class="btn btn-primary">SUBMIT</button>
            </div>
        </div>
    </form>



@endsection
