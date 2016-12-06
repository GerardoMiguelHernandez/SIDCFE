@extends('cfe.main')
@section('css')
{!!Html::style('bootstrap-fileinput-master/css/fileinput.css');!!}
@endsection

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

<div class="panel panel-primary" style="padding-top: 10px;">
 <div class="panel-heading">Subir Archivo</div>

  <div class="panel-body">
  <div class="table-responsive">
  Estructura del documento
   <table class="table">
   <thead>
   	<tr>
   		<th>zona</th>
   		<th>area</th>
   		<th>RPE</th>
   		<th>nombre</th>
   		<th>fecha_evaluacion</th>
   		<th>maniobra</th>
   		<th>calificacion</th>
   	</tr>
   </thead>
  </table>
  </div>


@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

   {!! Form::open(['route'=>'colaboradorcontroller.store','files'=>'true','method'=>'POST'])!!}
          {{ csrf_field() }}
    <div class="form-group">
   <label class="control-label">Select File</label>
    <input id="file" name="file" type="file" class="file" multiple data-show-upload="false" data-show-caption="true" placeholder="extension csv" required>
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

@endsection