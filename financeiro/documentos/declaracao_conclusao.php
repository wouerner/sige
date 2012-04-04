<?php
include "../includes/validacao_pagina_adm.php";
include "../includes/conexao_bd.php";

$codigo_aluno = $_GET['codigo_aluno'];

$query_aluno = "SELECT * FROM tb_alunos WHERE codigo_aluno = '$codigo_aluno'";

$query_aluno = mysql_query($query_aluno);


while($valor = mysql_fetch_array($query_aluno))
{
	
	$aluno = $valor['nome_completo']  ;
	$cpf = $valor['cpf']  ;
	$tipo_curso = $valor['tipo_curso']  ;
	$data_nasc = $valor['data_nasc']  ;
	$rg = $valor['rg']  ;
	$rg_orgao = $valor['rg_orgao']  ;
	$cpf = $valor['cpf']  ;
	$pai = $valor['nome_do_pai']  ;
	$mae = $valor['nome_do_mae']  ;
	$naturalidade_uf = $valor['naturalidade_uf']  ;
	$naturalidade = $valor['naturalidade']  ;
	$tipo_curso = $valor['tipo_curso']  ;
	$termino_curso = $valor['termino_curso']  ;

}
?>

<html>

<head>
<meta content="text/html; charset=iso-8859-1" http-equiv="Content-Type">

<link href="../css/documentos.css" rel="stylesheet" type="text/css">

</head>

<body>

<table id = "documento" >

		<caption><h1>DECLARAÇÃO DE CONCLUSÃO<h1></caption>

	<tr>
		<td>
			<p> 

			Declaramos que o(a) aluno(a):  <strong><span><?php echo $aluno ; ?></span></strong>, nascido(a) em: <strong><?php echo $data_nasc ; ?></strong>, portador(a) do RG Nº: <strong><?php echo $rg ; ?></strong>  emitido por: <?php echo $rg_orgao ; ?>  e CPF: <strong><?php echo $cpf ; ?></strong>, filho (a) de:<strong><?php echo $pai ; ?> </strong>  e de <strong><?php echo $mae ; ?> </strong>, natural de: <?php echo $naturalidade ; ?> - <?php echo $naturalidade_uf ; ?>, 
concluiu em <?php echo $termino_curso ; ?> 
os estudos relativos ao Supletivo do <?php echo $tipo_curso; ?>, na modalidade de Educação de Jovens e Adultos, à distância estando apto (a) a prosseguir seus estudos. Informamos ainda, que o certificado de conclusão está em fase de elaboração, o qual deverá ser entregue posteriormente ao concluinte e aguarda publicação no D.O.D.F.no prazo de 120 (cento e vinte dias) e o Histórico Escolar no prazo de 30 (trinta dias).




</p>

		<td>
	</tr>

	<tr>
		<td>
			<p class = "espaco" >Por ser verdade, firmo o presente.</p>
		</td>

	</tr>

	<tfoot>
		<td>
			<p>Núcleo Bandeirante - DF, <?php echo date('d / m / Y');?></p>
		</td>
	</tfoot>

</table>

</body>
</html>
