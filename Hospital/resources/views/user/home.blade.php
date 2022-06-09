<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <title>Puskesmas Lohbener</title>

    <link rel="stylesheet" href="../assets/css/maicons.css">

    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

    <link rel="stylesheet" href="../assets/css/theme.css">
</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <header>
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 text-sm">
                        <div class="site-info">
                            <a href="#"><span class="mai-call text-primary"></span>0812-8643-8884</a>
                            <span class="divider">|</span>
                            <a href="#"><span class="mai-mail text-primary"></span>email</a>
                        </div>
                    </div>
                    <div class="col-sm-4 text-right text-sm">
                        <div class="social-mini-button">
                            <a href="#"><span class="mai-logo-facebook-f"></span></a>
                            <a href="#"><span class="mai-logo-twitter"></span></a>
                            <a href="#"><span class="mai-logo-dribbble"></span></a>
                            <a href="#"><span class="mai-logo-instagram"></span></a>
                        </div>
                    </div>
                </div> <!-- .row -->
            </div> <!-- .container -->
        </div> <!-- .topbar -->

        <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="#"><span class="text-primary">Puskesmas</span>-Lohbener</a>

                <form action="#">
                    <div class="input-group input-navbar">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
                    </div>
                </form>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupport">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="doctors.html">Doctors</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.html">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                        @if(Route::has('login'))

                        @auth

                        <li class="nav-item">
                            <a class="nav-link" style="background-color:greenyellow; color: white;" href="{{url('myappointment')}}">My Appointment</a>
                        </li>

                        <x-app-layout>

                        </x-app-layout>

                        @else

                        <li class="nav-item">
                            <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a>
                        </li>

                        <li class="nav-item">
                            <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
                        </li>

                        @endauth

                        @endif



                    </ul>
                </div> <!-- .navbar-collapse -->
            </div> <!-- .container -->
        </nav>
    </header>


    @if(session()->has('message'))

            <button type="button"class="close" data-dismiss="alert">
                x
            </button>

        <div class="alert alert-success">

        {{session()->get('message')}}

        </div>

        @endif

    <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/puskesmas.jpeg);">
        <div class="hero-section">
            <div class="container text-center wow zoomIn">
                <span class="subhead">Pusat Kesehatan Masyarakat Desa Lohbener</span>
                <h1 class="display-4">Puskesmas Lohbener</h1>
                <a href="#" class="btn btn-primary">Layanan Konsultan</a>
            </div>
        </div>
    </div>


    <div class="bg-light">
        <div class="page-section py-3 mt-md-n5 custom-index">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card-service wow fadeInUp">
                            <div class="circle-shape bg-secondary text-white">
                                <span class="mai-chatbubbles-outline"></span>
                            </div>
                            <p><span>Chat</span> with a doctors</p>
                        </div>
                    </div>
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card-service wow fadeInUp">
                            <div class="circle-shape bg-primary text-white">
                                <span class="mai-shield-checkmark"></span>
                            </div>
                            <p><span>One</span>-Health Protection</p>
                        </div>
                    </div>
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card-service wow fadeInUp">
                            <div class="circle-shape bg-accent text-white">
                                <span class="mai-basket"></span>
                            </div>
                            <p><span>One</span>-Health Pharmacy</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .page-section -->

        <div class="page-section pb-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 py-3 wow fadeInUp">
                        <h1>Selamat Datang Dipusat Kesehatan Desa Lohbener<br></h1>
                        <p class="text-grey mb-4">Website ini dibuat untuk mengenalkan Puskesmas Kecamatan Lohbener kepada masyarakat luas. Berisi berbagai macam informasi terkait baik pelayanan maupun kegiatan yang ada di Puskesmas Kecamatan Lohbener</p>

                        <p class="text-grey mb-4">Pengunjung website ini juga dapat menggunakan Tanya Dokter untuk mengetahui informasi terkait dengan penyakit, tindakan dan pengobatan tanpa perlu bertemu dokter secara langsung. Kami akan usahakan membalas pertanyaan anda secepat mungkin.</p>

                        <p class="text-grey mb-4">Kami harapkan anda bersedia menghubungi kami baik melalui telepon, email, facebook, maupun formulir kontak pada halaman Hubungi Kami untuk memberikan masukan-masukan demi pengembangan pada pelayanan kami. Terima kasih SALAM SEHAT, ANDA SEHAT KAMI PUAS</p>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
                        <div class="img-place custom-img-1">
                            <img src="../assets/img/bg-doctor.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .bg-light -->
    </div> <!-- .bg-light -->

    @include('user.doctor')

    @include('user.latest')

    @include ('user.appointment')

    <div class="page-section banner-home bg-image" style="background-image: url(../assets/img/banner-pattern.svg);">
        <div class="container py-5 py-lg-0">
            <div class="row align-items-center">
                <div class="col-lg-4 wow zoomIn">
                    <div class="img-banner d-none d-lg-block">
                        <img src="../assets/img/mobile_app.png" alt="">
                    </div>
                </div>
                <div class="col-lg-8 wow fadeInRight">
                    <h1 class="font-weight-normal mb-3">Get easy access of all features using One Health Application</h1>
                    <a href="#"><img src="../assets/img/google_play.svg" alt=""></a>
                    <a href="#" class="ml-2"><img src="../assets/img/app_store.svg" alt=""></a>
                </div>
            </div>
        </div>
    </div> <!-- .banner-home -->

    <footer class="page-footer">
        <div class="container">
            <div class="row px-md-3">
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5></h5>
                    <ul class="footer-menu">
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5></h5>
                    <ul class="footer-menu">
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>Partner Kami</h5>
                    <ul class="footer-menu">
                        <li><a href="https://epuskesmas.id/" target="_blank">ePuskesmas</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>Hubungi Kami</h5>
                    
                    <a href="https://www.google.com/maps/place/UPTD+PUSKESMAS+LOHBENER/@-6.3869859,108.2876867,17z/data=!3m1!4b1!4m5!3m4!1s0x2e6eb8f41450e131:0xa1c5a80920091e42!8m2!3d-6.3869859!4d108.2898754" class="footer-link" target="_blank">Jl. By Pass, Lohbener, Kec. Lohbener, Kabupaten Indramayu, Jawa Barat 45252</a>
                    <a href="#" class="footer-link">0812-8643-8884</a>
                    <a href="#" class="footer-link">healthcare@temporary.net</a>

                    <h5 class="mt-3">Social Media</h5>
                    <div class="footer-sosmed mt-3">
                        <a href="https://www.facebook.com/uptdpuskesmas.lohbener" target="_blank"><span class="mai-logo-facebook-f"></span></a>
                        <a href="https://www.instagram.com/puskesmaslohbener/?hl=id" target="_blank"><span class="mai-logo-instagram"></span></a>
                    </div>
                </div>
            </div>

            <hr>

            <p id="copyright">Copyright &copy; 2020 <a href="https://macodeid.com/" target="_blank">MACode ID</a>. All right reserved</p>
        </div>
    </footer>

    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>

</body>

</html>