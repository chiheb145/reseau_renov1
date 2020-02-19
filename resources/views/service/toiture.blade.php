@extends('layout.app')
@section('content')

        <div class="container" style="background-color: #ffffff; padding-top: 80px;">
            <div class="row">
                <div class="col-12">
                    <div class="text-center" style="">
                        <H2 class="title_facade">Traitement de Toiture</H2>
                        <b class="title_facade1">Nettoyage-protections</b>
                    </div>
                </div>
            </div>
            <div class="row mt-5 justify-content-center">
                        <div class="col-lg-5 col-sm-12">
                            <img src="{{asset("style/img/toit.jpg")}}" style="width: 100%;border-bottom-left-radius: 15px;border-bottom-right-radius:15px;">
                        </div>
                        <div class="col-lg-5 col-sm-12"><br>

                            <p>Une toiture mal entretenue , c'est le risque de rencontrer des problèmes sérieux de manière prématurée.</p>
                            <p>Un nettoyage efficace permet de conserver sa toiture de 40 à 60 ans.</p>
                        </div>

                    </div>
            <div class="row justify-content-center mt-5">
                           <div class="col-lg-5 col-sm-12">

                               <p>Un nettoyage efficace permet de conserver sa toiture de 40 à 60 ans.<br>Un traitement adéquat est la clé de votre tranquilité:</p>
                           </div>
                        <div class="col-lg-5 col-sm-12">
                            <img src="{{asset("style/img/toit2.jpg")}}" style="width: 100%;border-bottom-left-radius: 15px;border-bottom-right-radius:15px;"  >
                        </div>

                    </div>
            <div class="row mt-5">
                <div class="col-lg-12  text-center">
                   <b class="title_facade1">Les différents hydrofuges pour toiture</b>
                </div>
                <div class="col-lg-12 pt-3 text-center ">
                    <p>Un traitement hydrofuge toiture imprègne les matériaux poreux et les protège en profondeur,durablement.<br>
                        Il existe toutefois deux types de traitements hydrofuge toiture: les traitements incolorés ou colorés.</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12  text-center">
                    <b class="title_facade1">Les avantages des hydrofuges colorés ou incolorés sont nombreux</b>
                </div>
                <div class="col-lg-12 pt-5 ">
                    <ul><li>Hydrofuge : réduit le degré d'absorption d'eau du support.</li>
                        <li>Fongicide:freine l'apparition des végétaux.</li>
                        <li>Durcisseur: Permet le durcissement de la surface et donc l'augmentation de la résistance à l'usure et à l'abrasion </li>
                        <li>Prolonge la durée de vie de votre toit. </li>
                        <li>Ne crée pas de film en surface. </li>
                        <li>Prévient les risques de décollement ou de fissuration. </li>
                        <li>Colore en profondeur, pour une longue tenue de la couleur. </li>
                        <li>S'applique sur support sec ou légèrement humide. </li>
                        <li>Laisse respirer le support. </li>
                    </ul>
                </div>
            </div>
        </div>


@endsection
