<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Curso Supletivo</title>
<link href="financeiro/css/estilo_sistema.css" rel="stylesheet" type="text/css" />
</head>

<?php  	
include('financeiro/conexao_bd.php');

$SQL = "SELECT * FROM corpo_contrato WHERE id_contrato = '1'";  
$query = mysql_query($SQL);  
while($x = mysql_fetch_array($query)) {  
?>

<body class="fonte04"><? echo "$x[corpo_contrato]"; ?>

<?php } ?>
<?php mysql_close($link); ?>
</body>

</html>
