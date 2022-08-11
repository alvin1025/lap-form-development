@extends('dashboard.layout.lte')

@section('title', 'DEBTOR DATA KD04 REQUEST')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">@yield('title')</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif

    {{-- <div class="d-flex justify-content-start">
        <a href="{{ route('kd04request.create') }}" class="btn btn-primary mb-3 mr-3">New</a>
        {{-- <a href="{{ route('kd3outindex') }}" class="btn btn-warning mb-3">Outstanding Customer</a> --}}
    {{-- </div>
    <hr> --}}
    <a href="{{ route('OutReqKd4') }}" class="btn btn-warning mb-3">Outstanding Customer</a>
    <hr>
    <div class="d-flex justify-content-evenly">
        <div class="row">
            <a href="{{ route('kd03request.index') }}" class="btn btn-secondary mb-3" style="width: 215px">CUSTOMER MAIN
                ADDRESS
                (KD03)</a>
            <a href="{{ route('kd04request.index') }}" class="btn btn-secondary mb-3" style="width: 215px">DEBTOR DATA
                (KD04)</a>
            <a href="{{ route('kd05request.index') }}" class="btn btn-secondary mb-3" style="width: 215px">ADDITIONAL
                ADDRESSES
                (KD05)</a>
            <a href="{{ route('kd06request.index') }}" class="btn btn-secondary mb-3" style="width: 215px">SALES CONDITION
                (KD06)</a>
            <a href="{{ route('kd11request.index') }}" class="btn btn-secondary mb-3" style="width: 215px">ASSOCIATION
                LIST
                (KD11)</a>
            <a href="{{ route('kd14request.index') }}" class="btn btn-secondary mb-3" style="width: 215px">CONTACT
                (KD14)</a>
        </div>
    </div>
    @if (Auth::user()->division == 'MANAGEMENT INFORMATION SYSTEM')
        <hr class="my-2">
        <div class="d-flex justify-content-start">
            <button type="button" class="btn btn-success mb-3 mx-3" data-bs-toggle="modal" data-bs-target="#kd04">
                Import KD04
            </button>

            {{-- Kd03 --}}
            <div class="modal fade" id="kd04" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Insert File Excel</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ route('importKd04') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" id="inputGroupFile02" name="excel">
                                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Upload</button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    @endif

    {{-- <div class="row justify-content-center"> --}}
    <hr class="mb-3 mt-5">
    <div class="row">
        <div class="d-flex justify-content-around">
            <div class="col-sm-12">
                <div class="row">
                    <div class="table-responsive mt-0">

                        <table class="table table-striped table-sm" id="dt-init2">
                            <thead>
                                <tr>
                                    <th scope="col">Cust No</th>
                                    <th scope="col">Credit Cust</th>
                                    <th scope="col">Credit Limit</th>
                                    {{-- <th scope="col">SD</th>
                                    <th scope="col">SG</th> --}}
                                    <th scope="col">Block Delivery</th>
                                    <th scope="col">Block Reason</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kd04req as $form)
                                    <tr>
                                        <td>{{ $form->kd4no_cust }}</td>
                                        <td>{{ $form->credit_cust }}</td>
                                        <td>{{ $form->credit_limit }}</td>
                                        {{-- <td>{{ $form->sd }}</td>
                                        <td>{{ $form->kd6sg }}</td> --}}
                                        <td>{{ $form->block_delivery }}</td>
                                        <td>{{ $form->block_reason }}</td>
                                        <td>
                                            {{-- @if ($form->status == "inputted") --}}
                                            <a href="/kd4ReqPdfFin/{{ $form->id }}" class="badge bg-danger"
                                                target="blank"><i class="fas fa-file-pdf" aria-hidden="true"></i></a>
                                            {{-- @endif --}}
                                            <a href="/dashboard/salesFolder/kd04request/{{ $form->id }}"
                                                class="badge bg-info">Info</a>
                                            @if (Auth::user()->division == 'FINANCE' || ((Auth::user()->division == 'FABRIC SALES' && $form->status_form == 'created') || $form->status_form == 'rejected') || Auth::user()->division == 'MANAGEMENT INFORMATION SYSTEM')
                                                <a href="/dashboard/salesFolder/kd04request/{{ $form->id }}/edit"
                                                    class="badge bg-warning">Modify</a>
                                            @endif
                                            @if (Auth::user()->division == 'MANAGEMENT INFORMATION SYSTEM')
                                                <form action="/dashboard/salesFolder/kd04request/{{ $form->id }}"
                                                    method="post" class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="badge bg-danger border-0"
                                                        onclick="return confirm('Are you sure?')"><i
                                                            class="fas fa-trash-alt"></i></span></button>
                                                </form>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end mt-3">
            <a href="{{ route('request') }}" class="btn btn-danger">BACK</a>
        </div>
    </div>
    </div>

@endsection
@push('after-script')
    <script>
        $(document).ready(function() {
            'use-strict';
            $('#dt-init').DataTable();
            $('#dt-init2').DataTable({
                "bAutoWidth": false,
                "aaSorting": [
                    [0, "desc"]
                ]
            });
            $('#dt-init4').DataTable();
        })
    </script>
@endpush
