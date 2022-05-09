@extends('dashboard.layout.lte')

@section('title', 'Create Form Request Development')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 text-center">FORM REQUEST DEVELOPMENT (MKT)</h1>
    </div>

    <form action="/dashboard/formrequest" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="row">
            </div>
            <div class="d-flex justify-content-between">
                <div class="col-sm-6">
                    <div class="row">
                        <label class="col-sm-4 col-form-label my-2">DEV TYPE & L/T</label>
                        <div class="col-sm-7 my-2">
                            <select id="dev_model_id" class="form-select" name="dev_model_id" onchange="returnDueDate()">
                                @foreach ($dev_type as $dev)
                                    <option value="{{ $dev->id }}">{{ $dev->lead_time }} | {{ $dev->total_time }}
                                        DAYS </option>
                                @endforeach
                            </select>
                        </div>
                        <label class="col-sm-4 col-form-label my-2">DUE DATE</label>
                        <div class="col-sm-7 my-2">
                            <input id="due_date" type="date" class="form-control @error('due_date') is-invalid @enderror"
                                name="due_date" />
                            @error('due_date')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="mb-3 row">
                        <label class="col-sm-5 col-form-label my-2">DATE</label>
                        <div class="col-sm-7 my-2">
                            <input id="date_in" type="date" class="form-control @error('date_in') is-invalid @enderror"
                                name="date_in" />
                            @error('date_in')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <label class="col-sm-5 col-form-label my-2">No</label>
                        <div class="col-sm-7 my-2">
                            <input id="id_no" type="text" class="form-control @error('no') is-invalid @enderror" name="no"
                                value="{{ $nomer }}" readonly>
                            @error('no')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-sm mb-2">
                <h5>SUBJECT</h5>
                <hr>
            </div>
            <div class="col-sm-12">
                <textarea type="text" class="form-control @error('subject') is-invalid @enderror mb-3"
                    placeholder="DEVELOPMENT GREIGE TO FINISH" rows="5" cols="12" name="subject"></textarea>
                @error('subject')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <hr>

            <div class="col-sm-12 mb-2 mt-5">
                <h5>DESCRIPTION</h5>
                <hr>
            </div>


            <div class="d-flex justify-content-between">
                <div class="col-sm-6">
                    <div class="d-flex justify-content-start mt-1">
                        <div class="col-sm-4">
                            <h5>DEVELOPMENT</h5>
                        </div>
                        <div class="col-sm-4">
                            <div class="input-group mb-3">
                                <select class="form-select" id="inputGroupSelect03"
                                    aria-label="Example select with button addon" name="jenis_development1">
                                    <option selected>Pilih...</option>
                                    <option value="Greige">Greige</option>
                                    <option value="Finish">Finish</option>
                                    <option value="Greige Finish">Greige Finish</option>
                                    <option value="Greige PFD">Greige PFD</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" name="development1" id="" class="form-control ml-2">
                        </div>
                        <div class="col-sm-2 mx-3">
                            <h5>MTR</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="d-flex justify-content-start  mb-5">
                            <div class="col-sm-12">
                                <input type="text" class="form-control @error('dev_greige') is-invalid @enderror mt-5"
                                    name="dev_greige" />
                                @error('dev_greige')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex justify-content-start mt-1">
                            <div class="col-sm-4">
                                <h5>DEVELOPMENT</h5>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-group mb-3">
                                    <select class="form-select" id="inputGroupSelect03"
                                        aria-label="Example select with button addon" name="jenis_development2">
                                        <option selected>Pilih...</option>
                                        <option value="Greige">Greige</option>
                                        <option value="Finish">Finish</option>
                                        <option value="Greige Finish">Greige Finish</option>
                                        <option value="Greige PFD">Greige PFD</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <input type="text" name="development2" id="" class="form-control ml-2">
                            </div>
                            <div class="col-sm-3 mx-3">
                                <h5>MTR</h5>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start">
                            <div class="col-sm-12">
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label my-2">SOLID </label>
                                    <label class="col-sm-1 col-form-label my-2">: </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control @error('solid') is-invalid @enderror my-2"
                                            name="solid" />
                                        @error('dev_greige')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start">
                            <div class="col-sm-12">
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label ">QUALITY </label>
                                    <label class="col-sm-1 col-form-label ">: </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control @error('quality') is-invalid @enderror"
                                            name="quality" />
                                        @error('quality')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start">
                            <div class="col-sm-12">
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label ">SPECIAL FINISH </label>
                                    <label class="col-sm-1 col-form-label">: </label>
                                    <div class="col-sm-8">
                                        <input type="text"
                                            class="form-control @error('special_finish') is-invalid @enderror"
                                            name="special_finish" />
                                        @error('special_finish')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start">
                            <div class="col-sm-12">
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">END USE </label>
                                    <label class="col-sm-1 col-form-label">: </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control @error('end_use') is-invalid @enderror"
                                            name="end_use" />
                                        @error('end_use')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start mt-3">
                            <div class="col-sm-12">
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label fw-bold">NOTE</label>
                                    <label class="col-sm-1 col-form-label fw-bold">: </label>
                                    <label class="col-sm-8 col-form-label fw-bold">MOHON UNTUK ANALISA KEMBALI OLEH R&D
                                        TEAM</label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-3">
                            <div class="col-sm-8">
                                <textarea type="text" class="form-control @error('finishing') is-invalid @enderror mb-3" placeholder="" rows="5"
                                    cols="12" name="note"></textarea>
                                @error('finishing')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                {{-- <textarea name="note" id="note" cols="102" rows="10"></textarea> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="d-flex justify-content-start">
                            <div class="col-sm-12 ml-2">
                                <div class="mb-3 row">
                                    <label class="col-sm-3 ml-2 col-form-label" for="image">UPLOAD FILE </label>
                                    <label class="col-sm-1 col-form-label">: </label>
                                    <div class="col-sm-8 ml-2">
                                        <input type="file" class="form-control @error('image') is-invalid @enderror"
                                            name="image" id="image" onchange="previewImage(event)" />
                                        <img class="img-preview img-fluid mt-3" id="img">
                                        @error('image')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            {{-- FINISH CONSTRUCTION --}}
            <div class="d-flex justify-content-start mt-2">
                <div class="col-sm-12">
                    <div class="mb-3 row">
                        <label class="col-sm-4 col-form-label my-2">FINISHED CONSTRUCTION</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control @error('finished_cont') is-invalid @enderror my-2"
                                name="finished_cont" />
                            @error('finished_cont')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between">
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label ">WEAVE</label>
                        <div class="col-sm-7 ">
                            <input type="text" class="form-control @error('weave_cont') is-invalid @enderror"
                                name="weave_cont" />
                            @error('weave_cont')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <label class="col-sm-4 col-form-label "></label>
                        <div class="col-sm-7 ">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="mb-3 row">
                        <label class="col-sm-5 col-form-label ">FULL WIDTH</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('width_cont') is-invalid @enderror"
                                name="width_cont" />
                            @error('width_cont')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <label class="col-sm-5 col-form-label"></label>
                        <div class="col-sm-7">

                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="mb-3 row mx-2">
                        <label class="col-sm-5 col-form-label ">SHRINGKAGE (%)</label>
                        <div class="col-sm-7 ">
                            <input type="text" class="form-control @error('shringkage_cont') is-invalid @enderror"
                                name="shringkage_cont" />
                            @error('shringkage_cont')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between">
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label "></label>
                        <div class="col-sm-7 ">
                            {{-- <input type="text" class="form-control @error('weave_cont') is-invalid @enderror" name="weave_cont" /> --}}
                            {{-- @error('weave_cont')
                        <div class="invalid-feedback">
                        {{ $message }}
                        </div>
                        @enderror --}}
                        </div>
                        <label class="col-sm-4 col-form-label "></label>
                        <div class="col-sm-7 ">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="mb-3 row">
                        <label class="col-sm-5 col-form-label ">CUTT WIDTH</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('cutt_width') is-invalid @enderror"
                                name="cutt_width" />
                            @error('cutt_width')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <label class="col-sm-5 col-form-label"></label>
                        <div class="col-sm-7">

                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="mb-3 row mx-2">
                        <label class="col-sm-5 col-form-label "></label>
                        <div class="col-sm-7 ">
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between">
                <div class="col-sm-8">
                    <div class="mb-3 row">
                        <label class="col-sm-5 col-form-label my-2">FINISHING</label>
                        <div class="col-sm-7 my-2">
                            <input type="text" class="form-control @error('finishing_cont') is-invalid @enderror"
                                name="finishing_cont" />
                            @error('finishing_cont')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="mb-3 row mx-2">
                        <label class="col-sm-5 col-form-label my-2">WEIGHT (GSM)</label>
                        <div class="col-sm-7 my-2">
                            <input type="text" class="form-control @error('weight_cont') is-invalid @enderror"
                                name="weight_cont" />
                            @error('weight_cont')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <hr>

            {{-- greige --}}
            <div class="d-flex justify-content-start mt-2">
                <div class="col-sm-12">
                    <div class="mb-3 row">
                        <label class="col-sm-4 col-form-label my-2">GREIGE CONSTRUCTION :</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control @error('greige_contruction') is-invalid @enderror my-2"
                                name="greige_contruction" />
                            @error('greige_contruction')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between">
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label my-2">WEAVE</label>
                        <div class="col-sm-7 my-2">
                            <input type="text" class="form-control @error('weave_greige') is-invalid @enderror"
                                name="weave_greige" />
                            @error('weave_greige')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <label class="col-sm-4 col-form-label my-2"></label>
                        <div class="col-sm-7 my-2">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="mb-3 row">
                        <label class="col-sm-5 col-form-label my-2">WIDTH(INCH)</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('width_greige') is-invalid @enderror"
                                name="width_greige" />
                            @error('width_greige')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <label class="col-sm-5 col-form-label"></label>
                        <div class="col-sm-7">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="mb-3 row mx-2">
                        <label class="col-sm-5 col-form-label my-2">WEIGHT(GSM)</label>
                        <div class="col-sm-7 my-2">
                            <input type="text" class="form-control @error('weight_greige') is-invalid @enderror"
                                name="weight_greige" />
                            @error('weight_greige')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <hr>

            {{-- Yarn --}}
            <div class="d-flex justify-content-start mt-2">
                <div class="col-sm-12">
                    <div class="mb-3 row">
                        <label class="col-sm-4 col-form-label my-2">YARN DESCRIPTION</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control @error('yarn_description') is-invalid @enderror my-2"
                                name="yarn_description" />
                            @error('yarn_description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between">
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label my-2">YARN COUNT</label>
                        <div class="col-sm-7 my-2">
                            <input type="text" class="form-control @error('yarn_count') is-invalid @enderror"
                                name="yarn_count" />
                            @error('yarn_count')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="mb-3 row">
                        <label class="col-sm-5 col-form-label my-2">(NE/DENIER)</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('ne_denier') is-invalid @enderror"
                                name="ne_denier" />
                            @error('ne_denier')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="mb-3 row mx-2">
                        <label class="col-sm-5 col-form-label my-2">WEIGHT(GSM)</label>
                        <div class="col-sm-7 my-2">
                            <input type="text" class="form-control @error('weight_yarn') is-invalid @enderror"
                                name="weight_yarn" />
                            @error('weight_yarn')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row justify-content-center">
                <div class="d-flex justify-content-between">
                    <div class="col-sm-8 mx-2">
                        <label class="col-sm-4 col-form-label my-2">STATUS</label>
                        <select class="form-select" id="inputGroupSelect01" name="status">
                            <option value="Waiting Approval" disabled>Membuat Form Development Sales</option>
                            <option value="Mencari/Membawa Acuan" disabled>Mencari/Membawa Acuan</option>
                            <option value="Menganalisa Form Development Dari Sales">Menganalisa Form
                                Development Dari Sales
                            </option>
                            <option value="Menganalisa Acuan Dari Sales">Menganalisa Acuan Dari Sales
                            </option>
                            <option value="Mencari Acuan Yang Mirip Dengan Yang Diminta
                                                                                                Oleh Sales">Mencari Acuan
                                Yang
                                Mirip
                                Dengan
                                Yang
                                Diminta
                                Oleh Sales</option>
                            <option value="Membuat Form Request Development Ke Qard">Membuat Form Request
                                Development Ke Qard
                            </option>
                            <option value="Menganalisa Form Request Development Dari
                                                                                                Marketing" disabled>
                                Menganalisa
                                Form
                                Request
                                Development
                                Dari
                                Marketing</option>
                            <option value="Menganalisa Acuan Dari Marketing" disabled>Menganalisa Acuan Dari
                                Marketing</option>
                            <option
                                value="Menuju BCI Untuk Analisa Lebih Lanjut,
                                                                                                Mengirim Form Permohonan Test"
                                disabled>
                                Menuju
                                BCI
                                Untuk
                                Analisa
                                Lebih
                                Lanjut,
                                Mengirim Form Permohonan Test</option>
                            <option value="Meminta Untuk Membuat Article Ke Weaving" disabled>Meminta Untuk Membuat
                                Article Ke Weaving
                            </option>
                            <option value="Mengajukan Pp Yarn Ke Purcashing Jika Weaving
                                                                                            Bisa Memproduksi Greige"
                                disabled>
                                Mengajukan Pp
                                Yarn Ke
                                Purcashing
                                Jika
                                Weaving
                                Bisa Memproduksi Greige</option>
                            <option value="Mengajukan Permohonan Ke Bci (Stock Yarn Di
                                                                                            Gudang Tidak Mencukupi)"
                                disabled>
                                Mengajukan
                                Permohonan
                                Ke
                                Bci
                                (Stock
                                Yarn
                                Di
                                Gudang Tidak Mencukupi)</option>
                            <option value="Mengajukan Pp Greige (Weaving Tidak Bisa
                                                                                            Membuatkan Article)" disabled>
                                Mengajukan Pp
                                Greige
                                (Weaving
                                Tidak
                                Bisa
                                Membuatkan Article)</option>
                            <option value="Qard Membuat Permohonan Purchase Greige" disabled>Qard Membuat Permohonan
                                Purchase
                                Greige</option>
                            <option value="Membuat Op Finishing" disabled>Membuat Op Finishing</option>
                            <option value="Membuat Development Report" disabled>Membuat Development Report</option>
                            <option value="Meminta Approval Ke Accounting Dan Purchasing" disabled>Meminta Approval
                                Ke
                                Accounting Dan Purchasing</option>
                            <option value="Mengecek Form Permohonan Test Dari Qard" disabled>Mengecek Form
                                Permohonan Test
                                Dari Qard</option>
                            <option value="Menganalisa Acuan Dari Qard" disabled>Menganalisa Acuan Dari Qard
                            </option>
                            <option value="Memberi Hasil Test Report Ke Qard" disabled>Memberi Hasil Test Report Ke
                                Qard
                            </option>
                            <option value="Memuat Yarn Sesuai Permohonan Qard" disabled>Memuat Yarn Sesuai
                                Permohonan Qard
                            </option>
                            <option value="Menerima Form Development Request Dan Acuan Dari Qard" disabled>Menerima
                                Form
                                Development Request Dan Acuan Dari Qard</option>
                            <option value="Menganalisa Acuan Dari Qard" disabled>Menganalisa Acuan Dari Qard
                            </option>
                            <option value="Memberi Jawaban Bisa Di Weaving Atau Tidak" disabled>Memberi Jawaban Bisa
                                Di
                                Weaving Atau Tidak</option>
                            <option value="Jika Bisa Cek Ketersediaan Stock Benang Ke Gudang" disabled>Jika Bisa Cek
                                Ketersediaan Stock Benang Ke Gudang</option>
                            <option value="Meminta Qard Membuat Pp Yarn " disabled>Meminta Qard Membuat Pp Yarn
                                (Benang Tidak
                                Tersedia Atau Kurang)</option>
                            <option value="Memberi Approve Qard Dan Marketing" disabled>Memberi Approve Qard Dan
                                Marketing
                            </option>
                            <option value="Membuat Article Yang Diminta Qard" disabled>Membuat Article Yang Diminta
                                Qard
                            </option>

                        </select>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row justify-content-center">
                <div class="d-flex justify-content-between">
                    <div class="col-sm-4 mx-2">
                        {{-- Card Pembuat Form --}}
                        <div class="card text-center w-100">
                            <div class="card-header">
                                REQUESTED BY
                            </div>
                            <div class="row justify-content-center">
                                <div class="d-flex justify-content-between">
                                    <div class="col-sm-6">
                                        <div class="card-body">
                                            <div class="form-check form-switch d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox"
                                                    id="flexSwitchCheckDefault">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card-body">
                                            <div class="form-check form-switch d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox"
                                                    id="flexSwitchCheckDefault">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="d-flex justify-content-between">
                                    <div class="col-sm-6 ">
                                        <div class="card-footer text-muted">
                                            {{ auth()->user()->employee_name }}
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card-footer text-muted">
                                            FABRIC DEV
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 mx-2">
                        {{-- Card Pembuat Form --}}
                        <div class="card text-center w-100">
                            <div class="card-header">
                                ACKNOWLEDGE BY
                            </div>
                            <div class="row justify-content-center">
                                <div class="d-flex justify-content-between">
                                    <div class="col-sm-6">
                                        <div class="card-body">
                                            <div class="form-check form-switch d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox"
                                                    id="flexSwitchCheckDefault">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card-body">
                                            <div class="form-check form-switch d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox"
                                                    id="flexSwitchCheckDefault">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="d-flex justify-content-between">
                                    <div class="col-sm-6 ">
                                        <div class="card-footer text-muted">
                                            DM MARKETING
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card-footer text-muted">
                                            COMERSIAL GM
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 mx-2">
                        {{-- Card Pembuat Form --}}
                        <div class="card text-center w-100">
                            <div class="card-header">
                                APPROVED BY
                            </div>
                            <div class="card-body">
                                <div class="form-check form-switch d-flex justify-content-center">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault"
                                        value="Yes">
                                </div>
                            </div>
                            <div class="card-footer text-muted">
                                MANAGING DIRECTOR
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-end my-5">
                <div class="col-sm-1">
                    <button type="submit" class="btn btn-primary">SUBMIT</button>
                </div>
            </div>
    </form>

    <script>
        $(document).ready(function() {
            /* Algoritma: return realtime duedate
                1. init `DATE` dan `DUE DATE` ke hari ini.
                2. baca `DEV TYPE`, potong string, ubah ke integer.
                    (opsional: gunakan custom option text)
                3. tambah `DATE` dengan integer.
                4. set `DUE DATE` dari hasil penambahan `DATE` dengan integer.
                5. `DATE` onchange: ulangi step 2,3,4
            */
            // 1.
            // now (0,10): "YYYY-MM-DD"
            // now (0,19): "YYYY-MM-DD HH:mm:ss"
            const date = new Date().toISOString().substr(0, 10).replace('T', ' ');
            $('#date_in').val(date);
            console.log('now: ' + $('#date_in').val());
            // 2, 3, 4
            calcDueDate();
            // onchanged elements function call
            $('#dev_model_id').on('change', function(e) {
                calcDueDate();
            });
            $('#date_in').on('change', function(e) {
                calcDueDate();
            });
        })

        function calcDueDate() {
            // 2.
            let days = $('#dev_model_id option:selected').text(); // get text of selected id_dev
            days = parseInt(days.substring(4, 6));
            // adjust due date
            let adjustedDate = new Date($('#date_in').val());
            adjustedDate.setDate(adjustedDate.getDate() + days); // 3. adjust
            adjustedDate = adjustedDate.toISOString().substr(0, 10).replace('T', ' '); // format
            $('#due_date').val(adjustedDate); // 4. set
            console.log('adjustedDate: ' + adjustedDate);
        }

        function previewImage(event) {
            let reader = new FileReader();
            reader.onload = function() {
                let output = document.getElementById('img');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endsection
