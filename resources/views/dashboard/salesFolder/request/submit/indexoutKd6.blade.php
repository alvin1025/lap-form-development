@extends('dashboard.layout.lte')

@section('title', 'Customer Data KD06 Request')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">@yield('title')</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="d-flex justify-content-start">
        <div class="col-sm-3">
            <a href="{{ route('kd6reqindex') }}" class="btn btn-danger">BACK</a>
        </div>
    </div>

    @if (Auth::user()->division == 'MANAGEMENT INFORMATION SYSTEM')
        <hr class="my-2">
        <div class="d-flex justify-content-start">
            <button type="button" class="btn btn-success mb-3 mx-3" data-bs-toggle="modal" data-bs-target="#kd06">
                Import KD06
            </button>

            {{-- Kd06 --}}
            <div class="modal fade" id="kd06" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Insert File Excel</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ route('importKd06') }}" method="post" enctype="multipart/form-data">
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
                    <div class="table-responsive mt-0">

                        <table class="table table-striped table-sm" id="dt-init2">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Cust No</th>
                                    <th scope="col">SD</th>
                                    <th scope="col">SG</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kd06 as $form)
                                    <tr>
                                        <td>{{ $form->id }}</td>
                                        <td>{{ $form->kd6no_cust }}</td>
                                        <td>{{ $form->sd }}</td>
                                        <td>{{ $form->kd6sg }}</td>
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
                                            <a href="/dashboard/salesFolder/change/request/kd6/{{ $form->id }}/submit"
                                                class="badge bg-success">Submit</a>
                                            @if (Auth::user()->division == 'MANAGEMENT INFORMATION SYSTEM')
                                                <form action="/dashboard/salesFolder/kd6/{{ $form->id }}" method="post"
                                                    class="d-inline">
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
                    [1, "desc"],
                    [0, "desc"]
                ],
                "columnDefs": [
                    //hide the second & fourth column
                    {
                        "visible": false,
                        "targets": [0]
                    }
                ]
            });
            $('#dt-init4').DataTable();
        })
    </script>
@endpush
