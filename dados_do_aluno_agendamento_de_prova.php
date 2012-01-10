<?php 

include "validacao_pagina_aluno.php"; 
include "financeiro/conexao_bd.php";
$resultado= mysql_query ("SELECT * FROM tb_alunos Where cpf='$cpf' AND registro_ativo = 's'");
$linhas = mysql_num_rows ($resultado);


  	for($i=0; $i<$linhas; $i++)
{
$id_aluno_c = mysql_result ($resultado, $i, "id_aluno");
$nome_completo_c = mysql_result ($resultado, $i, "nome_completo");
$lagradouro_c = mysql_result ($resultado, $i, "lagradouro");		
$numero_casa_c = mysql_result ($resultado, $i, "numero_casa");
$bairro_c = mysql_result ($resultado, $i, "bairro");
$cidade_c = mysql_result ($resultado, $i, "cidade");
$estado_uf_c = mysql_result ($resultado, $i, "estado_uf");
$cep_c = mysql_result ($resultado, $i, "cep");
$data_nasc_c = mysql_result ($resultado, $i, "data_nasc");
$cpf_c = mysql_result ($resultado, $i, "cpf");
$rg_c = mysql_result ($resultado, $i, "rg");
$email_c = mysql_result ($resultado, $i, "email");
$inicio_curso_c = mysql_result ($resultado, $i, "inicio_curso");
$termino_curso_c = mysql_result ($resultado, $i, "termino_curso");
$tipo_curso_c = mysql_result ($resultado, $i, "tipo_curso");
$situacao_aluno_c = mysql_result ($resultado, $i, "situacao_aluno");

$polo_c = mysql_result ($resultado, $i, "polo");
$descricao1_c = mysql_result ($resultado, $i, "descricao1");
$telefones_c = mysql_result ($resultado, $i, "telefones");
$senha_c = mysql_result ($resultado, $i, "senha");
$ddd_c = mysql_result ($resultado, $i, "ddd");
$celular_c = mysql_result ($resultado, $i, "celular");
$url_foto = mysql_result ($resultado, $i, "url_foto");
$codigo_aluno = mysql_result ($resultado, $i, "codigo_aluno");
}




//tipo ensino
$SQL = "SELECT 
	tp_en.nome AS tipo_ensino ,
	tp_m.nome AS materia ,
	ag_p.data_disponivel AS data_agendamento
	FROM 
	tb_agenda_provas_alunos_agendados AS ag , 
	tb_tipo_ensino AS tp_en , 
	tb_tipo_materias AS tp_m , 
	tb_agenda_provas AS ag_p
	WHERE 
	ag.materia = tp_m.id
	AND ag.tipo_ensino = tp_en.id
	AND ag_p.id_data = ag.data_escolhida
	AND ag.id_aluno = $id_aluno_c
	";


$alunoQuery = mysql_query($SQL); 


$alunoAgendamentos= array()  ;
$cont = 0;

//nao me culpe o chefe mandou fazer o mais rapido possivel ...
while($x = mysql_fetch_array($alunoQuery)){ 
	
	$alunoAgendamentos[$cont]['tipo_ensino'] = $x['tipo_ensino']; 
	$alunoAgendamentos[$cont]['materia'] = $x['materia']; 
	$alunoAgendamentos[$cont]['data_agendamento'] = $x['data_agendamento']; 
	$alunoAgendamentos[$cont]['data_agendamento'] = explode("-",$alunoAgendamentos[$cont]['data_agendamento']); 
	$alunoAgendamentos[$cont]['data_agendamento'] =  	$alunoAgendamentos[$cont]['data_agendamento'][2]."/".$alunoAgendamentos[$cont]['data_agendamento'][1]."/".$alunoAgendamentos[$cont]['data_agendamento'][0];
	
	$cont++;
} 

