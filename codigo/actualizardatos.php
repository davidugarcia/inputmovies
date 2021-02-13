<?php

if(isset($_POST)){
	// Conexión a la base de datos
	require_once '../include/conexion.php';
   //recibir datos por post
	$nombre = isset($_POST['name']) ? mysqli_real_escape_string($con, $_POST['name']) : false;
   $apellido = isset($_POST['lname']) ? mysqli_real_escape_string($con, $_POST['lname']) : false;
	$correo = isset($_POST['email']) ? mysqli_real_escape_string($con, trim($_POST['email'])) : false;
 
	// Array de errores
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

    // validar y enviar datos db o mostrar alert de errores
    $guardar_usuario = false;
   
   if(count($errores) == 0){

       // variable del usuario que esta en sesion
       $usuario = $_SESSION['usuario'];
       $guardar_usuario = true;
      
       // COMPROBAR SI EL EMAIL YA EXISTE
		$sql = "SELECT id, email FROM usuarios WHERE email = '$correo'";
		$isset_email = mysqli_query($con, $sql);
      $isset_user = mysqli_fetch_assoc($isset_email);
   
		if($isset_user['id'] == $usuario['id'] || empty($isset_user)){

         // actualizar usuarios en la tabla de BBDD llamada inicio
         $sql =  " UPDATE usuarios SET nombre = '$nombre', apellido = '$apellido', email = '$correo' WHERE id = $usuario[id];";
         $guardar = mysqli_query($con, $sql);

               if($guardar){

                  // variables session para utilizarlas en la propiedad value de cada input del form
                  $_SESSION['usuario']['nombre'] = $nombre;
                  $_SESSION['usuario']['apellido'] = $apellido;
                  $_SESSION['usuario']['email'] = $correo;
                  
                  //mesanje de exito envia al archivo mydatos.php lina 20
                  $_SESSION['completado'] = "Actualizacion con éxito";

               }else{
                  $_SESSION['errores']['general'] = "Fallo al actualizar el usuario!!"; 
               }
      }else{
         $_SESSION['errores']['general'] = "El usuario ya existe!!";
      }

   }else{
       //envia el arreglo de $errores por la variable superglobal $_SESSION["errordatos"]
       // la recibe en cada input de form de my datos.php linea 29, 37 45
       $_SESSION["errordatos"] = $errores;   
   };
   
};
header("location: ../mydatos.php");
?>
   








   
