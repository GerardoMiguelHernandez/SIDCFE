<link rel="stylesheet" type="text/css" href="{{asset('css/materialize.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/index.css')}}">
<meta name="_token" content="{!! csrf_token() !!}" />

<div class="page-login">
  <div class="center">
      <div class="card bordered z-depth-5" style="margin:0% auto; max-width:400px;">
        <div class="card-header">
           <i class="material-icons medium white-text">perm_identity</i>

        </div>
        <div class="card-content">
          <form>
         
          <div class="input-field col s12">
              <input id="nombre" name="nombre" type="text" class="validate" required>
              <label for="Nombre">Nombre</label>
            </div>
            <div class="input-field col s12">
              <input id="email" name="email" type="email" class="validate" required>
              <label for="username">Email</label>
            </div>
            <div class="input-field col s12">
              <input id="password" type="password" name="password" class="validate">
              <label for="password">Password</label>
            </div>
            <br>
               
              <button type="submit" id="guardar" class="btn blue-grey right waves-effect waves-light white-text">guardar</button>
          </form>
        </div>
       
      </div>
    </div>
    </div>


<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('js/materialize.js')}}"></script>

      <script type="text/javascript">
        
        $(function(){
          
          $('#guardar').click(function(e){
            e.preventDefault();
            
          var formData = {
            nombre: $('#nombre').val(),
            email:$('#email').val(),
            password: $('#password').val(),
           }

         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
           $.ajax({
    // la URL para la petición
    url : "{{ route('usuarios.store') }}",
 
    // la información a enviar
    // (también es posible utilizar una cadena de datos)
    data : formData,
 
    // especifica si será una petición POST o GET
    type : 'POST',
 
    // el tipo de información que se espera de respuesta
    dataType : 'json',
 
    // código a ejecutar si la petición es satisfactoria;
    // la respuesta es pasada como argumento a la función
    success : function(json) {
        console.log(json);
    },
 
    // código a ejecutar si la petición falla;
    // son pasados como argumentos a la función
    // el objeto de la petición en crudo y código de estatus de la petición
    error : function(xhr, status) {
        alert('Disculpe, existió un problema');
    },
 
    // código a ejecutar sin importar si la petición falló o no
    complete : function(xhr, status) {
        alert('Petición realizada');
    }
});


          });


        });
      </script>