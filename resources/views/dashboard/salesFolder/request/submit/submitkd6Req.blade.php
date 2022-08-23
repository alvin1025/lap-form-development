@extends('dashboard.layout.lte')

@section('title', 'Customer Data KD06 Request')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center border-bottom">
        <h1 class="h2">@yield('title')</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif
    {{-- <form action="{{ route('kd3.update', ['kd3' => $kd06->id]) }}" method="POST"> --}}
    {{-- @csrf --}}
    @if ($kd06->sd_old == $kd06->sd)
        <div class="card">
            <div class="d-flex content-justify-between">
                <div class="col-sm-6">
                    <h5 class="card-header">KD06 Conditions</h5>
                </div>
                <div class="col-sm-6">
                    <h5 class="card-header">KD06 Conditions Request</h5>
                </div>
            </div>

            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-6">
                                <h6 class="text-left mt-2"></h6>
                                <hr>
                                <div class="col-sm-10">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id="" class="form-label">No
                                                Cust</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <input id="npwp" type="text"
                                                class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                                value="{{ $kd06->kd6no_cust }}"
                                                style="{{ $kd06->kd6no_cust == null ? 'color:red' : '' }}" disabled />
                                            @error('sd')
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
                                            <label type="text" name="" id=""
                                                class="form-label">SD</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input id="npwp" type="text"
                                                class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                                value="{{ $kd06->sd_old }}"
                                                style="{{ $kd06->sd_old == null ? 'color:red' : '' }}" disabled />
                                            @error('sd')
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
                                            <label type="text" name="" id=""
                                                class="form-label">SG</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input id="npwp" type="text"
                                                class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                                value="{{ $kd06->kd6sg_old }}"
                                                style="{{ $kd06->kd6sg_old == null ? 'color:red' : '' }}" disabled />
                                            @error('sd')
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
                                            <label type="text" name="" id=""
                                                class="form-label">Sales</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input id="sales" type="text"
                                                class="form-control @error('sales') is-invalid @enderror" name="sales"
                                                value="{{ $kd06->sales_old }}"
                                                style="{{ $kd06->sales_old == null ? 'color:red' : '' }}" disabled />
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
                                            <label type="text" name="" id=""
                                                class="form-label">Payterm</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input id="npwp" type="text"
                                                class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                                value="{{ $kd06->payterm_old }}"
                                                style="{{ $kd06->payterm_old == null ? 'color:red' : '' }}" disabled />
                                            @error('sd')
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
                                            <label type="text" name="" id=""
                                                class="form-label">Assignment</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input id="npwp" type="text"
                                                class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                                value="{{ $kd06->assigment_old }}"
                                                style="{{ $kd06->assigment_old == null ? 'color:red' : '' }}"
                                                disabled />
                                            @error('sd')
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
                                            <label type="text" name="" id=""
                                                class="form-label">Tax</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input id="npwp" type="text"
                                                class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                                value="{{ $kd06->kd6tax_old }}"
                                                style="{{ $kd06->kd6tax_old == null ? 'color:red' : '' }}" disabled />
                                            @error('sd')
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
                                            <label type="text" name="" id="" class="form-label">Del
                                                Term</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input id="npwp" type="text"
                                                class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                                value="{{ $kd06->del_con_old }}"
                                                style="{{ $kd06->del_con_old == null ? 'color:red' : '' }}" disabled />
                                            @error('sd')
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
                                            <label type="text" name="" id=""
                                                class="form-label">Kurs</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input id="npwp" type="text"
                                                class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                                value="{{ $kd06->kurs_old }}"
                                                style="{{ $kd06->kurs_old == null ? 'color:red' : '' }}" disabled />
                                            @error('sd')
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
                                            <label type="text" name="" id=""
                                                class="form-label">Satuan</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input id="npwp" type="text"
                                                class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                                value="{{ $kd06->satuan_old }}"
                                                style="{{ $kd06->satuan_old == null ? 'color:red' : '' }}" disabled />
                                            @error('sd')
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
                                                style="font-size: 10px">Bisnis Type</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input id="npwp" type="text"
                                                class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                                value="{{ $kd06->biz_type_p1_old }}"
                                                style="{{ $kd06->biz_type_p1_old == null ? 'color:red' : '' }}"
                                                disabled />
                                            @error('SD')
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
                                            <label type="text" name="" id="" class="form-label">Nama
                                                Agent</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input id="npwp" type="text"
                                                class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                                value="{{ $kd06->nama_agent1_old }}"
                                                style="{{ $kd06->nama_agent1_old == null ? 'color:red' : '' }}"
                                                disabled />
                                            @error('SD')
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
                                            <label type="text" name="" id="" class="form-label">Staff
                                                Member</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input id="npwp" type="text"
                                                class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                                value="{{ $kd06->staff_member_old }}"
                                                style="{{ $kd06->staff_member_old == null ? 'color:red' : '' }}"
                                                disabled />
                                            @error('SD')
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
                                            <label type="text" name="" id=""
                                                class="form-label">%-Com</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input id="npwp" type="text"
                                                class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                                value="{{ $kd06->allowance_qty_old }}"
                                                style="{{ $kd06->allowance_qty_old == null ? 'color:red' : '' }}"
                                                disabled />
                                            @error('SD')
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
                                            <label type="text" name="" id=""
                                                class="form-label">Validation From</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input id="npwp" type="text"
                                                class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                                value="{{ $kd06->from_old }}"
                                                style="{{ $kd06->from_old == null ? 'color:red' : '' }}" disabled />
                                            @error('SD')
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
                                            <label type="text" name="" id=""
                                                class="form-label">Validation To</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input id="npwp" type="text"
                                                class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                                value="{{ $kd06->to_old }}"
                                                style="{{ $kd06->to_old == null ? 'color:red' : '' }}" disabled />
                                            @error('SD')
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
                                            <label type="text" name="" id=""
                                                class="form-label">Percent</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input id="npwp" type="text"
                                                class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                                value="{{ $kd06->pc_old }}"
                                                style="{{ $kd06->pc_old == null ? 'color:red' : '' }}" disabled />
                                            @error('SD')
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
                                            <label type="text" name="" id=""
                                                class="form-label">Print</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input id="npwp" type="text"
                                                class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                                value="{{ $kd06->print_old }}"
                                                style="{{ $kd06->print_old == null ? 'color:red' : '' }}" disabled />
                                            @error('SD')
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
                                            <label type="text" name="" id=""
                                                class="form-label">Status</label>
                                        </div>
                                        <div class="col-sm-8">
                                    @if ($kd06->status_old == 1)
                                            <input id="nama1" type="text"
                                            class="form-control @error('nama1') is-invalid @enderror" name="nama1"
                                            value="Active" disabled />
                                        @error('status')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    @elseif ($kd06->status_old == 2)
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
                                            @error('SD')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <h6 class="text-left mt-2"></h6>
                                <hr>
                                <div class="col-sm-10">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id="" class="form-label">No
                                                Cust</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <input id="npwp" type="text"
                                                class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                                value="{{ $kd06->kd6no_cust }}"
                                                style="{{ $kd06->kd6no_cust == null ? 'color:red' : '' }}" disabled />
                                            @error('sd')
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
                                            <label type="text" name="" id=""
                                                class="form-label">SD</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input id="npwp" type="text"
                                                class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                                value="{{ $kd06->sd }}"
                                                style="{{ $kd06->sd != $kd06->sd_old ? 'color:red' : '' }}" disabled />
                                            @error('sd')
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
                                            <label type="text" name="" id=""
                                                class="form-label">SG</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input id="npwp" type="text"
                                                class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                                value="{{ $kd06->kd6sg }}"
                                                style="{{ $kd06->kd6sg != $kd06->kd6sg_old ? 'color:red' : '' }}"
                                                disabled />
                                            @error('sd')
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
                                            <label type="text" name="" id=""
                                                class="form-label">Sales</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input id="sales" type="text"
                                                class="form-control @error('sales') is-invalid @enderror" name="sales"
                                                value="{{ $kd06->sales }}"
                                                style="{{ $kd06->sales != $kd06->sales_old ? 'color:red' : '' }}"
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
                                            <label type="text" name="" id=""
                                                class="form-label">Payterm</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input id="npwp" type="text"
                                                class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                                value="{{ $kd06->payterm }}"
                                                style="{{ $kd06->payterm != $kd06->payterm_old ? 'color:red' : '' }}"
                                                disabled />
                                            @error('sd')
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
                                            <label type="text" name="" id=""
                                                class="form-label">Assignment</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input id="npwp" type="text"
                                                class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                                value="{{ $kd06->assigment }}"
                                                style="{{ $kd06->assigment != $kd06->assigment_old ? 'color:red' : '' }}"
                                                disabled />
                                            @error('sd')
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
                                            <label type="text" name="" id=""
                                                class="form-label">Tax</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input id="npwp" type="text"
                                                class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                                value="{{ $kd06->kd6tax }}"
                                                style="{{ $kd06->kd6tax != $kd06->kd6tax_old ? 'color:red' : '' }}"
                                                disabled />
                                            @error('sd')
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
                                            <label type="text" name="" id="" class="form-label">Del
                                                Term</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input id="npwp" type="text"
                                                class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                                value="{{ $kd06->del_con }}"
                                                style="{{ $kd06->del_con != $kd06->del_con_old ? 'color:red' : '' }}"
                                                disabled />
                                            @error('sd')
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
                                            <label type="text" name="" id=""
                                                class="form-label">Kurs</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input id="npwp" type="text"
                                                class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                                value="{{ $kd06->kurs }}"
                                                style="{{ $kd06->kurs != $kd06->kurs_old ? 'color:red' : '' }}"
                                                disabled />
                                            @error('sd')
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
                                            <label type="text" name="" id=""
                                                class="form-label">Satuan</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input id="npwp" type="text"
                                                class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                                value="{{ $kd06->satuan }}"
                                                style="{{ $kd06->satuan != $kd06->satuan_old ? 'color:red' : '' }}"
                                                disabled />
                                            @error('sd')
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
                                                style="font-size: 10px">Bisnis Type</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input id="npwp" type="text"
                                                class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                                value="{{ $kd06->biz_type_p1 }}"
                                                style="{{ $kd06->biz_type_p1 != $kd06->biz_type_p1_old ? 'color:red' : '' }}"
                                                disabled />
                                            @error('SD')
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
                                            <label type="text" name="" id="" class="form-label">Nama
                                                Agent</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input id="npwp" type="text"
                                                class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                                value="{{ $kd06->nama_agent1 }}"
                                                style="{{ $kd06->nama_agent1 != $kd06->nama_agent1_old ? 'color:red' : '' }}"
                                                disabled />
                                            @error('SD')
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
                                            <label type="text" name="" id="" class="form-label">Staff
                                                Member</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input id="npwp" type="text"
                                                class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                                value="{{ $kd06->staff_member }}"
                                                style="{{ $kd06->staff_member != $kd06->staff_member_old ? 'color:red' : '' }}"
                                                disabled />
                                            @error('SD')
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
                                            <label type="text" name="" id=""
                                                class="form-label">%-Com</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input id="npwp" type="text"
                                                class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                                value="{{ $kd06->allowance_qty }}"
                                                style="{{ $kd06->allowance_qty != $kd06->allowance_qty_old ? 'color:red' : '' }}"
                                                disabled />
                                            @error('SD')
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
                                            <label type="text" name="" id=""
                                                class="form-label">Validation From</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input id="npwp" type="text"
                                                class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                                value="{{ $kd06->from }}"
                                                style="{{ $kd06->from != $kd06->from_old ? 'color:red' : '' }}"
                                                disabled />
                                            @error('SD')
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
                                            <label type="text" name="" id=""
                                                class="form-label">Validation To</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input id="npwp" type="text"
                                                class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                                value="{{ $kd06->to }}"
                                                style="{{ $kd06->to != $kd06->to_old ? 'color:red' : '' }}"
                                                disabled />
                                            @error('SD')
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
                                            <label type="text" name="" id=""
                                                class="form-label">Percent</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input id="npwp" type="text"
                                                class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                                value="{{ $kd06->pc }}"
                                                style="{{ $kd06->pc != $kd06->pc_old ? 'color:red' : '' }}"
                                                disabled />
                                            @error('SD')
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
                                            <label type="text" name="" id=""
                                                class="form-label">Print</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input id="npwp" type="text"
                                                class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                                value="{{ $kd06->print }}"
                                                style="{{ $kd06->print != $kd06->print ? 'color:red' : '' }}"
                                                disabled />
                                            @error('SD')
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
                                            <label type="text" name="" id=""
                                                class="form-label">Status</label>
                                        </div>
                                        <div class="col-sm-8">
                                            @if ($kd06->status == 1)
                                            <input id="nama1" type="text"
                                            class="form-control @error('nama1') is-invalid @enderror" name="nama1"
                                            value="Active" disabled />
                                        @error('status')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    @elseif ($kd06->status == 2)
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
                                            @error('SD')
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
                KD06 Request New
            </div>
            <div class="card-body">
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
                                    value="{{ $kd06->kd6no_cust ?? '-' }}"
                                    style="{{ $kd06->kd6no_cust == null ? 'color:white' : '' }}" disabled />
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
                                <label type="text" name="" id="" class="form-label">SD</label>
                            </div>
                            <div class="col-sm-6">
                                <input id="npwp" type="text"
                                    class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                    value="{{ $kd06->sd ?? '-' }}"
                                    style="{{ $kd06->sd == null ? 'color:white' : '' }}" disabled />
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
                                <label type="text" name="" id="" class="form-label">SG</label>
                            </div>
                            <div class="col-sm-6">
                                <input id="npwp" type="text"
                                    class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                    value="{{ $kd06->kd6sg ?? '-' }}"
                                    style="{{ $kd06->kd6sg == null ? 'color:white' : '' }}" disabled />
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
                                <label type="text" name="" id="" class="form-label">Sales</label>
                            </div>
                            <div class="col-sm-6">
                                <input id="sales" type="text"
                                    class="form-control @error('sales') is-invalid @enderror" name="sales"
                                    value="{{ $kd06->sales ?? '-' }}"
                                    style="{{ $kd06->sales == null ? 'color:white' : '' }}" disabled />
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
                            <label type="text" name="" id="" class="form-label">Payterm</label>
                        </div>
                        <div class="col-sm-6">
                            <input id="npwp" type="text"
                                class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                value="{{ $kd06->payterm ?? '-' }}"
                                style="{{ $kd06->payterm == null ? 'color:white' : '' }}" disabled />
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
                            <input id="npwp" type="text"
                                class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                value="{{ $kd06->assigment ?? '-' }}"
                                style="{{ $kd06->assigment == null ? 'color:white' : '' }}" disabled />
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
                            <input id="npwp" type="text"
                                class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                value="{{ $kd06->kd6tax ?? '-' }}"
                                style="{{ $kd06->kd6tax == null ? 'color:white' : '' }}" disabled />
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
                            <label type="text" name="" id="" class="form-label">Del Term</label>
                        </div>
                        <div class="col-sm-6">
                            <input id="npwp" type="text"
                                class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                value="{{ $kd06->del_con ?? '-' }}"
                                style="{{ $kd06->del_con == null ? 'color:white' : '' }}" disabled />
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
                            <input id="npwp" type="text"
                                class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                value="{{ $kd06->kurs ?? '-' }}"
                                style="{{ $kd06->kurs == null ? 'color:white' : '' }}" disabled />
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
                            <input id="npwp" type="text"
                                class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                value="{{ $kd06->satuan ?? '-' }}"
                                style="{{ $kd06->satuan == null ? 'color:white' : '' }}" disabled />
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
                                value="{{ $kd06->biz_type_p1 ?? '-' }}"
                                style="{{ $kd06->biz_type_p1 == null ? 'color:white' : '' }}" disabled />
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
                            <label type="text" name="" id="" class="form-label"
                                style="font-size: 10px">Status</label>
                        </div>
                        <div class="col-sm-6">
                            @if ($kd06->status == 1)
                            <input id="nama1" type="text"
                            class="form-control @error('nama1') is-invalid @enderror" name="nama1"
                            value="Active" disabled />
                        @error('status')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    @elseif ($kd06->status == 2)
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
                                value="{{ $kd06->nama_agent1 ?? '-' }}" disabled />
                            @error('nama_agent1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-4">
                            <input id="npwp" type="text"
                                class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                value="{{ $kd06->staff_member ?? '-' }}" disabled />
                            @error('staff_member')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-3">
                            <input id="npwp" type="text"
                                class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                value="{{ $kd06->from ?? '-' }}" disabled />
                            @error('from')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-3">
                            <input id="npwp" type="text"
                                class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                value="{{ $kd06->to ?? '-' }}" disabled />
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
                            <label type="text" name="" id="" class="form-label"></label>
                        </div>
                        <div class="col-sm-4">
                            <label type="text" name="" id="" class="form-label"></label>
                        </div>
                        <div class="col-sm-3">
                            <input id="npwp" type="text"
                                class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                value="{{ $kd06->allowance_qty ?? '-' }}" disabled />
                            @error('allowance_qty')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-4">
                            <input id="npwp" type="text"
                                class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                value="{{ $kd06->pc ?? '-' }}" disabled />
                            @error('pc')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-3">
                            <input id="npwp" type="text"
                                class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                value="{{ $kd06->print ?? '-' }}" disabled />
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
    @endif






    <form action="{{ route('updateReqKd6', ['id' => $kd06->id]) }}" method="post">
        @csrf
        @method('put')
        @if (auth()->user()->division == 'FABRIC SALES' &&
            auth()->user()->position_job_name == 'FABRIC SALES EXECUTIVE' &&
            $kd06->status_form == '')
            <input type="hidden" name="status_form" value="created">
            <input type="hidden" name="created_by" value="{{ $kd06->employee_name }}">
        @elseif ($kd06->status_form == 'rejected')
            <input type="hidden" name="status_form" value="created">
            <input type="hidden" name="created_by" value="{{ auth()->user()->employee_name }}">
            <div class="d-flex flex-row my-3">
                <div class="col-sm-2">
                    <label type="text" name="" id="" class="form-label text-center">Reject
                        Reason</label>
                </div>
                <div class="col-sm-5">
                        <textarea class="form-control" id="textAreaExample1" rows="4" name="reject_reason" readonly>{!! $kd06->reject_reason != '' ? $kd06->reject_reason : '' !!}</textarea>
                    @error('reject_reason')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        @elseif (auth()->user()->division == 'FABRIC SALES' &&
            auth()->user()->position_job_name == 'DM FABRIC SALES' &&
            $kd06->status_form == 'created')
            <div class="col-sm-8">
                <div class="d-flex flex-row mt-2">
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label">Status Form</label>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_form" id="submitted"
                                    value="submitted" onclick="javascript:myFunction();" checked>
                                <input type="hidden" class="form-check-input" name="created_by"
                                    value="{{ $kd06->created_by }}">
                                <label class="form-check-label" for="status_form1" id="submitted">
                                    Submitted
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_form" id="rejected"
                                    value="rejected" onclick="javascript:myFunction();">
                                <input type="hidden" class="form-check-input" name="created_by"
                                    value="{{ $kd06->created_by }}">
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
            $kd06->status_form == 'submitted')
            <div class="col-sm-8">
                <div class="d-flex flex-row mt-2">
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label">Status Form</label>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_form" id="acknowledged"
                                    value="acknowledged" onclick="javascript:myFunction6();" checked>
                                <input type="hidden" class="form-check-input" name="created_by"
                                    value="{{ $kd06->created_by }}">
                                <label class="form-check-label" for="status_form1" id="acknowledged">
                                    Approve
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_form" id="rejected"
                                    value="rejected" onclick="javascript:myFunction6();">
                                <input type="hidden" class="form-check-input" name="created_by"
                                    value="{{ $kd06->created_by }}">
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
        @elseif (auth()->user()->division == 'FINANCE' && auth()->user()->jabatan == 'Division Manager' && $kd06->status_form == 'acknowledged')
        <div class="col-sm-8">
            <div class="d-flex flex-row mt-2">
                <div class="col-sm-2 mr-3">
                    <label type="text" name="" id="" class="form-label">Status Form</label>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status_form" id="aprv1"
                                value="aprv 1" onclick="javascript:myFunction2();" checked>
                            <input type="hidden" class="form-check-input" name="created_by"
                                value="{{ $kd06->created_by }}">
                            <label class="form-check-label" for="status_form1" id="acknowledged">
                                Approve
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status_form" id="rejected"
                                value="rejected" onclick="javascript:myFunction2();">
                            <input type="hidden" class="form-check-input" name="created_by"
                                value="{{ $kd06->created_by }}">
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

            {{-- && auth()->user()->jabatan == 'Division Manager' --}}
        @elseif (auth()->user()->position_job_name == 'DIREKTUR FINANCE, ACCT & IT' &&
            auth()->user()->jabatan == 'Direksi' &&
            $kd06->status_form == 'aprv 1')
            <div class="col-sm-8">
                <div class="d-flex flex-row mt-2">
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label">Status Form</label>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_form" id="aprv2"
                                    value="aprv 2" onclick="javascript:myFunction3();" checked>
                                <input type="hidden" name="created_by" value="{{ $kd06->created_by }}">
                                <label class="form-check-label" for="status_form1">
                                    Approve
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_form" id="status_form2"
                                    value="rejected" onclick="javascript:myFunction3();" id="rejected">
                                <input type="hidden" name="created_by" value="{{ $kd06->created_by }}">
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
        @elseif (auth()->user()->division == 'INTERNAL AUDIT' && $kd06->status_form == 'aprv 2')
            <div class="col-sm-8">
                <div class="d-flex flex-row mt-2">
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label">Status Form</label>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_form" id="inputted"
                                    value="inputted" onclick="javascript:myFunction4();" checked>
                                <input type="hidden" name="created_by" value="{{ $kd06->created_by }}">
                                <label class="form-check-label" for="status_form1">
                                    Input To INTEX
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_form" id="rejected"
                                    value="rejected" onclick="javascript:myFunction4();">
                                <input type="hidden" name="created_by" value="{{ $kd06->created_by }}">
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
            @elseif (auth()->user()->division == 'FABRIC SALES' && auth()->user()->position_job_name == 'FABRIC SALES EXECUTIVE' && $kd06->status_form == 'inputted')
            <input type="hidden" name="status_form" value="finished">
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
                            <label for="form-control text-center">{{ $kd06->created_by }}</label>
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
                            @if ($kd06->submitted_by != '')
                                <label for="form-control text-center">{{ $kd06->submitted_by }}</label>
                                {{-- @elseif ($kd06->submitted_by == '')
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
                            <label for="form-control text-center">ACKNOWLEDGED 2</label>
                        </div>
                        <div class="card-body">
                            @if ($kd06->acknowledged_by != '')
                                <label for="form-control text-center">{{ $kd06->acknowledged_by }}</label>
                                {{-- @elseif ($kd06->submitted_by == '')
                        <label for="form-control text-center">REJECTED</label> --}}
                            @endif
                        </div>
                        <div class="card-footer text-muted">
                            GM Sales
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
                            @if ($kd06->aprv1_by != '')
                                <label for="form-control text-center">{{ $kd06->aprv1_by }}</label>
                                {{-- @elseif ($kd06->aprv1_by == '')
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
                            @if ($kd06->aprv2_by != '')
                                <label for="form-control text-center">{{ $kd06->aprv2_by }}</label>
                                {{-- @elseif ($kd06->aprv2_by == '')
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
                            @if ($kd06->inputted_by != '')
                                <label for="form-control text-center">{{ $kd06->inputted_by }}</label>
                                {{-- @elseif ($kd06->inputted_by == '')
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
        <div class="d-flex justify-sontent-end">
            @if (auth()->user()->division == 'FABRIC SALES' &&
                auth()->user()->jabatan == 'Sub Division Manager' &&
                $kd06->status_form != 'rejected' &&
                (auth()->user()->division == 'FABRIC SALES' &&
                    auth()->user()->jabatan == 'Sub Division Manager' &&
                    $kd06->status_form != '') && (auth()->user()->division == 'FABRIC SALES' &&
                    auth()->user()->jabatan == 'Sub Division Manager' &&
                    $kd06->status_form != 'inputted'))
                <div class="col-sm-1 mr-5">
                    <button type="submit" class="btn btn-primary disabled" aria-disabled="true"
                        hidden>SUBMIT</button>
                </div>
                <div class="col-sm-1">
                    <a href="{{ url()->previous() }}" class="btn btn-danger">BACK</a>
                </div>
            @else
                <div class="col-sm-1 mr-5">
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

        function myFunction6() {
            var yes = document.getElementById("acknowledged");
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
            var yes = document.getElementById("aprv2");
            var sub = document.getElementById("sub");
            if (yes.checked === true) {
                sub.style.display = "none";
            } else {
                sub.style.display = "block";
            }
        }

        function myFunction4() {
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
