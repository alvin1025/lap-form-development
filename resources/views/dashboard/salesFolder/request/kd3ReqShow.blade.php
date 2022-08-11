@extends('dashboard.layout.lte')

@section('title', 'CUSTOMER MAIN ADDRESS KD03 REQUESTS')

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
    <div class="d-flex justify-content-between">
        <div class="col-sm-6">
            <h6 class="text-left mt-3">KD03 Master</h6>
        </div>
        <div class="col-sm-6">
            <h6 class="text-left mt-3">KD03 Request</h6>
        </div>
    </div>

    <hr>
    <div class="row">
        <div class="d-flex justify-content-between">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-6">
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

                        <div class="d-flex flex-row my-2">
                            <div class="col-sm-6">
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
                        <div class="d-flex flex-row">
                            <div class="col-sm-3">
                                <label type="text" name="" id="" class="form-label">Title</label>
                            </div>
                            <div class="col-sm-8">
                                <input id="nama1" type="text"
                                    class="form-control @error('nama1') is-invalid @enderror" name="nama1"
                                    value="{{ $kd03->title }}" disabled />

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
                                <input id="nama1" type="text"
                                    class="form-control @error('nama1') is-invalid @enderror" name="nama1"
                                    value="{{ $kd03->class }}" disabled />

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
                                <input id="nama1" type="text"
                                    class="form-control @error('nama1') is-invalid @enderror" name="nama1"
                                    value="{{ $kd03->status == 1 ? 'Active' : 'Inactive' }}"  readonly/>
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
                                <input id="nama1" type="text"
                                    class="form-control @error('nama1') is-invalid @enderror" name="nama1"
                                    value="{{ $kd03->nama1 }}" disabled />
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
                                <input id="nama2" type="text"
                                    class="form-control @error('nama2') is-invalid @enderror" name="nama2"
                                    value="{{ $kd03->nama2 }}" disabled />
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
                                <input id="street" type="text"
                                    class="form-control @error('street') is-invalid @enderror" name="street"
                                    value="{{ $kd03->street }}" disabled />
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
                                <input id="addit" type="text"
                                    class="form-control @error('addit') is-invalid @enderror" name="addit"
                                    value="{{ $kd03->addit }}" disabled />
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
                        <div class="d-flex flex-row mt-2">
                            <div class="col-sm-3">
                                <label type="text" name="" id=""
                                    class="form-label text-center">Fax</label>
                            </div>
                            <div class="col-sm-8">
                                <input id="fax" type="text"
                                    class="form-control @error('fax') is-invalid @enderror" name="fax"
                                    value="{{ $kd03->fax }}" disabled />
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
                                <label type="text" name="" id="" class="form-label"
                                    style="font-size: 13px">Country</label>
                            </div>
                            <div class="col-sm-8">
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
                        <div class="d-flex flex-row mt-2">
                            <div class="col-sm-3">
                                <label type="text" name="" id="" class="form-label"
                                    style="font-size: 15px">Kode
                                    County</label>
                            </div>
                            <div class="col-sm-8">
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
                        <div class="d-flex flex-row mt-2">
                            <div class="col-sm-3">
                                <label type="text" name="" id="" class="form-label">Kota</label>
                            </div>
                            <div class="col-sm-8">
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
                        <div class="d-flex flex-row mt-2">
                            <div class="col-sm-3">
                                <label type="text" name="" id="" class="form-label">NPWP</label>
                            </div>
                            <div class="col-sm-8">
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
                        <div class="d-flex flex-row mt-2">
                            <div class="col-sm-3">
                                <label type="text" name="" id="" class="form-label">NPWP Image</label>
                            </div>
                            <div class="col-sm-8">
                                <a href="{{ URL::to($kd03->npwp_image) }}" class="">
                                <img src="{{ URL::to($kd03->npwp_image) }}" alt="" style="height: 100px; weight: 100px;"
                                class="rounded mx-auto d-block"></a>
                                @error('npwp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex flex-row mt-2">
                            <div class="col-sm-3">
                                <label type="text" name="" id="" class="form-label">KTP Image</label>
                            </div>
                            <div class="col-sm-8">
                                <a href="{{ URL::to($kd03->ktp_image) }}" class="">
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
                    <div class="col-sm-6">
                        {{-- create --}}
                        <form action="{{ route('kd03request.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{-- <div class="row"> --}}
                            {{-- <div class="d-flex justify-content-between"> --}}
                            {{-- <div class="col-sm-12"> --}}
                            {{-- <div class="row"> --}}
                            {{-- <div class="col-sm-6"> --}}
                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-5">
                                    <label type="text" name="" id=""
                                        class="form-label text-center">No
                                        Cust</label>
                                </div>
                                <div class="col-sm-6">
                                    <label type="text" name="" id=""
                                        class="form-label text-center">Short
                                        Name</label>
                                </div>
                            </div>

                            <div class="d-flex flex-row my-2">
                                <div class="col-sm-5">
                                    <input id="no_cust" type="text"
                                        class="form-control @error('no_cust') is-invalid @enderror" name="no_cust"
                                        value="{{ $kd03->no_cust }}" readonly />
                                    @error('no_cust')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <input id="short_name" type="text"
                                        class="form-control @error('short_name') is-invalid @enderror" name="short_name"
                                        value="{{ $kd03->short_name }}" readonly />
                                    @error('short_name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex flex-row">
                                <div class="col-sm-3">
                                    <label type="text" name="" id="" class="form-label">Title</label>
                                </div>
                                <div class="col-sm-8">
                                    <select class="selectpicker" aria-label="Default select example" name="title"
                                        data-live-search="true">
                                        <option value="">Choose Title</option>
                                        @foreach ($titles as $title)
                                            @if (old('title') == $title->title)
                                                <option value="{{ $title->title }}" selected>
                                                    {{ $kd03->title }}
                                                </option>
                                            @else
                                                <option value="{{ $title->title }}">
                                                    {{ $title->title }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <input type="hidden" name="title_old" value="{{ $kd03->title }}">
                                <input type="hidden" name="status_old" value="{{ $kd03->status }}">
                            </div>
                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-3">
                                    <label type="text" name="" id="" class="form-label">Class</label>
                                </div>
                                <div class="col-sm-7">
                                    <select class="selectpicker" aria-label="Default select example" name="class"
                                        data-live-search="true">
                                        <option value="">Choose Class</option>
                                        @foreach ($classes as $class)
                                            @if (old('class') == $class->class)
                                                <option value="{{ $class->class }} / {{ $class->description }}"
                                                    selected>
                                                    {{ $class->class }} / {{ $class->description }}
                                                </option>
                                            @else
                                                <option value="{{ $class->class }} / {{ $class->description }}">
                                                    {{ $class->class }} / {{ $class->description }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('class')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <input type="hidden" name="class_old" value="{{ $kd03->class }}">
                            </div>
                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-3">
                                    <label type="text" name="" id=""
                                        class="form-label">Status</label>
                                </div>
                                <div class="col-sm-7">
                                    <select class="selectpicker" aria-label="Default select example" name="status"
                                        data-live-search="true">
                                        <option value="">Choose Status</option>
                                        <option value="1">Active</option>
                                        <option value="2">Inactive
                                        </option>
                                    </select>
                                    @error('status')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-3">
                                    <label type="text" name="" id="" class="form-label">Nama
                                        1</label>
                                </div>
                                <div class="col-sm-8">
                                    <input id="nama1" type="text"
                                        class="form-control @error('nama1') is-invalid @enderror" name="nama1" />
                                    @error('nama1')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <input type="hidden" name="nama1_old" value="{{ $kd03->nama1 }}">
                            </div>
                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-3">
                                    <label type="text" name="" id="" class="form-label">Nama
                                        2</label>
                                </div>
                                <div class="col-sm-8">
                                    <input id="nama2" type="text"
                                        class="form-control @error('nama2') is-invalid @enderror" name="nama2" />
                                    @error('nama2')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <input type="hidden" name="nama2_old" value="{{ $kd03->nama2 }}">
                            </div>
                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-3">
                                    <label type="text" name="" id=""
                                        class="form-label">Street</label>
                                </div>
                                <div class="col-sm-8">
                                    <input id="street" type="text"
                                        class="form-control @error('street') is-invalid @enderror" name="street" />
                                    @error('street')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <input type="hidden" name="street_old" value="{{ $kd03->street }}">
                            </div>
                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-3">
                                    <label type="text" name="" id="" class="form-label"
                                        style="font-size: 13px">Additional
                                        Address</label>
                                </div>
                                <div class="col-sm-8">
                                    <input id="addit" type="text"
                                        class="form-control @error('addit') is-invalid @enderror" name="addit" />
                                    @error('addit')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <input type="hidden" name="addit_old" value="{{ $kd03->addit }}">
                            </div>
                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-3">
                                    <label type="text" name="" id="" class="form-label"
                                        style="font-size: 13px">Tax</label>
                                </div>

                                <div class="col-sm-6">
                                    <select class="selectpicker" aria-label="Default select example" name="tax"
                                        data-live-search="true">
                                        <option value="">Choose Tax</option>
                                        @foreach ($taxs as $tax)
                                            @if (old('tax') == $tax->tax)
                                                <option value="{{ $tax->tax }}" selected>
                                                    {{ $kd03->tax }}
                                                </option>
                                            @else
                                                <option value="{{ $tax->tax }}">
                                                    {{ $tax->tax }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('tax')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <input type="hidden" name="tax_old" value="{{ $kd03->tax }}">

                            </div>
                            <div class="d-flex flex-row my-2">
                                <div class="col-sm-3">
                                    <label type="text" name="" id="" class="form-label"
                                        style="font-size: 13px">Postal
                                        Code</label>
                                </div>
                                <div class="col-sm-8">
                                    <input id="postal_code" type="number"
                                        class="form-control @error('postal_code') is-invalid @enderror"
                                        name="postal_code" />
                                    @error('postal_code')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <input type="hidden" name="postal_code_old" value="{{ $kd03->postal_code }}">
                            </div>
                            <div class="d-flex flex-row">
                                <div class="col-sm-3">
                                    <label type="text" name="" id=""
                                        class="form-label text-center">Fax</label>
                                </div>
                                <div class="col-sm-8">
                                    <input id="fax" type="text"
                                        class="form-control @error('fax') is-invalid @enderror" name="fax" />
                                    @error('fax')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <input type="hidden" name="fax_old" value="{{ $kd03->fax }}">
                            </div>
                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-3">
                                    <label type="text" name="" id=""
                                        class="form-label text-center">PO Box</label>
                                </div>
                                <div class="col-sm-8">
                                    <input id="text" type="text"
                                        class="form-control @error('po_box') is-invalid @enderror" name="po_box" />
                                    @error('po_box')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <input type="hidden" name="po_box_old" value="{{ $kd03->po_box }}">
                            </div>
                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-3">
                                    <label type="text" name="" id=""
                                        class="form-label text-center">Email</label>
                                </div>
                                <div class="col-sm-8">
                                    <input id="email" type="text"
                                        class="form-control @error('email') is-invalid @enderror" name="email" />
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <input type="hidden" name="email_old" value="{{ $kd03->email }}">
                            </div>
                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-3">
                                    <label type="text" name="" id=""
                                        class="form-label text-center">Phone</label>
                                </div>
                                <div class="col-sm-8">
                                    <input id="telp" type="number"
                                        class="form-control @error('telp') is-invalid @enderror" name="telp" />
                                    @error('telp')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <input type="hidden" name="telp_old" value="{{ $kd03->telp }}">
                            </div>
                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-3">
                                    <label type="text" name="" id=""
                                        class="form-label text-center">Mobile</label>
                                </div>
                                <div class="col-sm-8">
                                    <input id="mobile" type="number"
                                        class="form-control @error('mobile') is-invalid @enderror" name="mobile" />
                                    @error('mobile')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <input type="hidden" name="mobile_old" value="{{ $kd03->mobile }}">
                            </div>
                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-3">
                                    <label type="text" name="" id=""
                                        class="form-label text-center">Home</label>
                                </div>
                                <div class="col-sm-8">
                                    <input id="home" type="text"
                                        class="form-control @error('home') is-invalid @enderror" name="home" />
                                    @error('home')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <input type="hidden" name="home_old" value="{{ $kd03->home }}">
                            </div>
                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-3">
                                    <label type="text" name="" id="" class="form-label"
                                        style="font-size: 13px">Country</label>
                                </div>
                                <div class="col-sm-8">
                                    <select class="selectpicker" aria-label="Default select example" name="negara"
                                        data-live-search="true" data-container="body">
                                        <option value="">Choose Country</option>
                                        @foreach ($negaras as $negara)
                                            @if (old('negara') == $negara->nama_negara)
                                                <option value="{{ $negara->nama_negara }}" selected>
                                                    {{ $kd03->negara }}
                                                </option>
                                            @else
                                                <option value="{{ $negara->nama_negara }}">
                                                    {{ $negara->nama_negara }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('negara')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <input type="hidden" name="negara_old" value="{{ $kd03->negara }}">
                            </div>
                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-3">
                                    <label type="text" name="" id="" class="form-label"
                                        style="font-size: 15px">Freight</label>
                                </div>
                                <div class="col-sm-8">
                                    <select class="selectpicker" aria-label="Default select example" name="kode_county"
                                        data-live-search="true" data-container="body">
                                        <option value="">Choose Freight</option>
                                        @foreach ($kodeCountries as $country)
                                            @if (old('kode_county') == $country->kode_county)
                                                <option
                                                    value="{{ $country->kode_county }} - {{ $country->description }}"
                                                    selected>
                                                    {{ $country->kode_county }} -
                                                    {{ $country->description }}
                                                </option>
                                            @else
                                                <option
                                                    value="{{ $country->kode_county }} - {{ $country->description }}">
                                                    {{ $country->kode_county }} -
                                                    {{ $country->description }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('kode_county')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <input type="hidden" name="kode_county_old" value="{{ $kd03->kode_county }}">
                            </div>
                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-3">
                                    <label type="text" name="" id="" class="form-label">Kota</label>
                                </div>
                                <div class="col-sm-8">
                                    <input id="kota" type="text"
                                        class="form-control @error('kota') is-invalid @enderror" name="kota" />
                                    @error('kota')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <input type="hidden" name="kota_old" value="{{ $kd03->kota }}">
                            </div>
                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-3">
                                    <label type="text" name="" id="" class="form-label">NPWP</label>
                                </div>
                                <div class="col-sm-8">
                                    <input id="npwp" type="number"
                                        class="form-control @error('npwp') is-invalid @enderror" name="npwp" />
                                    @error('npwp')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <input type="hidden" name="npwp_old" value="{{ $kd03->npwp }}">
                            </div>
                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-3">
                                    <label type="text" name="" id="" class="form-label">Upload NPWP</label>
                                </div>
                                <div class="col-sm-8">
                                    <img class="img-preview img-fluid mb-3" id="img">
                                    <input type="file" class="form-control @error('npwp_image') is-invalid @enderror"
                                    name="npwp_image" id="npwp_image" onchange="previewImage(event)" accept="image/*"/>
                                    @error('npwp_image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <input type="hidden" name="npwp_image_old" value="{{ $kd03->npwp_image }}">
                            </div>
                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-3">
                                    <label type="text" name="" id="" class="form-label">Upload KTP</label>
                                </div>
                                <div class="col-sm-8">
                                    <img class="img-preview img-fluid mb-3" id="img2">
                                    <input type="file" class="form-control @error('ktp_image') is-invalid @enderror"
                                    name="ktp_image" id="ktp_image" onchange="previewImage2(event)" accept="image/*"/>
                                    @error('ktp_image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <input type="hidden" name="ktp_image_old" value="{{ $kd03->ktp_image }}">
                            </div>
                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-3">
                                    <a href="{{ url()->previous() }}" class="btn btn-danger">BACK</a>
                                </div>
                                <div class="col-sm-3">
                                    <button type="submit" class="btn btn-primary">SAVE</button>
                                </div>
                            </div>
                            {{-- </div> --}}
                            {{-- </div> --}}
                            {{-- </div> --}}
                            @if (auth()->user()->division == 'FABRIC SALES' && auth()->user()->jabatan == 'Sub Division Manager')
                                <input type="hidden" name="status_form" value="">
                                <input type="hidden" name="created_by" value="{{ auth()->user()->employee_name }} ">
                            @endif
                            {{-- </div> --}}
                            {{-- </div> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
    {{-- </form> --}}


<script>
    function previewImage(event) {
            let reader = new FileReader();
            reader.onload = function() {
                let output = document.getElementById('img');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    function previewImage2(event) {
            let reader = new FileReader();
            reader.onload = function() {
                let output = document.getElementById('img2');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
</script>



@endsection
