@extends('cfe.main')

@section('css')
{!!Html::style('media/css/jquery.dataTables.css');!!}
@endsection


@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><i class="material-icons blue600">view_module</i></a></li>
				<li class="active">Detalles</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">{{$response->nombrecolaborador}} {{$response->apellidop}} {{$response->apellidom}} <small class="text-primary">{{$response->ncentro}}</small></h1>
			</div>
		</div><!--/.row-->



<div class="row"> <!-- comienza el row que contendra la fotico y datos del colaborador -->
                     
<div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
               <div style="margin-top: 15px;">     
              <img src="/imagen/{{$id}}" class="img-rounded">

              </div>
</div>


<div class="col-xs-12 col-sm-12 col-md-9 col-lg-10">

<div class="row" style="margin-top: 15px;">
			<div class="col-xs-12 col-md-6 col-lg-4">
				<div class="panel panel-blue panel-widget ">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							Seccion
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
							Edad
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">{{$response->edad}}</div>
							<div class="text-muted"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-4">
				<div class="panel panel-teal panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							Telefono
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">{{$response->telefono}}</div>
							<div class="text-muted"></div>
						</div>
					</div>
				</div>
			</div>
			
		</div><!--/.row-->



		<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-4">
				<div class="panel panel-blue panel-widget ">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							 Escolaridad
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"></div>
						<div class="text-primary">{{$response->escolaridad}}</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-4">
				<div class="panel panel-orange panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							Contrato
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





              <input id="valor_rpe" type="hidden" value="{{$id}}">


 
   <a href="" id="excelColaborador">
 	<i class="fa fa-file-excel-o fa-3x" aria-hidden="true"></i>
 	</a> 
             

<div class="table-responsive table-hover" style="margin-top: 5px;">
<table id="detallecolaborador" class="table table-bordered" width="100%" cellspacing="0">
        <thead>
            <tr class="success">
                <th>zona</th>
                <th>area</th>
                <th>RPE</th>
                <th>nombre</th>
                <th>fecha_evaluacion</th>
                <th>maniobra</th>
                <th>calificacion</th>
            </tr>
        </thead>
        <tfoot>
            <tr class="warning">
               <th>zona</th>
                <th>area</th>
                <th>RPE</th>
                <th>nombre</th>
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


  
      "language": {
            "search":         "Buscar:",
    "paginate": {
        "first":      "Primera",
        "last":       "Ultima",
        "next":       "Siguiente",
        "previous":   "Anterior"
    },
            "lengthMenu": "Ver _MENU_ registros por pagina",
            "zeroRecords": "0 coincidencias",
            "info":           "Mostrando _START_ a _END_ de _TOTAL_ registros",
    "infoEmpty":      "Showing 0 to 0 of 0 registros",
    "infoFiltered":   "(filtrando de _MAX_ registros)",
        },
        processing: true,
        serverSide: true,
        ajax: "{{url('DetalleColaboradorAjax')}}/"+rpe+"",

"fnCreatedRow": function( nRow, aData, iDataIndex ) {
      // Bold the grade for all 'A' grade browsers
        var $index = $(iDataIndex);
        var $nrow = $(nRow);
        //$nrow.css({"background-color":"#1de9b6"});
       if ( aData.calificacion == 100)
       {
            //console.log("es 100");
            $nrow.css({"background-color":"#1de9b6"});
            //console.log(aData.nombre+"calificacion"+aData.calificacion);
       } 
      
      //console.log(aData.calificacion +"nombre"+aData.nombre);
    },


        columns: [
            { data: 'zona' },
            { data: 'area',"fnCreatedCell": function (nTd, sData, oData, iRow, iCol) {
            $(nTd).html("<a href='{{url('colaboradorcontroller/AreaDatos')}}/"+oData.area+"'>"+oData.area+"</a>");
        }},
            { data: 'RPE',"fnCreatedCell": function (nTd, sData, oData, iRow, iCol) {
            $(nTd).html("<a href='{{url('DetalleColaborador')}}/"+oData.RPE+"'>"+oData.RPE+"</a>");
        }},
            { data: 'nombre'},
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