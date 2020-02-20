@extends('layout.app')
@section('content')
    <div class="container" style="background-color: #ffffff; padding-top: 100px;">
        <div class="row">
            <!-- Section Heading -->
            <div class="col-12">
                <div class="text-center" style="">
                    <h2 class="title_facade">ÉCRAN SOUS TOITURE</h2>

                    <b class="title_facade1">MONARFOL MICRO PERFORÉ</b>
                </div>
            </div>
        </div>
        <div class="row mt-5">

            <div class="col-lg-6 col-sm-12">
                <p><b>Protégez efficacement votre habitation grâce à un écran sous-toiture.</b></p>
                <p>Protégeons le toit contre les infiltrations d’eau et autres impuretés.</p>
                <p>Cet équipement améliore les performances isolantes et renforce la ventilation de la toiture.</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-6 col-sm-12">
                <p> Performants et faciles à installer, les films sous-toiture sont conçus pour renforcer la protection
                    de votre maison : intempéries, usure…</p>
                <p>Autre avantage : ils sont parfaitement compatibles avec les autres éléments de la toiture, tels que
                    les tuiles ou les plaques et bardeaux.</p>
            </div>
            <div class="col-lg-4 col-sm-12  text-center">
                <img src="{{asset("style/img/ecran1.jpg")}}"
                     style="width: 100%;border-bottom-left-radius: 15px;border-bottom-right-radius: 15px;">
            </div>

        </div>

        <div class="row mt-5">
            <div class="col-12">
                <p>Renforcé par une grille mono-filamentaire pour protéger les combles de la poussière, l’écran
                    sous-toiture limite les risques de soulevement des tuiles et ardoises.
                </p><br>
                <ul>
                    <li><b>Type :</b>PVC armé.</li>
                    <li><b>Résistance :</b>R1.</li>
                    <li><b>LÉGER,MISE EN ŒUVRE AISÉE !!</b></li>
                </ul>
            </div>
        </div>
        <div class="row mt-5" >
            <div class="col-lg-6 col-sm-12 mb-2">

                <img src="{{asset("style/img/ecran3.jpg")}}"
                     style="width: 100%;border-bottom-left-radius: 15px; border-bottom-right-radius: 15px;">
            </div>
            <div class="col-lg-4 col-sm-12 mb-2">
                <img src="{{asset("style/img/ecran4.jpg")}}"
                     style="width: 100%;border-bottom-right-radius: 15px;border-bottom-left-radius: 15px;">
            </div>
        </div>

    </div>


@endsection
