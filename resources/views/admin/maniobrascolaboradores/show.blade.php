@extends('admin.main')
@section('css')
{!! Html::style('js/highcharts/css/highcharts.css'); !!}
@endsection
@section('content')

<div class="row">	
<div class="col s12 m5 l4">

<div class="card large">
    <div class="card-image waves-effect waves-block waves-green" style="height: 450px;">
      <img class="activator circle img-responsive" src="/img/user.png">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">@foreach($informacion_trabajador as $info)
        {{$info->nombrecolaborador}} {{$info->apellidop}} {{$info->apellidom}} 
        
        @endforeach

        <i class="material-icons right waves-effect waves-teal">more_vert</i></span>
      <p><a href="#">
          {{$rpe}}
      </a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
      <p>Here is some more information about this product that is only revealed once clicked on.</p>
    </div>
  </div>


</div>

<div class="col s12 m7 l8">
	
	<div class="card-panel">

<div id="contenedor" style="height: 450px;">
      
    </div>   

		<!--
  <table class="bordered responsive-table highlight">
        <thead>
          <tr>
              <th data-field="id">Nombre</th>
              <th data-field="id">RPE</th>
              <th data-field="name">EDAD</th>
              <th data-field="name">TELEFONO</th>
              <th data-field="name">CORREO</th>
              <th data-field="name">ESCOLARIDAD</th>
            

            
          </tr>
        </thead>

        <tbody>
        @foreach($informacion_trabajador as $centro)
          <tr>
            
            <td>{{$rpe}}</td>
            <td>{{$centro->edad}}</td>
            <td>{{$centro->telefono}}</td>
            <td>{{$centro->correo}}</td>
            <td>{{$centro->escolaridad}}</td>
           

            
           
             
          </tr>
          @endforeach
        </tbody> 
      </table>-->


  
         

	

	</div>

</div>
</div>

<div class="row">
<div class="col s12 m12 l12 teal">
 <div class="row"> 
 <div class="col s12 m8 l9">
   hafoadf
 </div>  
 <div class="col s12 m4 l3">     
 <nav style="height: 50px;" class="white">
    <div class="nav-wrapper">
      <form>
        <div class="input-field">
          <input id="search" type="search" required>
          <label for="search"><i class="material-icons blue600">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form>
    </div>
  </nav>
  </div>
  </div> 

<div class="card-panel lighten-5">
<table class="bordered responsive-table striped teal">
        <thead>
          <tr class="blue-text text-darken-2  blue lighten-3">
              <th data-field="id">Zona</th>
              <th data-field="id">Area</th>
              <th data-field="name">RPE</th>
              <th data-field="name">Nombre</th>
              <th data-field="name">Fecha de Evaluacion</th>
              <th data-field="name">Maniobra</th>
              <th data-field="name">Calificacion</th>
            
          </tr>
        </thead>

        <tbody>
        @foreach($filtar_por_RPE as $centro)
          <tr class="teal-text text-darken-4">
            <td>{{$centro->zona}}</td>
            <td>{{$centro->area}}</td>
            <td>{{$centro->RPE}} </td>
            <td>{{$centro->nombre}}</td>
            <td>{{$centro->fecha_evaluacion}}</td>
            <td>{{$centro->maniobra}}</td>
            <td>{{$centro->calificacion}}</td>
             
          </tr>
          @endforeach
        </tbody>
      </table>
     {{$areas}}
<div class="center">
  <ul class="pagination">
    
  
    
   
   
  </ul>
</div>
</div>



   

</div></div>





@endsection

@section('js')
{!! Html::script('js/highcharts/js/highcharts.js'); !!}

{!! Html::script('js/highcharts/js/highcharts-3d.js'); !!}
{!! Html::script('js/highcharts/js/modules/exporting.js'); !!}
{!! Html::script('js/graficaHC.js'); !!}
@endsection
