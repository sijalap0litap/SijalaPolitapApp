<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>SIJALALAND</title>
    <link rel="shortcut icon" href="https://politap.ac.id/wp-content/uploads/2018/08/Logo_Politap_kecil.png">

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ url('public/landing') }}/css/bootstrap.min.css" type="text/css" id="bootstrap-style" />

    <!-- Tobi  -->
    <link rel="stylesheet" href="{{ url('public/landing') }}/css/tobii.min.css">

    <!-- animation -->
    <link rel="stylesheet" href="{{ url('public/landing') }}/css/aos.css" />

    <!-- Material Icon Css -->
    <link rel="stylesheet" href="{{ url('public/landing') }}/css/materialdesignicons.min.css" type="text/css" />

    <!-- Unicon Css -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

    <!-- boxi icon -->
    <link rel="stylesheet" href="{{ url('public/landing') }}/css/boxicons.min.css">

    <!-- Swiper Css -->
    <link rel="stylesheet" href="{{ url('public/landing') }}/css/tiny-slider.css" type="text/css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ url('public/landing') }}/css/style.min.css" type="text/css" />

    <!-- colors -->
    <link href="{{ url('public/landing') }}/css/colors/default.css" rel="stylesheet" type="text/css" id="color-opt" />

    <style>
        .column {
            float: left;
            width: 50%;
            box-sizing: border-box;
            padding: 100px;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }
    </style>

</head>

