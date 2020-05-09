<?php

// al iniciar sesion cuando se va crear una categoria, crear o editar entrada o editar usuario
if(!isset($_SESSION)){
	session_start();
}

if(!isset($_SESSION['usuario'])){
	header("Location: inicio.php");
}


?>