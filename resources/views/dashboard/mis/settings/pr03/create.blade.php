@extends('dashboard.layout.lte')

@section('title', 'Form PR03')

@section('content')

    <form action="{{ route('pr03.store') }}" method="post">
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
                <label class="col-sm-2 col-form-label my-2">Validity Form</label>
                <div class="col-sm-5 my-2">
                    <input id="validity_from" type="date"
                        class="form-control @error('validity_from') is-invalid @enderror" name="validity_from" />
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
                        name="up_to" />
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
                    <input id="resp" type="text" class="form-control @error('resp') is-invalid @enderror"
                        name="resp" />
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
                        name="currency" />
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
                        name="rate1" />
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
                        name="rate2" />
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
                        name="price_unit" />
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
                        class="form-control @error('min_qty_surcharge') is-invalid @enderror" name="min_qty_surcharge" />
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
                        class="form-control @error('upto_qty_surcharge') is-invalid @enderror"
                        name="upto_qty_surcharge" />
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
                        name="qu" />
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
            <div class="col-sm-1">
                <a href="{{ route('pr03.index') }}" class="btn btn-danger">BACK</a>
            </div>
            <div class="col-sm-1 mr-5">
                <button type="submit" class="btn btn-primary">SUBMIT</button>
            </div>
        </div>
    </form>



@endsection
