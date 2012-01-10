<?php 

include "validacao_pagina_aluno.php"; 
include "../financeiro/conexao_bd.php";
$resultado= mysql_query ("SELECT * FROM tb_alunos Where cpf='$cpf' AND registro_ativo = 's'");
$linhas = mysql_num_rows ($resultado);

session_start();


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


// verifica se exite datas ativadas ! 
$SQL = "SELECT *
	FROM `tb_agenda_provas` WHERE ativo = 1 
	";


$agendamentoAtivo = mysql_query($SQL);
if(mysql_num_rows($agendamentoAtivo) ==0){

	$agendamentoAtivo = 0;

}

?>

<?php include "header.inc.php" ; ?>

<body>
<div id = "tudo" >

<?php include "cab.inc.php" ; ?>
<?php include "menu.inc.php" ; ?>
<?php include "dados.inc.php"?>

<!-- Agendamentos do aluno  -->
<div id = "atividade">
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
		<?php if (!$agendamentoLotados && $agendamentoAtivo ) : ?>
			<a id = "linkAgendamento" href="agendamento_adicionar.php?id_aluno=<?php echo $id_aluno_c ?>">Adicionar<br/> Agendamento <br/>de Provas</a>
		<?php endif;?>

		<!-- FIM link do agendamento-->



</table>
</div>


        <?php mysql_close($link); ?>


</div>

<div id ="rodape">
</div>

</div>

</body>
</html>
