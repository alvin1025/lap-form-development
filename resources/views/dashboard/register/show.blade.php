@extends('dashboard.layout.lte')

@section('title', 'Create New Employee Account')

@section('content')
    <section class="vh-100" style="background-color: #f4f5f7;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-10 mb-4 mb-lg-0">
                    <div class="card mb-3" style="border-radius: .5rem;">
                        <div class="row g-0">
                            <div class="col-md-4 gradient-custom text-center text-white"
                                style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                                <h5 class="mt-5">{{ $users->employee_name }}</h5>
                                <h6>{{ $users->employee_no }}</h6>
                                <h5>{{ $users->division }}</h5>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body p-4">
                                    <h6>Information</h6>
                                    <hr class="mt-0 mb-4">
                                    <div class="row pt-1">
                                        <div class="col-6 mb-3">
                                            <h6>Email</h6>
                                            <p class="text-muted">{{ $users->email }}</p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>Work Location</h6>
                                            <p class="text-muted">{{ $users->work_location }}</p>
                                        </div>
                                    </div>
                                    <div class="row pt-1">
                                        <div class="col-6 mb-3">
                                            <h6>Jabatan</h6>
                                            <p class="text-muted">{{ $users->jabatan }}</p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>Status</h6>
                                            <p class="text-muted">{{ $users->employee_status }}</p>
                                        </div>
                                    </div>
                                    {{-- <div class="d-flex justify-content-start">
                  <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                  <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                  <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                </div> --}}
                                </div>
                                <div class="d-flex justify-content-end mb-5">
                                    <div class="col-sm-3">
                                        <a href="/dashboard/register" class="btn btn-primary">Back</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
