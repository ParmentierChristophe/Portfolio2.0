@extends('layouts.appprojet')


@section('portfolio')
    <!-- CONTENT -->




    <img src="img/roundpro2.png" alt="photo de profil" class="roundphoto" />

    <div class="titleabout">

        <figure><img src="img/arrowright.png" alt="" /></figure>
        <h3>Hello I'm Christophe</h3>
        <figure><img src="img/arrowleft.png" alt="" /></figure>

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
        <div class="contact"><a href="mailto:christophe-parmentier@laposte.net">Contact me</a></div>

 {{--       {!! Form::open(array('route' =>  'about.store','method'=>'POST','role' => 'form')) !!}
        {!! Form::text('contactname', null , ['class' =>'feedback-input', 'placeholder'=>'Name' ]) !!}
        {!! Form::text('contactemail', null , ['class' =>'feedback-input', 'placeholder'=>'Email' ]) !!}
        {!! Form::textarea('contacttext', null , ['class' =>'feedback-input', 'placeholder'=>'Comment' ]) !!}
--}}{{--
        {!! Form::text('address', '', ['class' => 'hpet']) !!}
--}}{{--

        {!! Form::token() !!}
        <input type="submit" value="SUBMIT"/>

        {!! Form::close() !!}--}}


{{--        <form>
            <input name="name" type="text" class="feedback-input" placeholder="Name" />
            <input name="email" type="text" class="feedback-input" placeholder="Email" />
            <textarea name="text" class="feedback-input" placeholder="Comment"></textarea>
            <input type="submit" value="SUBMIT"/>
        </form>--}}
    </div>

   {{-- <div class="titleabout2">

        <figure><img src="img/arrowright.png" alt="" /></figure>
        <h3>WHAT PEOPLE I WORKED WITH SAY</h3>
        <figure><img src="img/arrowleft.png" alt="" /></figure>

    </div>

    <div class="aboutcontent">

        <p>
            My name's Christophe , I am a French Graphic Designer,
            I am also a Web Developer based in Lille in France,
            where I make cool things for startups , agencies and brands around the world
        </p>
        <h6>John Doe</h6>
        <h6>C.E.O Google.com</h6>

        <p class="rightalign">
            My name's Christophe , I am a French Graphic Designer,
            I am also a Web Developer based in Lille in France,
            where I make cool things for startups , agencies and brands around the world
        </p>
        <h6 class="rightalign">John Doe</h6>
        <h6 class="rightalign">C.E.O Google.com</h6>

        <p>
            My name's Christophe , I am a French Graphic Designer,
            I am also a Web Developer based in Lille in France,
            where I make cool things for startups , agencies and brands around the world
        </p>
        <h6>John Doe</h6>
        <h6>C.E.O Google.com</h6>

        <p class="rightalign">
            My name's Christophe , I am a French Graphic Designer,
            I am also a Web Developer based in Lille in France,
            where I make cool things for startups , agencies and brands around the world
        </p>
        <h6 class="rightalign">John Doe</h6>
        <h6 class="rightalign">C.E.O Google.com</h6>







    </div>--}}

    <img src="img/botphoto2.jpg" alt="photo de profil" class="photobot" />

@stop
