   <!--formulario-->
   <aside class="sidebar">

      <!-- crear una sesion si se inicia correctamente sesion
      con datos existente en la base de datos-->
      <?php if(isset($_SESSION['usuario'])): ?>
         <div id="" class="bloque">
            <h3 class="text-center">Bienvenido, <?=$_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellido']; ?></h3>
         </div>

         <!--botones de sesion-->
         <div class="d-flex flex-wrap justify-content-around mb-2">
            <!--envia a crear categoria href="crearinputs.php"-->
            <a href="crearinputs.php" class="boton"><button type="button" class="btn btn-outline-success">Crear entradas</button></a>
            <!--envia a crear categoria href="crearcategory.php"-->
            <a href="crearcategory.php" class="boton"><button type="button" class="btn btn-outline-success">Crear categoria</button></a>
         </div>
         <div class="d-flex flex-wrap justify-content-around">
             <!--envia a actualizar session href="mydatos.php"-->
            <a href="mydatos.php" class="boton"><button type="button" class="btn btn-outline-primary">Mis datos</button></a>
            <!--envia a cerrar session href="cerrar.php"-->
            <a href="cerrar.php" class="boton"><button type="button" class="btn btn-outline-danger">Cerrar sesión</button></a>
         </div>

         <!--buscar en sesion-->
         <div id="" class="bloque">

            <h3>Buscar en sesion</h3>

            <?php //alert 
               if(isset($_SESSION['error_login'])): ?>
               <div class="alert alert-warning">
                  <?=$_SESSION['error_login'];?>
               </div>
            <?php endif;?>

            <form action="buscar.php" method="POST">
               <div class="form-group row">
                  <label for="" class="col-sm-2 col-form-label">Buscar</label>
                  <div class="col-sm-10">
                     <input type="text" class="form-control" name="search" placeholder="Buscar">
                  </div>
               </div>
               <button type="submit" value="enter" class="btn btn-primary mb-2">Buscar</button>

            </form>
            <?php // function para borrar los errores fila 31 helper.php
            Errores();?>
         </div>
         
      <?php endif; ?>
      







         <!-- si existe una sesion con usuario
          remueve los div identificar y registrarse 
          hasta que cierre sesion se muestra -->
      <?php if(!isset($_SESSION['usuario'])): ?>

            <!--iniciar sesion-->
            <div id="login" class="bloque">

               <h3>Iniciar sesion</h3>
               
               <?php //alert de no estar registrado  o error-- login.php linea 37 o 43  
                  if(isset($_SESSION['error_login'])): ?>
                  <div class="alert alert-warning">
                     <?=$_SESSION['error_login'];?>
                  </div>
               <?php endif; ?>

               <form action="login.php" method="POST">
                  <div class="form-group row">
                     <label for="email" class="col-sm-2 col-form-label">Email</label>
                     <div class="col-sm-10">
                        <input type="text" class="form-control" id="Email" name="email" placeholder="email@example.com">
                     </div>
                  </div>

                  <div class="form-group row">
                     <label for="Password" class="col-sm-2 col-form-label">Password</label>
                     <div class="col-sm-10">
                        <input type="password" name="pass" class="form-control" id="Password">
                     </div>
                  </div>
                  <button type="submit" value="enter" class="btn btn-primary mb-2">Confirm identity</button>
               </form>
               <?php // function para borrar los errores fila 31 helper.php
               Errores();?>
            </div>

            <!--registrarse-->
            <div id="registro" class="bloque">

               <h3>Registrate</h3>

               <!-- Mostrar error -- registro.php linea 72-->
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

               <form action="registro.php" method="POST">

                  <div class="form-group row">
                     <div class="col">
                        <input type="text" name="fname" class="form-control" placeholder="First name">
                        <?php  //function muestra el error o nada - linea 4 helper.php
                           echo isset($_SESSION["errores"]) ? mostrarerror($_SESSION["errores"], "nombre") : "";
                        ?>
                     </div>

                     <div class="col">
                        <input type="text" name="lname" class="form-control" placeholder="Last name">
                        <?php echo isset($_SESSION["errores"]) ? mostrarerror($_SESSION["errores"], "apellido") : ""; ?>
                     </div>
                  </div>

                  <div class="form-group row">
                     <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                     <div class="col-sm-10">
                        <input type="text" name="email" class="form-control" id="staticEmail"
                           placeholder="email@example.com">
                        <?php echo isset($_SESSION["errores"]) ? mostrarerror($_SESSION["errores"], "correo") : ""; ?>
                     </div>
                  </div>

                  <div class="form-group row">
                     <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                     <div class="col-sm-10">
                        <input type="password" name="pass" class="form-control" id="inputPassword">
                        <?php echo isset($_SESSION["errores"]) ? mostrarerror($_SESSION["errores"], "contra") : ""; ?>
                     </div>
                  </div>

                  <button type="submit" value="" class="btn btn-primary">Sign in</button>

               </form>

               <?php // function para borrar los errores fila 14 helper.php
               borrarErrores();?>
            </div>

      <?php endif; ?>         
   </aside>