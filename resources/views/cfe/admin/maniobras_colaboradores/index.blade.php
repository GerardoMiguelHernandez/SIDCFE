@extends('cfe.main')
@section('css')
{!! Html::style('js/highcharts/css/highcharts.css'); !!}
{!! Html::style('css/jasny-bootstrap.css'); !!}
@endsection
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">



<div class="row">
      <ol class="breadcrumb">
        <li><a href="#"><i class="material-icons blue600">settings</i></a></li>
        <li class="active">Home</li>
      </ol>
    </div>
<div class="row">
			<div class="col-lg-10">
				<h1 class="page-header">Maniobras y Colaboradores</h1>
			</div>
      
		</div>

    
@php

Carbon\Carbon::setLocale('es');
$mytime = Carbon\Carbon::now();
echo $mytime->toDayDateTimeString();  

@endphp
  
    
<div class="modal fade" id="mymodal2" tabindex="-1" role="dialog" arialabelledby="mymodallabel">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" arialabel="close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title">Maniobras</h4>
    </div>
    <div class="modal-body">
      

      <ul class="list-group">
      @foreach($areas as $maniobras)
        <li class="list-group-item">
        <a href="{{route('maniobra.filtro',$maniobras->maniobra)}}">
        {{$maniobras->maniobra}} <i class="material-icons blue600">start</i></a>
        </li>
        @endforeach
      </ul>

    </div>
    <div class="modal-footer">
      <button class="btn btn-default" data-dismiss="modal">close</button>
      <button class="btn btn-primary" type="submit">save changes</button>
    </div>
  </div>
</div>
  
</div>

<div class="modal fade" id="mymodalarea" tabindex="-1" role="dialog" arialabelledby="mymodallabel">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" arialabel="close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title">Areas</h4>
    </div>
    <div class="modal-body">
      

      <ul class="list-group">
      @foreach($zonas as $areas)
        <li class="list-group-item">
        <a href="{{url('colaboradorcontroller/AreaDatos',$areas->area)}}">
        {{$areas->area}} <i class="material-icons blue600">start</i></a>
        </li>
        @endforeach
      </ul>

    </div>
    <div class="modal-footer">
      <button class="btn btn-default" data-dismiss="modal">close</button>
      <button class="btn btn-primary" type="submit">save changes</button>
    </div>
  </div>
</div>
  
</div>

<div class="row">
      <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-blue panel-widget ">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-5 widget-left">
              <a href=""data-toggle="modal" data-target="#mymodal2"><i class="material-icons purple600 iconfont3">settings</i></a>

            </div>
            <div class="col-sm-9 col-lg-7 widget-right">
              <div class="large">{{$count_maniobras}}</div>
              <div class="text-muted">Maniobras</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-orange panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-5 widget-left">
              <a href=""data-toggle="modal" data-target="#mymodalarea"><i class="material-icons iconfont3">place_ubication</i></a>
            </div>
            <div class="col-sm-9 col-lg-7 widget-right">
              <div class="large">{{$count_areas}}</div>
              <div class="text-muted">Areas</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-teal panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-5 widget-left">
              <i class="material-icons iconfont3">school</i>
            </div>
            <div class="col-sm-9 col-lg-7 widget-right">
              <div class="large">{{$count_evaluaciones}}</div>
              <div class="text-muted">Evaluciones</div>
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
              <div class="large">{{$count_colaboradores}}</div>
              <div class="text-muted">Colaboradores</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
  
  <div class="col-xs-12 col-sm-12 col-lg-3 col-lg-offset-9">
  



    </div>
    </div>



    <div class="row">
    <div class="col-lg-6">
    <div id="container1">
      
      
    </div>
    </div>
      <div class="col-lg-6">
        <div class="panel panel-success">
          <div class="panel-heading">Grafica de Riesgo</div>
          <div class="panel-body">
            
<div id="contenedor1" style="height: 300px;">
      
    </div>


          </div>
        </div>
      </div>
    </div>





<div class="row">
<div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">

</div>
</div> 
</div> 
@endsection

@section('js')
{!! Html::script('js/jquery.min.js'); !!}

{!! Html::script('js/highcharts/js/highcharts.js'); !!}
{!! Html::script('js/highcharts/js/highcharts-3d.js'); !!}
{!! Html::script('js/highcharts/js/modules/exporting.js'); !!}
{!! Html::script('js/jasny-bootstrap.js'); !!}

<script type="text/javascript">
  

  $(function () {
    
    Highcharts.chart('container1', {
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        title: {
            text: 'Evaluaciones Distribuidas por Area'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.y}</b>: <b>{point.percentage:.1f}%</b>'
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
            name: 'Area',
            data: [
                ['Etla', {{$contador['etla']}}],
                ['Ixtlan',{{$contador['ixtlan']}} ],
                ['Ocotlan', {{$contador['ocotlan']}}],
                ['Miahuatlan',{{$contador['miahuatlan']}} ],
                ['Tlacolula',{{$contador['tlacolula']}} ],
                ['Temporales',{{$contador['temporales']}} ],
                {
                    name: 'Zimatlan',
                    y: {{$contador['zimatlan']}}
                    
                },
                 {
                    name: 'Oaxaca',
                    y: {{$contador['oaxaca']}},
                    sliced: true,
                    selected: true
                }
                
            ]
        }]
    });
});
</script>
<script type="text/javascript">
 
$(function () {
    Highcharts.chart('contenedor1', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Colaboradores de Cada area'
        },
        subtitle: {
            text: 'Datos actualizados'
        },
        xAxis: {
            type: 'category',
            labels: {
                rotation: -45,
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'No. Colaboradores'
            }
        },
        legend: {
            enabled: true
        },
        tooltip: {
            pointFormat: 'Population in 2008: <b>{point.y} Colaboradores</b>'
        },
        series: [{
            name: 'Population',
            data: [
                ['Etla', {{$contador['etla']}}],
                ['Ixtlan',{{$contador['ixtlan']}} ],
                ['Ocotlan', {{$contador['ocotlan']}}],
                ['Miahuatlan',{{$contador['miahuatlan']}} ],
                ['Tlacolula',{{$contador['tlacolula']}} ],
                ['Temporales',{{$contador['temporales']}} ],
                {
                    name: 'Zimatlan',
                    y: {{$contador['zimatlan']}}
                    
                },
                 {
                    name: 'Oaxaca',
                    y: {{$contador['oaxaca']}},
                    sliced: true,
                    selected: true
                }
                
            ],
            dataLabels: {
                enabled: true,
                rotation: -90,
                color: '#FFFFFF',
                align: 'right',
                format: '{point.y:.1f}', // one decimal
                y: 10, // 10 pixels down from the top
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        }]
    });
});

</script>
@endsection
