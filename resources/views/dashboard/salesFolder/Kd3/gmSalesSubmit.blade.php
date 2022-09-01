@extends('dashboard.layout.lte')

@section('title', 'Need Submit GM Sales')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">@yield('title')</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <a href="{{ route('kd2.index') }}" class="btn btn-warning mb-2">Back To Customer</a>

    <div class="row justify-content-center mt-3">
        <div class="row">
            <div class="d-flex justify-content-around">
                <div class="col-sm-12">
                    <div class="table-responsive">
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

                                @foreach ($kd03 as $form)
                                    <tr>
                                        <td>{{ $form->no_cust }}</td>
                                        <td>{{ $form->short_name }}</td>
                                        <td>{{ $form->nama1 }}</td>
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
                                            @if ($form->status_form != 'inputted')
                                                <a href="/dashboard/salesFolder/kd3/new/{{ $form->no_cust }}/submit"
                                                    class="badge bg-success">Submit</a>
                                            @endif
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
