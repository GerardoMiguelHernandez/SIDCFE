<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title','Home')</title>
   {!!Html::style('lumino/css/bootstrap.min.css');!!}
   {!!Html::style('css/font-awesome.css');!!}
   {!!Html::style('lumino/css/datepicker3.css');!!}
   {!!Html::style('lumino/css/styles.css');!!}
   {!!Html::style('css/index.css');!!}
   {!!Html::script('lumnio/js/lumino.glyphs.js');!!}
  
   

	@yield('css')
</head>
<body>
<header>
@include('cfe.partials.nav')	

</header>


	
		<main>
      @yield('content')
	
</main>






	@yield('js')

    {!!Html::script('lumino/js/jquery-1.11.1.min.js');!!}
    {!!Html::script('lumino/js/bootstrap.min.js');!!}
	{!!Html::script('lumino/js/chart-min.js');!!}
	{!!Html::script('lumino/js/chart-data.js');!!}
	{!!Html::script('lumino/js/easypiechart.js');!!}
	{!!Html::script('lumino/js/easypiechart-data.js');!!}
	{!!Html::script('lumino/js/bootstrap-datepicker.js');!!}
	<script type="text/javascript">
		
		
						    $(function () {
						        $('#hover, #striped, #condensed').click(function () {
						            var classes = 'table';
						
						            if ($('#hover').prop('checked')) {
						                classes += ' table-hover';
						            }
						            if ($('#condensed').prop('checked')) {
						                classes += ' table-condensed';
						            }
						            $('#table-style').bootstrapTable('destroy')
						                .bootstrapTable({
						                    classes: classes,
						                    striped: $('#striped').prop('checked')
						                });
						        });
						    });
						
						    function rowStyle(row, index) {
						        var classes = ['active', 'success', 'info', 'warning', 'danger'];
						
						        if (index % 2 === 0 && index / 2 < classes.length) {
						            return {
						                classes: classes[index / 2]
						            };
						        }
						        return {};
						    }
						
	</script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>
		<script type="text/javascript">
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>