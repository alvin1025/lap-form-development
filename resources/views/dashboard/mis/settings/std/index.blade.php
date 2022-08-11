@extends('dashboard.layout.lte')

@section('title', 'Form Std Sample')

@section('content')


    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <h4 class="text-center">@yield('title')</h4>
    <hr class="my-3">
    <div class="table-responsive">
        <a href="{{ route('stdSample.create') }}" class="btn btn-primary mb-3">Create New Form</a>
        <table class="table table-light table-striped" id="dt-init">
            <thead>
                <tr>
                    <th scope="col" style="color: #000">No.</th>
                    <th scope="col">Title</th>
                    <th scope="col">Descriptions</th>
                    <th scope="col">ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($stdSample as $form)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>aa</td>
                        <td>aa</td>
                        <td>
                            <a href="/dashboard/mis/settings/stdSample/{{ $form->id }}" class="badge bg-info"><i
                                    class="fa fa-eye" aria-hidden="true"></i></a>
                            <a href="/dashboard/mis/settings/stdSample/{{ $form->id }}/edit" class="badge bg-warning"><i
                                    class="fas fa-edit"></i></a>
                            <form action="/dashboard/mis/settings/stdSample/{{ $form->id }}" method="post"
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
