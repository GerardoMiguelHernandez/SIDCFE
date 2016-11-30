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
    </div><!--/.row-->
<div class="row">
			<div class="col-lg-10">
				<h1 class="page-header">Maniobras y Colaboradores</h1>
			</div>
      <div class="col-lg-2">
        <a href="" data-toggle="modal" data-target="#mymodal3"><button type="button" class="btn btn-primary" style="border-radius: 100%; width: 50px;height: 50px;"><i class="material-icons">add</i></button> </a>
      </div>
		</div>
    <!-- modal para subir el archivo -->

    <div class="modal fade" id="mymodal3" tabindex="-1" role="dialog" arialabelledby="mymodallabel">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" arialabel="close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title">Subir archivo</h4>
    </div>
    <div class="modal-body">
      

    {!! Form::open(['route'=>'colaboradorcontroller.store','files'=>'true','method'=>'POST'])!!}
          {{ csrf_field() }}
                           
           
             <label class="control-label">Select File</label>
    <input id="file" name="file" type="file" required>
    <button class="btn btn-primary">Guardar</button>
        

        {!!Form::close()!!}
     

    </div>
    
  </div>
</div>
  
</div>
    <!--  fin de modal para subir el archivo-->
<!-- modal para filtrar por maniobras-->
<div class="modal fade" id="mymodal2" tabindex="-1" role="dialog" arialabelledby="mymodallabel">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" arialabel="close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title">Buscar</h4>
    </div>
    <div class="modal-body">
      

      <ul class="list-group">
      @foreach($areas as $maniobras)
        <li class="list-group-item">
        <a href="{{route('colaborador.maniobra',$maniobras->maniobra)}}">
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
<!-- fin de modal para filtrar por maniobras-->

<!-- modal para filtrar por area -->
<div class="modal fade" id="mymodalarea" tabindex="-1" role="dialog" arialabelledby="mymodallabel">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" arialabel="close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title">Buscar</h4>
    </div>
    <div class="modal-body">
      

      <ul class="list-group">
      @foreach($zonas as $areas)
        <li class="list-group-item">
        <a href="{{route('colaborador.area',$areas->area)}}">
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
<!-- fin de modal para filtrar por area-->

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
              <a href=""data-toggle="modal" data-target="#mymodalarea"><i class="material-icons iconfont3">work</i></a>
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
              <i class="material-icons iconfont3">place_ubication</i>
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
    </div><!--/.row-->

    <div class="row">
  
  <div class="col-xs-12 col-sm-12 col-lg-3 col-lg-offset-9">
  
<!--
    <div class="row">
    <div class="col-lg-6 col-lg-offset-6">
       <a href="" data-toggle="modal" data-target="#mymodal1"><i class="material-icons blue600">add</i></a>
</div></div> -->

<div class="modal fade" id="mymodal1" tabindex="-1" role="dialog" arialabelledby="mymodallabel">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" arialabel="close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title">Buscar</h4>
    </div>
    <div class="modal-body">
      <form action="{{route('colaboradorcontroller.index')}}" method="GET">
        
                           
                            
                                <input id="input_buscar" type="text" class="form-control" name="input_buscar" required>

                                
                            
                        

      </form>

    </div>
    <div class="modal-footer">
      <button class="btn btn-default" data-dismiss="modal">close</button>
      <button class="btn btn-primary" type="submit">save changes</button>
    </div>
  </div>
</div>
  
</div>
    </div>
    </div>



    <div class="row">
    <div class="col-lg-6">
    <div id="container1">
      
      
    </div>
    </div>
      <div class="col-lg-6">
        <div class="panel panel-success">
          <div class="panel-heading">Grafica de EValuaciones</div>
          <div class="panel-body">
            
<div id="contenedor1" style="height: 300px;">
      
    </div>


          </div>
        </div>
      </div>
    </div><!--/.row-->

<!--
<div class="table-responsive table-condensed table-hover">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr class="info">
              <th>Zona</th>
              <th>Area</th>
              <th>RPE</th>
              <th>Nombre</th>
              <th>Fecha</th>
              <th>Maniobra</th>
              <th>Calificacion</th>
              
            </tr>
          </thead>
          <tbody>
            @foreach($maniobras1 as $maniobra)
              <tr>
     
                
                <td>{{$maniobra->zona}}</td>
                <td>{{$maniobra->area}}</td>
                <td>{{$maniobra->RPE}}</td>
                <td>{{$maniobra->nombre}}</td>
                <td>{{$maniobra->fecha_evaluacion}}</td>
                <td>{{$maniobra->maniobra}}</td>
                <td>{{$maniobra->calificacion}}</td>
                <td>
                                    <a href="#" class="btn btn-primary">
                                        <i class="fa fa-pencil-square-o"></i>
                                    </a>
                                </td>
                                <td>
                                  <a href="#" class="btn btn-danger">
                                        <i class="fa fa-trash-o"></i>
                                    </a>  
                                </td>
              </tr>
               
              @endforeach 
            
          </tbody>
        </table>
      </div> -->




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
            enabled: false
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
