<?php
include_once 'conexao.php';
session_start();
$nome = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);
$matricula = filter_input(INPUT_POST,'matricula',FILTER_SANITIZE_SPECIAL_CHARS);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);

$querySelect = $link->query("select email from usuarios.sql");
$array_emails = [];

while ($emails = $querySelect->fetch_assoc()):
	$emails_existentes = $emails['email'];
	array_push($array_emails,$emails_existentes);
endwhile;

if(in_array($email, $array_emails)):

$_SESSION['msg'] = "<p class='center red-text>". 'Email já foi usado'."</p>";
	header("Location:../");
else:
	$queryInsert = $link->query("insert into usuarios.sql values(default,'$nome','$email','$matricula','$senha')");
	$affected_rows = mysqli_affected_rows($link);

	if($affected_rows > 0):
		$_SESSION['msg'] ="<p class='center green-text'>".'Cadastro efetuado com êxito'."<br>";
		header("Location:../");
   	endif;
endif;	
?>