@extends('layout.app')
@section('content')

    <div class="container" style="background-color: #ffffff; padding-top: 124px;margin-top: 61px;">
        <div class="row">
            <!-- Section Heading -->
            <div class="col-12">
                <div class="text-center" style="">
                    <br>
                    <b style="color: #ad1f79; font-size: 30px; width:50px">ISOLATION COMBLES PERDUES</b><br>
                    <b style="color: #004a99; font-size: 20px; width:50px"> RÉDUISEZ VOS DÉPENSES DE CHAUFFAGE JUSQU'À
                        30 % ET APPRÉCIEZ UN TOUT NOUVEAU CONFORT DE VIE .</b>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-3 col-sm-12 offset-lg-1 mt-2">
                <img src="{{asset("style/img/comb2.jpg")}}"
                     style="width: 100%;border-bottom-left-radius: 15px;border-bottom-right-radius: 15px;">
            </div>
            <div class="col-lg-3 col-sm-12 mt-2">
                <img src="{{asset("style/img/comb1.jpg")}}"
                     style="width: 100%;border-bottom-left-radius: 15px;border-bottom-right-radius: 15px;">
            </div>
            <div class="col-lg-3 col-sm-12 mt-2">
                <img src="{{asset("style/img/comb3.jpg")}}"
                     style="width: 100%;border-bottom-left-radius: 15px;border-bottom-right-radius: 15px;">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <ul>
                    <li><b class="title_facade1">ACCOUSTIQUE :</b></li>
                </ul>
                <p>Haute performance (RW 55 à 58 dB).</p>
                <ul>
                    <li><b class="title_facade1">THERMIQUE été :</b></li>
                </ul>
                <p>Vous êtes préservés des grosses chaleurs.</p>
                <ul>
                    <li><b class="title_facade1">THERMIQUE hiver :</b></li>
                </ul>
                <p>Étanche au froid,la chaleur est maintenue durablement.</p>
                <ul>
                    <li><b class="title_facade1">RÉSISTANCE et longévité :</b></li>
                </ul>
                <p>-Durée de vie de 50 ans et plus.<br>
                    -Matériaux classe S1 ,Tassement négligeable.</p>
                <ul>
                    <li><b class="title_facade1">PRÉSERVATION :</b></li>
                </ul>
                <p>Économie d’énergie et diminution des émissions de gaz à effet de serre.
                </p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <div class="text-center" style="">
                    <p>Réduisez vos dépenses de chauffage <b>jusqu’à 30%.</b></p>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-12 offset-lg-1 mt-2">
                <img src="{{asset("style/img/rock2.png")}}"
                     style="width: 100%;border-bottom-left-radius: 15px;border-bottom-right-radius: 15px;">
            </div>
            <div class="col-lg-3 col-sm-12  mt-2">
                <img src="{{asset("style/img/rock3.jpg")}}"
                     style="width: 100%;border-bottom-left-radius: 15px;border-bottom-right-radius: 15px;">
            </div>
            <div class="col-lg-3 col-sm-12 mt-2">
                <img src="{{asset("style/img/rock1.jpg")}}"
                     style="width: 100%;border-bottom-left-radius: 15px;border-bottom-right-radius: 15px;">
            </div>


        </div>
    </div>


@endsection
