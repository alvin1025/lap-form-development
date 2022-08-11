@extends('dashboard.layout.lte')

@section('title', 'Edit Kd04')

@section('content')

    <form action="{{ route('update.Kd04', ['id' => $kd04->id]) }}" method="post">
        @csrf
        @method('put')
        <div class="row">
            <h5 class="text-center">@yield('title')</h5>
            {{-- </div> --}}
        </div>
        <hr>

        <div class="col-sm-8">
            <div class="d-flex flex-row mt-2">
                <div class="col-sm-2 mr-3">
                    <label type="text" name="" id="" class="form-label">Cust No</label>
                </div>
                <div class="col-sm-3">
                    <input id="cust_no" type="type" class="form-control @error('cust_no') is-invalid @enderror"
                        name="kd4no_cust" value="{{ $kd04->kd4no_cust }}" readonly />
                    @error('cust_no')
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
                        name="no_debitor" value="{{ $kd04->no_debitor }}" />
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
                        name="no_creditor" value="{{ $kd04->no_creditor }}" />
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
                    <input id="no_group_cust" type="text" class="form-control @error('no_group_cust') is-invalid @enderror"
                        name="no_group_cust" value="{{ $kd04->no_group_cust }}" />
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
                        name="credit_cust" value="{{ $kd04->credit_cust }}" />
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
                    <input class="form-control @error('credit_limit') is-invalid @enderror" type="text" id="credit_limit"
                        name="credit_limit" value="{{ $kd04->credit_limit }}">
                    @error('credit_limit')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-sm-3">
                    <input class="form-control @error('credit_from') is-invalid @enderror" type="date" id="credit_from"
                        name="credit_from" value="{{ $kd04->credit_from }}">
                    @error('credit_from')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-sm-3">
                    <input class="form-control @error('credit_to') is-invalid @enderror" type="date" id="credit_to"
                        name="credit_to" value="{{ $kd04->credit_to }}">
                    @error('credit_to')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>


        {{-- <div class="col-sm-8">
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-2 mr-3">
                            <label type="text" name="" id="" class="form-label">Pay Term</label>
                        </div>
                        <div class="col-sm-6">
                            <select class="selectpicker" aria-label="Default select example" name="payterm"
                                data-live-search="true">
                                <option selected>Open this select menu</option>
                                @foreach ($pays as $pay)
                                    @if (old('payterm') == $pay->pay_term)
                                        <option value="{{ $pay->pay_term }}" selected>{{ $pay->pay_term }}
                                        </option>
                                    @else
                                        <option value="{{ $pay->pay_term }}">{{ $pay->pay_term }}</option>
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
                </div> --}}
        {{-- <div class="col-sm-8">
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-2 mr-3">
                            <label type="text" name="" id="" class="form-label" style="font-size: 12px">Alasan
                                Perubahan</label>
                        </div>
                        <div class="col-sm-6">
                            <input id="alasan_perubahan" type="text"
                                class="form-control @error('alasan_perubahan') is-invalid @enderror"
                                name="alasan_perubahan" />
                            @error('alasan_perubahan')
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
                            <label type="text" name="" id="" class="form-label" style="font-size: 12px">Histori
                                Pembayaran</label>
                        </div>
                        <div class="col-sm-6">
                            <input id="history_pembayaran" type="text"
                                class="form-control @error('history_pembayaran') is-invalid @enderror"
                                name="history_pembayaran" />
                            @error('history_pembayaran')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div> --}}
        <div class="col-sm-8">
            <div class="d-flex flex-row mt-2">
                <div class="col-sm-2 mr-3">
                    <label type="text" name="" id="" class="form-label" style="font-size: 12px">Credit Line
                        Check</label>
                </div>
                <div class="col-sm-6">
                    <select class="selectpicker" aria-label="Default select example" name="credit_line_check"
                        data-live-search="true">
                        <option value="Y" {{ $kd04->credit_line_check == 'Y' ? 'selected' : '' }}>Yes, credit line check
                        </option>
                        <option value="N" {{ $kd04->credit_line_check == 'N' ? 'selected' : '' }}>No, no credit line
                            check
                        </option>
                        <option value="R" {{ $kd04->credit_line_check == 'R' ? 'selected' : '' }}>Cr.line check at
                            deliv.release</option>
                        <option value="D" {{ $kd04->credit_line_check == 'D' ? 'selected' : '' }}>Cr.line check at
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
                    <label type="text" name="" id="" class="form-label" style="font-size: 13px">Block
                        Delivery</label>
                </div>
                <div class="col-sm-6">
                    <input id="block_delivery" type="text"
                        class="form-control @error('block_delivery') is-invalid @enderror" name="block_delivery"
                        value="{{ $kd04->block_delivery }}" />
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
                        <input class="form-check-input" type="checkbox"
                            value="{{ $kd04->credit_line_check == 'Yes' ? 'checked' : '' }}" id="flexCheckIndeterminate"
                            name="block">
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
                    <label type="text" name="" id="" class="form-label" style="font-size: 13px">Block Reason
                    </label>
                </div>
                <div class="col-sm-6">
                    <select class="selectpicker" aria-label="Default select example" name="block_reason"
                        data-live-search="true">
                        <option value="{{ $kd04->block_reason }}" selected>{{ $kd04->block_reason }}</option>
                        @foreach ($blocks as $block)
                            @if ($kd04->block_reason == $block->key)
                                <option data-tokens="{{ $block->key }}">
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
