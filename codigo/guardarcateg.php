<?php

if(isset($_POST)){
	// Conexión a la base de datos
	require_once '../include/conexion.php';
	
	$nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($con, $_POST['nombre']) : false;
	
	// Array de errores
	$errores = array();
	
	// Validar los datos antes de guardarlos en la base de datos
	// Validar campo nombre
	if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
		$nombre_validado = true;
	}else{
		$nombre_validado = false;
		$errores['nombre'] = "Nombre no válido";
	}
	
	if(count($errores) == 0){
		$sql = "INSERT INTO categorias VALUES(NULL, '$nombre');";
		$guardar = mysqli_query($con, $sql);
		header("Location: ../index.php");
	}else{
		$_SESSION["errorcategory"] = $errores;
		header("Location: ../crearcategory.php");
	}
}




?>