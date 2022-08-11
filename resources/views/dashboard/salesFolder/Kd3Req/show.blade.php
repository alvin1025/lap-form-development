@extends('dashboard.layout.lte')

@section('title', 'CUSTOMER MAIN ADDRESS KD03 REQUEST')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center border-bottom">
        <h1 class="h2">@yield('title')</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif
    {{-- <form action="{{ route('kd3.update', ['kd3' => $kd03->id]) }}" method="POST"> --}}
    {{-- @csrf --}}
    {{-- <form action="{{ route('kd3.update', ['kd3' => $kd03->id]) }}" method="POST"> --}}
    {{-- @csrf --}}
    {{-- @method('put') --}}
    <h6 class="text-left mt-3">KD03 Master</h6>
    <hr>
    <div class="row">
        <div class="d-flex justify-content-start">
            <div class="row">
                <div class="col-sm-6">
                    <div class="d-flex flex-row">
                        <div class="col-sm-3">
                            <label type="text" name="" id="" class="form-label">Title</label>
                        </div>
                        <div class="col-sm-8">
                            <input id="nama1" type="text" class="form-control @error('nama1') is-invalid @enderror"
                                name="nama1" value="{{ $kd03->title }}" disabled />

                            @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-3">
                            <label type="text" name="" id="" class="form-label">Class</label>
                        </div>
                        <div class="col-sm-7">
                            <input id="nama1" type="text" class="form-control @error('nama1') is-invalid @enderror"
                                name="nama1" value="{{ $kd03->class }}" disabled />

                            @error('class')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-3">
                            <label type="text" name="" id="" class="form-label">Status</label>
                        </div>
                        <div class="col-sm-7">
                            <input id="nama1" type="text" class="form-control @error('nama1') is-invalid @enderror"
                                name="nama1" value="{{ $kd03->status == 1 ? 'Active' : 'Inactive' }}" disabled />
                            @error('status')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-3">
                            <label type="text" name="" id="" class="form-label">Nama 1</label>
                        </div>
                        <div class="col-sm-8">
                            <input id="nama1" type="text" class="form-control @error('nama1') is-invalid @enderror"
                                name="nama1" value="{{ $kd03->nama1 }}" disabled />
                            @error('nama1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-3">
                            <label type="text" name="" id="" class="form-label">Nama 2</label>
                        </div>
                        <div class="col-sm-8">
                            <input id="nama2" type="text" class="form-control @error('nama2') is-invalid @enderror"
                                name="nama2" value="{{ $kd03->nama2 }}" disabled />
                            @error('nama2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-3">
                            <label type="text" name="" id="" class="form-label">Street</label>
                        </div>
                        <div class="col-sm-8">
                            <input id="street" type="text" class="form-control @error('street') is-invalid @enderror"
                                name="street" value="{{ $kd03->street }}" disabled />
                            @error('street')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-3">
                            <label type="text" name="" id="" class="form-label"
                                style="font-size: 13px">Additional
                                Address</label>
                        </div>
                        <div class="col-sm-8">
                            <input id="addit" type="text" class="form-control @error('addit') is-invalid @enderror"
                                name="addit" value="{{ $kd03->addit }}" disabled />
                            @error('addit')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-3">
                            <label type="text" name="" id="" class="form-label"
                                style="font-size: 13px">Tax</label>
                        </div>

                        <div class="col-sm-6">
                            <input id="addit" type="text"
                                class="form-control @error('addit') is-invalid @enderror" name="addit"
                                value="{{ $kd03->tax }}" disabled />
                            @error('tax')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                    </div>
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-3">
                            <label type="text" name="" id="" class="form-label"
                                style="font-size: 13px">Postal
                                Code</label>
                        </div>
                        <div class="col-sm-8">
                            <input id="postal_code" type="number"
                                class="form-control @error('postal_code') is-invalid @enderror" name="postal_code"
                                value="{{ $kd03->postal_code }}" disabled />
                            @error('postal_code')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="d-flex flex-row">
                        <div class="col-sm-3">

                        </div>
                        <div class="col-sm-8">

                        </div>
                    </div>
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-5">
                            <label type="text" name="" id="" class="form-label text-center">No
                                Cust</label>
                        </div>
                        <div class="col-sm-6">
                            <label type="text" name="" id="" class="form-label text-center">Short
                                Name</label>
                        </div>
                    </div>

                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-5">
                            <input id="no_cust" type="text"
                                class="form-control @error('no_cust') is-invalid @enderror" name="no_cust"
                                value="{{ $kd03->no_cust }}" disabled />
                            @error('no_cust')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <input id="short_name" type="text"
                                class="form-control @error('short_name') is-invalid @enderror" name="short_name"
                                value="{{ $kd03->short_name }}" disabled />
                            @error('short_name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="d-flex flex-row mt-5">
                        <div class="col-sm-3">
                            <label type="text" name="" id=""
                                class="form-label text-center">Fax</label>
                        </div>
                        <div class="col-sm-8">
                            <input id="fax" type="text" class="form-control @error('fax') is-invalid @enderror"
                                name="fax" value="{{ $kd03->fax }}" disabled />
                            @error('fax')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-3">
                            <label type="text" name="" id="" class="form-label text-center">PO
                                Box</label>
                        </div>
                        <div class="col-sm-8">
                            <input id="text" type="text"
                                class="form-control @error('po_box') is-invalid @enderror" name="po_box"
                                value="{{ $kd03->po_box }}" disabled />
                            @error('po_box')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-3">
                            <label type="text" name="" id=""
                                class="form-label text-center">Email</label>
                        </div>
                        <div class="col-sm-8">
                            <input id="email" type="text"
                                class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ $kd03->email }}" disabled />
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-3">
                            <label type="text" name="" id=""
                                class="form-label text-center">Phone</label>
                        </div>
                        <div class="col-sm-8">
                            <input id="telp" type="number"
                                class="form-control @error('telp') is-invalid @enderror" name="telp"
                                value="{{ $kd03->telp }}" disabled />
                            @error('telp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-3">
                            <label type="text" name="" id=""
                                class="form-label text-center">Mobile</label>
                        </div>
                        <div class="col-sm-8">
                            <input id="mobile" type="number"
                                class="form-control @error('mobile') is-invalid @enderror" name="mobile"
                                value="{{ $kd03->mobile }}" disabled />
                            @error('mobile')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-3">
                            <label type="text" name="" id=""
                                class="form-label text-center">Home</label>
                        </div>
                        <div class="col-sm-8">
                            <input id="home" type="text"
                                class="form-control @error('home') is-invalid @enderror" name="home"
                                value="{{ $kd03->home }}" disabled />
                            @error('home')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-3">
                            <a href="{{ url()->previous() }}" class="btn btn-danger">BACK</a>
                        </div>
                    </div>

                </div>
                <div class="col-sm-8">
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-2 mr-3">
                            <label type="text" name="" id="" class="form-label"
                                style="font-size: 13px">Country
                                Code</label>
                        </div>
                        <div class="col-sm-6">
                            <input id="home" type="text"
                                class="form-control @error('home') is-invalid @enderror" name="home"
                                value="{{ $kd03->negara }}" disabled />

                            @error('negara')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-2 mr-3">
                            <label type="text" name="" id="" class="form-label"
                                style="font-size: 15px">Kode
                                County</label>
                        </div>
                        <div class="col-sm-6">
                            <input id="home" type="text"
                                class="form-control @error('home') is-invalid @enderror" name="home"
                                value="{{ $kd03->kode_county }}" disabled />
                            @error('kode_county')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-2 mr-3">
                            <label type="text" name="" id="" class="form-label">Kota</label>
                        </div>
                        <div class="col-sm-6">
                            <input id="kota" type="text"
                                class="form-control @error('kota') is-invalid @enderror" name="kota"
                                value="{{ $kd03->kota }}" disabled />
                            @error('kota')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-2 mr-3">
                            <label type="text" name="" id="" class="form-label">NPWP</label>
                        </div>
                        <div class="col-sm-6">
                            <input id="npwp" type="text"
                                class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                value="{{ $kd03->npwp }}" disabled />
                            @error('npwp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-2 mr-3">
                            <label type="text" name="" id="" class="form-label">NPWP Image</label>
                        </div>
                        <div class="col-sm-6">
                            <img src="{{ URL::to($kd03->npwp_image) }}" alt="" style="height: 100px; weight: 100px;"
                                        class="rounded mx-auto d-block"></a>
                            @error('npwp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-2 mr-3">
                            <label type="text" name="" id="" class="form-label">KTP Image</label>
                        </div>
                        <div class="col-sm-6">
                            <img src="{{ URL::to($kd03->ktp_image) }}" alt="" style="height: 100px; weight: 100px;"
                                        class="rounded mx-auto d-block"></a>
                            @error('npwp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
    {{-- </form> --}}





@endsection
