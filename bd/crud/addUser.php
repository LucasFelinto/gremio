<?php 
session_start();

require_once 'conn.php';

$dados = filter_input_array(INPUT_POST);

/*
$queryList = $conn->query("SELECT nome, email, matricula FROM usuarios");
$queryList->execute();
*/
$queryEmail = $conn->prepare("SELECT * FROM usuarios WHERE email = :email");
$queryEmail->bindParam(':email', $dados['email']);
$queryEmail->execute();

$data_email = $queryEmail->fetchALL(PDO::FETCH_ASSOC);

$queryMt = $conn->prepare("SELECT email FROM usuarios WHERE matricula = :mt");
$queryMt->bindParam(':mt', $dados['matricula']);
$queryMt->execute();

$data_mt = $queryMt->fetchALL(PDO::FETCH_ASSOC);


if (sizeof($data_email) > 0) {
	$_SESSION['erro'] = "ESTE EMAIL JÁ ESTÁ CADASTRADO";
	header('location: ../../pages/cadastro.php');
} else if (sizeof($data_mt) > 0) {
	$_SESSION['erro'] = "ESTA MATRÍCULA JÁ ESTÁ CADASTRADO";
	header('location: ../../pages/cadastro.php');
}else if($dados['senha']!=$dados['confirmarsenha']){
	$_SESSION['erro'] = "SENHAS NÃO CONBINAM";
	header('location: ../../pages/cadastro.php');	
}else {
	
	$queryInsert = $conn->prepare("INSERT INTO usuarios(nome, sobrenome, cidade, matricula, email, senha) VALUES (:nome,:sobrenome,:cidade, :matricula, :email, :senha)");
	$queryInsert->bindParam(':nome', $dados['nome']);
	$queryInsert->bindParam(':sobrenome', $dados['sobrenome']);
	$queryInsert->bindParam(':cidade', $dados['cidade']);
	$queryInsert->bindParam(':matricula', $dados['matricula']);
	$queryInsert->bindParam(':email', $dados['email']);
	$queryInsert->bindParam(':senha', md5($dados['senha']));
	$queryInsert->execute();
	
	header('location: ../../pages/login.php');
}
 ?>