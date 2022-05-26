<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />

        <title>deydaboo</title>

        <meta charset="utf-8">
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('font-awesome/css/fontawesome-all.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery-ui.min.css') }}">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>


        <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">  <!-- font-family: 'Quicksand', sans-serif; -->
        <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans:200,300,400" rel="stylesheet"> <!-- font-family: 'Lato', sans-serif; -->
        <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">   <!-- font-family: 'Bree Serif', serif; -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet"><!--font-family:'Poppins', sans-serif;-->

        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

        <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}"/>
        
        <!-- Fav icon -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('logo\favicon_io\apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('logo\favicon_io\favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('logo\favicon_io\favicon-16x16.png') }}">
        <link rel="manifest" href="/site.webmanifest">

    </head>
    <body>

        <!-- Preloader section
        ================================================== -->
        <div class="preloader">
            <div class="sk-spinner sk-spinner-pulse"></div>
        </div>


        @include('includes.nav')
        
        @yield('content')

        @include('includes.footer')
        
        <!-- Javascript 
        ================================================== -->
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="slick/slick.min.js"></script>
        
        <script type="text/javascript">

            //home slider
            /*$(document).ready(function(){*/
                $('.slider').slick({
                  dots: false,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 1400,
                speed: 800,
                cssEase: 'linear',
            });
            /*});*/

            /* When the user clicks on the button, 
            toggle between hiding and showing the dropdown content */
            function myFunction() {
              document.getElementById("myDropdown").classList.toggle("show");
            }
            
            // Close the dropdown if the user clicks outside of it
            window.onclick = function(e) {
              if (!e.target.matches('.dropbtn')) {
              var myDropdown = document.getElementById("myDropdown");
                if (myDropdown.classList.contains('show')) {
                  myDropdown.classList.remove('show');
                }
              }
            }
        </script>
    </body>
</html>
