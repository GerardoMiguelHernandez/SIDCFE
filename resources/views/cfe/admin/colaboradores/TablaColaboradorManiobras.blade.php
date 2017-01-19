@extends('cfe.main')

@section('css')
{!!Html::style('media/css/jquery.dataTables.css');!!}
@endsection


@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">


@if($response != null)
<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><i class="material-icons blue600">view_module</i></a></li>
				<li class="active">Detalles</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">{{$response->nombrecolaborador}} {{$response->apellidop}} {{$response->apellidom}}<br> <small class="text-primary">{{$response->ncentro}}</small></h1>
			</div>
		</div><!--/.row-->



<div class="row"> <!-- comienza el row que contendra la fotico y datos del colaborador -->
                     
<div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
               <div style="margin-top: 15px;">     
              <img src="/imagen/{{$id}}" class="img-rounded">

              </div>
</div>


<div class="col-xs-12 col-sm-12 col-md-9 col-lg-10">





		<div class="row" style="padding-top: 15px;">
			<div class="col-xs-12 col-md-6 col-lg-4">
				<div class="panel panel-blue panel-widget ">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							 SECCIÓN
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"></div>
						<div class="text-primary">{{$response->seccion}}</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-4">
				<div class="panel panel-orange panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							CONTRATO
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"></div>
							<div class="text-muted">{{$response->nombre_contrato}}</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-4">
				<div class="panel panel-teal panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							RPE
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"></div>
							<div class="text-muted">{{$id}}</div>
						</div>
					</div>
				</div>
			</div>
			
		</div><!--/.row-->



</div>


</div> <!-- fin del row-->



<!--- hasta aqui se va a mostrar en caso del que trabajador si se encuentre registrado en SICAP -->


@else

<div class="alert alert-danger" role="alert" style="padding-top: 15px;">
<h3>EL USUARIO NO SE ENCUENTRA REGISTRADO EN SICAP</h3>
</div>

@endif

              <input id="valor_rpe" type="hidden" value="{{$id}}">


 
   
<div class="row">

<div class="col-sm-12 col-md-3 col-lg-3">
	<br>Total de Evaluaciones: <strong class="text-primary">{{$total}}</strong>
</div>


<div class="table-responsive table-hover" style="padding-top: 1px;">
<table id="detallecolaborador" class="table table-bordered" width="100%" cellspacing="0">
        <thead>
       
            <tr class="success">
                <th>Maniobra</th>
                <th  class="text-center">Realizó</th>
            </tr>
        </thead>   

        <tbody id="general_Estadistica">
           
           @foreach($maniobras as $maniobra)
           <tr>

              <th width="800">{{$maniobra->maniobra}}</th>

              @if($realizo[$loop->index] !== 'N')
              	<th class="text-center"><i class="material-icons" style="font-size:24px;color:green;text-shadow:2px 2px 16px green;">done</i>({{$realizo[$loop->index]}})</th>
              @else
              	<th class="text-center"><i class="material-icons" style="font-size:24px;color:red;text-shadow:2px 2px 16px red;">clear</i></th>
              @endif
           </tr>
           @endforeach
        </tbody>


 </table>
 </div>


@endsection

@section('js')
{!!Html::script('media/js/jquery.js');!!}
{!!Html::script('media/js/jquery.dataTables.js');!!}
{!!Html::script('media/js/dataTables.bootstrap.js');!!} 