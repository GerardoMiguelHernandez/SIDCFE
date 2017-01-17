@extends('cfe.main')
@section('css')
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
				<h2 class="page-header">Seleccionar</h2>
			</div>
      </div>



<div class="row">
	
<div class="col-xs-3 col-sm-3 col-md-4 col-lg-4">
	<div class="form-group">
                <label for="sel1">Elige Area:</label>
                <select class="form-control" name="mes" id="areadinamico">
                @foreach($areas as $area)
                  <option value="{{$area->area}}">{{$area->area}}</option>
                @endforeach  
                </select>
             </div>
</div>
<div class="col-xs-3 col-sm-3 col-md-4 col-lg-4">
	<div class="form-group">
                <label for="sel1">Elige Maniobra:</label>
                <select class="form-control" name="mes" id="maniobradinamico">
                @foreach($maniobras as $maniobra)
                  <option value="{{$maniobra->maniobra}}">{{$maniobra->maniobra}}</option>
                @endforeach  
                </select>
             </div>
</div>
<div class="col-xs-3 col-sm-3 col-md-4 col-lg-4" style="padding-top: 23px;">
<div class="row">
<div class="col-sm-3">	
  <button class="btn btn-primary" id="filtrar_dinamico">Filtrar</button>
  </div>


  <div class="col-sm-3 col-sm-offset-3">
  <a href="" id="enlace_excel1" data-toggle="tooltip" data-placement="left" title="Generar Excel"><i class="fa fa-file-excel-o fa-3x" style="color: green;" aria-hidden="true"></i>
   </a>
   </div>
</div>
</div>

</div>
     


<!-- en esta seccion inicia la tabla que vamos a cargar dinamicamente con ajax y datatables -->

<div class="table-responsive table-condensed table-hover" style="margin-top: 5px;">
        <table id="dinamictable" class="table table-bordered table-hover">
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


<script type="text/javascript">
$(function() {
//var maniobra = $('#maniobradinamico').val();

$('#filtrar_dinamico').click(function(e){
e.preventDefault();
var maniobra = $('#maniobradinamico').val();
var area = $('#areadinamico').val();
$("#enlace_excel1").attr("href", "{{url('colaboradorcontroller/Maniobras/Excel')}}/"+maniobra+"/"+area+"")
console.log(area);

  $('#dinamictable').DataTable({
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
     //   ajax:"{{url('colaboradorcontroller/maniobra')}}/"+maniobra+"",
   ajax:"{{url('colaboradorcontroller/Maniobras')}}/"+maniobra+"/"+area+"",
        //colaboradorcontroller/Maniobras/{maniobra}/{area}

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
       else if(aData.calificacion < 95){

           $nrow.css({"background-color":"#ffcdd2"});
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


}) ;   

 });
</script>
@endsection