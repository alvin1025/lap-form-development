@extends('dashboard.layout.lte')

@section('title', 'Permintaan Input/Ubah Data Customer')

@section('content')

    <form action="{{ route('inputan.update', ['inputan' => $inputan->id]) }}" method="post">
        @csrf
        @method('patch')
        <div class="row">
            <div class="d-flex justify-content-start">
                <div class="col-sm-7">
                    <div class="row">
                        <label class="col-sm-3 col-form-label my-2"></label>
                        <div class="col-sm-7 my-2">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="mb-3 row">
                        <label class="col-sm-5 col-form-label my-2"></label>
                        <div class="col-sm-7 my-2">
                            <input id="tanggal" type="date" class="form-control @error('tanggal') is-invalid @enderror"
                                name="tanggal" value="{{ $inputan->tanggal }}" />
                            @error('tanggal')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Nav --}}
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="kd03-tab" data-bs-toggle="tab" data-bs-target="#kd03" type="button"
                    role="tab" aria-controls="kd03" aria-selected="true">KD03</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="kd04-tab" data-bs-toggle="tab" data-bs-target="#kd04" type="button"
                    role="tab" aria-controls="kd04" aria-selected="false">KD04</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="kd05-tab" data-bs-toggle="tab" data-bs-target="#kd05" type="button"
                    role="tab" aria-controls="kd05" aria-selected="false">KD05</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="kd06-tab" data-bs-toggle="tab" data-bs-target="#kd06" type="button"
                    role="tab" aria-controls="kd06" aria-selected="false">KD06</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="kd11-tab" data-bs-toggle="tab" data-bs-target="#kd11" type="button"
                    role="tab" aria-controls="kd11" aria-selected="false">KD11</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="kd14-tab" data-bs-toggle="tab" data-bs-target="#kd14" type="button"
                    role="tab" aria-controls="kd14" aria-selected="false">KD14</button>
            </li>

            {{-- <li class="nav-item" role="presentation">
                <button class="nav-link" id="additional-tab" data-bs-toggle="tab" data-bs-target="#additional"
                    type="button" role="tab" aria-controls="additional" aria-selected="true">ADDITIONAL</button>
            </li> --}}
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="kd03" role="tabpanel" aria-labelledby="kd03-tab">
                <h6 class="text-left mt-3">KD03 Master</h6>
                <hr>
                <div class="row">
                    <div class="d-flex justify-content-start">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="d-flex flex-row">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id="" class="form-label">Title</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <select class="selectpicker" aria-label="Default select example" name="title"
                                            data-live-search="true">
                                            @foreach ($titles as $title)
                                                @if ($kd03->title == $title->title)
                                                    <option value="{{ $title->title }}" selected>
                                                        {{ $kd03->title }}
                                                    </option>
                                                @else
                                                    <option value="{{ $title->title }}">{{ $title->title }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('title')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id="" class="form-label">Class</label>
                                    </div>
                                    <div class="col-sm-7">
                                        <select class="selectpicker" aria-label="Default select example" name="class"
                                            data-live-search="true">
                                            @foreach ($classes as $class)
                                                @if ($kd03->class == $class->class)
                                                    <option value="{{ $class->class }}" selected>
                                                        {{ $kd03->class }}
                                                    </option>
                                                @else
                                                    <option value="{{ $class->class }}">{{ $class->class }}
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
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id="" class="form-label">Status</label>
                                    </div>
                                    <div class="col-sm-7">
                                        <select class="selectpicker" aria-label="Default select example" name="status"
                                            data-live-search="true">
                                            <option value="1" {{ $kd03->status == 1 ? 'selected' : '' }}>Active</option>
                                            <option value="2" {{ $kd03->status == 2 ? 'selected' : '' }}>Inactive
                                            </option>
                                        </select>
                                        @error('status')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id="" class="form-label">Nama 1</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="nama1" type="text"
                                            class="form-control @error('nama1') is-invalid @enderror" name="nama1"
                                            value="{{ $inputan->nama1 }}" />
                                        @error('nama1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id="" class="form-label">Nama 2</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="nama2" type="text"
                                            class="form-control @error('nama2') is-invalid @enderror" name="nama2"
                                            value="{{ $inputan->nama2 }}" />
                                        @error('nama2')
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
                                        <input id="street" type="text"
                                            class="form-control @error('street') is-invalid @enderror" name="street"
                                            value="{{ $inputan->street }}" />
                                        @error('street')
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
                                        <input id="addit" type="text"
                                            class="form-control @error('addit') is-invalid @enderror" name="addit"
                                            value="{{ $inputan->addit }}" />
                                        @error('addit')
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
                                        <select class="selectpicker" aria-label="Default select example" name="tax"
                                            data-live-search="true">
                                            @foreach ($taxs as $tax)
                                                @if ($kd03->tax == $tax->tax)
                                                    <option value="{{ $tax->tax }}" selected>
                                                        {{ $kd03->tax }}
                                                    </option>
                                                @else
                                                    <option value="{{ $tax->tax }}">{{ $tax->tax }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('tax')
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
                                        <input id="postal_code" type="number"
                                            class="form-control @error('postal_code') is-invalid @enderror"
                                            name="postal_code" value="{{ $inputan->postal_code }}" />
                                        @error('postal_code')
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
                                        <label type="text" name="" id="" class="form-label text-center">No Cust</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label type="text" name="" id="" class="form-label text-center">Short Name</label>
                                    </div>
                                </div>

                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-5">
                                        <input id="no_cust" type="text"
                                            class="form-control @error('no_cust') is-invalid @enderror" name="no_cust"
                                            value="{{ $inputan->no_cust }}" />
                                        @error('no_cust')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <input id="short_name" type="text"
                                            class="form-control @error('short_name') is-invalid @enderror"
                                            name="short_name" value="{{ $inputan->short_name }}" />
                                        @error('short_name')
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
                                        <input id="fax" type="text" class="form-control @error('fax') is-invalid @enderror"
                                            name="fax" value="{{ $inputan->fax }}" />
                                        @error('fax')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3">
                                        <label type="text" name="" id="" class="form-label text-center">PO Box</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="text" type="text"
                                            class="form-control @error('po_box') is-invalid @enderror" name="po_box"
                                            value="{{ $inputan->po_box }}" />
                                        @error('po_box')
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
                                        <input id="email" type="text"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ $inputan->email }}" />
                                        @error('email')
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
                                        <input id="telp" type="number"
                                            class="form-control @error('telp') is-invalid @enderror" name="telp"
                                            value="{{ $inputan->telp }}" />
                                        @error('telp')
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
                                        <input id="mobile" type="number"
                                            class="form-control @error('mobile') is-invalid @enderror" name="mobile"
                                            value="{{ $inputan->mobile }}" />
                                        @error('mobile')
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
                                        <input id="home" type="text"
                                            class="form-control @error('home') is-invalid @enderror" name="home"
                                            value="{{ $inputan->home }}" />
                                        @error('home')
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
                                            style="font-size: 13px">Country Code</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <select class="selectpicker" aria-label="Default select example" name="negara"
                                            data-live-search="true">
                                            @foreach ($negaras as $negara)
                                                @if ($kd03->negara == $negara->nama_negara)
                                                    <option value="{{ $negara->nama_negara }}" selected>
                                                        {{ $kd03->negara }}
                                                    </option>
                                                @else
                                                    <option value="{{ $negara->nama_negara }}">
                                                        {{ $negara->nama_negara }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('negara')
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
                                            style="font-size: 15px">Kode
                                            County</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <select class="selectpicker" aria-label="Default select example"
                                            name="kode_county" data-live-search="true">
                                            @foreach ($kodeCountries as $country)
                                                @if ($kd03->kode_county == $country->kode_county)
                                                    <option value="{{ $country->kode_county }}" selected>
                                                        {{ $kd03->kode_county }}
                                                    </option>
                                                @else
                                                    <option value="{{ $country->kode_county }}">
                                                        {{ $country->kode_county }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('kode_county')
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
                                        <input id="kota" type="text"
                                            class="form-control @error('kota') is-invalid @enderror" name="kota"
                                            value="{{ $inputan->kota }}" />
                                        @error('kota')
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
                                        <input id="npwp" type="text"
                                            class="form-control @error('npwp') is-invalid @enderror" name="npwp"
                                            value="{{ $inputan->npwp }}" />
                                        @error('npwp')
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


            <div class="tab-pane fade" id="kd06" role="tabpanel" aria-labelledby="kd06-tab"> {{-- KD06 --}}
                <h6 class="text-left mt-2">KD06 Conditions</h6>
                <hr>

                <div class="row justify-content-center">
                    <div class="row">
                        <div class="d-flex justify-content-around">
                            <div class="col-sm-12">
                                <div class="row">
                                    <h6 class="mb-4">All Customer Form</h6>
                                    <div class="table-responsive mt-0">

                                        <table class="table table-striped table-sm" id="dt-init">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Cust No</th>
                                                    <th scope="col">SD</th>
                                                    <th scope="col">SG</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($kd06 as $form)
                                                    <tr>
                                                        <td>{{ $form->kd6no_cust }}</td>
                                                        <td>{{ $form->sd }}</td>
                                                        <td>{{ $form->kd6sg }}</td>
                                                        <td>
                                                            <a href="/dashboard/salesFolder/inputan/"
                                                                class="badge bg-info"><i class="fa fa-eye"
                                                                    aria-hidden="true"></i></a>
                                                            <a href="/dashboard/salesFolder/inputan/{{ $form->id }}/editkd6"
                                                                class="badge bg-warning"><i
                                                                    class="fas fa-edit"></i></a>
                                                            @if (Auth::user()->division == 'MANAGEMENT INFORMATION SYSTEM')
                                                                {{-- <form
                                                                    action="/dashboard/salesFolder/inputan/{{ $form->id }}"
                                                                    method="post" class="d-inline">
                                                                    @method('delete')
                                                                    @csrf
                                                                    <button class="badge bg-danger border-0"
                                                                        onclick="return confirm('Are you sure?')"><i
                                                                            class="fas fa-trash-alt"></i></span></button>
                                                                </form> --}}
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>


            <div class="tab-pane fade" id="kd04" role="tabpanel" aria-labelledby="kd04-tab"> {{-- For Finance --}}
                <h6 class="text-left mt-2">KD04</h6>
                <hr>
                <div class="row justify-content-center">
                    <div class="row">
                        <div class="d-flex justify-content-around">
                            <div class="col-sm-12">
                                <div class="row">
                                    <h6 class="mb-4">All Customer Form</h6>
                                    <div class="table-responsive mt-0">

                                        <table class="table table-striped table-sm" id="dt-init4">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Cust No</th>
                                                    <th scope="col">Credit Limit</th>
                                                    <th scope="col">Credit Cust</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($kd04 as $form)
                                                    <tr>
                                                        <td>{{ $form->kd4no_cust }}</td>
                                                        <td>{{ $form->credit_limit }}</td>
                                                        <td>{{ $form->credit_cust }}</td>
                                                        <td>
                                                            <a href="/dashboard/salesFolder/inputan/"
                                                                class="badge bg-info"><i class="fa fa-eye"
                                                                    aria-hidden="true"></i></a>

                                                            <a href="/dashboard/salesFolder/inputan/{{ $form->id }}/editkd4"
                                                                class="badge bg-warning"><i
                                                                    class="fas fa-edit"></i></a>
                                                            @if (Auth::user()->division == 'MANAGEMENT INFORMATION SYSTEM')
                                                                {{-- <form
                                                                    action="/dashboard/salesFolder/inputan/{{ $form->id }}"
                                                                    method="post" class="d-inline">
                                                                    @method('delete')
                                                                    @csrf
                                                                    <button class="badge bg-danger border-0"
                                                                        onclick="return confirm('Are you sure?')"><i
                                                                            class="fas fa-trash-alt"></i></span></button>
                                                                </form> --}}
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="tab-pane fade" id="kd11" role="tabpanel" aria-labelledby="kd11-tab">
                <h6 class="mt-2">KD11 Associations List</h6>
                <hr class="mb-2">
                <div class="row justify-content-center">
                    <div class="row">
                        <div class="d-flex justify-content-around">
                            <div class="col-sm-12">
                                <div class="row">
                                    <h6 class="mb-4">All Customer Form</h6>
                                    <div class="table-responsive mt-0">

                                        <table class="table table-striped table-sm" id="dt-init5">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Cust No</th>
                                                    <th scope="col">SD Agen</th>
                                                    <th scope="col">Association</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($kd11 as $form)
                                                    <tr>
                                                        <td>{{ $form->kd11no_cust }}</td>
                                                        <td>{{ $form->sd1 }}</td>
                                                        <td>{{ $form->assoc }}</td>
                                                        <td>
                                                            <a href="/dashboard/salesFolder/inputan/"
                                                                class="badge bg-info"><i class="fa fa-eye"
                                                                    aria-hidden="true"></i></a>
                                                            <a href="/dashboard/salesFolder/inputan/{{ $form->id }}/editkd11"
                                                                class="badge bg-warning"><i
                                                                    class="fas fa-edit"></i></a>
                                                            @if (Auth::user()->division == 'MANAGEMENT INFORMATION SYSTEM')
                                                                {{-- <form
                                                                    action="/dashboard/salesFolder/inputan/{{ $form->id }}"
                                                                    method="post" class="d-inline">
                                                                    @method('delete')
                                                                    @csrf
                                                                    <button class="badge bg-danger border-0"
                                                                        onclick="return confirm('Are you sure?')"><i
                                                                            class="fas fa-trash-alt"></i></span></button>
                                                                </form> --}}
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>



            <div class="tab-pane fade" id="kd14" role="tabpanel" aria-labelledby="kd14-tab">
                {{-- KD14 PIC/Contact Person --}}
                <h6 class="text-left mt-2">KD14 PIC/Contact Person</h6>
                <hr class="mb-2">

                <div class="row justify-content-center">
                    <div class="row">
                        <div class="d-flex justify-content-around">
                            <div class="col-sm-12">
                                <div class="row">
                                    <h6 class="mb-4">All Customer Form</h6>
                                    <div class="table-responsive mt-0">

                                        <table class="table table-striped table-sm" id="dt-init7">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Cust No</th>
                                                    <th scope="col">Nama</th>
                                                    <th scope="col">Telepon</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($kd14 as $form)
                                                    <tr>
                                                        <td>{{ $form->kd14no_cust }}</td>
                                                        <td>{{ $form->nama_cp1 }}</td>
                                                        <td>{{ $form->phone_cp1 }}</td>
                                                        <td>{{ $form->email_cp1 }}</td>
                                                        <td>
                                                            <a href="/dashboard/salesFolder/inputan/"
                                                                class="badge bg-info"><i class="fa fa-eye"
                                                                    aria-hidden="true"></i></a>
                                                            <a href="/dashboard/salesFolder/inputan/{{ $form->id }}/editkd14"
                                                                class="badge bg-warning"><i
                                                                    class="fas fa-edit"></i></a>
                                                            @if (Auth::user()->division == 'MANAGEMENT INFORMATION SYSTEM')
                                                                {{-- <form
                                                                    action="/dashboard/salesFolder/inputan/{{ $form->id }}"
                                                                    method="post" class="d-inline">
                                                                    @method('delete')
                                                                    @csrf
                                                                    <button class="badge bg-danger border-0"
                                                                        onclick="return confirm('Are you sure?')"><i
                                                                            class="fas fa-trash-alt"></i></span></button>
                                                                </form> --}}
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>

            {{-- KD05 --}}
            {{-- <a href="/dashboard/salesFolder/inputan/{{ $kd05->no_cust1 }}/addkd5" class="badge bg-warning"><i
                    class="fas fa-edit"></i></a> --}}
            <div class="tab-pane fade" id="kd05" role="tabpanel" aria-labelledby="kd05-tab">
                <div class="row justify-content-center">
                    <h6 class="mt-2">KD05</h6>
                    <hr class="mb-3">
                    <div class="row">
                        <div class="d-flex justify-content-around">
                            <div class="col-sm-12">
                                <div class="row">
                                    <h6 class="mb-4">All Customer Form</h6>
                                    <div class="table-responsive mt-0">

                                        <table class="table table-striped table-sm" id="dt-init2">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Cust No</th>
                                                    <th scope="col">Address Code</th>
                                                    <th scope="col">Nama</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($kd05 as $form)
                                                    <tr>
                                                        <td>{{ $form->no_cust1 }}</td>
                                                        <td>{{ $form->addresscode1 }}</td>
                                                        <td>{{ $form->nama11 }}</td>
                                                        <td>
                                                            <a href="/dashboard/salesFolder/inputan/"
                                                                class="badge bg-info"><i class="fa fa-eye"
                                                                    aria-hidden="true"></i></a>
                                                            <a href="/dashboard/salesFolder/inputan/new/{{ $form->id }}/editkd5"
                                                                class="badge bg-warning"><i
                                                                    class="fas fa-edit"></i></a>
                                                            @if (Auth::user()->division == 'MANAGEMENT INFORMATION SYSTEM')
                                                                {{-- <form
                                                                    action="/dashboard/salesFolder/inputan/{{ $form->id }}"
                                                                    method="post" class="d-inline">
                                                                    @method('delete')
                                                                    @csrf
                                                                    <button class="badge bg-danger border-0"
                                                                        onclick="return confirm('Are you sure?')"><i
                                                                            class="fas fa-trash-alt"></i></span></button>
                                                                </form> --}}
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            {{-- <div class="tab-pane fade" id="additional" role="tabpanel" aria-labelledby="additional-tab">
                <div class="row">
                    <div class="d-flex justify-content-start">
                        <div class="row">
                            <h6 class="text-left mt-2">Additional</h6>
                            <hr>
                            <div class="col-sm-10">
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3 mr-3">
                                        <label type="text" name="" id="" class="form-label"
                                            style="font-size: 15px">Perubahan Alamat</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <textarea id="add_perubahan_alamat" type="text"
                                            class="form-control @error('add_perubahan_alamat') is-invalid @enderror"
                                            name="add_perubahan_alamat" cols="30" rows="5"></textarea>
                                        @error('add_perubahan_alamat')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3 mr-3">
                                        <label type="text" name="" id="" class="form-label">Fax</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <input id="add_fax" type="text"
                                            class="form-control @error('add_fax') is-invalid @enderror" name="add_fax" />
                                        @error('add_fax')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3 mr-3">
                                        <label type="text" name="" id="" class="form-label">Bidang</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <input id="add_bidang" type="text"
                                            class="form-control @error('add_bidang') is-invalid @enderror"
                                            name="add_bidang" />
                                        @error('add_bidang')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3 mr-3">
                                        <label type="text" name="" id="" class="form-label">Jenis Bisnis</label>
                                    </div>
                                    <div class="col-sm-7">
                                        <select class="selectpicker" aria-label="Default select example"
                                            name="add_jenis_bisnis" data-live-search="true">
                                            <option selected>Open this select menu</option>
                                            @foreach ($jenises as $jenis)
                                                @if (old('add_jenis_bisnis') == $jenis->jenis_bisnis)
                                                    <option value="{{ $jenis->jenis_bisnis }}" selected>
                                                        {{ $jenis->jenis_bisnis }}
                                                    </option>
                                                @else
                                                    <option value="{{ $jenis->jenis_bisnis }}">
                                                        {{ $jenis->jenis_bisnis }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('add_jenis_bisnis')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3 mr-3">
                                        <label type="text" name="" id="" class="form-label">Orientasi Market</label>
                                    </div>
                                    <div class="col-sm-7">
                                        <select class="selectpicker" aria-label="Default select example"
                                            name="add_orientasi_bisnis" data-live-search="true">
                                            <option selected>Open this select menu</option>
                                            @foreach ($orientasis as $orientasi)
                                                @if (old('add_orientasi_bisnis') == $orientasi->orientasi_market)
                                                    <option value="{{ $orientasi->orientasi_market }}" selected>
                                                        {{ $orientasi->orientasi_market }}
                                                    </option>
                                                @else
                                                    <option value="{{ $orientasi->orientasi_market }}">
                                                        {{ $orientasi->orientasi_market }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('add_orientasi_bisnis')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3 mr-3">
                                        <label type="text" name="" id="" class="form-label">Tipe Perusahaan</label>
                                    </div>
                                    <div class="col-sm-7">
                                        <select class="selectpicker" aria-label="Default select example"
                                            name="add_type_perusahaan" data-live-search="true">
                                            <option selected>Open this select menu</option>
                                            @foreach ($tipes as $tipe)
                                                @if (old('add_type_perusahaan') == $tipe->tipe_perusahaan)
                                                    <option value="{{ $tipe->tipe_perusahaan }}" selected>
                                                        {{ $tipe->tipe_perusahaan }}
                                                    </option>
                                                @else
                                                    <option value="{{ $tipe->tipe_perusahaan }}">
                                                        {{ $tipe->tipe_perusahaan }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('add_type_perusahaan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-2 mr-3">
                                        <label type="text" name="" id="" class="form-label">Kepemilikan</label>
                                    </div>
                                    <div class="col-sm-6">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <div class="d-flex flex-row">
                                    <div class="col-sm-3 mr-3">
                                        <select class="form-select" aria-label="Default select example"
                                            name="add_kepemilikan">
                                            <option selected>Pilih..</option>
                                            <option value="Kantor">Kantor</option>
                                            <option value="Pabrik">Pabrik</option>
                                            <option value="Toko">Toko</option>
                                        </select>
                                        @error('add_kepemilikan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-7">
                                        <select class="selectpicker" aria-label="Default select example"
                                            name="add_jenis_kepemilikan" data-live-search="true">
                                            <option selected>Open this select menu</option>
                                            @foreach ($kepemilikan as $milik)
                                                @if (old('add_jenis_kepemilikan') == $milik->kepemilikan_kantor)
                                                    <option value="{{ $milik->kepemilikan_kantor }}" selected>
                                                        {{ $milik->kepemilikan_kantor }}
                                                    </option>
                                                @else
                                                    <option value="{{ $milik->kepemilikan_kantor }}">
                                                        {{ $milik->kepemilikan_kantor }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('jenis_kepemilikan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-10 mt-2">
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3 mr-3">
                                        <label type="text" name="" id="" class="form-label"
                                            style="font-size: 13px">Sudah berapa lama di
                                            bisnis Textile</label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input id="add_lama_bisnis" type="text"
                                            class="form-control @error('add_lama_bisnis') is-invalid @enderror"
                                            name="add_lama_bisnis" />
                                        @error('add_lama_bisnis')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-1">
                                        <label type="text" name="" id="" class="form-label">Tahun</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3 mr-3">
                                        <label type="text" name="" id="" class="form-label">Credit Limit
                                            Request</label>
                                    </div>
                                    <div class="col-sm-7">
                                        <select class="selectpicker" aria-label="Default select example"
                                            name="add_credit_limit_request" data-live-search="true">
                                            <option selected>Open this select menu</option>
                                            @foreach ($credits as $credit)
                                                @if (old('add_credit_limit_request') == $credit->credit_limit)
                                                    <option value="{{ $credit->credit_limit }}" selected>
                                                        {{ $credit->credit_limit }}
                                                    </option>
                                                @else
                                                    <option value="{{ $credit->credit_limit }}">
                                                        {{ $credit->credit_limit }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('add_credit_limit_request')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3 mr-3">
                                        <label type="text" name="" id="" class="form-label">Credit Term
                                            Request</label>
                                    </div>
                                    <div class="col-sm-7">
                                        <select class="selectpicker" aria-label="Default select example"
                                            name="add_credit_term_request" data-live-search="true">
                                            <option selected>Open this select menu</option>
                                            @foreach ($pays as $pay)
                                                @if (old('add_credit_term_request') == $pay->pay_term)
                                                    <option value="{{ $pay->pay_term }}" selected>
                                                        {{ $pay->pay_term }}
                                                    </option>
                                                @else
                                                    <option value="{{ $pay->pay_term }}">{{ $pay->pay_term }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('add_credit_term_request')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-10 mt-2">
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3 mr-3">
                                        <label type="text" name="" id="" class="form-label"
                                            style="font-size: 13px">Sudah berapa lama bekerja sama dengan LPA</label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input id="add_kerjasama_lpa" type="text"
                                            class="form-control @error('add_kerjasama_lpa') is-invalid @enderror"
                                            name="add_kerjasama_lpa" />
                                        @error('add_kerjasama_lpa')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-1">
                                        <label type="text" name="" id="" class="form-label">Tahun</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3 mr-3">
                                        <label type="text" name="" id="" class="form-label"
                                            style="font-size: 14px">Bank
                                            Koresponden</label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input id="add_bank_koresponden1" type="text"
                                            class="form-control @error('add_bank_koresponden1') is-invalid @enderror"
                                            name="add_bank_koresponden1" />
                                        @error('add_bank_koresponden1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="col-sm-3">
                                        <input id="add_bank_koresponden2" type="text"
                                            class="form-control @error('add_bank_koresponden2') is-invalid @enderror"
                                            name="add_bank_koresponden2" />
                                        @error('add_bank_koresponden2')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3 mr-3">
                                        <label type="text" name="" id="" class="form-label"
                                            style="font-size: 14px">Data Customer (5
                                            Besar)</label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input id="add_cust1" type="text"
                                            class="form-control @error('add_cust1') is-invalid @enderror"
                                            name="add_cust1" />
                                        @error('add_cust1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-1">
                                    <div class="col-sm-3 mr-3">
                                        <label type="text" name="" id="" class="form-label"></label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input id="add_cust2" type="text"
                                            class="form-control @error('add_cust2') is-invalid @enderror"
                                            name="add_cust2" />
                                        @error('add_cust2')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3 mr-3">
                                        <label type="text" name="" id="" class="form-label"></label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input id="add_cust3" type="text"
                                            class="form-control @error('add_cust3') is-invalid @enderror"
                                            name="add_cust3" />
                                        @error('add_cust3')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3 mr-3">
                                        <label type="text" name="" id="" class="form-label"></label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input id="add_cust4" type="text"
                                            class="form-control @error('add_cust4') is-invalid @enderror"
                                            name="add_cust4" />
                                        @error('add_cust4')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3 mr-3">
                                        <label type="text" name="" id="" class="form-label"></label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input id="add_cust5" type="text"
                                            class="form-control @error('add_cust5') is-invalid @enderror"
                                            name="add_cust5" />
                                        @error('add_cust5')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3 mr-3">
                                        <label type="text" name="" id="" class="form-label"
                                            style="font-size: 14px">Data Supplier (5
                                            Besar)</label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input id="add_sup1" type="text"
                                            class="form-control @error('add_sup1') is-invalid @enderror"
                                            name="add_sup1" />
                                        @error('add_sup1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-1">
                                    <div class="col-sm-3 mr-3">
                                        <label type="text" name="" id="" class="form-label"></label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input id="add_sup2" type="text"
                                            class="form-control @error('add_sup2') is-invalid @enderror"
                                            name="add_sup2" />
                                        @error('add_sup2')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3 mr-3">
                                        <label type="text" name="" id="" class="form-label"></label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input id="add_sup3" type="text"
                                            class="form-control @error('add_sup3') is-invalid @enderror"
                                            name="add_sup3" />
                                        @error('add_sup3')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3 mr-3">
                                        <label type="text" name="" id="" class="form-label"></label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input id="add_sup4" type="text"
                                            class="form-control @error('add_sup4') is-invalid @enderror"
                                            name="add_sup4" />
                                        @error('add_sup4')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-2">
                                    <div class="col-sm-3 mr-3">
                                        <label type="text" name="" id="" class="form-label"></label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input id="add_sup5" type="text"
                                            class="form-control @error('add_sup5') is-invalid @enderror"
                                            name="add_sup5" />
                                        @error('add_sup5')
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
            </div> --}}

            {{-- <input type="hidden" name="status" value="waiting approval">
            <input type="hidden" name="status_form" value="Outstanding"> --}}


            <div class="d-flex justify-content-end mb-5">
                <div class="col-sm-1">
                    <a href="{{ route('inputan.index') }}" class="btn btn-danger">BACK</a>
                </div>
                <div class="col-sm-1">
                    <button type="submit" class="btn btn-primary" id="submit">SUBMIT</button>

                </div>
            </div>
    </form>


    @push('after-script')
        <script>
            $(document).ready(function() {
                'use-strict';
                $('#dt-init').DataTable();
                $('#dt-init2').DataTable();
                $('#dt-init3').DataTable();
                $('#dt-init4').DataTable();
                $('#dt-init5').DataTable();
                $('#dt-init7').DataTable();
            });
        </script>
    @endpush
@endsection
