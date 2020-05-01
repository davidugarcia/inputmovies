<?php

if(isset($_POST)){
	
	require_once 'include/conexion.php';
	
	$titulo = isset($_POST['title']) ? mysqli_real_escape_string($con, $_POST['title']) : false;
	$descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($con, $_POST['descripcion']) : false;
	$categoria = isset($_POST['category']) ? (int)$_POST['category'] : false;
   $usuario = $_SESSION['usuario']['id'];
   
   //var_dump($_POST["category"]);
   //die();

	// Validación
	$errores = array();
	
	if(empty($titulo)){
		$errores['titulo'] = 'El titulo no válido';
	}
	
	if(empty($descripcion)){
		$errores['descripcion'] = 'La descripción no válida';
	}
	
	if(empty($categoria) && !is_numeric($categoria)){
		$errores['categoria'] = 'La categoría no válida';
	}
	
	
	if(count($errores) == 0){
      $sql = "INSERT INTO entradas VALUES(null, $usuario, $categoria, '$titulo', '$descripcion', CURDATE());";
      $guardar = mysqli_query($con, $sql);
      header("Location: inicio.php");

   }else{
         $_session["erroresinputs"]= $errores;
         header("Location: crearinputs.php");
		}
}

?>

