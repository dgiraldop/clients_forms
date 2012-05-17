<html>
<head>
<title>Consulta Registro con AJAX</title>
<!-- referenciamos al archivo ajax.js donde se encuentra nuestra funcion objetoAjax-->
<script language="JavaScript" type="text/javascript" src="ajax.js"></script>
</head>
<body>
<!-- En "onsubmit" escribimos la función 'MostrarConsulta' que creamos en javascript, con su parametro que es el archivo que vamos a mostrar, en este caso 'consulta.php'-->
<form name="consulta" action="" onSubmit="MostrarConsulta(); return false">
<label>
<input type="hidden" name="params" value="true">    
<input type="submit" value="Consultar"/>
</label>
</form>
<div id="resultado"></div>
</body>
</html> 
