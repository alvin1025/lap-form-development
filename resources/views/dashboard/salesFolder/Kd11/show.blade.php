@extends('dashboard.layout.lte')

@section('title', 'ASSOCIATION LIST KD11')

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
        <h5 class="card-header">KD11 Association</h5>
        <div class="card-body">
            <hr class="my-2">
            <div class="col-sm-8">
                <div class="d-flex flex-row mt-2">
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label" style="font-size: 15px">No
                            Cust</label>
                    </div>
                    <div class="col-sm-3">
                        <input id="association1" type="text"
                            class="form-control @error('association1') is-invalid @enderror" name="association1"
                            value="{{ $kd11->kd11no_cust ?? 'Data Belum Lengkap!' }}"
                            style="{{ $kd11->kd11no_cust == null ? 'color:red' : '' }}" disabled />
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
                        <label type="text" name="" id="" class="form-label"
                            style="font-size: 15px">Association/KD11</label>
                    </div>
                    <div class="col-sm-6">
                        <input id="association1" type="text"
                            class="form-control @error('association1') is-invalid @enderror" name="association1"
                            value="{{ $kd11->association_no1 ?? 'Data Belum Lengkap!' }}"
                            style="{{ $kd11->association_no1 == null ? 'color:red' : '' }}" disabled />
                        @error('association1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-evenly mt-2">
                <div class="col-sm-6">
                    <div class="d-flex flex-row">
                        <div class="col-sm-2 mr-5">
                            <label type="text" name="" id="" class="form-label"
                                style="font-size: 13px">SD

                            </label>
                        </div>
                        <div class="col-sm-6">
                            <input id="association1" type="text"
                                class="form-control @error('association1') is-invalid @enderror" name="association1"
                                value="{{ $kd11->sd1 ?? 'Data Belum Lengkap!' }}"
                                style="{{ $kd11->sd1 == null ? 'color:red' : '' }}" disabled />
                            @error('sd1')
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
                            <label type="text" name="" id="" class="form-label"
                                style="font-size: 13px">SG

                            </label>
                        </div>
                        <div class="col-sm-6">
                            <input id="association1" type="text"
                                class="form-control @error('association1') is-invalid @enderror" name="association1"
                                value="{{ $kd11->sg1 ?? 'Data Belum Lengkap!' }}"
                                style="{{ $kd11->sg1 == null ? 'color:red' : '' }}" disabled />
                            @error('sg1')
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
                        <label type="text" name="" id="" class="form-label">Central Regu</label>
                    </div>
                    <div class="col-sm-6">
                        <input id="sales" type="text" class="form-control @error('sales') is-invalid @enderror"
                            name="sales" value="{{ $kd11->central_regu1 ?? 'Data Belum Lengkap!' }}"
                            style="{{ $kd11->central_regu1 == null ? 'color:red' : '' }}" disabled />
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
                        <label type="text" name="" id="" class="form-label">Conditions</label>
                    </div>
                    <div class="col-sm-6">
                        <input id="sales" type="text" class="form-control @error('sales') is-invalid @enderror"
                            name="sales" value="{{ $kd11->conditions1 ?? 'Data Belum Lengkap!' }}"
                            style="{{ $kd11->conditions1 == null ? 'color:red' : '' }}" disabled />
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





    <div class="
                            d-flex justify-content-end mb-3">
        <div class="col-sm-1">
            <a href="{{ route('kd2.index') }}" class="btn btn-danger">BACK</a>
        </div>
    </div>
    </div>

    </div>
    </div>
    {{-- </form> --}}





@endsection
