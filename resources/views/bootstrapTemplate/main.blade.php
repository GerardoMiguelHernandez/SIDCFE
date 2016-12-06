<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title','Home')</title>
   {!!Html::style('digitalagency/assets/bootstrap/css/bootstrap.css');!!}
   {!!Html::style('digitalagency/css/font-awesome.css');!!}
   {!!Html::style('css/index.css');!!}
   {!!Html::style('digitalagency/assets/animate/animate.css');!!}
   {!!Html::style('digitalagency/assets/animate/set.css');!!}
   {!!Html::style('digitalagency/assets/gallery/blueimp-gallery.min.css');!!}
   {!!Html::style('digitalagency/assets/style.css');!!}
   

	@yield('css')
</head>
<body>
@include('bootstrapTemplate.partials.nav')
<div class="container-fluid">
<div id="home">
<!-- Slider Starts -->
<div id="myCarousel" class="carousel slide banner-slider animated flipInX" data-ride="carousel">     
      <div class="carousel-inner">
        <!-- Item 1 -->
        @foreach($sliders as $slider)
  <div class="item @if($slider->id === $slider->first()->id) {{ 'active' }} @endif">
          <img src="/slider/{{$slider->imagen}}" alt="banner">          
            <div class="carousel-caption">
            	<div class="caption-wrapper">
            		<div class="caption-info">
            		<img src="digitalagency/images/cfe.png" class="animated bounceInUp" alt="logo">
              		<h2 class="animated bounceInLeft">{{$slider->Titulo}}</h2>
              		<p class="animated bounceInRight">Departamento de Informatica</p>
              		<div class="scroll animated fadeInUp"><a href="#works" class="btn btn-default"><i class="fa fa-flask"></i>  Ver mas</a> <a href="#contact" class="btn btn-default"><i class="fa fa-paper-plane-o"></i> Unete </a></div>
              		</div>
              	</div>
            </div>
        </div>
@endforeach

       

      

        
            </div>
        </div>
        <!-- #Item 1 -->

        
        <!-- #Item 1 -->
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon-chevron-left"><i class="fa fa-angle-left fa-3x"></i></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon-chevron-right"><i class="fa fa-angle-right fa-3x"></i></span></a>
   

    </div>









	
	@yield('js')

    {!!Html::script('digitalagency/assets/jquery.js');!!}
	{!!Html::script('digitalagency/assets/bootstrap/js/bootstrap.js');!!}
	{!!Html::script('digitalagency/assets/wow/wow.min.js');!!}
	{!!Html::script('digitalagency/assets/mobile/touchSwipe.min.js');!!}
	{!!Html::script('digitalagency/assets/respond/respond.js');!!}
	{!!Html::script('digitalagency/assets/gallery/jquery.blueimp-gallery.min.js');!!}
	{!!Html::script('digitalagency/assets/scrip.js');!!}
	{!!Html::script('digitalagency/assets/conf.js');!!}
</body>

</html>