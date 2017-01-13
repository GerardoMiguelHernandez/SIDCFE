@extends('cfe.main')
@section('css')
{!!Html::style('media/css/jquery.dataTables.css');!!}
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
      <div class="col-lg-12">
        <h1 class="page-header text-center bg-info">Estadísticas de Metas {{$ye}}</h1>
      </div>
      
  </div>


<div class="table-responsive table-condensed table-hover" style="margin-top: 5px;">
        <table id="tabla-metas" class="table table-bordered table-hover">

          <thead>
            <tr class="info">
              <th class="text-center">Areas/Meses</th>
              <th class="text-center">Programa</th>
              <th class="text-center">Enero</th>
              <th class="text-center">Febrero</th>
              <th class="text-center">Marzo</th>
              <th class="text-center">Abril</th>
              <th class="text-center">Mayo</th>
              <th class="text-center">Junio</th>
              <th class="text-center">Julio</th>
              <th class="text-center">Agosto</th>
              <th class="text-center">Septiembre</th>
              <th class="text-center">Octubre</th>
              <th class="text-center">Noviembre</th>
              <th class="text-center">Diciembre</th>
              <th class="text-center">Total</th>
              <th class="text-center">Cumplimiento</th>
            </tr>
          </thead>

           <tbody id="general_Estadistica">
           

<!--Etla  bgcolor="#FF5733"-->
           <tr>
            <th class="text-center" rowspan="2">Area Etla</th>
            <th class="text-center">Programado</th>
           @for($i=0; $i<=11; $i++)
              <th class="text-center"><a href=""></a>{{$metaEt[$i]}}</th>
           @endfor

           @if(!$sumEt->total)
           <th class="text-center">0</th>
           @else
           <th class="text-center">{{$sumEt->total}}</th>
           @endif
           <th class="text-center" rowspan="2">{{number_format($porcientoEtla,2)}}%</th>
           </tr>

           <tr>
            <th class="text-center">Real</th>
            @for($i=0; $i<=11; $i++)
              <th class="text-center"><a href=""></a>{{$metaEtla[$i]}}</th>
            @endfor
            <th class="text-center">{{$sumEtla->total}}</th>

            

           </tr>

<!--Ixtlan-->
           <tr>
            <th class="text-center" rowspan="2">Area Ixtlan</th>
            <th class="text-center">Programado</th>
           @for($i=0; $i<=11; $i++)
              <th class="text-center"><a href=""></a>{{$metaIx[$i]}}</th>
           @endfor
           
           @if(!$sumIx->total)
            <th class="text-center">0</th>
           @else
            <th class="text-center">{{$sumIx->total}}</th>
           @endif

           <th class="text-center" rowspan="2">{{number_format($porcientoIxtlan,2)}}%</th>

           </tr>

          <tr>
            <th class="text-center">Real</th>
            @for($i=0; $i<=11; $i++)
                <th class="text-center"><a href=""></a>{{$metaIxtlan[$i]}}</th>
            @endfor
            <th class="text-center">{{$sumIxtlan->total}}</th>
          </tr>

<!--Miahuatlan-->
           <tr>
            <th class="text-center" rowspan="2">Area Miahuatlan</th>
            <th class="text-center">Programado</th>
           @for($i=0; $i<=11; $i++)
              <th class="text-center"><a href=""></a>{{$metaMia[$i]}}</th>
           @endfor
           
           @if(!$sumMia->total)
           <th class="text-center">0</th>
           @else
           <th class="text-center">{{$sumMia->total}}</th>
           @endif

           <th class="text-center" rowspan="2">{{number_format($porcientoMiahuatlan,2)}}%</th>
           </tr>
          <tr>
            <th class="text-center">Area Real</th>
            @for($i=0; $i<=11; $i++)
                <th class="text-center"><a href=""></a>{{$metaMiahuatlan[$i]}}</th>
            @endfor
            <th class="text-center">{{$sumMiahuatlan->total}}</th>
          </tr>

