<?php

include "../includes/../includes/validacao_pagina_adm.php";  	
include "../includes/../includes/conexao_bd.php";

$id_aluno = $_GET['id_aluno'];


$query_docs = "SELECT * FROM `tb_documentos` WHERE id_aluno=$id_aluno";

$query_docs = mysql_query($query_docs);

$num = mysql_num_rows($query_docs);


$doc_foto;
$doc_rg_cert;
$doc_cpf;
$doc_titulo;
$doc_reservista;
$doc_hist;
$doc_resi;


if($num>0){

$doc =	mysql_fetch_assoc($query_docs);


	($doc['fotos']) ? ($doc_foto = "checked='true'" ) : ($doc_foto = ""  );
	($doc['rg_certidao']) ? ($doc_rg_cert = "checked='true'" ) : ($doc_rg_cert = ""  );
	($doc['cpf']) ? ($doc_cpf = "checked='true'" ) : ($doc_cpf = ""  );
	($doc['titulo_eleitor']) ? ($doc_titulo = "checked='true'" ) : ($doc_titulo = ""  );
	($doc['reservista']) ? ($doc_reservista = "checked='true'" ) : ($doc_reservista = ""  );
	($doc['historico_certificado']) ? ($doc_hist = "checked='true'" ) : ($doc_hist = ""  );
	($doc['compr_residencia']) ? ($doc_resi = "checked='true'" ) : ($doc_resi = ""  );



}else{

	$query = "INSERT INTO `tb_documentos`(`id`, 
				`fotos`, 
				`rg_certidao`, 
				`cpf`, 
				`titulo_eleitor`, 
				`reservista`, 
				`historico_certificado`, 
				`compr_residencia`,
				`id_aluno`) 
				VALUES ('NULL','false','false','false','false','false','false','false','$id_aluno')";


	mysql_query($query) or die("não foi possivel atualizar");

}

//busca nome completo para configurar o botão voltar.
$query_nome_aluno = "SELECT nome_completo FROM tb_alunos WHERE id_aluno = $id_aluno";


$nome_completo = mysql_query($query_nome_aluno)or die("não foi possivel!");


$nome_completo = mysql_fetch_assoc($nome_completo);


?>



<html>
<head>

	<?php include '../includes/css.inc.php' ; ?>
</head>

<body>
	<div class = "container" >
	<?php include '../includes/cabecalho.inc.php' ; ?>
<div class = "row" >
	<div class = "span3">
	<?php include '../includes/../includes/menu_lateral.php' ; ?>
	</div>
	<div class = "span13">
<h3>Aluno : 
<?php echo $nome_completo['nome_completo']; ?></h3>

<form	name="form_atualizar"  action="alunos_atualizar_docs.php" method="GET" class = "form-stacked" >

		<input name="fotos" type="checkbox" <?php echo $doc_foto ; ?> value="true" /><label>Fotos</label><br>

		<input name="rg_certificado" type="checkbox" <?php echo $doc_rg_cert ; ?> value="true"/><label>RG / Certidão Nascimento</label><br>

		<input name="cpf" type="checkbox" <?php echo $doc_cpf ; ?> value="true"/><label>CPF</label><br>

		<input name="titulo_eleitor" type="checkbox" <?php echo $doc_titulo ; ?> value="true" /><label>Titulo de Eleitor</label><br>

		<input name="reservista" type="checkbox" <?php echo $doc_reservista ; ?> value="true" /><label>Reservista</label><br>

		<input name="historico_certificado" type="checkbox" <?php echo $doc_hist ;?> value="true" /><label>Historico / Certificado</label><br>
		<input name="compr_residencia" type="checkbox" <?php echo $doc_resi ;?> value="true" /><label>Comprovante de residência</label><br>


	      <input name="id_aluno" type="hidden" value="<?php echo $id_aluno ; ?>" />

	      <input type="submit" value="Atualizar" class = "btn primary" />
	

</form>

<form name="form_voltar" action="clientes_busca_alunos.php" method = "post" > 
<input type="hidden" name = "palavra" value="<?php echo $nome_completo['nome_completo'] ; ?>"/>
<input type="hidden" name = "tipo_aluno" value="s"/>

<input type="submit" value="Voltar" class = "btn" />

</form>
</div>
</div>
</body>
</html>
