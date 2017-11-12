@extends('layouts.appprojet')


@section('portfolio')
    <!-- CONTENT -->




    <img src="img/roundpro2.png" alt="photo de profil" class="roundphoto"/>

    <div class="titleabout">

        <figure><img src="img/arrowright.png" alt=""/></figure>
        <h3>Hello I'm Christophe</h3>
        <figure><img src="img/arrowleft.png" alt=""/></figure>

    </div>

    <div class="aboutcontent">
        <p class="centertext">
            Who am i ?
        </p>
        <p class="centertext">
            I am a French Graphic Designer,
            I am also a Web Developer based in Lille in France,
            where I make cool things for startups , agencies and brands around the world
        </p>

        <p class="centertext">
            I am a developer apprentice I work with HTML5, CSS3, JavaScript, Php5,
            I use Wordpress CMS I am comfortable with the Linux environment,
            I have no problem with git and the terminal, I use Atom or PHPStorm
            and many others. I used to design the following adobe (PS, AI, AE, etc ...),
            C4D, Maya, 3Dsmax, etc ...
        </p>

        {{-- PARTIE FORMULAIRE --}}

        <div class="contact">

            <div class="head">
                <h3>contactez moi</h3>
            </div>

            <form action="{{ url('about') }}" method="post">
                {!! csrf_field() !!}
                <div class="field">
                    <div class="control">
                        <label class="label" for="nom">Votre nom</label>
                        <input id="nom" class="input {{ $errors->has('nom') ? 'is-danger' : '' }}" type="text"
                               name="nom" value="{{ old('nom') }}">
                        {!! $errors->first('nom', '  <div class="help danger">:message</div>') !!}
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <label class="label" for="email">Votre Email</label>

                        <input id="email" class="input {{ $errors->has('email') ? 'is-danger' : '' }}"
                               name="email"
                               type="email" value="{{ old('email') }}">
                        {!! $errors->first('email', '  <div class="help danger">:message</div>') !!}

                    </div>
                </div>


                <div class="field">
                    <div class="control">
                        <label class="label" for="message">Votre message</label>

                        <textarea id="message" class="textarea {{ $errors->has('message') ? 'is-danger' : '' }}"
                                  name="message">{{ old('message') }}</textarea>
                        {!! $errors->first('message', '  <div class="help danger">:message</div>') !!}
                    </div>
                </div>


                <div class="field is-grouped">
                    <div class="control">
                        <button type="submit" class="button is-link">Envoyer</button>
                    </div>
                </div>
            </form>
        </div>


    </div>

    <img src="img/botphoto2.jpg" alt="photo de profil" class="photobot"/>

@stop
