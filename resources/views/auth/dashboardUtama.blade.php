@extends('layouts.app2')

@section('title', 'Dashboard')

@section('content')

<nav class="main-header navbar navbar-expand navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

        <!-- Navbar Search -->
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <div class="dropdown">
            <button class="btn dropdown-toggle font-weight-bold text-lg-left" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" style="color: white; fontsize:16px;">
                Welcome back, {{ auth()->user()->employee_name }}
            </button>
            <div class="dropdown-menu mr-3" aria-labelledby="dropdownMenuButton" style="width: 100%">
                <a class="dropdown-item" href="/dashboard/register/{{ auth()->user()->id }}">Profile</a>
                <a class="dropdown-item" href="/settings/{{ auth()->user()->id }}/edit">Change Password</a>
                <hr>
                <a class="dropdown-item" href="{{ route('logout') }}" style="width: 100%">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" style="background-color: none; width:100%;"
                            class="btn btn-light">Logout</button>
                    </form>
                </a>
            </div>
        </div>
    </ul>
</nav>
    <div class="row justify-content-center">
        <div class="col-md-4">
            {{-- @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif --}}

            {{-- <form action="{{ route('login') }}" method="POST" novalidate> --}}

            @csrf
           
            <body class="hold-transition login-page"
                style="background-image: url('../img/background.png'); background-size: cover;">
                
                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-12">
                            {{-- <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div> --}}
                        </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="col-sm-12">
                        {{-- <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div> --}}
                    </div>
                </div>
        </div>
    </div>
    {{-- <div class="container"> --}}

    {{-- </div> --}}


    <div class="container">
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-6 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3 class="text-center my-5 p-3" style="color: white">New Customer</h3>
                            </div>
                            <div class="icon">
                                <i class="fas fa-user-chart"></i>
                            </div>
                            {{-- <a href="{{ route('finishedIndex') }}" class="small-box-footer">More info <i
                                                    class="fas fa-arrow-circle-right"></i></a> --}}
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                style="fontsize:13px; color:white">
                                Choose Menu
                            </button>
                            <div class="dropdown-menu mr-3" aria-labelledby="dropdownMenuButton" style="width: 94%">
                                <a class="dropdown-item" href="/dashboard">Menu Utama</a>
                                <a class="dropdown-item" href="/dashboard/salesFolder/info/kd2">All Customer</a>
                                <a class="dropdown-item" href="{{ route('kd3.create') }}">New Customer</a>
                                <a class="dropdown-item" href="/dashboard/salesFolder/kd2">Outstanding Customer</a>
                                <hr>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner my-2">
                                <h3 class="text-center my-5 p-3" style="color: white">Request Modify Customer</h3>
                            </div>
                            <div class="icon">
                                <i class="fas fa-user-chart"></i>
                            </div>
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                style="fontsize:13px; color:white">
                                Choose Menu
                            </button>
                            <div class="dropdown-menu mr-3" aria-labelledby="dropdownMenuButton" style="width: 94%">
                                <a class="dropdown-item" href="{{ route('kd3reqindex') }}">Request KD03</a>
                                <a class="dropdown-item" href="{{ route('kd4reqindex') }}">Request KD04</a>
                                <a class="dropdown-item" href="{{ route('kd5reqindex') }}">Request KD05</a>
                                <a class="dropdown-item" href="{{ route('kd6reqindex') }}">Request KD06</a>
                                <a class="dropdown-item" href="{{ route('kd11reqindex') }}">Request KD11</a>
                                <a class="dropdown-item" href="{{ route('kd14reqindex') }}">Request KD14</a>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    {{-- </form> --}}
    </div>
    </div>
@endsection
