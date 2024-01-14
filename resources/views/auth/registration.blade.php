@extends('layout')

@section('content')
    <main class="login-form">
        <div class="container">
            <div class="justify-content-center row">
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-header">Registration</div>
                        <div class="card-body">

                            <form action="{{ route('register.post') }}" method="post">
                                @csrf

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Username</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="name" name="name" required
                                            autofocus>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">Email
                                        Address</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="email" name="email" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                    <div class="col-md-6">
                                        <input type="password" class="form-control" id="password" name="password" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="re-password" class="col-md-4 col-form-label text-md-right">Confirm
                                        Password</label>
                                    <div class="col-md-6">
                                        <input type="password" class="form-control" id="re-password" name="re-password"
                                            required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <button class="btn btn-primary" type="submit">Register</button>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <label for="">Sudah punya akun, silakan <a
                                                href="{{ route('login') }}">Login</a></label>
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
