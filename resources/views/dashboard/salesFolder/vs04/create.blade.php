@extends('dashboard.layout.lte')

@section('title', 'VS04')

@section('content')

    <form action="{{ route('vs04.store') }}" method="post">
        @csrf
        <div class="row">
            <h5 class="text-center">@yield('title')</h5>
            {{-- </div> --}}
        </div>
        <hr>

        <div class="container">
            <div class="d-flex justify-content-evenly">
                <div class="col-sm-6">
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-2 mr-5">
                            <label type="text" name="" id="" class="form-label">Agent
                            </label>
                        </div>
                        <div class="col-sm-8">
                            <input id="agent" type="text" class="form-control @error('agent') is-invalid @enderror"
                                name="agent" />
                            @error('agent')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-2 mr-5">
                            <label type="text" name="" id="" class="form-label">No. Cust
                            </label>
                        </div>
                        <div class="col-sm-8">
                            <input id="cust" type="text" class="form-control @error('cust') is-invalid @enderror"
                                name="cust" />
                            @error('cust')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-evenly">
                <div class="col-sm-6">
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-2 mr-5">
                            <label type="text" name="" id="" class="form-label">SD
                            </label>
                        </div>
                        <div class="col-sm-8">
                            <input id="sd" type="text" class="form-control @error('sd') is-invalid @enderror"
                                name="sd" />
                            @error('sd')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-2 mr-5">
                            <label type="text" name="" id="" class="form-label">FR
                            </label>
                        </div>
                        <div class="col-sm-8">
                            <input id="fr" type="date" class="form-control @error('fr') is-invalid @enderror"
                                name="fr" />
                            @error('fr')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-evenly">
                <div class="col-sm-6">
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-2 mr-5">
                            <label type="text" name="" id="" class="form-label"
                                style="font-size: 12px">Quantity Unit
                            </label>
                        </div>
                        <div class="col-sm-8">
                            <input id="qu" type="text" class="form-control @error('qu') is-invalid @enderror"
                                name="qu" />
                            @error('qu')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-2 mr-5">
                            <label type="text" name="" id="" class="form-label"
                                style="font-size: 12px">Type of Commission
                            </label>
                        </div>
                        <div class="col-sm-8">
                            <input id="ctype" type="text" class="form-control @error('ctype') is-invalid @enderror"
                                name="ctype" />
                            @error('ctype')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-evenly">
                <div class="col-sm-6">
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-2 mr-5">
                            <label type="text" name="" id="" class="form-label"
                                style="font-size: 12px">Quality Grade
                            </label>
                        </div>
                        <div class="col-sm-8">
                            <input id="qg" type="text" class="form-control @error('qg') is-invalid @enderror"
                                name="qg" />
                            @error('qg')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-2 mr-5">
                            <label type="text" name="" id="" class="form-label"
                                style="font-size: 12px">Form Quantity
                            </label>
                        </div>
                        <div class="col-sm-8">
                            <input id="from_quantity" type="number"
                                class="form-control @error('from_quantity') is-invalid @enderror" name="from_quantity" />
                            @error('from_quantity')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-evenly">
                <div class="col-sm-6">
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-2 mr-5">
                            <label type="text" name="" id="" class="form-label">%
                            </label>
                        </div>
                        <div class="col-sm-8">
                            <input id="allow" type="text"
                                class="form-control @error('allow') is-invalid @enderror" name="allow" />
                            @error('allow')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-2 mr-5">
                            <label type="text" name="" id="" class="form-label">Value
                            </label>
                        </div>
                        <div class="col-sm-8">
                            <input id="value" type="number"
                                class="form-control @error('value') is-invalid @enderror" name="value" />
                            @error('value')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="
                            d-flex justify-content-end my-5">
            <div class="col-sm-1">
                <a href="{{ route('vs04.index') }}" class="btn btn-danger">BACK</a>
            </div>
            <div class="col-sm-1 mr-5">
                <button type="submit" class="btn btn-primary">SUBMIT</button>
            </div>
        </div>
    </form>



@endsection
