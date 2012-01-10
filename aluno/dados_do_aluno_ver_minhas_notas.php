<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Curso Preparat&oacute;rio para Supletivo a Dist&acirc;ncia</title>

	<link href="css/fontes_principais.css" rel="stylesheet" type="text/css" />

	<link href="css/layout.css" rel="stylesheet" type="text/css">
	<link href="financeiro/css/boletim.css" rel="stylesheet" type="text/css">
</head>

<body>

<div id = "tudo">
<?php include "cab.inc.php" ;?>
<?php include "menu.inc.php"; ?>
<?php include "dados.inc.php" ;?>

<div id="atividade">

<p> Nome: <strong><?php echo "$nome_completo_c" ?></strong>
    CPF:<strong><?php echo "$cpf_c" ?></strong>
<br/>   
    Obs:<strong> <?php echo "$descricao1_c" ?></strong>
</p>

                    <?php $id_aluno   = $_GET['id_aluno'];    ?>

<!--  notas -->

<?php include "boletim.inc.php"?>

<!-- fim notas-->

</div>
</div>
</body>
</html>
