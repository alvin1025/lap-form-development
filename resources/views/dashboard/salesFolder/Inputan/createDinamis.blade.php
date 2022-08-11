@extends('dashboard.layout.lte')

@section('title', 'Permintaan Input/Ubah Data Customer')

@section('content')

    <h4 class="text-center">@yield('title')</h4>

    <form action="{{ route('inputan.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="d-flex justify-content-start">
                <div class="col-sm-7">
                    <div class="row">
                        <label class="col-sm-3 col-form-label my-2"></label>
                        <div class="col-sm-7 my-2">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="mb-3 row">
                        <label class="col-sm-5 col-form-label my-2"></label>
                        <div class="col-sm-7 my-2">
                            <input id="tanggal" type="date" class="form-control @error('tanggal') is-invalid @enderror"
                                name="tanggal" />
                            @error('tanggal')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Nav --}}
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="kd03-tab" data-bs-toggle="tab" data-bs-target="#kd03" type="button"
                    role="tab" aria-controls="kd03" aria-selected="true">KD03</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="kd04-tab" data-bs-toggle="tab" data-bs-target="#kd04" type="button"
                    role="tab" aria-controls="kd04" aria-selected="false">KD04</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="kd05-tab" data-bs-toggle="tab" data-bs-target="#kd05" type="button"
                    role="tab" aria-controls="kd05" aria-selected="false">KD05</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="kd06-tab" data-bs-toggle="tab" data-bs-target="#kd06" type="button"
                    role="tab" aria-controls="kd06" aria-selected="false">KD06</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="kd11-tab" data-bs-toggle="tab" data-bs-target="#kd11" type="button"
                    role="tab" aria-controls="kd11" aria-selected="false">KD11</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="kd14-tab" data-bs-toggle="tab" data-bs-target="#kd14" type="button"
                    role="tab" aria-controls="kd14" aria-selected="false">KD14</button>
            </li>

            {{-- <li class="nav-item" role="presentation">
                <button class="nav-link" id="additional-tab" data-bs-toggle="tab" data-bs-target="#additional"
                    type="button" role="tab" aria-controls="additional" aria-selected="true">ADDITIONAL</button>
            </li> --}}
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="kd03" role="tabpanel" aria-labelledby="kd03-tab">
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
                                        <select class="selectpicker" aria-label="Default select example" name="title"
                                            data-live-search="true">
                                            <option selected value="">Open this select menu</option>
                                            @foreach ($titles as $title)
                                                @if (old('title') == $title->title)
                                                    <option data-tokens="{{ $title->title }}" selected>
                                                        {{ $title->title }}
                                                    </option>
                                                @else
                                                    <option data-tokens="{{ $title->title }}">{{ $title->title }}
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
                                        <label type="text" name="" id="" class="form-label">Class</label>
                                    </div>
                                    <div class="col-sm-7">
                                        <select class="selectpicker" aria-label="Default select example" name="class"
                                            data-live-search="true">
                                            <option selected value="">Open this select menu</option>
                                            @foreach ($classes as $class)
                                                @if (old('class') == $class->class)
                                                    <option data-tokens="{{ $class->class }}" selected>
                                                        {{ $class->class }}
                                                    </option>
                                                @else
                                                    <option data-tokens="{{ $class->class }}">{{ $class->class }}
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
                                        <label type="text" name="" id="" class="form-label">Status</label>
                                    </div>
                                    <div class="col-sm-7">
                                        <select class="selectpicker" aria-label="Default select example" name="status"
                                            data-live-search="true">
                                            <option selected value="">Open this select menu</option>
                                            <option value="1">Active</option>
                                            <option value="2">Inactive</option>
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
                                        <label type="text" name="" id="" class="form-label">Nama 1</label>
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
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id="" class="form-label">Nama 2</label>
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
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id="" class="form-label">Street</label>
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
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id="" class="form-label"
                                            style="font-size: 13px">Additional Address</label>
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
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id="" class="form-label"
                                            style="font-size: 13px">Tax</label>
                                    </div>

                                    <div class="col-sm-6">
                                        <select class="selectpicker" aria-label="Default select example" name="tax"
                                            data-live-search="true">
                                            <option selected value="">Open this select menu</option>
                                            @foreach ($taxs as $tax)
                                                @if (old('tax') == $tax->tax)
                                                    <option data-tokens="{{ $tax->tax }}" selected>
                                                        {{ $tax->tax }}
                                                    </option>
                                                @else
                                                    <option data-tokens="{{ $tax->tax }}">{{ $tax->tax }}
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
                                            style="font-size: 13px">Postal Code</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="postal_code" type="text"
                                            class="form-control @error('postal_code') is-invalid @enderror"
                                            name="postal_code" />
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
                                        <label type="text" name="" id="" class="form-label text-center">No Cust</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label type="text" name="" id="" class="form-label text-center">Short Name</label>
                                    </div>
                                </div>

                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-5">
                                        <input id="no_cust" type="text"
                                            class="form-control @error('no_cust') is-invalid @enderror" name="no_cust"
                                            value="{{ $no }}" readonly />
                                        @error('no_cust')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <input id="short_name" type="text"
                                            class="form-control @error('short_name') is-invalid @enderror"
                                            name="short_name" />
                                        @error('short_name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-5">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id="" class="form-label text-center">Fax</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="fax" type="text" class="form-control @error('fax') is-invalid @enderror"
                                            name="fax" />
                                        @error('fax')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id="" class="form-label text-center">PO Box</label>
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
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id="" class="form-label text-center">Email</label>
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
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id="" class="form-label text-center">Phone</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="telp" type="text"
                                            class="form-control @error('telp') is-invalid @enderror" name="telp" />
                                        @error('telp')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id="" class="form-label text-center">Mobile</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="mobile" type="text"
                                            class="form-control @error('mobile') is-invalid @enderror" name="mobile" />
                                        @error('mobile')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id="" class="form-label text-center">Home</label>
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
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-2 mr-3">
                                        <label type="text" name="" id="" class="form-label"
                                            style="font-size: 13px">Country Code</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <select class="selectpicker" aria-label="Default select example" name="negara"
                                            data-live-search="true">
                                            <option selected value="">Open this select menu</option>
                                            @foreach ($negaras as $negara)
                                                @if (old('negara') == $negara->nama_negara)
                                                    <option data-tokens="{{ $negara->nama_negara }}" selected>
                                                        {{ $negara->nama_negara }}
                                                    </option>
                                                @else
                                                    <option data-tokens="{{ $negara->nama_negara }}">
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
                            </div>
                            <div class="col-sm-8">
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-2 mr-3">
                                        <label type="text" name="" id="" class="form-label"
                                            style="font-size: 15px">Kode
                                            County</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <select class="selectpicker" aria-label="Default select example"
                                            name="kode_county" data-live-search="true">
                                            <option selected value="">Open this select menu</option>
                                            @foreach ($kodeCountries as $county)
                                                @if (old('kode_county') == $county->kode_county)
                                                    <option data-tokens="{{ $county->kode_county }}" selected>
                                                        {{ $county->kode_county }}
                                                    </option>
                                                @else
                                                    <option data-tokens="{{ $county->kode_county }}">
                                                        {{ $county->kode_county }}
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
                            </div>
                            <div class="col-sm-8">
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-2 mr-3">
                                        <label type="text" name="" id="" class="form-label">Kota</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input id="kota" type="text"
                                            class="form-control @error('kota') is-invalid @enderror" name="kota" />
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
                                            class="form-control @error('npwp') is-invalid @enderror" name="npwp" />
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


            <div class="tab-pane fade" id="kd06" role="tabpanel" aria-labelledby="kd06-tab"> {{-- KD06 --}}
                <h6 class="text-left mt-2">KD06 Conditions</h6>
                <hr>
                <div class="col-sm-8">
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-2 mr-3">
                            {{-- <label type="text" name="" id="" class="form-label">Cust No</label> --}}
                        </div>
                        <div class="col-sm-3">
                            <input id="cust_no" type="hidden" class="form-control @error('cust_no') is-invalid @enderror"
                                name="cust_no" />
                            @error('cust_no')
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
                            <label type="text" name="" id="" class="form-label">SD</label>
                        </div>
                        <div class="col-sm-6">
                            <select class="selectpicker" aria-label="Default select example" name="sd"
                                data-live-search="true">
                                <option selected value="">Open this select menu</option>
                                @foreach ($sds as $sd)
                                    @if (old('sd') == $sd->sd)
                                        <option data-tokens="{{ $sd->sd }}" selected>{{ $sd->sd }}
                                        </option>
                                    @else
                                        <option data-tokens="{{ $sd->sd }}">{{ $sd->sd }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('sd')
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
                            <label type="text" name="" id="" class="form-label">Pay Term</label>
                        </div>
                        <div class="col-sm-6">
                            <select class="selectpicker" aria-label="Default select example" name="payterm"
                                data-live-search="true">
                                <option selected value="">Open this select menu</option>
                                @foreach ($pays as $pay)
                                    @if (old('payterm') == $pay->pay_term)
                                        <option data-tokens="{{ $pay->pay_term }}" selected>{{ $pay->pay_term }}
                                        </option>
                                    @else
                                        <option data-tokens="{{ $pay->pay_term }}">{{ $pay->pay_term }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('payterm')
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
                            <label type="text" name="" id="" class="form-label">Tax</label>
                        </div>
                        <div class="col-sm-6">
                            <select class="selectpicker" aria-label="Default select example" name="tax"
                                data-live-search="true">
                                <option selected value="">Open this select menu</option>
                                @foreach ($taxs as $tax)
                                    @if (old('tax') == $tax->tax)
                                        <option data-tokens="{{ $tax->tax }}" selected>{{ $tax->tax }}
                                        </option>
                                    @else
                                        <option data-tokens="{{ $tax->tax }}">{{ $tax->tax }}</option>
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
                </div>
                <div class="col-sm-8">
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-2 mr-3">
                            <label type="text" name="" id="" class="form-label">Assigment</label>
                        </div>
                        <div class="col-sm-6">
                            <select class="selectpicker" aria-label="Default select example" name="assigment"
                                data-live-search="true">
                                <option selected value="">Open this select menu</option>
                                @foreach ($assignments as $assignment)
                                    @if (old('assigment') == $tax->tax)
                                        <option data-tokens="{{ $assignment->assignment }}" selected>
                                            {{ $assignment->assignment }}
                                        </option>
                                    @else
                                        <option data-tokens="{{ $assignment->assignment }}">
                                            {{ $assignment->assignment }}
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                            @error('assigment')
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
                            <label type="text" name="" id="" class="form-label">Del.Con</label>
                        </div>
                        <div class="col-sm-6">
                            <select class="selectpicker" aria-label="Default select example" name="del_con"
                                data-live-search="true">
                                <option selected value="">Open this select menu</option>
                                @foreach ($delCons as $delcon)
                                    @if (old('del_con') == $delcon->del_con)
                                        <option data-tokens="{{ $delcon->del_con }}" selected>{{ $delcon->del_con }}
                                        </option>
                                    @else
                                        <option data-tokens="{{ $delcon->del_con }}">{{ $delcon->del_con }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('del_con')
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
                            <label type="text" name="" id="" class="form-label">Kurs</label>
                        </div>
                        <div class="col-sm-6">
                            <select class="selectpicker" aria-label="Default select example" name="kurs"
                                data-live-search="true">
                                <option selected value="">Open this select menu</option>
                                @foreach ($kurses as $kurs)
                                    @if (old('kurs') == $kurs->kurs)
                                        <option data-tokens="{{ $kurs->kurs }}" selected>{{ $kurs->kurs }}
                                        </option>
                                    @else
                                        <option data-tokens="{{ $kurs->kurs }}">{{ $kurs->kurs }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('kurs')
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
                            <label type="text" name="" id="" class="form-label">Satuan</label>
                        </div>
                        <div class="col-sm-6">
                            <select class="selectpicker" aria-label="Default select example" name="satuan"
                                data-live-search="true">
                                <option selected value="">Open this select menu</option>
                                @foreach ($satuans as $satuan)
                                    @if (old('satuan') == $satuan->satuan)
                                        <option data-tokens="{{ $satuan->satuan }}" selected>{{ $satuan->satuan }}
                                        </option>
                                    @else
                                        <option data-tokens="{{ $satuan->satuan }}">{{ $satuan->satuan }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('satuan')
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
                            <label type="text" name="" id="" class="form-label" style="font-size: 10px">Biz
                                Type/Parameter
                                1</label>
                        </div>
                        <div class="col-sm-6">
                            <select class="selectpicker" aria-label="Default select example" name="biz_type_p1"
                                data-live-search="true">
                                <option selected value="">Open this select menu</option>
                                @foreach ($bizTypes as $biz)
                                    @if (old('biz_type_p1') == $biz->biz_type)
                                        <option data-tokens="{{ $biz->biz_type }}" selected>{{ $biz->biz_type }}
                                        </option>
                                    @else
                                        <option data-tokens="{{ $biz->biz_type }}">{{ $biz->biz_type }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('biz_type_p1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 mt-3">
                    <div class="d-flex flex-row">
                        <div class="col-sm-2">
                            <label type="text" name="" id="" class="form-label">SG/Brand</label>
                        </div>
                        <div class="col-sm-3">
                            <label type="text" name="" id="" class="form-label">Kode Brand</label>
                        </div>
                        <div class="col-sm-5">
                            <label type="text " name="" id="" class="form-label text-center">Long Description</label>
                        </div>
                        <div class="col-sm-3">
                            <label type="text " name="" id="" class="form-label text-center">Negara</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="d-flex flex-row">
                        <div class="col-sm-2">
                            <label type="text" name="" id="" class="form-label"></label>
                        </div>
                        <div class="col-sm-3">
                            <input class="form-control" type="text" id="kode_brand" name="kode_brand1">
                        </div>
                        <div class="col-sm-5">
                            <input class="form-control" type="text" id="long_desc" name="long_desc1">
                        </div>
                        <div class="col-sm-3">
                            <select class="selectpicker" aria-label="Default select example" name="negara1"
                                data-live-search="true">
                                <option selected value="">Open this select menu</option>
                                @foreach ($negaras as $negara)
                                    @if (old('negara1') == $negara->nama_negara)
                                        <option data-tokens="{{ $negara->nama_negara }}" selected>
                                            {{ $negara->nama_negara }}
                                        </option>
                                    @else
                                        <option data-tokens="{{ $negara->nama_negara }}">{{ $negara->nama_negara }}
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="d-flex flex-row">
                        <div class="col-sm-2">
                            <label type="text" name="" id="" class="form-label"></label>
                        </div>
                        <div class="col-sm-3">
                            <input class="form-control" type="text" id="kode_brand" name="kode_brand2">
                        </div>
                        <div class="col-sm-5">
                            <input class="form-control" type="text" id="long_desc" name="long_desc2">
                        </div>
                        <div class="col-sm-3">
                            <select class="selectpicker" aria-label="Default select example" name="negara2"
                                data-live-search="true">
                                <option selected value="">Open this select menu</option>
                                @foreach ($negaras as $negara)
                                    @if (old('negara2') == $negara->nama_negara)
                                        <option data-tokens="{{ $negara->nama_negara }}" selected>
                                            {{ $negara->nama_negara }}
                                        </option>
                                    @else
                                        <option data-tokens="{{ $negara->nama_negara }}">{{ $negara->nama_negara }}
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="d-flex flex-row">
                        <div class="col-sm-2">
                            <label type="text" name="" id="" class="form-label"></label>
                        </div>
                        <div class="col-sm-3">
                            <input class="form-control" type="text" id="kode_brand" name="kode_brand3">
                        </div>
                        <div class="col-sm-5">
                            <input class="form-control" type="text" id="long_desc" name="long_desc3">
                        </div>
                        <div class="col-sm-3">
                            <select class="selectpicker" aria-label="Default select example" name="negara3"
                                data-live-search="true">
                                <option selected value="">Open this select menu</option>
                                @foreach ($negaras as $negara)
                                    @if (old('negara3') == $negara->nama_negara)
                                        <option data-tokens="{{ $negara->nama_negara }}" selected>
                                            {{ $negara->nama_negara }}
                                        </option>
                                    @else
                                        <option data-tokens="{{ $negara->nama_negara }}">{{ $negara->nama_negara }}
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="d-flex flex-row">
                        <div class="col-sm-2">
                            <label type="text" name="" id="" class="form-label"></label>
                        </div>
                        <div class="col-sm-3">
                            <input class="form-control" type="text" id="kode_brand" name="kode_brand4">
                        </div>
                        <div class="col-sm-5">
                            <input class="form-control" type="text" id="long_desc" name="long_desc4">
                        </div>
                        <div class="col-sm-3">
                            <select class="selectpicker" aria-label="Default select example" name="negara4"
                                data-live-search="true">
                                <option selected value="">Open this select menu</option>
                                @foreach ($negaras as $negara)
                                    @if (old('negara4') == $negara->nama_negara)
                                        <option data-tokens="{{ $negara->nama_negara }}" selected>
                                            {{ $negara->nama_negara }}
                                        </option>
                                    @else
                                        <option data-tokens="{{ $negara->nama_negara }}">{{ $negara->nama_negara }}
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="d-flex flex-row">
                        <div class="col-sm-2">
                            <label type="text" name="" id="" class="form-label"></label>
                        </div>
                        <div class="col-sm-3">
                            <input class="form-control" type="text" id="kode_brand" name="kode_brand5">
                        </div>
                        <div class="col-sm-5">
                            <input class="form-control" type="text" id="long_desc" name="long_desc5">
                        </div>
                        <div class="col-sm-3">
                            <select class="selectpicker" aria-label="Default select example" name="negara5"
                                data-live-search="true">
                                <option selected value="">Open this select menu</option>
                                @foreach ($negaras as $negara)
                                    @if (old('negara5') == $negara->nama_negara)
                                        <option data-tokens="{{ $negara->nama_negara }}" selected>
                                            {{ $negara->nama_negara }}
                                        </option>
                                    @else
                                        <option data-tokens="{{ $negara->nama_negara }}">{{ $negara->nama_negara }}
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>


                <hr class="mt-2">
                <div class="col-sm-8">
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-2 mr-3">
                            <label type="text" name="" id="" class="form-label">Nama Agent</label>
                        </div>
                        <div class="col-sm-6">
                            <input id="nama_agent1" type="text"
                                class="form-control @error('nama_agent1') is-invalid @enderror" name="nama_agent1" />
                            @error('nama_agent1')
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
                            <label type="text" name="" id="" class="form-label"></label>
                        </div>
                        <div class="col-sm-6">
                            <input id="nama_agent2" type="text"
                                class="form-control @error('nama_agent2') is-invalid @enderror" name="nama_agent2" />
                            @error('nama_agent2')
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
                            <label type="text" name="" id="" class="form-label"></label>
                        </div>
                        <div class="col-sm-6">
                            <input id="nama_agent3" type="text"
                                class="form-control @error('nama_agent3') is-invalid @enderror" name="nama_agent3" />
                            @error('nama_agent3')
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
                            <label type="text" name="" id="" class="form-label"></label>
                        </div>
                        <div class="col-sm-6">
                            <input id="nama_agent4" type="text"
                                class="form-control @error('nama_agent4') is-invalid @enderror" name="nama_agent4" />
                            @error('nama_agent4')
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
                            <label type="text" name="" id="" class="form-label"></label>
                        </div>
                        <div class="col-sm-6">
                            <input id="nama_agent5" type="text"
                                class="form-control @error('nama_agent5') is-invalid @enderror" name="nama_agent5" />
                            @error('nama_agent5')
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
                            <label type="text" name="" id="" class="form-label">Sales</label>
                        </div>
                        <div class="col-sm-6">
                            <input id="sales" type="text" class="form-control @error('sales') is-invalid @enderror"
                                name="sales" />
                            @error('sales')
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
                            <label type="text" name="" id="" class="form-label" style="font-size: 13px">Staff
                                Member</label>
                        </div>
                        <div class="col-sm-6">
                            <input id="staff_member" type="text"
                                class="form-control @error('staff_member') is-invalid @enderror" name="staff_member" />
                            @error('staff_member')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="d-flex flex-row mt-3">
                        <div class="col-sm-2 mr-3">
                            <label type="text" name="" id="" class="form-label">Agent
                                Period</label>
                        </div>
                        <div class="col-sm-6">

                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="col-sm-6">
                        <div class="d-flex flex-row">
                            <div class="col-sm-2 mr-5">
                                <label type="text" name="" id="" class="form-label" style="font-size: 13px">From
                                </label>
                            </div>
                            <div class="col-sm-6">
                                <input id="from" type="date" class="form-control @error('from') is-invalid @enderror"
                                    name="from" />
                                @error('from')
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
                                <label type="text" name="" id="" class="form-label" style="font-size: 13px">To
                                </label>
                            </div>
                            <div class="col-sm-6">
                                <input id="to" type="date" class="form-control @error('to') is-invalid @enderror"
                                    name="to" />
                                @error('to')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-2 mr-3">
                            <label type="text" name="" id="" class="form-label" style="font-size: 12px">Allowance Qty
                                %</label>
                        </div>
                        <div class="col-sm-3">
                            <input id="allowance_qty" type="text"
                                class="form-control @error('allowance_qty') is-invalid @enderror" name="allowance_qty" />
                            @error('allowance_qty')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-2">
                            <label type="text" name="" id="" class="form-label">%</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="d-flex flex-row mt-3">
                        <div class="col-sm-2 mr-3">
                            <label type="text" name="" id="" class="form-label">P.C</label>
                        </div>
                        <div class="col-sm-3">
                            <input id="pc" type="text" class="form-control @error('pc') is-invalid @enderror" name="pc" />
                            @error('pc')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="d-flex flex-row mt-3">
                        <div class="col-sm-2 mr-3">
                            <label type="text" name="" id="" class="form-label">Print</label>
                        </div>
                        <div class="col-sm-3">
                            <input id="print" type="text" class="form-control @error('print') is-invalid @enderror"
                                name="print" />
                            @error('print')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>


            <div class="tab-pane fade" id="kd04" role="tabpanel" aria-labelledby="kd04-tab"> {{-- For Finance --}}
                <h6 class="text-left mt-2">Untuk Finance</h6>
                <hr>
                <div class="col-sm-8">
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-2 mr-3">
                            {{-- <label type="text" name="" id="" class="form-label">Cust No</label> --}}
                        </div>
                        <div class="col-sm-3">
                            <input id="cust_no" type="hidden" class="form-control @error('cust_no') is-invalid @enderror"
                                name="cust_no" />
                            @error('cust_no')
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
                            <label type="text" name="" id="" class="form-label">Debitor No</label>
                        </div>
                        <div class="col-sm-3">
                            <input id="no_debitor" type="text"
                                class="form-control @error('no_debitor') is-invalid @enderror" name="no_debitor" />
                            @error('no_debitor')
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
                            <label type="text" name="" id="" class="form-label">Creditor No</label>
                        </div>
                        <div class="col-sm-3">
                            <input id="no_creditor" type="text"
                                class="form-control @error('no_creditor') is-invalid @enderror" name="no_creditor" />
                            @error('no_creditor')
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
                            <label type="text" name="" id="" class="form-label">Group Cust No</label>
                        </div>
                        <div class="col-sm-3">
                            <input id="no_group_cust" type="text"
                                class="form-control @error('no_group_cust') is-invalid @enderror" name="no_group_cust" />
                            @error('no_group_cust')
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
                            <label type="text" name="" id="" class="form-label">Credit Cust</label>
                        </div>
                        <div class="col-sm-6">
                            <input id="credit_cust" type="text"
                                class="form-control @error('credit_cust') is-invalid @enderror" name="credit_cust" />
                            @error('credit_cust')
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
                            <label type="text" name="" id="" class="form-label">Credit Limit</label>
                        </div>
                        <div class="col-sm-6">
                            <select class="selectpicker" aria-label="Default select example" name="credit_limit"
                                data-live-search="true">
                                <option selected value="">Open this select menu</option>
                                @foreach ($credits as $credit)
                                    @if (old('credit_limit') == $credit->credit_limit)
                                        <option data-tokens="{{ $credit->credit_limit }}" selected>
                                            {{ $credit->credit_limit }}
                                        </option>
                                    @else
                                        <option data-tokens="{{ $credit->credit_limit }}">
                                            {{ $credit->credit_limit }}
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                            @error('credit_limit')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="d-flex flex-row mt-3">
                        <div class="col-sm-2 mr-3">
                            <label type="text" name="" id="" class="form-label">Credit Period</label>
                        </div>
                        <div class="col-sm-6">

                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="col-sm-6">
                        <div class="d-flex flex-row">
                            <div class="col-sm-2 mr-5">
                                <label type="text" name="" id="" class="form-label" style="font-size: 13px">From
                                </label>
                            </div>
                            <div class="col-sm-6">
                                <input id="credit_from" type="date"
                                    class="form-control @error('credit_from') is-invalid @enderror" name="credit_from" />
                                @error('credit_from')
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
                                <label type="text" name="" id="" class="form-label" style="font-size: 13px">To
                                </label>
                            </div>
                            <div class="col-sm-6">
                                <input id="credit_to" type="date"
                                    class="form-control @error('credit_to') is-invalid @enderror" name="credit_to" />
                                @error('credit_to')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-sm-8">
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-2 mr-3">
                            <label type="text" name="" id="" class="form-label">Pay Term</label>
                        </div>
                        <div class="col-sm-6">
                            <select class="selectpicker" aria-label="Default select example" name="payterm"
                                data-live-search="true">
                                <option selected value="">Open this select menu</option>
                                @foreach ($pays as $pay)
                                    @if (old('payterm') == $pay->pay_term)
                                        <option data-tokens="{{ $pay->pay_term }}" selected>{{ $pay->pay_term }}
                                        </option>
                                    @else
                                        <option data-tokens="{{ $pay->pay_term }}">{{ $pay->pay_term }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('payterm')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="col-sm-8">
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-2 mr-3">
                            <label type="text" name="" id="" class="form-label" style="font-size: 12px">Alasan
                                Perubahan</label>
                        </div>
                        <div class="col-sm-6">
                            <input id="alasan_perubahan" type="text"
                                class="form-control @error('alasan_perubahan') is-invalid @enderror"
                                name="alasan_perubahan" />
                            @error('alasan_perubahan')
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
                            <label type="text" name="" id="" class="form-label" style="font-size: 12px">Histori
                                Pembayaran</label>
                        </div>
                        <div class="col-sm-6">
                            <input id="history_pembayaran" type="text"
                                class="form-control @error('history_pembayaran') is-invalid @enderror"
                                name="history_pembayaran" />
                            @error('history_pembayaran')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div> --}}
                <div class="col-sm-8">
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-2 mr-3">
                            <label type="text" name="" id="" class="form-label" style="font-size: 12px">Credit Line
                                Check</label>
                        </div>
                        <div class="col-sm-6">
                            <input id="credit_line_check" type="text"
                                class="form-control @error('credit_line_check') is-invalid @enderror"
                                name="credit_line_check" />
                            @error('credit_line_check')
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
                            <label type="text" name="" id="" class="form-label" style="font-size: 13px">Block
                                Delivery</label>
                        </div>
                        <div class="col-sm-6">
                            <input id="block_delivery" type="text"
                                class="form-control @error('block_delivery') is-invalid @enderror"
                                name="block_delivery" />
                            @error('block_delivery')
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
                            <label type="text" name="" id="" class="form-label">Block
                            </label>
                        </div>
                        <div class="col-sm-6">
                            <input id="block" type="text" class="form-control @error('block') is-invalid @enderror"
                                name="block" />
                            @error('block')
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
                            <label type="text" name="" id="" class="form-label" style="font-size: 13px">Block Reason
                            </label>
                        </div>
                        <div class="col-sm-6">
                            <input id="block_reason" type="text"
                                class="form-control @error('block_reason') is-invalid @enderror" name="block_reason" />
                            @error('block_reason')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>


            <div class="tab-pane fade" id="kd11" role="tabpanel" aria-labelledby="kd11-tab">
                <h6 class="mt-2">KD11 ASSOCIATIONS LIST</h6>
                <hr class="mb-2">
                <div class="col-sm-8">
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-2 mr-3">
                            {{-- <label type="text" name="" id="" class="form-label">Cust No</label> --}}
                        </div>
                        <div class="col-sm-3">
                            <input id="cust_no" type="hidden" class="form-control @error('cust_no') is-invalid @enderror"
                                name="cust_no" />
                            @error('cust_no')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                {{-- <div class="col-sm-8">
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-2 mr-3">
                            <label type="text" name="" id="" class="form-label"
                                style="font-size: 15px">Association/KD11</label>
                        </div>
                        <div class="col-sm-6">
                            <input id="association1" type="text"
                                class="form-control @error('association1') is-invalid @enderror" name="association1" />
                            @error('association1')
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
                            <label type="text" name="" id="" class="form-label"></label>
                        </div>
                        <div class="col-sm-6">
                            <input id="association2" type="text"
                                class="form-control @error('association2') is-invalid @enderror" name="association2" />
                            @error('association2')
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
                            <label type="text" name="" id="" class="form-label"></label>
                        </div>
                        <div class="col-sm-6">
                            <input id="association3" type="text"
                                class="form-control @error('association3') is-invalid @enderror" name="association3" />
                            @error('association3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div> --}}
                <hr class="mt-2">
                <div class="d-flex justify-content-evenly">
                    <div class="col-sm-6">
                        <div class="d-flex flex-row">
                            <div class="col-sm-2 mr-5">
                                <label type="text" name="" id="" class="form-label" style="font-size: 13px">SD 1
                                </label>
                            </div>
                            <div class="col-sm-6">
                                <select class="selectpicker" aria-label="Default select example" name="sd1"
                                    data-live-search="true">
                                    <option selected value="">Open this select menu</option>
                                    @foreach ($sds as $sd)
                                        @if (old('sd1') == $sd->sd)
                                            <option data-tokens="{{ $sd->sd }}" selected>{{ $sd->sd }}
                                            </option>
                                        @else
                                            <option data-tokens="{{ $sd->sd }}">{{ $sd->sd }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('sd1')
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
                                <label type="text" name="" id="" class="form-label" style="font-size: 13px">Sg 1
                                </label>
                            </div>
                            <div class="col-sm-6">
                                <select class="selectpicker" aria-label="Default select example" name="sg1"
                                    data-live-search="true">
                                    <option selected value="1">Open</option>
                                    @foreach ($sgs as $sg)
                                        @if (old('sg1') == $sg->sg)
                                            <option data-tokens="{{ $sg->sg }}" selected>{{ $sg->sg }}
                                            </option>
                                        @else
                                            <option data-tokens="{{ $sg->sg }}">{{ $sg->sg }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('sg1')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="d-flex flex-row mt-3">
                        <div class="col-sm-2 mr-3">
                            <label type="text" name="" id="" class="form-label" style="font-size: 11px">Association -
                                No 1</label>
                        </div>
                        <div class="col-sm-3">
                            <input id="association_no1" type="text"
                                class="form-control @error('association_no1') is-invalid @enderror"
                                name="association_no1" />
                            @error('association_no1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="d-flex flex-row mt-3">
                        <div class="col-sm-2 mr-3">
                            <label type="text" name="" id="" class="form-label">Status 1</label>
                        </div>
                        <div class="col-sm-6">
                            <select class="selectpicker" aria-label="Default select example" name="status1"
                                data-live-search="true">
                                <option selected value="">Open this select menu</option>
                                <option value="1">Active</option>
                                <option value="2">Inactive</option>
                            </select>
                            @error('status1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="d-flex flex-row mt-3">
                        <div class="col-sm-2 mr-3">
                            <label type="text" name="" id="" class="form-label">Validity
                                Period</label>
                        </div>
                        <div class="col-sm-6">

                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="col-sm-6">
                        <div class="d-flex flex-row">
                            <div class="col-sm-2 mr-5">
                                <label type="text" name="" id="" class="form-label" style="font-size: 13px">From
                                </label>
                            </div>
                            <div class="col-sm-6">
                                <input id="validity_from1" type="date"
                                    class="form-control @error('validity_from1') is-invalid @enderror"
                                    name="validity_from1" />
                                @error('validity_from1')
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
                                <label type="text" name="" id="" class="form-label" style="font-size: 13px">To
                                </label>
                            </div>
                            <div class="col-sm-6">
                                <input id="validity_to1" type="date"
                                    class="form-control @error('validity_to1') is-invalid @enderror"
                                    name="validity_to1" />
                                @error('validity_to1')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-2 mr-3">
                            <label type="text" name="" id="" class="form-label" style="font-size: 13px">Central regu
                                1</label>
                        </div>
                        <div class="col-sm-6">
                            <input id="central_regu1" type="text"
                                class="form-control @error('central_regu1') is-invalid @enderror" name="central_regu1" />
                            @error('central_regu1')
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
                            <label type="text" name="" id="" class="form-label" style="font-size: 13px">Conditions
                                1</label>
                        </div>
                        <div class="col-sm-6">
                            <input id="conditions1" type="text"
                                class="form-control @error('conditions1') is-invalid @enderror" name="conditions1" />
                            @error('conditions1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                {{-- 2 --}}
                <hr class="mt-2">
                <div class="d-flex justify-content-evenly">
                    <div class="col-sm-6">
                        <div class="d-flex flex-row">
                            <div class="col-sm-2 mr-5">
                                <label type="text" name="" id="" class="form-label" style="font-size: 13px">SD 2
                                </label>
                            </div>
                            <div class="col-sm-6">
                                <select class="selectpicker" aria-label="Default select example" name="sd2"
                                    data-live-search="true">
                                    <option value="" selected>Open this select menu</option>
                                    @foreach ($sds as $sd)
                                        @if (old('sd2') == $sd->sd)
                                            <option data-tokens="{{ $sd->sd }}" selected>{{ $sd->sd }}
                                            </option>
                                        @else
                                            <option data-tokens="{{ $sd->sd }}">{{ $sd->sd }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('sd2')
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
                                <label type="text" name="" id="" class="form-label" style="font-size: 13px">Sg 2
                                </label>
                            </div>
                            <div class="col-sm-6">
                                <select class="selectpicker" aria-label="Default select example" name="sg2"
                                    data-live-search="true">
                                    <option selected value="1">Open this select menu</option>
                                    @foreach ($sgs as $sg)
                                        @if (old('sg2') == $sg->sg)
                                            <option data-tokens="{{ $sg->sg }}" selected>{{ $sg->sg }}
                                            </option>
                                        @else
                                            <option data-tokens="{{ $sg->sg }}">{{ $sg->sg }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('sg2')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="d-flex flex-row mt-3">
                        <div class="col-sm-2 mr-3">
                            <label type="text" name="" id="" class="form-label" style="font-size: 11px">Association -
                                No 2</label>
                        </div>
                        <div class="col-sm-3">
                            <input id="association_no2" type="text"
                                class="form-control @error('association_no2') is-invalid @enderror"
                                name="association_no2" />
                            @error('association_no2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="d-flex flex-row mt-3">
                        <div class="col-sm-2 mr-3">
                            <label type="text" name="" id="" class="form-label">Status 1</label>
                        </div>
                        <div class="col-sm-6">
                            <select class="selectpicker" aria-label="Default select example" name="status2"
                                data-live-search="true">
                                <option selected value="">Open this select menu</option>
                                <option value="1">Active</option>
                                <option value="2">Inactive</option>
                            </select>
                            @error('status2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="d-flex flex-row mt-3">
                        <div class="col-sm-2 mr-3">
                            <label type="text" name="" id="" class="form-label">Validity
                                Period 2</label>
                        </div>
                        <div class="col-sm-6">

                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="col-sm-6">
                        <div class="d-flex flex-row">
                            <div class="col-sm-2 mr-5">
                                <label type="text" name="" id="" class="form-label" style="font-size: 13px">From
                                </label>
                            </div>
                            <div class="col-sm-6">
                                <input id="validity_from2" type="date"
                                    class="form-control @error('validity_from2') is-invalid @enderror"
                                    name="validity_from2" />
                                @error('validity_from2')
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
                                <label type="text" name="" id="" class="form-label" style="font-size: 13px">To
                                </label>
                            </div>
                            <div class="col-sm-6">
                                <input id="validity_to2" type="date"
                                    class="form-control @error('validity_to2') is-invalid @enderror"
                                    name="validity_to2" />
                                @error('validity_to2')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-2 mr-3">
                            <label type="text" name="" id="" class="form-label" style="font-size: 13px">Central regu
                                2</label>
                        </div>
                        <div class="col-sm-6">
                            <input id="central_regu2" type="text"
                                class="form-control @error('central_regu2') is-invalid @enderror" name="central_regu2" />
                            @error('central_regu2')
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
                            <label type="text" name="" id="" class="form-label" style="font-size: 13px">Conditions
                                2</label>
                        </div>
                        <div class="col-sm-6">
                            <input id="conditions2" type="text"
                                class="form-control @error('conditions2') is-invalid @enderror" name="conditions2" />
                            @error('conditions2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                {{-- 3 --}}
                <hr class="mt-2">
                <div class="d-flex justify-content-evenly">
                    <div class="col-sm-6">
                        <div class="d-flex flex-row">
                            <div class="col-sm-2 mr-5">
                                <label type="text" name="" id="" class="form-label" style="font-size: 13px">SD 3
                                </label>
                            </div>
                            <div class="col-sm-6">
                                <select class="selectpicker" aria-label="Default select example" name="sd3"
                                    data-live-search="true">
                                    <option selected value="">Open this select menu</option>
                                    @foreach ($sds as $sd)
                                        @if (old('sd3') == $sd->sd)
                                            <option data-tokens="{{ $sd->sd }}" selected>{{ $sd->sd }}
                                            </option>
                                        @else
                                            <option data-tokens="{{ $sd->sd }}">{{ $sd->sd }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('sd3')
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
                                <label type="text" name="" id="" class="form-label" style="font-size: 13px">Sg 3
                                </label>
                            </div>
                            <div class="col-sm-6">
                                <select class="selectpicker" aria-label="Default select example" name="sg3"
                                    data-live-search="true">
                                    <option selected value="1">Open this select menu</option>
                                    @foreach ($sgs as $sg)
                                        @if (old('sg3') == $sg->sg)
                                            <option data-tokens="{{ $sg->sg }}" selected>{{ $sg->sg }}
                                            </option>
                                        @else
                                            <option data-tokens="{{ $sg->sg }}">{{ $sg->sg }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('sg3')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="d-flex flex-row mt-3">
                        <div class="col-sm-2 mr-3">
                            <label type="text" name="" id="" class="form-label" style="font-size: 11px">Association -
                                No 3</label>
                        </div>
                        <div class="col-sm-3">
                            <input id="association_no3" type="text"
                                class="form-control @error('association_no3') is-invalid @enderror"
                                name="association_no3" />
                            @error('association_no3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="d-flex flex-row mt-3">
                        <div class="col-sm-2 mr-3">
                            <label type="text" name="" id="" class="form-label">Status 3</label>
                        </div>
                        <div class="col-sm-6">
                            <select class="selectpicker" aria-label="Default select example" name="status3"
                                data-live-search="true">
                                <option selected value="">Open this select menu</option>
                                <option value="1">Active</option>
                                <option value="2">Inactive</option>
                            </select>
                            @error('status3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="d-flex flex-row mt-3">
                        <div class="col-sm-2 mr-3">
                            <label type="text" name="" id="" class="form-label">Validity
                                Period 3</label>
                        </div>
                        <div class="col-sm-6">

                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="col-sm-6">
                        <div class="d-flex flex-row">
                            <div class="col-sm-2 mr-5">
                                <label type="text" name="" id="" class="form-label" style="font-size: 13px">From
                                </label>
                            </div>
                            <div class="col-sm-6">
                                <input id="validity_from3" type="date"
                                    class="form-control @error('validity_from3') is-invalid @enderror"
                                    name="validity_from3" />
                                @error('validity_from3')
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
                                <label type="text" name="" id="" class="form-label" style="font-size: 13px">To
                                </label>
                            </div>
                            <div class="col-sm-6">
                                <input id="validity_to3" type="date"
                                    class="form-control @error('validity_to3') is-invalid @enderror"
                                    name="validity_to3" />
                                @error('validity_to3')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-2 mr-3">
                            <label type="text" name="" id="" class="form-label" style="font-size: 13px">Central regu
                                3</label>
                        </div>
                        <div class="col-sm-6">
                            <input id="central_regu3" type="text"
                                class="form-control @error('central_regu3') is-invalid @enderror" name="central_regu3" />
                            @error('central_regu3')
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
                            <label type="text" name="" id="" class="form-label" style="font-size: 13px">Conditions
                                3</label>
                        </div>
                        <div class="col-sm-6">
                            <input id="conditions3" type="text"
                                class="form-control @error('conditions3') is-invalid @enderror" name="conditions3" />
                            @error('conditions3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>

                {{-- <div class="col-sm-10">
                    <div class="d-flex flex-row text-center">
                        <div class="col-sm-2">
                            <label type="text" name="" id="" class="form-label">Price List Code</label>
                        </div>
                        <div class="col-sm-2">
                            <label type="text" name="" id="" class="form-label"></label>
                        </div>
                        <div class="col-sm-3">
                            <label type="text " name="" id="" class="form-label text-center">Fcm Lama</label>
                        </div>
                        <div class="col-sm-3">
                            <label type="text " name="" id="" class="form-label text-center">Fcm Baru</label>
                        </div>
                        <div class="col-sm-2">
                            <label type="text " name="" id="" class="form-label text-center">Table Price</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="d-flex flex-row">
                        <div class="col-sm-2">
                            <label type="text" name="" id="" class="form-label"></label>
                        </div>
                        <div class="col-sm-2">
                            <label type="text" name="" id="" class="form-label">Digital</label>
                        </div>
                        <div class="col-sm-3">
                            <input class="form-control" type="text" id="fcmlama_digital" name="fcmlama_digital">
                        </div>
                        <div class="col-sm-3">
                            <input class="form-control" type="text" id="fcmbaru_digital" name="fcmbaru_digital">
                        </div>
                        <div class="col-sm-2">
                            <label type="text " name="" id="" class="form-label text-center"></label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="d-flex flex-row">
                        <div class="col-sm-2">
                            <label type="text" name="" id="" class="form-label"></label>
                        </div>
                        <div class="col-sm-2">
                            <label type="text" name="" id="" class="form-label">Dyed</label>
                        </div>
                        <div class="col-sm-3">
                            <input class="form-control" type="text" id="fcmlama_dyed" name="fcmlama_dyed">
                        </div>
                        <div class="col-sm-3">
                            <input class="form-control" type="text" id="fcmbaru_dyed" name="fcmbaru_dyed">
                        </div>
                        <div class="col-sm-2">
                            <input class="form-control" type="text" id="table_price" name="table_price">
                        </div>
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="d-flex flex-row">
                        <div class="col-sm-2">
                            <label type="text" name="" id="" class="form-label"></label>
                        </div>
                        <div class="col-sm-2">
                            <label type="text" name="" id="" class="form-label">Print</label>
                        </div>
                        <div class="col-sm-3">
                            <input class="form-control" type="text" id="fcmlama_print" name="fcmlama_print">
                        </div>
                        <div class="col-sm-3">
                            <input class="form-control" type="text" id="fcmbaru_print" name="fcmbaru_print">
                        </div>
                        <div class="col-sm-2">
                            <label type="text " name="" id="" class="form-label text-center"></label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="d-flex flex-row">
                        <div class="col-sm-2">
                            <label type="text" name="" id="" class="form-label"></label>
                        </div>
                        <div class="col-sm-2">
                            <label type="text" name="" id="" class="form-label">White</label>
                        </div>
                        <div class="col-sm-3">
                            <input class="form-control" type="text" id="fcmlama_white" name="fcmlama_white">
                        </div>
                        <div class="col-sm-3">
                            <input class="form-control" type="text" id="fcmbaru_white" name="fcmbaru_white">
                        </div>
                        <div class="col-sm-2">
                            <label type="text " name="" id="" class="form-label text-center"></label>
                        </div>
                    </div>
                </div> --}}
            </div>



            <div class="tab-pane fade" id="kd14" role="tabpanel" aria-labelledby="kd14-tab">
                {{-- KD14 PIC/Contact Person --}}
                <h6 class="text-left mt-2">KD14 PIC/Contact Person</h6>
                <hr class="mb-2">
                <div class="col-sm-8">
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-2 mr-3">
                            {{-- <label type="text" name="" id="" class="form-label">Cust No</label> --}}
                        </div>
                        <div class="col-sm-3">
                            <input id="cust_no" type="hidden" class="form-control @error('cust_no') is-invalid @enderror"
                                name="cust_no" />
                            @error('cust_no')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <hr class="mt-2">
                <div class="col-sm-10">
                    <div class="d-flex flex-row text-center">
                        <div class="col-sm-3 ">
                            <label type="text" name="" id="" class="form-label">Contact Person</label>
                        </div>
                        <div class="col-sm-3">
                            <label type="text" name="" id="" class="form-label">Nama</label>
                        </div>
                        <div class="col-sm-3">
                            <label type="text " name="" id="" class="form-label text-center">Mobile</label>
                        </div>
                        <div class="col-sm-3">
                            <label type="text " name="" id="" class="form-label text-center">Phone</label>
                        </div>

                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="d-flex flex-row text-center">
                        <div class="col-sm-3">
                            <input class="form-control @error('cp1') is-invalid @enderror" type="text" id="cp1"
                                name="cp1">
                            @error('cp1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-3">
                            <input class="form-control @error('nama_cp1') is-invalid @enderror" type="text" id="nama_cp1"
                                name="nama_cp1">
                            @error('nama_cp1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-3">
                            <input class="form-control @error('mobile_cp1') is-invalid @enderror" type="text"
                                id="mobile_cp1" name="mobile_cp1">
                            @error('mobile_cp1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-3">
                            <input class="form-control @error('phone_cp1') is-invalid @enderror" type="text"
                                id="phone_cp1" name="phone_cp1">
                            @error('phone_cp1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                    </div>
                </div>
                <div class="col-sm-10 mt-3">
                    <div class="d-flex flex-row text-center">
                        <div class="col-sm-3 ">
                            <label type="text" name="" id="" class="form-label">Function</label>
                        </div>
                        <div class="col-sm-3">
                            <label type="text" name="" id="" class="form-label">Role</label>
                        </div>
                        <div class="col-sm-3">
                            <label type="text " name="" id="" class="form-label text-center">Sync</label>
                        </div>
                        <div class="col-sm-3">
                            <label type="text " name="" id="" class="form-label text-center">Email</label>
                        </div>

                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="d-flex flex-row text-center">
                        <div class="col-sm-3">
                            <input class="form-control @error('function_cp1') is-invalid @enderror" type="text"
                                id="function_cp1" name="function_cp1">
                            @error('function_cp1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-3">
                            <input class="form-control @error('role_cp1') is-invalid @enderror" type="text" id="role_cp1"
                                name="role_cp1">
                            @error('role_cp1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-3">
                            <input class="form-control @error('sinc_cp1') is-invalid @enderror" type="date" id="sinc_cp1"
                                name="sinc_cp1">
                            @error('sinc_cp1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-3">
                            <input class="form-control @error('email_cp1') is-invalid @enderror" type="email"
                                id="email_cp1" name="email_cp1">
                            @error('email_cp1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                    </div>
                </div>
                <div class="d-flex justify-content-evenly mt-3">
                    <div class="col-sm-6">
                        <div class="d-flex flex-row">
                            <div class="col-sm-2 mr-5">
                                <label type="text" name="" id="" class="form-label" style="font-size: 13px">SD
                                </label>
                            </div>
                            <div class="col-sm-6">
                                <select class="selectpicker" aria-label="Default select example" name="sd_cp1"
                                    data-live-search="true">
                                    <option selected value="">Open this select menu</option>
                                    @foreach ($sds as $sd)
                                        @if (old('sd_cp1') == $sd->sd)
                                            <option data-tokens="{{ $sd->sd }}" selected>{{ $sd->sd }}
                                            </option>
                                        @else
                                            <option data-tokens="{{ $sd->sd }}">{{ $sd->sd }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('sd_cp1')
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
                                <label type="text" name="" id="" class="form-label" style="font-size: 13px">Sg
                                </label>
                            </div>
                            <div class="col-sm-6">
                                <select class="selectpicker" aria-label="Default select example" name="sg_cp1"
                                    data-live-search="true">
                                    <option selected value="">Open this select menu</option>
                                    @foreach ($sgs as $sg)
                                        @if (old('sg_cp1') == $sg->sg)
                                            <option data-tokens="{{ $sg->sg }}" selected>{{ $sg->sg }}
                                            </option>
                                        @else
                                            <option data-tokens="{{ $sg->sg }}">{{ $sg->sg }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('sg_cp1')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-2 mr-3">
                            <label type="text" name="" id="" class="form-label" style="font-size: 13px">Add Addr
                        </div>
                        <div class="col-sm-6">
                            <input id="add_addr_cp1" type="text"
                                class="form-control @error('add_addr_cp1') is-invalid @enderror" name="add_addr_cp1" />
                            @error('add_addr_cp1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                {{-- 2 --}}
                <hr class="my-3">
                <h6 style="font-weight: bolder">Contact Person 2</h6>
                <div class="col-sm-10">
                    <div class="d-flex flex-row text-center">
                        <div class="col-sm-3 ">
                            <label type="text" name="" id="" class="form-label">Contact Person</label>
                        </div>
                        <div class="col-sm-3">
                            <label type="text" name="" id="" class="form-label">Nama</label>
                        </div>
                        <div class="col-sm-3">
                            <label type="text " name="" id="" class="form-label text-center">Mobile</label>
                        </div>
                        <div class="col-sm-3">
                            <label type="text " name="" id="" class="form-label text-center">Phone</label>
                        </div>

                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="d-flex flex-row text-center">
                        <div class="col-sm-3">
                            <input class="form-control @error('cp2') is-invalid @enderror" type="text" id="cp2"
                                name="cp2">
                            @error('cp2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-3">
                            <input class="form-control @error('nama_cp2') is-invalid @enderror" type="text" id="nama_cp2"
                                name="nama_cp2">
                            @error('nama_cp2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-3">
                            <input class="form-control @error('mobile_cp2') is-invalid @enderror" type="text"
                                id="mobile_cp2" name="mobile_cp2">
                            @error('mobile_cp2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-3">
                            <input class="form-control @error('phone_cp2') is-invalid @enderror" type="text"
                                id="phone_cp2" name="phone_cp2">
                            @error('phone_cp2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                    </div>
                </div>
                <div class="col-sm-10 mt-3">
                    <div class="d-flex flex-row text-center">
                        <div class="col-sm-3 ">
                            <label type="text" name="" id="" class="form-label">Function</label>
                        </div>
                        <div class="col-sm-3">
                            <label type="text" name="" id="" class="form-label">Role</label>
                        </div>
                        <div class="col-sm-3">
                            <label type="text " name="" id="" class="form-label text-center">Sync</label>
                        </div>
                        <div class="col-sm-3">
                            <label type="text " name="" id="" class="form-label text-center">Email</label>
                        </div>

                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="d-flex flex-row text-center">
                        <div class="col-sm-3">
                            <input class="form-control @error('function_cp2') is-invalid @enderror" type="text"
                                id="function_cp2" name="function_cp2">
                            @error('function_cp2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-3">
                            <input class="form-control @error('role_cp2') is-invalid @enderror" type="text" id="role_cp2"
                                name="role_cp2">
                            @error('role_cp2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-3">
                            <input class="form-control @error('sinc_cp2') is-invalid @enderror" type="date" id="sinc_cp2"
                                name="sinc_cp2">
                            @error('sinc_cp2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-3">
                            <input class="form-control @error('email_cp2') is-invalid @enderror" type="email"
                                id="email_cp2" name="email_cp2">
                            @error('email_cp2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                    </div>
                </div>

                <div class="d-flex justify-content-evenly mt-3">
                    <div class="col-sm-6">
                        <div class="d-flex flex-row">
                            <div class="col-sm-2 mr-5">
                                <label type="text" name="" id="" class="form-label" style="font-size: 13px">SD
                                </label>
                            </div>
                            <div class="col-sm-6">
                                <select class="selectpicker" aria-label="Default select example" name="sd_cp2"
                                    data-live-search="true">
                                    <option selected value="">Open this select menu</option>
                                    @foreach ($sds as $sd)
                                        @if (old('sd_cp2') == $sd->sd)
                                            <option data-tokens="{{ $sd->sd }}" selected>{{ $sd->sd }}
                                            </option>
                                        @else
                                            <option data-tokens="{{ $sd->sd }}">{{ $sd->sd }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('sd_cp2')
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
                                <label type="text" name="" id="" class="form-label" style="font-size: 13px">Sg
                                </label>
                            </div>
                            <div class="col-sm-6">
                                <select class="selectpicker" aria-label="Default select example" name="sg_cp2"
                                    data-live-search="true">
                                    <option selected value="">Open this select menu</option>
                                    @foreach ($sgs as $sg)
                                        @if (old('sg_cp2') == $sg->sg)
                                            <option data-tokens="{{ $sg->sg }}" selected>{{ $sg->sg }}
                                            </option>
                                        @else
                                            <option data-tokens="{{ $sg->sg }}">{{ $sg->sg }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('sg_cp2')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-2 mr-3">
                            <label type="text" name="" id="" class="form-label" style="font-size: 13px">Add Addr
                        </div>
                        <div class="col-sm-6">
                            <input id="add_addr_cp2" type="text"
                                class="form-control @error('add_addr_cp2') is-invalid @enderror" name="add_addr_cp2" />
                            @error('add_addr_cp2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>

                <hr class="my-3">
                <h6 style="font-weight: bolder">Contact Person 3</h6>
                <div class="col-sm-10">
                    <div class="d-flex flex-row text-center">
                        <div class="col-sm-3 ">
                            <label type="text" name="" id="" class="form-label">Contact Person</label>
                        </div>
                        <div class="col-sm-3">
                            <label type="text" name="" id="" class="form-label">Nama</label>
                        </div>
                        <div class="col-sm-3">
                            <label type="text " name="" id="" class="form-label text-center">Mobile</label>
                        </div>
                        <div class="col-sm-3">
                            <label type="text " name="" id="" class="form-label text-center">Phone</label>
                        </div>

                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="d-flex flex-row text-center">
                        <div class="col-sm-3">
                            <input class="form-control @error('cp3') is-invalid @enderror" type="text" id="cp3"
                                name="cp3">
                            @error('cp3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-3">
                            <input class="form-control @error('nama_cp3') is-invalid @enderror" type="text" id="nama_cp3"
                                name="nama_cp3">
                            @error('nama_cp3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-3">
                            <input class="form-control @error('mobile_cp3') is-invalid @enderror" type="text"
                                id="mobile_cp3" name="mobile_cp3">
                            @error('mobile_cp3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-3">
                            <input class="form-control @error('phone_cp3') is-invalid @enderror" type="text"
                                id="phone_cp3" name="phone_cp3">
                            @error('phone_cp3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                    </div>
                </div>
                <div class="col-sm-10 mt-3">
                    <div class="d-flex flex-row text-center">
                        <div class="col-sm-3 ">
                            <label type="text" name="" id="" class="form-label">Function</label>
                        </div>
                        <div class="col-sm-3">
                            <label type="text" name="" id="" class="form-label">Role</label>
                        </div>
                        <div class="col-sm-3">
                            <label type="text " name="" id="" class="form-label text-center">Sync</label>
                        </div>
                        <div class="col-sm-3">
                            <label type="text " name="" id="" class="form-label text-center">Email</label>
                        </div>

                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="d-flex flex-row text-center">
                        <div class="col-sm-3">
                            <input class="form-control @error('function_cp3') is-invalid @enderror" type="text"
                                id="function_cp3" name="function_cp3">
                            @error('function_cp3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-3">
                            <input class="form-control @error('role_cp3') is-invalid @enderror" type="text" id="role_cp3"
                                name="role_cp3">
                            @error('role_cp3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-3">
                            <input class="form-control @error('sinc_cp3') is-invalid @enderror" type="date" id="sinc_cp3"
                                name="sinc_cp3">
                            @error('sinc_cp3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-3">
                            <input class="form-control @error('email_cp3') is-invalid @enderror" type="email"
                                id="email_cp3" name="email_cp3">
                            @error('email_cp3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                    </div>
                </div>
                <div class="d-flex justify-content-evenly mt-3">
                    <div class="col-sm-6">
                        <div class="d-flex flex-row">
                            <div class="col-sm-2 mr-5">
                                <label type="text" name="" id="" class="form-label" style="font-size: 13px">SD
                                </label>
                            </div>
                            <div class="col-sm-6">
                                <select class="selectpicker" aria-label="Default select example" name="sd_cp3"
                                    data-live-search="true">
                                    <option selected value="">Open this select menu</option>
                                    @foreach ($sds as $sd)
                                        @if (old('sd_cp3') == $sd->sd)
                                            <option data-tokens="{{ $sd->sd }}" selected>{{ $sd->sd }}
                                            </option>
                                        @else
                                            <option data-tokens="{{ $sd->sd }}">{{ $sd->sd }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('sd_cp3')
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
                                <label type="text" name="" id="" class="form-label" style="font-size: 13px">Sg
                                </label>
                            </div>
                            <div class="col-sm-6">
                                <select class="selectpicker" aria-label="Default select example" name="sg_cp3"
                                    data-live-search="true">
                                    <option selected value="">Open this select menu</option>
                                    @foreach ($sgs as $sg)
                                        @if (old('sg_cp3') == $sg->sg)
                                            <option data-tokens="{{ $sg->sg }}" selected>{{ $sg->sg }}
                                            </option>
                                        @else
                                            <option data-tokens="{{ $sg->sg }}">{{ $sg->sg }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('sg_cp3')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-2 mr-3">
                            <label type="text" name="" id="" class="form-label" style="font-size: 13px">Add Addr
                        </div>
                        <div class="col-sm-6">
                            <input id="add_addr_cp3" type="text"
                                class="form-control @error('add_addr_cp3') is-invalid @enderror" name="add_addr_cp3" />
                            @error('add_addr_cp3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            {{-- KD05 --}}




            <div class="tab-pane fade" id="kd05" role="tabpanel" aria-labelledby="kd05-tab">

                <div class="card my-5" id="kd05_1">
                    <div class="card-header">
                        KD5 Additional
                    </div>
                    <div class="row">
                        <div class="d-flex justify-content-start my-3 mx-3">
                            <div class="row">
                                <div class="d-flex justify-content-start">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="d-flex flex-row">
                                                <div class="col-sm-3">
                                                    <label type="text" name="" id="" class="form-label">Title</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <select class="selectpicker" aria-label="Default select example"
                                                        name="title1[]" data-live-search="true">
                                                        <option selected value="">Open this select menu</option>
                                                        @foreach ($titles as $title)
                                                            @if (old('title1') == $title->title)


                                                            <option data-tokens="{{ $title->title }}" selected>
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
                                            </div>
                                            {{-- <div class="d-flex flex-row mt-2">
                                            <div class="col-sm-3">
                                                <label type="text" name="" id="" class="form-label">Class</label>
                                            </div>
                                            <div class="col-sm-7">
                                                <select class="selectpicker" aria-label="Default select example"
                                                    name="class" data-live-search="true">
                                                    <option selected value="">Open this select menu</option>
                                                    @foreach ($classes as $class)
                                                        @if (old('class') == $class->class)
                                                            <option data-tokens="{{ $class->class }}" selected>
                                                                {{ $class->class }}
                                                            </option>
                                                        @else
                                                            <option data-tokens="{{ $class->class }}">
                                                                {{ $class->class }}
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
                                        </div> --}}
                                            {{-- <div class="d-flex flex-row mt-2">
                                            <div class="col-sm-3">
                                                <label type="text" name="" id="" class="form-label">Status</label>
                                            </div>
                                            <div class="col-sm-7">
                                                <select class="selectpicker" aria-label="Default select example"
                                                    name="status" data-live-search="true">
                                                    <option selected value="">Open this select menu</option>
                                                    <option value="1">Active</option>
                                                    <option value="2">Inactive</option>
                                                </select>
                                                @error('status')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div> --}}
                                            {{-- <div class="d-flex flex-row mt-2">
                                            <div class="col-sm-3">
                                                <label type="text" name="" id="" class="form-label">Short Name</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input id="short_name" type="text"
                                                    class="form-control @error('short_name') is-invalid @enderror"
                                                    name="short_name" />
                                                @error('short_name')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div> --}}
                                            <div class="d-flex flex-row mt-2">
                                                <div class="col-sm-3">
                                                    <label type="text" name="" id="" class="form-label">Nama
                                                        1</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input id="nama11" type="text"
                                                        class="form-control @error('nama11') is-invalid @enderror"
                                                        name="nama11[]" />
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
                                                        class="form-control @error('nama21') is-invalid @enderror"
                                                        name="nama21[]" />
                                                    @error('nama21')
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
                                                    <input id="street1" type="text"
                                                        class="form-control @error('street1') is-invalid @enderror"
                                                        name="street1[]" />
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
                                                        style="font-size: 13px">Additional Address</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input id="addit1" type="text"
                                                        class="form-control @error('addit1') is-invalid @enderror"
                                                        name="addit1[]" />
                                                    @error('addit1')
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
                                                    <select class="selectpicker" aria-label="Default select example"
                                                        name="tax1[]" data-live-search="true">
                                                        <option selected value="">Open this select menu</option>
                                                        @foreach ($taxs as $tax)
                                                            @if (old('tax1') == $tax->tax)
                                                                <option data-tokens="{{ $tax->tax }}" selected>
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


                                            </div>
                                            <div class="d-flex flex-row mt-2">
                                                <div class="col-sm-3">
                                                    <label type="text" name="" id="" class="form-label"
                                                        style="font-size: 13px">Postal Code</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input id="postal_code1" type="text"
                                                        class="form-control @error('postal_code1') is-invalid @enderror"
                                                        name="postal_code1[]" />
                                                    @error('postal_code1')
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
                                                    <label type="text" name="" id="" class="form-label text-center">Addres
                                                        Code</label>
                                                </div>
                                            </div>

                                            <div class="d-flex flex-row mt-2">
                                                <div class="col-sm-5">
                                                    <input id="no_cust1" type="text"
                                                        class="form-control @error('no_cust1') is-invalid @enderror"
                                                        name="no_cust1[]" />
                                                    @error('no_cust1')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="col-sm-6">
                                                    <input id="addresscode1" type="text"
                                                        class="form-control @error('addresscode1') is-invalid @enderror"
                                                        name="addresscode1[]" />
                                                    @error('addresscode1')
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
                                                    <input id="fax1" type="text"
                                                        class="form-control @error('fax1') is-invalid @enderror"
                                                        name="fax1[]" />
                                                    @error('fax1')
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
                                                    <input id="po_box1" type="text"
                                                        class="form-control @error('po_box1') is-invalid @enderror"
                                                        name="po_box1[]" />
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
                                                        class="form-label text-center">Email</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input id="email1" type="text"
                                                        class="form-control @error('email1') is-invalid @enderror"
                                                        name="email1[]" />
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
                                                        class="form-label text-center">Phone</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input id="telp1" type="text"
                                                        class="form-control @error('telp1') is-invalid @enderror"
                                                        name="telp1[]" />
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
                                                        class="form-label text-center">Mobile</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input id="mobile1" type="text"
                                                        class="form-control @error('mobile1') is-invalid @enderror"
                                                        name="mobile1[]" />
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
                                                        class="form-label text-center">Home</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input id="home1" type="text"
                                                        class="form-control @error('home1') is-invalid @enderror"
                                                        name="home1[]" />
                                                    @error('home1')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row mt-5 justify-content-end">
                                                <div class="col-sm-3">
                                                    <button type="button" class="btn btn-success me-2 remove-tr"
                                                        id="add">Add More</button>
                                                </div>
                                                <div class="col-sm-3">
                                                    <button type="button" class="btn btn-danger me-2 remove-tr"
                                                        id="remove">Remove</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="d-flex flex-row mt-2">
                                                <div class="col-sm-2 mr-3">
                                                    <label type="text" name="" id="" class="form-label"
                                                        style="font-size: 13px">Country Code</label>
                                                </div>
                                                <div class="col-sm-6">
                                                    <select class="selectpicker" aria-label="Default select example"
                                                        name="kd5negara1[]" data-live-search="true">
                                                        <option selected value="">Open this select menu</option>
                                                        @foreach ($negaras as $negara)
                                                            @if (old('negara1') == $negara->nama_negara)
                                                                <option data-tokens="{{ $negara->nama_negara }}"
                                                                    selected>
                                                                    {{ $negara->nama_negara }}
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
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="d-flex flex-row mt-2">
                                                <div class="col-sm-2 mr-3">
                                                    <label type="text" name="" id="" class="form-label"
                                                        style="font-size: 15px">Kode
                                                        County</label>
                                                </div>
                                                <div class="col-sm-6">
                                                    <select class="selectpicker" aria-label="Default select example"
                                                        name="kode_county1[]" data-live-search="true">
                                                        <option selected value="">Open this select menu</option>
                                                        @foreach ($kodeCountries as $country)
                                                            @if (old('kode_county1') == $country->kode_county)
                                                                <option data-tokens="{{ $country->kode_county }}"
                                                                    selected>
                                                                    {{ $country->kode_county }}
                                                                </option>
                                                            @else
                                                                <option data-tokens="{{ $country->kode_county }}">
                                                                    {{ $country->kode_county }}
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
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="d-flex flex-row mt-2">
                                                <div class="col-sm-2 mr-3">
                                                    <label type="text" name="" id="" class="form-label">Kota</label>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input id="kota1[]" type="text"
                                                        class="form-control @error('kota1') is-invalid @enderror"
                                                        name="kota1[]" />
                                                    @error('kota1')
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
                                                    <input id="npwp1[]" type="text"
                                                        class="form-control @error('npwp1') is-invalid @enderror"
                                                        name="npwp1[]" />
                                                    @error('npwp1')
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
                    </div>
                </div>





                <div class="row justify-content-center">
                    <hr class="mb-3 mt-5">
                    <div class="row">
                        <div class="d-flex justify-content-around">
                            <div class="col-sm-10">
                                <div class="row">
                                    <h6 class="mb-4">All Customer Form</h6>
                                    <div class="table-responsive mt-0">

                                        <table class="table table-striped table-sm" id="dt-init2">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Cust No</th>
                                                    <th scope="col">Kode Customer</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($kd05 as $form)
                                                    <tr>
                                                        <td>{{ $form->no_cust1 }}</td>
                                                        <td>{{ $form->addresscode1 }}</td>
                                                        <td>{{ $form->status_form }}</td>
                                                        <td>
                                                            <a href="/dashboard/salesFolder/inputan/{{ $form->no_cust1 }}"
                                                                class="badge bg-info"><i class="fa fa-eye"
                                                                    aria-hidden="true"></i></a>
                                                            @if (Auth::user()->division == 'MANAGEMENT INFORMATION SYSTEM')
                                                                <a href="/dashboard/salesFolder/inputan/{{ $form->no_cust1 }}/edit"
                                                                    class="badge bg-warning"><i
                                                                        class="fas fa-edit"></i></a>
                                                                <form
                                                                    action="/dashboard/salesFolder/inputan/{{ $form->no_cust1 }}"
                                                                    method="post" class="d-inline">
                                                                    {{-- @method('delete') --}}
                                                                    @csrf
                                                                    <button class="badge bg-danger border-0"
                                                                        onclick="return confirm('Are you sure?')"><i
                                                                            class="fas fa-trash-alt"></i></span></button>
                                                                </form>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            {{-- <div class="tab-pane fade" id="additional" role="tabpanel" aria-labelledby="additional-tab">
                <div class="row">
                    <div class="d-flex justify-content-start">
                        <div class="row">
                            <h6 class="text-left mt-2">Additional</h6>
                            <hr>
                            <div class="col-sm-10">
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3 mr-3">
                                        <label type="text" name="" id="" class="form-label"
                                            style="font-size: 15px">Perubahan Alamat</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <textarea id="add_perubahan_alamat" type="text"
                                            class="form-control @error('add_perubahan_alamat') is-invalid @enderror"
                                            name="add_perubahan_alamat" cols="30" rows="5"></textarea>
                                        @error('add_perubahan_alamat')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3 mr-3">
                                        <label type="text" name="" id="" class="form-label">Fax</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <input id="add_fax" type="text"
                                            class="form-control @error('add_fax') is-invalid @enderror" name="add_fax" />
                                        @error('add_fax')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3 mr-3">
                                        <label type="text" name="" id="" class="form-label">Bidang</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <input id="add_bidang" type="text"
                                            class="form-control @error('add_bidang') is-invalid @enderror"
                                            name="add_bidang" />
                                        @error('add_bidang')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3 mr-3">
                                        <label type="text" name="" id="" class="form-label">Jenis Bisnis</label>
                                    </div>
                                    <div class="col-sm-7">
                                        <select class="selectpicker" aria-label="Default select example"
                                            name="add_jenis_bisnis" data-live-search="true">
                                            <option selected value="">Open this select menu</option>
                                            @foreach ($jenises as $jenis)
                                                @if (old('add_jenis_bisnis') == $jenis->jenis_bisnis)
                                                    <option data-tokens="{{ $jenis->jenis_bisnis }}" selected>
                                                        {{ $jenis->jenis_bisnis }}
                                                    </option>
                                                @else
                                                    <option data-tokens="{{ $jenis->jenis_bisnis }}">
                                                        {{ $jenis->jenis_bisnis }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('add_jenis_bisnis')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3 mr-3">
                                        <label type="text" name="" id="" class="form-label">Orientasi Market</label>
                                    </div>
                                    <div class="col-sm-7">
                                        <select class="selectpicker" aria-label="Default select example"
                                            name="add_orientasi_bisnis" data-live-search="true">
                                            <option selected value="">Open this select menu</option>
                                            @foreach ($orientasis as $orientasi)
                                                @if (old('add_orientasi_bisnis') == $orientasi->orientasi_market)
                                                    <option data-tokens="{{ $orientasi->orientasi_market }}" selected>
                                                        {{ $orientasi->orientasi_market }}
                                                    </option>
                                                @else
                                                    <option data-tokens="{{ $orientasi->orientasi_market }}">
                                                        {{ $orientasi->orientasi_market }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('add_orientasi_bisnis')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3 mr-3">
                                        <label type="text" name="" id="" class="form-label">Tipe Perusahaan</label>
                                    </div>
                                    <div class="col-sm-7">
                                        <select class="selectpicker" aria-label="Default select example"
                                            name="add_type_perusahaan" data-live-search="true">
                                            <option selected value="">Open this select menu</option>
                                            @foreach ($tipes as $tipe)
                                                @if (old('add_type_perusahaan') == $tipe->tipe_perusahaan)
                                                    <option data-tokens="{{ $tipe->tipe_perusahaan }}" selected>
                                                        {{ $tipe->tipe_perusahaan }}
                                                    </option>
                                                @else
                                                    <option data-tokens="{{ $tipe->tipe_perusahaan }}">
                                                        {{ $tipe->tipe_perusahaan }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('add_type_perusahaan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-2 mr-3">
                                        <label type="text" name="" id="" class="form-label">Kepemilikan</label>
                                    </div>
                                    <div class="col-sm-6">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <div class="d-flex flex-row">
                                    <div class="col-sm-3 mr-3">
                                        <select class="form-select" aria-label="Default select example"
                                            name="add_kepemilikan">
                                            <option selected>Pilih..</option>
                                            <option value="Kantor">Kantor</option>
                                            <option value="Pabrik">Pabrik</option>
                                            <option value="Toko">Toko</option>
                                        </select>
                                        @error('add_kepemilikan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-7">
                                        <select class="selectpicker" aria-label="Default select example"
                                            name="add_jenis_kepemilikan" data-live-search="true">
                                            <option selected value="">Open this select menu</option>
                                            @foreach ($kepemilikan as $milik)
                                                @if (old('add_jenis_kepemilikan') == $milik->kepemilikan_kantor)
                                                    <option data-tokens="{{ $milik->kepemilikan_kantor }}" selected>
                                                        {{ $milik->kepemilikan_kantor }}
                                                    </option>
                                                @else
                                                    <option data-tokens="{{ $milik->kepemilikan_kantor }}">
                                                        {{ $milik->kepemilikan_kantor }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('jenis_kepemilikan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-10 mt-2">
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3 mr-3">
                                        <label type="text" name="" id="" class="form-label"
                                            style="font-size: 13px">Sudah berapa lama di
                                            bisnis Textile</label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input id="add_lama_bisnis" type="text"
                                            class="form-control @error('add_lama_bisnis') is-invalid @enderror"
                                            name="add_lama_bisnis" />
                                        @error('add_lama_bisnis')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-1">
                                        <label type="text" name="" id="" class="form-label">Tahun</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3 mr-3">
                                        <label type="text" name="" id="" class="form-label">Credit Limit
                                            Request</label>
                                    </div>
                                    <div class="col-sm-7">
                                        <select class="selectpicker" aria-label="Default select example"
                                            name="add_credit_limit_request" data-live-search="true">
                                            <option selected value="">Open this select menu</option>
                                            @foreach ($credits as $credit)
                                                @if (old('add_credit_limit_request') == $credit->credit_limit)
                                                    <option data-tokens="{{ $credit->credit_limit }}" selected>
                                                        {{ $credit->credit_limit }}
                                                    </option>
                                                @else
                                                    <option data-tokens="{{ $credit->credit_limit }}">
                                                        {{ $credit->credit_limit }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('add_credit_limit_request')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3 mr-3">
                                        <label type="text" name="" id="" class="form-label">Credit Term
                                            Request</label>
                                    </div>
                                    <div class="col-sm-7">
                                        <select class="selectpicker" aria-label="Default select example"
                                            name="add_credit_term_request" data-live-search="true">
                                            <option selected value="">Open this select menu</option>
                                            @foreach ($pays as $pay)
                                                @if (old('add_credit_term_request') == $pay->pay_term)
                                                    <option data-tokens="{{ $pay->pay_term }}" selected>
                                                        {{ $pay->pay_term }}
                                                    </option>
                                                @else
                                                    <option data-tokens="{{ $pay->pay_term }}">{{ $pay->pay_term }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('add_credit_term_request')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-10 mt-2">
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3 mr-3">
                                        <label type="text" name="" id="" class="form-label"
                                            style="font-size: 13px">Sudah berapa lama bekerja sama dengan LPA</label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input id="add_kerjasama_lpa" type="text"
                                            class="form-control @error('add_kerjasama_lpa') is-invalid @enderror"
                                            name="add_kerjasama_lpa" />
                                        @error('add_kerjasama_lpa')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-1">
                                        <label type="text" name="" id="" class="form-label">Tahun</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3 mr-3">
                                        <label type="text" name="" id="" class="form-label"
                                            style="font-size: 14px">Bank
                                            Koresponden</label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input id="add_bank_koresponden1" type="text"
                                            class="form-control @error('add_bank_koresponden1') is-invalid @enderror"
                                            name="add_bank_koresponden1" />
                                        @error('add_bank_koresponden1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="col-sm-3">
                                        <input id="add_bank_koresponden2" type="text"
                                            class="form-control @error('add_bank_koresponden2') is-invalid @enderror"
                                            name="add_bank_koresponden2" />
                                        @error('add_bank_koresponden2')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3 mr-3">
                                        <label type="text" name="" id="" class="form-label"
                                            style="font-size: 14px">Data Customer (5
                                            Besar)</label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input id="add_cust1" type="text"
                                            class="form-control @error('add_cust1') is-invalid @enderror"
                                            name="add_cust1" />
                                        @error('add_cust1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-1">
                                    <div class="col-sm-3 mr-3">
                                        <label type="text" name="" id="" class="form-label"></label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input id="add_cust2" type="text"
                                            class="form-control @error('add_cust2') is-invalid @enderror"
                                            name="add_cust2" />
                                        @error('add_cust2')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3 mr-3">
                                        <label type="text" name="" id="" class="form-label"></label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input id="add_cust3" type="text"
                                            class="form-control @error('add_cust3') is-invalid @enderror"
                                            name="add_cust3" />
                                        @error('add_cust3')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3 mr-3">
                                        <label type="text" name="" id="" class="form-label"></label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input id="add_cust4" type="text"
                                            class="form-control @error('add_cust4') is-invalid @enderror"
                                            name="add_cust4" />
                                        @error('add_cust4')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3 mr-3">
                                        <label type="text" name="" id="" class="form-label"></label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input id="add_cust5" type="text"
                                            class="form-control @error('add_cust5') is-invalid @enderror"
                                            name="add_cust5" />
                                        @error('add_cust5')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3 mr-3">
                                        <label type="text" name="" id="" class="form-label"
                                            style="font-size: 14px">Data Supplier (5
                                            Besar)</label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input id="add_sup1" type="text"
                                            class="form-control @error('add_sup1') is-invalid @enderror"
                                            name="add_sup1" />
                                        @error('add_sup1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-1">
                                    <div class="col-sm-3 mr-3">
                                        <label type="text" name="" id="" class="form-label"></label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input id="add_sup2" type="text"
                                            class="form-control @error('add_sup2') is-invalid @enderror"
                                            name="add_sup2" />
                                        @error('add_sup2')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3 mr-3">
                                        <label type="text" name="" id="" class="form-label"></label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input id="add_sup3" type="text"
                                            class="form-control @error('add_sup3') is-invalid @enderror"
                                            name="add_sup3" />
                                        @error('add_sup3')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3 mr-3">
                                        <label type="text" name="" id="" class="form-label"></label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input id="add_sup4" type="text"
                                            class="form-control @error('add_sup4') is-invalid @enderror"
                                            name="add_sup4" />
                                        @error('add_sup4')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3 mr-3">
                                        <label type="text" name="" id="" class="form-label"></label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input id="add_sup5" type="text"
                                            class="form-control @error('add_sup5') is-invalid @enderror"
                                            name="add_sup5" />
                                        @error('add_sup5')
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
            </div> --}}

            {{-- <input type="hidden" name="status" value="waiting approval">
            <input type="hidden" name="status_form" value="Outstanding"> --}}


            <div class="d-flex justify-content-end mt-2 mb-5">
                <div class="col-sm-1">
                    <a href="{{ route('inputan.index') }}" class="btn btn-danger">BACK</a>
                </div>
                <div class="col-sm-1">
                    <button type="submit" class="btn btn-primary" >SAVE</button>
                </div>
            </div>
    </form>


    <script>
        $(document).ready(function() {
            /* Algoritma: return realtime duedate
                1. init `DATE` dan `DUE DATE` ke hari ini.
                2. baca `DEV TYPE`, potong string, ubah ke integer.
                    (opsional: gunakan custom option text)
                3. tambah `DATE` dengan integer.
                4. set `DUE DATE` dari hasil penambahan `DATE` dengan integer.
                5. `DATE` onchange: ulangi step 2,3,4
            */
            // 1.
            // now (0,10): "YYYY-MM-DD"
            // now (0,19): "YYYY-MM-DD HH:mm:ss"
            const date = new Date().toISOString().substr(0, 10).replace('T', ' ');
            $('#tanggal').val(date);
            console.log('now: ' + $('#tanggal').val());
            // 2, 3, 4
            calcDueDate();
            // onchanged elements function call
            $('#dev_model_id').on('change', function(e) {
                calcDueDate();
            });
            $('#tanggal').on('change', function(e) {
                calcDueDate();
            });
        })

        function calcDueDate() {
            // 2.
            let days = $('#dev_model_id option:selected').text(); // get text of selected id_dev
            days = parseInt(days.substring(4, 6));
            // adjust due date
            let adjustedDate = new Date($('#tanggal').val());
            adjustedDate.setDate(adjustedDate.getDate() + days); // 3. adjust
            adjustedDate = adjustedDate.toISOString().substr(0, 10).replace('T', ' '); // format
            $('#due_date').val(adjustedDate); // 4. set
            console.log('adjustedDate: ' + adjustedDate);
        }
    </script>

    @push('after-script')
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
            $("#remove").click(function(){
                let kd05 = $("#kd05_1 .card");
                kd05[kd05.length-1].remove();
            });
        </script>
        <script type="text/html" id="test" class="test">
            <div class="card mt-5" id="">
                    <div class="card-header">
                        KD5 Additional
                    </div>
                    <div class="row">
                        <div class="d-flex justify-content-start my-3 mx-3">
                            <div class="row">
                                <div class="d-flex justify-content-start">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="d-flex flex-row">
                                                <div class="col-sm-3">
                                                    <label type="text" name="" id="" class="form-label">Title</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <select class="selectpicker title1" aria-label="Default select example"
                                                        name="title1[]" data-live-search="true">
                                                        <option selected value="">Open this select menu</option>
                                                        @foreach ($titles as $title)
                                                            @if (old('title1') == $title->title)
                                                                <option data-tokens="{{ $title->title }}" selected>
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
                                            </div>
                                            {{-- <div class="d-flex flex-row mt-2">
                                            <div class="col-sm-3">
                                                <label type="text" name="" id="" class="form-label">Class</label>
                                            </div>
                                            <div class="col-sm-7">
                                                <select class="selectpicker" aria-label="Default select example"
                                                    name="class[]" data-live-search="true">
                                                    <option selected value="">Open this select menu</option>
                                                    
                                                    @foreach ($classes as $class)
                                                        @if (old('class') == $class->class)
                                                            <option data-tokens="{{ $class->class }}" selected>
                                                                {{ $class->class }}
                                                            </option>
                                                        @else
                                                            <option data-tokens="{{ $class->class }}">
                                                                {{ $class->class }}
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
                                        </div> --}}
                                            {{-- <div class="d-flex flex-row mt-2">
                                            <div class="col-sm-3">
                                                <label type="text" name="" id="" class="form-label">Status</label>
                                            </div>
                                            <div class="col-sm-7">
                                                <select class="selectpicker" aria-label="Default select example"
                                                    name="status[]" data-live-search="true">
                                                    <option selected value="">Open this select menu</option>
                                                    <option value="1">Active</option>
                                                    <option value="2">Inactive</option>
                                                </select>
                                                @error('status')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div> --}}
                                            {{-- <div class="d-flex flex-row mt-2">
                                            <div class="col-sm-3">
                                                <label type="text" name="" id="" class="form-label">Short Name</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input id="short_name" type="text"
                                                    class="form-control @error('short_name') is-invalid @enderror"
                                                    name="short_name[]" />
                                                @error('short_name')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div> --}}
                                            <div class="d-flex flex-row mt-2">
                                                <div class="col-sm-3">
                                                    <label type="text" name="" id="" class="form-label">Nama
                                                        1</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input id="nama11" type="text"
                                                        class="form-control @error('nama11') is-invalid @enderror"
                                                        name="nama11[]" />
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
                                                        class="form-control @error('nama21') is-invalid @enderror"
                                                        name="nama21[]" />
                                                    @error('nama21')
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
                                                    <input id="street1" type="text"
                                                        class="form-control @error('street1') is-invalid @enderror"
                                                        name="street1[]" />
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
                                                        style="font-size: 13px">Additional Address</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input id="addit1" type="text"
                                                        class="form-control @error('addit1') is-invalid @enderror"
                                                        name="addit1[]" />
                                                    @error('addit1')
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
                                                    <select class="selectpicker taxt1" aria-label="Default select example"
                                                        name="tax1[]" data-live-search="true">
                                                        <option selected value="">Open this select menu</option>
                                                        @foreach ($taxs as $tax)
                                                            @if (old('tax1') == $tax->tax)
                                                                <option data-tokens="{{ $tax->tax }}" selected>
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


                                            </div>
                                            <div class="d-flex flex-row mt-2">
                                                <div class="col-sm-3">
                                                    <label type="text" name="" id="" class="form-label"
                                                        style="font-size: 13px">Postal Code</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input id="postal_code1" type="text"
                                                        class="form-control @error('postal_code1') is-invalid @enderror"
                                                        name="postal_code1[]" />
                                                    @error('postal_code1')
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
                                                    <label type="text" name="" id="" class="form-label text-center">Addres
                                                        Code</label>
                                                </div>
                                            </div>

                                            <div class="d-flex flex-row mt-2">
                                                <div class="col-sm-5">
                                                    <input id="no_cust1" type="text"
                                                        class="form-control @error('no_cust1') is-invalid @enderror"
                                                        name="no_cust1[]" />
                                                    @error('no_cust1')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="col-sm-6">
                                                    <input id="addresscode1" type="text"
                                                        class="form-control @error('addresscode1') is-invalid @enderror"
                                                        name="addresscode1[]" />
                                                    @error('addresscode1')
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
                                                    <input id="fax1" type="text"
                                                        class="form-control @error('fax1') is-invalid @enderror"
                                                        name="fax1[]" />
                                                    @error('fax1')
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
                                                    <input id="po_box1" type="text"
                                                        class="form-control @error('po_box1') is-invalid @enderror"
                                                        name="po_box1[]" />
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
                                                        class="form-label text-center">Email</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input id="email1" type="text"
                                                        class="form-control @error('email1') is-invalid @enderror"
                                                        name="email1[]" />
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
                                                        class="form-label text-center">Phone</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input id="telp1" type="text"
                                                        class="form-control @error('telp1') is-invalid @enderror"
                                                        name="telp1[]" />
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
                                                        class="form-label text-center">Mobile</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input id="mobile1" type="text"
                                                        class="form-control @error('mobile1') is-invalid @enderror"
                                                        name="mobile1[]" />
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
                                                        class="form-label text-center">Home</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input id="home1" type="text"
                                                        class="form-control @error('home1') is-invalid @enderror"
                                                        name="home1[]" />
                                                    @error('home1')
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
                                                        style="font-size: 13px">Country Code</label>
                                                </div>
                                                <div class="col-sm-6">
                                                    <select class="selectpicker" aria-label="Default select example"
                                                        name="kd5negara1[]" data-live-search="true">
                                                        <option selected value="">Open this select menu</option>
                                                        @foreach ($negaras as $negara)
                                                            @if (old('negara1') == $negara->nama_negara)
                                                                <option data-tokens="{{ $negara->nama_negara }}"
                                                                    selected>
                                                                    {{ $negara->nama_negara }}
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
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="d-flex flex-row mt-2">
                                                <div class="col-sm-2 mr-3">
                                                    <label type="text" name="" id="" class="form-label"
                                                        style="font-size: 15px">Kode
                                                        County</label>
                                                </div>
                                                <div class="col-sm-6">
                                                    <select class="selectpicker" aria-label="Default select example"
                                                        name="kode_county1[]" data-live-search="true">
                                                        <option selected value="">Open this select menu</option>
                                                        @foreach ($kodeCountries as $country)
                                                            @if (old('kode_county1') == $country->kode_county)
                                                                <option data-tokens="{{ $country->kode_county }}"
                                                                    selected>
                                                                    {{ $country->kode_county }}
                                                                </option>
                                                            @else
                                                                <option data-tokens="{{ $country->kode_county }}">
                                                                    {{ $country->kode_county }}
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
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="d-flex flex-row mt-2">
                                                <div class="col-sm-2 mr-3">
                                                    <label type="text" name="" id="" class="form-label">Kota</label>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input id="kota1[]" type="text"
                                                        class="form-control @error('kota1') is-invalid @enderror"
                                                        name="kota1[]" />
                                                    @error('kota1')
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
                                                    <input id="npwp1" type="text"
                                                        class="form-control @error('npwp1') is-invalid @enderror"
                                                        name="npwp1[]" />
                                                        @error('npwp1')
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
                    </div>
                </div>
        </script>
    @endpush
@endsection
