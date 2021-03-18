@extends('layout.app')
@section('content')

    <div class="container" style="background-color: #ffffff; padding-top:100px;">
        <div class="row">
            <!-- Section Heading -->
            <div class="col-12">
                <div class="text-center" style="">

                    <h2 class="title_facade">ISOLATION THERMIQUE EXTERIEURE</h2>

                    <b class="title_facade1">PRB THERMOLOOK EMI ANCIEN finition RPE
                    </b>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-6 col-sm-12 mt-2">
                <img src="{{asset("style/img/reseau-renov-isolation-thermique-1.jpg")}}" style="width: 100%;border-bottom-left-radius: 15px;border-bottom-right-radius: 15px;">
            </div>
            <div class="col-lg-3 col-sm-12 mt-2">

                <img src="{{asset("style/img/reseau-renov-isolation-thermique-2.jpeg")}}" style="width: 100%;border-bottom-left-radius: 15px;border-bottom-right-radius: 15px;">
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12">
                <ul>
                    <li><b class="title_facade1"> Supports :</b></li>
                </ul>
                <p><b>Neufs et anciens en maçonnerie traditionnelle (parpaings, briques, béton , béton cellulaire…).
                        Ossatures bois (MOB), sur des ouvrages tels que : logement individuel et collectif , batiments
                        industriels et agricoles…
                    </b></p>
                <ul>
                    <li><b class="title_facade1">ISOLANTS :</b></li>
                </ul>
                <p><b>PSE blanc et gris, laine de roche et fibre de bois.</b></p>
                <ul>
                    <li><b class="title_facade1">FINITIONS :</b></li>
                </ul>
                <p><b>Enduits hydrauliques(PRB THERMOLOOK GF/GM, PRB CRÉPICHAUX )et enduits organiques
                        (RPE,RME,peintures).</b></p>
            </div>
        </div>
    </div>


@endsection
