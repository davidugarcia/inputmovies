<?php require_once 'include/conexion.php'; ?>
<?php require_once 'include/helper.php'; ?>

<?php
	/* function recibe los campos de la tabla categorias, entradas y usuarios por medio de la relacion
	$_GET['id'] como parametro, este parametro se origina al dar click en un elemento del nav -- helper.php*/
   $entrada_actual = conseguirentrada($con, $_GET['id']);
   if(!isset($entrada_actual['id'])){
   header("Location: inicio.php");
    }
?>

<?php require_once 'include/encabezado.php'; ?>
<?php require_once 'include/formul.php'; ?>
		
<!-- CAJA PRINCIPAL -->
<div class="principal">
     
	   <h2> <?=$entrada_actual['titulo']?> </h2>

      <a href="categoria.php?id=<?=$entrada_actual['categoriaid']?>">
		   <h2>
         <?=$entrada_actual['Categoria']?>
         </h2>
	   </a>

	   <h4> <?=$entrada_actual['fecha']?> | <?=$entrada_actual['uxuario']?> </h4>

	<p>
		<?=$entrada_actual['descripcion']?>
	</p>
    
   <?php if(isset($_SESSION["usuario"]) && $_SESSION['usuario']['id'] == $entrada_actual['usuarioid']): ?>
		<br/>	

		<a href="editarentrada.php?id=<?=$entrada_actual['id']?>" type="button" class="btn btn-dark">Editar entrada</a>
		<a href="codigo/borrarentrada.php?id=<?=$entrada_actual['id']?>" type="button" class="btn btn-danger" >Eliminar entrada</a>
      
	<?php endif; ?>
      
</div>	
<?php require_once 'include/pie.php'; ?>