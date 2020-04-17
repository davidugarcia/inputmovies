<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Blog videos juegos</title>
   <link rel="stylesheet" href="inicio.css">
   <!--boostrap-->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

   <div class="container contenedor">

      <!--header pagina-->
      <header id="cabecera" class="text-center">

         <h1 id="logo">
            <a href="inicio.php">BLog video juegos</a>
         </h1>

      </header>

      <!--navbar-->
      <nav id="menu">
         <ul class="nav justify-content-center">
            <li class="nav-item">
               <a class="nav-link active" href="#">Inicio</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#">Categoria 1</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#">Categoria 2</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#">Categoria 3</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#">Categoria 4</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#">Contactos</a>
            </li>
         </ul>
      </nav>


      <!--sidebar-->
      <!--form-->
      <div class="contenedor">
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
               <h3>Sing up</h3>
               <form action="registro.php" method="POST">

                  <div class="row">
                     <div class="col">
                        <input type="text" name="fname" class="form-control" placeholder="First name">
                     </div>
                     <div class="col">
                        <input type="text" name="lname" class="form-control" placeholder="Last name">
                     </div>
                  </div>

                  <div class="form-group row">
                     <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                     <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" name="email"
                           value="email@example.com">
                     </div>
                  </div>
                  <div class="form-group row">
                     <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                     <div class="col-sm-10">
                        <input type="password" name="pass" class="form-control" id="inputPassword">
                     </div>
                  </div>
      
                  <button type="submit" value="enter" class="btn btn-primary">Sign in</button>
               </form>
            </div>

         </aside>

         <div class="principal">
            <h2 class="text-center">ELIEXER</h2>

            <article class="entrada">
               <h3>Titulo</h3>
               <a href="">
                  <p>Lorem Ipsum छपाई और अक्षर योजन उद्योग का एक साधारण डमी पाठ है.
                     Lorem Ipsum सन १५०० के बाद से अभी तक इस उद्योग का मानक डमी पाठ मन गया, जब एक अज्ञात मुद्रक ने नमूना
                     लेकर एक नमूना किताब बनाई.
                  </p>
               </a>
            </article>

            <article class="entrada">
               <h3>Titulo</h3>
               <a href="">
                  <p>Lorem Ipsum छपाई और अक्षर योजन उद्योग का एक साधारण डमी पाठ है.
                     Lorem Ipsum सन १५०० के बाद से अभी तक इस उद्योग का मानक डमी पाठ मन गया, जब एक अज्ञात मुद्रक ने नमूना
                     लेकर एक नमूना किताब बनाई.
                  </p>
               </a>
            </article>

            <article class="entrada">
               <h3>Titulo</h3>
               <a href="">
                  <p>Lorem Ipsum छपाई और अक्षर योजन उद्योग का एक साधारण डमी पाठ है.
                     Lorem Ipsum सन १५०० के बाद से अभी तक इस उद्योग का मानक डमी पाठ मन गया, जब एक अज्ञात मुद्रक ने नमूना
                     लेकर एक नमूना किताब बनाई.
                  </p>
               </a>
            </article>
            <div class="verentradas">
            <button type="button" class="btn btn-outline-secondary">Ver entradas</button>
            </div>
         </div>
         <div class="clear-fix"></div>
      </div>
      
      <footer id="pie">
         <h5>desarrollado por eliexer urbina &copy copy</h5>
      </footer>

   </div>

   <!--boostrap-->
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
   </script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
   </script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
   </script>


</body>

</html>