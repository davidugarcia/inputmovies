<?php require_once 'include/conexion.php'; ?>
<?php require_once 'include/helper.php'; ?>

<?php
      // $_GET['id'] se obtiene por url al dar click en una categoria que esta en el lista nav
         $categoria_actual = conseguirCategoria($con, $_GET['id']);
         if(!isset($categoria_actual['id'])){
            header("Location: index.php");
         }
      ?>

<?php require_once 'include/encabezado.php'; ?>
<?php require_once 'include/formul.php'; ?>
		
<!-- CAJA PRINCIPAL -->
<div class="principal">
     
	   <h2 class="text-center">Entradas de <?=$categoria_actual['nombre']?></h2>
	
      <?php /* function recibe los campos de la tabla categorias, entradas y usuarios por medio de la relacion
            $_GET['id'] como parametro, este parametro se origina al dar click en un elemento del nav -- helper.php*/
         $entradas = conseguirentradas($con, null, $_GET['id']);
         if(!empty($entradas) && mysqli_num_rows($entradas) >= 1):
         while($entrada = mysqli_fetch_assoc($entradas)):
      ?>
      
         <article>
            <!--realiza enlace hacia el archivo con la url entrada.php?id= -->
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