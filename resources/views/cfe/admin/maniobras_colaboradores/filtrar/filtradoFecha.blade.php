@extends('cfe.main')

@section('css')
{!!Html::style('media/css/jquery.dataTables.css');!!}
{!!Html::style('css/bootstrap-datepicker.css');!!}

@endsection

@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

<div class="row">
      <ol class="breadcrumb">
        <li><a href="#"><i class="material-icons blue600">settings</i></a></li>
        <li class="active">Maniobras</li>
      </ol>
    </div><!--/.row-->
<div class="row">

			<div class="col-lg-10 col-xs-12 col-md-10">
				<h2 class="page-header">Filtrar por Fechas</h2>
			</div>
      </div>


<div class="row">
	
<div class="col-xs-3 col-sm-3 col-md-4 col-lg-4">
<div class="input-group date">
    <input class="form-control datepicker" id="fecha">
    <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
    </div>
</div>

</div>
<div class="col-xs-3 col-sm-3 col-md-4 col-lg-4">
	
<div class="input-group date">
    <input class="form-control datepicker" id="fecha1">
    <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
    </div>
</div>

</div>
<div class="col-xs-3 col-sm-3 col-md-4 col-lg-4">
<div class="row">
<div class="col-sm-3">	
  <button class="btn btn-primary" id="filtrar_fecha">Filtrar</button>
  </div>

<div class="col-sm-3 col-sm-offset-3">
  <a href="" id="enlace_excel" data-toggle="tooltip" data-placement="left" title="Generar Excel"><i class="fa fa-file-excel-o fa-3x" style="color: green;" aria-hidden="true"></i>
   </a>
   </div>
</div>
</div>

</div>



<!--- tablas  -->

<div class="table-responsive table-condensed table-hover" style="margin-top: 5px;">
    <table id="table_rangoFechas" class="table table-bordered table-hover">
          <thead>
            <tr class="info">
              <th>Zona</th>
              <th>Area</th>
              <th>RPE</th>
              <th>Nombre</th>
              <th>Fecha</th>
              <th>Maniobra</th>
              <th>Calificacion</th>
              
            </tr>
          </thead>
          <tbody>
           


            
          </tbody>
        </table>
      </div> 

</div>
@endsection


@section('js')
{!!Html::script('media/js/jquery.js');!!}
{!!Html::script('media/js/jquery.dataTables.js');!!}
{!!Html::script('media/js/dataTables.bootstrap.js');!!}
{!!Html::script('js/bootstrap-datepicker.js');!!}
<script type="text/javascript">
	
$('.datepicker').datepicker({
    format: 'yyyy-mm-dd',
    startDate: '-3y'
});
</script>

<script type="text/javascript">
	

	$(function(){

		$('#filtrar_fecha').click(function(e){
          e.preventDefault();
           var fecha=$('#fecha').val();
           var fecha1=$('#fecha1').val();
           console.log(fecha);
           console.log(fecha1); 
//asignar urla dinaminco  para generar archivo excel en base a los filtricos 


$("#enlace_excel").attr("href", "{{url('colaboradorcontroller/Fechas/Excel')}}/"+fecha+"/"+fecha1+"")



           $('#table_rangoFechas').DataTable({
       destroy:true,
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
        //ajax:'{{route('tabladatos')}}',
        ajax:"{{url('colaboradorcontroller/Fechas')}}/"+fecha+"/"+fecha1+"",
     //ajax:"{{url('colaboradorcontroller/maniobra')}}/"+maniobra+"",
  // ajax:"{{url('colaboradorcontroller/Fechas')}}/"+fecha+"/"+fecha1+"",
        //colaboradorcontroller/Maniobras/{maniobra}/{area}

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
            { data: 'zona'},
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


	});
</script>
@endsection