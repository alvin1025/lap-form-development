@extends('dashboard.layout.lte')

@section('title', 'Create Laporan Meninggalkan Tempat')

@section('content')

    {{-- <form action="{{ route('meninggalkan.update', ['meninggalkan' => $meninggalkan->id]) }}" method="post"> --}}
    @csrf
    @method('put')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div class="row">

        </div>

    </div>
    <div class="row">

        <center>
            <h3>IJIN MENINGGALKAN TEMPAT KERJA</h3>
        </center>
        <center>
            <h4>(SAAT JAM KERJA)</h4>
        </center>
        <hr>
        <div class="d-flex justify-content-end">
            <div class="col-sm-5">
                <div class="row">
                    <label class="col-sm-3 col-form-label my-1">Tanggal</label>
                    <div class="col-sm-7 my-1">
                        <input id="tanggal" type="date" class="form-control @error('tanggal') is-invalid @enderror"
                            name="tanggal" value="{{ $meninggalkan->tanggal }}" readonly />
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
            <div class="col-sm-5">
                <div class="row">
                    <label class="col-sm-4 col-form-label my-1">Nama</label>
                    <div class="col-sm-7 my-1">
                        <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                            value="{{ $meninggalkan->nama }}" readonly />
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="mb-3 row">
                    <label class="col-sm-5 col-form-label my-1">Nrp</label>
                    <div class="col-sm-7 my-1">
                        <input id="nrp" type="text" class="form-control @error('nrp') is-invalid @enderror" name="nrp"
                            value="{{ $meninggalkan->nrp }}" readonly />
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
            <div class="col-sm-5">
                <div class="row">
                    <label class="col-sm-4 col-form-label my-1">Bagian</label>
                    <div class="col-sm-7 my-1">
                        <input id="bagian" type="text" class="form-control @error('bagian') is-invalid @enderror"
                            name="bagian" value="{{ $meninggalkan->bagian }}" readonly />
                        @error('bagian')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="mb-3 row">
                    <label class="col-sm-5 col-form-label my-1">Divisi</label>
                    <div class="col-sm-7 my-1">
                        <input id="divisi" type="text" class="form-control @error('divisi') is-invalid @enderror"
                            name="divisi" value="{{ $meninggalkan->divisi }}" readonly />
                        @error('divisi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-start">
            <div class="col-sm-5">
                <div class="row">
                    <label class="col-sm-4 col-form-label my-1">Diberikan ijin dari</label>
                    <div class="col-sm-7 my-1">
                        <input id="ijin_dari" type="text" class="form-control @error('ijin_dari') is-invalid @enderror"
                            name="ijin_dari" value="{{ $meninggalkan->ijin_dari }}" readonly />
                        @error('ijin_dari')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="mb-3 row">
                    <label class="col-sm-5 col-form-label my-1">s/d</label>
                    <div class="col-sm-7 my-1">
                        <input id="sampai" type="text" class="form-control @error('sampai') is-invalid @enderror"
                            name="sampai" value="{{ $meninggalkan->sampai }}" readonly />
                        @error('sampai')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <hr>

        <div class="d-flex justify-content-start">
            <div class="col-sm-4">
                <div class="row">
                    <label class="col-sm-7 col-form-label my-1">Diisi oleh petugas satpam</label>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <label class="col-sm-5 col-form-label my-1">Keluar Pabrik</label>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <label class="col-sm-5 col-form-label my-1">Kembali</label>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-start">
            <div class="col-sm-4">
                <div class="row">
                    <label class="col-sm-7 col-form-label"></label>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <label class="col-sm-5 col-form-label">Jam</label>
                    <div class="col-sm-5 my-1">
                        <input id="keluar_jam" type="text" class="form-control @error('keluar_jam') is-invalid @enderror"
                            name="keluar_jam" value="{{ $meninggalkan->keluar_jam }}" readonly />
                        @error('keluar_jam')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <label class="col-sm-5 col-form-label">Jam</label>
                    <div class="col-sm-5 my-1">
                        <input id="sampai_jam" type="text" class="form-control @error('sampai_jam') is-invalid @enderror"
                            name="sampai_jam" value="{{ $meninggalkan->sampai_jam }}" readonly />
                        @error('sampai_jam')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-2">
        {{-- </form> --}}


        <script>

        </script>
    @endsection
