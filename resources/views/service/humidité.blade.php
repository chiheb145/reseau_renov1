@extends('layout.app')
@section('content')

    <div class="container" style="background-color: white; padding-top: 100px;">




        <div class="row">
            <!-- Section Heading -->
            <div class="col-12">
                <div class="text-center" style="">
                    <H2 class="title_facade">TRAITEMENT ANTI-HUMIDITÉ</H2>
                    <b class="title_facade1">ASSÈCHEMENT DES MURS</b>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-lg-4 col-sm-12">
                <p>Solution aqueuse destinée à l'assèchement des murs.</p>
                <img src="{{asset("style/img/humi.jpg")}}" style="width: 90%;border-bottom-left-radius: 15px;border-bottom-right-radius:15px;">
            </div>
            <div class="col-lg-5 col-sm-12"><br>

                <p>Permet la réalisation d'une barrière d'étanchéité sur les murs porteurs et de refend,compacts ou alvéolés.</p>
                <p>N'altère ni le polystyrène ,ni le bitume.</p>
            </div>

        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-lg-4 col-sm-12">
                <p>Utilisable sur les murs intérieurs sans gêne pour les locaux habités.</p>
                <p> Le traitement est effectif 48h après l’injection de la résine :</p>
            </div>
            <div class="col-lg-5 col-sm-12"><br>

                <img src="{{asset("style/img/humi1.png")}}" style="width: 90%;border-bottom-left-radius: 15px;border-bottom-right-radius:15px;"  >
            </div>

        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-lg-4 col-sm-12">
                <img src="{{asset("style/img/humid3.jpg")}}" style="width: 90%;
    border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;
    height: 264px;">
            </div>
            <div class="col-lg-5 col-sm-12"><br>

                <b> Cette technique ne nécessite plus aucun entretien de votre  part.</b>
                <ul><li>Résiste aux acides et aux sels.</li>
                    <li>Sans matière organiques volatiles.</li>
                    <li>Inodore,ininflammable.</li>
                </ul>
            </div>

        </div>


    </div>


@endsection
