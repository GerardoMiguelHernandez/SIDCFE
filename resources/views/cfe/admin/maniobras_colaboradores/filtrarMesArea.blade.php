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
				  <p style="color: blue;">Evaluaciones: {{$count_maniobra}}</p>
        @else
          <p style="color: blue;">Evaluaciones: {{$count_maniobratotal}}</p>
        @endif
			</div>
		</div><!--/.row-->



<div class="table-responsive table-condensed table-hover">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr class="info">
              <th>No.</th>
              <th>RPE</th>
              <th>Nombre</th>
              <th>Fecha</th>
              <th>Maniobra</th>
              <th>Calificacion</th>
              
            </tr>


          <tbody>
          
          @if($maniobras)
            @foreach($maniobras as $maniobra)
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


          @if($nombremes === 'EN TODO EL AÑO')
            @foreach($maniobras_total as $maniobratotal)
              <tr>
                <td>{{$loop->index + 1}}</td>
                <td>{{$maniobratotal->RPE}}</td>
                <td>{{$maniobratotal->nombre}}</td>
                <td>{{$maniobratotal->fecha_evaluacion}}</td>
                <td>{{$maniobratotal->maniobra}}</td>
                <td>{{$maniobratotal->calificacion}}</td>
                
              </tr>
               
            @endforeach 



          @endif
            
            
          </tbody>


          </thead>

        </table>
      </div>


		</div>
@endsection


@section('js')
@endsection