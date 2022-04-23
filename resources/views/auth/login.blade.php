@extends('layouts.app')

@section('title', 'Log in')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-4">
            {{-- @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif --}}

            <form action="{{ route('login') }}" method="POST" novalidate>

                @csrf

                <body class="my-login-page">
                    <section class="h-100">
                        <div class="container h-100">
                            <div class="row justify-content-md-center h-100">
                                <div class="card-wrapper">
                                    <div class="card fat">
                                        <div class="card-body">
                                            <h4 class="card-title">Login</h4>
                                            <form method="POST" class="my-login-validation" novalidate="">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="employee_no" class="form-label">NRP</label>
                                                    <input id="employee_no" type="text"
                                                        class="form-control  @error('password') is-invalid @enderror"
                                                        name="employee_no" value="" required autofocus>
                                                    @error('employee_no')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label for="password" class="form-label">PASSWORD</label>
                                                    <input id="password" type="password"
                                                        class="form-control  @error('password') is-invalid @enderror"
                                                        name="password" required data-eye>
                                                    @error('password')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>

                                                <div class="d-grid gap-2">
                                                    <button type="submit" class="btn btn-primary">Login</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        Copyright &copy; 2022 &mdash; LUCKY ABADI PRINT
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
            </form>
        </div>
    </div>
@endsection
