<?php
require_once 'include/conexion.php';

if(isset($_SESSION['usuario']) && isset($_GET['id'])){
   $entrada_id = $_GET['id'];
   
   
	$usuario_id = $_SESSION['usuario']['id'];
	
	$sql = "DELETE FROM entradas WHERE usuarioid = $usuario_id AND id = $entrada_id";
	$borrar = mysqli_query($con, $sql);
}

header("Location: inicio.php");