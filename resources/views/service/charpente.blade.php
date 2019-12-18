@extends('layout.app')
@section('content')
    <div class="container">
        <div class="form">
            <br><br><br><br><br>
            <h2>Contactez_nous</h2>
tttttttttttttttttttttttttttttttttttttttttttt
            <form action="" method="post" role="form" class="contactForm">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" name="name" class="form-control" id="name" placeholder="votre nom" data-rule="minlen:4" data-msg="S'il vous plaît entrer au moins 4 caractères" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="email" class="form-control" name="email" id="email" placeholder="votre email" data-rule="email" data-msg="S'il vous plaît entrer un email valide" />
                        <div class="validation"></div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="sujet" data-rule="minlen:4" data-msg="Veuillez entrer au moins 8 caractères du sujet" />
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="S'il vous plaît écrivez quelque chose pour nous" placeholder="Message"></textarea>
                    <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
        </div>

    </div>
@endsection
