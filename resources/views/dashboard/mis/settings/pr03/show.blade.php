@extends('dashboard.layout.lte')

@section('title', 'Form PR03')

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
            <label class="col-sm-2 col-form-label my-2">Coll</label>
            <div class="col-sm-5 my-2">
                <input id="coll" type="text" class="form-control @error('coll') is-invalid @enderror" name="coll"
                    value="{{ $pr03->coll }}" readonly />
                @error('coll')
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
                    name="serno" value="{{ $pr03->serno }}" readonly />
                @error('serno')
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
                    name="pricegrp" value="{{ $pr03->pricegrp }}" readonly />
                @error('pricegrp')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <label class="col-sm-2 col-form-label my-2">Validity Form</label>
            <div class="col-sm-5 my-2">
                <input id="validity_from" type="date" class="form-control @error('validity_from') is-invalid @enderror"
                    name="validity_from" value="{{ $pr03->validity_from }}" readonly />
                @error('validity_from')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <label class="col-sm-2 col-form-label my-2">Up To</label>
            <div class="col-sm-5 my-2">
                <input id="up_to" type="date" class="form-control @error('up_to') is-invalid @enderror"
                    name="up_to" value="{{ $pr03->up_to }}" readonly />
                @error('up_to')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <label class="col-sm-2 col-form-label my-2">Resp</label>
            <div class="col-sm-5 my-2">
                <input id="resp" type="text" class="form-control @error('resp') is-invalid @enderror" name="resp"
                    value="{{ $pr03->resp }}" readonly />
                @error('resp')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <label class="col-sm-2 col-form-label my-2">Currency</label>
            <div class="col-sm-5 my-2">
                <input id="currency" type="text" class="form-control @error('currency') is-invalid @enderror"
                    name="currency" value="{{ $pr03->currency }}" readonly />
                @error('currency')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <label class="col-sm-2 col-form-label my-2">Rate 1</label>
            <div class="col-sm-5 my-2">
                <input id="rate1" type="text" class="form-control @error('rate1') is-invalid @enderror"
                    name="rate1" value="{{ $pr03->rate1 }}" readonly />
                @error('rate1')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <label class="col-sm-2 col-form-label my-2">Rate 2</label>
            <div class="col-sm-5 my-2">
                <input id="rate2" type="text" class="form-control @error('rate2') is-invalid @enderror"
                    name="rate2" value="{{ $pr03->rate2 }}" readonly />
                @error('rate2')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <label class="col-sm-2 col-form-label my-2">Price Unit</label>
            <div class="col-sm-5 my-2">
                <input id="price_unit" type="text" class="form-control @error('price_unit') is-invalid @enderror"
                    name="price_unit" value="{{ $pr03->price_unit }}" readonly />
                @error('price_unit')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <label class="col-sm-2 col-form-label my-2" style="font-size: 12px">Min Qty Surcharge</label>
            <div class="col-sm-5 my-2">
                <input id="min_qty_surcharge" type="text"
                    class="form-control @error('min_qty_surcharge') is-invalid @enderror" name="min_qty_surcharge"
                    value="{{ $pr03->min_qty_surcharge }}" readonly />
                @error('min_qty_surcharge')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <label class="col-sm-2 col-form-label my-2" style="font-size: 12px">UpTo Qty Surcharge</label>
            <div class="col-sm-5 my-2">
                <input id="upto_qty_surcharge" type="text"
                    class="form-control @error('upto_qty_surcharge') is-invalid @enderror" name="upto_qty_surcharge"
                    value="{{ $pr03->upto_qty_surcharge }}" readonly />
                @error('upto_qty_surcharge')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <label class="col-sm-2 col-form-label my-2">Qu</label>
            <div class="col-sm-5 my-2">
                <input id="qu" type="text" class="form-control @error('qu') is-invalid @enderror"
                    name="qu" value="{{ $pr03->qu }}" readonly />
                @error('qu')
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
            <a href="{{ route('pr03.index') }}" class="btn btn-danger">BACK</a>
        </div>
    </div>
    {{-- </form> --}}



@endsection
