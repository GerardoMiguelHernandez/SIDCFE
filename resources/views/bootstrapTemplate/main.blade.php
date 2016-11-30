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
        <div class="item active">
          <img src="digitalagency/images/back1.jpg" alt="banner">          
            <div class="carousel-caption">
            	<div class="caption-wrapper">
            		<div class="caption-info">
            		<img src="digitalagency/images/cfe.png" class="animated bounceInUp" alt="logo">
              		<h2 class="animated bounceInLeft">Sistema Integral de Desempe&ntilde;o</h2>
              		<p class="animated bounceInRight">Departamento de Informatica</p>
              		<div class="scroll animated fadeInUp"><a href="#works" class="btn btn-default"><i class="fa fa-flask"></i>  View Project</a> <a href="#contact" class="btn btn-default"><i class="fa fa-paper-plane-o"></i> Start Your Project</a></div>
              		</div>
              	</div>
            </div>
        </div>
        <!-- #Item 1 -->

        <!-- Item 1 -->
       <div class="item">
          <img src="digitalagency/images/back4.jpg" alt="banner">          
             <div class="carousel-caption">
            	<div class="caption-wrapper">
            		<div class="caption-info">
             <img src="digitalagency/images/cfe.png" class="animated bounceInUp" alt="logo">
                  <h2 class="animated bounceInLeft">Sistema Integral de Desempe&ntilde;o</h2>
                  <p class="animated bounceInRight">Departamento de Informatica CFE</p>
                  <div class="scroll animated fadeInUp"><a href="#works" class="btn btn-default"><i class="fa fa-flask"></i>  View Project</a> <a href="#contact" class="btn btn-default"><i class="fa fa-paper-plane-o"></i> Start Your Project</a></div>
                  </div>
                </div>
            </div>
        </div>
        <!-- #Item 1 -->

        <!-- Item 1 -->
        <div class="item">
          <img src="digitalagency/images/back4.jpg" alt="banner">          
             <div class="carousel-caption">
            	<div class="caption-wrapper">
            		<div class="caption-info">
             <img src="digitalagency/images/cfe.png" class="animated bounceInUp" alt="logo">
                  <h2 class="animated bounceInLeft">Sistema Integral de Desempe&ntilde;o</h2>
                  <p class="animated bounceInRight">Departamento de Informatica CFE</p>
                  <div class="scroll animated fadeInUp"><a href="#works" class="btn btn-default"><i class="fa fa-flask"></i>  View Project</a> <a href="#contact" class="btn btn-default"><i class="fa fa-paper-plane-o"></i> Start Your Project</a></div>
                  </div>
                </div>
            </div>
        </div>
        <!-- #Item 1 -->

        <!-- Item 1 -->
        <div class="item">
          <img src="digitalagency/images/back4.jpg" alt="banner">          
             <div class="carousel-caption">
            	<div class="caption-wrapper">
            		<div class="caption-info">
             <img src="digitalagency/images/cfe.png" class="animated bounceInUp" alt="logo">
                  <h2 class="animated bounceInLeft">Sistema Integral de Desempe&ntilde;o</h2>
                  <p class="animated bounceInRight">Departamento de Informatica CFE</p>
                  <div class="scroll animated fadeInUp"><a href="#works" class="btn btn-default"><i class="fa fa-flask"></i>  View Project</a> <a href="#contact" class="btn btn-default"><i class="fa fa-paper-plane-o"></i> Start Your Project</a></div>
                  </div>
                </div>
            </div>
        </div>
        <!-- #Item 1 -->
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon-chevron-left"><i class="fa fa-angle-left fa-3x"></i></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon-chevron-right"><i class="fa fa-angle-right fa-3x"></i></span></a>
    </div>
<!-- #Slider Ends -->
</div>

<!--
<div class="row" style="padding-top: 50px;">
	
	<div class="col-xs-12 col-xs-12 col-md-4 col-lg-4">
	<div class="panel panel-primary">
		
		<div class="panel-heading">
			TITULO
		</div>
		<div class="panel-body">
		<img src="img/10.jpg" class="img-circle center-block" width="140" height="140">

		</div>
		
	</div>
	</div>
	<div class="col-xs-12 col-xs-12 col-md-4 col-lg-4">
		<div class="panel panel-primary">
		
		<div class="panel-heading">
			TITULO
		</div>
		<div class="panel-body">
		<img src="img/10.jpg" class="img-circle center-block" width="140" height="140">
		<p>
			asdfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff
		</p>
		</div>
		
	</div>
	</div>
	<div class="col-xs-12 col-xs-12 col-md-4 col-lg-4">
		<div class="panel panel-primary">
		
		<div class="panel-heading">
			TITULO
		</div>
		<div class="panel-body">
		<img src="img/10.jpg" class="img-circle center-block" width="140" height="140">
		<p>
			asdfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff
		</p>
		</div>
		
	</div>
	</div>
</div>  -->
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
</body>
</body>
</html>