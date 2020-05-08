      <?php
         if(!isset($_POST['search'])){
            header("Location: inicio.php");
         }
      ?>

<?php require_once 'include/encabezado.php'; ?>
<?php require_once 'include/formul.php'; ?>
		
<!-- CAJA PRINCIPAL -->
<div class="principal">
     
	   <h2 class="text-center">Busqueda: <?=$_POST['search']?></h2>
	
      <?php // function -- helper.php
         $entradas = conseguirentradas($con, null, null, $_POST['search']);;
         if(!empty($entradas) && mysqli_num_rows($entradas) >= 1):
         while($entrada = mysqli_fetch_assoc($entradas)):
      ?>
      
         <article>
            <a class ="link" href="entrada.php?id=<?= $entrada['id']?>">
               <h2><?=$entrada['titulo']?></h2>
               <span class=""><?=$entrada['Categoria'].' | '.$entrada['fecha']?></span>

               <p><?=substr($entrada['descripcion'], 0, 180)."..."?></p>
            </a>
         </article>

	   <?php
         endwhile;
      else:
         ?>
            <div class="alert alert-secondary" role="alert">No hay entradas en esta categoría</div>
            <?php endif;
	   ?>
</div>	
<?php require_once 'include/pie.php'; ?>