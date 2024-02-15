@extends('login.layout')
@section('title', 'Login')
@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-4">
                <form action="{{route('proses')}}" method="post" class="needs-validation">
                <div class="card">
                <form method="post" action="/" class="card">
                    <div class="card-header">
                        <h1>Login</h1>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" placeholder="username">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                            @csrf
                        </div>
                    </div>
                    @csrf
                    <div class="card-footer d-flex justify-content-between">
                        <button class="btn btn-success" type="submit">Login</button>
                    </div>
                    </form>
                    <div class="card-footer">
                    <form action="{{route('register')}}">
                        <button class="btn btn-success" type="submit">Register</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection