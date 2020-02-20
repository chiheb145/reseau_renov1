@extends('layout.app')
@section('content')


    <div class="container" style="background-color: white; padding-top: 100px;">
        <div class="row">
            <!-- Section Heading -->
            <div class="col-12">
                <div class="text-center" style="">
                    <H2 class="title_facade">TRAITEMENT DE FAÇADES</H2>
                    <b class="title_facade1">RAVALEMENT Hydrofuge de surfaces</b>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
                    <div class="col-lg-4 col-sm-12">
                        <img src="{{asset("style/img/facade.jpg")}}" style="width: 100%;
    border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;">
                    </div>
                    <div class="col-lg-5 col-sm-12"><br>
                        <br>
                        <p><b>Un ravalement de façades offre une nouvelle jeunesse à votre habitation .</b></p>
                        <ul><li>Longévité des matériaux.</li>
                            <li>Nouvelle esthétique.</li>
                            <li>Valeur ajoutée.</li>
                        </ul>
                    </div>

                </div>
        <div class="row justify-content-center">
                    <div class="col-lg-4 col-sm-12">
                        <br><br>
                        <p><b>A moindre cout, une évidente amélioration de votre habitation,au regard des autres et,plus important encore, au votre.</b></p>
                    </div>
                    <div class="col-lg-5 col-sm-12"><br>
                        <img src="{{asset("style/img/facade1.jpg")}}" style="width: 100%;
    border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;
    height: 310px;">
                    </div>

                </div>
        <div class="row justify-content-center mt-5 pb-5">
                    <div class="col-lg-10 col-sm-12">
                        <h2 class="title_facade1" style="text-align: center">Propriétés  de nos produits hydrofuge façade </h2>
                        <ul><li> Les traitements hydrofuges de façade réduisent toute forme de pénétration d’eau sans modifier la perméabilité à la vapeur : le matériau continue de "respirer".</li>
                            <li> Les capillaires ne sont pas bouchés, mais la tension superficielle est réduite.</li>

                        </ul>
                    </div>

                </div>
    </div>



@endsection
