<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LAP | @yield('title')</title>

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
                <div
                    class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <center>
                        <h1 class="h2 text-center">FORMS REQUEST DEVELOPMENT</h1>

                    </center>
                </div>
                {{-- <forms action="/dashboard/formsrequest" method="POST"> --}}
                {{-- @csrf --}}
                <div class="d-flex justify-content-between">
                    <div class="col-sm-6">
                        <div class="row">
                            <label class="col-sm-4 col-form-label my-2">DEV TYPE & L/T</label>
                            <div class="col-sm-7 my-3">
                                @if ($marketing->dev_model_id != '')
                                    <input type="text" class="form-control" readonly
                                        value="{{ $marketing->devmodel->lead_time }} | {{ $marketing->devmodel->total_time }}" />
                                @else
                                    <input type="text" class="form-control" readonly
                                        value="DEV TYPE & L/T Belum Diisi" />
                                @endif

                            </div>
                            <label class="col-sm-4 col-form-label my-2">DUE DATE</label>
                            <div class="col-sm-7 my-3">
                                <input type="text" class="form-control" readonly
                                    value=" {{ $marketing->due_date }}" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <label class="col-sm-4 col-form-label my-2">DATE</label>
                            <div class="col-sm-7 my-3">
                                <input type="text" class="form-control" readonly
                                    value=" {{ $marketing->date_in }}" />
                            </div>
                            <label class="col-sm-4 col-form-label my-2">NO.</label>
                            <div class="col-sm-7 my-3">
                                <input type="text" class="form-control" readonly value="  {{ $marketing->no }}" />
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 col-form-label my-2">Sales NO.</label>
                            <div class="col-sm-7 my-2">
                                <input type="text" class="form-control" name="form_dev_sales_id" readonly
                                    value="{{ $marketing->formdevsales->no ?? 'Tidak ada Form Dari Sales' }}" />
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-12 mb-2">
                    <h5>SUBJECT</h5>
                    <hr>
                </div>
                <div class="col-lg-12">
                    <textarea type="text" class="form-control @error('subject') is-invalid @enderror mb-3"
                        placeholder="DEVELOPMENT GREIGE TO FINISH" rows="5" cols="12" name="subject"
                        readonly> {{ $marketing->subject }}</textarea>
                </div>

                <hr>

                <div class="col-lg-12 mb-2 mt-5">
                    <h5>DESCRIPTION</h5>
                    <hr>
                </div>

                <div class="d-flex justify-content-between">
                    <div class="col-sm-6">
                        <div class="d-flex justify-content-start mt-1 mb-5">
                            <div class="col-sm-4">
                                <h5>DEVELOPMENT</h5>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" name="" id="" class="form-control"
                                    value="{{ $marketing->jenis_development1 }}" readonly>
                            </div>
                            <div class="col-sm-2">
                                <input type="text" name="development2" id="" class="form-control ml-2"
                                    value="{{ $marketing->development1 }}" readonly>
                            </div>
                            <div class="col-sm-3 mx-3">
                                <h5>MTR</h5>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start mt-1 mb-5">
                            <div class="col-sm-4">
                                <h5>DEVELOPMENT</h5>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" name="" id="" class="form-control"
                                    value="{{ $marketing->jenis_development2 }}" readonly>
                            </div>
                            <div class="col-sm-2">
                                <input type="text" name="development2" id="" class="form-control ml-2"
                                    value="{{ $marketing->development2 }}" readonly>
                            </div>
                            <div class="col-sm-3 mx-3">
                                <h5>MTR</h5>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start">
                            <div class="col-lg-12">
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-forms-label my-2">SOLID </label>
                                    <label class="col-sm-2 col-forms-label my-2">: </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control @error('end_use') is-invalid @enderror"
                                            name="end_use" value="{{ $marketing->solid }}" readonly />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start">
                            <div class="col-lg-12">
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-forms-label ">QUALITY </label>
                                    <label class="col-sm-2 col-forms-label ">: </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control @error('end_use') is-invalid @enderror"
                                            name="end_use" value="{{ $marketing->quality }}" readonly />

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start">
                            <div class="col-lg-12">
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-forms-label ">SPECIAL FINISH </label>
                                    <label class="col-sm-2 col-forms-label">: </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control @error('end_use') is-invalid @enderror"
                                            name="end_use" value="{{ $marketing->special_finish }}" readonly />

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start">
                            <div class="col-lg-12">
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-forms-label">END USE </label>
                                    <label class="col-sm-2 col-forms-label">: </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control @error('end_use') is-invalid @enderror"
                                            name="end_use" value="{{ $marketing->end_use }}" readonly />

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start mt-3">
                            <div class="col-lg-12">
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-forms-label fw-bold">NOTE</label>
                                    <label class="col-sm-2 col-forms-label fw-bold">: </label>
                                    <label class="col-sm-8 col-forms-label fw-bold">MOHON UNTUK ANALISA KEMBALI OLEH R&D
                                        TEAM</label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-3">
                            <div class="col-lg-8">
                                <textarea type="text" class="form-control @error('finishing') is-invalid @enderror mb-3" placeholder="" rows="5"
                                    cols="12" name="note" readonly>{{ $marketing->note }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                {{-- FINISH CONSTRUCTION --}}
                <div class="d-flex justify-content-start mt-2">
                    <div class="col-sm-12">
                        <div class="mb-3 row">
                            <label class="col-sm-4 col-form-label my-2">FINISHED CONSTRUCTION</label>
                            <div class="col-sm-8">
                                <input type="text"
                                    class="form-control @error('finished_cont') is-invalid @enderror my-2"
                                    name="finished_cont" value="{{ $marketing->finished_cont }}" readonly />
                                @error('finished_cont')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="col-sm-4">
                        <div class="row">
                            <label class="col-sm-4 col-form-label ">WEAVE</label>
                            <div class="col-sm-7 ">
                                <input type="text" class="form-control @error('weave_cont') is-invalid @enderror"
                                    name="weave_cont" value=" {{ $marketing->weave_cont }}" readonly />
                                @error('weave_cont')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <label class="col-sm-4 col-form-label "></label>
                            <div class="col-sm-7 ">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="mb-3 row">
                            <label class="col-sm-5 col-form-label ">WIDTH(INCH)</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control @error('width_cont') is-invalid @enderror"
                                    name="width_cont" value="{{ $marketing->width_cont }}" readonly />
                                @error('width_cont')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <label class="col-sm-5 col-form-label"></label>
                            <div class="col-sm-7">

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="mb-3 row mx-2">
                            <label class="col-sm-5 col-form-label ">SHRINGKAGE (%)</label>
                            <div class="col-sm-7 ">
                                <input type="text" class="form-control @error('shringkage_cont') is-invalid @enderror"
                                    name="shringkage_cont" value="{{ $marketing->shringkage_cont }}" readonly />
                                @error('shringkage_cont')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-between">
                    <div class="col-sm-4">
                        <div class="row">
                            <label class="col-sm-4 col-form-label "></label>
                            <div class="col-sm-7 ">
                                {{-- <input type="text" class="form-control @error('weave_cont') is-invalid @enderror" name="weave_cont" /> --}}
                                {{-- @error('weave_cont')
                        <div class="invalid-feedback">
                        {{ $message }}
                        </div>
                        @enderror --}}
                            </div>
                            <label class="col-sm-4 col-form-label "></label>
                            <div class="col-sm-7 ">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="mb-3 row">
                            <label class="col-sm-5 col-form-label ">CUTT WIDTH</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control @error('cutt_width') is-invalid @enderror"
                                    name="cutt_width" value="{{ $marketing->cutt_width }}" readonly />
                                @error('cutt_width')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <label class="col-sm-5 col-form-label"></label>
                            <div class="col-sm-7">

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="mb-3 row mx-2">
                            <label class="col-sm-5 col-form-label "></label>
                            <div class="col-sm-7 ">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-between">
                    <div class="col-sm-8">
                        <div class="mb-3 row">
                            <label class="col-sm-5 col-form-label my-2">FINISHING</label>
                            <div class="col-sm-7 my-2">
                                <input type="text" class="form-control @error('finishing_cont') is-invalid @enderror"
                                    name="finishing_cont" value=" {{ $marketing->finishing_cont }}" readonly />
                                @error('finishing_cont')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="mb-3 row mx-2">
                            <label class="col-sm-5 col-form-label my-2">WEIGHT (GSM)</label>
                            <div class="col-sm-7 my-2">
                                <input type="text" class="form-control @error('weight_cont') is-invalid @enderror"
                                    name="weight_cont" value="{{ $marketing->weight_cont }}" readonly />
                                @error('weight_cont')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                {{-- greige --}}
                <div class="d-flex justify-content-start mt-2">
                    <div class="col-lg-12">
                        <div class="mb-3 row">
                            <label class="col-sm-4 col-forms-label my-2">GREIGE CONSTRUCTION </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control @error('weight_cont') is-invalid @enderror"
                                    name="weight_cont" value="{{ $marketing->greige_contruction }}" readonly />

                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-between">
                    <div class="col-lg-4">
                        <div class="row">
                            <label class="col-sm-4 col-forms-label my-2">WEAVE</label>
                            <div class="col-sm-7 my-2">
                                <input type="text" class="form-control @error('weight_cont') is-invalid @enderror"
                                    name="weight_cont" value="{{ $marketing->weave_greige }}" readonly />

                            </div>
                            <label class="col-sm-4 col-forms-label my-2"></label>
                            <div class="col-sm-7 my-2">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3 row">
                            <label class="col-sm-5 col-forms-label my-2">WIDTH(INCH)</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control @error('weight_cont') is-invalid @enderror"
                                    name="weight_cont" value="{{ $marketing->width_greige }}" readonly />

                            </div>
                            <label class="col-sm-5 col-forms-label"></label>
                            <div class="col-sm-7">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3 row mx-2">
                            <label class="col-sm-5 col-forms-label my-2">WEIGHT(GSM)</label>
                            <div class="col-sm-7 my-2">
                                <input type="text" class="form-control @error('weight_cont') is-invalid @enderror"
                                    name="weight_cont" value="{{ $marketing->weight_greige }}" readonly />

                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                {{-- Yarn --}}
                <div class="d-flex justify-content-start mt-2">
                    <div class="col-lg-12">
                        <div class="mb-3 row">
                            <label class="col-sm-4 col-forms-label my-2">YARN DESCRIPTION</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control @error('weight_cont') is-invalid @enderror"
                                    name="weight_cont" value="{{ $marketing->yarn_description }}" readonly />

                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-between">
                    <div class="col-lg-4">
                        <div class="row">
                            <label class="col-sm-4 col-forms-label my-2">YARN COUNT</label>
                            <div class="col-sm-7 my-2">
                                <input type="text" class="form-control @error('weight_cont') is-invalid @enderror"
                                    name="weight_cont" value="{{ $marketing->yarn_count }}" readonly />

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3 row">
                            <label class="col-sm-5 col-forms-label my-2">(NE/DENIER)</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control @error('weight_cont') is-invalid @enderror"
                                    name="weight_cont" value="{{ $marketing->ne_denier }}" readonly />

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3 row mx-2">
                            <label class="col-sm-5 col-forms-label my-2">WEIGHT(GSM)</label>
                            <div class="col-sm-7 my-2">
                                <input type="text" class="form-control @error('weight_cont') is-invalid @enderror"
                                    name="weight_cont" value="{{ $marketing->weight_yarn }}" readonly />

                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                <div class="d-flex justify-content-end mb-5">
                    <div class="col-lg-1">
                        <a href="" class="btn btn-success" onclick="printme()"><span data-feather="printer"></span></a>
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
