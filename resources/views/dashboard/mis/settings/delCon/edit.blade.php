@extends('dashboard.layout.lte')

@section('title', 'Form Del.Con')

@section('content')

    <form action="{{ route('delcon.update', ['delcon' => $delcon->id]) }}" method="post">
        @csrf
        @method('put')
        <div class="row">
            <h5 class="text-center">@yield('title')</h5>
            {{-- </div> --}}
        </div>
        <hr>

        <div class="container">
            <div class="d-flex justify-content-center">
                <label class="col-sm-2 col-form-label my-2">Del.Con</label>
                <div class="col-sm-5 my-2">
                    <input id="del_con" type="text" class="form-control @error('del_con') is-invalid @enderror"
                        name="del_con" value="{{ $delcon->del_con }}" />
                    @error('del_con')
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
                        name="description" value="{{ $delcon->description }}" />
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
                <a href="{{ route('delcon.index') }}" class="btn btn-danger">BACK</a>
            </div>
            <div class="col-sm-1 mr-5">
                <button type="submit" class="btn btn-primary">SUBMIT</button>
            </div>
        </div>
    </form>



@endsection
