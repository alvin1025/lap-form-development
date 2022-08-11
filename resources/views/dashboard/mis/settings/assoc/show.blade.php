@extends('dashboard.layout.lte')

@section('title', 'Form Association')

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
        <div class="d-flex justify-content-between">
            <div class="col-sm-6">
                <div class="d-flex flex-row mt-2">
                    <div class="col-sm-2 mr-5">
                        <label type="text" name="" id="" class="form-label">No Cust</label>
                    </div>
                    <div class="col-sm-3">
                        <input id="no_cust" type="text" class="form-control @error('no_cust') is-invalid @enderror"
                            name="no_cust" value="{{ $assoc->no_cust }}" disabled />
                        @error('no_cust')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="d-flex flex-row mt-2">
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label">Title</label>
                    </div>
                    <div class="col-sm-6">
                        <input id="no_cust" type="text" class="form-control @error('no_cust') is-invalid @enderror"
                            name="no_cust" value="{{ $assoc->title }}" disabled />
                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <div class="col-sm-6">
                <div class="d-flex flex-row mt-2">
                    <div class="col-sm-2 mr-5">
                        <label type="text" name="" id="" class="form-label">Nama</label>
                    </div>
                    <div class="col-sm-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            name="name" value="{{ $assoc->name }}" disabled />
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="d-flex flex-row mt-2">
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label" style="font-size: 13px">Short
                            Name</label>
                    </div>
                    <div class="col-sm-6">
                        <input id="shortname" type="text" class="form-control @error('shortname') is-invalid @enderror"
                            name="shortname" value="{{ $assoc->shortname }}" disabled />
                        @error('shortname')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <div class="col-sm-6">
                <div class="d-flex flex-row mt-2">
                    <div class="col-sm-2 mr-5">
                        <label type="text" name="" id="" class="form-label">Street</label>
                    </div>
                    <div class="col-sm-6">
                        <input id="street" type="text" class="form-control @error('street') is-invalid @enderror"
                            name="street" value="{{ $assoc->street }}" disabled />
                        @error('street')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="d-flex flex-row mt-2">
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label"
                            style="font-size: 13px">Additional
                            Address</label>
                    </div>
                    <div class="col-sm-6">
                        <input id="additional" type="text" class="form-control @error('additional') is-invalid @enderror"
                            name="additional" value="{{ $assoc->additional }}" disabled />
                        @error('additional')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <div class="col-sm-6">
                <div class="d-flex flex-row mt-2">
                    <div class="col-sm-2 mr-5">
                        <label type="text" name="" id="" class="form-label">Tax</label>
                    </div>
                    <div class="col-sm-6">
                        <input id="no_cust" type="text" class="form-control @error('no_cust') is-invalid @enderror"
                            name="no_cust" value="{{ $assoc->tax }}" disabled />
                        @error('tax')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="d-flex flex-row mt-2">
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label">Postal Code</label>
                    </div>
                    <div class="col-sm-6">
                        <input id="postal" type="text" class="form-control @error('postal') is-invalid @enderror"
                            name="postal" value="{{ $assoc->postal }}" disabled />
                        @error('postal')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <div class="col-sm-6">
                <div class="d-flex flex-row mt-2">
                    <div class="col-sm-2 mr-5">
                        <label type="text" name="" id="" class="form-label"
                            style="font-size: 13px">Country
                            Code</label>
                    </div>
                    <div class="col-sm-6">
                        <input id="postal" type="text" class="form-control @error('postal') is-invalid @enderror"
                            name="postal" value="{{ $assoc->country_code }}" disabled />
                        @error('country_code')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="d-flex flex-row mt-2">
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label">City</label>
                    </div>
                    <div class="col-sm-6">
                        <input id="kota" type="text" class="form-control @error('kota') is-invalid @enderror"
                            name="kota" value="{{ $assoc->kota }}" disabled />
                        @error('kota')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <div class="col-sm-6">
                <div class="d-flex flex-row mt-2">
                    <div class="col-sm-2 mr-5">
                        <label type="text" name="" id="" class="form-label">Fax</label>
                    </div>
                    <div class="col-sm-6">
                        <input id="fax" type="number" class="form-control @error('fax') is-invalid @enderror"
                            name="fax" value="{{ $assoc->fax }}" disabled />
                        @error('fax')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="d-flex flex-row mt-2">
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label">Po Box</label>
                    </div>
                    <div class="col-sm-6">
                        <input id="pobox" type="text" class="form-control @error('pobox') is-invalid @enderror"
                            name="pobox" value="{{ $assoc->pobox }}" disabled />
                        @error('pobox')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <div class="col-sm-6">
                <div class="d-flex flex-row mt-2">
                    <div class="col-sm-2 mr-5">
                        <label type="text" name="" id="" class="form-label">Association</label>
                    </div>
                    <div class="col-sm-6">
                        <input id="assoc" type="text" class="form-control @error('assoc') is-invalid @enderror"
                            name="assoc" value="{{ $assoc->assoc }}" disabled />
                        @error('assoc')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="d-flex flex-row mt-2">
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label">Email</label>
                    </div>
                    <div class="col-sm-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ $assoc->email }}" disabled />
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <div class="col-sm-6">
                <div class="d-flex flex-row mt-2">
                    <div class="col-sm-2 mr-5">
                        <label type="text" name="" id="" class="form-label">Phone</label>
                    </div>
                    <div class="col-sm-6">
                        <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror"
                            name="phone" value="{{ $assoc->phone }}" disabled />
                        @error('phone')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="d-flex flex-row mt-2">
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label">Mobile</label>
                    </div>
                    <div class="col-sm-6">
                        <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror"
                            name="mobile" value="{{ $assoc->mobile }}" disabled />
                        @error('mobile')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="
                            d-flex justify-content-end my-5">
        <div class="col-sm-1 mr-5">
            <a href="{{ route('assiociation.index') }}" class="btn btn-danger">BACK</a>
        </div>
    </div>
    {{-- </form> --}}



@endsection
