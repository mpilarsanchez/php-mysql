<?php

function guardarPelicula(PDO $db){
      $titulo = $_POST["title"];
      $rating = $_POST["rating"];
      $awards = $_POST["awards"];
      $lenght = $_POST["lenght"];
      $release_date =$_POST["year"]."-".$_POST["month"]."-".$_POST["day"];

  $consulta = $db->prepare("INSERT into movies values (default, null, null, '$titulo', '$rating', '$awards', '$release_date','$lenght', null)");
  $consulta->execute();

  }
?>
