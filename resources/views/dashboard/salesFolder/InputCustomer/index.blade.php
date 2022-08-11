@extends('dashboard.layout.lte')

@section('title', 'Permintaan Input/Ubah Data Customer')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">@yield('title')</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <a href="{{ route('customer.create') }}" class="btn btn-primary mb-3">Create New Form</a>
        <table class="table table-light table-striped" id="dt-init">
            <thead>
                <tr>
                    <th scope="col" style="color: #000">No.</th>
                    <th scope="col">No.Test</th>
                    <th scope="col">Customer</th>
                    <th scope="col">Jenis Sample</th>
                    <th scope="col">ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customer as $form)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>aa</td>
                        <td>aa</td>
                        <td>aa</td>
                        <td>
                            <a href="/dashboard/salesFolder/customer/{{ $form->id }}" class="badge bg-info"><i
                                    class="fa fa-eye" aria-hidden="true"></i></a>
                            <a href="/dashboard/salesFolder/customer/{{ $form->id }}/edit" class="badge bg-warning"><i
                                    class="fas fa-edit"></i></a>
                            <form action="/dashboard/salesFolder/customer/{{ $form->id }}" method="post"
                                class="d-inline">
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
