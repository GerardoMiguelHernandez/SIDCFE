@extends('cfe.main')
@section('css')
@endsection

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><i class="material-icons blue600">settings</i></a></li>
				<li class="active">Area {{$area}}, Maniobra {{$maniobra}}</li>
			</ol>
		</div><!--/.row-->


<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-8 col-lg-9">
				<h1 class="page-header">Resultados Obtenidos</h1>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
				<p style="color: blue;">Evaluaciones:{{$count_area_maniobra}}</p>
			</div>
		</div><!--/.row-->



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
            @foreach($area_maniobra as $maniobra)
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
      </div>
      {!! $area_maniobra->render()!!}


		</div>
@endsection


@section('js')
@endsection