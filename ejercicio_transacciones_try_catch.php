<?php
include("pdo.php");

//1. Realizar una transacción que inserte 3 películas completando todos sus datos correctamente.
//2. Realizar una transacción que inserte 3 películas y que la primera tenga un id_genero que no exista.
//3. Realizar una transacción que inserte 3 películas y que la tercera tenga un id_genero que no exista.
//4. Realizar una transacción que realice una query con un error de sintaxis y luego inserte una película.
//5. Realizar una transacción que inserte una película y luego que realice una query con un error de sintaxis.

function transaction1(PDO $db){
 try {
     $db ->beginTransaction();

     $consulta = $db->query("INSERT into movies values (default, null, null, 'pelicula1_trans1', '1', '3', '2019-04-18','120', '4')");
     $consulta = $db->query("INSERT into movies values (default, null, null, 'pelicula2_trans1', '10', '3', '2019-04-18','120', '4')");
     $consulta = $db->query("INSERT into movies values (default, null, null, 'pelicula3_trans1', '16', '3', '2019-04-18','120', '4')");

    $db->commit();
 } catch (\Exception $e) {

   $db->rollBack();
 }
}

function transaction2(PDO $db){
  try {
      $db ->beginTransaction();

      $consulta = $db->query("INSERT into movies values (default, null, null, 'pelicula1_trans2', '1', '3', '2019-04-18','120', 'momo')");
      $consulta = $db->query("INSERT into movies values (default, null, null, 'pelicula2_trans2', '10', '3', '2019-04-18','120', '4')");
      $consulta = $db->query("INSERT into movies values (default, null, null, 'pelicula3_trans2', '16', '3', '2019-04-18','120', '4')");

     $db->commit();
  } catch (\Exception $e) {

    $db->rollBack();
  }
}

function transaction3(PDO $db){
  try {
      $db ->beginTransaction();

      $consulta = $db->query("INSERT into movies values (default, null, null, 'pelicula1_trans3', '1', '3', '2019-04-18','120', '4')");
      $consulta = $db->query("INSERT into movies values (default, null, null, 'pelicula2_trans3', '10', '3', '2019-04-18','120', '4')");
      $consulta = $db->query("INSERT into movies values (default, null, null, 'pelicula3_trans3', '16', '3', '2019-04-18','120', '99')");

     $db->commit();
  } catch (\Exception $e) {

    $db->rollBack();
  }
}

function transaction4(PDO $db){
  try {
      $db ->beginTransaction();

      $consulta = $db->query("INSERT into movies values (default, null, null, 'pelicula1_trans4', '1' '3', '2019-04-18','120', '4')");
      $consulta = $db->query("INSERT into movies values (default, null, null, 'pelicula2_trans4', '10', '3', '2019-04-18','120', '4')");

     $db->commit();
  } catch (\Exception $e) {

    $db->rollBack();
  }
}

function transaction5(PDO $db){
  try {
      $db ->beginTransaction();

      $consulta = $db->query("INSERT into movies values (default, null, null, 'pelicula1_trans5', '1', '3', '2019-04-18','120', '4')");
      $consulta = $db->query("INSERT into movies values (default, null, nill, 'pelicula2_trans5', '10', '3', '2019-04-18','120', '4')");

     $db->commit();
  } catch (\Exception $e) {

    $db->rollBack();
  }
}


transaction5(abrirBaseDeDatos())
?>
