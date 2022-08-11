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
    <div class="d-flex justify-content-start">
        {{-- <a href="{{ route('kd03.edit', ['kd03']) }}" class="btn btn-secondary mb-3" style="width: 150px">Kd03</a> --}}
        {{-- <a href="{{ route('kd4.edit') }}" class="btn btn-secondary mb-3" style="width: 150px">Kd04</a> --}}
        {{-- <a href="{{ route('editkd5', ['id']) }}" class="btn btn-secondary mb-3" style="width: 150px">Kd05</a> --}}
        {{-- <a href="{{ route('kd6.edit') }}" class="btn btn-secondary mb-3" style="width: 150px">Kd06</a> --}}
        {{-- <a href="{{ route('kd11.edit') }}" class="btn btn-secondary mb-3" style="width: 150px">Kd11</a> --}}
        {{-- <a href="{{ route('kd14.edit') }}" class="btn btn-secondary mb-3" style="width: 150px">Kd14</a> --}}
        {{-- </div> --}}
        <form action="/editkd03/request/{{ $kd03->id }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('put')
            <h6 class="text-left mt-3">KD03 Master Request</h6>
            <hr>
            <div class="row">
                <div class="d-flex justify-content-between">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-6">
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
                                            value="{{ $kd03->title_old }}" disabled />

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
                                            value="{{ $kd03->class_old }}" disabled />

                                        @error('class')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id=""
                                            class="form-label">Status</label>
                                    </div>
                                    <div class="col-sm-7">
                                        <input id="nama1" type="text"
                                            class="form-control @error('nama1') is-invalid @enderror" name="nama1"
                                            value="{{ $kd03->status == 1 ? 'Active' : 'Inactive' }}" disabled />
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
                                            class="form-control @error('nama1') is-invalid @enderror" name="nama1"
                                            value="{{ $kd03->nama1_old }}" disabled />
                                        @error('nama1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id="" class="form-label">Nama
                                            2</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="nama2" type="text"
                                            class="form-control @error('nama2') is-invalid @enderror" name="nama2"
                                            value="{{ $kd03->nama2_old }}" disabled />
                                        @error('nama2')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id=""
                                            class="form-label">Street</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="street" type="text"
                                            class="form-control @error('street') is-invalid @enderror" name="street"
                                            value="{{ $kd03->street_old }}" disabled />
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
                                            value="{{ $kd03->addit_old }}" disabled />
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
                                            value="{{ $kd03->tax_old }}" disabled />
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
                                            class="form-control @error('postal_code') is-invalid @enderror"
                                            name="postal_code" value="{{ $kd03->postal_code_old }}" disabled />
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
                                            value="{{ $kd03->fax_old }}" disabled />
                                        @error('fax')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id=""
                                            class="form-label text-center">PO
                                            Box</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="text" type="text"
                                            class="form-control @error('po_box') is-invalid @enderror" name="po_box"
                                            value="{{ $kd03->po_box_old }}" disabled />
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
                                            value="{{ $kd03->email_old }}" disabled />
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
                                            value="{{ $kd03->telp_old }}" disabled />
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
                                            value="{{ $kd03->mobile_old }}" disabled />
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
                                            value="{{ $kd03->home_old }}" disabled />
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
                                            style="font-size: 13px">Country
                                            Code</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="home" type="text"
                                            class="form-control @error('home') is-invalid @enderror" name="home"
                                            value="{{ $kd03->negara_old }}" disabled />

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
                                            value="{{ $kd03->kode_county_old }}" disabled />
                                        @error('kode_county')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id=""
                                            class="form-label">Kota</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="kota" type="text"
                                            class="form-control @error('kota') is-invalid @enderror" name="kota"
                                            value="{{ $kd03->kota_old }}" disabled />
                                        @error('kota')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id=""
                                            class="form-label">NPWP</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="npwp" type="text"
                                            class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                            value="{{ $kd03->npwp_old }}" disabled />
                                        @error('npwp')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
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
                                    <div class="col-sm-6">
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
                                            class="form-control @error('short_name') is-invalid @enderror"
                                            name="short_name" value="{{ $kd03->short_name }}" readonly />
                                        @error('short_name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id=""
                                            class="form-label">Title</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <select class="selectpicker" aria-label="Default select example" name="title"
                                            data-live-search="true">
                                            <option value="{{ $kd03->title }}" selected>{{ $kd03->title }}</option>
                                            @foreach ($titles as $title)
                                                @if (old('title') == $title->title)
                                                    <option value="{{ $title->title }}">
                                                        {{ $kd03->title }}
                                                    </option>
                                                @else
                                                    <option value="{{ $title->title }}">{{ $title->title }}
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
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id=""
                                            class="form-label">Class</label>
                                    </div>
                                    <div class="col-sm-7">
                                        <select class="selectpicker" aria-label="Default select example" name="class"
                                            data-live-search="true">
                                            <option value="{{ $kd03->class }}" selected>{{ $kd03->class }}</option>
                                            @foreach ($classes as $class)
                                                @if (old('class') == $class->class)
                                                    <option value="{{ $kd03->class }}">
                                                        {{ $kd03->class }}
                                                    </option>
                                                @else
                                                    <option value="{{ $class->class }}/ {{ $class->description }}">
                                                        {{ $class->class }}/ {{ $class->description }}
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
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id=""
                                            class="form-label">Status</label>
                                    </div>
                                    <div class="col-sm-7">
                                        <select class="selectpicker" aria-label="Default select example" name="status"
                                            data-live-search="true">
                                            <option value="1" {{ $kd03->status == 1 ? 'selected' : '' }}>Active
                                            </option>
                                            <option value="2" {{ $kd03->status == 2 ? 'selected' : '' }}>Inactive
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
                                            class="form-control @error('nama1') is-invalid @enderror" name="nama1"
                                            value="{{ old('nama1', $kd03->nama1) }}" />
                                        @error('nama1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id="" class="form-label">Nama
                                            2</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="nama2" type="text"
                                            class="form-control @error('nama2') is-invalid @enderror" name="nama2"
                                            value="{{ old('nama2', $kd03->nama2) }}" />
                                        @error('nama2')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id=""
                                            class="form-label">Street</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="street" type="text"
                                            class="form-control @error('street') is-invalid @enderror" name="street"
                                            value="{{ old('street', $kd03->street) }}" />
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
                                            value="{{ old('addit', $kd03->addit) }}" />
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
                                        <select class="selectpicker" aria-label="Default select example" name="tax"
                                            data-live-search="true">
                                            <option value="{{ $kd03->tax }}" selected>{{ $kd03->tax }}</option>
                                            @foreach ($taxs as $tax)
                                                @if (old('tax') == $tax->tax)
                                                    <option value="{{ $tax->tax }}">
                                                        {{ $kd03->tax }}
                                                    </option>
                                                @else
                                                    <option value="{{ $tax->tax }}">{{ $tax->tax }}
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
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id="" class="form-label"
                                            style="font-size: 13px">Postal
                                            Code</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="postal_code" type="number"
                                            class="form-control @error('postal_code') is-invalid @enderror"
                                            name="postal_code" value="{{ old('postal_code', $kd03->postal_code) }}" />
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
                                            value="{{ old('fax', $kd03->fax) }}" />
                                        @error('fax')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id=""
                                            class="form-label text-center">PO
                                            Box</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="text" type="text"
                                            class="form-control @error('po_box') is-invalid @enderror" name="po_box"
                                            value="{{ old('po_box', $kd03->po_box) }}" />
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
                                            value="{{ old('email', $kd03->email) }}" />
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
                                            value="{{ old('telp', $kd03->telp) }}" />
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
                                            value="{{ old('mobile', $kd03->mobile) }}" />
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
                                            value="{{ old('home', $kd03->home) }}" />
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
                                        <select class="selectpicker" aria-label="Default select example" name="negara"
                                            data-live-search="true" data-container="body">
                                            <option value="{{ $kd03->negara }}" selected>{{ $kd03->negara }}</option>
                                            @foreach ($negaras as $negara)
                                                @if (old('negara') == $negara->nama_negara)
                                                    <option value="{{ $negara->nama_negara }}">
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
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id="" class="form-label"
                                            style="font-size: 15px">Freight</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <select class="selectpicker" aria-label="Default select example"
                                            name="kode_county" data-live-search="true" data-container="body">
                                            <option value="{{ $kd03->kode_county }}">{{ $kd03->kode_county }}
                                            </option>
                                            @foreach ($kodeCountries as $country)
                                                @if (old('kode_county') == $country->kode_county)
                                                    <option
                                                        value="{{ $country->kode_county }} - {{ $country->description }}">
                                                        {{ $country->kode_county }} - {{ $country->description }}
                                                    </option>
                                                @else
                                                    <option
                                                        value="{{ $country->kode_county }} - {{ $country->description }}">
                                                        {{ $country->kode_county }} - {{ $country->description }}
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
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id=""
                                            class="form-label">Kota</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="kota" type="text"
                                            class="form-control @error('kota') is-invalid @enderror" name="kota"
                                            value="{{ old('kota', $kd03->kota) }}" />
                                        @error('kota')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id=""
                                            class="form-label">NPWP</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="npwp" type="text"
                                            class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                            value="{{ old('npwp', $kd03->npwp) }}" />
                                        @error('npwp')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id="" class="form-label">NPWP
                                            Image</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <img src="{{ URL::to($kd03->npwp_image) }}" alt=""
                                        style="height: 100px; weight: 100px;" class="rounded mx-auto d-block" id="img"></a>
                                        <input type="file"
                                            class="form-control @error('npwp_image') is-invalid @enderror"
                                            name="npwp_image" id="npwp_image" onchange="previewImage(event)" />
                                        @error('npwp_image')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id="" class="form-label">KTP
                                            Image</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <img src="{{ URL::to($kd03->ktp_image) }}" alt=""
                                        style="height: 100px; weight: 100px;" class="rounded mx-auto d-block" id="img2"></a>
                                        <input type="file"
                                            class="form-control @error('ktp_image') is-invalid @enderror"
                                            name="ktp_image" id="ktp_image" onchange="previewImage2(event)" />
                                        @error('ktp_image')
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




                <div class="d-flex flex-row-reverse bd-highlight my-3">
                    <div class="p-2 bd-highlight"><a href="{{ route('kd03request.index') }}"
                            class="btn btn-danger">BACK</a></div>
                    <div class="p-2 bd-highlight"><button type="submit" class="btn btn-primary">UPDATE</button></div>
                </div>

            </div>
        </form>



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
