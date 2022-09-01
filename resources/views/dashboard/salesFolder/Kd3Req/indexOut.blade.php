@extends('dashboard.layout.lte')

@section('title', 'Outstanding Customer')

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
                                    <th scope="col">Id</th>
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
                                        <td>{{ $form->id }}</td>
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
                                            @elseif ($form->status_form == 'aprv 1 ')
                                                Need Apprv GM
                                            @elseif ($form->status_form == 'aprv 2')
                                                Need Apprv Document Control
                                            @elseif ($form->status_form == 'rejected')
                                                Rejected
                                            @elseif ($form->status_form == 'inputted')
                                                Final Authorize
                                            @elseif ($form->status_form == 'finished')
                                                Finished
                                            @endif
                                        </td>
                                        <td>
                                            @if ($form->status_form != 'inputted')
                                                <a href="/dashboard/salesFolder/kd3/new/{{ $form->no_cust }}/submit"
                                                    class="badge bg-success">Submit</a>
                                            @endif
                                            @if (Auth::user()->division == 'FABRIC SALES')
                                                <a href="/dashboard/salesFolder/kd3/{{ $form->id }}/edit"
                                                    class="badge bg-warning">Modify</a>
                                            @endif
                                            @if (Auth::user()->division == 'MANAGEMENT INFORMATION SYSTEM')
                                                <form action="/dashboard/salesFolder/kd3/{{ $form->id }}"
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

@endsection
@push('after-script')
    <script>
        $(document).ready(function() {
            'use-strict';
            $('#dt-init').DataTable({
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
            $('#dt-init2').DataTable();
            $('#dt-init4').DataTable();
        })
    </script>
@endpush
