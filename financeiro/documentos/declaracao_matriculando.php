<?php
include "../validacao_pagina_adm.php";
include "../conexao_bd.php";

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

}
?>
<html>
<head>
<meta content="text/html; charset=iso-8859-1" http-equiv="Content-Type">
</head>

<body>

<h1>DECLARA��O DE CURSANDO</h1>


<p>Declaramos que o (a) aluno (a): <strong><?php echo $aluno ; ?></strong>, nascido (a) em: <strong><?php echo $data_nasc ; ?></strong>, portador (a) do RG:  <strong><?php echo $rg ; ?></strong>  emitido por:<?php echo $rg_orgao ; ?> e CPF: <strong><?php echo $cpf ; ?></strong>, filho (a) de: <strong><?php echo $pai ; ?> </strong> e de <strong><?php echo $mae ; ?> </strong> est� devidamente matriculada no curso Supletivo Ensino M�dio, na modalidade de Educa��o de Jovens e Adultos, � dist�ncia, neste estabelecimento de ensino.</p>
<br/>
<br/>
<br/>
<p>Por ser verdade, firmo o presente.</p>

<br/>
<br/>
<p>N�cleo Bandeirante - DF, <?php echo date('d / m / Y');?></p>

</body>
</html>
