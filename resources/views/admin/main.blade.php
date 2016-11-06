<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>@yield('title', 'Home')</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">


  
  <link rel="stylesheet" href="{{ asset('css/materialize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@include('admin.partials.nav')
</head>

<body style="background-image: url('/img/swirl_pattern.png');">

<header>@yield('css')</header>
<main style="padding-top: 28px;">

<div class="row">

      <div class="col s12 m12 l12"> 
      

      @yield('content')


      </div> <!--   fin de capa row s12 m8 l9-->

      

    </div>

</main>
<footer>
  
</footer>







@yield('js')
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/materialize.js') }}"></script>
 
  
  
  <script type="text/javascript">

  $(function(){
                $('.carousel.carousel-slider').carousel({full_width: true});
$('.button-collapse').sideNav({
      menuWidth: 300, // Default is 240
      edge: 'right', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true // Choose whether you can drag to open on touch screens
    }
  );
 $('.slider').slider({full_width: true});
$('.modal-trigger').leanModal();

  });
  
    
     $(document).ready(function(){
      $('.slider').slider({full_width: true});
      $('select').material_select();
$('.modal-trigger').leanModal();
 $('.collapsible').collapsible({
      accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    });

 
    });

     $('.datepicker').pickadate({
    format: "yyyy/mm/dd",
    language: "es",
    autoclose: true,
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });

$('.least-gallery').least();
$(".button-collapse").sideNav();
  </script>
  @yield('js')
</body>
</html>
