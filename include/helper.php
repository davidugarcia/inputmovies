<?php 

function mostrarerror($errores, $campo){
   $alert ="";
if(isset($errores[$campo]) && !empty($campo)){
   $alert = '<div class ="alert alert-error">'.$errores[$campo].'</div>';
};

return $alert;
};

function borrarerror(){
   $_SESSION["errores"] = null;
   $borrado = session_unset($_SESSION["errores"]);

   return $borrado;
};

?>