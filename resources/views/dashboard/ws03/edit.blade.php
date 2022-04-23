@extends('dashboard.layouts.main')

@section('title', 'Edit WS03 Data')

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
            <form action="{{ route('ws03.update', ['ws03' => $ws03->id]) }}" method="post">
                @csrf
                @method('put')
                <div class="row justify-content-center">
                    <div class="d-flex justify-content-between">
                        <div class="col-sm-6">
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">CUST NO</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="cust_no"
                                        value="{{ $ws03->cust_no }}" />
                                </div>
                                <label class="col-sm-4 col-form-label my-2">CUSTOMER</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="customer"
                                        value="{{ $ws03->customer }}" />
                                </div>
                                <label class="col-sm-4 col-form-label my-2">SUBSTRAT</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="substrat"
                                        value="{{ $ws03->substrat }}" />
                                </div>
                                <label class="col-sm-4 col-form-label my-2">LGTH-CH</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="lgth_ch"
                                        value="{{ $ws03->lgth_ch }}" />
                                </div>
                                <label class="col-sm-4 col-form-label my-2">COMMENT</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="comment"
                                        value="{{ $ws03->comment }}" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">ARTICLE-NO/DESC</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="article_no_desc"
                                        value="{{ $ws03->article_no_desc }}" />
                                </div>
                                <label class="col-sm-4 col-form-label my-2">VA</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="va" value="{{ $ws03->va }}" />
                                </div>
                                <label class="col-sm-4 col-form-label my-2">F</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="f" value="{{ $ws03->f }}" />
                                </div>
                                <label class="col-sm-4 col-form-label my-2">ARTICLE-DESCRIP</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="article_descrip"
                                        value="{{ $ws03->article_descrip }}" />
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
                                <input type="text" class="form-control" name="t_wd" value="{{ $ws03->t_wd }}" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="row">
                            <label class="col-sm-4 col-form-label my-2">g/rmt</label>
                            <div class="col-sm-7 my-2">
                                <input type="text" class="form-control" name="g_rmt" value="{{ $ws03->g_rmt }}" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="row">
                            <label class="col-sm-4 col-form-label my-2">g/sqm</label>
                            <div class="col-sm-7 my-2">
                                <input type="text" class="form-control" name="g_sqm" value="{{ $ws03->g_sqm }}" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="col-sm-6">
                        <div class="row">
                            <label class="col-sm-4 col-form-label my-2">TcWa</label>
                            <div class="col-sm-7 my-2">
                                <input type="text" class="form-control" name="tcwa" value="{{ $ws03->tcwa }}" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <label class="col-sm-4 col-form-label my-2">TcWe</label>
                            <div class="col-sm-7 my-2">
                                <input type="text" class="form-control" name="tcwe" value="{{ $ws03->tcwe }}" />
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
                                <input type="text" class="form-control" name="supplier"
                                    value="{{ $ws03->supplier }}" />
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 col-form-label my-2">NEW DATE</label>
                            <div class="col-sm-7 my-2">
                                <input type="text" class="form-control" name="new_date"
                                    value="{{ $ws03->new_date }}" />
                            </div>
                        </div>
                        <input type="hidden" name="no2">
                        <div class="row">
                            <label class="col-sm-4 col-form-label my-2">MATERIAL</label>
                            <div class="col-sm-7 my-2">
                                <input type="text" class="form-control" name="material"
                                    value="{{ $ws03->material }}" />
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 col-form-label my-2">ORDER</label>
                            <div class="col-sm-7 my-2">
                                <input type="text" class="form-control" name="order" value="{{ $ws03->order }}" />
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 col-form-label my-2">FROM GREIGE</label>
                            <div class="col-sm-7 my-2">
                                <input type="text" class="form-control" name="from_greige"
                                    value="{{ $ws03->from_greige }}" />
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 col-form-label my-2">MOD. USER</label>
                            <div class="col-sm-7 my-2">
                                <input type="text" class="form-control" name="mod_user"
                                    value="{{ $ws03->mod_user }}" />
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 col-form-label my-2">PRODSTART</label>
                            <div class="col-sm-7 my-2">
                                <input type="text" class="form-control" name="prodstar"
                                    value="{{ $ws03->prodstar }}" />
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 col-form-label my-2">REEDIN</label>
                            <div class="col-sm-7 my-2">
                                <input type="text" class="form-control" name="reedin" value="{{ $ws03->reedin }}" />
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 col-form-label my-2">S</label>
                            <div class="col-sm-7 my-2">
                                <input type="text" class="form-control" name="s" value="{{ $ws03->s }}" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <label class="col-sm-4 col-form-label my-2">NEW_ENTR</label>
                            <div class="col-sm-7 my-2">
                                <input type="text" class="form-control" name="new_entr"
                                    value="{{ $ws03->new_entr }}" />
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 col-form-label my-2">PrPla-Article</label>
                            <div class="col-sm-7 my-2">
                                <input type="text" class="form-control" name="prpla_article"
                                    value="{{ $ws03->prpla_article }}" />
                                <input type="hidden" name="none1">
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 col-form-label my-2">FINISH</label>
                            <div class="col-sm-7 my-2">
                                <input type="text" class="form-control" name="finish" value="{{ $ws03->finish }}" />
                            </div>
                            <input type="hidden" name="none2">
                        </div>
                        <div class="row">
                            <label class="col-sm-4 col-form-label my-2">ORDER DATE</label>
                            <div class="col-sm-7 my-2">
                                <input type="text" class="form-control" name="ord_date"
                                    value="{{ $ws03->ord_date }}" />
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 col-form-label my-2">SAMPLE</label>
                            <div class="col-sm-7 my-2">
                                <input type="text" class="form-control" name="sample" value="{{ $ws03->sample }}" />
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 col-form-label my-2">MOD. DATE</label>
                            <div class="col-sm-7 my-2">
                                <input type="text" class="form-control" name="mod_date"
                                    value="{{ $ws03->mod_date }}" />
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 col-form-label my-2">WEAVE REPEAT KE</label>
                            <div class="col-sm-7 my-2">
                                <input type="text" class="form-control" name="weave_repeat_ke"
                                    value="{{ $ws03->weave_repeat_ke }}" />
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 col-form-label my-2">PRODEND</label>
                            <div class="col-sm-7 my-2">
                                <input type="text" class="form-control" name="prodend" value="{{ $ws03->prodend }}" />
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
