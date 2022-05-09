@extends('dashboard.layout.lte')

@section('title', 'Create WS05 Data')

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
                <h3 class="h2 text-center">Master Data WS05</h3>
            </div>
            <form action="{{ route('ws05.store') }}" method="post">
                @csrf
                <div class="row justify-content-center">
                    <div class="d-flex justify-content-between">
                        <div class="col-sm-6">
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">Input Date</label>
                                <div class="col-sm-7 my-2">
                                    <input type="date" class="form-control" name="input_date" />
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">Article Greige</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="article_greige" />
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">Greige Description</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="greige_description" />
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">Variant</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="variant" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">PIC</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="pic" />
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">Article Finish</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="article_finish" />
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">Composition</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="composition" />
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">Customer</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="customer" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <center>
                        <h6>FINISH WIDTH</h6>
                    </center>
                    <div class="d-flex justify-content-between">
                        <div class="col-sm-4">
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">Standar Full width WS05</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="standar_full_width_ws05" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">Width from</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="finish_width_from" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">Width to</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="finish_width_to" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="col-sm-6">
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">INC</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="fw_inc" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">LABEL INC</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="fw_label_inc" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <center>
                        <h6>GREIGE IDENTITY</h6>
                    </center>
                    <div class="d-flex justify-content-between">
                        <div class="col-sm-4">
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">LUSI</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="greige_lusi" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">PAKAN</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="greige_pakan" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">LEBAR</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="greige_lebar" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="col-sm-6">
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">GRM</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="greige_grm" />
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">Ne LUSI</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="greige_ne_lusi" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">GSM</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="greige_gsm" />
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">Ne Pakan</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="greige_ne_pakan" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <center>
                        <h6>FINISH IDENTITY</h6>
                    </center>
                    <div class="d-flex justify-content-between">
                        <div class="col-sm-6">
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">KONSTRUKSI LUSI</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="finish_identity_konstruksi_lusi" />
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">GRMT</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="finish_identity_konstruksi_grmt" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">KONSTRUKSI PAKAN</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="finish_identity_konstruksi_pakan" />
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">GSQM</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="finish_identity_konstruksi_gsqm" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="col-sm-12">
                            <div class="row">
                                <label class="col-sm-4 col-form-label my-2">Status</label>
                                <div class="col-sm-7 my-2">
                                    <input type="text" class="form-control" name="status" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-end mb-5">
                        <div class="col-sm-1">
                            <button type="submit" class="btn btn-primary">SUBMIT</button>
                        </div>
                    </div>
            </form>

        </div>
    </div>

@endsection
