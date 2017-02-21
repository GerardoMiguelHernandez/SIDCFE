@extends('cfe.main')
@section('css')
{!!Html::style('media/css/jquery.dataTables.css');!!}
@endsection

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
<div class="row">
      <ol class="breadcrumb">
        <li><a href="#"><i class="material-icons blue600">settings</i></a></li>
        <li></li><strong>MANIOBRAS</strong></li>
      </ol>
    </div>
 

    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">{{$ar}}<br> <small class="text-primary">{{$man}}</small></h1>
      </div>

      <div class="col-lg-2 col-xs-12 col-md-2">
        <h5 class="label label-primary">TOTAL:{{$datos->count()}}</h5>
      </div>
      </div>




      

<div class="table-responsive table-condensed table-hover" style="margin-top: 5px;">
        <table id="filtarmaniobra" class="table table-bordered table-hover">
          <thead>
            <tr class="info">
              <th>N.</th>
              <th>RPE</th>
              <th>Nombre</th>
              <th>Fecha</th>
              <th>Calificacion</th>
              
            </tr>
          
          <tbody>
          @foreach($datos as $dato)
              <tr>
                <td>{{$loop->index + 1}}</td>
                <td><a href="{{route('nuevo-detallecolaborador',[$dato->RPE])}}">{{$dato->RPE}}</a></td>
                <td>{{$dato->nombre}}</td>
                <td>{{$dato->fecha_evaluacion}}</td>
                <td>{{$dato->calificacion}}</td>
                
              </tr>
          @endforeach


            
          </tbody>
        </thead>
        </table>
      </div> 
    

		</div>


@endsection
