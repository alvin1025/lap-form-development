@extends('dashboard.layout.lte')

@section('title', 'Daftar Kebutuhan Material')

@section('content')

    <form action="{{ route('kebutuhan.store') }}" method="post">
        @csrf
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

        </div>
        <div class="row">
            <h5 class="text-center">DAFTAR KEBUTUHAN MATRIAL</h5>
        </div>
        <hr>
        <div class="d-flex justify-content-start">
            <div class="col-sm-10">
                <div class="row">
                    <label class="col-sm-2 col-form-label my-2">NO</label>
                    <div class="col-sm-5 my-2">
                        <input id="no_kebutuhan_1" type="text"
                            class="form-control @error('no_kebutuhan_1') is-invalid @enderror" name="no_kebutuhan_1" />
                        @error('no_kebutuhan_1')
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
                        <input id="no_kebutuhan_2" type="text"
                            class="form-control @error('no_kebutuhan_2') is-invalid @enderror" name="no_kebutuhan_2" />
                        @error('no_kebutuhan_2')
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
            <div class="col-sm-2 text-center">
                <label type="text" name="" id="" class="form-label">Uraian</label>
            </div>
            <div class="col-sm-2 text-center">
                <label type="text" name="" id="" class="form-label">QTT</label>
            </div>
            <div class="col-sm-2 text-center">
                <label type="text" name="" id="" class="form-label">HARGA SAT (Rp)</label>
            </div>
            <div class="col-sm-2 text-center">
                <label type="text" name="" id="" class="form-label">TTL HARGA (Rp)</label>
            </div>
            <div class="col-sm-2 text-center">
                <label type="text" name="" id="" class="form-label">Keterangan</label>
            </div>
        </div>
        <hr>
        {{-- row 1 --}}
        <div class="d-flex flex-row">
            <div class="col-sm-1 text-center">
                <input type="text" id="" class="form-control" name="no1">
            </div>
            <div class="col-sm-2 text-center">
                <textarea name="uraian1" id="uraian1" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="col-sm-2 text-center">
                <input type="text" id="" class="form-control" name="qtt1">
            </div>
            <div class="col-sm-2 text-center">
                <input type="text" id="" class="form-control" name="harga1">
            </div>
            <div class="col-sm-2 text-center">
                <input type="text" id="" class="form-control" name="ttl_harga1">
            </div>
            <div class="col-sm-2 text-center">
                <textarea name="keterangan1" id="keterangan1" cols="30" rows="5" class="form-control"></textarea>
            </div>
        </div>

        {{-- row 2 --}}
        <div class="d-flex flex-row">
            <div class="col-sm-1 text-center">
                <input type="text" id="" class="form-control" name="no2">
            </div>
            <div class="col-sm-2 text-center">
                <textarea name="uraian2" id="uraian2" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="col-sm-2 text-center">
                <input type="text" id="" class="form-control" name="qtt2">
            </div>
            <div class="col-sm-2 text-center">
                <input type="text" id="" class="form-control" name="harga2">
            </div>
            <div class="col-sm-2 text-center">
                <input type="text" id="" class="form-control" name="ttl_harga2">
            </div>
            <div class="col-sm-2 text-center">
                <textarea name="keterangan2" id="keterangan2" cols="30" rows="5" class="form-control"></textarea>
            </div>
        </div>

        {{-- row 3 --}}
        <div class="d-flex flex-row">
            <div class="col-sm-1 text-center">
                <input type="text" id="" class="form-control" name="no3">
            </div>
            <div class="col-sm-2 text-center">
                <textarea name="uraian3" id="uraian3" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="col-sm-2 text-center">
                <input type="text" id="" class="form-control" name="qtt3">
            </div>
            <div class="col-sm-2 text-center">
                <input type="text" id="" class="form-control" name="harga3">
            </div>
            <div class="col-sm-2 text-center">
                <input type="text" id="" class="form-control" name="ttl_harga3">
            </div>
            <div class="col-sm-2 text-center">
                <textarea name="keterangan3" id="keterangan3" cols="30" rows="5" class="form-control"></textarea>
            </div>
        </div>

        {{-- row 4 --}}
        <div class="d-flex flex-row">
            <div class="col-sm-1 text-center">
                <input type="text" id="" class="form-control" name="no4">
            </div>
            <div class="col-sm-2 text-center">
                <textarea name="uraian4" id="uraian4" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="col-sm-2 text-center">
                <input type="text" id="" class="form-control" name="qtt4">
            </div>
            <div class="col-sm-2 text-center">
                <input type="text" id="" class="form-control" name="harga4">
            </div>
            <div class="col-sm-2 text-center">
                <input type="text" id="" class="form-control" name="ttl_harga4">
            </div>
            <div class="col-sm-2 text-center">
                <textarea name="keterangan4" id="keterangan4" cols="30" rows="5" class="form-control"></textarea>
            </div>
        </div>

        {{-- row 5 --}}
        <div class="d-flex flex-row">
            <div class="col-sm-1 text-center">
                <input type="text" id="" class="form-control" name="no5">
            </div>
            <div class="col-sm-2 text-center">
                <textarea name="uraian5" id="uraian5" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="col-sm-2 text-center">
                <input type="text" id="" class="form-control" name="qtt5">
            </div>
            <div class="col-sm-2 text-center">
                <input type="text" id="" class="form-control" name="harga5">
            </div>
            <div class="col-sm-2 text-center">
                <input type="text" id="" class="form-control" name="ttl_harga5">
            </div>
            <div class="col-sm-2 text-center">
                <textarea name="keterangan5" id="keterangan5" cols="30" rows="5" class="form-control"></textarea>
            </div>
        </div>

        {{-- row 6 --}}
        <div class="d-flex flex-row">
            <div class="col-sm-1 text-center">
                <input type="text" id="" class="form-control" name="no6">
            </div>
            <div class="col-sm-2 text-center">
                <textarea name="uraian6" id="uraian6" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="col-sm-2 text-center">
                <input type="text" id="" class="form-control" name="qtt6">
            </div>
            <div class="col-sm-2 text-center">
                <input type="text" id="" class="form-control" name="harga6">
            </div>
            <div class="col-sm-2 text-center">
                <input type="text" id="" class="form-control" name="ttl_harga6">
            </div>
            <div class="col-sm-2 text-center">
                <textarea name="keterangan6" id="keterangan6" cols="30" rows="5" class="form-control"></textarea>
            </div>
        </div>

        {{-- row 7 --}}
        <div class="d-flex flex-row">
            <div class="col-sm-1 text-center">
                <input type="text" id="" class="form-control" name="no7">
            </div>
            <div class="col-sm-2 text-center">
                <textarea name="uraian7" id="uraian7" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="col-sm-2 text-center">
                <input type="text" id="" class="form-control" name="qtt7">
            </div>
            <div class="col-sm-2 text-center">
                <input type="text" id="" class="form-control" name="harga7">
            </div>
            <div class="col-sm-2 text-center">
                <input type="text" id="" class="form-control" name="ttl_harga7">
            </div>
            <div class="col-sm-2 text-center">
                <textarea name="keterangan7" id="keterangan7" cols="30" rows="5" class="form-control"></textarea>
            </div>
        </div>

        {{-- row 8 --}}
        <div class="d-flex flex-row">
            <div class="col-sm-1 text-center">
                <input type="text" id="" class="form-control" name="no8">
            </div>
            <div class="col-sm-2 text-center">
                <textarea name="uraian8" id="uraian8" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="col-sm-2 text-center">
                <input type="text" id="" class="form-control" name="qtt8">
            </div>
            <div class="col-sm-2 text-center">
                <input type="text" id="" class="form-control" name="harga8">
            </div>
            <div class="col-sm-2 text-center">
                <input type="text" id="" class="form-control" name="ttl_harga8">
            </div>
            <div class="col-sm-2 text-center">
                <textarea name="keterangan8" id="keterangan8" cols="30" rows="5" class="form-control"></textarea>
            </div>
        </div>

        {{-- row 9 --}}
        <div class="d-flex flex-row">
            <div class="col-sm-1 text-center">
                <input type="text" id="" class="form-control" name="no9">
            </div>
            <div class="col-sm-2 text-center">
                <textarea name="uraian9" id="uraian9" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="col-sm-2 text-center">
                <input type="text" id="" class="form-control" name="qtt9">
            </div>
            <div class="col-sm-2 text-center">
                <input type="text" id="" class="form-control" name="harga9">
            </div>
            <div class="col-sm-2 text-center">
                <input type="text" id="" class="form-control" name="ttl_harga9">
            </div>
            <div class="col-sm-2 text-center">
                <textarea name="keterangan9" id="keterangan9" cols="30" rows="5" class="form-control"></textarea>
            </div>
        </div>
        {{-- row 10 --}}
        <div class="d-flex flex-row">
            <div class="col-sm-1 text-center">
                <input type="text" id="" class="form-control" name="no10">
            </div>
            <div class="col-sm-2 text-center">
                <textarea name="uraian10" id="uraian10" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="col-sm-2 text-center">
                <input type="text" id="" class="form-control" name="qtt10">
            </div>
            <div class="col-sm-2 text-center">
                <input type="text" id="" class="form-control" name="harga10">
            </div>
            <div class="col-sm-2 text-center">
                <input type="text" id="" class="form-control" name="ttl_harga10">
            </div>
            <div class="col-sm-2 text-center">
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
