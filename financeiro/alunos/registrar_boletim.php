<?

//include "validacao_pagina_adm.php";
include "../includes/conexao_bd.php";

$id_aluno = $_POST['id_aluno'];
$codigo_aluno = $_POST['codigo_aluno'];

		//checa se já não existe cadastro de boletim para o aluno.
		$query_aluno = "SELECT id_aluno FROM tb_boletim WHERE id_aluno = $id_aluno";
		$resultado = mysql_query($query_aluno);
		$num = mysql_num_rows($resultado);
		if ($num != 0 ){ 
			echo "não foi possivel cadastrar o boletim";
			exit; } 



$query = " INSERT INTO tb_boletim (id_aluno) VALUE ($id_aluno) ";
mysql_query( $query) or die("Não foi possivel incluir boletim!");

$num_boletim = mysql_insert_id();

header('Location: boletim_ver_adcionar_notas.php?id_aluno='.$id_aluno.'&codigo_aluno='.$codigo_aluno);
exit();
?>


