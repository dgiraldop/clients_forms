function objetoAjax(){
 var xmlhttp=false;
 try {
  xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
 } catch (e) {
  try {
   xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  } catch (E) {
   xmlhttp = false;
  }
 }
 if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
  xmlhttp = new XMLHttpRequest();
 }
 return xmlhttp;
}

function enviarDatosEmpleado(){
 //donde se mostrará lo resultados
 divResultado = document.getElementById('resultado');
 divResultado.innerHTML= '<img src="anim.gif">';
 
 //valores de las cajas de texto 
 nom=document.nuevo_empleado.nombres.value;
 car=document.nuevo_empleado.cargo.value;
 dep=document.nuevo_empleado.departamento.value;
 tel=document.nuevo_empleado.telefono.value;
 
 //instanciamos el objetoAjax
 ajax=objetoAjax();

 //uso del medoto POST 
 //archivo que realizará la operacion
 //registro.php
 ajax.open("POST", "registro.php",true);
 ajax.onreadystatechange=function() {
  if (ajax.readyState==4) {
   //mostrar resultados en esta capa
   divResultado.innerHTML = ajax.responseText

   //llamar a funcion para limpiar los inputs
   LimpiarCampos();
  }
 }
 ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

 //enviando los valores
 ajax.send("nombres="+nom+"&cargo="+car+"&telefono="+tel+"&departamento="+dep)
}

//limpiando las cajas de texto
function LimpiarCampos(){
 document.nuevo_empleado.nombres.value="";
 document.nuevo_empleado.cargo.value="";
 document.nuevo_empleado.departamento.value="";
 document.nuevo_empleado.telefono.value="";
 document.nuevo_empleado.nombres.focus();
}

function MostrarConsulta(){
 params=document.consulta.params.value;   
 divResultado = document.getElementById('resultado');
 divResultado.innerHTML= '<img src="anim.gif">';
 ajax=objetoAjax();
 ajax.open("POST", "consulta.php", true);
 ajax.onreadystatechange=function() {
  if (ajax.readyState==4) {
   divResultado.innerHTML = ajax.responseText
  }
 }
 ajax.send("params="+params)
} 

