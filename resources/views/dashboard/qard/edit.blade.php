@extends('dashboard.layouts.main')

@section('title', 'Create Development Report')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h3 class="h2 text-center">Master Data Development Report (QARD)</h3>
    </div>

    <form action="{{ route('qard.update', ['qard' => $qard->id]) }}" method="post">
        @csrf
        <div class="row justify-content-center">
            <div class="d-flex justify-content-between">
                <div class="col-sm-6">
                    <div class="row">
                        {{-- <input type="hidden" name="form_request_development_id"> --}}
                        <label class="col-sm-4 col-form-label my-2">Tanggal Masuk</label>
                        <div class="col-sm-7 my-2">
                            <input type="date" class="form-control @error('tgl_masuk') is-invalid @enderror" name="tgl_masuk"
                                value="{{ $qard->tgl_masuk }}" />
                            @error('tgl_masuk')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <label class="col-sm-4 col-form-label my-2">Delivery Time</label>
                        <div class="col-sm-7 my-2">
                            <input type="date" class="form-control @error('delivery_time') is-invalid @enderror"
                                name="delivery_time" {{ $qard->delivery_time }} />
                            @error('delivery_time')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <label class="col-sm-4 col-form-label my-2">Tanggal Proses</label>
                        <div class="col-sm-7 my-2">
                            <input type="date" class="form-control @error('tgl_selesai_proses') is-invalid @enderror"
                                name="tgl_selesai_proses" value="{{ $qard->tgl_selesai_proses }}" />
                            @error('tgl_selesai_proses')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <label class="col-sm-4 col-form-label my-2">Tanggal Selesai Report</label>
                        <div class="col-sm-7 my-2">
                            <input type="date" class="form-control @error('tgl_selesai_report') is-invalid @enderror"
                                name="tgl_selesai_report" value="{{ $qard->tgl_selesai_report }}" />
                            @error('tgl_selesai_report')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-4">

            <div class="row justify-content-center">
                <div class="d-flex justify-content-around mt-3">
                    <div class="col-sm-4">
                        <div class="row">
                            <label class="col-sm-4 col-form-label my-2">Index</label>
                            <div class="col-sm-7 my-2">
                                <input type="text" class="form-control @error('index') is-invalid @enderror" name="index"
                                    value="{{ $qard->index }}" />
                                @error('index')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="row">
                            <label class="col-sm-4 col-form-label my-2">Article Greige</label>
                            <div class="col-sm-7 my-2">
                                <input type="text" class="form-control @error('article_greige') is-invalid @enderror"
                                    name="article_greige" value="{{ $qard->article_greige }}" />
                                @error('article_greige')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="row">
                            <label class="col-sm-4 col-form-label my-2">Article Finish</label>
                            <div class="col-sm-7 my-2">
                                <input type="text" class="form-control @error('article_finish') is-invalid @enderror"
                                    name="article_finish" value="{{ $qard->article_finish }}" />
                                @error('article_finish')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="my-4">

            <div class="col-sm-12 mt-3">
                <div class="row">
                    <label class="col-sm-4 col-form-label my-2">Quality</label>
                    <div class="col-sm-7 my-2">
                        <input type="text" class="form-control @error('quality') is-invalid @enderror" name="quality"
                            value="{{ $qard->quality }}" />
                        @error('quality')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <hr class="my-4">

            <div class="col-sm-12 mt-3">
                <h6>Constuction</h6>
            </div>

            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-6">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">No Benang</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('costruction_no_benang') is-invalid @enderror"
                                name="costruction_no_benang" value="{{ $qard->costruction_no_benang }}" />
                            @error('costruction_no_benang')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Tetal</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('costruction_tetal') is-invalid @enderror"
                                name="costruction_tetal" value="{{ $qard->costruction_tetal }}" />
                            @error('costruction_tetal')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-4">

            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-6">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Finish Width(cm)</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('finish_width') is-invalid @enderror"
                                name="finish_width" value="{{ $qard->finish_width }}" />
                            @error('finish_width')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Qty in (m)</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('qty') is-invalid @enderror" name="qty"
                                value="{{ $qard->qty }}" />
                            @error('qty')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-6">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">F/Method</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('f_method') is-invalid @enderror" name="f_method"
                                value="{{ $qard->f_method }}" />
                            @error('f_method')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Weave</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('weave') is-invalid @enderror" name="weave"
                                value="{{ $qard->weave }}" />
                            @error('weave')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-6">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Width Greige(cm)</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('width_greige') is-invalid @enderror"
                                name="width_greige" value="{{ $qard->width_greige }}" />
                            @error('width_greige')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Supplier</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('supplier') is-invalid @enderror"
                                name="supplier" value="{{ $qard->supplier }}" />
                            @error('supplier')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-6">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Customer</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('customer') is-invalid @enderror"
                                name="customer" value="{{ $qard->customer }}" />
                            @error('customer')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Markering/Sales</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('marketing_sales') is-invalid @enderror"
                                name="marketing_sales" value="{{ $qard->marketing_sales }}" />
                            @error('marketing_sales')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-6">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Purpose</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('purpose') is-invalid @enderror" name="purpose"
                                value="{{ $qard->purpose }}" />
                            @error('purpose')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Target Quality</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('target_quality') is-invalid @enderror"
                                name="target_quality" value="{{ $qard->target_quality }}" />
                            @error('target_quality')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-4">
            {{-- Greige --}}
            <center>
                <h4 class="mt-5">Greige</h4>
            </center>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-6">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Construction</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('greige_construction') is-invalid @enderror"
                                name="greige_construction" value="{{ $qard->greige_construction }}" />
                            @error('greige_construction')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Width</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('greige_width') is-invalid @enderror"
                                name="greige_width" value="{{ $qard->greige_width }}" />
                            @error('greige_width')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <center>
                <h6 class="mt-5">Weight</h6>
            </center>
            <hr>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">I</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('greige_weight_1') is-invalid @enderror"
                                name="greige_weight_1" id="greige_weight_1" onkeyup="getAverage();"
                                value="{{ $qard->greige_weight_1 }}" />
                            @error('greige_weight_1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">II</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('greige_weight_2') is-invalid @enderror"
                                name="greige_weight_2" id="greige_weight_2" onkeyup="getAverage();"
                                value="{{ $qard->greige_weight_2 }}" />
                            @error('greige_weight_2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">III</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('greige_weight_3') is-invalid @enderror"
                                name="greige_weight_3" id="greige_weight_3" onkeyup="getAverage();"
                                value="{{ $qard->greige_weight_3 }}" />
                            @error('greige_weight_3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Rata-rata</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('greige_weight_avg') is-invalid @enderror"
                                name="greige_weight_avg" id="greige_weight_avg" onkeypress="average()"
                                value="{{ $qard->greige_weight_avg }}" />
                            @error('greige_weight_avg')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <center>
                <h6 class="mt-5">Tensile</h6>
            </center>
            <hr>
            <h6 class="mt-2 mx-3">Lusi</h6>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">I</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('greige_tensile_lusi_1') is-invalid @enderror"
                                name="greige_tensile_lusi_1" id="greige_tensile_lusi_1" onkeyup="getAverage();"
                                value="{{ $qard->greige_tensile_lusi_1 }}" />
                            @error('greige_tensile_lusi_1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">II</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('greige_tensile_lusi_2') is-invalid @enderror"
                                name="greige_tensile_lusi_2" id="greige_tensile_lusi_2" onkeyup="getAverage();"
                                value="{{ $qard->greige_tensile_lusi_2 }}" />
                            @error('greige_tensile_lusi_2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">III</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('greige_tensile_lusi_3') is-invalid @enderror"
                                name="greige_tensile_lusi_3" id="greige_tensile_lusi_3" onkeyup="getAverage();"
                                value="{{ $qard->greige_tensile_lusi_3 }}" />
                            @error('greige_tensile_lusi_3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Rata-rata</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('greige_tensile_lusi_avg') is-invalid @enderror"
                                name="greige_tensile_lusi_avg" id="greige_tensile_lusi_avg" onkeypress="average()"
                                value="{{ $qard->greige_tensile_lusi_avg }}" />
                            @error('greige_tensile_lusi_avg')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <h6 class="mt-2 mx-3">Pakan</h6>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">I</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('greige_tensile_pakan_1') is-invalid @enderror"
                                name="greige_tensile_pakan_1" id="greige_tensile_pakan_1" onkeyup="getAverage();"
                                value="{{ $qard->greige_tensile_pakan_1 }}" />
                            @error('greige_tensile_pakan_1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">II</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('greige_tensile_pakan_2') is-invalid @enderror"
                                name="greige_tensile_pakan_2" id="greige_tensile_pakan_2" onkeyup="getAverage();"
                                value="{{ $qard->greige_tensile_pakan_2 }}" />
                            @error('greige_tensile_pakan_2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">III</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('greige_tensile_pakan_3') is-invalid @enderror"
                                name="greige_tensile_pakan_3" id="greige_tensile_pakan_3" onkeyup="getAverage();"
                                value="{{ $qard->greige_tensile_pakan_3 }}" />
                            @error('greige_tensile_pakan_3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Rata-rata</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('greige_tensile_pakan_avg') is-invalid @enderror"
                                name="greige_tensile_pakan_avg" id="greige_tensile_pakan_avg" onkeypress="average()"
                                value="{{ $qard->greige_tensile_pakan_avg }}" />
                            @error('greige_tensile_pakan_avg')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <center>
                <h6 class="mt-5">Tearing</h6>
            </center>
            <hr>
            <h6 class="mt-2 mx-3">Lusi</h6>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">I</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('greige_tearing_lusi_1') is-invalid @enderror"
                                name="greige_tearing_lusi_1" id="greige_tearing_lusi_1" onkeyup="getAverage();"
                                value="{{ $qard->greige_tearing_lusi_1 }}" />
                            @error('greige_tearing_lusi_1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">II</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('greige_tearing_lusi_2') is-invalid @enderror"
                                name="greige_tearing_lusi_2" id="greige_tearing_lusi_2" onkeyup="getAverage();"
                                value="{{ $qard->greige_tearing_lusi_2 }}" />
                            @error('greige_tearing_lusi_2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">III</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('greige_tearing_lusi_3') is-invalid @enderror"
                                name="greige_tearing_lusi_3" id="greige_tearing_lusi_3"
                                value="{{ $qard->greige_tearing_lusi_3 }}" onkeyup="getAverage();" />
                            @error('greige_tearing_lusi_3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Rata-rata</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('greige_tearing_lusi_avg') is-invalid @enderror"
                                name="greige_tearing_lusi_avg" id="greige_tearing_lusi_avg" onkeypress="average()"
                                value="{{ $qard->greige_tearing_lusi_avg }}" />
                            @error('greige_tearing_lusi_avg')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <h6 class="mt-2 mx-3">Pakan</h6>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">I</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('greige_tearing_pakan_1') is-invalid @enderror"
                                name="greige_tearing_pakan_1" id="greige_tearing_pakan_1" onkeyup="getAverage();"
                                value="{{ $qard->greige_tearing_pakan_1 }}" />
                            @error('greige_tearing_pakan_1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">II</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('greige_tearing_pakan_2') is-invalid @enderror"
                                name="greige_tearing_pakan_2" id="greige_tearing_pakan_2" onkeyup="getAverage();"
                                value="{{ $qard->greige_tearing_pakan_2 }}" />
                            @error('greige_tearing_pakan_2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">III</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('greige_tearing_pakan_3') is-invalid @enderror"
                                name="greige_tearing_pakan_3" id="greige_tearing_pakan_3" onkeyup="getAverage();"
                                value="{{ $qard->greige_tearing_pakan_3 }}" />
                            @error('greige_tearing_pakan_3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Rata-rata</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('greige_tearing_pakan_avg') is-invalid @enderror"
                                name="greige_tearing_pakan_avg" id="greige_tearing_pakan_avg" onkeypress="average()"
                                value="{{ $qard->greige_tearing_pakan_avg }}" />
                            @error('greige_tearing_pakan_avg')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            {{-- PFD --}}
            <hr class="my-4">
            <center>
                <h4 class="mt-5">PFD</h4>
            </center>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-6">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Construction</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('pfd_construction') is-invalid @enderror"
                                name="pfd_construction" value="{{ $qard->pfd_construction }}" />
                            @error('pfd_construction')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Width</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('pfd_width') is-invalid @enderror"
                                name="pfd_width" value="{{ $qard->pfd_width }}" />
                            @error('pfd_width')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <center>
                <h6 class="mt-5">Weight</h6>
            </center>
            <hr>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">I</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('pfd_weight_1') is-invalid @enderror"
                                name="pfd_weight_1" value="{{ $qard->pfd_weight_1 }}" />
                            @error('pfd_weight_1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">II</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('pfd_weight_2') is-invalid @enderror"
                                name="pfd_weight_2" value="{{ $qard->pfd_weight_2 }}" />
                            @error('pfd_weight_2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">III</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('pfd_weight_3') is-invalid @enderror"
                                name="pfd_weight_3" value="{{ $qard->pfd_weight_3 }}" />
                            @error('pfd_weight_3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <center>
                <h6 class="mt-5">Tensile</h6>
            </center>
            <hr>
            <h6 class="mt-2 mx-3">Lusi</h6>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">I</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('pfd_tensile_lusi_1') is-invalid @enderror"
                                name="pfd_tensile_lusi_1" value="{{ $qard->pfd_tensile_lusi_1 }}" />
                            @error('pfd_tensile_lusi_1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">II</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('pfd_tensile_lusi_2') is-invalid @enderror"
                                name="pfd_tensile_lusi_2" value="{{ $qard->pfd_tensile_lusi_2 }}" />
                            @error('pfd_tensile_lusi_2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">III</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('pfd_tensile_lusi_3') is-invalid @enderror"
                                name="pfd_tensile_lusi_3" value="{{ $qard->pfd_tensile_lusi_3 }}" />
                            @error('pfd_tensile_lusi_3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <h6 class="mt-2 mx-3">Pakan</h6>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">I</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('pfd_tensile_pakan_1') is-invalid @enderror"
                                name="pfd_tensile_pakan_1" value="{{ $qard->pfd_tensile_pakan_1 }}" />
                            @error('pfd_tensile_pakan_1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">II</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('pfd_tensile_pakan_2') is-invalid @enderror"
                                name="pfd_tensile_pakan_2" value="{{ $qard->pfd_tensile_pakan_2 }}" />
                            @error('pfd_tensile_pakan_2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">III</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('pfd_tensile_pakan_3') is-invalid @enderror"
                                name="pfd_tensile_pakan_3" value="{{ $qard->pfd_tensile_pakan_3 }}" />
                            @error('pfd_tensile_pakan_3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <center>
                <h6 class="mt-5">Tearing</h6>
            </center>
            <hr>
            <h6 class="mt-2 mx-3">Lusi</h6>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">I</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('pfd_tearing_lusi_1') is-invalid @enderror"
                                name="pfd_tearing_lusi_1" value="{{ $qard->pfd_tearing_lusi_1 }}" />
                            @error('pfd_tearing_lusi_1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">II</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('pfd_tearing_lusi_2') is-invalid @enderror"
                                name="pfd_tearing_lusi_2" value="{{ $qard->pfd_tearing_lusi_2 }}" />
                            @error('pfd_tearing_lusi_2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">III</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('pfd_tearing_lusi_3') is-invalid @enderror"
                                name="pfd_tearing_lusi_3" value="{{ $qard->pfd_tearing_lusi_3 }}" />
                            @error('pfd_tearing_lusi_3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <h6 class="mt-2 mx-3">Pakan</h6>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">I</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('pfd_tearing_pakan_1') is-invalid @enderror"
                                name="pfd_tearing_pakan_1" value="{{ $qard->pfd_tearing_pakan_1 }}" />
                            @error('pfd_tearing_pakan_1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">II</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('pfd_tearing_pakan_2') is-invalid @enderror"
                                name="pfd_tearing_pakan_2" value="{{ $qard->pfd_tearing_pakan_2 }}" />
                            @error('pfd_tearing_pakan_2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">III</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('pfd_tearing_pakan_3') is-invalid @enderror"
                                name="pfd_tearing_pakan_3" value="{{ $qard->pfd_tearing_pakan_3 }}" />
                            @error('pfd_tearing_pakan_3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            {{-- Shrinkage --}}
            <center>
                <h6 class="mt-5">Shrinkage</h6>
            </center>
            <hr>
            <h6 class="mt-2 mx-3">Lusi</h6>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">I</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('pfd_shrinkage_lusi_1') is-invalid @enderror"
                                name="pfd_shrinkage_lusi_1" value="{{ $qard->pfd_shrinkage_lusi_1 }}" />
                            @error('pfd_shrinkage_lusi_1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">II</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('pfd_shrinkage_lusi_2') is-invalid @enderror"
                                name="pfd_shrinkage_lusi_2" value="{{ $qard->pfd_shrinkage_lusi_2 }}" />
                            @error('pfd_shrinkage_lusi_2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">III</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('pfd_shrinkage_lusi_3') is-invalid @enderror"
                                name="pfd_shrinkage_lusi_3" value="{{ $qard->pfd_shrinkage_lusi_3 }}" />
                            @error('pfd_shrinkage_lusi_3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <h6 class="mt-2 mx-3">Pakan</h6>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">I</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('pfd_shrinkage_pakan_1') is-invalid @enderror"
                                name="pfd_shrinkage_pakan_1" value="{{ $qard->pfd_shrinkage_pakan_1 }}" />
                            @error('pfd_shrinkage_pakan_1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">II</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('pfd_shrinkage_pakan_2') is-invalid @enderror"
                                name="pfd_shrinkage_pakan_2" value="{{ $qard->pfd_shrinkage_pakan_2 }}" />
                            @error('pfd_shrinkage_pakan_2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">III</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('pfd_shrinkage_pakan_3') is-invalid @enderror"
                                name="pfd_shrinkage_pakan_3" value="{{ $qard->pfd_shrinkage_pakan_3 }}" />
                            @error('pfd_shrinkage_pakan_3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Lebar After Shrinkage</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('pfd_lebar_after_shrinkage') is-invalid @enderror"
                                name="pfd_lebar_after_shrinkage" value="{{ $qard->pfd_lebar_after_shrinkage }}" />
                            @error('pfd_lebar_after_shrinkage')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Stretch</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('pfd_stretch') is-invalid @enderror"
                                name="pfd_stretch" value="{{ $qard->pfd_stretch }}" />
                            @error('pfd_stretch')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Pilling Resistance</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('pfd_pilling_resistance') is-invalid @enderror"
                                name="pfd_pilling_resistance" value="{{ $qard->pfd_pilling_resistance }}" />
                            @error('pfd_pilling_resistance')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            {{-- PFD OPT 2 --}}

            {{-- PFD --}}
            <hr class="my-4">
            <center>
                <h4 class="mt-5">PFD OPTION 2</h4>
            </center>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-6">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Construction</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('pfd_construction_opt_2') is-invalid @enderror"
                                name="pfd_construction_opt_2" value="{{ $qard->pfd_construction_opt_2 }}" />
                            @error('pfd_construction_opt_2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Width</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('pfd_width_opt2') is-invalid @enderror"
                                name="pfd_width_opt2" value="{{ $qard->pfd_width_opt2 }}" />
                            @error('pfd_width_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <center>
                <h6 class="mt-5">Weight</h6>
            </center>
            <hr>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">I</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('pfd_weight_1_opt2') is-invalid @enderror"
                                name="pfd_weight_1_opt2" value="{{ $qard->pfd_weight_1_opt2 }}" />
                            @error('pfd_weight_1_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">II</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('pfd_weight_2_opt2') is-invalid @enderror"
                                name="pfd_weight_2_opt2" value="{{ $qard->pfd_weight_2_opt2 }}" />
                            @error('pfd_weight_2_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">III</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('pfd_weight_3_opt2') is-invalid @enderror"
                                name="pfd_weight_3_opt2" value="{{ $qard->pfd_weight_3_opt2 }}" />
                            @error('pfd_weight_3_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <center>
                <h6 class="mt-5">Tensile</h6>
            </center>
            <hr>
            <h6 class="mt-2 mx-3">Lusi</h6>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">I</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('pfd_tensile_lusi_1_opt2') is-invalid @enderror"
                                name="pfd_tensile_lusi_1_opt2" value="{{ $qard->pfd_tensile_lusi_1_opt2 }}" />
                            @error('pfd_tensile_lusi_1_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">II</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('pfd_tensile_lusi_2_opt2') is-invalid @enderror"
                                name="pfd_tensile_lusi_2_opt2" value="{{ $qard->pfd_tensile_lusi_2_opt2 }}" />
                            @error('pfd_tensile_lusi_2_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">III</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('pfd_tensile_lusi_3_opt2') is-invalid @enderror"
                                name="pfd_tensile_lusi_3_opt2" value="{{ $qard->pfd_tensile_lusi_3_opt2 }}" />
                            @error('pfd_tensile_lusi_3_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <h6 class="mt-2 mx-3">Pakan</h6>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">I</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('pfd_tensile_pakan_1_opt2') is-invalid @enderror"
                                name="pfd_tensile_pakan_1_opt2" value="{{ $qard->pfd_tensile_pakan_1_opt2 }}" />
                            @error('pfd_tensile_pakan_1_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">II</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('pfd_tensile_pakan_2_opt2') is-invalid @enderror"
                                name="pfd_tensile_pakan_2_opt2" value="{{ $qard->pfd_tensile_pakan_2_opt2 }}" />
                            @error('pfd_tensile_pakan_2_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">III</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('pfd_tensile_pakan_3_opt2') is-invalid @enderror"
                                name="pfd_tensile_pakan_3_opt2" value="{{ $qard->pfd_tensile_pakan_3_opt2 }}" />
                            @error('pfd_tensile_pakan_3_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <center>
                <h6 class="mt-5">Tearing</h6>
            </center>
            <hr>
            <h6 class="mt-2 mx-3">Lusi</h6>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">I</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('pfd_tearing_lusi_1_opt2') is-invalid @enderror"
                                name="pfd_tearing_lusi_1_opt2" value="{{ $qard->pfd_tearing_lusi_1_opt2 }}" />
                            @error('pfd_tearing_lusi_1_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">II</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('pfd_tearing_lusi_2_opt2') is-invalid @enderror"
                                name="pfd_tearing_lusi_2_opt2" value="{{ $qard->pfd_tearing_lusi_2_opt2 }}" />
                            @error('pfd_tearing_lusi_2_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">III</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('pfd_tearing_lusi_3_opt2') is-invalid @enderror"
                                name="pfd_tearing_lusi_3_opt2" value="{{ $qard->pfd_tearing_lusi_3_opt2 }}" />
                            @error('pfd_tearing_lusi_3_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <h6 class="mt-2 mx-3">Pakan</h6>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">I</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('pfd_tearing_pakan_1_opt2') is-invalid @enderror"
                                name="pfd_tearing_pakan_1_opt2" value="{{ $qard->pfd_tearing_pakan_1_opt2 }}" />
                            @error('pfd_tearing_pakan_1_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">II</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('pfd_tearing_pakan_2_opt2') is-invalid @enderror"
                                name="pfd_tearing_pakan_2_opt2" value="{{ $qard->pfd_tearing_pakan_2_opt2 }}" />
                            @error('pfd_tearing_pakan_2_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">III</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('pfd_tearing_pakan_3_opt2') is-invalid @enderror"
                                name="pfd_tearing_pakan_3_opt2" value="{{ $qard->pfd_tearing_pakan_3_opt2 }}" />
                            @error('pfd_tearing_pakan_3_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            {{-- Shrinkage --}}
            <center>
                <h6 class="mt-5">Shrinkage</h6>
            </center>
            <hr>
            <h6 class="mt-2 mx-3">Lusi</h6>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">I</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('pfd_shrinkage_lusi_1_opt2') is-invalid @enderror"
                                name="pfd_shrinkage_lusi_1_opt2" value="{{ $qard->pfd_shrinkage_lusi_1_opt2 }}" />
                            @error('pfd_shrinkage_lusi_1_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">II</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('pfd_shrinkage_lusi_2_opt2') is-invalid @enderror"
                                name="pfd_shrinkage_lusi_2_opt2" value="{{ $qard->pfd_shrinkage_lusi_2_opt2 }}" />
                            @error('pfd_shrinkage_lusi_2_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">III</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('pfd_shrinkage_lusi_3_opt2') is-invalid @enderror"
                                name="pfd_shrinkage_lusi_3_opt2" value="{{ $qard->pfd_shrinkage_lusi_3_opt2 }}" />
                            @error('pfd_shrinkage_lusi_3_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <h6 class="mt-2 mx-3">Pakan</h6>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">I</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('pfd_shrinkage_pakan_1_opt2') is-invalid @enderror"
                                name="pfd_shrinkage_pakan_1_opt2" value="{{ $qard->pfd_shrinkage_pakan_1_opt2 }}" />
                            @error('pfd_shrinkage_pakan_1_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">II</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('pfd_shrinkage_pakan_2_opt2') is-invalid @enderror"
                                name="pfd_shrinkage_pakan_2_opt2" value="{{ $qard->pfd_shrinkage_pakan_2_opt2 }}" />
                            @error('pfd_shrinkage_pakan_2_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">III</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('pfd_shrinkage_pakan_3_opt2') is-invalid @enderror"
                                name="pfd_shrinkage_pakan_3_opt2" value="{{ $qard->pfd_shrinkage_pakan_3_opt2 }}" />
                            @error('pfd_shrinkage_pakan_3_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Lebar After Shrinkage</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('pfd_lebar_after_shrinkage_opt2') is-invalid @enderror"
                                name="pfd_lebar_after_shrinkage_opt2"
                                value="{{ $qard->pfd_lebar_after_shrinkage_opt2 }}" />
                            @error('pfd_lebar_after_shrinkage_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Stretch</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('pfd_stretch_opt2') is-invalid @enderror"
                                name="pfd_stretch_opt2" value="{{ $qard->pfd_stretch_opt2 }}" />
                            @error('pfd_stretch_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Pilling Resistance</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('pfd_pilling_resistance_opt2') is-invalid @enderror"
                                name="pfd_pilling_resistance_opt2" value="{{ $qard->pfd_pilling_resistance_opt2 }}" />
                            @error('pfd_pilling_resistance_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            {{-- PFD OPT3 --}}
            {{-- PFD --}}
            <hr class="my-4">
            <center>
                <h4 class="mt-5">PFD OPTION 3</h4>
            </center>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-6">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Construction</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('pfd_construction_opt3') is-invalid @enderror"
                                name="pfd_construction_opt3" value="{{ $qard->pfd_construction_opt3 }}" />
                            @error('pfd_construction_opt3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Width</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('pfd_width_opt3') is-invalid @enderror"
                                name="pfd_width_opt3" value="{{ $qard->pfd_width_opt3 }}" />
                            @error('pfd_width_opt3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <center>
                <h6 class="mt-5">Weight</h6>
            </center>
            <hr>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">I</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="pfd_weight_1_opt3"
                                @error('pfd_weight_1_opt3') is-invalid @enderror
                                value="{{ $qard->pfd_weight_1_opt3 }}" />
                            @error('pfd_weight_1_opt3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">II</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('pfd_weight_2_opt3') is-invalid @enderror"
                                name="pfd_weight_2_opt3" value="{{ $qard->pfd_weight_2_opt3 }}" />
                            @error('pfd_weight_2_opt3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">III</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('pfd_weight_3_opt3') is-invalid @enderror"
                                name="pfd_weight_3_opt3" value="{{ $qard->pfd_weight_3_opt3 }}" />
                            @error('pfd_weight_3_opt3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <center>
                <h6 class="mt-5">Tensile</h6>
            </center>
            <hr>
            <h6 class="mt-2 mx-3">Lusi</h6>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">I</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('pfd_tensile_lusi_1_opt3') is-invalid @enderror"
                                name="pfd_tensile_lusi_1_opt3" value="{{ $qard->pfd_tensile_lusi_1_opt3 }}" />
                            @error('pfd_tensile_lusi_1_opt3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">II</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('pfd_tensile_lusi_2_opt3') is-invalid @enderror"
                                name="pfd_tensile_lusi_2_opt3" value="{{ $qard->pfd_tensile_lusi_2_opt3 }}" />
                            @error('pfd_tensile_lusi_2_opt3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">III</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('pfd_tensile_lusi_3_opt3') is-invalid @enderror"
                                name="pfd_tensile_lusi_3_opt3" value="{{ $qard->pfd_tensile_lusi_3_opt3 }}" />
                            @error('pfd_tensile_lusi_3_opt3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <h6 class="mt-2 mx-3">Pakan</h6>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">I</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('pfd_tensile_pakan_1_opt3') is-invalid @enderror"
                                name="pfd_tensile_pakan_1_opt3" value="{{ $qard->pfd_tensile_pakan_1_opt3 }}" />
                            @error('pfd_tensile_pakan_1_opt3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">II</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('pfd_tensile_pakan_2_opt3') is-invalid @enderror"
                                name="pfd_tensile_pakan_2_opt3" value="{{ $qard->pfd_tensile_pakan_2_opt3 }}" />
                            @error('pfd_tensile_pakan_2_opt3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">III</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('pfd_tensile_pakan_3_opt3') is-invalid @enderror"
                                name="pfd_tensile_pakan_3_opt3" value="{{ $qard->pfd_tensile_pakan_3_opt3 }}" />
                            @error('pfd_tensile_pakan_3_opt3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <center>
                <h6 class="mt-5">Tearing</h6>
            </center>
            <hr>
            <h6 class="mt-2 mx-3">Lusi</h6>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">I</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('pfd_tearing_lusi_1_opt3') is-invalid @enderror"
                                name="pfd_tearing_lusi_1_opt3" value="{{ $qard->pfd_tearing_lusi_1_opt3 }}" />
                            @error('pfd_tearing_lusi_1_opt3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">II</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('pfd_tearing_lusi_2_opt3') is-invalid @enderror"
                                name="pfd_tearing_lusi_2_opt3" value="{{ $qard->pfd_tearing_lusi_2_opt3 }}" />
                            @error('pfd_tearing_lusi_2_opt3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">III</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('pfd_tearing_lusi_3_opt3') is-invalid @enderror"
                                name="pfd_tearing_lusi_3_opt3" value="{{ $qard->pfd_tearing_lusi_3_opt3 }}" />
                            @error('pfd_tearing_lusi_3_opt3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <h6 class="mt-2 mx-3">Pakan</h6>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">I</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('pfd_tearing_pakan_1_opt3') is-invalid @enderror"
                                name="pfd_tearing_pakan_1_opt3" value="{{ $qard->pfd_tearing_pakan_1_opt3 }}" />
                            @error('pfd_tearing_pakan_1_opt3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">II</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('pfd_tearing_pakan_2_opt3') is-invalid @enderror"
                                name="pfd_tearing_pakan_2_opt3" value="{{ $qard->pfd_tearing_pakan_2_opt3 }}" />
                            @error('pfd_tearing_pakan_2_opt3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">III</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('pfd_tearing_pakan_3_opt3') is-invalid @enderror"
                                name="pfd_tearing_pakan_3_opt3" value="{{ $qard->pfd_tearing_pakan_3_opt3 }}" />
                            @error('pfd_tearing_pakan_3_opt3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            {{-- Shrinkage --}}
            <center>
                <h6 class="mt-5">Shrinkage</h6>
            </center>
            <hr>
            <h6 class="mt-2 mx-3">Lusi</h6>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">I</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('pfd_shrinkage_lusi_1_opt3') is-invalid @enderror"
                                name="pfd_shrinkage_lusi_1_opt3" value="{{ $qard->pfd_shrinkage_lusi_1_opt3 }}" />
                            @error('pfd_shrinkage_lusi_1_opt3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">II</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('pfd_shrinkage_lusi_2_opt3') is-invalid @enderror"
                                name="pfd_shrinkage_lusi_2_opt3" value="{{ $qard->pfd_shrinkage_lusi_2_opt3 }}" />
                            @error('pfd_shrinkage_lusi_2_opt3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">III</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('pfd_shrinkage_lusi_3_opt3') is-invalid @enderror"
                                name="pfd_shrinkage_lusi_3_opt3" value="{{ $qard->pfd_shrinkage_lusi_3_opt3 }}" />
                            @error('pfd_shrinkage_lusi_3_opt3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <h6 class="mt-2 mx-3">Pakan</h6>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">I</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('pfd_shrinkage_pakan_1_opt3') is-invalid @enderror"
                                name="pfd_shrinkage_pakan_1_opt3" value="{{ $qard->pfd_shrinkage_pakan_1_opt3 }}" />
                            @error('pfd_shrinkage_pakan_1_opt3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">II</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('pfd_shrinkage_pakan_2_opt3') is-invalid @enderror"
                                name="pfd_shrinkage_pakan_2_opt3" value="{{ $qard->pfd_shrinkage_pakan_2_opt3 }}" />
                            @error('pfd_shrinkage_pakan_2_opt3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">III</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('pfd_shrinkage_pakan_3_opt3') is-invalid @enderror"
                                name="pfd_shrinkage_pakan_3_opt3" value="{{ $qard->pfd_shrinkage_pakan_3_opt3 }}" />
                            @error('pfd_shrinkage_pakan_3_opt3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Lebar After Shrinkage</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('pfd_lebar_after_shrinkage_opt3') is-invalid @enderror"
                                name="pfd_lebar_after_shrinkage_opt3"
                                value="{{ $qard->pfd_lebar_after_shrinkage_opt3 }}" />
                            @error('pfd_lebar_after_shrinkage_opt3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Stretch</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('pfd_stretch_opt3') is-invalid @enderror"
                                name="pfd_stretch_opt3" value="{{ $qard->pfd_stretch_opt3 }}" />
                            @error('pfd_stretch_opt3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Pilling Resistance</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('pfd_pilling_resistance_opt3') is-invalid @enderror"
                                name="pfd_pilling_resistance_opt3" value="{{ $qard->pfd_pilling_resistance_opt3 }}" />
                            @error('pfd_pilling_resistance_opt3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <hr>




            {{-- Finish --}}
            <center>
                <h4 class="mt-5">Finish</h4>
            </center>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-6">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Construction</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('finish_construction') is-invalid @enderror"
                                name="finish_construction" value="{{ $qard->finish_construction }}" />
                            @error('finish_construction')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Width</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('finish_width_finish') is-invalid @enderror"
                                name="finish_width_finish" value="{{ $qard->finish_width_finish }}" />
                            @error('finish_width_finish')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <center>
                <h6 class="mt-5">Weight</h6>
            </center>
            <hr>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">I</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('finish_weight_1') is-invalid @enderror"
                                name="finish_weight_1" id="finish_weight_1" onkeyup="getAverage();"
                                value="{{ $qard->finish_weight_1 }}" />
                            @error('finish_weight_1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">II</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('finish_weight_2') is-invalid @enderror"
                                name="finish_weight_2" id="finish_weight_2" onkeyup="getAverage();"
                                value="{{ $qard->finish_weight_2 }}" />
                            @error('finish_weight_2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">III</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('finish_weight_3') is-invalid @enderror"
                                name="finish_weight_3" id="finish_weight_3" onkeyup="getAverage();"
                                value="{{ $qard->finish_weight_3 }}" />
                            @error('finish_weight_3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Rata-rata</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('finish_weight_avg') is-invalid @enderror"
                                name="finish_weight_avg" id="finish_weight_avg" onkeypress="average()"
                                value="{{ $qard->finish_weight_avg }}" />
                            @error('finish_weight_avg')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <center>
                <h6 class="mt-5">Tensile</h6>
            </center>
            <hr>
            <h6 class="mt-2 mx-3">Lusi</h6>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">I</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('finish_tensile_lusi_1') is-invalid @enderror"
                                name="finish_tensile_lusi_1" id="finish_tensile_lusi_1" onkeyup="getAverage();"
                                value="{{ $qard->finish_tensile_lusi_1 }}" />
                            @error('finish_tensile_lusi_1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">II</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('finish_tensile_lusi_2') is-invalid @enderror"
                                name="finish_tensile_lusi_2" id="finish_tensile_lusi_2" onkeyup="getAverage();"
                                value="{{ $qard->finish_tensile_lusi_2 }}" />
                            @error('finish_tensile_lusi_2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">III</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('finish_tensile_lusi_3') is-invalid @enderror"
                                name="finish_tensile_lusi_3" id="finish_tensile_lusi_3" onkeyup="getAverage();"
                                value="{{ $qard->finish_tensile_lusi_3 }}" />
                            @error('finish_tensile_lusi_3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Rata-rata</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('finish_tensile_lusi_avg') is-invalid @enderror"
                                name="finish_tensile_lusi_avg" id="finish_tensile_lusi_avg" onkeypress="average()"
                                value="{{ $qard->finish_tensile_lusi_avg }}" />
                            @error('finish_tensile_lusi_avg')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <h6 class="mt-2 mx-3">Pakan</h6>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">I</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('finish_tensile_pakan_1') is-invalid @enderror"
                                name="finish_tensile_pakan_1" id="finish_tensile_pakan_1" onkeyup="getAverage();"
                                value="{{ $qard->finish_tensile_pakan_1 }}" />
                            @error('finish_tensile_pakan_1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">II</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('finish_tensile_pakan_2') is-invalid @enderror"
                                name="finish_tensile_pakan_2" id="finish_tensile_pakan_2" onkeyup="getAverage();"
                                value="{{ $qard->finish_tensile_pakan_2 }}" />
                            @error('finish_tensile_pakan_2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">III</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('finish_tensile_pakan_3') is-invalid @enderror"
                                name="finish_tensile_pakan_3" id="finish_tensile_pakan_3" onkeyup="getAverage();"
                                value="{{ $qard->finish_tensile_pakan_3 }}" />
                            @error('finish_tensile_pakan_3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Rata-rata</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('finish_tensile_pakan_avg') is-invalid @enderror"
                                name="finish_tensile_pakan_avg" id="finish_tensile_pakan_avg" onkeypress="average()"
                                value="{{ $qard->finish_tensile_pakan_avg }}" />
                            @error('finish_tensile_pakan_avg')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <center>
                <h6 class="mt-5">Tearing</h6>
            </center>
            <hr>
            <h6 class="mt-2 mx-3">Lusi</h6>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">I</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('finish_tearing_lusi_1') is-invalid @enderror"
                                name="finish_tearing_lusi_1" id="finish_tearing_lusi_1" onkeyup="getAverage();"
                                value="{{ $qard->finish_tearing_lusi_1 }}" />
                            @error('finish_tearing_lusi_1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">II</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('finish_tearing_lusi_2') is-invalid @enderror"
                                name="finish_tearing_lusi_2" id="finish_tearing_lusi_2" onkeyup="getAverage();"
                                value="{{ $qard->finish_tearing_lusi_2 }}" />
                            @error('finish_tearing_lusi_2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">III</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('finish_tearing_lusi_3') is-invalid @enderror"
                                name="finish_tearing_lusi_3" id="finish_tearing_lusi_3" onkeyup="getAverage();"
                                value="{{ $qard->finish_tearing_lusi_3 }}" />
                            @error('finish_tearing_lusi_3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Rata-rata</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('finish_tearing_lusi_avg') is-invalid @enderror"
                                name="finish_tearing_lusi_avg" id="finish_tearing_lusi_avg" onkeypress="average()"
                                value="{{ $qard->finish_tearing_lusi_avg }}" />
                            @error('finish_tearing_lusi_avg')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <h6 class="mt-2 mx-3">Pakan</h6>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">I</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('finish_tearing_pakan_1') is-invalid @enderror"
                                name="finish_tearing_pakan_1" id="finish_tearing_pakan_1" onkeyup="getAverage();"
                                value="{{ $qard->finish_tearing_pakan_1 }}" />
                            @error('finish_tearing_pakan_1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">II</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('finish_tearing_pakan_2') is-invalid @enderror"
                                name="finish_tearing_pakan_2" id="finish_tearing_pakan_2" onkeyup="getAverage();"
                                value="{{ $qard->finish_tearing_pakan_2 }}" />
                            @error('finish_tearing_pakan_2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">III</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('finish_tearing_pakan_3') is-invalid @enderror"
                                name="finish_tearing_pakan_3" id="finish_tearing_pakan_3" onkeyup="getAverage();"
                                value="{{ $qard->finish_tearing_pakan_3 }}" />
                            @error('finish_tearing_pakan_3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Rata-rata</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('finish_tearing_pakan_avg') is-invalid @enderror"
                                name="finish_tearing_pakan_avg" id="finish_tearing_pakan_avg" onkeypress="average()"
                                value="{{ $qard->finish_tearing_pakan_avg }}" />
                            @error('finish_tearing_pakan_avg')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-12">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Slippage</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('finish_slippage') is-invalid @enderror"
                                name="finish_slippage" value="{{ $qard->finish_slippage }}" />
                            @error('finish_slippage')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <center>
                <h6 class="mt-5">Shrinkage</h6>
            </center>
            <hr>
            <h6 class="mt-2 mx-3">Lusi</h6>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">I</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('finish_shringkage_lusi_1') is-invalid @enderror"
                                name="finish_shringkage_lusi_1" id="finish_shringkage_lusi_1" onkeyup="getAverage();"
                                value="{{ $qard->finish_shringkage_lusi_1 }}" />
                            @error('finish_shringkage_lusi_1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">II</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('finish_shringkage_lusi_2') is-invalid @enderror"
                                name="finish_shringkage_lusi_2" id="finish_shringkage_lusi_2" onkeyup="getAverage();"
                                value="{{ $qard->finish_shringkage_lusi_2 }}" />
                            @error('finish_shringkage_lusi_2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">III</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('finish_shringkage_lusi_3') is-invalid @enderror"
                                name="finish_shringkage_lusi_3" id="finish_shringkage_lusi_3" onkeyup="getAverage();"
                                value="{{ $qard->finish_shringkage_lusi_3 }}" />
                            @error('finish_shringkage_lusi_3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Rata-rata</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('finish_shringkage_lusi_avg') is-invalid @enderror"
                                name="finish_shringkage_lusi_avg" id="finish_shringkage_lusi_avg" onkeypress="average()"
                                value="{{ $qard->finish_shringkage_lusi_avg }}" />
                            @error('finish_shringkage_lusi_avg')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <h6 class="mt-2 mx-3">Pakan</h6>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">I</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('finish_shringkage_pakan_1') is-invalid @enderror"
                                name="finish_shringkage_pakan_1" value="{{ $qard->finish_shringkage_pakan_1 }}" />
                            @error('finish_shringkage_pakan_1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">II</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('finish_shringkage_pakan_2') is-invalid @enderror"
                                name="finish_shringkage_pakan_2" value="{{ $qard->finish_shringkage_pakan_2 }}" />
                            @error('finish_shringkage_pakan_2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">III</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('finish_shringkage_pakan_3') is-invalid @enderror"
                                name="finish_shringkage_pakan_3" value="{{ $qard->finish_shringkage_pakan_3 }}" />
                            @error('finish_shringkage_pakan_3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-3">
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Lebar After Shrinkage</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('finish_lebar_after_shrinkage') is-invalid @enderror"
                                name="finish_lebar_after_shrinkage" value="{{ $qard->finish_lebar_after_shrinkage }}" />
                            @error('finish_lebar_after_shrinkage')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Stretch</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('finish_stretch') is-invalid @enderror"
                                name="finish_stretch" value="{{ $qard->finish_stretch }}" />
                            @error('finish_stretch')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Pilling Resistance</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('finish_pilling_resistance') is-invalid @enderror"
                                name="finish_pilling_resistance" value="{{ $qard->finish_pilling_resistance }}" />
                            @error('finish_pilling_resistance')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-3">

            {{-- FINISH OPTION 2 --}}

            {{-- Finish --}}
            <center>
                <h4 class="mt-5">FINISH OPTION 2</h4>
            </center>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-6">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Construction</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('finish_construction_opt2') is-invalid @enderror"
                                name="finish_construction_opt2" value="{{ $qard->finish_construction_opt2 }}" />
                            @error('finish_construction_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Width</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('finish_width_finish_opt2') is-invalid @enderror"
                                name="finish_width_finish_opt2" value="{{ $qard->finish_width_finish_opt2 }}" />
                            @error('finish_width_finish_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <center>
                <h6 class="mt-5">Weight</h6>
            </center>
            <hr>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">I</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('finish_weight_1_opt2') is-invalid @enderror"
                                name="finish_weight_1_opt2" id="finish_weight_1_opt2" onkeyup="getAverage();"
                                value="{{ $qard->finish_weight_1_opt2 }}" />
                            @error('finish_weight_1_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">II</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('finish_weight_2_opt2') is-invalid @enderror"
                                name="finish_weight_2_opt2" id="finish_weight_2_opt2" onkeyup="getAverage();"
                                value="{{ $qard->finish_weight_2_opt2 }}" />
                            @error('finish_weight_2_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">III</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('finish_weight_3_opt2') is-invalid @enderror"
                                name="finish_weight_3_opt2" id="finish_weight_3_opt2" onkeyup="getAverage();"
                                value="{{ $qard->finish_weight_3_opt2 }}" />
                            @error('finish_weight_3_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Rata-rata</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('finish_weight_avg_opt2') is-invalid @enderror"
                                name="finish_weight_avg_opt2" id="finish_weight_avg_opt2" onkeypress="average()"
                                value="{{ $qard->finish_weight_avg_opt2 }}" />
                            @error('finish_weight_avg_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <center>
                <h6 class="mt-5">Tensile</h6>
            </center>
            <hr>
            <h6 class="mt-2 mx-3">Lusi</h6>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">I</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('finish_tensile_lusi_1_opt2') is-invalid @enderror"
                                name="finish_tensile_lusi_1_opt2" id="finish_tensile_lusi_1_opt2" onkeyup="getAverage();"
                                value="{{ $qard->finish_tensile_lusi_1_opt2 }}" />
                            @error('finish_tensile_lusi_1_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">II</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('finish_tensile_lusi_2_opt2') is-invalid @enderror"
                                name="finish_tensile_lusi_2_opt2" id="finish_tensile_lusi_2_opt2" onkeyup="getAverage();"
                                value="{{ $qard->finish_tensile_lusi_2_opt2 }}" />
                            @error('finish_tensile_lusi_2_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">III</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('finish_tensile_lusi_3_opt2') is-invalid @enderror"
                                name="finish_tensile_lusi_3_opt2" id="finish_tensile_lusi_3_opt2" onkeyup="getAverage();"
                                value="{{ $qard->finish_tensile_lusi_3_opt2 }}" />
                            @error('finish_tensile_lusi_3_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Rata-rata</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('finish_tensile_lusi_avg_opt2') is-invalid @enderror"
                                name="finish_tensile_lusi_avg_opt2" id="finish_tensile_lusi_avg_opt2" onkeypress="average()"
                                value="{{ $qard->finish_tensile_lusi_avg_opt2 }}" />
                            @error('finish_tensile_lusi_avg_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <h6 class="mt-2 mx-3">Pakan</h6>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">I</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('finish_tensile_pakan_1_opt2') is-invalid @enderror"
                                name="finish_tensile_pakan_1_opt2" id="finish_tensile_pakan_1_opt2" onkeyup="getAverage();"
                                value="{{ $qard->finish_tensile_pakan_1_opt2 }}" />
                            @error('finish_tensile_pakan_1_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">II</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('finish_tensile_pakan_2_opt2') is-invalid @enderror"
                                name="finish_tensile_pakan_2_opt2" id="finish_tensile_pakan_2_opt2" onkeyup="getAverage();"
                                value="{{ $qard->finish_tensile_pakan_2_opt2 }}" />
                            @error('finish_tensile_pakan_2_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">III</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('finish_tensile_pakan_3_opt2') is-invalid @enderror"
                                name="finish_tensile_pakan_3_opt2" id="finish_tensile_pakan_3_opt2" onkeyup="getAverage();"
                                value="{{ $qard->finish_tensile_pakan_3_opt2 }}" />
                            @error('finish_tensile_pakan_3_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Rata-rata</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('finish_tensile_pakan_avg_opt2') is-invalid @enderror"
                                name="finish_tensile_pakan_avg_opt2" id="finish_tensile_pakan_avg_opt2"
                                onkeypress="average()" value="{{ $qard->finish_tensile_pakan_avg_opt2 }}" />
                            @error('finish_tensile_pakan_avg_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <center>
                <h6 class="mt-5">Tearing</h6>
            </center>
            <hr>
            <h6 class="mt-2 mx-3">Lusi</h6>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">I</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('finish_tearing_lusi_1_opt2') is-invalid @enderror"
                                name="finish_tearing_lusi_1_opt2" id="finish_tearing_lusi_1_opt2" onkeyup="getAverage();"
                                value="{{ $qard->finish_tearing_lusi_1_opt2 }}" />
                            @error('finish_tearing_lusi_1_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">II</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('finish_tearing_lusi_2_opt2') is-invalid @enderror"
                                name="finish_tearing_lusi_2_opt2" id="finish_tearing_lusi_2_opt2" onkeyup="getAverage();"
                                value="{{ $qard->finish_tearing_lusi_2_opt2 }}" />
                            @error('finish_tearing_lusi_2_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">III</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('finish_tearing_lusi_3_opt2') is-invalid @enderror"
                                name="finish_tearing_lusi_3_opt2" id="finish_tearing_lusi_3_opt2" onkeyup="getAverage();"
                                value="{{ $qard->finish_tearing_lusi_3_opt2 }}" />
                            @error('finish_tearing_lusi_3_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Rata-rata</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('finish_tearing_lusi_avg_opt2') is-invalid @enderror"
                                name="finish_tearing_lusi_avg_opt2" id="finish_tearing_lusi_avg_opt2" onkeypress="average()"
                                value="{{ $qard->finish_tearing_lusi_avg_opt2 }}" />
                            @error('finish_tearing_lusi_avg_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <h6 class="mt-2 mx-3">Pakan</h6>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">I</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('finish_tearing_pakan_1_opt2') is-invalid @enderror"
                                name="finish_tearing_pakan_1_opt2" id="finish_tearing_pakan_1_opt2" onkeyup="getAverage();"
                                value="{{ $qard->finish_tearing_pakan_1_opt2 }}" />
                            @error('finish_tearing_pakan_1_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">II</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('finish_tearing_pakan_2_opt2') is-invalid @enderror"
                                name="finish_tearing_pakan_2_opt2" id="finish_tearing_pakan_2_opt2" onkeyup="getAverage();"
                                value="{{ $qard->finish_tearing_pakan_2_opt2 }}" />
                            @error('finish_tearing_pakan_2_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">III</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('finish_tearing_pakan_3_opt2') is-invalid @enderror"
                                name="finish_tearing_pakan_3_opt2" id="finish_tearing_pakan_3_opt2" onkeyup="getAverage();"
                                value="{{ $qard->finish_tearing_pakan_3_opt2 }}" />
                            @error('finish_tearing_pakan_3_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Rata-rata</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('finish_tearing_pakan_avg_opt2') is-invalid @enderror"
                                name="finish_tearing_pakan_avg_opt2" id="finish_tearing_pakan_avg_opt2"
                                onkeypress="average()" value="{{ $qard->finish_tearing_pakan_avg_opt2 }}" />
                            @error('finish_tearing_pakan_avg_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-12">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Slippage</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('finish_slippage_opt2') is-invalid @enderror"
                                name="finish_slippage_opt2" value="{{ $qard->finish_slippage_opt2 }}" />
                            @error('finish_slippage_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <center>
                <h6 class="mt-5">Shrinkage</h6>
            </center>
            <hr>
            <h6 class="mt-2 mx-3">Lusi</h6>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">I</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control  @error('finish_shringkage_lusi_1_opt2') is-invalid @enderror"
                                name="finish_shringkage_lusi_1_opt2" id="finish_shringkage_lusi_1_opt2"
                                onkeyup="getAverage();" value="{{ $qard->finish_shringkage_lusi_1_opt2 }}" />
                            @error('finish_shringkage_lusi_1_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">II</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('finish_shringkage_lusi_2_opt2') is-invalid @enderror"
                                name="finish_shringkage_lusi_2_opt2" id="finish_shringkage_lusi_2_opt2"
                                onkeyup="getAverage();" value="{{ $qard->finish_shringkage_lusi_2_opt2 }}" />
                            @error('finish_shringkage_lusi_2_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">III</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('finish_shringkage_lusi_3_opt2') is-invalid @enderror"
                                name="finish_shringkage_lusi_3_opt2" id="finish_shringkage_lusi_3_opt2"
                                onkeyup="getAverage();" value="{{ $qard->finish_shringkage_lusi_3_opt2 }}" />
                            @error('finish_shringkage_lusi_3_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Rata-rata</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('finish_shringkage_lusi_avg_opt2') is-invalid @enderror"
                                name="finish_shringkage_lusi_avg_opt2" id="finish_shringkage_lusi_avg_opt2"
                                onkeypress="average()" value="{{ $qard->finish_shringkage_lusi_avg_opt2 }}" />
                            @error('finish_shringkage_lusi_avg_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <h6 class="mt-2 mx-3">Pakan</h6>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">I</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('finish_shringkage_pakan_1_opt2') is-invalid @enderror"
                                name="finish_shringkage_pakan_1_opt2"
                                value="{{ $qard->finish_shringkage_pakan_1_opt2 }}" />
                            @error('finish_shringkage_pakan_1_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">II</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('finish_shringkage_pakan_2_opt2') is-invalid @enderror"
                                name="finish_shringkage_pakan_2_opt2"
                                value="{{ $qard->finish_shringkage_pakan_2_opt2 }}" />
                            @error('finish_shringkage_pakan_2_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">III</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('finish_shringkage_pakan_3_opt2') is-invalid @enderror"
                                name="finish_shringkage_pakan_3_opt2"
                                value="{{ $qard->finish_shringkage_pakan_3_opt2 }}" />
                            @error('finish_shringkage_pakan_3_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-3">
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Lebar After Shrinkage</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('finish_lebar_after_shrinkage_opt2') is-invalid @enderror"
                                name="finish_lebar_after_shrinkage_opt2"
                                value="{{ $qard->finish_lebar_after_shrinkage_opt2 }}" />
                            @error('finish_lebar_after_shrinkage_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Stretch</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('finish_stretch_opt2') is-invalid @enderror"
                                name="finish_stretch_opt2" value="{{ $qard->finish_stretch_opt2 }}" />
                            @error('finish_stretch_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Pilling Resistance</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('finish_pilling_resistance_opt2') is-invalid @enderror"
                                name="finish_pilling_resistance_opt2"
                                value="{{ $qard->finish_pilling_resistance_opt2 }}" />
                            @error('finish_pilling_resistance_opt2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-3">

            {{-- FINISH OPTION 3 --}}

            {{-- Finish --}}
            <center>
                <h4 class="mt-5">FINISH OPTION 3</h4>
            </center>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-6">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Construction</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('finish_construction_opt3') is-invalid @enderror"
                                name="finish_construction_opt3" value="{{ $qard->finish_construction_opt3 }}" />
                            @error('finish_construction_opt3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Width</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('finish_width_finish_opt3') is-invalid @enderror"
                                name="finish_width_finish_opt3" value="{{ $qard->finish_width_finish_opt3 }}" />
                            @error('finish_width_finish_opt3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <center>
                <h6 class="mt-5">Weight</h6>
            </center>
            <hr>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">I</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('finish_weight_1_opt3') is-invalid @enderror"
                                name="finish_weight_1_opt3" id="finish_weight_1_opt3" onkeyup="getAverage();"
                                value="{{ $qard->finish_weight_1_opt3 }}" />
                            @error('finish_weight_1_opt3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">II</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('finish_weight_2_opt3') is-invalid @enderror"
                                name="finish_weight_2_opt3" id="finish_weight_2_opt3" onkeyup="getAverage();"
                                value="{{ $qard->finish_weight_2_opt3 }}" />
                            @error('finish_weight_2_opt3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">III</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('finish_weight_3_opt3') is-invalid @enderror"
                                name="finish_weight_3_opt3" id="finish_weight_3_opt3" onkeyup="getAverage();"
                                value="{{ $qard->finish_weight_3_opt3 }}" />
                            @error('finish_weight_3_opt3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Rata-rata</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('finish_weight_avg_opt3') is-invalid @enderror"
                                name="finish_weight_avg_opt3" id="finish_weight_avg_opt3" onkeypress="average()"
                                value="{{ $qard->finish_weight_avg_opt3 }}" />
                            @error('finish_weight_avg_opt3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <center>
                <h6 class="mt-5">Tensile</h6>
            </center>
            <hr>
            <h6 class="mt-2 mx-3">Lusi</h6>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">I</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('finish_tensile_lusi_1_opt3') is-invalid @enderror"
                                name="finish_tensile_lusi_1_opt3" id="finish_tensile_lusi_1_opt3" onkeyup="getAverage();"
                                value="{{ $qard->finish_tensile_lusi_1_opt3 }}" />
                            @error('finish_tensile_lusi_1_opt3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">II</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('finish_tensile_lusi_2_opt3') is-invalid @enderror"
                                name="finish_tensile_lusi_2_opt3" id="finish_tensile_lusi_2_opt3" onkeyup="getAverage();"
                                value="{{ $qard->finish_tensile_lusi_2_opt3 }}" />
                            @error('finish_tensile_lusi_2_opt3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">III</label>
                        <div class="col-sm-7">
                            <input type="text"
                                class="form-control @error('finish_tensile_lusi_3_opt3') is-invalid @enderror"
                                name="finish_tensile_lusi_3_opt3" id="finish_tensile_lusi_3_opt3" onkeyup="getAverage();"
                                value="{{ $qard->finish_tensile_lusi_3_opt3 }}" />
                            @error('finish_tensile_lusi_3_opt3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Rata-rata</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_tensile_lusi_avg_opt3"
                                id="finish_tensile_lusi_avg_opt3" onkeypress="average()" />
                        </div>
                    </div>
                </div>
            </div>
            <h6 class="mt-2 mx-3">Pakan</h6>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">I</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_tensile_pakan_1_opt3"
                                id="finish_tensile_pakan_1_opt3" onkeyup="getAverage();" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">II</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_tensile_pakan_2_opt3"
                                id="finish_tensile_pakan_2_opt3" onkeyup="getAverage();" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">III</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_tensile_pakan_3_opt3"
                                id="finish_tensile_pakan_3_opt3" onkeyup="getAverage();" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Rata-rata</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_tensile_pakan_avg_opt3"
                                id="finish_tensile_pakan_avg_opt3" onkeypress="average()" />
                        </div>
                    </div>
                </div>
            </div>
            <center>
                <h6 class="mt-5">Tearing</h6>
            </center>
            <hr>
            <h6 class="mt-2 mx-3">Lusi</h6>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">I</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_tearing_lusi_1_opt3"
                                id="finish_tearing_lusi_1_opt3" onkeyup="getAverage();" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">II</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_tearing_lusi_2_opt3"
                                id="finish_tearing_lusi_2_opt3" onkeyup="getAverage();" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">III</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_tearing_lusi_3_opt3"
                                id="finish_tearing_lusi_3_opt3" onkeyup="getAverage();" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Rata-rata</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_tearing_lusi_avg_opt3"
                                id="finish_tearing_lusi_avg_opt3" onkeypress="average()" />
                        </div>
                    </div>
                </div>
            </div>
            <h6 class="mt-2 mx-3">Pakan</h6>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">I</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_tearing_pakan_1_opt3"
                                id="finish_tearing_pakan_1_opt3" onkeyup="getAverage();" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">II</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_tearing_pakan_2_opt3"
                                id="finish_tearing_pakan_2_opt3" onkeyup="getAverage();" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">III</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_tearing_pakan_3_opt3"
                                id="finish_tearing_pakan_3_opt3" onkeyup="getAverage();" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Rata-rata</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_tearing_pakan_avg_opt3"
                                id="finish_tearing_pakan_avg_opt3" onkeypress="average()" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-12">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Slippage</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_slippage_opt3" />
                        </div>
                    </div>
                </div>
            </div>
            <center>
                <h6 class="mt-5">Shrinkage</h6>
            </center>
            <hr>
            <h6 class="mt-2 mx-3">Lusi</h6>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">I</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_shringkage_lusi_1_opt3"
                                id="finish_shringkage_lusi_1_opt3" onkeyup="getAverage();" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">II</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_shringkage_lusi_2_opt3"
                                id="finish_shringkage_lusi_2_opt3" onkeyup="getAverage();" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">III</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_shringkage_lusi_3_opt3"
                                id="finish_shringkage_lusi_3_opt3" onkeyup="getAverage();" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Rata-rata</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_shringkage_lusi_avg_opt3"
                                id="finish_shringkage_lusi_avg_opt3" onkeypress="average()" />
                        </div>
                    </div>
                </div>
            </div>
            <h6 class="mt-2 mx-3">Pakan</h6>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">I</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_shringkage_pakan_1_opt3" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">II</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_shringkage_pakan_2_opt3" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">III</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_shringkage_pakan_3_opt3" />
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-3">
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Lebar After Shrinkage</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_lebar_after_shrinkage_opt3" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Stretch</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_stretch_opt3" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Pilling Resistance</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_pilling_resistance_opt3" />
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-3">

            {{-- Finish Option 4 --}}
            {{-- FINISH OPTION 3 --}}

            {{-- Finish --}}
            <center>
                <h4 class="mt-5">FINISH OPTION 4</h4>
            </center>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-6">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Construction</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_construction_opt4" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Width</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_width_finish_opt4" />
                        </div>
                    </div>
                </div>
            </div>
            <center>
                <h6 class="mt-5">Weight</h6>
            </center>
            <hr>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">I</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_weight_1_opt4"
                                id="finish_weight_1_opt4" onkeyup="getAverage();" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">II</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_weight_2_opt4"
                                id="finish_weight_2_opt4" onkeyup="getAverage();" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">III</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_weight_3_opt4"
                                id="finish_weight_3_opt4" onkeyup="getAverage();" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Rata-rata</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_weight_avg_opt4"
                                id="finish_weight_avg_opt4" onkeypress="average()" />
                        </div>
                    </div>
                </div>
            </div>
            <center>
                <h6 class="mt-5">Tensile</h6>
            </center>
            <hr>
            <h6 class="mt-2 mx-3">Lusi</h6>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">I</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_tensile_lusi_1_opt4"
                                id="finish_tensile_lusi_1_opt4" onkeyup="getAverage();" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">II</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_tensile_lusi_2_opt4"
                                id="finish_tensile_lusi_2_opt4" onkeyup="getAverage();" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">III</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_tensile_lusi_3_opt4"
                                id="finish_tensile_lusi_3_opt4" onkeyup="getAverage();" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Rata-rata</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_tensile_lusi_avg_opt4"
                                id="finish_tensile_lusi_avg_opt4" onkeypress="average()" />
                        </div>
                    </div>
                </div>
            </div>
            <h6 class="mt-2 mx-3">Pakan</h6>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">I</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_tensile_pakan_1_opt4"
                                id="finish_tensile_pakan_1_opt4" onkeyup="getAverage();" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">II</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_tensile_pakan_2_opt4"
                                id="finish_tensile_pakan_2_opt4" onkeyup="getAverage();" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">III</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_tensile_pakan_3_opt4"
                                id="finish_tensile_pakan_3_opt4" onkeyup="getAverage();" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Rata-rata</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_tensile_pakan_avg_opt4"
                                id="finish_tensile_pakan_avg_opt4" onkeypress="average()" />
                        </div>
                    </div>
                </div>
            </div>
            <center>
                <h6 class="mt-5">Tearing</h6>
            </center>
            <hr>
            <h6 class="mt-2 mx-3">Lusi</h6>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">I</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_tearing_lusi_1_opt4"
                                id="finish_tearing_lusi_1_opt4" onkeyup="getAverage();" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">II</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_tearing_lusi_2_opt4"
                                id="finish_tearing_lusi_2_opt4" onkeyup="getAverage();" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">III</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_tearing_lusi_3_opt4"
                                id="finish_tearing_lusi_3_opt4" onkeyup="getAverage();" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Rata-rata</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_tearing_lusi_avg_opt4"
                                id="finish_tearing_lusi_avg_opt4" onkeypress="average()" />
                        </div>
                    </div>
                </div>
            </div>
            <h6 class="mt-2 mx-3">Pakan</h6>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">I</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_tearing_pakan_1_opt4"
                                id="finish_tearing_pakan_1_opt4" onkeyup="getAverage();" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">II</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_tearing_pakan_2_opt4"
                                id="finish_tearing_pakan_2_opt4" onkeyup="getAverage();" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">III</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_tearing_pakan_3_opt4"
                                id="finish_tearing_pakan_3_opt4" onkeyup="getAverage();" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Rata-rata</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_tearing_pakan_avg_opt4"
                                id="finish_tearing_pakan_avg_opt4" onkeypress="average()" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-12">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Slippage</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_slippage_opt4" />
                        </div>
                    </div>
                </div>
            </div>
            <center>
                <h6 class="mt-5">Shrinkage</h6>
            </center>
            <hr>
            <h6 class="mt-2 mx-3">Lusi</h6>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">I</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_shringkage_lusi_1_opt4"
                                id="finish_shringkage_lusi_1_opt4" onkeyup="getAverage();" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">II</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_shringkage_lusi_2_opt4"
                                id="finish_shringkage_lusi_2_opt4" onkeyup="getAverage();" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">III</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_shringkage_lusi_3_opt4"
                                id="finish_shringkage_lusi_3_opt4" onkeyup="getAverage();" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Rata-rata</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_shringkage_lusi_avg_opt4"
                                id="finish_shringkage_lusi_avg_opt4" onkeypress="average()" />
                        </div>
                    </div>
                </div>
            </div>
            <h6 class="mt-2 mx-3">Pakan</h6>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">I</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_shringkage_pakan_1_opt4" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">II</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_shringkage_pakan_2_opt4" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">III</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_shringkage_pakan_3_opt4" />
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-3">
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Lebar After Shrinkage</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_lebar_after_shrinkage_opt4" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Stretch</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_stretch_opt4" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Pilling Resistance</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_pilling_resistance_opt4" />
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-3">



            {{-- Data Fixed (hide by qard excel) --}}
            <h3>Data Fixed</h3>

            <center>
                <h5 class="my-3"> Greige </h5>
            </center>

            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Construction</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="grey_construction_fix" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Width</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="grey_width_fix" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Weight</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="grey_weight_fix" />
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-3">
            <h5>Tensile</h5>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-6">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Lusi</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="grey_tensile_lusi_fix" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Pakan</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="grey_tensile_pakan_fix" />
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-3">
            <h5>Tearing</h5>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-6">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Lusi</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="grey_tearing_lusi_fix" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Pakan</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="grey_tearing_pakan_fix" />
                        </div>
                    </div>
                </div>
            </div>

            <center>
                <h5 class="mt-5"> PFP </h5>
            </center>

            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Construction</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="pfp_construction_fix" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Width</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="pfp_width_fix" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Weight</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="pfp_weight_fix" />
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-3">
            <h5>Tensile</h5>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-6">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Lusi</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="pfp_tensile_lusi_fix" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Pakan</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="pfp_tensile_pakan_fix" />
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-3">
            <h5>Tearing</h5>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-6">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Lusi</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="pfp_tearing_lusi_fix" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Pakan</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="pfp_tearing_pakan_fix" />
                        </div>
                    </div>
                </div>
            </div>


            <center>
                <h5 class="mt-5"> Finish </h5>
            </center>

            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Construction</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_construction_fix" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Width</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_width_fix" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Weight</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_weight_fix" />
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-3">
            <h5>Tensile</h5>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-6">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Lusi</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_tensile_lusi_fix" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Pakan</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_tensile_pakan_fix" />
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-3">
            <h5>Tearing</h5>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-6">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Lusi</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_tearing_lusi_fix" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Pakan</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_tearing_pakan_fix" />
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-3">
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-12">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Slippage</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_slippage_fix" />
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-3">
            <h5>Shrinkage</h5>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-6">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Lusi</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_shrinkage_lusi_fix" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Pakan</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_shrinkage_pakan_fix" />
                        </div>
                    </div>
                </div>
            </div>

            <hr class="my-3">
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-6">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">N/WDT</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_n-wdt" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <label class="col-sm-4 col-form-label"></label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_none" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-6">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Stretch</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_stretch_fix" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Skewing-Bowing</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="finish_skewing_bowing" />
                        </div>
                    </div>
                </div>
            </div>

            {{-- Comment --}}
            <hr class="my-5">
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-12">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Comment 1</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="comment1" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-12">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Comment 2</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="comment2" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-12">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Comment 3</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="comment3" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-12">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Comment 4</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="comment4" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-12">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Comment 5</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="comment5" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-12">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Comment 6</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="comment6" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-12">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Comment 7</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="comment7" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-12">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Comment 8</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="comment8" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-12">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Comment 9</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="comment9" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-12">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Comment 10</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="comment10" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-12">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Comment 11</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="comment11" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-12">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Comment 12</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="comment12" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-12">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Comment 13</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="comment13" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-12">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Comment 14</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="comment14" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-12">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Comment 15</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="comment15" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-12">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Comment 16</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="comment16" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-12">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Comment 17</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="comment17" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-12">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Comment 18</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="comment18" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-12">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Comment 19</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="comment19" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-12">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Comment 20</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="comment20" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-12">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Comment 21</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="comment21" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-12">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Comment 22</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="comment22" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-12">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Comment 23</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="comment23" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-12">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Comment 24</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="comment24" />
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-3">
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-6">
                    <div class="row my-2">
                        <label class="col-sm-4 col-form-label">Flow Code</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="flow_code" />
                        </div>
                    </div>
                    <div class="row my-2">
                        <label class="col-sm-4 col-form-label">Note Wid 1</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="note_wid_1" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row my-2">
                        <label class="col-sm-4 col-form-label">Tangggal Release Kain</label>
                        <div class="col-sm-7">
                            <input type="date" class="form-control" name="tgl_release" />
                        </div>
                    </div>
                    <div class="row my-2">
                        <label class="col-sm-4 col-form-label">Nots</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="nots" />
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-3">
            <h6>Status</h6>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-6">
                    <div class="row my-2">
                        <label class="col-sm-4 col-form-label">Actual Time</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="status_actual_time" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row my-2">
                        <label class="col-sm-4 col-form-label">System</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="status_sistem" />
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-3">
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-3">
                    <div class="row my-2">
                        <label class="col-sm-4 col-form-label">Lama Proses</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="lama_proses" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row my-2">
                        <label class="col-sm-4 col-form-label">Lama Report</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="lama_report" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row my-2">
                        <label class="col-sm-4 col-form-label">Lama Release</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="lama_release" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row my-2">
                        <label class="col-sm-4 col-form-label">Total Waktu</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="total_waktu" />
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-3">
            <div class="d-flex justify-content-between mt-3">
                <div class="col-sm-12">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Product Type</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="product_type" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end my-5 mb-5">
                <div class="col-sm-1">
                    <button type="submit" class="btn btn-primary">SUBMIT</button>
                </div>
            </div>

        </div>


    </form>
    <script>
        function getAverage() {
            var greige_weight_1 = document.getElementById('greige_weight_1').value;
            var greige_weight_2 = document.getElementById('greige_weight_2').value;
            var greige_weight_3 = document.getElementById('greige_weight_3').value;
            var greige_tensile_lusi_1 = document.getElementById('greige_tensile_lusi_1').value;
            var greige_tensile_lusi_2 = document.getElementById('greige_tensile_lusi_2').value;
            var greige_tensile_lusi_3 = document.getElementById('greige_tensile_lusi_3').value;
            var greige_tensile_pakan_1 = document.getElementById('greige_tensile_pakan_1').value;
            var greige_tensile_pakan_2 = document.getElementById('greige_tensile_pakan_2').value;
            var greige_tensile_pakan_3 = document.getElementById('greige_tensile_pakan_3').value;
            var greige_tearing_lusi_1 = document.getElementById('greige_tearing_lusi_1').value;
            var greige_tearing_lusi_2 = document.getElementById('greige_tearing_lusi_2').value;
            var greige_tearing_lusi_3 = document.getElementById('greige_tearing_lusi_3').value;
            var greige_tearing_pakan_1 = document.getElementById('greige_tearing_pakan_1').value;
            var greige_tearing_pakan_2 = document.getElementById('greige_tearing_pakan_2').value;
            var greige_tearing_pakan_3 = document.getElementById('greige_tearing_pakan_3').value;

            // finish opt 1 variable
            var finish_weight_1 = document.getElementById('finish_weight_1').value;
            var finish_weight_2 = document.getElementById('finish_weight_2').value;
            var finish_weight_3 = document.getElementById('finish_weight_3').value;
            var finish_tensile_lusi_1 = document.getElementById('finish_tensile_lusi_1').value;
            var finish_tensile_lusi_2 = document.getElementById('finish_tensile_lusi_2').value;
            var finish_tensile_lusi_3 = document.getElementById('finish_tensile_lusi_3').value;
            var finish_tensile_pakan_1 = document.getElementById('finish_tensile_pakan_1').value;
            var finish_tensile_pakan_2 = document.getElementById('finish_tensile_pakan_2').value;
            var finish_tensile_pakan_3 = document.getElementById('finish_tensile_pakan_3').value;
            var finish_tearing_lusi_1 = document.getElementById('finish_tearing_lusi_1').value;
            var finish_tearing_lusi_2 = document.getElementById('finish_tearing_lusi_2').value;
            var finish_tearing_lusi_3 = document.getElementById('finish_tearing_lusi_3').value;
            var finish_tearing_pakan_1 = document.getElementById('finish_tearing_pakan_1').value;
            var finish_tearing_pakan_2 = document.getElementById('finish_tearing_pakan_2').value;
            var finish_tearing_pakan_3 = document.getElementById('finish_tearing_pakan_3').value;
            var finish_shringkage_lusi_1 = document.getElementById('finish_shringkage_lusi_1').value;
            var finish_shringkage_lusi_2 = document.getElementById('finish_shringkage_lusi_2').value;
            var finish_shringkage_lusi_3 = document.getElementById('finish_shringkage_lusi_3').value;
            // finish opt 2 variable
            var finish_weight_1_opt2 = document.getElementById('finish_weight_1_opt2').value;
            var finish_weight_2_opt2 = document.getElementById('finish_weight_2_opt2').value;
            var finish_weight_3_opt2 = document.getElementById('finish_weight_3_opt2').value;
            var finish_tensile_lusi_1_opt2 = document.getElementById('finish_tensile_lusi_1_opt2').value;
            var finish_tensile_lusi_2_opt2 = document.getElementById('finish_tensile_lusi_2_opt2').value;
            var finish_tensile_lusi_3_opt2 = document.getElementById('finish_tensile_lusi_3_opt2').value;
            var finish_tensile_pakan_1_opt2 = document.getElementById('finish_tensile_pakan_1_opt2').value;
            var finish_tensile_pakan_2_opt2 = document.getElementById('finish_tensile_pakan_2_opt2').value;
            var finish_tensile_pakan_3_opt2 = document.getElementById('finish_tensile_pakan_3_opt2').value;
            var finish_tearing_lusi_1_opt2 = document.getElementById('finish_tearing_lusi_1_opt2').value;
            var finish_tearing_lusi_2_opt2 = document.getElementById('finish_tearing_lusi_2_opt2').value;
            var finish_tearing_lusi_3_opt2 = document.getElementById('finish_tearing_lusi_3_opt2').value;
            var finish_tearing_pakan_1_opt2 = document.getElementById('finish_tearing_pakan_1_opt2').value;
            var finish_tearing_pakan_2_opt2 = document.getElementById('finish_tearing_pakan_2_opt2').value;
            var finish_tearing_pakan_3_opt2 = document.getElementById('finish_tearing_pakan_3_opt2').value;
            var finish_shringkage_lusi_1_opt2 = document.getElementById('finish_shringkage_lusi_1_opt2').value;
            var finish_shringkage_lusi_2_opt2 = document.getElementById('finish_shringkage_lusi_2_opt2').value;
            var finish_shringkage_lusi_3_opt2 = document.getElementById('finish_shringkage_lusi_3_opt2').value;
            // finish opt 3 variable
            var finish_weight_1_opt3 = document.getElementById('finish_weight_1_opt3').value;
            var finish_weight_2_opt3 = document.getElementById('finish_weight_2_opt3').value;
            var finish_weight_3_opt3 = document.getElementById('finish_weight_3_opt3').value;
            var finish_tensile_lusi_1_opt3 = document.getElementById('finish_tensile_lusi_1_opt3').value;
            var finish_tensile_lusi_2_opt3 = document.getElementById('finish_tensile_lusi_2_opt3').value;
            var finish_tensile_lusi_3_opt3 = document.getElementById('finish_tensile_lusi_3_opt3').value;
            var finish_tensile_pakan_1_opt3 = document.getElementById('finish_tensile_pakan_1_opt3').value;
            var finish_tensile_pakan_2_opt3 = document.getElementById('finish_tensile_pakan_2_opt3').value;
            var finish_tensile_pakan_3_opt3 = document.getElementById('finish_tensile_pakan_3_opt3').value;
            var finish_tearing_lusi_1_opt3 = document.getElementById('finish_tearing_lusi_1_opt3').value;
            var finish_tearing_lusi_2_opt3 = document.getElementById('finish_tearing_lusi_2_opt3').value;
            var finish_tearing_lusi_3_opt3 = document.getElementById('finish_tearing_lusi_3_opt3').value;
            var finish_tearing_pakan_1_opt3 = document.getElementById('finish_tearing_pakan_1_opt3').value;
            var finish_tearing_pakan_2_opt3 = document.getElementById('finish_tearing_pakan_2_opt3').value;
            var finish_tearing_pakan_3_opt3 = document.getElementById('finish_tearing_pakan_3_opt3').value;
            var finish_shringkage_lusi_1_opt3 = document.getElementById('finish_shringkage_lusi_1_opt3').value;
            var finish_shringkage_lusi_2_opt3 = document.getElementById('finish_shringkage_lusi_2_opt3').value;
            var finish_shringkage_lusi_3_opt3 = document.getElementById('finish_shringkage_lusi_3_opt3').value;
            // finish opt 4 variable
            var finish_weight_1_opt4 = document.getElementById('finish_weight_1_opt4').value;
            var finish_weight_2_opt4 = document.getElementById('finish_weight_2_opt4').value;
            var finish_weight_3_opt4 = document.getElementById('finish_weight_3_opt4').value;
            var finish_tensile_lusi_1_opt4 = document.getElementById('finish_tensile_lusi_1_opt4').value;
            var finish_tensile_lusi_2_opt4 = document.getElementById('finish_tensile_lusi_2_opt4').value;
            var finish_tensile_lusi_3_opt4 = document.getElementById('finish_tensile_lusi_3_opt4').value;
            var finish_tensile_pakan_1_opt4 = document.getElementById('finish_tensile_pakan_1_opt4').value;
            var finish_tensile_pakan_2_opt4 = document.getElementById('finish_tensile_pakan_2_opt4').value;
            var finish_tensile_pakan_3_opt4 = document.getElementById('finish_tensile_pakan_3_opt4').value;
            var finish_tearing_lusi_1_opt4 = document.getElementById('finish_tearing_lusi_1_opt4').value;
            var finish_tearing_lusi_2_opt4 = document.getElementById('finish_tearing_lusi_2_opt4').value;
            var finish_tearing_lusi_3_opt4 = document.getElementById('finish_tearing_lusi_3_opt4').value;
            var finish_tearing_pakan_1_opt4 = document.getElementById('finish_tearing_pakan_1_opt4').value;
            var finish_tearing_pakan_2_opt4 = document.getElementById('finish_tearing_pakan_2_opt4').value;
            var finish_tearing_pakan_3_opt4 = document.getElementById('finish_tearing_pakan_3_opt4').value;
            var finish_shringkage_lusi_1_opt4 = document.getElementById('finish_shringkage_lusi_1_opt4').value;
            var finish_shringkage_lusi_2_opt4 = document.getElementById('finish_shringkage_lusi_2_opt4').value;
            var finish_shringkage_lusi_3_opt4 = document.getElementById('finish_shringkage_lusi_3_opt4').value;

            var total;
            var ave;

            // Rata-Rata Greige Weight
            if (greige_weight_1 != "" && greige_weight_2 != "" && greige_weight_3 != "") {
                total = parseFloat(greige_weight_1) + parseFloat(greige_weight_2) + parseFloat(greige_weight_3);
                ave = total / 3

                document.getElementById('greige_weight_avg').value = ave.toFixed(3);
            }
            if (greige_weight_1 != "" && greige_weight_2 != "" && greige_weight_3 == "") {
                total = parseFloat(greige_weight_1) + parseFloat(greige_weight_2);
                ave = total / 2

                document.getElementById('greige_weight_avg').value = ave.toFixed(3);
            }
            if (greige_weight_1 != "" && greige_weight_2 == "" && greige_weight_3 == "") {
                total = parseFloat(greige_weight_1);
                ave = total / 1

                document.getElementById('greige_weight_avg').value = ave.toFixed(3);
            }

            // Rata-Rata Greige tensile lusi
            if (greige_tensile_lusi_1 != "" && greige_tensile_lusi_2 != "" && greige_tensile_lusi_3 != "") {
                total = parseFloat(greige_tensile_lusi_1) + parseFloat(greige_tensile_lusi_2) + parseFloat(
                    greige_tensile_lusi_3);
                ave = total / 3

                document.getElementById('greige_tensile_lusi_avg').value = ave.toFixed(3);
            }
            if (greige_tensile_lusi_1 != "" && greige_tensile_lusi_2 != "" && greige_tensile_lusi_3 == "") {
                total = parseFloat(greige_tensile_lusi_1) + parseFloat(greige_tensile_lusi_2);
                ave = total / 2

                document.getElementById('greige_tensile_lusi_avg').value = ave.toFixed(3);
            }
            if (greige_tensile_lusi_1 != "" && greige_tensile_lusi_2 == "" && greige_tensile_lusi_3 == "") {
                total = parseFloat(greige_tensile_lusi_1);
                ave = total / 1

                document.getElementById('greige_tensile_lusi_avg').value = ave.toFixed(3);
            }


            // Rata-Rata Greige tensile pakan
            if (greige_tensile_pakan_1 != "" && greige_tensile_pakan_2 != "" && greige_tensile_pakan_3 != "") {
                total = parseFloat(greige_tensile_pakan_1) + parseFloat(greige_tensile_pakan_2) + parseFloat(
                    greige_tensile_pakan_3);
                ave = total / 3

                document.getElementById('greige_tensile_pakan_avg').value = ave.toFixed(3);
            }
            if (greige_tensile_pakan_1 != "" && greige_tensile_pakan_2 != "" && greige_tensile_pakan_3 == "") {
                total = parseFloat(greige_tensile_pakan_1) + parseFloat(greige_tensile_pakan_2);
                ave = total / 2

                document.getElementById('greige_tensile_pakan_avg').value = ave.toFixed(3);
            }
            if (greige_tensile_pakan_1 != "" && greige_tensile_pakan_2 == "" && greige_tensile_pakan_3 == "") {
                total = parseFloat(greige_tensile_pakan_1);
                ave = total / 1

                document.getElementById('greige_tensile_pakan_avg').value = ave.toFixed(3);
            }


            // Rata-Rata Greige TEARING LUSI
            if (greige_tearing_lusi_1 != "" && greige_tearing_lusi_2 != "" && greige_tensile_pakan_3 != "") {
                total = parseFloat(greige_tearing_lusi_1) + parseFloat(greige_tearing_lusi_2) + parseFloat(
                    greige_tearing_lusi_3);
                ave = total / 3

                document.getElementById('greige_tearing_lusi_avg').value = ave.toFixed(3);
            }
            if (greige_tearing_lusi_1 != "" && greige_tearing_lusi_2 != "" && greige_tensile_pakan_3 == "") {
                total = parseFloat(greige_tearing_lusi_1) + parseFloat(greige_tearing_lusi_2);
                ave = total / 2

                document.getElementById('greige_tearing_lusi_avg').value = ave.toFixed(3);
            }
            if (greige_tearing_lusi_1 != "" && greige_tearing_lusi_2 == "" && greige_tensile_pakan_3 == "") {
                total = parseFloat(greige_tearing_lusi_1);
                ave = total / 1

                document.getElementById('greige_tearing_lusi_avg').value = ave.toFixed(3);
            }

            // Rata-Rata Greige TEARING pakan
            if (greige_tearing_pakan_1 != "" && greige_tearing_pakan_2 != "" && greige_tearing_pakan_3 != "") {
                total = parseFloat(greige_tearing_pakan_1) + parseFloat(greige_tearing_pakan_2) + parseFloat(
                    greige_tearing_pakan_3);
                ave = total / 3

                document.getElementById('greige_tearing_pakan_avg').value = ave.toFixed(3);
            }
            if (greige_tearing_pakan_1 != "" && greige_tearing_pakan_2 != "" && greige_tearing_pakan_3 == "") {
                total = parseFloat(greige_tearing_pakan_1) + parseFloat(greige_tearing_pakan_2);
                ave = total / 2

                document.getElementById('greige_tearing_pakan_avg').value = ave.toFixed(3);
            }
            if (greige_tearing_pakan_1 != "" && greige_tearing_pakan_2 == "" && greige_tearing_pakan_3 == "") {
                total = parseFloat(greige_tearing_pakan_1);
                ave = total / 1

                document.getElementById('greige_tearing_pakan_avg').value = ave.toFixed(3);
            }

            // FINISH CONDITIONS
            // Rata-Rata Finish weight
            if (finish_weight_1 != "" && finish_weight_2 != "" && finish_weight_3 != "") {
                total = parseFloat(finish_weight_1) + parseFloat(finish_weight_2) + parseFloat(
                    finish_weight_3);
                ave = total / 3

                document.getElementById('finish_weight_avg').value = ave.toFixed(3);
            }
            if (finish_weight_1 != "" && finish_weight_2 != "" && finish_weight_3 == "") {
                total = parseFloat(finish_weight_1) + parseFloat(finish_weight_2);
                ave = total / 2

                document.getElementById('finish_weight_avg').value = ave.toFixed(3);
            }
            if (finish_weight_1 != "" && finish_weight_2 == "" && finish_weight_3 == "") {
                total = parseFloat(finish_weight_1);
                ave = total / 1

                document.getElementById('finish_weight_avg').value = ave.toFixed(3);
            }


            // Rata-Rata Finish tensile lusi
            if (finish_tensile_lusi_1 != "" && finish_tensile_lusi_2 != "" && finish_tensile_lusi_3 != "") {
                total = parseFloat(finish_tensile_lusi_1) + parseFloat(finish_tensile_lusi_2) + parseFloat(
                    finish_tensile_lusi_3);
                ave = total / 3

                document.getElementById('finish_tensile_lusi_avg').value = ave.toFixed(3);
            }
            if (finish_tensile_lusi_1 != "" && finish_tensile_lusi_2 != "" && finish_tensile_lusi_3 == "") {
                total = parseFloat(finish_tensile_lusi_1) + parseFloat(finish_tensile_lusi_2);
                ave = total / 2

                document.getElementById('finish_tensile_lusi_avg').value = ave.toFixed(3);
            }
            if (finish_tensile_lusi_1 != "" && finish_tensile_lusi_2 == "" && finish_tensile_lusi_3 == "") {
                total = parseFloat(finish_tensile_lusi_1);
                ave = total / 1

                document.getElementById('finish_tensile_lusi_avg').value = ave.toFixed(3);
            }


            // Rata-Rata finish tensile pakan
            if (finish_tensile_pakan_1 != "" && finish_tensile_pakan_2 != "" && finish_tensile_pakan_3 != "") {
                total = parseFloat(finish_tensile_pakan_1) + parseFloat(finish_tensile_pakan_2) + parseFloat(
                    finish_tensile_pakan_3);
                ave = total / 3

                document.getElementById('finish_tensile_pakan_avg').value = ave.toFixed(3);
            }
            if (finish_tensile_pakan_1 != "" && finish_tensile_pakan_2 != "" && finish_tensile_pakan_3 == "") {
                total = parseFloat(finish_tensile_pakan_1) + parseFloat(finish_tensile_pakan_2);
                ave = total / 2

                document.getElementById('finish_tensile_pakan_avg').value = ave.toFixed(3);
            }
            if (finish_tensile_pakan_1 != "" && finish_tensile_pakan_2 == "" && finish_tensile_pakan_3 == "") {
                total = parseFloat(finish_tensile_pakan_1);
                ave = total / 1

                document.getElementById('finish_tensile_pakan_avg').value = ave.toFixed(3);
            }


            // Rata-Rata finish tearing lusi 
            if (finish_tearing_lusi_1 != "" && finish_tearing_lusi_2 != "" && finish_tearing_lusi_3 != "") {
                total = parseFloat(finish_tearing_lusi_1) + parseFloat(finish_tearing_lusi_2) + parseFloat(
                    finish_tearing_lusi_3);
                ave = total / 3

                document.getElementById('finish_tearing_lusi_avg').value = ave.toFixed(3);
            }
            if (finish_tearing_lusi_1 != "" && finish_tearing_lusi_2 != "" && finish_tearing_lusi_3 == "") {
                total = parseFloat(finish_tearing_lusi_1) + parseFloat(finish_tearing_lusi_2);
                ave = total / 2

                document.getElementById('finish_tearing_lusi_avg').value = ave.toFixed(3);
            }
            if (finish_tearing_lusi_1 != "" && finish_tearing_lusi_2 == "" && finish_tearing_lusi_3 == "") {
                total = parseFloat(finish_tearing_lusi_1);
                ave = total / 1

                document.getElementById('finish_tearing_lusi_avg').value = ave.toFixed(3);
            }

            // Rata-Rata finish tearing  pakan
            if (finish_tearing_pakan_1 != "" && finish_tearing_pakan_2 != "" && finish_tearing_pakan_3 != "") {
                total = parseFloat(finish_tearing_pakan_1) + parseFloat(finish_tearing_pakan_2) + parseFloat(
                    finish_tearing_pakan_3);
                ave = total / 3

                document.getElementById('finish_tearing_pakan_avg').value = ave.toFixed(3);
            }
            if (finish_tearing_pakan_1 != "" && finish_tearing_pakan_2 != "" && finish_tearing_pakan_3 == "") {
                total = parseFloat(finish_tearing_pakan_1) + parseFloat(finish_tearing_pakan_2);
                ave = total / 2

                document.getElementById('finish_tearing_pakan_avg').value = ave.toFixed(3);
            }
            if (finish_tearing_pakan_1 != "" && finish_tearing_pakan_2 == "" && finish_tearing_pakan_3 == "") {
                total = parseFloat(finish_tearing_pakan_1);
                ave = total / 1

                document.getElementById('finish_tearing_pakan_avg').value = ave.toFixed(3);
            }


            // Rata-Rata finish shrinkage lusi 
            if (finish_shringkage_lusi_1 != "" && finish_shringkage_lusi_2 != "" && finish_shringkage_lusi_3 != "") {
                total = parseFloat(finish_shringkage_lusi_1) + parseFloat(finish_shringkage_lusi_2) + parseFloat(
                    finish_shringkage_lusi_3);
                ave = total / 3

                document.getElementById('finish_shringkage_lusi_avg').value = ave.toFixed(3);
            }
            if (finish_shringkage_lusi_1 != "" && finish_shringkage_lusi_2 != "" && finish_shringkage_lusi_3 == "") {
                total = parseFloat(finish_shringkage_lusi_1) + parseFloat(finish_shringkage_lusi_2);
                ave = total / 2

                document.getElementById('finish_shringkage_lusi_avg').value = ave.toFixed(3);
            }
            if (finish_shringkage_lusi_1 != "" && finish_shringkage_lusi_2 == "" && finish_shringkage_lusi_3 == "") {
                total = parseFloat(finish_shringkage_lusi_1);
                ave = total / 1

                document.getElementById('finish_shringkage_lusi_avg').value = ave.toFixed(3);
            }

            // Finish option 2
            // Rata-Rata Finish weight
            if (finish_weight_1_opt2 != "" && finish_weight_2_opt2 != "" && finish_weight_3_opt2 != "") {
                total = parseFloat(finish_weight_1_opt2) + parseFloat(finish_weight_2_opt2) + parseFloat(
                    finish_weight_3_opt2);
                ave = total / 3

                document.getElementById('finish_weight_avg_opt2').value = ave.toFixed(3);
            }
            if (finish_weight_1_opt2 != "" && finish_weight_2_opt2 != "" && finish_weight_3_opt2 == "") {
                total = parseFloat(finish_weight_1_opt2) + parseFloat(finish_weight_2_opt2);
                ave = total / 2

                document.getElementById('finish_weight_avg_opt2').value = ave.toFixed(3);
            }
            if (finish_weight_1_opt2 != "" && finish_weight_2_opt2 == "" && finish_weight_3_opt2 == "") {
                total = parseFloat(finish_weight_1_opt2);
                ave = total / 1

                document.getElementById('finish_weight_avg_opt2').value = ave.toFixed(3);
            }


            // Rata-Rata Finish tensile lusi
            if (finish_tensile_lusi_1_opt2 != "" && finish_tensile_lusi_2_opt2 != "" && finish_tensile_lusi_3_opt2 != "") {
                total = parseFloat(finish_tensile_lusi_1_opt2) + parseFloat(finish_tensile_lusi_2_opt2) + parseFloat(
                    finish_tensile_lusi_3_opt2);
                ave = total / 3

                document.getElementById('finish_tensile_lusi_avg_opt2').value = ave.toFixed(3);
            }
            if (finish_tensile_lusi_1_opt2 != "" && finish_tensile_lusi_2_opt2 != "" && finish_tensile_lusi_3_opt2 == "") {
                total = parseFloat(finish_tensile_lusi_1_opt2) + parseFloat(finish_tensile_lusi_2_opt2);
                ave = total / 2

                document.getElementById('finish_tensile_lusi_avg_opt2').value = ave.toFixed(3);
            }
            if (finish_tensile_lusi_1_opt2 != "" && finish_tensile_lusi_2_opt2 == "" && finish_tensile_lusi_3_opt2 == "") {
                total = parseFloat(finish_tensile_lusi_1_opt2);
                ave = total / 1

                document.getElementById('finish_tensile_lusi_avg_opt2').value = ave.toFixed(3);
            }


            // Rata-Rata finish tensile pakan
            if (finish_tensile_pakan_1_opt2 != "" && finish_tensile_pakan_2_opt2 != "" && finish_tensile_pakan_3_opt2 !=
                "") {
                total = parseFloat(finish_tensile_pakan_1_opt2) + parseFloat(finish_tensile_pakan_2_opt2) + parseFloat(
                    finish_tensile_pakan_3_opt2);
                ave = total / 3

                document.getElementById('finish_tensile_pakan_avg_opt2').value = ave.toFixed(3);
            }
            if (finish_tensile_pakan_1_opt2 != "" && finish_tensile_pakan_2_opt2 != "" && finish_tensile_pakan_3_opt2 ==
                "") {
                total = parseFloat(finish_tensile_pakan_1_opt2) + parseFloat(finish_tensile_pakan_2_opt2);
                ave = total / 2

                document.getElementById('finish_tensile_pakan_avg_opt2').value = ave.toFixed(3);
            }
            if (finish_tensile_pakan_1_opt2 != "" && finish_tensile_pakan_2_opt2 == "" && finish_tensile_pakan_3_opt2 ==
                "") {
                total = parseFloat(finish_tensile_pakan_1_opt2);
                ave = total / 1

                document.getElementById('finish_tensile_pakan_avg_opt2').value = ave.toFixed(3);
            }


            // Rata-Rata finish tearing lusi 
            if (finish_tearing_lusi_1_opt2 != "" && finish_tearing_lusi_2_opt2 != "" && finish_tearing_lusi_3_opt2 != "") {
                total = parseFloat(finish_tearing_lusi_1_opt2) + parseFloat(finish_tearing_lusi_2_opt2) + parseFloat(
                    finish_tearing_lusi_3_opt2);
                ave = total / 3

                document.getElementById('finish_tearing_lusi_avg_opt2').value = ave.toFixed(3);
            }
            if (finish_tearing_lusi_1_opt2 != "" && finish_tearing_lusi_2_opt2 != "" && finish_tearing_lusi_3_opt2 == "") {
                total = parseFloat(finish_tearing_lusi_1_opt2) + parseFloat(finish_tearing_lusi_2_opt2);
                ave = total / 2

                document.getElementById('finish_tearing_lusi_avg_opt2').value = ave.toFixed(3);
            }
            if (finish_tearing_lusi_1_opt2 != "" && finish_tearing_lusi_2_opt2 == "" && finish_tearing_lusi_3_opt2 == "") {
                total = parseFloat(finish_tearing_lusi_1_opt2);
                ave = total / 1

                document.getElementById('finish_tearing_lusi_avg_opt2').value = ave.toFixed(3);
            }

            // Rata-Rata finish tearing  pakan
            if (finish_tearing_pakan_1_opt2 != "" && finish_tearing_pakan_2_opt2 != "" && finish_tearing_pakan_3_opt2 !=
                "") {
                total = parseFloat(finish_tearing_pakan_1_opt2) + parseFloat(finish_tearing_pakan_2_opt2) + parseFloat(
                    finish_tearing_pakan_3_opt2);
                ave = total / 3

                document.getElementById('finish_tearing_pakan_avg_opt2').value = ave.toFixed(3);
            }
            if (finish_tearing_pakan_1_opt2 != "" && finish_tearing_pakan_2_opt2 != "" && finish_tearing_pakan_3_opt2 ==
                "") {
                total = parseFloat(finish_tearing_pakan_1_opt2) + parseFloat(finish_tearing_pakan_2_opt2);
                ave = total / 2

                document.getElementById('finish_tearing_pakan_avg_opt2').value = ave.toFixed(3);
            }
            if (finish_tearing_pakan_1_opt2 != "" && finish_tearing_pakan_2_opt2 == "" && finish_tearing_pakan_3_opt2 ==
                "") {
                total = parseFloat(finish_tearing_pakan_1_opt2);
                ave = total / 1

                document.getElementById('finish_tearing_pakan_avg_opt2').value = ave.toFixed(3);
            }


            // Rata-Rata finish shrinkage lusi 
            if (finish_shringkage_lusi_1_opt2 != "" && finish_shringkage_lusi_2_opt2 != "" &&
                finish_shringkage_lusi_3_opt2 != "") {
                total = parseFloat(finish_shringkage_lusi_1_opt2) + parseFloat(finish_shringkage_lusi_2_opt2) + parseFloat(
                    finish_shringkage_lusi_3_opt2);
                ave = total / 3

                document.getElementById('finish_shringkage_lusi_avg_opt2').value = ave.toFixed(3);
            }
            if (finish_shringkage_lusi_1_opt2 != "" && finish_shringkage_lusi_2_opt2 != "" &&
                finish_shringkage_lusi_3_opt2 == "") {
                total = parseFloat(finish_shringkage_lusi_1_opt2) + parseFloat(finish_shringkage_lusi_2_opt2);
                ave = total / 2

                document.getElementById('finish_shringkage_lusi_avg_opt2').value = ave.toFixed(3);
            }
            if (finish_shringkage_lusi_1_opt2 != "" && finish_shringkage_lusi_2_opt2 == "" &&
                finish_shringkage_lusi_3_opt2 == "") {
                total = parseFloat(finish_shringkage_lusi_1_opt2);
                ave = total / 1

                document.getElementById('finish_shringkage_lusi_avg_opt2').value = ave.toFixed(3);
            }

            // Finish option 2
            // Rata-Rata Finish weight
            if (finish_weight_1_opt2 != "" && finish_weight_2_opt2 != "" && finish_weight_3_opt2 != "") {
                total = parseFloat(finish_weight_1_opt2) + parseFloat(finish_weight_2_opt2) + parseFloat(
                    finish_weight_3_opt2);
                ave = total / 3

                document.getElementById('finish_weight_avg_opt2').value = ave.toFixed(3);
            }
            if (finish_weight_1_opt2 != "" && finish_weight_2_opt2 != "" && finish_weight_3_opt2 == "") {
                total = parseFloat(finish_weight_1_opt2) + parseFloat(finish_weight_2_opt2);
                ave = total / 2

                document.getElementById('finish_weight_avg_opt2').value = ave.toFixed(3);
            }
            if (finish_weight_1_opt2 != "" && finish_weight_2_opt2 == "" && finish_weight_3_opt2 == "") {
                total = parseFloat(finish_weight_1_opt2);
                ave = total / 1

                document.getElementById('finish_weight_avg_opt2').value = ave.toFixed(3);
            }


            // Rata-Rata Finish tensile lusi
            if (finish_tensile_lusi_1_opt2 != "" && finish_tensile_lusi_2_opt2 != "" && finish_tensile_lusi_3_opt2 != "") {
                total = parseFloat(finish_tensile_lusi_1_opt2) + parseFloat(finish_tensile_lusi_2_opt2) + parseFloat(
                    finish_tensile_lusi_3_opt2);
                ave = total / 3

                document.getElementById('finish_tensile_lusi_avg_opt2').value = ave.toFixed(3);
            }
            if (finish_tensile_lusi_1_opt2 != "" && finish_tensile_lusi_2_opt2 != "" && finish_tensile_lusi_3_opt2 == "") {
                total = parseFloat(finish_tensile_lusi_1_opt2) + parseFloat(finish_tensile_lusi_2_opt2);
                ave = total / 2

                document.getElementById('finish_tensile_lusi_avg_opt2').value = ave.toFixed(3);
            }
            if (finish_tensile_lusi_1_opt2 != "" && finish_tensile_lusi_2_opt2 == "" && finish_tensile_lusi_3_opt2 == "") {
                total = parseFloat(finish_tensile_lusi_1_opt2);
                ave = total / 1

                document.getElementById('finish_tensile_lusi_avg_opt2').value = ave.toFixed(3);
            }


            // Rata-Rata finish tensile pakan
            if (finish_tensile_pakan_1_opt2 != "" && finish_tensile_pakan_2_opt2 != "" && finish_tensile_pakan_3_opt2 !=
                "") {
                total = parseFloat(finish_tensile_pakan_1_opt2) + parseFloat(finish_tensile_pakan_2_opt2) + parseFloat(
                    finish_tensile_pakan_3_opt2);
                ave = total / 3

                document.getElementById('finish_tensile_pakan_avg_opt2').value = ave.toFixed(3);
            }
            if (finish_tensile_pakan_1_opt2 != "" && finish_tensile_pakan_2_opt2 != "" && finish_tensile_pakan_3_opt2 ==
                "") {
                total = parseFloat(finish_tensile_pakan_1_opt2) + parseFloat(finish_tensile_pakan_2_opt2);
                ave = total / 2

                document.getElementById('finish_tensile_pakan_avg_opt2').value = ave.toFixed(3);
            }
            if (finish_tensile_pakan_1_opt2 != "" && finish_tensile_pakan_2_opt2 == "" && finish_tensile_pakan_3_opt2 ==
                "") {
                total = parseFloat(finish_tensile_pakan_1_opt2);
                ave = total / 1

                document.getElementById('finish_tensile_pakan_avg_opt2').value = ave.toFixed(3);
            }


            // Rata-Rata finish tearing lusi 
            if (finish_tearing_lusi_1_opt2 != "" && finish_tearing_lusi_2_opt2 != "" && finish_tearing_lusi_3_opt2 != "") {
                total = parseFloat(finish_tearing_lusi_1_opt2) + parseFloat(finish_tearing_lusi_2_opt2) + parseFloat(
                    finish_tearing_lusi_3_opt2);
                ave = total / 3

                document.getElementById('finish_tearing_lusi_avg_opt2').value = ave.toFixed(3);
            }
            if (finish_tearing_lusi_1_opt2 != "" && finish_tearing_lusi_2_opt2 != "" && finish_tearing_lusi_3_opt2 == "") {
                total = parseFloat(finish_tearing_lusi_1_opt2) + parseFloat(finish_tearing_lusi_2_opt2);
                ave = total / 2

                document.getElementById('finish_tearing_lusi_avg_opt2').value = ave.toFixed(3);
            }
            if (finish_tearing_lusi_1_opt2 != "" && finish_tearing_lusi_2_opt2 == "" && finish_tearing_lusi_3_opt2 == "") {
                total = parseFloat(finish_tearing_lusi_1_opt2);
                ave = total / 1

                document.getElementById('finish_tearing_lusi_avg_opt2').value = ave.toFixed(3);
            }

            // Rata-Rata finish tearing  pakan
            if (finish_tearing_pakan_1_opt2 != "" && finish_tearing_pakan_2_opt2 != "" && finish_tearing_pakan_3_opt2 !=
                "") {
                total = parseFloat(finish_tearing_pakan_1_opt2) + parseFloat(finish_tearing_pakan_2_opt2) + parseFloat(
                    finish_tearing_pakan_3_opt2);
                ave = total / 3

                document.getElementById('finish_tearing_pakan_avg_opt2').value = ave.toFixed(3);
            }
            if (finish_tearing_pakan_1_opt2 != "" && finish_tearing_pakan_2_opt2 != "" && finish_tearing_pakan_3_opt2 ==
                "") {
                total = parseFloat(finish_tearing_pakan_1_opt2) + parseFloat(finish_tearing_pakan_2_opt2);
                ave = total / 2

                document.getElementById('finish_tearing_pakan_avg_opt2').value = ave.toFixed(3);
            }
            if (finish_tearing_pakan_1_opt2 != "" && finish_tearing_pakan_2_opt2 == "" && finish_tearing_pakan_3_opt2 ==
                "") {
                total = parseFloat(finish_tearing_pakan_1_opt2);
                ave = total / 1

                document.getElementById('finish_tearing_pakan_avg_opt2').value = ave.toFixed(3);
            }


            // Rata-Rata finish shrinkage lusi 
            if (finish_shringkage_lusi_1_opt2 != "" && finish_shringkage_lusi_2_opt2 != "" &&
                finish_shringkage_lusi_3_opt2 != "") {
                total = parseFloat(finish_shringkage_lusi_1_opt2) + parseFloat(finish_shringkage_lusi_2_opt2) + parseFloat(
                    finish_shringkage_lusi_3_opt2);
                ave = total / 3

                document.getElementById('finish_shringkage_lusi_avg_opt2').value = ave.toFixed(3);
            }
            if (finish_shringkage_lusi_1_opt2 != "" && finish_shringkage_lusi_2_opt2 != "" &&
                finish_shringkage_lusi_3_opt2 == "") {
                total = parseFloat(finish_shringkage_lusi_1_opt2) + parseFloat(finish_shringkage_lusi_2_opt2);
                ave = total / 2

                document.getElementById('finish_shringkage_lusi_avg_opt2').value = ave.toFixed(3);
            }
            if (finish_shringkage_lusi_1_opt2 != "" && finish_shringkage_lusi_2_opt2 == "" &&
                finish_shringkage_lusi_3_opt2 == "") {
                total = parseFloat(finish_shringkage_lusi_1_opt2);
                ave = total / 1

                document.getElementById('finish_shringkage_lusi_avg_opt2').value = ave.toFixed(3);
            }

            // Finish option 2
            // Rata-Rata Finish weight
            if (finish_weight_1_opt2 != "" && finish_weight_2_opt2 != "" && finish_weight_3_opt2 != "") {
                total = parseFloat(finish_weight_1_opt2) + parseFloat(finish_weight_2_opt2) + parseFloat(
                    finish_weight_3_opt2);
                ave = total / 3

                document.getElementById('finish_weight_avg_opt2').value = ave.toFixed(3);
            }
            if (finish_weight_1_opt2 != "" && finish_weight_2_opt2 != "" && finish_weight_3_opt2 == "") {
                total = parseFloat(finish_weight_1_opt2) + parseFloat(finish_weight_2_opt2);
                ave = total / 2

                document.getElementById('finish_weight_avg_opt2').value = ave.toFixed(3);
            }
            if (finish_weight_1_opt2 != "" && finish_weight_2_opt2 == "" && finish_weight_3_opt2 == "") {
                total = parseFloat(finish_weight_1_opt2);
                ave = total / 1

                document.getElementById('finish_weight_avg_opt2').value = ave.toFixed(3);
            }


            // Rata-Rata Finish tensile lusi
            if (finish_tensile_lusi_1_opt2 != "" && finish_tensile_lusi_2_opt2 != "" && finish_tensile_lusi_3_opt2 != "") {
                total = parseFloat(finish_tensile_lusi_1_opt2) + parseFloat(finish_tensile_lusi_2_opt2) + parseFloat(
                    finish_tensile_lusi_3_opt2);
                ave = total / 3

                document.getElementById('finish_tensile_lusi_avg_opt2').value = ave.toFixed(3);
            }
            if (finish_tensile_lusi_1_opt2 != "" && finish_tensile_lusi_2_opt2 != "" && finish_tensile_lusi_3_opt2 == "") {
                total = parseFloat(finish_tensile_lusi_1_opt2) + parseFloat(finish_tensile_lusi_2_opt2);
                ave = total / 2

                document.getElementById('finish_tensile_lusi_avg_opt2').value = ave.toFixed(3);
            }
            if (finish_tensile_lusi_1_opt2 != "" && finish_tensile_lusi_2_opt2 == "" && finish_tensile_lusi_3_opt2 == "") {
                total = parseFloat(finish_tensile_lusi_1_opt2);
                ave = total / 1

                document.getElementById('finish_tensile_lusi_avg_opt2').value = ave.toFixed(3);
            }


            // Rata-Rata finish tensile pakan
            if (finish_tensile_pakan_1_opt2 != "" && finish_tensile_pakan_2_opt2 != "" && finish_tensile_pakan_3_opt2 !=
                "") {
                total = parseFloat(finish_tensile_pakan_1_opt2) + parseFloat(finish_tensile_pakan_2_opt2) + parseFloat(
                    finish_tensile_pakan_3_opt2);
                ave = total / 3

                document.getElementById('finish_tensile_pakan_avg_opt2').value = ave.toFixed(3);
            }
            if (finish_tensile_pakan_1_opt2 != "" && finish_tensile_pakan_2_opt2 != "" && finish_tensile_pakan_3_opt2 ==
                "") {
                total = parseFloat(finish_tensile_pakan_1_opt2) + parseFloat(finish_tensile_pakan_2_opt2);
                ave = total / 2

                document.getElementById('finish_tensile_pakan_avg_opt2').value = ave.toFixed(3);
            }
            if (finish_tensile_pakan_1_opt2 != "" && finish_tensile_pakan_2_opt2 == "" && finish_tensile_pakan_3_opt2 ==
                "") {
                total = parseFloat(finish_tensile_pakan_1_opt2);
                ave = total / 1

                document.getElementById('finish_tensile_pakan_avg_opt2').value = ave.toFixed(3);
            }


            // Rata-Rata finish tearing lusi 
            if (finish_tearing_lusi_1_opt2 != "" && finish_tearing_lusi_2_opt2 != "" && finish_tearing_lusi_3_opt2 != "") {
                total = parseFloat(finish_tearing_lusi_1_opt2) + parseFloat(finish_tearing_lusi_2_opt2) + parseFloat(
                    finish_tearing_lusi_3_opt2);
                ave = total / 3

                document.getElementById('finish_tearing_lusi_avg_opt2').value = ave.toFixed(3);
            }
            if (finish_tearing_lusi_1_opt2 != "" && finish_tearing_lusi_2_opt2 != "" && finish_tearing_lusi_3_opt2 == "") {
                total = parseFloat(finish_tearing_lusi_1_opt2) + parseFloat(finish_tearing_lusi_2_opt2);
                ave = total / 2

                document.getElementById('finish_tearing_lusi_avg_opt2').value = ave.toFixed(3);
            }
            if (finish_tearing_lusi_1_opt2 != "" && finish_tearing_lusi_2_opt2 == "" && finish_tearing_lusi_3_opt2 == "") {
                total = parseFloat(finish_tearing_lusi_1_opt2);
                ave = total / 1

                document.getElementById('finish_tearing_lusi_avg_opt2').value = ave.toFixed(3);
            }

            // Rata-Rata finish tearing  pakan
            if (finish_tearing_pakan_1_opt2 != "" && finish_tearing_pakan_2_opt2 != "" && finish_tearing_pakan_3_opt2 !=
                "") {
                total = parseFloat(finish_tearing_pakan_1_opt2) + parseFloat(finish_tearing_pakan_2_opt2) + parseFloat(
                    finish_tearing_pakan_3_opt2);
                ave = total / 3

                document.getElementById('finish_tearing_pakan_avg_opt2').value = ave.toFixed(3);
            }
            if (finish_tearing_pakan_1_opt2 != "" && finish_tearing_pakan_2_opt2 != "" && finish_tearing_pakan_3_opt2 ==
                "") {
                total = parseFloat(finish_tearing_pakan_1_opt2) + parseFloat(finish_tearing_pakan_2_opt2);
                ave = total / 2

                document.getElementById('finish_tearing_pakan_avg_opt2').value = ave.toFixed(3);
            }
            if (finish_tearing_pakan_1_opt2 != "" && finish_tearing_pakan_2_opt2 == "" && finish_tearing_pakan_3_opt2 ==
                "") {
                total = parseFloat(finish_tearing_pakan_1_opt2);
                ave = total / 1

                document.getElementById('finish_tearing_pakan_avg_opt2').value = ave.toFixed(3);
            }


            // Rata-Rata finish shrinkage lusi 
            if (finish_shringkage_lusi_1_opt2 != "" && finish_shringkage_lusi_2_opt2 != "" &&
                finish_shringkage_lusi_3_opt2 != "") {
                total = parseFloat(finish_shringkage_lusi_1_opt2) + parseFloat(finish_shringkage_lusi_2_opt2) + parseFloat(
                    finish_shringkage_lusi_3_opt2);
                ave = total / 3

                document.getElementById('finish_shringkage_lusi_avg_opt2').value = ave.toFixed(3);
            }
            if (finish_shringkage_lusi_1_opt2 != "" && finish_shringkage_lusi_2_opt2 != "" &&
                finish_shringkage_lusi_3_opt2 == "") {
                total = parseFloat(finish_shringkage_lusi_1_opt2) + parseFloat(finish_shringkage_lusi_2_opt2);
                ave = total / 2

                document.getElementById('finish_shringkage_lusi_avg_opt2').value = ave.toFixed(3);
            }
            if (finish_shringkage_lusi_1_opt2 != "" && finish_shringkage_lusi_2_opt2 == "" &&
                finish_shringkage_lusi_3_opt2 == "") {
                total = parseFloat(finish_shringkage_lusi_1_opt2);
                ave = total / 1

                document.getElementById('finish_shringkage_lusi_avg_opt2').value = ave.toFixed(3);
            }

            // Finish option 3
            // Rata-Rata Finish weight
            if (finish_weight_1_opt3 != "" && finish_weight_2_opt3 != "" && finish_weight_3_opt3 != "") {
                total = parseFloat(finish_weight_1_opt3) + parseFloat(finish_weight_2_opt3) + parseFloat(
                    finish_weight_3_opt3);
                ave = total / 3

                document.getElementById('finish_weight_avg_opt3').value = ave.toFixed(3);
            }
            if (finish_weight_1_opt3 != "" && finish_weight_2_opt3 != "" && finish_weight_3_opt3 == "") {
                total = parseFloat(finish_weight_1_opt3) + parseFloat(finish_weight_2_opt3);
                ave = total / 2

                document.getElementById('finish_weight_avg_opt3').value = ave.toFixed(3);
            }
            if (finish_weight_1_opt3 != "" && finish_weight_2_opt3 == "" && finish_weight_3_opt3 == "") {
                total = parseFloat(finish_weight_1_opt3);
                ave = total / 1

                document.getElementById('finish_weight_avg_opt3').value = ave.toFixed(3);
            }


            // Rata-Rata Finish tensile lusi
            if (finish_tensile_lusi_1_opt3 != "" && finish_tensile_lusi_2_opt3 != "" && finish_tensile_lusi_3_opt3 != "") {
                total = parseFloat(finish_tensile_lusi_1_opt3) + parseFloat(finish_tensile_lusi_2_opt3) + parseFloat(
                    finish_tensile_lusi_3_opt3);
                ave = total / 3

                document.getElementById('finish_tensile_lusi_avg_opt3').value = ave.toFixed(3);
            }
            if (finish_tensile_lusi_1_opt3 != "" && finish_tensile_lusi_2_opt3 != "" && finish_tensile_lusi_3_opt3 == "") {
                total = parseFloat(finish_tensile_lusi_1_opt3) + parseFloat(finish_tensile_lusi_2_opt3);
                ave = total / 2

                document.getElementById('finish_tensile_lusi_avg_opt3').value = ave.toFixed(3);
            }
            if (finish_tensile_lusi_1_opt3 != "" && finish_tensile_lusi_2_opt3 == "" && finish_tensile_lusi_3_opt3 == "") {
                total = parseFloat(finish_tensile_lusi_1_opt3);
                ave = total / 1

                document.getElementById('finish_tensile_lusi_avg_opt3').value = ave.toFixed(3);
            }


            // Rata-Rata finish tensile pakan
            if (finish_tensile_pakan_1_opt3 != "" && finish_tensile_pakan_2_opt3 != "" && finish_tensile_pakan_3_opt3 !=
                "") {
                total = parseFloat(finish_tensile_pakan_1_opt3) + parseFloat(finish_tensile_pakan_2_opt3) + parseFloat(
                    finish_tensile_pakan_3_opt3);
                ave = total / 3

                document.getElementById('finish_tensile_pakan_avg_opt3').value = ave.toFixed(3);
            }
            if (finish_tensile_pakan_1_opt3 != "" && finish_tensile_pakan_2_opt3 != "" && finish_tensile_pakan_3_opt3 ==
                "") {
                total = parseFloat(finish_tensile_pakan_1_opt3) + parseFloat(finish_tensile_pakan_2_opt3);
                ave = total / 2

                document.getElementById('finish_tensile_pakan_avg_opt3').value = ave.toFixed(3);
            }
            if (finish_tensile_pakan_1_opt3 != "" && finish_tensile_pakan_2_opt3 == "" && finish_tensile_pakan_3_opt3 ==
                "") {
                total = parseFloat(finish_tensile_pakan_1_opt3);
                ave = total / 1

                document.getElementById('finish_tensile_pakan_avg_opt3').value = ave.toFixed(3);
            }


            // Rata-Rata finish tearing lusi 
            if (finish_tearing_lusi_1_opt3 != "" && finish_tearing_lusi_2_opt3 != "" && finish_tearing_lusi_3_opt3 != "") {
                total = parseFloat(finish_tearing_lusi_1_opt3) + parseFloat(finish_tearing_lusi_2_opt3) + parseFloat(
                    finish_tearing_lusi_3_opt3);
                ave = total / 3

                document.getElementById('finish_tearing_lusi_avg_opt3').value = ave.toFixed(3);
            }
            if (finish_tearing_lusi_1_opt3 != "" && finish_tearing_lusi_2_opt3 != "" && finish_tearing_lusi_3_opt3 == "") {
                total = parseFloat(finish_tearing_lusi_1_opt3) + parseFloat(finish_tearing_lusi_2_opt3);
                ave = total / 2

                document.getElementById('finish_tearing_lusi_avg_opt3').value = ave.toFixed(3);
            }
            if (finish_tearing_lusi_1_opt3 != "" && finish_tearing_lusi_2_opt3 == "" && finish_tearing_lusi_3_opt3 == "") {
                total = parseFloat(finish_tearing_lusi_1_opt3);
                ave = total / 1

                document.getElementById('finish_tearing_lusi_avg_opt3').value = ave.toFixed(3);
            }

            // Rata-Rata finish tearing  pakan
            if (finish_tearing_pakan_1_opt3 != "" && finish_tearing_pakan_2_opt3 != "" && finish_tearing_pakan_3_opt3 !=
                "") {
                total = parseFloat(finish_tearing_pakan_1_opt3) + parseFloat(finish_tearing_pakan_2_opt3) + parseFloat(
                    finish_tearing_pakan_3_opt3);
                ave = total / 3

                document.getElementById('finish_tearing_pakan_avg_opt3').value = ave.toFixed(3);
            }
            if (finish_tearing_pakan_1_opt3 != "" && finish_tearing_pakan_2_opt3 != "" && finish_tearing_pakan_3_opt3 ==
                "") {
                total = parseFloat(finish_tearing_pakan_1_opt3) + parseFloat(finish_tearing_pakan_2_opt3);
                ave = total / 2

                document.getElementById('finish_tearing_pakan_avg_opt3').value = ave.toFixed(3);
            }
            if (finish_tearing_pakan_1_opt3 != "" && finish_tearing_pakan_2_opt3 == "" && finish_tearing_pakan_3_opt3 ==
                "") {
                total = parseFloat(finish_tearing_pakan_1_opt3);
                ave = total / 1

                document.getElementById('finish_tearing_pakan_avg_opt3').value = ave.toFixed(3);
            }


            // Rata-Rata finish shrinkage lusi 
            if (finish_shringkage_lusi_1_opt3 != "" && finish_shringkage_lusi_2_opt3 != "" &&
                finish_shringkage_lusi_3_opt3 != "") {
                total = parseFloat(finish_shringkage_lusi_1_opt3) + parseFloat(finish_shringkage_lusi_2_opt3) + parseFloat(
                    finish_shringkage_lusi_3_opt3);
                ave = total / 3

                document.getElementById('finish_shringkage_lusi_avg_opt3').value = ave.toFixed(3);
            }
            if (finish_shringkage_lusi_1_opt3 != "" && finish_shringkage_lusi_2_opt3 != "" &&
                finish_shringkage_lusi_3_opt3 == "") {
                total = parseFloat(finish_shringkage_lusi_1_opt3) + parseFloat(finish_shringkage_lusi_2_opt3);
                ave = total / 2

                document.getElementById('finish_shringkage_lusi_avg_opt3').value = ave.toFixed(3);
            }
            if (finish_shringkage_lusi_1_opt3 != "" && finish_shringkage_lusi_2_opt3 == "" &&
                finish_shringkage_lusi_3_opt3 == "") {
                total = parseFloat(finish_shringkage_lusi_1_opt3);
                ave = total / 1

                document.getElementById('finish_shringkage_lusi_avg_opt3').value = ave.toFixed(3);
            }

            // Finish option 4
            // Rata-Rata Finish weight
            if (finish_weight_1_opt4 != "" && finish_weight_2_opt4 != "" && finish_weight_3_opt4 != "") {
                total = parseFloat(finish_weight_1_opt4) + parseFloat(finish_weight_2_opt4) + parseFloat(
                    finish_weight_3_opt4);
                ave = total / 3

                document.getElementById('finish_weight_avg_opt4').value = ave.toFixed(3);
            }
            if (finish_weight_1_opt4 != "" && finish_weight_2_opt4 != "" && finish_weight_3_opt4 == "") {
                total = parseFloat(finish_weight_1_opt4) + parseFloat(finish_weight_2_opt4);
                ave = total / 2

                document.getElementById('finish_weight_avg_opt4').value = ave.toFixed(3);
            }
            if (finish_weight_1_opt4 != "" && finish_weight_2_opt4 == "" && finish_weight_3_opt4 == "") {
                total = parseFloat(finish_weight_1_opt4);
                ave = total / 1

                document.getElementById('finish_weight_avg_opt4').value = ave.toFixed(3);
            }


            // Rata-Rata Finish tensile lusi
            if (finish_tensile_lusi_1_opt4 != "" && finish_tensile_lusi_2_opt4 != "" && finish_tensile_lusi_3_opt4 != "") {
                total = parseFloat(finish_tensile_lusi_1_opt4) + parseFloat(finish_tensile_lusi_2_opt4) + parseFloat(
                    finish_tensile_lusi_3_opt4);
                ave = total / 3

                document.getElementById('finish_tensile_lusi_avg_opt4').value = ave.toFixed(3);
            }
            if (finish_tensile_lusi_1_opt4 != "" && finish_tensile_lusi_2_opt4 != "" && finish_tensile_lusi_3_opt4 == "") {
                total = parseFloat(finish_tensile_lusi_1_opt4) + parseFloat(finish_tensile_lusi_2_opt4);
                ave = total / 2

                document.getElementById('finish_tensile_lusi_avg_opt4').value = ave.toFixed(3);
            }
            if (finish_tensile_lusi_1_opt4 != "" && finish_tensile_lusi_2_opt4 == "" && finish_tensile_lusi_3_opt4 == "") {
                total = parseFloat(finish_tensile_lusi_1_opt4);
                ave = total / 1

                document.getElementById('finish_tensile_lusi_avg_opt4').value = ave.toFixed(3);
            }


            // Rata-Rata finish tensile pakan
            if (finish_tensile_pakan_1_opt4 != "" && finish_tensile_pakan_2_opt4 != "" && finish_tensile_pakan_3_opt4 !=
                "") {
                total = parseFloat(finish_tensile_pakan_1_opt4) + parseFloat(finish_tensile_pakan_2_opt4) + parseFloat(
                    finish_tensile_pakan_3_opt4);
                ave = total / 3

                document.getElementById('finish_tensile_pakan_avg_opt4').value = ave.toFixed(3);
            }
            if (finish_tensile_pakan_1_opt4 != "" && finish_tensile_pakan_2_opt4 != "" && finish_tensile_pakan_3_opt4 ==
                "") {
                total = parseFloat(finish_tensile_pakan_1_opt4) + parseFloat(finish_tensile_pakan_2_opt4);
                ave = total / 2

                document.getElementById('finish_tensile_pakan_avg_opt4').value = ave.toFixed(3);
            }
            if (finish_tensile_pakan_1_opt4 != "" && finish_tensile_pakan_2_opt4 == "" && finish_tensile_pakan_3_opt4 ==
                "") {
                total = parseFloat(finish_tensile_pakan_1_opt4);
                ave = total / 1

                document.getElementById('finish_tensile_pakan_avg_opt4').value = ave.toFixed(3);
            }


            // Rata-Rata finish tearing lusi 
            if (finish_tearing_lusi_1_opt4 != "" && finish_tearing_lusi_2_opt4 != "" && finish_tearing_lusi_3_opt4 != "") {
                total = parseFloat(finish_tearing_lusi_1_opt4) + parseFloat(finish_tearing_lusi_2_opt4) + parseFloat(
                    finish_tearing_lusi_3_opt4);
                ave = total / 3

                document.getElementById('finish_tearing_lusi_avg_opt4').value = ave.toFixed(3);
            }
            if (finish_tearing_lusi_1_opt4 != "" && finish_tearing_lusi_2_opt4 != "" && finish_tearing_lusi_3_opt4 == "") {
                total = parseFloat(finish_tearing_lusi_1_opt4) + parseFloat(finish_tearing_lusi_2_opt4);
                ave = total / 2

                document.getElementById('finish_tearing_lusi_avg_opt4').value = ave.toFixed(3);
            }
            if (finish_tearing_lusi_1_opt4 != "" && finish_tearing_lusi_2_opt4 == "" && finish_tearing_lusi_3_opt4 == "") {
                total = parseFloat(finish_tearing_lusi_1_opt4);
                ave = total / 1

                document.getElementById('finish_tearing_lusi_avg_opt4').value = ave.toFixed(3);
            }

            // Rata-Rata finish tearing  pakan
            if (finish_tearing_pakan_1_opt4 != "" && finish_tearing_pakan_2_opt4 != "" && finish_tearing_pakan_3_opt4 !=
                "") {
                total = parseFloat(finish_tearing_pakan_1_opt4) + parseFloat(finish_tearing_pakan_2_opt4) + parseFloat(
                    finish_tearing_pakan_3_opt4);
                ave = total / 3

                document.getElementById('finish_tearing_pakan_avg_opt4').value = ave.toFixed(3);
            }
            if (finish_tearing_pakan_1_opt4 != "" && finish_tearing_pakan_2_opt4 != "" && finish_tearing_pakan_3_opt4 ==
                "") {
                total = parseFloat(finish_tearing_pakan_1_opt4) + parseFloat(finish_tearing_pakan_2_opt4);
                ave = total / 2

                document.getElementById('finish_tearing_pakan_avg_opt4').value = ave.toFixed(3);
            }
            if (finish_tearing_pakan_1_opt4 != "" && finish_tearing_pakan_2_opt4 == "" && finish_tearing_pakan_3_opt4 ==
                "") {
                total = parseFloat(finish_tearing_pakan_1_opt4);
                ave = total / 1

                document.getElementById('finish_tearing_pakan_avg_opt4').value = ave.toFixed(3);
            }


            // Rata-Rata finish shrinkage lusi 
            if (finish_shringkage_lusi_1_opt4 != "" && finish_shringkage_lusi_2_opt4 != "" &&
                finish_shringkage_lusi_3_opt4 != "") {
                total = parseFloat(finish_shringkage_lusi_1_opt4) + parseFloat(finish_shringkage_lusi_2_opt4) + parseFloat(
                    finish_shringkage_lusi_3_opt4);
                ave = total / 3

                document.getElementById('finish_shringkage_lusi_avg_opt4').value = ave.toFixed(3);
            }
            if (finish_shringkage_lusi_1_opt4 != "" && finish_shringkage_lusi_2_opt4 != "" &&
                finish_shringkage_lusi_3_opt4 == "") {
                total = parseFloat(finish_shringkage_lusi_1_opt4) + parseFloat(finish_shringkage_lusi_2_opt4);
                ave = total / 2

                document.getElementById('finish_shringkage_lusi_avg_opt4').value = ave.toFixed(3);
            }
            if (finish_shringkage_lusi_1_opt4 != "" && finish_shringkage_lusi_2_opt4 == "" &&
                finish_shringkage_lusi_3_opt4 == "") {
                total = parseFloat(finish_shringkage_lusi_1_opt4);
                ave = total / 1

                document.getElementById('finish_shringkage_lusi_avg_opt4').value = ave.toFixed(3);
            }


        }
    </script>

@endsection
