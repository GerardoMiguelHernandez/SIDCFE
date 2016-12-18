@extends('cfe.main')
@section('css')
{!! Html::style('js/highcharts/css/highcharts.css'); !!}
@endsection

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="#"><i class="material-icons blue600">Estadisticas</i></a></li>
      <li class="active">Maniobras</li>
    </ol>
  </div>

    <!-- AREAS CON MAYOR Y MENOR MANIOBRAS REALIZADAS-->

  <div class="row">
    <div class="col-lg-12">
<<<<<<< HEAD
      <h2 class="page-header">Áreas de evaluaciones realizadas aprobadas (mayor y menor)</h2>
=======
      <h2 class="page-header block-center">Áreas de maniobras realizadas (mayor y menor)</h2>
>>>>>>> 8727cf1c692932b0c8f144041984bb178c2f1e7e
    </div>
  </div>
<div class="row">
      <div class="col-xs-12 col-md-6 col-lg-6">
        <div class="panel panel-blue panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-4 widget-left">
              <i class="material-icons iconfont2">assignment_turned_in</i>
            </div>
            <div class="col-sm-10 col-lg-8 widget-down">
            @if(!$max_area)
              <div class="text-warning">Ninguna maniobra realizada</div>
            @else
              <div class="text-info">ÁREA CON MAYOR EVALUACIONES
              REALIZADAS</div>
              <div class="text-warning">{{$max_area->area}}</div>
              <div class="text-success">Evaluaciones realizadas: {{$max_area->Numero}}</div>
            @endif
            </div>
          </div>
        </div>
      </div>

      <div class="col-xs-12 col-md-6 col-lg-6">
        <div class="panel panel-orange panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-4 widget-left">
              <i class="material-icons iconfont2">feedback</i>
            </div>
            <div class="col-sm-10 col-lg-8 widget-down">
            @if(!$min_area)
              <div class="text-warning">Ninguna maniobra realizada</div>
            @else
              <div class="text-info">ÁREA CON MENOR EVALUACIONES
              REALIZADAS</div>
              <div class="text-warning">{{$min_area->area}}</div>
              <div class="text-success">Evaluaciones realizadas: {{$min_area->Numero}}</div>
            @endif
            </div>
          </div>
        </div>
      </div>

            <!-- VALORES MAYORES POR AREA-->

  <div class="row">
    <div class="col-lg-12">
      <h2 class="page-header">Maniobra mayor realizada por área (Aprobadas)</h2>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6">
      <div id="container">
      </div>
    </div>
  </div>

      <div class="col-xs-12 col-md-6 col-lg-6">
        <div class="panel panel-teal panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-4 widget-left">
              <i class="material-icons iconfont3">store_mall_directory</i>
              <strong><i>Área Zimatlan</i></strong>
            </div>
            <div class="col-sm-10 col-lg-8 widget-down">
            @if(!$max_zimatlan)
              <div class="text-warning">Ninguna maniobra realizada</div>
              <div class="text-info">Realizados: 0</div>
            @else
              <div class="text-warning">{{$max_zimatlan->maniobra}}</div>
              <div class="text-info">Realizados: {{$max_zimatlan->numero}}</div>
            @endif
            </div>
          </div>
        </div>
      </div>

      <div class="col-xs-12 col-md-6 col-lg-6">
        <div class="panel panel-teal panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-4 widget-left">
              <i class="material-icons iconfont3">store_mall_directory</i>
              <strong><i>Área Elta</i></strong>
            </div>
            <div class="col-sm-10 col-lg-8 widget-down">
              @if(!$max_etla)
                <div class="text-warning">Ninguna maniobra realizada</div>
                <div class="text-info">Realizados: 0</div>
              @else
                <div class="text-warning">{{$max_etla->maniobra}}</div>
                <div class="text-info">Realizados: {{$max_etla->numero}}</div>
              @endif
            </div>
          </div>
        </div>
      </div>

            <div class="col-xs-12 col-md-6 col-lg-6">
        <div class="panel panel-teal panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-4 widget-left">
              <i class="material-icons iconfont3">store_mall_directory</i>
              <strong><i>Área Ocotlan</i></strong>
            </div>
            <div class="col-sm-10 col-lg-8 widget-down">
              @if(!$max_ocotlan)
                <div class="text-warning">Ninguna maniobra realizada</div>
                <div class="text-info">Realizados: 0</div>
              @else
                <div class="text-warning">{{$max_ocotlan->maniobra}}</div>
                <div class="text-info">Realizados: {{$max_ocotlan->numero}}</div>
              @endif
            </div>
          </div>
        </div>
      </div>

                  <div class="col-xs-12 col-md-6 col-lg-6">
        <div class="panel panel-teal panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-4 widget-left">
              <i class="material-icons iconfont3">store_mall_directory</i>
              <strong><i>Área Ixtlan</i></strong>
            </div>
            <div class="col-sm-10 col-lg-8 widget-down">
              @if(!$max_ixtlan)
                <div class="text-warning">Ninguna maniobra realizada</div>
                <div class="text-info">Realizados: 0</div>
              @else
                <div class="text-warning">{{$max_ixtlan->maniobra}}</div>
                <div class="text-info">Realizados: {{$max_ixtlan->numero}}</div>
              @endif
            </div>
          </div>
        </div>
      </div>

            <div class="col-xs-12 col-md-6 col-lg-6">
        <div class="panel panel-teal panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-4 widget-left">
              <i class="material-icons iconfont3">store_mall_directory</i>
              <strong><i>Área Miahuatlan</i></strong>
            </div>
            <div class="col-sm-10 col-lg-8 widget-down">
              @if(!$max_miahuatlan)
                <div class="text-warning">Ninguna maniobra realizada</div>
                <div class="text-info">Realizados: 0</div>
              @else
                <div class="text-warning">{{$max_miahuatlan->maniobra}}</div>
                <div class="text-info">Realizados: {{$max_miahuatlan->numero}}</div>
              @endif
            </div>
          </div>
        </div>
      </div>

      <div class="col-xs-12 col-md-6 col-lg-6">
        <div class="panel panel-teal panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-4 widget-left">
              <i class="material-icons iconfont3">store_mall_directory</i>
              <strong><i>Área Tlacolula</i></strong>
            </div>
            <div class="col-sm-10 col-lg-8 widget-down">
              @if(!$max_tlacolula)
                <div class="text-warning">Ninguna maniobra realizada</div>
                <div class="text-info">Realizados: 0</div>
              @else
                <div class="text-warning">{{$max_tlacolula->maniobra}}</div>
                <div class="text-info">Realizados: {{$max_tlacolula->numero}}</div>
              @endif
            </div>
          </div>
        </div>
      </div>

      <div class="col-xs-12 col-md-6 col-lg-6">
        <div class="panel panel-teal panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-4 widget-left">
              <i class="material-icons iconfont3">store_mall_directory</i>
              <strong><i>Oaxaca</i></strong>
            </div>
            <div class="col-sm-10 col-lg-8 widget-down">
              @if(!$max_oaxaca)
                <div class="text-warning">Ninguna maniobra realizada</div>
                <div class="text-info">Realizados: 0</div>
              @else
                <div class="text-warning">{{$max_oaxaca->maniobra}}</div>
                <div class="text-info">Realizados: {{$max_oaxaca->numero}}</div>
              @endif
            </div>
          </div>
        </div>
      </div>

      <div class="col-xs-12 col-md-6 col-lg-6">
        <div class="panel panel-teal panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-4 widget-left">
              <i class="material-icons iconfont3">store_mall_directory</i>
              <strong><i>Temporales</i></strong>
            </div>
            <div class="col-sm-10 col-lg-8 widget-down">
            @if(!$max_temporales)
                <div class="text-warning">Ninguna maniobra realizada</div>
                <div class="text-info">Realizados: 0</div>
              @else
                <div class="text-warning">{{$max_temporales->maniobra}}</div>
                <div class="text-info">Realizados: {{$max_temporales->numero}}</div>
              @endif
            </div>
          </div>
        </div>
      </div>

      <!-- valores menores-->

  <div class="row">
    <div class="col-lg-12">
      <h2 class="page-header">Maniobra menor realizada por área (Aprobadas)</h2>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6">
      <div id="container">
      </div>
    </div>
  </div>

        <div class="col-xs-12 col-md-6 col-lg-6">
        <div class="panel panel-red panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-4 widget-left">
              <i class="material-icons iconfont3">store_mall_directory</i>
              <strong><i>Área Zimatlan</i></strong>
            </div>
            <div class="col-sm-10 col-lg-8 widget-down">
            @if(!$min_zimatlan)
              <div class="text-warning">Ninguna maniobra realizada</div>
              <div class="text-info">Realizados: 0</div>
            @else
              <div class="text-warning">{{$min_zimatlan->maniobra}}</div>
              <div class="text-info">Realizados: {{$min_zimatlan->Numero}}</div>
            @endif
            </div>
          </div>
        </div>
      </div>

      <div class="col-xs-12 col-md-6 col-lg-6">
        <div class="panel panel-red panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-4 widget-left">
              <i class="material-icons iconfont3">store_mall_directory</i>
              <strong><i>Área Elta</i></strong>
            </div>
            <div class="col-sm-10 col-lg-8 widget-down">
              @if(!$min_etla)
                <div class="text-warning">Ninguna maniobra realizada</div>
                <div class="text-info">Realizados: 0</div>
              @else
                <div class="text-warning">{{$min_etla->maniobra}}</div>
                <div class="text-info">Realizados: {{$min_etla->Numero}}</div>
              @endif
            </div>
          </div>
        </div>
      </div>

            <div class="col-xs-12 col-md-6 col-lg-6">
        <div class="panel panel-red panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-4 widget-left">
              <i class="material-icons iconfont3">store_mall_directory</i>
              <strong><i>Área Ocotlan</i></strong>
            </div>
            <div class="col-sm-10 col-lg-8 widget-down">
              @if(!$min_ocotlan)
                <div class="text-warning">Ninguna maniobra realizada</div>
                <div class="text-info">Realizados: 0</div>
              @else
                <div class="text-warning">{{$min_ocotlan->maniobra}}</div>
                <div class="text-info">Realizados: {{$min_ocotlan->Numero}}</div>
              @endif
            </div>
          </div>
        </div>
      </div>

                  <div class="col-xs-12 col-md-6 col-lg-6">
        <div class="panel panel-red panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-4 widget-left">
              <i class="material-icons iconfont3">store_mall_directory</i>
              <strong><i>Área Ixtlan</i></strong>
            </div>
            <div class="col-sm-10 col-lg-8 widget-down">
              @if(!$max_ixtlan)
                <div class="text-warning">Ninguna maniobra realizada</div>
                <div class="text-info">Realizados: 0</div>
              @else
                <div class="text-warning">{{$max_ixtlan->maniobra}}</div>
                <div class="text-info">Realizados: {{$max_ixtlan->numero}}</div>
              @endif
            </div>
          </div>
        </div>
      </div>

            <div class="col-xs-12 col-md-6 col-lg-6">
        <div class="panel panel-red panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-4 widget-left">
              <i class="material-icons iconfont3">store_mall_directory</i>
              <strong><i>Área Miahuatlan</i></strong>
            </div>
            <div class="col-sm-10 col-lg-8 widget-down">
              @if(!$min_miahuatlan)
                <div class="text-warning">Ninguna maniobra realizada</div>
                <div class="text-info">Realizados: 0</div>
              @else
                <div class="text-warning">{{$min_miahuatlan->maniobra}}</div>
                <div class="text-info">Realizados: {{$min_miahuatlan->Numero}}</div>
              @endif
            </div>
          </div>
        </div>
      </div>

      <div class="col-xs-12 col-md-6 col-lg-6">
        <div class="panel panel-red panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-4 widget-left">
              <i class="material-icons iconfont3">store_mall_directory</i>
              <strong><i>Área Tlacolula</i></strong>
            </div>
            <div class="col-sm-10 col-lg-8 widget-down">
              @if(!$min_tlacolula)
                <div class="text-warning">Ninguna maniobra realizada</div>
                <div class="text-info">Realizados: 0</div>
              @else
                <div class="text-warning">{{$min_tlacolula->maniobra}}</div>
                <div class="text-info">Realizados: {{$min_tlacolula->Numero}}</div>
              @endif
            </div>
          </div>
        </div>
      </div>

      <div class="col-xs-12 col-md-6 col-lg-6">
        <div class="panel panel-red panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-4 widget-left">
              <i class="material-icons iconfont3">store_mall_directory</i>
              <strong><i>Oaxaca</i></strong>
            </div>
            <div class="col-sm-10 col-lg-8 widget-down">
              @if(!$min_oaxaca)
                <div class="text-warning">Ninguna maniobra realizada</div>
                <div class="text-info">Realizados: 0</div>
              @else
                <div class="text-warning">{{$min_oaxaca->maniobra}}</div>
                <div class="text-info">Realizados: {{$min_oaxaca->Numero}}</div>
              @endif
            </div>
          </div>
        </div>
      </div>

      <div class="col-xs-12 col-md-6 col-lg-6">
        <div class="panel panel-red panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-4 widget-left">
              <i class="material-icons iconfont3">store_mall_directory</i>
              <strong><i>Temporales</i></strong>
            </div>
            <div class="col-sm-10 col-lg-8 widget-down">
            @if(!$min_temporales)
                <div class="text-warning">Ninguna maniobra realizada</div>
                <div class="text-info">Realizados: 0</div>
              @else
                <div class="text-warning">{{$min_temporales->maniobra}}</div>
                <div class="text-info">Realizados: {{$min_temporales->Numero}}</div>
              @endif
            </div>
          </div>
        </div>
      </div>
      </div>

</div>