@extends('dashboard.layout.lte')

@section('title', 'Permintaan Input/Ubah Data Customer')

@section('content')

    {{-- <form action="{{ route('customer.update', ['customer' => $customer->id]) }}" method="post">
        @csrf
        @method('put') --}}
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
                            name="tanggal" value="{{ $customer->tanggal }}" readonly />
                        @error('tanggal')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <h4 style="font-weight: bold;" class="text-center">Form Permintaan Input Cust Baru / Perubahan Data Cust</h4>
        <h6 class="text-left">KD03 Master</h6>
        <hr>
        <div class="col-sm-6">
            <div class="d-flex flex-row">
                <div class="col-sm-3">
                    <label type="text" name="" id="" class="form-label">Title</label>
                </div>
                <div class="col-sm-8">
                    <select class="form-select" aria-label="Default select example" name="title">
                        <option selected>Open this select menu</option>
                        <option value="1">Example 1</option>
                        <option value="2">Example 2</option>
                        <option value="3">Example 3</option>
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
                <div class="col-sm-8">
                    <select class="form-select" aria-label="Default select example" name="class">
                        <option selected>Open this select menu</option>
                        <option value="1">Example 1</option>
                        <option value="2">Example 2</option>
                        <option value="3">Example 3</option>
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
                    <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                        value="{{ $customer->nama }}" readonly />
                    @error('nama')
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
                    <input id="no_cust" type="text" class="form-control @error('no_cust') is-invalid @enderror"
                        name="no_cust" value="{{ $customer->no_cust }}" readonly />
                    @error('no_cust')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-sm-6">
                    <input id="kode_cust" type="text" class="form-control @error('kode_cust') is-invalid @enderror"
                        name="kode_cust" value="{{ $customer->kode_cust }}" readonly />
                    @error('kode_cust')
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
                        rows="5" readonly></textarea>
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
                    <select class="form-select" aria-label="Default select example" name="negara">
                        <option selected>Open this select menu</option>
                        <option value="IDN">IDN</option>
                        <option value="JPG">JPG</option>
                        <option value="SGR">SGR</option>
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
                    <label type="text" name="" id="" class="form-label" style="font-size: 15px">Kode Country</label>
                </div>
                <div class="col-sm-6">
                    <select class="form-select" aria-label="Default select example" name="kode_country">
                        <option selected>Open this select menu</option>
                        <option value="1">Example 1</option>
                        <option value="2">Example 2</option>
                        <option value="3">Example 3</option>
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
                    <input id="kota" type="text" class="form-control @error('kota') is-invalid @enderror" name="kota"
                        value="{{ $customer->kota }}" readonly />
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
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ $customer->email }}" readonly />
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
                    <input id="telp" type="text" class="form-control @error('telp') is-invalid @enderror" name="telp"
                        value="{{ $customer->telp }}" readonly />
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
                    <input id="npwp" type="text" class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                        value="{{ $customer->npwp }}" readonly />
                    @error('npwp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
        <hr class="mt-2">
        {{-- KD06 --}}
        <h6 class="text-left mt-2">KD06 Conditions</h6>
        <hr>
        <div class="col-sm-8">
            <div class="d-flex flex-row mt-2">
                <div class="col-sm-2 mr-3">
                    <label type="text" name="" id="" class="form-label">SD</label>
                </div>
                <div class="col-sm-6">
                    <select class="form-select" aria-label="Default select example" name="sd">
                        <option selected>Open this select menu</option>
                        <option value="1">Example 1</option>
                        <option value="2">Example 2</option>
                        <option value="3">Example 3</option>
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
                    <label type="text" name="" id="" class="form-label" style="font-size: 10px">Biz Type/Parameter
                        1</label>
                </div>
                <div class="col-sm-6">
                    <select class="form-select" aria-label="Default select example" name="biz_type_p1">
                        <option selected>Open this select menu</option>
                        <option value="1">Example 1</option>
                        <option value="2">Example 2</option>
                        <option value="3">Example 3</option>
                    </select>
                    @error('SD')
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
                    <input id="nama_agent" type="text" class="form-control @error('nama_agent') is-invalid @enderror"
                        name="nama_agent" value="{{ $customer->nama_agent }}" readonly />
                    @error('nama_agent')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
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
                <input class="form-control" type="text" id="kode_brand" name="kode_brand1"
                    value="{{ $customer->kode_brand1 }}" readonly>
            </div>
            <div class="col-sm-5">
                <input class="form-control" type="text" id="long_desc" name="long_desc1"
                    value="{{ $customer->long_desc1 }}" readonly>
            </div>
            <div class="col-sm-3">
                <select class="form-select" aria-label="Default select example" name="negara1">
                    <option selected>Open this select menu</option>
                    <option value="IDN">IDN</option>
                    <option value="JPG">JPG</option>
                    <option value="SGR">SGR</option>
                </select>
            </div>
        </div>
    </div>
    <hr class="mt-2">
    <div class="col-sm-8">
        <div class="d-flex flex-row mt-2">
            <div class="col-sm-2 mr-3">
                <label type="text" name="" id="" class="form-label">Allowance Qty %</label>
            </div>
            <div class="col-sm-6">
                <input id="allowance_qty" type="text" class="form-control @error('allowance_qty') is-invalid @enderror"
                    name="allowance_qty" value="{{ $customer->allowance_qty }}" readonly />
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
                <select class="form-select" aria-label="Default select example" name="tax">
                    <option selected>Open this select menu</option>
                    <option value="EXC">EXC</option>
                    <option value="EXP">EXP</option>
                    <option value="KBN">KBN</option>
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
                <select class="form-select" aria-label="Default select example" name="assigment">
                    <option selected>Open this select menu</option>
                    <option value="EXP">EXP</option>
                    <option value="KBN">KBN</option>
                    <option value="NON KBN">NON KBN</option>
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
                <select class="form-select" aria-label="Default select example" name="del_con">
                    <option selected>Open this select menu</option>
                    <option value="DAP">DAP</option>
                    <option value="EXW">EXW</option>
                    <option value="CIF">CIF</option>
                    <option value="FOB">FOB</option>
                    <option value="CNF">CNF</option>
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
                <select class="form-select" aria-label="Default select example" name="kurs">
                    <option selected>Open this select menu</option>
                    <option value="DAP">DAP</option>
                    <option value="EXW">EXW</option>
                    <option value="CIF">CIF</option>
                    <option value="FOB">FOB</option>
                    <option value="CNF">CNF</option>
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
                <label type="text" name="" id="" class="form-label">Satuan</label>
            </div>
            <div class="col-sm-6">
                <select class="form-select" aria-label="Default select example" name="satuan">
                    <option selected>Open this select menu</option>
                    <option value="Yards">Yards</option>
                    <option value="Meter">Meter</option>
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
                <input id="sales" type="text" class="form-control @error('sales') is-invalid @enderror" name="sales"
                    value="{{ $customer->sales }}" readonly />
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
                <label type="text" name="" id="" class="form-label" style="font-size: 15px">Association/KD11</label>
            </div>
            <div class="col-sm-6">
                <input id="association1" type="text" class="form-control @error('association1') is-invalid @enderror"
                    name="association1" value="{{ $customer->association1 }}" readonly />
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
                <input id="association2" type="text" class="form-control @error('association2') is-invalid @enderror"
                    name="association2" value="{{ $customer->association2 }}" readonly />
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
                <input id="association3" type="text" class="form-control @error('association3') is-invalid @enderror"
                    name="association3" value="{{ $customer->association3 }}" readonly />
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
                <input class="form-control" type="text" id="fcmlama_digital" name="fcmlama_digital"
                    value="{{ $customer->fcmlama_digital }}" readonly>
            </div>
            <div class="col-sm-3">
                <input class="form-control" type="text" id="fcmbaru_digital" name="fcmbaru_digital"
                    value="{{ $customer->fcmbaru_digital }}" readonly>
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
                <input class="form-control" type="text" id="fcmlama_dyed" name="fcmlama_dyed"
                    value="{{ $customer->fcmlama_dyed }}" readonly>
            </div>
            <div class="col-sm-3">
                <input class="form-control" type="text" id="fcmbaru_dyed" name="fcmbaru_dyed"
                    value="{{ $customer->fcmbaru_dyed }}" readonly>
            </div>
            <div class="col-sm-2">
                <input class="form-control" type="text" id="table_price" name="table_price"
                    value="{{ $customer->table_price }}" readonly>
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
                <input class="form-control" type="text" id="fcmlama_print" name="fcmlama_print"
                    value="{{ $customer->fcmlama_print }}" readonly>
            </div>
            <div class="col-sm-3">
                <input class="form-control" type="text" id="fcmbaru_print" name="fcmbaru_print"
                    value="{{ $customer->fcmbaru_print }}" readonly>
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
                <input class="form-control" type="text" id="fcmlama_white" name="fcmlama_white"
                    value="{{ $customer->fcmlama_white }}" readonly>
            </div>
            <div class="col-sm-3">
                <input class="form-control" type="text" id="fcmbaru_white" name="fcmbaru_white"
                    value="{{ $customer->fcmbaru_white }}" readonly>
            </div>
            <div class="col-sm-2">
                <label type="text " name="" id="" class="form-label text-center"></label>
            </div>
        </div>
    </div>
    <hr class="mt-2">
    <div class="col-sm-8">
        <div class="d-flex flex-row mt-2">
            <div class="col-sm-2 mr-3">
                <label type="text" name="" id="" class="form-label">Packing</label>
            </div>
            <div class="col-sm-6">
                <select class="form-select" aria-label="Default select example" name="packing">
                    <option selected>Open this select menu</option>
                    <option value="1">Example 1</option>
                    <option value="2">Example 2</option>
                    <option value="3">Example 3</option>
                </select>
                @error('packing')
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
                <label type="text" name="" id="" class="form-label">Cutting</label>
            </div>
            <div class="col-sm-6">
                <select class="form-select" aria-label="Default select example" name="cutting">
                    <option selected>Open this select menu</option>
                    <option value="1">Example 1</option>
                    <option value="2">Example 2</option>
                    <option value="3">Example 3</option>
                </select>
                @error('cutting')
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
                <label type="text" name="" id="" class="form-label" style="font-size: 12px">Standart
                    Sample</label>
            </div>
            <div class="col-sm-6">
                <select class="form-select" aria-label="Default select example" name="standart_sample">
                    <option selected>Open this select menu</option>
                    <option value="1">Example 1</option>
                    <option value="2">Example 2</option>
                    <option value="3">Example 3</option>
                </select>
                @error('standart_sample')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
    <hr class="mt-2">
    {{-- For Finance --}}
    <h6 class="text-left mt-2">Untuk Finance</h6>
    <hr>
    <div class="col-sm-8">
        <div class="d-flex flex-row mt-2">
            <div class="col-sm-2 mr-3">
                <label type="text" name="" id="" class="form-label">Credit Limit</label>
            </div>
            <div class="col-sm-6">
                <input id="credit_limit" type="text" class="form-control @error('credit_limit') is-invalid @enderror"
                    name="credit_limit" value="{{ $customer->credit_limit }}" readonly />
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
                <select class="form-select" aria-label="Default select example" name="payterm">
                    <option selected>Open this select menu</option>
                    <option value="1">Example 1</option>
                    <option value="2">Example 2</option>
                    <option value="3">Example 3</option>
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
                    class="form-control @error('alasan_perubahan') is-invalid @enderror" name="alasan_perubahan"
                    value="{{ $customer->alasan_perubahan }}" readonly />
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
                    class="form-control @error('history_pembayaran') is-invalid @enderror" name="history_pembayaran"
                    value="{{ $customer->history_pembayaran }}" readonly />
                @error('history_pembayaran')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
    <hr class="mt-2">
    {{-- KD14 PIC/Contact Person --}}
    <h6 class="text-left mt-2">KD14 PIC/Contact Person</h6>
    <hr>
    <div class="col-sm-10">
        <div class="d-flex flex-row text-center">
            <div class="col-sm-2">
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
            <div class="col-sm-2"><select class="form-select" aria-label="Default select example" name="title1">
                    <option selected>Open this select menu</option>
                    <option value="1">Example 1</option>
                    <option value="2">Example 2</option>
                    <option value="3">Example 3</option>
                </select>
                @error('title1')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-sm-3">
                <input class="form-control" type="text" id="nama_cp1" name="nama_cp1"
                    value="{{ $customer->nama_cp1 }}" readonly>
            </div>
            <div class="col-sm-3">
                <input class="form-control" type="text" id="jabatan_cp1" name="jabatan_cp1"
                    value="{{ $customer->jabatan_cp1 }}" readonly>
            </div>
            <div class="col-sm-2">
                <input class="form-control" type="text" id="phone_cp1" name="phone_cp1"
                    value="{{ $customer->phone_cp1 }}" readonly>
            </div>
            <div class="col-sm-2">
                <input class="form-control" type="text" id="email_cp1" name="email_cp1"
                    value="{{ $customer->email_cp1 }}" readonly>
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
                            <select class="form-select" aria-label="Default select example" name="kd5_title1">
                                <option selected>Open this select menu</option>
                                <option value="1">Example 1</option>
                                <option value="2">Example 2</option>
                                <option value="3">Example 3</option>
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
                            <select class="form-select" aria-label="Default select example" name="kd5_class1">
                                <option selected>Open this select menu</option>
                                <option value="1">Example 1</option>
                                <option value="2">Example 2</option>
                                <option value="3">Example 3</option>
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
                                class="form-control @error('kd5_nama1') is-invalid @enderror" name="kd5_nama1"
                                value="{{ $customer->kd5_nama1 }}" readonly />
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
                                class="form-control @error('kd5_no_cust1') is-invalid @enderror" name="kd5_no_cust1"
                                value="{{ $customer->kd5_no_cust1 }}" readonly />
                            @error('kd5_no_cust1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <input id="kd5_kode_cust1" type="text"
                                class="form-control @error('kd5_kode_cust1') is-invalid @enderror" name="kd5_kode_cust1"
                                value="{{ $customer->kd5_kode_cust1 }}" readonly />
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
                            <select class="form-select" aria-label="Default select example" name="kd5_negara1">
                                <option selected>Open this select menu</option>
                                <option value="IDN">IDN</option>
                                <option value="JPG">JPG</option>
                                <option value="SGR">SGR</option>
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
                            <label type="text" name="" id="" class="form-label" style="font-size: 15px">Kode
                                Country</label>
                        </div>
                        <div class="col-sm-6">
                            <select class="form-select" aria-label="Default select example" name="kd5_kode_country1">
                                <option selected>Open this select menu</option>
                                <option value="1">Example 1</option>
                                <option value="2">Example 2</option>
                                <option value="3">Example 3</option>
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
                                class="form-control @error('kd5_kota1') is-invalid @enderror" name="kd5_kota1"
                                value="{{ $customer->kd5_kota1 }}" readonly />
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
                                class="form-control @error('kd5_email1') is-invalid @enderror" name="kd5_email1"
                                value="{{ $customer->kd5_email1 }}" readonly />
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
                                class="form-control @error('kd5_telp1') is-invalid @enderror" name="kd5_telp1"
                                value="{{ $customer->kd5_telp1 }}" readonly />
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
                                class="form-control @error('kd5_npwp1') is-invalid @enderror" name="kd5_npwp1"
                                value="{{ $customer->kd5_npwp1 }}" readonly />
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
                            <select class="form-select" aria-label="Default select example" name="kd5_title2">
                                <option selected>Open this select menu</option>
                                <option value="1">Example 1</option>
                                <option value="2">Example 2</option>
                                <option value="3">Example 3</option>
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
                            <select class="form-select" aria-label="Default select example" name="kd5_class2">
                                <option value="1">Example 1</option>
                                <option value="2">Example 2</option>
                                <option value="3">Example 3</option>
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
                                class="form-control @error('kd5_nama2') is-invalid @enderror" name="kd5_nama2"
                                value="{{ $customer->kd5_nama2 }}" readonly />
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
                                class="form-control @error('kd05_no_cust2') is-invalid @enderror" name="kd05_no_cust2"
                                value="{{ $customer->kd05_no_cust2 }}" readonly />
                            @error('kd05_no_cust2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <input id="kd05_kode_cust2" type="text"
                                class="form-control @error('kd05_kode_cust2') is-invalid @enderror" name="kd05_kode_cust2"
                                value="{{ $customer->kd05_kode_cust2 }}" readonly />
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
                            <select class="form-select" aria-label="Default select example" name="kd5_negara2">
                                <option selected>Open this select menu</option>
                                <option value="IDN">IDN</option>
                                <option value="JPG">JPG</option>
                                <option value="SGR">SGR</option>
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
                            <label type="text" name="" id="" class="form-label" style="font-size: 15px">Kode
                                Country</label>
                        </div>
                        <div class="col-sm-6">
                            <select class="form-select" aria-label="Default select example" name="kd5_kode_country2">
                                <option selected>Open this select menu</option>
                                <option value="1">Example 1</option>
                                <option value="2">Example 2</option>
                                <option value="3">Example 3</option>
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
                                class="form-control @error('kd5_kota2') is-invalid @enderror" name="kd5_kota2"
                                value="{{ $customer->kd5_kota2 }}" readonly />
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
                                class="form-control @error('kd5_email2') is-invalid @enderror" name="kd5_email2"
                                value="{{ $customer->kd5_email2 }}" readonly />
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
                                class="form-control @error('kd5_telp2') is-invalid @enderror" name="kd5_telp2"
                                value="{{ $customer->kd5_telp2 }}" readonly />
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
                                class="form-control @error('kd5_npwp2') is-invalid @enderror" name="kd5_npwp2"
                                value="{{ $customer->kd5_npwp2 }}" readonly />
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
                            <select class="form-select" aria-label="Default select example" name="kd5_title3">
                                <option selected>Open this select menu</option>
                                <option value="1">Example 1</option>
                                <option value="2">Example 2</option>
                                <option value="3">Example 3</option>
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
                            <select class="form-select" aria-label="Default select example" name="kd5_class3">
                                <option value="1">Example 1</option>
                                <option value="2">Example 2</option>
                                <option value="3">Example 3</option>
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
                                class="form-control @error('kd5_nama3') is-invalid @enderror" name="kd5_nama3"
                                value="{{ $customer->kd5_nama3 }}" readonly />
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
                                class="form-control @error('kd5_no_cust3') is-invalid @enderror" name="kd5_no_cust3"
                                value="{{ $customer->kd5_no_cust3 }}" readonly />
                            @error('kd5_no_cust3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <input id="kd5_kode_cust3" type="text"
                                class="form-control @error('kd5_kode_cust3') is-invalid @enderror" name="kd5_kode_cust3"
                                value="{{ $customer->kd5_kode_cust3 }}" readonly />
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
                            <select class="form-select" aria-label="Default select example" name="kd5_negara3">
                                <option selected>Open this select menu</option>
                                <option value="IDN">IDN</option>
                                <option value="JPG">JPG</option>
                                <option value="SGR">SGR</option>
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
                            <label type="text" name="" id="" class="form-label" style="font-size: 15px">Kode
                                Country</label>
                        </div>
                        <div class="col-sm-6">
                            <select class="form-select" aria-label="Default select example" name="kd5_kode_country3">
                                <option selected>Open this select menu</option>
                                <option value="1">Example 1</option>
                                <option value="2">Example 2</option>
                                <option value="3">Example 3</option>
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
                                class="form-control @error('kd5_kota3') is-invalid @enderror" name="kd5_kota3"
                                value="{{ $customer->kd5_kota3 }}" readonly />
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
                                class="form-control @error('kd5_email3') is-invalid @enderror" name="kd5_email3"
                                value="{{ $customer->kd5_email3 }}" readonly />
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
                                class="form-control @error('kd5_telp3') is-invalid @enderror" name="kd5_telp3"
                                value="{{ $customer->kd5_telp3 }}" readonly />
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
                                class="form-control @error('kd5_npwp3') is-invalid @enderror" name="kd5_npwp3"
                                value="{{ $customer->kd5_npwp3 }}" readonly />
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


    <div class="d-flex justify-content-end mb-5">
        <div class="col-sm-1">
            <button type="submit" class="btn btn-primary">SUBMIT</button>
        </div>
    </div>
    </form>


    <script></script>
@endsection
