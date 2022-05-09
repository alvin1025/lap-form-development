@extends('dashboard.layout.lte')

@section('title', 'Index Form Tukar Shift')

@section('content')

    {{-- <form action="{{ route('shift.update', ['shift' => $shift->id]) }}" method="post">
        @csrf
        @method('put') --}}
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div class="row">
            <h3>PT. LUCKY ABADI PRINT</h3>
            <h5>Ds. Sukadanau, Cikarang Barat, Bekasi</h5>
        </div>

    </div>
    <div class="row">
        <center>
            <h4>PERMOHONAN TUKAR SHIFT / LIBUR</h4>
        </center>
        {{-- </div> --}}
    </div>
    <hr>

    <div class="d-flex justify-content-start">
        <div class="col-sm-10">
            <div class="row">
                <label class="col-sm-4 col-form-label my-2">Sehubungan dengan adanya keperluan</label>
                <div class="col-sm-7 my-2">
                    <input id="keperluan" type="text" class="form-control @error('keperluan') is-invalid @enderror"
                        name="keperluan" value="{{ $shift->keperluan }}" readonly />
                    @error('keperluan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-sm-1">
            <div class="mb-3 row">
                <label class="col-sm-5 col-form-label my-2"></label>
                <div class="col-sm-7 my-2">
                    <label class="form-label"></label>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-start">
        <div class="col-sm-8">
            <div class="row">
                <label class="col-sm-4 col-form-label my-2">Maka dengan ini saya</label>
                <div class="col-sm-7 my-2">
                </div>
                <label class="col-sm-2 col-form-label my-2"></label>
                <label class="col-sm-2 col-form-label my-2">Nama</label>
                <div class="col-sm-5 my-2">
                    <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                        value="{{ $shift->nama }}" readonly />
                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label "></label>
                <div class="col-sm-7 ">
                </div>
                <label class="col-sm-2 col-form-label "></label>
                <label class="col-sm-2 col-form-label ">NRP</label>
                <div class="col-sm-5 ">
                    <input id="nrp" type="text" class="form-control @error('nrp') is-invalid @enderror" name="nrp"
                        value="{{ $shift->nrp }}" readonly />
                    @error('nrp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label "></label>
                <div class="col-sm-7 ">
                </div>
                <label class="col-sm-2 col-form-label "></label>
                <label class="col-sm-2 col-form-label ">Bagian</label>
                <div class="col-sm-5 ">
                    <input id="bagian" type="text" class="form-control @error('bagian') is-invalid @enderror" name="bagian"
                        value="{{ $shift->bagian }}" readonly />
                    @error('bagian')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label "></label>
                <div class="col-sm-7 ">
                </div>
                <label class="col-sm-2 col-form-label "></label>
                <label class="col-sm-2 col-form-label ">Divisi</label>
                <div class="col-sm-5 ">
                    <input id="divisi" type="text" class="form-control @error('divisi') is-invalid @enderror" name="divisi"
                        value="{{ $shift->divisi }}" readonly />
                    @error('divisi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <label class="col-sm-4 col-form-label my-2"></label>
        </div>
    </div>
    <hr>

    <div class="d-flex justify-content-between">
        <div class="col-sm-4">
            <div class="row">
                <label class="col-sm-2 col-form-label ">Tanggal</label>
                <div class="col-sm-6 ">
                    <input type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal"
                        value="{{ $shift->tanggal }}" readonly />
                    @error('tanggal')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="col-sm-7 ">
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="row">
                <label class="col-sm-2 col-form-label">Shift</label>
                <div class="col-sm-7 ">
                    <select name="shift" id="" class="form-select">
                        <option value="I">I</option>
                        <option value="II">II</option>
                        <option value="III">III</option>
                    </select>
                </div>
                <div class="col-sm-7 ">
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="row">
                <label class="col-sm-4 col-form-label ">Ditukar Shift</label>
                <div class="col-sm-7 ">
                    <select name="tukar_shift" id="" class="form-select">
                        <option value="I">I</option>
                        <option value="II">II</option>
                        <option value="III">III</option>
                    </select>
                </div>
                <div class="col-sm-7 ">
                </div>
            </div>
        </div>
    </div>

    <hr>

    <div class="d-flex justify-content-start">
        <div class="col-sm-8">
            <div class="row">
                <label class="col-sm-4 col-form-label my-2">Sebagai karyawan pengganti</label>
                <div class="col-sm-7 my-2">
                </div>
                <label class="col-sm-2 col-form-label my-2"></label>
                <label class="col-sm-2 col-form-label my-2">Nama</label>
                <div class="col-sm-5 my-2">
                    <input id="nama2" type="text" class="form-control @error('nama2') is-invalid @enderror" name="nama2"
                        value="{{ $shift->nama2 }}" readonly />
                    @error('nama2')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label "></label>
                <div class="col-sm-7 ">
                </div>
                <label class="col-sm-2 col-form-label "></label>
                <label class="col-sm-2 col-form-label ">NRP</label>
                <div class="col-sm-5 ">
                    <input id="nrp2" type="text" class="form-control @error('nrp2') is-invalid @enderror" name="nrp2"
                        value="{{ $shift->nrp2 }}" readonly />
                    @error('nrp2')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label "></label>
                <div class="col-sm-7 ">
                </div>
                <label class="col-sm-2 col-form-label "></label>
                <label class="col-sm-2 col-form-label ">Bagian</label>
                <div class="col-sm-5 ">
                    <input id="bagian2" type="text" class="form-control @error('bagian2') is-invalid @enderror"
                        name="bagian2" value="{{ $shift->bagian2 }}" readonly />
                    @error('bagian2')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label "></label>
                <div class="col-sm-7 ">
                </div>
                <label class="col-sm-2 col-form-label "></label>
                <label class="col-sm-2 col-form-label ">Divisi</label>
                <div class="col-sm-5 ">
                    <input id="divisi2" type="text" class="form-control @error('divisi2') is-invalid @enderror"
                        name="divisi2" value="{{ $shift->divisi2 }}" readonly />
                    @error('divisi2')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <label class="col-sm-4 col-form-label my-2"></label>
        </div>
    </div>

    <hr class="my-3">
    <div class="d-flex justify-content-between">
        <div class="col-sm-6">
            <div class="row">
                <label class="col-sm-2 col-form-label ">Tanggal</label>
                <div class="col-sm-6 ">
                    <input type="date" class="form-control @error('masuk_kerja') is-invalid @enderror" name="masuk_kerja"
                        value="{{ $shift->masuk_kerja }}" readonly />
                    @error('masuk_kerja')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <label class="col-sm-4 col-form-label ">Masuk Kerja</label>
                <div class="col-sm-7 ">
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="row">
                <label class="col-sm-2 col-form-label ">Tanggal</label>
                <div class="col-sm-6 ">
                    <input type="date" class="form-control @error('libur') is-invalid @enderror" name="libur"
                        value="{{ $shift->libur }}" readonly />
                    @error('libur')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <label class="col-sm-4 col-form-label ">Libur</label>
                <div class="col-sm-7 ">
                </div>
            </div>
        </div>
    </div>
    <hr class="my-3">


    {{-- </form> --}}



@endsection
