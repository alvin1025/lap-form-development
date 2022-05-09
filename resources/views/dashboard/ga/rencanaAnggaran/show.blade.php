@extends('dashboard.layout.lte')

@section('title', 'Rencana Anggaran')

@section('content')

    {{-- <form action="{{ route('anggaran.update', ['anggaran' => $anggaran->id]) }}" method="post">
        @csrf
        @method('put') --}}
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

    </div>
    <div class="row">
        <h5 class="text-center">RENCANA ANGGARAN BIAYA</h5>
    </div>
    <hr>
    <div class="d-flex justify-content-start">
        <div class="col-sm-10">
            <div class="row">
                <label class="col-sm-2 col-form-label my-2">NO</label>
                <div class="col-sm-5 my-2">
                    <input id="no_anggaran_1" type="text" class="form-control @error('no_anggaran_1') is-invalid @enderror"
                        name="no_anggaran_1" value="{{ $anggaran->no_anggaran_1 }}" readonly />
                    @error('no_anggaran_1')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label "></label>
                <div class="col-sm-8">
                </div>
                <label class="col-sm-2 col-form-label ">Tanggal</label>
                <div class="col-sm-5 ">
                    <input id="tanggal" type="date" class="form-control @error('tanggal') is-invalid @enderror"
                        name="tanggal" value="{{ $anggaran->tanggal }}" readonly />
                    @error('tanggal')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label "></label>
                <div class="col-sm-8">
                </div>
                <label class="col-sm-2 col-form-label ">NO</label>
                <div class="col-sm-5 ">
                    <input id="no_anggaran_2" type="text" class="form-control @error('no_anggaran_2') is-invalid @enderror"
                        name="no_anggaran_2" value="{{ $anggaran->no_anggaran_2 }}" readonly />
                    @error('no_anggaran_2')
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
    <hr class="mb-3">

    <div class="d-flex flex-row mt-3">
        <div class="col-sm-1 text-center">
            <label type="text" name="" id="" class="form-label">NO</label>
        </div>
        <div class="col-sm-4 text-center">
            <label type="text" name="" id="" class="form-label">Uraian</label>
        </div>
        <div class="col-sm-2 text-center">
            <label type="text" name="" id="" class="form-label">Biaya</label>
        </div>
        <div class="col-sm-4 text-center">
            <label type="text" name="" id="" class="form-label">Keterangan</label>
        </div>
    </div>
    <hr>
    {{-- row 1 --}}
    <div class="d-flex flex-row">
        <div class="col-sm-1 text-center">
            <input type="text" id="" class="form-control" name="no1" value="{{ $anggaran->no1 }}" readonly>
        </div>
        <div class="col-sm-4 text-center">
            <textarea name="uraian1" id="uraian1" cols="30" rows="5" class="form-control" readonly></textarea>
        </div>
        <div class="col-sm-2 text-center">
            <input type="text" id="" class="form-control" name="biaya1" value="{{ $anggaran->biaya1 }}" readonly>
        </div>
        <div class="col-sm-4 text-center">
            <textarea name="keterangan1" id="keterangan1" cols="30" rows="5" class="form-control" readonly></textarea>
        </div>
    </div>

    {{-- row 2 --}}
    <div class="d-flex flex-row">
        <div class="col-sm-1 text-center">
            <input type="text" id="" class="form-control" name="no2" value="{{ $anggaran->no2 }}" readonly>
        </div>
        <div class="col-sm-4 text-center">
            <textarea name="uraian2" id="uraian2" cols="30" rows="5" class="form-control" readonly></textarea>
        </div>
        <div class="col-sm-2 text-center">
            <input type="text" id="" class="form-control" name="biaya2" value="{{ $anggaran->biaya2 }}" readonly>
        </div>
        <div class="col-sm-4 text-center">
            <textarea name="keterangan2" id="keterangan2" cols="30" rows="5" class="form-control" readonly></textarea>
        </div>
    </div>

    {{-- row 3 --}}
    <div class="d-flex flex-row">
        <div class="col-sm-1 text-center">
            <input type="text" id="" class="form-control" name="no3" value="{{ $anggaran->no3 }}" readonly>
        </div>
        <div class="col-sm-4 text-center">
            <textarea name="uraian3" id="uraian3" cols="30" rows="5" class="form-control" readonly></textarea>
        </div>
        <div class="col-sm-2 text-center">
            <input type="text" id="" class="form-control" name="biaya3" value="{{ $anggaran->biaya3 }}" readonly>
        </div>
        <div class="col-sm-4 text-center">
            <textarea name="keterangan3" id="keterangan3" cols="30" rows="5" class="form-control" readonly></textarea>
        </div>
    </div>

    {{-- row 4 --}}
    <div class="d-flex flex-row">
        <div class="col-sm-1 text-center">
            <input type="text" id="" class="form-control" name="no4" value="{{ $anggaran->no4 }}" readonly>
        </div>
        <div class="col-sm-4 text-center">
            <textarea name="uraian4" id="uraian4" cols="30" rows="5" class="form-control" readonly></textarea>
        </div>
        <div class="col-sm-2 text-center">
            <input type="text" id="" class="form-control" name="biaya4" value="{{ $anggaran->biaya4 }}" readonly>
        </div>
        <div class="col-sm-4 text-center">
            <textarea name="keterangan4" id="keterangan4" cols="30" rows="5" class="form-control" readonly></textarea>
        </div>
    </div>

    {{-- row 5 --}}
    <div class="d-flex flex-row">
        <div class="col-sm-1 text-center">
            <input type="text" id="" class="form-control" name="no5" value="{{ $anggaran->no5 }}" readonly>
        </div>
        <div class="col-sm-4 text-center">
            <textarea name="uraian5" id="uraian5" cols="30" rows="5" class="form-control" readonly></textarea>
        </div>
        <div class="col-sm-2 text-center">
            <input type="text" id="" class="form-control" name="biaya5" value="{{ $anggaran->biaya5 }}" readonly>
        </div>
        <div class="col-sm-4 text-center">
            <textarea name="keterangan5" id="keterangan5" cols="30" rows="5" class="form-control" readonly></textarea>
        </div>
    </div>

    {{-- row 6 --}}
    <div class="d-flex flex-row">
        <div class="col-sm-1 text-center">
            <input type="text" id="" class="form-control" name="no6" value="{{ $anggaran->no6 }}" readonly>
        </div>
        <div class="col-sm-4 text-center">
            <textarea name="uraian6" id="uraian6" cols="30" rows="5" class="form-control" readonly></textarea>
        </div>
        <div class="col-sm-2 text-center">
            <input type="text" id="" class="form-control" name="biaya6" value="{{ $anggaran->biaya6 }}" readonly>
        </div>
        <div class="col-sm-4 text-center">
            <textarea name="keterangan6" id="keterangan6" cols="30" rows="5" class="form-control" readonly></textarea>
        </div>
    </div>

    {{-- row 7 --}}
    <div class="d-flex flex-row">
        <div class="col-sm-1 text-center">
            <input type="text" id="" class="form-control" name="no7" value="{{ $anggaran->no7 }}" readonly>
        </div>
        <div class="col-sm-4 text-center">
            <textarea name="uraian7" id="uraian7" cols="30" rows="5" class="form-control" readonly></textarea>
        </div>
        <div class="col-sm-2 text-center">
            <input type="text" id="" class="form-control" name="biaya7" value="{{ $anggaran->biaya7 }}" readonly>
        </div>
        <div class="col-sm-4 text-center">
            <textarea name="keterangan7" id="keterangan7" cols="30" rows="5" class="form-control" readonly></textarea>
        </div>
    </div>

    {{-- row 8 --}}
    <div class="d-flex flex-row">
        <div class="col-sm-1 text-center">
            <input type="text" id="" class="form-control" name="no8" value="{{ $anggaran->no8 }}" readonly>
        </div>
        <div class="col-sm-4 text-center">
            <textarea name="uraian8" id="uraian8" cols="30" rows="5" class="form-control" readonly></textarea>
        </div>
        <div class="col-sm-2 text-center">
            <input type="text" id="" class="form-control" name="biaya8" value="{{ $anggaran->biaya8 }}" readonly>
        </div>
        <div class="col-sm-4 text-center">
            <textarea name="keterangan8" id="keterangan8" cols="30" rows="5" class="form-control" readonly></textarea>
        </div>
    </div>

    {{-- row 9 --}}
    <div class="d-flex flex-row">
        <div class="col-sm-1 text-center">
            <input type="text" id="" class="form-control" name="no9" value="{{ $anggaran->no9 }}" readonly>
        </div>
        <div class="col-sm-4 text-center">
            <textarea name="uraian9" id="uraian9" cols="30" rows="5" class="form-control" readonly></textarea>
        </div>
        <div class="col-sm-2 text-center">
            <input type="text" id="" class="form-control" name="biaya9" value="{{ $anggaran->biaya9 }}" readonly>
        </div>
        <div class="col-sm-4 text-center">
            <textarea name="keterangan9" id="keterangan9" cols="30" rows="5" class="form-control" readonly></textarea>
        </div>
    </div>
    {{-- row 10 --}}
    <div class="d-flex flex-row">
        <div class="col-sm-1 text-center">
            <input type="text" id="" class="form-control" name="no10" value="{{ $anggaran->no10 }}" readonly>
        </div>
        <div class="col-sm-4 text-center">
            <textarea name="uraian10" id="uraian10" cols="30" rows="5" class="form-control" readonly></textarea>
        </div>
        <div class="col-sm-2 text-center">
            <input type="text" id="" class="form-control" name="biaya10" value="{{ $anggaran->biaya10 }}" readonly>
        </div>
        <div class="col-sm-4 text-center">
            <textarea name="keterangan10" id="keterangan10" cols="30" rows="5" class="form-control" readonly></textarea>
        </div>
    </div>
    <hr>



    {{-- <div class="
                            d-flex justify-content-end mb-5">
            <div class="col-sm-1">
                <button type="submit" class="btn btn-primary">SUBMIT</button>
            </div>
        </div>
    </form> --}}



@endsection
