@extends('dashboard.layout.lte')

@section('title', 'Form VA03')

@section('content')

    <form action="{{ route('va03.update', ['va03' => $va03->id]) }}" method="post">
        @csrf
        @method('put')
        <div class="row">
            <h5 class="text-center">@yield('title')</h5>
            {{-- </div> --}}
        </div>
        <hr>

        <div class="container">
            <div class="d-flex justify-content-evenly">
                <div class="col-sm-6">
                    <div class="d-flex flex-row mt-2">
                        <div class="col-sm-2 mr-3">
                            <label type="text" name="" id="" class="form-label">Collection

                            </label>
                        </div>
                        <div class="col-sm-6">
                            <input id="collecion" type="text"
                                class="form-control @error('collecion') is-invalid @enderror" name="collecion"
                                value="{{ $va03->collecion }}" />
                            @error('collecion')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="d-flex flex-row">
                        <div class="col-sm-2 mr-5">
                            <label type="text" name="" id="" class="form-label"
                                style="font-size: 13px">Description
                            </label>
                        </div>
                        <div class="col-sm-6">
                            <input id="description" type="text"
                                class="form-control @error('description') is-invalid @enderror" name="description"
                                value="{{ $va03->description }}" />
                            @error('description')
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
                                style="font-size: 12px">Sandard Quantity
                                Unit

                            </label>
                        </div>
                        <div class="col-sm-6">
                            <select class="selectpicker" aria-label="Default select example" name="standar_qu"
                                data-live-search="true">
                                <option value="{{ $va03->standar_qu }}">{{ $va03->standar_qu }}</option>
                                @foreach ($quantity as $qu)
                                    @if (old('standar_qu') == $qu->description)
                                        <option data-tokens="{{ $qu->description }}">
                                            {{ $qu->description }}
                                        </option>
                                    @else
                                        <option data-tokens="{{ $qu->description }}">{{ $qu->description }}
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                            @error('standar_qu')
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
                            <label type="text" name="" id="" class="form-label">Block Since
                            </label>
                        </div>
                        <div class="col-sm-6">
                            <input id="blocked_since" type="text"
                                class="form-control @error('blocked_since') is-invalid @enderror" name="blocked_since"
                                value="{{ $va03->blocked_since }}" />
                            @error('blocked_since')
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
                            <label type="text" name="" id="" class="form-label">Period From

                            </label>
                        </div>
                        <div class="col-sm-6">
                            <input id="period_from" type="date"
                                class="form-control @error('period_from') is-invalid @enderror" name="period_from"
                                value="{{ $va03->period_from }}" />
                            @error('period_from')
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
                            <label type="text" name="" id="" class="form-label">Period To

                            </label>
                        </div>
                        <div class="col-sm-6">
                            <input id="period_to" type="date"
                                class="form-control @error('period_to') is-invalid @enderror" name="period_to"
                                value="{{ $va03->period_to }}" />
                            @error('period_to')
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
            <div class="col-sm-1">
                <a href="{{ route('va03.index') }}" class="btn btn-danger">BACK</a>
            </div>
            <div class="col-sm-1 mr-5">
                <button type="submit" class="btn btn-primary">SUBMIT</button>
            </div>
        </div>
    </form>



@endsection
