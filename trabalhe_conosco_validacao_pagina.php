<style type="text/css">
<!--
.style7 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #FF0000;
	font-weight: bold;
	font-size: 18px;
}
.style5 {	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 18px;
	color: #0294c4;
}
-->
</style>




<?php

$HTTP_COOKIE_VARS["email_parceiro"];
$HTTP_COOKIE_VARS["senha_parceiro"];
$email_parceiro=$HTTP_COOKIE_VARS["email_parceiro"];
$senha_parceiro=$HTTP_COOKIE_VARS["senha_parceiro"];

if(!(empty($email_parceiro) or empty($senha_parceiro)))
{
include "financeiro/conexao_bd.php";
$sql = "SELECT * FROM tb_socios Where email='$email_parceiro'";
            $resultado = mysql_query($sql);
if(mysql_num_rows($resultado)==1)
{
if ($senha_parceiro!=mysql_result($resultado, 0, "senha"))
{
setcookie("email_parceiro"); setcookie("senha_parceiro");
echo"Você não efetuou o LOGIN1111!"; exit;
}
}

else
{
setcookie("email_parceiro"); setcookie("senha_parceiro");
echo "Você não efetuou o LOGIN!2222"; exit;
}
}
else
{echo "

<div align='center'>
  <p class='style7'>&nbsp;</p>
  <p class='style7'>&nbsp;</p>
  <p class='style7'>Voc&ecirc; n&atilde;o efetuou o LOGIN!</p>
  <p class='style7'>&nbsp;</p>
  <p class='style7'>&nbsp;</p>
  <p class='style7'><a href='index.php' class='style5'>Voltar para tela inicial</a></p>
</div>



"; exit;}

mysql_close($link);
?>