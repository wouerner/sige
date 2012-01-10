<?php

$HTTP_COOKIE_VARS["cpf_"];
$HTTP_COOKIE_VARS["senha_"];
$cpf=$HTTP_COOKIE_VARS["cpf_"];
$senha=$HTTP_COOKIE_VARS["senha_"];

if(!(empty($cpf) or empty($senha)))
{
include "../financeiro/conexao_bd.php";
$sql = "SELECT * FROM tb_alunos Where cpf='$cpf'";
            $resultado = mysql_query($sql);
if(mysql_num_rows($resultado)==1)
{
if ($senha!=mysql_result($resultado, 0, "senha"))
{
setcookie("cpf"); setcookie("senha");
echo"Você não efetuou o LOGIN1111!"; exit;
}
}

else
{
setcookie("cpf"); setcookie("senha");
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
