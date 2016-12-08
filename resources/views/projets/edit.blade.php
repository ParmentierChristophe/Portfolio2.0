@extends('layouts.app')

@section('form')
    <header class="w3-container" style="padding-top:22px">
        <h5><b><i class="fa fa-pencil-square-o fa-fw"></i>  Edition du Projet</b></h5>
    </header>

    {!! Form::model($projet, array('route' =>['projets.update', $projet->id],'method'=>'PUT', 'files'=>true)) !!}

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
            {!! Form::textarea('contenu', null , ['class' =>'w3-input', 'placeholder'=>'Contenu' ]) !!}

        </div>
    </div>

    <div class="w3-quarter w3-container">
        <div class="w3-container w3-padding-8">
            {!! Form::text('titre', null , ['class' =>'w3-input w3-animate-input w3-margin-top', 'placeholder'=>'Titre' ]) !!}
        </div>
        <div class="w3-container w3-padding-8">
            {!! Form::text('type', null , ['class' =>'w3-input w3-animate-input', 'placeholder'=>'Type' ]) !!}
        </div>
        <div class="w3-container w3-padding-8">
            {!! Form::text('soustitre', null , ['class' =>'w3-input w3-animate-input', 'placeholder'=>'Sous-titre' ]) !!}
        </div>
        <div class="w3-container w3-padding-8">
            {!! Form::text('client', null , ['class' =>'w3-input w3-animate-input', 'placeholder'=>'Client' ]) !!}
        </div>
        <div class="w3-container w3-padding-8">
            {!! Form::text('agence', null , ['class' =>'w3-input w3-animate-input', 'placeholder'=>'Agence' ]) !!}
        </div>
        <div class="w3-container w3-padding-8">
            {!! Form::text('typecrea', null , ['class' =>'w3-input w3-animate-input', 'placeholder'=>'Type de creation' ]) !!}
        </div>
        <div class="w3-container w3-padding-8">
            {!! Form::text('annee', null , ['class' =>'w3-input w3-animate-input', 'placeholder'=>'Année' ]) !!}
        </div>

    </div>

    <div class="w3-quarter w3-container">
        <div class="w3-container w3-theme-l1 w3-text-white w3-padding-16 w3-margin-top container-upload w3-hover-black">
            <div class="w3-left"><i class="fa fa-plus w3-xxxlarge"></i></div>
            <div class="w3-clear"></div>
            <h4>Ajouter image 1</h4>
            {!! Form::file('imgone', array('class'=>'hiddenupload')) !!}

        </div>
        <div class="w3-container w3-theme-l1 w3-text-white w3-padding-16 w3-margin-top container-upload w3-hover-black">
            <div class="w3-left"><i class="fa fa-plus w3-xxxlarge"></i></div>
            <div class="w3-clear"></div>
            <h4>Ajouter image 2</h4>
            {!! Form::file('imgtwo', array('class'=>'hiddenupload')) !!}

        </div>

    </div>
    <div class="w3-quarter w3-container">
        <div class="w3-container w3-theme-l1 w3-text-white w3-padding-16 w3-margin-top container-upload w3-hover-black">
            <div class="w3-left"><i class="fa fa-plus w3-xxxlarge"></i></div>
            <div class="w3-clear"></div>
            <h4>Ajouter image 3</h4>
            {!! Form::file('imgthree', array('class'=>'hiddenupload')) !!}

        </div>
        <div class="w3-container w3-theme-l1 w3-text-white w3-padding-16 w3-margin-top container-upload w3-hover-black">
            <div class="w3-left"><i class="fa fa-plus w3-xxxlarge"></i></div>
            <div class="w3-clear"></div>
            <h4>Ajouter image 4</h4>
            {!! Form::file('imgfour', array('class'=>'hiddenupload')) !!}

        </div>
        <div class="w3-margin-top">
            {{ Form::button('Mettre à jour <i class="fa fa-arrow-right"></i>', ['type'=>'submit', 'class'=>'w3-btn']) }}
{{--
            <button type="submit" class="w3-btn">Envoyer  <i class="fa fa-arrow-right"></i></button>
--}}
        </div>


    </div>
    {!! Form::close() !!}



@endsection