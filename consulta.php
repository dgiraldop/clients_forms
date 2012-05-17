<?php
 include_once("cempleado.php");

 //creamos el objeto $objempleados de la clase cEmpleado
 $objempleados=new cEmpleado;

 echo $_POST["params"];
 //la variable $lista consulta todos los empleados
 $lista= $objempleados->consultar();
 
?>
<table style="border:1px solid #FF0000; color:#000099;width:400px;">
<tr style="background:#99CCCC;">
<td>Nombres</td>
<td>Cargo</td>
<td>Departamento</td>
<td>telefono</td>
</tr>
<?php
 while($row = mysql_fetch_array($lista)){
  echo "<tr>";
  echo "<td>".$row['nombre']."</td>";
  echo "<td>".$row['cargo']."</td>";
  echo "<td>".$row['departamento']."</td>";
  echo "<td>".$row['telefono']."</td>";
  echo "</tr>";
 }
?>
</table>
