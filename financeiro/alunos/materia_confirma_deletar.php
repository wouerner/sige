<?php

include "../includes/validacao_pagina_adm.php";
include "../includes/conexao_bd.php";


$materia = $_GET['materia'];
$nome_materia = $_GET['nome_materia'];
$tipo_ensino = $_GET['tipo_ensino'];
$id_aluno = $_GET['id_aluno'];
?>


<html>
<head>
	<?php include '../includes/css.inc.php' ; ?>
</head>

<body>
<div class = "container" >
	<div class = "span3" >
		<?php include '../includes/menu_lateral.php' ; ?>
	</div>

	<div class = "span13">
<p>Quer deletar a materia <?php echo $nome_materia; ?> do ensino: <?php echo $tipo_ensino; ?></p>

<form action= "materia_deletar.php" method="post">
	<input type="hidden" name="materia" value="<?php echo $materia; ?>"/>
	<input type="hidden" name="id_aluno" value="<?php echo $id_aluno  ; ?>"/>
	<input type="submit" value="deletar"/>

</form>

</div>
</div>

</body>
</html>
