<?php
include("pdo.php");
include("funciones_series.php");

$series=traerSeries(abrirBaseDeDatos());

?>

<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SERIES</title>
</head>
<body>
	<div class="series_container">
    <ul>
      <?php foreach ($series as $serie) :?>
      <li>
        <a href="serie.php?serie_id=<?php echo $serie["id"]?>"><?php echo $serie["title"]?></a>
      </li>
    <?php endforeach; ?>
    </ul>
  </div>
</body>
</html>
