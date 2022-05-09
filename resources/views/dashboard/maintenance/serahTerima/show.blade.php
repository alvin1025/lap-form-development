@extends('dashboard.layout.lte')

@section('title', 'Form Serah Terima')

@section('content')

    {{-- <form action="{{ route('serah-terima.update', ['serah_terima' => $terima->id]) }}" method="post">
        @csrf
        @method('put') --}}
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div class="row">

        </div>

    </div>
    <div class="row">

        <h3 class="text-center">SERAH TERIMA</h3>
        <hr>
        <div class="d-flex justify-content-start">
            <div class="col-sm-5">
                <div class="row">
                    <label class="col-sm-4 col-form-label my-1">Nama Mesin</label>
                    <div class="col-sm-7 my-1">
                        <input id="nama_mesin" type="text" class="form-control @error('nama_mesin') is-invalid @enderror"
                            name="nama_mesin" value="{{ $terima->nama_mesin }}" readonly />
                        @error('nama_mesin')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-4 col-form-label my-1">Merk</label>
                    <div class="col-sm-7 my-1">
                        <input id="merk" type="text" class="form-control @error('merk') is-invalid @enderror" name="merk"
                            value="{{ $terima->merk }}" readonly />
                        @error('merk')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-4 col-form-label my-1">Lokasi Pemakaian</label>
                    <div class="col-sm-7 my-1">
                        <input id="lokasi" type="text" class="form-control @error('lokasi') is-invalid @enderror"
                            name="lokasi" value="{{ $terima->lokasi }}" readonly />
                        @error('lokasi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-4 col-form-label my-1">Tanggal Datang</label>
                    <div class="col-sm-7 my-1">
                        <input id="tanggal_datang" type="date"
                            class="form-control @error('tanggal_datang') is-invalid @enderror" name="tanggal_datang"
                            value="{{ $terima->tanggal_datang }}" readonly />
                        @error('tanggal_datang')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-4 col-form-label my-1">Uraian Serah Terima</label>
                    <div class="col-sm-7 my-1">
                        <textarea name="uraian" id="" cols="20" rows="5"
                            class="form-control @error('uraian') is-invalid @enderror">{{ $terima->uraian }}</textarea>
                        @error('uraian')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-4 col-form-label my-1">Keterangan</label>
                    <div class="col-sm-7 my-1">
                        <textarea name="keterangan" id="" cols="20" rows="5"
                            class="form-control @error('keterangan') is-invalid @enderror">{{ $terima->keterangan }}</textarea>
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
                    <label class="col-sm-4 col-form-label my-1">Cikarang Barat,</label>
                    <div class="col-sm-7 my-1">
                        <input id="tanggal" type="date" class="form-control @error('tanggal') is-invalid @enderror"
                            name="tanggal" value="{{ $terima->tanggal }}" readonly />
                        @error('tanggal')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="d-flex justify-content-end mb-5">
                <div class="col-sm-1">
                    <button type="submit" class="btn btn-primary">UPDATE</button>
                </div>
            </div> --}}
        {{-- </form> --}}


        <script>

        </script>
    @endsection
