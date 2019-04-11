<?php 

include_once 'includes/header.inc.php';
include_once 'includes/menu.inc.php';


?>

<div class="row container">
	
	<div class="col s12">
		<h5 class="light">Edição de Registros</h5><hr>
		
	</div>

</div>
<?php
	 include_once 'banco_de_dados/conexao.php';
	 $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
	 $_SESSION['id'] = $id;
	 $querySelect = $link->query("select * from usuarios.sql where id='$id'");

	 while ($registros = $querySelect->fetch_assoc()):
	 	$nome = $registros['nome'];
	 	$email = $registros['email'];
	 	$matricula = $registros['matricula'];
	 	$senha = $registros['senha'];
	 endwhile;
 ?>
 <div class="row container">
			<form action="banco_de_dados/update.php" method="post" class="col s12">
				<fieldset class="formulario" style="padding: 15px">
					<legend><img src="img/icon1.jpg" alt="[imagem]" width="100"></legend>
					<h5 class="light center">Alteração</h5>
					<div class="input-field col s12">
						<i class="material-icons prefix">account_circle</i>
						<input type="text" name="nome" id="nome" value="<?php echo $nome ?>" maxlength="40" required autofocus>
						<label form="nome">Login</label>
					</div>
		
					<div class="input-field col s12">
						<i class="material-icons prefix">email</i>
						<input type="email" name="email" id="email" value="<?php echo $email ?>" maxlength="40" required autofocus>
						<label form="email">Email</label>
					</div>
					<div class="input-field col s12">
						<i class="material-icons prefix">assignment_ind</i>
						<input type="text" name="matricula" id="matricula" value="<?php echo $matricula ?>" maxlength="20" required>
						<label form="matricula">Matricula</label>
					</div>

					<div class="input-field col s12">
						<i class="material-icons prefix">build</i>
						<input type="password" name="senha" id="senha" value="<?php echo $senha ?>" maxlength="20" required>
						<label form="senha">Senha</label>
					</div>		

					<div class="input-field col s12">
						<input type="submit" value="alterar" class="btn green">
						<a href="consultas.php" class="btn red">cancelar</a>
					</div>

					</fieldset>		
				</form>
			</div>
<?php include_once 'includes/footer.inc.php';?>