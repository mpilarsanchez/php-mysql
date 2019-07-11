<?php
function traerGenero($db){
  $consulta = $db->prepare("SELECT * FROM genres");
  $consulta->execute();
  $generos = $consulta-> fetchAll();
  return $generos;
}

function traerPelisPorGenero($db){
  $generos = traerGenero($db);
  $datos = [];
  for ($i=0; $i <= count($generos)-1; $i++) {
    $consulta = $db->prepare('SELECT movies.title, movies.id, movies.genre_id, genres.name
                              FROM movies
                              INNER JOIN genres
                              WHERE movies.genre_id = "'.$generos[$i]['id'].'"
                              GROUP BY  movies.id ;');
    $consulta->execute();
    $peliculas = $consulta-> fetchAll();
    $pelis=[];
    $ids=[];
      foreach ($peliculas as $pelicula ) {
          array_push($pelis , $pelicula["title"]);
          array_push($ids , $pelicula["id"]);
      }
      $resultados= [
                   "genero" =>  $generos[$i]["name"],
                   "peliculas" =>$pelis,
                   "ids" => $ids
                  ];
      $datos[]= $resultados;
  }

  return $datos;
}

?>
