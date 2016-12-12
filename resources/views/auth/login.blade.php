@extends('layouts.appauth')


@section('auth')

<div class="login-page">
    <div class="form">
        {!! Form::open(array('route' => 'handleLogin'), array('class' => 'login-form')) !!}
        {!! Form::text('email', null , ['class' =>'', 'placeholder'=>'Email' ]) !!}


        {!! Form::password('password', ['class' =>'', 'placeholder'=>'Password' ]) !!}

        {!! Form::token() !!}
            <button type="submit">login</button>

        {!! Form::close() !!}
    <p class="plog">Retourner à la <a class="linklog" href="{{ url('/') }}">page d'accueil</a></p>
    </div>
</div>
@stop
