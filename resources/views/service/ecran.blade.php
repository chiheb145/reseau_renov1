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
                <p><b>Protégez efficacement votre habitation grâce à un <b>écran</b> sous-toiture.</b></p>
                <p>Protégeons le toit contre les infiltrations d’eau et autres impuretés.</p>
                <p>Cet équipement améliore les performances <b>isolantes</b> et renforce la <b>ventilation</b> de la <b>toiture</b>.</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-6 col-sm-12">
                <p> Performants et faciles à installer, les films sous-<b>toiture</b> sont conçus pour renforcer la protection
                    de votre maison : intempéries, usure…</p>
                <p>Autre avantage : ils sont parfaitement compatibles avec les autres éléments de la <b>toiture</b>, tels que
                    les <b>tuiles</b> ou les <b>plaques</b> et <b>bardeaux</b>.</p>
            </div>
            <div class="col-lg-4 col-sm-12  text-center">
                <img src="{{asset("style/img/reseau-renov-ecran-1.jpg")}}"
                     style="width: 100%;border-bottom-left-radius: 15px;border-bottom-right-radius: 15px;">
            </div>

        </div>

        <div class="row mt-5">
            <div class="col-12">
                <p>Renforcé par une grille mono-filamentaire pour protéger les <b>combles</b> de la poussière, l’<b>écran</b>
                    sous-<b>toiture</b> limite les risques de soulevement des tuiles et ardoises.
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

                <img src="{{asset("style/img/reseau-renov-ecran-2.jpg")}}"
                     style="width: 100%;border-bottom-left-radius: 15px; border-bottom-right-radius: 15px;">
            </div>
            <div class="col-lg-4 col-sm-12 mb-2">
                <img src="{{asset("style/img/reseau-renov-ecran-3.jpg")}}"
                     style="width: 100%;border-bottom-right-radius: 15px;border-bottom-left-radius: 15px;">
            </div>
        </div>

    </div>


@endsection
