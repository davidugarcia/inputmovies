<?php 

function mostrarerror($errores, $campo){
   $alert ="";
if(isset($errores[$campo]) && !empty($campo)){
   $alert = '<div class ="alert alert-error">'.$errores[$campo].'</div>';
}
return $alert;
}
?>