@extends('dashboard.layouts.main')

@section('title', 'Dashboard Utama')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif

    @if (auth()->user()->division == 'COMMERCE YARN & GREIGE' || auth()->user()->division == 'FABRIC SALES' || auth()->user()->division == 'MANAGEMENT INFORMATION SYSTEM')

        <div class="row justify-content-start">
            <div class="d-flex justify-content-start">
                <div class="col-sm-4">
                    <div class="card text-dark bg-info mb-3" style="max-width: 18rem;">
                        <div class="card-header" style="color: white">Development Total</div>
                        <div class="card-body">
                            <h5 class="card-title" style="color: wheat">{{ $salesTotal }}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card text-dark bg-warning mb-3" style="max-width: 18rem;">
                        <div class="card-header" style="color: white">Development Outstanding</div>
                        <div class="card-body">
                            <h5 class="card-title" style="color: white">{{ $salesOutstandingTotal }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="row justify-content-center">
            <div class="d-flex justify-content-around">
                <div class="col-sm-5">
                    <h6 class="justify-content-center mb-4">Development Sales</h6>
                    <div class="table-responsive">
                        {{-- <a href="/dashboard/sales/create" class="btn btn-primary mb-3">Create New Form</a> --}}
                        <table class="table table-striped" id="dt-init">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">No. Form</th>
                                    <th scope="col">Status</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sales as $form)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $form->no }}</td>
                                        <td>{{ $form->status }}</td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>




                <div class="col-sm-5">
                    <div class="row">
                        <h6 class="mb-4">Development Sales Outstsanding</h6>
                        <div class="table-responsive mt-0">

                            <table class="table table-striped table-sm" id="dt-init2">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">No. Form</th>
                                        <th scope="col">Status</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($salesOutstanding as $form)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $form->no }}</td>
                                            <td>{{ $form->status }}</td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endif

    @if (auth()->user()->division == 'MARKETING')
        <div class="justify-content-center">
            <h6 class="mb-3">Development Marketing</h6>
        </div>
        <div class="row justify-content-start">
            <div class="d-flex justify-content-between">
                <div class="col-sm-5">
                    <div class="table-responsive">
                        <table class="table table-striped table-sm" id="dt-init">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">No.Sales</th>
                                    <th scope="col">DATE</th>
                                    <th scope="col">DUE DATE</th>
                                    <th scope="col">NO.</th>
                                    {{-- <th scope="col">ACTION</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($marketing as $form)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $form->formdevsales->no ?? 'Form tidak dari Sales' }}</td>
                                        <td>{{ $form->date_in }}</td>
                                        <td>{{ $form->due_date }}</td>
                                        <td>{{ $form->no }}</td>
                                        {{-- <td>
                                            <a href="/dashboard/formrequest/{{ $form->id }}"
                                                class="badge bg-info"><span data-feather="eye"></span></a>
                                            <a href="/dashboard/formrequest/{{ $form->id }}/edit"
                                                class="badge bg-warning"><span data-feather="edit"></span></a>
                                            <form action="/dashboard/formrequest/{{ $form->id }}" method="post"
                                                class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button class="badge bg-danger border-0"
                                                    onclick="return confirm('Are you sure?')"><span
                                                        data-feather="x-circle"></span></button>
                                            </form>
                                        </td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="table-responsive">
                        <table class="table table-striped table-sm" id="dt-init4">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">No.Sales</th>
                                    <th scope="col">DATE</th>
                                    <th scope="col">DUE DATE</th>
                                    <th scope="col">NO.</th>
                                    {{-- <th scope="col">ACTION</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($marketingInternal as $form)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $form->formdevsales->no ?? 'Form tidak dari Sales' }}</td>
                                        <td>{{ $form->date_in }}</td>
                                        <td>{{ $form->due_date }}</td>
                                        <td>{{ $form->no }}</td>
                                        {{-- <td>
                                            <a href="/dashboard/formrequest/{{ $form->id }}"
                                                class="badge bg-info"><span data-feather="eye"></span></a>
                                            <a href="/dashboard/formrequest/{{ $form->id }}/edit"
                                                class="badge bg-warning"><span data-feather="edit"></span></a>
                                            <form action="/dashboard/formrequest/{{ $form->id }}" method="post"
                                                class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button class="badge bg-danger border-0"
                                                    onclick="return confirm('Are you sure?')"><span
                                                        data-feather="x-circle"></span></button>
                                            </form>
                                        </td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if (auth()->user()->division == 'PRODUKSI & QARD SPINNING')
        <div class="d-flex justify-content-between">
            <div class="col-sm-5">
                <div class="table-responsive">
                    <table class="table table-striped table-sm" id="dt-init">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">DEV TYPE & L/T</th>
                                <th scope="col">DATE</th>
                                {{-- <th scope="col">ACTION</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bci as $form)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>cek</td>
                                    <td>pls</td>
                                    {{-- <td>
                            <a href="/dashboard/bci/{{ $form->id }}" class="badge bg-info"><span
                                    data-feather="eye"></span></a>
                            <a href="/dashboard/bci/{{ $form->id }}/edit" class="badge bg-warning"><span
                                    data-feather="edit"></span></a>
                            <form action="/dashboard/bci/{{ $form->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span
                                        data-feather="x-circle"></span></button>
                            </form>
                        </td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endif





@endsection
@push('after-script')
    <script>
        $(document).ready(function() {
            'use-strict';
            $('#dt-init').DataTable();
            $('#dt-init2').DataTable();
            $('#dt-init4').DataTable();
        })
    </script>
@endpush
