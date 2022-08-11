@extends('dashboard.layout.lte')

@section('title', 'Form PR06')

@section('content')

    <form action="{{ route('pr06.store') }}" method="post">
        @csrf
        <div class="row">
            <h5 class="text-center">@yield('title')</h5>
            {{-- </div> --}}
        </div>
        <hr>

        <div class="container">
            <div class="d-flex justify-content-center">
                <label class="col-sm-2 col-form-label my-2">Coll</label>
                <div class="col-sm-5 my-2">
                    <input id="coll" type="text" class="form-control @error('coll') is-invalid @enderror"
                        name="coll" />
                    @error('coll')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <label class="col-sm-2 col-form-label my-2">PriceGrp</label>
                <div class="col-sm-5 my-2">
                    <input id="pricegrp" type="text" class="form-control @error('pricegrp') is-invalid @enderror"
                        name="pricegrp" />
                    @error('pricegrp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <label class="col-sm-2 col-form-label my-2">Serno</label>
                <div class="col-sm-5 my-2">
                    <input id="serno" type="text" class="form-control @error('serno') is-invalid @enderror"
                        name="serno" />
                    @error('serno')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <label class="col-sm-2 col-form-label my-2">Article</label>
                <div class="col-sm-5 my-2">
                    <input id="article" type="text" class="form-control @error('article') is-invalid @enderror"
                        name="article" />
                    @error('article')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <label class="col-sm-2 col-form-label my-2">Surkd</label>
                <div class="col-sm-5 my-2">
                    <input id="surkd" type="text" class="form-control @error('surkd') is-invalid @enderror"
                        name="surkd" />
                    @error('surkd')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <label class="col-sm-2 col-form-label my-2">Surcharge No</label>
                <div class="col-sm-5 my-2">
                    <input id="surcharge_no" type="text" class="form-control @error('surcharge_no') is-invalid @enderror"
                        name="surcharge_no" />
                    @error('surcharge_no')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <label class="col-sm-2 col-form-label my-2">Surch Red</label>
                <div class="col-sm-5 my-2">
                    <input id="surch_red" type="text" class="form-control @error('surch_red') is-invalid @enderror"
                        name="surch_red" />
                    @error('surch_red')
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
                <a href="{{ route('pr06.index') }}" class="btn btn-danger">BACK</a>
            </div>
            <div class="col-sm-1 mr-5">
                <button type="submit" class="btn btn-primary">SUBMIT</button>
            </div>
        </div>
    </form>



@endsection
