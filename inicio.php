<!--require_once sirven para poder segmentar un file-->

   <!--header-->
   <?php require_once 'include/encabezado.php'; ?>

   <!--sidebar-->

   <!--formulario-->
   <?php require_once 'include/formul.php'; ?>
   
   <div class="principal">

            <h2 class="text-center">ELIEXER</h2>

            <?php // function -- helper.php linea 54
               $entradas = conseguirentradas($con);
               if(!empty($entradas)):
                  while($entrada = mysqli_fetch_assoc($entradas)):
            ?>
                     <article>
                        <a href="entrada.php?id=<?=$entrada['id']?>">
                           <h2><?=$entrada['titulo']?></h2>
                           <span class=""><?=$entrada['Categoria'].' | '.$entrada['fecha']?></span>

                           <p>
                           <?=substr($entrada['descripcion'], 0, 180)."..."?>
                           </p>
                        </a>
                     </article>
	         <?php
			         endwhile;
		         endif;
	         ?>

            <div class="verentradas">
               <button type="button" class="btn btn-outline-secondary">Ver entradas</button>
            </div>
   </div>

   <!--footer-->
   <?php require_once 'include/pie.php'; ?>

  