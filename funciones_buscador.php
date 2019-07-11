<?php


function buscador(PDO $db, $titulo, $tipo){
  $consulta = $db->prepare('SELECT * FROM '.$tipo.' WHERE title LIKE "%'.$titulo.'%";');
  $consulta->execute();
  $resultado = $consulta-> fetchAll();
  return $resultado;
}

 ?>
