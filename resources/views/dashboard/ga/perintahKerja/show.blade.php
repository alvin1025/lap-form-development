@extends('dashboard.layout.lte')

@section('title', 'Surat Perintah Kerja')

@section('content')

    {{-- <form action="{{ route('perintah.update', ['perintah' => $perintah->id]) }}" method="post">
        @csrf
        @method('put') --}}
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

    </div>
    <div class="row">
        <h5 class="text-center">KOP SURAT</h5>
        <h4 class="text-center">SURAT PERINTAH KERJA</h4>
        <div class="d-flex justify-content-center">
            <div class="col-sm-5">
                <div class="row">
                    <label class="col-sm-2 col-form-label my-2">NO</label>
                    <div class="col-sm-10 my-2">
                        <input id="no_surat" type="text" class="form-control @error('no_surat') is-invalid @enderror"
                            name="no_surat" value="{{ $perintah->no_surat }}" readonly />
                        @error('no_surat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="d-flex justify-content-start">
        <div class="col-sm-10">
            <div class="row">
                <label class="col-sm-4 col-form-label my-2">Yang bertanda tangan dibawah ini :</label>
                <div class="col-sm-8 my-2">
                </div>
                <label class="col-sm-2 col-form-label my-2">Nama</label>
                <div class="col-sm-5 my-2">
                    <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                        value="{{ $perintah->nama }}" readonly />
                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label "></label>
                <div class="col-sm-8">
                </div>
                <label class="col-sm-2 col-form-label ">Jabatan</label>
                <div class="col-sm-5 ">
                    <input id="jabatan" type="text" class="form-control @error('jabatan') is-invalid @enderror"
                        name="jabatan" value="{{ $perintah->jabatan }}" readonly />
                    @error('jabatan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label "></label>
                <div class="col-sm-8">
                </div>
                <label class="col-sm-2 col-form-label ">Alamat</label>
                <div class="col-sm-5 ">
                    <textarea name="alamat" id="alamat" cols="10" rows="5" class="form-control @error('alamat') is-invalid @enderror"
                        readonly></textarea>
                    @error('alamat')
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

    <div class="d-flex justify-content-start mt-5">
        <div class="col-sm-10">
            <div class="row">
                <label class="col-sm-8 col-form-label my-2">Dengan ini memberikan Perintah Kerja kepada :</label>
                <div class="col-sm-4 my-2">
                </div>
                <label class="col-sm-2 col-form-label my-2">Nama</label>
                <div class="col-sm-5 my-2">
                    <input id="nama_karyawan" type="text" class="form-control @error('nama_karyawan') is-invalid @enderror"
                        name="nama_karyawan" value="{{ $perintah->nama_karyawan }}" readonly />
                    @error('nama_karyawan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label "></label>
                <div class="col-sm-8">
                </div>
                <label class="col-sm-2 col-form-label ">Pekerjaan</label>
                <div class="col-sm-5 ">
                    <input id="perkerjaan" type="text" class="form-control @error('perkerjaan') is-invalid @enderror"
                        name="perkerjaan" value="{{ $perintah->perkerjaan }}" readonly />
                    @error('perkerjaan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label "></label>
                <div class="col-sm-8">
                </div>
                <label class="col-sm-2 col-form-label ">Alamat</label>
                <div class="col-sm-5 ">
                    <textarea name="alamat_karyawan" id="alamat_karyawan" cols="10" rows="5"
                        class="form-control @error('alamat_karyawan') is-invalid @enderror" readonly></textarea>
                    @error('alamat_karyawan')
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

    <div class="d-flex justify-content-start mt-2">
        <div class="col-sm-12">
            <div class="row">
                <label class="col-sm-8 col-form-label my-2">Untuk melaksanakan pekerjaan dengan spesifikasi sbb
                    :</label>
                <div class="col-sm-4">
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex flex-row">
        <div class="col-sm-1 text-center">
            <label type="text" name="" id="" class="form-label">NO</label>
        </div>
        <div class="col-sm-4 text-center">
            <label type="text" name="" id="" class="form-label">Jenis Pekerjaan</label>
        </div>
        <div class="col-sm-2 text-center">
            <label type="text" name="" id="" class="form-label">Volume</label>
        </div>
        <div class="col-sm-2 text-center">
            <label type="text" name="" id="" class="form-label">Harga sat (Rp)</label>
        </div>
        <div class="col-sm-2 text-center">
            <label type="text" name="" id="" class="form-label">Jumlah (Rp)</label>
        </div>
    </div>
    <hr>
    {{-- row 1 --}}
    <div class="d-flex flex-row">
        <div class="col-sm-1 text-center">
            <input type="text" id="" class="form-control" name="no1" value="{{ $perintah->no1 }}" readonly>
        </div>
        <div class="col-sm-4 text-center">
            <input type="text" id="" class="form-control" name="jenis_pekerjaan1"
                value="{{ $perintah->jenis_pekerjaan1 }}">
        </div>
        <div class="col-sm-2 text-center">
            <input type="text" id="" class="form-control" name="volume1" value="{{ $perintah->volume1 }}" readonly>
        </div>
        <div class="col-sm-2 text-center">
            <input type="text" id="" class="form-control" name="harga_sat1" value="{{ $perintah->harga_sat1 }}"
                readonly>
        </div>
        <div class="col-sm-2 text-center">
            <input type="text" id="" class="form-control" name="jumlah_sat1" value="{{ $perintah->jumlah_sat1 }}"
                readonly>
        </div>
    </div>

    {{-- row 2 --}}
    <div class="d-flex flex-row">
        <div class="col-sm-1 text-center">
            <input type="text" id="" class="form-control" name="no2" value="{{ $perintah->no2 }}" readonly>
        </div>
        <div class="col-sm-4 text-center">
            <input type="text" id="" class="form-control" name="jenis_pekerjaan2"
                value="{{ $perintah->jenis_pekerjaan2 }}" readonly>
        </div>
        <div class="col-sm-2 text-center">
            <input type="text" id="" class="form-control" name="volume2" value="{{ $perintah->volume2 }}" readonly>
        </div>
        <div class="col-sm-2 text-center">
            <input type="text" id="" class="form-control" name="harga_sat2" value="{{ $perintah->harga_sat2 }}"
                readonly>
        </div>
        <div class="col-sm-2 text-center">
            <input type="text" id="" class="form-control" name="jumlah_sat2" value="{{ $perintah->jumlah_sat2 }}"
                readonly>
        </div>
    </div>

    {{-- row 3 --}}
    <div class="d-flex flex-row">
        <div class="col-sm-1 text-center">
            <input type="text" id="" class="form-control" name="no3" value="{{ $perintah->no3 }}" readonly>
        </div>
        <div class="col-sm-4 text-center">
            <input type="text" id="" class="form-control" name="jenis_pekerjaan3"
                value="{{ $perintah->jenis_pekerjaan3 }}" readonly>
        </div>
        <div class="col-sm-2 text-center">
            <input type="text" id="" class="form-control" name="volume3" value="{{ $perintah->volume3 }}" readonly>
        </div>
        <div class="col-sm-2 text-center">
            <input type="text" id="" class="form-control" name="harga_sat3" value="{{ $perintah->harga_sat3 }}"
                readonly>
        </div>
        <div class="col-sm-2 text-center">
            <input type="text" id="" class="form-control" name="jumlah_sat3" value="{{ $perintah->jumlah_sat3 }}"
                readonly>
        </div>
    </div>

    {{-- row 4 --}}
    <div class="d-flex flex-row">
        <div class="col-sm-1 text-center">
            <input type="text" id="" class="form-control" name="no4" value="{{ $perintah->no4 }}" readonly>
        </div>
        <div class="col-sm-4 text-center">
            <input type="text" id="" class="form-control" name="jenis_pekerjaan4"
                value="{{ $perintah->jenis_pekerjaan4 }}" readonly>
        </div>
        <div class="col-sm-2 text-center">
            <input type="text" id="" class="form-control" name="volume4" value="{{ $perintah->volume4 }}" readonly>
        </div>
        <div class="col-sm-2 text-center">
            <input type="text" id="" class="form-control" name="harga_sat4" value="{{ $perintah->harga_sat4 }}"
                readonly>
        </div>
        <div class="col-sm-2 text-center">
            <input type="text" id="" class="form-control" name="jumlah_sat4" value="{{ $perintah->jumlah_sat4 }}"
                readonly>
        </div>
    </div>

    {{-- row 5 --}}
    <div class="d-flex flex-row">
        <div class="col-sm-1 text-center">
            <input type="text" id="" class="form-control" name="no5" value="{{ $perintah->no5 }}" readonly>
        </div>
        <div class="col-sm-4 text-center">
            <input type="text" id="" class="form-control" name="jenis_pekerjaan5"
                value="{{ $perintah->jenis_pekerjaan5 }}" readonly>
        </div>
        <div class="col-sm-2 text-center">
            <input type="text" id="" class="form-control" name="volume5" value="{{ $perintah->volume5 }}" readonly>
        </div>
        <div class="col-sm-2 text-center">
            <input type="text" id="" class="form-control" name="harga_sat5" value="{{ $perintah->harga_sat5 }}"
                readonly>
        </div>
        <div class="col-sm-2 text-center">
            <input type="text" id="" class="form-control" name="jumlah_sat5" value="{{ $perintah->jumlah_sat5 }}"
                readonly>
        </div>
    </div>

    {{-- row 6 --}}
    <div class="d-flex flex-row">
        <div class="col-sm-1 text-center">
            <input type="text" id="" class="form-control" name="no6" value="{{ $perintah->no6 }}" readonly>
        </div>
        <div class="col-sm-4 text-center">
            <input type="text" id="" class="form-control" name="jenis_pekerjaan6"
                value="{{ $perintah->jenis_pekerjaan6 }}" readonly>
        </div>
        <div class="col-sm-2 text-center">
            <input type="text" id="" class="form-control" name="volume6" value="{{ $perintah->volume6 }}" readonly>
        </div>
        <div class="col-sm-2 text-center">
            <input type="text" id="" class="form-control" name="harga_sat6" value="{{ $perintah->harga_sat6 }}"
                readonly>
        </div>
        <div class="col-sm-2 text-center">
            <input type="text" id="" class="form-control" name="jumlah_sat6" value="{{ $perintah->jumlah_sat6 }}"
                readonly>
        </div>
    </div>

    {{-- row 7 --}}
    <div class="d-flex flex-row">
        <div class="col-sm-1 text-center">
            <input type="text" id="" class="form-control" name="no7" value="{{ $perintah->no7 }}" readonly>
        </div>
        <div class="col-sm-4 text-center">
            <input type="text" id="" class="form-control" name="jenis_pekerjaan7"
                value="{{ $perintah->jenis_pekerjaan7 }}" readonly>
        </div>
        <div class="col-sm-2 text-center">
            <input type="text" id="" class="form-control" name="volume7" value="{{ $perintah->volume7 }}" readonly>
        </div>
        <div class="col-sm-2 text-center">
            <input type="text" id="" class="form-control" name="harga_sat7" value="{{ $perintah->harga_sat7 }}"
                readonly>
        </div>
        <div class="col-sm-2 text-center">
            <input type="text" id="" class="form-control" name="jumlah_sat7" value="{{ $perintah->jumlah_sat7 }}"
                readonly>
        </div>
    </div>

    {{-- row 8 --}}
    <div class="d-flex flex-row">
        <div class="col-sm-1 text-center">
            <input type="text" id="" class="form-control" name="no8" value="{{ $perintah->no8 }}" readonly>
        </div>
        <div class="col-sm-4 text-center">
            <input type="text" id="" class="form-control" name="jenis_pekerjaan8"
                value="{{ $perintah->jenis_pekerjaan8 }}" readonly>
        </div>
        <div class="col-sm-2 text-center">
            <input type="text" id="" class="form-control" name="volume8" value="{{ $perintah->volume8 }}" readonly>
        </div>
        <div class="col-sm-2 text-center">
            <input type="text" id="" class="form-control" name="harga_sat8" value="{{ $perintah->harga_sat8 }}"
                readonly>
        </div>
        <div class="col-sm-2 text-center">
            <input type="text" id="" class="form-control" name="jumlah_sat8" value="{{ $perintah->jumlah_sat8 }}"
                readonly>
        </div>
    </div>

    {{-- row 9 --}}
    <div class="d-flex flex-row">
        <div class="col-sm-1 text-center">
            <input type="text" id="" class="form-control" name="no9" value="{{ $perintah->no9 }}" readonly>
        </div>
        <div class="col-sm-4 text-center">
            <input type="text" id="" class="form-control" name="jenis_pekerjaan9"
                value="{{ $perintah->jenis_pekerjaan9 }}" readonly>
        </div>
        <div class="col-sm-2 text-center">
            <input type="text" id="" class="form-control" name="volume9" value="{{ $perintah->volume9 }}" readonly>
        </div>
        <div class="col-sm-2 text-center">
            <input type="text" id="" class="form-control" name="harga_sat9" value="{{ $perintah->harga_sat9 }}"
                readonly>
        </div>
        <div class="col-sm-2 text-center">
            <input type="text" id="" class="form-control" name="jumlah_sat9" value="{{ $perintah->jumlah_sat9 }}"
                readonly>
        </div>
    </div>
    <hr>
    <div class="d-flex justify-content-start">
        <div class="col-sm-10">
            <p class="text-justify">Demikianlah Surat Perintah Kerja Ini dibuat dengan sebenarnya</p>
        </div>
    </div>

    <div class="d-flex justify-content-end">
        <div class="col-sm-5">
            <div class="row">
                <label class="col-sm-4 col-form-label my-2">Cikarang Barat,</label>
                <div class="col-sm-5 my-2">
                    <input id="tanggal" type="date" class="form-control @error('tanggal') is-invalid @enderror"
                        name="tanggal" value="{{ $perintah->tanggal }}" readonly />
                    @error('tanggal')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
    </div>


    {{-- <div class="
                            d-flex justify-content-end mb-5">
            <div class="col-sm-1">
                <button type="submit" class="btn btn-primary">SUBMIT</button>
            </div>
        </div>
    </form> --}}



@endsection
