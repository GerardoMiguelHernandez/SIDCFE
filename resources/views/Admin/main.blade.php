 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title','Home')</title>
{!! Html::style('css/index.css'); !!}
{!! Html::style('css/estilo.css'); !!}
{!! Html::style('css/material.min.css'); !!}



@yield('css')
</head>
<body>
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

@include('Admin.partials.nav')
<main class="mdl-layout__content">
<div class="mdl-grid">
    <div class="page-content">
    	
    	@yield('content')
    </div>
    </div>
  </main>

  <footer>
  	
  	@include('Admin.partials.footer')
  </footer>

{!! Html::script('js/jquery.min.js'); !!}
{!! Html::script('js/material.min.js'); !!}
{!! Html::script('js/materialize.js'); !!}
@yield('js')
	</div>
</body>
</html>