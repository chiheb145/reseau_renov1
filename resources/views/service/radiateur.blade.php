@extends('layout.app')
@section('content')
    <div class="container" style="background-color: #ffffff; padding-top:100px;">
        <div class="row">
            <!-- Section Heading -->
            <div class="col-12">
                <div class="text-center" style="">
                    <h2 class="title_facade">RADIATEURS</h2>

                    <b class="title_facade1">DÉCOUVREZ TOUTES NOS SOLUTIONS</b>
                </div>
            </div>
        </div>

        <div class="row mt-5">

            <div class="col-sm-12">
                <p><b> Notre conseiller saura vous diriger vers la gamme de produits adaptés à votre style et votre
                        budget.</b></p>
                <p>Bénéficiez des dernières avancées technologique en matière de contrôle.</p>
                <p>TVA réduite.</p>
                <p>Économisez jusqu’à 45% par rapport à un système de première génération.</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-6 col-sm-12">
                <p><b>DES RADIATEURS INTELLIGENTS</b></p><br><br>
                <ul>
                    <li> DIFFUSENT UNE CHALEUR DOUCE INERTIELLE.</li>
                    <li> S’ADAPTENT À VOTRE RYTHME DE VIE.</li>
                    <li> JUSQU’ À 45% D’ÉCONOMIE.</li>
                    <li>S’INTÈGRENT À LA PERFECTION À VOTRE DESIGN INTERIEUR.</li>
                </ul>
            </div>
            <div class="col-lg-4 col-sm-12">
                <img src="{{asset("style/img/radia1.jpg")}}"
                     style="width: 100%;border-bottom-left-radius: 15px;border-bottom-right-radius: 15px;">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-6 col-sm-12">
                <p><b>ENTREZ DANS L’UNIVERS DU SYSTÈME DE CHAUFFAGE CONNECTÉ :</b>
                </p>
                <ul>
                    <li> PILOTEZ VOS ÉCONOMIES ET VOTRE CONFORT.</li>
                </ul>
            </div>
            </div>
        <div class="row mt-5">
            <div class="col-lg-6 col-sm-12 mb-3" >
                <img src="{{asset("style/img/radia2.jpg")}}" style="width: 100%;border-bottom-left-radius: 15px;border-bottom-right-radius: 15px;">
            </div>
            <div class="col-lg-4 col-sm-12 mb-3" >
                <img src="{{asset("style/img/radia3.jpg")}}" style="width: 100%;border-bottom-left-radius: 15px;border-bottom-right-radius: 15px;">
            </div>
        </div>
    </div>


@endsection
