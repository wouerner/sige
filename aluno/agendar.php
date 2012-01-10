<?php 
//include "validacao_pagina_aluno.php"; 
include "../financeiro/conexao_bd.php";

$id_aluno   = $_POST['id_aluno'];
$data_escolhida   = $_POST['dataDisponivel'];
$materia   = (isset($_POST['materias'])) ? $_POST['materias'] : 'null';
$tipoEnsino   = $_POST['tipoEnsino'];

$resultado= mysql_query ("SELECT * FROM tb_alunos Where id_aluno='$id_aluno' AND registro_ativo = 's'");
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
	AND ag.id_aluno = $id_aluno
	";


$maximoagendamento = mysql_query($SQL);



if (mysql_num_rows($maximoagendamento)>=2 )  {
	echo "agendamentos lotados";
	exit();
}


//se for provas de classificação sera feito o agendamento de 4 provas.
if ($tipoEnsino == 5 && mysql_num_rows($maximoagendamento)<=4 ){

	$query = "INSERT INTO tb_agenda_provas_alunos_agendados  (id_aluno, data_escolhida, materia, tipo_ensino) 
		values('$id_aluno','$data_escolhida',2,'$tipoEnsino') ";
$resultado = mysql_query($query) or die ("Houve erro na gravação dos dados.");
	
	$query="INSERT INTO tb_agenda_provas_alunos_agendados  (id_aluno, data_escolhida, materia, tipo_ensino) 
		values('$id_aluno','$data_escolhida',8,'$tipoEnsino')";

$resultado = mysql_query($query) or die ("Houve erro na gravação dos dados.");

	$query="INSERT INTO tb_agenda_provas_alunos_agendados  (id_aluno, data_escolhida, materia, tipo_ensino) 
		values('$id_aluno','$data_escolhida',9,'$tipoEnsino')";

$resultado = mysql_query($query) or die ("Houve erro na gravação dos dados.");

	$query="INSERT INTO tb_agenda_provas_alunos_agendados  (id_aluno, data_escolhida, materia, tipo_ensino) 
		values('$id_aluno','$data_escolhida',5,'$tipoEnsino')";

$resultado = mysql_query($query) or die ("Houve erro na gravação dos dados.");

header('location:agendamento.php');
exit();
}





$query = "INSERT INTO tb_agenda_provas_alunos_agendados  (id_aluno, data_escolhida, materia, tipo_ensino)

 values('$id_aluno','$data_escolhida','$materia','$tipoEnsino')";


$resultado = mysql_query($query) or die ("Houve erro na gravação dos dados.");


header('location:agendamento.php');
exit();
?>



