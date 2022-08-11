@extends('dashboard.layout.lte')

@section('title', 'ADDITIONAL ADDRESSES KD05 REQUEST')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center border-bottom">
        <h1 class="h2">@yield('title')</h1>
        <div class="d-flex flex-row mb-3 justify-content-end">
            <div class="col-sm-2">
                {{-- <a href="{{ route('createSame', $kd05->no_cust1) }}" class="btn btn-success">New</a> --}}
                {{-- <button type="button" class="btn btn-success me-2 remove-tr" id="add">Add More</button> --}}
            </div>
        </div>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{ route('kd05request.update', ['kd05request' => $kd05->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="card my-5" id="kd05_1">
            <div class="card-header">
                KD5 Additional
            </div>
            <div class="row">
                <div class="d-flex justify-content-between">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="d-flex flex-row my-2">
                                    <div class="col-sm-5">
                                        <label type="text" name="" id=""
                                            class="form-label text-center">No
                                            Cust</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label type="text" name="" id=""
                                            class="form-label text-center">Address Code</label>
                                    </div>
                                </div>
                                <div class="d-flex flex-row my-2">
                                    <div class="col-sm-5">
                                        <input id="no_cust1" type="text"
                                            class="form-control @error('no_cust1') is-invalid @enderror" name="no_cust1"
                                            value="{{ $kd05->no_cust1 }}"
                                            style="{{ $kd05->no_cust1 == null ? 'color:red' : '' }}" readonly />
                                        @error('no_cust1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <input id="kode_cust" type="text"
                                            class="form-control @error('kode_cust') is-invalid @enderror" name="kode_cust"
                                            value="{{ $kd05->addresscode1 ?? '-' }}"
                                            style="{{ $kd05->addresscode1 == null ? 'color:red' : '' }}" disabled />
                                        @error('kode_cust')
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
                                        <input type="text" class="form-control"
                                            value="{{ $kd05->title1_old ?? '-' }}"
                                            style="{{ $kd05->title1_old == null ? 'color:red' : '' }}" disabled>
                                        @error('title1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id="" class="form-label">Nama</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="nama" type="text"
                                            class="form-control @error('nama') is-invalid @enderror" name="nama"
                                            value="{{ $kd05->nama11_old ?? '-' }}"
                                            style="{{ $kd05->nama11_old == null ? 'color:red' : '' }}" disabled />
                                        @error('nama')
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
                                        <input id="nama" type="text"
                                            class="form-control @error('nama') is-invalid @enderror" name="nama"
                                            value="{{ $kd05->nama21_old ?? '-' }}"
                                            style="{{ $kd05->nama21_old == null ? 'color:red' : '' }}" disabled />
                                        @error('nama')
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
                                        <input id="kode_cust" type="text"
                                            class="form-control @error('kode_cust') is-invalid @enderror" name="kode_cust"
                                            value="{{ $kd05->street1_old ?? '-' }}"
                                            style="{{ $kd05->street1_old == null ? 'color:red' : '' }}" disabled />
                                        @error('alamat')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id="" class="form-label"
                                            style="font-size: 12px">Additional
                                            Address</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="addit1" type="text"
                                            class="form-control @error('addit1') is-invalid @enderror" name="addit1"
                                            value="{{ $kd05->addit1_old ?? '-' }}"
                                            style="{{ $kd05->addit1_old == null ? 'color:red' : '' }}" disabled />
                                        @error('alamat')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id=""
                                            class="form-label">Tax</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="kode_cust" type="text"
                                            class="form-control @error('kode_cust') is-invalid @enderror" name="kode_cust"
                                            value="{{ $kd05->tax1_old ?? '-' }}"
                                            style="{{ $kd05->tax1_old == null ? 'color:red' : '' }}" disabled />
                                        @error('alamat')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id="" class="form-label"
                                            style="font-size: 12px">Postal
                                            Code</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="postal_code1" type="postal_code1"
                                            class="form-control @error('postal_code1') is-invalid @enderror"
                                            name="postal_code1"
                                            value="{{ $kd05->postal_code1_old ?? '-' }}"
                                            style="{{ $kd05->postal_code1_old == null ? 'color:red' : '' }}" disabled />
                                        @error('postal_code1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id="" class="form-label">Country
                                            Code</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="kode_cust" type="text"
                                            class="form-control @error('kode_cust') is-invalid @enderror" name="kode_cust"
                                            value="{{ $kd05->kd5negara1_old ?? '-' }}"
                                            style="{{ $kd05->kd5negara1_old == null ? 'color:red' : '' }}" disabled />
                                        @error('kd5negara1')
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
                                        <input id="kode_cust" type="text"
                                            class="form-control @error('kode_cust') is-invalid @enderror" name="kode_cust"
                                            value="{{ $kd05->kode_county1_old ?? '-' }}"
                                            style="{{ $kd05->kode_county1_old == null ? 'color:red' : '' }}" disabled />
                                        @error('kode_country')
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
                                            value="{{ $kd05->kota1_old ?? '-' }}"
                                            style="{{ $kd05->kota1_old == null ? 'color:red' : '' }}" disabled />
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
                                        <input id="npwp1" type="text"
                                            class="form-control @error('npwp1') is-invalid @enderror" name="npwp1"
                                            value="{{ $kd05->npwp1_old ?? '-' }}"
                                            style="{{ $kd05->npwp1_old == null ? 'color:red' : '' }}" disabled />
                                        @error('npwp1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id=""
                                            class="form-label">Fax</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="fax1" type="text"
                                            class="form-control @error('fax1') is-invalid @enderror" name="fax1"
                                            value="{{ $kd05->fax1_old ?? '-' }}"
                                            style="{{ $kd05->fax1_old == null ? 'color:red' : '' }}" disabled />
                                        @error('fax1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id="" class="form-label">PO
                                            BOX</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="po_box1" type="text"
                                            class="form-control @error('po_box1') is-invalid @enderror" name="po_box1"
                                            value="{{ $kd05->po_box1_old ?? '-' }}"
                                            style="{{ $kd05->po_box1_old == null ? 'color:red' : '' }}" disabled />
                                        @error('po_box1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id=""
                                            class="form-label">Email</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ $kd05->email1_old ?? '-' }}"
                                            style="{{ $kd05->email1_old == null ? 'color:red' : '' }}" disabled />
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
                                            class="form-label">Phone</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="telp1" type="text"
                                            class="form-control @error('telp1') is-invalid @enderror" name="telp1"
                                            value="{{ $kd05->telp1_old ?? '-' }}"
                                            style="{{ $kd05->telp1_old == null ? 'color:red' : '' }}" disabled />
                                        @error('telp1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id=""
                                            class="form-label">Mobile</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="mobile1" type="text"
                                            class="form-control @error('mobile1') is-invalid @enderror" name="mobile1"
                                            value="{{ $kd05->mobile1_old ?? '-' }}"
                                            style="{{ $kd05->mobile1_old == null ? 'color:red' : '' }}" disabled />
                                        @error('mobile1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id=""
                                            class="form-label">Home</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="mobile1" type="text"
                                            class="form-control @error('mobile1') is-invalid @enderror" name="mobile1"
                                            value="{{ $kd05->home1_old ?? '-' }}"
                                            style="{{ $kd05->home1_old == null ? 'color:red' : '' }}" disabled />
                                        @error('mobile1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex flex-row my-2">
                                    <div class="col-sm-5">
                                        <label type="text" name="" id=""
                                            class="form-label text-center">No
                                            Cust</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label type="text" name="" id=""
                                            class="form-label text-center">Address Code</label>
                                    </div>
                                </div>
                                <div class="d-flex flex-row my-2">
                                    <div class="col-sm-5">
                                        <input id="no_cust1" type="text"
                                            class="form-control @error('no_cust1') is-invalid @enderror" name="no_cust1"
                                            value="{{ $kd05->no_cust1 }}"
                                            style="{{ $kd05->no_cust1 == null ? 'color:red' : '' }}" readonly />
                                        @error('no_cust1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <input id="kode_cust" type="text"
                                            class="form-control @error('kode_cust') is-invalid @enderror"
                                            name="kode_cust" value="{{ $kd05->addresscode1 ?? '-' }}"
                                            style="{{ $kd05->addresscode1 == null ? 'color:red' : '' }}" disabled />
                                        @error('kode_cust')
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
                                        <select class="selectpicker" aria-label="Default select example" name="title1"
                                            data-live-search="true">
                                            <option value="{{ $kd05->title1 }}" selected>{{ $kd05->title1 }}
                                            </option>
                                            @foreach ($titles as $title)
                                                @if ($kd05->title1 == $title->title)
                                                    <option data-tokens="{{ $title->title }}">
                                                        {{ $kd05->title1 }}
                                                    </option>
                                                @else
                                                    <option data-tokens="{{ $title->title }}">
                                                        {{ $title->title }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('title1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id=""
                                            class="form-label">Nama</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="nama11" type="text"
                                            class="form-control @error('nama11') is-invalid @enderror" name="nama11"
                                            value="{{ old('nama11', $kd05->nama11) }}" />
                                        @error('nama11')
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
                                        <input id="nama21" type="text"
                                            class="form-control @error('nama21') is-invalid @enderror" name="nama21"
                                            value="{{ old('nama21', $kd05->nama21) }}" />
                                        @error('nama21')
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
                                        <input id="street1" type="text"
                                            class="form-control @error('street1') is-invalid @enderror" name="street1"
                                            value="{{ old('street1', $kd05->street1) }}" />
                                        @error('street1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id="" class="form-label"
                                            style="font-size: 12px">Additional
                                            Address</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="addit1" type="text"
                                            class="form-control @error('addit1') is-invalid @enderror" name="addit1"
                                            value="{{ old('addit1', $kd05->addit1) }}" />
                                        @error('addit1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id=""
                                            class="form-label">Tax</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <select class="selectpicker" aria-label="Default select example" name="tax1"
                                            data-live-search="true">
                                            <option value="{{ $kd05->tax1 }}" selected>{{ $kd05->tax1 }}
                                                @foreach ($taxs as $tax)
                                                    @if ($kd05->tax1 == $tax->tax)
                                            <option data-tokens="{{ $tax->tax }}">
                                                {{ $kd05->tax1 }}
                                            </option>
                                        @else
                                            <option data-tokens="{{ $tax->tax }}">
                                                {{ $tax->tax }}
                                            </option>
                                            @endif
                                            @endforeach
                                        </select>
                                        @error('tax1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id="" class="form-label"
                                            style="font-size: 12px">Postal
                                            Code</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="postal_code1" type="number"
                                            class="form-control @error('postal_code1') is-invalid @enderror"
                                            name="postal_code1" value="{{ old('postal_code1', $kd05->postal_code1) }}" />
                                        @error('postal_code1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id="" class="form-label">Country</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <select class="selectpicker" aria-label="Default select example"
                                            name="kd5negara1" data-live-search="true" data-container="body">
                                            <option value="{{ $kd05->kd5negara1 }}" selected>
                                                {{ $kd05->kd5negara1 }}</option>
                                            @foreach ($negaras as $negara)
                                                @if ($kd05->kd5negara1 == $negara->nama_negara)
                                                    <option data-tokens="{{ $negara->nama_negara }}">
                                                        {{ $kd05->kd5negara1 }}
                                                    </option>
                                                @else
                                                    <option data-tokens="{{ $negara->nama_negara }}">
                                                        {{ $negara->nama_negara }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('negara1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id="" class="form-label"
                                            style="font-size: 13px">Freight</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <select class="selectpicker" aria-label="Default select example"
                                            name="kode_county1" data-live-search="true" data-container="body">
                                            <option value="{{ $kd05->kode_county1 }}" selected>
                                                {{ $kd05->kode_county1 }}</option>
                                            @foreach ($kodeCountries as $country)
                                                @if ($kd05->kode_county1 == $country->kode_county)
                                                    <option
                                                        data-tokens="{{ $country->kode_county }} - {{ $country->description }}">
                                                        {{ $country->kode_county }} -
                                                        {{ $country->description }}
                                                    </option>
                                                @else
                                                    <option
                                                        data-tokens="{{ $country->kode_county }} - {{ $country->description }}">
                                                        {{ $country->kode_county }} -
                                                        {{ $country->description }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('kode_county1')
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
                                    <div class="col-sm-6">
                                        <input id="kota1" type="text"
                                            class="form-control @error('kota1') is-invalid @enderror" name="kota1"
                                            value="{{ old('kota1', $kd05->kota1) }}" />
                                        @error('kota1')
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
                                    <div class="col-sm-6">
                                        <input id="npwp1" type="number"
                                            class="form-control @error('npwp1') is-invalid @enderror" name="npwp1"
                                            value="{{ old('npwp1', $kd05->npwp1) }}" />
                                        @error('npwp1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id=""
                                            class="form-label">Fax</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="fax1" type="text"
                                            class="form-control @error('fax1') is-invalid @enderror" name="fax1"
                                            value="{{ old('fax1', $kd05->fax1) }}" />
                                        @error('fax1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id="" class="form-label">PO
                                            BOX</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="po_box1" type="text"
                                            class="form-control @error('po_box1') is-invalid @enderror" name="po_box1"
                                            value="{{ old('po_box1', $kd05->po_box1) }}" />
                                        @error('po_box1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id=""
                                            class="form-label">Email</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="email1" type="text"
                                            class="form-control @error('email1') is-invalid @enderror" name="email1"
                                            value="{{ old('email1', $kd05->email1) }}" />
                                        @error('email1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id=""
                                            class="form-label">Phone</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="telp1" type="number"
                                            class="form-control @error('telp1') is-invalid @enderror" name="telp1"
                                            value="{{ old('telp1', $kd05->telp1) }}" />
                                        @error('telp1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id=""
                                            class="form-label">Mobile</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="mobile1" type="number"
                                            class="form-control @error('mobile1') is-invalid @enderror" name="mobile1"
                                            value="{{ old('mobile1', $kd05->mobile1) }}" />
                                        @error('mobile1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id=""
                                            class="form-label">Home</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="home1" type="text"
                                            class="form-control @error('home1') is-invalid @enderror" name="home1"
                                            value="{{ old('home1', $kd05->home1) }}" />
                                        @error('home1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id="" class="form-label">Upload
                                            NPWP</label>
                                    </div>
                                    <div class="col-sm-8">
                                            <img src="{{ URL::to($kd05->npwp_image) }}" alt=""
                                                style="height: 100px; weight: 100px;" class="rounded mx-auto d-block" id="img"></a>
                                        <input type="file" class="form-control @error('npwp_image') is-invalid @enderror"
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
                                        <label type="text" name="" id="" class="form-label">Upload
                                            KTP</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <img src="{{ URL::to($kd05->ktp_image) }}" alt=""
                                        style="height: 100px; weight: 100px;" class="rounded mx-auto d-block" id="img2"></a>
                                        <input type="file" class="form-control @error('ktp_image') is-invalid @enderror"
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
                <div class="d-flex justify-content-end my-2">
                    <div class="col-sm-1">
                        <a href="{{ url()->previous() }}" class="btn btn-danger">BACK</a>
                    </div>
                    <div class="col-sm-1">
                        <button type="submit" class="btn btn-primary">UPDATE</button>
                    </div>
                </div>


            </div>
        </div>


    </form>

    <script>
        $(document).ready(function() {
            'use-strict';
            $('#dt-init').DataTable();
            $('#dt-init2').DataTable();
            $('#dt-init4').DataTable();
        });
        var i = 0;

        $("#add").click(function() {
            ++i;
            $("#kd05_1").append($(".test").html());
            $('.selectpicker').selectpicker("refresh");
        });
        $("#remove").click(function() {
            let kd05 = $("#kd05_1 .card");
            kd05[kd05.length - 1].remove();
        });

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
