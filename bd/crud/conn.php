<?php 
$dbuser = "root";
$dbpw = "ifpe";
try {
  $conn = new PDO('mysql:host=localhost;dbname=gremio', $dbuser, $dbpw);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
	  echo 'Erro: ' . $e->getMessage();
}
 ?>