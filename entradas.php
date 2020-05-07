<!--require_once sirven para poder segmentar un file-->

   <!--header-->
   <?php require_once 'include/encabezado.php'; ?>

   <!--sidebar-->

   <!--formulario-->
   <?php require_once 'include/formul.php'; ?>
   
   <div class="principal">

      <h2 class="text-center">Todas las entradas</h2>

      <?php // function -- helper.php
         $entradas = conseguirentradas($con);
         if(!empty($entradas)):
         while($entrada = mysqli_fetch_assoc($entradas)):
      ?>
      
         <article>
            <a class ="link" href=".php?id=<?= $entrada['id']?>">
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

   <!--footer-->
   <?php require_once 'include/pie.php'; ?>

  