<?php
include("pdo.php");
include("funciones_actores.php");

$actores=traerActores(abrirBaseDeDatos());

?>

<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ACTORES</title>
</head>
<body>
	<div class="actores_container">
    <ul>
      <?php foreach ($actores as $actor) :?>
      <li>
        <?php echo $actor["first_name"] . $actor["last_name"]?>
      </li>
    <?php endforeach; ?>
    </ul>
  </div>
</body>
</html>
