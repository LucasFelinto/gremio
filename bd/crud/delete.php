<?php 
include_once 'conexao.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);

$queryDelete = $conn->query("delete from usuarios where id='$id'");

if (mysqli_affected_rows($conn) > 0):
	header("Location:../php/consultas.php");
endif;	
 ?>