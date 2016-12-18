@extends('cfe.main')
@section('css')
@endsection


@section('content')


<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><i class="material-icons blue600">home</i></a></li>
				<li class="active">Home</li>
			</ol>
		</div><!--/.row-->
<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Metas</h1>
			</div>
		</div>

<a href="{{route('metas.create')}}"><button type="button" class="btn btn-primary">Nuevo</button></a>

 <div class="table-responsive" style="margin-top: 5px;">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr class="danger">
              <th>Mes</th>
              <th>Personal Asignado</th>
              <th>Centro</th>
              <th>Meta</th>
              <th>A&ntilde;o</th>
            </tr>
          </thead>
          <tbody>
            @foreach($metas as $meta)
              <tr>
     
                
                <td>{{$meta->mes}}</td>
                <td>{{$meta->personalAsignado}}</td>
                <td>{{$meta->centro_trabajo}}</td>
                <td>{{$meta->meta}}</td>
                <td>{{$meta->year}}</td>
               
                       
              </tr>
               
              @endforeach 
            
          </tbody>
        </table>
      </div>
      </div>
@endsection

@section('js')

@endsection