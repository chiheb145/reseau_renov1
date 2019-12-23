@extends('layout.app')
@section('content')
    <div class="container" style="background-color: #bcb9b4;padding-top: 293px;margin-top: -102px;">
        <div class="row">
            <!-- Section Heading -->
            <div class="col-12">
                <div class="text-center" style="">
                    <b style="color: #ad1f79; font-size: 30px; width:50px">RADIATEURS</b>
                    <br>
                    <h2 style="color: #004a99;"><b>DÉCOUVREZ TOUTES NOS SOLUTIONS</b></h2>
                </div>
                <div class="row">

                    <div class="col-6">
                        <br>
                        <br>
                        <p><b> Notre conseiller saura vous diriger vers la gamme de produits adaptés à votre style et votre budget.</b></p>
                        <p>Bénéficiez des dernières avancées technologique en matière de contrôle.</p>
                        <p>TVA réduite.</p>
                        <p>Économisez jusqu’à 45% par rapport à un système de première génération.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <p> <b>DES RADIATEURS INTELLIGENTS</b></p>
                        <ul><li> DIFFUSENT UNE CHALEUR DOUCE INERTIELLE. </li>
                            <li> S’ADAPTENT À VOTRE RYTHME DE VIE.</li>
                            <li> JUSQU’ À 45% D’ÉCONOMIE.</li>
                            <li>S’INTÈGRENT À LA PERFECTION À VOTRE DESIGN INTERIEUR. </li>
                        </ul>
                        <br></p>
                    </div>
                    <div class="col-4">
                        <img src="{{asset("style/img/radia1.jpg")}}" style="width: 123%;border-bottom-left-radius: 15px;border-bottom-right-radius: 15px;height: 230px;margin-top: -150px;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                <p><b>ENTREZ DANS L’UNIVERS DU SYSTÈME DE CHAUFFAGE CONNECTÉ :</b>
                </p>
                <ul><li> PILOTEZ VOS ÉCONOMIES ET VOTRE CONFORT. </li>
                </ul>
                    </div>
                    <div class="col-4">

                    </div>
                </div>
                <div class="row">
                    <div class="col-6" style="padding-top: 315px;">
                        <img src="{{asset("style/img/radia2.jpg")}}" style="width: 123%;
    border-bottom-left-radius: 15px;
    /* border-bottom-right-radius: 15px; */
    height: 230px;
    margin-top: -150px;">
                    </div>
                    <div class="col-4" style="padding-top: 315px;">
                        <img src="{{asset("style/img/radia3.jpg")}}" style="width: 123%;
    /* border-bottom-left-radius: 15px; */
    border-bottom-right-radius: 15px;
    height: 230px;
    margin-top: -150px;
    padding-right: -16px;
    margin-left: 94px;">
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
