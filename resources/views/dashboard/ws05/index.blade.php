@extends('dashboard.layout.lte')
@section('title', 'Index WS05')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Index Ws05</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <div class="d-flex justify-content-start">

            <a href="/dashboard/ws05/create" class="btn btn-primary mb-3">Create Data</a>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success mb-3 mx-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Import Excel
            </button>
            {{-- <a href="/export-excel" class="btn mb-3" style="background-color: chartreuse; color:white">Export Excel</a>
  <a href="/export-pdf" class="btn btn-danger mb-3 mx-3">Export PDF</a> --}}


            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Insert File Excel</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <form action="/import-ws05" method="post" enctype="multipart/form-data">
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



        <table class="table table-striped table-sm" id="dt-init">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Article Greige</th>
                    <th scope="col">PIC</th>
                    <th scope="col">Composition</th>
                    <th scope="col">Customer</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ws05 as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->article_greige }}</td>
                        <td>{{ $data->pic }}</td>
                        <td>{{ $data->composition }}</td>
                        <td>{{ $data->customer }}</td>
                        <td>{{ $data->status }}</td>
                        <td>
                            <a href="/dashboard/ws05/{{ $data->id }}" class="badge bg-info"><i class="fa fa-eye"
                                    aria-hidden="true"></i></a>
                            <a href="/dashboard/ws05/{{ $data->id }}/edit" class="badge bg-warning"><i
                                    class="fas fa-edit"></i></a>
                            <form action="/dashboard/ws05/{{ $data->id }}" method="post" class="d-inline">
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
