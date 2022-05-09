@extends('dashboard.layout.lte')

@section('title', 'Update Pengantar Karyawan Baru')

@section('content')

    <form action="{{ route('karyawanBaru.update', ['karyawanBaru' => $karyawanBaru->id]) }}" method="post">
        @csrf
        @method('put')
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <div class="row">
                <h3>PT. LUCKY ABADI PRINT</h3>
                <h5>Ds. Sukadanau, Cikarang Barat, Bekasi</h5>
            </div>

        </div>
        <div class="row">
            <h4 class="text-center">SURAT PENGANTAR PENERIMAAN KARYAWAN BARU</h4>
            {{-- </div> --}}
        </div>
        <hr>

        <div class="d-flex justify-content-start">
            <div class="col-sm-10">
                <div class="row">
                    <label class="col-sm-4 col-form-label ">Kepada Yth. </label>
                </div>
                <div class="row">
                    <label class="col-sm-4 col-form-label ">Bag. </label>
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
            <div class="col-sm-4">
                <div class="row">
                    <label class="col-sm-10 col-form-label ">Sesuai dengan Permohonan tenaga kerja No :</label>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="row">
                    <div class="col-sm-10">
                        <input id="no" type="text" class="form-control @error('no') is-invalid @enderror" name="no"
                            value="{{ $karyawanBaru->no }}" />
                        @error('no')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="row">
                    <label class="col-sm-10 col-form-label ">, mohon diterima untuk bekerja Karyawan berikut :</label>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-start mt-5">
            <div class="col-sm-6">
                <div class="row">
                    <label class="col-sm-4 col-form-label">Nama</label>
                    <div class="col-sm-8">
                        <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                            value="{{ $karyawanBaru->nama }}" />
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mx-4">
                <div class="mb-4 row">
                    <label class="col-sm-5 col-form-label">Nrp</label>
                    <div class="col-sm-7">
                        <input id="nrp" type="text" class="form-control @error('nrp') is-invalid @enderror" name="nrp"
                            value="{{ $karyawanBaru->nrp }}" />
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
            <div class="col-sm-6">
                <div class="row">
                    <label class="col-sm-4 col-form-label my-2">Mulai Masuk Bekerja </label>
                    <div class="col-sm-8 my-2">
                        <input id="mulai_kerja" type="text" class="form-control @error('mulai_kerja') is-invalid @enderror"
                            name="mulai_kerja" value="{{ $karyawanBaru->mulai_kerja }}" />
                        @error('mulai_kerja')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-4 col-form-label my-2">Jenis Kelamin</label>
                    <div class="col-sm-8 my-2">
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
                    <label class="col-sm-4 col-form-label my-2">Bagian/Divisi</label>
                    <div class="col-sm-4 my-2">
                        <input id="bagian" type="text" class="form-control @error('bagian') is-invalid @enderror"
                            name="bagian" value="{{ $karyawanBaru->bagian }}" />
                        @error('bagian')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-4 my-2">
                        <input id="divisi" type="text" class="form-control @error('divisi') is-invalid @enderror"
                            name="divisi" value="{{ $karyawanBaru->divisi }}" />
                        @error('divisi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-4 col-form-label my-2">Level</label>
                    <div class="col-sm-8 my-2">
                        <input id="level" type="text" class="form-control @error('level') is-invalid @enderror" name="level"
                            value="{{ $karyawanBaru->level }}" />
                        @error('level')
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
                    <p class="text-justify">Selanjutnya kami mohon laporan Penilaian masa kontrak dikirim ke
                        Bagian Recruitment & Career Planning setiap periode penilaian ( setiap akhir bulan berjalan
                        ).</p>
                </div>
                <div class="row">
                    <p class="text-justify">Atas perhatian dan kerjasama yang baik, kami sampaikan terimakasih.</p>
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
