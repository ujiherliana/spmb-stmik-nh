@extends('layout')

@section('content')
    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">login</div>
                        <div class="card-body">
                            <form action="{{ route('login.post') }}" method="post">
                                @csrf

                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 form-label text-md-right">E-Mail
                                        Address</label>
                                    <div class="col-md-7">
                                        <input type="text" id="email_address" name="email" class="form-control"
                                            required autofocus>
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                    <div class="col-md-7">
                                        <input type="password" id="password" name="password" required class="form-control">
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-7 offset-md-4">
                                        <div class="checkbox">
                                            <label for="">
                                                <input type="checkbox" name="remember"> Remember Me
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-7 offset-md-4">
                                        <button class="btn btn-primary" type="submit">Login</button>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-7 offset-md-4">
                                        <label for="">Belum punya akun?.. <a href="{{ route('register') }}">Register
                                                Now</a></label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