// verifica se já tem mais do 2 agendamentos.
$SQL = "SELECT 
	tp_en.nome AS tipo_ensino , 
	tp_m.nome AS materia ,
	ag_p.data_disponivel AS data_agendamento
	FROM 
	tb_agenda_provas_alunos_agendados AS ag , 
	tb_tipo_ensino AS tp_en , 
	tb_tipo_materias AS tp_m , 
	tb_agenda_provas AS ag_p
	WHERE 
	ag.materia = tp_m.id
	AND ag.tipo_ensino = tp_en.id
	AND ag_p.id_data = ag.data_escolhida
	AND ag.id_aluno = $id_aluno_c
	";


$maximoagendamento = mysql_query($SQL);
$agendamentoLotados = null;


if (mysql_num_rows($maximoagendamento)>=2)  {
	$agendamentoLotados = true;
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/pagina_principal.dwt.php" codeOutsideHTMLIsLocked="false" -->

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Curso Preparat&oacute;rio para Supletivo a Dist&acirc;ncia</title>

<link href="css/areaDoAluno.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id = "tudo" >

<div id = "cab" >

	<h1>Centro Educacional Bandeirantes - CEBAN</h1>
<h2>Área do Aluno</h2>

</div>


<div id = "menu">

	<ul>
	<li><a href="dados_do_aluno.php"> Inicio</a></li>
	<li><a href ="horario_tutoria.pdf" > Horário Tutoria </a></li>
	<li><a target= "_blank" href="aluno_ver_nota.php?id_aluno=<?php echo $id_aluno_c ; ?>&cpf=<?php echo $celular_c ; ?>" > Boletim</a></li> 
	<li><a class = "sairLogin" href="logout_aluno.php">Fechar Login</a> </li>
	</ul>

</div>

<!-- Dados do Aluno-->
<div id ="dadosDoAluno" >

<table>
<tr>
    <td><strong> <?php echo "$nome_completo_c" ?> </strong> </td>
   <td>CPF: <strong><?php echo "$cpf_c" ?></strong></td>
    <td>Fone: <strong><?php echo "$telefones_c" ?> </strong></td>
</tr>
<tr>
    <td>E-mail: <strong><?php echo "$email_c" ?></strong></td>
     <td colspan = "2" >Tipo do Curso: <strong><?php echo "$tipo_curso_c" ?></strong></td>
</tr>
<tr>
        <td colspan = "3" >Obs: <strong><?php echo "$descricao1_c" ?></strong> </td>
</tr>
</table>

</div>
<!-- FIM dados do aluno-->





<!-- Agendamentos do aluno  -->

<div id ="agendamento">
<!-- Avisos-->

<div id = "avisos">
	<h2>Avisos</h2>
	<p>Marque as 2 (duas) avaliações no mesmo <strong>DIA</strong></p>
</div>
<table>

<caption>Provas Agendadas </caption>
<thead> 
<tr>
<th>Curso</th>  <th>Materia</th> <th> Data </th>

</tr> 
</thead>

<tbody>

				<?php for ($i = 0 ; $i <count($alunoAgendamentos)  ; $i++ ): ?>
				<tr>
				<td> <?php echo $alunoAgendamentos[$i]['tipo_ensino']; ?>  </td>
				<td> <?php echo $alunoAgendamentos[$i]['materia']; ?>  </td>
				<td> <?php echo $alunoAgendamentos[$i]['data_agendamento']; ?>  </td>
				</tr>
				<?php endfor;?>
</tbody>
</table>
<!-- FIM Agendamento do aluno-->



		<!-- Link de agendamento-->
		<?php if (!$agendamentoLotados) : ?>
			<a id = "linkAgendamento" href="agendamento_prova.php?id_aluno=<?php echo $id_aluno_c ?>">Adicionar<br/> Agendamento <br/>de Provas</a>
		<?php endif;?>

		<!-- FIM link do agendamento-->



</table>
</div>


        <?php mysql_close($link); ?>

<div id = "rodape" >

	<h1>Centro Educacional Bandeirantes - CEBAN</h1>

</div>

</div>

</body>
</html>
