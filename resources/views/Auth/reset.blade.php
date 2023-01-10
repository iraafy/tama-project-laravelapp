@extends('layouts.components')

@section('title', 'ResetPassword')

@section('content')
<div class="container mt-5 pt-5">
    <div class="row mt-2 justify-content-center">
        <div class="p-4 col-lg col-sm-12 d-flex justify-content-center align-items-center">
            <img src="assets/img/login.png" style="margin: 0 auto;" width="85%">
        </div>
        <div class="p-4 col-lg col-sm-12 pt-3 mt-5">
            <h1 class="fw-bold mb-5 text-center text-color-primary">RESET PASSWORD</h1>
            @if(Session::has('status'))
            <div class="alert alert-danger" role="alert">
                {{Session::get('message')}}
            </div>
            @endif
            <form action="{{ route('resetPassword') }}" method="POST">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="mb-3">
                    <label for="username">Email:</label>
                    <input placeholder="Email" type="email" name="email" class="form-control" value="{{ $email }}" required>
                </div>
                <div class="mb-3">
                    <label for="password">Password:</label>
                    <input placeholder="Password" type="password" name="password" class="form-control" required>
                    <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                </div>
                <div class="mb-3">
                    <label for="password">Konfirmasi Password:</label>
                    <input placeholder="Konfirmasi Password" type="password" name="password_confirmation" class="form-control" required>
                    <span class="text-danger">@error('password_confirmation'){{ $message }}@enderror</span>
                </div>
                <button type="submit" class="btn bg-color-primary text-white w-100 mt-3">Simpan</button>
                <a href="/login" class="text-color-primary">Simpan</a>
            </form>
            
        </div>

    </div>
    <br><br>
</div>
@endsection