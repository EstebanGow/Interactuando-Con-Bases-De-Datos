<?php

  	require_once('conector.php');

  	$datos = array(
      'nombre' => 'Yohan Esteban Gomez',
      'email' => 'esteban@nextu.com',
      'clave' => password_hash("123456", PASSWORD_DEFAULT),
      'nacimiento' => '1993-08-14');

    $con = new ConectorBD('localhost','nextu','');
  	$respuesta = $con->iniciarConexion('agenda_db');

  	if ($respuesta == 'OK') {
    	if($con->insertarRegistro('usuarios', $datos)){
      		$respuesta = "exito en la inserción";
	    }else {
	      	$respuesta = "Hubo un error y los datos no han sido cargados";
	    }
  	}else {
    	$respuesta = "No se pudo conectar a la base de datos";
  	}
    $con->cerrarConexion();
?>
