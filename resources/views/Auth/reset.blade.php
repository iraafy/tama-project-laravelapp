@extends('layouts.components')

@section('title', 'ResetPassword')

@section('content')
<div class="container mt-5 pt-5">
    <div class="row mt-2 justify-content-center">
        <div class="p-4 col-lg col-sm-12 d-flex justify-content-center align-items-center">
            <img src="{{URL::asset('assets/img/login.png')}}" style="margin: 0 auto;" width="85%">
        </div>
        <div class="p-4 col-lg col-sm-12 pt-3 mt-5">
            <h3 class="fw-bold mb-5 text-center" style="color: #592C75">PASSWORD BARU</h3>
            @if(Session::has('status'))
            <div class="alert alert-danger" role="alert">
                {{Session::get('message')}}
            </div>
            @endif
            @if (Session::get('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
            @endif
            <form action="{{ route('resetPassword') }}" method="POST">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="mb-3">
                    <label for="username">Email:</label>
                    <input placeholder="Email" type="email" name="email" class="form-control" value="{{ $email }}" required disabled>
                    <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                </div>
                <div class="mb-3">
                    <label for="password">Password:</label>
                    <input placeholder="Masukkan Password Baru Anda (minimal 5 karakter)" type="password" name="password" class="form-control" required>
                    <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                </div>
                <div class="mb-3">
                    <label for="password">Konfirmasi Password:</label>
                    <input placeholder="Konfirmasi Password Anda" type="password" name="password_confirmation" class="form-control" required>
                    <span class="text-danger">@error('password_confirmation'){{ $message }}@enderror</span>
                </div>
                <button type="submit" class="btn text-white w-100 mt-3" style="background-color: #592C75;">Simpan</button>
            </form>
            <p class="text-center pt-3">Kembali kehalaman <a href="/login" style="color: #592C75;">Login</a></p>
        </div>

    </div>
    <br><br>
</div>
@endsection