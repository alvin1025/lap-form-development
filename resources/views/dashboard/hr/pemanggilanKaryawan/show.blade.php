@extends('dashboard.layout.lte')

@section('title', 'Index Form Pemanggilan Karyawan')

@section('content')

    {{-- <form action="{{ route('pemanggilan.update', ['pemanggilan' => $pemanggilan->id]) }}" method="post">
        @csrf
        @method('put') --}}
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div class="row">
            {{-- <h3>PT. LUCKY ABADI PRINT</h3>
                <h5>Ds. Sukadanau, Cikarang Barat, Bekasi</h5> --}}
        </div>

    </div>
    <div class="row mx-5">
        <h3>Lucky Textile Group</h3>
        <h5>Bintaro-Cibitung</h5>
    </div>
    <hr>

    <div class="d-flex justify-content-start">
        <div class="col-sm-8">
            <div class="row">
                <label class="col-sm-4 col-form-label my-2">Kepada Yth</label>
                <div class="col-sm-7 my-2">
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label my-2">Bapak/Ibu/Saudara/I </label>
                <div class="col-sm-5 my-2">
                    <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                        value="{{ $pemanggilan->nama }}" readonly />
                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label my-2">NRP</label>
                <div class="col-sm-5 my-2">
                    <input id="nrp" type="text" class="form-control @error('nrp') is-invalid @enderror" name="nrp"
                        value="{{ $pemanggilan->nrp }}" readonly />
                    @error('nrp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label my-2">Divisi</label>
                <div class="col-sm-5 my-2">
                    <input id="divisi" type="text" class="form-control @error('divisi') is-invalid @enderror" name="divisi"
                        value="{{ $pemanggilan->divisi }}" readonly />
                    @error('divisi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label my-3">Dengan hormat,</label>
                <div class="col-sm-5 my-2">
                </div>
            </div>
            <div class="row">
                <label class="col-sm-10 col-form-label my-3">Dengan ini kami mengundang Bapak/Ibu/Saudara/i untuk
                    datang/bertemu pada :</label>
                <div class="col-sm-1 my-2">
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label my-2">Hari/Tanggal</label>
                <div class="col-sm-5 my-2">
                    <input id="hari_tanggal" type="text" class="form-control @error('hari_tanggal') is-invalid @enderror"
                        name="hari_tanggal" value="{{ $pemanggilan->hari_tanggal }}" readonly />
                    @error('hari_tanggal')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label my-2">Waktu</label>
                <div class="col-sm-5 my-2">
                    <input id="waktu" type="text" class="form-control @error('waktu') is-invalid @enderror" name="waktu"
                        value="{{ $pemanggilan->waktu }}" readonly />
                    @error('waktu')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label my-2">Tempat</label>
                <div class="col-sm-5 my-2">
                    <input id="tempat" type="text" class="form-control @error('tempat') is-invalid @enderror" name="tempat"
                        value="{{ $pemanggilan->tempat }}" readonly />
                    @error('tempat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label my-2">Agenda</label>
                <div class="col-sm-5 my-2">
                    <input id="agenda" type="text" class="form-control @error('agenda') is-invalid @enderror" name="agenda"
                        value="{{ $pemanggilan->agenda }}" readonly />
                    @error('agenda')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <label class="col-sm-10 col-form-label my-2">Demikian undangan dari kami, atas perhatian dan
                    kehadirannya diucapkan terima kasih.</label>
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



    {{-- <div class="
                            d-flex justify-content-end mb-5">
        <div class="col-sm-1">
            <button type="submit" class="btn btn-primary">UPDATE</button>
        </div>
    </div>
    </form> --}}



@endsection
