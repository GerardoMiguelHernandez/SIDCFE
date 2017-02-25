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
        @if($num == 1)
        	<li><strong>Colaborador</strong></li>
        @else
        	<li><strong>Maniobra</strong></li>
        @endif
        
      </ol>
  </div>

  <div class="row">
  		<div class="col-lg-12">
  			@if($num == 1)
  				<h1 class="page-header">{{$colnombre->nombre}}<br><small class="text-primary"><a href="{{route('nuevo-detallecolaborador',[$man_rpe])}}">{{$man_rpe}}</a></small></h1>
  			@else
  				<h1 class="page-header"><small class="text-primary"><a href="{{route('nuevo.maniobra.filtro',[$man_rpe])}}">{{$man_rpe}}</a></small></h1>
  			@endif
		</div>
		<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
			<p style="color: blue;">Total: {{$count}}</p>
		</div>
  </div>

  <div class="table-responsive table-condensed table-hover">
    <table class="table table-striped table-bordered table-hover">
    	<thead>
    		@if($num == 1)
      			<tr class="info">
        			<th>No.</th>
        			<th>Maniobra</th>
        			<th>Fecha</th>
        			<th>Calificacion</th>        
      			</tr>

      			<tbody>
      				@if($colaboradores)
      					@foreach($colaboradores as $col)
      				        <tr>
                				<td>{{$loop->index + 1}}</td>
                				<td><a href="{{route('nuevo.maniobra.filtro',[$col->maniobra])}}">{{$col->maniobra}}</a></td>
                				<td>{{$col->fecha_evaluacion}}</td>
                				<td>{{$col->calificacion}}</td>
              				</tr>
      					@endforeach
      				@endif
      			</tbody>
      		@else
      			<tr class="info">
        			<th>No.</th>
        			<th>RPE</th>
        			<th>Nombre</th>
        			<th>Fecha</th>
        			<th>Calificacion</th>        
      			</tr>

      			<tbody>
      				@if($maniobras)
      					@foreach($maniobras as $man)
      				        <tr>
                				<td>{{$loop->index + 1}}</td>
                				<td><a href="{{route('nuevo-detallecolaborador',[$man->RPE])}}">{{$man->RPE}}</a></td>
                				<td>{{$man->nombre}}</td>
                				<td>{{$man->fecha_evaluacion}}</td>
                				<td>{{$man->calificacion}}</td>
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