@extends('dashboard.layout.lte')

@section('title', 'CONTACT KD14 REQUEST')

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
    <form action="{{ route('kd14request.update', ['kd14request' => $kd14->id]) }}" method="POST">
        @csrf
        @method('put')

        <div class="card-header">
            KD14 PIC/Contact Person Request
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
                                            style="font-size: 15px">No
                                            Cust</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="cust_no" type="text"
                                            class="form-control @error('cust_no') is-invalid @enderror" name="kd14no_cust"
                                            value="{{ $kd14->kd14no_cust ?? '-' }}"
                                            style="{{ $kd14->kd14no_cust == null ? 'color:red' : '' }}" disabled />
                                        @error('cust_no')
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
                                            style="font-size: 15px">Contact Person</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="cp1" type="text"
                                            class="form-control @error('cp1') is-invalid @enderror" name="cp1"
                                            value="{{ $kd14->cp1 ?? '-' }}"
                                            style="{{ $kd14->cp1 == null ? 'color:red' : '' }}" disabled />
                                        @error('cp1')
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
                                            style="font-size: 15px">Nama</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input class="form-control @error('nama_cp1') is-invalid @enderror" type="text"
                                            id="nama_cp1" name="nama_cp1"
                                            value="{{ $kd14->nama_cp1_old ?? '-' }}"
                                            style="{{ $kd14->nama_cp1_old == null ? 'color:red' : '' }}" disabled>
                                        @error('nama_cp1')
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
                                            style="font-size: 15px">Function</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input class="form-control @error('function_cp1') is-invalid @enderror"
                                            type="text" id="function_cp1" name="function_cp1"
                                            value="{{ $kd14->function_cp1_old ?? '-' }}"
                                            style="{{ $kd14->function_cp1_old == null ? 'color:red' : '' }}" disabled>
                                        @error('function_cp1')
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
                                            style="font-size: 15px">Since</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input class="form-control @error('sinc_cp1') is-invalid @enderror" type="text"
                                            id="sinc_cp1" name="sinc_cp1"
                                            value="{{ $kd14->sinc_cp1_old ?? '-' }}"
                                            style="{{ $kd14->sinc_cp1_old == null ? 'color:red' : '' }}" disabled>
                                        @error('sinc_cp1')
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
                                            style="font-size: 15px">Mobile</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input class="form-control @error('mobile_cp1') is-invalid @enderror"
                                            type="text" id="mobile_cp1" name="mobile_cp1"
                                            value="{{ $kd14->mobile_cp1_old ?? '-' }}"
                                            style="{{ $kd14->mobile_cp1_old == null ? 'color:red' : '' }}" disabled>
                                        @error('mobile_cp1')
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
                                            style="font-size: 15px">Phone</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input class="form-control @error('phone_cp1') is-invalid @enderror"
                                            type="text" id="phone_cp1" name="phone_cp1"
                                            value="{{ $kd14->phone_cp1_old ?? '-' }}"
                                            style="{{ $kd14->phone_cp1_old == null ? 'color:red' : '' }}" disabled>
                                        @error('phone_cp1')
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
                                            style="font-size: 15px">Email</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input class="form-control @error('email_cp1') is-invalid @enderror"
                                            type="email" id="email_cp1" name="email_cp1"
                                            value="{{ $kd14->email_cp1_old ?? '-' }}"
                                            style="{{ $kd14->email_cp1_old == null ? 'color:red' : '' }}" disabled>
                                        @error('email_cp1')
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
                                        <input class="form-control @error('email_cp1') is-invalid @enderror"
                                            type="email" id="email_cp1" name="email_cp1"
                                            value="{{ $kd14->sd_cp1_old ?? '-' }}"
                                            style="{{ $kd14->sd_cp1_old == null ? 'color:red' : '' }}" disabled>
                                        @error('email_cp1')
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
                                        <input class="form-control @error('email_cp1') is-invalid @enderror"
                                            type="email" id="email_cp1" name="email_cp1"
                                            value="{{ $kd14->sg_cp1_old ?? '-' }}"
                                            style="{{ $kd14->sg_cp1_old == null ? 'color:red' : '' }}" disabled>
                                        @error('email_cp1')
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
                                            style="font-size: 15px">Address Code</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="sales" type="text"
                                            class="form-control @error('sales') is-invalid @enderror" name="sales"
                                            value="{{ $kd14->add_addr_cp1_old ?? '-' }}"
                                            style="{{ $kd14->add_addr_cp1_old == null ? 'color:red' : '' }}" disabled />
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
                                            style="font-size: 15px">No
                                            Cust</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="cust_no" type="text"
                                            class="form-control @error('cust_no') is-invalid @enderror"
                                            name="kd14no_cust" value="{{ $kd14->kd14no_cust }}" readonly />
                                        @error('cust_no')
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
                                            style="font-size: 15px">CP
                                            Code</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="cp1" type="text"
                                            class="form-control @error('cp1') is-invalid @enderror" name="cp1"
                                            value="{{ $kd14->cp1 }}" readonly />
                                        @error('cp1')
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
                                            style="font-size: 15px">Nama</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input class="form-control @error('nama_cp1') is-invalid @enderror"
                                            type="text" id="nama_cp1" name="nama_cp1"
                                            value="{{ $kd14->nama_cp1 }}">
                                        @error('nama_cp1')
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
                                            style="font-size: 15px">Function</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input class="form-control @error('function_cp1') is-invalid @enderror"
                                            type="text" id="function_cp1" name="function_cp1"
                                            value="{{ $kd14->function_cp1 }}">
                                        @error('function_cp1')
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
                                            style="font-size: 15px">Since</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input class="form-control @error('sinc_cp1') is-invalid @enderror"
                                            type="date" id="sinc_cp1" name="sinc_cp1"
                                            value="{{ $kd14->sinc_cp1 }}">
                                        @error('sinc_cp1')
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
                                            style="font-size: 15px">Mobile</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input class="form-control @error('mobile_cp1') is-invalid @enderror"
                                            type="number" id="mobile_cp1" name="mobile_cp1"
                                            value="{{ $kd14->mobile_cp1 }}">
                                        @error('mobile_cp1')
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
                                            style="font-size: 15px">Phone</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input class="form-control @error('phone_cp1') is-invalid @enderror"
                                            type="number" id="phone_cp1" name="phone_cp1"
                                            value="{{ $kd14->phone_cp1 }}">
                                        @error('phone_cp1')
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
                                            style="font-size: 15px">Email</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input class="form-control @error('email_cp1') is-invalid @enderror"
                                            type="email" id="email_cp1" name="email_cp1"
                                            value="{{ $kd14->email_cp1 }}">
                                        @error('email_cp1')
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
                                        <select class="selectpicker" aria-label="Default select example" name="sd_cp1"
                                            data-live-search="true" data-container="body">
                                            <option value="{{ $kd14->sd_cp1 }}" selected>{{ $kd14->sd_cp1 }}</option>
                                            @foreach ($sds as $sd)
                                                @if ($kd14->sd_cp1 == $sd->sd)
                                                    <option data-tokens="{{ $sd->sd }}">
                                                        {{ $kd14->sd_cp1 }}
                                                    </option>
                                                @else
                                                    <option data-tokens="{{ $sd->sd }}">{{ $sd->sd }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('sd_cp1')
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
                                        <select class="selectpicker" aria-label="Default select example" name="sg_cp1"
                                            data-live-search="true" data-container="body">
                                            <option value="{{ $kd14->sg_cp1 }}" selected>{{ $kd14->sg_cp1 }}</option>
                                            @foreach ($sgs as $sg)
                                                @if ($kd14->sg_cp1 == $sg->kd6sg)
                                                    <option data-tokens="{{ $sg->kd6sg }}" selected>
                                                        {{ $sg->kd6sg }}
                                                    </option>
                                                @else
                                                    <option data-tokens="{{ $sg->kd6sg }}">{{ $sg->kd6sg }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('sg_cp1')
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
                                            style="font-size: 15px">Add Code</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <select class="selectpicker" aria-label="Default select example"
                                            name="add_addr_cp1" data-live-search="true" data-container="body">
                                            <option value="{{ $kd14->add_addr_cp1 }}" selected>
                                                {{ $kd14->add_addr_cp1 }}</option>
                                            @foreach ($kd05 as $kd5)
                                                @if ($kd14->add_addr_cp1 == $kd5->addit1)
                                                    <option data-tokens="{{ $kd5->addit1 }}" selected>
                                                        {{ $kd5->addit1 }}
                                                    </option>
                                                @else
                                                    <option data-tokens="{{ $kd5->addit1 }}">{{ $kd5->addit1 }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('add_addr_cp1')
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
            <input type="hidden" name="status" value="{{ $kd14->status }}">




















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
