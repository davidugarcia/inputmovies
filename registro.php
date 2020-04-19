<?php
session_start();

if(isset($_POST)){

   //recorger valores
   $nombre = isset($_POST["fname"]) ? $_POST["fname"] : false;
   $apellido = isset($_POST["lname"]) ? $_POST["lname"] : false;
   $correo = isset($_POST["email"]) ? $_POST["email"] : false;
   $contra = isset($_POST["pass"]) ? $_POST["pass"] : false;

   
   var_dump($_POST);

   //array errores
   $errores = array();

   if(!empty($nombre) && !is_numeric($nombre) && !preg_match( "/[0-9]/",$nombre)){
      $nombre_validate = true;
   } else{
      $nombre_validate = false;
      $errores["nombre"] = "nombre no validado";
   };

   if(!empty($apellido) && !is_numeric($apellido) && !preg_match( "/[0-9]/",$apellido)){
      $apellido_validate = true;
   } else{
      $apellido_validate = false;
      $errores["apellido"] = "apellido no validado";
   };

   if(!empty($correo) &&  filter_var($correo, FILTER_VALIDATE_EMAIL)){
      $correo_validate = true;
   } else{
      $correo_validate = false;
      $errores["correo"] = "correo no validado";
   };

   if(!empty($contra)){
      $contra_validate = true;
   } else{
      $contra_validate = false;
      $errores["correo"] = "contraseña no validado";
   };

   //var_dump($errores);


   $guardar_usuario = false;

   if(count($errores) == 0){
      $guardar_usuario = true;
   }else{
      $_SESSION["errores"] = $errores;
      header("location: inicio.php");
   };
  
};


?>