@extends('dashboard.layout.lte')

@section('title', 'Customer Data KD03 Request')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center border-bottom">
        <h1 class="h2">@yield('title')</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif
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
                                    value="{{ $kd3->no_cust }}" disabled />
                                @error('no_cust')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <input id="short_name" type="text"
                                    class="form-control @error('short_name') is-invalid @enderror" name="short_name"
                                    value="{{ $kd3->short_name }}" disabled />
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
                                    value="{{ $kd3->title_old }}" disabled />

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
                                    value="{{ $kd3->class_old }}" disabled />

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
                                @if ($kd3->status_old == 1)
                                    <input id="nama1" type="text"
                                        class="form-control @error('nama1') is-invalid @enderror" name="nama1"
                                        value="Active" disabled />
                                    @error('status')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                @elseif ($kd3->status_old == 2)
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
                                <label type="text" name="" id="" class="form-label">Nama 1</label>
                            </div>
                            <div class="col-sm-8">
                                <input id="nama1" type="text"
                                    class="form-control @error('nama1') is-invalid @enderror" name="nama1"
                                    value="{{ $kd3->nama1_old }}" disabled />
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
                                    value="{{ $kd3->nama2_old }}" disabled />
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
                                    value="{{ $kd3->street_old }}" disabled />
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
                                    value="{{ $kd3->addit_old }}" disabled />
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
                                    value="{{ $kd3->tax_old }}" disabled />
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
                                    value="{{ $kd3->postal_code_old }}" disabled />
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
                                    value="{{ $kd3->fax_old }}" disabled />
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
                                    value="{{ $kd3->po_box_old }}" disabled />
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
                                    value="{{ $kd3->email_old }}" disabled />
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
                                    value="{{ $kd3->telp_old }}" disabled />
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
                                    value="{{ $kd3->mobile_old }}" disabled />
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
                                    value="{{ $kd3->home_old }}" disabled />
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
                                    value="{{ $kd3->negara_old }}" disabled />

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
                                <input id="home" type="text"
                                    class="form-control @error('home') is-invalid @enderror" name="home"
                                    value="{{ $kd3->kode_county_old }}" disabled />
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
                                    value="{{ $kd3->kota_old }}" disabled />
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
                                    value="{{ $kd3->npwp_old }}" disabled />
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
                                <a href="{{ URL::to($kd3->npwp_image_old) }}" class="">
                                <img src="{{ URL::to($kd3->npwp_image_old) }}" alt="" style="height: 100px; weight: 100px;"
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
                                <a href="{{ URL::to($kd3->ktp_image_old) }}" class="">
                                <img src="{{ URL::to($kd3->ktp_image_old) }}" alt="" style="height: 100px; weight: 100px;"
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
                                    value="{{ $kd3->no_cust }}" disabled />
                                @error('no_cust')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <input id="short_name" type="text"
                                    class="form-control @error('short_name') is-invalid @enderror" name="short_name"
                                    value="{{ $kd3->short_name }}" disabled />
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
                                    value="{{ $kd3->title }}"
                                    style="{{ $kd3->title != $kd3->title_old ? 'color:red' : '' }}" disabled />

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
                                    value="{{ $kd3->class }}"
                                    style="{{ $kd3->class != $kd3->class_old ? 'color:red' : '' }}" disabled />

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
                                @if ($kd3->status == 1)
                                    <input id="nama1" type="text"
                                        class="form-control @error('nama1') is-invalid @enderror" name="nama1"
                                        value="Active" disabled />
                                    @error('status')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                @elseif ($kd3->status == 2)
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
                                <label type="text" name="" id="" class="form-label">Nama 1</label>
                            </div>
                            <div class="col-sm-8">
                                <input id="nama1" type="text"
                                    class="form-control @error('nama1') is-invalid @enderror" name="nama1"
                                    value="{{ $kd3->nama1 }}"
                                    style="{{ $kd3->nama1 != $kd3->nama1_old ? 'color:red' : '' }}" disabled />
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
                                    value="{{ $kd3->nama2 }}"
                                    style="{{ $kd3->nama2 != $kd3->nama2_old ? 'color:red' : '' }}" disabled />
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
                                    value="{{ $kd3->street }}"
                                    style="{{ $kd3->street != $kd3->street_old ? 'color:red' : '' }}" disabled />
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
                                    value="{{ $kd3->addit }}"
                                    style="{{ $kd3->addit != $kd3->addit_old ? 'color:red' : '' }}" disabled />
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
                                    value="{{ $kd3->tax }}"
                                    style="{{ $kd3->tax != $kd3->tax_old ? 'color:red' : '' }}" disabled />
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
                                    value="{{ $kd3->postal_code }}"
                                    style="{{ $kd3->postal_code != $kd3->postal_code_old ? 'color:red' : '' }}"
                                    disabled />
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
                                    value="{{ $kd3->fax }}"
                                    style="{{ $kd3->fax != $kd3->fax_old ? 'color:red' : '' }}" disabled />
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
                                    value="{{ $kd3->po_box }}"
                                    style="{{ $kd3->po_box != $kd3->po_box_old ? 'color:red' : '' }}" disabled />
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
                                    value="{{ $kd3->email }}"
                                    style="{{ $kd3->email != $kd3->email_old ? 'color:red' : '' }}" disabled />
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
                                    value="{{ $kd3->telp }}"
                                    style="{{ $kd3->telp != $kd3->telp_old ? 'color:red' : '' }}" disabled />
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
                                    value="{{ $kd3->mobile }}"
                                    style="{{ $kd3->mobile != $kd3->mobile_old ? 'color:red' : '' }}" disabled />
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
                                    value="{{ $kd3->home }}"
                                    style="{{ $kd3->home != $kd3->home_old ? 'color:red' : '' }}" disabled />
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
                                    value="{{ $kd3->negara }}"
                                    style="{{ $kd3->negara != $kd3->negara_old ? 'color:red' : '' }}" disabled />

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
                                    value="{{ $kd3->kode_county }}"
                                    style="{{ $kd3->kode_county != $kd3->kode_county_old ? 'color:red' : '' }}"
                                    disabled />
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
                                    value="{{ $kd3->kota }}"
                                    style="{{ $kd3->kota != $kd3->kota_old ? 'color:red' : '' }}" disabled />
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
                                    value="{{ $kd3->npwp }}"
                                    style="{{ $kd3->npwp != $kd3->npwp_old ? 'color:red' : '' }}" disabled />
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
                                <a href="{{ URL::to($kd3->npwp_image) }}" class="">
                                <img src="{{ URL::to($kd3->npwp_image) }}" alt="" style="height: 100px; weight: 100px;"
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
                                <a href="{{ URL::to($kd3->ktp_image) }}" class="">
                                <img src="{{ URL::to($kd3->ktp_image) }}" alt="" style="height: 100px; weight: 100px;"
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
    </div>
    <form action="{{ route('updateReqKd3', ['id' => $kd3->id]) }}" method="post">
        @csrf
        @method('put')

        @if (auth()->user()->division == 'FABRIC SALES' &&
            auth()->user()->jabatan == 'Sub Division Manager' &&
            $kd3->status_form != 'rejected' &&
            (auth()->user()->division == 'FABRIC SALES' &&
                auth()->user()->jabatan == 'Sub Division Manager' &&
                $kd3->status_form == ''))
            <input type="hidden" name="status_form" value="created">
            <input type="hidden" name="created_by" value="{{ $kd3->employee_name }}">
        @elseif ($kd3->status_form == 'rejected')
            <input type="hidden" name="status_form" value="created">
            <input type="hidden" name="created_by" value="{{ auth()->user()->employee_name }}">
            <div class="d-flex flex-row my-3">
                <div class="col-sm-2">
                    <label type="text" name="" id="" class="form-label text-center">Reject
                        Reason</label>
                </div>
                <div class="col-sm-5">
                    <textarea class="form-control" id="textAreaExample1" rows="4" name="reject_reason" readonly>{!! $kd3->reject_reason != '' ? $kd3->reject_reason : '' !!}</textarea>
                    @error('reject_reason')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        @elseif (auth()->user()->division == 'FABRIC SALES' &&
            auth()->user()->position_job_name == 'DM FABRIC SALES' &&
            $kd3->status_form == 'created')
            <div class="col-sm-8">
                <div class="d-flex flex-row mt-2">
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label">Status Form</label>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_form" id="submitted"
                                    value="aprv 1" onclick="javascript:myFunction();" checked>
                                <input type="hidden" class="form-check-input" name="created_by"
                                    value="{{ $kd3->created_by }}">
                                <label class="form-check-label" for="status_form1" id="submitted">
                                    Approve
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_form" id="rejected"
                                    value="rejected" onclick="javascript:myFunction();">
                                <input type="hidden" class="form-check-input" name="created_by"
                                    value="{{ $kd3->created_by }}">
                                <label class="form-check-label" for="status_form2" id="rejected">
                                    Rejected
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sub" id="sub" style="display: none">
                <div class="d-flex flex-row my-3 ">
                    <div class="col-sm-2">
                        <label type="text" name="" id="" class="form-label text-center">Reject
                            Reason</label>
                    </div>
                    <div class="col-sm-5">
                        <textarea class="form-control" id="textAreaExample1" rows="4" name="reject_reason"></textarea>
                        @error('reject_reason')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        @elseif (auth()->user()->position_job_name == 'GM SALES FABRIC & FACTORY MANAGER LPA' &&
            $kd3->status_form == 'aprv 1')
            <div class="col-sm-8">
                <div class="d-flex flex-row mt-2">
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label">Status Form</label>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_form" id="aprv 1"
                                    value="aprv 2" onclick="javascript:myFunction2();" checked>
                                <input type="hidden" class="form-check-input" name="created_by"
                                    value="{{ $kd3->created_by }}">
                                <label class="form-check-label" for="status_form1" id="acknowledged">
                                    Approve
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_form" id="rejected"
                                    value="rejected" onclick="javascript:myFunction2();">
                                <input type="hidden" class="form-check-input" name="created_by"
                                    value="{{ $kd3->created_by }}">
                                <label class="form-check-label" for="status_form2" id="rejected">
                                    Rejected
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sub" id="sub" style="display: none">
                <div class="d-flex flex-row my-3 ">
                    <div class="col-sm-2">
                        <label type="text" name="" id="" class="form-label text-center">Reject
                            Reason</label>
                    </div>
                    <div class="col-sm-5">
                        <textarea class="form-control" id="textAreaExample1" rows="4" name="reject_reason"></textarea>
                        @error('reject_reason')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        @elseif (auth()->user()->division == 'INTERNAL AUDIT' && $kd3->status_form == 'aprv 2')
            <div class="col-sm-8">
                <div class="d-flex flex-row mt-2">
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label">Status Form</label>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_form" id="inputted"
                                    value="inputted" onclick="javascript:myFunction3();" checked>
                                <input type="hidden" name="created_by" value="{{ $kd3->created_by }}">
                                <label class="form-check-label" for="status_form1">
                                    Input To INTEX
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_form" id="rejected"
                                    value="rejected" onclick="javascript:myFunction3();">
                                <input type="hidden" name="created_by" value="{{ $kd3->created_by }}">
                                <label class="form-check-label" for="status_form2">
                                    Rejected
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sub" id="sub" style="display: none">
                <div class="d-flex flex-row my-3">
                    <div class="col-sm-2">
                        <label type="text" name="" id="" class="form-label text-center">Reject
                            Reason</label>
                    </div>
                    <div class="col-sm-5">
                        <textarea class="form-control" id="textAreaExample1" rows="4" name="reject_reason"></textarea>
                        @error('reject_reason')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        @elseif (auth()->user()->division == 'FABRIC SALES' &&
            auth()->user()->position_job_name == 'FABRIC SALES EXECUTIVE' &&
            $kd3->status_form == 'inputted')
            <input type="hidden" name="status_form" value="finished">
        @endif


        <div class="row justify-content-center mt-3">
            <div class="d-flex justify-content-between">
                {{-- SDM --}}
                <div class="col-sm-2 mx-2">
                    {{-- Card Pembuat Form --}}
                    <div class="card text-center w-100">
                        <div class="card-header">
                            REQUESTED BY
                        </div>
                        <div class="card-body">
                            <label for="form-control text-center">{{ $kd3->created_by }}</label>
                        </div>
                        <div class="card-footer text-muted" style="font-size: 13px;">
                            SDM Sales
                        </div>
                    </div>
                </div>

                {{-- DM --}}
                <div class="col-sm-2 mx-2">
                    {{-- Card Pembuat Form --}}
                    <div class="card text-center w-100">
                        <div class="card-header">
                            APPROVE 1
                        </div>
                        <div class="card-body">
                            <label for="form-control text-center">{{ $kd3->aprv1_by }}</label>
                        </div>
                        <div class="card-footer text-muted" style="font-size: 13px;">
                            DM Sales
                        </div>
                    </div>
                </div>

                {{-- GM --}}
                <div class="col-sm-2 mx-2">
                    {{-- Card Pembuat Form --}}
                    <div class="card text-center w-100">
                        <div class="card-header">
                            APPROVE 2
                        </div>
                        <div class="card-body">
                            <label for="form-control text-center">{{ $kd3->aprv2_by }}</label>
                        </div>
                        <div class="card-footer text-muted" style="font-size: 13px;">
                            GM Sales
                        </div>
                    </div>
                </div>

                {{-- Document Control --}}
                <div class="col-sm-2 mx-2">
                    {{-- Card Pembuat Form --}}
                    <div class="card text-center w-100">
                        <div class="card-header">
                            Inputted
                        </div>
                        <div class="card-body">
                            <label for="form-control text-center">{{ $kd3->inputted_by }}</label>
                        </div>
                        <div class="card-footer text-muted" style="font-size: 13px;">
                            Document Control
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            @if (auth()->user()->division == 'FABRIC SALES' &&
                auth()->user()->jabatan == 'Sub Division Manager' &&
                $kd3->status_form != 'rejected' &&
                (auth()->user()->division == 'FABRIC SALES' &&
                    auth()->user()->jabatan == 'Sub Division Manager' &&
                    $kd3->status_form != '') &&
                (auth()->user()->division == 'FABRIC SALES' &&
                    auth()->user()->jabatan == 'Sub Division Manager' &&
                    $kd3->status_form != 'inputted'))
                <div class="d-flex justify-content-end">
                    <div class="col-sm-1 mr-5">
                        <button type="submit" class="btn btn-primary disabled" hidden>SUBMIT</button>
                    </div>
                    <div class="col-sm-1 ml-5">
                        <a href="{{ url()->previous() }}" class="btn btn-danger">BACK</a>
                    </div>
                </div>
            @else
                <div class="d-flex justify-content-end">
                    <div class="col-sm-1 mr-5">
                        <button type="submit" class="btn btn-primary">SUBMIT</button>
                    </div>
                    <div class="col-sm-1 ml-5">
                        <a href="{{ url()->previous() }}" class="btn btn-danger">BACK</a>
                    </div>
                </div>
            @endif
        </div>

    </form>


    <script>
        function myFunction() {
            var yes = document.getElementById("submitted");
            var sub = document.getElementById("sub");
            if (yes.checked === true) {
                sub.style.display = "none";
            } else {
                sub.style.display = "block";
            }
        }

        function myFunction2() {
            var yes = document.getElementById("aprv 1");
            var sub = document.getElementById("sub");
            if (yes.checked === true) {
                sub.style.display = "none";
            } else {
                sub.style.display = "block";
            }
        }

        function myFunction3() {
            var yes = document.getElementById("inputted");
            var sub = document.getElementById("sub");
            if (yes.checked === true) {
                sub.style.display = "none";
            } else {
                sub.style.display = "block";
            }
        }
    </script>


@endsection
