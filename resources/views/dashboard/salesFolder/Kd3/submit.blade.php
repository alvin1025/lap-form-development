@extends('dashboard.layout.lte')

@section('title', 'Permintaan Input/Ubah Data Customer')

@section('content')

    <form action="{{ route('updateSubmit', ['no_cust' => $no_cust]) }}" method="post">
        @csrf
        @method('put')


        <div class="card-body">
            <div class="row">
                <div class="d-flex justify-content-start">
                    <div class="col-sm-7">
                        <div class="row">
                            <label class="col-sm-3 col-form-label my-2"></label>
                            <div class="col-sm-7 my-2">
                            </div>
                        </div>
                    </div>
                </div>
                <h4 style="font-weight: bold;" class="text-center">Form Permintaan Input Cust Baru / Perubahan Data
                    Cust
                </h4>
                <hr class="mb-3 mt-5">
                <div class="row">
                    <div class="d-flex justify-content-around">
                        <div class="col-sm-12">
                            <div class="row">
                                <h6 class="mb-4">KD03</h6>
                                <div class="table-responsive mt-0">

                                    <table class="table table-striped table-sm" id="dt-init2">
                                        <thead>
                                            <tr>
                                                <th scope="col">Cust No</th>
                                                <th scope="col">Kode Customer</th>
                                                <th scope="col">Nama</th>
                                                {{-- <th scope="col">SD</th>
                                                <th scope="col">SG</th> --}}
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($kd03 as $form)
                                                <tr>
                                                    <td>{{ $form->no_cust }}</td>
                                                    <td>{{ $form->short_name }}</td>
                                                    <td>{{ $form->nama1 }}</td>
                                                    {{-- <td>{{ $form->sd }}</td>
                                                    <td>{{ $form->kd6sg }}</td> --}}
                                                    <td>{{ $form->status_form }}</td>
                                                    <td>
                                                        <button type="button" class="btn btn-info" data-toggle="modal"
                                                            data-target=".kd03"><i class="fa fa-eye" aria-hidden="true"></i>
                                                            Show KD03</button>
                                                        </button>

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
                <div class="modal fade kd03" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="card">
                                <div class="card-header">
                                    KD03 Master
                                </div>
                                <div class="card-body">
                                    @foreach ($kd03 as $kd03)
                                        <hr>
                                        <div class="d-flex justify-content-between">
                                            <div class="col-sm-6">
                                                <div class="d-flex flex-row my-2">
                                                    <div class="col-sm-5">
                                                        <label type="text" name="" id=""
                                                            class="form-label text-center">No Cust</label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label type="text" name="" id=""
                                                            class="form-label text-center">Kode
                                                            Cust</label>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row my-2">
                                                    <div class="col-sm-5">
                                                        <input id="no_cust" type="text"
                                                            class="form-control @error('no_cust') is-invalid @enderror"
                                                            name="no_cust" value="{{ $kd03->no_cust }}"
                                                            style="{{ $kd03->no_cust == null ? 'color:red' : '' }}"
                                                            disabled />
                                                        @error('no_cust')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input id="kode_cust" type="text"
                                                            class="form-control @error('kode_cust') is-invalid @enderror"
                                                            name="kode_cust"
                                                            value="{{ $kd03->short_name ?? 'Data Belum Lengkap!' }}"
                                                            style="{{ $kd03->short_name == null ? 'color:red' : '' }}"
                                                            disabled />
                                                        @error('kode_cust')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row">
                                                    <div class="col-sm-3">
                                                        <label type="text" name="" id=""
                                                            class="form-label">Title</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control"
                                                            value="{{ $kd03->title ?? 'Data Belum Lengkap!' }}"
                                                            style="{{ $kd03->title == null ? 'color:red' : '' }}" disabled>
                                                        @error('title')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row mt-2">
                                                    <div class="col-sm-3">
                                                        <label type="text" name="" id=""
                                                            class="form-label">Class</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control"
                                                            value="{{ $kd03->class ?? 'Data Belum Lengkap!' }}"
                                                            style="{{ $kd03->class == null ? 'color:red' : '' }}" disabled>
                                                        @error('class')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row mt-2">
                                                    <div class="col-sm-3">
                                                        <label type="text" name="" id=""
                                                            class="form-label">Nama</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input id="nama" type="text"
                                                            class="form-control @error('nama') is-invalid @enderror"
                                                            name="nama"
                                                            value="{{ $kd03->nama1 ?? 'Data Belum Lengkap!' }}"
                                                            style="{{ $kd03->nama1 == null ? 'color:red' : '' }}"
                                                            disabled />
                                                        @error('nama')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row mt-2">
                                                    <div class="col-sm-3">
                                                        <label type="text" name="" id=""
                                                            class="form-label">Nama
                                                            2</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input id="nama" type="text"
                                                            class="form-control @error('nama') is-invalid @enderror"
                                                            name="nama" value="{{ $kd03->nama2 ?? '-' }}" disabled />
                                                        @error('nama')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row mt-2">
                                                    <div class="col-sm-3">
                                                        <label type="text" name="" id=""
                                                            class="form-label">Alamat</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input id="kode_cust" type="text"
                                                            class="form-control @error('kode_cust') is-invalid @enderror"
                                                            name="kode_cust"
                                                            value="{{ $kd03->street ?? 'Data Belum Lengkap!' }}"
                                                            style="{{ $kd03->street == null ? 'color:red' : '' }}"
                                                            disabled />
                                                        @error('alamat')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row mt-2">
                                                    <div class="col-sm-3">
                                                        <label type="text" name="" id=""
                                                            class="form-label" style="font-size: 12px">Additional
                                                            Address</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input id="addit" type="text"
                                                            class="form-control @error('addit') is-invalid @enderror"
                                                            name="addit" value="{{ $kd03->addit ?? '-' }}" disabled />
                                                        @error('alamat')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row mt-2">
                                                    <div class="col-sm-3">
                                                        <label type="text" name="" id=""
                                                            class="form-label">Country</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input id="kode_cust" type="text"
                                                            class="form-control @error('kode_cust') is-invalid @enderror"
                                                            name="kode_cust"
                                                            value="{{ $kd03->negara ?? 'Data Belum Lengkap!' }}"
                                                            style="{{ $kd03->negara == null ? 'color:red' : '' }}"
                                                            disabled />
                                                        @error('negara')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row mt-2">
                                                    <div class="col-sm-3">
                                                        <label type="text" name="" id=""
                                                            class="form-label" style="font-size: 15px">Freight</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input id="kode_cust" type="text"
                                                            class="form-control @error('kode_cust') is-invalid @enderror"
                                                            name="kode_cust"
                                                            value="{{ $kd03->kode_county ?? 'Data Belum Lengkap!' }}"
                                                            style="{{ $kd03->kode_county == null ? 'color:red' : '' }}"
                                                            disabled />
                                                        @error('kode_country')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row mt-2">
                                                    <div class="col-sm-3">
                                                        <label type="text" name="" id=""
                                                            class="form-label">Kota</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input id="kota" type="text"
                                                            class="form-control @error('kota') is-invalid @enderror"
                                                            name="kota"
                                                            value="{{ $kd03->kota ?? 'Data Belum Lengkap!' }}"
                                                            style="{{ $kd03->kota == null ? 'color:red' : '' }}"
                                                            disabled />
                                                        @error('kota')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="d-flex flex-row">
                                                    <div class="col-sm-2 mr-3">
                                                        <label type="text" name="" id=""
                                                            class="form-label"></label>
                                                    </div>
                                                    <div class="col-sm-6">

                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row">
                                                    <div class="col-sm-2 mr-3">
                                                        <label type="text" name="" id=""
                                                            class="form-label"></label>
                                                    </div>
                                                    <div class="col-sm-6">

                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row">
                                                    <div class="col-sm-2 mr-3">
                                                        <label type="text" name="" id=""
                                                            class="form-label"></label>
                                                    </div>
                                                    <div class="col-sm-6">

                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row mt-4">
                                                    <div class="col-sm-2 mr-3">
                                                        <label type="text" name="" id=""
                                                            class="form-label" style="font-size: 12px">Postal
                                                            Code</label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input id="postal_code" type="postal_code"
                                                            class="form-control @error('postal_code') is-invalid @enderror"
                                                            name="postal_code"
                                                            value="{{ $kd03->postal_code ?? 'Data Belum Lengkap!' }}"
                                                            style="{{ $kd03->postal_code == null ? 'color:red' : '' }}"
                                                            disabled />
                                                        @error('postal_code')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row mt-2">
                                                    <div class="col-sm-2 mr-3">
                                                        <label type="text" name="" id=""
                                                            class="form-label">Email</label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input id="email" type="email"
                                                            class="form-control @error('email') is-invalid @enderror"
                                                            name="email"
                                                            value="{{ $kd03->email ?? 'Data Belum Lengkap!' }}"
                                                            style="{{ $kd03->email == null ? 'color:red' : '' }}"
                                                            disabled />
                                                        @error('email')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row mt-2">
                                                    <div class="col-sm-2 mr-3">
                                                        <label type="text" name="" id=""
                                                            class="form-label">Fax</label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input id="fax" type="text"
                                                            class="form-control @error('fax') is-invalid @enderror"
                                                            name="fax" value="{{ $kd03->fax ?? '-' }}" disabled />
                                                        @error('fax')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row mt-2">
                                                    <div class="col-sm-2 mr-3">
                                                        <label type="text" name="" id=""
                                                            class="form-label">Telp</label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input id="telp" type="text"
                                                            class="form-control @error('telp') is-invalid @enderror"
                                                            name="telp"
                                                            value="{{ $kd03->telp ?? 'Data Belum Lengkap!' }}"
                                                            style="{{ $kd03->telp == null ? 'color:red' : '' }}"
                                                            disabled />
                                                        @error('telp')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row mt-2">
                                                    <div class="col-sm-2 mr-3">
                                                        <label type="text" name="" id=""
                                                            class="form-label">Mobile</label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input id="mobile" type="text"
                                                            class="form-control @error('mobile') is-invalid @enderror"
                                                            name="mobile" value="{{ $kd03->mobile ?? '-' }}" disabled />
                                                        @error('mobile')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row mt-2">
                                                    <div class="col-sm-2 mr-3">
                                                        <label type="text" name="" id=""
                                                            class="form-label">PO
                                                            BOX</label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input id="po_box" type="text"
                                                            class="form-control @error('po_box') is-invalid @enderror"
                                                            name="po_box" value="{{ $kd03->po_box ?? '-' }}" disabled />
                                                        @error('po_box')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row mt-2">
                                                    <div class="col-sm-2 mr-3">
                                                        <label type="text" name="" id=""
                                                            class="form-label">NPWP</label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input id="npwp" type="text"
                                                            class="form-control @error('npwp') is-invalid @enderror"
                                                            name="npwp"
                                                            value="{{ $kd03->npwp ?? 'Data Belum Lengkap!' }}"
                                                            style="{{ $kd03->npwp == null ? 'color:red' : '' }}"
                                                            disabled />
                                                        @error('npwp')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row mt-2">
                                                    <div class="col-sm-2 mr-3">
                                                        <label type="text" name="" id=""
                                                            class="form-label">NPWP Image</label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <a href="{{ URL::to($kd03->npwp_image) }}" class="">
                                                            <img src="{{ URL::to($kd03->npwp_image) }}" alt=""
                                                                style="height: 100px; weight: 100px;"
                                                                class="rounded mx-auto d-block"></a>
                                                        @error('npwp')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row mt-2">
                                                    <div class="col-sm-2 mr-3">
                                                        <label type="text" name="" id=""
                                                            class="form-label">KTP Image</label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <a href="{{ URL::to($kd03->ktp_image) }}" class="">
                                                            <img src="{{ URL::to($kd03->ktp_image) }}" alt=""
                                                                style="height: 100px; weight: 100px;"
                                                                class="rounded mx-auto d-block"></a>
                                                        @error('npwp')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <hr class="mt-2">
                <div class="row">
                    <div class="d-flex justify-content-around">
                        <div class="col-sm-12">
                            <div class="row">
                                <h6 class="mb-4">KD04</h6>
                                <div class="table-responsive mt-0">

                                    <table class="table table-striped table-sm" id="dt-init">
                                        <thead>
                                            <tr>
                                                <th scope="col">Cust No</th>
                                                <th scope="col">Credit Cust</th>
                                                <th scope="col">Credit Limit</th>
                                                {{-- <th scope="col">SD</th>
                                                <th scope="col">SG</th> --}}
                                                <th scope="col">Block Delivery</th>
                                                <th scope="col">Block Reason</th>
                                                <th scope="col">Credit Line Check</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($kd04 as $form)
                                                <tr>
                                                    <td>{{ $form->kd4no_cust }}</td>
                                                    <td>{{ $form->credit_cust }}</td>
                                                    <td>{{ $form->credit_limit }}</td>
                                                    {{-- <td>{{ $form->sd }}</td>
                                                    <td>{{ $form->kd6sg }}</td> --}}
                                                    <td>{{ $form->block_delivery }}</td>
                                                    <td>{{ $form->block_reason }}</td>
                                                    <td>{{ $form->credit_line_check }}</td>
                                                    <td>
                                                        <button type="button" class="btn btn-info" data-toggle="modal"
                                                            data-target=".kd04"><i class="fa fa-eye"
                                                                aria-hidden="true"></i>
                                                            Show KD04</button>
                                                        </button>
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
                <div class="modal fade kd04 " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="card">
                                <div class="card-header">
                                    KD04
                                </div>
                                <div class="card-body">
                                    @foreach ($kd04 as $kd04)
                                        <hr>
                                        <div class="col-sm-6">
                                            <div class="d-flex flex-row my-2">
                                                <div class="col-sm-5">
                                                    <label type="text" name="" id=""
                                                        class="form-label text-center">No Cust</label>
                                                </div>

                                            </div>
                                            <div class="d-flex flex-row my-2">
                                                <div class="col-sm-5">
                                                    <input id="no_cust" type="text"
                                                        class="form-control @error('no_cust') is-invalid @enderror"
                                                        name="no_cust" value="{{ $kd04->kd4no_cust }}"
                                                        style="{{ $kd04->kd4no_cust == null ? 'color:red' : '' }}"
                                                        disabled />
                                                    @error('no_cust')
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
                                                    <label type="text" name="" id=""
                                                        class="form-label">No
                                                        Debitor</label>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input id="no_debitor" type="text"
                                                        class="form-control @error('no_debitor') is-invalid @enderror"
                                                        name="no_debitor" value="{{ $kd04->no_debitor ?? '-' }}"
                                                        disabled />
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
                                                    <label type="text" name="" id=""
                                                        class="form-label">No
                                                        Creditor</label>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input id="no_creditor" type="text"
                                                        class="form-control @error('no_creditor') is-invalid @enderror"
                                                        name="no_creditor" value="{{ $kd04->no_creditor ?? '-' }}"
                                                        disabled />
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
                                                    <label type="text" name="" id=""
                                                        class="form-label">No Group
                                                        Cust</label>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input id="no_group_cust" type="text"
                                                        class="form-control @error('no_group_cust') is-invalid @enderror"
                                                        name="no_group_cust" value="{{ $kd04->no_group_cust ?? '-' }}"
                                                        disabled />
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
                                                    <label type="text" name="" id=""
                                                        class="form-label">Credit
                                                        Cust</label>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input id="credit_cust" type="text"
                                                        class="form-control @error('credit_cust') is-invalid @enderror"
                                                        name="credit_cust" value="{{ $kd04->credit_cust ?? '-' }}"
                                                        disabled />
                                                    @error('credit_cust')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-around my-3">
                                            <div class="col-sm-4">
                                                <div class="d-flex flex-row mt-2">
                                                    <div class="col-sm-3 mr-5">
                                                        <label type="text" name="" id=""
                                                            class="form-label" style="font-size: 13px">Credit
                                                            Limit</label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input id="credit_limit" type="text"
                                                            class="form-control @error('credit_limit') is-invalid @enderror"
                                                            name="credit_limit" value="{{ $kd04->credit_limit ?? '-' }}"
                                                            disabled />
                                                        @error('credit_limit')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="d-flex flex-row mt-2">
                                                    <div class="col-sm-3 mr-3">
                                                        <label type="text" name="" id=""
                                                            class="form-label" style="font-size: 13px">Credit
                                                            Period From</label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input id="credit_from" type="text"
                                                            class="form-control @error('credit_from') is-invalid @enderror"
                                                            name="credit_from" value="{{ $kd04->credit_from ?? '-' }}"
                                                            disabled />
                                                        @error('credit_from')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="d-flex flex-row mt-2">
                                                    <div class="col-sm-3 mr-3">
                                                        <label type="text" name="" id=""
                                                            class="form-label" style="font-size: 13px">Credit
                                                            Period To</label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input id="credit_to" type="text"
                                                            class="form-control @error('credit_to') is-invalid @enderror"
                                                            name="credit_to" value="{{ $kd04->credit_to ?? '-' }}"
                                                            disabled />
                                                        @error('credit_to')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="d-flex flex-row mt-2">
                                                <div class="col-sm-3 mr-2">
                                                    <label type="text" name="" id=""
                                                        class="form-label" style="font-size: 12px">Credit
                                                        Line
                                                        Check</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input id="credit_line_check" type="text"
                                                        class="form-control @error('credit_line_check') is-invalid @enderror"
                                                        name="credit_line_check"
                                                        value="{{ $kd04->credit_line_check ?? '-' }}" disabled />
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
                                                <div class="col-sm-2 mr-4">
                                                    <label type="text" name="" id=""
                                                        class="form-label" style="font-size: 12px">Block
                                                        Delivery</label>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input id="block_delivery" type="text"
                                                        class="form-control @error('block_delivery') is-invalid @enderror"
                                                        name="block_delivery" value="{{ $kd04->block_delivery ?? '-' }}"
                                                        disabled />
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
                                                <div class="col-sm-2 mr-4">
                                                    <label type="text" name="" id=""
                                                        class="form-label" style="font-size: 12px">Block
                                                        Reason</label>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input id="block_reason" type="text"
                                                        class="form-control @error('block_reason') is-invalid @enderror"
                                                        name="block_reason" value="{{ $kd04->block_reason ?? '-' }}"
                                                        disabled />
                                                    @error('block_reason')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="mt-2">
                <div class="row">
                    <div class="d-flex justify-content-around">
                        <div class="col-sm-12">
                            <div class="row">
                                <h6 class="mb-4">KD05</h6>
                                <div class="table-responsive mt-0">

                                    <table class="table table-striped table-sm" id="dt-init3">
                                        <thead>
                                            <tr>
                                                <th scope="col">Cust No</th>
                                                <th scope="col">Address Code</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Street</th>
                                                <th scope="col">Cocd</th>
                                                <th scope="col">Cty</th>
                                                {{-- <th scope="col">SD</th>
                                                <th scope="col">SG</th> --}}
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($kd05 as $form)
                                                <tr>
                                                    <td>{{ $form->no_cust1 }}</td>
                                                    <td>{{ $form->addresscode1 }}</td>
                                                    <td>{{ $form->nama11 }}</td>
                                                    <td>{{ $form->street1 }}</td>
                                                    <td>{{ $form->kd5negara1 }}</td>
                                                    <td>{{ $form->kota1 }}</td>
                                                    {{-- <td>{{ $form->sd }}</td>
                                                    <td>{{ $form->kd6sg }}</td> --}}
                                                    <td>

                                                        <button type="button" class="btn btn-info" data-toggle="modal"
                                                            data-target=".kd05"><i class="fa fa-eye"
                                                                aria-hidden="true"></i>
                                                            Show KD05</button>
                                                        </button>

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
                <div class="modal fade kd05" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="card">
                                <div class="card-header">
                                    KD05
                                </div>
                                <div class="card-body">
                                    @foreach ($kd05 as $kd05)
                                        <div class="row">
                                            <div class="d-flex justify-content-start">
                                                <div class="row">
                                                    <hr>
                                                    <h6 class="text-left mt-3">KD05 Additional Address</h6>
                                                    <hr>
                                                    <div class="col-sm-6">
                                                        <div class="d-flex flex-row my-2">
                                                            <div class="col-sm-5">
                                                                <label type="text" name="" id=""
                                                                    class="form-label text-center">No
                                                                    Cust</label>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <label type="text" name="" id=""
                                                                    class="form-label text-center">Kode
                                                                    Cust</label>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-row my-2">
                                                            <div class="col-sm-5">
                                                                <input id="no_cust1" type="text"
                                                                    class="form-control @error('no_cust1') is-invalid @enderror"
                                                                    name="no_cust1" value="{{ $kd05->no_cust1 }}"
                                                                    style="{{ $kd05->no_cust1 == null ? 'color:red' : '' }}"
                                                                    disabled />
                                                                @error('no_cust1')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <input id="kode_cust" type="text"
                                                                    class="form-control @error('kode_cust') is-invalid @enderror"
                                                                    name="kode_cust"
                                                                    value="{{ $kd05->addresscode1 ?? '-' }}" disabled />
                                                                @error('kode_cust')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-row">
                                                            <div class="col-sm-3">
                                                                <label type="text" name="" id=""
                                                                    class="form-label">Title</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $kd05->title1 ?? '-' }}" disabled>
                                                                @error('title1')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-row mt-2">
                                                            <div class="col-sm-3">
                                                                <label type="text" name="" id=""
                                                                    class="form-label">Nama</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input id="nama" type="text"
                                                                    class="form-control @error('nama') is-invalid @enderror"
                                                                    name="nama" value="{{ $kd05->nama11 ?? '-' }}"
                                                                    disabled />
                                                                @error('nama')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-row mt-2">
                                                            <div class="col-sm-3">
                                                                <label type="text" name="" id=""
                                                                    class="form-label">Nama 2</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input id="nama" type="text"
                                                                    class="form-control @error('nama') is-invalid @enderror"
                                                                    name="nama" value="{{ $kd05->nama21 ?? '-' }}"
                                                                    disabled />
                                                                @error('nama')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-row mt-2">
                                                            <div class="col-sm-3">
                                                                <label type="text" name="" id=""
                                                                    class="form-label">Alamat</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input id="kode_cust" type="text"
                                                                    class="form-control @error('kode_cust') is-invalid @enderror"
                                                                    name="kode_cust" value="{{ $kd05->street1 ?? '-' }}"
                                                                    disabled />
                                                                @error('alamat')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-row mt-2">
                                                            <div class="col-sm-3">
                                                                <label type="text" name="" id=""
                                                                    class="form-label" style="font-size: 12px">Additional
                                                                    Address</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input id="addit1" type="text"
                                                                    class="form-control @error('addit1') is-invalid @enderror"
                                                                    name="addit1" value="{{ $kd05->addit1 ?? '-' }}"
                                                                    disabled />
                                                                @error('alamat')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-row mt-2">
                                                            <div class="col-sm-3">
                                                                <label type="text" name="" id=""
                                                                    class="form-label">Country</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input id="kode_cust" type="text"
                                                                    class="form-control @error('kode_cust') is-invalid @enderror"
                                                                    name="kode_cust"
                                                                    value="{{ $kd05->kd5negara1 ?? '-' }}" disabled />
                                                                @error('kd5negara1')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-row mt-2">
                                                            <div class="col-sm-3">
                                                                <label type="text" name="" id=""
                                                                    class="form-label"
                                                                    style="font-size: 15px">Freight</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input id="kode_cust" type="text"
                                                                    class="form-control @error('kode_cust') is-invalid @enderror"
                                                                    name="kode_cust"
                                                                    value="{{ $kd05->kode_county1 ?? '-' }}" disabled />
                                                                @error('kode_country')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-row mt-2">
                                                            <div class="col-sm-3">
                                                                <label type="text" name="" id=""
                                                                    class="form-label">Kota</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input id="kota" type="text"
                                                                    class="form-control @error('kota') is-invalid @enderror"
                                                                    name="kota" value="{{ $kd05->kota1 ?? '-' }}"
                                                                    disabled />
                                                                @error('kota')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="d-flex flex-row">
                                                            <div class="col-sm-2 mr-3">
                                                                <label type="text" name="" id=""
                                                                    class="form-label"></label>
                                                            </div>
                                                            <div class="col-sm-6">

                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-row">
                                                            <div class="col-sm-2 mr-3">
                                                                <label type="text" name="" id=""
                                                                    class="form-label"></label>
                                                            </div>
                                                            <div class="col-sm-6">

                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-row">
                                                            <div class="col-sm-2 mr-3">
                                                                <label type="text" name="" id=""
                                                                    class="form-label"></label>
                                                            </div>
                                                            <div class="col-sm-6">

                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-row mt-4">
                                                            <div class="col-sm-2 mr-3">
                                                                <label type="text" name="" id=""
                                                                    class="form-label" style="font-size: 12px">Postal
                                                                    Code</label>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <input id="postal_code1" type="postal_code1"
                                                                    class="form-control @error('postal_code1') is-invalid @enderror"
                                                                    name="postal_code1"
                                                                    value="{{ $kd05->postal_code1 ?? '-' }}" disabled />
                                                                @error('postal_code1')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-row mt-2">
                                                            <div class="col-sm-2 mr-3">
                                                                <label type="text" name="" id=""
                                                                    class="form-label">Email</label>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <input id="email" type="email"
                                                                    class="form-control @error('email') is-invalid @enderror"
                                                                    name="email" value="{{ $kd05->email1 ?? '-' }}"
                                                                    disabled />
                                                                @error('email')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-row mt-2">
                                                            <div class="col-sm-2 mr-3">
                                                                <label type="text" name="" id=""
                                                                    class="form-label">Fax</label>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <input id="fax1" type="text"
                                                                    class="form-control @error('fax1') is-invalid @enderror"
                                                                    name="fax1" value="{{ $kd05->fax1 ?? '-' }}"
                                                                    disabled />
                                                                @error('fax1')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-row mt-2">
                                                            <div class="col-sm-2 mr-3">
                                                                <label type="text" name="" id=""
                                                                    class="form-label">Telp</label>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <input id="telp1" type="text"
                                                                    class="form-control @error('telp1') is-invalid @enderror"
                                                                    name="telp1" value="{{ $kd05->telp1 ?? '-' }}"
                                                                    disabled />
                                                                @error('telp1')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-row mt-2">
                                                            <div class="col-sm-2 mr-3">
                                                                <label type="text" name="" id=""
                                                                    class="form-label">Mobile</label>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <input id="mobile1" type="text"
                                                                    class="form-control @error('mobile1') is-invalid @enderror"
                                                                    name="mobile1" value="{{ $kd05->mobile1 ?? '-' }}"
                                                                    disabled />
                                                                @error('mobile1')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-row mt-2">
                                                            <div class="col-sm-2 mr-3">
                                                                <label type="text" name="" id=""
                                                                    class="form-label">PO BOX</label>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <input id="po_box1" type="text"
                                                                    class="form-control @error('po_box1') is-invalid @enderror"
                                                                    name="po_box1" value="{{ $kd05->po_box1 ?? '-' }}"
                                                                    disabled />
                                                                @error('po_box1')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-row mt-2">
                                                            <div class="col-sm-2 mr-3">
                                                                <label type="text" name="" id=""
                                                                    class="form-label">NPWP</label>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <input id="npwp1" type="text"
                                                                    class="form-control @error('npwp1') is-invalid @enderror"
                                                                    name="npwp1" value="{{ $kd05->npwp1 ?? '-' }}"
                                                                    disabled />
                                                                @error('npwp1')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-row mt-2">
                                                            <div class="col-sm-2 mr-3">
                                                                <label type="text" name="" id=""
                                                                    class="form-label">NPWP Image</label>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <a href="{{ URL::to($kd05->npwp_image) }}"
                                                                    class="">
                                                                    <img src="{{ URL::to($kd05->npwp_image) }}"
                                                                        alt=""
                                                                        style="height: 100px; weight: 100px;"
                                                                        class="rounded mx-auto d-block"></a>
                                                                @error('npwp1')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-row mt-2">
                                                            <div class="col-sm-2 mr-3">
                                                                <label type="text" name="" id=""
                                                                    class="form-label">KTP Image</label>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <a href="{{ URL::to($kd05->ktp_image) }}"
                                                                    class="">
                                                                    <img src="{{ URL::to($kd05->ktp_image) }}"
                                                                        alt=""
                                                                        style="height: 100px; weight: 100px;"
                                                                        class="rounded mx-auto d-block"></a>
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
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <hr class="mt-2">
                <div class="row">
                    <div class="d-flex justify-content-around">
                        <div class="col-sm-12">
                            <div class="row">
                                <h6 class="mb-4">KD06</h6>
                                <div class="table-responsive mt-0">

                                    <table class="table table-striped table-sm" id="dt-init4">
                                        <thead>
                                            <tr>
                                                <th scope="col">Cust No</th>
                                                <th scope="col">SD</th>
                                                <th scope="col">SG</th>
                                                {{-- <th scope="col">SD</th>
                                                <th scope="col">SG</th> --}}
                                                {{-- <th scope="col">Status</th> --}}
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($kd06 as $form)
                                                <tr>
                                                    <td>{{ $form->kd6no_cust }}</td>
                                                    <td>{{ $form->sd }}</td>
                                                    <td>{{ $form->kd6sg }}</td>
                                                    {{-- <td>{{ $form->sd }}</td>
                                                    <td>{{ $form->kd6sg }}</td> --}}
                                                    {{-- <td>{{ $form->status_form }}</td> --}}
                                                    <td>
                                                        <button type="button" class="btn btn-info" data-toggle="modal"
                                                            data-target=".kd06"><i class="fa fa-eye"
                                                                aria-hidden="true"></i>
                                                            Show KD06</button>
                                                        </button>
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
                <div class="modal fade kd06" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="card">
                                <div class="card-header">
                                    KD06
                                </div>
                                <div class="card-body">
                                    @foreach ($kd06 as $kd06)
                                        <hr class="mt-2">
                                        {{-- KD06 --}}
                                        <h6 class="text-left mt-2">KD06 Conditions</h6>
                                        <hr>
                                        <div class="d-flex justify-content-between">
                                            <div class="col-sm-3">
                                                <div class="d-flex flex-row mt-2">
                                                    <div class="col-sm-4">
                                                        <label type="text" name="" id=""
                                                            class="form-label">No
                                                            Cust</label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input id="npwp" type="text"
                                                            class="form-control @error('npwp') is-invalid @enderror"
                                                            name="npwp"
                                                            value="{{ $kd06->kd6no_cust ?? 'Data Belum Lengkap!' }}"
                                                            style="{{ $kd06->kd6no_cust == null ? 'color:red' : '' }}"
                                                            disabled />
                                                        @error('sd')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="d-flex flex-row mt-2">
                                                    <div class="col-sm-4">
                                                        <label type="text" name="" id=""
                                                            class="form-label">SD</label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input id="npwp" type="text"
                                                            class="form-control @error('npwp') is-invalid @enderror"
                                                            name="npwp"
                                                            value="{{ $kd06->sd ?? 'Data Belum Lengkap!' }}"
                                                            style="{{ $kd06->sd == null ? 'color:red' : '' }}"
                                                            disabled />
                                                        @error('sd')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="d-flex flex-row mt-2">
                                                    <div class="col-sm-4">
                                                        <label type="text" name="" id=""
                                                            class="form-label">SG</label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input id="npwp" type="text"
                                                            class="form-control @error('npwp') is-invalid @enderror"
                                                            name="npwp"
                                                            value="{{ $kd06->kd6sg ?? 'Data Belum Lengkap!' }}"
                                                            style="{{ $kd06->kd6sg == null ? 'color:red' : '' }}"
                                                            disabled />
                                                        @error('sd')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="d-flex flex-row mt-2">
                                                    <div class="col-sm-2 mr-3">
                                                        <label type="text" name="" id=""
                                                            class="form-label">Sales</label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input id="sales" type="text"
                                                            class="form-control @error('sales') is-invalid @enderror"
                                                            name="sales"
                                                            value="{{ $kd06->sales ?? 'Data Belum Lengkap!' }}"
                                                            style="{{ $kd06->sales == null ? 'color:red' : '' }}"
                                                            disabled />
                                                        @error('sales')
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
                                                    <label type="text" name="" id=""
                                                        class="form-label">Payterm</label>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input id="npwp" type="text"
                                                        class="form-control @error('npwp') is-invalid @enderror"
                                                        name="npwp"
                                                        value="{{ $kd06->payterm ?? 'Data Belum Lengkap!' }}"
                                                        style="{{ $kd06->payterm == null ? 'color:red' : '' }}"
                                                        disabled />
                                                    @error('sd')
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
                                                    <label type="text" name="" id=""
                                                        class="form-label">Assignment</label>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input id="npwp" type="text"
                                                        class="form-control @error('npwp') is-invalid @enderror"
                                                        name="npwp"
                                                        value="{{ $kd06->assigment ?? 'Data Belum Lengkap!' }}"
                                                        style="{{ $kd06->assigment == null ? 'color:red' : '' }}"
                                                        disabled />
                                                    @error('sd')
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
                                                    <label type="text" name="" id=""
                                                        class="form-label">Tax</label>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input id="npwp" type="text"
                                                        class="form-control @error('npwp') is-invalid @enderror"
                                                        name="npwp"
                                                        value="{{ $kd06->kd6tax ?? 'Data Belum Lengkap!' }}"
                                                        style="{{ $kd06->kd6tax == null ? 'color:red' : '' }}"
                                                        disabled />
                                                    @error('sd')
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
                                                    <label type="text" name="" id=""
                                                        class="form-label">Del Term</label>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input id="npwp" type="text"
                                                        class="form-control @error('npwp') is-invalid @enderror"
                                                        name="npwp"
                                                        value="{{ $kd06->del_con ?? 'Data Belum Lengkap!' }}"
                                                        style="{{ $kd06->del_con == null ? 'color:red' : '' }}"
                                                        disabled />
                                                    @error('sd')
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
                                                    <label type="text" name="" id=""
                                                        class="form-label">Kurs</label>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input id="npwp" type="text"
                                                        class="form-control @error('npwp') is-invalid @enderror"
                                                        name="npwp"
                                                        value="{{ $kd06->kurs ?? 'Data Belum Lengkap!' }}"
                                                        style="{{ $kd06->kurs == null ? 'color:red' : '' }}" disabled />
                                                    @error('sd')
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
                                                    <label type="text" name="" id=""
                                                        class="form-label">Satuan</label>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input id="npwp" type="text"
                                                        class="form-control @error('npwp') is-invalid @enderror"
                                                        name="npwp"
                                                        value="{{ $kd06->satuan ?? 'Data Belum Lengkap!' }}"
                                                        style="{{ $kd06->satuan == null ? 'color:red' : '' }}"
                                                        disabled />
                                                    @error('sd')
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
                                                    <label type="text" name="" id=""
                                                        class="form-label" style="font-size: 10px">Type Bisnis</label>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input id="npwp" type="text"
                                                        class="form-control @error('npwp') is-invalid @enderror"
                                                        name="npwp"
                                                        value="{{ $kd06->biz_type_p1 ?? 'Data Belum Lengkap!' }}"
                                                        style="{{ $kd06->biz_type_p1 == null ? 'color:red' : '' }}"
                                                        disabled />
                                                    @error('SD')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-8 my-2 text-center">
                                            <div class="d-flex flex-row">
                                                <div class="col-sm-2 mr-3">
                                                    <label type="text" name="" id=""
                                                        class="form-label"></label>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label type="text" name="" id=""
                                                        class="form-label"></label>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label type="text " name="" id=""
                                                        class="form-label text-center">Staff
                                                        Member</label>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label type="text " name="" id=""
                                                        class="form-label text-center">From</label>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label type="text " name="" id=""
                                                        class="form-label text-center">To</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="d-flex flex-row">
                                                <div class="col-sm-2 mr-3">
                                                    <label type="text" name="" id=""
                                                        class="form-label">Nama
                                                        Agent</label>
                                                </div>
                                                <div class="col-sm-4">
                                                    <input id="npwp" type="text"
                                                        class="form-control @error('npwp') is-invalid @enderror"
                                                        name="npwp" value="{{ $kd06->nama_agent1 ?? '-' }}"
                                                        disabled />
                                                    @error('nama_agent1')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="col-sm-4">
                                                    <input id="npwp" type="text"
                                                        class="form-control @error('npwp') is-invalid @enderror"
                                                        name="npwp" value="{{ $kd06->staff_member ?? '-' }}"
                                                        disabled />
                                                    @error('staff_member')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="col-sm-3">
                                                    <input id="npwp" type="text"
                                                        class="form-control @error('npwp') is-invalid @enderror"
                                                        name="npwp" value="{{ $kd06->from ?? '-' }}" disabled />
                                                    @error('from')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="col-sm-3">
                                                    <input id="npwp" type="text"
                                                        class="form-control @error('npwp') is-invalid @enderror"
                                                        name="npwp" value="{{ $kd06->to ?? '-' }}" disabled />
                                                    @error('to')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-8 my-2">
                                            <div class="d-flex flex-row text-center">
                                                <div class="col-sm-2 mr-3">
                                                    <label type="text" name="" id=""
                                                        class="form-label"></label>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label type="text" name="" id=""
                                                        class="form-label"></label>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label type="text" name="" id=""
                                                        class="form-label">%-Com</label>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label type="text " name="" id=""
                                                        class="form-label text-center">Percent</label>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label type="text " name="" id=""
                                                        class="form-label text-center">Print</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="d-flex flex-row">
                                                <div class="col-sm-2 mr-3">
                                                    <label type="text" name="" id=""
                                                        class="form-label"></label>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label type="text" name="" id=""
                                                        class="form-label"></label>
                                                </div>
                                                <div class="col-sm-3">
                                                    <input id="npwp" type="text"
                                                        class="form-control @error('npwp') is-invalid @enderror"
                                                        name="npwp" value="{{ $kd06->allowance_qty ?? '-' }}"
                                                        disabled />
                                                    @error('allowance_qty')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="col-sm-4">
                                                    <input id="npwp" type="text"
                                                        class="form-control @error('npwp') is-invalid @enderror"
                                                        name="npwp" value="{{ $kd06->pc ?? '-' }}" disabled />
                                                    @error('pc')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="col-sm-3">
                                                    <input id="npwp" type="text"
                                                        class="form-control @error('npwp') is-invalid @enderror"
                                                        name="npwp" value="{{ $kd06->print ?? '-' }}" disabled />
                                                    @error('print')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
            <hr class="mt-2">
            <div class="row">
                <div class="d-flex justify-content-around">
                    <div class="col-sm-12">
                        <div class="row">
                            <h6 class="mb-4">KD11</h6>
                            <div class="table-responsive mt-0">

                                <table class="table table-striped table-sm" id="dt-init5">
                                    <thead>
                                        <tr>
                                            <th scope="col">Cust No</th>
                                            <th scope="col">SD</th>
                                            <th scope="col">SG</th>
                                            <th scope="col">Assoc</th>
                                            {{-- <th scope="col">SD</th>
                                            <th scope="col">SG</th> --}}
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kd11 as $form)
                                            <tr>
                                                <td>{{ $form->kd11no_cust }}</td>
                                                <td>{{ $form->sd1 }}</td>
                                                <td>{{ $form->sg1 }}</td>
                                                <td>{{ $form->association_no1 }}</td>
                                                {{-- <td>{{ $form->sd }}</td>
                                                <td>{{ $form->kd6sg }}</td> --}}
                                                <td>

                                                    <button type="button" class="btn btn-info" data-toggle="modal"
                                                        data-target=".kd11"><i class="fa fa-eye"
                                                            aria-hidden="true"></i>
                                                        Show KD11</button>
                                                    </button>

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
            <div class="modal fade kd11" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="card">
                            <div class="card-header">
                                KD11
                            </div>
                            <div class="card-body">
                                @foreach ($kd11 as $kd11)
                                    <hr class="mt-2">
                                    <h6>KD11 Association</h6>
                                    <hr class="my-2">
                                    <div class="col-sm-6">
                                        <div class="d-flex flex-row mt-2">
                                            <div class="col-sm-2 mr-5">
                                                <label type="text" name="" id=""
                                                    class="form-label" style="font-size: 15px">No
                                                    Cust</label>
                                            </div>
                                            <div class="col-sm-3">
                                                <input id="association1" type="text"
                                                    class="form-control @error('association1') is-invalid @enderror"
                                                    name="association1"
                                                    value="{{ $kd11->kd11no_cust ?? 'Data Belum Lengkap!' }}"
                                                    style="{{ $kd11->kd11no_cust == null ? 'color:red' : '' }}"
                                                    disabled />
                                                @error('association1')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-around my-3">
                                        <div class="col-sm-6">
                                            <div class="d-flex flex-row mt-2">
                                                <div class="col-sm-2 mr-5">
                                                    <label type="text" name="" id=""
                                                        class="form-label" style="font-size: 13px">SD</label>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input id="sales" type="text"
                                                        class="form-control @error('sales') is-invalid @enderror"
                                                        name="sales" value="{{ $kd11->sd1 ?? '-' }}"
                                                        style="{{ $kd11->sd1 == null ? 'color:black' : '' }}"
                                                        disabled />
                                                    @error('sales')
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
                                                    <label type="text" name="" id=""
                                                        class="form-label">SG</label>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input id="sales" type="text"
                                                        class="form-control @error('sales') is-invalid @enderror"
                                                        name="sales" value="{{ $kd11->sg1 ?? '-' }}"
                                                        style="{{ $kd11->sg1 == null ? 'color:black' : '' }}"
                                                        disabled />
                                                    @error('sales')
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
                                                <label type="text" name="" id=""
                                                    class="form-label" style="font-size: 15px">Association/KD11</label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input id="association1" type="text"
                                                    class="form-control @error('association1') is-invalid @enderror"
                                                    name="association1" value="{{ $kd11->association_no1 ?? '-' }}"
                                                    style="{{ $kd11->association_no1 == null ? 'color:black' : '' }}"
                                                    disabled />
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
                                                <label type="text" name="" id=""
                                                    class="form-label">Central
                                                    Regu</label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input id="sales" type="text"
                                                    class="form-control @error('sales') is-invalid @enderror"
                                                    name="sales" value="{{ $kd11->central_regu1 ?? '-' }}"
                                                    style="{{ $kd11->central_regu1 == null ? 'color:black' : '' }}"
                                                    disabled />
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
                                                <label type="text" name="" id=""
                                                    class="form-label">Conditions</label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input id="sales" type="text"
                                                    class="form-control @error('sales') is-invalid @enderror"
                                                    name="sales" value="{{ $kd11->conditions1 ?? '-' }}"
                                                    style="{{ $kd11->conditions1 == null ? 'color:black' : '' }}"
                                                    disabled />
                                                @error('sales')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="mt-2">
            <div class="row">
                <div class="d-flex justify-content-around">
                    <div class="col-sm-12">
                        <div class="row">
                            <h6 class="mb-4">KD14</h6>
                            <div class="table-responsive mt-0">

                                <table class="table table-striped table-sm" id="dt-init6">
                                    <thead>
                                        <tr>
                                            <th scope="col">Cust No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Mobile</th>
                                            <th scope="col">Email</th>
                                            {{-- <th scope="col">SD</th>
                                            <th scope="col">SG</th> --}}
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kd14 as $form)
                                            <tr>
                                                <td>{{ $form->kd14no_cust }}</td>
                                                <td>{{ $form->nama_cp1 }}</td>
                                                <td>{{ $form->phone_cp1 }}</td>
                                                <td>{{ $form->mobile_cp1 }}</td>
                                                <td>{{ $form->email_cp1 }}</td>
                                                {{-- <td>{{ $form->sd }}</td>
                                                <td>{{ $form->kd6sg }}</td> --}}
                                                <td>

                                                    <button type="button" class="btn btn-info" data-toggle="modal"
                                                        data-target=".kd14"><i class="fa fa-eye"
                                                            aria-hidden="true"></i>
                                                        Show KD14</button>
                                                    </button>

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
            <div class="modal fade kd14" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="card">
                            <div class="card-header">
                                KD14
                            </div>
                            <div class="card-body">
                                @foreach ($kd14 as $kd14)
                                    <hr>
                                    <div class="col-sm-12">
                                        <div class="d-flex justify-content-between">
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="d-flex flex-row">
                                                            <div class="col-sm-4">
                                                                <label type="text" name="" id=""
                                                                    class="form-label">No. Cust</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $kd14->kd14no_cust ?? 'Data Belum Lengkap!' }}"
                                                                    style="{{ $kd14->kd14no_cust == null ? 'color:red' : '' }}"
                                                                    disabled>
                                                                @error('title1')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-row mt-2">
                                                            <div class="col-sm-4">
                                                                <label type="text" name="" id=""
                                                                    class="form-label">Nama</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $kd14->nama_cp1 ?? 'Data Belum Lengkap!' }}"
                                                                    style="{{ $kd14->nama_cp1 == null ? 'color:red' : '' }}"
                                                                    disabled>
                                                                @error('title1')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-row mt-2">
                                                            <div class="col-sm-4">
                                                                <label type="text" name="" id=""
                                                                    class="form-label">Function</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $kd14->function_cp1 ?? 'Data Belum Lengkap!' }}"
                                                                    style="{{ $kd14->function_cp1 == null ? 'color:red' : '' }}"
                                                                    disabled>
                                                                @error('title1')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-row mt-2">
                                                            <div class="col-sm-4">
                                                                <label type="text" name="" id=""
                                                                    class="form-label">Mobile</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $kd14->mobile_cp1 ?? 'Data Belum Lengkap!' }}"
                                                                    style="{{ $kd14->mobile_cp1 == null ? 'color:red' : '' }}"
                                                                    disabled>
                                                                @error('title1')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-row mt-2">
                                                            <div class="col-sm-4">
                                                                <label type="text" name="" id=""
                                                                    class="form-label">SD</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $kd14->sd_cp1 ?? '-' }}" disabled>
                                                                @error('title1')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="d-flex flex-row">
                                                            <div class="col-sm-4">
                                                                <label type="text" name="" id=""
                                                                    class="form-label">CP Code</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $kd14->cp1 ?? 'Data Belum Lengkap!' }}"
                                                                    style="{{ $kd14->email_cp1 == null ? 'color:red' : '' }}"
                                                                    disabled>
                                                                @error('title1')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-row mt-2">
                                                            <div class="col-sm-4">
                                                                <label type="text" name="" id=""
                                                                    class="form-label">Email</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $kd14->email_cp1 ?? 'Data Belum Lengkap!' }}"
                                                                    style="{{ $kd14->email_cp1 == null ? 'color:red' : '' }}"
                                                                    disabled>
                                                                @error('title1')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-row mt-2">
                                                            <div class="col-sm-4">
                                                                <label type="text" name="" id=""
                                                                    class="form-label">Since</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $kd14->sinc_cp1 ?? 'Data Belum Lengkap!' }}"
                                                                    style="{{ $kd14->sinc_cp1 == null ? 'color:red' : '' }}"
                                                                    disabled>
                                                                @error('title1')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-row mt-2">
                                                            <div class="col-sm-4">
                                                                <label type="text" name="" id=""
                                                                    class="form-label">Phone</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $kd14->phone_cp1 ?? 'Data Belum Lengkap!' }}"
                                                                    style="{{ $kd14->phone_cp1 == null ? 'color:red' : '' }}"
                                                                    disabled>
                                                                @error('title1')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-row mt-2">
                                                            <div class="col-sm-4">
                                                                <label type="text" name="" id=""
                                                                    class="form-label">SG</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $kd14->sg_cp1 ?? '-' }}" disabled>
                                                                @error('title1')
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
                                    <div class="col-sm-12">
                                        <div class="d-flex flex-row mt-2">
                                            <div class="col-sm-2 mr-2">
                                                <label type="text" name="" id=""
                                                    class="form-label">Add Address</label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input id="sales" type="text"
                                                    class="form-control @error('sales') is-invalid @enderror"
                                                    name="sales" value="{{ $kd14->add_addr_cp1 ?? '-' }}"
                                                    disabled />
                                                @error('sales')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>





        @if (auth()->user()->division == 'FABRIC SALES' &&
            auth()->user()->position_job_name == 'FABRIC SALES EXECUTIVE' &&
            $kd03->status_form == '')
            <input type="hidden" name="status_form" value="created">
            <input type="hidden" name="created_by" value="{{ $kd03->employee_name }}">
            {{-- <div class="d-flex flex-row my-3">
                <div class="col-sm-2">
                    <label type="text" name="" id="" class="form-label text-center">Reject
                        Reason</label>
                </div>
                <div class="col-sm-5">
                    <input id="reject_reason" type="text"
                        class="form-control @error('reject_reason') is-invalid @enderror" name="reject_reason"
                        value="{{ $kd03->reject_reason != '' ? $kd03->reject_reason : '' }}" />
                    @error('reject_reason')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div> --}}
        @elseif ($kd03->status_form == 'rejected' &&
            auth()->user()->division == 'FABRIC SALES' &&
            auth()->user()->position_job_name == 'FABRIC SALES EXECUTIVE')
            <input type="hidden" name="status_form" value="created">
            <input type="hidden" name="created_by" value="{{ auth()->user()->employee_name }}">
            <div class="d-flex flex-row my-3">
                <div class="col-sm-2">
                    <label type="text" name="" id="" class="form-label text-center">Reject
                        Reason</label>
                </div>
                <div class="col-sm-5">
                    {{-- <input id="reject_reason" type="text"
                        class="form-control @error('reject_reason') is-invalid @enderror" name="reject_reason"
                        placeholder="Abaikan jika tidak di reject!"
                        value="{{ $kd03->reject_reason != '' ? $kd03->reject_reason : '' }}" /> --}}
                    <textarea class="form-control" id="textAreaExample1" rows="4" name="reject_reason" readonly>{!! $kd03->reject_reason != '' ? $kd03->reject_reason : '' !!}</textarea>
                    @error('reject_reason')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        @elseif (auth()->user()->division == 'FABRIC SALES' &&
            auth()->user()->position_job_name == 'DM FABRIC SALES' &&
            $kd03->status_form == 'created')
            <div class="col-sm-8">
                <div class="d-flex flex-row mt-2">
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label">Status Form</label>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_form" id="submitted"
                                    value="submitted" onclick="javascript:myFunction();" checked>
                                <input type="hidden" class="form-check-input" name="created_by"
                                    value="{{ $kd03->created_by }}">
                                <label class="form-check-label" for="status_form1" id="submitted">
                                    Approve
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_form" id="rejected"
                                    value="rejected" onclick="javascript:myFunction();">
                                <input type="hidden" class="form-check-input" name="created_by"
                                    value="{{ $kd03->created_by }}">
                                <label class="form-check-label" for="status_form2" id="rejected">
                                    Rejected
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- @if ($kd03->status_form == 'submitted')
                    <input class="form-check-input" type="hidden" name="status_form" id="status_form2" value="rejected">
                @else
                @endif --}}
            </div>
            <div class="sub" id="sub" style="display: none">
                <div class="d-flex flex-row my-3 ">
                    <div class="col-sm-2">
                        <label type="text" name="" id="" class="form-label text-center">Reject
                            Reason</label>
                    </div>
                    <div class="col-sm-5">
                        {{-- <input id="reject_reason" type="text"
                            class="form-control @error('reject_reason') is-invalid @enderror" name="reject_reason"
                            placeholder="Abaikan jika tidak di reject!"/> --}}
                        <textarea class="form-control" id="textAreaExample1" rows="4" name="reject_reason"></textarea>
                        @error('reject_reason')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        @elseif (auth()->user()->position_job_name == 'GM SALES FABRIC & FACTORY MANAGER LPA' &&
            $kd03->status_form == 'submitted')
            <div class="col-sm-8">
                <div class="d-flex flex-row mt-2">
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label">Status Form</label>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_form" id="acknowledged"
                                    value="acknowledged" onclick="javascript:myFunction5();" checked>
                                <input type="hidden" class="form-check-input" name="created_by"
                                    value="{{ $kd03->created_by }}">
                                <label class="form-check-label" for="status_form1" id="acknowledged">
                                    Approve
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_form" id="rejected"
                                    value="rejected" onclick="javascript:myFunction5();">
                                <input type="hidden" class="form-check-input" name="created_by"
                                    value="{{ $kd03->created_by }}">
                                <label class="form-check-label" for="status_form2" id="rejected">
                                    Rejected
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sub" id="sub" style="display: none">
                <div class="d-flex flex-row my-3 ">
                    <div class="col-sm-2">
                        <label type="text" name="" id="" class="form-label text-center">Reject
                            Reason</label>
                    </div>
                    <div class="col-sm-5">
                        {{-- <input id="reject_reason" type="text"
                            class="form-control @error('reject_reason') is-invalid @enderror" name="reject_reason"
                            placeholder="Abaikan jika tidak di reject!"
                            value="{{ $kd03->reject_reason != '' ? $kd03->reject_reason : '' }}" /> --}}
                        <textarea class="form-control" id="textAreaExample1" rows="4" name="reject_reason"></textarea>
                        @error('reject_reason')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        @elseif (auth()->user()->division == 'FINANCE' &&
            auth()->user()->jabatan == 'Division Manager' &&
            $kd03->status_form == 'acknowledged')
            <div class="col-sm-8">
                <div class="d-flex flex-row mt-2">
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label">Status Form</label>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_form" id="aprv1"
                                    value="aprv 1" onclick="javascript:myFunction2();" checked>
                                <input type="hidden" class="form-check-input" name="created_by"
                                    value="{{ $kd03->created_by }}">
                                <label class="form-check-label" for="status_form1">
                                    Approve
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_form" id="status_form2"
                                    value="rejected" id="rejected" onclick="javascript:myFunction2();">
                                <input type="hidden" class="form-check-input" name="created_by"
                                    value="{{ $kd03->created_by }}">
                                <label class="form-check-label" for="status_form2">
                                    Rejected
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sub" id="sub" style="display: none">
                <div class="d-flex flex-row my-3">
                    <div class="col-sm-2">
                        <label type="text" name="" id="" class="form-label text-center">Reject
                            Reason</label>
                    </div>
                    <div class="col-sm-5">
                        {{-- <input id="reject_reason" type="text"
                            class="form-control @error('reject_reason') is-invalid @enderror" name="reject_reason"
                            placeholder="Abaikan jika tidak di reject!"
                            value="{{ $kd03->reject_reason != '' ? $kd03->reject_reason : '' }}" /> --}}
                        <textarea class="form-control" id="textAreaExample1" rows="4" name="reject_reason"></textarea>
                        @error('reject_reason')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>

            {{-- && auth()->user()->jabatan == 'Division Manager' --}}
        @elseif (auth()->user()->position_job_name == 'DIREKTUR FINANCE, ACCT & IT' &&
            auth()->user()->jabatan == 'Direksi' &&
            $kd03->status_form == 'aprv 1')
            <div class="col-sm-8">
                <div class="d-flex flex-row mt-2">
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label">Status Form</label>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_form" id="aprv2"
                                    value="aprv 2" onclick="javascript:myFunction3();" checked>
                                <input type="hidden" name="created_by" value="{{ $kd03->created_by }}">
                                <label class="form-check-label" for="status_form1">
                                    Approve
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_form" id="status_form2"
                                    value="rejected" onclick="javascript:myFunction3();" id="rejected">
                                <input type="hidden" name="created_by" value="{{ $kd03->created_by }}">
                                <label class="form-check-label" for="status_form2">
                                    Rejected
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sub" id="sub" style="display: none">
                <div class="d-flex flex-row my-3">
                    <div class="col-sm-2">
                        <label type="text" name="" id="" class="form-label text-center">Reject
                            Reason</label>
                    </div>
                    <div class="col-sm-5">
                        {{-- <input id="reject_reason" type="text"
                            class="form-control @error('reject_reason') is-invalid @enderror" name="reject_reason"
                            placeholder="Abaikan jika tidak di reject!" /> --}}
                        <textarea class="form-control" id="textAreaExample1" rows="4" name="reject_reason"></textarea>
                        @error('reject_reason')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        @elseif (auth()->user()->division == 'INTERNAL AUDIT' && $kd03->status_form == 'aprv 2')
            <div class="col-sm-8">
                <div class="d-flex flex-row mt-2">
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label">Status Form</label>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_form" id="inputted"
                                    value="inputted" onclick="javascript:myFunction4();" checked>
                                <input type="hidden" name="created_by" value="{{ $kd03->created_by }}">
                                <label class="form-check-label" for="status_form1">
                                    Approve
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_form" id="rejected"
                                    value="rejected" onclick="javascript:myFunction4();">
                                <input type="hidden" name="created_by" value="{{ $kd03->created_by }}">
                                <label class="form-check-label" for="status_form2">
                                    Rejected
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sub" id="sub" style="display: none">
                <div class="d-flex flex-row my-3">
                    <div class="col-sm-2">
                        <label type="text" name="" id="" class="form-label text-center">Reject
                            Reason</label>
                    </div>
                    <div class="col-sm-5">
                        {{-- <input id="reject_reason" type="text"
                            class="form-control @error('reject_reason') is-invalid @enderror" name="reject_reason"
                            placeholder="Abaikan jika tidak di reject!"
                            value="{{ $kd03->reject_reason != '' ? $kd03->reject_reason : '' }}" /> --}}
                        <textarea class="form-control" id="textAreaExample1" rows="4" name="reject_reason"></textarea>
                        @error('reject_reason')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        @elseif (auth()->user()->division == 'FABRIC SALES' &&
            auth()->user()->position_job_name == 'FABRIC SALES EXECUTIVE' &&
            $kd03->status_form == 'inputted')
            <input type="hidden" name="status_form" value="finished">
            {{-- @elseif (auth()->user()->division == 'FABRIC SALES' && auth()->user()->jabatan == 'Sub Division Manager' && $kd03->status_form == 'rejected')
            <input type="hidden" name="created_by" value="{{ auth()->user()->employee_name }}"> --}}
        @endif

        </div>

        <div class="row justify-content-center">
            <div class="d-flex justify-content-between">
                <div class="col-sm-2 mx-2">
                    {{-- Card Pembuat Form --}}
                    <div class="card text-center w-100">
                        <div class="card-header">
                            REQUESTED BY
                        </div>
                        <div class="card-body">
                            <label for="form-control text-center">{{ $kd03->created_by }}</label>
                        </div>
                        <div class="card-footer text-muted" style="font-size: 13px;">
                            SDM Sales
                        </div>
                    </div>
                </div>


                <div class="col-sm-2">
                    {{-- Card Pembuat Form --}}
                    <div class="card text-center w-100">
                        <div class="card-header">
                            <label for="form-control text-center">ACKNOWLEDGED 1</label>
                        </div>
                        <div class="card-body">
                            @if ($kd03->submitted_by != '')
                                <label for="form-control text-center">{{ $kd03->submitted_by }}</label>
                                {{-- @elseif ($kd03->submitted_by == '')
                                <label for="form-control text-center">REJECTED</label> --}}
                            @endif
                        </div>
                        <div class="card-footer text-muted">
                            DM Sales
                        </div>
                    </div>
                </div>

                <div class="col-sm-2">
                    {{-- Card Pembuat Form --}}
                    <div class="card text-center w-100">
                        <div class="card-header">
                            <label for="form-control text-center">ACKNOWLEDGED 2</label>
                        </div>
                        <div class="card-body">
                            @if ($kd03->acknowledged_by != '')
                                <label for="form-control text-center">{{ $kd03->acknowledged_by }}</label>
                                {{-- @elseif ($kd03->submitted_by == '')
                                <label for="form-control text-center">REJECTED</label> --}}
                            @endif
                        </div>
                        <div class="card-footer text-muted">
                            GM Sales
                        </div>
                    </div>
                </div>

                <div class="col-sm-2">
                    {{-- Card Pembuat Form --}}
                    <div class="card text-center w-100">
                        <div class="card-header">
                            <label for="form-control text-center">Approval 1</label>
                        </div>
                        <div class="card-body">
                            @if ($kd03->aprv1_by != '')
                                <label for="form-control text-center">{{ $kd03->aprv1_by }}</label>
                                {{-- @elseif ($kd03->aprv1_by == '')
                                <label for="form-control text-center">REJECTED</label> --}}
                            @endif
                        </div>
                        <div class="card-footer text-muted">
                            DM Finance
                        </div>
                    </div>
                </div>

                <div class="col-sm-2">
                    {{-- Card Pembuat Form --}}
                    <div class="card text-center w-100">
                        <div class="card-header">
                            <label for="form-control text-center">Approval 2</label>
                        </div>
                        <div class="card-body">
                            @if ($kd03->aprv2_by != '')
                                <label for="form-control text-center">{{ $kd03->aprv2_by }}</label>
                                {{-- @elseif ($kd03->aprv2_by == '')
                                <label for="form-control text-center">REJECTED</label> --}}
                            @endif
                        </div>
                        <div class="card-footer text-muted">
                            DIREKTUR FINANCE, ACCT & IT
                        </div>
                    </div>
                </div>

                <div class="col-sm-2">
                    {{-- Card Pembuat Form --}}
                    <div class="card text-center w-100">
                        <div class="card-header">
                            <label for="form-control text-center">Inputted By</label>


                        </div>
                        <div class="card-body">
                            @if ($kd03->inputted_by != '')
                                <label for="form-control text-center">{{ $kd03->inputted_by }}</label>
                                {{-- @elseif ($kd03->inputted_by == '')
                                <label for="form-control text-center">REJECTED</label> --}}
                            @endif
                        </div>
                        <div class="card-footer text-muted">
                            Document Control
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="d-flex justify-content-end mb-5">
            <div class="col-sm-1">
                <a href="{{ route('kd3outindex') }}" class="btn btn-danger">BACK</a>
            </div>
            @if ((auth()->user()->division == 'FABRIC SALES' &&
                auth()->user()->jabatan == 'Sub Division Manager' &&
                $kd03->status_form != 'rejected' &&
                $kd03->status_form != '' &&
                $kd03->status_form != 'inputted') ||
                (auth()->user()->division == 'FABRIC SALES' &&
                    auth()->user()->jabatan == 'Sub Division Manager' &&
                    $kd03->status_form == 'submitted') ||
                (auth()->user()->division == 'FABRIC SALES' &&
                    auth()->user()->jabatan == 'Sub Division Manager' &&
                    $kd03->status_form == 'aprv 1') ||
                (auth()->user()->division == 'FABRIC SALES' &&
                    auth()->user()->jabatan == 'Sub Division Manager' &&
                    $kd03->status_form == 'aprv 2') ||
                (auth()->user()->division == 'FABRIC SALES' &&
                    auth()->user()->jabatan == 'Sub Division Manager' &&
                    $kd03->status_form == 'acknowledged') ||
                // (auth()->user()->division == 'FABRIC SALES' && auth()->user()->jabatan == 'Sub Division Manager' && $kd03->status_form != 'inputted') ||
                (auth()->user()->division == 'FABRIC SALES' &&
                    auth()->user()->jabatan == 'Sub Division Manager' &&
                    $kd03->status_form == 'created') ||
                $kd03->class == '' ||
                $kd03->title == '' ||
                $kd03->no_cust == '' ||
                $kd03->negara == '' ||
                $kd03->kode_county == '' ||
                $kd03->email == '' ||
                $kd03->telp == '' ||
                $kd03->npwp == '' ||
                $kd03->short_name == '' ||
                $kd03->nama1 == '' ||
                $kd03->street == '' ||
                $kd03->postal_code == '' ||
                // $kd03->tax == '' ||
                // KD04
                $kd04->kd4no_cust == '' ||
                // KD05
                // $kd05->no_cust1 == '' ||
                // $kd05->addresscode1 == '' ||
                // $kd05->title1 == '' ||
                // $kd05->kd5negara1 == '' ||
                // $kd05->kode_county1 == '' ||
                // $kd05->kota1 == '' ||
                // $kd05->email1 == '' ||
                // $kd05->telp1 == '' ||
                // $kd05->npwp1 == '' ||
                // $kd05->nama11 == '' ||
                // $kd05->street1 == '' ||
                // $kd05->postal_code1 == '' ||
                // $kd05->tax1 == '' ||
                // $kd05->fax1 == '' ||
                // KD06
                $kd06->kd6no_cust == '' ||
                $kd06->sd == '' ||
                $kd06->kd6sg == '' ||
                $kd06->biz_type_p1 == '' ||
                // $kd06->nama_agent1 == '' ||
                // $kd06->allowance_qty == '' ||
                $kd06->kd6tax == '' ||
                $kd06->del_con == '' ||
                $kd06->payterm == '' ||
                $kd06->kurs == '' ||
                $kd06->satuan == '' ||
                $kd06->sales == '' ||
                // $kd06->staff_member == '' ||
                // $kd06->from == '' ||
                // $kd06->to == '' ||
                // $kd06->pc == '' ||
                // $kd06->print == '' ||
                $kd06->assigment == '' ||
                // KD11
                // $kd11->kd11no_cust == '' ||
                // $kd11->sd1 == '' ||
                // $kd11->sg1 == '' ||
                // $kd11->association_no1 == '' ||
                // $kd11->central_regu1 == '' ||
                // $kd11->conditions1 == '' ||
                // KD14
                $kd14->kd14no_cust == '' ||
                $kd14->nama_cp1 == '' ||
                $kd14->phone_cp1 == '' ||
                $kd14->email_cp1 == '' ||
                // $kd14->sd_cp1 == '' ||
                // $kd14->sg_cp1 == '' ||
                $kd14->function_cp1 == '' ||
                $kd14->sinc_cp1 == '' ||
                // $kd14->add_addr_cp1 == '' ||
                $kd14->cp1 == '')
                <div class="col-sm-1">
                    <button type="submit" class="btn btn-primary disabled" hidden>SUBMIT</button>
                </div>
            @elseif ((auth()->user()->division == 'FABRIC SALES' &&
                auth()->user()->position_job_name == 'DM FABRIC SALES' &&
                $kd03->status_form != 'created'))
                <div class="col-sm-1 mr-5">
                    <button type="submit" class="btn btn-primary disabled" hidden>SUBMIT</button>
                </div>
            @elseif ((auth()->user()->position_job_name == 'GM SALES FABRIC & FACTORY MANAGER LPA' &&
                $kd03->status_form != 'submitted'))
                <div class="col-sm-1 mr-5">
                    <button type="submit" class="btn btn-primary disabled" hidden>SUBMIT</button>
                </div>
            @elseif ((auth()->user()->division == 'FINANCE' &&
                auth()->user()->jabatan == 'Division Manager' &&
                $kd03->status_form != 'acknowledged'))
                <div class="col-sm-1 mr-5">
                    <button type="submit" class="btn btn-primary disabled" hidden>SUBMIT</button>
                </div>
            @elseif ((auth()->user()->position_job_name == 'DIREKTUR FINANCE, ACCT & IT' &&
                auth()->user()->jabatan == 'Direksi' &&
                $kd03->status_form != 'aprv 1'))
                <div class="col-sm-1 mr-5">
                    <button type="submit" class="btn btn-primary disabled" hidden>SUBMIT</button>
                </div>
            @elseif ((auth()->user()->division == 'INTERNAL AUDIT' && $kd03->status_form != 'aprv 2'))
                <div class="col-sm-1 mr-5">
                    <button type="submit" class="btn btn-primary disabled" hidden>SUBMIT</button>
                </div>
            @else
                <div class="col-sm-1 mr-5">
                    <button type="submit" class="btn btn-primary">SUBMIT</button>
                </div>
            @endif

        </div>
    </form>


