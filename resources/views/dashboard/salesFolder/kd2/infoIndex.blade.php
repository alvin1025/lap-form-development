@extends('dashboard.layout.lte')

@section('title', 'All Customer Data KD02')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">@yield('title')</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <hr>
    <div class="d-flex justify-content-evenly">
        <div class="row">
            <a href="{{ route('kd2.index') }}" class="btn btn-secondary mb-3" style="width: 175px">KD02</a>
            <a href="{{ route('kd3.index') }}" class="btn btn-secondary mb-3" style="width: 175px">CUSTOMER MAIN ADDRESS
                (KD03)</a>
            <a href="{{ route('kd4.index') }}" class="btn btn-secondary mb-3" style="width: 175px">DEBTOR DATA (KD04)</a>
            <a href="{{ route('kd5.index') }}" class="btn btn-secondary mb-3" style="width: 175px">ADDITIONAL ADDRESSES
                (KD05)</a>
            <a href="{{ route('kd6.index') }}" class="btn btn-secondary mb-3" style="width: 175px">SALES CONDITION
                (KD06)</a>
            <a href="{{ route('kd11.index') }}" class="btn btn-secondary mb-3" style="width: 175px">ASSOCIATION LIST
                (KD11)</a>
            <a href="{{ route('kd14.index') }}" class="btn btn-secondary mb-3" style="width: 175px">CONTACT (KD14)</a>
        </div>
    </div>

    @if (Auth::user()->division == 'MANAGEMENT INFORMATION SYSTEM')
        <hr class="my-2">
        <div class="d-flex justify-content-start">

            {{-- Kd03 --}}
            <div class="modal fade" id="kd03" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Insert File Excel</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ route('importKd03') }}" method="post" enctype="multipart/form-data">
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
    <hr class="mb-3 mt-2">
    <div class="row">
        <div class="d-flex justify-content-around">
            <div class="col-sm-12">
                <div class="row">
                    <h6 class="mb-4">All Customer Form</h6>
                    <div class="table-responsive mt-0">

                        <table class="table table-striped table-sm" id="dt-init2">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col">Cust No</th>
                                    <th scope="col">Kode Customer</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">CoC</th>
                                    <th scope="col">Cty</th>
                                    <th scope="col">Address Code</th>
                                    <th scope="col" style="width: 80px">SD-SG</th>
                                    <th scope="col">Agent</th>
                                    <th scope="col">Contact</th>
                                    <th scope="col">Associate</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kd03unique as $form)
                                    <tr>
                                        <td>{{ $form->no_cust }}</td>
                                        <td>{{ $form->short_name }}</td>
                                        <td>{{ $form->nama1 }}</td>
                                        <td>{{ $form->negara }}</td>
                                        <td>{{ $form->kota }}</td>
                                        <td>{{ $form->addresscode1 }}</td>
                                        <td>{{ $form->sd }} - {{ $form->kd6sg }}</td>
                                        <td>{{ $form->nama_agent1 }}</td>
                                        <td>{{ $form->cp1 }}</td>
                                        <td>{{ $form->association_no1 }}</td>
                                        <td>
                                            @if ($form->status_form == '')
                                                <font style="color: brown">Need Submit</font>
                                            @elseif ($form->status_form == 'created')
                                                <font style="color: #DEA057">Need Apprv DM</font>
                                            @elseif ($form->status_form == 'submitted')
                                                <font style="color: orange">Need Apprv GM</font>
                                            @elseif ($form->status_form == 'acknowledged')
                                                <font style="color: blue">Need Apprv DM Finance</font>
                                            @elseif ($form->status_form == 'aprv 1')
                                                <font style="color: #251D3A">Need Apprv GM Finance</font>
                                            @elseif ($form->status_form == 'aprv 2')
                                                <font style="color: #277BC0">Need Apprv Document Control</font>
                                            @elseif ($form->status_form == 'inputted')
                                                <font style="color: #781C68">Inputted to INTEX</font>
                                            @elseif ($form->status_form == 'rejected')
                                                <font style="color: red">Rejected</font>
                                            @elseif ($form->status_form == 'finished')
                                                <font style="color: green">Finish</font>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="/dashboard/salesFolder/kd2/info/{{ $form->no_cust }}"
                                                class="badge bg-info"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
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
