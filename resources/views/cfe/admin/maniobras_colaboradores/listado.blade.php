@extends('cfe.main')
@section('css')
{!!Html::style('media/css/jquery.dataTables.css');!!}
 {!!Html::style('media/css/dataTables.bootstrap.css');!!}
@endsection

@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
<div class="row">
      <ol class="breadcrumb">
        <li><a href="#"><i class="material-icons blue600">contacts</i></a></li>
        <li class="active">Listado General</li>
      </ol>
    </div><!--/.row-->
<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Listado Total de Evaluaciones</h1>
			</div>
      
		</div>


    <div class="row">
      <div class="col-xs-12  col-sm-6 col-md-4 col-lg-4">
        <div class="panel panel-blue panel-widget ">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-5 widget-left">
              <a href=""data-toggle="modal" data-target="#mymodal2"><i class="material-icons purple600 iconfont3">settings</i></a>

            </div>
            </div>
      </div>
      </div>

      <div class="col-xs-12  col-sm-6 col-md-4 col-lg-4">
        <div class="panel panel-blue panel-widget ">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-5 widget-left">
              <a href=""data-toggle="modal" data-target="#mymodal2"><i class="material-icons purple600 iconfont3">settings</i></a>

            </div>
            </div>
      </div>
      </div>
      <div class="col-xs-12  col-sm-6 col-md-4 col-lg-4">
        <div class="panel panel-blue panel-widget ">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-5 widget-left">
              <a href=""data-toggle="modal" data-target="#mymodal2"><i class="material-icons purple600 iconfont3">settings</i></a>

            </div>
            </div>
      </div>
      </div>
     
      
      
    </div><!--/.row-->

    


   
<div class="table-responsive">
<table id="listadogeneral" class="table table-striped table-bordered" width="100%" cellspacing="0">
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
@section('js')

{!!Html::script('media/js/jquery.js');!!}
{!!Html::script('media/js/jquery.dataTables.js');!!}
{!!Html::script('media/js/dataTables.bootstrap.js');!!}
<script type="text/javascript">
  /*$(function() {
    $('#example').DataTable();
} );*/

$(function() {
$('#listadogeneral').DataTable({


  
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
        ajax:'{{route('tabladatos')}}',
        columns: [
            { data: 'zona' },
            { data: 'area'},
            { data: 'RPE'},
            { data: 'nombre'},
            { data: 'fecha_evaluacion'},
            { data: 'maniobra'},
            { data: 'calificacion'}
            
    
        ],

        "createdRow": function ( row, data, index ) {
            if ( data[6] == 100 ) {
                $('td', row).css('background-color','red');
            }
        }

         }); });


  </script>


@endsection
@endsection

