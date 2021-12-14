<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['rut']) >= 1  && strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['direccion']) >= 1 && strlen($_POST['ciudad']) >= 1 && strlen($_POST['telefono']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['fnac']) >= 1 && strlen($_POST['ecivil']) >= 1) {
	    $rut = trim($_POST['rut']);
	    $nombre = trim($_POST['nombre']);
	    $apellido = trim($_POST['apellido']);
	    $direccion = trim($_POST['direccion']);
	    $ciudad = trim($_POST['ciudad']);
	    $telefono = trim($_POST['telefono']);
	    $email = trim($_POST['email']);
	    $fnac = trim($_POST['fnac']);
	    $ecivil = trim($_POST['ecivil']);
	    $comentarios = trim($_POST['comentarios']);
		$consulta = "INSERT INTO Ficha(rut, nombre, apellido, direccion, ciudad, telefono, email, fnac, ecivil, comentarios) VALUES ('$rut','$nombre','$apellido','$direccion','$ciudad','$telefono','$email','$fnac','$ecivil','$comentarios')";
		$resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">Datos Registrados Correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">Ocurrió un Error!</h3>
	    		
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">Todos los Campos son Obligatorios, Por Favor vuelva atrás en el Browser</h3>
           <?php
    }
}

?>
© Andrés Iván Muñoz Catalán - AIEP - Semana 3 - PRO402 - 2021.