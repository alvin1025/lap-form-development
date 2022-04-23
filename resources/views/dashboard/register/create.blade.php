@extends('dashboard.layouts.main')

@section('title', 'Create New Employee Account')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-12">

            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <form action="{{ route('register.store') }}" method="post">
                @csrf
                <section class="h-100 h-custom gradient-custom-2">
                    <div class="container py-5 h-100">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col-12">
                                <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                                    <div class="card-body p-0">
                                        <div class="row g-0">
                                            <div class="col-lg-6">
                                                <div class="p-5">
                                                    <h3 class="fw-normal mb-5" style="color: #4835d4;">User Registration
                                                    </h3>

                                                    <div class="mb-4 pb-2">
                                                        <div class="form-outline">
                                                            <input type="text" id="form3Examplev4"
                                                                class="form-control form-control-lg" name="employee_name" />
                                                            <label class="form-label" for="form3Examplev4">NAME</label>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 pb-2">
                                                        <div class="form-outline">
                                                            <input type="text" id="form3Examplev4"
                                                                class="form-control form-control-lg" name="employee_no" />
                                                            <label class="form-label" for="form3Examplev4">NRP</label>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 pb-2">
                                                        <div class="form-outline">
                                                            <input type="text" id="form3Examplev4"
                                                                class="form-control form-control-lg"
                                                                name="position_job_name" />
                                                            <label class="form-label" for="form3Examplev4">POSITION JOB
                                                                NAME</label>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 pb-2">
                                                        <div class="form-outline">
                                                            <input type="text" id="form3Examplev4"
                                                                class="form-control form-control-lg" name="jabatan" />
                                                            <label class="form-label"
                                                                for="form3Examplev4">JABATAN</label>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-5 mb-4 pb-2">

                                                            <div class="form-outline form-white">
                                                                <input type="text" id="form3Examplea7"
                                                                    class="form-control form-control-lg" name="job_code" />
                                                                <label class="form-label" for="form3Examplea7">JOB
                                                                    CODE</label>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-7 mb-4 pb-2">

                                                            <div class="form-outline form-white">
                                                                <input type="text" id="form3Examplea8"
                                                                    class="form-control form-control-lg" name="division" />
                                                                <label class="form-label"
                                                                    for="form3Examplea8">DIVISION</label>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-lg-6 bg-indigo text-white">
                                                <div class="p-5">
                                                    <label for="" class="mt-4"></label>
                                                    <div class="mb-4 pb-2 mt-5">
                                                        <div class="form-outline form-white">
                                                            <input type="text" id="form3Examplea2"
                                                                class="form-control form-control-lg" name="work_location" />
                                                            <label class="form-label" for="form3Examplea2">WORK
                                                                LOCATION</label>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 pb-2">
                                                        <div class="form-outline form-white">
                                                            <input type="text" id="form3Examplea3"
                                                                class="form-control form-control-lg" name="email" />
                                                            <label class="form-label" for="form3Examplea3">EMAIL</label>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 pb-2">
                                                        <div class="form-outline form-white">
                                                            <input type="text" id="form3Examplea6"
                                                                class="form-control form-control-lg" name="password" />
                                                            <label class="form-label"
                                                                for="form3Examplea6">PASSWORD</label>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4">
                                                        <div class="form-outline form-white">
                                                            <input type="text" id="form3Examplea9"
                                                                class="form-control form-control-lg"
                                                                name="employee_status" />
                                                            <label class="form-label" for="form3Examplea9">EMPLOYEE
                                                                STATUS</label>
                                                        </div>
                                                    </div>

                                                    <button type="submit" class="btn btn-light btn-lg mt-5"
                                                        data-mdb-ripple-color="dark">Register</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </form>

        </div>
    </div>

@endsection
