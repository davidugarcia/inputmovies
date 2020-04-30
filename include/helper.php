<?php 

//mostrar error de campos vacios de registro
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

// Borrar error de iniciar sesion
function Errores(){
	$borrar = false;	
	if(isset($_SESSION['error_login'])){
		$_SESSION['error_login'] = null;
		$borrado = true;
   }
	return $borrar;
};

// function de categorias --- encabezado.php * base de datos tabla categorias
function conseguirCategorias($conectar){
	$sql = "SELECT * FROM categorias ORDER BY id ASC;";
	$categorias = mysqli_query($conectar, $sql);
	
	$resultado = array();

	if($categorias && mysqli_num_rows($categorias) >= 1){
		$resultado = $categorias;
	}
	
	return $resultado;
}

/*mostrar datos de categoria y entradas base de datos
inicio.php - base de datos tabla categorias y entradas*/
function conseguirentradas($conectar){
	
	$sql = "SELECT e.*, c.nombre AS 'Categoria' FROM entradas e
	 INNER JOIN categorias c ON e.categoriaid = c.id 
	 ORDER BY e.id DESC LIMIT 5";

	$entrada = mysqli_query($conectar, $sql);
	
	$result = array();
	
	if($entrada && mysqli_num_rows($entrada) >= 1){
		$result = $entrada;
	}
	
	return $result;
}
   
?>