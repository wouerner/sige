<?php

include "../includes/validacao_pagina_adm.php";  	
include "../includes/conexao_bd.php";

$id_aluno = $_GET['id_aluno'];
$codigo_aluno = $_GET['codigo_aluno'];


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


	mysql_query($query) or die("n�o foi possivel atualizar");

}

//busca nome completo para configurar o bot�o voltar.
$query_nome_aluno = "SELECT nome_completo FROM tb_alunos WHERE id_aluno = $id_aluno";


$nome_completo = mysql_query($query_nome_aluno)or die("n�o foi possivel!");


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
	<div class = "span2">
	<?php include '../includes/menu_lateral.php' ; ?>
	</div>
	<div class = "span10">
<h3>Aluno : 
<?php echo $nome_completo['nome_completo']; ?></h3>

<?php include '../includes/menu_aluno.inc.php' ; ?>


<div class = "span10" >

<form	name="form_atualizar"  action="alunos_atualizar_docs.php" method="GET" class = "form-horizontal" >

<fieldset>
	<legend>Documentos Entregues</legend>

<div class = "row" >
	<div class = "span5" >

		<div class = "control-group" >
			
			<div class = "controls" >
					  <label  class = "checkbox" >
						  <input  name="fotos" type="checkbox" <?php echo $doc_foto ; ?> value="true"  /> 	
						  Fotos
					  </label>

					  <label class = "checkbox" >
						  <input name="rg_certificado" type="checkbox" <?php echo $doc_rg_cert ; ?> value="true"/>
						  RG / Certid�o Nascimento
					  </label>

					  <label class = "checkbox" >
					  <input name="cpf" type="checkbox" <?php echo $doc_cpf ; ?> value="true"/>
						  CPF
					  </label>
			</div>

		</div>

</div>

<div class = "span5" >
		<div class = "control-group" >
			<div class = "controls" >
				<label class = "checkbox " > Titulo de Eleitor
					<input class = "" name="titulo_eleitor" type="checkbox" <?php echo $doc_titulo ; ?> value="true" />
				</label>

					  <label class = "checkbox " ></label>
						  <input name="reservista" type="checkbox" <?php echo $doc_reservista ; ?> value="true" /> Reservista</label>

					  <label class = "checkbox " > </label>
						  <input name="historico_certificado" type="checkbox" <?php echo $doc_hist ;?> value="true" />Historico / Certificado</label>

					  <label class = "checkbox " ></label>
							  <input name="compr_residencia" type="checkbox" <?php echo $doc_resi ;?> value="true" />Comprovante de resid�ncia</label>
		</div>
	</div>
</div>

<div class = "span7" >
		<div class = "form-actions" >
	      <input name="id_aluno" type="hidden" value="<?php echo $id_aluno ; ?>" />
	      <input name="codigo_aluno" type="hidden" value="<?php echo $codigo_aluno ; ?>" />
		
			<input type="submit" value="Atualizar" class = "btn btn-primary" />
		</div>
</div>

</fieldset>	

</div>
</div>
</body>
</html>
