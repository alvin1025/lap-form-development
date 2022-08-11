@extends('dashboard.layout.lte')

@section('title', 'Finish Customer')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">@yield('title')</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif


    {{-- <a href="{{ route('dashboardPrimary') }}" class="btn btn-primary mb-3">Create New Form</a> --}}
    <a href="{{ route('kd2.index') }}" class="btn btn-warning mb-2">Back To Customer</a>

    <div class="row justify-content-center mt-3">
        <div class="row">
            <div class="d-flex justify-content-around">
                <div class="col-sm-12">
                    {{-- <h6 class="justify-content-center mb-4" style="color: red">Outstanding Customer Form</h6> --}}
                    <div class="table-responsive">
                        {{-- <a href="/dashboard/sales/create" class="btn btn-primary mb-3">Create New Form</a> --}}
                        <table class="table table-striped" id="dt-init">
                            <thead>
                                <tr>
                                    <th scope="col">Cust No</th>
                                    <th scope="col">Kode Customer</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">SD</th>
                                    <th scope="col">SG</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>



                                <?php
                                // if ((auth()->user()->jabatan == 'Direksi' && auth()->user()->division == 'Finance') || auth()->user()->division == 'MANAGEMENT INFORMATION SYSTEM') {
                                //     $kdout = $kd03OutFin;
                                // }
                                // elseif (auth()->user()->jabatan == "Division Manager" && auth()->user()->division == 'FABRIC SALES') {
                                //     $kd03 = $kd03OutDm;
                                // } else (auth()->user()->jabatan == "Senior Manager" && auth()->user()->division == 'SALES') {
                                //     $kd03 = $kd03OutGm;
                                // }
                                ?>

                                @foreach ($kd03 as $form)
                                    <tr>
                                        <td>{{ $form->no_cust }}</td>
                                        <td>{{ $form->short_name }}</td>
                                        <td>{{ $form->nama1 }}</td>
                                        <td>{{ $form->sd }}</td>
                                        <td>{{ $form->kd6sg }}</td>
                                        <td>
                                            @if ($form->status_form == '')
                                            Need Submit
                                            @elseif ($form->status_form == 'created')
                                                Need Apprv DM
                                            @elseif ($form->status_form == 'submitted')
                                                Need Apprv GM
                                            @elseif ($form->status_form == 'acknowledged')
                                                Need Apprv DM Finance
                                            @elseif ($form->status_form == 'aprv 1')
                                                Need Apprv GM Finance
                                            @elseif ($form->status_form == 'aprv 2')
                                                Need Apprv Document Control
                                            @elseif ($form->status_form == 'inputted')
                                                Inputted to INTEX
                                            @elseif ($form->status_form == 'rejected')
                                                Rejected
                                            @elseif ($form->status_form == 'finished')
                                                Finish
                                            @endif
                                        </td>
                                        <td>
                                            {{-- <a href="/exportCust/{{ $form->no_cust }}" class="badge bg-danger"
                                                target="_blank"><i class="fas fa-file-pdf" aria-hidden="true"></i></a> --}}
                                            {{-- @if ($form->status_form == 'inputted')
                                                <a href="/dashboard/salesFolder/inputan/{{ $form->id }}/btlastsubmit"
                                                    class="badge bg-info"><i class="fa fa-eye"
                                                        aria-hidden="true"></i></a>
                                            @endif --}}
                                
                                            @if ($form->status_form == 'inputted')
                                                <a href="/dashboard/salesFolder/kd3/new/{{ $form->no_cust }}/submit"
                                                    class="badge bg-success">Submit</a>
                                            @endif
                                            {{-- @if (Auth::user()->division == 'FABRIC SALES')
                                                <a href="/dashboard/salesFolder/kd3/{{ $form->id }}/edit"
                                                    class="badge bg-warning"><i class="fas fa-edit"></i></a>
                                            @endif --}}
                                            {{-- @if (Auth::user()->division == 'FINANCE')
                                                <a href="/dashboard/salesFolder/kd3/{{ $form->id }}/edit"
                                                    class="badge bg-warning"><i class="fas fa-edit"></i></a>
                                            @endif --}}
                                            @if (Auth::user()->division == 'MANAGEMENT INFORMATION SYSTEM')
                                                <form action="/dashboard/salesFolder/kd3/{{ $form->id }}" method="post"
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

@endsection
@push('after-script')
    <script>
        $(document).ready(function() {
            'use-strict';
            $('#dt-init').DataTable({
                "bAutoWidth": false,
                "aaSorting": [
                    [0, "desc"]
                ]
            });
            $('#dt-init2').DataTable();
            $('#dt-init4').DataTable();
        })
    </script>
@endpush
