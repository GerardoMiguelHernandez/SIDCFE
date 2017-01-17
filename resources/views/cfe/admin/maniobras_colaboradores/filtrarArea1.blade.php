@extends('cfe.main')
@section('css')
{!!Html::style('media/css/jquery.dataTables.css');!!}
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
				<h2 class="page-header">{{$areaReal}}</h2>
			</div>
      <div class="col-lg-2 col-xs-12 col-md-2">
        <h5 class="label label-primary">TOTAL:{{$areas->count()}}</h5>
      </div>
      </div>




      <div class="row">
      <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-blue panel-widget ">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-5 widget-left">
              <i class="material-icons iconfont3">settings</i>
            </div>
            <div class="col-sm-9 col-lg-7 widget-down">
              <div class="text-primary">{{$zimatlan}}</div>
              <div class="text-danger">AREA ZIMATLAN</div>
              <div class="text-success">Promedio:{{number_format($zimatlan1->totalZimatlan,2)}}</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-orange panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-5 widget-left">
              <i class="material-icons iconfont3">work</i>
            </div>
            <div class="col-sm-9 col-lg-7 widget-down">
              <div class="text-primary">{{$etla}}</div>
              <div class="text-danger">AREA ETLA</div>
              <div class="text-success">Promedio:{{number_format($etla1->totalEtla,2)}}</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-teal panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-5 widget-left">
              <i class="material-icons iconfont3">place_ubication</i>
            </div>
            <div class="col-sm-9 col-lg-7 widget-down">
              <div class="text-primary">{{$ixtlan}}</div>
              <div class="text-danger">AREA IXTLAN</div>
              <div class="text-success">Promedio:{{number_format($ixtlan1->totalIxtlan,2)}}</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-red panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-5 widget-left">
              <i class="material-icons iconfont3">perm_identity</i>
            </div>
             <div class="col-sm-9 col-lg-7 widget-down">
              <div class="text-primary">{{$ocotlan}}</div>
              <div class="text-danger">AREA OCOTLAN</div>
              <div class="text-success">Promedio:{{number_format($ocotlan1->totalOcotlan,2)}}</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-red panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-5 widget-left">
              <i class="material-icons iconfont3">perm_identity</i>
            </div>
           <div class="col-sm-9 col-lg-7 widget-down">
              <div class="text-primary">{{$miahuatlan}}</div>
              <div class="text-danger">AREA MIAHUATLAN</div>
              <div class="text-success">Promedio:{{number_format($miahuatlan1->totalMiahuatlan,2)}}</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-red panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-5 widget-left">
              <i class="material-icons iconfont3">perm_identity</i>
            </div>
            <div class="col-sm-9 col-lg-7 widget-down">
              <div class="text-primary">{{$tlacolula}}</div>
              <div class="text-danger">AREA TLACOLULA</div>
              <div class="text-success">Promedio:{{ number_format($tlacolula1->totalTlacolula,2) }}</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-red panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-5 widget-left">
              <i class="material-icons iconfont3">perm_identity</i>
            </div>
            <div class="col-sm-9 col-lg-7 widget-down">
              <div class="text-primary">{{$oaxaca}}</div>
              <div class="text-danger">AREA OAXACA</div>
              <div class="text-success">Promedio:{{ number_format($oaxaca1->totalOaxaca,2) }}</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-red panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-5 widget-left">
              <i class="material-icons iconfont3">perm_identity</i>
            </div>
             <div class="col-sm-9 col-lg-7 widget-down">
              <div class="text-primary">{{$temporales}}</div>
              <div class="text-danger">Temporales Oax.</div>
              <div class="text-success">Promedio:{{ number_format($temporales1->totalTemporales,2) }}</div>
            </div>
          </div>
        </div>
      </div>
    </div><!--/.row-->
      <!--
      <div class="col-lg-1 col-xs-6 col-md-1">
        <a href="" data-toggle="modal" data-target="#mymodal4"><button type="button" class="btn btn-primary" style="border-radius: 100%; width: 35px;height: 35px;"><i class="material-icons">search</i></button> </a>
      </div>
      <div class="col-lg-1 col-xs-6 col-md-1">
        <a href="{{route('colaborador.area',$areaReal)}}"><button type="button" class="btn btn-primary" style="border-radius: 100%; width: 35px;height: 35px;"><i class="material-icons">refresh</i></button> </a>
      </div> -->
      <!--
      <div class="row">
      <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2 col-sm-offset-6 col-xs-offset-6 col-md-offset-10">
      <div class="btn-group btn-group-justified" role="group" aria-label="..">
      <div class="btn-group" role="group">
          <a href="" data-toggle="modal" data-target="#mymodal4"><button class="btn btn-group btn-default btn-success"><i class="material-icons blue600">search</i></button></a>
        </div>
        <div class="btn-group" role="group">
          <a href="{{route('colaborador.area',$areaReal)}}"><button class="btn btn-group btn-default btn-warning"><i class="material-icons blue600">refresh</i></button></a>
          
      </div>
      </div>
		</div>
    </div>   -->
		<div class="modal fade" id="mymodal4" tabindex="-1" role="dialog" arialabelledby="mymodallabel">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" arialabel="close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title">Buscar</h4>
    </div>
    <div class="modal-body">
      <form action="{{route('colaborador.area',$areaReal)}}" method="GET">
        
                           
                            
                                <input id="input_buscar2" type="text" class="form-control" name="input_buscar2" required>
                                <button class="btn btn-primary" type="submit">save changes</button>

                                
                            
                        

      </form>

    </div>
  </div>
</div>
  
</div>
<input id="oculto" type="hidden" value="{{$areaReal}}"></input>

<div class="row">

<div class="col-xs-8 col-sm-8 col-md-11 col-lg-11">
</div>
    
    <div class="col-xs-4 col-sm-4 col-md-1 col-lg-1 col-xs-offset-8 col-sm-offset-8 col-md-offset-11 col-lg-offset-11">
        

        <a href="{{route('excel.maniobra',$areaReal)}}" data-toggle="tooltip" data-placement="left" title="Generar Excel">
    <i class="fa fa-file-excel-o fa-3x" style="color: green;" aria-hidden="true"></i>
   </a>
    </div>
    
</div>

<div class="table-responsive table-condensed table-hover" style="margin-top: 5px;">
        <table id="filtarmaniobra" class="table table-bordered table-hover">
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

    var man = $('#oculto').val();

$('#filtarmaniobra').DataTable({


  
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
        ajax:"{{url('colaboradorcontroller/maniobra')}}/"+man+"",

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
        
       
        
         }); });
</script>
@endsection
