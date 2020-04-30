<?php require_once 'redireccion.php'; ?>

<!--header-->
<?php require_once 'include/encabezado.php'; ?>

<!--sidebar-->
<!--formulario-->
<?php require_once 'include/formul.php'; ?>

<div class="principal">

   <h2 class="text-center">Categoria</h2>

   <form action="guardarcateg.php" method="POST">
      <div class="form-group row">
         <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
               <input type="text" name="nombre" class="form-control" placeholder="Nombre">
            </div>
            <button type="submit" value="guardar" class="btn btn-primary mb-2">Guardar</button>
      </div>           
   </form>

</div>