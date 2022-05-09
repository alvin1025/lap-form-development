@extends('dashboard.layout.lte')

@section('title', 'Form Kecelakaan Kerja')

@section('content')

    <form action="{{ route('kecelakaan.update', ['kecelakaan' => $kecelakaan->id]) }}" method="post">
        @csrf
        @method('put')
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <div class="row">
                <h3>PT. LUCKY ABADI PRINT</h3>
                <h5>Ds. Sukadanau, Cikarang Barat, Bekasi</h5>
            </div>

        </div>
        <div class="row">
            <center>
                <h4 style="font-weight: bold;">FORMULIR LAPORAN KECELAKAAN KERJA</h4>
                <hr>
            </center>


            <div class="d-flex justify-content-start">
                <div class="col-sm-7">
                    <div class="row">
                        <label class="col-sm-1 col-form-label my-2">1</label>
                        <label class="col-sm-3 col-form-label my-2">Nama Penderita</label>
                        <div class="col-sm-7 my-2">
                            <input id="nama_penderita" type="text"
                                class="form-control @error('nama_penderita') is-invalid @enderror" name="nama_penderita"
                                value="{{ $kecelakaan->nama_penderita }}" />
                            @error('nama_penderita')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="mb-3 row">
                        <label class="col-sm-5 col-form-label my-2">Nrp</label>
                        <div class="col-sm-7 my-2">
                            <input id="nrp" type="text" class="form-control @error('nrp') is-invalid @enderror" name="nrp"
                                value="{{ $kecelakaan->nrp }}" />
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
                    <div class="row">
                        <label class="col-sm-1 col-form-label my-2">2</label>
                        <label class="col-sm-3 col-form-label my-2" style="font-size: 11px">Tempat Tanggal Lahir</label>
                        <div class="col-sm-7 my-2">
                            <input id="tgl_lahir" type="text" class="form-control @error('tgl_lahir') is-invalid @enderror"
                                name="tgl_lahir" value="{{ $kecelakaan->tgl_lahir }}" />
                            @error('tgl_lahir')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="mb-3 row">
                        <label class="col-sm-5 col-form-label my-2">Job Code</label>
                        <div class="col-sm-7 my-2">
                            <input id="job_code" type="text" class="form-control @error('job_code') is-invalid @enderror"
                                name="job_code" value="{{ $kecelakaan->job_code }}" />
                            @error('job_code')
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
                    <div class="row">
                        <label class="col-sm-1 col-form-label my-2">3</label>
                        <label class="col-sm-3 col-form-label my-2" style="font-size: 11px">Nomor Peserta Jamsostek</label>
                        <div class="col-sm-7 my-2">
                            <input id="no_jamsostek" type="text"
                                class="form-control @error('no_jamsostek') is-invalid @enderror" name="no_jamsostek"
                                value="{{ $kecelakaan->no_jamsostek }}" />
                            @error('no_jamsostek')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="mb-3 row">
                        <label class="col-sm-5 col-form-label my-2">NIK</label>
                        <div class="col-sm-7 my-2">
                            <input id="nik" type="text" class="form-control @error('nik') is-invalid @enderror" name="nik"
                                value="{{ $kecelakaan->nik }}" />
                            @error('nik')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between">
                <div class="col-sm-7">
                    <div class="row">
                        <label class="col-sm-1 col-form-label my-2">4</label>
                        <label class="col-sm-3 col-form-label my-2">Tempat Tinggal</label>
                        <div class="col-sm-8 my-2">
                            <textarea name="tempat_tinggal" class="form-control  @error('tempat_tinggal') is-invalid @enderror" id="" cols="20"
                                rows="5">{{ $kecelakaan->tempat_tinggal }}</textarea>
                            @error('tempat_tinggal')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between">
                <div class="col-sm-7">
                    <div class="row">
                        <label class="col-sm-1 col-form-label my-2">5</label>
                        <label class="col-sm-3 col-form-label my-2">Bagian</label>
                        <div class="col-sm-8 my-2">
                            <input id="bagian" type="text" class="form-control @error('bagian') is-invalid @enderror"
                                name="bagian" value="{{ $kecelakaan->bagian }}" />
                            @error('bagian')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between">
                <div class="col-sm-7">
                    <div class="row">
                        <label class="col-sm-1 col-form-label my-2">6</label>
                        <label class="col-sm-3 col-form-label my-2">Tempat Kecelakaan</label>
                        <div class="col-sm-8 my-2">
                            <input id="tempat_kecelakaan" type="text"
                                class="form-control @error('tempat_kecelakaan') is-invalid @enderror"
                                name="tempat_kecelakaan" value="{{ $kecelakaan->tempat_kecelakaan }}" />
                            @error('tempat_kecelakaan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between">
                <div class="col-sm-7">
                    <div class="row">
                        <label class="col-sm-1 col-form-label my-2">7</label>
                        <label class="col-sm-3 col-form-label my-2">Tanggal Kejadian</label>
                        <div class="col-sm-8 my-2">
                            <input id="tanggal_kecelakaan" type="text"
                                class="form-control @error('tanggal_kecelakaan') is-invalid @enderror"
                                name="tanggal_kecelakaan" value="{{ $kecelakaan->tanggal_kecelakaan }}" />
                            @error('tanggal_kecelakaan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between">
                <div class="col-sm-7">
                    <div class="row">
                        <label class="col-sm-1 col-form-label my-2">8</label>
                        <label class="col-sm-3 col-form-label my-2" style="font-size: 11px">Sebab-Sebab Kecelakaan (Jelaskan
                            dari awal s/d
                            akhir)</label>
                        <div class="col-sm-8 my-2">
                            <textarea name="sebab_kecelakaan" class="form-control @error('sebab_kecelakaan') is-invalid @enderror" id="" cols="30"
                                rows="10">{{ $kecelakaan->sebab_kecelakaan }}</textarea>
                            @error('sebab_kecelakaan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between">
                <div class="col-sm-7">
                    <div class="row">
                        <label class="col-sm-1 col-form-label my-2">9</label>
                        <label class="col-sm-3 col-form-label my-2" style="font-size: 11px">Keterangan Tentang
                            lukanya</label>
                        <div class="col-sm-8 my-2">
                            <input id="keterangan_luka" type="text"
                                class="form-control @error('keterangan_luka') is-invalid @enderror" name="keterangan_luka"
                                value="{{ $kecelakaan->keterangan_luka }}" />
                            @error('keterangan_luka')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between">
                <div class="col-sm-7">
                    <div class="row">
                        <label class="col-sm-1 col-form-label my-2">10</label>
                        <label class="col-sm-3 col-form-label my-2">Yang Menolong</label>
                        <div class="col-sm-8 my-2">
                            <input id="penolong" type="text" class="form-control @error('penolong') is-invalid @enderror"
                                name="penolong" value="{{ $kecelakaan->penolong }}" />
                            @error('penolong')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between">
                <div class="col-sm-7">
                    <div class="row">
                        <label class="col-sm-1 col-form-label my-2">11</label>
                        <label class="col-sm-3 col-form-label my-2">Dirawat di</label>
                        <div class="col-sm-8 my-2">
                            <input id="dirawat_di" type="text"
                                class="form-control @error('dirawat_di') is-invalid @enderror" name="dirawat_di"
                                value="{{ $kecelakaan->dirawat_di }}" />
                            @error('dirawat_di')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between">
                <div class="col-sm-7">
                    <div class="row">
                        <label class="col-sm-1 col-form-label my-2">12</label>
                        <label class="col-sm-3 col-form-label my-2" style="font-size: 11px">Keterangan Lain-lain</label>
                        <div class="col-sm-8 my-2">
                            <textarea name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" id="" cols="20"
                                rows="5">{{ $kecelakaan->keterangan }}</textarea>
                            @error('keterangan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-end">
                <div class="col-sm-5">
                    <div class="row">
                        <label class="col-sm-3 col-form-label my-2">Cikarang Barat,</label>
                        <div class="col-sm-5 my-2">
                            <input id="tgl_dibuat" type="date"
                                class="form-control @error('tgl_dibuat') is-invalid @enderror" name="tgl_dibuat"
                                value="{{ $kecelakaan->tgl_dibuat }}" />
                            @error('tgl_dibuat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>


            <div class="d-flex justify-content-end mb-5">
                <div class="col-sm-1">
                    <button type="submit" class="btn btn-primary">UPDATE</button>
                </div>
            </div>
    </form>


    <script>

    </script>
@endsection
