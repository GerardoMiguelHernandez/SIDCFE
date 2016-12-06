@extends('cfe.main')
@section('css')
@endsection

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
<div class="row">
      <ol class="breadcrumb">
        <li><a href="#"><i class="material-icons blue600">settings</i></a></li>
        <li class="active">Maniobras</li>
      </ol>
    </div><!--/.row-->
<div class="row">

			<div class="col-lg-10 col-xs-12 col-md-10">
				<h1 class="page-header">Maniobras y Colaboradores</h1>
			</div>
      </div>
      <!--
      <div class="col-lg-1 col-xs-6 col-md-1">
        <a href="" data-toggle="modal" data-target="#mymodal4"><button type="button" class="btn btn-primary" style="border-radius: 100%; width: 35px;height: 35px;"><i class="material-icons">search</i></button> </a>
      </div>
      <div class="col-lg-1 col-xs-6 col-md-1">
        <a href="{{route('colaborador.area',$areaReal)}}"><button type="button" class="btn btn-primary" style="border-radius: 100%; width: 35px;height: 35px;"><i class="material-icons">refresh</i></button> </a>
      </div> -->
      <div class="row">
      <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2 col-sm-offset-6 col-xs-offset-6 col-md-offset-10">
      <div class="btn-group btn-group-justified" role="group" aria-label="..">
      <div class="btn-group" role="group">
          <a href="" data-toggle="modal" data-target="#mymodal4"><button class="btn btn-group btn-default btn-success"><i class="material-icons blue600">search</i></button></a>
        </div>
        <div class="btn-group" role="group">
          <a href="{{route('colaborador.area',$areaReal)}}"><button class="btn btn-group btn-default btn-warning"><i class="material-icons blue600">refresh</i></button></a>
          
      </div>
      </div>
		</div>
    </div>
		<div class="modal fade" id="mymodal4" tabindex="-1" role="dialog" arialabelledby="mymodallabel">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" arialabel="close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title">Buscar</h4>
    </div>
    <div class="modal-body">
      <form action="{{route('colaborador.area',$areaReal)}}" method="GET">
        
                           
                            
                                <input id="input_buscar2" type="text" class="form-control" name="input_buscar2" required>
                                <button class="btn btn-primary" type="submit">save changes</button>

                                
                            
                        

      </form>

    </div>
  </div>
</div>
  
</div>


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
            @foreach($areas as $maniobra)
              <tr>
     
                
                <td>{{$maniobra->zona}}</td>
                <td>{{$maniobra->area}}</td>
                <td>{{$maniobra->RPE}}</td>
                <td>{{$maniobra->nombre}}</td>
                <td>{{$maniobra->fecha_evaluacion}}</td>
                <td><a href="{{route('colaborador.area.maniobra',[$maniobra->area,$maniobra->maniobra])}}">
                {{$maniobra->maniobra}}</a></td>
                <td>{{$maniobra->calificacion}}</td>
                <!--<td>
                                    <a href="#" class="btn btn-primary">
                                        <i class="fa fa-pencil-square-o"></i>
                                    </a>
                                </td>
                                <td>
                                  <a href="#" class="btn btn-danger">
                                        <i class="fa fa-trash-o"></i>
                                    </a>  
                                </td> -->
              </tr>
               
              @endforeach 
            
          </tbody>
        </table>
      </div> 
<?php echo $areas->render(); ?>

		</div>


@endsection

@section('js')
@endsection
