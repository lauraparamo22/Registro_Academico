    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>INATEC</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('modules/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('modules/fontawesome/css/all.min.css')}}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('modules/jqvmap/dist/jqvmap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('modules/summernote/summernote-bs4.css')}}">
    <link rel="stylesheet" href="{{ asset('modules/owlcarousel2/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('modules/owlcarousel2/dist/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css')}}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/components.css')}}">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA --></head>

    <body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
            <form class="form-inline mr-auto">
            <ul class="navbar-nav mr-3">
                <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
            </ul>
            
            </form>
            <ul class="navbar-nav navbar-right">
            
            <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                <div class="d-sm-none d-lg-inline-block">Bienvenido, Limber Rodriguez</div></a>
                <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item has-icon text-danger">
                    <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
                </a>
                </div>
            </li>
            </ul>
        </nav>
        </div>
        @include('includes.panel.menu')
        <!-- Main Content -->
        <div class="main-content">
            @yield('content')
        </div>
        <footer class="main-footer">
            <div class="footer-left">
            Copyright &copy; 2023 <div class="bullet"></div> Todos los derechos reservados a Tecnológico Nacional <a href="https://nauval.in/"></a>
            </div>
            <div class="footer-right">
            
            </div>
        </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('modules/jquery.min.js')}}"></script>
    <script src="{{ asset('modules/popper.js')}}"></script>
    <script src="{{ asset('modules/tooltip.js')}}"></script>
    <script src="{{ asset('modules/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
    <script src="{{ asset('modules/moment.min.js')}}"></script>
    <script src="{{ asset('js/stisla.js')}}"></script>
    
    <!-- JS Libraies -->
    <script src="{{ asset('modules/jquery.sparkline.min.js')}}"></script>
    <script src="{{ asset('modules/chart.min.js')}}"></script>
    <script src="{{ asset('modules/owlcarousel2/dist/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('modules/summernote/summernote-bs4.js')}}"></script>
    <script src="{{ asset('modules/chocolat/dist/js/jquery.chocolat.min.js')}}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/index.js')}}"></script>
    
    <!-- Template JS File -->
    <script src="{{ asset('js/scripts.js')}}"></script>
    <script src="{{ asset('js/custom.js')}}"></script>
    </body>
    </html>