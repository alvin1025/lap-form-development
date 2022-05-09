@extends('dashboard.layout.lte')

@section('title', 'Index Form Pembuatan Kartu')

@section('content')

    <form action="{{ route('kartu.update', ['kartu' => $kartu->id]) }}" method="post">
        @csrf
        @method('put')
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <div class="row">

            </div>

        </div>
        <div class="row">

            <center>
                <h3>SURAT PERMOHONAN PEMBUATAN</h3>
            </center>
            <center>
                <h4>KARTU PENGENAL KARYAWAN</h4>
            </center>
            <hr>
            <div class="d-flex justify-content-start">
                <div class="col-sm-12">
                    <div class="row">
                        <label class="col-sm-3 col-form-label my-1">Yang Bertanda tangan dibawah ini :</label>
                    </div>
                </div>
            </div>






            <div class="d-flex justify-content-start">
                <div class="col-sm-5">
                    <div class="row">
                        <label class="col-sm-4 col-form-label my-1">Nama</label>
                        <div class="col-sm-7 my-1">
                            <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror"
                                name="nama" value="{{ $kartu->nama }}" />
                            @error('nama')
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
                        <label class="col-sm-4 col-form-label my-1">NRP</label>
                        <div class="col-sm-7 my-1">
                            <input id="nrp" type="text" class="form-control @error('nrp') is-invalid @enderror" name="nrp"
                                value="{{ $kartu->nrp }}" />
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
                                name="bagian" value="{{ $kartu->bagian }}" />
                            @error('bagian')
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
                        <label class="col-sm-4 col-form-label my-1">Divisi</label>
                        <div class="col-sm-7 my-1">
                            <input id="divisi" type="text" class="form-control @error('divisi') is-invalid @enderror"
                                name="divisi" value="{{ $kartu->divisi }}" />
                            @error('divisi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <article style="font-size: 16px" class="mt-3">
                Mohon dibuatkan tanda pengenal Karyawan PT.Lucky Print Abadi. Dikarenakan kartu yang lama Hilang/Rusak, dan
                saya bersedia mengganti biaya administrasi sebesar Rp. 5.000,-. Demikian atas perhatiannya disampaikan
                terima kasih.
            </article>

            <div class="d-flex justify-content-end">
                <div class="col-sm-5">
                    <div class="row">
                        <label class="col-sm-4 col-form-label my-1">Cibitung, </label>
                        <div class="col-sm-7 my-1">
                            <input id="divisi" type="date" class="form-control @error('divisi') is-invalid @enderror"
                                name="" />
                            @error('divisi')
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
                    <button type="submit" class="btn btn-primary mt-3">UPDATE</button>
                </div>
            </div>

    </form>


    <script>

    </script>
@endsection
