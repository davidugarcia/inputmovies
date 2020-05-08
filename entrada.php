<?php require_once 'include/conexion.php'; ?>
<?php require_once 'include/helper.php'; ?>

<?php
      // $_GET['id'] 
         $entrada_actual = conseguirentrada($con, $_GET['id']);
         if(!isset($entrada_actual['id'])){
            header("Location: index.php");
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

	   <h4> <?=$entrada_actual['fecha']?> </h4>

	<p>
		<?=$entrada_actual['descripcion']?>
	</p>
    

	
      
</div>	
<?php require_once 'include/pie.php'; ?>