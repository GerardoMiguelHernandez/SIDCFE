@extends('cfe.main')
@section('css')
{!!Html::style('media/css/jquery.dataTables.css');!!}
@endsection

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

  <div class="row">
      <ol class="breadcrumb">
        <li><a href="{{('/metas')}}"><i class="material-icons blue600">flag</i></a></li>
        <li class="active">Metas - {{$ye}}</li>
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
            <th class="text-center" rowspan="3">Area Etla</th>
            <th class="text-center">Programado</th>
           @for($i=0; $i<=11; $i++)
              <th class="text-center">{{$metaEt[$i]}}</th>
           @endfor

           @if(!$sumEt->total)
           <th class="text-center">0</th>
           @else
           <th class="text-center">{{$sumEt->total}}</th>
           @endif
           <th class="text-center" rowspan="3">{{number_format($porcientoEtla,2)}}%</th>
           </tr>

           <tr>
            <th class="text-center">Real</th>
            @for($i=0; $i<=11; $i++)
              <th class="text-center"><a href="{{route('mes-area',['AREA ETLA',$i + 1, $ye])}}">{{$metaEtla[$i]}}</a></th>
            @endfor
            <th class="text-center" rowspan="1"><a href="{{route('mes-area',['AREA ETLA',13, $ye])}}">{{$sumEtla->total}}</a></th>
           </tr>


           <tr>
            <th class="text-center">Porcentaje</th>
            @for($i=0; $i<=11; $i++)
              @if(!$metaEt[$i])
                <th class="text-center">0%</th>
              @else
                <th class="text-center">{{number_format(($metaEtla[$i] * 100)/$metaEt[$i],2)}}%</th>
              @endif
            @endfor
           </tr>

<!--Ixtlan-->
           <tr>
            <th class="text-center" rowspan="3">Area Ixtlan</th>
            <th class="text-center">Programado</th>
           @for($i=0; $i<=11; $i++)
              <th class="text-center">{{$metaIx[$i]}}</th>
           @endfor
           
           @if(!$sumIx->total)
            <th class="text-center">0</th>
           @else
            <th class="text-center">{{$sumIx->total}}</th>
           @endif

           <th class="text-center" rowspan="3">{{number_format($porcientoIxtlan,2)}}%</th>

           </tr>

          <tr>
            <th class="text-center">Real</th>
            @for($i=0; $i<=11; $i++)
                <th class="text-center"><a href="{{route('mes-area',['AREA IXTLAN',$i + 1, $ye])}}">{{$metaIxtlan[$i]}}</a></th>
            @endfor
            <th class="text-center" rowspan="1"><a href="{{route('mes-area',['AREA IXTLAN',13, $ye])}}">{{$sumIxtlan->total}}</a></th>
          </tr>


          <tr>
            <th class="text-center">Porcentaje</th>
            @for($i=0; $i<=11; $i++)
              @if(!$metaIx[$i])
                <th class="text-center">0%</th>
              @else
                <th class="text-center">{{number_format(($metaIxtlan[$i] * 100)/$metaIx[$i],2)}}%</th>
              @endif
            @endfor
           </tr>

<!--Miahuatlan-->
           <tr>
            <th class="text-center" rowspan="3">Area Miahuatlan</th>
            <th class="text-center">Programado</th>
           @for($i=0; $i<=11; $i++)
              <th class="text-center">{{$metaMia[$i]}}</th>
           @endfor
           
           @if(!$sumMia->total)
           <th class="text-center">0</th>
           @else
           <th class="text-center">{{$sumMia->total}}</th>
           @endif

           <th class="text-center" rowspan="3">{{number_format($porcientoMiahuatlan,2)}}%</th>
           </tr>
          <tr>
            <th class="text-center">Real</th>
            @for($i=0; $i<=11; $i++)
                <th class="text-center"><a href="{{route('mes-area',['AREA MIAHUATLAN',$i + 1, $ye])}}">{{$metaMiahuatlan[$i]}}</a></th>
            @endfor
            <th class="text-center" rowspan="1"><a href="{{route('mes-area',['AREA MIAHUATLAN',13, $ye])}}">{{$sumMiahuatlan->total}}</a></th>
          </tr>


          <tr>
            <th class="text-center">Porcentaje</th>
            @for($i=0; $i<=11; $i++)
              @if(!$metaMia[$i])
                <th class="text-center">0%</th>
              @else
                <th class="text-center">{{number_format(($metaMiahuatlan[$i] * 100)/$metaMia[$i],2)}}%</th>
              @endif
            @endfor
           </tr>

