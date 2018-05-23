
<!DOCTYPE HTML>
<html>
<head>
<meta charset='UTF-8'>
<link rel="stylesheet" type="text/css" href="CSS/registro.css">
<title>Registro de usuarios</title>
<script src="jquery.validate.js"> </script>
<script src="jquery-3.3.1.js"> </script>
<script>
$("#commentForm").validate();
 </script>
</head>
<body>
<h2>Registro de usuarios</h2>
<div>
<form action="alta_registro.php" method="post" id="formulario">

<label>Nombre: </label><input type="text" name="nombre" required><br><br>
<label>Apellido paterno: </label><input type="text" name="apaterno" required><br><br>
<label>Apellido materno:</label> <input type="text" name="amaterno"><br><br>
</div>
<div>

<label>Teléfono: </label><input type="text" name="telefono" required><br><br>
</div>
<div>

<label>Correo electrónico:</label> <input type="mail" name="mail" required><br><br>
<input type="submit" value="Enviar">
</form>
</div>

</body>
<footer>
    <a href="creditos.html">Créditos</a>
</footer>
</html>
