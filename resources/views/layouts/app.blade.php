<!DOCTYPE html>
<html>
<head>
<title>Administration Christophe-Parmentier.fr</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3-theme-deep-orange.css">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3-colors-highway.css">
<link rel="stylesheet" href="{{ URL::asset('css/mystyle.css') }}">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
</head>
<body class="w3-light-grey">

<!-- Top container -->
    @include('layouts/partials/_topbar')

<!-- Sidenav/menu -->
    @include('layouts/partials/_nav')

<!-- Overlay effect when opening sidenav on small screens -->
    @include('layouts.partials._navmobile')

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">


    <div class="w3-row-padding w3-margin-bottom">
        @yield('form')

    </div>
    <div class="w3-content">
        @include('layouts.partials._message')

    </div>

    <!-- Footer -->

    @include('layouts/partials/_footer')

    <!-- End page content -->
</div>

<script>
    // Get the Sidenav
    var mySidenav = document.getElementById("mySidenav");

    // Get the DIV with overlay effect
    var overlayBg = document.getElementById("myOverlay");

    // Toggle between showing and hiding the sidenav, and add overlay effect
    function w3_open() {
        if (mySidenav.style.display === 'block') {
            mySidenav.style.display = 'none';
            overlayBg.style.display = "none";
        } else {
            mySidenav.style.display = 'block';
            overlayBg.style.display = "block";
        }
    }

    // Close the sidenav with the close button
    function w3_close() {
        mySidenav.style.display = "none";
        overlayBg.style.display = "none";
    }
</script>

</body>
</html>
