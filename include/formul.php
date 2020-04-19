   <!--form-->
   <aside class="sidebar">
      <!--identificar-->
      <div id="login" class="bloque">
         <h3>Identify</h3>
         <form action="login.php" method="POST">
            <div class="form-group row">
               <label for="email" class="col-sm-2 col-form-label">Email</label>
               <div class="col-sm-10">
                  <input type="text" readonly class="form-control-plaintext" id="Email" name="email"
                     value="email@example.com">
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
      </div>

      <!--registro-->
      <div id="registro" class="bloque">

      <?php if(isset($_SESSION["errores"])): ?>
             <?php  var_dump($_SESSION["errores"]); ?>
      <?php endif; ?>

         <h3>Sing up</h3>
         <form action="registro.php" method="POST">

            <div class="form-group row">
               <div class="col">
                  <input type="text" name="fname" class="form-control" placeholder="First name">
                  <?php  mostrarerror($_SESSION["errores"], "nombre"); ?>
               </div>
               <div class="col">
                  <input type="text" name="lname" class="form-control" placeholder="Last name">
               </div>
            </div>

            <div class="form-group row">
               <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
               <div class="col-sm-10">
                  <input type="text" name="email" readonly class="form-control-plaintext" id="staticEmail"
                     value="email@example.com">
               </div>
            </div>
            <div class="form-group row">
               <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
               <div class="col-sm-10">
                  <input type="password" name="pass" class="form-control" id="inputPassword">
               </div>
            </div>

            <button type="submit" value="" class="btn btn-primary">Sign in</button>
         </form>
      </div>

   </aside>

</body>

</html>