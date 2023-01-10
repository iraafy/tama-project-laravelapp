@extends('layouts.components')

@section('title', 'Forgot')

@section('content')
<div class="container mt-5 pt-5">
    <div class="row mt-2 justify-content-center">
        <div class="p-4 col-lg col-sm-12 d-flex justify-content-center align-items-center">
            <img src="assets/img/login.png" style="margin: 0 auto;" width="85%">
        </div>
        <div class="p-4 col-lg col-sm-12 pt-3 mt-5">
            <h1 class="fw-bold mb-5 text-center text-color-primary">Forgot</h1>
            @if(Session::has('status'))
            <div class="alert alert-danger" role="alert">
                {{Session::get('message')}}
            </div>
            @endif
            <form action="{{ route('sendResetLink') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="username">Email:</label>
                    <input placeholder="Email" type="email" name="email" class="form-control" required>
                    <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                </div>
                <button type="submit" class="btn bg-color-primary text-white w-100 mt-3">Kirim </button>
            </form>
            <a href="/login" class="text-color-primary">Login</a>
        </div>

    </div>
    <br><br>
</div>
@endsection