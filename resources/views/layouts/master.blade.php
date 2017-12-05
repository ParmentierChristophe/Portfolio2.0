<!doctype html>
<html class="no-js" lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Christophe Parmentier / Freelance, Graphic Designer / Illustration</title>
    <meta name="description" content="C'EST LE PORTFOLIO DE CRISPY, FREELANCE GRAPHIC DESIGNER ¬ DÉVELOPPEUR À LILLE.">
    <meta name="viewport" content="width=device-width, initial-scale=1">

{{--
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
--}}
<!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <link href="https://fonts.googleapis.com/css?family=Dosis:400,700,800" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
    <script src="{{ URL::asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    </script>

</head>

<body>

<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Add your site or application content here -->

<!-- Back to top -->
<a href="#" id="back-to-top" title="Back to top"><img src="img/top2.png" alt=""/></a>


<!-- Hamburger Style ! -->

@include('layouts/partials/_navport')

<!-- Picture profil -->
@include('layouts/partials/_headerporthome')


<!-- Portfolio -->
<!-- Title -->
<div class="titleport">
    <span class="barportfolio"></span>
    <h1>Portfolio</h1>
</div>

@yield('portfolio')






<!-- footer -->

@include('layouts/partials/_footerport')


<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="masonry.pkgd.min.js" type="text/javascript"></script>
<script src="https://npmcdn.com/masonry-layout@4.0/dist/masonry.pkgd.min.js"></script>
<script>
    window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')
</script>

<script src="{{ URL::asset('js/plugins.js') }}"></script>
<script src="{{ URL::asset('js/main.js') }}"></script>
<script type="text/javascript">
    /*    $(document).ready(function() {
     $("body").css("display", "none");
     });*/
</script>


<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function (b, o, i, l, e, r) {
        b.GoogleAnalyticsObject = l;
        b[l] || (b[l] =
            function () {
                (b[l].q = b[l].q || []).push(arguments)
            });
        b[l].l = +new Date;
        e = o.createElement(i);
        r = o.getElementsByTagName(i)[0];
        e.src = 'https://www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e, r)
    }(window, document, 'script', 'ga'));
    ga('create', 'UA-85002883-1', 'auto');
    ga('send', 'pageview');
</script>
</body>

</html>