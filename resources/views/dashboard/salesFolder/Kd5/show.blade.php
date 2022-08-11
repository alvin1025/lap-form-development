@extends('dashboard.layout.lte')

@section('title', 'ADDITIONAL ADDRESSES KD05')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center border-bottom">
        <h1 class="h2">@yield('title')</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="card">
        <h5 class="card-header">KD05 Additional Address</h5>
        <div class="card-body">
            <div class="d-flex justify-content-start">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="d-flex flex-row my-2">
                            <div class="col-sm-5">
                                <label type="text" name="" id="" class="form-label text-center">No
                                    Cust</label>
                            </div>
                            <div class="col-sm-6">
                                <label type="text" name="" id="" class="form-label text-center">Kode
                                    Cust</label>
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
                                    value="{{ $kd05->addresscode1 ?? 'Data Belum Lengkap!' }}"
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
                                <input type="text" class="form-control"
                                    value="{{ $kd05->title1 ?? 'Data Belum Lengkap!' }}"
                                    style="{{ $kd05->title1 == null ? 'color:red' : '' }}" disabled>
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
                                    value="{{ $kd05->nama11 ?? 'Data Belum Lengkap!' }}"
                                    style="{{ $kd05->nama11 == null ? 'color:red' : '' }}" disabled />
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
                                    value="{{ $kd05->nama21 ?? '-' }}" disabled />
                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex flex-row mt-2">
                            <div class="col-sm-3">
                                <label type="text" name="" id="" class="form-label">Alamat</label>
                            </div>
                            <div class="col-sm-8">
                                <input id="kode_cust" type="text"
                                    class="form-control @error('kode_cust') is-invalid @enderror" name="kode_cust"
                                    value="{{ $kd05->street1 ?? 'Data Belum Lengkap!' }}"
                                    style="{{ $kd05->street1 == null ? 'color:red' : '' }}" disabled />
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
                                    value="{{ $kd05->addit1 ?? '-' }}" disabled />
                                @error('alamat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex flex-row mt-2">
                            <div class="col-sm-3">
                                <label type="text" name="" id="" class="form-label">Negara</label>
                            </div>
                            <div class="col-sm-8">
                                <input id="kode_cust" type="text"
                                    class="form-control @error('kode_cust') is-invalid @enderror" name="kode_cust"
                                    value="{{ $kd05->kd5negara1 ?? 'Data Belum Lengkap!' }}"
                                    style="{{ $kd05->kd5negara1 == null ? 'color:red' : '' }}" disabled />
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
                                    style="font-size: 15px">Kode
                                    County</label>
                            </div>
                            <div class="col-sm-8">
                                <input id="kode_cust" type="text"
                                    class="form-control @error('kode_cust') is-invalid @enderror" name="kode_cust"
                                    value="{{ $kd05->kode_county1 ?? 'Data Belum Lengkap!' }}"
                                    style="{{ $kd05->kode_county1 == null ? 'color:red' : '' }}" disabled />
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
                                    value="{{ $kd05->kota1 ?? 'Data Belum Lengkap!' }}"
                                    style="{{ $kd05->kota1 == null ? 'color:red' : '' }}" disabled />
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
                                <label type="text" name="" id="" class="form-label"></label>
                            </div>
                            <div class="col-sm-6">

                            </div>
                        </div>
                        <div class="d-flex flex-row">
                            <div class="col-sm-2 mr-3">
                                <label type="text" name="" id="" class="form-label"></label>
                            </div>
                            <div class="col-sm-6">

                            </div>
                        </div>
                        <div class="d-flex flex-row">
                            <div class="col-sm-2 mr-3">
                                <label type="text" name="" id="" class="form-label"></label>
                            </div>
                            <div class="col-sm-6">

                            </div>
                        </div>
                        <div class="d-flex flex-row mt-4">
                            <div class="col-sm-2 mr-3">
                                <label type="text" name="" id="" class="form-label"
                                    style="font-size: 12px">Postal
                                    Code</label>
                            </div>
                            <div class="col-sm-8">
                                <input id="postal_code1" type="postal_code1"
                                    class="form-control @error('postal_code1') is-invalid @enderror" name="postal_code1"
                                    value="{{ $kd05->postal_code1 ?? 'Data Belum Lengkap!' }}"
                                    style="{{ $kd05->postal_code1 == null ? 'color:red' : '' }}" disabled />
                                @error('postal_code1')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex flex-row mt-2">
                            <div class="col-sm-2 mr-3">
                                <label type="text" name="" id="" class="form-label">Email</label>
                            </div>
                            <div class="col-sm-8">
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ $kd05->email1 ?? 'Data Belum Lengkap!' }}"
                                    style="{{ $kd05->email1 == null ? 'color:red' : '' }}" disabled />
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex flex-row mt-2">
                            <div class="col-sm-2 mr-3">
                                <label type="text" name="" id="" class="form-label">Fax</label>
                            </div>
                            <div class="col-sm-8">
                                <input id="fax1" type="text"
                                    class="form-control @error('fax1') is-invalid @enderror" name="fax1"
                                    value="{{ $kd05->fax1 ?? 'Data Belum Lengkap!' }}"
                                    style="{{ $kd05->fax1 == null ? 'color:red' : '' }}" disabled />
                                @error('fax1')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex flex-row mt-2">
                            <div class="col-sm-2 mr-3">
                                <label type="text" name="" id="" class="form-label">Telp</label>
                            </div>
                            <div class="col-sm-8">
                                <input id="telp1" type="text"
                                    class="form-control @error('telp1') is-invalid @enderror" name="telp1"
                                    value="{{ $kd05->telp1 ?? 'Data Belum Lengkap!' }}"
                                    style="{{ $kd05->telp1 == null ? 'color:red' : '' }}" disabled />
                                @error('telp1')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex flex-row mt-2">
                            <div class="col-sm-2 mr-3">
                                <label type="text" name="" id="" class="form-label">Mobile</label>
                            </div>
                            <div class="col-sm-8">
                                <input id="mobile1" type="text"
                                    class="form-control @error('mobile1') is-invalid @enderror" name="mobile1"
                                    value="{{ $kd05->mobile1 ?? '-' }}"disabled />
                                @error('mobile1')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex flex-row mt-2">
                            <div class="col-sm-2 mr-3">
                                <label type="text" name="" id="" class="form-label">PO BOX</label>
                            </div>
                            <div class="col-sm-8">
                                <input id="po_box1" type="text"
                                    class="form-control @error('po_box1') is-invalid @enderror" name="po_box1"
                                    value="{{ $kd05->po_box1 ?? '-' }}" disabled />
                                @error('po_box1')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex flex-row mt-2">
                            <div class="col-sm-2 mr-3">
                                <label type="text" name="" id="" class="form-label">NPWP</label>
                            </div>
                            <div class="col-sm-8">
                                <input id="npwp1" type="text"
                                    class="form-control @error('npwp1') is-invalid @enderror" name="npwp1"
                                    value="{{ $kd05->npwp1 ?? 'Data Belum Lengkap!' }}"
                                    style="{{ $kd05->npwp1 == null ? 'color:red' : '' }}" disabled />
                                @error('npwp1')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex flex-row mt-2">
                            <div class="col-sm-2 mr-3">
                                <label type="text" name="" id="" class="form-label" style="font-size: 12px">NPWP Image</label>
                            </div>
                            <div class="col-sm-8">
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
                                <label type="text" name="" id="" class="form-label" style="font-size: 12px">KTP Image</label>
                            </div>
                            <div class="col-sm-8">
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
