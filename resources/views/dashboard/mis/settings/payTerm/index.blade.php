@extends('dashboard.layout.lte')

@section('title', 'Pay Term')

@section('content')


    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <h4 class="text-center">@yield('title')</h4>
    <hr class="my-3">
    <div class="table-responsive">

        <div class="d-flex justify-content-start">
            <a href="{{ route('payTerm.create') }}" class="btn btn-primary mb-3">Create New Form</a>
            <button type="button" class="btn btn-success mb-3 mx-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Import Excel
            </button>
            {{-- modal --}}
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Insert File Excel</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <form action="{{ route('importPayterm') }}" method="post" enctype="multipart/form-data">
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



        <table class="table table-light table-striped" id="dt-init">
            <thead>
                <tr>
                    <th scope="col" style="color: #000">No.</th>
                    <th scope="col">PayTerm</th>
                    <th scope="col">Descriptions</th>
                    <th scope="col">Value</th>
                    <th scope="col">ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($payTerm as $form)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $form->pay_term }}</td>
                        <td>{{ $form->description }}</td>
                        <td>{{ $form->value }}</td>
                        <td>
                            <a href="/dashboard/mis/settings/payTerm/{{ $form->id }}" class="badge bg-info"><i
                                    class="fa fa-eye" aria-hidden="true"></i></a>
                            <a href="/dashboard/mis/settings/payTerm/{{ $form->id }}/edit" class="badge bg-warning"><i
                                    class="fas fa-edit"></i></a>
                            <form action="/dashboard/mis/settings/payTerm/{{ $form->id }}" method="post"
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
