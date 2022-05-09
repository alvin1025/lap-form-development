@extends('dashboard.layout.lte')

@section('title', 'Index Form Pemeriksaan Dokter')

@section('content')

    <form action="{{ route('dokter.update', ['dokter' => $dokter->id]) }}" method="post">
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
                <h4>SURAT PENGANTAR PEMERIKSAAN KESEHATAN</h4>
                <h5>DI POLIKLINIK</h5>
            </center>
            {{-- </div> --}}
        </div>
        <hr>
        <div class="d-flex justify-content-start">
            <div class="col-sm-6">
                <div class="row">
                    <label class="col-sm-4 col-form-label ">Kepada Yth,</label>
                    <div class="col-sm-7 ">
                    </div>
                    <label class="col-sm-2 col-form-label "></label>
                    <label class="col-sm-2 col-form-label ">Dokter</label>
                    <div class="col-sm-5 ">
                        <input id="dokter" type="text" class="form-control @error('dokter') is-invalid @enderror"
                            name="dokter" value="{{ $dokter->dokter }}" />
                        @error('dokter')
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
                    <label class="col-sm-2 col-form-label ">Di Tempat</label>
                </div>
                <div class="row">
                    <label class="col-sm-4 col-form-label my-2">Dengan Hormat,</label>
                    <div class="col-sm-7 ">
                    </div>
                    <label class="col-sm-2 col-form-label "></label>
                    <label class="col-sm-2 col-form-label "></label>
                </div>
                <div class="row">
                    <label class="col-sm-8 col-form-label">Mohon diperiksa kesehatan Calon Karyawan ini :</label>
                    <label class="col-sm-2 col-form-label "></label>
                    <label class="col-sm-2 col-form-label "></label>
                </div>
                <div class="row">
                    <label class="col-sm-4 col-form-label my-2">Nama</label>
                    <div class="col-sm-7 ">
                        <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror my-2"
                            name="nama" value="{{ $dokter->nama }}" />
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-4 col-form-label my-2">Jenis Kelamin</label>
                    <div class="col-sm-7 ">
                        <select name="jenis_kelamin" id=""
                            class="form-select @error('jenis_kelamin') is-invalid @enderror my-2">
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        @error('jenis_kelamin')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-4 col-form-label my-2">Usia</label>
                    <div class="col-sm-7 ">
                        <input id="usia" type="text" class="form-control @error('usia') is-invalid @enderror my-2"
                            name="usia" value="{{ $dokter->usia }}" />
                        @error('usia')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-4 col-form-label my-2">Bagian</label>
                    <div class="col-sm-7 ">
                        <input id="bagian" type="text" class="form-control @error('bagian') is-invalid @enderror my-2"
                            name="bagian" value="{{ $dokter->bagian }}" />
                        @error('bagian')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-4 col-form-label my-2">Level</label>
                    <div class="col-sm-7 ">
                        <input id="level" type="text" class="form-control @error('level') is-invalid @enderror my-2"
                            name="level" value="{{ $dokter->level }}" />
                        @error('level')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row my-3">
                    <label class="col-sm-10 col-form-label">Atas perhatian dan kerjasamannya diucapkan terima kasih.</label>
                    <label class="col-sm-2 col-form-label "></label>
                </div>
                <div class="row">
                    <label class="col-sm-3 col-form-label my-2">Cikarang Barat,</label>
                    <div class="col-sm-5 ">
                        <input id="tanggal" type="date" class="form-control @error('tanggal') is-invalid @enderror my-2"
                            name="tanggal" value="{{ $dokter->tanggal }}" />
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
