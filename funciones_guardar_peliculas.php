<?php

function prepareAndExecute(PDO $db, $query){
  $consulta = $db->prepare("$query");
  $consulta->execute();
}

function guardarPelicula(PDO $db){
      $titulo = $_POST["title"];
      $rating = $_POST["rating"];
      $awards = $_POST["awards"];
      $lenght = $_POST["lenght"];
      $genre_id = $_POST["genre"];
      $release_date =$_POST["year"]."-".$_POST["month"]."-".$_POST["day"];
      $timeNow = '2018-01-01 00:00:00'; //DateTime()

  //$consulta = $db->prepare("INSERT into movies values (default, null, null, '$titulo', '$rating', '$awards', '$release_date','$lenght', '$genre_id')");
    $consulta = $db->prepare("IF EXISTS (select * from movies where title = '$titulo') THEN
                              update movies set updated_at= '$timeNow', rating = '$rating', awards='$awards', length='$lenght', genre_id='$genre_id', release_date='$release_date'  where title = '$titulo';
                            ELSE
                              INSERT into movies values (default, null, null, '$titulo', '$rating', '$awards', '$release_date','$lenght', '$genre_id');
                            END IF;");
    $consulta->execute();

  }

function traerGenero(PDO $db){
  $consulta = $db->prepare("SELECT * FROM genres");
  $consulta->execute();
  $generos = $consulta-> fetchAll();
  return $generos;
}


?>
