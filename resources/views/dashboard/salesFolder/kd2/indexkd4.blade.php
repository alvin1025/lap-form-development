@extends('dashboard.layout.lte')

@section('title', 'DEBTOR DATA KD04')

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
        <a href="{{ route('kd3outindex') }}" class="btn btn-warning mb-3">Outstanding Customer</a>
    </div>
    <hr>
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

    <hr class="mb-3 mt-2">
    <div class="row">
        <div class="d-flex justify-content-around">
            <div class="col-sm-12">
                <div class="row">
                    <h6 class="mb-4">All Customer Form</h6>
                    <div class="table-responsive mt-0">

                        <table class="table table-striped table-sm" id="dt-init2">
                            <thead>
                                <tr>
                                    <th scope="col">Cust No</th>
                                    <th scope="col">Credit Cust</th>
                                    <th scope="col">Credit Limit</th>
                                    <th scope="col">Block Delivery</th>
                                    <th scope="col">Block Reason</th>
                                    <th scope="col">Credit Line Check</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kd04 as $form)
                                    <tr>
                                        <td>{{ $form->kd4no_cust }}</td>
                                        <td>{{ $form->credit_cust }}</td>
                                        <td>{{ $form->credit_limit }}</td>
                                        <td>{{ $form->block_delivery }}</td>
                                        <td>{{ $form->block_reason }}</td>
                                        <td>{{ $form->credit_line_check }}</td>
                                        <td>
                                            <a href="/dashboard/salesFolder/kd4/{{ $form->id }}"
                                                class="badge bg-info">Info</a>
                                            @if ((auth()->user()->division == 'FABRIC SALES' && auth()->user()->jabatan == 'Sub Division Manager' && $form->status_form == '') || (auth()->user()->division == 'FABRIC SALES' && auth()->user()->jabatan == 'Sub Division Manager' && $form->status_form == 'rejected') || auth()->user()->division == 'FINANCE' || auth()->user()->division == 'MANAGEMENT INFORMATION SYSTEM')
                                                <a href="/dashboard/salesFolder/kd4/{{ $form->id }}/edit"
                                                    class="badge bg-warning">Modify</a>
                                            @endif
                                            @if (Auth::user()->division == 'MANAGEMENT INFORMATION SYSTEM')
                                                <form action="/dashboard/salesFolder/kd4/{{ $form->id }}"
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
    </div>
    <div class="d-flex justify-content-end mt-3">
        <a href="{{ route('kd2.index') }}" class="btn btn-danger">BACK</a>
    </div>
    </div>

@endsection
@push('after-script')
    <script>
        $(document).ready(function() {
            'use-strict';
            $('#dt-init').DataTable();
            $('#dt-init2').DataTable({
                "bAutoWidth": false
            });
            $('#dt-init4').DataTable();
        })
    </script>
@endpush
