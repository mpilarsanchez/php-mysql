<?php
include("pdo.php");
include("funciones_series.php");
$serie_id = $_GET["serie_id"];
$serie =traerDatosSerie(abrirBaseDeDatos(), $serie_id);

?>


<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SERIES</title>
</head>
<body>
	<div class="series_container">
    <h1><?php echo $serie[0]["serie"]?></h1>
    <h4><?php echo $serie[0]["genero"]?></h4>
    <?php foreach ($serie as $datos_serie) :?>
      <ul><?php echo $datos_serie["temporada"]?>
        <li>
          <?php echo $datos_serie["episodio"]?>
        </li>
      </ul>
    <?php endforeach; ?>
  </div>
</body>
</html>
