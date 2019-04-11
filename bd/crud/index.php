<?php session_start() ?>
<?php include '../includes/header.inc.php' ?>
<?php include '../includes/menu.inc.php' ?>
		<p>&nbsp;</p>
		<div class="row container">
			<form action="addUser.php" method="post" class="col s12">
				<fieldset class="formulario" style="padding: 15px">
					<legend><img src="../img/icon1.jpg" alt="[imagem]" width="100"></legend>
					<h5 class="light center">Cadastro de Usuário</h5>

					<?php
					if(isset($_SESSION['msg'])):
							echo $_SESSION['msg'];
							session_unset();
					endif;
					?>

					<div class="input-field col s12">
						<i class="material-icons prefix">account_circle</i>
						<input type="text" name="nome" id="nome" maxlength="40" required autofocus>
						<label form="nome">Login</label>
					</div>
		
					<div class="input-field col s12">
						<i class="material-icons prefix">email</i>
						<input type="email" name="email" id="email" maxlength="40" required autofocus>
						<label fo<?php include '../includes/header.inc.php' ?>
rm="email">Email</label>
					</div>
					<div class="input-field col s12">
						<i class="material-icons prefix">assignment_ind</i>
						<input type="text" name="matricula" id="matricula" maxlength="20" required>
						<label form="matricula">Matricula</label>
					</div>

					<div class="input-field col s12">
						<i class="material-icons prefix">build</i>
						<input type="password" name="senha" id="senha" maxlength="20" required>
						<label form="senha">Senha</label>
					</div>		

					<div class="input-field col s12">
						<input type="submit" value="cadastrar" class="btn green">
						<input type="reset" value="limpar" class="btn red">
					</div>

					</fieldset>		
				</form>
			</div>
<?php include_once '../includes/footer.inc.php' ?>