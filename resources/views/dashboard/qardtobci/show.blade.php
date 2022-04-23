<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LAP | Form Development Request</title>

    {{-- jquery --}}
    <script src="{{ url('https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js') }}"></script>

    <script src="{{ url('https://malsup.github.io/jquery.form.js') }}"></script>
    <script src="{{ url('https://code.jquery.com/ui/1.13.0/jquery-ui.min.js') }}"
        integrity="sha256-hlKLmzaRlE8SCJC1Kw8zoUbU8BxA+8kR3gseuKfMjxA=" crossorigin="anonymous"></script>

    <!-- Bootstrap core CSS -->
    <link href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">

    {{-- Datatables --}}
    <link rel="stylesheet" type="text/css"
        href="{{ url('https://cdn.datatables.net/v/bs5/dt-1.11.5/b-2.2.2/b-html5-2.2.2/fc-4.0.2/rg-1.1.4/datatables.min.css') }}" />
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <center>
                    <h4 class="mx-5">Form Permohonan Test Benang</h4>
                </center>
                <hr>
                <div class="row justify-content-center mt-5">
                    <div class="d-flex justify-content-between">
                        <div class="col-sm-4">
                            <div class="row">
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form4Example3">Kepada :</label>
                                    <textarea class="form-control" id="form4Example3" rows="4" name="kepada" readonly>{{ $benang->kepada }}</textarea>
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form4Example3">Dari :</label>
                                    <textarea class="form-control" id="form4Example3" rows="4" name="dari" readonly>{{ $benang->dari }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 mx-3">
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">NO</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="no" value="{{ $benang->no }}"
                                        readonly />
                                </div>
                                <label class="col-sm-4 col-form-label my-2">Tanggal</label>
                                <div class="col-sm-7 my-2">
                                    <input type="date" class="form-control" name="tanggal"
                                        value="{{ $benang->tanggal }}" readonly />
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-2">
                            <div class="row">
                                <textarea type="text" rows="10" cols="1" name="fab" placeholder="FABRIC PHYSICAL TEST TOP URGENT!"
                                    class="form-control" name="fabric" readonly>{{ $benang->fab }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start mt-1">
                        <div class="col-sm-4">
                            <label for="" class="form-label">Dengan ini kami kirimkan sebanyak</label>
                        </div>
                        <div class="col-sm-1">
                            <input type="text" class="form-control" name="jumlah_sample"
                                value="{{ $benang->jumlah_sample }}" readonly />
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
                                            value="{{ $benang->identitas }}" readonly />
                                    </div>
                                    <label class="col-sm-4 col-form-label my-2">Greige Supply</label>
                                    <div class="col-sm-7 my-2">
                                        <input type="text" class="form-control" name="greige_supply"
                                            value="{{ $benang->greige_supply }}" readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">Article</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="article"
                                        value="{{ $benang->article }}" readonly />
                                </div>
                                <label class="col-sm-4 col-form-label my-2">Construction</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="construction"
                                        value="{{ $benang->construction }}" readonly />
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">Weave</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="weave"
                                        value="{{ $benang->weave }}" readonly />
                                </div>
                                <label class="col-sm-4 col-form-label my-2">Greige Width</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="greige_width"
                                        value="{{ $benang->greige_width }}" readonly />
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
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="Yes" name="construction">
                                            <label class="form-check-label" for="inlineCheckbox1"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">Nomor Benang</label>
                                    <div class="col-sm-4">
                                        <div class="form-check form-check-inline mt-3">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="Yes" name="nomor_benang">
                                            <label class="form-check-label" for="inlineCheckbox1"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">Twisting</label>
                                    <div class="col-sm-4">
                                        <div class="form-check form-check-inline mt-3">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="Yes" name="twisting">
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
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="Yes" name="komposisi_serat">
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
                                <center><label type="text" name="" id="" class="form-label">Identitas</label>
                                </center>
                            </div>
                            <div class="col-sm-2">
                                <center><label type="text" name="" id="" class="form-label">Greige Supply</label>
                                </center>
                            </div>
                            <div class="col-sm-2">
                                <center><label type="text" name="" id="" class="form-label">Article</label>
                                </center>
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
                                    value="{{ $benang->lampiran1_identitas }}" readonly>
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran1_greige_supply"
                                    value="{{ $benang->lampiran1_greige_supply }}" readonly>
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran1_article"
                                    value="{{ $benang->lampiran1_article }}" readonly>
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran1_weave"
                                    value="{{ $benang->lampiran1_weave }}" readonly>
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran1_construction"
                                    value="{{ $benang->lampiran1_construction }}" readonly>
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran1_greige_width"
                                    value="{{ $benang->lampiran1_greige_width }}" readonly>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran2_identitas"
                                    value="{{ $benang->lampiran2_identitas }}" readonly>
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran2_greige_supply"
                                    value="{{ $benang->lampiran2_greige_supply }}" readonly>
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran2_article"
                                    value="{{ $benang->lampiran2_article }}" readonly>
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran2_weave"
                                    value="{{ $benang->lampiran2_weave }}" readonly>
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran2_construction"
                                    value="{{ $benang->lampiran2_construction }}" readonly>
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran2_greige_width"
                                    value="{{ $benang->lampiran2_greige_width }}" readonly>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran3_identitas"
                                    value="{{ $benang->lampiran3_identitas }}" readonly>
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran3_greige_supply"
                                    value="{{ $benang->lampiran3_greige_supply }}" readonly>
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran3_article"
                                    value="{{ $benang->lampiran3_article }}" readonly>
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran3_weave"
                                    value="{{ $benang->lampiran3_weave }}" readonly>
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran3_construction"
                                    value="{{ $benang->lampiran3_construction }}" readonly>
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran3_greige_width"
                                    value="{{ $benang->lampiran3_greige_width }}" readonly>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran4_identitas"
                                    value="{{ $benang->lampiran4_identitas }}" readonly>
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran4_greige_supply"
                                    value="{{ $benang->lampiran4_greige_supply }}" readonly>
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran4_article"
                                    value="{{ $benang->lampiran4_article }}" readonly>
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran4_weave"
                                    value="{{ $benang->lampiran4_weave }}" readonly>
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran4_construction"
                                    value="{{ $benang->lampiran4_construction }}" readonly>
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran4_greige_width"
                                    value="{{ $benang->lampiran4_greige_width }}" readonly>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran5_identitas"
                                    value="{{ $benang->lampiran5_identitas }}" readonly>
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran5_greige_supply"
                                    value="{{ $benang->lampiran5_greige_supply }}" readonly>
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran5_article"
                                    value="{{ $benang->lampiran5_article }}" readonly>
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran5_weave"
                                    value="{{ $benang->lampiran5_weave }}" readonly>
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran5_construction"
                                    value="{{ $benang->lampiran5_construction }}" readonly>
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="" class="form-control" name="lampiran5_greige_width"
                                    value="{{ $benang->lampiran5_greige_width }}" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end mb-5 mt-3">
                        <div class="col-lg-1">
                            <a href="" class="btn btn-success" onclick="printme()"><span
                                    data-feather="printer"></span></a>
                        </div>
                    </div>

                </div>
            </main>
        </div>
    </div>




    <script src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script src="{{ url('https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js') }}"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/dashboard.js') }}"></script>

    <script src="{{ url('https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js') }}"></script>


    <script type="text/javascript"
        src="{{ url('https://cdn.datatables.net/v/bs5/dt-1.11.5/b-2.2.2/b-html5-2.2.2/fc-4.0.2/rg-1.1.4/datatables.min.js') }}">
    </script>
    <script>
        function printme() {

            window.print();
        }
    </script>
</body>

</html>
