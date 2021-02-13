<?php require_once 'redireccion.php'; ?>
<!--header-->
<?php require_once 'include/encabezado.php'; ?>
<!--sidebar-->
<!--formulario-->
<?php require_once 'include/formul.php'; ?>
<div class="principal">
   <h2 class="text-center">Mis Datos</h2>

   <?php if(isset($_SESSION['errores']['general'])): ?>
   <div class="alert alert-warning" role="alert">
      <?=$_SESSION['errores']['general']?>
   </div>
   <!-- Mostrar error -- registro.php linea 70-->
   <?php elseif(isset($_SESSION['completado'])): ?>
   <div class="alert alert-success" role="alert">
      <?=$_SESSION['completado']?>
   </div>
   <?php endif; ?>

   <form action="codigo/actualizardatos.php" method="POST">
      <div class="form-group row">
         <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
         <div class="col-sm-10">
            <input type="text" name="name" value="<?= $_SESSION['usuario']['nombre'] ?> " class="form-control"
               placeholder="Nombre">
            <?php echo isset($_SESSION['errordatos']) ? mostrarerror($_SESSION['errordatos'], 'nombre') : ''; ?>
         </div>
      </div>

      <div class="form-group row">
         <label for="Apellido" class="col-sm-2 col-form-label">Apellido</label>
         <div class="col-sm-10">
            <input type="text" name="lname" value="<?= $_SESSION['usuario']['apellido'] ?>" class="form-control"
               placeholder="Apellido">
            <?php echo isset($_SESSION['errordatos']) ? mostrarerror($_SESSION['errordatos'], 'apellido') : ''; ?>
         </div>
      </div>

      <div class="form-group row">
         <label for="email" class="col-sm-2 col-form-label">Correo</label>
         <div class="col-sm-10">
            <input type="text" id="Email" name="email" value="<?= $_SESSION['usuario']['email'] ?>" class="form-control"
               placeholder="email@example.com">
            <?php echo isset($_SESSION['errordatos']) ? mostrarerror($_SESSION['errordatos'], 'correo') : ''; ?>
         </div>
      </div>

      <button type="sumit" class="btn btn-info">Actualizar</button>
   </form>
   <?php borrarErrores(); ?>
</div>
<?php require_once 'include/pie.php'; ?>