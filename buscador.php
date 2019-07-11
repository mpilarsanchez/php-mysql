<?php
include("pdo.php");
include("funciones_buscador.php");
if ($_POST){
  $tipo = $_POST["chooseone"];
  $titulo = $_POST["titulo"];
  $resultados = buscador(abrirBaseDeDatos(), $titulo, $tipo);

}
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Buscador</title>
   </head>
   <body>
     <div class="container">
       <form class="buscador" action="buscador.php" method="post">
         <p>Selecciona que quieres buscar</p>
         <input type="radio" name="chooseone" value="series" required>
         <label for="series"> SERIES</label><br>
         <input type="radio" name="chooseone" value="movies" required>
         <label for="movies">PELICULAS</label><br>
         <input type="text" name="titulo" value="">
         <button type="submit" name="button">Buscar</button>
       </form>
     </div>
     <div class="resultados">
        <?php if(isset($resultados) && empty($resultados) ) :?>
       <p>No se encontraron <?php echo $tipo ?> con el titulo:  <?php echo $titulo ?></p>
       <?php endif;?>
       <?php if(isset($resultados)) :?>
       <ul>
         <?php foreach($resultados as $resultado) :?>
          <li><?php echo $resultado["title"]?> </li>
         <?php endforeach;?>
       </ul>
        <?php endif;?>
    </div>
   </body>
 </html>
