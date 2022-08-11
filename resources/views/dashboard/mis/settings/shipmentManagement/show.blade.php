@extends('dashboard.layout.lte')

@section('title', 'Form ShipmentKind Management')

@section('content')

    {{-- <form action="{{ route('classes.update', ['class' => $class->id]) }}" method="post">
        @csrf
        @method('put') --}}
    <div class="row">
        <h5 class="text-center">@yield('title')</h5>
        {{-- </div> --}}
    </div>
    <hr>

    <div class="container">
        <div class="d-flex justify-content-evenly">
            <div class="col-sm-6">
                <div class="d-flex flex-row">
                    <div class="col-sm-2 mr-5">
                        <label type="text" name="" id="" class="form-label" style="font-size: 13px">Shki

                        </label>
                    </div>
                    <div class="col-sm-6">
                        <select class="selectpicker" aria-label="Default select example" name="shki"
                            data-live-search="true" disabled>
                            <option value="{{ $shipment->shki }}" selected>{{ $shipment->shki }}</option>
                            @foreach ($shki as $shipment)
                                @if (old('shki') == $shipment->description)
                                    <option data-tokens="{{ $shipment->description }}" selected>
                                        {{ $shipment->description }}
                                    </option>
                                @else
                                    <option data-tokens="{{ $shipment->description }}">{{ $shipment->description }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                        @error('shki')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="d-flex flex-row mt-2">
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label">Carr

                        </label>
                    </div>
                    <div class="col-sm-6">
                        <input id="carr" type="text" class="form-control @error('carr') is-invalid @enderror"
                            name="carr" value="{{ $shipment->carr }}" disabled />
                        @error('carr')
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
                <div class="d-flex flex-row">
                    <div class="col-sm-2 mr-5">
                        <label type="text" name="" id="" class="form-label"
                            style="font-size: 13px">Shipment Class

                        </label>
                    </div>
                    <div class="col-sm-6">
                        <input id="shipment_class" type="text"
                            class="form-control @error('shipment_class') is-invalid @enderror" name="shipment_class"
                            value="{{ $shipment->shipment_class }}" disabled />
                        @error('shipment_class')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="d-flex flex-row mt-2">
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label">Supplier

                        </label>
                    </div>
                    <div class="col-sm-6">
                        <input id="supplier" type="text" class="form-control @error('supplier') is-invalid @enderror"
                            name="supplier" value="{{ $shipment->supplier }}" disabled />
                        @error('supplier')
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
                <div class="d-flex flex-row">
                    <div class="col-sm-2 mr-5">
                        <label type="text" name="" id="" class="form-label" style="font-size: 13px">Pack

                        </label>
                    </div>
                    <div class="col-sm-6">
                        <select class="selectpicker" aria-label="Default select example" name="pack"
                            data-live-search="true" disabled>
                            <option value="{{ $shipment->pack }}" selected>{{ $shipment->pack }}</option>
                            @foreach ($packing as $pc)
                                @if (old('shki') == $pc->description)
                                    <option data-tokens="{{ $pc->description }}">
                                        {{ $pc->description }}
                                    </option>
                                @else
                                    <option data-tokens="{{ $pc->description }}">{{ $pc->description }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                        @error('pack')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="d-flex flex-row mt-2">
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label">Dispadvgen
                        </label>
                    </div>
                    <div class="col-sm-6">
                        <input id="dispadvgen" type="text" class="form-control @error('dispadvgen') is-invalid @enderror"
                            name="dispadvgen" value="{{ $shipment->dispadvgen }}" disabled />
                        @error('dispadvgen')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-start">
            <div class="col-sm-6">
                <div class="d-flex flex-row mt-2">
                    <div class="col-sm-2 mr-5">
                        <label type="text" name="" id="" class="form-label">Description
                        </label>
                    </div>
                    <div class="col-sm-8">
                        <input id="description" type="text"
                            class="form-control @error('description') is-invalid @enderror" name="description"
                            value="{{ $shipment->description }}" disabled />
                        @error('description')
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
                            d-flex justify-content-end mb-5">
        <div class="col-sm-1 mr-5">
            <a href="{{ route('shipmentKindManagement.index') }}" class="btn btn-danger">BACK</a>
        </div>
    </div>
    {{-- </form> --}}



@endsection
