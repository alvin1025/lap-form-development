@extends('dashboard.layout.lte')

@section('title', 'Complain Service Kantin')

@section('content')

    <form action="{{ route('complain.store') }}" method="post">
        @csrf
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <div class="row">
                <h3>PT. LUCKY ABADI PRINT</h3>
                <h5>Cikarang Barat - Bekasi</h5>
            </div>

        </div>
        <div class="row">
            <h4 style="font-weight: bold;" class="text-center">Form Complaint Service Kantin dari Karyawan</h4>
            <hr>
            <div class="d-flex justify-content-start">
                <div class="col-sm-7">
                    <div class="row"> <label class="col-sm-3 col-form-label my-2">Nama</label>
                        <div class="col-sm-7 my-2">
                            <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror"
                                name="nama" />
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="mb-3 row">
                        <label class="col-sm-5 col-form-label my-2">Tanggal</label>
                        <div class="col-sm-7 my-2">
                            <input id="tanggal" type="date" class="form-control @error('tanggal') is-invalid @enderror"
                                name="tanggal" />
                            @error('tanggal')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-start">
                <div class="col-sm-7">
                    <div class="row"> <label class="col-sm-3 col-form-label my-2">Nrp</label>
                        <div class="col-sm-7 my-2">
                            <input id="nrp" type="text" class="form-control @error('nrp') is-invalid @enderror"
                                name="nrp" />
                            @error('nrp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-start">
                <div class="col-sm-7">
                    <div class="row"> <label class="col-sm-3 col-form-label my-2">Bagian / Divisi</label>
                        <div class="col-sm-7 my-2">
                            <input id="divisi" type="text" class="form-control @error('divisi') is-invalid @enderror"
                                name="divisi" />
                            @error('divisi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <hr class="mt-3">
            <div class="d-flex flex-row">
                <div class="col-sm-5 text-center">
                    <label type="text" name="" id="" class="form-label">Penilaian Kantin</label>
                </div>
                <div class="col-sm-2 text-center">
                    <label type="text" name="" id="" class="form-label">Buruk</label>
                </div>
                <div class="col-sm-2 text-center">
                    <label type="text" name="" id="" class="form-label">Biasa</label>
                </div>
                <div class="col-sm-2 text-center">
                    <label type="text" name="" id="" class="form-label">Baik</label>
                </div>
            </div>
            <div class="d-flex flex-row">
                <div class="col-sm-5 text-center">
                    <label type="text" name="" id="" class="form-label" style="font-size: 11px">Ceklist sesuai penilaian
                        anda.</label>
                </div>
                <div class="col-sm-2 text-center">
                    <label type="text" name="" id="" class="form-label"><i class="fas fa-frown"></i></label>
                </div>
                <div class="col-sm-2 text-center">
                    <label type="text" name="" id="" class="form-label"><i class="fas fa-meh"></i></label>
                </div>
                <div class="col-sm-2 text-center">
                    <label type="text" name="" id="" class="form-label"><i class="fas fa-smile"></i></label>
                </div>
            </div>
            <hr>
            <div class="d-flex flex-row">
                <div class="col-sm-5">
                    <label type="text" name="" id="" class="form-label">1. Variasi menu
                        makanan</label>
                </div>
                <div class="col-sm-2 text-center">
                    <div class="form-check ml-2">
                        <input class="form-check-input" type="checkbox" value="Buruk" id="variasi_makanan"
                            name="variasi_makanan">
                    </div>
                </div>
                <div class="col-sm-2 text-center">
                    <div class="form-check ml-2">
                        <input class="form-check-input" type="checkbox" value="Biasa" id="variasi_makanan"
                            name="variasi_makanan">
                    </div>
                </div>
                <div class="col-sm-2 text-center">
                    <div class="form-check ml-2">
                        <input class="form-check-input" type="checkbox" value="Baik" id="variasi_makanan"
                            name="variasi_makanan">
                    </div>
                </div>
            </div>
            <div class="d-flex flex-row">
                <div class="col-sm-5">
                    <label type="text" name="" id="" class="form-label">2. Pelayanan yang diberikan</label>
                </div>
                <div class="col-sm-2 text-center">
                    <div class="form-check ml-2">
                        <input class="form-check-input" type="checkbox" value="Buruk" id="pelayanan" name="pelayanan">
                    </div>
                </div>
                <div class="col-sm-2 text-center">
                    <div class="form-check ml-2">
                        <input class="form-check-input" type="checkbox" value="Biasa" id="pelayanan" name="pelayanan">
                    </div>
                </div>
                <div class="col-sm-2 text-center">
                    <div class="form-check ml-2">
                        <input class="form-check-input" type="checkbox" value="Baik" id="pelayanan" name="pelayanan">
                    </div>
                </div>
            </div>
            <div class="d-flex flex-row">
                <div class="col-sm-5">
                    <label type="text" name="" id="" class="form-label">3. Kebersihan</label>
                </div>
                <div class="col-sm-2 text-center">
                    <div class="form-check ml-2">
                        <input class="form-check-input" type="checkbox" value="Buruk" id="kebersihan" name="kebersihan">
                    </div>
                </div>
                <div class="col-sm-2 text-center">
                    <div class="form-check ml-2">
                        <input class="form-check-input" type="checkbox" value="Biasa" id="kebersihan" name="kebersihan">
                    </div>
                </div>
                <div class="col-sm-2 text-center">
                    <div class="form-check ml-2">
                        <input class="form-check-input" type="checkbox" value="Baik" id="kebersihan" name="kebersihan">
                    </div>
                </div>
            </div>
            <hr>
            <div class="d-flex justify-content-start">
                <div class="col-sm-7">
                    <div class="row"> <label class="col-sm-3 col-form-label my-2">Deskripsi</label>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-start">
                <div class="col-sm-7">
                    <div class="row">
                        <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-end mb-5">
                <div class="col-sm-1">
                    <button type="submit" class="btn btn-primary">SUBMIT</button>
                </div>
            </div>
    </form>


    <script></script>
@endsection
