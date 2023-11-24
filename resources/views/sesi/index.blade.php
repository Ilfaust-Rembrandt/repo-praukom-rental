@extends('include/layout')
@section('konten')
    <div class="w-50 center border rounded px-3 py-3 mx-auto">
        <h1>
            <form action="/sesi/login" method="POST">
            <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="name" name="name" class="form-control">
                </div>
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" value="{{Session::get('email')}}"class="form-control">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="mb-3 d-grid">
                    <button name="submit" type="submit" class="btn-primary">
                        Login
                    </button>
                </div>
            </form>
        </h1>
    </div>
@endsection