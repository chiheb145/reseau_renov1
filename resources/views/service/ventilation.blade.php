@extends('layout.app')
@section('content')
    <div class="container" style="background-color: white;padding-top: 293px;margin-top: -102px;">
        <div class="row">
            <!-- Section Heading -->
            <div class="col-12">
                <div class="text-center" style="">
                    <b style="color: #ad1f79; font-size: 30px; width:50px">VENTILATION</b>
                </div>
                <div class="row">

                    <div class="col-6">
                        <br>
                        <br>
                        <p> <b>LA SOLUTION POUR UNE MAISON CONFORTABLE ET ÉCONOME.</b></p>
                        <p>Notre système complet permet une optimisation énergétique au profit d'un maintien constant d'une haute qualité sanitaire de l'air du logement dans lequel il est installé.</p>
                        <p>Le système repose sur un système de ventilation par surpression.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <p> <b>QUELLE DIFFÉRENCE ENTRE LA  VMI ET LA VMC ?</b></p>
                        <p>La ventilation positive agit en captant  l’air extérieur depuis une entrée d’air située soit  sur la toiture, ou depuis un mur :

                        <ul><li> l’air est ensuite poussé vers l’extérieur au travers des points d’extraction  existants ou crées. </li>

                        <li>  A l’inverse , la VMC aspire l’air vicié pour l’extraire vers l’extérieur.</li>
                        </ul>

                            <br></p>
                    </div>
                    <div class="col-4">
                        <img src="{{asset("style/img/vmi.jpg")}}" style="width: 123%;border-bottom-left-radius: 15px;border-bottom-right-radius: 15px;height: 230px;margin-top: -150px;">
                    </div>

                </div>


                <p><b> POURQUOI  INSTALLER UNE VMI ?</b>
                </p>


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
                <div class="row">
                    <div class="col-4">

                        <img src="{{asset("style/img/nf1.png")}}" style="width: 97%;
    border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;
    height: 230px;
    margin-top: 46px;">

                    </div>
                    <div class="col-3">
                        <img src="{{asset("style/img/nf.jpg")}}" style="width: 123%;
    border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;
    height: 230px;
    margin-top: 55px;">
                    </div>

                </div>


            </div>
        </div>
    </div>


@endsection
