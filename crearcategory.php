<?php require_once 'redireccion.php'; ?>
<?php require_once 'include/encabezado.php'; ?>
<!--sidebar-->
<!--formulario-->
<?php require_once 'include/formul.php'; ?>
<div class="principal">

   <h2 class="text-center">Categoria</h2>

   <form action="codigo/guardarcateg.php" method="POST">
      <div class="form-group row">
            <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
               <input type="text" name="nombre" class="form-control" placeholder="Nombre">
               <?php echo isset($_SESSION['errorcategory']) ? mostrarerror($_SESSION['errorcategory'], 'nombre') : ''; ?>
            </div>
      </div>   
      
      <button type="submit" value="guardar" class="btn btn-light mb-2">Guardar</button>        
   </form>
   <?php borrarErrores(); ?>
</div>
<?php require_once 'include/pie.php'; ?>