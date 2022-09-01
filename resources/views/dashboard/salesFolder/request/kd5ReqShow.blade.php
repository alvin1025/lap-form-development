@extends('dashboard.layout.lte')

@section('title', 'ADDITIONAL ADDRESSES KD05 REQUEST')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center border-bottom">
        <h1 class="h2">@yield('title')</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="card">
        <div class="d-flex content-justify-between">
            <div class="col-sm-6">
                <h5 class="card-header">KD05 Additional Address</h5>
            </div>
            <div class="col-sm-6">
                <h5 class="card-header">KD05 Additional Address Request</h5>
            </div>
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div class="col-sm-12">

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="d-flex flex-row my-2">
                                <div class="col-sm-5">
                                    <label type="text" name="" id="" class="form-label text-center">No
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
                                        value="{{ $kd05->no_cust1 }}" disabled />
                                    @error('no_cust1')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <input id="kode_cust" type="text"
                                        class="form-control @error('kode_cust') is-invalid @enderror" name="kode_cust"
                                        value="{{ $kd05->addresscode1 ?? '-' }}"disabled />
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
                                    <input type="text" class="form-control" value="{{ $kd05->title1 ?? '-' }}" disabled>
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
                                        value="{{ $kd05->nama11 ?? '-' }}" disabled />
                                    @error('nama')
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
                                    <input id="nama" type="text"
                                        class="form-control @error('nama') is-invalid @enderror" name="nama"
                                        value="{{ $kd05->nama21 ?? '-' }}" disabled />
                                    @error('nama')
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
                                    <input id="kode_cust" type="text"
                                        class="form-control @error('kode_cust') is-invalid @enderror" name="kode_cust"
                                        value="{{ $kd05->street1 ?? '-' }}" disabled />
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
                                        value="{{ $kd05->addit1 ?? '-' }}" disabled />
                                    @error('alamat')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-3">
                                    <label type="text" name="" id="" class="form-label">Tax</label>
                                </div>
                                <div class="col-sm-8">
                                    <input id="kode_cust" type="text"
                                        class="form-control @error('kode_cust') is-invalid @enderror" name="kode_cust"
                                        value="{{ $kd05->tax1 ?? '-' }}" disabled />
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
                                        name="postal_code1" value="{{ $kd05->postal_code1 ?? '-' }}" disabled />
                                    @error('postal_code1')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-3">
                                    <label type="text" name="" id=""
                                        class="form-label">Country</label>
                                </div>
                                <div class="col-sm-8">
                                    <input id="kode_cust" type="text"
                                        class="form-control @error('kode_cust') is-invalid @enderror" name="kode_cust"
                                        value="{{ $kd05->kd5negara1 ?? '-' }}" disabled />
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
                                        style="font-size: 15px">Freight</label>
                                </div>
                                <div class="col-sm-8">
                                    <input id="kode_cust" type="text"
                                        class="form-control @error('kode_cust') is-invalid @enderror" name="kode_cust"
                                        value="{{ $kd05->kode_county1 ?? '-' }}" disabled />
                                    @error('kode_country')
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
                                        value="{{ $kd05->kota1 ?? '-' }}" disabled />
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
                                    <input id="npwp1" type="text"
                                        class="form-control @error('npwp1') is-invalid @enderror" name="npwp1"
                                        value="{{ $kd05->npwp1 ?? '-' }}" disabled />
                                    @error('npwp1')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-3">
                                    <label type="text" name="" id="" class="form-label">Fax</label>
                                </div>
                                <div class="col-sm-8">
                                    <input id="fax1" type="text"
                                        class="form-control @error('fax1') is-invalid @enderror" name="fax1"
                                        value="{{ $kd05->fax1 ?? '-' }}" disabled />
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
                                        value="{{ $kd05->po_box1 ?? '-' }}" disabled />
                                    @error('po_box1')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-3">
                                    <label type="text" name="" id="" class="form-label">Email</label>
                                </div>
                                <div class="col-sm-8">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ $kd05->email1 ?? '-' }}" disabled />
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-3">
                                    <label type="text" name="" id="" class="form-label">Phone</label>
                                </div>
                                <div class="col-sm-8">
                                    <input id="telp1" type="text"
                                        class="form-control @error('telp1') is-invalid @enderror" name="telp1"
                                        value="{{ $kd05->telp1 ?? '-' }}" disabled />
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
                                        value="{{ $kd05->mobile1 ?? '-' }}" disabled />
                                    @error('mobile1')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-3">
                                    <label type="text" name="" id="" class="form-label">Home</label>
                                </div>
                                <div class="col-sm-8">
                                    <input id="mobile1" type="text"
                                        class="form-control @error('mobile1') is-invalid @enderror" name="mobile1"
                                        value="{{ $kd05->home1 ?? '-' }}" disabled />
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
                                        class="form-label">Status</label>
                                </div>
                                <div class="col-sm-8">
                                    @if ($kd05->status == 1)
                                        <input id="nama1" type="text"
                                            class="form-control @error('nama1') is-invalid @enderror" name="nama1"
                                            value="Active" disabled />
                                        @error('status')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    @elseif ($kd05->status == 2)
                                        <input id="nama1" type="text"
                                            class="form-control @error('nama1') is-invalid @enderror" name="nama1"
                                            value="Inactive" disabled />
                                        @error('status')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    @else
                                        <input id="nama1" type="text"
                                            class="form-control @error('nama1') is-invalid @enderror" name="nama1"
                                            value="" disabled />
                                        @error('status')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    @endif
                                </div>
                            </div>
                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-3">
                                    <label type="text" name="" id="" class="form-label">NPWP Image</label>
                                </div>
                                <div class="col-sm-8">
                                    <a href="{{ URL::to($kd05->npwp_image) }}" class="">
                                    <img src="{{ URL::to($kd05->npwp_image) }}" alt="" style="height: 100px; weight: 100px;"
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
                                    <a href="{{ URL::to($kd05->ktp_image) }}" class="">
                                    <img src="{{ URL::to($kd05->ktp_image) }}" alt="" style="height: 100px; weight: 100px;"
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
                            <form action="{{ route('kd05request.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="d-flex justify-content-start mx-3">
                                        <div class="row">
                                            <div class="d-flex justify-content-start">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="d-flex flex-row mt-2">
                                                            <div class="col-sm-5">
                                                                <label type="text" name="" id=""
                                                                    class="form-label text-center">No
                                                                    Cust</label>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <label type="text" name="" id=""
                                                                    class="form-label text-center">Addres
                                                                    Code</label>
                                                            </div>
                                                        </div>

                                                        <div class="d-flex flex-row my-2">
                                                            <div class="col-sm-5">
                                                                <input id="no_cust1" type="text"
                                                                    class="form-control @error('no_cust1') is-invalid @enderror"
                                                                    name="no_cust1" value="{{ $kd05->no_cust1 }}"
                                                                    readonly />
                                                                @error('no_cust1')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <input id="addresscode1" type="text"
                                                                    class="form-control @error('addresscode1') is-invalid @enderror"
                                                                    name="addresscode1" value="{{ $kd05->addresscode1 }}"
                                                                    readonly />
                                                                @error('addresscode1')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>

                                                        </div>
                                                        <div class="d-flex flex-row">
                                                            <div class="col-sm-4">
                                                                <label type="text" name="" id=""
                                                                    class="form-label">Title</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <select class="selectpicker"
                                                                    aria-label="Default select example" name="title1"
                                                                    data-live-search="true">
                                                                    {{-- <option value="{{ $kd05->title1 }}" selected>{{ $kd05->title1 }} --}}
                                                                    </option>
                                                                    <option value="">Choose Title</option>
                                                                    @foreach ($titles as $title)
                                                                        @if (old('title') == $title->title)
                                                                            <option data-tokens="{{ $title->title }}">
                                                                                {{ $title->title }}
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
                                                            <input type="hidden" name="title1_old"
                                                                value="{{ $kd05->title1 }}">
                                                            <input type="hidden" name="addresscode1_old"
                                                                value="{{ $kd05->addresscode1 }}">
                                                            <input type="hidden" name="status_old"
                                                                value="{{ $kd05->status }}">
                                                            <input type="hidden" name="npwp_image_old"
                                                                value="{{ $kd05->npwp_image }}">
                                                            <input type="hidden" name="ktp_image_old"
                                                                value="{{ $kd05->ktp_image }}">
                                                        </div>
                                                        
                                                        <div class="d-flex flex-row mt-2">
                                                            <div class="col-sm-4">
                                                                <label type="text" name="" id=""
                                                                    class="form-label">Nama
                                                                    1</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input id="nama11" type="text"
                                                                    class="form-control @error('nama11') is-invalid @enderror"
                                                                    name="nama11" />
                                                                @error('nama11')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                            <input type="hidden" name="nama11_old"
                                                                value="{{ $kd05->nama11 }}">
                                                        </div>
                                                        <div class="d-flex flex-row mt-2">
                                                            <div class="col-sm-4">
                                                                <label type="text" name="" id=""
                                                                    class="form-label">Nama
                                                                    2</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input id="nama21" type="text"
                                                                    class="form-control @error('nama21') is-invalid @enderror"
                                                                    name="nama21" />
                                                                @error('nama21')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                            <input type="hidden" name="nama21_old"
                                                                value="{{ $kd05->nama21 }}">
                                                        </div>
                                                        <div class="d-flex flex-row mt-2">
                                                            <div class="col-sm-4">
                                                                <label type="text" name="" id=""
                                                                    class="form-label">Street</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input id="street1" type="text"
                                                                    class="form-control @error('street1') is-invalid @enderror"
                                                                    name="street1" />
                                                                @error('street1')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                            <input type="hidden" name="street1_old"
                                                                value="{{ $kd05->street1 }}">
                                                        </div>
                                                        <div class="d-flex flex-row mt-2">
                                                            <div class="col-sm-4">
                                                                <label type="text" name="" id=""
                                                                    class="form-label" style="font-size: 13px">Additional
                                                                    Address</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input id="addit1" type="text"
                                                                    class="form-control @error('addit1') is-invalid @enderror"
                                                                    name="addit1" />
                                                                @error('addit1')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                            <input type="hidden" name="addit1_old"
                                                                value="{{ $kd05->addit1 }}">
                                                        </div>
                                                        <div class="d-flex flex-row mt-2">
                                                            <div class="col-sm-4">
                                                                <label type="text" name="" id=""
                                                                    class="form-label" style="font-size: 13px">Tax</label>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <select class="selectpicker"
                                                                    aria-label="Default select example" name="tax1"
                                                                    data-live-search="true">
                                                                    <option value="">Choose Tax</option>
                                                                    {{-- <option value="{{ $kd05->tax1 }}" selected>{{ $kd05->tax1 }} --}}
                                                                    @foreach ($taxs as $tax)
                                                                        @if (old('tax1') == $tax->tax)
                                                                            <option data-tokens="{{ $tax->tax }}">
                                                                                {{ $tax->tax }}
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
                                                            <input type="hidden" name="tax1_old"
                                                                value="{{ $kd05->tax1 }}">
                                                        </div>
                                                        <div class="d-flex flex-row mt-2">
                                                            <div class="col-sm-4">
                                                                <label type="text" name="" id=""
                                                                    class="form-label" style="font-size: 13px">Postal
                                                                    Code</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input id="postal_code1" type="number"
                                                                    class="form-control @error('postal_code1') is-invalid @enderror"
                                                                    name="postal_code1" />
                                                                @error('postal_code1')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                            <input type="hidden" name="postal_code1_old"
                                                                value="{{ $kd05->postal_code1 }}">
                                                        </div>
                                                        <div class="d-flex flex-row mt-2">
                                                            <div class="col-sm-4">
                                                                <label type="text" name="" id=""
                                                                    class="form-label"
                                                                    style="font-size: 13px">Country</label>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <select class="selectpicker"
                                                                    aria-label="Default select example" name="kd5negara1"
                                                                    data-live-search="true" data-container="body">
                                                                    <option value="">Choose Country</option>
                                                                    @foreach ($negaras as $negara)
                                                                        @if (old('kd5negara1') == $negara->nama_negara)
                                                                            <option
                                                                                data-tokens="{{ $negara->nama_negara }}">
                                                                                {{ $negara->nama_negara }}
                                                                            </option>
                                                                        @else
                                                                            <option
                                                                                data-tokens="{{ $negara->nama_negara }}">
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
                                                            <input type="hidden" name="kd5negara1_old"
                                                                value="{{ $kd05->kd5negara1 }}">
                                                        </div>
                                                        <div class="d-flex flex-row mt-2">
                                                            <div class="col-sm-4">
                                                                <label type="text" name="" id=""
                                                                    class="form-label"
                                                                    style="font-size: 13px">Freight</label>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <select class="selectpicker"
                                                                    aria-label="Default select example"
                                                                    name="kode_county1" data-live-search="true"
                                                                    data-container="body">
                                                                    <option value="">Choose Freight</option>
                                                                    @foreach ($kodeCountries as $country)
                                                                        @if (old('kode_county1') == $country->kode_county)
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
                                                            <input type="hidden" name="kode_county1_old"
                                                                value="{{ $kd05->kode_county1 }}">
                                                        </div>
                                                        <div class="d-flex flex-row mt-2">
                                                            <div class="col-sm-4">
                                                                <label type="text" name="" id=""
                                                                    class="form-label">Kota</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input id="kota1" type="text"
                                                                    class="form-control @error('kota1') is-invalid @enderror"
                                                                    name="kota1" />
                                                                @error('kota1')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                            <input type="hidden" name="kota1_old"
                                                                value="{{ $kd05->kota1 }}">
                                                        </div>
                                                        <div class="d-flex flex-row mt-2">
                                                            <div class="col-sm-4">
                                                                <label type="text" name="" id=""
                                                                    class="form-label">NPWP</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input id="npwp1" type="number"
                                                                    class="form-control @error('npwp1') is-invalid @enderror"
                                                                    name="npwp1" />
                                                                @error('npwp1')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                            <input type="hidden" name="npwp1_old"
                                                                value="{{ $kd05->npwp1 }}">
                                                        </div>
                                                        <div class="d-flex flex-row mt-2">
                                                            <div class="col-sm-4">
                                                                <label type="text" name="" id=""
                                                                    class="form-label text-center">Fax</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input id="fax1" type="text"
                                                                    class="form-control @error('fax1') is-invalid @enderror"
                                                                    name="fax1" />
                                                                @error('fax1')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                            <input type="hidden" name="fax1_old"
                                                                value="{{ $kd05->fax1 }}">
                                                        </div>
                                                        <div class="d-flex flex-row mt-2">
                                                            <div class="col-sm-4">
                                                                <label type="text" name="" id=""
                                                                    class="form-label text-center">PO
                                                                    Box</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input id="po_box1" type="text"
                                                                    class="form-control @error('po_box1') is-invalid @enderror"
                                                                    name="po_box1" />
                                                                @error('po_box1')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                            <input type="hidden" name="po_box1_old"
                                                                value="{{ $kd05->po_box1 }}">
                                                        </div>
                                                        <div class="d-flex flex-row mt-2">
                                                            <div class="col-sm-4">
                                                                <label type="text" name="" id=""
                                                                    class="form-label text-center">Email</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input id="email1" type="text"
                                                                    class="form-control @error('email1') is-invalid @enderror"
                                                                    name="email1" />
                                                                @error('email1')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                            <input type="hidden" name="email1_old"
                                                                value="{{ $kd05->email1 }}">
                                                        </div>
                                                        <div class="d-flex flex-row mt-2">
                                                            <div class="col-sm-4">
                                                                <label type="text" name="" id=""
                                                                    class="form-label text-center">Phone</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input id="telp1" type="number"
                                                                    class="form-control @error('telp1') is-invalid @enderror"
                                                                    name="telp1" />
                                                                @error('telp1')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                            <input type="hidden" name="telp1_old"
                                                                value="{{ $kd05->telp1 }}">
                                                        </div>
                                                        <div class="d-flex flex-row mt-2">
                                                            <div class="col-sm-4">
                                                                <label type="text" name="" id=""
                                                                    class="form-label text-center">Mobile</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input id="mobile1" type="number"
                                                                    class="form-control @error('mobile1') is-invalid @enderror"
                                                                    name="mobile1" />
                                                                @error('mobile1')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                            <input type="hidden" name="mobile1_old"
                                                                value="{{ $kd05->mobile1 }}">
                                                        </div>
                                                        <div class="d-flex flex-row mt-2">
                                                            <div class="col-sm-4">
                                                                <label type="text" name="" id=""
                                                                    class="form-label text-center">Home</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input id="home1" type="text"
                                                                    class="form-control @error('home1') is-invalid @enderror"
                                                                    name="home1" />
                                                                @error('home1')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                            <input type="hidden" name="home1_old"
                                                                value="{{ $kd05->home1 }}">
                                                        </div>
                                                        <div class="d-flex flex-row mt-2">
                                                            <div class="col-sm-4">
                                                                <label type="text" name="" id=""
                                                                    class="form-label text-center">Status</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <select class="selectpicker"
                                                                    aria-label="Default select example" name="status"
                                                                    data-live-search="true">
                                                                    <option value="">Choose Status</option>
                                                                    <option value="1">Active
                                                                    </option>
                                                                    <option value="2">Inactive
                                                                    </option>
                                                                </select>
                                                                @error('status')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                            @if (auth()->user()->division == 'FABRIC SALES' && auth()->user()->jabatan == 'Sub Division Manager')
                                                                <input type="hidden" name="status_form" value="">
                                                                <input type="hidden" name="created_by"
                                                                    value="{{ auth()->user()->employee_name }} ">
                                                            @endif
                                                        </div>
                                                        <div class="d-flex flex-row mt-2">
                                                            <div class="col-sm-4">
                                                                <label type="text" name="" id="" class="form-label">Upload NPWP</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <img class="img-preview img-fluid mb-3" id="img">
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
                                                            <div class="col-sm-4">
                                                                <label type="text" name="" id="" class="form-label">Upload KTP</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <img class="img-preview img-fluid mb-3" id="img2">
                                                                <input type="file" class="form-control @error('ktp_image') is-invalid @enderror"
                                                                name="ktp_image" id="ktp_image" onchange="previewImage2(event)" />
                                                                @error('ktp_image')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-row mt-2">
                                                            <div class="col-sm-3">
                                                                <a href="{{ url()->previous() }}"
                                                                    class="btn btn-danger">BACK</a>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <button type="submit"
                                                                    class="btn btn-primary">SAVE</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>





                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
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