@endsection
@push('after-script')
    <script>
        $(document).ready(function() {
            'use-strict';
            $('#dt-init').DataTable({
                "bAutoWidth": false
            });
            $('#dt-init2').DataTable({
                "bAutoWidth": false
            });
            $('#dt-init3').DataTable({
                "bAutoWidth": false
            });
            $('#dt-init4').DataTable({
                "bAutoWidth": false
            });
            $('#dt-init5').DataTable({
                "bAutoWidth": false
            });
            $('#dt-init6').DataTable({
                "bAutoWidth": false
            });
        });

        function myFunction() {
            var yes = document.getElementById("submitted");
            var sub = document.getElementById("sub");
            if (yes.checked === true) {
                sub.style.display = "none";
            } else {
                sub.style.display = "block";
            }
        }

        function myFunction2() {
            var yes = document.getElementById("aprv1");
            var sub = document.getElementById("sub");
            if (yes.checked === true) {
                sub.style.display = "none";
            } else {
                sub.style.display = "block";
            }
        }

        function myFunction3() {
            var yes = document.getElementById("aprv2");
            var sub = document.getElementById("sub");
            if (yes.checked === true) {
                sub.style.display = "none";
            } else {
                sub.style.display = "block";
            }
        }

        function myFunction4() {
            var yes = document.getElementById("inputted");
            var sub = document.getElementById("sub");
            if (yes.checked === true) {
                sub.style.display = "none";
            } else {
                sub.style.display = "block";
            }
        }

        function myFunction5() {
            var yes = document.getElementById("acknowledged");
            var sub = document.getElementById("sub");
            if (yes.checked === true) {
                sub.style.display = "none";
            } else {
                sub.style.display = "block";
            }
        }
    </script>
@endpush
