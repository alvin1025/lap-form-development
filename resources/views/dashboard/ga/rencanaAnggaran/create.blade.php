@extends('dashboard.layout.lte')

@section('title', 'Rencana Anggaran')

@section('content')

    <form action="{{ route('anggaran.store') }}" method="post">
        @csrf
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
                        <input id="no_anggaran_1" type="text"
                            class="form-control @error('no_anggaran_1') is-invalid @enderror" name="no_anggaran_1" />
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
                            name="tanggal" />
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
                        <input id="no_anggaran_2" type="text"
                            class="form-control @error('no_anggaran_2') is-invalid @enderror" name="no_anggaran_2" />
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
                <input type="text" id="" class="form-control" name="no1">
            </div>
            <div class="col-sm-4 text-center">
                <textarea name="uraian1" id="uraian1" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="col-sm-2 text-center">
                <input type="text" id="" class="form-control" name="biaya1">
            </div>
            <div class="col-sm-4 text-center">
                <textarea name="keterangan1" id="keterangan1" cols="30" rows="5" class="form-control"></textarea>
            </div>
        </div>

        {{-- row 2 --}}
        <div class="d-flex flex-row">
            <div class="col-sm-1 text-center">
                <input type="text" id="" class="form-control" name="no2">
            </div>
            <div class="col-sm-4 text-center">
                <textarea name="uraian2" id="uraian2" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="col-sm-2 text-center">
                <input type="text" id="" class="form-control" name="biaya2">
            </div>
            <div class="col-sm-4 text-center">
                <textarea name="keterangan2" id="keterangan2" cols="30" rows="5" class="form-control"></textarea>
            </div>
        </div>

        {{-- row 3 --}}
        <div class="d-flex flex-row">
            <div class="col-sm-1 text-center">
                <input type="text" id="" class="form-control" name="no3">
            </div>
            <div class="col-sm-4 text-center">
                <textarea name="uraian3" id="uraian3" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="col-sm-2 text-center">
                <input type="text" id="" class="form-control" name="biaya3">
            </div>
            <div class="col-sm-4 text-center">
                <textarea name="keterangan3" id="keterangan3" cols="30" rows="5" class="form-control"></textarea>
            </div>
        </div>

        {{-- row 4 --}}
        <div class="d-flex flex-row">
            <div class="col-sm-1 text-center">
                <input type="text" id="" class="form-control" name="no4">
            </div>
            <div class="col-sm-4 text-center">
                <textarea name="uraian4" id="uraian4" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="col-sm-2 text-center">
                <input type="text" id="" class="form-control" name="biaya4">
            </div>
            <div class="col-sm-4 text-center">
                <textarea name="keterangan4" id="keterangan4" cols="30" rows="5" class="form-control"></textarea>
            </div>
        </div>

        {{-- row 5 --}}
        <div class="d-flex flex-row">
            <div class="col-sm-1 text-center">
                <input type="text" id="" class="form-control" name="no5">
            </div>
            <div class="col-sm-4 text-center">
                <textarea name="uraian5" id="uraian5" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="col-sm-2 text-center">
                <input type="text" id="" class="form-control" name="biaya5">
            </div>
            <div class="col-sm-4 text-center">
                <textarea name="keterangan5" id="keterangan5" cols="30" rows="5" class="form-control"></textarea>
            </div>
        </div>

        {{-- row 6 --}}
        <div class="d-flex flex-row">
            <div class="col-sm-1 text-center">
                <input type="text" id="" class="form-control" name="no6">
            </div>
            <div class="col-sm-4 text-center">
                <textarea name="uraian6" id="uraian6" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="col-sm-2 text-center">
                <input type="text" id="" class="form-control" name="biaya6">
            </div>
            <div class="col-sm-4 text-center">
                <textarea name="keterangan6" id="keterangan6" cols="30" rows="5" class="form-control"></textarea>
            </div>
        </div>

        {{-- row 7 --}}
        <div class="d-flex flex-row">
            <div class="col-sm-1 text-center">
                <input type="text" id="" class="form-control" name="no7">
            </div>
            <div class="col-sm-4 text-center">
                <textarea name="uraian7" id="uraian7" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="col-sm-2 text-center">
                <input type="text" id="" class="form-control" name="biaya7">
            </div>
            <div class="col-sm-4 text-center">
                <textarea name="keterangan7" id="keterangan7" cols="30" rows="5" class="form-control"></textarea>
            </div>
        </div>

        {{-- row 8 --}}
        <div class="d-flex flex-row">
            <div class="col-sm-1 text-center">
                <input type="text" id="" class="form-control" name="no8">
            </div>
            <div class="col-sm-4 text-center">
                <textarea name="uraian8" id="uraian8" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="col-sm-2 text-center">
                <input type="text" id="" class="form-control" name="biaya8">
            </div>
            <div class="col-sm-4 text-center">
                <textarea name="keterangan8" id="keterangan8" cols="30" rows="5" class="form-control"></textarea>
            </div>
        </div>

        {{-- row 9 --}}
        <div class="d-flex flex-row">
            <div class="col-sm-1 text-center">
                <input type="text" id="" class="form-control" name="no9">
            </div>
            <div class="col-sm-4 text-center">
                <textarea name="uraian9" id="uraian9" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="col-sm-2 text-center">
                <input type="text" id="" class="form-control" name="biaya9">
            </div>
            <div class="col-sm-4 text-center">
                <textarea name="keterangan9" id="keterangan9" cols="30" rows="5" class="form-control"></textarea>
            </div>
        </div>
        {{-- row 10 --}}
        <div class="d-flex flex-row">
            <div class="col-sm-1 text-center">
                <input type="text" id="" class="form-control" name="no9">
            </div>
            <div class="col-sm-4 text-center">
                <textarea name="uraian10" id="uraian10" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="col-sm-2 text-center">
                <input type="text" id="" class="form-control" name="biaya10">
            </div>
            <div class="col-sm-4 text-center">
                <textarea name="keterangan10" id="keterangan10" cols="30" rows="5" class="form-control"></textarea>
            </div>
        </div>
        <hr>



        <div class="
                            d-flex justify-content-end mb-5">
            <div class="col-sm-1">
                <button type="submit" class="btn btn-primary">SUBMIT</button>
            </div>
        </div>
    </form>



@endsection
