@extends('cfe.main')
@section('css')
{!!Html::style('bootstrap-fileinput-master/css/fileinput.css');!!}
@endsection

@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
<div class="row">
      <ol class="breadcrumb">
        <li><a href="#"><i class="material-icons blue600">settings</i></a></li>
        <li class="active">Config</li>
      </ol>
    </div><!--/.row-->
<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Configuracion de Slider</h1>
			</div>
      
		</div>
<div class="panel panel-primary">
 <div class="panel-heading">Configurar Slider</div>

  <div class="panel-body">
  @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

 {!! Form::open(['route'=>'slider.store','files'=>'true','method'=>'POST'])!!}
          {{ csrf_field() }}

           <div class="form-group">
   <label class="control-label">Titulo</label>
    <input id="titulo" name="titulo" type="text" class="form-control" placeholder="Ingresa titulo" required>
  </div>
    <div class="form-group">
   <label class="control-label">Selecciona Imagen</label>
    <input id="imagen" name="imagen" type="file" class="file" multiple data-show-upload="false" data-show-caption="true" required>
  </div>
  <div class="form-group">
   <label class="control-label">Subtitulo</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" placeholder="Ingresa subtitulo" required>
  </div>
   <button type="submit" class="btn btn-primary center-block"><i class="material-icons">send</i></button>
  {!!Form::close()!!}


   
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
$('.file').fileinput({
        language: 'es',
        allowedFileExtensions : ['jpg', 'png','gif'],
    });
    });</script>
@endsection

