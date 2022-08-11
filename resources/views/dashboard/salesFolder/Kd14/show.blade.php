@extends('dashboard.layout.lte')

@section('title', 'CONTACT KD14')

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
            <div class="col-sm-12">
                <div class="d-flex justify-content-between">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="d-flex flex-row">
                                    <div class="col-sm-4">
                                        <label type="text" name="" id="" class="form-label">No. Cust</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control"
                                            value="{{ $kd14->kd14no_cust ?? 'Data Belum Lengkap!' }}"
                                            style="{{ $kd14->kd14no_cust == null ? 'color:red' : '' }}" disabled>
                                        @error('title1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-4">
                                        <label type="text" name="" id="" class="form-label">Nama</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control"
                                            value="{{ $kd14->nama_cp1 ?? 'Data Belum Lengkap!' }}"
                                            style="{{ $kd14->nama_cp1 == null ? 'color:red' : '' }}" disabled>
                                        @error('title1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-4">
                                        <label type="text" name="" id="" class="form-label">Function</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control"
                                            value="{{ $kd14->function_cp1 ?? 'Data Belum Lengkap!' }}"
                                            style="{{ $kd14->function_cp1 == null ? 'color:red' : '' }}" disabled>
                                        @error('title1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-4">
                                        <label type="text" name="" id="" class="form-label">Mobile</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control"
                                            value="{{ $kd14->mobile_cp1 ?? 'Data Belum Lengkap!' }}"
                                            style="{{ $kd14->mobile_cp1 == null ? 'color:red' : '' }}" disabled>
                                        @error('title1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-4">
                                        <label type="text" name="" id="" class="form-label">SD</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control"
                                            value="{{ $kd14->sd_cp1 ?? 'Data Belum Lengkap!' }}"
                                            style="{{ $kd14->sd_cp1 == null ? 'color:red' : '' }}" disabled>
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
                                        <label type="text" name="" id="" class="form-label">CP Code</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control"
                                            value="{{ $kd14->cp1 ?? 'Data Belum Lengkap!' }}"
                                            style="{{ $kd14->cp1 == null ? 'color:red' : '' }}" disabled>
                                        @error('title1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-4">
                                        <label type="text" name="" id="" class="form-label">Email</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control"
                                            value="{{ $kd14->email_cp1 ?? 'Data Belum Lengkap!' }}"
                                            style="{{ $kd14->email_cp1 == null ? 'color:red' : '' }}" disabled>
                                        @error('title1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-4">
                                        <label type="text" name="" id="" class="form-label">Since</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control"
                                            value="{{ $kd14->sinc_cp1 ?? 'Data Belum Lengkap!' }}"
                                            style="{{ $kd14->sinc_cp1 == null ? 'color:red' : '' }}" disabled>
                                        @error('title1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-4">
                                        <label type="text" name="" id="" class="form-label">Phone</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control"
                                            value="{{ $kd14->phone_cp1 ?? 'Data Belum Lengkap!' }}"
                                            style="{{ $kd14->phone_cp1 == null ? 'color:red' : '' }}" disabled>
                                        @error('title1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-4">
                                        <label type="text" name="" id="" class="form-label">SG</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control"
                                            value="{{ $kd14->sg_cp1 ?? 'Data Belum Lengkap!' }}"
                                            style="{{ $kd14->sg_cp1 == null ? 'color:red' : '' }}" disabled>
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
            <div class="col-sm-12">
                <div class="d-flex flex-row mt-2">
                    <div class="col-sm-2 mr-2">
                        <label type="text" name="" id="" class="form-label">Add Address</label>
                    </div>
                    <div class="col-sm-6">
                        <input id="sales" type="text" class="form-control @error('sales') is-invalid @enderror"
                            name="sales" value="{{ $kd14->add_addr_cp1 ?? 'Data Belum Lengkap!' }}"
                            style="{{ $kd14->add_addr_cp1 == null ? 'color:red' : '' }}" disabled />
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



    <div class="
                            d-flex justify-content-end mb-3">
        <div class="col-sm-1">
            <a href="{{ route('kd2.index') }}" class="btn btn-danger">BACK</a>
        </div>
    </div>
    </div>

    </div>
    </div>
    {{-- </form> --}}





@endsection
