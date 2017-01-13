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
              <th>Editar</th>
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
                <td>
                            <button class="btn btn-warning btn-xs btn-detail open-modal" value="{{$meta->id}}">Edit</button>
                            
                        </td>
               
                       
              </tr>
               
              @endforeach 
            
          </tbody>
        </table>
      </div>


      <!-- modal para editar -->


      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog success">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <h4 class="modal-title" id="myModalLabel">Actualizar Meta</h4>
                        </div>
                        <div class="modal-body">
                            <form id="frmTasks" name="frmTasks" class="form-horizontal" novalidate="">

                                <div class="form-group error">
                                    <label for="inputTask" class="col-sm-3 control-label">Mes </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control has-error" id="mes" name="name" placeholder="Nombre de Usuario" value="" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Personal Asignado</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="personalAsignado" name="email" placeholder="Correo Electronico" value="" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Centro de Trabajo</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="centro_trabajo" name="email" value="" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">A&ntilde;o</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="year" name="year" value="" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Meta</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="meta" name="password" value="" required>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" id="btn-save" value="add">Guardar</button>
                            <input type="hidden" id="task_id" name="task_id" value="0">
                        </div>
                    </div>
                </div>
                </div>
      </div>
@endsection

@section('js')
{!!Html::script('media/js/jquery.js');!!}
<script type="text/javascript">
  
$(function(){

$('.open-modal').click(function(e){
  e.preventDefault();

  var meta_id = $(this).val();
//metasEditar/{id}
      $.get("metas/" + meta_id, function (data) {
            //success data
            console.log(data);
            $('#mes').val(data.mes);
            $('#personalAsignado').val(data.personalAsignado);
            $('#centro_trabajo').val(data.centro_trabajo);
            $('#meta').val(data.meta);
            $('#year').val(data.year);
            $('#btn-save').val("update");

            $('#myModal').modal('show');
        });


});

});

</script>

@endsection