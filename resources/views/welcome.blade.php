@extends('layout.app')
@section('content')
    <style>
        .image_right {
            height: 439px;
            border: 5px solid transparent;
            /* border-bottom-left-radius: 2010px; */
            border-bottom-right-radius: 277px 17px;
            background-image: url(http://reseauss.test/style/img/pict55.png);
            margin-top: 66px;
        }

        .image_left {
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

        .p_header {
            color: white;
        }

        .header_img_people {
            border-bottom-left-radius: 750px 100px;
            border-bottom-right-radius: 750px 100px;
            border-top-left-radius: 750px 100px;
            border-top-right-radius: 750px 100px;
            width: 100%;
        }

        .reseau_renov_rose {
            background-color: #cd146b;
        }

        .reseau_renov_blanc {
            background-color: #ffffff;
        }

        .span1 {
            color: #157dbd;
            font-weight: bold;
        }

        .span2 {
            color: #c11b6e;
            font-size: 22px;
            font-weight: bold
        }

        .span3 {
            font-weight: bold;
            color: #157dbd;
            font-size: 22px
        }

        .reseau_renov_bleu {
            background-color: #157dbd;
        }

        .reseau_renov_radius1 {
            border-bottom-left-radius: 750px 100px;
            border-bottom-right-radius: 750px 100px;
        }
        .title {
            text-align: center;
            font-size: 27px;
            font-weight: bold;
            color: black;
        }
        .logo2{
            margin-bottom: 100px
        }
        .portable{
            margin-bottom: 0px;
        }
        .rose1{
            height: 86px;
        }
        .padding_title1{
            padding-top: 50px;
        }
        .row_service{
            min-height: 235px;
        }

        @media only screen and (max-width: 600px) {
            .logo2{
                margin-bottom: 10px
            }
            .portable{
                margin-bottom: 20px;
            }
            .rose1{
                height: 16px;
            }
            .padding_title1{
                padding-top: 0px;
            }
            .form{
                padding-top: 55px;
            }

        }


    </style>
    <section id="accueil" class="">

        <div class="container">
            <div class="row reseau_renov_rose ">

                <div class="col-lg-5 reseau_renov_blanc ">
                    <div class="row reseau_renov_blanc">
                        <div class="col-lg-12 mt-4 text-center">
                            <img src="style/img/logo11.png" width="100px" alt="">
                        </div>
                        <div class="col-lg-12 mb-2 text-center">
                            <span class="span1" style="font-size: 9px">Sublimons votre maison!</span>
                        </div>


                    </div>
                    <div class="row">
                        <img src="{{asset('img/ri_111.png')}}" class="header_img_people">
                    </div>
                    <div class="row reseau_renov_bleu" style="margin-top: -55px;height: 230px">
                        <div class="col-lg-10 offset-lg-1 text-center " style="margin-top: 80px">
                            <p class="p_header">Peinture intérieur extérieur | Façade Charpente | Couverture | Isolation |
                                Ventilation Tout traitement (bois, charpente, couverture…) Électricité générale | Énergie
                                renouvelable
                            </p>
                        </div>
                    </div>


                </div>
                <div class="col-lg-7 ">
                    <div class="row reseau_renov_blanc">
                        {{--}}  <div class="col-lg-3 reseau_renov_blanc">
                              <div class="row">
                                  <div class="col-12">
                                      <img src="{{asset('img/qualibat.png')}}" style="width: 75%;margin-top: 75px">
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-12">
                                      <img src="{{asset('img/rockwool.png')}}" style="width: 75%;margin-top: 50px">

                                  </div>
                              </div>

                          </div>
                          {{--}}
                        <div class="col-lg-12 reseau_renov_blanc">
                            <div class="row reseau_renov_bleu" style="height:40px;">

                            </div>
                            <div class="row reseau_renov_bleu">
                                <div class="col-lg-6 offset-lg-2">
                                    <img src="{{asset('style/img/pict222.png')}}" style="width: 100%">
                                </div>

                            </div>
                            <div class="row reseau_renov_bleu reseau_renov_radius1 mb-4" style="height: 50px; ">

                            </div>


                        </div>
                    </div>
                    <div class="row reseau_renov_blanc reseau_renov_radius1">
                        <div class="col-lg-3 offset-lg-3 logo2 ">
                            <div class="row justify-content-center">
                                <img src="style/img/logo11.png" width="100px" alt="">
                            </div>
                            <div class="row justify-content-center">
                                <span class="span1" style="font-size: 8px;font-weight: bold">Sublimons votre maison!</span>
                            </div>


                        </div>
                        <div class="col-lg-6">
                            <div class="row mt-3">
                                <div class="col-lg-12">
                                    <span class="span1">8 rue du Faubourg Poissonnière - 75010 PARIS </span>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <span class="span2">Tél. 05 49 13 09 92</span>
                                </div>

                            </div>
                            <div class="row portable">
                                <div class="col-lg-12">
                                    <span class="span3">Port. 06 31 99 17 39</span>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="row reseau_renov_rose rose1" >

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
            <div class="container ">
                <header class="section-header ">
                    <h2 class="title padding_title1">Qui Sommes-Nous</h2>
                </header>

                <div class="row reseau_renov_rose reseau_renov_radius1" style="">

                    <div class="col-lg-12 reseau_renov_blanc reseau_renov_radius1  " >
                        <div class="row reseau_renov_bleu" style="border-bottom-left-radius: 2750px 414px;border-bottom-right-radius: 750px 318px; ">

                            <img src="img/ri_31.png" class="img-fluid reseau_renov_radius1" >

                            <div class="col-lg-12 reseau_renov_bleu" style="border-bottom-left-radius: 2750px 414px;border-bottom-right-radius: 750px 318px;">
                                <div class="row">
                                    <div class="col-lg-6 offset-md-5 mt-5 mb-5 ">
                                        <p class="description2" style="color: whitesmoke"><span style="font-weight: bold;font-size: 22px;color: #ffffff">RÉSEAU RÉNOV </span>est le regroupement, dans une même société, de plusieurs
                                            professionnels ayant des domaines d’expertises distincts mais complémentaires.<br>
                                            C’est cette synergie qui nous permet de proposer à nos clients, dans
                                            toutes ces régions, des prestations complètes d’amélioration de l’habitat.</p>
                                    </div>
                                </div>



                            </div>
                        </div>

                        <div class="row reseau_renov_rose">
                            <div class="col-lg-12  reseau_renov_blanc reseau_renov_radius1">
                                <div class="row">
                                    <div class="col-lg-6 offset-lg-1 mt-5">
                                        <p style="font-weight: bold">
                                            Parce que votre maison est bien plus qu’une habitation, nous nous
                                            devons de vous aider à protéger votre patrimoine.<br>
                                            Aussi, afin de vous offrir des prestations de qualité et vous apporter
                                            des garanties sur notre travail, nous avons pris des engagements :
                                        </p>
                                    </div>
                                </div>
                                <div class="row mt-3 mb-5">
                                    <div class="col-lg-3 pt-3 ">
                                        <div class="row justify-content-center">
                                            <img src="{{asset('img/s_1.png')}} " style="width: 100px" >
                                        </div>
                                        <div class="row">



                                            <div class="col-lg-12 text-center">
                                             <span style="font-weight: bold;color:#000000;text-align: center ">
                                          GARANTIE
                                        </span>
                                            </div>
                                            <div class="col-lg-12 text-center">
                                          <span style="font-weight: bold;color:#c11b6e;text-align: center ">
                                           DÉCENNALE
                                        </span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-3 pt-3 text-center">
                                        <div class="row justify-content-center">
                                            <img src="{{asset('img/s_2.png')}} " style="width: 100px" >
                                        </div>
                                        <div class="row ">


                                            <div class="col-lg-12 text-center">
                                             <span style="font-weight: bold;color:#000000;text-align: center ">
                                          PRODUITS DE
                                        </span>
                                            </div>
                                            <div class="col-lg-12 text-center">
                                          <span style="font-weight: bold;color:#c11b6e;text-align: center ">
                                           QUALITÉ
                                        </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 pt-3 text-center">
                                        <div class="row justify-content-center">
                                            <img src="{{asset('img/s_3.png')}} " style="width: 100px" >
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 text-center">
                                             <span style="font-weight: bold;color:#000000;text-align: center ">
                                           CONSEILS
                                        </span>
                                            </div>
                                            <div class="col-lg-12 text-center">
                                          <span style="font-weight: bold;color:#c11b6e;text-align: center ">
                                            PERSONNALISÉS
                                        </span>
                                            </div>





                                        </div>
                                    </div>
                                    <div class="col-lg-3 pt-3 text-center">
                                        <div class="row justify-content-center">
                                            <img src="{{asset('img/s_4.png')}} " style="width: 100px" >
                                        </div>
                                        <div class="row ">


                                            <div class="col-lg-12 text-center">
                                             <span style="font-weight: bold;color:#000000;text-align: center ">
                                          ASSISTANCE
                                        </span>
                                            </div>
                                            <div class="col-lg-12 text-center">
                                          <span style="font-weight: bold;color:#c11b6e;text-align: center ">
                                             24H/7J
                                        </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>

                        </div>
                        <div class="row reseau_renov_rose reseau_renov_radius1 " >

                            <div class="col-lg-6 offset-lg-3 mt-5">
                                <p style="color: white ;font-weight: bold">Grâce à cela, vous avez la certitude que les travaux que
                                    nous réalisons assureront la longévité de votre bien immobilier.</p>
                            </div>
                            <div class="col-lg-12 text-center">
                                <img src="{{asset('img/logo_rose.png')}} " style="width: 100px" >
                            </div>

                        </div>


                    </div>
                </div>










            </div>
        </section><!-- #about -->

        <!--==========================
          Services Section
        ============================-->

        <section id="services" class="section-bg reseau_renov_radius1" style="padding-top: 0px">
            <div class="container">



                <div class="row reseau_renov_radius1 justify-content-center " style="height: 120px ;background-color: #cdcdd3">
                    <h2 class="title" style="padding-top: 50px;">Services</h2>
                </div>

                <div class="row mt-5">
                    <div class="col-md-6" >
                        <div class="wow bounceInUp" data-wow-duration="1.4s">
                            <div class="box1">
                                <div class="row row_service">
                                    <img src="style/img/toit.jpg" class="col-md-5 col-sm-12 ">

                                    <div class="col-md-7 col-sm-12 ">

                                        <h4 class="title"><a href="">TRAITEMENT DE TOITURE (Nettoyage-protections)</a></h4>
                                        <p class="description1">Une toiture mal entretenue , c'est le risque de rencontrer des problèmes sérieux de manière prématurée.</p>

                                    </div>

                                </div>
                                <div class="row" >
                                    <div class="col-12">
                                        <button type="button" class="btn btn-link float-right" style="color: #bd1b72"><a href="{{asset('/toiture')}}">Voir Plus</a> </button>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="col-md-6" >
                        <div class="wow bounceInUp" data-wow-duration="1.4s">
                            <div class="box1">
                                <div class="row row_service">
                                    <img src="style/img/serv2.jpg" class="col-md-5 col-sm-12">

                                    <div class="col-md-7 col-sm-12 ">

                                        <h4 class="title"><a href="">TRAITEMENT DE CHARPENTE</a></h4>

                                        <p class="description1">Votre charpente est menacée...<br>Nos spécialistes sauront avec précision quel prédateur menace votre
                                            charpente:</p>





                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <button type="button" class="btn btn-link float-right" style="color: #bd1b72"><a href="{{asset('/charpente')}}">Voir Plus</a> </button>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="col-md-6" >
                        <div class="wow bounceInUp" data-wow-duration="1.4s">
                            <div class="box1">
                                <div class="row row_service">
                                    <img src="style/img/serv4.jpg" class="col-md-5 col-sm-12 ">

                                    <div class="col-md-7 col-sm-12 ">

                                        <h4 class="title"><a href="">ISOLATION COMBLES PERDUES</a></h4>
                                        <p class="description1"> RÉDUISEZ VOS DÉPENSES DE CHAUFFAGE JUSQU'À 30 % ET APPRÉCIEZ UN TOUT NOUVEAU CONFORT DE VIE .<br>
                                            -Durée de vie de 50 ans et plus.</p>



                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <button type="button" class="btn btn-link float-right" style="color: #bd1b72"><a href="{{asset('/comble')}}">Voir Plus</a> </button>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="col-md-6" >
                        <div class="wow bounceInUp" data-wow-duration="1.4s">
                            <div class="box1">
                                <div class="row row_service" >
                                    <img src="style/img/serv5.jpg" class="col-md-5 col-sm-12 ">

                                    <div class="col-md-7 col-sm-12 ">

                                        <h4 class="title"><a href="">ISOLATION TOITURE</a></h4>
                                        <p class="description1">ISOLANT MINCE PAR RÉFLEXION<br>PERFORMANCE MAXIMALE DANS UN MINIMUM D'ÉPAISSEUR.</p>



                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <button type="button" class="btn btn-link float-right" style="color: #bd1b72"><a href="{{asset('/isolation')}}">Voir Plus</a> </button>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="col-md-6" >
                        <div class="wow bounceInUp" data-wow-duration="1.4s">
                            <div class="box1">
                                <div class="row row_service" >
                                    <img src="style/img/serv6.jpg" class="col-md-5 col-sm-12 ">

                                    <div class="col-md-7 col-sm-12 ">

                                        <h4 class="title"><a href="">TRAITEMENT ANTI-HUMIDITÉ</a></h4>
                                        <p class="description1">ASSÈCHEMENT DES MURS<br>
                                            Solution aqueuse destinée à l'assèchement des murs.</p>




                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <button type="button" class="btn btn-link float-right" style="color: #bd1b72"><a href="{{asset('/humidité')}}">Voir Plus</a> </button>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="col-md-6" >
                        <div class="wow bounceInUp" data-wow-duration="1.4s">
                            <div class="box1">
                                <div class="row row_service" >
                                    <img src="style/img/serv7.jpg" class="col-md-5 col-sm-12 ">

                                    <div class="col-md-7 col-sm-12 ">

                                        <h4 class="title"><a href="">TRAITEMENT DE FAÇADES</a></h4>
                                        <p class="description1">RAVALEMENT Hydrofuge de surfaces<br>Un ravalement de façades offre une nouvelle jeunesse à votre habitation </p>




                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <button type="button" class="btn btn-link float-right" style="color: #bd1b72"><a href="{{asset('/facade')}}">Voir Plus</a> </button>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>

                    <div class="col-md-6" >
                        <div class="wow bounceInUp" data-wow-duration="1.4s">
                            <div class="box1">
                                <div class="row row_service" >
                                    <img src="style/img/serv8.jpg" class="col-md-5 col-sm-12 ">

                                    <div class="col-md-7 col-sm-12 ">

                                        <h4 class="title"><a href="">ISOLATION THERMIQUE EXTERIEURE</a></h4>
                                        <p class="description1">Enduits hydrauliques(PRB THERMOLOOK GF/GM, PRB CRÉPICHAUX )et enduits organiques (RPE,RME,peintures). </p>



                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <button type="button" class="btn btn-link float-right" style="color: #bd1b72"><a href="{{asset('/thermique')}}">Voir Plus</a> </button>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="col-md-6" >
                        <div class="wow bounceInUp" data-wow-duration="1.4s">
                            <div class="box1">
                                <div class="row row_service" >
                                    <img src="style/img/serv11.png" class="col-md-5 col-sm-12 ">

                                    <div class="col-md-7 col-sm-12 ">

                                        <h4 class="title"><a href="">VENTILATION</a></h4>
                                        <p class="description1">LA SOLUTION POUR UNE MAISON CONFORTABLE ET ÉCONOME.</p>



                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <button type="button" class="btn btn-link float-right" style="color: #bd1b72"><a href="{{asset('/ventilation')}}">Voir Plus</a> </button>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="col-md-6" >
                        <div class="wow bounceInUp" data-wow-duration="1.4s">
                            <div class="box1">
                                <div class="row row_service" >
                                    <img src="style/img/ecran.jpg" class="col-md-5 col-sm-12 ">

                                    <div class="col-md-7 col-sm-12 ">

                                        <h4 class="title"><a href="">ÉCRAN SOUS TOITURE</a></h4>
                                        <p class="description1">Protégez efficacement votre habitation grâce à un écran sous-toiture.</p>



                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <button type="button" class="btn btn-link float-right" style="color: #bd1b72"><a href="{{asset('/ecran')}}">Voir Plus</a> </button>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="col-md-6" >
                        <div class="wow bounceInUp" data-wow-duration="1.4s">
                            <div class="box1">
                                <div class="row row_service" >
                                    <img src="style/img/radia.jpg" class="col-md-5 col-sm-12 ">

                                    <div class="col-md-7 col-sm-12">

                                        <h4 class="title"><a href="">RADIATEURS</a></h4>
                                        <p class="description1">DÉCOUVREZ TOUTES NOS SOLUTIONS</p>



                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <button type="button" class="btn btn-link float-right" style="color: #bd1b72"><a href="{{asset('/radiateur')}}">Voir Plus</a> </button>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section><!-- #services -->



        <!--==========================
          Portfolio Section
        ============================-->
        <!--  <section id="portfolio" class="clearfix">
              <div class="container">

                  <header class="section-header">
                      <h2 class="title" style="padding-top: 50px;font-size: 40px;font-weight: bold;">Partenaire</h2>
                  </header>

                  <div class="row">
                      <div class="col-lg-12">
                          <ul id="portfolio-flters">
                              <li data-filter="*" class="filter-active">All</li>
                              <li data-filter=".filter-rockwool">Rockwool</li>
                              <li data-filter=".filter-NF">NF</li>
                              <li data-filter=".filter-PRB">PRB</li>
                          </ul>
                      </div>
                  </div>

                  <div class="row portfolio-container">

                      <div class="col-lg-4 col-md-6 portfolio-item filter-rockwool">
                          <div class="portfolio-wrap">
                              <img src="img/galerie_rockwool2.jpg" class="img-fluid" alt="">
                              <div class="portfolio-info">
                                  <h4><a href="#">App 1</a></h4>
                                  <p>App</p>
                                  <div>
                                      <a href="img/galerie_rockwool2.jpg" data-lightbox="portfolio" data-title="App 1"
                                         class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                                      <a href="#" class="link-details" title="More Details"><i
                                                  class="ion ion-android-open"></i></a>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <div class="col-lg-4 col-md-6 portfolio-item filter-rockwool" data-wow-delay="1s">
                          <div class="portfolio-wrap">
                              <img src="img/galerie_rockwool.jpg" class="img-fluid" alt="">
                              <div class="portfolio-info">
                                  <h4><a href="#">App 3</a></h4>
                                  <p>App</p>
                                  <div>
                                      <a href="img/galerie_rockwool.jpg" class="link-preview" data-lightbox="portfolio"
                                         data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                                      <a href="#" class="link-details" title="More Details"><i
                                                  class="ion ion-android-open"></i></a>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <div class="col-lg-4 col-md-6 portfolio-item filter-rockwool" data-wow-delay="1s">
                          <div class="portfolio-wrap">
                              <img src="img/galerie_rockwool3.jpg" class="img-fluid" alt="">
                              <div class="portfolio-info">
                                  <h4><a href="#">app 3</a></h4>
                                  <p>app</p>
                                  <div>
                                      <a href="img/galerie_rockwool3.jpg" class="link-preview" data-lightbox="portfolio"
                                         data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                                      <a href="#" class="link-details" title="More Details"><i
                                                  class="ion ion-android-open"></i></a>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <div class="col-lg-4 col-md-6 portfolio-item filter-rockwool" data-wow-delay="1s">
                          <div class="portfolio-wrap">
                              <img src="img/galerie_rockwool4.jpg" class="img-fluid" alt="">
                              <div class="portfolio-info">
                                  <h4><a href="#">App 2</a></h4>
                                  <p>App</p>
                                  <div>
                                      <a href="img/galerie_rockwool4.jpg" class="link-preview" data-lightbox="portfolio"
                                         data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                                      <a href="#" class="link-details" title="More Details"><i
                                                  class="ion ion-android-open"></i></a>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <div class="col-lg-4 col-md-6 portfolio-item filter-NF" data-wow-delay="1s">
                          <div class="portfolio-wrap">
                              <img src="img/galerie_nf1.jpg" class="img-fluid" alt="">
                              <div class="portfolio-info">
                                  <h4><a href="#">Card 2</a></h4>
                                  <p>Card</p>
                                  <div>
                                      <a href="img/galerie_nf1.jpg" class="link-preview" data-lightbox="portfolio"
                                         data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                                      <a href="#" class="link-details" title="More Details"><i
                                                  class="ion ion-android-open"></i></a>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <div class="col-lg-4 col-md-6 portfolio-item filter-NF" data-wow-delay="1s">
                          <div class="portfolio-wrap">
                              <img src="img/galerie_nf2.jpg" class="img-fluid" alt="">
                              <div class="portfolio-info">
                                  <h4><a href="#">Card 1</a></h4>
                                  <p>Card</p>
                                  <div>
                                      <a href="img/galerie_nf2.jpg" class="link-preview" data-lightbox="portfolio"
                                         data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                                      <a href="#" class="link-details" title="More Details"><i
                                                  class="ion ion-android-open"></i></a>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <div class="col-lg-4 col-md-6 portfolio-item filter-NF" data-wow-delay="1s">
                          <div class="portfolio-wrap">
                              <img src="img/galerie_nf3.jpg" class="img-fluid" alt="">
                              <div class="portfolio-info">
                                  <h4><a href="#">Card 3</a></h4>
                                  <p>Card</p>
                                  <div>
                                      <a href="img/galerie_nf3.jpg" class="link-preview" data-lightbox="portfolio"
                                         data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                                      <a href="#" class="link-details" title="More Details"><i
                                                  class="ion ion-android-open"></i></a>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <div class="col-lg-4 col-md-6 portfolio-item filter-PRB" data-wow-delay="1s">
                          <div class="portfolio-wrap">
                              <img src="img/galerie_rpp1.jpg" class="img-fluid" alt="">
                              <div class="portfolio-info">
                                  <h4><a href="#">Web 2</a></h4>
                                  <p>Web</p>
                                  <div>
                                      <a href="img/galerie_rpp1.jpg" class="link-preview" data-lightbox="portfolio"
                                         data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                                      <a href="#" class="link-details" title="More Details"><i
                                                  class="ion ion-android-open"></i></a>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <div class="col-lg-4 col-md-6 portfolio-item filter-PRB" data-wow-delay="1s">
                          <div class="portfolio-wrap">
                              <img src="img/galerie_prb1.jpg" class="img-fluid" alt="">
                              <div class="portfolio-info">
                                  <h4><a href="#">Web 1</a></h4>
                                  <p>Web</p>
                                  <div>
                                      <a href="img/galerie_prb1.jpg" class="link-preview" data-lightbox="portfolio"
                                         data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                                      <a href="#" class="link-details" title="More Details"><i
                                                  class="ion ion-android-open"></i></a>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <div class="col-lg-4 col-md-6 portfolio-item filter-PRB" data-wow-delay="1s">
                          <div class="portfolio-wrap">
                              <img src="img/galerie_prb2.jpg" class="img-fluid" alt="">
                              <div class="portfolio-info">
                                  <h4><a href="#">Web 1</a></h4>
                                  <p>Web</p>
                                  <div>
                                      <a href="img/galerie_prb2.jpg" class="link-preview" data-lightbox="portfolio"
                                         data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                                      <a href="#" class="link-details" title="More Details"><i
                                                  class="ion ion-android-open"></i></a>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <div class="col-lg-4 col-md-6 portfolio-item filter-PRB" data-wow-delay="1s">
                          <div class="portfolio-wrap">
                              <img src="img/galerie_prb3.jpg" class="img-fluid" alt="">
                              <div class="portfolio-info">
                                  <h4><a href="#">Web 1</a></h4>
                                  <p>Web</p>
                                  <div>
                                      <a href="img/galerie_prb3.jpg" class="link-preview" data-lightbox="portfolio"
                                         data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                                      <a href="#" class="link-details" title="More Details"><i
                                                  class="ion ion-android-open"></i></a>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <div class="col-lg-4 col-md-6 portfolio-item filter-PRB" data-wow-delay="1s">
                          <div class="portfolio-wrap">
                              <img src="img/galerie_prb4.jpg" class="img-fluid" alt="">
                              <div class="portfolio-info">
                                  <h4><a href="#">Web 1</a></h4>
                                  <p>Web</p>
                                  <div>
                                      <a href="img/galerie_prb4.jpg" class="link-preview" data-lightbox="portfolio"
                                         data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                                      <a href="#" class="link-details" title="More Details"><i
                                                  class="ion ion-android-open"></i></a>
                                  </div>
                              </div>
                          </div>
                      </div>

                  </div>

              </div>
          </section> #portfolio -->



        <!--==========================
          Team Section
        ============================-->
        <!--  <section id="team">
                <div class="container">
                    <div class="section-header">
                        <h2 class="title" style="font-weight: bold;font-size: 30px">Nos Personnels</h2>
                        <p></p>
                    </div>

                    <div class="row">

                        <div class="col-lg-2 offset-lg-1 wow fadeInUp">
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
                        <div class="col-lg-2  wow fadeInUp" data-wow-delay="0.1s">
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
                        <div class="col-lg-2  wow fadeInUp" data-wow-delay="1s">
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
                        <div class="col-lg-2  wow fadeInUp" data-wow-delay="0.3s">
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
                        <div class="col-lg-2  wow fadeInUp" data-wow-delay="0.3s">
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
            </section> #team -->



        <!--==========================
          Contact Section
        ============================-->
        <section id="contact" style="background-color: #ecf5ff;">
            <div class="container-fluid">

                <div class="section-header">
                    <h2 class="title" style="font-size: 30px;font-weight: bold">Contactez nous</h2>
                </div>

                <div class="row wow fadeInUp">

                    <div class="col-lg-6">

                        <div class="map mb-4 mb-lg-0" style="margin-top: -7px;height: 127px;">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5248.513716240753!2d2.346876274461875!3d48.872379777984804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e15d56e822d%3A0x33206b920ac4380e!2s8%20Rue%20du%20Faubourg%20Poissonni%C3%A8re%2C%2075010%20Paris%2C%20France!5e0!3m2!1sfr!2stn!4v1576844482632!5m2!1sfr!2stn" frameborder="0" style="border: 0;width: 100%; height: 422px;" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="col-lg-6">

                            <div class="col-md-5 info">
                                <i class="ion-ios-location-outline"></i>
                                <p>08 Rue du Foubourg Poissonnière ,75010,Paris,France</p>
                            </div>
                            <div class="col-md-4 info">
                                <i class="ion-ios-email-outline"></i>
                                <p>info@example.com</p>
                            </div>
                            <div class="col-md-3 info">
                                <i class="ion-ios-telephone-outline"></i>
                                <p>05 49 13 09 92</p>
                            </div>
                        </div>


                        <div class="form">
                            <div id="sendmessage">Your message has been sent. Thank you!</div>
                            <div id="errormessage"></div>
                            <form action="{{route('send_mail')}}" method="post" role="form" class="contactForm">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <input type="text" name="name" class="form-control" id="name"
                                               placeholder="Nom" data-rule="minlen:4"
                                               data-msg="Please enter at least 4 chars"/>
                                        <div class="validation"></div>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <input type="email" class="form-control" name="email" id="email"
                                               placeholder="Email" data-rule="email"
                                               data-msg="Please enter a valid email"/>
                                        <div class="validation"></div>
                                    </div>
                                </div>
                                <div class="form-group">


                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">

                                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Ecrire une déscription de votre besoin"></textarea>
                                    <div class="validation"></div>
                                </div>

                                <div class="text-center"><button type="submit" title="Send Message">Envoyer</button></div>
                            </form>
                        </div>
                    </div>

                </div>


        </section><!-- #contact -->

    </main>
@endsection
