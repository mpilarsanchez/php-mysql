<?php
function traerSeries(PDO $db){
  $consulta = $db->prepare("SELECT * FROM series");
  $consulta->execute();
  $series = $consulta-> fetchAll();
  return $series;
}

function traerDatosSerie(PDO $db, $serie_id){
  $consulta = $db->prepare("SELECT series.title as serie, genres.name as genero, seasons.title as temporada, episodes.title as episodio
                            FROM series
                            INNER JOIN genres ON series.genre_id = genres.id
                            INNER JOIN seasons ON series.id = seasons.serie_id
                            INNER JOIN episodes ON seasons.id = episodes.season_id
                            WHERE series.id = $serie_id
                            ");
  $consulta ->execute();
  $serie = $consulta-> fetchAll();
  return $serie;
}
 ?>
