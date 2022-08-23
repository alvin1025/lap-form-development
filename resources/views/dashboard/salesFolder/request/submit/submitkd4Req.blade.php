@extends('dashboard.layout.lte')

@section('title', 'Customer Data KD04 Request')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center border-bottom">
        <h1 class="h2">@yield('title')</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif
    {{-- <form action="{{ route('kd4.update', ['kd4' => $kd04->id]) }}" method="POST">
        @csrf
        @method('put') --}}
    <h6 class="text-left mt-3">KD04 Finance</h6>
    <hr>
    <div class="row">
        <div class="d-flex justify-content-between">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="col-sm-10">
                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-4">
                                    <label type="text" name="" id="" class="form-label">Cust No</label>
                                </div>
                                <div class="col-sm-6">
                                    <input id="kd4no_cust" type="type"
                                        class="form-control @error('kd4no_cust') is-invalid @enderror" name="kd4no_cust"
                                        value="{{ $kd04->kd4no_cust }}" disabled />
                                    @error('kd4no_cust')
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
                                    <label type="text" name="" id="" class="form-label">Debitor
                                        No</label>
                                </div>
                                <div class="col-sm-6">
                                    <input id="no_debitor" type="text"
                                        class="form-control @error('no_debitor') is-invalid @enderror" name="no_debitor"
                                        value="{{ $kd04->no_debitor_old }}" disabled />
                                    @error('no_debitor')
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
                                    <label type="text" name="" id="" class="form-label">Creditor
                                        No</label>
                                </div>
                                <div class="col-sm-6">
                                    <input id="no_creditor" type="text"
                                        class="form-control @error('no_creditor') is-invalid @enderror" name="no_creditor"
                                        value="{{ $kd04->no_creditor_old }}" disabled />
                                    @error('no_creditor')
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
                                    <label type="text" name="" id="" class="form-label">Group Cust
                                        No</label>
                                </div>
                                <div class="col-sm-6">
                                    <input id="no_group_cust" type="text"
                                        class="form-control @error('no_group_cust') is-invalid @enderror"
                                        name="no_group_cust" value="{{ $kd04->no_group_cust_old }}" disabled />
                                    @error('no_group_cust')
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
                                    <label type="text" name="" id="" class="form-label">Credit
                                        Cust</label>
                                </div>
                                <div class="col-sm-6">
                                    <input id="credit_cust" type="text"
                                        class="form-control @error('credit_cust') is-invalid @enderror" name="credit_cust"
                                        value="{{ $kd04->credit_cust_old }}" disabled />
                                    @error('credit_cust')
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
                                    <label type="text" name="" id="" class="form-label">Valid
                                        from</label>
                                </div>
                                <div class="col-sm-6">
                                    <input id="credit_cust" type="text"
                                        class="form-control @error('credit_cust') is-invalid @enderror" name="credit_cust"
                                        value="{{ $kd04->credit_from_old }}" disabled />
                                    @error('credit_cust')
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
                                    <label type="text" name="" id="" class="form-label">Valid
                                        To</label>
                                </div>
                                <div class="col-sm-6">
                                    <input id="credit_cust" type="text"
                                        class="form-control @error('credit_cust') is-invalid @enderror" name="credit_cust"
                                        value="{{ $kd04->credit_to_old }}" disabled />
                                    @error('credit_cust')
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
                                    <label type="text" name="" id="" class="form-label">Credit
                                        Limit</label>
                                </div>
                                <div class="col-sm-7">
                                    <input class="form-control @error('credit_limit') is-invalid @enderror" type="text"
                                        id="credit_limit" name="credit_limit" value="{{ $kd04->credit_limit_old }}"
                                        disabled>
                                    @error('credit_limit')
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
                                        style="font-size: 12px">Credit
                                        Line
                                        Check</label>
                                </div>
                                <div class="col-sm-10">
                                    <input class="form-control @error('credit_to') is-invalid @enderror" type="text"
                                        id="credit_to" name="credit_to" value="{{ $kd04->credit_line_check_old }}"
                                        disabled>
                                    @error('credit_line_check')
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
                                        style="font-size: 13px">Block
                                        Delivery</label>
                                </div>
                                <div class="col-sm-10">
                                    <input id="block_delivery" type="text"
                                        class="form-control @error('block_delivery') is-invalid @enderror"
                                        name="block_delivery" value="{{ $kd04->block_delivery_old }}" disabled />
                                    @error('block_delivery')
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
                                    <label type="text" name="" id="" class="form-label">Block
                                    </label>
                                </div>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="flexCheckIndeterminate"
                                            name="block" {{ $kd04->block_old == 'block' ? 'checked' : '' }}
                                            disabled>
                                    </div>
                                    @error('block')
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
                                        style="font-size: 13px">Block
                                        Reason
                                    </label>
                                </div>
                                <div class="col-sm-10">
                                    <input id="block_delivery" type="text"
                                        class="form-control @error('block_delivery') is-invalid @enderror"
                                        name="block_delivery" value="{{ $kd04->block_reason_old }}" disabled />

                                    @error('block_reason')
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
                                    <label type="text" name="" id="" class="form-label">Cust
                                        No</label>
                                </div>
                                <div class="col-sm-6">
                                    <input id="kd4no_cust" type="type"
                                        class="form-control @error('kd4no_cust') is-invalid @enderror" name="kd4no_cust"
                                        value="{{ $kd04->kd4no_cust }}" disabled />
                                    @error('kd4no_cust')
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
                                    <label type="text" name="" id="" class="form-label">Debitor
                                        No</label>
                                </div>
                                <div class="col-sm-6">
                                    <input id="no_debitor" type="text"
                                        class="form-control @error('no_debitor') is-invalid @enderror" name="no_debitor"
                                        value="{{ $kd04->no_debitor }}" style="{{ $kd04->no_debitor != $kd04->no_debitor_old ? 'color:red' : '' }}" disabled />
                                    @error('no_debitor')
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
                                    <label type="text" name="" id="" class="form-label">Creditor
                                        No</label>
                                </div>
                                <div class="col-sm-6">
                                    <input id="no_creditor" type="text"
                                        class="form-control @error('no_creditor') is-invalid @enderror"
                                        name="no_creditor" value="{{ $kd04->no_creditor }}" style="{{ $kd04->no_creditor != $kd04->no_creditor_old ? 'color:red' : '' }}" disabled />
                                    @error('no_creditor')
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
                                    <label type="text" name="" id="" class="form-label">Group Cust
                                        No</label>
                                </div>
                                <div class="col-sm-6">
                                    <input id="no_group_cust" type="text"
                                        class="form-control @error('no_group_cust') is-invalid @enderror"
                                        name="no_group_cust" value="{{ $kd04->no_group_cust }}" style="{{ $kd04->no_group_cust != $kd04->no_group_cust_old ? 'color:red' : '' }}" disabled />
                                    @error('no_group_cust')
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
                                    <label type="text" name="" id="" class="form-label">Credit
                                        Cust</label>
                                </div>
                                <div class="col-sm-6">
                                    <input id="credit_cust" type="text"
                                        class="form-control @error('credit_cust') is-invalid @enderror"
                                        name="credit_cust" value="{{ $kd04->credit_cust }}" style="{{ $kd04->credit_cust != $kd04->credit_cust_old ? 'color:red' : '' }}" disabled />
                                    @error('credit_cust')
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
                                    <label type="text" name="" id="" class="form-label">Valid
                                        from</label>
                                </div>
                                <div class="col-sm-6">
                                    <input id="credit_cust" type="text"
                                        class="form-control @error('credit_cust') is-invalid @enderror"
                                        name="credit_cust" value="{{ $kd04->credit_from }}" style="{{ $kd04->credit_from != $kd04->credit_from_old ? 'color:red' : '' }}" disabled />
                                    @error('credit_cust')
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
                                    <label type="text" name="" id="" class="form-label">Valid
                                        To</label>
                                </div>
                                <div class="col-sm-6">
                                    <input id="credit_cust" type="text"
                                        class="form-control @error('credit_cust') is-invalid @enderror"
                                        name="credit_cust" value="{{ $kd04->credit_to }}" style="{{ $kd04->credit_to != $kd04->credit_to_old ? 'color:red' : '' }}" disabled />
                                    @error('credit_cust')
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
                                    <label type="text" name="" id="" class="form-label">Credit
                                        Limit</label>
                                </div>
                                <div class="col-sm-7">
                                    <input class="form-control @error('credit_limit') is-invalid @enderror"
                                        type="text" id="credit_limit" name="credit_limit"
                                        value="{{ $kd04->credit_limit }}" style="{{ $kd04->credit_limit != $kd04->credit_limit_old ? 'color:red' : '' }}" disabled>
                                    @error('credit_limit')
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
                                        style="font-size: 12px">Credit
                                        Line
                                        Check</label>
                                </div>
                                <div class="col-sm-10">
                                    <input class="form-control @error('credit_to') is-invalid @enderror" type="text"
                                        id="credit_to" name="credit_to" value="{{ $kd04->credit_line_check }}" style="{{ $kd04->credit_line_check != $kd04->credit_line_check_old ? 'color:red' : '' }}"
                                        disabled>
                                    @error('credit_line_check')
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
                                        style="font-size: 13px">Block
                                        Delivery</label>
                                </div>
                                <div class="col-sm-10">
                                    <input id="block_delivery" type="text"
                                        class="form-control @error('block_delivery') is-invalid @enderror"
                                        name="block_delivery" value="{{ $kd04->block_delivery }}" style="{{ $kd04->block_delivery != $kd04->block_delivery_old ? 'color:red' : '' }}" disabled />
                                    @error('block_delivery')
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
                                    <label type="text" name="" id="" class="form-label">Block
                                    </label>
                                </div>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="flexCheckIndeterminate"
                                            name="block" {{ $kd04->block == 'block' ? 'checked' : '' }} style="{{ $kd04->block != $kd04->block_old ? 'color:red' : '' }}"
                                            disabled>
                                    </div>
                                    @error('block')
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
                                        style="font-size: 13px">Block
                                        Reason
                                    </label>
                                </div>
                                <div class="col-sm-10">
                                    <input id="block_delivery" type="text"
                                        class="form-control @error('block_delivery') is-invalid @enderror"
                                        name="block_delivery" value="{{ $kd04->block_reason }}" style="{{ $kd04->block_reason != $kd04->block_reason_old ? 'color:red' : '' }}" disabled />

                                    @error('block_reason')
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
    <form action="{{ route('updateReqKd4', ['id' => $kd04->id]) }}" method="post" class="mb-3">
        @csrf
        @method('put')
        @if (auth()->user()->division == 'FABRIC SALES' && auth()->user()->position_job_name == 'FABRIC SALES EXECUTIVE' && $kd04->status_form == '')
            <input type="hidden" name="status_form" value="created">
            <input type="hidden" name="created_by" value="{{ $kd04->employee_name }}">
        @elseif (auth()->user()->division == 'FABRIC SALES' && auth()->user()->position_job_name == 'FABRIC SALES EXECUTIVE' && $kd04->status_form == 'rejected')
            <input type="hidden" name="status_form" value="created">
            <input type="hidden" name="created_by" value="{{ auth()->user()->employee_name }}">
            <div class="d-flex flex-row my-3">
                <div class="col-sm-2">
                    <label type="text" name="" id="" class="form-label text-center">Reject
                        Reason</label>
                </div>
                <div class="col-sm-5">
                    <textarea class="form-control" id="textAreaExample1" rows="4" name="reject_reason" readonly>{!! $kd04->reject_reason != '' ? $kd04->reject_reason : '' !!}</textarea>
                    @error('reject_reason')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        @elseif (auth()->user()->division == 'FABRIC SALES' && auth()->user()->position_job_name == 'DM FABRIC SALES' && $kd04->status_form == 'created')
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
                                    value="{{ $kd04->created_by }}">
                                <label class="form-check-label" for="status_form1" id="submitted">
                                    Approve
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_form" id="rejected"
                                    value="rejected" onclick="javascript:myFunction();">
                                <input type="hidden" class="form-check-input" name="created_by"
                                    value="{{ $kd04->created_by }}">
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
        @elseif (auth()->user()->position_job_name == 'GM SALES FABRIC & FACTORY MANAGER LPA' && $kd04->status_form == 'submitted')
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
                                    value="{{ $kd04->created_by }}">
                                <label class="form-check-label" for="status_form1" id="acknowledged">
                                    Approve
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_form" id="rejected"
                                    value="rejected" onclick="javascript:myFunction6();">
                                <input type="hidden" class="form-check-input" name="created_by"
                                    value="{{ $kd04->created_by }}">
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
        @elseif (auth()->user()->division == 'FINANCE' && auth()->user()->jabatan == 'Division Manager' && $kd04->status_form == 'acknowledged')
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
                                    value="{{ $kd04->created_by }}">
                                <label class="form-check-label" for="status_form1">
                                    Approve
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_form" id="status_form2"
                                    value="rejected" id="rejected" onclick="javascript:myFunction2();">
                                <input type="hidden" class="form-check-input" name="created_by"
                                    value="{{ $kd04->created_by }}">
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

            {{-- && auth()->user()->jabatan == 'Division Manager' --}}
        @elseif (auth()->user()->position_job_name == 'DIREKTUR FINANCE, ACCT & IT' && auth()->user()->jabatan == 'Direksi' && $kd04->status_form == 'aprv 1')
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
                                <input type="hidden" name="created_by" value="{{ $kd04->created_by }}">
                                <label class="form-check-label" for="status_form1">
                                    Approve
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_form" id="status_form2"
                                    value="rejected" onclick="javascript:myFunction3();" id="rejected">
                                <input type="hidden" name="created_by" value="{{ $kd04->created_by }}">
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
        @elseif (auth()->user()->division == 'INTERNAL AUDIT' && $kd04->status_form == 'aprv 2')
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
                                <input type="hidden" name="created_by" value="{{ $kd04->created_by }}">
                                <label class="form-check-label" for="status_form1">
                                    Inputted To INTEX
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_form" id="rejected"
                                    value="rejected" onclick="javascript:myFunction4();">
                                <input type="hidden" name="created_by" value="{{ $kd04->created_by }}">
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
            @elseif (auth()->user()->division == 'FABRIC SALES' && auth()->user()->position_job_name == 'FABRIC SALES EXECUTIVE' && $kd04->status_form == 'inputted')
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
                            <label for="form-control text-center">{{ $kd04->created_by }}</label>
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
                            @if ($kd04->submitted_by != '')
                                <label for="form-control text-center">{{ $kd04->submitted_by }}</label>
                                {{-- @elseif ($kd04->submitted_by == '')
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
                            @if ($kd04->acknowledged_by != '')
                                <label for="form-control text-center">{{ $kd04->acknowledged_by }}</label>
                                {{-- @elseif ($kd04->submitted_by == '')
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
                            @if ($kd04->aprv1_by != '')
                                <label for="form-control text-center">{{ $kd04->aprv1_by }}</label>
                                {{-- @elseif ($kd04->aprv1_by == '')
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
                            @if ($kd04->aprv2_by != '')
                                <label for="form-control text-center">{{ $kd04->aprv2_by }}</label>
                                {{-- @elseif ($kd04->aprv2_by == '')
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
                            @if ($kd04->inputted_by != '')
                                <label for="form-control text-center">{{ $kd04->inputted_by }}</label>
                                {{-- @elseif ($kd04->inputted_by == '')
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
        <div class="d-flex justify-content-end">
            @if ((auth()->user()->division == 'FABRIC SALES' && auth()->user()->jabatan == 'Sub Division Manager' && $kd04->status_form != 'rejected') && (auth()->user()->division == 'FABRIC SALES' && auth()->user()->jabatan == 'Sub Division Manager' && $kd04->status_form != '') && (auth()->user()->division == 'FABRIC SALES' && auth()->user()->jabatan == 'Sub Division Manager' && $kd04->status_form != 'inputted'))
                <div class="col-sm-1">
                    <button type="submit" class="btn btn-primary disabled" aria-disabled="true" hidden>SUBMIT</button>
                </div>
                <div class="col-sm-1 ml-5">
                    <a href="{{ url()->previous() }}" class="btn btn-danger">BACK</a>
                </div>
            @else
                <div class="col-sm-1">
                    <button type="submit" class="btn btn-primary">SUBMIT</button>
                </div>
                <div class="col-sm-1 ml-5">
                    <a href="{{ url()->previous() }}" class="btn btn-danger">BACK</a>
                </div>
            @endif
        </div>




    </form>



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
