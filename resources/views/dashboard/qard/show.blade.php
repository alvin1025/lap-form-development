@extends('dashboard.layout.lte')

@section('title', 'Show Master Development Report')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h3 class="h2 text-center">Master Data Development Report (QARD)</h3>
    </div>

    {{-- <table class="table table-striped table-sm" id="dt-init"> --}}


    </table>

@endsection
{{-- @push('after-script')
    <script>
        $(document).ready(function() {
            'use-strict';
            $('#dt-init').DataTable();
        })
    </script>
@endpush --}}
