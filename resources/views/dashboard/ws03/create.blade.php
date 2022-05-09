@extends('dashboard.layout.lte')

@section('title', 'Create New WS03 Data')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-12">

            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h3 class="h2 text-center">Master Data WS03</h3>
            </div>
            <form action="/dashboard/ws03" method="post">
                @csrf
                <div class="row justify-content-center">
                    <div class="d-flex justify-content-between">
                        <div class="col-sm-6">
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">CUST NO</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="cust_no" />
                                </div>
                                <label class="col-sm-4 col-form-label my-2">CUSTOMER</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="customer" />
                                </div>
                                <label class="col-sm-4 col-form-label my-2">SUBSTRAT</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="substrat" />
                                </div>
                                <label class="col-sm-4 col-form-label my-2">LGTH-CH</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="lgth_ch" />
                                </div>
                                <label class="col-sm-4 col-form-label my-2">COMMENT</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="comment" />
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
                                <input type="date" class="form-control" name="mod_date" />
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



                <div class="d-flex justify-content-end mb-5">
                    <div class="col-sm-1">
                        <button type="submit" class="btn btn-primary">SUBMIT</button>
                    </div>
                </div>

            </form>

        </div>
    </div>

@endsection
