<?php
include 'conexao.php';

$pdo = new PDO(DSN, USER, PASSWD);

$sql = "SELECT * FROM tb_avisos";

$stm = $pdo->prepare($sql);

$stm->execute();

$resposta = $stm->fetchAll();
?> 

<!DOCTYPE html>
<html>
<head>
<link type="text/css" rel="stylesheet" href="../css/bootstrap.css">
<?php include '../includes/css.inc.php' ; ?>
</head>

<body>
<div class = "container">

<div class = "row">
<table>
	<caption>Lista de Avisos</caption>
	<thead>
		<td></td>
		<td>Aviso</td>
		<td>Ações</td>
	</thead>
	<?php foreach($resposta as $linhas) : ?>	
		
		<tr>
			<td><?php echo $linhas['id'] ?>  </td>
			<td><?php echo $linhas['aviso'] ?>  </td>
			<td>
				<form action = "apagarAviso.php" method = "post">
					<button class = "btn danger" type = "submit" name="aviso" value="<?php echo $linhas['id'] ?>">Apagar</button>
				</form>
			</td>

		</tr>

	<? endforeach ; ?>

</table>
		
	<a class = "btn primary" href = "avisos.php">Novo</a>
	<a class = "btn" href = "../financeiro/pagina_principal.php">voltar</a>
</div>
</div>
</body>

</html>
