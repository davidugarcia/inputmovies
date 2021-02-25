<?php require_once 'conexion.php';?>
<?php  require_once 'helper.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Blog</title>

   <!--style-->
   <link rel="stylesheet" href="inicio.css">

   <!--boostrap-->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

   <!--fontaawesome-->
   <script defer src="https://use.fontawesome.com/releases/v5.8.0/js/all.js"
      integrity="sha384-ukiibbYjFS/1dhODSWD+PrZ6+CGCgf8VbyUH7bQQNUulL+2r59uGYToovytTf4Xm" crossorigin="anonymous">
   </script>
</head>

<body>

   <div class="container">

      <!--header-->
      <div class="row justify-content-lg-center">
         <div class="col-lg-12">

            <!--titulo-->
            <header id="" class="text-center">
               <h1 class="logo">
                  BLog Eliexer Urbina.
               </h1>
            </header>

             <!--Nav-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div class="container-fluid">

                  <a class="navbar-brand" href="index.php">Inicio</a>

                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                     data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                     aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                              data-bs-toggle="dropdown" aria-expanded="false">
                              Categorias
                           </a>

                           <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <?php 
                           // function ubicada en helper.php con parametro de variable $con conexion.php
                           // function recibe todos los campos de la tabla categorias
					            $categorias = conseguirCategorias($con);
					            if(!empty($categorias)):
					            while($category = mysqli_fetch_assoc($categorias)): 
				            ?>
                              <li><a class="dropdown-item"
                                    href="categoria.php?id=<?=$category['id']?>"><?=$category['nombre']?></a></li>
                              <?php 
                           endwhile;
                           endif;
				            ?>
                           </ul>
                        </li>

                        <li class="nav-item">
                           <a class="nav-link" href="#">contacto</a>
                        </li>

                     </ul>
                     <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                     </form>
                  </div>
               </div>
            </nav>

         </div>
      </div>
   </div>

   <!--seccion-->

   <div class="container-fluid">