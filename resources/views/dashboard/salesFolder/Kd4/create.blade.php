@extends('dashboard.layout.lte')

@section('title', 'DEBTOR DATA KD04')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center border-bottom">
        <h1 class="h2">@yield('title')</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{ route('kd4.store') }}" method="POST">
        @csrf
        <h6 class="text-left mt-3">KD04 Finance</h6>
        <hr>
        <div class="col-sm-8">
            <div class="d-flex flex-row mt-2">
                <div class="col-sm-2 mr-3">
                    <label type="text" name="" id="" class="form-label">Cust No</label>
                </div>
                <div class="col-sm-3">
                    <input id="kd4no_cust" type="type" class="form-control @error('kd4no_cust') is-invalid @enderror"
                        name="kd4no_cust" readonly/>
                    @error('kd4no_cust')
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
                    <label type="text" name="" id="" class="form-label">Debitor No</label>
                </div>
                <div class="col-sm-3">
                    <input id="no_debitor" type="text" class="form-control @error('no_debitor') is-invalid @enderror"
                        name="no_debitor" value="{{ old('no_debitor') }}"/>
                    @error('no_debitor')
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
                    <label type="text" name="" id="" class="form-label">Creditor No</label>
                </div>
                <div class="col-sm-3">
                    <input id="no_creditor" type="text" class="form-control @error('no_creditor') is-invalid @enderror"
                        name="no_creditor" value="{{ old('no_creditor') }}"/>
                    @error('no_creditor')
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
                    <label type="text" name="" id="" class="form-label">Group Cust No</label>
                </div>
                <div class="col-sm-3">
                    <input id="no_group_cust" type="text"
                        class="form-control @error('no_group_cust') is-invalid @enderror" name="no_group_cust" value="{{ old('no_group_cust') }}"/>
                    @error('no_group_cust')
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
                    <label type="text" name="" id="" class="form-label">Credit Cust</label>
                </div>
                <div class="col-sm-6">
                    <input id="credit_cust" type="text" class="form-control @error('credit_cust') is-invalid @enderror"
                        name="credit_cust" value="{{ old('credit_cust') }}"/>
                    @error('credit_cust')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-sm-8 my-2">
            <div class="d-flex flex-row">
                <div class="col-sm-2 mr-3">
                    <label type="text" name="" id="" class="form-label"></label>
                </div>
                <div class="col-sm-5">
                    <label type="text" name="" id="" class="form-label"></label>
                </div>
                <div class="col-sm-3">
                    <label type="text " name="" id="" class="form-label text-center">Valid from</label>
                </div>
                <div class="col-sm-3">
                    <label type="text " name="" id="" class="form-label text-center">To</label>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="d-flex flex-row">
                <div class="col-sm-2 mr-3">
                    <label type="text" name="" id="" class="form-label">Credit Limit</label>
                </div>
                <div class="col-sm-5">
                    <input class="form-control @error('credit_limit') is-invalid @enderror" type="text"
                        id="credit_limit" name="credit_limit" value="{{ old('credit_limit') }}">
                    @error('credit_limit')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-sm-3">
                    <input class="form-control @error('credit_from') is-invalid @enderror" type="date"
                        id="credit_from" name="credit_from" value="{{ old('credit_from') }}">
                    @error('credit_from')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-sm-3">
                    <input class="form-control @error('credit_to') is-invalid @enderror" type="date" id="credit_to"
                        name="credit_to" value="{{ old('credit_to') }}">
                    @error('credit_to')
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
                        style="font-size: 12px">Credit Line
                        Check</label>
                </div>
                <div class="col-sm-6">
                    <select class="selectpicker" aria-label="Default select example" name="credit_line_check"
                        data-live-search="true">
                        <option value="">Choose Credit Line Check</option>
                        <option value="Yes, credit line check">Yes, credit line check
                        </option>
                        <option value="No, no credit line
                                                        check">
                            No, no credit line
                            check
                        </option>
                        <option
                            value="Cr.line check at
                                                        deliv.release">
                            Cr.line check at
                            deliv.release</option>
                        <option
                            value="Cr.line check at
                                                        DN-creation">
                            Cr.line check at
                            DN-creation</option>
                    </select>
                    @error('credit_line_check')
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
                        style="font-size: 13px">Block
                        Delivery</label>
                </div>
                <div class="col-sm-6">
                    <input id="block_delivery" type="text"
                        class="form-control @error('block_delivery') is-invalid @enderror" name="block_delivery" />
                    @error('block_delivery')
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
                    <label type="text" name="" id="" class="form-label">Block
                    </label>
                </div>
                <div class="col-sm-6">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="flexCheckIndeterminate" name="block"
                            value="Yes">
                    </div>
                    @error('block')
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
                        style="font-size: 13px">Block Reason
                    </label>
                </div>
                <div class="col-sm-6">
                    <select class="selectpicker" aria-label="Default select example" name="block_reason"
                        data-live-search="true">
                        <option value="">Choose Block Reason</option>
                        @foreach ($blocks as $block)
                            @if (old('block_reason') == $block->key)
                                <option data-tokens="{{ $block->key }}" selected>
                                    {{ $block->description }}
                                </option>
                            @else
                                <option data-tokens="{{ $block->key }}">{{ $block->description }}
                                </option>
                            @endif
                        @endforeach
                    </select>
                    @error('block_reason')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
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





@endsection
