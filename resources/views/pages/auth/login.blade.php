@extends('layouts.auth') @section('content')
    <div class="login-box">
        <!-- /.login-logo -->
        @include('includes.error-card')
        <div class="card mt-3">
            <div class="card-body login-card-body">
                <div class="login-logo">
                    <a href="/">
                        <img src="{{ url('/logo.png') }}" alt="Logo" width="100" />
                    </a>
                </div>
                <p class="login-box-msg">Sign in to start your session</p>
                <form action="/login" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username / Email Address" name="uid">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

            </div>
            <!-- /.login-card-body -->
        </div>

    </div>
@endsection
