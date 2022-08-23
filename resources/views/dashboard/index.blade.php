@extends('dashboard.layout.lte')

@section('title', 'Dashboard Utama')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

    </div>
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="container">
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{ $kd03all }}</h3>

                                <p>All Customer</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-user-chart"></i>
                            </div>
                            <a href="/dashboard/salesFolder/kd2" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-down"></i></a>
                        </div>
                    </div>

                    @if (auth()->user()->division == 'FABRIC SALES' && auth()->user()->position_job_name == 'FABRIC SALES EXECUTIVE')
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    {{-- <h3>53<sup style="font-size: 20px">%</sup></h3> --}}
                                    <h3>{{ $kd03fix }}</h3>

                                    <p>Customer Outstanding</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="{{ route('kd3outindex') }}" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    @elseif (auth()->user()->division == 'FABRIC SALES' && auth()->user()->position_job_name == 'DM FABRIC SALES')
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    {{-- <h3>53<sup style="font-size: 20px">%</sup></h3> --}}
                                    <h3>{{ $dm }}</h3>

                                    <p>Customer Outstanding</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="{{ route('kd3outindex') }}" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    @elseif (auth()->user()->position_job_name == 'GM SALES FABRIC & FACTORY MANAGER LPA')
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    {{-- <h3>53<sup style="font-size: 20px">%</sup></h3> --}}
                                    <h3>{{ $gm }}</h3>

                                    <p>Customer Outstanding</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="{{ route('kd3outindex') }}" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    @elseif (auth()->user()->division == 'FINANCE' && auth()->user()->jabatan == 'Division Manager')
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    {{-- <h3>53<sup style="font-size: 20px">%</sup></h3> --}}
                                    <h3>{{ $dmFin }}</h3>

                                    <p>Customer Outstanding</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="{{ route('kd3outindex') }}" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    @elseif (auth()->user()->position_job_name == 'DIREKTUR FINANCE, ACCT & IT' && auth()->user()->jabatan == 'Direksi')
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    {{-- <h3>53<sup style="font-size: 20px">%</sup></h3> --}}
                                    <h3>{{ $gmFin }}</h3>

                                    <p>Customer Outstanding</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="{{ route('kd3outindex') }}" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    @elseif (auth()->user()->division == 'INTERNAL AUDIT')
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    {{-- <h3>53<sup style="font-size: 20px">%</sup></h3> --}}
                                    <h3>{{ $doc }}</h3>

                                    <p>Customer Outstanding</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="{{ route('kd3outindex') }}" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    @endif

                    <!-- ./col -->

                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                {{-- <h3>53<sup style="font-size: 20px">%</sup></h3> --}}
                                <h3>{{ $kd03inputted }}</h3>

                                <p>Customer Inputted</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            
                            <a href="{{ route('kd3inputted') }}" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    @if (auth()->user()->division == 'FABRIC SALES' && auth()->user()->position_job_name == 'FABRIC SALES EXECUTIVE')
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    {{-- <h3>53<sup style="font-size: 20px">%</sup></h3> --}}
                                    <h3>{{ $reject }}</h3>

                                    <p>Customer Rejected</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="{{ route('kd3reject') }}" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    @endif
                    <!-- ./col -->

                    <!-- ./col -->

                    <!-- ./col -->
                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
    </div>
    <div class="container">
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-primary">
                            <div class="inner">
                                <h3>{{ $finish }}</h3>

                                <p>Finished Customer</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-user-chart"></i>
                            </div>
                            <a href="{{ route('finishedIndex') }}" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
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




@endsection
@push('after-script')
    <script>
        $(document).ready(function() {
            'use-strict';
            $('#dt-init').DataTable();
            $('#dt-init2').DataTable();
            $('#dt-init4').DataTable();
        })
    </script>
@endpush
