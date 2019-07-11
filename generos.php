<?php
include("pdo.php");
include("funciones_genero.php");

$generos = traerGenero(abrirBaseDeDatos());
$pelisPorGeneros = traerPelisPorGenero(abrirBaseDeDatos());
?>

<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GENEROS</title>
</head>
<body>
	<div class="genero_container">
    <ul>
      <?php foreach ($generos as $genero) :?>
      <li>
        <?php echo $genero["name"]?>
      </li>
    <?php endforeach; ?>
    </ul>
  </div>

  <hr>

  <div class="pelis_por_genero_container">
    <?php foreach ($pelisPorGeneros as $pelis) :?>
      <ul><?php echo $pelis["genero"] ?>
          <?php for ($i=0; $i<=count($pelis["peliculas"])-1 ;$i++) :?>
            <li>
            <a href="pelicula.php?movie_id=<?php echo $pelis["ids"][$i]?>"><?php echo $pelis["peliculas"][$i] ?></a>
            </li>
          <?php endfor; ?>
      </ul>
  <?php endforeach; ?>
  </div>
</body>
</html>
