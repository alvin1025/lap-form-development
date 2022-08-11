@extends('dashboard.layout.lte')

@section('title', 'Form Title')

@section('content')

    {{-- <form action="{{ route('title.update', ['title' => $title->id]) }}" method="post">
    @csrf
    @method('put') --}}
    <div class="row">
        <h5 class="text-center">@yield('title')</h5>
        {{-- </div> --}}
    </div>
    <hr>

    <div class="container">
        <div class="d-flex justify-content-center">
            <label class="col-sm-2 col-form-label my-2">Title</label>
            <div class="col-sm-5 my-2">
                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                    value="{{ $title->title }}" readonly />
                @error('title')
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
                    name="description" value="{{ $title->description }}" readonly />
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
            <a href="{{ route('title.index') }}" class="btn btn-danger">BACK</a>
        </div>
    </div>



@endsection
