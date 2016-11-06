<link rel="stylesheet" type="text/css" href="{{asset('css/materialize.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/index.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('js/highcharts/css/highcharts.css')}}">

<table class="bordered responsive-table highlight">
        <thead>
          <tr>
             
              <th data-field="id">RPE</th>
              <th data-field="name">Nombre</th>
              <th data-field="name">Apellido Paterno</th>
              <th data-field="name">Apellido Materno</th>
              <th data-field="id">Fecha de Nacimiento</th>
              <th data-field="name">Edad</th>
              <th data-field="name">Telefono</th>
              <th data-field="name">Correo</th>
              <th data-field="name">Escolaridad</th>
               <th data-field="name">Fecha Ingreso</th>
              <th data-field="name">Nombre Contrato </th>
              <th data-field="name">Seccion</th>
              <th data-field="name">Fecha IngresoPuesto</th>
               <th data-field="name">Jefe</th>
               <th data-field="name">idPuesto</th>
              <th data-field="name">nCentro</th>
              <th data-field="name">nEmpresa</th>
              <th data-field="name">Foto</th>
              <th data-field="name">Puesto superior</th> 
          </tr>
        </thead>

        <tbody>
       
        @foreach($colaboradores as $colaborador)
          <tr class=" teal accent-1">
           
            
            <td class="light-blue lighten-1">{{$colaborador->RPE}}</td>
            <td>{{$colaborador->nombrecolaborador}}</td>
            <td>{{$colaborador->apellidop}}</td>
            <td>{{$colaborador->apellidom}}</td>
            <td>{{$colaborador->fecha_nac}}</td>
            <td>{{$colaborador->edad}}</td>
            <td>{{$colaborador->telefono}}</td>
            <td>{{$colaborador->correo}}</td>
            <td>{{$colaborador->escolaridad}}</td>
            <td>{{$colaborador->fecha_ingreso}}</td>
            <td>{{$colaborador->nombre_contrato}}</td>
            <td>{{$colaborador->seccion}}</td>
            <td>{{$colaborador->fecha_ingresopuesto}}</td>
            <td>{{$colaborador->jefe}}</td>
            <td>{{$colaborador->idpuesto}}</td>
            <td>{{$colaborador->ncentro}}</td>
            <td>{{$colaborador->nempresa}}</td>
            <td>{{$colaborador->foto}}</td>
            <td>{{$colaborador->puesto_superior}}</td> 


            <td><a  href="#" class="waves-effect waves-light btn red darken-1 tooltipped" onclick="return confirm('Esta seguro que desea eliminar?')" data-position="bottom" data-delay="50" data-tooltip="Eliminar"><i class="material-icons left">delete</i></a></td>
            <td><a href="#" class="waves-effect waves-light btn teal lighten-2 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Editar"><i class="material-icons left">mode_edit</i></a></td>

           
          
          </tr>
          @endforeach 
        </tbody>  
      </table>

       <ul class="pagination center">
  
    <li class="waves-effect waves-purple">{!! $colaboradores->render() !!}</li>
  </ul>



 {{$bateria}}

  <div id="chart_div"></div>


<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
 <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('js/materialize.js')}}"></script>
       <script type="text/javascript" src="{{asset('js/highcharts/highcharts.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/highcharts/modules/exporting.js')}}"></script>
       <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Usuarios', {{$count_usuarios}}],
          ['Colaboradores', {{$count_colaborador}}],
         
        ]);

        // Set chart options
        var options = {'title':'Total',
                       'width':400,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>

    <script type="text/javascript">
      

      $(function(){
$.get( "{{route('colaborador.create')}}", function(json) {
    console.log(json);
    alert(json.usuarios);

  })
  .done(function() {
    alert( "También sirve para saber que funcionó" );
  })
  .fail(function() {
    alert( "Ha ocurrido un error" );
  });

      });
    </script>
    <script type="text/javascript">
      
     $(function () {

    $(document).ready(function () {

        // Build the chart
        $('#container').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Porcentaje de usuarios'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
                

     

 
            series: [{
                name: 'Brands',
                colorByPoint: true,
                data: [{
                    name: 'Microsoft Internet Explorer',
                    y: {{$count_colaborador}}
                }, {
                    name: 'Chrome',
                    y: {{$count_usuarios}},
                    sliced: true,
                    selected: true
                }]
            }] 

        });
    });

});
    </script>

