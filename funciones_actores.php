<?php
function traerActores(PDO $db){
  $consulta = $db->prepare("SELECT * FROM actors");
  $consulta->execute();
  $actores = $consulta-> fetchAll();
  return $actores;
}
