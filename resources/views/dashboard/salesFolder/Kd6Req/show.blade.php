@extends('dashboard.layout.lte')

@section('title', 'SALES CONDITION KD06 REQUEST')

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
        <h5 class="card-header">KD06 Conditions Request</h5>
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
                            name="npwp" value="{{ $kd06->kd6no_cust ?? '-' }}"
                            style="{{ $kd06->kd6no_cust == null ? 'color:black' : '' }}" disabled />
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
                            name="npwp" value="{{ $kd06->sd ?? '-' }}"
                            style="{{ $kd06->sd == null ? 'color:black' : '' }}" disabled />
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
                            name="npwp" value="{{ $kd06->kd6sg ?? '-' }}"
                            style="{{ $kd06->kd6sg == null ? 'color:black' : '' }}" disabled />
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
                            name="sales" value="{{ $kd06->sales ?? '-' }}"
                            style="{{ $kd06->sales == null ? 'color:black' : '' }}" disabled />
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
                            name="npwp" value="{{ $kd06->payterm ?? '-' }}"
                            style="{{ $kd06->payterm == null ? 'color:black' : '' }}" disabled />
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
                            name="npwp" value="{{ $kd06->assigment ?? '-' }}"
                            style="{{ $kd06->assigment == null ? 'color:black' : '' }}" disabled />
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
                            name="npwp" value="{{ $kd06->kd6tax ?? '-' }}"
                            style="{{ $kd06->kd6tax == null ? 'color:black' : '' }}" disabled />
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
                            name="npwp" value="{{ $kd06->del_con ?? '-' }}"
                            style="{{ $kd06->del_con == null ? 'color:black' : '' }}" disabled />
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
                            name="npwp" value="{{ $kd06->kurs ?? '-' }}"
                            style="{{ $kd06->kurs == null ? 'color:black' : '' }}" disabled />
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
                            name="npwp" value="{{ $kd06->satuan ?? '-' }}"
                            style="{{ $kd06->satuan == null ? 'color:black' : '' }}" disabled />
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
                            name="npwp" value="{{ $kd06->biz_type_p1 ?? '-' }}"
                            style="{{ $kd06->biz_type_p1 == null ? 'color:black' : '' }}" disabled />
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
                            name="npwp" value="{{ $kd06->nama_agent1 ?? '-' }}"
                            style="{{ $kd06->nama_agent1 == null ? 'color:black' : '' }}" disabled />
                        @error('nama_agent1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-4">
                        <input id="npwp" type="text" class="form-control @error('npwp') is-invalid @enderror"
                            name="npwp" value="{{ $kd06->staff_member ?? '-' }}"
                            style="{{ $kd06->staff_member == null ? 'color:black' : '' }}" disabled />
                        @error('staff_member')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-3">
                        <input id="npwp" type="text" class="form-control @error('npwp') is-invalid @enderror"
                            name="npwp" value="{{ $kd06->from ?? '-' }}"
                            style="{{ $kd06->from == null ? 'color:black' : '' }}" disabled />
                        @error('from')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-3">
                        <input id="npwp" type="text" class="form-control @error('npwp') is-invalid @enderror"
                            name="npwp" value="{{ $kd06->to ?? '-' }}"
                            style="{{ $kd06->to == null ? 'color:black' : '' }}" disabled />
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
                            name="npwp" value="{{ $kd06->allowance_qty ?? '-' }}"
                            style="{{ $kd06->allowance_qty == null ? 'color:black' : '' }}" disabled />
                        @error('allowance_qty')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-4">
                        <input id="npwp" type="text" class="form-control @error('npwp') is-invalid @enderror"
                            name="npwp" value="{{ $kd06->pc ?? '-' }}"
                            style="{{ $kd06->pc == null ? 'color:black' : '' }}" disabled />
                        @error('pc')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-3">
                        <input id="npwp" type="text" class="form-control @error('npwp') is-invalid @enderror"
                            name="npwp" value="{{ $kd06->print ?? '-' }}"
                            style="{{ $kd06->print == null ? 'color:black' : '' }}" disabled />
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
            <a href="{{ url()->previous() }}" class="btn btn-danger">BACK</a>
        </div>
    </div>
    </div>

    </div>
    </div>





@endsection
