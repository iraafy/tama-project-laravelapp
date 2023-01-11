@extends('layouts.components')

@section('title', 'Login')

@section('content')
<div class="container mt-5 pt-5">
    <div class="row mt-2 justify-content-center">
        <div class="p-4 col-lg col-sm-12 d-flex justify-content-center align-items-center">
            <img src="assets/img/login.png" style="margin: 0 auto;" width="85%">
        </div>
        <div class="p-4 col-lg col-sm-12 pt-3 mt-5">
            <h1 class="fw-bold mb-5 text-center text-color-primary">LOGIN</h1>
            @if(Session::has('status'))
            <div class="alert alert-danger" role="alert">
                {{Session::get('message')}}
            </div>
            @endif
            <form action="" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="username">Email:</label>
                    <input placeholder="Masukkan Email Anda" type="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password">Password:</label>
                    <input placeholder="Masukkan Password Anda" type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" name="login" class="btn bg-color-primary text-white w-100 mt-3">LOGIN</button>
            </form>
            <a href="/forgot" class="text-color-primary">Lupa Password</a>
            <p class="text-center pt-0">Belum punya akun? <a href="/register" class="text-color-primary">Register</a></p>
        </div>

    </div>
    <br><br>
</div>
@endsection