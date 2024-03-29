@extends('layout.app')
@section('content')
    <div class="container" style="background-color: #ffffff; padding-top: 100px;">
        <div class="row">
            <!-- Section Heading -->
            <div class="col-12">
                <div class="text-center" style="">
                    <h2 class="title_facade">VENTILATION</h2>
                </div>
            </div>
        </div>
                <div class="row mt-2">

                    <div class="col-lg-12">
                        <p> <b class="title_facade1">LA SOLUTION POUR UNE MAISON CONFORTABLE ET ÉCONOME.</b></p>
                        <p>Notre système complet permet une optimisation énergétique au profit d'un maintien constant d'une haute qualité sanitaire de l'air du logement dans lequel il est installé.</p>
                        <p>Le système repose sur un système de <b>ventilation</b> par surpression.</p>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-6 col-sm-12">
                        <p> <b class="title_facade1">QUELLE DIFFÉRENCE ENTRE LA  VMI ET LA VMC ?</b></p>
                        <p>La <b>ventilation</b> positive agit en captant  l’air extérieur depuis une entrée d’air située soit  sur la toiture, ou depuis un mur :</p>

                        <ul><li> l’air est ensuite poussé vers l’extérieur au travers des points d’extraction  existants ou crées. </li>

                        <li>  A l’inverse , la VMC aspire l’air vicié pour l’extraire vers l’extérieur.</li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <img src="{{asset("style/img/reseau-renov-vmi.jpg")}}" style="width: 100%;border-bottom-left-radius: 15px;border-bottom-right-radius: 15px;">
                    </div>
                </div>

        <div class="row mt-5 col-12">
                <p><b class="title_facade1"> POURQUOI  INSTALLER UNE VMI ?</b>
                </p><br>
                <ul><li> Niveau sonore très faible. </li>
                    <li>  Filtre de haute qualité type  G4 (hôpitaux).</li>
                    <li>   Réchauffeur d’air progressif  5 niveaux.</li>
                    <li>  Récupérateur  de chaleur.</li>
                    <li>  Suppression de la condensation.</li>
                    <li>  Suppression des mauvaises odeurs.</li>
                    <li>  500m3 d’air traité.</li>
                    <li>  Les sondes assurent un équilibre permanent.</li>
                    <li>   Pose simplifiée : un seul diffuseur.</li>
                </ul>
        </div>
                <div class="row mt-5 justify-content-center">
                    <div class="col-lg-4 col-sm-11 offset-sm-1 ">

                        <img src="{{asset("style/img/reseau-renov-ventilation-diffuseur.png")}}" >

                    </div>
                    <div class="col-lg-4 col-sm-11 offset-sm-1">
                        <img src="{{asset("style/img/reseau-renov-nf.jpg")}}" >
                    </div>

                </div>


            </div>


@endsection
