@extends('login.layout')
@section('title', 'Login')
@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-4">
<<<<<<< HEAD
                <form action="{{route('register')}}" method="post" class="needs-validation">
                <div class="card">
=======
                <form method="post" action="/" class="card">
>>>>>>> 6f4a965 (perbaikan git)
                    <div class="card-header">
                        <h1>Login</h1>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Username</label>
<<<<<<< HEAD
                            <input type="text" class="form-control" name="username" placeholder="username">
=======
                            <input type="text" class="form-control" name="username" placeholder="Username">
>>>>>>> 6f4a965 (perbaikan git)
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password">
<<<<<<< HEAD
                            @csrf
=======
>>>>>>> 6f4a965 (perbaikan git)
                        </div>
                    </div>
                    @csrf
                    <div class="card-footer">
                        <button class="btn btn-success" type="submit">Login</button>
                    </div>
<<<<<<< HEAD
                </div>
=======
>>>>>>> 6f4a965 (perbaikan git)
                </form>
            </div>
        </div>
    </div>
@endsection