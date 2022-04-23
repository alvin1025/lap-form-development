@extends('dashboard.layouts.main')

@section('title', 'Edit Permohonan Test Benang')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-12">

            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <form action="{{ route('test-benang.update', ['test_benang' => $benang->id]) }}" method="post">
                @csrf
                @method('put')
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2 text-center">FORM PERMOHONAN TEST</h1>
                </div>

                <div class="row justify-content-center">
                    <div class="d-flex justify-content-between">
                        <div class="col-sm-4">
                            <div class="row">
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form4Example3">Kepada :</label>
                                    <textarea class="form-control" id="form4Example3" rows="4" name="kepada">{{ $benang->kepada }}</textarea>
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form4Example3">Dari :</label>
                                    <textarea class="form-control" id="form4Example3" rows="4" name="dari">{{ $benang->dari }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 mx-3">
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">NO</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="no" value="{{ $benang->no }}" />
                                </div>
                                <label class="col-sm-4 col-form-label my-2">Tanggal</label>
                                <div class="col-sm-7 my-2">
                                    <input type="date" class="form-control" name="tanggal"
                                        value="{{ $benang->tanggal }}" />
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-2">
                            <div class="row">
                                <textarea type="text" rows="10" cols="1" name="fab" placeholder="FABRIC PHYSICAL TEST TOP URGENT!"
                                    class="form-control" name="fabric">{{ $benang->fab }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start mt-1">
                        <div class="col-sm-4">
                            <label for="" class="form-label">Dengan ini kami kirimkan sebanyak</label>
                        </div>
                        <div class="col-sm-1">
                            <input type="text" class="form-control" name="jumlah_sample"
                                value="{{ $benang->jumlah_sample }}" />
                        </div>
                        <div class="col-sm-1 mx-3">
                            <label for="" class="form-label">sampel</label>
                        </div>
                    </div>

                    <div class="form-outline">
                        <label class="form-label" for="form4Example3">Mohon agar segera di analisa</label>
                    </div>
                    <div class="form-outline mb-4 col-sm-12">
                        <label class="form-label" for="form4Example3">Dengan identitas terlampir untuk dilakukan
                            pengetesan sebagai berikut</label>
                    </div>

                    <hr>
                    <div class="row justify-content-center">
                        <div class="d-flex justify-content-between">
                            <div class="col-sm-4">
                                <div class="row">
                                    <label class="col-sm-4 col-form-label my-2">Identitas</label>
                                    <div class="col-sm-7 my-2">
                                        <input type="text" class="form-control" name="identitas"
                                            value="{{ $benang->identitas }}" />
                                    </div>
                                    <label class="col-sm-4 col-form-label my-2">Greige Supply</label>
                                    <div class="col-sm-7 my-2">
                                        <input type="text" class="form-control" name="greige_supply"
                                            value="{{ $benang->greige_supply }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">Article</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="article"
                                        value="{{ $benang->article }}" />
                                </div>
                                <label class="col-sm-4 col-form-label my-2">Construction</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="construction"
                                        value="{{ $benang->construction }}" />
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">Weave</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="weave"
                                        value="{{ $benang->weave }}" />
                                </div>
                                <label class="col-sm-4 col-form-label my-2">Greige Width</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="greige_width"
                                        value="{{ $benang->greige_width }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="mx-2">
                    <div class="col-sm-12">
                        <label for="">1. Phisical Properties</label>
                    </div>
                    <div class="row justify-content-center">
                        <div class="d-flex justify-content-between">
                            <div class="col-sm-6 mt-3">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">Construction</label>
                                    <div class="col-sm-4">
                                        <div class="form-check form-check-inline mt-3">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Yes"
                                                name="construction">
                                            <label class="form-check-label" for="inlineCheckbox1"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">Nomor Benang</label>
                                    <div class="col-sm-4">
                                        <div class="form-check form-check-inline mt-3">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Yes"
                                                name="nomor_benang">
                                            <label class="form-check-label" for="inlineCheckbox1"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">Twisting</label>
                                    <div class="col-sm-4">
                                        <div class="form-check form-check-inline mt-3">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Yes"
                                                name="twisting">
                                            <label class="form-check-label" for="inlineCheckbox1"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 mt-3">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">Type Twisting</label>
                                    <div class="col-sm-4">
                                        <div class="form-check form-check-inline mt-3">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                name="type_twisting" value="Yes">
                                            <label class="form-check-label" for="inlineCheckbox1"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">Komposisi Serat</label>
                                    <div class="col-sm-4">
                                        <div class="form-check form-check-inline mt-3">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Yes"
                                                name="komposisi_serat">
                                            <label class="form-check-label" for="inlineCheckbox1"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="mb-3">
                    <div class="row justify-content-center">
                        <h5 class="mb-5">Lampiran</h5>
                        <div class="d-flex justify-content-between">
                            <div class="col-sm-2">
                                <center><label type="text" name="" id="" class="form-label">Identitas</label></center>
                            </div>
                            <div class="col-sm-2">
                                <center><label type="text" name="" id="" class="form-label">Greige Supply</label>
                                </center>
                            </div>
                            <div class="col-sm-2">
                                <center><label type="text" name="" id="" class="form-label">Article</label></center>
                            </div>
                            <div class="col-sm-2">
                                <center><label type="text" name="" id="" class="form-label">Weave</label></center>
                            </div>
                            <div class="col-sm-2">
                                <center><label type="text" name="" id="" class="form-label">Construction</label>
                                </center>
                            </div>
                            <div class="col-sm-2">
                                <center><label type="text" name="" id="" class="form-label">Greige Width</label>
                                </center>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran1_identitas"
                                    value="{{ $benang->lampiran1_identitas }}">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran1_greige_supply"
                                    value="{{ $benang->lampiran1_greige_supply }}">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran1_article"
                                    value="{{ $benang->lampiran1_article }}">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran1_weave"
                                    value="{{ $benang->lampiran1_weave }}">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran1_construction"
                                    value="{{ $benang->lampiran1_construction }}">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran1_greige_width"
                                    value="{{ $benang->lampiran1_greige_width }}">
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran2_identitas"
                                    value="{{ $benang->lampiran2_identitas }}">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran2_greige_supply"
                                    value="{{ $benang->lampiran2_greige_supply }}">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran2_article"
                                    value="{{ $benang->lampiran2_article }}">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran2_weave"
                                    value="{{ $benang->lampiran2_weave }}">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran2_construction"
                                    value="{{ $benang->lampiran2_construction }}">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran2_greige_width"
                                    value="{{ $benang->lampiran2_greige_width }}">
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran3_identitas"
                                    value="{{ $benang->lampiran3_identitas }}">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran3_greige_supply"
                                    value="{{ $benang->lampiran3_greige_supply }}">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran3_article"
                                    value="{{ $benang->lampiran3_article }}">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran3_weave"
                                    value="{{ $benang->lampiran3_weave }}">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran3_construction"
                                    value="{{ $benang->lampiran3_construction }}">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran3_greige_width"
                                    value="{{ $benang->lampiran3_greige_width }}">
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran4_identitas"
                                    value="{{ $benang->lampiran4_identitas }}">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran4_greige_supply"
                                    value="{{ $benang->lampiran4_greige_supply }}">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran4_article"
                                    value="{{ $benang->lampiran4_article }}">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran4_weave"
                                    value="{{ $benang->lampiran4_weave }}">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran4_construction"
                                    value="{{ $benang->lampiran4_construction }}">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran4_greige_width"
                                    value="{{ $benang->lampiran4_greige_width }}">
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran5_identitas"
                                    value="{{ $benang->lampiran5_identitas }}">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran5_greige_supply"
                                    value="{{ $benang->lampiran5_greige_supply }}">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran5_article"
                                    value="{{ $benang->lampiran5_article }}">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran5_weave"
                                    value="{{ $benang->lampiran5_weave }}">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran5_construction"
                                    value="{{ $benang->lampiran5_construction }}">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran5_greige_width"
                                    value="{{ $benang->lampiran5_greige_width }}">
                            </div>
                        </div>
                    </div>

                </div>

                <div class="d-flex justify-content-end my-5">
                    <div class="col-sm-1">
                        <button type="submit" class="btn btn-primary">SUBMIT</button>
                    </div>
                </div>

            </form>

        </div>
    </div>

@endsection
