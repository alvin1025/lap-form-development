@extends('dashboard.layout.lte')

@section('title', 'DEBTOR DATA KD04 REQUEST')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center border-bottom">
        <h1 class="h2">@yield('title')</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{ route('kd04request.update', ['kd04request' => $kd04->id]) }}" method="POST">
        @csrf
        @method('put')
        <h6 class="text-left mt-3">KD04 Finance Request</h6>

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
                                            name="block" value="block" {{ $kd04->block_old == 'block' ? 'checked' : '' }}
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
                                    <input id="block_reason_old" type="text"
                                        class="form-control @error('block_reason_old') is-invalid @enderror"
                                        name="block_reason_old" value="{{ $kd04->block_reason_old }}" disabled />

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
                                    <input id="no_debitor" type="number"
                                        class="form-control @error('no_debitor') is-invalid @enderror" name="no_debitor"
                                        value="{{ $kd04->no_debitor }}" />
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
                                    <input id="no_creditor" type="number"
                                        class="form-control @error('no_creditor') is-invalid @enderror"
                                        name="no_creditor" value="{{ $kd04->no_creditor }}" />
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
                                    <input id="no_group_cust" type="number"
                                        class="form-control @error('no_group_cust') is-invalid @enderror"
                                        name="no_group_cust" value="{{ $kd04->no_group_cust }}" />
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
                                    <input id="credit_cust" type="number"
                                        class="form-control @error('credit_cust') is-invalid @enderror"
                                        name="credit_cust" value="{{ $kd04->credit_cust }}" />
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
                                    <input id="credit_from" type="date"
                                        class="form-control @error('credit_from') is-invalid @enderror"
                                        name="credit_from" value="{{ $kd04->credit_from }}" />
                                    @error('credit_from')
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
                                    <input id="credit_to" type="date"
                                        class="form-control @error('credit_to') is-invalid @enderror" name="val"
                                        value="{{ $kd04->credit_to }}" />
                                    @error('credit_to')
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
                                        type="number" id="credit_limit" name="credit_limit"
                                        value="{{ $kd04->credit_limit }}">
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
                                <div class="col-sm-6">
                                    <select class="selectpicker" aria-label="Default select example"
                                        name="credit_line_check" data-live-search="true" data-container="body">
                                        {{-- @if (auth()->user()->division = 'FABRIC SALES')
                                            <option value="Cr.line check at deliv.release"
                                                {{ $kd04->credit_line_check == 'Cr.line check at' ? 'selected' : '' }}>
                                                Cr.line
                                                check at
                                                deliv.release</option>
                                        @else --}}
                                            <option value="Yes, credit line check">
                                                Yes, credit line check
                                            </option>
                                            <option value="No, no credit line check"
                                               >
                                                No,
                                                no
                                                credit line
                                                check
                                            </option>
                                            <option value="Cr.line check at deliv.release"
                                                >
                                                Cr.line
                                                check at
                                                deliv.release</option>
                                            <option value="Cr.line check at DN-creation"
                                                >
                                                Cr.line
                                                check at
                                                DN-creation</option>
                                        {{-- @endif --}}
                                    </select>
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
                                        name="block_delivery" value="{{ $kd04->block_delivery }}" />
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
                                            name="block" value="block" {{ $kd04->block == 'block' ? 'checked' : '' }}>
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
                                    <input id="block_reason" type="text"
                                        class="form-control @error('block_reason') is-invalid @enderror"
                                        name="block_reason" value="{{ $kd04->block_reason }}" />

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
        <div class="d-flex justify-content-end my-2">
            <div class="col-sm-1">
                <a href="{{ url()->previous() }}" class="btn btn-danger">BACK</a>
            </div>
            <div class="col-sm-1">
                <button type="submit" class="btn btn-primary">UPDATE</button>
            </div>
        </div>
    </form>
@endsection