<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="71">

    <!-- light-dark mode button -->
    <a href="javascript: void(0);" id="mode" class="mode-btn text-white rounded-end">
        <i class="uil uil-brightness mode-dark mx-auto"></i>
        <i class="uil uil-moon bx-spin mode-light"></i>
    </a>

    <!-- topbar -->
    <section class="tagline d-none d-md-block">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="d-flex">
                        <div class="email ms-3">
                            <a href="mailto:sijalapolitap@gmail.com" class="text-dark">
                                <i class="mdi mdi-email-open-outline"></i> sijalapolitap@gmail.com
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </section>
    <!-- end topbar -->

    <!-- START  NAVBAR -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-light" id="navbar">
        <div class="container-fluid">

            <!-- LOGO -->
            <a class="navbar-brand logo text-uppercase" href="index-1.html">
                <img src="{{url('public/landing')}}/images/pblputih.png" class="logo-light" alt="" height="30">
                <img src="{{url('public/landing')}}/images/pblhitam.png" class="logo-dark" alt="" height="30">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="mdi mdi-menu"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto" id="navbar-navlist">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Fitur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#team">Team</a>
                    </li>
                </ul>
                <div class="ms-auto">
                    <a href="javascript: void(0);">
                        <a href="{{ url('login') }}" class="btn bg-gradiant {{request()->is('login') ? 'active' : ''}}">Login</a>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->

    <div class="overflow-hidden-x">

        <!-- home section -->
        <section class="home-1 bg-home d-flex align-items-center bg-light" id="home" style="height:900px;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 text-center mt-0 mt-md-5 pt-0 pt-md-5">
                        <div class="home-heading">
                            <h2 class="home-title">SISTEM INFORMASI PEMINJAMAN LABORATORIUM</h2>
                            <p>"Sistem informasi peminjaman laboratorium adalah sistem informasi yang digunakan untuk mengelola peminjaman laboratorium secara paperless mulai dari pengajuan peminjaman, persetujuan peminjaman, penolakan peminjaman, keluhan alat rusak dan riwayat peminjaman laboratorium di lingkungan Politeknik Negeri Ketapang."</p>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end home section -->

        <!-- Features section -->
        <section class="section features" id="features">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="sec-hd">
                            <span class="heading"></span>
                            <h2 class="sec-title">FITUR APA SAJA YANG ADA DI SIJALA?</h2>
                            <span class="heading"></span>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-4 col-md-10">
                        <div data-aos="fade-right" data-aos-duration="1800">
                            <div class="features-box text-end">
                                <div class="features-icon float-end ms-2">
                                    <i class="uil uil-users-alt"></i>
                                </div>
                                <div class="pe-3 me-5">
                                    <h5 class="f-15 text-uppercase">Peminjaman Baru</h5>
                                    <p class="text-muted mt-3">Mahasiswa/Dosen dapat melakukan pengajuan baru untuk peminjaman laboratorium.</p>
                                </div>
                            </div>

                            <div class="features-box mt-5 text-end">
                                <div class="features-icon float-end ms-2">
                                    <i class="uil uil-envelope-minus"></i>
                                </div>
                                <div class="pe-3 me-5">
                                    <h5 class="f-15 text-uppercase">Peminjaman Diterima</h5>
                                    <p class="text-muted mt-3">Admin laboratorium dapat menerima pengajuan peminjaman laboratorium dari mahasiswa/dosen.</p>
                                </div>
                            </div>

                            <div class="features-box mt-5 text-end">
                                <div class="features-icon float-end ms-2">
                                    <i class="uil uil-mobile-android-alt"></i>
                                </div>
                                <div class="pe-3 me-5">
                                    <h5 class="f-15 text-uppercase">Peminjaman Ditolak</h5>
                                    <p class="text-muted mt-3">Admin laboratorium dapat menolak pengajuan peminjaman laboratorium dari mahasiswa/dosen.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="text-center">
                            <div data-aos="zoom-in" data-aos-duration="1800">
                                <img src="{{url('public/landing')}}/images/kesat1.png" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-10">
                        <div data-aos="fade-left" data-aos-duration="1800">
                            <div class="features-box">
                                <div class="features-icon float-start me-2">
                                    <i class="uil uil-calender"></i>
                                </div>
                                <div class="ps-3 ms-5">
                                    <h5 class="f-15 text-uppercase">Jadwal</h5>
                                    <p class="text-muted mt-3">Peminjam dapat melihat jadwal peminjaman laboratorium dengan rinci di bagian peminjaman.
                            </div>

                            <div class="features-box mt-5">
                                <div class="features-icon float-start me-2">
                                    <i class="uil uil-bolt"></i>
                                </div>
                                <div class="ps-3 ms-5">
                                    <h5 class="f-15 text-uppercase">Keluhan Alat Rusak</h5>
                                    <p class="text-muted mt-3">Mahasiswa/Dosen dapat mengajukan keluhan tentang alat rusak yang ada di laboratorium.</p>
                                </div>
                            </div>

                            <div class="features-box mt-5">
                                <div class="features-icon float-start me-2">
                                    <i class="uil uil-feedback"></i>
                                </div>
                                <div class="ps-3 ms-5">
                                    <h5 class="f-15 text-uppercase">Riwayat Peminjaman</h5>
                                    <p class="text-muted mt-3">Kepala laboratorium dapat melihat riwayat pengajuan peminjaman laboratorium.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

        <!-- start work -->
        <section class="section work bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sec-hd">
                            <span class="heading"></span>
                            <h2 class="sec-title">Bagaimana cara SIJALA berkerja</h2>
                            <span class="heading"></span>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="work-pra">
                            <p class="text-muted">Mahasiswa atau Dosen melakukan registrasi akun terlebih dahulu agar bisa login ke website Sijala. Ketika mahasiswa atau dosen sudah memiliki akun, mereka dapat melakukan peminjaman secara online di website tersebut. Peminjaman dilakukan dengan mengisi form pendaftaran di halaman peminjaman. Peminjaman yang diajukan akan dikonfirmasi oleh admin atau teknisi lab, dan teknisi dapat menerima atau menolak pengajuan peminjaman tersebut. Setelah diterima, mahasiswa atau dosen sudah dapat menggunakan laboratorium tersebut.

                            </p>
                            <h4 class="my-4">KEUNGGULAN DARI SIJALA</h4>
                            <ul class="inline-item">
                                <li class="list-inline-item">
                                    <i class="uil uil-bell"></i>
                                    <p class="text-muted">Mahasiswa dan Dosen dapat melakukan peminjaman laboratorium tanpa harus menghadap teknisi laboratorium secara langsung.</p>
                                </li>
                                <li class="list-inline-item">
                                    <i class="uil uil-star"></i>
                                    <p class="text-muted"> Teknisi laboratorium dapat melihat laporan alat rusak dari mahasiswa/dosen.</p>
                                </li>
                                <li class="list-inline-item">
                                    <i class="uil uil-envelope-minus"></i>
                                    <p class="text-muted">Kepala laboratorium dapat melihat dengan rinci riwayat peminjaman laboratorium.</p>
                                </li>
                                <li class="list-inline-item">
                                    <i class="uil uil-heart-alt"></i>
                                    <p class="text-muted">Mahasiswa/Dosen dapat melakukan peninjauan jadwal dan kapasitas lab di website.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-content" data-aos="fade-right" data-aos-duration="1800">
                            <div class="testimonial-contaent">
                                <div class="testimonial-right">
                                    <div class="testimonial-circle">
                                        <div class="media">
                                            <img src="{{url('public/landing')}}/images/kedua.png" class="img-fluid" alt="">
                                        </div>
                                        <span class="ring1 animate-v2"></span>
                                        <span class="ring2 animate-v3"></span>
                                        <span class="ring3 animate-v2"></span>
                                        <span class="ring4 animate-v3"></span>
                                        <span class="ring5 animate-v2"></span>
                                        <span class="ring6 animate-v3"></span>
                                        <span class="ring7 animate-v2"></span>
                                        <span class="ring8 animate-v3"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end work -
         slider section -->
        <section class="section app-slider bg-light" id="app">
            <!-- start container -->
            <div class="row">
           <div class="col-lg-12">
               <div class="sec-hd">
                   <span class="heading"></span>
                   <h2 class="sec-title">Video tutorial penggunaan web SIJALA</h2>
                   <span class="heading"></span>
               </div>
           </div>
       </div>
       <div class="container position-relative">
           <div class="row">
                    <div class="col-xl-6 col-lg-10">
                        <div class="py-5">

                            <p class="text-muted mt-3 f-18">
                                <h3>Video tutorial penggunaan website Sijala</h3>
                                    1.Cara melakukan registrasi dan login <br>
                                   2.Cara melakukan peminjaman lab<br>
                                   3.Cara mengajukan keluhan alat rusak <br>
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-10" style="margin-top: 30px; margin-bottom: 60px;">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/SHG7c2GgNjw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="sec-hd">
                            <span class="heading"></span>
                            <h2 class="sec-title">Beberapa tampilan dari SIJALA</h2>
                            <span class="heading"></span>
                        </div>
                    </div>
                    <!--end col-->


                    <!-- vbnm,. -->
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="swiper swiper-container swiper-container1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide border-radius">
                                    <div class="app-screenshot-item text-center d-flex justify-content-center">
                                        <div class="app-screenshot-overlayer">
                                            <a class="mfp-image img-fluid" href="images/testi/ss/img1.jpeg" title=""></a>
                                        </div>
                                        <div class="screenshot-img mb-4">
                                            <a href="{{url('public/landing')}}/images/testi/ss/img1.jpeg" class="lightbox img-fluid">
                                                <img src="{{url('public/landing')}}/images/testi/ss/img1.jpeg" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide border-radius">
                                    <div class="app-screenshot-item text-center d-flex justify-content-center">
                                        <div class="app-screenshot-overlayer">
                                            <a class="mfp-image img-fluid" href="images/testi/ss/img2.jpeg" title=""></a>
                                        </div>
                                        <div class="screenshot-img mb-4">
                                            <a href="images/testi/ss/img2.jpeg" class="lightbox img-fluid">
                                                <img src="{{url('public/landing')}}/images/testi/ss/img2.jpeg" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide border-radius">
                                    <div class="app-screenshot-item text-center d-flex justify-content-center">
                                        <div class="app-screenshot-overlayer">
                                            <a class="mfp-image img-fluid" href="images/testi/ss/img3.jpeg" title=""></a>
                                        </div>
                                        <div class="screenshot-img mb-4">
                                            <a href="images/testi/ss/img3.jpeg" class="lightbox img-fluid">
                                                <img src="{{url('public/landing')}}/images/testi/ss/img3.jpeg" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide border-radius">
                                    <div class="app-screenshot-item text-center d-flex justify-content-center">
                                        <div class="app-screenshot-overlayer">
                                            <a class="mfp-image img-fluid" href="images/testi/ss/img4.jpeg" title=""></a>
                                        </div>
                                        <div class="screenshot-img mb-4">
                                            <a href="images/testi/ss/img4.jpeg" class="lightbox img-fluid">
                                                <img src="{{url('public/landing')}}/images/testi/ss/img4.jpeg" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide border-radius">
                                    <div class="app-screenshot-item text-center d-flex justify-content-center">
                                        <div class="app-screenshot-overlayer">
                                            <a class="mfp-image img-fluid" href="images/testi/ss/img5.jpeg" title=""></a>
                                        </div>
                                        <div class="screenshot-img mb-4">
                                            <a href="images/testi/ss/img5.jpeg" class="lightbox img-fluid">
                                                <img src="{{url('public/landing')}}/images/testi/ss/img5.jpeg" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide border-radius">
                                    <div class="app-screenshot-item text-center d-flex justify-content-center">
                                        <div class="app-screenshot-overlayer">
                                            <a class="mfp-image img-fluid" href="images/testi/ss/img6.jpeg" title=""></a>
                                        </div>
                                        <div class="screenshot-img mb-4">
                                            <a href="images/testi/ss/img6.jpeg" class="lightbox img-fluid">
                                                <img src="{{url('public/landing')}}/images/testi/ss/img6.jpeg" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end container -->
            </div>
        </section>
        <!-- end section -->

        <!-- cta section -->
        <section class="section cta bg-light" id="cta">
            <!-- start container -->
            <div class="container position-relative">
                <div class="row">
                    <div class="col-xl-6 col-lg-10">
                        <div class="py-5">
                            <h1 class="display-4">SPESIFIKASI UNTUK MENJALANKAN SISTEM SIJALA</h1>
                            <p class="text-muted mt-3 f-18">
                                <h3>Spesifikasi Minimum di Personal Computer</h3>
                                    OS: Windows XP/Windows Vista/Windows 7 <br>
                                    rocessor: Dual Core 1.5 GHz <br>
                                    Memory: 1GB <br>
                                    Graphics: Radeon X1000/GeForce 6 <br>
                                    DirectX: DirectX 9.0 <br>
                                    Storage: 3GB <br>
                                <h3>Spesifikasi Minimum di handphone</h3>
                                Android OS 5+ <br>
                                Memory: 560 mb <br>
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-10">
                        <img src="{{url('public/landing')}}/images/ke3.png " style="height:450px; margin-top: 90px;">
                    </div>
                </div>
            </div>
            <!-- end container -->
        </section>

        <!-- team section -->
        <section class="section team" id="team">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="sec-hd">
                            <span class="heading"></span>
                            <h2 class="sec-title">Our Team!</h2>
                            <span class="heading"></span>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="team-box">
                            <div class="row justify-content-end">

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="tab-container effectTab-header" id="style_10">
                            <div class="wrapper">
                                <div class="row">
                                    <div class="col-12 tab">
                                        <div class="row">
                                            <div class="col-lg-3 col-sm-6 box-tab">
                                                <div class="effect effect-ten">
                                                    <img src="{{url('public/landing')}}/images/team/dhanu.jpg" class="img-fluid" alt="">
                                                    <div class="tab-text">

                                                        <h2>Dhanu Brukman Nur Hakim</h2>
                                                        <p>Ketua</p>
                                                        <div class="icons-block"> <a href="https://www.instagram.com/_nurhakim27/"
                                                                class="social-icon-1"><i
                                                                    class="mdi mdi-instagram"></i></a> <a
                                                                href="https://api.whatsapp.com/send?phone=6285750053814" class="social-icon-2"><i
                                                                    class="mdi mdi-whatsapp"></i></a>
                                                            <a href="mailto:dhanubrukmannurhakim27@gmail.com" class="social-icon-3"><i
                                                                    class="mdi mdi-email"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-6 box-tab hide">
                                                <div class="effect effect-ten">
                                                    <img src="{{url('public/landing')}}/images/team/cahya.jpg" class="img-fluid" alt="">
                                                    <div class="tab-text">
                                                        <h2>Cahya Novitasari</h2>
                                                        <p>Wakil Ketua</p>
                                                        <div class="icons-block"> <a href="https://www.instagram.com/cahyanovta/"
                                                                class="social-icon-1"><i
                                                                    class="mdi mdi-instagram"></i></a> <a
                                                                href="https://api.whatsapp.com/send?phone=6289694451105" class="social-icon-2"><i
                                                                    class="mdi mdi-whatsapp"></i></a>
                                                            <a href="mailto:albertenst29@gmail.com" class="social-icon-3"><i
                                                                    class="mdi mdi-email"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-lg-3 col-sm-6 box-tab">
                                                <div class="effect effect-ten">
                                                    <img src="{{url('public/landing')}}/images/team/mega.jpg" class="img-fluid" alt="">
                                                    <div class="tab-text">

                                                        <h2>Mega Pratiwi</h2>
                                                        <p>Anggota</p>
                                                        <div class="icons-block"> <a href="https://www.instagram.com/mgpratw_/"
                                                                class="social-icon-1"><i
                                                                    class="mdi mdi-instagram"></i></a> <a
                                                                href="https://api.whatsapp.com/send?phone=628970700735" class="social-icon-2"><i
                                                                    class="mdi mdi-whatsapp"></i></a>
                                                            <a href="mailto:megapratw17@gmail.com" class="social-icon-3"><i
                                                                    class="mdi mdi-email"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-6 box-tab hide">
                                                <div class="effect effect-ten">
                                                    <img src="{{url('public/landing')}}/images/team/vika.jpg" class="img-fluid" alt="">
                                                    <div class="tab-text">
                                                        <h2>Vika Khairunisa</h2>
                                                        <p>Anggota</p>
                                                        <div class="icons-block"> <a href="https://www.instagram.com/vkhairnsa0811/"
                                                                class="social-icon-1"><i
                                                                    class="mdi mdi-instagram"></i></a> <a
                                                                href="https://api.whatsapp.com/send?phone=6289522071515" class="social-icon-2"><i
                                                                    class="mdi mdi-whatsapp"></i></a>
                                                            <a href="mailto:vika.khairunisa08@gmail.com" class="social-icon-3"><i
                                                                    class="mdi mdi-email"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="team-box">
                            <div class="row justify-content-end">

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="tab-container effectTab-header" id="style_10">
                            <div class="wrapper">
                                <div class="row">
                                    <div class="col-12 tab">
                                        <div class="row">
                                            <div class="col-lg-3 col-sm-6 box-tab">
                                                <div class="effect effect-ten">
                                                    <img src="{{url('public/landing')}}/images/team/jemi.jpg" class="img-fluid" alt="">
                                                    <div class="tab-text">

                                                        <h2>Jemi Firmansyah</h2>
                                                        <p>Anggota</p>
                                                        <div class="icons-block"> <a href="https://www.instagram.com/jimeinanotheruniverse/"
                                                                class="social-icon-1"><i
                                                                    class="mdi mdi-instagram"></i></a> <a
                                                                href="https://api.whatsapp.com/send?phone=6285245463261" class="social-icon-2"><i
                                                                    class="mdi mdi-whatsapp"></i></a>
                                                            <a href="mailto:jemi81552@gmail.com" class="social-icon-3"><i
                                                                    class="mdi mdi-email"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-6 box-tab hide">
                                                <div class="effect effect-ten">
                                                    <img src="{{url('public/landing')}}/images/team/JUPI.jpg" class="img-fluid" alt="">
                                                    <div class="tab-text">
                                                        <h2>Muhammad Jupi Sumarta</h2>
                                                        <p>Anggota</p>
                                                        <div class="icons-block"> <a href="https://www.instagram.com/jup.s_/"
                                                                class="social-icon-1"><i
                                                                    class="mdi mdi-instagram"></i></a> <a
                                                                href="https://api.whatsapp.com/send?phone=6281382695866" class="social-icon-2"><i
                                                                    class="mdi mdi-whatsapp"></i></a>
                                                            <a href="mailto:albertenst29@gmail.com" class="social-icon-3"><i
                                                                    class="mdi mdi-email"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-lg-3 col-sm-6 box-tab">
                                                <div class="effect effect-ten">
                                                    <img src="{{url('public/landing')}}/images/team/ade.jpg" class="img-fluid" alt="">
                                                    <div class="tab-text">

                                                        <h2>Ade Maulana Alfaqi</h2>
                                                        <p>Anggota</p>
                                                        <div class="icons-block"> <a href="https://www.instagram.com/ademaulanaalfaqi/"
                                                                class="social-icon-1"><i
                                                                    class="mdi mdi-instagram"></i></a> <a
                                                                href="https://api.whatsapp.com/send?phone=6283125363592" class="social-icon-2"><i
                                                                    class="mdi mdi-whatsapp"></i></a>
                                                            <a href="mailto:admlna26@gmail.com" class="social-icon-3"><i
                                                                    class="mdi mdi-email"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-6 box-tab hide">
                                                <div class="effect effect-ten">
                                                    <img src="{{url('public/landing')}}/images/team/SAKTI.jpg" class="img-fluid" alt="">
                                                    <div class="tab-text">
                                                        <h2>Sakti Darma Putra</h2>
                                                        <p>Anggota</p>
                                                        <div class="icons-block"> <a href="https://www.instagram.com/sactyzz/"
                                                                class="social-icon-1"><i
                                                                    class="mdi mdi-instagram"></i></a> <a
                                                                href="https://api.whatsapp.com/send?phone=62895704864519" class="social-icon-2"><i
                                                                    class="mdi mdi-whatsapp"></i></a>
                                                            <a href="mailto:albertenst29@gmail.com" class="social-icon-3"><i
                                                                    class="mdi mdi-email"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!-- end section -->

    </div>

    <section class="bottom-footer py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <p class="mb-0 text-center text-muted">©
                       Copyright By SIJALA TEAM
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- end footer -->

    <!-- Style switcher -->
    <div class="style-switcher" id="style-switcher" onclick="toggleSwitcher()" style="left: -189px;">
        <div>
            <h6>Select your color</h6>
            <ul class="pattern list-unstyled mb-0">
                <li>
                    <a class="color1" href="javascript: void(0);" onclick="setColor('default')"></a>
                </li>
                <li>
                    <a class="color2" href="javascript: void(0);" onclick="setColor('blue')"></a>
                </li>
                <li>
                    <a class="color3" href="javascript: void(0);" onclick="setColor('warning')"></a>
                </li>
                <li>
                    <a class="color4" href="javascript: void(0);" onclick="setColor('orange')"></a>
                </li>
                <li>
                    <a class="color5" href="javascript: void(0);" onclick="setColor('purple')"></a>
                </li>
                <li>
                    <a class="color6" href="javascript: void(0);" onclick="setColor('info')"></a>
                </li>
            </ul>
        </div>
        <div class="bottom">
            <a href="javascript: void(0);" class="settings rounded-end"><i class="uil uil-setting text-white"
                    style="display: inline; line-height: 46px;"></i></a>
        </div>
    </div>
    <!-- end switcher-->

    <!--Bootstrap Js-->
    <script src="{{ url('public/landing') }}/js/bootstrap.bundle.min.js"></script>

    <!-- animation -->
    <script src="{{ url('public/landing') }}/js/aos.js"></script>

    <!-- Slider Js -->
    <script src="{{ url('public/landing') }}/js/tiny-slider.js"></script>

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <script src="{{ url('public/landing') }}/js/tobii.min.js"></script>

    <script src="{{ url('public/landing') }}/js/tobii.js"></script>

    <!-- App Js -->
    <script src="{{ url('public/landing') }}/js/app.js"></script>

    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>

</body>

</html>
