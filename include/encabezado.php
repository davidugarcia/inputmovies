<?php require_once 'conexion.php'; ?>
<?php  require_once 'helper.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Blog</title>

   <!--style-->
   <link rel="stylesheet" href="inicio.css">

   <!--boostrap-->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

   <!--fontaawesome-->
   <script defer src="https://use.fontawesome.com/releases/v5.8.0/js/all.js"
      integrity="sha384-ukiibbYjFS/1dhODSWD+PrZ6+CGCgf8VbyUH7bQQNUulL+2r59uGYToovytTf4Xm" crossorigin="anonymous">
   </script>
</head>

<body>

   <div class="container contenedor">

   <!--header pagina-->
   <header id="cabecera" class="text-center">

      <h1 id="logo">
         <a href="inicio.php">BLog Eliexer Urbina</a>
      </h1>

   </header>

   <!--navbar-->
   <nav id="menu">
      <ul class="nav justify-content-center">
         <li class="nav-item">
            <a class="nav-link active" href="#">Inicio</a>
         </li>

            <?php 
               // function con parametro de variable $con conexion.php -- helper.php linea 48
					$categorias = conseguirCategorias($con);
					if(!empty($categorias)):
					while($category = mysqli_fetch_assoc($categorias)): 
				?>
                  <li class="nav-item">
                     <a class="nav-link" href="categoria.php?id=<?=$category['id']?>">
                     <?=$category['nombre']?>
                     </a>
                  </li>
            <?php 
               endwhile;
               endif;
				?>
         
         <li class="nav-item">
            <a class="nav-link" href="#">Contactos</a>
         </li>
      </ul>
   </nav>

   <div class="contenedor">