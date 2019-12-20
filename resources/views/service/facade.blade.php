@extends('layout.app')
@section('content')

    <div class="container" style="background-color: white; padding-top: 158px;">
        <div class="row">
            <!-- Section Heading -->
            <div class="col-12">
                <div class="text-center" style="">

                    <b style="color: #ad1f79; font-size: 30px; ">TRAITEMENT DE FAÇADES</b>
                    <br>
                    <b style="color: #004a99; font-size: 20px; ">RAVALEMENT Hydrofuge de surfaces</b>
                </div>
                <br>
                <br>

               <br>
                <div class="row">
                    <div class="col-6">
                        <img src="{{asset("style/img/facade.jpg")}}" style="width: 90%;
    border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;">
                    </div>
                    <div class="col-3"><br>
                        <br>
                        <p><b>Un ravalement de façades offre une nouvelle jeunesse à votre habitation .</b></p>
                        <ul><li>Longévité des matériaux.</li>
                            <li>Nouvelle esthétique.</li>
                            <li>Valeur ajoutée.</li>
                        </ul>
                    </div>

                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-3">
                        <br><br>
                        <p><b>A moindre cout, une évidente amélioration de votre habitation,au regard des autres et,plus important encore, au votre.</b></p>
                    </div>
                    <div class="col-6"><br>
                        <img src="{{asset("style/img/facade1.jpg")}}" style="width: 90%;
    border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;
    height: 310px;">
                    </div>

                </div>
                <br>

                <p><b>PROPRIÉTÉS  DE  NOS  PRODUITS  HYDROFUGE  FAÇADE :</b></p>
                <ul><li> Les traitements hydrofuges de façade réduisent toute forme de pénétration d’eau sans modifier la perméabilité à la vapeur : le matériau continue de "respirer".</li>
                    <li> Les capillaires ne sont pas bouchés, mais la tension superficielle est réduite.</li>

                </ul>

            </div>
        </div>
    </div>


@endsection
