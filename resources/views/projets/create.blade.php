@extends('layouts.app')

@section('form')
    <header class="w3-container" style="padding-top:22px">
        <h5><b><i class="fa fa-plus fa-fw"></i>  Ajouter un projet</b></h5>
    </header>

    {!! Form::open(array('route' =>  'projets.store','method'=>'POST', 'files'=>true)) !!}

    {{ csrf_field() }}
    <div class="w3-quarter w3-container">
        <div class="w3-container w3-theme-l1 w3-text-white w3-padding-16 w3-margin-top container-upload w3-hover-black">
            <div>
                <div class="w3-left"><i class="fa fa-plus w3-xxxlarge"></i></div>
                <div class="w3-clear"></div>
                <h4>Ajouter une image de couverture</h4>
                {!! Form::file('imgcouv', array('class'=>'hiddenupload')) !!}

            </div>

        </div>
        <div class="w3-padding-8">
            <textarea class="w3-input" placeholder="Contenu" name="contenu" cols="30" rows="8"></textarea>
        </div>
    </div>

    <div class="w3-quarter w3-container">
        <div class="w3-container w3-padding-8">
            <input class="w3-input w3-animate-input w3-margin-top" placeholder="Titre du projet" type="text" name="titre">
        </div>
        <div class="w3-container w3-padding-8">
            <input class="w3-input w3-animate-input" placeholder="Type du projet" type="text" name="type">
        </div>
        <div class="w3-container w3-padding-8">
            <input class="w3-input w3-animate-input" placeholder="Sous-titre" type="text" name="soustitre">
        </div>
        <div class="w3-container w3-padding-8">
            <input class="w3-input w3-animate-input" placeholder="Client" type="text" name="client">
        </div>
        <div class="w3-container w3-padding-8">
            <input class="w3-input w3-animate-input" placeholder="Agence" type="text" name="agence">
        </div>
        <div class="w3-container w3-padding-8">
            <input class="w3-input w3-animate-input" placeholder="Type de creation" type="text" name="typecrea">
        </div>
        <div class="w3-container w3-padding-8">
            <input class="w3-input" placeholder="Année" type="text" name="annee">
        </div>

    </div>

    <div class="w3-quarter w3-container">
        <div class="w3-container w3-theme-l1 w3-text-white w3-padding-16 w3-margin-top container-upload w3-hover-black">
            <div class="w3-left"><i class="fa fa-plus w3-xxxlarge"></i></div>
            <div class="w3-clear"></div>
            <h4>Ajouter image 1</h4>
            <input type="file" class="hiddenupload" name="imgone">

        </div>
        <div class="w3-container w3-theme-l1 w3-text-white w3-padding-16 w3-margin-top container-upload w3-hover-black">
            <div class="w3-left"><i class="fa fa-plus w3-xxxlarge"></i></div>
            <div class="w3-clear"></div>
            <h4>Ajouter image 2</h4>
            <input type="file" class="hiddenupload" name="imgtwo">

        </div>

    </div>
    <div class="w3-quarter w3-container">
        <div class="w3-container w3-theme-l1 w3-text-white w3-padding-16 w3-margin-top container-upload w3-hover-black">
            <div class="w3-left"><i class="fa fa-plus w3-xxxlarge"></i></div>
            <div class="w3-clear"></div>
            <h4>Ajouter image 3</h4>
            <input type="file" class="hiddenupload" name="imgthree">

        </div>
        <div class="w3-container w3-theme-l1 w3-text-white w3-padding-16 w3-margin-top container-upload w3-hover-black">
            <div class="w3-left"><i class="fa fa-plus w3-xxxlarge"></i></div>
            <div class="w3-clear"></div>
            <h4>Ajouter image 4</h4>
            <input type="file" class="hiddenupload" name="imgfour">

        </div>
        <div class="w3-margin-top">

            <button type="submit" class="w3-btn">Envoyer  <i class="fa fa-arrow-right"></i></button>
        </div>


    </div>
    {!! Form::close() !!}



@endsection