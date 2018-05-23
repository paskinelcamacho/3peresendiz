<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Formulario de contacto </title>
    <link rel="stylesheet" type="text/css" href="CSS/contacto.css">
   
</head>
<body>
    <form action="enviar.php" method="post">
        <h2>Contacto</h2>
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="text" name="correo" placeholder="Correo" required>
        <input type="text" name="telefono" placeholder="Teléfono" required>
        <textarea name="mensaje" placeholder="Escriba aqui su mensaje" required></textarea>
        <input type="submit" value="Enviar" id="boton">
    </form>


</body>
</html>
