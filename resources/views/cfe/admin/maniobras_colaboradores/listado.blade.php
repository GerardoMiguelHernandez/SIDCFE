@extends('cfe.main')
@section('css')
{!!Html::style('media/css/jquery.dataTables.css');!!}
 {!!Html::style('media/css/dataTables.bootstrap.css');!!}
 {!! Html::style('js/highcharts/css/highcharts.css'); !!}
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
              <a href=""data-toggle="modal" data-target="#mymodal2"><i class="material-icons purple600 iconfont3">add</i></a>

            </div>
            <div class="col-sm-9 col-lg-7 widget-right">
              <div class="large">{{$aprobados->count()}}</div>
              <div class="text-muted">Aprobados</div>
            </div>
            </div>
      </div>
      </div>

      <div class="col-xs-12  col-sm-6 col-md-4 col-lg-4">
        <div class="panel panel-blue panel-widget ">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-5 widget-left">
              <a href=""data-toggle="modal" data-target="#mymodal2"><i class="material-icons purple600 iconfont3">remove</i></a>

            </div>
            <div class="col-sm-9 col-lg-7 widget-right">
              <div class="large">{{$reprobados->count()}}</div>
              <div class="text-muted">Reprobados</div>
            </div>
            </div>
      </div>
      </div>
      <div class="col-xs-12  col-sm-6 col-md-4 col-lg-4">
        <div class="panel panel-blue panel-widget ">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-5 widget-left">


             <a href=""data-toggle="modal" data-target="#grafica"><i class="material-icons purple600 iconfont3">insert_chart</i></a>

            </div>
            <div class="col-sm-9 col-lg-7 widget-right">
              <div class="large">{{$total->count()}}</div>
              <div class="text-muted">Total</div>
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


{!!Html::script('media/js/jquery.js');!!}
{!!Html::script('media/js/jquery.dataTables.js');!!}
{!!Html::script('media/js/dataTables.bootstrap.js');!!}
{!! Html::script('js/highcharts/js/highcharts.js'); !!}

{!! Html::script('js/highcharts/js/modules/exporting.js'); !!}
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
                $('td', row).eq(6).css("color","green");
            }
        }
        
         }); });



  </script>



<script type="text/javascript">
  
  $(function () {
    Highcharts.chart('graficalistado', {
        title: {
            text: 'Combination chart'
        },
        xAxis: {
            categories: ['Apples', 'Oranges', 'Pears', 'Bananas', 'Plums']
        },
        labels: {
            items: [{
                html: 'Total fruit consumption',
                style: {
                    left: '50px',
                    top: '18px',
                    color: (Highcharts.theme && Highcharts.theme.textColor) || 'black'
                }
            }]
        },
        series: [{
            type: 'column',
            name: 'Jane',
            data: [3, 2, 1, 3, 4]
        }, {
            type: 'column',
            name: 'John',
            data: [2, 3, 5, 7, 6]
        }, {
            type: 'column',
            name: 'Joe',
            data: [4, 3, 3, 9, 0]
        }, {
            type: 'spline',
            name: 'Average',
            data: [3, 2.67, 3, 6.33, 3.33],
            marker: {
                lineWidth: 2,
                lineColor: Highcharts.getOptions().colors[3],
                fillColor: 'white'
            }
        }, {
            type: 'pie',
            name: 'Total consumption',
            data: [{
                name: 'Jane',
                y: 13,
                color: Highcharts.getOptions().colors[0] // Jane's color
            }, {
                name: 'John',
                y: 23,
                color: Highcharts.getOptions().colors[1] // John's color
            }, {
                name: 'Joe',
                y: 19,
                color: Highcharts.getOptions().colors[2] // Joe's color
            }],
            center: [100, 80],
            size: 100,
            showInLegend: false,
            dataLabels: {
                enabled: false
            }
        }]
    });
});

</script>
@endsection


