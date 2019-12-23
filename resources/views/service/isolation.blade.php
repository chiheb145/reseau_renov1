@extends('layout.app')
@section('content')

    <div class="container" style="background-color: #d9e4ed; padding-top: 198px;">
        <div class="row">
            <!-- Section Heading -->
            <div class="col-12">
                <div class="text-center" style="">

                    <b style="color: #ad1f79; font-size: 30px; width:50px">ISOLATION TOITURE</b><br>
                    <b style="color: #004a99; font-size: 20px; width:50px">ISOLANT MINCE PAR RÉFLEXION</b>

                </div>
                <br>
                <div class="row">
                    <div class="col-3 offset-1">
                        <img src="{{asset("style/img/mince.jpg")}}" style="width: 112%;
    border-bottom-left-radius: 15px;
    /* border-bottom-right-radius: 15px; */
    height: 214px;
    margin-top: 0px;
    padding-top: 23px;">
                    </div>
                    <div class="col-3">
                        <img src="{{asset("style/img/iso1.jpg")}}" style="width: 112%;
    /* border-bottom-left-radius: 15px; */
    /* border-bottom-right-radius: 15px; */
    padding-right: -16px;
    margin-top: 23px;
    height: 191px;">
                    </div>
                    <div class="col-3">
                        <img src="{{asset("style/img/iso2.gif")}}" style="width: 90%;
    /* border-bottom-left-radius: 15px; */
    border-bottom-right-radius: 15px;
    padding-top: 23px;
    padding-left: -18px;
    height: 214px;">
                    </div>

                </div>
                  <br>
                  <br>
                <ul><li><b>Un isolant 2 en 1 :</b> </li>
                </ul>
                <p>Avec l'isolant mince réflecteur , il suffit d'un seul produit et d'une seule opération pour traiter à la fois l'isolation et l'étanchéité.</p>
                <p>Il permet suivant l’application d’économiser la pose d’un parevapeur,d’un écran de sous-toiture ou  d’un écran pare-pluie.</p>
                 <br>
                <ul><li><b>PERFORMANCE MAXIMALE DANS UN MINIMUM D'ÉPAISSEUR :</b> </li>
                </ul>
                <p>L’épaisseur est de 35 mm environ.</p>
                <br>
                <ul><li><b>UN ISOLANT CERTIFIÉ :</b> </li>
                </ul>
                <br>
                <p>La performance est certifiée par un organisme de certification accrédité.</p>
                <p>(avis technique BM  TRADA  Certification  n° BIPS-0105).</p>
             <div class="row">
                 <div class="col-3 offset-3 ">
                     <img src="{{asset("style/img/iso77.jpg")}}" style="height: 318px;
    width: 293px;
    margin-top: 0px;
    padding-top: 68px;">

                 </div>

                 <div class="col-3  ">

                     <img src="{{asset("style/img/iso44.jpg")}}" style="height: 347px;
    width: 302px;
    padding-top: 97px;
    margin-top: -29px;">

                 </div>

             </div>

            </div>

        </div>

    </div>



@endsection
