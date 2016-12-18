@extends('cfe.main')
@section('css')
@endsection

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

<div class="row">
      <ol class="breadcrumb">
        <li><a href="#"><i class="material-icons blue600">flag</i></a></li>
        <li class="active">Metas</li>
      </ol>
    </div>
<div class="row">

			<div class="col-lg-10 col-xs-12 col-md-10">
				<h2 class="page-header">Seleccionar</h2>
			</div>
      </div>

<div class="row">
<div class="col-xs-3 col-sm-3 col-md-4 col-lg-2">
	<div class="form-group">
                <label for="sel1">Elige año:</label>
                <select class="form-control" name="fecha" id="anio">
                @foreach($anio as $an)
                  <option value="{{$an}}">{{$an->year}}</option>
                @endforeach  
                </select>
  </div>
</div>

<div class="col-xs-3 col-sm-3 col-md-4 col-lg-2">
   <div class="form-group">
                <label for="sel1">Elige área:</label>
                <select class="form-control" name="lugar" id="area">
                @foreach($area as $ar)
                  <option value="{{$ar}}">{{$ar->area}}</option>
                @endforeach  
                </select>
  </div>
</div>

<div class="col-xs-3 col-sm-3 col-md-4 col-lg-4" style="padding-top: 23px;">
  <div class="row">
    <div class="col-sm-3">
      <a href="{{route('metas-ar',[$ar->area,$an->year])}}">
      <button class="btn btn-primary" id="buscar">Buscar</button></a>
    </div>
  </div>
</div>

</div>

</div>
     
