<?php
function traerDatosPelicula(PDO $db,$pelicula_id){
  $consulta = $db->prepare("SELECT * FROM movies
                           INNER JOIN genres ON movies.genre_id = genres.id
                            WHERE movies.id = $pelicula_id
                           ");
  $consulta->execute();
  $peliculas = $consulta-> fetchAll();
  return $peliculas;
}

 ?>
