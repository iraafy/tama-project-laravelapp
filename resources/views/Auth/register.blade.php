@extends('layouts.components')

@section('title', 'Register')

@section('content')

<div class="container pt-2">
    <div class="row justify-content-center">
        <div class="p-4 col-lg col-sm-12 d-flex justify-content-center align-items-center">
            <img src="assets/img/register.png" width="85%" class="pt-5">
        </div>
        <div class="p-4 col-lg col-sm-12 pt-3 mt-5 pt-5">
            <h1 class="fw-bold mb-5 text-center text-color-primary">Registrasi</h1>
            @if(Session::has('status'))
            <div class="alert alert-success" role="alert">
                {{Session::get('message')}}
            </div>
            @endif
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="username">Nama Lengkap:</label>
                    <input placeholder="Nama Lengkap" type="text" name="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="email">Email:</label>
                    <input placeholder="Email" type="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password">Password:</label>
                    <input placeholder="Password" type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn bg-color-primary text-white w-100 mt-3">Register</button>
            </form>
        </div>
    </div>
    <br><br>

</div>
@endsection