<!--oaxaca-->
           <tr>
            <th class="text-center" rowspan="3">Area Oaxaca</th>
            <th class="text-center">Programado</th>
           @for($i=0; $i<=11; $i++)
            
              <th class="text-center">{{$metaOax[$i]}}</th>
            
           @endfor
           
           @if(!$sumOax->total)
           <th class="text-center">0</th>
           @else
           <th class="text-center">{{$sumOax->total}}</th>
           @endif

           <th class="text-center" rowspan="3">{{number_format($porcientoOaxaca,2)}}%</th>
           </tr>


          <tr>
            <th class="text-center">Real</th>
            @for($i=0; $i<=11; $i++)
                <th class="text-center"><a href="{{route('mes-area',['AREA OAXACA',$i + 1, $ye])}}">{{$metaOaxaca[$i]}}</a></th>
            @endfor
            <th class="text-center" rowspan="1"><a href="{{route('mes-area',['AREA OAXACA',13, $ye])}}">{{$sumOaxaca->total}}</a></th>
          </tr>


          <tr>
            <th class="text-center">Porcentaje</th>
            @for($i=0; $i<=11; $i++)
              @if(!$metaOax[$i])
                <th class="text-center">0%</th>
              @else
                <th class="text-center">{{number_format(($metaOaxaca[$i] * 100)/$metaOax[$i],2)}}%</th>
              @endif
            @endfor
           </tr>

<!--ocotlan-->
           <tr>
            <th class="text-center" rowspan="3">Area Ocotlan</th>
            <th class="text-center">Programado</th>
           @for($i=0; $i<=11; $i++)
              <th class="text-center">{{$metaOco[$i]}}</th>
            
           @endfor
           
           @if(!$sumOco->total)
           <th class="text-center">0</th>
           @else
           <th class="text-center">{{$sumOco->total}}</th>
           @endif

           <th class="text-center" rowspan="3">{{number_format($porcientoOcotlan,2)}}%</th>

           </tr>


          <tr>
            <th class="text-center">Real</th>
            @for($i=0; $i<=11; $i++)
                <th class="text-center"><a href="{{route('mes-area',['AREA OCOTLAN',$i + 1, $ye])}}">{{$metaOcotlan[$i]}}</a></th>
            @endfor
            <th class="text-center" rowspan="1" ><a href="{{route('mes-area',['AREA OCOTLAN',13, $ye])}}">{{$sumOcotlan->total}}</a></th>
          </tr>



          <tr>
            <th class="text-center">Porcentaje</th>
            @for($i=0; $i<=11; $i++)
              @if(!$metaOco[$i])
                <th class="text-center">0%</th>
              @else
                <th class="text-center">{{number_format(($metaOcotlan[$i] * 100)/$metaOco[$i],2)}}%</th>
              @endif
            @endfor
           </tr>


