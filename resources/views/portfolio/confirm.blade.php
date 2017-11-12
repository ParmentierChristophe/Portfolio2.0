@extends('layouts.appprojet')


@section('portfolio')
    <!-- CONTENT -->

    <div class="Message Message--green">
        <div class="Message-icon">
            <i class="fa fa-check"></i>
        </div>
        <div class="Message-body">
            <div>Votre message a bien été envoyé. Merci.</div>

        </div>
        <button class="Message-close js-messageClose"><i class="fa fa-times"></i></button>
    </div>


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
            My name's Christophe , I am a French Graphic Designer,
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
        <div class="Message Message--green">
            <div class="Message-icon">
                <i class="fa fa-check"></i>
            </div>
            <div class="Message-body">
                <p>This is a message telling you that everything is a-okay!</p>
                <p>Good job, and good riddance.</p>
            </div>
            <button class="Message-close js-messageClose"><i class="fa fa-times"></i></button>
        </div>


    </div>

    <img src="img/botphoto2.jpg" alt="photo de profil" class="photobot"/>

@stop
