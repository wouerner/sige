<?php
include "../includes/validacao_pagina_adm.php";
include "../includes/conexao_bd.php";

$id_aluno = $_GET['id_aluno'];




$query_aluno = "SELECT * FROM tb_alunos ";

$query_aluno = mysql_query($query_aluno);


while($valor = mysql_fetch_array($query_aluno))
{
	
	$aluno = $valor['nome_completo']  ;
	$cpf = $valor['cpf']  ;
	$tipo_curso = $valor['tipo_curso']  ;

}




$query = "SELECT * FROM `tb_agenda_provas_alunos_agendados` WHERE id_aluno= $id_aluno" ;


$res = mysql_query($query) ;

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/requerimento.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id ="todo">
<table style="border :0">
<td style="border:0">
<img src="imagens/cebanRequerimento.jpg" width="350"></td>

<td style="border:0">
CEBAN - Centro Educacional Bandeirantes<br/>Mantenedora: DYNABYTE Informática Ltda
</td>

</tr>
</table>
<table>
<tr> <td colspan="3" align="center">ATA DE COMPARECIMENTO INDIVIDUAL DO DIA ______/_______/________</td></tr>
	<tr>
<tr>


	<td>Nome do Aluno:  <?php echo $aluno ; ?></td>
	<td>CPF:  <?php echo $cpf ; ?></td>
	<td>Curso:  <?php echo $tipo_curso ; ?></td>
	
</tr>
<tr> <td colspan="3" >Assinatura do Aluno : ____________________________________________________________</td></tr>
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

	<td rowspan ="2"> Prova </td>

	<td rowspan ="2">  <?php  $v = explode("-",$valor['data_escolhida']) ; echo $v[2]."/".$v[1]."/".$v[0]?></td>

	<td>  <?php echo $valor['materia01'] ;?> </td>
	<td></td>
	<td></td>
</tr>

<tr>
	<td><?php echo $valor['materia02'] ;?></td>

	<td> </td>

</tr>

	<?php } ?>	

	</tbody>
</table>

</div>
</body>

<html>
