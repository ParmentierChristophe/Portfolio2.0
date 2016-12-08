@extends('layouts.app')

@section('form')
    <header class="w3-container" style="padding-top:22px">
        <h5><b><i class="fa fa-pencil"></i> Édition de Projet</b></h5>
    </header>
    <ul class="w3-ul w3-card-4">
        @foreach($projet as $projet)
            <li class="w3-padding-16">
                {!! Form::open(array('route' =>['projets.destroy', $projet->id], 'method' => 'DELETE')) !!}

                {!! Form::button('<i <i class="fa fa-pencil"></i> Supprimer', array('type' => 'submit', 'class' => 'w3-btn w3-right w3-red w3-padding-8 w3-margin-left w3-margin-right')) !!}
                    {!!   HTML::decode(link_to_route('projets.edit', '<i class="fa fa-pencil"></i> Éditer', [$projet->id], ['class'=>'w3-btn w3-right w3-teal w3-padding-8 w3-margin-left'])) !!}
                {!! Form::close() !!}
                <img src="{{ asset('uploads/' . $projet->imgone ) }}" class="w3-left w3-circle w3-margin-right" style="width:50px; height:50px;">
                <span class="w3-xlarge">{{ $projet->titre }}</span><br>
                <span>{{ $projet->soustitre }}</span>

            </li>
        @endforeach

    </ul>
{!!  HTML::decode(link_to_route('projets.create', '<i class="fa fa-plus"></i> Ajouter un projet', null, ['class' => 'w3-btn w3-padding-8 w3-margin-top w3-teal'])) !!}



@endsection