$(function () {

var options={
chart:{
renderTo:'container'
type:'spline'
},
series:[{}]
};


$.getJSON( "{{route('colaboradorcontroller.create')}}", function(json) {
   console.log(json);
  })
  .done(function() {
    alert( "También sirve para saber que funcionó" );
  })
  .fail(function() {
    alert( "Ha ocurrido un error" );
  });


});