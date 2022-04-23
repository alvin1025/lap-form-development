<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LAP | Master Ws03</title>

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
                        <h1 class="h2 text-center">DATA MASTER WS03</h1>

                    </center>
                </div>
                {{-- <forms action="/dashboard/formsrequest" method="POST"> --}}
                {{-- @csrf --}}
                <form action="/dashboard/ws03" method="post">
                    @csrf
                    <div class="row justify-content-center">
                        <div class="d-flex justify-content-between">
                            <div class="col-sm-6">
                                <div class="row">
                                    <label class="col-sm-4 col-form-label my-2">CUST NO</label>
                                    <div class="col-sm-7 my-2">
                                        <input type="text" class="form-control" name="cust_no"
                                            value="{{ $ws03->cust_no }}" readonly />
                                    </div>
                                    <label class="col-sm-4 col-form-label my-2">CUSTOMER</label>
                                    <div class="col-sm-7 my-2">
                                        <input type="text" class="form-control" name="customer"
                                            value="{{ $ws03->customer }}" readonly />
                                    </div>
                                    <label class="col-sm-4 col-form-label my-2">SUBSTRAT</label>
                                    <div class="col-sm-7 my-2">
                                        <input type="text" class="form-control" name="substrat"
                                            value="{{ $ws03->substrat }}" readonly />
                                    </div>
                                    <label class="col-sm-4 col-form-label my-2">LGTH-CH</label>
                                    <div class="col-sm-7 my-2">
                                        <input type="text" class="form-control" name="lgth_ch"
                                            value="{{ $ws03->lgth_ch }}" readonly />
                                    </div>
                                    <label class="col-sm-4 col-form-label my-2">COMMENT</label>
                                    <div class="col-sm-7 my-2">
                                        <input type="text" class="form-control" name="comment"
                                            value="{{ $ws03->comment }}" readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="row">
                                    <label class="col-sm-4 col-form-label my-2">ARTICLE-NO/DESC</label>
                                    <div class="col-sm-7 my-2">
                                        <input type="text" class="form-control" name="article_no_desc" />
                                    </div>
                                    <label class="col-sm-4 col-form-label my-2">VA</label>
                                    <div class="col-sm-7 my-2">
                                        <input type="text" class="form-control" name="va" />
                                    </div>
                                    <label class="col-sm-4 col-form-label my-2">F</label>
                                    <div class="col-sm-7 my-2">
                                        <input type="text" class="form-control" name="f" />
                                    </div>
                                    <label class="col-sm-4 col-form-label my-2">ARTICLE-DESCRIP</label>
                                    <div class="col-sm-7 my-2">
                                        <input type="text" class="form-control" name="article_descrip" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>

                    <div class="d-flex justify-content-between">
                        <div class="col-sm-4">
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">t-Wd</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="t_wd" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">g/rmt</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="g_rmt" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">g/sqm</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="g_sqm" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="col-sm-6">
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">TcWa</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="tcwa" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">TcWe</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="tcwe" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <div class="col-sm-6">
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">SUPPLIER</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="supplier" />
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">NEW DATE</label>
                                <div class="col-sm-7 my-2">
                                    <input type="date" class="form-control" name="new_date" />
                                </div>
                            </div>
                            <input type="hidden" name="no2">
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">MATERIAL</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="material" />
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">ORDER</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="order" />
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">FROM GREIGE</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="from_greige" />
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">MOD. USER</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="mod_user" />
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">PRODSTART</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="prodstar" />
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">REEDIN</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="reedin" />
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">S</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="s" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">NEW_ENTR</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="new_entr" />
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">PrPla-Article</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="prpla_article" />
                                    <input type="hidden" name="none1">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">FINISH</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="finish" />
                                </div>
                                <input type="hidden" name="none2">
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">ORDER DATE</label>
                                <div class="col-sm-7 my-2">
                                    <input type="date" class="form-control" name="ord_date" />
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">SAMPLE</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="sample" />
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">MOD. DATE</label>
                                <div class="col-sm-7 my-2">
                                    <input type="date" class="form-control" name="mod_user" />
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">WEAVE REPEAT KE</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="weave_repeat_ke" />
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">PRODEND</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="prodend" />
                                </div>
                            </div>

                            <input type="hidden" name="no_3">
                        </div>
                    </div>

                </form>

                <table class="table table-striped table-sm" id="dt-init">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Article-No/Desc</th>
                            <th scope="col">Article-Descrip</th>
                            <th scope="col">Mod.User</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ws03 as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>ss</td>
                                <td>ss}</td>
                                <td>ss</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

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

        $(document).ready(function() {
            'use-strict';
            $('#dt-init').DataTable();
        })
    </script>
</body>

</html>
