<?php
include "../includes/validacao_pagina_adm.php";
include "../includes/conexao_bd.php";


$SQL = "SELECT 
        ag.id AS id_agendamento,
	tp_en.nome AS tipo_ensino , 
	tp_m.nome AS materia ,
	ag_p.data_disponivel AS data_agendamento,
        al.nome_completo AS nome ,
        al.id_aluno AS id_alunos


	FROM 
	tb_agenda_provas_alunos_agendados AS ag , 
	tb_tipo_ensino AS tp_en , 
	tb_tipo_materias AS tp_m , 
	tb_agenda_provas AS ag_p,
        tb_alunos AS al

	WHERE 
	ag.materia = tp_m.id
	AND ag.tipo_ensino = tp_en.id
	AND ag_p.id_data = ag.data_escolhida
       AND al.id_aluno = ag.id_aluno	
       ORDER BY  data_agendamento,nome
	";

$alunoQuery = mysql_query($SQL); 


$alunoAgendamentos= array()  ;
$cont = 0;

//nao me culpe o chefe mandou fazer o mais rapido possivel ...
while($x = mysql_fetch_array($alunoQuery)){ 
	$alunoAgendamentos[ $x['id_alunos'] ] [$cont] ['id_aluno' ]= $x['id_alunos']; 
	$alunoAgendamentos[ $x['id_alunos'] ] [$cont] ['id_agendamento' ]= $x['id_agendamento']; 
	$alunoAgendamentos[ $x['id_alunos'] ][$cont]['tipo_ensino' ]= $x['tipo_ensino']; 
	$alunoAgendamentos[ $x['id_alunos'] ][$cont]['materia' ]= $x['materia']; 
	$alunoAgendamentos[ $x['id_alunos'] ][$cont]['nome' ]= $x['nome']; 
	$alunoAgendamentos[ $x['id_alunos'] ][$cont]['data_agendamento' ]= $x['data_agendamento']; 
	
	$cont++;
} 

?>

<html>
<head>
<title>Gerenciamento</title>

<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate, post-check=0, pre-check=0">
<meta http-equiv="Pragma" content="no-cache, no-store">
<meta http-equiv="expires" content="0">
<meta name="robots" content="follow" />
<meta name="revisit-after" content="15 days" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">


<script type="text/javascript" language="JavaScript1.2" src="Resource/js/stmenu.js"></script>
<script type="text/javascript" language="JavaScript1.2">
<!--
window.onerror=function(m,u,l)
{
	window.status = "Java Script Error: "+m;
	return true;
}
//-->
</script>

<link href="estilo_sistema.css" rel="stylesheet" type="text/css">
<link href="css/estilo_sistema.css" rel="stylesheet" type="text/css">
<link href="css/css_formularios.css" rel="stylesheet" type="text/css">
<link href="css/css_links.css" rel="stylesheet" type="text/css">

</script>

<?php include '../includes/css.inc.php' ; ?>
</head>

<body>
<div class = "container">

<?php include '../includes/cabecalho.inc.php' ; ?>

<div class = "row">
<div class = "span2">
		<?php	include "../includes/menu_lateral.php" ; ?>
</div>

<div class = "span10">

              <h2><span class="titulo_principal">Alunos Agendados  </span></h2>
<table class = "table" >

<thead>
	<th>Nome</th>
	<th>Tipo Ensino</th>
	<th>Materia</th>
	<th>Data Agendamento</th>
	<th>Ações</th>
<thead>
				<?php foreach ($alunoAgendamentos as $chave => $valor ): ?>
					
					<?php foreach ( $valor as $v) : ?>	
				<tr>
				<td>	<?php echo $v['nome']; ?>  </td>
				<td>	<?php echo $v['tipo_ensino']; ?>  </td>
				<td>	<?php echo $v['materia']; ?>  </td>
				<td>	
				<?php

				$v['data_agendamento']= explode ("-", $v['data_agendamento']);
				$v['data_agendamento'] = $v['data_agendamento'][2]."/".$v['data_agendamento'][1]."/".$v['data_agendamento'][0];
				echo $v['data_agendamento']; 
					?>  
				</td>

				<td>
					<a class = " btn btn-danger" href="agendamento_provas_listar_alunos_agendados_Deletar_data.php?id=<?php echo $v['id_agendamento']; ?>&funcao=nao " target="_self" >
					remover
							<i class = "icon-remove" ></i>
		    				</a>
				</td>

		  		<td>
			<a class = "btn" target="_blank"href="ata_aluno.php?id_aluno=<?php echo $v['id_aluno']; ?>"> Ata
							<i class = "icon-file" ></i>
			</a>
				</td>
				</tr>
					<?php endforeach; ?>

				<?php endforeach;?>
</table>
</table>
</body>
</html>
