<?php

include "validacao_pagina_aluno.php"; 
include "../financeiro/conexao_bd.php";
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
mysql_close($link); 

//iniciar a sess�o e guardar os dados do usuario que s�o relevantes(segundo o chefe...)
session_start();

$_SESSION['aluno'] = array(
			'nome' => $nome_completo_c ,
			'id_aluno' => $id_aluno_c ,
			'cpf' => $cpf_c ,
			'telefone' => $telefones_c ,
			'email' => $email_c ,
			'curso' => $tipo_curso_c,
			'observacao' => $descricao1_c,
			'codigo_aluno' => $codigo_aluno,
		) ;

?>

<?php include "header.inc.php" ; ?>

<body>
<div id = "tudo" >
<?php include "cab.inc.php" ;?>
<?php include "menu.inc.php"; ?>

<div id ="alunoInfo">
<?php include "dados.inc.php" ;?>


<?php include 'listarAvisos.inc.php' ; ?>
</div>

<div id="atividade">
	<div id = "menuAluno">

      	<table border="0" id = "dados">
          <tr>
            <td> <a href="http://ceban.com.br/moodle/login/index.php" ><img src="imagens/ico_escola.jpg " border = "0" /></a></td>
		<td></td>
	    <td>
		<a href="http://www.hostplan.com.br/servicos/componentes/componentes.htm" target="_blank">
		<img src="imagens/ico_conteudo.jpg" width="106" height="134" border="0" /></a>
	    </td>
          </tr>

          <tr>
		<td>
			<a href="documentos/horario_tutoria.pdf" target = "_blanck " ><img src="imagens/tutoria.jpg" border = "0" /></a>
		</td>
		<td>
			<a href="agendamento.php"><img src="imagens/provas.jpg" border="0" /></a>
		</td>
		  <td>
		  <a href="boletim.php">
			<img src="imagens/notas.jpg"  border="0" /></a>
		</td>

	</tr>

	<tr>    
		<td>
			<a href="documentos/manual_aluno.pdf" target = "_blanck " ><img src = "imagens/manual.jpg" border = "0"/></a>
		</td>

		<td>
		<a href="contrato_do_aluno.php?codigo_aluno=<? echo $codigo_aluno; ?>" target="_blank">
			<img src="imagens/contrato.jpg" alt="Imprima este contrato. Assine e nos envie juntamente com a c&oacute;pia da sua documenta&ccedil;&atilde;o."  border="0" />
		</a>
		</td>

	  <td>
		<a href="documentos/procuracao_autorizacao_de_inscricao.pdf" target="_blank">
		<img src="imagens/procuracao.jpg" 
		alt="Imprima e preencha esta procura&ccedil;&atilde;o e reconhe&ccedil;a em cart&oacute;rio. Depois nos envie por e-mail." border="0" /></a>
		</td>
      </p></td>
  </tr>
</table>

</td>
      </tr>
      <tr>
      </tr>
  </tr>
</table>
</div>

</div>

<div id="rodape"></div>
</div>

</body>
</html>
