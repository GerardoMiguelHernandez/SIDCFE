@extends('cfe.main')
@section('css')
@endsection

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

  <div class="row">
      <ol class="breadcrumb">
        <li><a href="{{('/metas')}}"><i class="material-icons blue600">flag</i></a></li>
        <li class="active"><a href="{{route('metas-ar', $ye)}}">Metas - {{$ye}}</a></li>
        <li><strong>{{$ar}} - {{$nombremes}}</strong></li>
      </ol>
  </div>


<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-8 col-lg-9">
				<h1 class="page-header">Resultados Obtenidos</h1>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
        @if($nombremes !== 'EN TODO EL AÑO')
				  <a href="{{route('agrupar-colaborador-maniobra',[$ar, $mes, $ye, '1'])}}"> <p style="color: blue;">Evaluaciones: {{$count_evaluacion}}</p></a>
          <a href="{{route('agrupar-colaborador-maniobra',[$ar, $mes, $ye, '2'])}}"> <p style="color: blue;">Colaboradores: {{$count_colaboradores}}</p></a>
          <a href="{{route('agrupar-colaborador-maniobra',[$ar, $mes, $ye, '3'])}}"> <p style="color: blue;">Maniobras: {{$count_maniobradif}}</p></a>
        @else
          <a href="{{route('agrupar-colaborador-maniobra',[$ar, $mes, $ye, '1'])}}"> <p style="color: blue;">Evaluaciones: {{$count_evaluaciontotal}}</p></a>
          <a href="{{route('agrupar-colaborador-maniobra',[$ar, $mes, $ye, '2'])}}"> <p style="color: blue;">Colaboradores: {{$count_colaboradorestotal}}</p></a>
          <a href="{{route('agrupar-colaborador-maniobra',[$ar, $mes, $ye, '3'])}}"> <p style="color: blue;">Maniobras: {{$count_maniobradiftotal}}</p></a>
        @endif
			</div>
		</div><!--/.row-->


    <div class="table-responsive table-condensed table-hover">
    <table class="table table-striped table-bordered table-hover">
    <thead>
    @if($num == 1)
      <tr class="info">
        <th>No.</th>
        <th>RPE</th>
        <th>Nombre</th>
        <th>Fecha</th>
        <th>Maniobra</th>
        <th>Calificacion</th>        
      </tr>

      <tbody>
          
          @if($evaluacionesmes)
            @foreach($evaluacionesmes as $maniobra)
              <tr>
                <td>{{$loop->index + 1}}</td>
                <td>{{$maniobra->RPE}}</td>
                <td>{{$maniobra->nombre}}</td>
                <td>{{$maniobra->fecha_evaluacion}}</td>
                <td>{{$maniobra->maniobra}}</td>
                <td>{{$maniobra->calificacion}}</td>
                
              </tr>
               
            @endforeach 
          @endif
      </tbody>
    @elseif($num == 2)
      <tr class="info">
        <th>No.</th>
        <th>RPE</th>
        <th>Nombre</th>
        <th class="text-center">N. de evaluaciones</th>
        <th class="text-center">Promedio</th>
      </tr>


      <tbody>
          @if($colaboradoresmes)
            @foreach($colaboradoresmes as $maniobra)
              <tr>
                <td>{{$loop->index + 1}}</td>
                <td>{{$maniobra->RPE}}</td>
                <td>{{$maniobra->nombre}}</td>
                <td class="text-center"><a href="{{route('consulta-maniobra-rpe',[$ar, $mes, $ye, '1', $maniobra->RPE])}}">{{$count_colaboradormaniobra[$loop->index + 1]}}</a></td>
                <td class="text-center">{{number_format($promedio_colaboradormaniobra[$loop->index + 1], 2)}} %</td>
              </tr>
               
            @endforeach 
          @endif
      </tbody>

    @else
      <tr class="info">
        <th>No.</th>
        <th>Maniobras</th>
        <th class="text-center">N. de evaluaciones</th>
        <th class="text-center">Promedio</th>
      </tr>

      <tbody>
          @if($maniobrames)
            @foreach($maniobrames as $maniobra)
              <tr>
                <td>{{$loop->index + 1}}</td>
                <td>{{$maniobra->maniobra}}</td>
                <td class="text-center"><a href="{{route('consulta-maniobra-rpe',[$ar, $mes, $ye, '2', $maniobra->maniobra])}}">{{$count_maniobracolaborador[$loop->index + 1]}}</a></td>
                <td class="text-center">{{number_format($promedio_maniobracolaborador[$loop->index + 1], 2)}} %</td>
              </tr>
               
            @endforeach 
          @endif
      </tbody>
          
    @endif
    </thead>
    </table>
    </div>
</div>
@endsection


@section('js')
@endsection