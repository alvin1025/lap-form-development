@extends('dashboard.layout.lte')

@section('title', 'Development Report')

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
        <a href="{{ route('qard.create') }}" class="btn btn-primary mb-3">Create New Form</a>
        <table class="table table-striped table-sm" id="dt-init">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Index</th>
                    <th scope="col">Article greige</th>
                    <th scope="col">Article Finish</th>
                    <th scope="col">Tanggal Masuk</th>
                    <th scope="col">ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($master as $form)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>cek</td>
                        <td>pls</td>
                        <td>placeholder</td>
                        <td>placeholder</td>
                        <td>
                            <a href="/dashboard/qard/{{ $form->id }}" class="badge bg-info"><i class="fa fa-eye"
                                    aria-hidden="true"></i></a>
                            <a href="/dashboard/qard/{{ $form->id }}/edit" class="badge bg-warning"><i
                                    class="fas fa-edit"></i></a>
                            <form action="/dashboard/qard/{{ $form->id }}" method="post" class="d-inline">
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
