<!DOCTYPE html>
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
                <li class="active"><a href="#accueil">Accueil</a></li>
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
    .p_header{
        color: white;
    }
    .header_img_people{
        border-bottom-left-radius: 750px 100px;
        border-bottom-right-radius: 750px 100px;
        border-top-left-radius: 750px 100px;
        border-top-right-radius: 750px 100px;
        width: 100%;
    }
    .reseau_renov_rose{
        background-color: #c11b6e;
    }
    .reseau_renov_blanc{
        background-color: #ffffff;
    }
    .span1{
        color:#157dbd;
        font-weight: bold;
    }
    .span2{
        color:#c11b6e;
        font-size: 30px;
        font-weight: bold
    }
    .span3{
        font-weight: bold;
        color: #157dbd;
        font-size: 30px
    }
    .reseau_renov_bleu{
        background-color:#157dbd ;
    }
    .reseau_renov_radius1{
        border-bottom-left-radius: 750px 100px;
        border-bottom-right-radius: 750px 100px;
    }



</style>
<section id="accueil" class="">

<div class="container-fluid">
        <div class="row reseau_renov_rose "  >
            <div class="col-lg-6">
                <div class="row reseau_renov_blanc" >
                    <div class="col-lg-2 reseau_renov_blanc" >
                        <div class="row">
                            <img src="{{asset('img/qualibat.png')}}" style="width: 100%;margin-top: 200px"  >
                        </div>
                        <div class="row">
                            <img src="{{asset('img/rockwool.png')}}" style="width: 100%;margin-top: 50px"  >
                        </div>

                    </div>
                    <div class="col-lg-10 reseau_renov_blanc" >
                        <div class="row reseau_renov_bleu" style="height:70px;">

                        </div>
                        <div class="row">
                            <img src="{{asset('style/img/pict222.png')}}" style="width: 100%"  >
                        </div>
                        <div class="row reseau_renov_bleu reseau_renov_radius1" style="height: 50px; ">

                        </div>


                    </div>
                </div>
                <div class="row reseau_renov_blanc reseau_renov_radius1" >
                    <div class="col-lg-3 offset-lg-3 mb-5 text-center">
                        <img src="style/img/logo11.png" width="150px" alt="" >
                        <span class="span1" style="font-size: 10px;font-weight: bold">Sublimons votre maison!</span>
                    </div>
                    <div class="col-lg-6">
                        <div class="row mt-5">
                            <span class="span1" >8 rue du Faubourg Poissonnière - 75010 PARIS </span>
                        </div>
                        <div class="row">
                            <span class="span2" >Tél. 05 49 13 09 92</span>
                        </div>
                        <div class="row">
                          <span class="span3" >Port. 06 31 99 17 39</span>
                        </div>

                    </div>
                </div>
                <div class="row reseau_renov_rose" style="height: 200px;">

                </div>




            </div>
            <div class="col-lg-6 reseau_renov_blanc " >
                <div class="row reseau_renov_blanc" >
                    <div class="col-lg-12 mt-5 text-center">
                        <img src="style/img/logo11.png" width="200px" alt="" >
                    </div>
                    <div class="col-lg-12 mb-5 text-center">
                        <span class="span1">Sublimons votre maison!</span>
                    </div>



                </div>
                <div class="row">
                    <img src="{{asset('img/ri_11.png')}}" class="header_img_people"  >
                </div>
               <div class="row reseau_renov_bleu" style="margin-top: -55px">
                   <div class="col-lg-6 offset-lg-3 text-center " style="margin-top: 80px" >
                       <p class="p_header">Peinture intérieur extérieur | Façade Charpente | Couverture | Isolation | Ventilation Tout traitement (bois, charpente, couverture…) Électricité générale | Énergie renouvelable
                       </p>
                   </div>
               </div>




            </div>




            </div>


        </div>
    </div>
</section><!-- #intro -->

