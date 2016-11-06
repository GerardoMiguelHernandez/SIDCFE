

 <div class="navbar-fixed z-depth-5">
<nav class="top-nav white scrollTo" style="width: 100%; height: 100px">
    <div class="nav-wrapper" style="padding-top: 12px;">
     
            
        <a href="" class="brand-logo" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();"><img src="/img/cfe.jpg">

                                                 



      </a>
      <form id="logout-form" action="" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
<ul class="right hide-on-med-and-down"> 
<!--
<li>
  <div class="nav-wrapper">
      <form>
     
        <div class="input-field blue600-text">
          <input id="search" class="blue600-text" type="search" required>
          <label for="search"><i class="material-icons blue600">search</i></label>
          <i class="material-icons">close</i>
        </div>

      

      </form>
    </div>
</li> -->
<!--
<li><a href="#modalsearch" class="modal-trigger"><i class="material-icons blue600">search</i></a> </li> -->
<li><a href=""><i class="material-icons left blue600">flash_on</i><span class="blue-text text-darken-4">Eventos</span></a></li>
        <li><a href=""><i class="material-icons left blue600">library_books</i><span class="blue-text text-darken-4">Albums</span></a></li>
        <li><a href=""><i class="material-icons left blue600 iconfont">picture_in_picture</i><span class="blue-text text-darken-4">Categorias</span></a></li>
         <li><a href=""><i class="material-icons left blue600">gps_fixed</i><span class="blue-text text-darken-4">Centros</span></a></li>
         <li><a href="">        <i class="material-icons blue600 left">photo_album</i><span class="blue-text text-darken-4">Imagenes</span></a></li>
 
<li>

<a href="" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Salir" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();"><i class="material-icons left blue600">power_settings_new</i></a>

                                                 <form id="logout-form" action="" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>

</li>



 <li><a href="#files" class="tooltipped modal-trigger" data-position="bottom" data-delay="50" data-tooltip="Subir Archivos"><i class="material-icons blue600 left">cloud_upload</i></a></li>

 <li><a class="dropdown-button" href="#!" data-activates="dropdown1"><span class="blue-text text-darken-4">Ordenar por</span><i class="material-icons left blue600">arrow_drop_down</i></a></li>
        


</ul>            
      
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons blue600">menu</i></a>

<ul id="mobile-demo" class="side-nav">
    <li><div class="userView">
      <img class="background" src="images/office.jpg">
      <a href="#!user"><img class="circle" src="images/yuna.jpg"></a>
      <a href="#!name"><span class="white-text name">John Doe</span></a>
      <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
    </div></li>
    <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
    <li><a href="#!">Second Link</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Subheader</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
  </ul>

    </div>
  </nav>
  </div>
<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">two</a></li>
  <li class="divider"></li>
  <li><a href="#!">three</a></li>
</ul>




    <div id="modalsearch" class="modal transparent">
    <div class="modal-content">
      

<div class="page-login">
  <div class="center">
      <div class="card z-depth-5" style="margin:0% auto; max-width:400px;">
        <div class="card-header">
        
          <h5 class="header center purple-text text-darken-4">Buscar</h5> 
        </div>
        <div class="card-content">
          
          dsss
        </div>
        
      </div>
    </div>
    </div>
    
  </div></div>
  
<div id="files" class="modal transparent">
    <div class="modal-content">
      

<div class="page-login">
  <div class="center">
      <div class="card z-depth-5">
        <div class="teal card-header">
        
            <h5 class="header center blue-text text-darken-4">Subir archivo</h5>

        </div>
        <div class="card-content">
          <table class="bordered responsive-table highlight">
           <thead>
          <tr class="blue-text text-darken-2">
              <th data-field="id">zona</th>
              <th data-field="id">area</th>
              <th data-field="name">RPE</th>
              <th data-field="name">nombre</th>
              <th data-field="name">fecha_evaluacion</th>
              <th data-field="name">maniobra</th>
              <th data-field="name">calificacion</th>
            
          </tr>
        </thead>
        </table>
          {!! Form::open(['route'=>'colaboradorcontroller.store','method'=>'POST'])!!}
          {{ csrf_field() }}
            <div class="center">               
    <input type="file" class="dropzone center" id="my-dropzone" name="file" value="" multiple>
    
    <div class="dropzone-previews"></div>
   </div>
            
             
            <br>
              <button type="submit" id="categoria" class="btn-floating btn-large waves-effect waves-light red center"><i class="material-icons">add</i></button>
        {!!Form::close()!!}
        </div>
        
      </div>
    </div>
    </div>
    
  </div></div>