      
<?php
include "../includes/validacao_pagina_adm.php";
include "../includes/conexao_bd.php";

$id_aluno   = $_GET['id_aluno'];
?>

</table></td>
  </tr>

  <?php 
			  $query_boletim = "SELECT DISTINCT  b.id AS boletim_id, tp_m.nome AS materia_nome, 
				  a.data AS data_avaliacao, tp_en.nome AS ensino_nome, a.nota AS nota_avaliacao, a.tipo_avaliacao AS avaliacao
				  FROM 
				  tb_boletim AS b, tb_materia AS m, tb_tipo_materias AS tp_m,tb_tipo_ensino AS tp_en , tb_avaliacao AS a
				   WHERE 
				   b.id_aluno = $id_aluno 
				   AND
				   m.boletim = b.id
				   AND
				   tp_m.id =  m.materia
				   AND 
				   tp_en.id = m.tipo_ensino
				   AND 
				   m.id = a.materia";
			  $resultado = mysql_query($query_boletim);
?>


	<table>
	<thead> <td>Data</td><td>Curso</td> <td> Materia </td>  <td>Prova </td> <td>Trabalho </td> <td> Outros  </td>  <thead>

<?php		  while ($valor = mysql_fetch_assoc($resultado)) {  ?>

	<tr> 
	<td>	<?php echo $valor['data_avaliacao'] ; ?> </td>
	<td>   <?php echo $valor['ensino_nome'] ; ?> </td>
	<td>   <?php echo $valor['materia_nome'] ; ?> </td>

	 <?php ($valor['avaliacao']=="Prova")    ? ( $nota = $valor['nota_avaliacao'])     : ($nota = 0)  ; ?>
	 <?php ($valor['avaliacao']=="Trabalho") ? ( $trabalho = $valor['nota_avaliacao']) : ($trabalho = 0)  ; ?>
	 <?php ($valor['avaliacao']=="Simulado") ? ( $simulado = $valor['nota_avaliacao']) : ($simulado = 0)  ; ?>
	
	<td>   <?php echo $nota ; ?> </td>
	<td>   <?php echo $trabalho ; ?> </td>
	<td>   <?php echo $simulado; ; ?> </td>

	</tr>

	<?php }  ?>
	</table>


	<a href="boletim_ver_adcionar_notas.php?id_aluno=<?php echo $id_aluno ; ?>">Voltar</a>


<form name="form_voltar" action="clientes_busca_alunos.php" method = "post" > 
<input type="hidden" name = "palavra" value="<?php echo $nome_completo ; ?>"/>
<input type="hidden" name = "tipo_aluno" value="s"/>

<input type="submit" value="Voltar Menu"/>

</form>
