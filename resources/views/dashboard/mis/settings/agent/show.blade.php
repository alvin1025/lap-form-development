@extends('dashboard.layout.lte')

@section('title', 'Form Agent')

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
            <label class="col-sm-2 col-form-label my-2">Agent</label>
            <div class="col-sm-5 my-2">
                <input id="agent" type="text" class="form-control @error('agent') is-invalid @enderror" name="agent"
                    value="{{ $agent->agent }}" readonly />
                @error('agent')
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
                    name="description" value="{{ $agent->description }}" readonly />
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
            <a href="{{ route('agent.index') }}" class="btn btn-primary">BACK</a>
        </div>
        <div class="col-sm-1 mr-5">
            <button type="submit" class="btn btn-primary">SUBMIT</button>
        </div>
    </div>
    {{-- </form> --}}



@endsection
