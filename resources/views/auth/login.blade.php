@extends('layouts.appauth')


@section('auth')

<div class="login-page">
    <div class="form">
        {!! Form::open(array('route' => 'handleLogin'), array('class' => 'login-form')) !!}
{{--        <form class="login-form">--}}
        {!! Form::text('email', null , ['class' =>'', 'placeholder'=>'Email' ]) !!}

{{--
        <input type="text" placeholder="username"/>
--}}
        {!! Form::password('password', ['class' =>'', 'placeholder'=>'Password' ]) !!}

{{--
        <input type="password" placeholder="password"/>
--}}
        {!! Form::token() !!}
            <button type="submit">login</button>
{{--        </form>--}}
        {!! Form::close() !!}

    </div>
</div>
@stop
