@extends('layouts.appprojet')


@section('portfolio')

    <div class="titlecat">

        <h3>{{ $projet->titre }}</h3>

    </div>

    <div class="catcontent">
        <h1>{{ $projet->soustitre }}</h1>
        <p class="leftarea">
            {{ $projet->contenu }}
        </p>
        <p class="rightarea">
            Client: {{ $projet->client }} <br>
            Agency: {{ $projet->agence }} <br>
            Creative Field: {{ $projet->typecrea }} <br>
            Year: {{ $projet->annee }}
        </p>


        <img src="{{ asset('uploads/' . $projet->imgone ) }}" alt="" class="imgcat"/>
        <img src="{{ asset('uploads/' . $projet->imgtwo ) }}" alt="" class="imgcat"/>
        <img src="{{ asset('uploads/' . $projet->imgthree ) }}" alt="" class="imgcat"/>
        <img src="{{ asset('uploads/' . $projet->imgfour ) }}" alt="" class="imgcat"/>


    </div>


@stop
