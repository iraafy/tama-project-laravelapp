@extends('layouts.components')

@section('title', 'Topics Recommendation')

@section('content')

<header style="height: 100vh; background-size: cover; min-height:400px;">
    <img class="headimg" src="assets/img/upi.jpg" alt="" width="100%" height = "100%" style="opacity: 0.5;">
</header>
<div class="container-fluid imagetxt">
    <div class="container-fluid p-5">
        <div class="row"> 
            <div class="col-sm-6 py-5">
                <img class="imglogo" src="assets/img/logo.png" alt="" width="20%"></br></br>
                <p class="text-dark bannertxt">
                    Telusuri Topik Skripsi Populer di FPMIPA Untuk Memudahkanmu Menemukan Judul Skripsi. </br>
                </p>
                <p class="text-dark general" style="font-style: italic;">
                    Temukan berbagai rekomendasi topik skripsi yang sangat populer di FPMIPA, kaatakan selamat tinggal dengan rasa bingung untuk menentukan judul skripsi. </br></br>
                </p>
                <div class="col-sm-8 d-flex">
                    <a href="#topik"><button link="/topics" class="button general"><span> Get Started </span></button></a>
                </div>
            </div>
            <div class="col-sm-6 my-auto">
                <img src="assets/img/banner.png" class="mx-auto d-block" alt="" width="80%">
            </div>
        </div>
    </div>
</div>

<div class="container p-5">
    <div class="row"> 
        <div class="col-sm-6">
            <p class="text-dark headline" data-aos="fade-up">
                Apa itu Skripsi?
            </p>
            <p class="text-dark general" data-aos="fade-up">
                Skripsi adalah istilah yang digunakan di Indonesia untuk mengilustrasikan suatu karya tulis ilmiah berupa paparan tulisan hasil penelitian sarjana S1 yang membahas suatu permasalahan/fenomena dalam bidang ilmu tertentu dengan menggunakan kaidah-kaidah yang berlaku. </br></br>
            </p>
        </div>
        <div class="col-sm-6 my-auto" data-aos="fade-up">
            <img src="assets/img/apaitu.png" class="mx-auto d-block" alt="" width="100%">
        </div>
    </div>
</div>

<div class="container-fluid bg-dark">
    <div class="container p-5" data-aos="fade-up">
        <div class="row">
            <div class="col-12">
                <p class="text-light headline" data-aos="fade-up"> Apa Saja Proses Penyusunan Skripsi?</p>
            </div>
        </div>
        <div class="row">
            <p class="text-light general" data-aos="fade-up">
                Dalam penulisan skripsi, mahasiswa dibimbing oleh satu atau dua orang pembimbing yang berstatus dosen pada perguruan tinggi tempat mahasiswa kuliah.
            </p>
            <p class="text-light general" data-aos="fade-up">
                Umumnya, proses penyusunan skripsi adalah sebagai berikut
            </p>
        </div>
        <div class="row d-flex justify-content-center" data-aos="fade-up">
            <div class="col ">
                <div class="card me-3 border-0 bg-dark" style="width: 100%;" data-aos="fade-up">
                    <img src="assets/img/submission.png" class="center-block d-block mx-auto" alt="..." width="50%" data-aos="fade-up">
                    <div class="card-body">
                        <p class="text-light text-center general" data-aos="fade-up">Pengajuan Judul</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card me-3 border-0 bg-dark" style="width: 100%;" data-aos="fade-up">
                <img src="assets/img/research.png" class="center-block d-block mx-auto" alt="..." width="50%" data-aos="fade-up">
                    <div class="card-body">
                        <p class="text-light text-center general" data-aos="fade-up">Penelitian</p>
                    </div>
                </div>
            </div>
            <div class="col" data-aos="fade-up">
                <div class="card me-3 border-0 bg-dark" style="width: 100%;" data-aos="fade-up">
                <img src="assets/img/seminar.png" class="center-block d-block mx-auto" alt="..." width="50%" data-aos="fade-up">
                    <div class="card-body">
                        <p class="text-light text-center general" data-aos="fade-up">Seminar</p>
                    </div>
                </div>
            </div>
            <div class="col" data-aos="fade-up">
                <div class="card me-3 border-0 bg-dark" style="width: 100%;" data-aos="fade-up">
                <img src="assets/img/meeting.png" class="center-block d-block mx-auto" alt="..." width="50%" data-aos="fade-up">
                    <div class="card-body">
                        <p class="text-light text-center general" data-aos="fade-up">Sidang</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="social">
    <a href="#"><i class="fab fa-facebook-f"></i></a>
    <a href="#"><i class="fab fa-twitter"></i></a>
    <a href="#"><i class="fab fa-instagram"></i></a>
    <a href="#"><i class="fab fa-youtube"></i></a>
</div>

