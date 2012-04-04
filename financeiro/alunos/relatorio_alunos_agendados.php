<?php

include "../includes/validacao_pagina_adm.php";
include "../includes/conexao_bd.php";

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

<div class = "span11" >
		  <div class = "row">
<table class = "table" >
<thead>
<td>Data</td>
<td>Nome</td>
<td>Curso</td>
<td>Mat�ria</td>
<td>Curso</td>
<td>Mat�ria</td>

</thead>

<?php 
$tmp;
$tmp_ant=null;
$alunoAnterior = null ; 
$classificacao = false ;
while($valor = mysql_fetch_assoc($res)){  
	$tmp = $valor['data_disponivel'];
?>

	<?php if ($tmp != $tmp_ant) : ?>
	<tr>
		<td colspan = "6">
			<?php  echo ($tmp == $tmp_ant) ? ("") : ($tmp_ant=$valor['data_disponivel']) ; ?> 
		</td>
	</tr>
	<?php endif ; ?>


			<?php if ($valor['nome_aluno'] == $alunoAnterior ) : ?>

				<?php if ($valor['curso'] !== 'Classifica��o') : ?>
				<td>  <?php echo $valor['curso'] ; ?> </td>
				<td> <?php echo $valor['materia'] ; ?> </td>
				<?php else : ?>



				<?php endif ; ?>
			</tr>

			<?php else :  ?>
			
			<tr>
				<td></td>
				<td> <?php echo $valor['nome_aluno'] ; ?> </td>

				<?php if ($valor['curso'] == 'Classifica��o') : ?>

				<td> <?php echo $valor['curso'] ; ?>  4 materias </td>
				<?php else : ?>

				<td> <?php echo $valor['curso'] ; ?> </td>
				<td>  <?php echo $valor['materia'] ; ?> </td>

				<?php endif ; ?>

			<?php endif ; ?>

<?php 

			$alunoAnterior = $valor['nome_aluno'] ;

} ?>


</table>

</div>	
</div>
</div>
</body>
<html>
