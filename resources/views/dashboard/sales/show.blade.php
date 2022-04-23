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
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h3 class="h2 text-center">FORM DEVELOPMENT REQUEST</h3>

                </div>
                <div class="row justify-content-center">
                    <div class="d-flex justify-content-between">
                        <div class="col-sm-6">
                            <div class="row">
                                <input type="hidden" name="form_request_development_id">
                                <label class="col-sm-4 col-form-label my-2">NO</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="no" value="{{ $sales->no }}"
                                        readonly />
                                </div>
                                <label class="col-sm-4 col-form-label my-2">DATE</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="no" value="{{ $sales->date }}"
                                        readonly />

                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">NAME</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="no" value="{{ $sales->name }}"
                                        readonly />
                                </div>
                                <label class="col-sm-4 col-form-label my-2">CUSTOMER</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="no" value="{{ $sales->customer }}"
                                        readonly />

                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">OPPORTUNITY ORDER</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="no"
                                        value="{{ $sales->opportunity_order }}" readonly />

                                </div>
                                <label class="col-sm-4 col-form-label my-2">TARGET DATE</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="no"
                                        value=" {{ $sales->target_date }}" readonly />

                                </div>
                                <hr class="mt-2">
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">PURPOSE </label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="no"
                                        value=" {{ $sales->purpose }}" readonly />

                                </div>
                                <hr class="mt-4">
                            </div>
                            <div class="row">
                                <div class="col-sm-2 my-2">
                                    <label for="">DETAILS</label>
                                </div>
                                <div class="col-sm-10 mt-4">
                                    <div class="mb-3 row">
                                        <label class="col-sm-4 col-form-label my-2">ARTICLE CODE</label>
                                        <div class="col-sm-8 " id="show">
                                            <input type="text" class="form-control my-2" name="article_code"
                                                value="{{ $sales->article_code }}" readonly />
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-4 col-form-label my-2">WIDTH</label>
                                        <div class="col-sm-4 ">
                                            <input type="text" class="form-control my-2" name="article_code"
                                                value="{{ $sales->width }}" readonly />

                                            {{-- <div class="form-check form-check-inline mt-3">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Greige" name="width">
                <label class="form-check-label" for="inlineCheckbox1">GREIGE</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Finish" name="width">
                <label class="form-check-label" for="inlineCheckbox2">FINISH</label>
              </div> --}}
                                        </div>
                                        <div class="col-sm-3 ">
                                            <input type="text" class="form-control my-2" name="width_value"
                                                value="{{ $sales->width_value }}" readonly />
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-4 col-form-label my-2">SAMPLE</label>
                                        <div class="col-sm-2 ">
                                            <input type="text" class="form-control my-2" name="width_value"
                                                value="{{ $sales->sample }}" readonly />
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-4 col-form-label my-2">HANDFEEL TARGET</label>
                                        <div class="col-sm-2 ">
                                            {{-- <div class="form-check form-check-inline mt-3">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="YES" name="handfeel_target"/>
                    <label class="form-check-label" for="inlineRadio1">YES</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="NO" name="handfeel_target"/>
                    <label class="form-check-label" for="inlineRadio2">NO</label>
                  </div> --}}
                                            <input type="text" class="form-control my-2" name="width_value"
                                                value="{{ $sales->handfeel_target }}" readonly />

                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-4 col-form-label my-2">END USE</label>
                                        <div class="col-sm-8 ">
                                            <input type="text" class="form-control my-2" name="end_use"
                                                value="{{ $sales->end_use }}" readonly />

                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-4 col-form-label my-2">REQUEST DESIGN</label>
                                        <div class="col-sm-8 ">
                                            {{-- <div class="form-check form-check-inline mt-3">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="3" onclick="hideShowDiv(3)"/>
                      <label class="form-check-label" for="inlineRadio1">YES</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="4" onclick="hideShowDiv(4)"/>
                      <label class="form-check-label" for="inlineRadio2">NO</label>
                    </div> --}}
                                            <input type="text" class="form-control my-2" name="request_design"
                                                value="{{ $sales->request_design }}" readonly />

                                        </div>
                                        {{-- <div class="col-sm-4 " id="rd">
                
              </div> --}}
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-4 col-form-label my-2">REQUEST COLOR</label>
                                        <div class="col-sm-8 ">
                                            {{-- <div class="form-check form-check-inline mt-3">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="5" onclick="hideShowDiv(5)"/>
                      <label class="form-check-label" for="inlineRadio1">YES</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="6" onclick="hideShowDiv(6)"/>
                      <label class="form-check-label" for="inlineRadio2">NO</label>
                    </div> --}}
                                            <input type="text" class="form-control my-2" name="request_color"
                                                value="{{ $sales->request_color }}" readonly />

                                        </div>
                                        {{-- <div class="col-sm-4 " id="rc">
                
              </div> --}}
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-4 col-form-label my-2">SPECIAL FINISH</label>
                                        <div class="col-sm-8 ">
                                            {{-- <div class="form-check form-check-inline mt-3">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="7" onclick="hideShowDiv(7)"/>
                      <label class="form-check-label" for="inlineRadio1">YES</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="8" onclick="hideShowDiv(8)"/>
                      <label class="form-check-label" for="inlineRadio2">NO</label>
                    </div> --}}
                                            <input type="text" class="form-control my-2" name="special_finish"
                                                value="{{ $sales->special_finish }}" readonly />

                                        </div>
                                        {{-- <div class="col-sm-4 " id="sf">
                
              </div> --}}
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-4 col-form-label my-2">SHRINGKAGE</label>
                                        <div class="col-sm-2 ">
                                            {{-- <div class="form-check form-check-inline mt-3">
                    <input class="form-check-input" type="radio" name="shrinkage" id="inlineRadio1" value="A"/>
                    <label class="form-check-label" for="inlineRadio1">A</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="shrinkage" id="inlineRadio2" value="B"/>
                    <label class="form-check-label" for="inlineRadio2">B</label>
                  </div> --}}
                                            <input type="text" class="form-control my-2" name="special_finish"
                                                value="{{ $sales->shrinkage }}" readonly />


                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-4 col-form-label my-2">SAMPLE NEEDED</label>
                                        <div class="col-sm-4 ">
                                            {{-- <div class="form-check form-check-inline mt-3">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                  <small><label class="form-check-label" for="inlineCheckbox1">HANGER</label></small>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                  <small><label class="form-check-label " for="inlineCheckbox2">YARDAGE</label></small>
                </div> --}}
                                            <input type="text" class="form-control my-2" name="special_finish"
                                                value="{{ $sales->sample_needed1 }}" readonly />


                                        </div>
                                        <div class="col-sm-4 ">
                                            <input type="text" class="form-control my-2" name="special_finish"
                                                value="{{ $sales->sample_needed2 }}" readonly />

                                        </div>
                                        <div class="col-sm-4 justify-content-end">
                                            <input type="text" class="form-control my-2" name="sample_needed_value"
                                                value="{{ $sales->sample_needed_value }}" hidden />

                                        </div>
                                        <div class="col-sm-6 justify-content-end">
                                            <input type="text" class="form-control my-2" name="sample_needed_value"
                                                value="{{ $sales->sample_needed_value }}" readonly />

                                        </div>
                                    </div>

                                    {{-- <div class="input-group mb-3 row">
                                        <label class="col-sm-4 col-form-label my-2">Status</label> --}}
                                    {{-- <select class="form-select" id="inputGroupSelect01">
                <option value="Waiting Approval" selected>Waiting Approval</option>
                <option value="Send To Marketing">Send To Marketing</option>
              </select> --}}
                                    {{-- {{ $sales->status }}
                                    </div> --}}

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <textarea type="text" class="form-control mb-3 my-2 mx-2" placeholder="ADDITIONAL INFORMATION :" rows="13" cols="5"
                                name="note" readonly>{{ $sales->note }}</textarea>

                        </div>
                    </div>
                    <div class="d-flex justify-content-end mb-5">
                        <div class="col-lg-1">
                            <a href="" class="btn btn-success" onclick="printme()"><span
                                    data-feather="printer"></span></a>
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
