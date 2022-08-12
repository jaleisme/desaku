<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>{{ ENV('APP_NAME') }}</title>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" /> --}}
        <link href="{{ asset('template/dist/css/styles.css') }}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="/home"><img src="{{ asset('template/dist/assets/img/outdoors.png') }}" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        @if(!Auth::check())
                        <li class="nav-item"><a class="nav-link" href="{{ url('/login') }}">Login</a></li>
                        @else
                        <li class="nav-item"><a class="nav-link" href="{{ url('/Penduduk') }}">Penduduk</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/hunian') }}">Hunian</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/fasilitas') }}">Fasilitas</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Selamat datang di {{ env('APP_NAME') }}!</div>
                <div class="masthead-heading text-uppercase">Lihat Desamu Disini</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">Info lebih banyak</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Tentang Desa</h2>
                    <h3 class="section-subheading text-muted">Detail dan statistik desamu disini.</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-users fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Penduduk</h4>
                        <p class="text-muted">Total penduduk di Desaku adalah {{ $tp }} orang. Terdiri dari anak-anak, remaja, dewasa, dan lansia dari berbagai macam latar belakang budaya dan etnisitas.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-house fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Hunian</h4>
                        <p class="text-muted">Total hunian di Desaku adalah {{ $th }} hunian. Terdiri dari hunian bertipe permanen, kostel, hunian dalam bentuk kontrakan, dan sebagainya.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-building fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Fasilitas</h4>
                        <p class="text-muted">Total fasilitas di Desaku adalah {{ $tf }} fasilitas. Terdiri dari fasilitas kesehatan seperti posyandu dan puskesmas, balai warga, dan sebagainya.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="align-items-center">
                    <div class="">Copyright  M Ilham Akbar M (10120727) &copy; 2022</div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
