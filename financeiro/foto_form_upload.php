<?php
#Evitando cache de arquivo
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Last Modified: '. gmdate('D, d M Y H:i:s') .' GMT');
header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
header('Pragma: no-cache');
header('Expires: 0');
?>

<html><!-- InstanceBegin template="/Templates/pagina_principal_do_sistema.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<!-- InstanceBeginEditable name="doctitle" -->
<title>Gerenciamento</title>
<!-- InstanceEndEditable -->

<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate, post-check=0, pre-check=0">
<meta http-equiv="Pragma" content="no-cache, no-store">
<meta http-equiv="expires" content="0">
<meta name="robots" content="follow" />
<meta name="revisit-after" content="15 days" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	background-image: url(imagens/background.gif);
	background-repeat: repeat-y;
	background-color: #FFFFFF;
}
-->
</style>


<script type="text/javascript" language="JavaScript1.2" src="Resource/js/stmenu.js"></script>
<script type="text/javascript" language="JavaScript1.2">
<!--
window.onerror=function(m,u,l)
{
	window.status = "Java Script Error: "+m;
	return true;
}
//-->
</script>

<link href="estilo_sistema.css" rel="stylesheet" type="text/css">
<link href="css/estilo_sistema.css" rel="stylesheet" type="text/css">
<link href="css/css_formularios.css" rel="stylesheet" type="text/css">
<link href="css/css_links.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style1 {color: #3C4796}
-->
</style>
<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- ImageReady Slices (LAYOUT DO MEU SISTEMA222.psd) -->
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td valign="top"><table width="100%" height="151" border="0" cellpadding="0" cellspacing="0" background="imagens/bg_01.gif">
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table></td>
    <td width="988" align="center" valign="top"><table width="988" border="0" align="center" cellpadding="0" cellspacing="0" id="Table_01">
      <tr>
        <td colspan="2" background="imagens/layoyt_a_01.jpg"><table width="987" height="161" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="375" height="39" valign="top">&nbsp;</td>
            <td width="638" align="center" valign="middle"><table width="96%" height="68" border="0">
              <tr>
                <td width="91%" align="center"><span class="titulo_principal style1">SISTEMA PARA GEST&Atilde;O FINANCEIRA E <br>
                  CONTROLE DE ALUNOS </span></td>
                <td width="9%" align="center"><a href="logout_adm.php"><img src="imagens/icone_cadeado.gif" alt="Fechar o Sistema" width="39" height="45" border="0" title="Fechar o Sistema"></a></td>
              </tr>
            </table>              </td>
          </tr>
          <tr>
            <td height="41">&nbsp;</td>
            <td align="center"><?php include "formulario_de_busca_de_alunos.php"; ?></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td width="149" valign="top">
		
		<?php
		
			
						if ($nivel == 'adm')
				{
				
				
				
				include "menu_lateral.php";
				
				
				}
				else
				{
				
				
				//direciona para a p�gina inicial dos usu�rios cadastrados
				
				include "menu_lateral_secretaria.php";
				
				}
		
		
		
		
		?> </td>
        <td width="839" align="center" valign="top"><!-- InstanceBeginEditable name="corpo_programacao_sistema" -->


<table width="419" height="186" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center" valign="top"><table width="739" border="0" cellspacing="3" cellpadding="4">
        <tr>
          <td align="center" class="titulo_principal">Adicionar  Foto do Aluno </td>
        </tr>
        <tr>
          <td><table width="100%" border="0" cellpadding="0" cellspacing="0" background="imagens/px_pontilhado.gif">
              <tr>
                <td><p><img src="imagens/px_pontilhado.gif" width="2" height="1" /></p></td>
              </tr>
          </table></td>
        </tr>
      </table>
	  <p>
	    <?php
include "validacao_pagina_adm.php";
include "foto_uploadjpeg.inc.php";
include "conexao_bd.php";

//pega o valor que vem da p�gina anterior	
$codigo_aluno = $_GET['codigo_aluno'];


// Captura Valor do Hidem que esta mais abaixo. O campo Hidem traz o nome do arquivo que foi gerado pelas vari�veis acima 
// Mant�m o c�digo do aluno para n�o dar erro na update  quando a p�gina retornar para s� pr�pria as as vari�veis na forma "POST"
$codigo_aluno2 = $_POST['codigo_aluno'];
$codigo_aluno3 = "$codigo_aluno2.jpg";

// Faz uma atualuza��o no campo com o nome da foto que era um Avatar, e coloca o nome real da foto do aluno.

$query = "Update tb_alunos Set 

url_foto = '$codigo_aluno3'  

Where codigo_aluno = '$codigo_aluno2'";

$resultado = mysql_query($query)
or die ("Houve erro na grava��o dos dados.");

?>
	    
	    
	    
	    
	    <br />
	    <br />
	    <br />
	    <span class="links"><strong>Escolha o local onde esta localizada a foto que voc&ecirc; quer enviar para o sistema. </strong></span></p>
	  <?




if($_FILES[arquivo]){
 
  

$up = uploadJPEG($_FILES[arquivo],"../fotos_do_aluno_3x4/$codigo_aluno3"); // Para o 3� e 4� parametros estou usando os valores default
switch($up){
case 1:
     
echo "<br><br>Upload bem sucedido!<br><br><img src='../fotos_do_aluno_3x4/$codigo_aluno3'><br><br>";

      break;
    case 2:
      echo "Arquivo n�o enviado!";
      break;
    case 3:
      echo "O arquivo n�o � do tipo JPEG!";
      break;
    case 4:
      echo "O arquivo � maior do que o permitido!";
      break;
    case 5:
      echo "Ocorreu algum erro durante o redimensionamento!";
  }
}
else{

?>

	  <form action="<? echo $PHP_SELF; ?>" method="post" enctype="multipart/form-data">
	  

	<input type="hidden" id="codigo_aluno" name="codigo_aluno" value="<? echo $codigo_aluno ?>">
	  
                <input name="arquivo" type="file" class="css_form_02" />
				

                <br />
                <br />
                <input name="submit" type="submit" class="em_cima" value="   Enviar!   " />
      </form>
          <p>

<?
}
?>



<?
mysql_close($link);
?>

</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>


<!-- InstanceEndEditable --></td>
      </tr>
      <tr>
        <td height="35" colspan="2" align="center" valign="middle"><?php include "roda_pe.php"; ?></td>
        </tr>
    </table></td>
    <td valign="top"><table width="100%" height="151" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
<!-- End ImageReady Slices -->
</body>
<!-- InstanceEnd --></html>