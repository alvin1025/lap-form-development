@extends('dashboard.layout.lte')

@section('title', 'Form Request')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome back, {{ Auth::user()->name }}</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <a href="{{ route('formrequest.create') }}" class="btn btn-primary mb-3">Create New Form</a>
        <table class="table table-striped table-sm" id="dt-init">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">No.Sales</th>
                    <th scope="col">DATE</th>
                    <th scope="col">DUE DATE</th>
                    <th scope="col">NO.</th>
                    <th scope="col">ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($forms as $form)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $form->formdevsales->no ?? 'Form tidak dari Sales' }}</td>
                        <td>{{ $form->date_in }}</td>
                        <td>{{ $form->due_date }}</td>
                        <td>{{ $form->no }}</td>
                        <td>
                            <a href="/dashboard/formrequest/{{ $form->id }}" class="badge bg-info"><i
                                    class="fa fa-eye" aria-hidden="true"></i></a>
                            <a href="/dashboard/formrequest/{{ $form->id }}/edit" class="badge bg-warning"><i
                                    class="fas fa-edit"></i></a>
                            <form action="/dashboard/formrequest/{{ $form->id }}" method="post" class="d-inline">
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


    <hr>
    <h6>Tabel Development Sales</h6>
    <div class="table-responsive mt-5">

        <table class="table table-striped" id="dt-init2">
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
                            <a href="/dashboard/formrequest/sales/{{ $form->id }}" class="badge bg-info"><i
                                    class="fa fa-eye" aria-hidden="true"></i></a>
                            <a href="/dashboard/formrequest/sales/{{ $form->id }}/edit" class="badge bg-warning"><i
                                    class="fas fa-edit"></i></a>
                            {{-- <form action="/dashboard/sales/{{ $form->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span
                                        data-feather="x-circle"></span></button>
                            </form> --}}
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
            $('#dt-init2').DataTable();
        })
    </script>
@endpush