<main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
        <div class="container">
            <br><br><br>

            <header class="section-header">
                <h3>Qui Sommes-Nous</h3>
            </header>

            <div class="row about-container">

                <div class="col-lg-6 content order-lg-1 order-2" >
                    <p>RÉSEAU  RÉNOV est  le regroupement ,dans  une  même société, de  plusieurs  professionnels  ayant  des  domaines  d’expertises distincts mais complémentaires.
                        C’est  cette  synergie  qui  nous  permet  de  proposer   à  nos  clients, dans  toutes  ces  régions , des  prestations  complètes  d’amélioration de l’habitat.
                    </p>

                    <div class="icon-box wow fadeInUp">
                        <div class="icon"><i class="fa fa-wpforms"></i></div>
                        <h4 class="title"><a href=""></a></h4>
                        <p class="description">Parceque votre maison est bien plus qu'une habitation , Nous nous devons de vous aider à protéger votre patrimoine.</p>
                    </div>

                    <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon"><i class="fa fa-photo"></i></div>
                        <h4 class="title"><a href=""></a></h4>
                        <p class="description">Aussi, afin de vous offrir des prestations de qualité et vous apporter des garanties sur notre travail , nous avons pris des angagements.</p>
                    </div>

                </div>

                <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">

                    <img src="style/img/ci_12.png" class="img-fluid" alt="" style="height: 28px;
    width: 536px;
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
    padding-left: 111px;
    padding-right: 113px;">
                    <img src="style/img/nous1.png" class="img-fluid" alt="">
                </div>
            </div>

            <div class="row about-extra">
                <div class="col-lg-6 wow fadeInUp">
                    <img src="style/img/pict222.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
                    <h4>Grâce à cela , Vous avez la certitude que les travaux que nous réalisons assureront la longévité de votre bien immobilier.
                        </h4>
                    <p><h4>Rénovation Générale de l'habitation.</h4>
                        Peinture intérieur extérieur / Façade / Charpente / Couverture / Isolation  Ventilation ..
                    </p>
                    <p>Tout Traitement (bois,charpente,couverture...).
                        Électricité générale / Énergie renouvelable.
                    </p>
                </div>
            </div>



        </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services" class="section-bg">
        <div class="container-fluid">

            <header class="section-header">
                <h3>Services</h3>
                <p></p>
            </header>

            <div class="row">

                <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
                    <div class="box1 row" >
                        <div class="col-5">
                            <img src="style/img/serv3.jpg"  style="width: 251px;
                              height: 220px;
                              border-bottom-left-radius: 17px;
                              border-bottom-right-radius: 17px;">
                        </div>
                        <div class="col-7">

                        <h4 class="title"><a href="">TRAITEMENT DE TOITURE (Nettoyage-protections)</a></h4>
                        <p class="description1">Une toiture mal entretenue , c'est le risque de rencontrer des problèmes sérieux de manière prématurée.</p>
                        <p class="description1">Un nettoyage efficace permet de conserver sa toiture de 40 à 60 ans.</p>
                            <button type="button" class="btn btn-link float-lg-right" style="color: #bd1b72"><a href="{{asset('/toiture')}}">Voir Plus</a> </button>
                        </div>

                    </div>
                </div>

                <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
                    <div class="box2 row">
                        <div class="col-5">
                            <img src="style/img/serv2.jpg"  style="width: 251px;
                              height: 220px;
                              border-bottom-left-radius: 17px;
                              border-bottom-right-radius: 17px;">
                        </div>
                        <div class="col-7">
                            <h4 class="title"><a href="">TRAITEMENT DE CHARPENTE</a></h4>
                            <p class="description1"><b>Votre charpente est menacée...</b></p>
                            <p class="description1">Nos spécialistes sauront avec précision quel prédateur menace votre charpente:</p>

                            <p class="description1">  -Les insectes à larves xylophages.</p>
                            <p class="description1">  -Les insectes xylophages.</p>
                            <p class="description1">  -Les champignons</p>
                            <button type="button" class="btn btn-link float-lg-right" style="color: #bd1b72"><a href="{{asset('/charpente')}}">Voir Plus</a> </button>

                        </div>

                    </div>

                </div>

                <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                    <div class="box3 row ">
                        <div class="col-5">
                            <img src="style/img/serv4.jpg"  style="width: 251px;
                              height: 220px;
                              border-bottom-left-radius: 17px;
                              border-bottom-right-radius: 17px;">
                        </div>
                        <div class="col-7">
                        <h4 class="title"><a href="">ISOLATION COMBLES PERDUES</a></h4>
                        <p class="description1"> RÉDUISEZ VOS DÉPENSES DE CHAUFFAGE JUSQU'À 30 % ET APPRÉCIEZ UN TOUT NOUVEAU CONFORT DE VIE .</p>
                        <p class="description1">-Durée de vie de 50 ans et plus.</p>
                        <p class="description1">-Matériaux classe S1 ,Tassement négligeable.</p>
                            <button type="button" class="btn btn-link float-lg-right" style="color: #bd1b72"><a href="{{asset('/comble')}}">Voir Plus</a> </button>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                    <div class="box4 row">
                        <div class="col-5">
                            <img src="style/img/serv5.jpg"  style="width: 251px;
                              height: 220px;
                              border-bottom-left-radius: 17px;
                              border-bottom-right-radius: 17px;">
                        </div>
                        <div class="col-7">
                        <h4 class="title"><a href="">ISOLATION TOITURE</a></h4>
                        <p class="description1"><b>ISOLANT MINCE PAR RÉFLEXION</b></p>
                        <p class="description1">Avec l'isolant mince réflecteur , il suffit d'un seul produit et d'une seule opération pour traiter à la fois l'isolation et l'étanchéité.</p>
                        <p class="description1"><b>PERFORMANCE MAXIMALE DANS UN MINIMUM D'ÉPAISSEUR.</b></p>
                            <button type="button" class="btn btn-link float-lg-right" style="color: #bd1b72"><a href="{{asset('/isolation')}}">Voir Plus</a> </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
                    <div class="box5 row">
                        <div class="col-5">
                            <img src="style/img/serv6.jpg"  style="width: 251px;
                              height: 220px;
                              border-bottom-left-radius: 17px;
                              border-bottom-right-radius: 17px;">
                        </div>
                        <div class="col-7">
                        <h4 class="title"><a href="">TRAITEMENT ANTI-HUMIDITÉ</a></h4>
                        <p class="description1"><b>ASSÈCHEMENT DES MURS</b></p>
                        <p class="description1"><b>Solution aqueuse destinée à l'assèchement des murs.</b></p>
                        <p class="description1">Permet la réalisation d'une barrière d'étanchéité sur les murs porteurs et de refend,compacts ou alvéolés.N'altère ni le polystyrène ,ni le bitume.</p>
                            <button type="button" class="btn btn-link float-lg-right" style="color: #bd1b72"><a href="{{asset('/toiture')}}">Voir Plus</a> </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
                    <div class="box6 row">
                        <div class="col-5">
                            <img src="style/img/serv7.jpg"  style="width: 251px;
                              height: 220px;
                              border-bottom-left-radius: 17px;
                              border-bottom-right-radius: 17px;">
                        </div>
                        <div class="col-7">
                        <h4 class="title"><a href="">TRAITEMENT DE FAÇADES</a></h4>
                        <p class="description1"><b>RAVALEMENT Hydrofuge de surfaces</b></p>
                        <p class="description1"><b>Un ravalement de façades offre une nouvelle jeunesse à votre habitation </b></p>
                        <p class="description1">-Longévité des matériaux. </p>
                        <p class="description1">-Nouvelle esthétique. </p>
                        <p class="description1">-Valeur ajoutée. </p>
                            <button type="button" class="btn btn-link float-lg-right" style="color: #bd1b72"><a href="{{asset('/toiture')}}">Voir Plus</a> </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
                    <div class="box7 row">
                        <div class="col-5">
                            <img src="style/img/serv8.jpg"  style="width: 251px;
                              height: 220px;
                              border-bottom-left-radius: 17px;
                              border-bottom-right-radius: 17px;">
                        </div>
                        <div class="col-7">
                        <h4 class="title"><a href="">ISOLATION THERMIQUE EXTERIEURE</a></h4>
                        <p class="description1"><b>*ISOLANTS</b></p>
                        <p class="description1">PSE blanc et gris, laine de roche et fibre de bois.</p>
                        <p class="description1"><b>*FINITIONS</b></p>
                        <p class="description1">Enduits hydrauliques(PRB THERMOLOOK GF/GM, PRB CRÉPICHAUX )et enduits organiques (RPE,RME,peintures). </p>
                            <button type="button" class="btn btn-link float-lg-right" style="color: #bd1b72"><a href="{{asset('/toiture')}}">Voir Plus</a> </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                    <div class="box8 row">
                        <div class="col-5">
                            <img src="style/img/serv11.png"  style="width: 251px;
                              height: 220px;
                              border-bottom-left-radius: 17px;
                              border-bottom-right-radius: 17px;">
                        </div>
                        <div class="col-7">
                        <h4 class="title"><a href="">VENTILATION</a></h4>
                        <p class="description1"><b>LA SOLUTION POUR UNE MAISON CONFORTABLE ET ÉCONOME.</b></p>
                        <p class="description1">Notre système complet permet une optimisation énergétique au profit d'un maintien constant d'une haute qualité sanitaire de l'air du logement dans lequel il est installé.Le système repose sur un système de ventilation par surpression.</p>
                            <button type="button" class="btn btn-link float-lg-right" style="color: #bd1b72"><a href="{{asset('/toiture')}}">Voir Plus</a> </button>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- #services -->

    <!--==========================
      Why Us Section
    ============================-->
    <section id="why-us" class="wow fadeIn">
        <div class="container">
            <header class="section-header">
                <h3>Why choose us?</h3>
                <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>
            </header>

            <div class="row row-eq-height justify-content-center">

                <div class="col-lg-4 mb-4">
                    <div class="card wow bounceInUp">
                        <i class="fa fa-diamond"></i>
                        <div class="card-body">
                            <h5 class="card-title">Corporis dolorem</h5>
                            <p class="card-text">Deleniti optio et nisi dolorem debitis. Aliquam nobis est temporibus sunt ab inventore officiis aut voluptatibus.</p>
                            <a href="#" class="readmore">Read more </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="card wow bounceInUp">
                        <i class="fa fa-language"></i>
                        <div class="card-body">
                            <h5 class="card-title">Voluptates dolores</h5>
                            <p class="card-text">Voluptates nihil et quis omnis et eaque omnis sint aut. Ducimus dolorum aspernatur.</p>
                            <a href="#" class="readmore">Read more </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="card wow bounceInUp">
                        <i class="fa fa-object-group"></i>
                        <div class="card-body">
                            <h5 class="card-title">Eum ut aspernatur</h5>
                            <p class="card-text">Autem quod nesciunt eos ea aut amet laboriosam ab. Eos quis porro in non nemo ex. </p>
                            <a href="#" class="readmore">Read more </a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row counters">

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">274</span>
                    <p>Clients</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">421</span>
                    <p>Projects</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">1,364</span>
                    <p>Hours Of Support</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">18</span>
                    <p>Hard Workers</p>
                </div>

            </div>

        </div>
    </section>

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio" class="clearfix">
        <div class="container">

            <header class="section-header">
                <h3 class="section-title">Our Portfolio</h3>
            </header>

            <div class="row">
                <div class="col-lg-12">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">App</li>
                        <li data-filter=".filter-card">Card</li>
                        <li data-filter=".filter-web">Web</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="style/img/portfolio/app1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4><a href="#">App 1</a></h4>
                            <p>App</p>
                            <div>
                                <a href="style/img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
                    <div class="portfolio-wrap">
                        <img src="style/img/portfolio/web3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4><a href="#">Web 3</a></h4>
                            <p>Web</p>
                            <div>
                                <a href="style/img/portfolio/web3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
                    <div class="portfolio-wrap">
                        <img src="style/img/portfolio/app2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4><a href="#">App 2</a></h4>
                            <p>App</p>
                            <div>
                                <a href="style/img/portfolio/app2.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="style/img/portfolio/card2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4><a href="#">Card 2</a></h4>
                            <p>Card</p>
                            <div>
                                <a href="style/img/portfolio/card2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
                    <div class="portfolio-wrap">
                        <img src="style/img/portfolio/web2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4><a href="#">Web 2</a></h4>
                            <p>Web</p>
                            <div>
                                <a href="style/img/portfolio/web2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
                    <div class="portfolio-wrap">
                        <img src="style/img/portfolio/app3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4><a href="#">App 3</a></h4>
                            <p>App</p>
                            <div>
                                <a href="style/img/portfolio/app3.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="style/img/portfolio/card1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4><a href="#">Card 1</a></h4>
                            <p>Card</p>
                            <div>
                                <a href="style/img/portfolio/card1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card" data-wow-delay="0.1s">
                    <div class="portfolio-wrap">
                        <img src="style/img/portfolio/card3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4><a href="#">Card 3</a></h4>
                            <p>Card</p>
                            <div>
                                <a href="style/img/portfolio/card3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
                    <div class="portfolio-wrap">
                        <img src="style/img/portfolio/web1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4><a href="#">Web 1</a></h4>
                            <p>Web</p>
                            <div>
                                <a href="style/img/portfolio/web1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- #portfolio -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="testimonials" class="section-bg">
        <div class="container">

            <header class="section-header">
                <h3>Testimonials</h3>
            </header>

            <div class="row justify-content-center">
                <div class="col-lg-8">

                    <div class="owl-carousel testimonials-carousel wow fadeInUp">

                        <div class="testimonial-item">
                            <img src="style/img/testimonial-1.jpg" class="testimonial-img" alt="">
                            <h3>Saul Goodman</h3>
                            <h4>Ceo &amp; Founder</h4>
                            <p>
                                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                            </p>
                        </div>

                        <div class="testimonial-item">
                            <img src="style/img/testimonial-2.jpg" class="testimonial-img" alt="">
                            <h3>Sara Wilsson</h3>
                            <h4>Designer</h4>
                            <p>
                                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                            </p>
                        </div>

                        <div class="testimonial-item">
                            <img src="style/img/testimonial-3.jpg" class="testimonial-img" alt="">
                            <h3>Jena Karlis</h3>
                            <h4>Store Owner</h4>
                            <p>
                                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                            </p>
                        </div>

                        <div class="testimonial-item">
                            <img src="style/img/testimonial-4.jpg" class="testimonial-img" alt="">
                            <h3>Matt Brandon</h3>
                            <h4>Freelancer</h4>
                            <p>
                                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                            </p>
                        </div>

                        <div class="testimonial-item">
                            <img src="style/img/testimonial-5.jpg" class="testimonial-img" alt="">
                            <h3>John Larson</h3>
                            <h4>Entrepreneur</h4>
                            <p>
                                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                            </p>
                        </div>

                    </div>

                </div>
            </div>


        </div>
    </section><!-- #testimonials -->

    <!--==========================
      Team Section
    ============================-->
    <section id="team">
        <div class="container">
            <div class="section-header">
                <h3>Nos Personnels</h3>
                <p></p>
            </div>

            <div class="row">

                <div class="col-lg-3 offset-2  col-md-6 wow fadeInUp">
                    <div class="member">
                        <img src="style/img/team-4.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Yoni Garreau</h4>
                                <span>Conseiller Habitat</span>
                                <span>TEL:06 86 98 44 82 </span>
                                <div class="social">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="member">
                        <img src="style/img/team-2.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Philippe Gerard </h4>
                                <span>Conseiller Habitat</span>
                                <span>TEL:07 82 61 37 39</span>
                                <div class="social">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="member">
                        <img src="style/img/team-3.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Cyrille Houi</h4>
                                <span>Conseiller Habitat</span>
                                <span>TEL:06 86 70 28 66</span>
                                <div class="social">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 offset-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="member">
                        <img src="style/img/team-4.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Tony Dorizon</h4>
                                <span>Conseiller Habitat</span>
                                <span>TEL:06 10 03 63 87</span>
                                <div class="social">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="member">
                        <img src="style/img/team-1.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Valentin Sciare</h4>
                                <span>Conseiller Habitat</span>
                                <span>TEL:06 31 99 17 39</span>
                                <div class="social">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </section><!-- #team -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="section-bg">

        <div class="container">

            <div class="section-header">
                <h3>Our CLients</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque dere santome nida.</p>
            </div>

            <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="style/img/clients/client-1.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="style/img/clients/client-2.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="style/img/clients/client-3.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="style/img/clients/client-4.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="style/img/clients/client-5.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="style/img/clients/client-6.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="style/img/clients/client-7.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="style/img/clients/client-8.png" class="img-fluid" alt="">
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
        <div class="container-fluid">

            <div class="section-header">
                <h3>Contact Us</h3>
            </div>

            <div class="row wow fadeInUp">

                <div class="col-lg-6">
                    <div class="map mb-4 mb-lg-0">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 312px;" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-5 info">
                            <i class="ion-ios-location-outline"></i>
                            <p>A108 Adam Street, NY 535022</p>
                        </div>
                        <div class="col-md-4 info">
                            <i class="ion-ios-email-outline"></i>
                            <p>info@example.com</p>
                        </div>
                        <div class="col-md-3 info">
                            <i class="ion-ios-telephone-outline"></i>
                            <p>+1 5589 55488 55</p>
                        </div>
                    </div>

                    <div class="form">
                        <div id="sendmessage">Your message has been sent. Thank you!</div>
                        <div id="errormessage"></div>
                        <form action="" method="post" role="form" class="contactForm">
                            <div class="form-row">
                                <div class="form-group col-lg-6">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validation"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validation"></div>
                            </div>
                            <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- #contact -->

</main>

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




</body>
</html>
