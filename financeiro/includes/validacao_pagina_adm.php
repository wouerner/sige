<?php

$HTTP_COOKIE_VARS["email_sistema"];
$HTTP_COOKIE_VARS["senha_sistema"];

$email_sistema=$HTTP_COOKIE_VARS["email_sistema"];
$senha_sistema=$HTTP_COOKIE_VARS["senha_sistema"];


if(!(empty($email_sistema) or empty($senha_sistema)))
{
include "conexao_bd.php";
$sql = "SELECT * FROM senhas_adm Where email_sistema = '$email_sistema'";
            $resultado = mysql_query($sql);
if(mysql_num_rows($resultado)==1)
{
if ($senha_sistema!=mysql_result($resultado, 0, "senha_sistema"))
{
setcookie("email_sistema"); setcookie("senha_sistema");
echo"Voc� n�o efetuou o LOGIN1111!"; exit;
}
}

else
{
setcookie("email_sistema"); setcookie("senha_sistema");
echo "Voc� n�o efetuou o LOGIN!2222"; exit;
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



"; 


exit;
}

mysql_close($link);
?>
