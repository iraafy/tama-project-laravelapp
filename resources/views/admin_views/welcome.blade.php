@extends('layouts.lecturer_navbar')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container">
    <div class="space">
        <div class="row">
            <div class="card shadow">
                <div class="row p-4 space">
                    <div class="col-lg-7 col-sm-12 d-flex align-items-center justify-content-center">
                        <div class="row">
                            <h1 class="welcome-text text-color-primary fw-bold lh-1">
                                Admin Dashboard
                            </h1>
                            <p class="welcome-p-text">Welcome, Admin</p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-sm-12">
                        <img src="assets/img/male.png" width="100%" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection