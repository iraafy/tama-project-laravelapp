@extends('layouts.components')

@section('title', 'Lupa Password')

@section('content')
<div class="container mt-5 pt-5">
    <div class="row mt-2 justify-content-center">
        <div class="p-4 col-lg col-sm-12 d-flex justify-content-center align-items-center">
            <img src="assets/img/lupa_pass.jpg" style="margin: 0 auto;" width="85%">
        </div>
        <div class="p-4 col-lg col-sm-12 pt-3 mt-5">
            <h1 class="fw-bold mb-5 text-center text-color-primary">Lupa Password</h1>
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
            <p>
            Masukkan alamat email Anda dan kami akan mengirimkan tautan untuk mengatur ulang kata sandi Anda.
            </p>
            <form action="{{ route('sendResetLink') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <!-- <label for="username">Email:</label> -->
                    <input placeholder="Masukkan Alamat Email Anda" type="email" name="email" class="form-control" required>
                    <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                </div>
                <button type="submit" class="btn bg-color-primary text-white w-100 mt-3">Kirim Tautan</button>
            </form>
            <p class="text-center pt-3">Kembali kehalaman <a href="/login" class="text-color-primary">Login</a></p>
        </div>

    </div>
    <br><br>
</div>
@endsection