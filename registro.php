<?php
session_start();

if(isset($_POST)){

   //recorger valores
   $nombre = isset($_POST["fname"]) ? $_POST["fname"] : false;
   $apellido = isset($_POST["lname"]) ? $_POST["lname"] : false;
   $correo = isset($_POST["email"]) ? $_POST["email"] : false;
   $contra = isset($_POST["pass"]) ? $_POST["pass"] : false;

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

   // enviar los errores si se validaron mal 
   $guardar_usuario = false;
   
   if(count($errores) == 0){
      $guardar_usuario = true;
   }else{
      //envia el arreglo por la variable superglobal
      $_SESSION["errores"] = $errores;
      header("location: inicio.php");
   };
  
};
?>