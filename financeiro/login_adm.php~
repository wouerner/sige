<?php
include "includes/conexao_bd.php";

            $email_sistema = $_POST['email_sistema'];
            $senha_sistema = $_POST['senha_sistema'];

 $sql = "SELECT * FROM senhas_adm Where email_sistema='$email_sistema'";
            $resultado = mysql_query($sql);
			
$linhas=mysql_num_rows($resultado);



for($i=0; $i<$linhas; $i++)
{
$nivel = mysql_result ($resultado, $i, "nivel");
}



if($linhas==0) //testa se a consulta retornou algum registro
{
echo"<html><body>";
echo"<font color='#FF0000'><br><br><br><br><h1><p align=\"center\">Usuário não encontrado!</p></h2></font>";
echo"<p align=\"center\"><a href=\"index.php\">Voltar</a></p>";
echo"</body></html>";
}


else
{

if ($senha_sistema!=mysql_result($resultado, 0, "senha_sistema"))//confere senha

{
echo"<html><body>";
echo"<font color='#FF0000'><br><br><br><br><h1><p align=\"center\">A senha esta incorreta!</p></h2></font>";
echo" <p align=\"center\"><a href=\"index.php\">Voltar</a></p>";
echo"</body></html>";
}


else //usuário e senhas corretos. Vaos cria os cookies
{

setcookie("email_sistema", $email_sistema,   time()+4800*10);
setcookie("senha_sistema", $senha_sistema,     time()+4800*10);
setcookie("nivel", $nivel,     time()+4800*10);


				if ($nivel == 'adm')
				{
				
				
				//direciona para a página inicial dos usuários cadastrados
				header ("Location:financeiro/pagina_principal.php");
				
				
				}
				else
				{
				
				
				//direciona para a página inicial dos usuários cadastrados
				header ("Location:pagina_principal_secretaria.php");
				}
				
				
				
				
}
}

mysql_close($link);
?>
