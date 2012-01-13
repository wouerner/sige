<?
include "../includes/validacao_pagina_adm.php";
include "../includes/conexao_bd.php";

$id_aluno = $_POST['id_aluno'];
$boletim =  $_POST['boletim'];

//nome do aluno
include '../includes/nome_aluno.inc.php' ; 

//seleciona o tipo de ensino
$tipo_ensino = 'SELECT * FROM tb_tipo_ensino';
$tipo_ensino = mysql_query($tipo_ensino);

//seleciona materia 
$materia = 'SELECT * FROM tb_tipo_materias';
$materia = mysql_query($materia);

?>


<html>
<head>
	<?php include '../includes/css.inc.php' ; ?>

</head>

<body>

<div class = "container">

<?php include '../includes/cabecalho.inc.php' ; ?>

<div class = "row">
<div class = "span3">

	<?php include '../includes/menu_lateral.php' ; ?>
</div>


<div class = "span13">

	<h3><?php echo $nome['nome_completo'] ; ?></h3>

	<form action = "inserir_materias.php" method="post" class = "form-stacked" >


			<p>Inserindo materias para o boletim <?php echo $boletim ; ?>	</p>
			<label>Tipo de ensino: </label>

			<select name="tipo_ensino">
				<?php while($ensino = mysql_fetch_array($tipo_ensino)) { ?>
					<option value='<?php echo $ensino[0] ?>'> <?php echo $ensino[1]  ?>  </option>
	
				<?php } ?>	
			</select>


			<label>Materia: </label>
			<select name="materia">	
			
				<?php while($valor = mysql_fetch_array($materia)) { ?>
					<option value='<?php echo $valor[0] ?>'> <?php echo $valor[1]  ?>  </option>

				<?php } ?>	

			</select>
			

			<input type="hidden" value ='<?php echo $boletim ?>' name = 'boletim' >
			<input type="hidden" name = "id_aluno" value="<?php echo $id_aluno ; ?>" />
			
			<label>
			<input type="checkbox" name = "aproveitamento" />
			<span>E aproveitamento ? </span>
			</label>
			

			<input type="submit" value = "inserir" class = "btn success" />	

	</form>

		
</div>
</div>
	
</body>
</html>
