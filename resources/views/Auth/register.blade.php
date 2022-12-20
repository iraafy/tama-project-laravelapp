@extends('layouts.components')

@section('title', 'Register')

@section('content')

<div class="container mt-2 pt-5">
    <div class="row justify-content-center">
        <div class="p-4 col-lg col-sm-12 d-flex justify-content-center align-items-center">
            <img src="assets/img/register.png" width="85%" class="pt-5">
        </div>
        <div class="p-4 col-lg col-sm-12 pt-3 mt-5">
            @if(Session::has('status'))
            <div class="alert alert-danger" role="alert">
                {{Session::get('message')}}
            </div>
            @endif
            <h1 class="fw-bold mb-5 text-center text-color-primary">Registrasi</h1>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="username">Username:</label>
                    <input placeholder="Username" type="text" name="username" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="email">Email:</label>
                    <input placeholder="Email" type="text" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password">Password:</label>
                    <input placeholder="Password" type="password" name="password" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password">Konfirmasi Password:</label>
                    <input placeholder="Password" type="password" name="password2" class="form-control" required>
                </div>
                <button type="submit" class="btn bg-color-primary text-white w-100 mt-3">Register</button>
            </form>
        </div>
    </div>
    <br><br>

</div>
@endsection