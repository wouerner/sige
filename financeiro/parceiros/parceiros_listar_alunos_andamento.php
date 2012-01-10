<?php
#Evitando cache de arquivo
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Last Modified: '. gmdate('D, d M Y H:i:s') .' GMT');
header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
header('Pragma: no-cache');
header('Expires: 0');
include "validacao_pagina_adm.php";
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
				
				
				//direciona para a página inicial dos usuários cadastrados
				
				include "menu_lateral_secretaria.php";
				
				}
		
		
		
		
		?> </td>
        <td width="839" align="center" valign="top"><!-- InstanceBeginEditable name="corpo_programacao_sistema" -->
<?php
include "validacao_pagina_adm.php";  	
include('conexao_bd.php');

$id_parceiro = $_GET['id_parceiro'];

$resultado= mysql_query ("SELECT * FROM tb_socios WHERE id_parceiro = '$id_parceiro'");
$linhas = mysql_num_rows ($resultado);

for($i=0; $i<$linhas; $i++)

{
$id_parceiro = mysql_result ($resultado, $i, "id_parceiro");
$nome_completo = mysql_result ($resultado, $i, "nome_completo");
$cod_parceiro = mysql_result ($resultado, $i, "cod_parceiro");
}
?>








  <table width="739" border="0" cellspacing="3" cellpadding="4">
    <tr>
      <td align="center" class="titulo_principal">Listagem de Alunos do Parceiro <? echo "$nome_completo"; ?> (<? echo "$id_parceiro"; ?>) </td>
    </tr>
    <tr>
      <td><table width="100%" border="0" cellpadding="0" cellspacing="0" background="imagens/px_pontilhado.gif">
          <tr>
            <td><p><img src="imagens/px_pontilhado.gif" width="2" height="1" /></p></td>
          </tr>
      </table></td>
    </tr>
  </table>

  
  



<?php
$SQL2 = "SELECT * FROM tb_socios_alunos WHERE id_parceiro = '$id_parceiro'  AND registro_ativo = 's' ORDER BY nome_completo" ;  
$query2 = mysql_query($SQL2);  
?>  









      
      
      
      <link href="css_destaques.css" rel="stylesheet" type="text/css" />
  </p>
  </blockquote>
  <table width="838" height="19" border="0" cellpadding="0" cellspacing="2" bgcolor="#5BFF5B" onMouseOver="this.className='fundo';" onMouseOut="this.className='NULL';">
    <tr>
      <td align="center" class="fonte02"><strong>NOME DO ALUNO </strong></td>
      <td width="84" align="center" class="fonte02"><strong>INCLUSO</strong></td>
      <td width="84" align="center" class="fonte02"><strong>DOCUMENTOS</strong></td>
      <td width="98" align="center" class="fonte02"><strong>PAGAMENTO</strong></td>
      <td width="84" align="center" class="fonte02"><strong>HITORICO</strong></td>
      <td width="84" align="center" class="fonte02"><strong>PUBLICA&Ccedil;&Atilde;O</strong></td>
      <td width="84" align="center" class="fonte02"><strong>CERTIFICADO</strong></td>
      <td width="90" align="center" class="fonte02"><strong>EMISS&Atilde;O</strong></td>
    </tr>
</table>
  <?php

while($x2 = mysql_fetch_array($query2))  
{	
?>
  <table width="838" height="24" border="0" cellpadding="2" cellspacing="2">
    <tr>
      <td align="center"><table width="838" height="19" border="0" cellpadding="0" cellspacing="2" bgcolor="#F5FFF4" onMouseOver="this.className='fundo';" onMouseOut="this.className='NULL';" >
          <tr>
            <td class="fonte03"><strong><a href="parceiros_editar_aluno_parceiro.php?cod_aluno=<? echo "$x2[cod_aluno]"; ?>&id_parceiro=<? echo "$id_parceiro"; ?>"><? echo "$x2[nome_completo]" ?></a></strong></td>
            <td width="84" align="center" class="fonte03"><span class="style4">
              <?
				  
				  $data_quebrada = explode('-', $x2[data_cadastro]);
				  $data_cadastro = $data_quebrada[2].'/'.$data_quebrada[1].'/'.$data_quebrada[0];
				  echo "$data_cadastro";
				  ?>
            </span></td>
            <td width="84" align="center" class="fonte03"><span class="style4"><? echo "$x2[documentos]"; ?></span></td>
            <td width="98" align="center" class="fonte03"><span class="style4"><? echo "$x2[pagamentos]"; ?> </span></td>
            <td width="84" align="center" class="fonte03"><span class="style4"><? echo "$x2[historico]"; ?></span></td>
            <td width="84" align="center" class="fonte03"><span class="style4"><? echo "$x2[publicacao]"; ?></span></td>
            <td width="84" align="center" class="fonte03"><span class="style4"><? echo "$x2[certificado]"; ?></span></td>
            <td width="90" align="center" class="fonte03"><span class="style4"><? echo "$x2[escola]"; ?></span></td>
          </tr>
      </table></td>
    </tr>
  </table>
  <?php } ?>

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