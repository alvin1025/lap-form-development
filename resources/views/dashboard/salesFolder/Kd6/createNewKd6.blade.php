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
    <form action="{{ route('kd6.store') }}" method="POST">
        @csrf
        <div class="card-header">
            KD06 Conditions
        </div>
        <div class="card-body">
            <h6 class="text-left mt-2"></h6>
            <hr>
            <div class="d-flex justify-content-between">
                <div class="col-sm-6">
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-2 mr-5">
                            <label type="text" name="" id="" class="form-label">Cust No</label>
                        </div>
                        <div class="col-sm-3">
                            <input id="kd6no_cust" type="text" class="form-control @error('d') is-invalid @enderror"
                                name="kd6no_cust" value="{{ $kd6no_cust }}" readonly />
                            @error('kd6no_cust')
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
                            <label type="text" name="" id="" class="form-label">Sales</label>
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
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <div class="col-sm-6">
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-2 mr-5">
                            <label type="text" name="" id="" class="form-label">SD</label>
                        </div>
                        <div class="col-sm-6">
                            <select class="selectpicker" aria-label="Default select example" name="sd"
                                data-live-search="true">
                                <option value="">Choose SD</option>
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
                <div class="col-sm-6">
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-2 mr-3">
                            <label type="text" name="" id="" class="form-label">SG
                            </label>
                        </div>
                        <div class="col-sm-6">
                            <select class="selectpicker" aria-label="Default select example" name="kd6sg"
                                data-live-search="true">
                                <option value="">Choose SG</option>
                                @foreach ($sgs as $sg)
                                    @if (old('kd6sg') == $sg->sg)
                                        <option data-tokens="{{ $sg->sg }}" selected>{{ $sg->sg }}</option>
                                    @else
                                        <option data-tokens="{{ $sg->sg }}">{{ $sg->sg }}</option>
                                    @endif
                                    {{-- <option data-tokens="{{ $sg->sg }}"
                                        {{ $kd06->kd6sg == $sg->sg ? 'selected' : '' }}>{{ $sg->sg }}</option> --}}
                                @endforeach
                            </select>
                            @error('kd6sg')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between">
                <div class="col-sm-6">
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-2 mr-5">
                            <label type="text" name="" id="" class="form-label">Payterm</label>
                        </div>
                        <div class="col-sm-6">
                            <select class="selectpicker" aria-label="Default select example" name="payterm"
                                data-live-search="true">
                                <option value="">Choose Payterm</option>
                                @if (auth()->user()->division == 'FABRIC SALES')
                                    <option value="P3C / 30% DP BFR PROD/70% CBD">P3C </option>
                                    <option value="00C / CASH BEFORE DELIVERY">OOC</option>
                                @else
                                    @foreach ($pays as $pay)
                                        @if (old('payterm') == $pay->pay_term)
                                            <option value="{{ $pay->pay_term }} / {{ $pay->description }}" selected>
                                                {{ $pay->pay_term }}
                                            </option>
                                        @else
                                            <option value="{{ $pay->pay_term }} / {{ $pay->description }}">
                                                {{ $pay->pay_term }}
                                            </option>
                                        @endif
                                    @endforeach
                                @endif
                            </select>
                            @error('payterm')
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
                            <label type="text" name="" id="" class="form-label">Assignment

                            </label>
                        </div>
                        <div class="col-sm-6">
                            <select class="selectpicker" aria-label="Default select example" name="assigment"
                                data-live-search="true">
                                <option value="">Choose Assignment</option>
                                @foreach ($clms as $clm)
                                    @if (old('assigment') == $clm->clmasi)
                                        <option data-tokens="{{ $clm->clmasi }}" selected>
                                            {{ $clm->description }}
                                        </option>
                                    @else
                                        <option data-tokens="{{ $clm->clmasi }}">{{ $clm->description }}
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
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <div class="col-sm-6">
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-2 mr-5">
                            <label type="text" name="" id="" class="form-label">Tax</label>
                        </div>
                        <div class="col-sm-6">
                            <select class="selectpicker" aria-label="Default select example" name="kd6tax"
                                data-live-search="true">
                                <option value="">Choose Tax</option>
                                @foreach ($taxs as $tax)
                                    @if (old('kd6tax') == $tax->tax)
                                        <option value="{{ $tax->tax }} / {{ $tax->description }}">{{ $tax->tax }}
                                        </option>
                                    @else
                                        <option value="{{ $tax->tax }} / {{ $tax->description }}">{{ $tax->tax }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('kd6tax')
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
                            <label type="text" name="" id="" class="form-label">Status

                            </label>
                        </div>
                        <div class="col-sm-6">
                            <select class="selectpicker" aria-label="Default select example" name="status"
                                data-live-search="true">
                                <option value="">Choose Status</option>
                                <option value="1">Active
                                </option>
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

            </div>
            <div class="col-sm-8">
                <div class="d-flex flex-row mt-2">
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label">Del Term</label>
                    </div>
                    <div class="col-sm-6">
                        <select class="selectpicker" aria-label="Default select example" name="del_con"
                            data-live-search="true">
                            <option value="">Choose DelCon</option>
                            @foreach ($delCons as $delcon)
                                @if (old('del_con') == $delcon->del_con)
                                    <option data-tokens="{{ $delcon->del_con }}" selected>
                                        {{ $delcon->del_con }}
                                    </option>
                                @else
                                    <option data-tokens="{{ $delcon->del_con }}">{{ $delcon->del_con }}
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
                            <option value="">Choose Kurs</option>
                            {{-- <option value="{{ $kd06->kurs }}">{{ $kurs->kurs }}</option> --}}
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
                            <option value="">Choose Satuan</option>
                            @foreach ($satuans as $satuan)
                                @if (old('satuan') == $satuan->satuan)
                                    <option data-tokens="{{ $satuan->satuan }}" selected>
                                        {{ $satuan->satuan }}
                                    </option>
                                @else
                                    <option data-tokens="{{ $satuan->satuan }}">{{ $satuan->satuan }}
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
                </div>
            </div>
            <div class="col-sm-8">
                <div class="d-flex flex-row mt-2">
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label"
                            style="font-size: 10px">Bisnis Type</label>
                    </div>
                    <div class="col-sm-6">
                        <select class="selectpicker" aria-label="Default select example" name="biz_type_p1"
                            data-live-search="true">
                            <option value="">Choose Bisnis Type</option>
                            @foreach ($bizTypes as $biz)
                                @if (old('biz_type_p1') == $biz->biz_type)
                                    <option data-tokens="{{ $biz->biz_type }}" selected>
                                        {{ $biz->biz_type }}
                                    </option>
                                @else
                                    <option data-tokens="{{ $biz->biz_type }}">{{ $biz->biz_type }}
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
                        <select class="selectpicker" aria-label="Default select example" name="nama_agent1"
                            data-live-search="true" id="agent">
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
                    <div class="col-sm-4">
                        <input class="form-control @error('staff_member') is-invalid @enderror" type="staff_member"
                            id="staff_member" name="staff_member" value="{{ old('staff_member') }}">
                        @error('staff_member')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-3">
                        <input class="form-control @error('from') is-invalid @enderror" type="date" id="from"
                            name="from" value="{{ old('from') }}">
                        @error('from')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-3">
                        <input class="form-control @error('to') is-invalid @enderror" type="date" id="to"
                            name="to" value="{{ old('to') }}">
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
                        <label type="text " name="" id="" class="form-label text-center">Percent</label>
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
                    <div class="col-sm-3" id="test">

                        @error('allowance_qty')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-4">
                        <select class="selectpicker" aria-label="Default select example" name="pc"
                            data-live-search="true">
                            <option value="">Choose PC</option>
                            <option value="Absolute (ammounts">Absolute (ammounts)</option>
                            <option value="Relative addit.of percentages">Relative addit.of percentages
                            </option>
                        </select>
                        @error('pc')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-4">
                        <select class="selectpicker" aria-label="Default select example" name="print"
                            data-live-search="true">
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
            </div>


            {{-- <hr class="mt-2">
            <div class="col-sm-8">
                <div class="d-flex flex-row mt-2">
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label">Nama Agent</label>
                    </div>
                    <div class="col-sm-6">
                        <select class="selectpicker" aria-label="Default select example" name="nama_agent1"
                            data-live-search="true">
                            <option selected value="">Open this select menu</option>
                            @foreach ($agents as $agent)
                                @if ($kd06->nama_agent1 == $agent->agent)
                                    <option data-tokens="{{ $agent->agent }}" selected>
                                        {{ $kd06->nama_agent1 }}
                                    </option>
                                @else
                                    <option data-tokens="{{ $agent->agent }}">
                                        {{ $agent->agent }}
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
            </div>
            <div class="col-sm-8">
                <div class="d-flex flex-row mt-2">
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label"></label>
                    </div>
                    <div class="col-sm-6">
                        <select class="selectpicker" aria-label="Default select example" name="nama_agent2"
                            data-live-search="true">
                            <option selected value="">Open this select menu</option>
                            @foreach ($agents as $agent)
                                @if ($kd06->nama_agent2 == $agent->agent)
                                    <option data-tokens="{{ $agent->agent }}" selected>
                                        {{ $kd06->nama_agent2 }}
                                    </option>
                                @else
                                    <option data-tokens="{{ $agent->agent }}">
                                        {{ $agent->agent }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                        @error('nama_agent2')
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
                        <select class="selectpicker" aria-label="Default select example" name="nama_agent3"
                            data-live-search="true">
                            <option selected value="">Open this select menu</option>
                            @foreach ($agents as $agent)
                                @if ($kd06->nama_agent3 == $agent->agent)
                                    <option data-tokens="{{ $agent->agent }}" selected>
                                        {{ $kd06->nama_agent3 }}
                                    </option>
                                @else
                                    <option data-tokens="{{ $agent->agent }}">
                                        {{ $agent->agent }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                        @error('nama_agent3')
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
                        <label type="text" name="" id="" class="form-label" style="font-size: 13px">Staff
                            Member</label>
                    </div>
                    <div class="col-sm-6">
                        <input id="staff_member" type="text"
                            class="form-control @error('staff_member') is-invalid @enderror" name="staff_member"
                            value="{{ $kd06->staff_member }}" />
                        @error('staff_member')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="d-flex flex-row mt-3">
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label">Agent
                            Period</label>
                    </div>
                    <div class="col-sm-6">

                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <div class="col-sm-6">
                    <div class="d-flex flex-row">
                        <div class="col-sm-2 mr-5">
                            <label type="text" name="" id="" class="form-label" style="font-size: 13px">From
                            </label>
                        </div>
                        <div class="col-sm-6">
                            <input id="from" type="date" class="form-control @error('from') is-invalid @enderror"
                                name="from" value="{{ $kd06->from }}" />
                            @error('from')
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
                            <label type="text" name="" id="" class="form-label" style="font-size: 13px">To
                            </label>
                        </div>
                        <div class="col-sm-6">
                            <input id="to" type="date" class="form-control @error('to') is-invalid @enderror" name="to"
                                value="{{ $kd06->to }}" />
                            @error('to')
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
                        <label type="text" name="" id="" class="form-label" style="font-size: 12px">Allowance Qty
                            %</label>
                    </div>
                    <div class="col-sm-3">
                        <input id="allowance_qty" type="text"
                            class="form-control @error('allowance_qty') is-invalid @enderror" name="allowance_qty"
                            value="{{ $kd06->allowance_qty }}" />
                        @error('allowance_qty')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-2">
                        <label type="text" name="" id="" class="form-label">%</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="d-flex flex-row mt-3">
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label">P.C</label>
                    </div>
                    <div class="col-sm-3">
                        <input id="pc" type="text" class="form-control @error('pc') is-invalid @enderror" name="pc"
                            value="{{ $kd06->pc }}" />
                        @error('pc')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="d-flex flex-row mt-3">
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label">Print</label>
                    </div>
                    <div class="col-sm-3">
                        <input id="print" type="text" class="form-control @error('print') is-invalid @enderror"
                            name="print" value="{{ $kd06->print }}" />
                        @error('print')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div> --}}
        </div>
        <div class="d-flex justify-content-end">
            <div class="col-sm-1">
                <a href="{{ route('kd2.index') }}" class="btn btn-danger">BACK</a>
            </div>
            <div class="col-sm-1">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>

    </form>

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
                                        '<input class="form-control" name="allowance_qty" value="' +
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
