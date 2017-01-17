<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>@yield('title', 'Home')</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">


  
  <link rel="stylesheet" href="{{ asset('css/materialize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
  <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
@include('admin.partials.nav')
</head>

<body>

<header>@yield('css')</header>
<main style="padding-top: 28px;">

<div class="row">

<!--
<div class="col s12 m3 l2">
     <ul id="slide-out" class="side-nav">
    <li><div class="userView">
      <img class="background" src="img/fondo1.jpg">
      <a href="#!user"><img class="circle" src="img/user.png"></a>
      <a href="#!name"><span class="white-text name">John Doe</span></a>
      <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
    </div></li>
    <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
    <li><a href="#!">Second Link</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Subheader</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>

    <li class="bold"><a href="about.html" class="waves-effect waves-teal">About</a></li>
        <li class="bold"><a href="getting-started.html" class="waves-effect waves-teal">Getting Started</a></li>
        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li class="bold"><a class="collapsible-header active waves-effect waves-teal">CSS</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="color.html">Color</a></li>
                  <li class="active"><a href="grid.html">Grid</a></li>
                  <li><a href="helpers.html">Helpers</a></li>
                  <li><a href="media-css.html">Media</a></li>
                  <li><a href="sass.html">Sass</a></li>
                  <li><a href="shadow.html">Shadow</a></li>
                  <li><a href="table.html">Table</a></li>
                  <li><a href="typography.html">Typography</a></li>
                </ul>
              </div>
            </li>
  </ul>
    
      
</div>  -->

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
            <script src="{{ asset('js/inicio.js') }}"></script>
 
  
  
  <script type="text/javascript">

  $(function(){

    $('.carousel.carousel-slider').carousel({
  full_width:true
}); 
              
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
