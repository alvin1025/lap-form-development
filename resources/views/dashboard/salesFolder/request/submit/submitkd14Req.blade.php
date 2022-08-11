@extends('dashboard.layout.lte')

@section('title', 'Customer Data KD14 Request')

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
    @if ($kd14->cp1 == $kd14->cp1_old)
        <div class="card">
            <div class="d-flex content-justify-between">
                <div class="col-sm-6">
                    <h6 class="card-header">KD14 PIC/Contact Person</h6>
                </div>
                <div class="col-sm-6">
                    <h6 class="card-header">KD14 PIC/Contact Person Request</h6>
                </div>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="col-sm-10">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id="" class="form-label"
                                                style="font-size: 15px">No
                                                Cust</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input id="cust_no" type="text"
                                                class="form-control @error('cust_no') is-invalid @enderror"
                                                name="kd14no_cust" value="{{ $kd14->kd14no_cust }}"
                                                style="{{ $kd14->kd14no_cust == null ? 'color:red' : '' }}" disabled />
                                            @error('cust_no')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id="" class="form-label"
                                                style="font-size: 15px">Contact Person</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input id="cp1" type="text"
                                                class="form-control @error('cp1') is-invalid @enderror" name="cp1"
                                                value="{{ $kd14->cp1 }}"
                                                style="{{ $kd14->cp1 == null ? 'color:red' : '' }}" disabled />
                                            @error('cp1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id="" class="form-label"
                                                style="font-size: 15px">Nama</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input class="form-control @error('nama_cp1') is-invalid @enderror"
                                                type="text" id="nama_cp1" name="nama_cp1"
                                                value="{{ $kd14->nama_cp1_old }}"
                                                style="{{ $kd14->nama_cp1_old == null ? 'color:red' : '' }}" disabled>
                                            @error('nama_cp1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id="" class="form-label"
                                                style="font-size: 15px">Function</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input class="form-control @error('function_cp1') is-invalid @enderror"
                                                type="text" id="function_cp1" name="function_cp1"
                                                value="{{ $kd14->function_cp1_old }}"
                                                style="{{ $kd14->function_cp1_old == null ? 'color:red' : '' }}" disabled>
                                            @error('function_cp1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id="" class="form-label"
                                                style="font-size: 15px">Since</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input class="form-control @error('sinc_cp1') is-invalid @enderror"
                                                type="text" id="sinc_cp1" name="sinc_cp1"
                                                value="{{ $kd14->sinc_cp1_old }}"
                                                style="{{ $kd14->sinc_cp1_old == null ? 'color:red' : '' }}" disabled>
                                            @error('sinc_cp1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id="" class="form-label"
                                                style="font-size: 15px">Mobile</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input class="form-control @error('mobile_cp1') is-invalid @enderror"
                                                type="text" id="mobile_cp1" name="mobile_cp1"
                                                value="{{ $kd14->mobile_cp1_old }}"
                                                style="{{ $kd14->mobile_cp1_old == null ? 'color:red' : '' }}" disabled>
                                            @error('mobile_cp1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id="" class="form-label"
                                                style="font-size: 15px">Phone</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input class="form-control @error('phone_cp1') is-invalid @enderror"
                                                type="text" id="phone_cp1" name="phone_cp1"
                                                value="{{ $kd14->phone_cp1_old }}"
                                                style="{{ $kd14->phone_cp1_old == null ? 'color:red' : '' }}" disabled>
                                            @error('phone_cp1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id="" class="form-label"
                                                style="font-size: 15px">Email</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input class="form-control @error('email_cp1') is-invalid @enderror"
                                                type="email" id="email_cp1" name="email_cp1"
                                                value="{{ $kd14->email_cp1_old }}"
                                                style="{{ $kd14->email_cp1_old == null ? 'color:red' : '' }}" disabled>
                                            @error('email_cp1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id="" class="form-label"
                                                style="font-size: 15px">SD</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input class="form-control @error('email_cp1') is-invalid @enderror"
                                                type="email" id="email_cp1" name="email_cp1"
                                                value="{{ $kd14->sd_cp1_old }}"
                                                style="{{ $kd14->sd_cp1_old == null ? 'color:red' : '' }}" disabled>
                                            @error('email_cp1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id="" class="form-label"
                                                style="font-size: 15px">SG</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input class="form-control @error('email_cp1') is-invalid @enderror"
                                                type="email" id="email_cp1" name="email_cp1"
                                                value="{{ $kd14->sg_cp1_old }}"
                                                style="{{ $kd14->sg_cp1_old == null ? 'color:red' : '' }}" disabled>
                                            @error('email_cp1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id="" class="form-label"
                                                style="font-size: 15px">Add Code</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input id="sales" type="text"
                                                class="form-control @error('sales') is-invalid @enderror" name="sales"
                                                value="{{ $kd14->add_addr_cp1_old }}"
                                                style="{{ $kd14->add_addr_cp1_old == null ? 'color:red' : '' }}"
                                                disabled />
                                            @error('sales')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id="" class="form-label"
                                                style="font-size: 15px">Status</label>
                                        </div>
                                        <div class="col-sm-8">
                                            @if ($kd14->status_old == 1)
                                                <input id="nama1" type="text"
                                                    class="form-control @error('nama1') is-invalid @enderror"
                                                    name="nama1" value="Active" disabled />
                                                @error('status')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            @elseif ($kd14->status_old == 2)
                                                <input id="nama1" type="text"
                                                    class="form-control @error('nama1') is-invalid @enderror"
                                                    name="nama1" value="Inactive" disabled />
                                                @error('status')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            @else
                                                <input id="nama1" type="text"
                                                    class="form-control @error('nama1') is-invalid @enderror"
                                                    name="nama1" value="" disabled />
                                                @error('status')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            @endif
                                            @error('npwp1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    @error('sales')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="col-sm-10">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id="" class="form-label"
                                                style="font-size: 15px">No
                                                Cust</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input id="cust_no" type="text"
                                                class="form-control @error('cust_no') is-invalid @enderror"
                                                name="kd14no_cust" value="{{ $kd14->kd14no_cust }}"
                                                style="{{ $kd14->kd14no_cust == null ? 'color:red' : '' }}" disabled />
                                            @error('cust_no')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id="" class="form-label"
                                                style="font-size: 15px">Contact Person</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input id="cp1" type="text"
                                                class="form-control @error('cp1') is-invalid @enderror" name="cp1"
                                                value="{{ $kd14->cp1 }}"
                                                style="{{ $kd14->cp1 == null ? 'color:red' : '' }}" disabled />
                                            @error('cp1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id="" class="form-label"
                                                style="font-size: 15px">Nama</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input class="form-control @error('nama_cp1') is-invalid @enderror"
                                                type="text" id="nama_cp1" name="nama_cp1"
                                                value="{{ $kd14->nama_cp1 }}"
                                                style="{{ $kd14->nama_cp1 != $kd14->nama_cp1_old ? 'color:red' : '' }}"
                                                disabled>
                                            @error('nama_cp1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id="" class="form-label"
                                                style="font-size: 15px">Function</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input class="form-control @error('function_cp1') is-invalid @enderror"
                                                type="text" id="function_cp1" name="function_cp1"
                                                value="{{ $kd14->function_cp1 }}"
                                                style="{{ $kd14->function_cp1 != $kd14->function_cp1_old ? 'color:red' : '' }}"
                                                disabled>
                                            @error('function_cp1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id="" class="form-label"
                                                style="font-size: 15px">Since</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input class="form-control @error('sinc_cp1') is-invalid @enderror"
                                                type="text" id="sinc_cp1" name="sinc_cp1"
                                                value="{{ $kd14->sinc_cp1 }}"
                                                style="{{ $kd14->sinc_cp1 != $kd14->sinc_cp1_old ? 'color:red' : '' }}"
                                                disabled>
                                            @error('sinc_cp1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id="" class="form-label"
                                                style="font-size: 15px">Mobile</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input class="form-control @error('mobile_cp1') is-invalid @enderror"
                                                type="text" id="mobile_cp1" name="mobile_cp1"
                                                value="{{ $kd14->mobile_cp1 }}"
                                                style="{{ $kd14->mobile_cp1 != $kd14->mobile_cp1_old ? 'color:red' : '' }}"
                                                disabled>
                                            @error('mobile_cp1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id="" class="form-label"
                                                style="font-size: 15px">Phone</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input class="form-control @error('phone_cp1') is-invalid @enderror"
                                                type="text" id="phone_cp1" name="phone_cp1"
                                                value="{{ $kd14->phone_cp1 }}"
                                                style="{{ $kd14->phone_cp1 != $kd14->phone_cp1_old ? 'color:red' : '' }}"
                                                disabled>
                                            @error('phone_cp1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id="" class="form-label"
                                                style="font-size: 15px">Email</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input class="form-control @error('email_cp1') is-invalid @enderror"
                                                type="email" id="email_cp1" name="email_cp1"
                                                value="{{ $kd14->email_cp1 }}"
                                                style="{{ $kd14->email_cp1 != $kd14->email_cp1_old ? 'color:red' : '' }}"
                                                disabled>
                                            @error('email_cp1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id="" class="form-label"
                                                style="font-size: 15px">SD</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input class="form-control @error('email_cp1') is-invalid @enderror"
                                                type="email" id="email_cp1" name="email_cp1"
                                                value="{{ $kd14->sd_cp1 }}"
                                                style="{{ $kd14->sd_cp1 != $kd14->sd_cp1_old ? 'color:red' : '' }}"
                                                disabled>
                                            @error('email_cp1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id="" class="form-label"
                                                style="font-size: 15px">SG</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input class="form-control @error('email_cp1') is-invalid @enderror"
                                                type="email" id="email_cp1" name="email_cp1"
                                                value="{{ $kd14->sg_cp1 }}"
                                                style="{{ $kd14->sg_cp1 != $kd14->sg_cp1_old ? 'color:red' : '' }}"
                                                disabled>
                                            @error('email_cp1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id="" class="form-label"
                                                style="font-size: 15px">Add Code</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input id="sales" type="text"
                                                class="form-control @error('sales') is-invalid @enderror" name="sales"
                                                value="{{ $kd14->add_addr_cp1 }}"
                                                style="{{ $kd14->add_addr_cp1 != $kd14->add_addr_cp1_old ? 'color:red' : '' }}"
                                                disabled />
                                            @error('sales')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id="" class="form-label"
                                                style="font-size: 15px">Status</label>
                                        </div>
                                        <div class="col-sm-8">
                                            @if ($kd14->status == 1)
                                            <input id="nama1" type="text"
                                                class="form-control @error('nama1') is-invalid @enderror"
                                                name="nama1" value="Active" disabled />
                                            @error('status')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        @elseif ($kd14->status == 2)
                                            <input id="nama1" type="text"
                                                class="form-control @error('nama1') is-invalid @enderror"
                                                name="nama1" value="Inactive" disabled />
                                            @error('status')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        @else
                                            <input id="nama1" type="text"
                                                class="form-control @error('nama1') is-invalid @enderror"
                                                name="nama1" value="" disabled />
                                            @error('status')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        @endif
                                            @error('sales')
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
    @else
        <div class="card">
            <div class="card-header">
                KD14 Request New
            </div>
            <div class="card-body">
                <hr>
                <div class="col-sm-12">
                    <div class="d-flex justify-content-between">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="d-flex flex-row">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id="" class="form-label">No.
                                                Cust</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control"
                                                value="{{ $kd14->kd14no_cust ?? '-' }}"
                                                style="{{ $kd14->kd14no_cust == null ? 'color:white' : '' }}" disabled>
                                            @error('title1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id=""
                                                class="form-label">Nama</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control"
                                                value="{{ $kd14->nama_cp1 ?? '-' }}"
                                                style="{{ $kd14->nama_cp1 == null ? 'color:white' : '' }}" disabled>
                                            @error('title1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id=""
                                                class="form-label">Function</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control"
                                                value="{{ $kd14->function_cp1 ?? '-' }}"
                                                style="{{ $kd14->function_cp1 == null ? 'color:white' : '' }}" disabled>
                                            @error('title1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id=""
                                                class="form-label">Mobile</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control"
                                                value="{{ $kd14->mobile_cp1 ?? '-' }}"
                                                style="{{ $kd14->mobile_cp1 == null ? 'color:white' : '' }}" disabled>
                                            @error('title1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id=""
                                                class="form-label">SD</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control"
                                                value="{{ $kd14->sd_cp1 ?? '-' }}"
                                                style="{{ $kd14->sd_cp1 == null ? 'color:white' : '' }}" disabled>
                                            @error('title1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id=""
                                                class="form-label">Add Code</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input id="sales" type="text"
                                            class="form-control @error('sales') is-invalid @enderror" name="sales"
                                            value="{{ $kd14->add_addr_cp1 ?? '-' }}"
                                            style="{{ $kd14->add_addr_cp1 == null ? 'color:white' : '' }}" disabled />
                                            @error('title1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="d-flex flex-row">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id="" class="form-label">CP
                                                Code</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" value="{{ $kd14->cp1 ?? '-' }}"
                                                style="{{ $kd14->cp1 == null ? 'color:white' : '' }}" disabled>
                                            @error('title1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id=""
                                                class="form-label">Email</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control"
                                                value="{{ $kd14->email_cp1 ?? '-' }}"
                                                style="{{ $kd14->email_cp1 == null ? 'color:white' : '' }}" disabled>
                                            @error('title1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id=""
                                                class="form-label">Since</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control"
                                                value="{{ $kd14->sinc_cp1 ?? '-' }}"
                                                style="{{ $kd14->sinc_cp1 == null ? 'color:white' : '' }}" disabled>
                                            @error('title1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id=""
                                                class="form-label">Phone</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control"
                                                value="{{ $kd14->phone_cp1 ?? '-' }}"
                                                style="{{ $kd14->phone_cp1 == null ? 'color:white' : '' }}" disabled>
                                            @error('title1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id=""
                                                class="form-label">SG</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control"
                                                value="{{ $kd14->sg_cp1 ?? '-' }}"
                                                style="{{ $kd14->sg_cp1 == null ? 'color:white' : '' }}" disabled>
                                            @error('title1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id=""
                                                class="form-label">Status</label>
                                        </div>
                                        <div class="col-sm-8">
                                            @if ($kd14->status_old == 1)
                                                <input id="nama1" type="text"
                                                    class="form-control @error('nama1') is-invalid @enderror"
                                                    name="nama1" value="Active" disabled />
                                                @error('status')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            @elseif ($kd14->status_old == 2)
                                                <input id="nama1" type="text"
                                                    class="form-control @error('nama1') is-invalid @enderror"
                                                    name="nama1" value="Inactive" disabled />
                                                @error('status')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            @else
                                                <input id="nama1" type="text"
                                                    class="form-control @error('nama1') is-invalid @enderror"
                                                    name="nama1" value="" disabled />
                                                @error('status')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            @endif
                                            @error('title1')
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
    @endif




    <form action="{{ route('updateReqKd14', ['id' => $kd14->id]) }}" method="post">
        @csrf
        @method('put')
        @if (auth()->user()->division == 'FABRIC SALES' &&
            auth()->user()->position_job_name == 'FABRIC SALES EXECUTIVE' &&
            $kd14->status_form == '')
            <input type="hidden" name="status_form" value="created">
            <input type="hidden" name="created_by" value="{{ $kd14->employee_name }}">
            {{-- <div class="d-flex flex-row my-3">
                <div class="col-sm-2">
                    <label type="text" name="" id="" class="form-label text-center">Reject
                        Reason</label>
                </div>
                <div class="col-sm-5">
                    <input id="reject_reason" type="text"
                        class="form-control @error('reject_reason') is-invalid @enderror" name="reject_reason"
                        value="{{ $kd14->reject_reason != '' ? $kd14->reject_reason : '' }}" />
                    @error('reject_reason')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div> --}}
        @elseif ($kd14->status_form == 'rejected')
            <input type="hidden" name="status_form" value="created">
            <input type="hidden" name="created_by" value="{{ auth()->user()->employee_name }}">
            <div class="d-flex flex-row my-3">
                <div class="col-sm-2">
                    <label type="text" name="" id="" class="form-label text-center">Reject
                        Reason</label>
                </div>
                <div class="col-sm-5">
                    {{-- <input id="reject_reason" type="text"
                        class="form-control @error('reject_reason') is-invalid @enderror" name="reject_reason"
                        placeholder="Abaikan jika tidak di reject!"
                        value="{{ $kd14->reject_reason != '' ? $kd14->reject_reason : '' }}" /> --}}
                    <textarea class="form-control" id="textAreaExample1" rows="4" name="reject_reason" readonly>{!! $kd14->reject_reason != '' ? $kd14->reject_reason : '' !!}</textarea>
                    @error('reject_reason')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        @elseif (auth()->user()->division == 'FABRIC SALES' &&
            auth()->user()->position_job_name == 'DM FABRIC SALES' &&
            $kd14->status_form == 'created')
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
                                    value="{{ $kd14->created_by }}">
                                <label class="form-check-label" for="status_form1" id="submitted">
                                    Approve
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_form" id="rejected"
                                    value="rejected" onclick="javascript:myFunction();">
                                <input type="hidden" class="form-check-input" name="created_by"
                                    value="{{ $kd14->created_by }}">
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
                        {{-- <input id="reject_reason" type="text"
                            class="form-control @error('reject_reason') is-invalid @enderror" name="reject_reason"
                            placeholder="Abaikan jika tidak di reject!"
                            value="{{ $kd14->reject_reason != '' ? $kd14->reject_reason : '' }}" /> --}}
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
            $kd14->status_form == 'aprv 1')
            <div class="col-sm-8">
                <div class="d-flex flex-row mt-2">
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label">Status Form</label>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_form" id="aprv1"
                                    value="aprv 2" onclick="javascript:myFunction2();" checked>
                                <input type="hidden" class="form-check-input" name="created_by"
                                    value="{{ $kd14->created_by }}">
                                <label class="form-check-label" for="status_form1" id="acknowledged">
                                    Approve
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_form" id="rejected"
                                    value="rejected" onclick="javascript:myFunction2();">
                                <input type="hidden" class="form-check-input" name="created_by"
                                    value="{{ $kd14->created_by }}">
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
                        {{-- <input id="reject_reason" type="text"
                            class="form-control @error('reject_reason') is-invalid @enderror" name="reject_reason"
                            placeholder="Abaikan jika tidak di reject!"
                            value="{{ $kd14->reject_reason != '' ? $kd14->reject_reason : '' }}" /> --}}
                        <textarea class="form-control" id="textAreaExample1" rows="4" name="reject_reason"></textarea>
                        @error('reject_reason')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        @elseif (auth()->user()->division == 'INTERNAL AUDIT' && $kd14->status_form == 'aprv 2')
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
                                <input type="hidden" name="created_by" value="{{ $kd14->created_by }}">
                                <label class="form-check-label" for="status_form1">
                                    Input To INTEX
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_form" id="rejected"
                                    value="rejected" onclick="javascript:myFunction3();">
                                <input type="hidden" name="created_by" value="{{ $kd14->created_by }}">
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
                        {{-- <input id="reject_reason" type="text"
                            class="form-control @error('reject_reason') is-invalid @enderror" name="reject_reason"
                            placeholder="Abaikan jika tidak di reject!"
                            value="{{ $kd14->reject_reason != '' ? $kd14->reject_reason : '' }}" /> --}}
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
            $kd14->status_form == 'inputted')
            <input type="hidden" name="status_form" value="finished">
        @endif


        <div class="row justify-content-center">
            <div class="d-flex justify-content-between">
                {{-- SDM --}}
                <div class="col-sm-2 mx-2">
                    {{-- Card Pembuat Form --}}
                    <div class="card text-center w-100">
                        <div class="card-header">
                            REQUESTED BY
                        </div>
                        <div class="card-body">
                            <label for="form-control text-center">{{ $kd14->created_by }}</label>
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
                            <label for="form-control text-center">{{ $kd14->aprv1_by }}</label>
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
                            <label for="form-control text-center">{{ $kd14->aprv2_by }}</label>
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
                            <label for="form-control text-center">{{ $kd14->inputted_by }}</label>
                        </div>
                        <div class="card-footer text-muted" style="font-size: 13px;">
                            Document Control
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-sontent-end">
            @if (auth()->user()->division == 'FABRIC SALES' &&
                auth()->user()->jabatan == 'Sub Division Manager' &&
                $kd14->status_form != 'rejected' &&
                (auth()->user()->division == 'FABRIC SALES' &&
                    auth()->user()->jabatan == 'Sub Division Manager' &&
                    $kd14->status_form != '') &&
                (auth()->user()->division == 'FABRIC SALES' &&
                    auth()->user()->jabatan == 'Sub Division Manager' &&
                    $kd14->status_form != 'inputted'))
                <div class="col-sm-1 mr-2">
                    <button type="submit" class="btn btn-primary disabled" aria-disabled="true" hidden>SUBMIT</button>
                </div>
                <div class="col-sm-1">
                    <a href="{{ url()->previous() }}" class="btn btn-danger">BACK</a>
                </div>
            @else
                <div class="col-sm-1 mr-2">
                    <button type="submit" class="btn btn-primary">SUBMIT</button>
                </div>
                <div class="col-sm-1">
                    <a href="{{ url()->previous() }}" class="btn btn-danger">BACK</a>
                </div>
            @endif
        </div>
    </form>


    </div>

    </div>
    </div>
    {{-- </form> --}}

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
            var yes = document.getElementById("aprv1");
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
