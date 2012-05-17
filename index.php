<html>
<head>
<title>Registro de clientes</title>
<script language="JavaScript" type="text/javascript" src="ajax.js"></script>
</head>
<body>
<form name="nuevo_empleado" action="" onSubmit="enviarDatosEmpleado(); return false">
<h2>Nuevo cliente tales trines/h2>
<p>Nombres 
<label>
<input name="nombres" type="text" />
</label>
</p>
<p>Cargo 
<label>
<input name="cargo" type="text" />
</label>
</p>
<p>Departamento 
<label>
<select name="departamento">
<option value="Informatica">Informatica</option>
<option value="Contabilidad">Contabilidad</option>
<option value="Administracion">Administracion</option>
<option value="Logistica">Logistica</option>
</select>
</label>
</p>
<p>telefono <strong></strong>
<label>
<input name="telefono" type="text" />
</label>
</p>
<p>
<label>
<input type="submit" name="Submit" value="Grabar" />
</label>
</p>
</form>
<span> <a href="consulta_parametrizada.php">ir a consultas</a></span>   
<div id="resultado"><?php include('consulta.php');?></div>
</body>
</html>
