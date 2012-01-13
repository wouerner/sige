<?php 
		$query_nome = "SELECT * FROM tb_alunos WHERE id_aluno = $id_aluno";
		$resultado_nome = mysql_query($query_nome);
		$nome = mysql_fetch_assoc($resultado_nome);
?>
