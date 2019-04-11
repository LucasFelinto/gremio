<?php 
include_once 'includes/header.inc.php';
include_once 'includes/menu.inc.php'; 
include 'conn.php';
?>

<div class="row container">
	<div class="col s12">
		<h5 class="light">Consultas</h5><hr>
			<?php
				$queryList = $conn->query("SELECT nome, email, matricula FROM usuarios");
				$queryList->execute();
				$xibata = $queryList->fetchALL(PDO::FETCH_ASSOC);
			?>
		<table class="striped">
				<tr>	
					<th>Nome</th>
					<th>Email</th>
					<th>Matricula</th>
				</tr>
			
			<?php foreach ($xibata as $dados) : ?>
				<tr>
					<td><?= $dados['nome'] ?></td>
					<td><?= $dados['email'] ?></td>
					<td><?= $dados['matricula'] ?></td>
				</tr>
			<?php endforeach ?>
		</table>

	</div>
</div>

<?php include('includes/footer.inc.php'); ?>