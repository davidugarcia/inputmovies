<?php

if(isset($_POST)){
	
	require_once '../include/conexion.php';


	$titulo = isset($_POST['title']) ? mysqli_real_escape_string($con, $_POST['title']) : false;
	$descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($con, $_POST['descripcion']) : false;
	$categoria = isset($_POST['category']) ? (int)$_POST['category'] : false;
	$usuario = $_SESSION['usuario']['id'];
	var_dump($_POST["title"]);
	var_dump($_POST["descripcion"]);
	var_dump($_POST["category"]);
	var_dump($_POST['usuario']['id']);
	

	// Validación
	$errores = array();

	
	if(empty($titulo)){
		$errores['titulo'] = 'El titulo no válido';
	}
	
	if(empty($descripcion)){
		$errores['descripcion'] = 'La descripción no válida';
		var_dump($errores['descripcion']);
		
	}
	
	if(empty($categoria) && !is_numeric($categoria) == 0){
		$errores['categoria'] = 'La categoría no válida';
	}
	
	
	if(count($errores) == 0){
		
		if(isset($_GET['editar'])){
			$entrada_id = $_GET['editar'];
			$usuario_id = $_SESSION['usuario']['id'];
			
			$sql = "UPDATE entradas SET titulo='$titulo', descripcion='$descripcion', categoriaid=$categoria
					WHERE id = $entrada_id AND usuarioid = $usuario_id";

		}else{
		
      $sql = "INSERT INTO entradas VALUES(null, $usuario, $categoria, '$titulo', '$descripcion', CURDATE());";
		}

		$guardar = mysqli_query($con, $sql);
      header("Location: ../inicio.php");

   }else{
		$_SESSION["erroresinputs"] = $errores;

		if(isset($_GET['editar'])){
			header("Location: ../editarentrada.php?id=".$_GET['editar']);
		}else{
			header("Location: ../crearinputs.php");
		}
	}
}

?>

