@extends('dashboard.layout.lte')

@section('title', 'Index Form Tukar Shift')

@section('content')

    <form action="{{ route('shift.store') }}" method="post">
        @csrf
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <div class="row">
                <h3>PT. LUCKY ABADI PRINT</h3>
                <h5>Ds. Sukadanau, Cikarang Barat, Bekasi</h5>
            </div>

        </div>
        <div class="row">
            <center>
                <h4>PERMOHONAN TUKAR SHIFT / LIBUR</h4>
            </center>
            {{-- </div> --}}
        </div>
        <hr>

        <div class="d-flex justify-content-start">
            <div class="col-sm-10">
                <div class="row">
                    <label class="col-sm-4 col-form-label my-2">Sehubungan dengan adanya keperluan</label>
                    <div class="col-sm-7 my-2">
                        <input id="keperluan" type="text" class="form-control @error('keperluan') is-invalid @enderror"
                            name="keperluan" />
                        @error('keperluan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
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

        <div class="d-flex justify-content-start">
            <div class="col-sm-8">
                <div class="row">
                    <label class="col-sm-4 col-form-label my-2">Maka dengan ini saya</label>
                    <div class="col-sm-7 my-2">
                    </div>
                    <label class="col-sm-2 col-form-label my-2"></label>
                    <label class="col-sm-2 col-form-label my-2">Nama</label>
                    <div class="col-sm-5 my-2">
                        <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" />
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-4 col-form-label "></label>
                    <div class="col-sm-7 ">
                    </div>
                    <label class="col-sm-2 col-form-label "></label>
                    <label class="col-sm-2 col-form-label ">NRP</label>
                    <div class="col-sm-5 ">
                        <input id="nrp" type="text" class="form-control @error('nrp') is-invalid @enderror" name="nrp" />
                        @error('nrp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-4 col-form-label "></label>
                    <div class="col-sm-7 ">
                    </div>
                    <label class="col-sm-2 col-form-label "></label>
                    <label class="col-sm-2 col-form-label ">Bagian</label>
                    <div class="col-sm-5 ">
                        <input id="bagian" type="text" class="form-control @error('bagian') is-invalid @enderror"
                            name="bagian" />
                        @error('bagian')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-4 col-form-label "></label>
                    <div class="col-sm-7 ">
                    </div>
                    <label class="col-sm-2 col-form-label "></label>
                    <label class="col-sm-2 col-form-label ">Divisi</label>
                    <div class="col-sm-5 ">
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
            <div class="col-sm-4">
                <label class="col-sm-4 col-form-label my-2"></label>
            </div>
        </div>
        <hr>

        <div class="d-flex justify-content-between">
            <div class="col-sm-4">
                <div class="row">
                    <label class="col-sm-2 col-form-label ">Tanggal</label>
                    <div class="col-sm-6 ">
                        <input type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" />
                        @error('tanggal')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="col-sm-7 ">
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <label class="col-sm-2 col-form-label">Shift</label>
                    <div class="col-sm-7 ">
                        <select name="shift" id="" class="form-select">
                            <option value="I">I</option>
                            <option value="II">II</option>
                            <option value="III">III</option>
                        </select>
                    </div>
                    <div class="col-sm-7 ">
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <label class="col-sm-4 col-form-label ">Ditukar Shift</label>
                    <div class="col-sm-7 ">
                        <select name="tukar_shift" id="" class="form-select">
                            <option value="I">I</option>
                            <option value="II">II</option>
                            <option value="III">III</option>
                        </select>
                    </div>
                    <div class="col-sm-7 ">
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <div class="d-flex justify-content-start">
            <div class="col-sm-8">
                <div class="row">
                    <label class="col-sm-4 col-form-label my-2">Sebagai karyawan pengganti</label>
                    <div class="col-sm-7 my-2">
                    </div>
                    <label class="col-sm-2 col-form-label my-2"></label>
                    <label class="col-sm-2 col-form-label my-2">Nama</label>
                    <div class="col-sm-5 my-2">
                        <input id="nama2" type="text" class="form-control @error('nama2') is-invalid @enderror"
                            name="nama2" />
                        @error('nama2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-4 col-form-label "></label>
                    <div class="col-sm-7 ">
                    </div>
                    <label class="col-sm-2 col-form-label "></label>
                    <label class="col-sm-2 col-form-label ">NRP</label>
                    <div class="col-sm-5 ">
                        <input id="nrp2" type="text" class="form-control @error('nrp2') is-invalid @enderror" name="nrp2" />
                        @error('nrp2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-4 col-form-label "></label>
                    <div class="col-sm-7 ">
                    </div>
                    <label class="col-sm-2 col-form-label "></label>
                    <label class="col-sm-2 col-form-label ">Bagian</label>
                    <div class="col-sm-5 ">
                        <input id="bagian2" type="text" class="form-control @error('bagian2') is-invalid @enderror"
                            name="bagian2" />
                        @error('bagian2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-4 col-form-label "></label>
                    <div class="col-sm-7 ">
                    </div>
                    <label class="col-sm-2 col-form-label "></label>
                    <label class="col-sm-2 col-form-label ">Divisi</label>
                    <div class="col-sm-5 ">
                        <input id="divisi2" type="text" class="form-control @error('divisi2') is-invalid @enderror"
                            name="divisi2" />
                        @error('divisi2')
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

        <hr class="my-3">
        <div class="d-flex justify-content-between">
            <div class="col-sm-6">
                <div class="row">
                    <label class="col-sm-2 col-form-label ">Tanggal</label>
                    <div class="col-sm-6 ">
                        <input type="date" class="form-control @error('masuk_kerja') is-invalid @enderror"
                            name="masuk_kerja" />
                        @error('masuk_kerja')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <label class="col-sm-4 col-form-label ">Masuk Kerja</label>
                    <div class="col-sm-7 ">
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <label class="col-sm-2 col-form-label ">Tanggal</label>
                    <div class="col-sm-6 ">
                        <input type="date" class="form-control @error('libur') is-invalid @enderror" name="libur" />
                        @error('libur')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <label class="col-sm-4 col-form-label ">Libur</label>
                    <div class="col-sm-7 ">
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-3">

        <div class="
                            d-flex justify-content-end mb-5">
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
