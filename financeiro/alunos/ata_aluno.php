<?php
include "../includes/validacao_pagina_adm.php";
include "../includes/conexao_bd.php";

$id_aluno = $_GET['id_aluno'];

$query_aluno = "SELECT * FROM tb_alunos WHERE id_aluno = $id_aluno";

$query_aluno = mysql_query($query_aluno);


while($valor = mysql_fetch_array($query_aluno))
{
	
	$aluno = $valor['nome_completo']  ;
	$cpf = $valor['cpf']  ;
	$tipo_curso = $valor['tipo_curso']  ;

}

$query = "SELECT *
	FROM `tb_agenda_provas_alunos_agendados` , tb_agenda_provas , tb_tipo_materias
	WHERE tb_agenda_provas_alunos_agendados.data_escolhida = tb_agenda_provas.id_data	
	AND tb_tipo_materias.id = tb_agenda_provas_alunos_agendados.materia
	AND tb_agenda_provas_alunos_agendados.id_aluno=$id_aluno";



$res = mysql_query($query) ;

$dat= mysql_query($query) ;

	 while($valor = mysql_fetch_array($dat)) {  

		 $v2 = explode("-",$valor['data_disponivel']); 
	 }

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="../css/requerimento.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id ="todo">
<table style="border :0">
<td style="border:0">
<img src="../imagens/cebanRequerimento.jpg" width="350"></td>

<td style="border:0">
CEBAN - Centro Educacional Bandeirantes<br/>Mantenedora: DYNABYTE Informática Ltda
</td>

</tr>
</table>
<table>
<tr> <td colspan="3" align="center">ATA DE COMPARECIMENTO INDIVIDUAL DO DIA <strong style="font-size:16pt"><?php   echo $v2[2]."/".$v2[1]."/".$v2[0]?></strong></td></tr>
	<tr>
<tr>


	<td width="434">Nome:<strong style="font-size:13pt">  <?php echo $aluno ; ?></strong></td>
	<td width="163">CPF:  <?php echo $cpf ; ?></td>
	<td width="220">Curso:  <?php echo $tipo_curso ; ?></td>
	
</tr>
<tr> <td colspan="3" height="50" >Assinatura do Aluno : </td></tr>

<tr> 	<td> Telefone: </td>
	<td colspan = "2" width = "400">Email: </td>
</tr>
</table>

<table>
<thead>
	<td > Tarefa </td>
	<td > Data </td>
	<td > Materia </td>
	<td > Descriminação </td>
	<td > Nota </td>
</thead>
<tbody>
	<?php while($valor = mysql_fetch_array($res)) {  ?>

<tr>

	<td> Prova </td>

	<td>  <?php  $v = explode("-",$valor['data_disponivel']) ; echo $v[2]."/".$v[1]."/".$v[0]; ?></td>

	<td>  <?php echo $valor['nome'] ;?> </td>
	<td></td>
	<td></td>
</tr>


	<?php } ?>	

	 <tr height="30">
		<td>
		</td>
		<td>
		</td>
		<td>
		</td>
		<td>
		</td>
		<td>
		</td>

	</tr>
	 <tr height="30">
		<td>
		</td>
		<td>
		</td>
		<td>
		</td>
		<td>
		</td>
		<td>
		</td>

	</tr>
	 <tr height="30">
		<td>
		</td>
		<td>
		</td>
		<td>
		</td>
		<td>
		</td>
		<td>
		</td>

	</tr>
	 <tr height="30">
		<td>
		</td>
		<td>
		</td>
		<td>
		</td>
		<td>
		</td>
		<td>
		</td>

	</tr>


	</tr>
	</tbody>
</table>

</div>
</body>

<html>
