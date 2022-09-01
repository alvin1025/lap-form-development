@extends('dashboard.layout.lte')

@section('title', 'SALES CONDITION KD06')

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
        <h5 class="card-header">KD06 Conditions</h5>
        <div class="card-body">
            <h6 class="text-left mt-2"></h6>
            <hr>
            <div class="col-sm-8">
                <div class="d-flex flex-row mt-2">
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label">No Cust</label>
                    </div>
                    <div class="col-sm-4">
                        <input id="npwp" type="text" class="form-control @error('npwp') is-invalid @enderror"
                            name="npwp" value="{{ $kd06->kd6no_cust ?? 'Data Belum Lengkap!' }}"
                            style="{{ $kd06->kd6no_cust == null ? 'color:red' : '' }}" disabled />
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
                        <label type="text" name="" id="" class="form-label">SD</label>
                    </div>
                    <div class="col-sm-6">
                        <input id="npwp" type="text" class="form-control @error('npwp') is-invalid @enderror"
                            name="npwp" value="{{ $kd06->sd ?? 'Data Belum Lengkap!' }}"
                            style="{{ $kd06->sd == null ? 'color:red' : '' }}" disabled />
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
                        <label type="text" name="" id="" class="form-label">SG</label>
                    </div>
                    <div class="col-sm-6">
                        <input id="npwp" type="text" class="form-control @error('npwp') is-invalid @enderror"
                            name="npwp" value="{{ $kd06->kd6sg ?? 'Data Belum Lengkap!' }}"
                            style="{{ $kd06->kd6sg == null ? 'color:red' : '' }}" disabled />
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
                        <label type="text" name="" id="" class="form-label">Sales</label>
                    </div>
                    <div class="col-sm-6">
                        <input id="sales" type="text" class="form-control @error('sales') is-invalid @enderror"
                            name="sales" value="{{ $kd06->sales ?? 'Data Belum Lengkap!' }}"
                            style="{{ $kd06->sales == null ? 'color:red' : '' }}" disabled />
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
                        <label type="text" name="" id="" class="form-label">Payterm</label>
                    </div>
                    <div class="col-sm-6">
                        <input id="npwp" type="text" class="form-control @error('npwp') is-invalid @enderror"
                            name="npwp" value="{{ $kd06->payterm ?? 'Data Belum Lengkap!' }}"
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
                        <label type="text" name="" id="" class="form-label">Assignment</label>
                    </div>
                    <div class="col-sm-6">
                        <input id="npwp" type="text" class="form-control @error('npwp') is-invalid @enderror"
                            name="npwp" value="{{ $kd06->assigment ?? 'Data Belum Lengkap!' }}"
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
                        <label type="text" name="" id="" class="form-label">Tax</label>
                    </div>
                    <div class="col-sm-6">
                        <input id="npwp" type="text" class="form-control @error('npwp') is-invalid @enderror"
                            name="npwp" value="{{ $kd06->kd6tax ?? 'Data Belum Lengkap!' }}"
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
                        <label type="text" name="" id="" class="form-label">Del.con</label>
                    </div>
                    <div class="col-sm-6">
                        <input id="npwp" type="text" class="form-control @error('npwp') is-invalid @enderror"
                            name="npwp" value="{{ $kd06->del_con ?? 'Data Belum Lengkap!' }}"
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
                        <label type="text" name="" id="" class="form-label">Kurs</label>
                    </div>
                    <div class="col-sm-6">
                        <input id="npwp" type="text" class="form-control @error('npwp') is-invalid @enderror"
                            name="npwp" value="{{ $kd06->kurs ?? 'Data Belum Lengkap!' }}"
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
                        <label type="text" name="" id="" class="form-label">Satuan</label>
                    </div>
                    <div class="col-sm-6">
                        <input id="npwp" type="text" class="form-control @error('npwp') is-invalid @enderror"
                            name="npwp" value="{{ $kd06->satuan ?? 'Data Belum Lengkap!' }}"
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
                            style="font-size: 10px">Biz
                            Type/Parameter
                            1</label>
                    </div>
                    <div class="col-sm-6">
                        <input id="npwp" type="text" class="form-control @error('npwp') is-invalid @enderror"
                            name="npwp" value="{{ $kd06->biz_type_p1 ?? 'Data Belum Lengkap!' }}"
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
                        <label type="text " name="" id="" class="form-label text-center">Staff
                            Member</label>
                    </div>
                    <div class="col-sm-3">
                        <label type="text " name="" id="" class="form-label text-center">From</label>
                    </div>
                    <div class="col-sm-3">
                        <label type="text " name="" id="" class="form-label text-center">To</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="d-flex flex-row">
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label">Nama Agent</label>
                    </div>
                    <div class="col-sm-4">
                        <input id="npwp" type="text" class="form-control @error('npwp') is-invalid @enderror"
                            name="npwp" value="{{ $kd06->nama_agent1 ?? '-' }}" disabled />
                        @error('nama_agent1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-4">
                        <input id="npwp" type="text" class="form-control @error('npwp') is-invalid @enderror"
                            name="npwp" value="{{ $kd06->staff_member ?? '-' }}" disabled />
                        @error('staff_member')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-3">
                        <input id="npwp" type="text" class="form-control @error('npwp') is-invalid @enderror"
                            name="npwp" value="{{ $kd06->from ?? '-' }}" disabled />
                        @error('from')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-3">
                        <input id="npwp" type="text" class="form-control @error('npwp') is-invalid @enderror"
                            name="npwp" value="{{ $kd06->to ?? '-' }}" disabled />
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
                        <label type="text" name="" id="" class="form-label">%-Com</label>
                    </div>
                    <div class="col-sm-4">
                        <label type="text " name="" id="" class="form-label text-center">p.c</label>
                    </div>
                    <div class="col-sm-3">
                        <label type="text " name="" id="" class="form-label text-center">Print</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="d-flex flex-row">
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label"></label>
                    </div>
                    <div class="col-sm-4">
                        <label type="text" name="" id="" class="form-label"></label>
                    </div>
                    <div class="col-sm-3">
                        <input id="npwp" type="text" class="form-control @error('npwp') is-invalid @enderror"
                            name="npwp" value="{{ $kd06->allowance_qty ?? '-' }}"disabled />
                        @error('allowance_qty')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-4">
                        <input id="npwp" type="text" class="form-control @error('npwp') is-invalid @enderror"
                            name="npwp" value="{{ $kd06->pc ?? '-' }}" disabled />
                        @error('pc')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-3">
                        <input id="npwp" type="text" class="form-control @error('npwp') is-invalid @enderror"
                            name="npwp" value="{{ $kd06->print ?? '-' }}"disabled />
                        @error('print')
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





@endsection
