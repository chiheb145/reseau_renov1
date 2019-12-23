<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reseau Renov</title>

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <meta charset="utf-8">

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="{{asset('style')}}img/favicon.png" rel="icon">
    <link href="{{asset('style')}}img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

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

<!--==========================
Header
============================-->
<header id="header" class="fixed-top">

    <div class="container">

        <div class="">

            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->

            <div class="container clearfix">
                <a href="#intro" class="logo"><img src="style/img/logo11.png" width="62px" alt="" class="img-fluid"></a>

                <div class="social-links float-right">

                    <a href="https://twitter.com/" class="twitter" style="color:  rgb(166, 21, 115)"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.facebook.com/" class="facebook" style="color:  rgb(166, 21, 115)"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/" class="instagram" style="color:  rgb(166, 21, 115)"><i class="fa fa-instagram"></i></a>

                </div>
            </div>
        </div>

        <nav class="main-nav float-right d-none d-lg-block">
            <ul>
                <li class="active"><a href="{{asset('/')}}">Accueil</a></li>
                <li><a href="#about">Qui Sommes-Nous</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#team">Equipe</a></li>
                <li class="drop-down"><a href="">Drop Down</a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li class="drop-down"><a href="#">Drop Down 2</a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                        <li><a href="#">Drop Down 5</a></li>
                    </ul>
                </li>
                <li><a href="#contact">Contact </a></li>
            </ul>
        </nav><!-- .main-nav -->

    </div>
</header><!-- #header -->

<!--==========================
  Intro Section
============================-->


<style>
    .image_right {
        height: 439px;
        border: 5px solid transparent;
        /* border-bottom-left-radius: 2010px; */
        border-bottom-right-radius: 277px 17px;
        background-image: url(http://reseauss.test/style/img/pict55.png);
        margin-top: 66px;
    }
    .image_left{
        height: 425px;
        border: 5px solid transparent;
        border-bottom-left-radius: 1460px 114px;
        /* border-bottom-right-radius: 2010px 0px; */
        background-image: url(http://reseauss.test/style/img/pict222.png);
        margin-top: 80px;
    }
    #intro {
        width: 100%;
        position: relative;
        background-color: #157dbd;
        background-size: cover;
        padding: -3px 0 0px 0;
        border-left-radius: 12px;
        border-bottom-right-radius: 852px 55px;
        border-bottom-left-radius: 501px 54px;
    }



</style>

<section class="py-4" style="background-color: #bd1b72; height: 1363px;">
    @yield('content')
</section>



<!--==========================
  Footer
============================-->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6 footer-info">
                    <h3>NewBiz</h3>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h4>Contact Us</h4>
                    <p>
                        A108 Adam Street <br>
                        New York, NY 535022<br>
                        United States <br>
                        <strong>Phone:</strong> +1 5589 55488 55<br>
                        <strong>Email:</strong> info@example.com<br>
                    </p>

                    <div class="social-links">
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                    </div>

                </div>

                <div class="col-lg-3 col-md-6 footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit"  value="Subscribe">
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong>NewBiz</strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=NewBiz
            -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
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
<script
    src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="{{asset('back/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="{{asset('back/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->




</body>
</html>
