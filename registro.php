<?php
 include_once("cempleado.php");
 
 //variables POST
 $nom=$_POST['nombres'];
 $car=$_POST['cargo'];
 $dep=$_POST['departamento'];
 $tel=$_POST['telefono'];
 sleep(2);

 //creamos el objeto $objempleados
 //y usamos su método crear
 $objempleados=new cEmpleado;
 if ($objempleados->crear($nom,$car,$tel,$dep)==true){
  echo "Registro grabado correctamente";
 }else{
  echo "Error de grabacion";
 }
 include('consulta.php');
?>