<!--tlacolula-->
           <tr>
            <th class="text-center" rowspan="3">Area Tlacolula</th>
            <th class="text-center">Programado</th>
           @for($i=0; $i<=11; $i++) 
              <th class="text-center">{{$metaTlac[$i]}}</th>

           @endfor
           
           @if(!$sumTla->total)
           <th class="text-center">0</th>
           @else
           <th class="text-center">{{$sumTla->total}}</th>
           @endif

           <th class="text-center" rowspan="3">{{number_format($porcientoTlacolula,2)}}%</th>

           </tr>


          <tr>
            <th class="text-center">Real</th>
            @for($i=0; $i<=11; $i++)
                <th class="text-center"><a href="{{route('mes-area',['AREA TLACOLULA',$i + 1, $ye])}}">{{$metaTlacolula[$i]}}</a></th>
            @endfor
            <th class="text-center" rowspan="1"><a href="{{route('mes-area',['AREA TLACOLULA',13, $ye])}}">{{$sumTlacolula->total}}</a></th>
          </tr>



          <tr>
            <th class="text-center">Porcentaje</th>
            @for($i=0; $i<=11; $i++)
              @if(!$metaTlac[$i])
                <th class="text-center">0%</th>
              @else
                <th class="text-center">{{number_format(($metaTlacolula[$i] * 100)/$metaTlac[$i], 2)}}%</th>
              @endif
            @endfor
           </tr>


<!--Zimatlan-->
           <tr>
            <th class="text-center" rowspan="3">Area Zimatlan</th>
            <th class="text-center">Programado</th>
           @for($i=0; $i<=11; $i++)
              <th class="text-center">{{$metaZim[$i]}}</th>
            
           @endfor
           
           @if(!$sumZim->total)
           <th class="text-center">0</th>
           @else
           <th class="text-center">{{$sumZim->total}}</th>
           @endif

           <th class="text-center" rowspan="3">{{number_format($porcientoZimatlan,2)}}%</th>

           </tr>


          <tr>
            <th class="text-center">Real</th>
            @for($i=0; $i<=11; $i++)
                <th class="text-center"><a href="{{route('mes-area',['AREA ZIMATLAN',$i + 1, $ye])}}">{{$metaZimatlan[$i]}}</a></th>
            @endfor
            <th class="text-center" rowspan="1"><a href="{{route('mes-area',['AREA ZIMATLAN',13, $ye])}}">{{$sumZimatlan->total}}</a></th>
          </tr>



          <tr>
            <th class="text-center">Porcentaje</th>
            @for($i=0; $i<=11; $i++)
              @if(!$metaZim[$i])
                <th class="text-center">0%</th>
              @else
                <th class="text-center">{{number_format(($metaZimatlan[$i] * 100)/$metaZim[$i],2)}}%</th>
              @endif
            @endfor
           </tr>



<!--temporales-->
           <tr>
            <th class="text-center" rowspan="3">Temporales Oax</th>
            <th class="text-center">Programado</th>
           @for($i=0; $i<=11; $i++)
              <th class="text-center">{{$metaTem[$i]}}</th>
            
           @endfor

           @if(!$sumTem->total)
           <th class="text-center">0</th>
           @else
           <th class="text-center">{{$sumTem->total}}</th>
           @endif

           <th class="text-center" rowspan="3">{{number_format($porcientoTemporales,2)}}%</th>

           </tr>


          <tr>
            <th class="text-center">Real</th>
            @for($i=0; $i<=11; $i++)
                <th class="text-center"><a href="{{route('mes-area',['Temporales Oax',$i + 1, $ye])}}">{{$metaTemporales[$i]}}</a></th>
            @endfor
            <th class="text-center" rowspan="1"><a href="{{route('mes-area',['Temporales Oax',13, $ye])}}">{{$sumTemporales->total}}</a></th>
          </tr>


          <tr>
            <th class="text-center">Porcentaje</th>
            @for($i=0; $i<=11; $i++)
              @if(!$metaTem[$i])
                <th class="text-center">0%</th>
              @else
                <th class="text-center">{{number_format(($metaTemporales[$i] * 100)/$metaTem[$i],2)}}%</th>
              @endif
            @endfor
           </tr>

           </tbody>
        


        </table>
      </div>





</div>






@endsection


@section('js')




@endsection