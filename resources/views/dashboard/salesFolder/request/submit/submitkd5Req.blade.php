 @extends('dashboard.layout.lte')

@section('title', 'Customer Data KD05 Request')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center border-bottom">
        <h1 class="h2">@yield('title')</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif

    @if ($kd05->addresscode1 == $kd05->addresscode1_old)
    <div class="card">
        <div class="d-flex content-justify-between">
            <div class="col-sm-6">
                <h5 class="card-header">KD05 Additional Address </h5>
            </div>
            <div class="col-sm-6">
                <h5 class="card-header">KD05 Additional Address Request</h5>
            </div>
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div class="col-sm-12">

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="d-flex flex-row my-2">
                                <div class="col-sm-5">
                                    <label type="text" name="" id="" class="form-label text-center">No
                                        Cust</label>
                                </div>
                                <div class="col-sm-6">
                                    <label type="text" name="" id=""
                                        class="form-label text-center">Address Code</label>
                                </div>
                            </div>
                            <div class="d-flex flex-row my-2">
                                <div class="col-sm-5">
                                    <input id="no_cust1" type="text"
                                        class="form-control @error('no_cust1') is-invalid @enderror" name="no_cust1"
                                        value="{{ $kd05->no_cust1 }}"
                                        style="{{ $kd05->no_cust1 == null ? 'color:white' : '' }}" disabled />
                                    @error('no_cust1')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <input id="kode_cust" type="text"
                                        class="form-control @error('kode_cust') is-invalid @enderror" name="kode_cust"
                                        value="{{ $kd05->addresscode1 }}"
                                        style="{{ $kd05->addresscode1 == null ? 'color:white' : '' }}" disabled />
                                    @error('kode_cust')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex flex-row">
                                <div class="col-sm-3">
                                    <label type="text" name="" id="" class="form-label">Title</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" value="{{ $kd05->title1_old }}"
                                        style="{{ $kd05->title1_old == null ? 'color:white' : '' }}" disabled>
                                    @error('title1')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-3">
                                    <label type="text" name="" id="" class="form-label">Nama</label>
                                </div>
                                <div class="col-sm-8">
                                    <input id="nama" type="text"
                                        class="form-control @error('nama') is-invalid @enderror" name="nama"
                                        value="{{ $kd05->nama11_old }}"
                                        style="{{ $kd05->nama11_old == null ? 'color:white' : '' }}" disabled />
                                    @error('nama')
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
                                    <input id="nama" type="text"
                                        class="form-control @error('nama') is-invalid @enderror" name="nama"
                                        value="{{ $kd05->nama21_old }}"
                                        style="{{ $kd05->nama21_old == null ? 'color:white' : '' }}" disabled />
                                    @error('nama')
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
                                    <input id="kode_cust" type="text"
                                        class="form-control @error('kode_cust') is-invalid @enderror" name="kode_cust"
                                        value="{{ $kd05->street1_old }}"
                                        style="{{ $kd05->street1_old == null ? 'color:white' : '' }}" disabled />
                                    @error('alamat')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-3">
                                    <label type="text" name="" id="" class="form-label"
                                        style="font-size: 12px">Additional
                                        Address</label>
                                </div>
                                <div class="col-sm-8">
                                    <input id="addit1" type="text"
                                        class="form-control @error('addit1') is-invalid @enderror" name="addit1"
                                        value="{{ $kd05->addit1_old }}"
                                        style="{{ $kd05->addit1_old == null ? 'color:white' : '' }}" disabled />
                                    @error('alamat')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-3">
                                    <label type="text" name="" id="" class="form-label">Tax</label>
                                </div>
                                <div class="col-sm-8">
                                    <input id="kode_cust" type="text"
                                        class="form-control @error('kode_cust') is-invalid @enderror" name="kode_cust"
                                        value="{{ $kd05->tax1_old }}"
                                        style="{{ $kd05->tax1_old == null ? 'color:white' : '' }}" disabled />
                                    @error('alamat')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-3">
                                    <label type="text" name="" id="" class="form-label"
                                        style="font-size: 12px">Postal Code</label>
                                </div>
                                <div class="col-sm-8">
                                    <input id="postal_code1" type="postal_code1"
                                        class="form-control @error('postal_code1') is-invalid @enderror"
                                        name="postal_code1" value="{{ $kd05->postal_code1_old }}"
                                        style="{{ $kd05->postal_code1_old == null ? 'color:white' : '' }}" disabled />
                                    @error('postal_code1')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-3">
                                    <label type="text" name="" id="" class="form-label">Country</label>
                                </div>
                                <div class="col-sm-8">
                                    <input id="kode_cust" type="text"
                                        class="form-control @error('kode_cust') is-invalid @enderror" name="kode_cust"
                                        value="{{ $kd05->kd5negara1_old }}"
                                        style="{{ $kd05->kd5negara1_old == null ? 'color:white' : '' }}" disabled />
                                    @error('kd5negara1')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-3">
                                    <label type="text" name="" id="" class="form-label"
                                        style="font-size: 15px">Freight</label>
                                </div>
                                <div class="col-sm-8">
                                    <input id="kode_cust" type="text"
                                        class="form-control @error('kode_cust') is-invalid @enderror" name="kode_cust"
                                        value="{{ $kd05->kode_county1_old }}"
                                        style="{{ $kd05->kode_county1_old == null ? 'color:white' : '' }}" disabled />
                                    @error('kode_country')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-3">
                                    <label type="text" name="" id="" class="form-label">Kota</label>
                                </div>
                                <div class="col-sm-8">
                                    <input id="kota" type="text"
                                        class="form-control @error('kota') is-invalid @enderror" name="kota"
                                        value="{{ $kd05->kota1_old }}"
                                        style="{{ $kd05->kota1_old == null ? 'color:white' : '' }}" disabled />
                                    @error('kota')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-3">
                                    <label type="text" name="" id="" class="form-label">NPWP</label>
                                </div>
                                <div class="col-sm-8">
                                    <input id="npwp1" type="text"
                                        class="form-control @error('npwp1') is-invalid @enderror" name="npwp1"
                                        value="{{ $kd05->npwp1_old }}"
                                        style="{{ $kd05->npwp1_old == null ? 'color:white' : '' }}" disabled />
                                    @error('npwp1')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-3">
                                    <label type="text" name="" id="" class="form-label">Fax</label>
                                </div>
                                <div class="col-sm-8">
                                    <input id="fax1" type="text"
                                        class="form-control @error('fax1') is-invalid @enderror" name="fax1"
                                        value="{{ $kd05->fax1_old }}"
                                        style="{{ $kd05->fax1_old == null ? 'color:white' : '' }}" disabled />
                                    @error('fax1')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-3">
                                    <label type="text" name="" id="" class="form-label">PO
                                        BOX</label>
                                </div>
                                <div class="col-sm-8">
                                    <input id="po_box1" type="text"
                                        class="form-control @error('po_box1') is-invalid @enderror" name="po_box1"
                                        value="{{ $kd05->po_box1_old }}"
                                        style="{{ $kd05->po_box1_old == null ? 'color:white' : '' }}" disabled />
                                    @error('po_box1')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-3">
                                    <label type="text" name="" id="" class="form-label">Email</label>
                                </div>
                                <div class="col-sm-8">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ $kd05->email1_old }}"
                                        style="{{ $kd05->email1_old == null ? 'color:white' : '' }}" disabled />
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-3">
                                    <label type="text" name="" id="" class="form-label">Phone</label>
                                </div>
                                <div class="col-sm-8">
                                    <input id="telp1" type="text"
                                        class="form-control @error('telp1') is-invalid @enderror" name="telp1"
                                        value="{{ $kd05->telp1_old }}"
                                        style="{{ $kd05->telp1_old == null ? 'color:white' : '' }}" disabled />
                                    @error('telp1')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-3">
                                    <label type="text" name="" id=""
                                        class="form-label">Mobile</label>
                                </div>
                                <div class="col-sm-8">
                                    <input id="mobile1" type="text"
                                        class="form-control @error('mobile1') is-invalid @enderror" name="mobile1"
                                        value="{{ $kd05->mobile1_old }}"
                                        style="{{ $kd05->mobile1_old == null ? 'color:white' : '' }}" disabled />
                                    @error('mobile1')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-3">
                                    <label type="text" name="" id="" class="form-label">Home</label>
                                </div>
                                <div class="col-sm-8">
                                    <input id="mobile1" type="text"
                                        class="form-control @error('mobile1') is-invalid @enderror" name="mobile1"
                                        value="{{ $kd05->home1_old }}"
                                        style="{{ $kd05->home1_old == null ? 'color:white' : '' }}" disabled />
                                    @error('mobile1')
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
                                <div class="col-sm-8">
                                    @if ($kd05->status_old == 1)
                                    <input id="nama1" type="text"
                                        class="form-control @error('nama1') is-invalid @enderror" name="nama1"
                                        value="Active" disabled />
                                    @error('status')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                @elseif ($kd05->status_old == 2)
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
                                    @error('mobile1')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-3">
                                    <label type="text" name="" id="" class="form-label">NPWP Image</label>
                                </div>
                                <div class="col-sm-8">
                                    <a href="{{ URL::to($kd05->npwp_image_old) }}" class="">
                                    <img src="{{ URL::to($kd05->npwp_image_old) }}" alt="" style="height: 100px; weight: 100px;"
                                    class="rounded mx-auto d-block"></a>
                                    @error('mobile1')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-3">
                                    <label type="text" name="" id="" class="form-label">KTP Image</label>
                                </div>
                                <div class="col-sm-8">
                                    <a href="{{ URL::to($kd05->ktp_image_old) }}" class="">
                                    <img src="{{ URL::to($kd05->ktp_image_old) }}" alt="" style="height: 100px; weight: 100px;"
                                    class="rounded mx-auto d-block"></a>
                                    @error('mobile1')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex flex-row my-2">
                                <div class="col-sm-5">
                                    <label type="text" name="" id=""
                                        class="form-label text-center">No
                                        Cust</label>
                                </div>
                                <div class="col-sm-6">
                                    <label type="text" name="" id=""
                                        class="form-label text-center">Address Code</label>
                                </div>
                            </div>
                            <div class="d-flex flex-row my-2">
                                <div class="col-sm-5">
                                    <input id="no_cust1" type="text"
                                        class="form-control @error('no_cust1') is-invalid @enderror" name="no_cust1"
                                        value="{{ $kd05->no_cust1 }}"
                                        style="{{ $kd05->no_cust1 == null ? 'color:red' : '' }}" disabled />
                                    @error('no_cust1')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <input id="kode_cust" type="text"
                                        class="form-control @error('kode_cust') is-invalid @enderror" name="kode_cust"
                                        value="{{ $kd05->addresscode1 }}"
                                        style="{{ $kd05->addresscode1 == null ? 'color:red' : '' }}" disabled />
                                    @error('kode_cust')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex flex-row">
                                <div class="col-sm-3">
                                    <label type="text" name="" id="" class="form-label">Title</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" value="{{ $kd05->title1 }}"
                                        style="{{ $kd05->title1 != $kd05->title1_old ? 'color:red' : '' }}" disabled>
                                    @error('title1')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-3">
                                    <label type="text" name="" id="" class="form-label">Nama</label>
                                </div>
                                <div class="col-sm-8">
                                    <input id="nama" type="text"
                                        class="form-control @error('nama') is-invalid @enderror" name="nama"
                                        value="{{ $kd05->nama11 }}"
                                        style="{{ $kd05->nama11 != $kd05->nama11_old ? 'color:red' : '' }}"
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
                                    <label type="text" name="" id="" class="form-label">Nama
                                        2</label>
                                </div>
                                <div class="col-sm-8">
                                    <input id="nama" type="text"
                                        class="form-control @error('nama') is-invalid @enderror" name="nama"
                                        value="{{ $kd05->nama21 }}"
                                        style="{{ $kd05->nama21 != $kd05->nama21_old ? 'color:red' : '' }}"
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
                                        class="form-label">Street</label>
                                </div>
                                <div class="col-sm-8">
                                    <input id="kode_cust" type="text"
                                        class="form-control @error('kode_cust') is-invalid @enderror" name="kode_cust"
                                        value="{{ $kd05->street1 }}"
                                        style="{{ $kd05->street1 != $kd05->street1_old ? 'color:red' : '' }}"
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
                                    <label type="text" name="" id="" class="form-label"
                                        style="font-size: 12px">Additional
                                        Address</label>
                                </div>
                                <div class="col-sm-8">
                                    <input id="addit1" type="text"
                                        class="form-control @error('addit1') is-invalid @enderror" name="addit1"
                                        value="{{ $kd05->addit1 }}"
                                        style="{{ $kd05->addit1 != $kd05->addit1_old ? 'color:red' : '' }}"
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
                                    <label type="text" name="" id="" class="form-label">Tax</label>
                                </div>
                                <div class="col-sm-8">
                                    <input id="kode_cust" type="text"
                                        class="form-control @error('kode_cust') is-invalid @enderror" name="kode_cust"
                                        value="{{ $kd05->tax1 }}"
                                        style="{{ $kd05->tax1 != $kd05->tax1_old ? 'color:red' : '' }}" disabled />
                                    @error('alamat')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-3">
                                    <label type="text" name="" id="" class="form-label"
                                        style="font-size: 12px">Postal
                                        Code</label>
                                </div>
                                <div class="col-sm-8">
                                    <input id="postal_code1" type="postal_code1"
                                        class="form-control @error('postal_code1') is-invalid @enderror"
                                        name="postal_code1" value="{{ $kd05->postal_code1 }}"
                                        style="{{ $kd05->postal_code1 != $kd05->postal_code1_old ? 'color:red' : '' }}"
                                        disabled />
                                    @error('postal_code1')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-3">
                                    <label type="text" name="" id="" class="form-label">Country</label>
                                </div>
                                <div class="col-sm-8">
                                    <input id="kode_cust" type="text"
                                        class="form-control @error('kode_cust') is-invalid @enderror" name="kode_cust"
                                        value="{{ $kd05->kd5negara1 }}"
                                        style="{{ $kd05->kd5negara1 != $kd05->kd5negara1_old ? 'color:red' : '' }}"
                                        disabled />
                                    @error('kd5negara1')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-3">
                                    <label type="text" name="" id="" class="form-label"
                                        style="font-size: 15px">Freight</label>
                                </div>
                                <div class="col-sm-8">
                                    <input id="kode_cust" type="text"
                                        class="form-control @error('kode_cust') is-invalid @enderror" name="kode_cust"
                                        value="{{ $kd05->kode_county1 }}"
                                        style="{{ $kd05->kode_county1 != $kd05->kode_county1_old ? 'color:red' : '' }}"
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
                                    <label type="text" name="" id="" class="form-label">Kota</label>
                                </div>
                                <div class="col-sm-8">
                                    <input id="kota" type="text"
                                        class="form-control @error('kota') is-invalid @enderror" name="kota"
                                        value="{{ $kd05->kota1 }}"
                                        style="{{ $kd05->kota1 != $kd05->kota1_old ? 'color:red' : '' }}" disabled />
                                    @error('kota')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-3">
                                    <label type="text" name="" id="" class="form-label">NPWP</label>
                                </div>
                                <div class="col-sm-8">
                                    <input id="npwp1" type="text"
                                        class="form-control @error('npwp1') is-invalid @enderror" name="npwp1"
                                        value="{{ $kd05->npwp1 }}"
                                        style="{{ $kd05->npwp1 != $kd05->npwp1_old ? 'color:red' : '' }}" disabled />
                                    @error('npwp1')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-3">
                                    <label type="text" name="" id="" class="form-label">Fax</label>
                                </div>
                                <div class="col-sm-8">
                                    <input id="fax1" type="text"
                                        class="form-control @error('fax1') is-invalid @enderror" name="fax1"
                                        value="{{ $kd05->fax1 }}"
                                        style="{{ $kd05->fax1 != $kd05->fax1_old ? 'color:red' : '' }}" disabled />
                                    @error('fax1')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-3">
                                    <label type="text" name="" id="" class="form-label">PO BOX</label>
                                </div>
                                <div class="col-sm-8">
                                    <input id="po_box1" type="text"
                                        class="form-control @error('po_box1') is-invalid @enderror" name="po_box1"
                                        value="{{ $kd05->po_box1 }}"
                                        style="{{ $kd05->po_box1 != $kd05->po_box1_old ? 'color:red' : '' }}"
                                        disabled />
                                    @error('po_box1')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-3">
                                    <label type="text" name="" id="" class="form-label">Email</label>
                                </div>
                                <div class="col-sm-8">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ $kd05->email1 }}"
                                        style="{{ $kd05->email1 != $kd05->email1_old ? 'color:red' : '' }}"
                                        disabled />
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-3">
                                    <label type="text" name="" id="" class="form-label">Phone</label>
                                </div>
                                <div class="col-sm-8">
                                    <input id="telp1" type="text"
                                        class="form-control @error('telp1') is-invalid @enderror" name="telp1"
                                        value="{{ $kd05->telp1 }}"
                                        style="{{ $kd05->telp1 != $kd05->telp1_old ? 'color:red' : '' }}"
                                        disabled />
                                    @error('telp1')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-3">
                                    <label type="text" name="" id=""
                                        class="form-label">Mobile</label>
                                </div>
                                <div class="col-sm-8">
                                    <input id="mobile1" type="text"
                                        class="form-control @error('mobile1') is-invalid @enderror" name="mobile1"
                                        value="{{ $kd05->mobile1 }}"
                                        style="{{ $kd05->mobile1 != $kd05->mobile1_old ? 'color:red' : '' }}"
                                        disabled />
                                    @error('mobile1')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-3">
                                    <label type="text" name="" id="" class="form-label">Home</label>
                                </div>
                                <div class="col-sm-8">
                                    <input id="mobile1" type="text"
                                        class="form-control @error('mobile1') is-invalid @enderror" name="mobile1"
                                        value="{{ $kd05->home1 }}"
                                        style="{{ $kd05->home1 != $kd05->home1_old ? 'color:red' : '' }}"
                                        disabled />
                                    @error('mobile1')
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
                                <div class="col-sm-8">
                                @if ($kd05->status == 1)
                                        <input id="nama1" type="text"
                                        class="form-control @error('nama1') is-invalid @enderror" name="nama1"
                                        value="Active" disabled />
                                    @error('status')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                @elseif ($kd05->status == 2)
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
                                    @error('mobile1')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-3">
                                    <label type="text" name="" id="" class="form-label">NPWP Image</label>
                                </div>
                                <div class="col-sm-8">
                                    <a href="{{ URL::to($kd05->npwp_image) }}" class="">
                                    <img src="{{ URL::to($kd05->npwp_image) }}" alt="" style="height: 100px; weight: 100px;"
                                    class="rounded mx-auto d-block"></a>
                                    @error('mobile1')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex flex-row mt-2">
                                <div class="col-sm-3">
                                    <label type="text" name="" id="" class="form-label">KTP Image</label>
                                </div>
                                <div class="col-sm-8">
                                    <a href="{{ URL::to($kd05->ktp_image) }}" class="">
                                    <img src="{{ URL::to($kd05->ktp_image) }}" alt="" style="height: 100px; weight: 100px;"
                                    class="rounded mx-auto d-block"></a>
                                    @error('mobile1')
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
    @else
    <div class="card">
        <div class="card-header">
            KD05 Request New
        </div>
        <div class="card-body">
           
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
                                            style="{{ $kd05->no_cust1 == null ? 'color:white' : '' }}"
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
                                            value="{{ $kd05->addresscode1 ?? '-' }}"
                                            style="{{ $kd05->addresscode1 == null ? 'color:white' : '' }}"
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
                                            value="{{ $kd05->title1 ?? '-' }}"
                                            disabled>
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
                                            name="nama"
                                            value="{{ $kd05->nama11 ?? '-' }}"
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
                                            name="kode_cust"
                                            value="{{ $kd05->street1 ?? '-' }}"
                                            style="{{ $kd05->street1 == null ? 'color:white' : '' }}"
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
                                            value="{{ $kd05->kd5negara1 ?? '-' }}"
                                            style="{{ $kd05->kd5negara1 == null ? 'color:white' : '' }}"
                                            disabled />
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
                                            class="form-label" style="font-size: 15px">Freight</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="kode_cust" type="text"
                                            class="form-control @error('kode_cust') is-invalid @enderror"
                                            name="kode_cust"
                                            value="{{ $kd05->kode_county1 ?? '-' }}"
                                            style="{{ $kd05->kode_county1 == null ? 'color:white' : '' }}"
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
                                            value="{{ $kd05->kota1 ?? '-' }}"
                                            style="{{ $kd05->kota1 == null ? 'color:white' : '' }}"
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
                                            value="{{ $kd05->postal_code1 ?? '-' }}"
                                            style="{{ $kd05->postal_code1 == null ? 'color:white' : '' }}"
                                            disabled />
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
                                            name="email"
                                            value="{{ $kd05->email1 ?? '-' }}"
                                            style="{{ $kd05->email1 == null ? 'color:white' : '' }}"
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
                                            name="telp1"
                                            value="{{ $kd05->telp1 ?? '-' }}"
                                            style="{{ $kd05->telp1 == null ? 'color:white' : '' }}"
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
                                            name="npwp1"
                                            value="{{ $kd05->npwp1 ?? '-' }}"
                                            
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
                                            class="form-label">Status</label>
                                    </div>
                                    <div class="col-sm-6">
                                @if ($kd05->status == 1)
                                        <input id="nama1" type="text"
                                        class="form-control @error('nama1') is-invalid @enderror" name="nama1"
                                        value="Active" disabled />
                                    @error('status')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                @elseif ($kd05->status == 2)
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
                                        <a href="{{ URL::to($kd05->npwp_image) }}" class="">
                                            <img src="{{ URL::to($kd05->npwp_image) }}" alt="" style="height: 100px; weight: 100px;"
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
                                        <a href="{{ URL::to($kd05->ktp_image) }}" class="">
                                            <img src="{{ URL::to($kd05->ktp_image) }}" alt="" style="height: 100px; weight: 100px;"
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
</div>
    @endif
   






    </div>
    <form action="{{ route('updateReqKd5', ['id' => $kd05->id]) }}" method="post">
        @csrf
        @method('put')
        @if (auth()->user()->division == 'FABRIC SALES' && auth()->user()->position_job_name == 'FABRIC SALES EXECUTIVE' && $kd05->status_form == '')
            <input type="hidden" name="status_form" value="created">
            <input type="hidden" name="created_by" value="{{ $kd05->employee_name }}">
        @elseif ($kd05->status_form == 'rejected')
            <input type="hidden" name="status_form" value="created">
            <input type="hidden" name="created_by" value="{{ auth()->user()->employee_name }}">
            <div class="d-flex flex-row my-3">
                <div class="col-sm-2">
                    <label type="text" name="" id="" class="form-label text-center">Reject
                        Reason</label>
                </div>
                <div class="col-sm-5">
                        <textarea class="form-control" id="textAreaExample1" rows="4" name="reject_reason" readonly>{!! $kd05->reject_reason != '' ? $kd05->reject_reason : '' !!}</textarea>
                        
                    @error('reject_reason')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        @elseif (auth()->user()->division == 'FABRIC SALES' && auth()->user()->position_job_name == 'DM FABRIC SALES' && $kd05->status_form == 'created')
            <div class="col-sm-8">
                <div class="d-flex flex-row mt-2">
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label">Status Form</label>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_form" id="submitted"
                                    value="aprv 1" onclick="javascript:myFunction();" checked>
                                <input type="hidden" class="form-check-input" name="created_by"
                                    value="{{ $kd05->created_by }}">
                                <label class="form-check-label" for="status_form1" id="submitted">
                                    Approve
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_form" id="rejected"
                                    value="rejected" onclick="javascript:myFunction();">
                                <input type="hidden" class="form-check-input" name="created_by"
                                    value="{{ $kd05->created_by }}">
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
                            <textarea class="form-control" id="textAreaExample1" rows="4" name="reject_reason"></textarea>
                        @error('reject_reason')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        @elseif (auth()->user()->position_job_name == 'GM SALES FABRIC & FACTORY MANAGER LPA' && $kd05->status_form == 'aprv 1')
            <div class="col-sm-8">
                <div class="d-flex flex-row mt-2">
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label">Status Form</label>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_form" id="aprv1"
                                    value="aprv 2" onclick="javascript:myFunction2();" checked>
                                <input type="hidden" class="form-check-input" name="created_by"
                                    value="{{ $kd05->created_by }}">
                                <label class="form-check-label" for="status_form1" id="acknowledged">
                                    Approve
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_form" id="rejected"
                                    value="rejected" onclick="javascript:myFunction2();">
                                <input type="hidden" class="form-check-input" name="created_by"
                                    value="{{ $kd05->created_by }}">
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
                            <textarea class="form-control" id="textAreaExample1" rows="4" name="reject_reason"></textarea>
                        @error('reject_reason')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        @elseif (auth()->user()->division == 'INTERNAL AUDIT' && $kd05->status_form == 'aprv 2')
            <div class="col-sm-8">
                <div class="d-flex flex-row mt-2">
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label">Status Form</label>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_form" id="inputted"
                                    value="inputted" onclick="javascript:myFunction3();" checked>
                                <input type="hidden" name="created_by" value="{{ $kd05->created_by }}">
                                <label class="form-check-label" for="status_form1">
                                    Input To INTEX
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_form" id="rejected"
                                    value="rejected" onclick="javascript:myFunction3();">
                                <input type="hidden" name="created_by" value="{{ $kd05->created_by }}">
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
                            <textarea class="form-control" id="textAreaExample1" rows="4" name="reject_reason"></textarea>
                        @error('reject_reason')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            @elseif (auth()->user()->division == 'FABRIC SALES' && auth()->user()->position_job_name == 'FABRIC SALES EXECUTIVE' && $kd05->status_form == 'inputted')
            <input type="hidden" name="status_form" value="finished">
        @endif


        <div class="row justify-content-center">
            <div class="d-flex justify-content-between">
                {{-- SDM --}}
                <div class="col-sm-2 mx-2">
                    {{-- Card Pembuat Form --}}
                    <div class="card text-center w-100">
                        <div class="card-header">
                            REQUESTED BY
                        </div>
                        <div class="card-body">
                            <label for="form-control text-center">{{ $kd05->created_by }}</label>
                        </div>
                        <div class="card-footer text-muted" style="font-size: 13px;">
                            SDM Sales
                        </div>
                    </div>
                </div>

                {{-- DM --}}
                <div class="col-sm-2 mx-2">
                    {{-- Card Pembuat Form --}}
                    <div class="card text-center w-100">
                        <div class="card-header">
                            APPROVE 1
                        </div>
                        <div class="card-body">
                            <label for="form-control text-center">{{ $kd05->aprv1_by }}</label>
                        </div>
                        <div class="card-footer text-muted" style="font-size: 13px;">
                            DM Sales
                        </div>
                    </div>
                </div>

                {{-- GM --}}
                <div class="col-sm-2 mx-2">
                    {{-- Card Pembuat Form --}}
                    <div class="card text-center w-100">
                        <div class="card-header">
                            APPROVE 2
                        </div>
                        <div class="card-body">
                            <label for="form-control text-center">{{ $kd05->aprv2_by }}</label>
                        </div>
                        <div class="card-footer text-muted" style="font-size: 13px;">
                            GM Sales
                        </div>
                    </div>
                </div>

                {{-- Document Control --}}
                <div class="col-sm-2 mx-2">
                    {{-- Card Pembuat Form --}}
                    <div class="card text-center w-100">
                        <div class="card-header">
                            Inputted
                        </div>
                        <div class="card-body">
                            <label for="form-control text-center">{{ $kd05->inputted_by }}</label>
                        </div>
                        <div class="card-footer text-muted" style="font-size: 13px;">
                            Document Control
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-sontent-end">
            @if ((auth()->user()->division == 'FABRIC SALES' && auth()->user()->jabatan == 'Sub Division Manager' && $kd05->status_form != 'rejected') && auth()->user()->division == 'FABRIC SALES' && auth()->user()->jabatan == 'Sub Division Manager' && $kd05->status_form != '' && (auth()->user()->division == 'FABRIC SALES' && auth()->user()->jabatan == 'Sub Division Manager' && $kd05->status_form != 'inputted'))
                <div class="col-sm-1 mr-5">
                    <button type="submit" class="btn btn-primary disabled" aria-disabled="true" hidden>SUBMIT</button>
                </div>
                <div class="col-sm-1">
                    <a href="{{ url()->previous() }}" class="btn btn-danger">BACK</a>
                </div>
            @else
                <div class="col-sm-1 mr-5">
                    <button type="submit" class="btn btn-primary">SUBMIT</button>
                </div>
                <div class="col-sm-1">
                    <a href="{{ url()->previous() }}" class="btn btn-danger">BACK</a>
                </div>
            @endif
        </div>
    </form>

    <script>
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
            var yes = document.getElementById("inputted");
            var sub = document.getElementById("sub");
            if (yes.checked === true) {
                sub.style.display = "none";
            } else {
                sub.style.display = "block";
            }
        }
    </script>


@endsection
