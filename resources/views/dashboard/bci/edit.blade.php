@extends('dashboard.layouts.main')

@section('title', 'Create Sample Test Report')

@section('content')

    <form action="{{ route('bci.update', ['bci' => $bci->id]) }}" method="post">
        @csrf
        @method('put')
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2 text-center">SAMPLE TEST REPORT</h1>
        </div>
        <div class="row">
            {{-- <div class="d-flex justify-content-between"> --}}
            <div class="col-sm-6">
                <div class="row">
                    <label class="col-sm-4 col-form-label my-2">NO</label>
                    <div class="col-sm-7 my-2">
                        <input type="text" class="form-control @error('no') is-invalid @enderror" name="no"
                            value="{{ $bci->no }}" />
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
                        <input type="date" class="form-control @error('date') is-invalid @enderror" name="date"
                            value="{{ $bci->date }}" />
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
        <div class="col-sm-12">
            <div class="row">
                <label class="col-sm-4 col-form-label my-2">Customer</label>
                <div class="col-sm-7 my-2">
                    <input type="text" class="form-control @error('customer') is-invalid @enderror" name="customer"
                        value="{{ $bci->customer }}" />
                    @error('customer')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="row">
                <label class="col-sm-4 col-form-label my-2">Tanggal Memo</label>
                <div class="col-sm-7 my-2">
                    <input type="date" class="form-control @error('tanggal_memo') is-invalid @enderror" name="tanggal_memo"
                        value="{{ $bci->tanggal_memo }}" />
                    @error('tanggal_memo')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="row">
                <label class="col-sm-4 col-form-label my-2">Nomor Memo</label>
                <div class="col-sm-7 my-2">
                    <input type="text" class="form-control @error('nomor_memo') is-invalid @enderror" name="nomor_memo"
                        value="{{ $bci->nomor_memo }}" />
                    @error('nomor_memo')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="row">
                <label class="col-sm-4 col-form-label my-2">Jenis Sample</label>
                <div class="col-sm-7 my-2">
                    <input type="text" class="form-control @error('jenis_sample') is-invalid @enderror" name="jenis_sample"
                        value="{{ $bci->jenis_sample }}" />
                    @error('jenis_sample')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="row">
                <label class="col-sm-4 col-form-label my-3" style="font-weight: bold">Mutu Benang Pakan</label>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="row">
                <label class="col-sm-4 col-form-label my-2">- Aktual NE1</label>
                <div class="col-sm-7 my-2">
                    <input type="text" class="form-control @error('aktual_ne1_pakan') is-invalid @enderror"
                        name="aktual_ne1_pakan" value="{{ $bci->aktual_ne1_pakan }}" />
                    @error('aktual_ne1_pakan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="row">
                <label class="col-sm-4 col-form-label my-2">- Arah Twist</label>
                <div class="col-sm-7 my-2">
                    <input type="text" class="form-control @error('arah_twist_pakan') is-invalid @enderror"
                        name="arah_twist_pakan" value="{{ $bci->arah_twist_pakan }}" />
                    @error('arah_twist_pakan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="row">
                <label class="col-sm-4 col-form-label my-2">- Ne1 Lycra</label>
                <div class="col-sm-7 my-2">
                    <input type="text" value="{{ $bci->ne1_lycra }}"
                        class="form-control @error('ne1_lycra') is-invalid @enderror" name="ne1_lycra" />
                    @error('ne1_lycra')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="row">
                <label class="col-sm-4 col-form-label my-2">- TPI</label>
                <div class="col-sm-7 my-2">
                    <input type="text" value="{{ $bci->tpi_pakan }}"
                        class="form-control @error('tpi_pakan') is-invalid @enderror" name="tpi_pakan" />
                    @error('tpi_pakan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="row">
                <label class="col-sm-4 col-form-label my-2">- CV% TPI</label>
                <div class="col-sm-7 my-2">
                    <input type="text" class="form-control @error('cv_tpi_pakan') is-invalid @enderror" name="cv_tpi_pakan"
                        value="{{ $bci->cv_tpi_pakan }}" />
                    @error('tpi_pakan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-4 col-form-label my-2">Add NE1 Slub</label>
            <div class="col-sm-8 ">
                <div class="form-check form-check-inline mt-3">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1"
                        onclick="hideShowDiv(1)" />
                    <label class="form-check-label" for="inlineRadio1">YES</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2"
                        onclick="hideShowDiv(2)" />
                    <label class="form-check-label" for="inlineRadio2">NO</label>
                </div>
            </div>
        </div>
        <div class="show" id="show">
            <div class="col-sm-12">
                <div class="row">
                    <label class="col-sm-4 col-form-label my-2">NE1 Slub</label>
                    <div class="col-sm-7 my-2">
                        <input type="text" value="{{ $bci->ne1_slub }}"
                            class="form-control @error('ne1_slub') is-invalid @enderror" name="ne1_slub" />
                        @error('ne1_slub')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="row">
                    <label class="col-sm-4 col-form-label my-2">Slub Length (cm)</label>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="row">
                    <label class="col-sm-4 col-form-label my-2">- Rata-rata</label>
                    <div class="col-sm-7 my-2">
                        <input type="text" class="form-control @error('rata_length') is-invalid @enderror"
                            name="rata_length" value="{{ $bci->rata_length }}" />
                        @error('rata_length')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="row">
                    <label class="col-sm-4 col-form-label my-2">- Min</label>
                    <div class="col-sm-7 my-2">
                        <input type="text" class="form-control @error('min_length') is-invalid @enderror"
                            name="min_length" value="{{ $bci->min_length }}" />
                        @error('min_length')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="row">
                    <label class="col-sm-4 col-form-label my-2">- Max</label>
                    <div class="col-sm-7 my-2">
                        <input type="text" class="form-control @error('max_length') is-invalid @enderror"
                            name="max_length" value="{{ $bci->max_length }}" />
                        @error('max_length')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="row">
                    <label class="col-sm-4 col-form-label my-2">Nel Pause</label>
                    <div class="col-sm-7 my-2">
                        <input type="text" class="form-control @error('ne1_pause') is-invalid @enderror" name="ne1_pause"
                            value="{{ $bci->ne1_pause }}" />
                        @error('ne1_pause')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="row">
                    <label class="col-sm-4 col-form-label my-2">Distance Slub (cm)</label>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="row">
                    <label class="col-sm-4 col-form-label my-2">- Rata-rata</label>
                    <div class="col-sm-7 my-2">
                        <input type="text" class="form-control @error('rata_distance') is-invalid @enderror"
                            name="rata_distance" value="{{ $bci->rata_distance }}" />
                        @error('rata_distance')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="row">
                    <label class="col-sm-4 col-form-label my-2">- Min</label>
                    <div class="col-sm-7 my-2">
                        <input type="text" class="form-control @error('min_distance') is-invalid @enderror"
                            name="min_distance" value="{{ $bci->min_distance }}" />
                        @error('min_distance')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="row">
                    <label class="col-sm-4 col-form-label my-2">- Max</label>
                    <div class="col-sm-7 my-2">
                        <input type="text" class="form-control @error('max_distance') is-invalid @enderror"
                            name="max_distance" value="{{ $bci->max_distance }}" />
                        @error('max_distance')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="row">
                    <label class="col-sm-4 col-form-label my-2">Slub/Meter</label>
                    <div class="col-sm-7 my-2">
                        <input type="text" class="form-control @error('slub_meter') is-invalid @enderror"
                            name="slub_meter" value="{{ $bci->slub_meter }}" />
                        @error('slub_meter')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12">
            <div class="row">
                <label class="col-sm-4 col-form-label my-3" style="font-weight: bold">Mutu Benang Lusi</label>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="row">
                <label class="col-sm-4 col-form-label my-2">- Aktual NE1</label>
                <div class="col-sm-7 my-2">
                    <input type="text" class="form-control @error('aktual_ne1_lusi') is-invalid @enderror"
                        name="aktual_ne1_lusi" value="{{ $bci->aktual_ne1_lusi }}" />
                    @error('aktual_ne1_lusi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="row">
                <label class="col-sm-4 col-form-label my-2">- Arah Twist</label>
                <div class="col-sm-7 my-2">
                    <input type="text" class="form-control @error('arah_twist_lusi') is-invalid @enderror"
                        name="arah_twist_lusi" value="{{ $bci->arah_twist_lusi }}" />
                    @error('arah_twist_lusi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="row">
                <label class="col-sm-4 col-form-label my-2">- TPI</label>
                <div class="col-sm-7 my-2">
                    <input type="text" class="form-control @error('tpi_lusi') is-invalid @enderror" name="tpi_lusi"
                        value="{{ $bci->tpi_lusi }}" />
                    @error('tpi_lusi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="row">
                <label class="col-sm-4 col-form-label my-2">- CV% TPI</label>
                <div class="col-sm-7 my-2">
                    <input type="text" class="form-control @error('cv_tpi_lusi') is-invalid @enderror" name="cv_tpi_lusi"
                        value="{{ $bci->cv_tpi_lusi }}" />
                    @error('cv_tpi_lusi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
        <hr>
        <div class="col-sm-12">
            <div class="row">
                <textarea name="note" class="form-control" id="" cols="30" rows="10">{{ $bci->note }}</textarea>
            </div>
        </div>
        <div class="col-sm-12 my-3">
            <div class="input-group mb-3 row">
                <label class="col-sm-4 col-form-label my-2">Status</label>
                <select class="form-select" id="inputGroupSelect01" name="status">
                    <option value="Waiting Approval" selected>Waiting Approval</option>
                    <option value="Analizing">Analizing</option>
                    <option value="Send To QARD">Send To QARD</option>
                </select>
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
        }
    </script>
@endsection
