<?php
   
// Iniciar la sesión y la conexión a bd
require_once 'include/conexion.php';

// Recoger datos del formulario
if(isset($_POST)){ 
   
   // Recoger datos del formulario
	$email = trim($_POST['email']);
   $password = $_POST['pass'];

   // Consulta para comprobar las credenciales del usuario
	$sql = "SELECT * FROM usuarios WHERE email = '$email'";
   $login = mysqli_query($con, $sql);
   //var_dump($login);

   if($login && mysqli_num_rows($login) == 1){

      // $usuario = todo los registros que contiene la consulta 
      $usuario = mysqli_fetch_assoc($login); 
      //var_dump($usuario);
    
      // Comprobar la contraseña del usuario true/false
      $verify = password_verify($password, $usuario['pasword']);
      //var_dump($verify);

      if($verify){
			// Utilizar una sesión para guardar los datos del usuario logueado
         $_SESSION['usuario'] = $usuario;

         //var_dump($_SESSION['usuario']);
         //die();
		}else{

			// Si algo falla enviar una sesión con la fallo
			$_SESSION['error_login'] = "Login incorrectooo!!";
         //var_dump($_SESSION['error_login']);
      
      }
   } else{
      // mensaje de error
      $_SESSION['error_login'] = "Login incorrectoxxx!!";
      //var_dump($_SESSION['error_login']);
     
   }  
};

// Redirigir al inicio.php
header('Location: inicio.php');
?>