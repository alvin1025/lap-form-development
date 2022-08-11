@extends('dashboard.layout.lte')

@section('title', 'Dashboard Sales')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Index Form Development Request</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <a href="/dashboard/sales/create" class="btn btn-primary mb-3">Create New Form</a>
        <table class="table table-striped" id="dt-init">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">No. Form</th>
                    <th scope="col">DATE</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sales as $form)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $form->no }}</td>
                        <td>{{ $form->date }}</td>
                        <td>
                            <a href="/dashboard/sales/{{ $form->id }}" class="badge bg-info"><i class="fa fa-eye"
                                    aria-hidden="true"></i></a>
                            <a href="/dashboard/sales/{{ $form->id }}/edit" class="badge bg-warning"><i
                                    class="fas fa-edit"></i></a>
                            <form action="/dashboard/sales/{{ $form->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><i
                                        class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
@push('after-script')
    <script>
        $(document).ready(function() {
            'use-strict';
            $('#dt-init').DataTable();
        })
    </script>
@endpush
