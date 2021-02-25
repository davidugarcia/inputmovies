<?php require_once 'include/encabezado.php'; ?>
<?php require_once 'include/formul.php'; ?>

<!--principal-->
   <div class="order-1 col-lg-9">

         <h2 class="text-center titulo">Entradas</h2>

         <div class="d-flex flex-wrap justify-content-around">
            <?php // function -- helper.php devuelve solo 4 entradas
               $entradas = conseguirentradas($con, true);
            if(!empty($entradas)):
               while($entrada = mysqli_fetch_assoc($entradas)):
            ?>

               <div class="card" style="width: 19rem; margin:0.4rem">
                  
                  <img src="..." class="card-img-top" alt="...">
                  <div class="card-body">
                     <h5 class="card-title"><?=$entrada['titulo']?></h5>
                     <span class=""><?=$entrada['Categoria'].' | '.$entrada['fecha']?></span>
                     <p class="card-text"><?=substr($entrada['descripcion'], 0, 180)."..."?></p>
                     <a href="entrada.php?id=<?=$entrada['id']?>" class="btn btn-primary">Ver pelicula</a>
                  </div>
                  
               </div>

            <?php
               endwhile;
               endif;
            ?>
         </div>
         
         <!--nos envia hacia el archivo entradas.php-->
         <div class="verentradas">
            <a href="entradas.php">
               <button type="button" class="btn btn-outline-secondary">Ver entradas</button>
            </a>
         </div>

   </div>
</div>
  
<!--footer-->
<?php require_once 'include/pie.php'; ?>