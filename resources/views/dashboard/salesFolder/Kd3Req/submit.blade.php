@extends('dashboard.layout.lte')

@section('title', 'Customer Data KD03 Request')

@section('content')

    <form action="{{ route('updateSubmit', ['no_cust' => $no_cust]) }}" method="post">
        @csrf
        @method('put')


        <div class="card-body">
            <div class="row">
                <div class="d-flex justify-content-start">
                    <div class="col-sm-7">
                        <div class="row">
                            <label class="col-sm-3 col-form-label my-2"></label>
                            <div class="col-sm-7 my-2">
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-sm-4">
                            <div class="mb-3 row">
                                <label class="col-sm-5 col-form-label my-2"></label>
                                <div class="col-sm-7 my-2">
                                    <input id="tanggal" type="date"
                                        class="form-control @error('tanggal') is-invalid @enderror" name="tanggal"
                                        value="{{ $kd03->tanggal }}" disabled />
                                    @error('tanggal')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div> --}}
                </div>
                <h4 style="font-weight: bold;" class="text-center">Form Permintaan Input Cust Baru / Perubahan Data
                    Cust
                </h4>

                <div class="card">
                    <div class="card-header">
                        KD03 Master
                    </div>
                    <div class="card-body">
                        @foreach ($kd03 as $kd03)
                            <hr>
                            <div class="d-flex justify-content-between">
                                <div class="col-sm-6">
                                    <div class="d-flex flex-row my-2">
                                        <div class="col-sm-5">
                                            <label type="text" name="" id=""
                                                class="form-label text-center">No Cust</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label type="text" name="" id=""
                                                class="form-label text-center">Kode
                                                Cust</label>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row my-2">
                                        <div class="col-sm-5">
                                            <input id="no_cust" type="text"
                                                class="form-control @error('no_cust') is-invalid @enderror" name="no_cust"
                                                value="{{ $kd03->no_cust }}"
                                                style="{{ $kd03->no_cust == null ? 'color:red' : '' }}" disabled />
                                            @error('no_cust')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-sm-6">
                                            <input id="kode_cust" type="text"
                                                class="form-control @error('kode_cust') is-invalid @enderror"
                                                name="kode_cust" value="{{ $kd03->short_name ?? 'Data Belum Lengkap!' }}"
                                                style="{{ $kd03->short_name == null ? 'color:red' : '' }}" disabled />
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
                                            <input type="text" class="form-control"
                                                value="{{ $kd03->title ?? 'Data Belum Lengkap!' }}"
                                                style="{{ $kd03->title == null ? 'color:red' : '' }}" disabled>
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
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control"
                                                value="{{ $kd03->class ?? 'Data Belum Lengkap!' }}"
                                                style="{{ $kd03->class == null ? 'color:red' : '' }}" disabled>
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
                                                class="form-label">Nama</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input id="nama" type="text"
                                                class="form-control @error('nama') is-invalid @enderror" name="nama"
                                                value="{{ $kd03->nama1 ?? 'Data Belum Lengkap!' }}"
                                                style="{{ $kd03->nama1 == null ? 'color:red' : '' }}" disabled />
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
                                                value="{{ $kd03->nama2 ?? 'Data Belum Lengkap!' }}"
                                                style="{{ $kd03->nama2 == null ? 'color:red' : '' }}" disabled />
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
                                                class="form-label">Alamat</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input id="kode_cust" type="text"
                                                class="form-control @error('kode_cust') is-invalid @enderror"
                                                name="kode_cust" value="{{ $kd03->street ?? 'Data Belum Lengkap!' }}"
                                                style="{{ $kd03->street == null ? 'color:red' : '' }}" disabled />
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
                                            <input id="addit" type="text"
                                                class="form-control @error('addit') is-invalid @enderror" name="addit"
                                                value="{{ $kd03->addit ?? 'Data Belum Lengkap!' }}"
                                                style="{{ $kd03->addit == null ? 'color:red' : '' }}" disabled />
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
                                                class="form-label">Country</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input id="kode_cust" type="text"
                                                class="form-control @error('kode_cust') is-invalid @enderror"
                                                name="kode_cust" value="{{ $kd03->negara ?? 'Data Belum Lengkap!' }}"
                                                style="{{ $kd03->negara == null ? 'color:red' : '' }}" disabled />
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
                                            <input id="kode_cust" type="text"
                                                class="form-control @error('kode_cust') is-invalid @enderror"
                                                name="kode_cust"
                                                value="{{ $kd03->kode_county ?? 'Data Belum Lengkap!' }}"
                                                style="{{ $kd03->kode_county == null ? 'color:red' : '' }}" disabled />
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
                                                value="{{ $kd03->kota ?? 'Data Belum Lengkap!' }}"
                                                style="{{ $kd03->kota == null ? 'color:red' : '' }}" disabled />
                                            @error('kota')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="d-flex flex-row">
                                        <div class="col-sm-2 mr-3">
                                            <label type="text" name="" id=""
                                                class="form-label"></label>
                                        </div>
                                        <div class="col-sm-6">

                                        </div>
                                    </div>
                                    <div class="d-flex flex-row">
                                        <div class="col-sm-2 mr-3">
                                            <label type="text" name="" id=""
                                                class="form-label"></label>
                                        </div>
                                        <div class="col-sm-6">

                                        </div>
                                    </div>
                                    <div class="d-flex flex-row">
                                        <div class="col-sm-2 mr-3">
                                            <label type="text" name="" id=""
                                                class="form-label"></label>
                                        </div>
                                        <div class="col-sm-6">

                                        </div>
                                    </div>
                                    <div class="d-flex flex-row mt-4">
                                        <div class="col-sm-2 mr-3">
                                            <label type="text" name="" id="" class="form-label"
                                                style="font-size: 12px">Postal
                                                Code</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input id="postal_code" type="postal_code"
                                                class="form-control @error('postal_code') is-invalid @enderror"
                                                name="postal_code"
                                                value="{{ $kd03->postal_code ?? 'Data Belum Lengkap!' }}"
                                                style="{{ $kd03->postal_code == null ? 'color:red' : '' }}" disabled />
                                            @error('postal_code')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-2 mr-3">
                                            <label type="text" name="" id=""
                                                class="form-label">Email</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ $kd03->email ?? 'Data Belum Lengkap!' }}"
                                                style="{{ $kd03->email == null ? 'color:red' : '' }}" disabled />
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-2 mr-3">
                                            <label type="text" name="" id=""
                                                class="form-label">Fax</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input id="fax" type="text"
                                                class="form-control @error('fax') is-invalid @enderror" name="fax"
                                                value="{{ $kd03->fax ?? 'Data Belum Lengkap!' }}"
                                                style="{{ $kd03->fax == null ? 'color:red' : '' }}" disabled />
                                            @error('fax')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-2 mr-3">
                                            <label type="text" name="" id=""
                                                class="form-label">Telp</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input id="telp" type="text"
                                                class="form-control @error('telp') is-invalid @enderror" name="telp"
                                                value="{{ $kd03->telp ?? 'Data Belum Lengkap!' }}"
                                                style="{{ $kd03->telp == null ? 'color:red' : '' }}" disabled />
                                            @error('telp')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-2 mr-3">
                                            <label type="text" name="" id=""
                                                class="form-label">Mobile</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input id="mobile" type="text"
                                                class="form-control @error('mobile') is-invalid @enderror" name="mobile"
                                                value="{{ $kd03->mobile ?? 'Data Belum Lengkap!' }}"
                                                style="{{ $kd03->mobile == null ? 'color:red' : '' }}" disabled />
                                            @error('mobile')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-2 mr-3">
                                            <label type="text" name="" id="" class="form-label">PO
                                                BOX</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input id="po_box" type="text"
                                                class="form-control @error('po_box') is-invalid @enderror" name="po_box"
                                                value="{{ $kd03->po_box ?? 'Data Belum Lengkap!' }}"
                                                style="{{ $kd03->po_box == null ? 'color:red' : '' }}" disabled />
                                            @error('po_box')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-2 mr-3">
                                            <label type="text" name="" id=""
                                                class="form-label">NPWP</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input id="npwp" type="text"
                                                class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                                value="{{ $kd03->npwp ?? 'Data Belum Lengkap!' }}"
                                                style="{{ $kd03->npwp == null ? 'color:red' : '' }}" disabled />
                                            @error('npwp')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>




                <hr class="mt-2">
                <div class="card">
                    <div class="card-header">
                        KD04
                    </div>
                    <div class="card-body">
                        @foreach ($kd04 as $kd04)
                            <hr>
                            <div class="col-sm-6">
                                <div class="d-flex flex-row my-2">
                                    <div class="col-sm-5">
                                        <label type="text" name="" id=""
                                            class="form-label text-center">No Cust</label>
                                    </div>

                                </div>
                                <div class="d-flex flex-row my-2">
                                    <div class="col-sm-5">
                                        <input id="no_cust" type="text"
                                            class="form-control @error('no_cust') is-invalid @enderror" name="no_cust"
                                            value="{{ $kd04->kd4no_cust }}"
                                            style="{{ $kd04->kd4no_cust == null ? 'color:red' : '' }}" disabled />
                                        @error('no_cust')
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
                                        <label type="text" name="" id="" class="form-label">No
                                            Debitor</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input id="no_debitor" type="text"
                                            class="form-control @error('no_debitor') is-invalid @enderror"
                                            name="no_debitor" value="{{ $kd04->no_debitor ?? 'Data Belum Lengkap!' }}"
                                            style="{{ $kd04->no_debitor == null ? 'color:red' : '' }}" disabled />
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
                                        <label type="text" name="" id="" class="form-label">No
                                            Creditor</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input id="no_creditor" type="text"
                                            class="form-control @error('no_creditor') is-invalid @enderror"
                                            name="no_creditor"
                                            value="{{ $kd04->no_creditor ?? 'Data Belum Lengkap!' }}"
                                            style="{{ $kd04->no_creditor == null ? 'color:red' : '' }}" disabled />
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
                                        <label type="text" name="" id="" class="form-label">No Group
                                            Cust</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input id="no_group_cust" type="text"
                                            class="form-control @error('no_group_cust') is-invalid @enderror"
                                            name="no_group_cust"
                                            value="{{ $kd04->no_group_cust ?? 'Data Belum Lengkap!' }}"
                                            style="{{ $kd04->no_group_cust == null ? 'color:red' : '' }}" disabled />
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
                                        <label type="text" name="" id="" class="form-label">Credit
                                            Cust</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input id="credit_cust" type="text"
                                            class="form-control @error('credit_cust') is-invalid @enderror"
                                            name="credit_cust"
                                            value="{{ $kd04->credit_cust ?? 'Data Belum Lengkap!' }}"
                                            style="{{ $kd04->credit_cust == null ? 'color:red' : '' }}" disabled />
                                        @error('credit_cust')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-around my-3">
                                <div class="col-sm-4">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-3 mr-5">
                                            <label type="text" name="" id="" class="form-label"
                                                style="font-size: 13px">Credit
                                                Limit</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input id="credit_limit" type="text"
                                                class="form-control @error('credit_limit') is-invalid @enderror"
                                                name="credit_limit"
                                                value="{{ $kd04->credit_limit ?? 'Data Belum Lengkap!' }}"
                                                style="{{ $kd04->credit_limit == null ? 'color:red' : '' }}" disabled />
                                            @error('credit_limit')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-3 mr-3">
                                            <label type="text" name="" id="" class="form-label"
                                                style="font-size: 13px">Credit
                                                Period From</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input id="credit_from" type="text"
                                                class="form-control @error('credit_from') is-invalid @enderror"
                                                name="credit_from"
                                                value="{{ $kd04->credit_from ?? 'Data Belum Lengkap!' }}"
                                                style="{{ $kd04->credit_from == null ? 'color:red' : '' }}" disabled />
                                            @error('credit_from')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-3 mr-3">
                                            <label type="text" name="" id="" class="form-label"
                                                style="font-size: 13px">Credit
                                                Period To</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input id="credit_to" type="text"
                                                class="form-control @error('credit_to') is-invalid @enderror"
                                                name="credit_to"
                                                value="{{ $kd04->credit_to ?? 'Data Belum Lengkap!' }}"
                                                style="{{ $kd04->credit_to == null ? 'color:red' : '' }}" disabled />
                                            @error('credit_to')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3 mr-2">
                                        <label type="text" name="" id="" class="form-label"
                                            style="font-size: 12px">Credit
                                            Line
                                            Check</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="credit_line_check" type="text"
                                            class="form-control @error('credit_line_check') is-invalid @enderror"
                                            name="credit_line_check"
                                            value="{{ $kd04->credit_line_check ?? 'Data Belum Lengkap!' }}"
                                            style="{{ $kd04->credit_line_check == null ? 'color:red' : '' }}"
                                            disabled />
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
                                    <div class="col-sm-2 mr-4">
                                        <label type="text" name="" id="" class="form-label"
                                            style="font-size: 12px">Block
                                            Delivery</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input id="block_delivery" type="text"
                                            class="form-control @error('block_delivery') is-invalid @enderror"
                                            name="block_delivery"
                                            value="{{ $kd04->block_delivery ?? 'Data Belum Lengkap!' }}"
                                            style="{{ $kd04->block_delivery == null ? 'color:red' : '' }}" disabled />
                                        @error('block_delivery')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-sm-6">
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3 mr-2">
                                        <label type="text" name="" id="" class="form-label"
                                            style="font-size: 12px">Block</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input id="block" type="text"
                                            class="form-control @error('block') is-invalid @enderror" name="block"
                                            value="{{ $kd04->block ?? 'Data Belum Lengkap!' }}"
                                            style="{{ $kd04->block == null ? 'color:red' : '' }}" disabled />
                                        @error('block')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div> --}}
                            <div class="col-sm-8">
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-2 mr-4">
                                        <label type="text" name="" id="" class="form-label"
                                            style="font-size: 12px">Block
                                            Reason</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input id="block_reason" type="text"
                                            class="form-control @error('block_reason') is-invalid @enderror"
                                            name="block_reason"
                                            value="{{ $kd04->block_reason ?? 'Data Belum Lengkap!' }}"
                                            style="{{ $kd04->block_reason == null ? 'color:red' : '' }}" disabled />
                                        @error('block_reason')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                {{-- For Finance --}}
                <div class="card">
                    <div class="card-header">
                        KD05
                    </div>
                    <div class="card-body">
                        @foreach ($kd05 as $kd05)
                            <div class="row">
                                <div class="d-flex justify-content-start">
                                    <div class="row">
                                        <hr>
                                        <h6 class="text-left mt-3">KD05 Additional Address</h6>
                                        <hr>
                                        <div class="col-sm-6">
                                            <div class="d-flex flex-row my-2">
                                                <div class="col-sm-5">
                                                    <label type="text" name="" id=""
                                                        class="form-label text-center">No
                                                        Cust</label>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label type="text" name="" id=""
                                                        class="form-label text-center">Kode
                                                        Cust</label>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row my-2">
                                                <div class="col-sm-5">
                                                    <input id="no_cust1" type="text"
                                                        class="form-control @error('no_cust1') is-invalid @enderror"
                                                        name="no_cust1" value="{{ $kd05->no_cust1 }}"
                                                        style="{{ $kd05->no_cust1 == null ? 'color:red' : '' }}"
                                                        disabled />
                                                    @error('no_cust1')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="col-sm-6">
                                                    <input id="kode_cust" type="text"
                                                        class="form-control @error('kode_cust') is-invalid @enderror"
                                                        name="kode_cust"
                                                        value="{{ $kd05->addresscode1 ?? 'Data Belum Lengkap!' }}"
                                                        style="{{ $kd05->addresscode1 == null ? 'color:red' : '' }}"
                                                        disabled />
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
                                                    <input type="text" class="form-control"
                                                        value="{{ $kd05->title1 ?? 'Data Belum Lengkap!' }}"
                                                        style="{{ $kd05->title1 == null ? 'color:red' : '' }}" disabled>
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
                                                    <input id="nama" type="text"
                                                        class="form-control @error('nama') is-invalid @enderror"
                                                        name="nama"
                                                        value="{{ $kd05->nama11 ?? 'Data Belum Lengkap!' }}"
                                                        style="{{ $kd05->nama11 == null ? 'color:red' : '' }}"
                                                        disabled />
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
                                                        class="form-label">Nama 2</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input id="nama" type="text"
                                                        class="form-control @error('nama') is-invalid @enderror"
                                                        name="nama"
                                                        value="{{ $kd05->nama21 ?? 'Data Belum Lengkap!' }}"
                                                        style="{{ $kd05->nama21 == null ? 'color:red' : '' }}"
                                                        disabled />
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
                                                        class="form-label">Alamat</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input id="kode_cust" type="text"
                                                        class="form-control @error('kode_cust') is-invalid @enderror"
                                                        name="kode_cust"
                                                        value="{{ $kd05->street1 ?? 'Data Belum Lengkap!' }}"
                                                        style="{{ $kd05->street1 == null ? 'color:red' : '' }}"
                                                        disabled />
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
                                                        class="form-label" style="font-size: 12px">Additional
                                                        Address</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input id="addit1" type="text"
                                                        class="form-control @error('addit1') is-invalid @enderror"
                                                        name="addit1"
                                                        value="{{ $kd05->addit1 ?? 'Data Belum Lengkap!' }}"
                                                        style="{{ $kd05->addit1 == null ? 'color:red' : '' }}"
                                                        disabled />
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
                                                        class="form-label">County</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input id="kode_cust" type="text"
                                                        class="form-control @error('kode_cust') is-invalid @enderror"
                                                        name="kode_cust"
                                                        value="{{ $kd05->kd5negara1 ?? 'Data Belum Lengkap!' }}"
                                                        style="{{ $kd05->kd5negara1 == null ? 'color:red' : '' }}"
                                                        disabled />
                                                    @error('kd5negara1')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row mt-2">
                                                <div class="col-sm-3">
                                                    <label type="text" name="" id=""
                                                        class="form-label" style="font-size: 15px">Freight</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input id="kode_cust" type="text"
                                                        class="form-control @error('kode_cust') is-invalid @enderror"
                                                        name="kode_cust"
                                                        value="{{ $kd05->kode_county1 ?? 'Data Belum Lengkap!' }}"
                                                        style="{{ $kd05->kode_county1 == null ? 'color:red' : '' }}"
                                                        disabled />
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
                                                        class="form-control @error('kota') is-invalid @enderror"
                                                        name="kota"
                                                        value="{{ $kd05->kota1 ?? 'Data Belum Lengkap!' }}"
                                                        style="{{ $kd05->kota1 == null ? 'color:red' : '' }}"
                                                        disabled />
                                                    @error('kota')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="d-flex flex-row">
                                                <div class="col-sm-2 mr-3">
                                                    <label type="text" name="" id=""
                                                        class="form-label"></label>
                                                </div>
                                                <div class="col-sm-6">

                                                </div>
                                            </div>
                                            <div class="d-flex flex-row">
                                                <div class="col-sm-2 mr-3">
                                                    <label type="text" name="" id=""
                                                        class="form-label"></label>
                                                </div>
                                                <div class="col-sm-6">

                                                </div>
                                            </div>
                                            <div class="d-flex flex-row">
                                                <div class="col-sm-2 mr-3">
                                                    <label type="text" name="" id=""
                                                        class="form-label"></label>
                                                </div>
                                                <div class="col-sm-6">

                                                </div>
                                            </div>
                                            <div class="d-flex flex-row mt-4">
                                                <div class="col-sm-2 mr-3">
                                                    <label type="text" name="" id=""
                                                        class="form-label" style="font-size: 12px">Postal
                                                        Code</label>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input id="postal_code1" type="postal_code1"
                                                        class="form-control @error('postal_code1') is-invalid @enderror"
                                                        name="postal_code1"
                                                        value="{{ $kd05->postal_code1 ?? 'Data Belum Lengkap!' }}"
                                                        style="{{ $kd05->postal_code1 == null ? 'color:red' : '' }}"
                                                        disabled />
                                                    @error('postal_code1')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row mt-2">
                                                <div class="col-sm-2 mr-3">
                                                    <label type="text" name="" id=""
                                                        class="form-label">Email</label>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input id="email" type="email"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        name="email"
                                                        value="{{ $kd05->email1 ?? 'Data Belum Lengkap!' }}"
                                                        style="{{ $kd05->email1 == null ? 'color:red' : '' }}"
                                                        disabled />
                                                    @error('email')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row mt-2">
                                                <div class="col-sm-2 mr-3">
                                                    <label type="text" name="" id=""
                                                        class="form-label">Fax</label>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input id="fax1" type="text"
                                                        class="form-control @error('fax1') is-invalid @enderror"
                                                        name="fax1"
                                                        value="{{ $kd05->fax1 ?? 'Data Belum Lengkap!' }}"
                                                        style="{{ $kd05->fax1 == null ? 'color:red' : '' }}"
                                                        disabled />
                                                    @error('fax1')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row mt-2">
                                                <div class="col-sm-2 mr-3">
                                                    <label type="text" name="" id=""
                                                        class="form-label">Telp</label>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input id="telp1" type="text"
                                                        class="form-control @error('telp1') is-invalid @enderror"
                                                        name="telp1"
                                                        value="{{ $kd05->telp1 ?? 'Data Belum Lengkap!' }}"
                                                        style="{{ $kd05->telp1 == null ? 'color:red' : '' }}"
                                                        disabled />
                                                    @error('telp1')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row mt-2">
                                                <div class="col-sm-2 mr-3">
                                                    <label type="text" name="" id=""
                                                        class="form-label">Mobile</label>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input id="mobile1" type="text"
                                                        class="form-control @error('mobile1') is-invalid @enderror"
                                                        name="mobile1"
                                                        value="{{ $kd05->mobile1 ?? 'Data Belum Lengkap!' }}"
                                                        style="{{ $kd05->mobile1 == null ? 'color:red' : '' }}"
                                                        disabled />
                                                    @error('mobile1')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row mt-2">
                                                <div class="col-sm-2 mr-3">
                                                    <label type="text" name="" id=""
                                                        class="form-label">PO BOX</label>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input id="po_box1" type="text"
                                                        class="form-control @error('po_box1') is-invalid @enderror"
                                                        name="po_box1"
                                                        value="{{ $kd05->po_box1 ?? 'Data Belum Lengkap!' }}"
                                                        style="{{ $kd05->po_box1 == null ? 'color:red' : '' }}"
                                                        disabled />
                                                    @error('po_box1')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row mt-2">
                                                <div class="col-sm-2 mr-3">
                                                    <label type="text" name="" id=""
                                                        class="form-label">NPWP</label>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input id="npwp1" type="text"
                                                        class="form-control @error('npwp1') is-invalid @enderror"
                                                        name="npwp1"
                                                        value="{{ $kd05->npwp1 ?? 'Data Belum Lengkap!' }}"
                                                        style="{{ $kd05->npwp1 == null ? 'color:red' : '' }}"
                                                        disabled />
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
                        @endforeach
                    </div>
                </div>


                <div class="card">
                    <div class="card-header">
                        KD06
                    </div>
                    <div class="card-body">
                        @foreach ($kd06 as $kd06)
                            <hr class="mt-2">
                            {{-- KD06 --}}
                            <h6 class="text-left mt-2">KD06 Conditions</h6>
                            <hr>
                            <div class="d-flex justify-content-between">
                                <div class="col-sm-3">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id="" class="form-label">No
                                                Cust</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input id="npwp" type="text"
                                                class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                                value="{{ $kd06->kd6no_cust ?? 'Data Belum Lengkap!' }}"
                                                style="{{ $kd06->kd6no_cust == null ? 'color:red' : '' }}" disabled />
                                            @error('sd')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id=""
                                                class="form-label">SD</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input id="npwp" type="text"
                                                class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                                value="{{ $kd06->sd ?? 'Data Belum Lengkap!' }}"
                                                style="{{ $kd06->sd == null ? 'color:red' : '' }}" disabled />
                                            @error('sd')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id=""
                                                class="form-label">SG</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input id="npwp" type="text"
                                                class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                                value="{{ $kd06->kd6sg ?? 'Data Belum Lengkap!' }}"
                                                style="{{ $kd06->kd6sg == null ? 'color:red' : '' }}" disabled />
                                            @error('sd')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-2 mr-3">
                                            <label type="text" name="" id=""
                                                class="form-label">Sales</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input id="sales" type="text"
                                                class="form-control @error('sales') is-invalid @enderror" name="sales"
                                                value="{{ $kd06->sales ?? 'Data Belum Lengkap!' }}"
                                                style="{{ $kd06->sales == null ? 'color:red' : '' }}" disabled />
                                            @error('sales')
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
                                        <label type="text" name="" id=""
                                            class="form-label">Payterm</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input id="npwp" type="text"
                                            class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                            value="{{ $kd06->payterm ?? 'Data Belum Lengkap!' }}"
                                            style="{{ $kd06->payterm == null ? 'color:red' : '' }}" disabled />
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
                                        <label type="text" name="" id=""
                                            class="form-label">Assignment</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input id="npwp" type="text"
                                            class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                            value="{{ $kd06->assigment ?? 'Data Belum Lengkap!' }}"
                                            style="{{ $kd06->assigment == null ? 'color:red' : '' }}" disabled />
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
                                        <label type="text" name="" id=""
                                            class="form-label">Tax</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input id="npwp" type="text"
                                            class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                            value="{{ $kd06->kd6tax ?? 'Data Belum Lengkap!' }}"
                                            style="{{ $kd06->kd6tax == null ? 'color:red' : '' }}" disabled />
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
                                        <label type="text" name="" id=""
                                            class="form-label">Del Term</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input id="npwp" type="text"
                                            class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                            value="{{ $kd06->del_con ?? 'Data Belum Lengkap!' }}"
                                            style="{{ $kd06->del_con == null ? 'color:red' : '' }}" disabled />
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
                                        <label type="text" name="" id=""
                                            class="form-label">Kurs</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input id="npwp" type="text"
                                            class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                            value="{{ $kd06->kurs ?? 'Data Belum Lengkap!' }}"
                                            style="{{ $kd06->kurs == null ? 'color:red' : '' }}" disabled />
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
                                        <label type="text" name="" id=""
                                            class="form-label">Satuan</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input id="npwp" type="text"
                                            class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                            value="{{ $kd06->satuan ?? 'Data Belum Lengkap!' }}"
                                            style="{{ $kd06->satuan == null ? 'color:red' : '' }}" disabled />
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
                                        <label type="text" name="" id="" class="form-label"
                                            style="font-size: 10px">Type Bisnis</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input id="npwp" type="text"
                                            class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                            value="{{ $kd06->biz_type_p1 ?? 'Data Belum Lengkap!' }}"
                                            style="{{ $kd06->biz_type_p1 == null ? 'color:red' : '' }}" disabled />
                                        @error('SD')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-8 my-2 text-center">
                                <div class="d-flex flex-row">
                                    <div class="col-sm-2 mr-3">
                                        <label type="text" name="" id="" class="form-label"></label>
                                    </div>
                                    <div class="col-sm-4">
                                        <label type="text" name="" id="" class="form-label"></label>
                                    </div>
                                    <div class="col-sm-4">
                                        <label type="text " name="" id=""
                                            class="form-label text-center">Staff
                                            Member</label>
                                    </div>
                                    <div class="col-sm-3">
                                        <label type="text " name="" id=""
                                            class="form-label text-center">From</label>
                                    </div>
                                    <div class="col-sm-3">
                                        <label type="text " name="" id=""
                                            class="form-label text-center">To</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="d-flex flex-row">
                                    <div class="col-sm-2 mr-3">
                                        <label type="text" name="" id="" class="form-label">Nama
                                            Agent</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <input id="npwp" type="text"
                                            class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                            value="{{ $kd06->nama_agent1 ?? 'Data Belum Lengkap!' }}"
                                            style="{{ $kd06->nama_agent1 == null ? 'color:red' : '' }}" disabled />
                                        @error('nama_agent1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-4">
                                        <input id="npwp" type="text"
                                            class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                            value="{{ $kd06->staff_member ?? 'Data Belum Lengkap!' }}"
                                            style="{{ $kd06->staff_member == null ? 'color:red' : '' }}" disabled />
                                        @error('staff_member')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-3">
                                        <input id="npwp" type="text"
                                            class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                            value="{{ $kd06->from ?? 'Data Belum Lengkap!' }}"
                                            style="{{ $kd06->from == null ? 'color:red' : '' }}" disabled />
                                        @error('from')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-3">
                                        <input id="npwp" type="text"
                                            class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                            value="{{ $kd06->to ?? 'Data Belum Lengkap!' }}"
                                            style="{{ $kd06->to == null ? 'color:red' : '' }}" disabled />
                                        @error('to')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8 my-2">
                                <div class="d-flex flex-row text-center">
                                    <div class="col-sm-2 mr-3">
                                        <label type="text" name="" id="" class="form-label"></label>
                                    </div>
                                    <div class="col-sm-4">
                                        <label type="text" name="" id="" class="form-label"></label>
                                    </div>
                                    <div class="col-sm-3">
                                        <label type="text" name="" id=""
                                            class="form-label">%-Com</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <label type="text " name="" id=""
                                            class="form-label text-center">Percent</label>
                                    </div>
                                    <div class="col-sm-3">
                                        <label type="text " name="" id=""
                                            class="form-label text-center">Print</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="d-flex flex-row">
                                    <div class="col-sm-2 mr-3">
                                        <label type="text" name="" id=""
                                            class="form-label"></label>
                                    </div>
                                    <div class="col-sm-4">
                                        <label type="text" name="" id=""
                                            class="form-label"></label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input id="npwp" type="text"
                                            class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                            value="{{ $kd06->allowance_qty ?? 'Data Belum Lengkap!' }}"
                                            style="{{ $kd06->allowance_qty == null ? 'color:red' : '' }}" disabled />
                                        @error('allowance_qty')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-4">
                                        <input id="npwp" type="text"
                                            class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                            value="{{ $kd06->pc ?? 'Data Belum Lengkap!' }}"
                                            style="{{ $kd06->pc == null ? 'color:red' : '' }}" disabled />
                                        @error('pc')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-3">
                                        <input id="npwp" type="text"
                                            class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                            value="{{ $kd06->print ?? 'Data Belum Lengkap!' }}"
                                            style="{{ $kd06->print == null ? 'color:red' : '' }}" disabled />
                                        @error('print')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>



            </div>

            <div class="card">
                <div class="card-header">
                    KD11
                </div>
                <div class="card-body">
                    @foreach ($kd11 as $kd11)
                        <hr class="mt-2">
                        <h6>KD11 Association</h6>
                        <hr class="my-2">
                        <div class="d-flex justify-content-around my-3">
                            <div class="col-sm-6">
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-2 mr-5">
                                        <label type="text" name="" id="" class="form-label"
                                            style="font-size: 13px">SD</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input id="sales" type="text"
                                            class="form-control @error('sales') is-invalid @enderror" name="sales"
                                            value="{{ $kd11->sd1 ?? 'Data Belum Lengkap!' }}"
                                            style="{{ $kd11->sd1 == null ? 'color:red' : '' }}" disabled />
                                        @error('sales')
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
                                        <label type="text" name="" id=""
                                            class="form-label">SG</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input id="sales" type="text"
                                            class="form-control @error('sales') is-invalid @enderror" name="sales"
                                            value="{{ $kd11->sg1 ?? 'Data Belum Lengkap!' }}"
                                            style="{{ $kd11->sg1 == null ? 'color:red' : '' }}" disabled />
                                        @error('sales')
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
                                    <label type="text" name="" id="" class="form-label"
                                        style="font-size: 15px">Association/KD11</label>
                                </div>
                                <div class="col-sm-6">
                                    <input id="association1" type="text"
                                        class="form-control @error('association1') is-invalid @enderror"
                                        name="association1"
                                        value="{{ $kd11->association_no1 ?? 'Data Belum Lengkap!' }}"
                                        style="{{ $kd11->association_no1 == null ? 'color:red' : '' }}" disabled />
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
                                    <label type="text" name="" id="" class="form-label">Central
                                        Regu</label>
                                </div>
                                <div class="col-sm-6">
                                    <input id="sales" type="text"
                                        class="form-control @error('sales') is-invalid @enderror" name="sales"
                                        value="{{ $kd11->central_regu1 ?? 'Data Belum Lengkap!' }}"
                                        style="{{ $kd11->central_regu1 == null ? 'color:red' : '' }}" disabled />
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
                                    <label type="text" name="" id=""
                                        class="form-label">Conditions</label>
                                </div>
                                <div class="col-sm-6">
                                    <input id="sales" type="text"
                                        class="form-control @error('sales') is-invalid @enderror" name="sales"
                                        value="{{ $kd11->conditions1 ?? 'Data Belum Lengkap!' }}"
                                        style="{{ $kd11->conditions1 == null ? 'color:red' : '' }}" disabled />
                                    @error('sales')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    KD14
                </div>
                <div class="card-body">
                    @foreach ($kd14 as $kd14)
                        <hr class="mt-2">
                        {{-- KD14 PIC/Contact Person --}}
                        <h6 class="text-left mt-2">KD14 PIC/Contact Person</h6>
                        <hr>
                        <div class="col-sm-10">
                            <div class="d-flex flex-row text-center">
                                <div class="col-sm-3">
                                    <label type="text" name="" id=""
                                        class="form-label">Nama</label>
                                </div>
                                <div class="col-sm-3">
                                    <label type="text " name="" id=""
                                        class="form-label text-center">Function</label>
                                </div>
                                <div class="col-sm-3">
                                    <label type="text " name="" id=""
                                        class="form-label text-center">Since</label>
                                </div>

                            </div>
                        </div>
                        <div class="col-sm-10">
                            <div class="d-flex flex-row text-center">
                                <div class="col-sm-3">
                                    <input class="form-control @error('nama_cp1') is-invalid @enderror" type="text"
                                        id="nama_cp1" name="nama_cp1"
                                        value="{{ $kd14->nama_cp1 ?? 'Data Belum Lengkap!' }}"
                                        style="{{ $kd14->nama_cp1 == null ? 'color:red' : '' }}" disabled>
                                    @error('nama_cp1')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-sm-3">
                                    <input class="form-control @error('function_cp1') is-invalid @enderror"
                                        type="text" id="function_cp1" name="function_cp1"
                                        value="{{ $kd14->function_cp1 ?? 'Data Belum Lengkap!' }}"
                                        style="{{ $kd14->function_cp1 == null ? 'color:red' : '' }}" disabled>
                                    @error('function_cp1')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-sm-3">
                                    <input class="form-control @error('sinc_cp1') is-invalid @enderror" type="text"
                                        id="sinc_cp1" name="sinc_cp1"
                                        value="{{ $kd14->sinc_cp1 ?? 'Data Belum Lengkap!' }}"
                                        style="{{ $kd14->sinc_cp1 == null ? 'color:red' : '' }}" disabled>
                                    @error('sinc_cp1')
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
                                    <label type="text" name="" id=""
                                        class="form-label">Mobile</label>
                                </div>
                                <div class="col-sm-3">
                                    <label type="text " name="" id=""
                                        class="form-label text-center">Phone</label>
                                </div>
                                <div class="col-sm-3">
                                    <label type="text " name="" id=""
                                        class="form-label text-center">Email</label>
                                </div>

                            </div>
                        </div>
                        <div class="col-sm-10">
                            <div class="d-flex flex-row text-center">
                                <div class="col-sm-3">
                                    <input class="form-control @error('mobile_cp1') is-invalid @enderror"
                                        type="text" id="mobile_cp1" name="mobile_cp1"
                                        value="{{ $kd14->mobile_cp1 ?? 'Data Belum Lengkap!' }}"
                                        style="{{ $kd14->mobile_cp1 == null ? 'color:red' : '' }}" disabled>
                                    @error('mobile_cp1')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-sm-3">
                                    <input class="form-control @error('phone_cp1') is-invalid @enderror" type="text"
                                        id="phone_cp1" name="phone_cp1"
                                        value="{{ $kd14->phone_cp1 ?? 'Data Belum Lengkap!' }}"
                                        style="{{ $kd14->phone_cp1 == null ? 'color:red' : '' }}" disabled>
                                    @error('phone_cp1')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-sm-3">
                                    <input class="form-control @error('email_cp1') is-invalid @enderror" type="email"
                                        id="email_cp1" name="email_cp1"
                                        value="{{ $kd14->email_cp1 ?? 'Data Belum Lengkap!' }}"
                                        style="{{ $kd14->email_cp1 == null ? 'color:red' : '' }}" disabled>
                                    @error('email_cp1')
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
                                    <label type="text" name="" id="" class="form-label">Add
                                        Address</label>
                                </div>
                                <div class="col-sm-6">
                                    <input id="sales" type="text"
                                        class="form-control @error('sales') is-invalid @enderror" name="sales"
                                        value="{{ $kd14->add_addr_cp1 ?? 'Data Belum Lengkap!' }}"
                                        style="{{ $kd14->add_addr_cp1 == null ? 'color:red' : '' }}" disabled />
                                    @error('sales')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>


        </div>





        @if (auth()->user()->division == 'FABRIC SALES' && auth()->user()->jabatan == 'Sub Division Manager' && $kd03->status_form == '')
            <input type="hidden" name="status_form" value="created">
            <input type="hidden" name="created_by" value="{{ $kd03->employee_name }}">
            <div class="d-flex flex-row my-3">
                <div class="col-sm-2">
                    <label type="text" name="" id="" class="form-label text-center">Reject
                        Reason</label>
                </div>
                <div class="col-sm-5">
                    <input id="reject_reason" type="text"
                        class="form-control @error('reject_reason') is-invalid @enderror" name="reject_reason"
                        value="{{ $kd03->reject_reason != '' ? $kd03->reject_reason : '' }}" />
                    @error('reject_reason')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        @elseif ($kd03->status_form == 'rejected')
            <input type="hidden" name="status_form" value="created">
            <input type="hidden" name="created_by" value="{{ auth()->user()->employee_name }}">
        @elseif (auth()->user()->division == 'FABRIC SALES' && auth()->user()->jabatan == 'Division Manager' && $kd03->status_form == 'created')
            <div class="col-sm-8">
                <div class="d-flex flex-row mt-2">
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label">Status Form</label>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_form" id="status_form1"
                                    value="submitted" checked>
                                <input type="hidden" class="form-check-input" name="created_by"
                                    value="{{ $kd03->created_by }}">
                                <label class="form-check-label" for="status_form1">
                                    Submitted
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_form" id="status_form2"
                                    value="rejected">
                                <input type="hidden" class="form-check-input" name="created_by"
                                    value="{{ $kd03->created_by }}">
                                <label class="form-check-label" for="status_form2">
                                    Rejected
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- @if ($kd03->status_form == 'submitted')
                    <input class="form-check-input" type="hidden" name="status_form" id="status_form2" value="rejected">
                @else
                @endif --}}
            </div>
            <div class="d-flex flex-row my-3">
                <div class="col-sm-2">
                    <label type="text" name="" id="" class="form-label text-center">Reject
                        Reason</label>
                </div>
                <div class="col-sm-5">
                    <input id="reject_reason" type="text"
                        class="form-control @error('reject_reason') is-invalid @enderror" name="reject_reason"
                        placeholder="Abaikan jika tidak di reject!"
                        value="{{ $kd03->reject_reason != '' ? $kd03->reject_reason : '' }}" />
                    @error('reject_reason')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        @elseif (auth()->user()->division == 'FINANCE' && auth()->user()->jabatan == 'Division Manager' && $kd03->status_form == 'submitted')
            <div class="col-sm-8">
                <div class="d-flex flex-row mt-2">
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label">Status Form</label>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_form" id="status_form1"
                                    value="aprv 1" checked>
                                <input type="hidden" class="form-check-input" name="created_by"
                                    value="{{ $kd03->created_by }}">
                                <label class="form-check-label" for="status_form1">
                                    Approve 1
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_form" id="status_form2"
                                    value="rejected">
                                <input type="hidden" class="form-check-input" name="created_by"
                                    value="{{ $kd03->created_by }}">
                                <label class="form-check-label" for="status_form2">
                                    Rejected
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-row my-3">
                <div class="col-sm-2">
                    <label type="text" name="" id="" class="form-label text-center">Reject
                        Reason</label>
                </div>
                <div class="col-sm-5">
                    <input id="reject_reason" type="text"
                        class="form-control @error('reject_reason') is-invalid @enderror" name="reject_reason"
                        placeholder="Abaikan jika tidak di reject!"
                        value="{{ $kd03->reject_reason != '' ? $kd03->reject_reason : '' }}" />
                    @error('reject_reason')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            {{-- && auth()->user()->jabatan == 'Division Manager' --}}
        @elseif (auth()->user()->division == 'FINANCE' && auth()->user()->jabatan == 'Direksi' && $kd03->status_form == 'aprv 1')
            <div class="col-sm-8">
                <div class="d-flex flex-row mt-2">
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label">Status Form</label>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_form" id="status_form1"
                                    value="aprv 2" checked>
                                <input type="hidden" name="created_by" value="{{ $kd03->created_by }}">
                                <label class="form-check-label" for="status_form1">
                                    Approve 2
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_form" id="status_form2"
                                    value="rejected">
                                <input type="hidden" name="created_by" value="{{ $kd03->created_by }}">
                                <label class="form-check-label" for="status_form2">
                                    Rejected
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-row my-3">
                <div class="col-sm-2">
                    <label type="text" name="" id="" class="form-label text-center">Reject
                        Reason</label>
                </div>
                <div class="col-sm-5">
                    <input id="reject_reason" type="text"
                        class="form-control @error('reject_reason') is-invalid @enderror" name="reject_reason"
                        placeholder="Abaikan jika tidak di reject!" />
                    @error('reject_reason')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        @elseif (auth()->user()->division == 'INTERNAL AUDIT' && $kd03->status_form == 'aprv 2')
            <div class="col-sm-8">
                <div class="d-flex flex-row mt-2">
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label">Status Form</label>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_form" id="status_form1"
                                    value="inputted" checked>
                                <input type="hidden" name="created_by" value="{{ $kd03->created_by }}">
                                <label class="form-check-label" for="status_form1">
                                    Inputted To INTEX
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_form" id="status_form2"
                                    value="rejected">
                                <input type="hidden" name="created_by" value="{{ $kd03->created_by }}">
                                <label class="form-check-label" for="status_form2">
                                    Rejected
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-row my-3">
                <div class="col-sm-2">
                    <label type="text" name="" id="" class="form-label text-center">Reject
                        Reason</label>
                </div>
                <div class="col-sm-5">
                    <input id="reject_reason" type="text"
                        class="form-control @error('reject_reason') is-invalid @enderror" name="reject_reason"
                        placeholder="Abaikan jika tidak di reject!"
                        value="{{ $kd03->reject_reason != '' ? $kd03->reject_reason : '' }}" />
                    @error('reject_reason')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            {{-- @elseif (auth()->user()->division == 'FABRIC SALES' && auth()->user()->jabatan == 'Sub Division Manager' && $kd03->status_form == 'rejected')
            <input type="hidden" name="created_by" value="{{ auth()->user()->employee_name }}"> --}}
        @endif

        </div>

        <div class="row justify-content-center">
            <div class="d-flex justify-content-between">
                <div class="col-sm-2 mx-2">
                    {{-- Card Pembuat Form --}}
                    <div class="card text-center w-100">
                        <div class="card-header">
                            REQUESTED BY
                        </div>
                        <div class="card-body">
                            <label for="form-control text-center">{{ $kd03->created_by }}</label>
                        </div>
                        <div class="card-footer text-muted" style="font-size: 13px;">
                            SDM Sales
                        </div>
                    </div>
                </div>


                <div class="col-sm-2">
                    {{-- Card Pembuat Form --}}
                    <div class="card text-center w-100">
                        <div class="card-header">
                            <label for="form-control text-center">ACKNOWLEDGED 1</label>
                        </div>
                        <div class="card-body">
                            @if ($kd03->submitted_by != '')
                                <label for="form-control text-center">{{ $kd03->submitted_by }}</label>
                                {{-- @elseif ($kd03->submitted_by == '')
                                <label for="form-control text-center">REJECTED</label> --}}
                            @endif
                        </div>
                        <div class="card-footer text-muted">
                            DM Sales
                        </div>
                    </div>
                </div>

                <div class="col-sm-2">
                    {{-- Card Pembuat Form --}}
                    <div class="card text-center w-100">
                        <div class="card-header">
                            <label for="form-control text-center">Approval 1</label>
                        </div>
                        <div class="card-body">
                            @if ($kd03->aprv1_by != '')
                                <label for="form-control text-center">{{ $kd03->aprv1_by }}</label>
                                {{-- @elseif ($kd03->aprv1_by == '')
                                <label for="form-control text-center">REJECTED</label> --}}
                            @endif
                        </div>
                        <div class="card-footer text-muted">
                            DM Finance
                        </div>
                    </div>
                </div>

                <div class="col-sm-2">
                    {{-- Card Pembuat Form --}}
                    <div class="card text-center w-100">
                        <div class="card-header">
                            <label for="form-control text-center">Approval 2</label>
                        </div>
                        <div class="card-body">
                            @if ($kd03->aprv2_by != '')
                                <label for="form-control text-center">{{ $kd03->aprv2_by }}</label>
                                {{-- @elseif ($kd03->aprv2_by == '')
                                <label for="form-control text-center">REJECTED</label> --}}
                            @endif
                        </div>
                        <div class="card-footer text-muted">
                            DIREKTUR FINANCE, ACCT & IT
                        </div>
                    </div>
                </div>

                <div class="col-sm-2">
                    {{-- Card Pembuat Form --}}
                    <div class="card text-center w-100">
                        <div class="card-header">
                            <label for="form-control text-center">Inputted By</label>


                        </div>
                        <div class="card-body">
                            @if ($kd03->inputted_by != '')
                                <label for="form-control text-center">{{ $kd03->inputted_by }}</label>
                                {{-- @elseif ($kd03->inputted_by == '')
                                <label for="form-control text-center">REJECTED</label> --}}
                            @endif
                        </div>
                        <div class="card-footer text-muted">
                            Document Control
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="d-flex justify-content-end mb-5">
            <div class="col-sm-1">
                <a href="{{ route('kd3outindex') }}" class="btn btn-danger">BACK</a>
            </div>
            @if (auth()->user()->division == 'FABRIC SALES' && auth()->user()->jabatan == 'Sub Division Manager' && $kd03->status_form != 'rejected' || auth()->user()->division == 'FABRIC SALES' && auth()->user()->jabatan == 'Sub Division Manager' && $kd03->status_form != '')
                <div class="col-sm-1 mr-5">
                    <button type="submit" class="btn btn-primary" >SUBMIT</button>
                </div>
            @else
                <div class="col-sm-1 mr-5">
                    <button type="submit" class="btn btn-primary">SUBMIT</button>
                </div>
            @endif

        </div>
    </form>


@endsection
