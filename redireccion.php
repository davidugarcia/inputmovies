<?php

// al iniciar sesion cuando se va crear una categoria o entradas
if(!isset($_SESSION)){
	session_start();
}

if(!isset($_SESSION['usuario'])){
	header("Location: inicio.php");
}

?>