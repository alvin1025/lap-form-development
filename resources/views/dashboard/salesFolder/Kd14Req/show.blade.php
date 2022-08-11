@extends('dashboard.layout.lte')

@section('title', 'CONTACT KD14 REQUEST')

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
    <div class="card">
        <h5 class="card-header">KD14 PIC/Contact Person</h5>
        <div class="card-body">
            <hr>
            <div class="col-sm-10">
                <div class="d-flex flex-row my-2 ">
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label">Cust No</label>
                    </div>
                    <div class="col-sm-3">
                        <input id="cust_no" type="text" class="form-control @error('cust_no') is-invalid @enderror"
                            name="kd14no_cust" value="{{ $kd14->kd14no_cust ?? '-' }}"
                            style="{{ $kd14->kd14no_cust == null ? 'color:black' : '' }}" disabled />
                        @error('cust_no')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label">Contact Person</label>
                    </div>
                    <div class="col-sm-3">
                        <input id="cp1" type="text" class="form-control @error('cp1') is-invalid @enderror"
                            name="cp1" value="{{ $kd14->cp1 ?? '-' }}"
                            style="{{ $kd14->cp1 == null ? 'color:black' : '' }}" disabled />
                        @error('cp1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-10">
                <div class="d-flex flex-row text-center">
                    <div class="col-sm-3">
                        <label type="text" name="" id="" class="form-label">Nama</label>
                    </div>
                    <div class="col-sm-3">
                        <label type="text " name="" id="" class="form-label text-center">Function</label>
                    </div>
                    <div class="col-sm-3">
                        <label type="text " name="" id="" class="form-label text-center">Since</label>
                    </div>

                </div>
            </div>
            <div class="col-sm-10">
                <div class="d-flex flex-row text-center">
                    <div class="col-sm-3">
                        <input class="form-control @error('nama_cp1') is-invalid @enderror" type="text" id="nama_cp1"
                            name="nama_cp1" value="{{ $kd14->nama_cp1 ?? '-' }}"
                            style="{{ $kd14->nama_cp1 == null ? 'color:black' : '' }}" disabled>
                        @error('nama_cp1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-3">
                        <input class="form-control @error('function_cp1') is-invalid @enderror" type="text"
                            id="function_cp1" name="function_cp1"
                            value="{{ $kd14->function_cp1 ?? '-' }}"
                            style="{{ $kd14->function_cp1 == null ? 'color:black' : '' }}" disabled>
                        @error('function_cp1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-3">
                        <input class="form-control @error('sinc_cp1') is-invalid @enderror" type="text" id="sinc_cp1"
                            name="sinc_cp1" value="{{ $kd14->sinc_cp1 ?? '-' }}"
                            style="{{ $kd14->sinc_cp1 == null ? 'color:black' : '' }}" disabled>
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
                        <label type="text" name="" id="" class="form-label">Mobile</label>
                    </div>
                    <div class="col-sm-3">
                        <label type="text " name="" id="" class="form-label text-center">Phone</label>
                    </div>
                    <div class="col-sm-3">
                        <label type="text " name="" id="" class="form-label text-center">Email</label>
                    </div>

                </div>
            </div>
            <div class="col-sm-10">
                <div class="d-flex flex-row text-center">
                    <div class="col-sm-3">
                        <input class="form-control @error('mobile_cp1') is-invalid @enderror" type="text"
                            id="mobile_cp1" name="mobile_cp1" value="{{ $kd14->mobile_cp1 ?? '-' }}"
                            style="{{ $kd14->mobile_cp1 == null ? 'color:black' : '' }}" disabled>
                        @error('mobile_cp1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-3">
                        <input class="form-control @error('phone_cp1') is-invalid @enderror" type="text"
                            id="phone_cp1" name="phone_cp1" value="{{ $kd14->phone_cp1 ?? '-' }}"
                            style="{{ $kd14->phone_cp1 == null ? 'color:black' : '' }}" disabled>
                        @error('phone_cp1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-3">
                        <input class="form-control @error('email_cp1') is-invalid @enderror" type="email"
                            id="email_cp1" name="email_cp1" value="{{ $kd14->email_cp1 ?? '-' }}"
                            style="{{ $kd14->email_cp1 == null ? 'color:black' : '' }}" disabled>
                        @error('email_cp1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                </div>
            </div>
            <div class="col-sm-10">
                <div class="d-flex flex-row my-2 ">
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label">SD</label>
                    </div>
                    <div class="col-sm-3">
                        <input id="cust_no" type="text" class="form-control @error('cust_no') is-invalid @enderror"
                            name="kd14no_cust" value="{{ $kd14->sd_cp1 ?? '-' }}"
                            style="{{ $kd14->sd_cp1 == null ? 'color:black' : '' }}" disabled />
                        @error('cust_no')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label">SG</label>
                    </div>
                    <div class="col-sm-3">
                        <input id="cp1" type="text" class="form-control @error('cp1') is-invalid @enderror"
                            name="cp1" value="{{ $kd14->sg_cp1 ?? '-' }}"
                            style="{{ $kd14->sg_cp1 == null ? 'color:black' : '' }}" disabled />
                        @error('cp1')
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
                        <label type="text" name="" id="" class="form-label">Add Address</label>
                    </div>
                    <div class="col-sm-6">
                        <input id="sales" type="text" class="form-control @error('sales') is-invalid @enderror"
                            name="sales" value="{{ $kd14->add_addr_cp1 ?? '-' }}"
                            style="{{ $kd14->add_addr_cp1 == null ? 'color:black' : '' }}" disabled />
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



    <div class="d-flex justify-content-end mb-3">
        <div class="col-sm-1">
            <a href="{{ url()->previous() }}" class="btn btn-danger">BACK</a>
        </div>
    </div>
    </div>

    </div>
    </div>
    {{-- </form> --}}





@endsection
