@extends('dashboard.layout.lte')

@section('title', 'Edit Kd14')

@section('content')

    <form action="{{ route('update.kd14', ['id' => $kd14->id]) }}" method="post">
        @csrf
        @method('put')
        <div class="row">
            <h5 class="text-center">@yield('title')</h5>
            {{-- </div> --}}
        </div>
        <hr>

        <div class="card-header">
            KD14 PIC/Contact Person
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
                            name="kd14no_cust" value="{{ $kd14->kd14no_cust }}" />
                        @error('cust_no')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label">CP Code</label>
                    </div>
                    <div class="col-sm-3">
                        <input id="cp1" type="text" class="form-control @error('cp1') is-invalid @enderror" name="cp1"
                            value="{{ $kd14->cp1 }}" />
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
                            name="nama_cp1" value="{{ $kd14->nama_cp1 }}">
                        @error('nama_cp1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-3">
                        <input class="form-control @error('function_cp1') is-invalid @enderror" type="text"
                            id="function_cp1" name="function_cp1" value="{{ $kd14->function_cp1 }}">
                        @error('function_cp1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-3">
                        <input class="form-control @error('sinc_cp1') is-invalid @enderror" type="date" id="sinc_cp1"
                            name="sinc_cp1" value="{{ $kd14->sinc_cp1 }}">
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
                        <input class="form-control @error('mobile_cp1') is-invalid @enderror" type="text" id="mobile_cp1"
                            name="mobile_cp1" value="{{ $kd14->mobile_cp1 }}">
                        @error('mobile_cp1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-3">
                        <input class="form-control @error('phone_cp1') is-invalid @enderror" type="text" id="phone_cp1"
                            name="phone_cp1" value="{{ $kd14->phone_cp1 }}">
                        @error('phone_cp1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-3">
                        <input class="form-control @error('email_cp1') is-invalid @enderror" type="email" id="email_cp1"
                            name="email_cp1" value="{{ $kd14->email_cp1 }}">
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
                            <label type="text" name="" id="" class="form-label" style="font-size: 13px">SD
                            </label>
                        </div>
                        <div class="col-sm-6">
                            <select class="selectpicker" aria-label="Default select example" name="sd_cp1"
                                data-live-search="true">
                                @foreach ($sds as $sd)
                                    @if ($kd14->sd_cp1 == $sd->sd)
                                        <option data-tokens="{{ $sd->sd }}" selected>
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
                <div class="col-sm-6">
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-2 mr-3">
                            <label type="text" name="" id="" class="form-label" style="font-size: 13px">Sg
                            </label>
                        </div>
                        <div class="col-sm-6">
                            <select class="selectpicker" aria-label="Default select example" name="sg_cp1"
                                data-live-search="true">
                                @foreach ($sgs as $sg)
                                    @if ($kd14->sg_cp1 == $sg->sg)
                                        <option data-tokens="{{ $sg->sg }}" selected>
                                            {{ $kd14->sg_cp1 }}
                                        </option>
                                    @else
                                        <option data-tokens="{{ $sg->sg }}">{{ $sg->sg }}
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
            <div class="col-sm-8">
                <div class="d-flex flex-row mt-2">
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label" style="font-size: 13px">Add
                            Addr
                    </div>
                    <div class="col-sm-6">
                        <select class="selectpicker" aria-label="Default select example" name="add_addr_cp1"
                            data-live-search="true">
                            @foreach ($kd05 as $kd5)
                                @if ($kd14->add_addr_cp1 == $kd5->addit1)
                                    <option data-tokens="{{ $kd5->id }}" selected>
                                        {{ $kd5->addit1 }}
                                    </option>
                                @else
                                    <option data-tokens="{{ $kd5->id }}">{{ $kd5->addit1 }}
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
                $("#kd14_1").append($("#test").html());
            });
        </script>
    @endpush
@endsection
