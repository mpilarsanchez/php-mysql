<?php
include("pdo.php");
include("funciones_peliculas.php");
$pelicula_id = $_GET["movie_id"];
$pelicula =traerDatosPelicula(abrirBaseDeDatos(), $pelicula_id);

?>


<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PELICULA</title>
</head>
<body>
	<div class="pelis_container">
    <h1><?php echo $pelicula[0]["title"]?></h1>
    <h4><?php echo $pelicula[0]["name"]?></h4>
    <?php foreach ($pelicula as $datos) :?>
      <ul><?php echo $datos["rating"]?>
        <li>
          <?php echo $datos["length"]?>
        </li>
      </ul>
    <?php endforeach; ?>
  </div>
</body>
</html>
