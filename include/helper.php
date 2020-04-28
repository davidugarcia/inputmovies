<?php 

//function para mostrar el error
function mostrarerror($errores, $campo){
   $alert ="";
if(isset($errores[$campo]) && !empty($campo)){
   $alert = '<div style = "margin: 5px"; class="alert alert-warning" role="alert">'. $errores[$campo] .'</div>';
};

return $alert;
};

//function para borrar errores de registrarte
function borrarErrores(){
	$borrado = false;
	
	if(isset($_SESSION['errores'])){
		$_SESSION['errores'] = null;
		$borrado = true;
	}

	if(isset($_SESSION['completado'])){
		$_SESSION['completado'] = null;
		$borrado = true;
	}

	return $borrado;
}

function Errores(){
	$borrar = false;

	// Borrar error de identificar
	if(isset($_SESSION['error_login'])){
		$_SESSION['error_login'] = null;
		$borrado = true;
   }
	
	return $borrar;
};
   
?>