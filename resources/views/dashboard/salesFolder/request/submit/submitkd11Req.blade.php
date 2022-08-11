@extends('dashboard.layout.lte')

@section('title', 'Customer Data KD11 Request')

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
    @if ($kd11->association_no1_old == $kd11->association_no1)
    <div class="card">
        <div class="d-flex content-justify-between">
            <div class="col-sm-6">
                <h5 class="card-header">KD11 Association</h5>
            </div>
            <div class="col-sm-6">
                <h5 class="card-header">KD11 Association Request</h5>
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
                                            style="font-size: 15px">No Cust</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="association1" type="text"
                                            class="form-control @error('association1') is-invalid @enderror"
                                            name="association1" value="{{ $kd11->kd11no_cust }}"
                                            style="{{ $kd11->kd11no_cust == null ? 'color:red' : '' }}" disabled />
                                        @error('association1')
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
                                            style="font-size: 15px">Association/KD11</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="association1" type="text"
                                            class="form-control @error('association1') is-invalid @enderror"
                                            name="association1"
                                            value="{{ $kd11->association_no1_old }}"
                                            style="{{ $kd11->association_no1_old == null ? 'color:red' : '' }}"
                                            disabled />
                                        @error('association1')
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
                                        <input id="association1" type="text"
                                            class="form-control @error('association1') is-invalid @enderror"
                                            name="association1" value="{{ $kd11->sd1_old }}"
                                            style="{{ $kd11->sd1_old == null ? 'color:red' : '' }}" disabled />
                                        @error('sd1')
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
                                        <input id="association1" type="text"
                                            class="form-control @error('association1') is-invalid @enderror"
                                            name="association1" value="{{ $kd11->sg1_old }}"
                                            style="{{ $kd11->sg1_old == null ? 'color:red' : '' }}" disabled />
                                        @error('sg1')
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
                                        <label type="text" name="" id="" class="form-label">Central
                                            Regu</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="sales" type="text"
                                            class="form-control @error('sales') is-invalid @enderror" name="sales"
                                            value="{{ $kd11->central_regu1_old }}"
                                            style="{{ $kd11->central_regu1_old == null ? 'color:red' : '' }}" disabled />
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
                                            class="form-label">Conditions</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="sales" type="text"
                                            class="form-control @error('sales') is-invalid @enderror" name="sales"
                                            value="{{ $kd11->conditions1_old }}"
                                            style="{{ $kd11->conditions1_old == null ? 'color:red' : '' }}" disabled />
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
                                            class="form-label">Status</label>
                                    </div>
                                    <div class="col-sm-8">
                                        @if ($kd11->status_old == 1)
                                        <input id="nama1" type="text"
                                        class="form-control @error('nama1') is-invalid @enderror" name="nama1"
                                        value="Active" disabled />
                                    @error('status_old')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                @elseif ($kd11->status_old == 2)
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
                                        @error('sales')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="col-sm-10">
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-4">
                                        <label type="text" name="" id="" class="form-label"
                                            style="font-size: 15px">No Cust</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="association1" type="text"
                                            class="form-control @error('association1') is-invalid @enderror"
                                            name="association1"
                                            value="{{ $kd11->kd11no_cust }}"
                                            style="{{ $kd11->kd11no_cust == null ? 'color:red' : '' }}" disabled />
                                        @error('association1')
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
                                            style="font-size: 15px">Association/KD11</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="association1" type="text"
                                            class="form-control @error('association1') is-invalid @enderror"
                                            name="association1"
                                            value="{{ $kd11->association_no1 }}"
                                            style="{{ $kd11->association_no1 != $kd11->association_no1_old ? 'color:red' : '' }}" disabled />
                                        @error('association1')
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
                                        <input id="association1" type="text"
                                            class="form-control @error('association1') is-invalid @enderror"
                                            name="association1" value="{{ $kd11->sd1 }}"
                                            style="{{ $kd11->sd1 != $kd11->sd1_old ? 'color:red' : '' }}" disabled />
                                        @error('sd1')
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
                                        <input id="association1" type="text"
                                            class="form-control @error('association1') is-invalid @enderror"
                                            name="association1" value="{{ $kd11->sg1 }}"
                                            style="{{ $kd11->sg1 != $kd11->sg1_old ? 'color:red' : '' }}" disabled />
                                        @error('sg1')
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
                                        <label type="text" name="" id="" class="form-label">Central Regu</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="sales" type="text"
                                            class="form-control @error('sales') is-invalid @enderror" name="sales"
                                            value="{{ $kd11->central_regu1 }}"
                                            style="{{ $kd11->central_regu1 != $kd11->central_regu1_old ? 'color:red' : '' }}" disabled />
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
                                            class="form-label">Conditions</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="sales" type="text"
                                            class="form-control @error('sales') is-invalid @enderror" name="sales"
                                            value="{{ $kd11->conditions1 }}"
                                            style="{{ $kd11->conditions1 != $kd11->conditions1_old ? 'color:red' : '' }}" disabled />
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
                                            class="form-label">Status</label>
                                    </div>
                                    <div class="col-sm-8">
                                        @if ($kd11->status == 1)
                                        <input id="nama1" type="text"
                                        class="form-control @error('nama1') is-invalid @enderror" name="nama1"
                                        value="Active" disabled />
                                    @error('status')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                @elseif ($kd11->status == 2)
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
            KD11 Request New
        </div>
        <div class="card-body">
                <hr class="mt-2">
                <h6>KD11 Association</h6>
                <hr class="my-2">
                <div class="col-sm-6">
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-2 mr-5">
                            <label type="text" name="" id=""
                                class="form-label" style="font-size: 15px">No
                                Cust</label>
                        </div>
                        <div class="col-sm-3">
                            <input id="association1" type="text"
                                class="form-control @error('association1') is-invalid @enderror"
                                name="association1"
                                value="{{ $kd11->kd11no_cust ?? '-' }}"
                                style="{{ $kd11->kd11no_cust == null ? 'color:white' : '' }}"
                                disabled />
                            @error('association1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-around my-3">
                    <div class="col-sm-6">
                        <div class="d-flex flex-row mt-2">
                            <div class="col-sm-2 mr-5">
                                <label type="text" name="" id=""
                                    class="form-label" style="font-size: 13px">SD</label>
                            </div>
                            <div class="col-sm-6">
                                <input id="sales" type="text"
                                    class="form-control @error('sales') is-invalid @enderror"
                                    name="sales"
                                    value="{{ $kd11->sd1 ?? '-' }}"
                                    style="{{ $kd11->sd1 == null ? 'color:white' : '' }}"
                                    disabled />
                                @error('sales')
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
                                <label type="text" name="" id=""
                                    class="form-label">SG</label>
                            </div>
                            <div class="col-sm-6">
                                <input id="sales" type="text"
                                    class="form-control @error('sales') is-invalid @enderror"
                                    name="sales"
                                    value="{{ $kd11->sg1 ?? '-' }}"
                                    style="{{ $kd11->sg1 == null ? 'color:white' : '' }}"
                                    disabled />
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
                            <label type="text" name="" id=""
                                class="form-label" style="font-size: 15px">Association/KD11</label>
                        </div>
                        <div class="col-sm-6">
                            <input id="association1" type="text"
                                class="form-control @error('association1') is-invalid @enderror"
                                name="association1"
                                value="{{ $kd11->association_no1 ?? '-' }}"
                                style="{{ $kd11->association_no1 == null ? 'color:white' : '' }}"
                                disabled />
                            @error('association1')
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
                            <label type="text" name="" id=""
                                class="form-label">Central
                                Regu</label>
                        </div>
                        <div class="col-sm-6">
                            <input id="sales" type="text"
                                class="form-control @error('sales') is-invalid @enderror"
                                name="sales"
                                value="{{ $kd11->central_regu1 ?? '-' }}"
                                style="{{ $kd11->central_regu1 == null ? 'color:white' : '' }}"
                                disabled />
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
                            <label type="text" name="" id=""
                                class="form-label">Conditions</label>
                        </div>
                        <div class="col-sm-6">
                            <input id="sales" type="text"
                                class="form-control @error('sales') is-invalid @enderror"
                                name="sales"
                                value="{{ $kd11->conditions1 ?? '-' }}"
                                style="{{ $kd11->conditions1 == null ? 'color:white' : '' }}"
                                disabled />
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
                            <label type="text" name="" id=""
                                class="form-label">Status</label>
                        </div>
                        <div class="col-sm-6">
                            @if ($kd11->status == 1)
                            <input id="nama1" type="text"
                            class="form-control @error('nama1') is-invalid @enderror" name="nama1"
                            value="Active" disabled />
                        @error('status')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    @elseif ($kd11->status == 2)
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
    @endif
    
    <form action="{{ route('updateReqKd11', ['id' => $kd11->id]) }}" method="post">
        @csrf
        @method('put')
        @if (auth()->user()->division == 'FABRIC SALES' && auth()->user()->position_job_name == 'FABRIC SALES EXECUTIVE' && $kd11->status_form == '')
            <input type="hidden" name="status_form" value="created">
            <input type="hidden" name="created_by" value="{{ $kd11->employee_name }}">
            <div class="d-flex flex-row my-3">
                <div class="col-sm-2">
                    <label type="text" name="" id="" class="form-label text-center">Reject
                        Reason</label>
                </div>
                {{-- <div class="col-sm-5">
                    <input id="reject_reason" type="text"
                        class="form-control @error('reject_reason') is-invalid @enderror" name="reject_reason"
                        value="{{ $kd11->reject_reason != '' ? $kd11->reject_reason : '' }}" />
                    @error('reject_reason')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div> --}}
            </div>
        @elseif ($kd11->status_form == 'rejected')
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
                        value="{{ $kd11->reject_reason != '' ? $kd11->reject_reason : '' }}" /> --}}
                        <textarea class="form-control" id="textAreaExample1" rows="4" name="reject_reason" readonly>{!! $kd11->reject_reason != '' ? $kd11->reject_reason : '' !!}</textarea>
                    @error('reject_reason')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        @elseif (auth()->user()->division == 'FABRIC SALES' && auth()->user()->position_job_name == 'DM FABRIC SALES' && $kd11->status_form == 'created')
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
                                    value="{{ $kd11->created_by }}">
                                <label class="form-check-label" for="status_form1" id="submitted">
                                    Approve
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_form" id="rejected"
                                    value="rejected" onclick="javascript:myFunction();">
                                <input type="hidden" class="form-check-input" name="created_by"
                                    value="{{ $kd11->created_by }}">
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
                            value="{{ $kd11->reject_reason != '' ? $kd11->reject_reason : '' }}" /> --}}
                            <textarea class="form-control" id="textAreaExample1" rows="4" name="reject_reason"></textarea>
                        @error('reject_reason')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        @elseif (auth()->user()->position_job_name == 'GM SALES FABRIC & FACTORY MANAGER LPA' && $kd11->status_form == 'aprv 1')
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
                                    value="{{ $kd11->created_by }}">
                                <label class="form-check-label" for="status_form1" id="acknowledged">
                                    Approve
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_form" id="rejected"
                                    value="rejected" onclick="javascript:myFunction2();">
                                <input type="hidden" class="form-check-input" name="created_by"
                                    value="{{ $kd11->created_by }}">
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
                            value="{{ $kd11->reject_reason != '' ? $kd11->reject_reason : '' }}" /> --}}
                            <textarea class="form-control" id="textAreaExample1" rows="4" name="reject_reason"></textarea>
                        @error('reject_reason')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        @elseif (auth()->user()->division == 'INTERNAL AUDIT' && $kd11->status_form == 'aprv 2')
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
                                <input type="hidden" name="created_by" value="{{ $kd11->created_by }}">
                                <label class="form-check-label" for="status_form1">
                                    Input To INTEX
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_form" id="rejected"
                                    value="rejected" onclick="javascript:myFunction3();">
                                <input type="hidden" name="created_by" value="{{ $kd11->created_by }}">
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
                        {{-- <input id="reject_reason" type="text"
                            class="form-control @error('reject_reason') is-invalid @enderror" name="reject_reason"
                            placeholder="Abaikan jika tidak di reject!"
                            value="{{ $kd11->reject_reason != '' ? $kd11->reject_reason : '' }}" /> --}}
                            <textarea class="form-control" id="textAreaExample1" rows="4" name="reject_reason"></textarea>
                        @error('reject_reason')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            @elseif (auth()->user()->division == 'FABRIC SALES' && auth()->user()->position_job_name == 'FABRIC SALES EXECUTIVE' && $kd11->status_form == 'inputted')
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
                            <label for="form-control text-center">{{ $kd11->created_by }}</label>
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
                            <label for="form-control text-center">{{ $kd11->aprv1_by }}</label>
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
                            <label for="form-control text-center">{{ $kd11->aprv2_by }}</label>
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
                            <label for="form-control text-center">{{ $kd11->inputted_by }}</label>
                        </div>
                        <div class="card-footer text-muted" style="font-size: 13px;">
                            Document Control
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-sontent-end">
            @if ((auth()->user()->division == 'FABRIC SALES' && auth()->user()->jabatan == 'Sub Division Manager' && $kd11->status_form != 'rejected') && (auth()->user()->division == 'FABRIC SALES' && auth()->user()->jabatan == 'Sub Division Manager' && $kd11->status_form != '') && (auth()->user()->division == 'FABRIC SALES' && auth()->user()->jabatan == 'Sub Division Manager' && $kd11->status_form != 'inputted'))
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
