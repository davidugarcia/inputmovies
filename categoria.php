<?php require_once 'include/conexion.php'; ?>
<?php require_once 'include/helper.php'; ?>

<?php
      // $_GET['id'] la obtiene del archivo inicio.php url href=".php?id=<?=$entrada['id']
         $categoria_actual = conseguirCategoria($con, $_GET['id']);
         if(!isset($categoria_actual['id'])){
            header("Location: inicio.php");
         }
      ?>

<?php require_once 'include/encabezado.php'; ?>
<?php require_once 'include/formul.php'; ?>
		
<!-- CAJA PRINCIPAL -->
<div class="principal">
     
	   <h2 class="text-center">Entradas de <?=$categoria_actual['nombre']?></h2>
	
      <?php // function -- helper.php linea 54
         $entradas = conseguirentradas($con, true);
         if(!empty($entradas)):
         while($entrada = mysqli_fetch_assoc($entradas)):
      ?>
      
         <article>
            <a class ="link" href=".php?id=<?=$entrada['id']?>">
               <h2><?=$entrada['titulo']?></h2>
               <span class=""><?=$entrada['Categoria'].' | '.$entrada['fecha']?></span>

               <p><?=substr($entrada['descripcion'], 0, 180)."..."?></p>
            </a>
         </article>

	   <?php
			endwhile;
		   endif;
	   ?>
</div>	
<?php require_once 'include/pie.php'; ?>