@extends('dashboard.layout.lte')

@section('title', 'Change Password')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h6>@yield('title')</h6>
                    </div>
                    <div class="card-body">
                        @if (session()->has('success'))
                            <div class="alert alert-success col-lg-8" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"
                            action="{{ route('update.settings', [$users->id]) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label>Enter Old Password :</label>
                                <input type="password" id="first-name"
                                    class="form-control @error('oldpassword') is-invalid @enderror"
                                    placeholder="Enter old password" name="oldpassword">
                            </div>
                            @error('oldpassword')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="form-group">
                                <label>Enter New Password :</label>
                                <input type="password" id="first-name" placeholder="Enter new password"
                                    class="form-control @error('newpassword') is-invalid @enderror" name="newpassword">
                            </div>
                            @error('oldpassword')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="form-group">
                                <label>Enter Confirm Password :</label>
                                <input type="password" id="first-name"
                                    class="form-control @error('password_confirmation') is-invalid @enderror"
                                    placeholder="Enter password confirmation" name="password_confirmation">
                            </div>
                            @error('password_confirmation')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
