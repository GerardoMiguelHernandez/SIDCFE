@extends('cfe.main')
@section('css')
@endsection

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

  <div class="row">
      <ol class="breadcrumb">
        <li><a href="{{('/metas')}}"><i class="material-icons blue600">flag</i></a></li>
        <li class="active">Metas</li>
      </ol>
  </div>
  <div class="row">

      <div class="col-lg-10 col-xs-12 col-md-10">
        <h2 class="page-header">{{$ar}}</h2>
      </div>
  </div>

                      <!--ENERO-->

      <div class="col-xs-12 col-md-6 col-lg-4">
        <div class="panel panel-teal panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-4 widget-left">
              <i class="material-icons iconfont3">equalizer</i>
            </div>
            <div class="col-sm-5 col-lg-6 widget-down">
            <div class="text-info">ENERO</div>
            @if(!$eneroReal)
              @if(!$eneroProgramado)
                <div class="text-warning">Programados: 0</div>
                <div class="text-warning">Reales: 0</div>
                <div class="text-warning">0%</div>
              @else
                <div class="text-warning">Programados: {{$eneroProgramado->meta}}</div>
                <div class="text-warning">Reales: 0</div>
                <div class="text-warning">0%</div>
              @endif  
            @else
              @if(!$eneroProgramado)
                <div class="text-warning">Programados: 0</div>
                <div class="text-warning">Reales: {{$eneroReal->numero}}</div>
                <div class="text-warning">0%</div>
              @else
                <div class="text-warning">Programados: {{$eneroProgramado->meta}}</div>
                <div class="text-warning">Reales: {{$eneroReal->numero}}</div>
                <div class="text-warning">{{number_format($porcientoenero,2)}}%</div>
              @endif
            @endif
            </div>
          </div>
        </div>
      </div>

                <!--FIN ENERO-->

                                      <!--FEBRERO-->

      <div class="col-xs-12 col-md-6 col-lg-4">
        <div class="panel panel-teal panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-4 widget-left">
              <i class="material-icons iconfont3">equalizer</i>
            </div>
            <div class="col-sm-5 col-lg-6 widget-down">
            <div class="text-info">FEBRERO</div>
            @if(!$febreroReal)
              @if(!$febreroProgramado)
                <div class="text-warning">Programados: 0</div>
                <div class="text-warning">Reales: 0</div>
                <div class="text-warning">0%</div>
              @else
                <div class="text-warning">Programados: {{$febreroProgramado->meta}}</div>
                <div class="text-warning">Reales: 0</div>
                <div class="text-warning">0%</div>
              @endif  
            @else
              @if(!$febreroProgramado)
                <div class="text-warning">Programados: 0</div>
                <div class="text-warning">Reales: {{$febreroReal->numero}}</div>
                <div class="text-warning">0%</div>
              @else
                <div class="text-warning">Programados: {{$febreroProgramado->meta}}</div>
                <div class="text-warning">Reales: {{$febreroReal->numero}}</div>
                <div class="text-warning">{{number_format($porcientofebrero,2)}}%</div>
              @endif
            @endif
            </div>
          </div>
        </div>
      </div>

                <!--FIN FEBRERO-->

                                      <!--MARZO-->

      <div class="col-xs-12 col-md-6 col-lg-4">
        <div class="panel panel-teal panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-4 widget-left">
              <i class="material-icons iconfont3">equalizer</i>
            </div>
            <div class="col-sm-5 col-lg-6 widget-down">
            <div class="text-info">MARZO</div>
            @if(!$marzoReal)
              @if(!$marzoProgramado)
                <div class="text-warning">Programados: 0</div>
                <div class="text-warning">Reales: 0</div>
                <div class="text-warning">0%</div>
              @else
                <div class="text-warning">Programados: {{$marzoProgramado->meta}}</div>
                <div class="text-warning">Reales: 0</div>
                <div class="text-warning">0%</div>
              @endif  
            @else
              @if(!$marzoProgramado)
                <div class="text-warning">Programados: 0</div>
                <div class="text-warning">Reales: {{$marzoReal->numero}}</div>
                <div class="text-warning">0%</div>
              @else
                <div class="text-warning">Programados: {{$marzoProgramado->meta}}</div>
                <div class="text-warning">Reales: {{$marzoReal->numero}}</div>
                <div class="text-warning">{{number_format($porcientomarzo,2)}}%</div>
              @endif
            @endif
            </div>
          </div>
        </div>
      </div>

                <!--FIN MARZO-->

                                      <!--ABRIL-->

      <div class="col-xs-12 col-md-6 col-lg-4">
        <div class="panel panel-teal panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-4 widget-left">
              <i class="material-icons iconfont3">equalizer</i>
            </div>
            <div class="col-sm-5 col-lg-6 widget-down">
            <div class="text-info">ABRIL</div>
            @if(!$abrilReal)
              @if(!$abrilProgramado)
                <div class="text-warning">Programados: 0</div>
                <div class="text-warning">Reales: 0</div>
                <div class="text-warning">0%</div>
              @else
                <div class="text-warning">Programados: {{$abrilProgramado->meta}}</div>
                <div class="text-warning">Reales: 0</div>
                <div class="text-warning">0%</div>
              @endif  
            @else
              @if(!$abrilProgramado)
                <div class="text-warning">Programados: 0</div>
                <div class="text-warning">Reales: {{$abrilReal->numero}}</div>
                <div class="text-warning">0%</div>
              @else
                <div class="text-warning">Programados: {{$abrilProgramado->meta}}</div>
                <div class="text-warning">Reales: {{$abrilReal->numero}}</div>
                <div class="text-warning">{{number_format($porcientoabril,2)}}%</div>
              @endif
            @endif
            </div>
          </div>
        </div>
      </div>

                <!--FIN ABRIL-->

                                      <!--MAYO-->

      <div class="col-xs-12 col-md-6 col-lg-4">
        <div class="panel panel-teal panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-4 widget-left">
              <i class="material-icons iconfont3">equalizer</i>
            </div>
            <div class="col-sm-5 col-lg-6 widget-down">
            <div class="text-info">MAYO</div>
            @if(!$mayoReal)
              @if(!$mayoProgramado)
                <div class="text-warning">Programados: 0</div>
                <div class="text-warning">Reales: 0</div>
                <div class="text-warning">0%</div>
              @else
                <div class="text-warning">Programados: {{$mayoProgramado->meta}}</div>
                <div class="text-warning">Reales: 0</div>
                <div class="text-warning">0%</div>
              @endif  
            @else
              @if(!$mayoProgramado)
                <div class="text-warning">Programados: 0</div>
                <div class="text-warning">Reales: {{$mayoReal->numero}}</div>
                <div class="text-warning">0%</div>
              @else
                <div class="text-warning">Programados: {{$mayoProgramado->meta}}</div>
                <div class="text-warning">Reales: {{$mayoReal->numero}}</div>
                <div class="text-warning">{{number_format($porcientomayo,2)}}%</div>
              @endif
            @endif
            </div>
          </div>
        </div>
      </div>

                <!--FIN MAYO-->

                                      <!--JUNIO-->

      <div class="col-xs-12 col-md-6 col-lg-4">
        <div class="panel panel-teal panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-4 widget-left">
              <i class="material-icons iconfont3">equalizer</i>
            </div>
            <div class="col-sm-5 col-lg-6 widget-down">
            <div class="text-info">JUNIO</div>
            @if(!$junioReal)
              @if(!$junioProgramado)
                <div class="text-warning">Programados: 0</div>
                <div class="text-warning">Reales: 0</div>
                <div class="text-warning">0%</div>
              @else
                <div class="text-warning">Programados: {{$junioProgramado->meta}}</div>
                <div class="text-warning">Reales: 0</div>
                <div class="text-warning">0%</div>
              @endif  
            @else
              @if(!$junioProgramado)
                <div class="text-warning">Programados: 0</div>
                <div class="text-warning">Reales: {{$junioReal->numero}}</div>
                <div class="text-warning">0%</div>
              @else
                <div class="text-warning">Programados: {{$junioProgramado->meta}}</div>
                <div class="text-warning">Reales: {{$junioReal->numero}}</div>
                <div class="text-warning">{{number_format($porcientojunio,2)}}%</div>
              @endif
            @endif
            </div>
          </div>
        </div>
      </div>

                <!--FIN JUNIO-->

                                      <!--JULIO-->

      <div class="col-xs-12 col-md-6 col-lg-4">
        <div class="panel panel-teal panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-4 widget-left">
              <i class="material-icons iconfont3">equalizer</i>
            </div>
            <div class="col-sm-5 col-lg-6 widget-down">
            <div class="text-info">JULIO</div>
            @if(!$julioReal)
              @if(!$julioProgramado)
                <div class="text-warning">Programados: 0</div>
                <div class="text-warning">Reales: 0</div>
                <div class="text-warning">0%</div>
              @else
                <div class="text-warning">Programados: {{$julioProgramado->meta}}</div>
                <div class="text-warning">Reales: 0</div>
                <div class="text-warning">0%</div>
              @endif  
            @else
              @if(!$julioProgramado)
                <div class="text-warning">Programados: 0</div>
                <div class="text-warning">Reales: {{$julioReal->numero}}</div>
                <div class="text-warning">0%</div>
              @else
                <div class="text-warning">Programados: {{$julioProgramado->meta}}</div>
                <div class="text-warning">Reales: {{$julioReal->numero}}</div>
                <div class="text-warning">{{number_format($porcientojulio,2)}}%</div>
              @endif
            @endif
            </div>
          </div>
        </div>
      </div>

                <!--FIN JULIO-->

                                      <!--AGOSTO-->

      <div class="col-xs-12 col-md-6 col-lg-4">
        <div class="panel panel-teal panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-4 widget-left">
              <i class="material-icons iconfont3">equalizer</i>
            </div>
            <div class="col-sm-5 col-lg-6 widget-down">
            <div class="text-info">AGOSTO</div>
            @if(!$agostoReal)
              @if(!$agostoProgramado)
                <div class="text-warning">Programados: 0</div>
                <div class="text-warning">Reales: 0</div>
                <div class="text-warning">0%</div>
              @else
                <div class="text-warning">Programados: {{$agostoProgramado->meta}}</div>
                <div class="text-warning">Reales: 0</div>
                <div class="text-warning">0%</div>
              @endif  
            @else
              @if(!$agostoProgramado)
                <div class="text-warning">Programados: 0</div>
                <div class="text-warning">Reales: {{$agostoReal->numero}}</div>
                <div class="text-warning">0%</div>
              @else
                <div class="text-warning">Programados: {{$agostoProgramado->meta}}</div>
                <div class="text-warning">Reales: {{$agostoReal->numero}}</div>
                <div class="text-warning">{{number_format($porcientoagosto,2)}}%</div>
              @endif
            @endif
            </div>
          </div>
        </div>
      </div>

                <!--FIN AGOSTO-->

                                      <!--SEPTIEMBRE-->

      <div class="col-xs-12 col-md-6 col-lg-4">
        <div class="panel panel-teal panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-4 widget-left">
              <i class="material-icons iconfont3">equalizer</i>
            </div>
            <div class="col-sm-5 col-lg-6 widget-down">
            <div class="text-info">SEMPTIEMBRE</div>
            @if(!$septiembreReal)
              @if(!$septiembreProgramado)
                <div class="text-warning">Programados: 0</div>
                <div class="text-warning">Reales: 0</div>
                <div class="text-warning">0%</div>
              @else
                <div class="text-warning">Programados: {{$septiembreProgramado->meta}}</div>
                <div class="text-warning">Reales: 0</div>
                <div class="text-warning">0%</div>
              @endif  
            @else
              @if(!$septiembreProgramado)
                <div class="text-warning">Programados: 0</div>
                <div class="text-warning">Reales: {{$septiembreReal->numero}}</div>
                <div class="text-warning">0%</div>
              @else
                <div class="text-warning">Programados: {{$septiembreProgramado->meta}}</div>
                <div class="text-warning">Reales: {{$septiembreReal->numero}}</div>
                <div class="text-warning">{{number_format($porcientoseptiembre,2)}}%</div>
              @endif
            @endif
            </div>
          </div>
        </div>
      </div>

                <!--FIN SEPTIEMBRE-->

                                      <!--OCTUBRE-->

      <div class="col-xs-12 col-md-6 col-lg-4">
        <div class="panel panel-teal panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-4 widget-left">
              <i class="material-icons iconfont3">equalizer</i>
            </div>
            <div class="col-sm-5 col-lg-6 widget-down">
            <div class="text-info">OCTUBRE</div>
            @if(!$octubreReal)
              @if(!$octubreProgramado)
                <div class="text-warning">Programados: 0</div>
                <div class="text-warning">Reales: 0</div>
                <div class="text-warning">0%</div>
              @else
                <div class="text-warning">Programados: {{$octubreProgramado->meta}}</div>
                <div class="text-warning">Reales: 0</div>
                <div class="text-warning">0%</div>
              @endif  
            @else
              @if(!$octubreProgramado)
                <div class="text-warning">Programados: 0</div>
                <div class="text-warning">Reales: {{$octubreReal->numero}}</div>
                <div class="text-warning">0%</div>
              @else
                <div class="text-warning">Programados: {{$octubreProgramado->meta}}</div>
                <div class="text-warning">Reales: {{$octubreReal->numero}}</div>
                <div class="text-warning">{{number_format($porcientooctubre,2)}}%</div>
              @endif
            @endif
            </div>
          </div>
        </div>
      </div>

                <!--FIN OCTUBRE-->

                                      <!--NOVIEMBRE-->

      <div class="col-xs-12 col-md-6 col-lg-4">
        <div class="panel panel-teal panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-4 widget-left">
              <i class="material-icons iconfont3">equalizer</i>
            </div>
            <div class="col-sm-5 col-lg-6 widget-down">
            <div class="text-info">NOVIEMBRE</div>
            @if(!$noviembreReal)
              @if(!$noviembreProgramado)
                <div class="text-warning">Programados: 0</div>
                <div class="text-warning">Reales: 0</div>
                <div class="text-warning">0%</div>
              @else
                <div class="text-warning">Programados: {{$noviembreProgramado->meta}}</div>
                <div class="text-warning">Reales: 0</div>
                <div class="text-warning">0%</div>
              @endif  
            @else
              @if(!$noviembreProgramado)
                <div class="text-warning">Programados: 0</div>
                <div class="text-warning">Reales: {{$noviembreReal->numero}}</div>
                <div class="text-warning">0%</div>
              @else
                <div class="text-warning">Programados: {{$noviembreProgramado->meta}}</div>
                <div class="text-warning">Reales: {{$noviembreReal->numero}}</div>
                <div class="text-warning">{{number_format($porcientonoviembre,2)}}%</div>
              @endif
            @endif
            </div>
          </div>
        </div>
      </div>

                <!--FIN NOVIEMBRE-->

                                      <!--DICIEMBRE-->

      <div class="col-xs-12 col-md-6 col-lg-4">
        <div class="panel panel-teal panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-4 widget-left">
              <i class="material-icons iconfont3">equalizer</i>
            </div>
            <div class="col-sm-5 col-lg-6 widget-down">
            <div class="text-info">DICIEMBRE</div>
            @if(!$diciembreReal)
              @if(!$diciembreProgramado)
                <div class="text-warning">Programados: 0</div>
                <div class="text-warning">Reales: 0</div>
                <div class="text-warning">0%</div>
              @else
                <div class="text-warning">Programados: {{$diciembreProgramado->meta}}</div>
                <div class="text-warning">Reales: 0</div>
                <div class="text-warning">0%</div>
              @endif  
            @else
              @if(!$diciembreProgramado)
                <div class="text-warning">Programados: 0</div>
                <div class="text-warning">Reales: {{$diciembreReal->numero}}</div>
                <div class="text-warning">0%</div>
              @else
                <div class="text-warning">Programados: {{$diciembreProgramado->meta}}</div>
                <div class="text-warning">Reales: {{$diciembreReal->numero}}</div>
                <div class="text-warning">{{number_format($porcientodiciembre,2)}}%</div>
              @endif
            @endif
            </div>
          </div>
        </div>
      </div>

                <!--FIN DICIEMBRE-->


  <div class="row">

      <div class="col-lg-10 col-xs-12 col-md-10">
        @if(!$totalprogramado->total)
          <h4 class="page-header">Total Programados: 0</h4>
        @else
          <h4 class="page-header">Total Programados: {{$totalprogramado->total}}</h4>
        @endif

        @if(!$totalreal->numero)
          <h4 class="page-header">Total Reales: 0</h4>
        @else
          <h4 class="page-header">Total Reales: {{$totalreal->numero}}</h4>
        @endif
        <h4 class="page-header">Porcentaje General: {{number_format($porcientototal,2)}}%</h4>
      </div>
  </div>

</div>
     
