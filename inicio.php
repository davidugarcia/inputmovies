<!--require_once sirven para poder segmentar un file-->

   <!--header-->
   <?php require_once 'include/encabezado.php'; ?>

   <!--sidebar-->

   <!--formulario-->
   <?php require_once 'include/formul.php'; ?>
   
   <div class="principal">

      <h2 class="text-center">Entradas</h2>

      <?php // function -- helper.php devuelve solo 4 entradas
         $entradas = conseguirentradas($con, true);
         if(!empty($entradas)):
         while($entrada = mysqli_fetch_assoc($entradas)):
      ?>
      
         <article>
            <!-- devuelve los datos de la tabla entradas y al dar click
               en un categoria nos muestra las entradas relacionadas con la categoria-->
            <a class ="link" href="entrada.php?id=<?=$entrada['id']?>">
               <h2><?=$entrada['titulo']?></h2>
               <span class=""><?=$entrada['Categoria'].' | '.$entrada['fecha']?></span>

               <p><?=substr($entrada['descripcion'], 0, 180)."..."?></p>
            </a>
         </article>

	   <?php
			endwhile;
		   endif;
	   ?>
         <!--nos envia hacia el archivo entradas.php-->
         <div class="verentradas"> 
            <a href="entradas.php">
               <button type="button" class="btn btn-outline-secondary">Ver entradas</button>
            </a>
         </div>
   </div>

   <!--footer-->
   <?php require_once 'include/pie.php'; ?>

  