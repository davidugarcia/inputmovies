<?php

if(isset($_POST)){

   // Conexión a la base de datos
   require_once 'include/conexion.php';
   
   // Iniciar sesión --- conexion.php line 15
	if(!isset($_SESSION)){
		session_start();
	}

   //recorger valores
   // ver si existen y escapar datos

   $nombre = isset($_POST['fname']) ? mysqli_real_escape_string($con, $_POST['fname']) : false;
	$apellido = isset($_POST['lname']) ? mysqli_real_escape_string($con, $_POST['lname']) : false;
	$correo = isset($_POST['email']) ? mysqli_real_escape_string($con, trim($_POST['email'])) : false;
	$contra = isset($_POST['pass']) ? mysqli_real_escape_string($con, $_POST['pass']) : false;

   //array errores
   $errores = array();

   //validar nombre
   if(!empty($nombre) && !is_numeric($nombre) && !preg_match( "/[0-9]/",$nombre)){
      $nombre_validate = true;
   } else{
      $nombre_validate = false;
      $errores["nombre"] = "nombre no validado";
   };

    //validar appellido
   if(!empty($apellido) && !is_numeric($apellido) && !preg_match( "/[0-9]/",$apellido)){
      $apellido_validate = true;
   } else{
      $apellido_validate = false;
      $errores["apellido"] = "apellido no valido";
   };

    //validar correo
   if(!empty($correo) &&  filter_var($correo, FILTER_VALIDATE_EMAIL)){
      $correo_validate = true;
      $eli = filter_var($correo, FILTER_VALIDATE_EMAIL);
      var_dump($eli);

   } else{
      $correo_validate = false;
      $errores["correo"] = "correo no valido";
   };
   
   //validar contraseña
   if(!empty($contra)){
      $contra_validate = true;
   } else{
      $contra_validate = false;
      $errores["contra"] = "contraseña no valida";
   };

   // validar y enviar datos db o mostrar alert de errores
   $guardar_usuario = false;
   
   if(count($errores) == 0){
      $guardar_usuario = true;

      // Cifrar la contraseña
		$password_segura = password_hash($contra, PASSWORD_BCRYPT, ['cost'=>4]);
		
		// insertar usuarios en la tabla de BBDD llamada inicio
		$sql = "INSERT INTO usuarios VALUES(null, '$nombre', '$apellido', '$correo', '$password_segura', CURDATE());";
      $guardar = mysqli_query($con, $sql);

      var_dump($guardar);
      $elie = mysqli_fetch_assoc($guardar);
      var_dump($elie);
      //die();
      
      if($guardar){
			$_SESSION['completado'] = "El registro se ha completado con éxito";
		}else{
			$_SESSION['errores']['general'] = "Fallo al guardar el usuario!!";
		}
   
   }else{
      //envia el arreglo por la variable superglobal
      $_SESSION["errores"] = $errores;
   };
  
};

header("location: inicio.php");
?>