@extends('registration.layout')
@section('title', 'Registration')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h1>Register</h1>
                    </div>
                    <div class="card-body">
                    <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="username" placeholder="username@gmail.com">
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" placeholder="username@gmail.com">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="Password" placeholder="Password">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-success">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection