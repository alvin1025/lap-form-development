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
    <form action="{{ route('kd11.store') }}" method="POST">
        @csrf
        <div class="card-header">
            KD11 ASSOCIATIONS LIST
        </div>
        <div class="card-body">
            <div class="col-sm-8">
                <div class="d-flex flex-row mt-2">
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label">Cust No</label>
                    </div>
                    <div class="col-sm-3">
                        <input id="cust_no" type="text" class="form-control @error('cust_no') is-invalid @enderror"
                            name="kd11no_cust" />
                        @error('cust_no')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <hr class="mt-2">
            <div class="d-flex justify-content-evenly">
                <div class="col-sm-6">
                    <div class="d-flex flex-row">
                        <div class="col-sm-2 mr-5">
                            <label type="text" name="" id="" class="form-label"
                                style="font-size: 13px">SD

                            </label>
                        </div>
                        <div class="col-sm-6">
                            <select class="selectpicker" aria-label="Default select example" name="sd1"
                                data-live-search="true">
                                <option value="">Choose SG</option>
                                @foreach ($sds as $sd)
                                    @if (old('sd1') == $sd->sd)
                                        <option data-tokens="{{ $sd->sd }}" selected>
                                            {{ $sd->sd }}
                                        </option>
                                    @else
                                        <option data-tokens="{{ $sd->sd }}">{{ $sd->sd }}
                                        </option>
                                    @endif
                                @endforeach
                            </select>
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
                            <select class="selectpicker" aria-label="Default select example" name="sg1"
                                data-live-search="true">
                                <option value="">Choose SG</option>
                                @foreach ($sgs as $sg)
                                    @if (old('sg1') == $sg->kd6sg)
                                        <option data-tokens="{{ $sg->kd6sg }}" selected>
                                            {{ $sg->kd6sg }}
                                        </option>
                                    @else
                                        <option data-tokens="{{ $sg->kd6sg }}">{{ $sg->kd6sg }}
                                        </option>
                                    @endif
                                @endforeach
                            </select>
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
                <div class="d-flex flex-row mt-3">
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label"
                            style="font-size: 11px">Association -
                            No</label>
                    </div>
                    <div class="col-sm-3">
                        <select class="selectpicker" aria-label="Default select example" name="association_no1"
                            data-live-search="true">
                            <option value="">Choose Association</option>
                            @foreach ($assocs as $assoc)
                                @if (old('association_no1') == $assoc->assoc)
                                    <option data-tokens="{{ $assoc->assoc }}" selected>
                                        {{ $assoc->assoc }}
                                    </option>
                                @else
                                    <option data-tokens="{{ $assoc->assoc }}">{{ $assoc->assoc }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                        @error('association_no1')
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
                        <label type="text" name="" id="" class="form-label">Status</label>
                    </div>
                    <div class="col-sm-6">
                        <select class="selectpicker" aria-label="Default select example" name="status1"
                            data-live-search="true">
                            <option value="">Choose Status</option>
                            <option value="1">Active</option>
                            <option value="2">Inactive</option>
                        </select>
                        @error('status1')
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
                            style="font-size: 13px">Central
                            regu</label>
                    </div>
                    <div class="col-sm-6">
                        <select class="selectpicker" aria-label="Default select example" name="central_regu1"
                            data-live-search="true">
                            <option value="">Choose Central Regu</option>
                            <option
                                value="Yes, paymt.via
                                                                            centr.assoc">
                                Yes, paymt.via
                                centr.assoc</option>
                            <option value="No, direct payment">No, direct payment
                            </option>
                            <option
                                value="Posted for single
                                                                    company">
                                Posted for single
                                company</option>
                        </select>
                        @error('central_regu1')
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
                            style="font-size: 13px">Conditions
                        </label>
                    </div>
                    <div class="col-sm-6">
                        <select class="selectpicker" aria-label="Default select example" name="conditions1"
                            data-live-search="true">
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
