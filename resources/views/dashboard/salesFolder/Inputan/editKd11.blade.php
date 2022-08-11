@extends('dashboard.layout.lte')

@section('title', 'Edit Kd11')

@section('content')

    <form action="{{ route('update.Kd11', ['id' => $kd11->id]) }}" method="post">
        @csrf
        @method('put')
        <div class="row">
            <h5 class="text-center">@yield('title')</h5>
            {{-- </div> --}}
        </div>
        <hr>

        <div class="card-header">
            KD11 ASSOCIATIONS LIST
        </div>
        <div class="card-body">
            <div class="col-sm-8">
                <div class="d-flex flex-row mt-2">
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label">Cust No</label>
                    </div>
                    <div class="col-sm-3">
                        <input id="cust_no" type="text" class="form-control @error('cust_no') is-invalid @enderror"
                            name="kd11no_cust" value="{{ $kd11->kd11no_cust }}" readonly />
                        @error('cust_no')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <hr class="mt-2">
            <div class="d-flex justify-content-evenly">
                <div class="col-sm-6">
                    <div class="d-flex flex-row">
                        <div class="col-sm-2 mr-5">
                            <label type="text" name="" id="" class="form-label" style="font-size: 13px">SD

                            </label>
                        </div>
                        <div class="col-sm-6">
                            <select class="selectpicker" aria-label="Default select example" name="sd1"
                                data-live-search="true">
                                @foreach ($sds as $sd)
                                    @if ($kd11->sd1 == $sd->sd)
                                        <option data-tokens="{{ $sd->sd }}" selected>
                                            {{ $kd11->sd1 }}
                                        </option>
                                    @else
                                        <option data-tokens="{{ $sd->sd }}">{{ $sd->sd }}
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                            @error('sd1')
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
                            <label type="text" name="" id="" class="form-label" style="font-size: 13px">SG

                            </label>
                        </div>
                        <div class="col-sm-6">
                            <select class="selectpicker" aria-label="Default select example" name="sg1"
                                data-live-search="true">
                                <option selected value="">Open</option>
                                @foreach ($sgs as $sg)
                                    @if ($kd11->sg1 == $sg->sg)
                                        <option data-tokens="{{ $sg->sg }}" selected>
                                            {{ $kd11->sg1 }}
                                        </option>
                                    @else
                                        <option data-tokens="{{ $sg->sg }}">{{ $sg->sg }}
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                            @error('sg1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="d-flex flex-row mt-3">
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label" style="font-size: 11px">Association -
                            No</label>
                    </div>
                    <div class="col-sm-3">
                        <select class="selectpicker" aria-label="Default select example" name="association_no1"
                            data-live-search="true">
                            @foreach ($assocs as $assoc)
                                @if ($kd11->association_no1 == $assoc->assoc)
                                    <option data-tokens="{{ $assoc->assoc }}" selected>
                                        {{ $kd11->association_no1 }}
                                    </option>
                                @else
                                    <option data-tokens="{{ $assoc->assoc }}">{{ $assoc->assoc }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                        @error('association_no1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="d-flex flex-row mt-3">
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label">Status</label>
                    </div>
                    <div class="col-sm-6">
                        <select class="selectpicker" aria-label="Default select example" name="status1"
                            data-live-search="true">
                            <option value="1" {{ $kd11->status1 == 1 ? 'selected' : '' }}>Active</option>
                            <option value="2" {{ $kd11->status1 == 2 ? 'selected' : '' }}>Inactive</option>
                        </select>
                        @error('status1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="d-flex flex-row mt-2">
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label" style="font-size: 13px">Central
                            regu</label>
                    </div>
                    <div class="col-sm-6">
                        <select class="selectpicker" aria-label="Default select example" name="central_regu1"
                            data-live-search="true">
                            <option value="Y" {{ $kd11->central_regu1 == 'Y' ? 'selected' : '' }}>Yes, paymt.via
                                centr.assoc</option>
                            <option value="N" {{ $kd11->central_regu1 == 'N' ? 'selected' : '' }}>No, direct payment
                            </option>
                            <option value="S" {{ $kd11->central_regu1 == 'S' ? 'selected' : '' }}>Posted for single
                                company</option>
                        </select>
                        @error('central_regu1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="d-flex flex-row mt-2">
                    <div class="col-sm-2 mr-3">
                        <label type="text" name="" id="" class="form-label" style="font-size: 13px">Conditions
                        </label>
                    </div>
                    <div class="col-sm-6">
                        <select class="selectpicker" aria-label="Default select example" name="conditions1"
                            data-live-search="true">
                            <option value="A" {{ $kd11->conditions1 == 'A' ? 'selected' : '' }}>Association</option>
                            <option value="C" {{ $kd11->conditions1 == 'C' ? 'selected' : '' }}>Customer</option>
                            <option value="O" {{ $kd11->conditions1 == 'O' ? 'selected' : '' }}>Central Office</option>
                        </select>
                        @error('conditions1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>



        <div class="
                            d-flex justify-content-end mb-5">
            <div class="col-sm-1">
                <a href="{{ route('inputan.index') }}" class="btn btn-primary">BACK</a>
            </div>
            <div class="col-sm-1 mr-5">
                <button type="submit" class="btn btn-primary">SAVE</button>
            </div>
        </div>
    </form>


    @push('after-script')
        <script>
            $(document).ready(function() {
                'use-strict';
                $('#dt-init').DataTable();
                $('#dt-init2').DataTable();
                $('#dt-init4').DataTable();
            });
            var i = 0;

            $("#add").click(function() {
                ++i;
                $("#kd05_1").append($("#test").html());
            });
        </script>
    @endpush
@endsection
