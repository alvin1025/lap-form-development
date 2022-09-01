@extends('dashboard.layout.lte')

@section('title', 'ASSOCIATION LIST KD11 REQUEST')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center border-bottom">
        <h1 class="h2">@yield('title')</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif
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
                                            name="association1" value="{{ $kd11->kd11no_cust ?? '-' }}" disabled />
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
                                            value="{{ $kd11->association_no1 ?? '-' }}" disabled />
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
                                            name="association1" value="{{ $kd11->sd1 ?? '-' }}" disabled />
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
                                            name="association1" value="{{ $kd11->sg1 ?? '-' }}" disabled />
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
                                            value="{{ $kd11->central_regu1 ?? '-' }}" disabled />
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
                                            value="{{ $kd11->conditions1 ?? '-' }}" disabled />
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
                                        @if ($kd11->status1 == 1)
                                            <input id="nama1" type="text"
                                                class="form-control @error('nama1') is-invalid @enderror" name="nama1"
                                                value="Active" disabled />
                                            @error('status')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        @elseif ($kd11->status1 == 2)
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
                            <form action="{{ route('kd11request.store') }}" method="POST">
                                @csrf
                                <div class="col-sm-10">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id="" class="form-label">Cust
                                                No</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input id="cust_no" type="text"
                                                class="form-control @error('cust_no') is-invalid @enderror"
                                                name="kd11no_cust" value="{{ $kd11->kd11no_cust }}" readonly />
                                            @error('cust_no')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="d-flex flex-row mt-3">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id="" class="form-label"
                                                style="font-size: 11px">Association -
                                                No</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input id="association_no1" type="text"
                                                class="form-control @error('cust_no') is-invalid @enderror"
                                                name="association_no1" value="{{ $kd11->association_no1 }}" readonly />
                                            @error('association_no1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <input type="hidden" name="association_no1_old"
                                        value="{{ $kd11->association_no1 }}">
                                </div>
                                <div class="col-sm-10">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id="" class="form-label"
                                                style="font-size: 15px">SD</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input id="sd1" type="text"
                                                class="form-control @error('sd1') is-invalid @enderror"
                                                name="sd1" value="{{ $kd11->sd1 }}" readonly />
                                            @error('sd1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <input type="hidden" name="sd1_old" value="{{ $kd11->sd1 }}">
                                </div>
                                <div class="col-sm-10">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id="" class="form-label"
                                                style="font-size: 15px">SG</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input id="sg1" type="text"
                                            class="form-control @error('sg1') is-invalid @enderror"
                                            name="sg1" value="{{ $kd11->sg1 }}" readonly />
                                            @error('sg1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <input type="hidden" name="sg1_old" value="{{ $kd11->sg1 }}">
                                </div>
                                <div class="col-sm-10">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id="" class="form-label"
                                                style="font-size: 15px">Central Regu</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <select class="selectpicker" aria-label="Default select example"
                                                name="central_regu1" data-live-search="true">
                                                <option value="">Choose Central Regu</option>
                                                <option value="Yes, paymt.via centr.assoc">
                                                    Yes,
                                                    paymt.via
                                                    centr.assoc</option>
                                                <option value="No, direct payment">No, direct payment
                                                </option>
                                                <option value="Posted for single company">
                                                    Posted for
                                                    single
                                                    company</option>
                                            </select>
                                            @error('central_regu1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <input type="hidden" name="central_regu1_old" value="{{ $kd11->central_regu1 }}">
                                </div>
                                <div class="col-sm-10">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id="" class="form-label"
                                                style="font-size: 15px">Conditions</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <select class="selectpicker" aria-label="Default select example"
                                                name="conditions1" data-live-search="true">
                                                <option value="">Choose Condition</option>
                                                <option value="Association">Association</option>
                                                <option value="Customer">Customer</option>
                                                <option value="Central Office">Central Office</option>
                                            </select>
                                            @error('conditions1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <input type="hidden" name="conditions1_old" value="{{ $kd11->conditions1 }}">
                                    <input type="hidden" name="validity_from1_old"
                                        value="{{ $kd11->validity_from1 }}">
                                    <input type="hidden" name="validity_to1_old" value="{{ $kd11->validity_to1 }}">
                                </div>
                                <div class="col-sm-10">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-4">
                                            <label type="text" name="" id="" class="form-label"
                                                style="font-size: 15px">Status</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <select class="selectpicker"
                                                aria-label="Default select example" name="status1"
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
                                    <input type="hidden" name="conditions1_old" value="{{ $kd11->conditions1 }}">
                                    <input type="hidden" name="validity_from1_old"
                                        value="{{ $kd11->validity_from1 }}">
                                    <input type="hidden" name="validity_to1_old" value="{{ $kd11->validity_to1 }}">
                                </div>
                                @if (auth()->user()->division == 'FABRIC SALES' && auth()->user()->jabatan == 'Sub Division Manager')
                                    <input type="hidden" name="status_form" value="">
                                    <input type="hidden" name="created_by"
                                        value="{{ auth()->user()->employee_name }} ">
                                @endif
                                <input type="hidden" name="status_old" value="{{ $kd11->status1 }}">
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





@endsection
