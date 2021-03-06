   <!--formulario-->
   <div class="row">
      <div class="order-2 col-lg-3">
         <!-- crea un div de sesion si se inicia correctamente la sesion
            con datos existente en la base de datos-->
         <?php if(isset($_SESSION['usuario'])):?>
            <div id="" class="bloque">
               <h3 class="text-center">Bienvenido,
                  <?=$_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellido']; ?></h3>
            </div>

            <!--botones de sesion-->
            <div class="d-flex flex-wrap justify-content-around mb-2">
               <!--envia a crear categoria href=""-->
               <a href="crearinputs.php" class="boton"><button type="button" class="btn btn-outline-success">Crear
                     entradas</button></a>
               <!--envia a crear categoria href=""-->
               <a href="crearcategory.php" class="boton"><button type="button" class="btn btn-outline-success">Crear
                     categoria</button></a>
            </div>
            <div class="d-flex flex-wrap justify-content-around">
               <!--envia a actualizar session href="-->
               <a href="mydatos.php" class="boton"><button type="button" class="btn btn-outline-primary">Mis
                     datos</button></a>
               <!--envia a cerrar session href="codigo/cerrar.php"-->
               <a href="codigo/cerrar.php" class="boton"><button type="button" class="btn btn-outline-danger">Cerrar
                     sesión</button></a>
            </div>

            <!--buscar en sesion-->
            <div id="" class="bloque">

               <h3>Buscar en sesion</h3>

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
            <div class="formulario">

               <!--registrarse-->
               <p>
                  <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample1" role="button"
                     aria-expanded="false" aria-controls="collapseExample1">
                     Registrate
                  </a>
               </p>
               <div class="collapse" id="collapseExample1">

                  <div id="registro" class="">

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

                     <form action="codigo/registro.php" method="POST">

                        <div class="mb-3">
                           <label for="text" class="form-label">Nombre</label>
                           <div class="col-sm-10">
                              <input type="text" name="fname" class="form-control" placeholder="Nombre">
                              <?php  //function muestra el error o nada - linea 4 helper.php
                                 echo isset($_SESSION["errores"]) ? mostrarerror($_SESSION["errores"], "nombre") : "";
                              ?>
                           </div>
                        </div>

                        <div class="mb-3">
                           <label for="text" class="form-label">Apellido</label>
                           <div class="col-sm-10">
                              <input type="text" name="lname" class="form-control" placeholder="Apellido">
                              <?php
                                 echo isset($_SESSION["errores"]) ? mostrarerror($_SESSION["errores"], "apellido") : "";
                              ?>
                           </div>
                        </div>
                        
                        <div class="mb-3">
                           <label for="staticEmail" class="form-label">Correo</label>
                           <div class="col-sm-10">
                              <input type="email" name="email" class="form-control" id="staticEmail"  placeholder="correo@example.com">
                              <?php echo isset($_SESSION["errores"]) ? mostrarerror($_SESSION["errores"], "correo") : ""; ?>
                           </div>
                        </div>

                        <div class="mb-3">
                           <label for="inputPassword" class="form-label">Contraseña</label>
                           <div class="col-sm-10">
                              <input type="password" name="pass" class="form-control" id="inputPassword">
                              <?php echo isset($_SESSION["errores"]) ? mostrarerror($_SESSION["errores"], "contra") : ""; ?>
                           </div>
                        </div>

                        <button type="submit" value="" class="btn btn-primary">Enviar</button>

                     </form>

                     <?php // function para borrar los errores fila 24 helper.php
                              borrarErrores();?>
                  </div>
               </div>

                <!--iniciar sesion-->
               <p class="mt-3">
                  <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button"
                     aria-expanded="false" aria-controls="collapseExample">
                     iniciar sesion
                  </a>
               </p>
               <div class="collapse" id="collapseExample">
                  <div id="login" class=""> 

                        <h3>Iniciar sesion</h3>

                        <?php //alert de no estar registrado  o error-- login.php linea 37 o 43  
                                    if(isset($_SESSION['error_login'])): ?>
                        <div class="alert alert-warning">
                           <?=$_SESSION['error_login'];?>
                        </div>
                        <?php endif; ?>

                        <form action="codigo/login.php" method="POST">
                           <!--Correo-->
                           <div class="mb-3">
                              <label for="email" class="form-label">Correo</label>
                              <div class="col-sm-10">
                                 <input type="text" class="form-control" id="Email" name="email" placeholder="correo@example.com">
                              </div>
                           </div>
                           <!--Contraseña-->
                           <div class="mb-3">
                              <label for="Password" class="form-label">Contraseña</label>
                              <div class="col-sm-10">
                                 <input type="password" name="pass" class="form-control" id="Password">
                              </div>
                           </div>
                           <button type="submit" value="enter" class="btn btn-primary mb-2">Enviar</button>
                        </form>
                        <?php // function para borrar los errores fila 31 helper.php
                                 Errores();?>
                  </div>
               </div>
               
         <?php endif; ?>

      </div>
   </div>

      