<!--oaxaca-->
           <tr>
            <th class="text-center" rowspan="2">Area Oaxaca</th>
            <th class="text-center">Programado</th>
           @for($i=0; $i<=11; $i++)
            
              <th class="text-center"><a href=""></a>{{$metaOax[$i]}}</th>
            
           @endfor
           
           @if(!$sumOax->total)
           <th class="text-center">0</th>
           @else
           <th class="text-center">{{$sumOax->total}}</th>
           @endif

           <th class="text-center" rowspan="2">{{number_format($porcientoOaxaca,2)}}%</th>
           </tr>


          <tr>
            <th class="text-center">Real</th>
            @for($i=0; $i<=11; $i++)
                <th class="text-center"><a href=""></a>{{$metaOaxaca[$i]}}</th>
            @endfor
            <th class="text-center">{{$sumOaxaca->total}}</th>
          </tr>

<!--ocotlan-->
           <tr>
            <th class="text-center" rowspan="2">Area Ocotlan</th>
            <th class="text-center">Programado</th>
           @for($i=0; $i<=11; $i++)
              <th class="text-center"><a href=""></a>{{$metaOco[$i]}}</th>
            
           @endfor
           
           @if(!$sumOco->total)
           <th class="text-center">0</th>
           @else
           <th class="text-center">{{$sumOco->total}}</th>
           @endif

           <th class="text-center" rowspan="2">{{number_format($porcientoOcotlan,2)}}%</th>

           </tr>


          <tr>
            <th class="text-center">Real</th>
            @for($i=0; $i<=11; $i++)
                <th class="text-center"><a href=""></a>{{$metaOcotlan[$i]}}</th>
            @endfor
            <th class="text-center">{{$sumOcotlan->total}}</th>
          </tr>


<!--tlacolula-->
           <tr>
            <th class="text-center" rowspan="2">Area Tlacolula</th>
            <th class="text-center">Programado</th>
           @for($i=0; $i<=11; $i++) 
              <th class="text-center"><a href=""></a>{{$metaTlac[$i]}}</th>

           @endfor
           
           @if(!$sumTla->total)
           <th class="text-center">0</th>
           @else
           <th class="text-center">{{$sumTla->total}}</th>
           @endif

           <th class="text-center" rowspan="2">{{number_format($porcientoTlacolula,2)}}%</th>

           </tr>


          <tr>
            <th class="text-center">Real</th>
            @for($i=0; $i<=11; $i++)
                <th class="text-center"><a href=""></a>{{$metaTlacolula[$i]}}</th>
            @endfor
            <th class="text-center">{{$sumTlacolula->total}}</th>
          </tr>


<!--Zimatlan-->
           <tr>
            <th class="text-center" rowspan="2">Area Zimatlan</th>
            <th class="text-center">Programado</th>
           @for($i=0; $i<=11; $i++)
              <th class="text-center"><a href=""></a>{{$metaZim[$i]}}</th>
            
           @endfor
           
           @if(!$sumZim->total)
           <th class="text-center">0</th>
           @else
           <th class="text-center">{{$sumZim->total}}</th>
           @endif

           <th class="text-center" rowspan="2">{{number_format($porcientoZimatlan,2)}}%</th>

           </tr>


          <tr>
            <th class="text-center">Real</th>
            @for($i=0; $i<=11; $i++)
                <th class="text-center"><a href=""></a>{{$metaZimatlan[$i]}}</th>
            @endfor
            <th class="text-center">{{$sumZimatlan->total}}</th>
          </tr>


<!--temporales-->
           <tr>
            <th class="text-center" rowspan="2">Temporales Oax</th>
            <th class="text-center">Programado</th>
           @for($i=0; $i<=11; $i++)
              <th class="text-center"><a href=""></a>{{$metaTem[$i]}}</th>
            
           @endfor

           @if(!$sumTem->total)
           <th class="text-center">0</th>
           @else
           <th class="text-center">{{$sumTem->total}}</th>
           @endif

           <th class="text-center" rowspan="2">{{number_format($porcientoTemporales,2)}}%</th>

           </tr>


          <tr>
            <th class="text-center">Real</th>
            @for($i=0; $i<=11; $i++)
                <th class="text-center"><a href=""></a>{{$metaTemporales[$i]}}</th>
            @endfor
            <th class="text-center">{{$sumTemporales->total}}</th>
          </tr>

           </tbody>
        


        </table>
      </div>





</div>






@endsection


@section('js')




@endsection