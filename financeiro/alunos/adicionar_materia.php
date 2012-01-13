<?php
//validação e conexão com bando de dados
include "../includes/validacao_pagina_adm.php";
include "../includes/conexao_bd.php";
//$id_aluno   = $_GET['id_aluno'];




$SQL = "SELECT * FROM tb_tipo_ensino";  
$query = mysql_query($SQL);  
?>



<html>
<head>

</head>

<body>
	<form action = "inserir_materia.php" method = "post">
		<label>Materia</label><input type= "text" name="materia"/>
		<label>Tipo Ensino</label>
		<select name="tipo_ensino">

		<?php while($ensino = mysql_fetch_array($query)) { ?>

		<option value="<?php echo $ensino[0] ?>"> <?php echo $ensino[1]  ?>    </option>	
		<?php }  ?>
		</select>

		<input type="submit" value="ok"/>	
	</form>

</body>

</html>
