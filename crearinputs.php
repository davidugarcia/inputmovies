<?php require_once 'redireccion.php'; ?>
<!--header-->
<?php require_once 'include/encabezado.php'; ?>
<!--sidebar-->
<!--formulario-->
<?php require_once 'include/formul.php'; ?>

<div class="principal">

   <h2 class="text-center">Crear entradas</h2>
   <p>
		Añade nuevas entradas al blog para que los usuarios puedan
		leerlas y disfrutar de nuestro contenido.
	</p>

   <form action="codigo/guardarinput.php" method="POST" class="was-validated">
   

      <div class="form-group row">
         <label for="title" class="col-sm-2 col-form-label">Titulo</label>
            <div class="col-sm-10">
               <input type="text" class="form-control is-invalid" name="title" placeholder="Titulo">
               <?php echo isset($_SESSION['erroresinputs']) ? mostrarerror($_SESSION['erroresinputs'], 'titulo') : ''; ?>
            </div>
      </div>   

      <div class=" form-group row">
         <label for="validationTextarea" class="col-sm-2 col-form-label">Descripcion</label>
         <div class="col-sm-10">
            <textarea class="form-control is-invalid" name="descripcion" id="validationTextarea" placeholder="Descripcion"></textarea>
            <?php echo isset($_SESSION['erroresinputs']) ? mostrarerror($_SESSION['erroresinputs'], 'descripcion') : ''; ?>
         </div>  
         
      </div>
      
      <div class="form-group row">
         <label for="title" class="col-sm-2 col-form-label">Categorias</label>
         <div class="col-sm-10">
            <select name="category" class="custom-select">   
               <option value=""></option>      
               <?php 
                  // function declarada en guardar helper.php
                  $categorias = conseguirCategorias($con); 
                  if(!empty($categorias)):
                  while($categoria = mysqli_fetch_assoc($categorias)): 
               ?>
                  <option value="<?=$categoria['id']?>">
                     <?=$categoria['nombre']?>
                  </option>
               <?php
                  endwhile;
                  endif;
               ?>
            </select>
            <?php echo isset($_SESSION['erroresinputs']) ? mostrarerror($_SESSION['erroresinputs'], 'categoria') : ''; ?>
         </div>
      </div>

      <button type="sumit" class="btn btn-dark">Guardar</button>    
   </form>
   <?php borrarErrores(); ?>
</div>

<?php require_once 'include/pie.php'; ?>