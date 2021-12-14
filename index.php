<!DOCTYPE html>
<html>
<head>
	<title>Registro Usuarios</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>Registro de Datos Clínicos</h1>
    	<input type="text" name="rut" placeholder="RUT (XX.XXX.XXX-X)">
        <input type="text" name="nombre" placeholder="Nombres">
        <input type="text" name="apellido" placeholder="Apellidos">
        <input type="text" name="direccion" placeholder="Dirección">
        <input type="text" name="ciudad" placeholder="Ciudad">
        <input type="number" name="telefono" placeholder="Teléfono">
        <input type="email" name="email" placeholder="Email">
        <input type="text" name="fnac" placeholder="Fecha de Nacimiento">
        <p><option>
        
        </option>
        <p>Estado Civil: 
           <select name="ecivil">
             <option>Soltero(a)</option>
             <option>Casado(a)</option>
             <option>Viudo(a)</option>
           </select>
        </p>
        <input type="text" name="comentarios" placeholder="Comentarios">
        <input type="submit" name="register" value="Guardar">
        <input type="reset" value="Limpiar" onclick="location.href = 'index.php' ">
        <input type="button" name="Cerrar" id="button" value="Cerrar" onclick="location.href = 'https://www.google.com' ">
    

    </form>
        <?php 
        include("registrar.php");
        ?>
</body>
</html>