<div class="container P-5">
    <p class="text-dark headline p-5" data-aos="fade-up">
        Apa Saja KBK yang Tersedia Di Ilmu Komputer UPI?
    </p>

    <p class="text-dark general px-5" data-aos="fade-up">
        Kurikulum Berbasis Kompetensi (KBK) atau Kurikulum 2004, adalah kurikulum dalam dunia pendidikan di Indonesia yang mulai diterapkan sejak tahun 2004 walau sudah ada sekolah yang mulai menggunakan kurikulum ini sejak sebelum diterapkannya.
    </p>
    <div class="row justify-content-center px-5" data-aos="fade-up">
        <div class="col-md-4 mt-4 d-flex">
            <div class="card card-img me-3" style="width: 100%; height: 100%; border-radius: 20px;" data-aos="fade-up"> 
                <img src="assets/img/bigdata.png" alt="" width="100%">
                <div class="card-body card-bg" data-aos="fade-up">
                    <h4 class="card-title text-center">Big Data dan Artificial Inteliigence</h4>
                    <p class="txtcard text-light" ><span style="font-weight: bold;">Big Data</span> adalah sekumpulan data yang memiliki volume atau ukuran yang sangat besar yang terdiri dari data yang terstruktur (structured), semi-terstruktur (semi structured), dan tidak terstruktur (unstructured)</p>
                    <p class="txtcard text-light" ><span style="font-weight: bold;">Artificial Inteliigence</span> adalah simulasi dari kecerdasan yang dimiliki oleh manusia yang dimodelkan di dalam mesin dan diprogram agar bisa berpikir seperti halnya manusia.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-4 d-flex">
            <div class="card me-3 card-img card-border" style="width: 100%; height: 100%; border-radius: 20px;" data-aos="fade-up">
                <img src="assets/img/multimedia.png" alt="" width="100%">
                <div class="card-body card-bg" data-aos="fade-up">
                    <h4 class="card-title text-center">Multimedia dan Jaringan Komputer</h4>
                    <p class="txtcard text-light" ><span style="font-weight: bold;">Multimedia</span> adalah komputer untuk menyajikan dan menggabungkan teks, suara, gambar, animasi, audio, dan video dengan alat bantu.</p>
                    <p class="txtcard text-light" ><span style="font-weight: bold;">Jaringan</span> adalah jaringan telekomunikasi yang memungkinkan antar komputer untuk saling berkomunikasi dengan bertukar data.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-4 d-flex">
            <div class="card me-3 card-img card-border" style="width: 100%; height: 100%; border-radius: 20px;" data-aos="fade-up">
                <img src="assets/img/rpl.png" alt="" width="100%">
                <div class="card-body card-bg" data-aos="fade-up">
                    <h4 class="card-title text-center">Rekayasa Perangkat Lunak dan Sistem Informasi</h4>
                    <p class="txtcard text-light" ><span style="font-weight: bold;">Rekayasa Perangkata Lunak </span> adalah satu bidang profesi yang mendalami cara-cara pengembangan perangkat lunak</p>
                    <p class="txtcard text-light" ><span style="font-weight: bold;">Sistem Informasi</span> adalah kombinasi dari teknologi informasi dan aktivitas orang yang menggunakan teknologi itu untuk mendukung operasi dan manajemen.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bg-dark mt-5" id="topik">
    <div class="container p-5">
        <p class="text-light headline" data-aos="fade-up"> Topik Populer Ilmu Komputer UPI </p>
        <div class="row">
            <div class="col-sm-8 py-5">
                <p class="text-light subject" data-aos="fade-up"> Machine Learning </p>

                <p class="text-light general" data-aos="fade-up">
                    Mahine Learning adalah disiplin ilmu yang mencakup perancangan dan pengembangan algoritme yang memungkinkan komputer untuk mengembangkan perilaku berdasarkan data empiris, seperti dari sensor data basis data. Sistem pembelajar dapat memanfaatkan contoh (data) untuk menangkap ciri yang diperlukan dari probabilitas yang mendasarinya (yang tidak diketahui). Data dapat dilihat sebagai contoh yang menggambarkan hubungan antara variabel yang diamati. </br></br>
                </p>
            </div>
            <div class="col-sm-4 py-5 my-auto" data-aos="fade-up">
                <img src="assets/img/ML.png" class="mx-auto d-block" alt="" width="100%">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 py-5 my-auto" data-aos="fade-up">
                <img src="assets/img/software.png" class="mx-auto d-block" alt="" width="100%">
            </div>
            <div class="col-sm-8 py-5">
                <p class="text-light subject" data-aos="fade-up"> Software Development </p>

                <p class="text-light general" data-aos="fade-up">
                software development merupakan pengembangan sebuah perangkat lunak. Selanjutnya menurut istilah, merupakan proses pengembangan sebuah aplikasi perangkat lunak yang dijalankan secara sistematis sehingga menghasilkan sebuah produk yang baik dan berkualitas. </br></br>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 py-5">
                <p class="text-light subject" data-aos="fade-up"> Augmented Reality </p>

                <p class="text-light general" data-aos="fade-up">
                Augmented Reality atau AR  adalah teknologi yang memperoleh penggabungan secara real-time terhadap digital konten yang dibuat oleh komputer dengan dunia nyata. Augmented Reality memperbolehkan pengguna melihat objek maya 2D atau 3D yang diproyeksikan terhadap dunia nyata.</br></br>
                </p>
            </div>
            <div class="col-sm-4 py-5 my-auto" data-aos="fade-up">
                <img src="assets/img/ar.png" class="mx-auto d-block" alt="" width="100%">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4" data-aos="fade-down" data-aos-anchor-placement="top-bottom">
                <a href="/topics"><button link="/topics" type="button" class="button general"><span> Selengkapnya </span></button> </a>
            </div>
        </div>
    </div>
</div>

<a href="#" class="float">
    <i class="fa-solid fa-arrow-up my-float"></i>
</a>

@endsection
