@extends('dashboard.layout.lte')

@section('title', 'Form Key Acc')

@section('content')

    <form action="{{ route('keyacc.store') }}" method="post">
        @csrf
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
                            <label type="text" name="" id="" class="form-label"
                                style="font-size: 13px">Dept Name

                            </label>
                        </div>
                        <div class="col-sm-6">
                            <select class="selectpicker" aria-label="Default select example" name="dept"
                                data-live-search="true">
                                @foreach ($dept as $dep)
                                    @if (old('dept') == $dep->description)
                                        <option data-tokens="{{ $dep->description }}" selected>
                                            {{ $dep->description }}
                                        </option>
                                    @else
                                        <option data-tokens="{{ $dep->description }}">{{ $dep->description }}
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                            @error('dept')
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
                            <label type="text" name="" id="" class="form-label"
                                style="font-size: 13px">User Group

                            </label>
                        </div>
                        <div class="col-sm-6">
                            <select class="selectpicker" aria-label="Default select example" name="fgrp"
                                data-live-search="true">
                                @foreach ($users as $user)
                                    @if (old('fgrp') == $user->description)
                                        <option data-tokens="{{ $user->description }}" selected>
                                            {{ $user->description }}
                                        </option>
                                    @else
                                        <option data-tokens="{{ $user->description }}">{{ $user->description }}
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                            @error('fgrp')
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
                                style="font-size: 13px">Menu Group

                            </label>
                        </div>
                        <div class="col-sm-6">
                            <select class="selectpicker" aria-label="Default select example" name="mgrp"
                                data-live-search="true">
                                @foreach ($menus as $menu)
                                    @if (old('mgrp') == $menu->description)
                                        <option data-tokens="{{ $menu->description }}" selected>
                                            {{ $menu->description }}
                                        </option>
                                    @else
                                        <option data-tokens="{{ $menu->description }}">{{ $menu->description }}
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                            @error('mgrp')
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
                            <label type="text" name="" id="" class="form-label">Client

                            </label>
                        </div>
                        <div class="col-sm-6">
                            <select class="selectpicker" aria-label="Default select example" name="client"
                                data-live-search="true">
                                <option value="BCI">BCI</option>
                                <option value="LPA">LPA
                                </option>
                            </select>
                            @error('client')
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
                            <label type="text" name="" id="" class="form-label">Person Name
                            </label>
                        </div>
                        <div class="col-sm-8">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" />
                            @error('name')
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
                <a href="{{ route('keyacc.index') }}" class="btn btn-danger">BACK</a>
            </div>
            <div class="col-sm-1 mr-5">
                <button type="submit" class="btn btn-primary">SUBMIT</button>
            </div>
        </div>
    </form>



@endsection
