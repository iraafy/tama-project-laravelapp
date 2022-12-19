@extends('layouts.components')

@section('title', 'Tama Hallo')

@section('content')
<div class="container">
    <div class="wrapper">
        <div class="space">
            <div class="row">
                <div class="card shadow">
                    <div class="row p-4 space">
                        <div class="col-lg-7 col-sm-12 d-flex align-items-center justify-content-center">
                            <div class="row">
                                <h1 class="welcome-text text-color-primary fw-bold lh-1">
                                    Tama Hallo
                                </h1>
                                <p class="welcome-p-text">Membantu mahasiswa dalam permasalahan</p>
                            </div>
                        </div>
                        <div class="col-lg-5 col-sm-12">
                            <img src="assets/img/male.png" width="100%" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="p-5" id="about"></div>

        <div class="row" id="about">
            <h2 class="fw-bold text-color-primary text-center">
                Departemen Pendidikan Ilmu Komputer
            </h2>
            <p class="text-black-80 text-center mt-4 lh-lg">
                <i>
                    " Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam nemo corporis aspernatur cum est blanditiis, nostrum totam quae porro facilis veniam in tenetur, quaerat natus dolores exercitationem iure reprehenderit sequi. lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam nemo corporis aspernatur cum est blanditiis, nostrum totam quae porro facilis veniam in tenetur, quaerat natus dolores exercitationem iure reprehenderit sequi."
                </i>
            </p>
        </div>

        <div class="row mt-5 pt-5">
            <div class="col-lg-6 col-sm-12">
                <img src="assets/img/book.png" width="90%" alt="">
            </div>
            <div class="col-lg-6 col-sm-12 d-flex align-items-center justify-content-center">
                <h2 class="fw-bold text-color-primary centered-text">
                    Informasi Beasiswa <br><br>
                    <span class="text-black mt-4 fw-normal fs-6">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam nemo corporis aspernatur cum est blanditiis, nostrum totam quae porro facilis veniam in tenetur, quaerat natus dolores exercitationem iure reprehenderit sequi. lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam nemo corporis aspernatur cum est blanditiis, nostrum totam quae porro facilis veniam in tenetur.
                    </span>
                </h2>
            </div>
        </div>

        <div id="feature"></div>
        <br><br><br><br>
        <div class="row mt-5">
            <h2 class="fw-bold text-color-primary text-center mb-5">
                Our Feature
            </h2>
            <div class="col-lg-6 col-sm-12 pb-4">
                <a href="/topics">
                    <div class="card shadow d-flex justify-content-center align-items-center" style="min-height: 300px;">
                        <img src="assets/img/skripsi.png" width="50%" class="" alt="skripsi">
                        <p class="fs-4 text-color-primary pt-4">Topik Skripsi</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 col-sm-12 pb-4">
                <a href="/interns">
                    <div class="card shadow d-flex justify-content-center align-items-center" style="min-height: 300px;">
                        <img src="assets/img/ppl.png" width="40%" class="" alt="ppl">
                        <p class="fs-4 text-color-primary pt-4">Rekomendasi PPL</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 col-sm-12 pb-4">
                <a href="/forums">
                    <div class="card shadow d-flex justify-content-center align-items-center" style="min-height: 300px;">
                        <img src="assets/img/forum.png" width="40%" class="" alt="forum">
                        <p class="fs-4 text-color-primary pt-4">Forum Diskusi</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 col-sm-12 pb-4">
                <a href="https://ridzky.itch.io/tesproject">
                    <div class="card shadow d-flex justify-content-center align-items-center" style="min-height: 300px;">
                        <img src="assets/img/denah.png" width="40%" class="" alt="denah">
                        <p class="fs-4 text-color-primary pt-4">Denah UPI</p>
                    </div>
                </a>
            </div>
        </div>
        <br><br><br><br>

    </div>
</div>
@endsection