@extends('layouts.landing_page_nav')

@section('title', 'Tama Hallo')

@section('content')
<!-- <div class="container">
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
                <a href="/landing_topics">
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
</div> -->
<!-- Start Home Section -->
<section id="home">
    <div class="container-fluid" style="background-image: url(assets/img/header-imgg.png); background-repeat: no-repeat;">
        <div class="card card-opacity">
            <br><br>
            <div class="row pb-5">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="row">
                        <h1>
                            <h1 class="welcome-text text-center text-color-primary fw-bold lh-1 mt-5">
                                Tama Hallo
                            </h1>
                            <br>
                        </h1>
                        <p class="welcome-p-text text-center">Membantu mahasiswa dalam permasalahan</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 centered">
                    <img src="assets/img/head.png" width="80%" class="centered" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Home Section -->

<!-- Start About Section -->
<section id="about" class="mb-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-12 mb-3">
                <img src="assets/img/male.png" width="100%" alt="">
            </div>
            <div class="col-lg-7 col-md-6 col-sm-12 centered">
                <div class="container">
                    <div class="row">
                        <h2 class="right-style-text text-color-primary">
                            <b>
                                Tentang Kami
                            </b>
                        </h2>
                        <p class="mt-5" style="text-align: justify;">
                            Kami adalah website informasi dan layanan konsultasi mahasiswa UPI yang bergerak di bidang akademik dan non akademik. Kami berusaha untuk memberikan informasi yang terpercaya dan akurat kepada mahasiswa UPI. Kami juga berusaha untuk memberikan layanan konsultasi kepada mahasiswa UPI yang membutuhkan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Section -->

<!-- Start Requirements Section -->
<section id="" class="mt-5 ">
    <div class="container">
        <div class="row centered">
            <h2 class="mt-3 mb-3 pb-5 text-center text-color-primary">
                <b>
                    Universitas Pendidikan Indonesia
                </b>
            </h2>
            <div class="row text-center">
                <i>
                    Universitas Pendidikan Indonesia adalah salah satu kampus negeri yang ada di Indonesia. Kampus ini berada di Jawa Barat tepatnya di Bandung.
                    Salah satu jurusan yang ada di kampus ini adalah Ilmu Komputer yang terdapat di Fakultas Matematika dan Ilmu Pengetahuan Alam.
                    Ilmu komputer merupakan salah satu program studi yang paling diminati oleh mahasiswa, karena program studi ini memiliki banyak jurusan yang dapat dipilih.
                    Jurusan yang dapat dipilih di jurusan ini diantaranya adalah Sistem Informasi, Multimedia, Rekayasa Perangkat Lunak, Jaringan, Artificial Intelligent dan Big Data.
                    Jurusan-jurusan ini memerlukan diskusi yang cukup baik. Oleh karena itu kami menyediakan layanan forum diskusi untuk mahasiswa jurusan Ilmu Komputer.
                    Selain itu kami juga menyediakan beberapa layanan informasi yang dapat digunakan baik oleh mahasiswa lama maupun mahasiswa baru.
                </i>
            </div>
        </div>
    </div>
</section>

<section id="feature" class="pb-5 mt-4">
    <br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h3 class="mb-3 fw-bold text-color-primary">Our Feature</h3>
            </div>
            <div class="col-6 text-right">
                <a class="btn bg-color-primary text-white mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <a class="btn bg-color-primary text-white mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>
            <div class="col-12">
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 mb-3">
                                    <a href="/landing_topic">
                                        <div class="card card-hover shadow p-5">
                                            <img style="width: 51%" class="centered" alt="100%x280" src="assets/img/skripsi.png">
                                            <div class="card-body text-center pt-4">
                                                <h4 class="card-title text-color-primary">Topik Skripsi</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6 col-sm-12 mb-3">
                                    <a href="/interns">
                                        <div class="card card-hover shadow p-5">
                                            <img style="width: 40%" class="centered" alt="100%x280" src="assets/img/ppl.png">
                                            <div class="card-body text-center pt-4">
                                                <h4 class="card-title text-color-primary">Rekomendasi PPL</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 mb-3">
                                    <a href="/forums">
                                        <div class="card card-hover shadow p-5">
                                            <img style="width: 40%" class="centered" alt="100%x280" src="assets/img/forum.png">
                                            <div class="card-body text-center pt-4">
                                                <h4 class="card-title text-color-primary">Forum Diskusi</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6 col-sm-12 mb-3">
                                    <a href="https://ridzky.itch.io/tesproject">
                                        <div class="card card-hover shadow p-5">
                                            <img style="width: 40%" class="centered" alt="100%x280" src="assets/img/denah.png">
                                            <div class="card-body text-center pt-4">
                                                <h4 class="card-title text-color-primary">Denah UPI</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Requirements Section -->

<!-- Start Footer -->
<div class="footer mt-5">
    Copyright &copy; 2023 <a href="/">Tama Project Team</a>. All Rights Reserved.
</div>
<!-- End Footer -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@endsection