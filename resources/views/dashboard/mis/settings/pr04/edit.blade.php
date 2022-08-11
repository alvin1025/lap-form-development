@extends('dashboard.layout.lte')

@section('title', 'Form PR04')

@section('content')

    <form action="{{ route('pr04.update', ['pr04' => $pr04->id]) }}" method="post">
        @csrf
        @method('put')
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
                        name="coll" value="{{ $pr04->coll }}" />
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
                        name="pricegrp" value="{{ $pr04->pricegrp }}" />
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
                        name="serno" value="{{ $pr04->serno }}" />
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
                        name="article" value="{{ $pr04->article }}" />
                    @error('article')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <label class="col-sm-2 col-form-label my-2">Tariff Code</label>
                <div class="col-sm-5 my-2">
                    <input id="tariff_code" type="text" class="form-control @error('tariff_code') is-invalid @enderror"
                        name="tariff_code" value="{{ $pr04->tariff_code }}" />
                    @error('tariff_code')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <label class="col-sm-2 col-form-label my-2">Tariff Quantity</label>
                <div class="col-sm-5 my-2">
                    <input id="tariff_quantity" type="text"
                        class="form-control @error('tariff_quantity') is-invalid @enderror" name="tariff_quantity"
                        value="{{ $pr04->tariff_quantity }}" />
                    @error('tariff_quantity')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <label class="col-sm-2 col-form-label my-2">Price</label>
                <div class="col-sm-5 my-2">
                    <input id="price" type="text" class="form-control @error('price') is-invalid @enderror"
                        name="price" value="{{ $pr04->price }}" />
                    @error('price')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <label class="col-sm-2 col-form-label my-2">Surcharge Type</label>
                <div class="col-sm-5 my-2">
                    <input id="surcharge_type" type="text"
                        class="form-control @error('surcharge_type') is-invalid @enderror" name="surcharge_type"
                        value="{{ $pr04->surcharge_type }}" />
                    @error('surcharge_type')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <label class="col-sm-2 col-form-label my-2">Surcharge</label>
                <div class="col-sm-5 my-2">
                    <input id="surcharge" type="text" class="form-control @error('surcharge') is-invalid @enderror"
                        name="surcharge" value="{{ $pr04->surcharge }}" />
                    @error('surcharge')
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
                <a href="{{ route('pr04.index') }}" class="btn btn-danger">BACK</a>
            </div>
            <div class="col-sm-1 mr-5">
                <button type="submit" class="btn btn-primary">SUBMIT</button>
            </div>
        </div>
    </form>



@endsection
