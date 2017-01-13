@extends('cfe.main')
@section('css')
@endsection

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
<div class="row">
      <ol class="breadcrumb">
        <li><a href="#"><i class="material-icons blue600">settings</i></a></li>
        <li class="active">Config</li>
      </ol>
    </div><!--/.row-->
<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Configuracion de Metas</h1>
			</div>
      
		</div>


    <div class="row">
      
      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        
        <div class="form-group">
                <label for="sel1">Elige Centro:</label>
                <select class="form-control" name="centro_trabajo" id="centro_trabajo">
                  <option value="AREA ETLA">AREA ETLA</option>
                  <option value="AREA ZIMATLAN">AREA ZIMATLAN</option>
                  <option value="AREA OCOTLAN">AREA OCOTLAN</option>
                  <option value="AREA MIAHUATLAN">AREA MIAHUATLAN</option>
                  <option value="AREA IXTLAN">AREA IXTLAN</option>
                  <option value="AREA TLACOLULA">AREA TLACOLULA</option>
                  <option value="AREA OAXACA">AREA OAXACA</option>
                  <option value="Temporales Oax.">Temporales Oax.</option>

                </select>
             </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        
        <div class="form-group">
  <label for="usr">A&ntilde;o</label>
  <select class="form-control" name="year" id="year">
                  <option value="2016">2016</option>
                  <option value="2017">2017</option>
                  <option value="2018">2018</option>
                  <option value="2019">2019</option>
                  <option value="2020">2020</option>
               
                  

                </select>
</div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <button id="configurate" type="submit" class="btn btn-primary" style="margin-top: 28px;">Configurar</button>
        
      </div>
    </div>



   <div class="table-responsive table-condensed table-hover" style="margin-top: 5px;">
        <table id="dinamictable" class="table table-bordered table-hover">
          <thead>
            <tr class="success">
              <th>Mes</th>
              <th>Area</th>
              <th>Meta</th>
              <th>Personal Asignado</th>
              <th>A&ntilde;o</th>
              
              
            </tr>
          </thead>
          <tbody>
    

            
          </tbody>
        </table>
      </div>  


      <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5"></div>
      <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
        <button id="guardarConfiguracion" class="btn btn-button btn-primary">Guardar</button>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5"></div>

      </div>

<!--
      
      <div class="row">
      	
      	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

      	@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
      		
            
            {!! Form::open(['route' => ['metas.store'],'method' => 'POST']) !!}






             <div class="form-group">
                <label for="sel1">Elige Mes:</label>
                <select class="form-control" name="mes" id="mes">
                  <option value="Enero">Enero</option>
                  <option value="Febrero">Febrero</option>
                  <option value="Marzo">Marzo</option>
                  <option value="Abril">Abril</option>
                  <option value="Mayo">Mayo</option>
                  <option value="Junio">Junio</option>
                  <option value="Julio">Julio</option>
                  <option value="Agosto">Agosto</option>
                  <option value="Septiembre">Septiembre</option>
                  <option value="Octubre">Octubre</option>
                  <option value="Noviembre">Noviembre</option>
                  <option value="Diciembre">Diciembre</option>

                </select>
             </div>

             <div class="form-group">
  <label for="usr">Meta:</label>
  <input type="number" class="form-control" id="meta" name="meta" placeholder="Ingresa el numero de maniobras" required>
</div>

 <div class="form-group">
                <label for="sel1">Elige Centro:</label>
                <select class="form-control" name="centro_trabajo" id="centro_trabajo">
                  <option value="AREA ETLA">AREA ETLA</option>
                  <option value="AREA ZIMATLAN">AREA ZIMATLAN</option>
                  <option value="AREA OCOTLAN">AREA OCOTLAN</option>
                  <option value="AREA MIAHUATLAN">AREA MIAHUATLAN</option>
                  <option value="AREA IXTLAN">AREA IXTLAN</option>
                  <option value="AREA TLACOLULA">AREA TLACOLULA</option>
                  <option value="AREA OAXACA">AREA OAXACA</option>
                  <option value="Temporales Oax.">Temporales Oax.</option>

                </select>
             </div>
<div class="form-group">
  <label for="usr">Personal Asignado:</label>
  <input type="number" class="form-control" id="personalAsignado" name="personalAsignado" placeholder="Numero de Personal Asignado" required>
</div>

<div class="form-group">
  <label for="usr">A&ntilde;o</label>
  <select class="form-control" name="year" id="year">
                  <option value="2016">2016</option>
                  <option value="2017">2017</option>
                  <option value="2018">2018</option>
                  <option value="2019">2019</option>
                  <option value="2020">2020</option>
               
                  

                </select>
</div>


    
          <button type="submit" class="btn btn-primary">Guardar</button>
            {!! Form::close() !!}

      	</div>
      </div>
      

-->

		</div>



@endsection

@section('js')
{!!Html::script('media/js/jquery.js');!!}
<script type="text/javascript">
  $(function(){

var meses=[
'Enero','Febrero','Marzo','Abril',
'Mayo','Junio','Julio','Agosto',
'Septiembre','Octubre','Noviembre',
'Diciembre']; 
$('#configurate').click(function(e){
  var anio = $('#year').val();
var centro=$('#centro_trabajo').val();
    e.preventDefault();

 //$("#dinamictable").trigger("reset");
$('#dinamictable tr').remove();
console.log('asdf');
  var tabla = $("#dinamictable");
  
 
for(var i=0;i<=11;i++){
//console.log(i);

tabla.append(
    "<tr class='add'><td class='danger'>" + meses[i] +  
    "</td><td class='danger'>"+centro+"</td><td class='info'><input type='number' id="+i+"meta placeholder='meta'></td><td class='info'><input type='number' id="+i+"personal placeholder='personal Asignado'></td><td class='danger'>"+anio+"</td></tr>");



}


  }); 




$('#guardarConfiguracion').click(function(){
var anio = $('#year').val();
var centro=$('#centro_trabajo').val();

    for(var i=0;i<=11;i++){
     if($("#"+i+"meta").val() == "" || $("#"+i+"personal").val() == ""){
     var si = true;
   }


  
}

 if(si==true){

    alert('No se Admiten Valores Nulos');
   }

else{


var metas=[];
var personal=[];

  for(var i=0;i<=11;i++){
     metas[i]=$("#"+i+"meta").val();
     personal[i]=$("#"+i+"personal").val();    
}

//console.log(metas);
//console.log(personal);
 $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
$.ajax({
    url : "{{route('metas.store')}}",
    type : 'POST',
    data : { metas : metas,personal:personal,year:anio,centro:centro,meses:meses},
    dataType : 'json',
    success : function(data) {
     
 //console.log(data);


 window.location="{{route('metas.index')}}";

    },
    error : function(xhr, status) {
        alert('Disculpe, existió un problema');
    },
 
    // código a ejecutar sin importar si la petición falló o no
    complete : function(xhr, status) {
        //alert('Petición realizada');
    }
});




}

});







   





  });
</script>

@endsection