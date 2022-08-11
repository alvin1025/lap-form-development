@extends('dashboard.layout.lte')

@section('title', 'Surat Pengantar Berobat')

@section('content')

    <form action="{{ route('berobat.update', ['berobat' => $berobat->id]) }}" method="post">
        @csrf
        @method('put')
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <div class="row">
                <h4>PT. LUCKY ABADI PRINT</h4>
                <h5>Ds. Sukadanau, Cikarang Barat, Bekasi</h5>
                <h5>Telp : 8900631-632,8900770</h5>
            </div>

        </div>
        <div class="row">
            <h5>PENGANTAR BEROBAT RSTC</h5>
            {{-- </div> --}}
        </div>
        <hr>
        <div class="d-flex justify-content-end">
            <div class="col-sm-4">
                <div class="row">
                    <label class="col-sm-6 col-form-label ">Cikarang Barat,</label>
                </div>
                <div class="row">
                    <label class="col-sm-4 col-form-label">Kepada Yth,</label>
                </div>
                <div class="row">
                    <label class="col-sm-4 col-form-label">RS PLKK/</label>
                </div>
                <div class="row">
                    <label class="col-sm-4 col-form-label mt-3">Di Tempat</label>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-start">
            <div class="col-sm-6">
                <div class="row">
                    <label class="col-sm-4 col-form-label">Dengan Hormat,</label>
                </div>
                <div class="row">
                    <label class="col-sm-10 col-form-label">Bersama ini kami kirim OS :</label>
                </div>
                <div class="row">
                    <label class="col-sm-4 col-form-label my-2">Nama</label>
                    <div class="col-sm-7 ">
                        <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror my-2"
                            name="nama" value="{{ $berobat->nama }}" />
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-4 col-form-label my-2">Umur</label>
                    <div class="col-sm-7 ">
                        <input id="umur" type="text" class="form-control @error('umur') is-invalid @enderror my-2"
                            name="umur" value="{{ $berobat->umur }}" />
                        @error('umur')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-4 col-form-label my-2">Nrp</label>
                    <div class="col-sm-7 ">
                        <input id="nrp" type="text" class="form-control @error('nrp') is-invalid @enderror my-2" name="nrp"
                            value="{{ $berobat->nrp }}" />
                        @error('nrp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-4 col-form-label my-2">NO KPJ :/NIK</label>
                    <div class="col-sm-7 ">
                        <input id="nik" type="text" class="form-control @error('nik') is-invalid @enderror my-2" name="nik"
                            value="{{ $berobat->nik }}" />
                        @error('nik')
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
                            name="bagian" value="{{ $berobat->bagian }}" />
                        @error('bagian')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-4 col-form-label my-2">Jam</label>
                    <div class="col-sm-7 ">
                        <input id="jam" type="text" class="form-control @error('jam') is-invalid @enderror my-2" name="jam"
                            value="{{ $berobat->jam }}" />
                        @error('jam')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-4 col-form-label my-2">Kronologi</label>
                    <div class="col-sm-7 ">
                        <textarea name="kronologi" id="kronologi" cols="30" rows="5"
                            class="form-control @error('kronologi') is-invalid @enderror my-2"></textarea>
                        @error('kronologi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-4 col-form-label my-2">Keterangan</label>
                    <div class="col-sm-7 ">
                        <textarea name="keterangan" id="keterangan" cols="30" rows="5"
                            class="form-control @error('keterangan') is-invalid @enderror my-2"></textarea>
                        @error('keterangan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <p class="text-justify">
                        Biaya pengobatan /Perawatan menjadi tanggung jawab BPJS KETENAGAKERJAAN
                    </p>
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
