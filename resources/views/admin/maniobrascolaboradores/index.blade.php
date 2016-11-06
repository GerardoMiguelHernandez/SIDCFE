@extends('admin.main')
@section('content')
<div class="card-panel grey lighten-5">
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
        @foreach($maniobras as $centro)
          <tr class="teal-text text-darken-4">
            <td>{{$centro->zona}}</td>
            <td>{{$centro->area}}</td>
            <td>{{$centro->RPE}}</td>
            <td>{{$centro->nombre}}</td>
            <td>{{$centro->fecha_evaluacion}}</td>
            <td>{{$centro->maniobra}}</td>
            <td>{{$centro->calificacion}}</td>
            
            <!--<td><a href="" class="waves-effect waves-light btn red darken-1 tooltipped" data-position="bottom" onclick="return confirm('Esta seguro que desea eliminar?')" data-delay="50" data-tooltip="Eliminar"><i class="material-icons">delete_sweep</i></a></td>
            <td><a href=""class="waves-effect waves-light btn teal lighten-2 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Editar"><i class="material-icons left">mode_edit</i></a></td> -->
             
          </tr>
          @endforeach
        </tbody>
      </table>
     
<div class="center">
  <ul class="pagination">
    
  
    {!! $maniobras->render()!!}
   
   
  </ul>
</div>
</div>


  <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
    <a href="#modal5" class="btn-floating btn-large red modal-trigger click-to-toggle">
      <i class="large material-icons">search</i>
    </a>
  </div>

   <div id="modal5" class="modal transparent">
    <div class="modal-content">
      

<div class="page-login">
  <div class="center">
      <div class="card z-depth-5">
        <div class="card-header teal">
   <h5 class="header center black-text text-darken-4">Buscar</h5>
 

        </div>
        <div class="card-content">
          <div class="nav-wrapper">
      <form method="GET" action="{{url('datos')}}">
        <div class="input-field">
          <input id="input_buscar" name="input_buscar" class="red-text text-darken-4" type="search" required>
          <label for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form>
    </div>
           
        </div>
        
      </div>
    </div>
    </div>
    
  </div></div>

@endsection




