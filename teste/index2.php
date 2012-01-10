<html>
<head>
<title>Documento sem t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	font-weight: bold;
	color: #666666;
}
-->
</style>
</head>
<body>
<form method="post" name="nome" action="recebe.php">
<?
$numero_parcelas   = $_POST['numero_parcelas'];
$forma_pagto   = $_POST['forma_pagto'];
?>

<? 
for($i=1;$i<$numero_parcelas;$i++){?>
<span class="style1">Checkbox: </span><? echo($i); ?>:
<input type="checkbox" name="check[]" value="<? echo($i); ?>">
<br>
<span class="style1">Forma pagto:</span> <? echo($forma_pagto); ?>

<br>
<? } ?>
<input name="submit" type="submit" value="enviar">
</form>
</body>
</html>
