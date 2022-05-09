@extends('dashboard.layout.lte')

@section('title', 'Create Form Development Request')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h3 class="h2 text-center">FORM DEVELOPMENT REQUEST(SALES)</h3>
    </div>
    <form action="{{ route('sales.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-center">
            <div class="d-flex justify-content-between">
                <div class="col-sm-6">
                    <div class="row">
                        <input type="hidden" name="form_request_development_id">
                        <label class="col-sm-4 col-form-label my-2">NO</label>
                        <div class="col-sm-7 my-2">
                            <input type="text" class="form-control" name="no" value="{{ $nomer }}" readonly />
                        </div>
                        <label class="col-sm-4 col-form-label my-2">DATE</label>
                        <div class="col-sm-7 my-2">
                            <input type="date" class="form-control @error('date') is-invalid @enderror" name="date"
                                id="date" />
                            @error('date')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <label class="col-sm-4 col-form-label my-2">NAME</label>
                        <div class="col-sm-7 my-2">
                            <input type="text" readonly
                                value="{{ auth()->user()->employee_name }}/{{ auth()->user()->division }}" name="name"
                                class="form-control @error('name') is-invalid @enderror">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <label class="col-sm-4 col-form-label my-2">CUSTOMER</label>
                        <div class="col-sm-7 my-2">
                            <input type="text" class="form-control @error('customer') is-invalid @enderror"
                                name="customer" />
                            @error('customer')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-form-label my-2">OPPORTUNITY ORDER</label>
                        <div class="col-sm-7 my-2">
                            <input type="text" class="form-control @error('opportunity_order') is-invalid @enderror"
                                name="opportunity_order" />
                            @error('opportunity_order')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <label class="col-sm-4 col-form-label my-2">TARGET DATE</label>
                        <div class="col-sm-7 my-2">
                            <input type="date" class="form-control @error('target_date') is-invalid @enderror"
                                name="target_date" />
                            @error('target_date')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <hr class="mt-2">
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-form-label my-2">PURPOSE </label>
                        <div class="col-sm-7 my-2">
                            <input type="text" class="form-control @error('purpose') is-invalid @enderror" name="purpose" />
                            @error('purpose')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <hr class="mt-4">
                    </div>
                    <div class="row">
                        <div class="col-sm-2 my-2">
                            <label for="">DETAILS</label>
                        </div>
                        <div class="col-sm-10 mt-4">
                            <div class="mb-3 row">
                                <label class="col-sm-4 col-form-label my-2">ARTICLE CODE</label>
                                <div class="col-sm-4 ">
                                    <div class="form-check form-check-inline mt-3">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio1" value="1" onclick="hideShowDiv(1)" />
                                        <label class="form-check-label" for="inlineRadio1">YES</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="2" onclick="hideShowDiv(2)" value="Null" />
                                        <label class="form-check-label" for="inlineRadio2">NO</label>
                                    </div>
                                </div>
                                <div class="col-sm-4 " id="show">
                                    <input type="text" class="form-control my-2 @error('article_code') is-invalid @enderror"
                                        name="article_code" />
                                    @error('article_code')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-4 col-form-label my-2">WIDTH</label>
                                <div class="col-sm-5 ">
                                    <div class="form-check form-check-inline mt-3">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Greige"
                                            name="width">
                                        <label class="form-check-label" for="inlineCheckbox1">GREIGE</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Finish"
                                            name="width">
                                        <label class="form-check-label" for="inlineCheckbox2">FINISH</label>
                                    </div>
                                </div>
                                <div class="col-sm-3 ">
                                    <input type="text" class="form-control my-2 @error('width_value') is-invalid @enderror"
                                        name="width_value" />
                                    @error('width_value')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-4 col-form-label my-2">SAMPLE</label>
                                <div class="col-sm-8 ">
                                    <div class="form-check form-check-inline mt-3">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="YES"
                                            name="sample">
                                        <label class="form-check-label" for="inlineCheckbox1">YES</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="NO"
                                            name="sample">
                                        <label class="form-check-label" for="inlineCheckbox2">NO</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-4 col-form-label my-2">HANDFEEL TARGET</label>
                                <div class="col-sm-4 ">
                                    <div class="form-check form-check-inline mt-3">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio1" value="YES" name="handfeel_target" />
                                        <label class="form-check-label" for="inlineRadio1">YES</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="NO" name="handfeel_target" />
                                        <label class="form-check-label" for="inlineRadio2">NO</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-4 col-form-label my-2">END USE</label>
                                <div class="col-sm-8 ">
                                    <input type="text" class="form-control my-2 @error('end_use') is-invalid @enderror"
                                        name="end_use" />
                                    @error('end_use')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-4 col-form-label my-2">REQUEST DESIGN</label>
                                <div class="col-sm-4 ">
                                    <div class="form-check form-check-inline mt-3">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio1" value="3" onclick="hideShowDiv(3)" />
                                        <label class="form-check-label" for="inlineRadio1">YES</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="4" onclick="hideShowDiv(4)" />
                                        <label class="form-check-label" for="inlineRadio2">NO</label>
                                    </div>
                                </div>
                                <div class="col-sm-4 " id="rd">
                                    <input type="text"
                                        class="form-control my-2 @error('request_design') is-invalid @enderror"
                                        name="request_design" />
                                    @error('request_design')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-4 col-form-label my-2">REQUEST COLOR</label>
                                <div class="col-sm-4 ">
                                    <div class="form-check form-check-inline mt-3">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio1" value="5" onclick="hideShowDiv(5)" />
                                        <label class="form-check-label" for="inlineRadio1">YES</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="6" onclick="hideShowDiv(6)" />
                                        <label class="form-check-label" for="inlineRadio2">NO</label>
                                    </div>
                                </div>
                                <div class="col-sm-4 " id="rc">
                                    <input type="text"
                                        class="form-control my-2 @error('request_color') is-invalid @enderror"
                                        name="request_color" />
                                    @error('request_color')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-4 col-form-label my-2">SPECIAL FINISH</label>
                                <div class="col-sm-4 ">
                                    <div class="form-check form-check-inline mt-3">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio1" value="7" onclick="hideShowDiv(7)" />
                                        <label class="form-check-label" for="inlineRadio1">YES</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="8" onclick="hideShowDiv(8)" />
                                        <label class="form-check-label" for="inlineRadio2">NO</label>
                                    </div>
                                </div>
                                <div class="col-sm-4 " id="sf">
                                    <input type="text"
                                        class="form-control my-2 @error('special_finish') is-invalid @enderror"
                                        name="special_finish" />
                                    @error('special_finish')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-4 col-form-label my-2">SHRINGKAGE</label>
                                <div class="col-sm-8 ">
                                    <div class="form-check form-check-inline mt-3">
                                        <input class="form-check-input" type="radio" name="shrinkage" id="inlineRadio1"
                                            value="A" />
                                        <label class="form-check-label" for="inlineRadio1">A</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="shrinkage" id="inlineRadio2"
                                            value="B" />
                                        <label class="form-check-label" for="inlineRadio2">B</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-4 col-form-label my-2">SAMPLE NEEDED</label>
                                <div class="col-sm-4 ">
                                    <div class="form-check form-check-inline mt-3">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Hanger"
                                            name="sample_needed">
                                        <small><label class="form-check-label" for="inlineCheckbox1">HANGER</label></small>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                            value="Yardage" name="sample_needed">
                                        <small><label class="form-check-label "
                                                for="inlineCheckbox2">YARDAGE</label></small>
                                    </div>
                                </div>
                                <div class="col-sm-4 ">
                                    <input type="text"
                                        class="form-control my-2  @error('sample_needed_value') is-invalid @enderror"
                                        name="sample_needed_value" />
                                    @error('sample_needed_value')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="input-group mb-3 row">
                                <label class="col-sm-4 col-form-label my-2">Status</label>
                                <select class="form-select" id="inputGroupSelect01" name="status">
                                    <option value="Membuat Form Development Sales">Membuat Form Development Sales
                                    </option>
                                    <option value="Mencari/Membawa Acuan">Mencari/Membawa Acuan</option>
                                    <option value="Membuat Form Development Sales Ke Maketing">Membuat Form Development
                                        Sales Ke Maketing</option>
                                    <option value="Menganalisa Form Development Dari Sales" disabled>Menganalisa Form
                                        Development Dari Sales
                                    </option>
                                    <option value="Menganalisa Acuan Dari Sales" disabled>Menganalisa Acuan Dari Sales
                                    </option>
                                    <option value="Mencari Acuan Yang Mirip Dengan Yang Diminta
                                                                                                        Oleh Sales"
                                        disabled>
                                        Mencari
                                        Acuan
                                        Yang
                                        Mirip
                                        Dengan
                                        Yang
                                        Diminta
                                        Oleh Sales</option>
                                    <option value="Membuat Form Request Development Ke Qard" disabled>Membuat Form Request
                                        Development Ke Qard
                                    </option>
                                    <option value="Menganalisa Form Request Development Dari
                                                                                                        Marketing"
                                        disabled>
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
                                    <option
                                        value="Mengajukan Pp Yarn Ke Purcashing Jika Weaving
                                                                                                    Bisa Memproduksi Greige"
                                        disabled>
                                        Mengajukan Pp
                                        Yarn Ke
                                        Purcashing
                                        Jika
                                        Weaving
                                        Bisa Memproduksi Greige</option>
                                    <option
                                        value="Mengajukan Permohonan Ke Bci (Stock Yarn Di
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
                                                                                                    Membuatkan Article)"
                                        disabled>
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
                </div>
                <div class="col-sm-5">
                    <div class="row">
                        <textarea type="text" class="form-control mb-3 my-2 mx-2" placeholder="ADDITIONAL INFORMATION :" rows="13" cols="5"
                            name="note"></textarea>
                    </div>
                    {{-- <div class="row">
                        <textarea type="text" class="form-control mb-3 my-2 mx-2" placeholder="ADDITIONAL INFORMATION :" rows="10" cols="5"
                            name="note"></textarea>
                    </div> --}}

                    <div class="row justify-content-center">
                        <div class="d-flex justify-content-between">
                            <div class="col-sm-6 mx-2">
                                {{-- Card Pembuat Form --}}
                                <div class="card text-center w-100">
                                    <div class="card-header">
                                        REQUESTED BY
                                    </div>
                                    <div class="card-body">
                                        <div class="form-check form-switch d-flex justify-content-center">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                        </div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        {{ auth()->user()->employee_name }}/{{ auth()->user()->division }}
                                    </div>
                                </div>


                                {{-- DM Sales --}}
                                <div class="card text-center w-100 mt-3">
                                    <div class="card-header">
                                        CHECKED BY
                                    </div>
                                    <div class="card-body">
                                        <div class="form-check form-switch d-flex justify-content-center">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                        </div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        SALES MANAGER
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                {{-- Card Pembuat Form --}}
                                <div class="card text-center w-100">
                                    <div class="card-header">
                                        ACKNOWLEDGED
                                    </div>
                                    <div class="card-body">
                                        <div class="form-check form-switch d-flex justify-content-center">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                        </div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        {{ auth()->user()->employee_name }}/{{ auth()->user()->division }}
                                    </div>
                                </div>

                                {{-- DM Sales --}}
                                <div class="card text-center w-100 mt-3">
                                    <div class="card-header">
                                        APPROVED BY
                                    </div>
                                    <div class="card-body">
                                        <div class="form-check form-switch d-flex justify-content-center">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                        </div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        {{ auth()->user()->employee_name }}/{{ auth()->user()->division }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>






                </div>

            </div>

            <div class="d-flex justify-content-end mb-5">
                <div class="col-sm-1">
                    <button type="submit" class="btn btn-primary">SUBMIT</button>
                </div>
            </div>
    </form>


    <script>
        function hideShowDiv(val) {
            if (val == 1) {
                document.getElementById('show').style.display = 'block';
            }
            if (val == 2) {
                document.getElementById('show').style.display = 'none';
            }
            if (val == 3) {
                document.getElementById('rd').style.display = 'block';
            }
            if (val == 4) {
                document.getElementById('rd').style.display = 'none';
            }
            if (val == 5) {
                document.getElementById('rc').style.display = 'block';
            }
            if (val == 6) {
                document.getElementById('rc').style.display = 'none';
            }
            if (val == 7) {
                document.getElementById('sf').style.display = 'block';
            }
            if (val == 8) {
                document.getElementById('sf').style.display = 'none';
            }
        }

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
            $('#date').val(date);
            console.log('now: ' + $('#date').val());
            // 2, 3, 4
            calcDueDate();
            // onchanged elements function call
            $('#date').on('change', function(e) {
                calcDueDate();
            });
        })
    </script>
@endsection
