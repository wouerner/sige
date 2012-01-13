<?php

include "../includes/../includes/validacao_pagina_adm.php";
include "../includes/../includes/conexao_bd.php";

$query = "SELECT  a.nome_completo AS nome_aluno , m.nome AS materia , tp_en.nome AS curso, dt.data_disponivel
FROM 
tb_agenda_provas_alunos_agendados, tb_agenda_provas AS dt, tb_tipo_ensino AS tp_en, tb_tipo_materias AS m
	JOIN tb_alunos AS a

WHERE 

a.id_aluno = tb_agenda_provas_alunos_agendados.id_aluno
AND tp_en.id = tb_agenda_provas_alunos_agendados.tipo_ensino
AND  m.id = tb_agenda_provas_alunos_agendados.materia
AND   dt.id_data = tb_agenda_provas_alunos_agendados.data_escolhida

ORDER BY dt.data_disponivel, nome_aluno "
; 

$res = mysql_query($query);

?>


<html>
<head>

<?php include '../includes/css.inc.php' ; ?>
</head>

<body>

<div class  = "container">
<div class = "row">
<table>
<thead>
<td>Data</td>
<td>Nome</td>
<td>Curso</td>
<td>Matéria</td>

</thead>

<?php 
$tmp;
$tmp_ant=null;
while($valor = mysql_fetch_assoc($res)){  
$tmp = $valor['data_disponivel'];
?>

	<?php if ($tmp != $tmp_ant) : ?>
	<tr>
		<td colspan = "4">
			<?php  echo ($tmp == $tmp_ant) ? ("") : ($tmp_ant=$valor['data_disponivel']) ; ?> 
		</td>
	</tr>
	<?php endif ; ?>

	<tr>
			<td></td>
			<td> <?php echo $valor['nome_aluno'] ; ?> </td>
			<td> <?php echo $valor['curso'] ; ?> </td>
			<td> <?php echo $valor['materia'] ; ?> </td>
	</tr>

<?php } ?>


</table>

</div>	
</div>

</body>
<html>
