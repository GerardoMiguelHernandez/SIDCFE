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

<div class="col-sm-12 col-md-8 col-lg-8">
<h1>Historial de Colaborador</h1>
</div>
<div class="col-sm-12 col-md-3 col-lg-3">
	Total de Evaluaciones: <strong class="text-primary">{{$total}}</strong><br>
  <strong class="text-primary"><a href="{{route('maniobras-colaborador',[$id])}}">Tabla maniobras</a></strong><br><!--Nuevo-->
</div>



<div class="col-sm-12 col-md-1 col-lg-1">
<a href="" id="excelColaborador">
 	<i class="fa fa-file-excel-o fa-3x" style="color: green;"  aria-hidden="true"></i>
 	</a> 	
</div>	
	

</div>             
<div class="table-responsive table-hover" style="padding-top: 1px;">
<table id="detallecolaborador" class="table table-bordered" width="100%" cellspacing="0">
        <thead>
       
            <tr class="success">
                <th>zona</th>
                <th>area</th>
                <th>fecha_evaluacion</th>
                <th>maniobra</th>
                <th>calificacion</th>
            </tr>
        </thead>
        <tfoot>
            <tr class="warning">
               <th>zona</th>
                <th>area</th>
                <th>fecha_evaluacion</th>
                <th>maniobra</th>
                <th>calificacion</th
            </tr>
        </tfoot>
        
    </table>
    </div>



</div>


@endsection

@section('js')
{!!Html::script('media/js/jquery.js');!!}
{!!Html::script('media/js/jquery.dataTables.js');!!}
{!!Html::script('media/js/dataTables.bootstrap.js');!!} 
<script type="text/javascript">
	

$(function(){




var rpe = $('#valor_rpe').val();
$("#excelColaborador").attr("href", "{{url('colaborador/evaluacion')}}/"+rpe+"")

console.log(rpe);	

$('#detallecolaborador').DataTable({


      //"lengthMenu": [["All", 5, 50, -1], ["All"]],
      "language": {
            "search":         "Buscar:",
    "paginate": {
        "first":      "Primera",
        "last":       "Ultima",
        "next":       "Siguiente",
        "previous":   "Anterior"
    },
            //"lengthMenu": "Ver _MENU_ registros por pagina",
            "lengthMenu": "Listado de todos los registros",
            "zeroRecords": "0 coincidencias",
            "info":           "Mostrando _START_ a _END_ de _TOTAL_ registros",
    "infoEmpty":      "Showing 0 to 0 of 0 registros",
    "infoFiltered":   "(filtrando de _MAX_ registros)",
        },
        processing: true,
        serverSide: true,
        "paginate": false,
        ajax: "{{url('DetalleColaboradorAjax')}}/"+rpe+"",

"fnCreatedRow": function( nRow, aData, iDataIndex ) {
      // Bold the grade for all 'A' grade browsers
        var $index = $(iDataIndex);
        var $nrow = $(nRow);
        //$nrow.css({"background-color":"#1de9b6"});
       if ( aData.calificacion >= 95)
       {
            //console.log("es 100");
            $nrow.css({"background-color":"#1de9b6"});
            //console.log(aData.nombre+"calificacion"+aData.calificacion);
       }
       else if(aData.calificacion == 0){

           $nrow.css({"background-color":"#FF0000"});
       }

       else{
           $nrow.css({"background-color":"#FF8000"});
       }
      
      //console.log(aData.calificacion +"nombre"+aData.nombre);
    },


        columns: [
            { data: 'zona' },
            { data: 'area',"fnCreatedCell": function (nTd, sData, oData, iRow, iCol) {
            $(nTd).html("<a href='{{url('colaboradorcontroller/AreaDatos')}}/"+oData.area+"'>"+oData.area+"</a>");
        }},
            { data: 'fecha_evaluacion'},
            { data: 'maniobra',"fnCreatedCell": function (nTd, sData, oData, iRow, iCol) {
                var $maniobra=oData.maniobra;

                //console.log($maniobra);
            $(nTd).html("<a href='{{url('colaboradorcontroller/Area1')}}/"+oData.maniobra+"'>"+oData.maniobra+"</a>");
        }},
            { data: 'calificacion'}
            
    
        ]
        
       
        
         });





});
</script>
@endsection