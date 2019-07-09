<?php
function abrirBaseDeDatos(){
   $dsn = 'mysql:dbname=movies_db;host=localhost;port=3306';
   $username = 'root';
   $password =  '';
   $db= new PDO($dsn, $username, $password);
   return $db;
}

 ?>
