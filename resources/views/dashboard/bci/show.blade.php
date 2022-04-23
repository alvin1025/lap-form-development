<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LAP | Test Sample Benang</title>

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
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <center>
                        <h1 class="h2 text-center">SAMPLE TEST REPORT</h1>
                    </center>
                </div>
                <div class="row">
                    {{-- <div class="d-flex justify-content-between"> --}}
                    <div class="col-sm-6">
                        <div class="row">
                            <label class="col-sm-4 col-form-label my-2">NO</label>
                            <div class="col-sm-7 my-2">
                                <input type="text" class="form-control @error('no') is-invalid @enderror" name="no"
                                    value="{{ $bci->no }}" readonly />
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
                                    value="{{ $bci->date }}" readonly />
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
                            <input type="text" class="form-control @error('customer') is-invalid @enderror"
                                name="customer" value="{{ $bci->customer }}" readonly />
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
                            <input type="date" class="form-control @error('tanggal_memo') is-invalid @enderror"
                                name="tanggal_memo" value="{{ $bci->tanggal_memo }}" readonly />
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
                            <input type="text" class="form-control @error('nomor_memo') is-invalid @enderror"
                                name="nomor_memo" value="{{ $bci->nomor_memo }}" readonly />
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
                            <input type="text" class="form-control @error('jenis_sample') is-invalid @enderror"
                                name="jenis_sample" value="{{ $bci->jenis_sample }}" readonly />
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
                                name="aktual_ne1_pakan" value="{{ $bci->aktual_ne1_pakan }}" readonly />
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
                                name="arah_twist_pakan" value="{{ $bci->arah_twist_pakan }}" readonly />
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
                                class="form-control @error('ne1_lycra') is-invalid @enderror" name="ne1_lycra"
                                readonly />
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
                                class="form-control @error('tpi_pakan') is-invalid @enderror" name="tpi_pakan"
                                readonly />
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
                            <input type="text" class="form-control @error('cv_tpi_pakan') is-invalid @enderror"
                                name="cv_tpi_pakan" value="{{ $bci->cv_tpi_pakan }}" readonly />
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
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                value="1" onclick="hideShowDiv(1)" />
                            <label class="form-check-label" for="inlineRadio1">YES</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                value="2" onclick="hideShowDiv(2)" />
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
                                    class="form-control @error('ne1_slub') is-invalid @enderror" name="ne1_slub"
                                    readonly />
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
                                    name="rata_length" value="{{ $bci->rata_length }}" readonly />
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
                                    name="min_length" value="{{ $bci->min_length }}" readonly />
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
                                    name="max_length" value="{{ $bci->max_length }}" readonly />
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
                                <input type="text" class="form-control @error('ne1_pause') is-invalid @enderror"
                                    name="ne1_pause" value="{{ $bci->ne1_pause }}" readonly />
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
                                    name="rata_distance" value="{{ $bci->rata_distance }}" readonly />
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
                                    name="min_distance" value="{{ $bci->min_distance }}" readonly />
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
                                    name="max_distance" value="{{ $bci->max_distance }}" readonly />
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
                                    name="slub_meter" value="{{ $bci->slub_meter }}" readonly />
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
                                name="aktual_ne1_lusi" value="{{ $bci->aktual_ne1_lusi }}" readonly />
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
                                name="arah_twist_lusi" value="{{ $bci->arah_twist_lusi }}" readonly />
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
                            <input type="text" class="form-control @error('tpi_lusi') is-invalid @enderror"
                                name="tpi_lusi" value="{{ $bci->tpi_lusi }}" readonly />
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
                            <input type="text" class="form-control @error('cv_tpi_lusi') is-invalid @enderror"
                                name="cv_tpi_lusi" value="{{ $bci->cv_tpi_lusi }}" readonly />
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
                        <textarea name="note" class="form-control" id="" cols="30" rows="10" readonly>{{ $bci->note }}</textarea>
                    </div>
                </div>

                </form>



                <div class="d-flex justify-content-end mb-5 mt-3">
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
