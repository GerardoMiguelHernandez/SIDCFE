@extends('cfe.main')
@section('css')

 {!!Html::style('media/css/jquery.dataTables.css');!!}
 {!!Html::style('media/css/dataTables.bootstrap.css');!!}
@endsection
@section('content')
<br>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
<div class="table-responsive">
<table id="example" class="table table-striped table-bordered" width="100%" cellspacing="0">
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
	/*$(function() {
    $('#example').DataTable();
} );*/

$(function() {
$('#example').DataTable({


	
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
                $('td', row).eq(6).css("color","red");
            }
        }
        
         }); });

	</script>

@endsection