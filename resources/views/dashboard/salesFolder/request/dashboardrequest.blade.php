@extends('dashboard.layout.lte')

@section('title', 'FORM REQUEST UBAH DATA')

@section('content')

    <form action="{{ route('sd.store') }}" method="post">
        @csrf
        <div class="row">
            <h5 class="text-center">@yield('title')</h5>
            {{-- </div> --}}
        </div>
        <hr>

        

        @if (auth()->user()->division == 'FINANCE' && auth()->user()->jabatan == 'Division Manager' || auth()->user()->position_job_name == 'DIREKTUR FINANCE, ACCT & IT' && auth()->user()->jabatan == 'Direksi')
        <div class="container">
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="d-flex justify-content-evenly">
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-warning">
                                    <div class="inner">
                                        {{-- <h3>53<sup style="font-size: 20px">%</sup></h3> --}}
                                        <h3>KD04</h3>
                                        <p>DEBTOR DATA</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-stats-bars"></i>
                                    </div>
                                    <a href="{{ route('kd4reqindex') }}" class="small-box-footer">More info <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-primary">
                                    <div class="inner">
                                        <h3>KD06</h3>
                                        <p>SALES CONDITION</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-stats-bars"></i>
                                    </div>
                                    <a href="{{ route('kd6reqindex') }}" class="small-box-footer">More info <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        @else
        <div class="container">
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">

                        <div class="d-flex justify-content-evenly">
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <h3>KD03</h3>
                                        <p>CUSTOMER MAIN ADDRESS</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-user-chart"></i>
                                    </div>
                                    <a href="{{ route('kd3reqindex') }}" class="small-box-footer">More info <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-warning">
                                    <div class="inner">
                                        {{-- <h3>53<sup style="font-size: 20px">%</sup></h3> --}}
                                        <h3>KD04</h3>
                                        <p>DEBTOR DATA</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-stats-bars"></i>
                                    </div>
                                    <a href="{{ route('kd4reqindex') }}" class="small-box-footer">More info <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-success">
                                    <div class="inner">
                                        <h3>KD05</h3>

                                        <p>ADDITIONAL ADDRESSES</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-stats-bars"></i>
                                    </div>
                                    <a href="{{ route('kd5reqindex') }}" class="small-box-footer">More info <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-evenly">
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-primary">
                                    <div class="inner">
                                        <h3>KD06</h3>
                                        <p>SALES CONDITION</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-stats-bars"></i>
                                    </div>
                                    <a href="{{ route('kd6reqindex') }}" class="small-box-footer">More info <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-danger">
                                    <div class="inner">
                                        <h3>KD11</h3>
                                        <p>ASSOCIATION LIST</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-stats-bars"></i>
                                    </div>
                                    <a href="{{ route('kd11reqindex') }}" class="small-box-footer">More info <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box" style="background-color: orangered">
                                    <div class="inner">
                                        <h3>KD14</h3>
                                        <p>CONTACT</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-stats-bars"></i>
                                    </div>
                                    <a href="{{ route('kd14reqindex') }}" class="small-box-footer">More info <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- ./col -->

                        <!-- ./col -->

                        <!-- ./col -->
                    </div>
                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
            </section>


        </div>
        @endif





    @endsection
