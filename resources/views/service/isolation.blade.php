@extends('layout.app')
@section('content')


    <div class="container" style="background-color: white; padding-top: 100px;">




        <div class="row">
            <!-- Section Heading -->
            <div class="col-12">
                <div class="text-center" style="">
                    <H2 class="title_facade">ISOLATION TOITURE</H2>
                    <b class="title_facade1">ISOLANT MINCE PAR RÉFLEXION</b>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-lg-3 col-sm-12">
                <img src="{{asset("style/img/mince.jpg")}}" style=" width: 90%;
                 border-bottom-left-radius: 15px;
                border-bottom-right-radius: 15px;">
            </div>
            <div class="col-lg-3 col-sm-12"><br>
                <img src="{{asset("style/img/iso1.jpg")}}" style="width: 90%;
     border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;
   ">
            </div>
            <div class="col-lg-3 col-sm-12"><br>
                <img src="{{asset("style/img/iso2.gif")}}" style="width: 90%;
     border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;">
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-lg-4 col-sm-12">
                <h2>Un isolant 2 en 1 :</h2>
            </div>
            <div class="col-lg-5 col-sm-12"><br>
                <p>Avec l'isolant mince réflecteur , il suffit d'un seul produit et d'une seule opération pour traiter à la fois l'isolation et l'étanchéité.</p>
                <p>Il permet suivant l’application d’économiser la pose d’un parevapeur,d’un écran de sous-toiture ou  d’un écran pare-pluie.</p>

                <ul><li><b>PERFORMANCE MAXIMALE DANS UN MINIMUM D'ÉPAISSEUR :</b> </li>
                </ul>
                <p>L’épaisseur est de 35 mm environ.</p>

                <ul><li><h2>UN ISOLANT CERTIFIÉ :</h2> </li>
                </ul>

                <p>La performance est certifiée par un organisme de certification accrédité.</p>
                <p>(avis technique BM  TRADA  Certification  n° BIPS-0105).</p>

            </div>

        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-lg-4 col-sm-12 mb-3">
                <img src="{{asset("style/img/iso77.jpg")}}" style="width: 100%;border-bottom-left-radius: 15px; border-bottom-right-radius: 15px;">
            </div>
            <div class="col-lg-5 col-sm-12 mb-3">
                <img src="{{asset("style/img/iso44.jpg")}}"  style="width: 100%;border-bottom-left-radius: 15px; border-bottom-right-radius: 15px;">
            </div>

        </div>


    </div>




@endsection
