@extends('dashboard.layout.lte')

@section('title', 'Edit Kd06')

@section('content')

    <form action="{{ route('updatekd6', ['id' => $kd06->id]) }}" method="post">
        @csrf
        @method('put')
        <div class="row">
            <h5 class="text-center">@yield('title')</h5>
            {{-- </div> --}}
        </div>
        <hr>

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
                                name="kd6no_cust" value="{{ $kd06->kd6no_cust }}" readonly />
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
                            <select class="selectpicker" aria-label="Default select example" name="sales"
                                data-live-search="true">
                                @foreach ($users as $user)
                                    @if ($kd06->sales == $user->employee_name)
                                        <option data-tokens="{{ $user->employee_name }}" selected>
                                            {{ $kd06->sales }}
                                        </option>
                                    @else
                                        <option data-tokens="{{ $user->employee_name }}">
                                            {{ $user->employee_name }}</option>
                                    @endif
                                @endforeach
                            </select>
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
                                <option value="{{ $kd06->sd }}">{{ $kd06->sd }}</option>
                                @foreach ($sds as $sd)
                                    @if ($kd06->sd == $sd->sd)
                                        <option data-tokens="{{ $sd->sd }}" selected>{{ $kd06->sd == $sd->sd }}
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
                                <option value="{{ $kd06->kd6sg }}">{{ $kd06->kd6sg }}</option>
                                @foreach ($sgs as $sg)
                                    @if (old('kd6sg', $kd06->kd6sg) == $sg->sg)
                                        <option data-tokens="{{ $sg->sg }}" selected>{{ $kd06->kd6sg }}</option>
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
                                @foreach ($pays as $pay)
                                    @if ($kd06->payterm == $pay->pay_term)
                                        <option data-tokens="{{ $pay->pay_term }}" selected>
                                            {{ $pay->pay_term }}
                                        </option>
                                    @else
                                        <option data-tokens="{{ $pay->pay_term }}">{{ $pay->pay_term }}
                                        </option>
                                    @endif
                                @endforeach
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
                                @foreach ($clms as $clm)
                                    @if ($kd06->assigment == $clm->clmasi)
                                        <option data-tokens="{{ $clm->clmasi }}" selected>
                                            {{ $clm->clmasi == $clm->description }}
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
            <div class="col-sm-8">
                <div class="d-flex flex-row mt-2">
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label">Tax</label>
                    </div>
                    <div class="col-sm-6">
                        <select class="selectpicker" aria-label="Default select example" name="kd6tax"
                            data-live-search="true">
                            <option value="{{ $kd06->kd6tax }}">{{ $kd06->kd6tax }}</option>
                            @foreach ($taxs as $tax)
                                @if ($kd06->kd6tax == $tax->tax)
                                    <option data-tokens="{{ $tax->tax }}" selected>{{ $kd06->kd6tax }}
                                    </option>
                                @else
                                    <option data-tokens="{{ $tax->tax }}">{{ $tax->tax }}</option>
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
            <div class="col-sm-8">
                <div class="d-flex flex-row mt-2">
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label">Del.Con</label>
                    </div>
                    <div class="col-sm-6">
                        <select class="selectpicker" aria-label="Default select example" name="del_con"
                            data-live-search="true">
                            <option value="{{ $kd06->del_con }}">{{ $kd06->del_con }}</option>
                            @foreach ($delCons as $delcon)
                                @if ($kd06->del_con == $delcon->del_con)
                                    <option data-tokens="{{ $delcon->del_con }}" selected>
                                        {{ $kd06->del_con }}
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
                            <option value="{{ $kd06->kurs }}">{{ $kd06->kurs }}</option>
                            @foreach ($kurses as $kurs)
                                @if ($kd06->kurs == $kurs->kurs)
                                    <option data-tokens="{{ $kurs->kurs }}" selected>{{ $kd06->kurs }}
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
                            @foreach ($satuans as $satuan)
                                @if ($kd06->satuan == $satuan->satuan)
                                    <option data-tokens="{{ $satuan->satuan }}" selected>
                                        {{ $kd06->satuan }}
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
                        <label type="text" name="" id="" class="form-label" style="font-size: 10px">Biz
                            Type/Parameter
                            1</label>
                    </div>
                    <div class="col-sm-6">
                        <select class="selectpicker" aria-label="Default select example" name="biz_type_p1"
                            data-live-search="true">
                            @foreach ($bizTypes as $biz)
                                @if ($kd06->biz_type_p1 == $biz->biz_type)
                                    <option data-tokens="{{ $biz->biz_type }}" selected>
                                        {{ $kd06->biz_type_p1 }}
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
            {{-- <div class="col-sm-10 mt-3">
                <div class="d-flex flex-row">
                    <div class="col-sm-2">
                        <label type="text" name="" id="" class="form-label">SG/Brand</label>
                    </div>
                    <div class="col-sm-3">
                        <label type="text" name="" id="" class="form-label">Kode Brand</label>
                    </div>
                    <div class="col-sm-5">
                        <label type="text " name="" id="" class="form-label text-center">Long
                            Description</label>
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
                            value="{{ $kd06->kode_brand1 }}">
                    </div>
                    <div class="col-sm-5">
                        <input class="form-control" type="text" id="long_desc" name="long_desc1"
                            value="{{ $kd06->long_desc1 }}">
                    </div>
                    <div class="col-sm-3">
                        <select class="selectpicker" aria-label="Default select example" name="negara1"
                            data-live-search="true">
                            <option selected value="">Open this select menu</option>
                            @foreach ($negaras as $negara)
                                @if ($kd06->negara1 == $negara->nama_negara)
                                    <option data-tokens="{{ $negara->nama_negara }}" selected>
                                        {{ $kd06->negara1 }}
                                    </option>
                                @else
                                    <option data-tokens="{{ $negara->nama_negara }}">
                                        {{ $negara->nama_negara }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-sm-10">
                <div class="d-flex flex-row">
                    <div class="col-sm-2">
                        <label type="text" name="" id="" class="form-label"></label>
                    </div>
                    <div class="col-sm-3">
                        <input class="form-control" type="text" id="kode_brand" name="kode_brand2"
                            value="{{ $kd06->kode_brand2 }}">
                    </div>
                    <div class="col-sm-5">
                        <input class="form-control" type="text" id="long_desc" name="long_desc2"
                            value="{{ $kd06->long_desc2 }}">
                    </div>
                    <div class="col-sm-3">
                        <select class="selectpicker" aria-label="Default select example" name="negara2"
                            data-live-search="true">
                            <option selected value="">Open this select menu</option>
                            @foreach ($negaras as $negara)
                                @if ($kd06->negara2 == $negara->nama_negara)
                                    <option data-tokens="{{ $negara->nama_negara }}" selected>
                                        {{ $kd06->negara2 }}
                                    </option>
                                @else
                                    <option data-tokens="{{ $negara->nama_negara }}">
                                        {{ $negara->nama_negara }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-sm-10">
                <div class="d-flex flex-row">
                    <div class="col-sm-2">
                        <label type="text" name="" id="" class="form-label"></label>
                    </div>
                    <div class="col-sm-3">
                        <input class="form-control" type="text" id="kode_brand" name="kode_brand3"
                            value="{{ $kd06->kode_brand3 }}">
                    </div>
                    <div class="col-sm-5">
                        <input class="form-control" type="text" id="long_desc" name="long_desc3"
                            value="{{ $kd06->long_desc3 }}">
                    </div>
                    <div class="col-sm-3">
                        <select class="selectpicker" aria-label="Default select example" name="negara3"
                            data-live-search="true">
                            <option selected value="">Open this select menu</option>
                            @foreach ($negaras as $negara)
                                @if ($kd06->negara3 == $negara->nama_negara)
                                    <option data-tokens="{{ $negara->nama_negara }}" selected>
                                        {{ $kd06->negara3 }}
                                    </option>
                                @else
                                    <option data-tokens="{{ $negara->nama_negara }}">
                                        {{ $negara->nama_negara }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-sm-10">
                <div class="d-flex flex-row">
                    <div class="col-sm-2">
                        <label type="text" name="" id="" class="form-label"></label>
                    </div>
                    <div class="col-sm-3">
                        <input class="form-control" type="text" id="kode_brand" name="kode_brand4"
                            value="{{ $kd06->kode_brand4 }}">
                    </div>
                    <div class="col-sm-5">
                        <input class="form-control" type="text" id="long_desc" name="long_desc4"
                            value="{{ $kd06->long_desc4 }}">
                    </div>
                    <div class="col-sm-3">
                        <select class="selectpicker" aria-label="Default select example" name="negara4"
                            data-live-search="true">
                            <option selected value="">Open this select menu</option>
                            @foreach ($negaras as $negara)
                                @if ($kd06->negara4 == $negara->nama_negara)
                                    <option data-tokens="{{ $negara->nama_negara }}" selected>
                                        {{ $negara->nama_negara }}
                                    </option>
                                @else
                                    <option data-tokens="{{ $negara->nama_negara }}">
                                        {{ $negara->nama_negara }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-sm-10">
                <div class="d-flex flex-row">
                    <div class="col-sm-2">
                        <label type="text" name="" id="" class="form-label"></label>
                    </div>
                    <div class="col-sm-3">
                        <input class="form-control" type="text" id="kode_brand" name="kode_brand5"
                            value="{{ $kd06->kode_brand5 }}">
                    </div>
                    <div class="col-sm-5">
                        <input class="form-control" type="text" id="long_desc" name="long_desc5"
                            value="{{ $kd06->long_desc5 }}">
                    </div>
                    <div class="col-sm-3">
                        <select class="selectpicker" aria-label="Default select example" name="negara5"
                            data-live-search="true">
                            <option selected value="">Open this select menu</option>
                            @foreach ($negaras as $negara)
                                @if ($kd06->negara5 == $negara->nama_negara)
                                    <option data-tokens="{{ $negara->nama_negara }}" selected>
                                        {{ $kd06->negara5 }}
                                    </option>
                                @else
                                    <option data-tokens="{{ $negara->nama_negara }}">
                                        {{ $negara->nama_negara }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
            </div> --}}

            <div class="col-sm-8 my-2 text-center">
                <div class="d-flex flex-row">
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label"></label>
                    </div>
                    <div class="col-sm-4">
                        <label type="text" name="" id="" class="form-label"></label>
                    </div>
                    <div class="col-sm-4">
                        <label type="text " name="" id="" class="form-label text-center">Staff Member</label>
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
                            data-live-search="true">
                            @foreach ($agents as $agent)
                                @if ($kd06->nama_agent1 == $agent->description)
                                    <option data-tokens="{{ $agent->description }}" selected>
                                        {{ $agent->description }}
                                    </option>
                                @else
                                    <option data-tokens="{{ $agent->description }}">
                                        {{ $agent->description }}
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
                            id="staff_member" name="staff_member" value="{{ $kd06->staff_member }}">
                        @error('staff_member')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-3">
                        <input class="form-control @error('from') is-invalid @enderror" type="date" id="from" name="from"
                            value="{{ $kd06->from }}">
                        @error('from')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-3">
                        <input class="form-control @error('to') is-invalid @enderror" type="date" id="to" name="to"
                            value="{{ $kd06->to }}">
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
                        <input class="form-control @error('allowance_qty') is-invalid @enderror" type="allowance_qty"
                            id="allowance_qty" name="allowance_qty" value="{{ $kd06->allowance_qty }}">
                        @error('allowance_qty')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-4">
                        <select class="selectpicker" aria-label="Default select example" name="pc"
                            data-live-search="true">
                            <option value="A" {{ $kd06->pc == 'A' ? 'selected' : '' }}>Absolute (ammounts)</option>
                            <option value="R" {{ $kd06->pc == 'R' ? 'selected' : '' }}>Relative addit.of percentages
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
                            <option value="Y" {{ $kd06->print == 'Y' ? 'selected' : '' }}>Yes</option>
                            <option value="N" {{ $kd06->print == 'N' ? 'selected' : '' }}>No</option>
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

        <div class="
                            d-flex justify-content-end mb-5">
            <div class="col-sm-1">
                <a href="{{ route('inputan.index') }}" class="btn btn-primary">BACK</a>
            </div>
            <div class="col-sm-1 mr-5">
                <button type="submit" class="btn btn-primary">SAVE</button>
            </div>
        </div>
    </form>


    @push('after-script')
        <script>
            $(document).ready(function() {
                'use-strict';
                $('#dt-init').DataTable();
                $('#dt-init2').DataTable();
                $('#dt-init4').DataTable();
            });
            var i = 0;

            $("#add").click(function() {
                ++i;
                $("#kd05_1").append($("#test").html());
            });
        </script>
    @endpush
@endsection
