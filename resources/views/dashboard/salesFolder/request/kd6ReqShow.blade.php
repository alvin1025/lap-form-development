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
    {{-- <form action="{{ route('kd3.update', ['kd3' => $kd03->id]) }}" method="POST"> --}}
    {{-- @csrf --}}
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
                            <div class="col-sm-10">
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-4">
                                        <label type="text" name="" id="" class="form-label">SD</label>
                                    </div>
                                    <div class="col-sm-8">
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
                            <div class="col-sm-10">
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-4">
                                        <label type="text" name="" id="" class="form-label">SG</label>
                                    </div>
                                    <div class="col-sm-8">
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
                            <div class="col-sm-10">
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-4">
                                        <label type="text" name="" id="" class="form-label">Sales</label>
                                    </div>
                                    <div class="col-sm-8">
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
                            <div class="col-sm-10">
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-4">
                                        <label type="text" name="" id=""
                                            class="form-label">Payterm</label>
                                    </div>
                                    <div class="col-sm-8">
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
                            <div class="col-sm-10">
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-4">
                                        <label type="text" name="" id=""
                                            class="form-label">Assignment</label>
                                    </div>
                                    <div class="col-sm-8">
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
                            <div class="col-sm-10">
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-4">
                                        <label type="text" name="" id=""
                                            class="form-label">Tax</label>
                                    </div>
                                    <div class="col-sm-8">
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
                            <div class="col-sm-10">
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-4">
                                        <label type="text" name="" id=""
                                            class="form-label">Del Term</label>
                                    </div>
                                    <div class="col-sm-8">
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
                            <div class="col-sm-10">
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-4">
                                        <label type="text" name="" id=""
                                            class="form-label">Kurs</label>
                                    </div>
                                    <div class="col-sm-8">
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
                            <div class="col-sm-10">
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-4">
                                        <label type="text" name="" id=""
                                            class="form-label">Satuan</label>
                                    </div>
                                    <div class="col-sm-8">
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
                            <div class="col-sm-10">
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-4">
                                        <label type="text" name="" id="" class="form-label"
                                            style="font-size: 10px">Bisnis Type</label>
                                    </div>
                                    <div class="col-sm-8">
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
                            <div class="col-sm-10">
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-4">
                                        <label type="text" name="" id="" class="form-label">Nama
                                            Agent</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="npwp" type="text"
                                            class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                            value="{{ $kd06->nama_agent1 ?? '-' }}" disabled />
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
                                            value="{{ $kd06->staff_member ?? '-' }}" disabled />
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
                                            value="{{ $kd06->allowance_qty ?? '-' }}" disabled />
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
                                            value="{{ $kd06->from ?? '-' }}" disabled />
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
                                            value="{{ $kd06->to ?? '-' }}" disabled />
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
                                            value="{{ $kd06->pc ?? '-' }}" disabled />
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
                                            value="{{ $kd06->print ?? '-' }}" disabled />
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
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <form action="{{ route('kd06request.store') }}" method="POST">
                                @csrf
                                <h6 class="text-left mt-2"></h6>
                                <hr>
                                <input type="hidden" name="status" value="1">
                                <div class="col-sm-10">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id="" class="form-label">No
                                                Cust</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <input id="kd6no_cust" type="text"
                                                class="form-control @error('d') is-invalid @enderror" name="kd6no_cust"
                                                value="{{ $kd06->kd6no_cust }}" readonly />
                                            @error('kd6no_cust')
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
                                        <div class="col-sm-6">
                                            <input id="kd6no_cust" type="text"
                                                class="form-control @error('d') is-invalid @enderror" name="sd"
                                                value="{{ $kd06->sd }}" readonly />
                                            @error('sd')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <input type="hidden" name="sd_old" value="{{ $kd06->sd }}">
                                        
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id=""
                                                class="form-label">SG</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input id="kd6no_cust" type="text"
                                                class="form-control @error('d') is-invalid @enderror" name="kd6sg"
                                                value="{{ $kd06->kd6sg }}" readonly />
                                            @error('kd6sg')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <input type="hidden" name="kd6sg_old" value="{{ $kd06->kd6sg }}">
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id=""
                                                class="form-label">Sales</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input id="sales" type="text" class="form-control @error('sales') is-invalid @enderror"
                                                name="sales" value="{{ auth()->user()->employee_name }}" readonly />
                                            @error('sales')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <input type="hidden" name="sales_old" value="{{ $kd06->sales }}">
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id=""
                                                class="form-label">Payterm</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <select class="selectpicker" aria-label="Default select example"
                                                name="payterm" data-live-search="true">
                                                <option value="">Choose Payterm</option>
                                                {{-- @if (auth()->user()->division == 'FABRIC SALES')
                                                <option selected value="P3C / 30% DP BFR PROD/70% CBD">P3C </option>
                                                <option selected value="OOC / CASH BEFORE DELIVERY">OOC</option>
                                                @else --}}
                                                    @foreach ($pays as $pay)
                                                        @if (old('payterm') == $pay->pay_term)
                                                            <option value ="{{ $pay->pay_term }} / {{ $pay->description }}" selected>
                                                                {{ $pay->pay_term }}
                                                            </option>
                                                        @else
                                                            <option value ="{{ $pay->pay_term }} / {{ $pay->description }}">
                                                                {{ $pay->pay_term }}
                                                            </option>
                                                        @endif
                                                    @endforeach
                                                {{-- @endif --}}
                                            </select>
                                            @error('payterm')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <input type="hidden" name="payterm_old" value="{{ $kd06->payterm }}">
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id=""
                                                class="form-label">Assignment</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <select class="selectpicker" aria-label="Default select example"
                                                name="assigment" data-live-search="true">
                                                <option value="">Choose Assignment</option>
                                                @foreach ($clms as $clm)
                                                    @if (old('assigment') == $clm->clmasi)
                                                        <option data-tokens="{{ $clm->clmasi }}" selected>
                                                            {{ $clm->description }}
                                                        </option>
                                                    @else
                                                        <option data-tokens="{{ $clm->clmasi }}">
                                                            {{ $clm->description }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                            @error('kd6sg')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <input type="hidden" name="assigment_old" value="{{ $kd06->assigment }}">
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id=""
                                                class="form-label">Tax</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <select class="selectpicker" aria-label="Default select example"
                                                name="kd6tax" data-live-search="true">
                                                <option value="">Choose Tax</option>
                                                @foreach ($taxs as $tax)
                                                    @if (old('kd6tax') == $tax->tax)
                                                        <option value="{{ $tax->tax }} / {{ $tax->description }}">
                                                            {{ $tax->tax }}
                                                        </option>
                                                    @else
                                                        <option value="{{ $tax->tax }} / {{ $tax->description }}">
                                                            {{ $tax->tax }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                            @error('kd6tax')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <input type="hidden" name="kd6tax_old" value="{{ $kd06->kd6tax }}">
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id=""
                                                class="form-label">Del Term</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <select class="selectpicker" aria-label="Default select example"
                                                name="del_con" data-live-search="true">
                                                <option value="">Choose Del Term</option>
                                                @foreach ($delCons as $delcon)
                                                    @if (old('del_con') == $delcon->del_con)
                                                        <option data-tokens="{{ $delcon->del_con }}" selected>
                                                            {{ $delcon->del_con }}
                                                        </option>
                                                    @else
                                                        <option data-tokens="{{ $delcon->del_con }}">
                                                            {{ $delcon->del_con }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                            @error('del_con')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <input type="hidden" name="del_con_old" value="{{ $kd06->del_con }}">
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id=""
                                                class="form-label">Kurs</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <select class="selectpicker" aria-label="Default select example"
                                                name="kurs" data-live-search="true">
                                                <option value="">Choose Kurs</option>
                                                {{-- <option value="{{ $kd06->kurs }}">{{ $kurs->kurs }}</option> --}}
                                                @foreach ($kurses as $kurs)
                                                    @if (old('kurs') == $kurs->kurs)
                                                        <option data-tokens="{{ $kurs->kurs }}" selected>
                                                            {{ $kurs->kurs }}
                                                        </option>
                                                    @else
                                                        <option data-tokens="{{ $kurs->kurs }}">{{ $kurs->kurs }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                            @error('kurs')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <input type="hidden" name="kurs_old" value="{{ $kd06->kurs }}">
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id=""
                                                class="form-label">Satuan</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <select class="selectpicker" aria-label="Default select example"
                                                name="satuan" data-live-search="true">
                                                <option value="">Choose Satuan</option>
                                                @foreach ($satuans as $satuan)
                                                    @if (old('satuan') == $satuan->satuan)
                                                        <option data-tokens="{{ $satuan->satuan }}" selected>
                                                            {{ $satuan->satuan }}
                                                        </option>
                                                    @else
                                                        <option data-tokens="{{ $satuan->satuan }}">
                                                            {{ $satuan->satuan }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                            @error('satuan')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <input type="hidden" name="satuan_old" value="{{ $kd06->satuan }}">
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id="" class="form-label"
                                                style="font-size: 10px">Biz
                                                Type/Parameter
                                                1</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <select class="selectpicker" aria-label="Default select example"
                                                name="biz_type_p1" data-live-search="true">
                                                <option value="">Choose BizType</option>
                                                @foreach ($bizTypes as $biz)
                                                    @if (old('biz_type_p1') == $biz->biz_type)
                                                        <option data-tokens="{{ $biz->biz_type }}" selected>
                                                            {{ $biz->biz_type }}
                                                        </option>
                                                    @else
                                                        <option data-tokens="{{ $biz->biz_type }}">
                                                            {{ $biz->biz_type }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                            @error('biz_type_p1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <input type="hidden" name="biz_type_p1_old" value="{{ $kd06->biz_type_p1 }}">
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id="" class="form-label">Nama
                                                Agent</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <select class="selectpicker" aria-label="Default select example"
                                                name="nama_agent1" data-live-search="true" id="agent">
                                                <option value="">Choose Agent</option>
                                                @foreach ($agents as $agent)
                                                    @if (old('nama_agent1') == $agent->name1)
                                                        <option data-tokens="{{ $agent->name1 }}" selected>
                                                            {{ $agent->name1 }}
                                                        </option>
                                                    @else
                                                        <option data-tokens="{{ $agent->name1 }}">
                                                            {{ $agent->name1 }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                            @error('nama_agent1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                    </div>
                                    <input type="hidden" name="nama_agent1_old" value="{{ $kd06->nama_agent1 }}">
                                </div>
                                <div class="col-sm-10">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id="" class="form-label">Staff
                                                Member</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input class="form-control @error('staff_member') is-invalid @enderror"
                                                type="staff_member" id="staff_member" name="staff_member">
                                            @error('staff_member')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <input type="hidden" name="staff_member_old" value="{{ $kd06->staff_member }}">
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id=""
                                                class="form-label">%-Com</label>
                                        </div>
                                        <div class="col-sm-6" id="test">

                                            @error('allowance_qty')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <input type="hidden" name="allowance_qty_old" value="{{ $kd06->allowance_qty }}">
                                </div>
                                <div class="col-sm-10">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id=""
                                                class="form-label">Validation From</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input class="form-control @error('from') is-invalid @enderror"
                                                type="date" id="from" name="from">
                                            @error('from')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <input type="hidden" name="from_old" value="{{ $kd06->from }}">
                                </div>
                                <div class="col-sm-10">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id=""
                                                class="form-label">Validation To</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input class="form-control @error('to') is-invalid @enderror" type="date"
                                                id="to" name="to">
                                            @error('to')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <input type="hidden" name="to_old" value="{{ $kd06->to }}">
                                </div>
                                <div class="col-sm-10">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id=""
                                                class="form-label">Percent</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <select class="selectpicker" aria-label="Default select example"
                                                name="pc" data-live-search="true">
                                                <option value="">Choose PC</option>
                                                <option value="Absolute (ammounts)">Absolute (ammounts)</option>
                                                <option value="Relative addit.of percentages">Relative addit.of
                                                    percentages
                                                </option>
                                            </select>
                                            @error('pc')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <input type="hidden" name="pc_old" value="{{ $kd06->pc }}">
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id=""
                                                class="form-label">Print</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <select class="selectpicker" aria-label="Default select example"
                                                name="print" data-live-search="true">
                                                <option value="">Choose Print</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                            @error('print')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <input type="hidden" name="print_old" value="{{ $kd06->print }}">
                                </div>
                                <div class="col-sm-10">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id=""
                                                class="form-label">Status</label>
                                        </div>
                                        <input type="hidden" name="status_old" value="{{ $kd06->status }}">
                                        <div class="col-sm-6">
                                            <select class="selectpicker" aria-label="Default select example" name="status"
                                                data-live-search="true">
                                                <option value="">Choose Status</option>
                                                <option value="1">Active</option>
                                                <option value="2">Inactive
                                                </option>
                                            </select>
                                            @error('status')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                @if (auth()->user()->division == 'FABRIC SALES' && auth()->user()->jabatan == 'Sub Division Manager')
                                    <input type="hidden" name="status_form" value="">
                                    
                                    <input type="hidden" name="created_by"
                                        value="{{ auth()->user()->employee_name }} ">
                                @endif
                                <div class="d-flex justify-content-end">
                                    <div class="col-sm-1 mr-4">
                                        <a href="{{ url()->previous() }}" class="btn btn-danger">BACK</a>
                                    </div>
                                    <div class="col-sm-1">
                                        <button type="submit" class="btn btn-primary">SAVE</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>




        </div>
    </div>

    </div>

    </div>
    </div>
    {{-- </form> --}}


    <script>
        $(document).ready(function() {
            $('#agent').on('change', function(e) {
                var agentID = $(this).val();
                // document.write(agentID);
                var url = '{{ route('getAllow', ':agent') }}'
                url = url.replace(':agent', agentID);

                if (agentID) {
                    $.ajax({
                        url: url,
                        type: "GET",
                        enctype: 'multipart/form-data',
                        data: {
                            "_token": "{{ csrf_token() }}"
                        },

                        // contentType: "application/json; charset=utf-8",
                        dataType: "json",
                        // fail: function(xhr, textStatus, errorThrown) {
                        //     document.write("data");
                        // },
                        success: function(data) {
                            if (data) {
                                $('#test').empty();

                                $.each(data, function(key, vs04) {
                                    $('#test').append(
                                        '<input class="form-control" readonly name="allowance_qty" value="' +
                                        vs04.allow + '">');
                                });

                            } else {
                                $('#test').empty();
                            }
                        }
                    });
                } else {
                    $('#test').empty();
                }
            });
        });
    </script>



@endsection
