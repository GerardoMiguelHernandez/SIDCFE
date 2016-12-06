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
@include('sidcfe.partials.nav')
<div class="container-fluid">

@yield('content')
</div>





@include('sidcfe.partials.footer')	
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