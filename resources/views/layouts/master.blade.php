<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@vite(["resources/scss/app.scss","resources/css/app.css","resources/js/app.js",'resources/sass/app.scss'])
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script type="text/javascript" src="{{ URL::to('js/scripts.js') }}"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Trash-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>@yield('titol')</title>
</head>
<body>
    <div class="container main-container">
        <div class="row">
            <div class="col-12">
                <header class="main-header">
                <nav class="mainNavbar navbar navbar-light bg-light">
                    <a class="navbar-brand" href="/">
                        <img src="{{url('/images/logo.png')}}" width="40" height="40" class="d-inline-block " alt="logo">
                        <span class="title">Cycl40K</span>
                        <img src="{{url('/images/white-scars.svg')}}" width="40" height="40" class="d-inline-block " alt="logo">
                        <span class="subtitle">Les curses del 41º mileni</span>
                    </a>
                </nav>
                </header>
            </div>
        </div>
        @yield('content')
        <div class="row">
            <div class="col-12">
                <!-- Footer -->
                <footer class="text-center text-lg-start bg-white text-muted">
                <!-- Section: Social media -->
                <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                    <!-- Left -->
                    <div class="me-5 d-none d-lg-block">
                    <span>Contacta amb nosaltres:</span>
                    </div>
                    <!-- Left -->

                    <!-- Right -->
                    <div>
                    <a href="" class="me-4 link-secondary">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="" class="me-4 link-secondary">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="me-4 link-secondary">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="" class="me-4 link-secondary">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="" class="me-4 link-secondary">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="" class="me-4 link-secondary">
                        <i class="fab fa-github"></i>
                    </a>
                    </div>
                    <!-- Right -->
                </section>
                <!-- Section: Social media -->

                <!-- Section: Links  -->
                <section class="">
                    <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3 text-secondary"></i>Cycl40K
                        </h6>
                        <p>
                        From the moment I understood the weakness of my flesh, it disgusted me. I craved the strength and certainty of steel. I aspired to the purity of the blessed machine.
                        </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Xarxes socials
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">twitter</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">facebook</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">instagram</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">youtube</a>
                        </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Afiliats
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">black librari</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">games workshop</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">citadel miniatures</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">black industries</a>
                        </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                            <p><i class="fas fa-home me-3 text-secondary"></i> Imperium of man</p>
                            <p>
                                <i class="fas fa-envelope me-3 text-secondary"></i>
                                emperor@ofMan.com
                            </p>
                            <p><i class="fas fa-phone me-3 text-secondary"></i> + 01 234 567 88</p>
                            <p><i class="fas fa-print me-3 text-secondary"></i> + 01 234 567 89</p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                    </div>
                </section>
                <!-- Section: Links  -->

                <!-- Copyright -->
                <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
                    © 41000 Copyright:
                    <a class="text-reset fw-bold" href="#">Cycl40K.com</a>
                </div>
                <!-- Copyright -->
                </footer>
                <!-- Footer -->
            </div>
        </div>
    </div>
</body>
</html>