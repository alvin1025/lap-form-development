@extends('dashboard.layout.lte')

@section('title', 'Edit Kd05')

@section('content')

    <form action="{{ route('update.Kd5', ['id' => $kd05->id]) }}" method="post">
        @csrf
        @method('put')
        <div class="row">
            <h5 class="text-center">@yield('title')</h5>
            {{-- </div> --}}
        </div>
        <hr>

        <div class="card my-5" id="kd05_1">
            <div class="card-header">
                KD5 Additional
            </div>
            <div class="row">
                <div class="d-flex justify-content-start my-3 mx-3">
                    <div class="row">
                        <div class="d-flex justify-content-start">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="d-flex flex-row">
                                        <div class="col-sm-3">
                                            <label type="text" name="" id="" class="form-label">Title</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <select class="selectpicker" aria-label="Default select example" name="title1"
                                                data-live-search="true">
                                                @foreach ($titles as $title)
                                                    @if ($kd05->title1 == $title->title)
                                                        <option data-tokens="{{ $title->title }}" selected>
                                                            {{ $kd05->title1 }}
                                                        </option>
                                                    @else
                                                        <option data-tokens="{{ $title->title }}">
                                                            {{ $title->title }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                            @error('title1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror

                                        </div>
                                    </div>
                                    {{-- <div class="d-flex flex-row mt-2">
                                            <div class="col-sm-3">
                                                <label type="text" name="" id="" class="form-label">Class</label>
                                            </div>
                                            <div class="col-sm-7">
                                                <select class="selectpicker" aria-label="Default select example"
                                                    name="class" data-live-search="true">
                                                    <option selected value="">Open this select menu</option>
                                                    @foreach ($classes as $class)
                                                        @if (old('class') == $class->class)
                                                            <option data-tokens="{{ $class->class }}" selected>
                                                                {{ $class->class }}
                                                            </option>
                                                        @else
                                                            <option data-tokens="{{ $class->class }}">
                                                                {{ $class->class }}
                                                            </option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                                @error('class')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div> --}}
                                    {{-- <div class="d-flex flex-row mt-2">
                                            <div class="col-sm-3">
                                                <label type="text" name="" id="" class="form-label">Status</label>
                                            </div>
                                            <div class="col-sm-7">
                                                <select class="selectpicker" aria-label="Default select example"
                                                    name="status" data-live-search="true">
                                                    <option selected>Open this select menu</option>
                                                    <option value="1">Active</option>
                                                    <option value="2">Inactive</option>
                                                </select>
                                                @error('status')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div> --}}
                                    {{-- <div class="d-flex flex-row mt-2">
                                            <div class="col-sm-3">
                                                <label type="text" name="" id="" class="form-label">Short Name</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input id="short_name" type="text"
                                                    class="form-control @error('short_name') is-invalid @enderror"
                                                    name="short_name" />
                                                @error('short_name')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div> --}}
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-3">
                                            <label type="text" name="" id="" class="form-label">Nama
                                                1</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input id="nama11" type="text"
                                                class="form-control @error('nama11') is-invalid @enderror" name="nama11"
                                                value="{{ $kd05->nama11 }}" />
                                            @error('nama11')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-3">
                                            <label type="text" name="" id="" class="form-label">Nama
                                                2</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input id="nama21" type="text"
                                                class="form-control @error('nama21') is-invalid @enderror" name="nama21"
                                                value="{{ $kd05->nama21 }}" />
                                            @error('nama21')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-3">
                                            <label type="text" name="" id="" class="form-label">Street</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input id="street1" type="text"
                                                class="form-control @error('street1') is-invalid @enderror" name="street1"
                                                value="{{ $kd05->street1 }}" />
                                            @error('street1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-3">
                                            <label type="text" name="" id="" class="form-label"
                                                style="font-size: 13px">Additional Address</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input id="addit1" type="text"
                                                class="form-control @error('addit1') is-invalid @enderror" name="addit1"
                                                value="{{ $kd05->addit1 }}" />
                                            @error('addit1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-3">
                                            <label type="text" name="" id="" class="form-label"
                                                style="font-size: 13px">Tax</label>
                                        </div>

                                        <div class="col-sm-6">
                                            <select class="selectpicker" aria-label="Default select example" name="tax1"
                                                data-live-search="true">
                                                @foreach ($taxs as $tax)
                                                    @if ($kd05->tax1 == $tax->tax)
                                                        <option data-tokens="{{ $tax->tax }}" selected>
                                                            {{ $kd05->tax1 }}
                                                        </option>
                                                    @else
                                                        <option data-tokens="{{ $tax->tax }}">
                                                            {{ $tax->tax }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                            @error('tax1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>


                                    </div>
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-3">
                                            <label type="text" name="" id="" class="form-label"
                                                style="font-size: 13px">Postal Code</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input id="postal_code1" type="text"
                                                class="form-control @error('postal_code1') is-invalid @enderror"
                                                name="postal_code1" value="{{ $kd05->postal_code1 }}" />
                                            @error('postal_code1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="d-flex flex-row">
                                        <div class="col-sm-3">

                                        </div>
                                        <div class="col-sm-8">

                                        </div>
                                    </div>
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-5">
                                            <label type="text" name="" id="" class="form-label text-center">No
                                                Cust</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label type="text" name="" id="" class="form-label text-center">Addres
                                                Code</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-5">
                                            <input id="no_cust1" type="text"
                                                class="form-control @error('no_cust1') is-invalid @enderror" name="no_cust1"
                                                value="{{ $kd05->no_cust1 }}" readonly />
                                            @error('no_cust1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-sm-6">
                                            <input id="addresscode1" type="text"
                                                class="form-control @error('addresscode1') is-invalid @enderror"
                                                name="addresscode1" value="{{ $kd05->addresscode1 }}" />
                                            @error('addresscode1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row mt-5">
                                        <div class="col-sm-3">
                                            <label type="text" name="" id="" class="form-label text-center">Fax</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input id="fax1" type="text"
                                                class="form-control @error('fax1') is-invalid @enderror" name="fax1"
                                                value="{{ $kd05->fax1 }}" />
                                            @error('fax1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-3">
                                            <label type="text" name="" id="" class="form-label text-center">PO
                                                Box</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input id="po_box1" type="text"
                                                class="form-control @error('po_box1') is-invalid @enderror" name="po_box1"
                                                value="{{ $kd05->po_box1 }}" />
                                            @error('po_box1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-3">
                                            <label type="text" name="" id="" class="form-label text-center">Email</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input id="email1" type="text"
                                                class="form-control @error('email1') is-invalid @enderror" name="email1"
                                                value="{{ $kd05->email1 }}" />
                                            @error('email1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-3">
                                            <label type="text" name="" id="" class="form-label text-center">Phone</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input id="telp1" type="text"
                                                class="form-control @error('telp1') is-invalid @enderror" name="telp1"
                                                value="{{ $kd05->telp1 }}" />
                                            @error('telp1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-3">
                                            <label type="text" name="" id="" class="form-label text-center">Mobile</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input id="mobile1" type="text"
                                                class="form-control @error('mobile1') is-invalid @enderror" name="mobile1"
                                                value="{{ $kd05->mobile1 }}" />
                                            @error('mobile1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-3">
                                            <label type="text" name="" id="" class="form-label text-center">Home</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input id="home1" type="text"
                                                class="form-control @error('home1') is-invalid @enderror" name="home1"
                                                value="{{ $kd05->home1 }}" />
                                            @error('home1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-3 justify-content-end">
                                    <div class="col-sm-2">
                                        <a href="{{ route('createSame', $kd05->no_cust1) }}"
                                            class="btn btn-success">New</a>
                                        {{-- <button type="button" class="btn btn-success me-2 remove-tr" id="add">Add More</button> --}}
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="d-flex flex-row mt-2">
                                        <div class="col-sm-2 mr-3">
                                            <label type="text" name="" id="" class="form-label"
                                                style="font-size: 13px">Country Code</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <select class="selectpicker" aria-label="Default select example"
                                                name="kd5negara1" data-live-search="true">
                                                @foreach ($negaras as $negara)
                                                    @if ($kd05->kd5negara1 == $negara->nama_negara)
                                                        <option data-tokens="{{ $negara->nama_negara }}" selected>
                                                            {{ $kd05->kd5negara1 }}
                                                        </option>
                                                    @else
                                                        <option data-tokens="{{ $negara->nama_negara }}">
                                                            {{ $negara->nama_negara }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                            @error('negara1')
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
                                                style="font-size: 13px">Kode
                                                County (Freight)</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <select class="selectpicker" aria-label="Default select example"
                                                name="kode_county1" data-live-search="true">
                                                @foreach ($kodeCountries as $country)
                                                    @if ($kd05->kode_county1 == $country->kode_county)
                                                        <option data-tokens="{{ $country->kode_county }}" selected>
                                                            {{ $kd05->kode_county1 }}
                                                        </option>
                                                    @else
                                                        <option data-tokens="{{ $country->kode_county }}">
                                                            {{ $country->kode_county }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                            @error('kode_county1')
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
                                            <label type="text" name="" id="" class="form-label">Kota</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input id="kota1" type="text"
                                                class="form-control @error('kota1') is-invalid @enderror" name="kota1"
                                                value="{{ $kd05->kota1 }}" />
                                            @error('kota1')
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
                                            <label type="text" name="" id="" class="form-label">NPWP</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input id="npwp1" type="text"
                                                class="form-control @error('npwp1') is-invalid @enderror" name="npwp1"
                                                value="{{ $kd05->npwp1 }}" />
                                            @error('npwp1')
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
