@extends('dashboard.layout.lte')

@section('title', 'ASSOCIATION LIST KD11 REQUEST')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center border-bottom">
        <h1 class="h2">@yield('title')</h1>
        <div class="col-sm-2">
        </div>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{ route('kd11request.update', ['kd11request' => $kd11->id]) }}" method="POST">
        @csrf
        @method('put')

        <div class="card-header">
            KD11 ASSOCIATIONS LIST REQUEST
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
                                        <input id="kd11no_cust" type="text"
                                            class="form-control @error('kd11no_cust') is-invalid @enderror" name="aa"
                                            value="{{ $kd11->kd11no_cust ?? '-' }}"
                                            style="{{ $kd11->kd11no_cust == null ? 'color:red' : '' }}" disabled />
                                        @error('kd11no_cust')
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
                                        <input id="ss" type="text"
                                            class="form-control @error('association1_no1') is-invalid @enderror"
                                            name="association1_no1"
                                            value="{{ $kd11->association_no1_old ?? '-' }}"
                                            style="{{ $kd11->association_no1_old == null ? 'color:red' : '' }}"
                                            disabled />
                                        @error('association1_no1')
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
                                            class="form-control @error('association1') is-invalid @enderror" name="asa"
                                            value="{{ $kd11->sd1_old ?? '-' }}"
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
                                            name="assocaiation1" value="{{ $kd11->sg1_old ?? '-' }}"
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
                                            class="form-control @error('sales') is-invalid @enderror" name="salds"
                                            value="{{ $kd11->central_regu1_old ?? '-' }}"
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
                                            class="form-control @error('sales') is-invalid @enderror" name="salas"
                                            value="{{ $kd11->conditions1_old ?? '-' }}"
                                            style="{{ $kd11->conditions1_old == null ? 'color:red' : '' }}" disabled />
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
                                        <input id="kd11no_cust" type="text"
                                            class="form-control @error('kd11no_cust') is-invalid @enderror"
                                            name="kd11no_cust"
                                            value="{{ $kd11->kd11no_cust ?? '-' }}"
                                            style="{{ $kd11->kd11no_cust == null ? 'color:red' : '' }}" readonly />
                                        @error('kd11no_cust')
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
                                    <div class="col-sm-6">
                                        <select class="selectpicker" aria-label="Default select example"
                                            name="association_no1" data-live-search="true" disabled>
                                            <option value="{{ $kd11->association_no1 }}" selected>
                                                {{ $kd11->association_no1 }}
                                            </option>
                                            @foreach ($assocs as $assoc)
                                                @if ($kd11->association_no1 == $assoc->assoc)
                                                    <option data-tokens="{{ $assoc->assoc }}">
                                                        {{ $kd11->association_no1 }}
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
                            <div class="col-sm-10">
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-4">
                                        <label type="text" name="" id="" class="form-label"
                                            style="font-size: 15px">SD</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <select class="selectpicker" aria-label="Default select example" name="sd1"
                                            data-live-search="true" disabled>
                                            <option value="{{ $kd11->sd1 }}" selected>{{ $kd11->sd1 }}</option>
                                            @foreach ($sds as $sd)
                                                @if ($kd11->sd1 == $sd->sd)
                                                    <option data-tokens="{{ $sd->sd }}">
                                                        {{ $kd11->sd1 }}
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
                            <div class="col-sm-10">
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-4">
                                        <label type="text" name="" id="" class="form-label"
                                            style="font-size: 15px">SG</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <select class="selectpicker" aria-label="Default select example" name="sg1"
                                            data-live-search="true" disabled>
                                            <option value="{{ $kd11->sg1 }}" selected>{{ $kd11->sg1 }}</option>
                                            @foreach ($sgs as $sg)
                                                @if ($kd11->sg1 == $sg->kd6sg)
                                                    <option data-tokens="{{ $sg->kd6sg }}">
                                                        {{ $kd11->sg1 }}
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
                            <div class="col-sm-10">
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-4">
                                        <label type="text" name="" id="" class="form-label">Central
                                            Regu</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <select class="selectpicker" aria-label="Default select example"
                                            name="central_regu1" data-live-search="true">
                                            <option value="Yes, paymt.via centr.assoc"
                                                {{ $kd11->central_regu1 == 'Yes, paymt.via centr.assoc' ? 'selected' : '' }}>
                                                Yes, paymt.via centr.assoc</option>
                                            <option value="No, direct payment"
                                                {{ $kd11->central_regu1 == 'No, direct payment' ? 'selected' : '' }}>No,
                                                direct payment
                                            </option>
                                            <option value="Posted for single company"
                                                {{ $kd11->central_regu1 == 'Posted for single company' ? 'selected' : '' }}>
                                                Posted for single company</option>
                                        </select>
                                        @error('central_regu1')
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
                                    <div class="col-sm-6">
                                        <select class="selectpicker" aria-label="Default select example"
                                            name="conditions1" data-live-search="true">
                                            <option value="Association"
                                                {{ $kd11->conditions1 == 'Association' ? 'selected' : '' }}>
                                                Association
                                            </option>
                                            <option value="Customer"
                                                {{ $kd11->conditions1 == 'Customer' ? 'selected' : '' }}>Customer
                                            </option>
                                            <option value="Central Office"
                                                {{ $kd11->conditions1 == 'Central Office' ? 'selected' : '' }}>Central
                                                Office</option>
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
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-end">
            <div class="col-sm-1">
                <a href="{{ url()->previous() }}" class="btn btn-danger">BACK</a>
            </div>
            <div class="col-sm-1">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>

    </form>





@endsection
