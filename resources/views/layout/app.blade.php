<html lang="en">
<head>

    <meta charset="utf-8">
    <title>Reseau Renov</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="{{asset('style')}}img/favicon.png" rel="icon">
    <link href="{{asset('style')}}img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700"
          rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{asset('')}}style/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{asset('')}}style/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('')}}style/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{asset('')}}style/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="{{asset('')}}style/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{asset('')}}style/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{asset('')}}style/css/style.css" rel="stylesheet">

    <!-- =======================================================
      Theme Name: NewBiz
      Theme URL: https://bootstrapmade.com/newbiz-bootstrap-business-template/
      Author: BootstrapMade.com
      License: https://bootstrapmade.com/license/
    ======================================================= -->
</head>

<body>

<style>
    .title_facade {
        color: #ad1f79;
        font-size: 30px;
    }
    .title_facade1{
        color: #004a99;
        font-size: 20px;
    }

    @media only screen and (max-width: 600px) {
        .title_facade {
            font-size: 20px;
        }
        .title_facade1{
            font-size: 15px;
        }
        #header .logo img {
            padding: -18px;
            margin: 0px 0;
            max-height: 46px;
            max-width: 46px;
        }s
    }
</style>

<!--==========================
Header
============================-->
<header id="header" class="fixed-top">

    <div class="container">

        <div class="">

            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->

            <div class="container clearfix">
                <a href="#intro" class="logo"><img src="style/img/logo11.png" width="80px" alt="" class="img-fluid"></a>


            </div>
        </div>

        <nav class="main-nav float-right d-none d-lg-block">
            <ul>
                <li class="active"><a href="#accueil">Accueil</a></li>
                <li><a href="{{route('welcome')}}#about">Qui Sommes-Nous</a></li>
                <li><a href="{{route('welcome')}}#services">Services</a></li>
            <!--<li><a href="{{route('welcome')}}#portfolio">Partenaires</a></li>
                <li><a href="{{route('welcome')}}#team">Equipe</a></li>-->
                <li><a href="{{route('welcome')}}#contact">Contact </a></li>
            </ul>
        </nav><!-- .main-nav -->

    </div>
</header><!-- #header -->

<!--==========================
  Intro Section
============================-->


@yield('content')

<!--==========================
  Footer
============================-->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3  col-sm-12 text-center  footer-info">
                    <img src="{{asset("style/img/pict222.png")}}" style="width: 91%;">

                </div>

                <div class="col-lg-3 col-sm-12 text-center footer-links">
                    <h4>Arbre de site</h4>
                    <ul>
                        <li><a href="#accueil">Accueil</a></li>
                        <li><a href="{{route('welcome')}}#about">Qui Sommes-Nous</a></li>
                        <li><a href="{{route('welcome')}}#services">Services</a></li>
                        <li><a href="{{route('welcome')}}#portfolio">Partenaires</a></li>
                        <li><a href="{{route('welcome')}}#team">Equipe</a></li>
                        <li><a href="{{route('welcome')}}#contact">Contact </a></li>
                    </ul>
                </div>

                <div class="col-lg-3  col-sm-12 text-center footer-contact">
                    <h4>Contactez nous</h4>
                    <p>
                        <strong>Adresse:</strong> 08 Rue du Foubourg Poissonnière ,<br>
                        75010,Paris,France <br>
                        <strong>Tel:</strong> 05 49 13 09 92<br>
                        <strong>Email:</strong>contact@resau-renov.fr
                    </p>

                    <div class="social-links">
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                    </div>

                </div>

                <div class="col-lg-3  col-sm-12 text-center footer-newsletter">
                    <h4>Réseau Rénov</h4>
                    <p>Peinture intérieur extérieur | Façade Charpente | Couverture | Isolation | Ventilation Tout traitement (bois, charpente, couverture…) Électricité générale | Énergie renouvelable</p>

                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><a href="http://www.1waydev.com">1waydev</a></strong>. All Rights Reserved
        </div>
        <div class="credits">


        </div>
    </div>
</footer><!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<!-- Uncomment below i you want to use a preloader -->
<!-- <div id="preloader"></div> -->

<!-- JavaScript Libraries -->
<script src="{{asset('')}}style/lib/jquery/jquery.min.js"></script>
<script src="{{asset('')}}style/lib/jquery/jquery-migrate.min.js"></script>
<script src="{{asset('')}}style/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('')}}style/lib/easing/easing.min.js"></script>
<script src="{{asset('')}}style/lib/mobile-nav/mobile-nav.js"></script>
<script src="{{asset('')}}style/lib/wow/wow.min.js"></script>
<script src="{{asset('')}}style/lib/waypoints/waypoints.min.js"></script>
<script src="{{asset('')}}style/lib/counterup/counterup.min.js"></script>
<script src="{{asset('')}}style/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="{{asset('')}}style/lib/isotope/isotope.pkgd.min.js"></script>
<script src="{{asset('')}}style/lib/lightbox/js/lightbox.min.js"></script>
<!-- Contact Form JavaScript File -->
<script src="{{asset('')}}style/contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="{{asset('')}}style/js/main.js"></script>


</body>
</html>
