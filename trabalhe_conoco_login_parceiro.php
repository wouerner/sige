<?php
include "financeiro/conexao_bd.php";

            $email = $_POST['email'];
            $senha = $_POST['senha'];

 $sql = "SELECT * FROM tb_socios Where email='$email' AND registro_ativo = 's'";
            $resultado = mysql_query($sql);
			
$linhas=mysql_num_rows($resultado);

if($linhas==0) //testa se a consulta retornou algum registro
{
echo"<html><body>";
echo"<font color='#FF0000'><br><br><br><br><br><br><h1><p align=\"center\">E-mail Não Cadastrado no Banco de Dados!</p></h2></font>";
echo"<p align=\"center\"><a href=\"index.php\">Voltar</a></p>";
echo"</body></html>";
}


else
{

if ($senha!=mysql_result($resultado, 0, "senha"))//confere senha

{
echo"<html><body>";
echo"<font color='#FF0000'><br><br><br><br><br><br><h1><p align=\"center\">A senha esta incorreta!</p></h2></font>";
echo" <p align=\"center\"><a href=\"index.php\">Voltar</a></p>";
echo"</body></html>";
}


else //usuário e senhas corretos. Vaos cria os cookies
{

setcookie("email_parceiro", $email,   time()+86400*1);
setcookie("senha_parceiro", $senha,     time()+86400*1);


//direciona para a página inicial dos usuários cadastrados
header ("Location:trabalhe_conosco_pg_principal.php");
}
}

mysql_close($link);
?>
