<?php 
//mostrar div de error de campos vacios de iniciar session o registrarse 
function mostrarerror($errores, $campo){
   $alert ="";
	if(isset($errores[$campo]) && !empty($campo)){
		$alert = '<div style = "margin: 5px"; class="alert alert-danger" role="alert">'. $errores[$campo] .'</div>';
	};

	return $alert;
};

//----------------------------------------------------------------------------

// Borrar error de iniciar sesion loging.php
function Errores(){
	$borrar = false;	
	if(isset($_SESSION['error_login'])){
		$_SESSION['error_login'] = null;
		$borrado = true;
   }
	return $borrar;
};

//function para borrar errores en campo de registrate, actualizar usuario, crear categoria y entradas.php
function borrarErrores(){
	$borrado = false;
	
	//borra errores de registrate registro.php
	if(isset($_SESSION['errores'])){
		$_SESSION['errores'] = null;
		$borrado = true;
	}

	if(isset($_SESSION['completado'])){
		$_SESSION['completado'] = null;
		$borrado = true;
	}
	//borra errores de crear entradas guardarinputs.php
	if(isset($_SESSION['erroresinputs'])){
		$_SESSION['erroresinputs'] = null;
		$borrado = true;
	}

	if(isset($_SESSION['errorcategory'])){
		$_SESSION['errorcategory'] = null;
		$borrado = true;
	}

	if(isset($_SESSION['errordatos'])){
		$_SESSION['errordatos'] = null;
		$borrado = true;
	}

	return $borrado;
}

//------------------------------------------------------------------------

// function de categorias --- encabezado.php muestra todas las categorias
function conseguirCategorias($conectar){

	$sql = "SELECT * FROM categorias ORDER BY id ASC;";
	$categorias = mysqli_query($conectar, $sql);
	
	$resultado = array();

	if($categorias && mysqli_num_rows($categorias) >= 1){
		$resultado = $categorias;
	}
	
	//regresa un true y consulta si hay conexion a database
	return $resultado;
	
}

/* muestra las entradas relacionadas con la categoria al dar click en una categoria 
nos enlaza que escogimos*/
function conseguirCategoria($conexion, $id){
	$sql = "SELECT * FROM categorias WHERE id = $id; ";
	$categoria = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($categoria && mysqli_num_rows($categoria) >= 1){
		$resultado = mysqli_fetch_assoc($categoria);
	}
	
	return $resultado;
}
//---------------------------------------------------------------------------

/*muestra las entradas*/
function conseguirentradas($conectar, $limit = null, $category = null, $busqueda = null){
	
	//consigue todas las entradas del archivo entradas.php
	$sql = "SELECT e.*, c.nombre AS 'Categoria' FROM entradas e
	 INNER JOIN categorias c ON e.categoriaid = c.id 
	 ORDER BY e.id DESC";

	if(!empty($category)){
		// selecciona todas las entradas relacionadas con la categoria elegida-----categoria.php
		$sql = "SELECT e.*, c.nombre AS 'Categoria' FROM entradas e
		INNER JOIN categorias c ON e.categoriaid = c.id WHERE 
		e.categoriaid = $category ORDER BY e.id DESC";
	}

	if(!empty($busqueda)){
		// busca todas los datos relacionadas ala variable $busqueda elegida-----buscar.php
		$sql = "SELECT e.*, c.nombre AS 'Categoria' FROM entradas e
		INNER JOIN categorias c ON e.categoriaid = c.id 
		WHERE e.titulo like '%$busqueda%' ";
	}

	if($limit){

		// consigue solo 4 entradas -- inicio.php
		$sql = "SELECT e.*, c.nombre AS 'Categoria' FROM entradas e
	 INNER JOIN categorias c ON e.categoriaid = c.id
	 ORDER BY e.id DESC LIMIT 4";

		// $sql = $sql." LIMIT 4";
			// no pude realizar este trozo de script   $sql .= "LIMIT 4";
	}

	$entradas = mysqli_query($conectar, $sql);
	
	$result = array();
	if($entradas && mysqli_num_rows($entradas) >= 1){
		$result = $entradas;
	}
	
	return $result;
};

function conseguirentrada($conexion, $id){

	$sql = "SELECT e.*, c.nombre AS 'Categoria',
	CONCAT (u.nombre, ' ', u.apellido) AS 'uxuario'
	FROM entradas e 
	INNER JOIN categorias c ON e.categoriaid = c.id 
	INNER JOIN usuarios u ON e.usuarioid = u.id
	WHERE e.id = $id";

	$entrada = mysqli_query($conexion, $sql);
	
	$result = array();
	if($entrada && mysqli_num_rows($entrada) >= 1){
		$result = mysqli_fetch_assoc($entrada);;
	}

	return $result;
}
?>