@extends('dashboard.layout.lte')

@section('title', 'SALES CONDITION KD06')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center border-bottom">
        <h1 class="h2">@yield('title')</h1>
        <div class="col-sm-2">
            {{-- <a href="{{ route('newKd6', $kd06->kd6no_cust) }}" class="btn btn-success">New</a> --}}
            {{-- <button type="button" class="btn btn-success me-2 remove-tr" id="add">Add More</button> --}}
        </div>
    </div>

    @error('short_name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif
   
    <form action="{{ route('kd6.update', ['kd6' => $kd06->id]) }}" method="POST">
        @csrf
        @method('put')

        <div class="d-flex flex-row my-2 justify-content-end">

        </div>
        <div class="card-header">
            KD06 Conditions
        </div>
        <div class="col-sm-6">
            <input id="sdsg" type="hidden"
                class="form-control @error('sdsg') is-invalid @enderror" name="sdsg"
                value="{{ old('sdsg', $kd06->sdsg) }}" />
                @error('sdsg')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
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
                                name="kd6no_cust" value="{{ $kd06->kd6no_cust }}" readonly onkeyup="getVal();"/>
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
                            @if (auth()->user()->division == 'FABRIC SALES' && auth()->user()->position_job_name == 'FABRIC SALES EXECUTIVE')
                                <input id="sales" type="text"
                                    class="form-control @error('sales') is-invalid @enderror" name="sales"
                                    value="{{ $kd06->sales != '' ? $kd06->sales : auth()->user()->employee_name }}"
                                    readonly />
                            @else
                                <input id="sales" type="text"
                                    class="form-control @error('sales') is-invalid @enderror" name="sales"
                                    value="{{ $kd06->sales }}" readonly />
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
            <div class="d-flex justify-content-between">
                <div class="col-sm-6">
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-2 mr-5">
                            <label type="text" name="" id="" class="form-label">SD</label>
                        </div>
                        <div class="col-sm-6">
                            <select class="selectpicker" aria-label="Default select example" name="sd"
                                data-live-search="true" id="sd" onchange="getValue();" data-container="body">
                                <option value="{{ $kd06->sd }}" selected>{{ $kd06->sd }}</option>
                                @foreach ($sds as $sd)
                                    @if ($kd06->sd == $sd->sd)
                                        <option data-tokens="{{ $sd->sd }}">{{ $kd06->sd == $sd->sd }}
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
                                data-live-search="true" id="sg" onchange="getValue();" data-container="body">
                                <option value="{{ $kd06->kd6sg }}" selected>{{ $kd06->kd6sg }}</option>
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
                                data-live-search="true" data-container="body">
                                <option selected value="{{ $kd06->payterm }}" selected>{{ $kd06->payterm }}</option>
                                @if (auth()->user()->division == 'FABRIC SALES')
                                    <option value="P3C / 30% DP BFR PROD/70% CBD">P3C </option>
                                    <option value="00C / CASH BEFORE DELIVERY">OOC</option>
                                @else
                                    @foreach ($pays as $pay)
                                        @if (old('payterm') == $pay->pay_term)
                                            <option value="{{ $pay->pay_term }} / {{ $pay->description }}">
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
                                data-live-search="true" data-container="body">
                                <option selected value="{{ $kd06->assigment }}" selected>{{ $kd06->assigment }}
                                </option>
                                @foreach ($clms as $clm)
                                    @if ($kd06->assigment == $clm->clmasi)
                                        <option data-tokens="{{ $clm->clmasi }}">
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
            <div class="d-flex justify-content-between">
                <div class="col-sm-6">
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-2 mr-5">
                            <label type="text" name="" id="" class="form-label">Tax</label>
                        </div>
                        <div class="col-sm-6">
                            <select class="selectpicker" aria-label="Default select example" name="kd6tax"
                                data-live-search="true" data-container="body">
                                <option value="{{ $kd06->kd6tax }}" selected>{{ $kd06->kd6tax }}</option>
                                @foreach ($taxs as $tax)
                                    @if ($kd06->kd6tax == $tax->tax)
                                        <option value="{{ $tax->tax }} / {{ $tax->description }}">
                                            {{ $kd06->kd6tax }}
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
                                <option value="1" {{ $kd06->status == 1 ? 'selected' : '' }}>Active
                                </option>
                                <option value="2" {{ $kd06->status == 2 ? 'selected' : '' }}>Inactive
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
                            data-live-search="true" data-container="body">
                            <option value="{{ $kd06->del_con }}" selected>{{ $kd06->del_con }}</option>
                            @foreach ($delCons as $delcon)
                                @if ($kd06->del_con == $delcon->del_con)
                                    <option data-tokens="{{ $delcon->del_con }}">
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
                            data-live-search="true" data-container="body">
                            <option value="{{ $kd06->kurs }}" selected>{{ $kd06->kurs }}</option>
                            @foreach ($kurses as $kurs)
                                @if ($kd06->kurs == $kurs->kurs)
                                    <option data-tokens="{{ $kurs->kurs }}">{{ $kd06->kurs }}
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
                            data-live-search="true" data-container="body">
                            <option value="{{ $kd06->satuan }}" selected>{{ $kd06->satuan }}</option>
                            @foreach ($satuans as $satuan)
                                @if ($kd06->satuan == $satuan->satuan)
                                    <option data-tokens="{{ $satuan->satuan }}">
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
                        <label type="text" name="" id="" class="form-label"
                            style="font-size: 10px">Bisnis Type</label>
                    </div>
                    <div class="col-sm-6">
                        <select class="selectpicker" aria-label="Default select example" name="biz_type_p1"
                            data-live-search="true" data-container="body">
                            <option value="{{ $kd06->biz_type_p1 }}" selected>{{ $kd06->biz_type_p1 }}
                            </option>
                            @foreach ($bizTypes as $biz)
                                @if ($kd06->biz_type_p1 == $biz->biz_type)
                                    <option data-tokens="{{ $biz->biz_type }}">
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
                            data-live-search="true" id="agent" data-container="body">
                            <option value="{{ $kd06->nama_agent1 }}" selected>{{ $kd06->nama_agent1 }}</option>
                            @foreach ($agents as $agent)
                                @if ($kd06->nama_agent1 == $agent->name1)
                                    <option data-tokens="{{ $agent->name1 }}">
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
                            id="staff_member" name="staff_member"
                            value="{{ old('staff_member', $kd06->staff_member) }}">
                        @error('staff_member')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-3">
                        <input class="form-control @error('from') is-invalid @enderror" type="date" id="from"
                            name="from" value="{{ old('from', $kd06->from) }}">
                        @error('from')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-3">
                        <input class="form-control @error('to') is-invalid @enderror" type="date" id="to"
                            name="to" value="{{ old('to', $kd06->to) }}">
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
                            <option value="">Choose Percent</option>
                            <option value="Absolute (ammounts)"
                                {{ $kd06->pc == 'Absolute (ammounts)' ? 'selected' : '' }}>Absolute (ammounts)</option>
                            <option value="Relative addit.of percentages"
                                {{ $kd06->pc == 'Relative addit.of percentages' ? 'selected' : '' }}>Relative addit.of
                                percentages
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
                            <option value="Yes" {{ $kd06->print == 'Yes' ? 'selected' : '' }}>Yes</option>
                            <option value="No" {{ $kd06->print == 'No' ? 'selected' : '' }}>No</option>
                        </select>
                        @error('print')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <div class="col-sm-1">
                <a href="{{ route('kd2.index') }}" class="btn btn-danger">BACK</a>
            </div>
            <div class="col-sm-1">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>


    <script>
        $(document).ready(function() {
            function call_ajax(agentID) {
                var url = '{{ route('getAllow', ':agent') }}'
                url = url.replace(':agent', agentID);
                if (agentID) {
                    $.ajax({
                        url: url,
                        type: "GET",
                        data: {
                            "_token": "{{ csrf_token() }}"
                        },
                        dataType: "json",
                        success: function($data) {
                            $('#test').empty();
                            $.each(data, function(key, vs04) {
                                $('#test').append(
                                    '<input name="allowance_qty" class="form-control" value="' +
                                    vs04.allow + '">');
                            });

                        }
                    });
                } else {
                    $('input[id="test"]').append('<input class="form-control" value="' + vs04.allow + '">');
                }
            }
            $('#agent').on('change', function() {
                var agentID = $(this).val();
                // window.print(agentID);
                // document.write(agentID);
                if (agentID) {
                    $.ajax({
                        url: '/getAllow/' + agentID,
                        type: "GET",
                        data: {
                            "_token": "{{ csrf_token() }}"
                        },
                        dataType: "json",
                        success: function(data) {
                            $('#test').empty();
                            $.each(data, function(key, vs04) {
                                $('#test').append(
                                    '<input class="form-control" readonly name="allowance_qty" value="' +
                                    vs04.allow + '">');
                            });
                        }
                    });
                }
            });
            call_ajax("<?php echo $kd06->nama_agent1; ?>");
        });
    </script>
    <script>
        function getVal(){
            var sd = document.getElementById('sd').value;
            var sg = document.getElementById('sg').value;
            let cust = document.getElementById('kd6no_cust').value;
            var sdsg;

            sdsg = cust+sd+sg
            document.getElementById('sdsg').value = sdsg;

        }
    </script>


@endsection
