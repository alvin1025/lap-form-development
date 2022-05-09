@extends('dashboard.layout.lte')

@section('title', 'Create Instruktur Training')

@section('content')

    <form action="{{ route('instruktur.store') }}" method="post">
        @csrf
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <div class="row">
                {{-- Take Header in Here --}}
            </div>

        </div>
        <div class="row">
            <h4 class="">PT. LUCKY TEXTILE GROUP</h4>
            {{-- </div> --}}
        </div>
        <hr>

        <div class="d-flex justify-content-start">
            <div class="col-sm-6">
                <div class="row">
                    <label class="col-sm-3 col-form-label">Perihal</label>
                    <div class="col-sm-6">
                        <input id="perihal" type="text" class="form-control @error('perihal') is-invalid @enderror"
                            name="perihal" />
                        @error('perihal')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>



        <div class="d-flex justify-content-start mt-3">
            <div class="col-sm-10">
                <div class="row">
                    <label class="col-sm-4 col-form-label ">Kepada Yth. </label>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <input id="nama_trainer" type="text"
                            class="form-control @error('nama_trainer') is-invalid @enderror" name="nama_trainer" />
                        @error('nama_trainer')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-4 col-form-label ">Di Tempat</label>
                </div>
                <div class="row">
                    <label class="col-sm-4 col-form-label mt-4">Dengan Hormat,</label>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-start">
            <div class="col-sm-2">
                <div class="row">
                    <label class="col-sm-12 col-form-label ">Sehubungan dengan adanya </label>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="row">
                    <div class="col-sm-11">
                        <input id="nama_training" type="text"
                            class="form-control @error('nama_training') is-invalid @enderror" name="nama_training"
                            value="" />
                        @error('nama_training')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="row">
                    <label class="col-sm-10 col-form-label "> yang akan dilaksanakan pada:</label>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-start mt-3">
            <div class="col-sm-10">
                <div class="row">
                    <label class="col-sm-4 col-form-label" style="font-weight: bold">Batch 1</label>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-start">
            <div class="col-sm-6">
                <div class="row">
                    <label class="col-sm-4 col-form-label my-2">Hari/Tanggal</label>
                    <div class="col-sm-4 my-2">
                        <input id="hari1" type="text" class="form-control @error('hari1') is-invalid @enderror"
                            name="hari1" />
                        @error('hari1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-4 my-2">
                        <input id="tanggal1" type="date" class="form-control @error('tanggal1') is-invalid @enderror"
                            name="tanggal1" />
                        @error('tanggal1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-start">
            <div class="col-sm-6">
                <div class="row">
                    <label class="col-sm-4 col-form-label my-2">Waktu</label>
                    <div class="col-sm-8 my-2">
                        <input id="waktu1" type="text" class="form-control @error('waktu1') is-invalid @enderror"
                            name="waktu1" />
                        @error('waktu1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-4 col-form-label my-2">Tempat</label>
                    <div class="col-sm-8 my-2">
                        <input id="tempat1" type="text" class="form-control @error('tempat1') is-invalid @enderror"
                            name="tempat1" />
                        @error('tempat1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-4 col-form-label my-2">Peserta</label>
                    <div class="col-sm-8 my-2">
                        <input id="peserta1" type="text" class="form-control @error('peserta1') is-invalid @enderror"
                            name="peserta1" />
                        @error('peserta1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-start mt-3">
            <div class="col-sm-10">
                <div class="row">
                    <label class="col-sm-4 col-form-label" style="font-weight: bold">Batch 2</label>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-start">
            <div class="col-sm-6">
                <div class="row">
                    <label class="col-sm-4 col-form-label my-2">Hari/Tanggal</label>
                    <div class="col-sm-4 my-2">
                        <input id="hari2" type="text" class="form-control @error('hari2') is-invalid @enderror"
                            name="hari2" />
                        @error('hari2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-4 my-2">
                        <input id="tanggal2" type="date" class="form-control @error('tanggal2') is-invalid @enderror"
                            name="tanggal2" />
                        @error('tanggal2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-start">
            <div class="col-sm-6">
                <div class="row">
                    <label class="col-sm-4 col-form-label my-2">Waktu</label>
                    <div class="col-sm-8 my-2">
                        <input id="waktu2" type="text" class="form-control @error('waktu2') is-invalid @enderror"
                            name="waktu2" />
                        @error('waktu2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-4 col-form-label my-2">Tempat</label>
                    <div class="col-sm-8 my-2">
                        <input id="tempat2" type="text" class="form-control @error('tempat2') is-invalid @enderror"
                            name="tempat2" />
                        @error('tempat2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-4 col-form-label my-2">Peserta</label>
                    <div class="col-sm-8 my-2">
                        <input id="peserta2" type="text" class="form-control @error('peserta2') is-invalid @enderror"
                            name="peserta2" />
                        @error('peserta2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>





        <div class="d-flex justify-content-start mt-3">
            <div class="col-sm-10">
                <div class="row">
                    <p class="text-justify">Dengan ini kami mohon Bapak/Ibu untuk menjadi instruktur training tersebut
                        sesuai dengan schedule Training.</p>
                </div>
                <div class="row">
                    <p class="text-justify">Demikian permohonan kami sampaikan, atas bantuan dan kerjasamanya kami
                        ucapkan terima kasih.</p>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-end mt-3">
            <div class="col-sm-4">
                <div class="row">
                    <label class="col-sm-4 col-form-label my-2">Cikarang Barat,</label>
                    <div class="col-sm-5 my-2">
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


        <div class="
                            d-flex justify-content-end mb-5">
            <div class="col-sm-1">
                <button type="submit" class="btn btn-primary">SUBMIT</button>
            </div>
        </div>
    </form>



@endsection
