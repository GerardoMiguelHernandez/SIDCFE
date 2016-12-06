@extends('cfe.main')
@section('css')
{!! Html::style('js/highcharts/css/highcharts.css'); !!}
@endsection
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><i class="material-icons blue600">home</i></a></li>
				<li class="active">Home</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Sistema Integral</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-blue panel-widget ">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<i class="material-icons iconfont3">settings</i>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">120</div>
							<div class="text-muted">Maniobras</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-orange panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<i class="material-icons iconfont3">work</i>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">52</div>
							<div class="text-muted">Colaboradores</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-teal panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<i class="material-icons iconfont3">place_ubication</i>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">24</div>
							<div class="text-muted">Areas</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-red panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<i class="material-icons iconfont3">perm_identity</i>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">25.2k</div>
							<div class="text-muted">Usuarios</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		
		<div class="row">
		<div class="col-lg-6">
		<div id="container">
			

		</div>
		</div>
			<div class="col-lg-6">
				<div class="panel panel-success">
					<div class="panel-heading">Site Traffic Overview</div>
					<div class="panel-body">
						
<div id="contenedor" style="height: 300px;">
      
    </div>


					</div>
				</div>
			</div>
		</div><!--/.row-->
		 
		</div>

	@endsection

	@section('js')
{!! Html::script('js/jquery.min.js'); !!}
{!! Html::script('js/highcharts/js/highcharts.js'); !!}
{!! Html::script('js/highcharts/js/highcharts-3d.js'); !!}
{!! Html::script('js/highcharts/js/modules/exporting.js'); !!}

{!! Html::script('js/grafica2HC.js'); !!}
<script type="text/javascript">
	
	$(document).ready(function () {




$.getJSON( "{{route('colaboradorcontroller.create')}}", function(json) {
	 console.log(json);


	   Highcharts.chart('contenedor', {
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        title: {
            text: 'Browser market shares at a specific website, 2014'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Browser share',
            data: 
                [
                ['zimatlan', json.zimatlan],
                ['Ocotlan', json.ocotlan],
                ['Etla', json.etla],
                ['Etla', json.ixtlan],
                ['Etla', json.miahuatlan],
                ['Etla', json.oaxaca],
               
            ]
            
        }]
    });

  })
  .done(function() {
    alert( "También sirve para saber que funcionó" );
  })
  .fail(function() {
    alert( "Ha ocurrido un error" );
  });


});
</script>
<
	@endsection