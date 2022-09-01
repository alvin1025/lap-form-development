@extends('dashboard.layout.lte')

@section('title', 'CONTACT KD14')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center border-bottom">
        <h1 class="h2">@yield('title')</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{ route('kd14.store') }}" method="POST">
        @csrf

        <div class="card-header">
            KD14 PIC/Contact Person
        </div>
        <div class="col-sm-6">
            <input id="contactperson" type="hidden"
                class="form-control @error('contactperson') is-invalid @enderror" name="contactperson" />
                @error('contactperson')
                <div class="invalid-feedback" style="font-size: 30px">
                    {{ $message }}
                </div>
                @enderror
        </div>
        <div class="card-body">

            <hr class="mb-2">
            <div class="col-sm-10">
                <div class="d-flex flex-row mt-2">
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label">Cust No</label>
                    </div>
                    <div class="col-sm-3">
                        <input id="cust_no" type="text" class="form-control @error('cust_no') is-invalid @enderror"
                            name="kd14no_cust" value="{{ $kd14no_cust }}" readonly onkeyup="getVal();"/>
                        @error('cust_no')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label">Contact Person</label>
                    </div>
                    <div class="col-sm-3">
                        <input id="cp1" type="text" class="form-control @error('cp1') is-invalid @enderror"
                            name="cp1" value="{{ old('cp1') }}" oninput="getVal();"/>
                        @error('cp1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <hr class="mt-2">
            <div class="col-sm-10">
                <div class="d-flex flex-row text-center">
                    <div class="col-sm-3">
                        <label type="text" name="" id="" class="form-label">Nama</label>
                    </div>
                    <div class="col-sm-3">
                        <label type="text " name="" id="" class="form-label text-center">Function</label>
                    </div>
                    <div class="col-sm-3">
                        <label type="text " name="" id="" class="form-label text-center">Since</label>
                    </div>

                </div>
            </div>
            <div class="col-sm-10">
                <div class="d-flex flex-row text-center">
                    <div class="col-sm-3">
                        <input class="form-control @error('nama_cp1') is-invalid @enderror" type="text" id="nama_cp1"
                            name="nama_cp1" value="{{ old('nama_cp1') }}">
                        @error('nama_cp1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-3">
                        <input class="form-control @error('function_cp1') is-invalid @enderror" type="text"
                            id="function_cp1" name="function_cp1" value="{{ old('function_cp1') }}">
                        @error('function_cp1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-3">
                        <input class="form-control @error('sinc_cp1') is-invalid @enderror" type="date" id="sinc_cp1"
                            name="sinc_cp1" value="{{ old('sinc_cp1') }}">
                        @error('sinc_cp1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-10 mt-3">
                <div class="d-flex flex-row text-center">
                    <div class="col-sm-3 ">
                        <label type="text" name="" id="" class="form-label">Mobile</label>
                    </div>
                    <div class="col-sm-3">
                        <label type="text " name="" id="" class="form-label text-center">Phone</label>
                    </div>
                    <div class="col-sm-3">
                        <label type="text " name="" id="" class="form-label text-center">Email</label>
                    </div>

                </div>
            </div>
            <div class="col-sm-10">
                <div class="d-flex flex-row text-center">
                    <div class="col-sm-3">
                        <input class="form-control @error('mobile_cp1') is-invalid @enderror" type="number" id="mobile_cp1"
                            name="mobile_cp1" value="{{ old('mobile_cp1') }}">
                        @error('mobile_cp1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-3">
                        <input class="form-control @error('phone_cp1') is-invalid @enderror" type="number" id="phone_cp1"
                            name="phone_cp1" value="{{ old('phone_cp1') }}">
                        @error('phone_cp1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-3">
                        <input class="form-control @error('email_cp1') is-invalid @enderror" type="email"
                            id="email_cp1" name="email_cp1" value="{{ old('email_cp1') }}">
                        @error('email_cp1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                </div>
            </div>
            <div class="d-flex justify-content-evenly mt-3">
                <div class="col-sm-6">
                    <div class="d-flex flex-row">
                        <div class="col-sm-2 mr-5">
                            <label type="text" name="" id="" class="form-label"
                                style="font-size: 13px">SD
                            </label>
                        </div>
                        <div class="col-sm-6">
                            <select class="selectpicker" aria-label="Default select example" name="sd_cp1"
                                data-live-search="true" data-container="body">
                                <option value="">Choose SD</option>
                                @foreach ($sds as $sd)
                                    @if (old('sd_cp1') == $sd->sd)
                                        <option data-tokens="{{ $sd->sd }}" selected>
                                            {{ $sd->sd }}
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
                <div class="col-sm-6">
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-2 mr-3">
                            <label type="text" name="" id="" class="form-label"
                                style="font-size: 13px">Sg
                            </label>
                        </div>
                        <div class="col-sm-6">
                            <select class="selectpicker" aria-label="Default select example" name="sg_cp1"
                                data-live-search="true" data-container="body">
                                <option value="">Choose SG</option>
                                @foreach ($sgs as $sg)
                                    @if (old('sg_cp1') == $sg->sg)
                                        <option data-tokens="{{ $sg->kd6sg }}">
                                            {{ $sg->kd6sg }}
                                        </option>
                                    @else
                                        <option data-tokens="{{ $sg->kdsg }}">{{ $sg->kdsg }}
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
            </div>
            <div class="d-flex justify-content-evenly mt-3">
                <div class="col-sm-6">
                    <div class="d-flex flex-row">
                        <div class="col-sm-2 mr-5">
                            <label type="text" name="" id="" class="form-label"
                                style="font-size: 13px">Address Code
                            </label>
                        </div>
                        <div class="col-sm-6">
                            <select class="selectpicker" aria-label="Default select example" name="add_addr_cp1"
                                data-live-search="true" data-container="body">
                                <option value="">Choose Address Code</option>
                                @foreach ($kd05 as $kd5)
                                    @if (old('add_addr_cp1') == $kd5->addresscode1)
                                        <option data-tokens="{{ $kd5->addresscode1 }}" selected>
                                            {{ $kd5->addresscode1 }}
                                        </option>
                                    @else
                                        <option data-tokens="{{ $kd5->addresscode1 }}">{{ $kd5->addresscode1 }}
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
                <div class="col-sm-6">
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-2 mr-3">
                            <label type="text" name="" id="" class="form-label"
                                style="font-size: 13px">Status
                            </label>
                        </div>
                        <div class="col-sm-6">
                            <select class="selectpicker" aria-label="Default select example" name="status"
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



    <script>
        function getVal(){
            var cp1 = document.getElementById('cp1').value;
            let cust = document.getElementById('cust_no').value;
            var contactperson;
    
            contactperson = cust+cp1
            document.getElementById('contactperson').value = contactperson;        
        }
    </script>

@endsection
