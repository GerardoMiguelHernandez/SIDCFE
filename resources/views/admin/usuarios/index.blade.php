<link rel="stylesheet" type="text/css" href="{{asset('css/materialize.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/index.css')}}">
<table class="bordered responsive-table highlight">
        <thead>
          <tr>
             
              <th data-field="id">Usuario</th>
              <th data-field="name">Password</th>
              <th data-field="name">Privilegio</th>
          </tr>
        </thead>

        <tbody>
        @foreach($usuarios as $work_center)
          <tr>
            
            <td>{{$work_center->usuario}}</td>
            <td>{{$work_center->contrasena}}</td>

            <td>{{$work_center->privilegio}}</td>

            <td><a  href="#" class="waves-effect waves-light btn red darken-1 tooltipped" onclick="return confirm('Esta seguro que desea eliminar?')" data-position="bottom" data-delay="50" data-tooltip="Eliminar"><i class="material-icons left">delete</i></a></td>
            <td><a href="#" class="waves-effect waves-light btn teal lighten-2 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Editar"><i class="material-icons left">mode_edit</i></a></td>

           
             
          </tr>
          @endforeach
        </tbody>
      </table>

      <script type="text/javascript" src="{{asset('js/materialize.js')}}"></script>