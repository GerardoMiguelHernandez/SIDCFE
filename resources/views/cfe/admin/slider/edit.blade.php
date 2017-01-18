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
				<h1 class="page-header">Editar Informacion del Slider</h1>
			</div>
      
		</div>


		<div class="row">
			
     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
     	
<div class="panel panel-success">
  <div class="panel-heading">{{$slider->Titulo}}</div>
  <div class="panel-body">
   {!! Form::open(['route'=>['slider.update',$slider],'files'=>'true','method'=>'PUT'])!!}

                               <div class="form-group">
   <label class="control-label">Titulo</label>
    <input id="titulo" name="titulo" type="text" class="form-control" placeholder="{{$slider->Titulo}}" required>
  </div>
                                <div class="form-group">
             <label class="control-label">Selecciona Imagen</label>
            <input id="imagen1" name="imagen1" type="file" class="file" multiple data-show-upload="false" value="" data-show-caption="true" required>
                 </div>
<div class="form-group">
   <label class="control-label">Descripcion</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" placeholder="{{$slider->descripcion}}" required>
  </div>
<br>
                              
                              <button class="btn btn-success" type="submit">
  <i class="fa fa-pencil fa-lg"></i>Actualizar</button>  
                            {!!Form::close()!!}
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
@endsection