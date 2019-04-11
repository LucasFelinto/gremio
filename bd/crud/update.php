<?php 
session_start();
include_once 'conexao.php';
$id = $_SESSION['id'];

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$matricula = filter_input(INPUT_POST, 'matricula', FILTER_SANITIZE_SPECIAL_CHARS);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_NUMBER_INT);

$queryUpdate = $link->query("update usuarios set nome='$nome',email='$email',matricula='$matricula',senha='$senha' where id='$id'");
$affected_rows = mysqli_affected_rows($link);

if ($affected_rows > 0):
	header("Location:../consultas.php");
endif;
 ?>