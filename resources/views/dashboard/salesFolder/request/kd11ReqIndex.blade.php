@extends('dashboard.layout.lte')

@section('title', 'ASSOCIATION LIST KD11 REQUEST')

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
        @if (auth()->user()->division == 'FABRIC SALES' && auth()->user()->position_job_name == 'FABRIC SALES EXECUTIVE')
            <a href="{{ route('OutReqKd11') }}" class="btn btn-warning mb-3 mr-2">Outstanding Request<span class="badge badge-info right ml-2">{{ $sdm }}</span></a>
        @elseif (auth()->user()->division == 'FABRIC SALES' && auth()->user()->position_job_name == "DM FABRIC SALES")  
            <a href="{{ route('OutReqKd11') }}" class="btn btn-warning mb-3 mr-2">Outstanding Request<span class="badge badge-info right ml-2">{{ $dm }}</span></a>
        @elseif (auth()->user()->position_job_name == "GM SALES FABRIC & FACTORY MANAGER LPA") 
            <a href="{{ route('OutReqKd11') }}" class="btn btn-warning mb-3 mr-2">Outstanding Request<span class="badge badge-info right ml-2">{{ $gm }}</span></a>
        @elseif (auth()->user()->division == 'INTERNAL AUDIT')
            <a href="{{ route('OutReqKd11') }}" class="btn btn-warning mb-3 mr-2">Outstanding Request<span class="badge badge-info right ml-2">{{ $doc }}</span></a>
        @else
            <a href="{{ route('OutReqKd11') }}" class="btn btn-warning mb-3 mr-2">Outstanding Request</a>
        @endif


        {{-- <a href="{{ route('kd11.create') }}" class="btn btn-primary mb-3 mr-3">New</a> --}}
        
        <a href="{{ route('kd11req.inputted') }}" class="btn btn-success mb-3 mr-2">Inputted Request</a>
        <a href="{{ route('kd11req.finished') }}" class="btn btn-primary mb-3 mr-2">Finished Request</a>
        <a href="{{ route('kd11req.reject') }}" class="btn btn-danger mb-3 mr-2">Rejected Request</a>
    </div>
    </div>
    <hr>
    {{-- <div class="d-flex justify-content-evenly">
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
    </div> --}}
    @if (Auth::user()->division == 'MANAGEMENT INFORMATION SYSTEM')
        <hr class="my-2">
        <div class="d-flex justify-content-start">
            <button type="button" class="btn btn-success mb-3 mx-3" data-bs-toggle="modal" data-bs-target="#kd11">
                Import KD11
            </button>

            {{-- Kd11 --}}
            <div class="modal fade" id="kd11" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Insert File Excel</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ route('importKd11') }}" method="post" enctype="multipart/form-data">
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
    <hr class="mb-3 mt-2">
    <div class="row">
        <div class="d-flex justify-content-around">
            <div class="col-sm-12">
                <div class="row">
                    <div class="table-responsive mt-0">

                        <table class="table table-striped table-sm p-2" id="dt-init2">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Cust No</th>
                                    <th scope="col">SD</th>
                                    <th scope="col">SG</th>
                                    <th scope="col">Assoc</th>
                                    <th scope="col">Central Regu</th>
                                    <th scope="col">Condition</th>
                                    {{-- <th scope="col">SD</th>
                                    <th scope="col">SG</th> --}}
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kd11 as $form)
                                    <tr>
                                        <td>{{ $form->id }}</td>
                                        <td>{{ $form->kd11no_cust }}</td>
                                        <td>{{ $form->sd1 }}</td>
                                        <td>{{ $form->sg1 }}</td>
                                        <td>{{ $form->association_no1 }}</td>
                                        <td>{{ $form->central_regu1 }}</td>
                                        <td>{{ $form->central_regu1 }}</td>
                                        {{-- <td>{{ $form->sd }}</td>
                                        <td>{{ $form->kd6sg }}</td> --}}
                                        <td>
                                            @if (auth()->user()->division == 'FABRIC SALES' && auth()->user()->position_job_name == 'FABRIC SALES EXECUTIVE')
                                                
                                            <a href="/dashboard/salesFolder/change/request/show/kd11/{{ $form->id }}"
                                                class="badge bg-warning">Request Modify</a>
                                            <a href="/kd11/req/add/kd11/{{ $form->kd11no_cust }}"
                                                class="badge bg-success">Add More</a>
                                            @endif

                                            @if (Auth::user()->division == 'MANAGEMENT INFORMATION SYSTEM')
                                                <form action="/dashboard/salesFolder/kd11/{{ $form->id }}"
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
