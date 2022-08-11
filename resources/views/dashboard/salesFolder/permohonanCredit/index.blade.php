@extends('dashboard.layout.lte')

@section('title', 'Index Perubahan Credit Limit Dan Credit Term')

@section('content')
    <h4 class="text-center">Index Perubahan Credit Limit Dan Credit Term</h4>
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <hr>

    <div class="table-responsive">
        <a href="{{ route('credit.create') }}" class="btn btn-primary mb-3">Create New Form</a>
        <table class="table table-striped table-sm" id="dt-init">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">No.Test</th>
                    <th scope="col">Customer</th>
                    <th scope="col">Jenis Sample</th>
                    <th scope="col">ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($credit as $form)
                    <tr>
                        <td>{{ $form->iteration }}</td>
                        <td>aa</td>
                        <td>aa</td>
                        <td>aa</td>
                        <td>
                            <a href="/dashboard/salesFolder/credit/{{ $form->id }}" class="badge bg-info"><i
                                    class="fa fa-eye" aria-hidden="true"></i></a>
                            <a href="/dashboard/salesFolder/credit/{{ $form->id }}/edit" class="badge bg-warning"><i
                                    class="fas fa-edit"></i></a>
                            <form action="/dashboard/salesFolder/credit/{{ $form->id }}" method="post"
                                class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><i
                                        class="fas fa-trash-alt"></i></span></button>
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
