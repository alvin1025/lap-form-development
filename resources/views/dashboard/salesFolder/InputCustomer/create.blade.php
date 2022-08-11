@extends('dashboard.layout.lte')

@section('title', 'Permintaan Input/Ubah Data Customer')

@section('content')

    <h4 class="text-center">@yield('title')</h4>

    <form action="{{ route('customer.store') }}" method="post">
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
        <div class="row">
            <div class="d-flex justify-content-start">
                <div class="col-sm-4">
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
                            <label type="text" name="" id="" class="form-label text-center">Kode Cust</label>
                        </div>
                    </div>
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-5">
                            <input id="no_cust" type="text" class="form-control @error('no_cust') is-invalid @enderror"
                                name="no_cust" />
                            @error('no_cust')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <input id="kode_cust" type="text" class="form-control @error('kode_cust') is-invalid @enderror"
                                name="kode_cust" />
                            @error('kode_cust')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end mb-5">
            <div class="col-sm-1 ">
                <button type="submit" class="btn btn-danger" id="reject">REJECT</button>
                <input type="hidden" name="status" value="Rejected">
                <input type="hidden" name="status_form" value="Rejected">
            </div>
            <div class="col-sm-1">
                <button type="submit" class="btn btn-primary" id="submit">SUBMIT</button>
                <input type="hidden" name="status" value="Waiting Approval">
                <input type="hidden" name="status_form" value="Outstanding">
            </div>
        </div>

        {{-- Nav --}}
        <ul class="nav nav-tabs mt-5" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="kd03-tab" data-bs-toggle="tab" data-bs-target="#kd03" type="button"
                    role="tab" aria-controls="kd03" aria-selected="true">KD03</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="kd06-tab" data-bs-toggle="tab" data-bs-target="#kd06" type="button"
                    role="tab" aria-controls="kd06" aria-selected="false">KD06</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="kd04-tab" data-bs-toggle="tab" data-bs-target="#kd04" type="button"
                    role="tab" aria-controls="kd04" aria-selected="false">KD04</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="kd11-tab" data-bs-toggle="tab" data-bs-target="#kd11" type="button"
                    role="tab" aria-controls="kd11" aria-selected="false">KD11</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="kd14-tab" data-bs-toggle="tab" data-bs-target="#kd14" type="button"
                    role="tab" aria-controls="kd14" aria-selected="false">KD14</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="kd05-tab" data-bs-toggle="tab" data-bs-target="#kd05" type="button"
                    role="tab" aria-controls="kd05" aria-selected="false">KD05</button>
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
                                            <option selected>Open this select menu</option>
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
                                            <option selected>Open this select menu</option>
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
                                        <label type="text" name="" id="" class="form-label">Nama</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="nama" type="text"
                                            class="form-control @error('nama') is-invalid @enderror" name="nama" />
                                        @error('nama')
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
                                        <label type="text" name="" id="" class="form-label">Alamat</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <textarea id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" cols="3"
                                            rows="5"></textarea>
                                        @error('alamat')
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
                                        <label type="text" name="" id="" class="form-label">Negara</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <select class="selectpicker" aria-label="Default select example" name="negara"
                                            data-live-search="true">
                                            <option selected>Open this select menu</option>
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
                                        <label type="text" name="" id="" class="form-label" style="font-size: 15px">Kode
                                            County</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <select class="selectpicker" aria-label="Default select example"
                                            name="kode_country" data-live-search="true">
                                            <option selected>Open this select menu</option>
                                            @foreach ($kodeCountries as $country)
                                                @if (old('kode_country') == $country->nama_negara)
                                                    <option data-tokens="{{ $country->kode_county }}" selected>
                                                        {{ $country->kode_county }}
                                                    </option>
                                                @else
                                                    <option data-tokens="{{ $country->kode_county }}">
                                                        {{ $country->kode_county }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('kode_country')
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
                                        <label type="text" name="" id="" class="form-label">Email</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email" />
                                        @error('email')
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
                                        <label type="text" name="" id="" class="form-label">Telp</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input id="telp" type="text"
                                            class="form-control @error('telp') is-invalid @enderror" name="telp" />
                                        @error('telp')
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
                            <label type="text" name="" id="" class="form-label">SD</label>
                        </div>
                        <div class="col-sm-6">
                            <select class="selectpicker" aria-label="Default select example" name="sd"
                                data-live-search="true">
                                <option selected>Open this select menu</option>
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
                            <label type="text" name="" id="" class="form-label" style="font-size: 10px">Biz
                                Type/Parameter
                                1</label>
                        </div>
                        <div class="col-sm-6">
                            <select class="selectpicker" aria-label="Default select example" name="biz_type_p1"
                                data-live-search="true">
                                <option selected>Open this select menu</option>
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
                <div class="col-sm-8">
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-2 mr-3">
                            <label type="text" name="" id="" class="form-label">Nama Agent</label>
                        </div>
                        <div class="col-sm-6">
                            <input id="nama_agent" type="text"
                                class="form-control @error('nama_agent') is-invalid @enderror" name="nama_agent" />
                            @error('nama_agent')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="col-sm-10">
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
                                <option selected>Open this select menu</option>
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
                <hr class="mt-2">
                <div class="col-sm-8">
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-2 mr-3">
                            <label type="text" name="" id="" class="form-label" style="font-size: 12px">Allowance Qty
                                %</label>
                        </div>
                        <div class="col-sm-6">
                            <input id="allowance_qty" type="text"
                                class="form-control @error('allowance_qty') is-invalid @enderror" name="allowance_qty" />
                            @error('allowance_qty')
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
                                <option selected>Open this select menu</option>
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
                                <option selected>Open this select menu</option>
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
                                <option selected>Open this select menu</option>
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
                                <option selected>Open this select menu</option>
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
                                <option selected>Open this select menu</option>
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
            </div>


            <div class="tab-pane fade" id="kd04" role="tabpanel" aria-labelledby="kd04-tab"> {{-- For Finance --}}
                <h6 class="text-left mt-2">Untuk Finance</h6>
                <hr>
                <div class="col-sm-8">
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-2 mr-3">
                            <label type="text" name="" id="" class="form-label">Credit Limit</label>
                        </div>
                        <div class="col-sm-6">
                            <select class="selectpicker" aria-label="Default select example" name="credit_limit"
                                data-live-search="true">
                                <option selected>Open this select menu</option>
                                @foreach ($credits as $credit)
                                    @if (old('credit_limit') == $credit->credit_limit)
                                        <option data-tokens="{{ $credit->credit_limit }}" selected>
                                            {{ $credit->credit_limit }}
                                        </option>
                                    @else
                                        <option data-tokens="{{ $credit->credit_limit }}">{{ $credit->credit_limit }}
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
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-2 mr-3">
                            <label type="text" name="" id="" class="form-label">Pay Term</label>
                        </div>
                        <div class="col-sm-6">
                            <select class="selectpicker" aria-label="Default select example" name="payterm"
                                data-live-search="true">
                                <option selected>Open this select menu</option>
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
                </div>
            </div>


            <div class="tab-pane fade" id="kd11" role="tabpanel" aria-labelledby="kd11-tab">
                <div class="col-sm-8">
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
                </div>
                <hr class="mt-2">
                <div class="col-sm-10">
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
                </div>
            </div>



            <div class="tab-pane fade" id="kd14" role="tabpanel" aria-labelledby="kd14-tab">
                {{-- KD14 PIC/Contact Person --}}
                <h6 class="text-left mt-2">KD14 PIC/Contact Person</h6>
                <hr>
                <div class="col-sm-10">
                    <div class="d-flex flex-row text-center">
                        <div class="col-sm-3 ">
                            <label type="text" name="" id="" class="form-label">Title (Mr/Ms)</label>
                        </div>
                        <div class="col-sm-3">
                            <label type="text" name="" id="" class="form-label">Nama</label>
                        </div>
                        <div class="col-sm-3">
                            <label type="text " name="" id="" class="form-label text-center">Jabatan</label>
                        </div>
                        <div class="col-sm-2">
                            <label type="text " name="" id="" class="form-label text-center">Phone</label>
                        </div>
                        <div class="col-sm-2">
                            <label type="text " name="" id="" class="form-label text-center">Email</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="d-flex flex-row text-center">
                        <div class="col-sm- mr-1">
                            <select class="selectpicker" aria-label="Default select example" name="title1"
                                data-live-search="true">
                                <option selected>Open this select menu</option>
                                @foreach ($titles as $title)
                                    @if (old('title') == $title->title)
                                        <option data-tokens="{{ $title->title }}" selected>{{ $title->title }}
                                        </option>
                                    @else
                                        <option data-tokens="{{ $title->title }}">{{ $title->title }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('title1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-3">
                            <input class="form-control" type="text" id="nama_cp1" name="nama_cp1">
                        </div>
                        <div class="col-sm-3">
                            <input class="form-control" type="text" id="jabatan_cp1" name="jabatan_cp1">
                        </div>
                        <div class="col-sm-2">
                            <input class="form-control" type="text" id="phone_cp1" name="phone_cp1">
                        </div>
                        <div class="col-sm-2">
                            <input class="form-control" type="text" id="email_cp1" name="email_cp1">
                        </div>
                    </div>
                </div>
            </div>

            {{-- KD05 --}}
            <div class="tab-pane fade" id="kd05" role="tabpanel" aria-labelledby="kd05-tab">
                <div class="row">
                    <div class="d-flex justify-content-start">
                        <div class="row">
                            <h6 class="text-left">KD05 Additional Address</h6>
                            <hr>
                            <div class="col-sm-6">
                                <div class="d-flex flex-row">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id="" class="form-label">Title</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <select class="selectpicker" aria-label="Default select example"
                                            name="kd5_title1" data-live-search="true">
                                            <option selected>Open this select menu</option>
                                            @foreach ($titles as $title)
                                                @if (old('kd5_title1') == $title->title)
                                                    <option data-tokens="{{ $title->title }}" selected>
                                                        {{ $title->title }}
                                                    </option>
                                                @else
                                                    <option data-tokens="{{ $title->title }}">{{ $title->title }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('kd5_title1')
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
                                    <div class="col-sm-8">
                                        <select class="selectpicker" aria-label="Default select example"
                                            name="kd5_class1" data-live-search="true">
                                            <option selected>Open this select menu</option>
                                            @foreach ($classes as $class)
                                                @if (old('kd5_class1') == $class->class)
                                                    <option data-tokens="{{ $class->class }}" selected>
                                                        {{ $class->class }}
                                                    </option>
                                                @else
                                                    <option data-tokens="{{ $class->class }}">{{ $class->class }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('kd5_class1')
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
                                        <input id="kd5_nama1" type="text"
                                            class="form-control @error('kd5_nama1') is-invalid @enderror"
                                            name="kd5_nama1" />
                                        @error('kd5_nama1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
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
                                        <label type="text" name="" id="" class="form-label text-center">Kode Cust</label>
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-5">
                                        <input id="kd5_no_cust1" type="text"
                                            class="form-control @error('kd5_no_cust1') is-invalid @enderror"
                                            name="kd5_no_cust1" />
                                        @error('kd5_no_cust1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <input id="kd5_kode_cust1" type="text"
                                            class="form-control @error('kd5_kode_cust1') is-invalid @enderror"
                                            name="kd5_kode_cust1" />
                                        @error('kd5_kode_cust1')
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
                                        <label type="text" name="" id="" class="form-label">Alamat</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <textarea id="kd5_alamat1" type="text" class="form-control @error('kd5_alamat1') is-invalid @enderror"
                                            name="kd5_alamat1" cols="3" rows="5"></textarea>
                                        @error('kd5_alamat1')
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
                                        <label type="text" name="" id="" class="form-label">Negara</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <select class="selectpicker" aria-label="Default select example"
                                            name="kd5_negara1" data-live-search="true">
                                            <option selected>Open this select menu</option>
                                            @foreach ($negaras as $negara)
                                                @if (old('kd5_negara1') == $negara->nama_negara)
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
                                        @error('kd5_negara1')
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
                                            Country</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <select class="selectpicker" aria-label="Default select example"
                                            name="kd5_kode_country1" data-live-search="true">
                                            <option selected>Open this select menu</option>
                                            @foreach ($kodeCountries as $country)
                                                @if (old('kd5_kode_country1') == $country->nama_negara)
                                                    <option data-tokens="{{ $country->kode_county }}" selected>
                                                        {{ $country->kode_county }}
                                                    </option>
                                                @else
                                                    <option data-tokens="{{ $country->kode_county }}">
                                                        {{ $country->kode_county }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('kd5_kode_country1')
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
                                        <input id="kd5_kota1" type="text"
                                            class="form-control @error('kd5_kota1') is-invalid @enderror"
                                            name="kd5_kota1" />
                                        @error('kd5_kota1')
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
                                        <label type="text" name="" id="" class="form-label">Email</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input id="kd5_email1" type="email"
                                            class="form-control @error('kd5_email1') is-invalid @enderror"
                                            name="kd5_email1" />
                                        @error('kd5_email1')
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
                                        <label type="text" name="" id="" class="form-label">Telp</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input id="kd5_telp1" type="text"
                                            class="form-control @error('kd5_telp1') is-invalid @enderror"
                                            name="kd5_telp1" />
                                        @error('kd5_telp1')
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
                                        <input id="kd5_npwp1" type="text"
                                            class="form-control @error('kd5_npwp1') is-invalid @enderror"
                                            name="kd5_npwp1" />
                                        @error('kd5_npwp1')
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
                <div class="row">
                    <div class="d-flex justify-content-start">
                        <div class="row">
                            <h6 class="text-left mt-5">KD05 Additional Address</h6>
                            <hr>
                            <div class="col-sm-6">
                                <div class="d-flex flex-row">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id="" class="form-label">Title</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <select class="selectpicker" aria-label="Default select example"
                                            name="kd5_title2" data-live-search="true">
                                            <option selected>Open this select menu</option>
                                            @foreach ($titles as $title)
                                                @if (old('kd5_title2') == $title->title)
                                                    <option data-tokens="{{ $title->title }}" selected>
                                                        {{ $title->title }}
                                                    </option>
                                                @else
                                                    <option data-tokens="{{ $title->title }}">{{ $title->title }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('kd5_title2')
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
                                    <div class="col-sm-8">
                                        <select class="selectpicker" aria-label="Default select example"
                                            name="kd5_class2" data-live-search="true">
                                            <option selected>Open this select menu</option>
                                            @foreach ($classes as $class)
                                                @if (old('kd5_class2') == $class->class)
                                                    <option data-tokens="{{ $class->class }}" selected>
                                                        {{ $class->class }}
                                                    </option>
                                                @else
                                                    <option data-tokens="{{ $class->class }}">{{ $class->class }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('kd5_class2')
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
                                        <input id="kd5_nama2" type="text"
                                            class="form-control @error('kd5_nama2') is-invalid @enderror"
                                            name="kd5_nama2" />
                                        @error('kd5_nama2')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
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
                                        <label type="text" name="" id="" class="form-label text-center">Kode Cust</label>
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-5">
                                        <input id="kd05_no_cust2" type="text"
                                            class="form-control @error('kd05_no_cust2') is-invalid @enderror"
                                            name="kd05_no_cust2" />
                                        @error('kd05_no_cust2')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <input id="kd05_kode_cust2" type="text"
                                            class="form-control @error('kd05_kode_cust2') is-invalid @enderror"
                                            name="kd05_kode_cust2" />
                                        @error('kd05_kode_cust2')
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
                                        <label type="text" name="" id="" class="form-label">Alamat</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <textarea id="kd5_alamat2" type="text" class="form-control @error('kd5_alamat2') is-invalid @enderror"
                                            name="kd5_alamat2" cols="3" rows="5"></textarea>
                                        @error('kd5_alamat2')
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
                                        <label type="text" name="" id="" class="form-label">Negara</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <select class="selectpicker" aria-label="Default select example"
                                            name="kd5_negara2" data-live-search="true">
                                            <option selected>Open this select menu</option>
                                            @foreach ($negaras as $negara)
                                                @if (old('kd5_negara2') == $negara->nama_negara)
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
                                        @error('kd5_negara2')
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
                                            Country</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <select class="selectpicker" aria-label="Default select example"
                                            name="kd5_kode_country2" data-live-search="true">
                                            <option selected>Open this select menu</option>
                                            @foreach ($kodeCountries as $country)
                                                @if (old('kd5_kode_country2') == $country->nama_negara)
                                                    <option data-tokens="{{ $country->kode_county }}" selected>
                                                        {{ $country->kode_county }}
                                                    </option>
                                                @else
                                                    <option data-tokens="{{ $country->kode_county }}">
                                                        {{ $country->kode_county }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('kd5_kode_country2')
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
                                        <input id="kd5_kota2" type="text"
                                            class="form-control @error('kd5_kota2') is-invalid @enderror"
                                            name="kd5_kota2" />
                                        @error('kd5_kota2')
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
                                        <label type="text" name="" id="" class="form-label">Email</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input id="kd5_email2" type="email"
                                            class="form-control @error('kd5_email2') is-invalid @enderror"
                                            name="kd5_email2" />
                                        @error('kd5_email2')
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
                                        <label type="text" name="" id="" class="form-label">Telp</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input id="kd5_telp2" type="text"
                                            class="form-control @error('kd5_telp2') is-invalid @enderror"
                                            name="kd5_telp2" />
                                        @error('kd5_telp2')
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
                                        <input id="kd5_npwp2" type="text"
                                            class="form-control @error('kd5_npwp2') is-invalid @enderror"
                                            name="kd5_npwp2" />
                                        @error('kd5_npwp2')
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
                <div class="row">
                    <div class="d-flex justify-content-start">
                        <div class="row">
                            <h6 class="text-left mt-5">KD05 Additional Address</h6>
                            <hr>
                            <div class="col-sm-6">
                                <div class="d-flex flex-row">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id="" class="form-label">Title</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <select class="selectpicker" aria-label="Default select example"
                                            name="kd5_title3" data-live-search="true">
                                            <option selected>Open this select menu</option>
                                            @foreach ($titles as $title)
                                                @if (old('kd5_title3') == $title->title)
                                                    <option data-tokens="{{ $title->title }}" selected>
                                                        {{ $title->title }}
                                                    </option>
                                                @else
                                                    <option data-tokens="{{ $title->title }}">{{ $title->title }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('kd5_title3')
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
                                    <div class="col-sm-8">
                                        <select class="selectpicker" aria-label="Default select example"
                                            name="kd5_class3" data-live-search="true">
                                            @foreach ($classes as $class)
                                                @if (old('kd5_class3') == $class->class)
                                                    <option data-tokens="{{ $class->class }}" selected>
                                                        {{ $class->class }}
                                                    </option>
                                                @else
                                                    <option data-tokens="{{ $class->class }}">{{ $class->class }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('kd5_class3')
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
                                        <input id="kd5_nama3" type="text"
                                            class="form-control @error('kd5_nama3') is-invalid @enderror"
                                            name="kd5_nama3" />
                                        @error('kd5_nama3')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
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
                                        <label type="text" name="" id="" class="form-label text-center">Kode Cust</label>
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-5">
                                        <input id="kd5_no_cust3" type="text"
                                            class="form-control @error('kd5_no_cust3') is-invalid @enderror"
                                            name="kd5_no_cust3" />
                                        @error('kd5_no_cust3')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <input id="kd5_kode_cust3" type="text"
                                            class="form-control @error('kd5_kode_cust3') is-invalid @enderror"
                                            name="kd5_kode_cust3" />
                                        @error('kd5_kode_cust3')
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
                                        <label type="text" name="" id="" class="form-label">Alamat</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <textarea id="kd5_alamat3" type="text" class="form-control @error('kd5_alamat3') is-invalid @enderror"
                                            name="kd5_alamat3" cols="3" rows="5"></textarea>
                                        @error('kd5_alamat3')
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
                                        <label type="text" name="" id="" class="form-label">Negara</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <select class="selectpicker" aria-label="Default select example"
                                            name="kd5_negara3" data-live-search="true">
                                            <option selected>Open this select menu</option>
                                            @foreach ($negaras as $negara)
                                                @if (old('kd5_negara3') == $negara->nama_negara)
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
                                        @error('kd5_negara3')
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
                                            Country</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <select class="selectpicker" aria-label="Default select example"
                                            name="kd5_kode_country3" data-live-search="true">
                                            <option selected>Open this select menu</option>
                                            @foreach ($kodeCountries as $country)
                                                @if (old('kd5_kode_country3') == $country->nama_negara)
                                                    <option data-tokens="{{ $country->kode_county }}" selected>
                                                        {{ $country->kode_county }}
                                                    </option>
                                                @else
                                                    <option data-tokens="{{ $country->kode_county }}">
                                                        {{ $country->kode_county }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('kd5_kode_country3')
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
                                        <input id="kd5_kota3" type="text"
                                            class="form-control @error('kd5_kota3') is-invalid @enderror"
                                            name="kd5_kota3" />
                                        @error('kd5_kota3')
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
                                        <label type="text" name="" id="" class="form-label">Email</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input id="kd5_email3" type="text"
                                            class="form-control @error('kd5_email3') is-invalid @enderror"
                                            name="kd5_email3" />
                                        @error('kd5_email3')
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
                                        <label type="text" name="" id="" class="form-label">Telp</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input id="kd5_telp3" type="text"
                                            class="form-control @error('kd5_telp3') is-invalid @enderror"
                                            name="kd5_telp3" />
                                        @error('kd5_telp3')
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
                                        <input id="kd5_npwp3" type="text"
                                            class="form-control @error('kd5_npwp3') is-invalid @enderror"
                                            name="kd5_npwp3" />
                                        @error('kd5_npwp3')
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
                                            <option selected>Open this select menu</option>
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
                                            <option selected>Open this select menu</option>
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
                                            <option selected>Open this select menu</option>
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
                                            <option selected>Open this select menu</option>
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
                                            <option selected>Open this select menu</option>
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
                                            <option selected>Open this select menu</option>
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


            <div class="d-flex justify-content-end mb-5">
                <div class="col-sm-1 ">
                    <button type="submit" class="btn btn-danger" id="reject">REJECT</button>
                    <input type="hidden" name="status" value="Rejected">
                    <input type="hidden" name="status_form" value="Rejected">
                </div>
                <div class="col-sm-1">
                    <button type="submit" class="btn btn-primary" id="submit">SUBMIT</button>
                    <input type="hidden" name="status" value="Waiting Approval">
                    <input type="hidden" name="status_form" value="Outstanding">
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
@endsection
