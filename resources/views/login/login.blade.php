@extends('login.layout')
@section('title', 'Login')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <form action="{{route('register')}}" method="post" class="needs-validation">
                <div class="card">
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
                    <div class="card-footer">
                        <button class="btn btn-success" type="submit">Login</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection