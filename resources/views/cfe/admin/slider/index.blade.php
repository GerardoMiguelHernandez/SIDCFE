@extends('cfe.main')
@section('css')
{!!Html::style('bootstrap-fileinput-master/css/fileinput.css');!!}
@endsection

@section('content')
<br>
<meta name="_token" content="{!! csrf_token() !!}" />
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">


<div class="row">
      <ol class="breadcrumb">
        <li><a href="#"><i class="material-icons blue600">settings</i></a></li>
        <li class="active">Config</li>
      </ol>
    </div><!--/.row-->
<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Informacion del Slider</h1>
			</div>
      
		</div>


<div class="row">
@foreach($sliders as $slider)
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
<div class="panel panel-success">
  <div class="panel-heading" id="tituloslider{{$slider->id}}">{{$slider->Titulo}}</div>
  <div class="panel-body">
    <a href="#" class="thumbnail">
      <img src="/slider/{{$slider->imagen}}" alt="..." id="sliderimagen">
    </a>

    <h2><small id="sliderdescripcion">{{$slider->descripcion}}</small></h2>
  </div>
   <div class="panel-footer">
             <a href="{{route('slider.edit',$slider->id)}}"><button class="btn btn-success">
  <i class="fa fa-pencil fa-lg"></i> Editar</button></a>
    
   </div>
</div>
</div>
@endforeach

</div>





<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header primary">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <h4 class="modal-title" id="myModalLabel">Slider Editar</h4>
                        </div>
                        <div class="modal-body">
                            <form id="frmTasks" name="frmTasks" class="form-horizontal" novalidate="">

                               <div class="form-group">
   <label class="control-label">Titulo</label>
    <input id="titulo" name="titulo" type="text" class="form-control" placeholder="Ingresa titulo" required>
  </div>
                                <div class="form-group">
             <label class="control-label">Selecciona Imagen</label>
            <input id="imagen1" name="imagen1" type="file" class="file" multiple data-show-upload="false" data-show-caption="true" required>
                 </div>
<div class="form-group">
   <label class="control-label">Descripcion</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" placeholder="Descripcion" required>
  </div>

                                
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" id="btn-save" value="add">Actualizar</button>
                            <input type="hidden" id="task_id" name="task_id" value="0">
                        </div>
                    </div>
                </div>
            </div>
      
    

</div>

@endsection

@section('js')
{!!Html::script('js/jquery.min.js');!!}
{!!Html::script('lumino/js/bootstrap.js');!!}
{!!Html::script('bootstrap-fileinput-master/js/fileinput.js');!!}
{!!Html::script('bootstrap-fileinput-master/js/plugins/canvas-to-blob.js');!!}
{!!Html::script('bootstrap-fileinput-master/js/plugins/sortable.js');!!}
{!!Html::script('bootstrap-fileinput-master/js/plugins/purify.js');!!}
{!!Html::script('bootstrap-fileinput-master/themes/fa/theme.js');!!}
{!!Html::script('bootstrap-fileinput-master/js/locales/es.js');!!}
<script type="text/javascript">
	$(function(){

var url = "/admin/slider";

$('.editar').click(function(){

  
  
 

    //display modal form for task editing
    
        var task_id = $(this).val();

                    $.get(url + '/' + task_id, function (data) {
            //success data
            console.log(data);
            $('#task_id').val(data.id);
            $('#titulo').val(data.Titulo);
            $('#imagen').val(data.imagen);
            $('#descripcion').val(data.descripcion);
            $('#btn-save').val("update");

            $('#myModal').modal('show');

            $('#frmTasks').attr('action', '/admin/slider'+ '/' + task_id);
        }); 
   


});



/*
$('#btn-save').click(function(e){

$.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
	 e.preventDefault(); 
	 var task_id1 = $('#task_id').val();

        var formData = {
            Titulo: $('#titulo').val(),
            imagen: $('#imagen1').val(),
            descripcion: $('#descripcion').val(),
        }
$.ajax({

            type: "PUT",
            url: url + '/' + task_id1,
            data: formData,
            dataType: 'json',
            success: function (data) {
                console.log(data);

 

               

     

                $('#myModal').modal('hide')
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
}); */

	});
</script>


@endsection