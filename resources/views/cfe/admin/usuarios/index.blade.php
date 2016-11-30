@extends('cfe.main')
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
				<h1 class="page-header">Usuarios</h1>
			</div>
		</div>

<div class="row">
	<div class="col-xs-12 col-sm-12 col-lg-9">		
   <button class="btn btn-primary"><i class="material-icons blue60">add</i></button>
	</div>
	<div class="col-xs-12 col-sm-12 col-lg-3 col-lg-offset-9">
	

    <div class="row">
    <div class="col-lg-6 col-lg-offset-6">
       <a href="" data-toggle="modal" data-target="#mymodal"><i class="material-icons blue600 iconfont3">search</i></a>
</div></div>

<div class="modal fade" id="mymodal" tabindex="-1" role="dialog" arialabelledby="mymodallabel">
<div class="modal-dialog" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" arialabel="close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title">Buscar</h4>
		</div>
		<div class="modal-body">
			<form>
				
                           
                            
                                <input id="search" type="text" class="form-control" name="search" required>

                                
                            
                        

			</form>

		</div>
		<div class="modal-footer">
			<button class="btn btn-default" data-dismiss="modal">close</button>
			<button class="btn btn-primary" type="submit">save changes</button>
		</div>
	</div>
</div>
	
</div>
		</div>
		</div>
	
 <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr class="success">
              <th>Nombre</th>
              <th>RPE</th>
              <th>Clave</th>
              <th>Eliminar</th>
              <th>Editar</th>
              
            </tr>
          </thead>
          <tbody>
            @foreach($allUsuarios as $allUsuario)
              <tr>
     
                
                <td>{{$allUsuario->name}}</td>
                <td>{{$allUsuario->email}}</td>
                <td>{{$allUsuario->password}}</td>
                <td>
                                    <a href="{{ route('usuarios.edit', $allUsuario->id) }}" class="btn btn-primary">
                                        <i class="fa fa-pencil-square-o"></i>
                                    </a>
                                </td>
                                <td>
                                  <a href="{{route('usuarios.destroy1', $allUsuario->id)}}" class="btn btn-danger">
                                        <i class="fa fa-trash-o"></i>
                                    </a>  
                                </td>
              </tr>
               
              @endforeach 
            
          </tbody>
        </table>
      </div>
</div> 

@endsection