@extends('dashboard.layout.lte')

@section('title', 'Permohonan Promosi')

@section('content')

    <form action="{{ route('promosi.update', ['promosi' => $promosi->id]) }}" method="post">
        @csrf
        @method('put')
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <div class="row">
                <h3>PT. LUCKY ABADI PRINT</h3>
                <h5>Ds. Sukadanau, Cikarang Barat, Bekasi</h5>
            </div>

        </div>
        <div class="row">
            {{-- <div class="d-flex justify-content-between"> --}}
            <div class="col-sm-6">
                <div class="row">
                    <label class="col-sm-4 col-form-label my-2">NO</label>
                    <div class="col-sm-7 my-2">
                        <input type="text" class="form-control @error('no') is-invalid @enderror" name="no"
                            value="{{ $promosi->no }}" />
                        @error('no')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <label class="col-sm-4 col-form-label my-2">Date</label>
                    <div class="col-sm-7 my-2">
                        <input type="date" class="form-control @error('date') is-invalid @enderror" name="date" id="#date"
                            value="{{ $promosi->date }}" />
                        @error('date')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            {{-- </div> --}}
        </div>
        <hr>

        <div class="d-flex justify-content-start my-2">
            <div class="col-sm-10">
                <div class="d-flex justify-content-start">
                    <div class="col-sm-6">
                        <label class="col-sm-2 form-label my-2" style="font-weight: bold">1</label>
                        <label class="col-sm-4 form-label my-2" style="font-weight: bold">Nama</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                            value="{{ $promosi->nama }}" />
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-start my-2">
            <div class="col-sm-10">
                <div class="d-flex justify-content-start">
                    <div class="col-sm-6">
                        <label class="col-sm-2 form-label my-2" style="font-weight: bold">2</label>
                        <label class="col-sm-4 form-label my-2" style="font-weight: bold">Nrp</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control @error('nrp') is-invalid @enderror" name="nrp"
                            value="{{ $promosi->nrp }}" />
                        @error('nrp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-start my-2">
            <div class="col-sm-10">
                <div class="d-flex justify-content-start">
                    <div class="col-sm-6">
                        <label class="col-sm-2 form-label my-2" style="font-weight: bold">3</label>
                        <label class="col-sm-4 form-label my-2" style="font-weight: bold">Divisi</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control @error('divisi') is-invalid @enderror" name="divisi"
                            value="{{ $promosi->divisi }}" />
                        @error('divisi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-start my-2">
            <div class="col-sm-10">
                <div class="d-flex justify-content-start">
                    <div class="col-sm-6">
                        <label class="col-sm-2 form-label my-2" style="font-weight: bold">4</label>
                        <label class="col-sm-4 form-label my-2" style="font-weight: bold">Bagian</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control @error('bagian') is-invalid @enderror" name="bagian"
                            value="{{ $promosi->bagian }}" />
                        @error('bagian')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-start my-2">
            <div class="col-sm-10">
                <div class="d-flex justify-content-start">
                    <div class="col-sm-6">
                        <label class="col-sm-2 form-label my-2" style="font-weight: bold">5</label>
                        <label class="col-sm-4 form-label my-2" style="font-weight: bold">Jabatan Sekarang</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control @error('jabatan_sekarang') is-invalid @enderror"
                            name="jabatan_sekarang" value="{{ $promosi->jabatan_sekarang }}" />
                        @error('jabatan_sekarang')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-start my-2">
            <div class="col-sm-10">
                <div class="d-flex justify-content-start">
                    <div class="col-sm-6">
                        <label class="col-sm-2 form-label my-2" style="font-weight: bold">6</label>
                        <label class="col-sm-4 form-label my-2" style="font-weight: bold">Job Code Lama</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control @error('job_code_lama') is-invalid @enderror"
                            name="job_code_lama" value="{{ $promosi->job_code_lama }}" />
                        @error('job_code_lama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-start my-2">
            <div class="col-sm-10">
                <div class="d-flex justify-content-start">
                    <div class="col-sm-6">
                        <label class="col-sm-2 form-label my-2" style="font-weight: bold">7</label>
                        <label class="col-sm-4 form-label my-2" style="font-weight: bold">Jabatan Baru</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control @error('jabatan_baru') is-invalid @enderror"
                            name="jabatan_baru" value="{{ $promosi->jabatan_baru }}" />
                        @error('jabatan_baru')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-start my-2">
            <div class="col-sm-10">
                <div class="d-flex justify-content-start">
                    <div class="col-sm-6">
                        <label class="col-sm-2 form-label my-2" style="font-weight: bold">8</label>
                        <label class="col-sm-4 form-label my-2" style="font-weight: bold">Job Code Baru</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control @error('job_code_baru') is-invalid @enderror"
                            name="job_code_baru" value="{{ $promosi->job_code_baru }}" />
                        @error('job_code_baru')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-start my-2">
            <div class="col-sm-10">
                <div class="d-flex justify-content-start">
                    <div class="col-sm-6">
                        <label class="col-sm-2 form-label my-2" style="font-weight: bold">9</label>
                        <label class="col-sm-4 form-label my-2" style="font-weight: bold">Tanggal Masuk</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="date" class="form-control @error('tanggal_masuk') is-invalid @enderror"
                            name="tanggal_masuk" value="{{ $promosi->tanggal_masuk }}" />
                        @error('tanggal_masuk')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-start my-2">
            <div class="col-sm-10">
                <div class="d-flex justify-content-start">
                    <div class="col-sm-6">
                        <label class="col-sm-2 form-label my-2" style="font-weight: bold">10</label>
                        <label class="col-sm-4 form-label my-2" style="font-weight: bold">Masa Kerja</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control @error('masa_kerja') is-invalid @enderror"
                            name="masa_kerja" value="{{ $promosi->masa_kerja }}" />
                        @error('masa_kerja')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-start my-2">
            <div class="col-sm-10">
                <div class="d-flex justify-content-start">
                    <div class="col-sm-6">
                        <label class="col-sm-2 form-label my-2" style="font-weight: bold">11</label>
                        <label class="col-sm-8 form-label my-2" style="font-weight: bold">Alasan Promosi/Mutasi/Rangkap
                            Jabatan</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-start mt-3 mx-5">
            <div class="col-sm-10 mx-4">
                <textarea type="text" class="form-control @error('alasan_promosi') is-invalid @enderror mb-3" placeholder="" rows="5"
                    cols="12" name="alasan_promosi">{{ $promosi->alasan_promosi }}</textarea>
                @error('alasan_promosi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>
        </div>


        <div class="d-flex justify-content-end mb-5">
            <div class="col-sm-1">
                <button type="submit" class="btn btn-primary">Update</button>
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
