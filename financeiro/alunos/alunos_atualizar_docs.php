<?php

//include "../includes/validacao_pagina_adm.php";  	
include "../includes/conexao_bd.php";

$doc_foto = false; 
$doc_rg_cert = false;
$doc_cpf = false;
$doc_titulo = false;
$doc_reservista = false;
$doc_hist = false;
$doc_resi = false;

/*8$doc_foto = $_GET['fotos'];
$doc_rg_cert = $_GET['rg_certificado'];
$doc_cpf = $_GET['cpf'];
$doc_titulo = $_GET['titulo_eleitor'];
$doc_reservista = $_GET['reservista'] ;
$doc_hist = $_GET['historico_certificado'];*/

$id_aluno = $_GET['id_aluno'];
echo $id_aluno;


(isset($_GET['fotos']) ) ? $doc_foto=true : $doc_foto =0;
(isset($_GET['rg_certificado']) ) ? $doc_rg_cert = true : $doc_rg_cert = 0;
(isset($_GET['cpf'])) ? $doc_cpf=true : $doc_cpf = 0;
(isset($_GET['titulo_eleitor']) ) ? $doc_titulo = true : $doc_titulo = 0;
(isset($_GET['reservista']) ) ? $doc_reservista = true : $doc_reservista = 0;
(isset($_GET['historico_certificado'])) ? $doc_hist = true : $doc_hist = 0;
(isset($_GET['compr_residencia'])) ? $doc_resi = true : $doc_resi = 0;

$query = "UPDATE tb_documentos SET 
		fotos=$doc_foto,
		rg_certidao=$doc_rg_cert,
		cpf=$doc_cpf,
		titulo_eleitor=$doc_titulo,
		reservista=$doc_reservista,
		historico_certificado=$doc_hist,
		compr_residencia=$doc_resi
		WHERE id_aluno =$id_aluno";




mysql_query($query ) or die("não foi possivel atualizar documentos  ".mysql_error());

?>


<html>
<head>
</head>

<body>
<p>	atualizado com sucesso <br/><a href="alunos_checar_docs.php?id_aluno=<?php echo $id_aluno ; ?>">voltar</a></p>

</body>

</html>
