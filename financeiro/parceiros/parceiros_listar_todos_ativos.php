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
          <table width="739" border="0" cellspacing="3" cellpadding="4">
            <tr>
              <td align="center" class="titulo_principal">Listagem de  Parceiros </td>
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
include "validacao_pagina_adm.php";  	
include('conexao_bd.php');

$SQL = "SELECT * FROM tb_socios WHERE registro_ativo = 's' ORDER BY nome_completo";  
$query = mysql_query($SQL);  
while($x = mysql_fetch_array($query))  
{
?>









      
      
      
      <link href="css_destaques.css" rel="stylesheet" type="text/css" />
  </p>
  </blockquote>

  <table width="735" border="0" align="center">
    <tr>
      <td width="104" align="right" bgcolor="#F5FFF4" class="fonte02">Nome do Cliente: </td>
      <td width="540" bgcolor="#F5FFF4" class="sub_titulos"><strong><? echo "$x[nome_completo]"; ?></strong></td>
      <td width="73" rowspan="5" align="center" valign="middle" bgcolor="#F5FFEC" class="sub_titulos"><a href="parceiros_foto_form_confirmar_antes_upload_01.php?cod_parceiro=<? echo "$x[cod_parceiro]" ?>"><?php echo "<img src=../fotos_dos_parceiros_3x4/$x[url_foto] width='72' height='80' border='1' />" ?></a></td>
    </tr>
    <tr>
      <td width="104" align="right" bgcolor="#F5FFEC" class="fonte02">Endere&ccedil;o:</td>
      <td bgcolor="#F5FFEC" class="sub_titulos"><strong class="fonte01"><? echo "$x[lagradouro]"; ?>, <? echo "$x[n_casa]"; ?>, <? echo "$x[bairro]"; ?>, <? echo "$x[cidade]"; ?>, <? echo "$x[uf]"; ?>. <span class="fonte02">Cep:</span> <? echo "$x[cep]"; ?></strong></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFF4" class="fonte02">Fones:</td>
      <td bgcolor="#F5FFF4"><span class="fonte01">(<? echo "$x[ddd]"; ?>)  <? echo "$x[telefone]"; ?> / <? echo "$x[celular]"; ?></span></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFEC" class="fonte02">E-mail:</td>
      <td bgcolor="#F5FFEC"><span class="fonte01"><? echo "$x[email]"; ?></span></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFF4" class="fonte02">CPF:</td>
      <td bgcolor="#F5FFF4"><span class="fonte01"><? echo "$x[cpf]"; ?></span></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFEC" class="fonte02">RG:</td>
      <td colspan="2" bgcolor="#F5FFEC"><span class="fonte01"><? echo "$x[rg]"; ?></span></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFF4" class="fonte02">Expedi&ccedil;&atilde;o:</td>
      <td colspan="2" bgcolor="#F5FFF4"><span class="fonte01"><? echo "$x[expedicao]"; ?></span></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFEC" class="fonte02">&nbsp;</td>
      <td colspan="2" bgcolor="#F5FFEC">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFEC" class="fonte02">Senha login:</td>
      <td colspan="2" bgcolor="#F5FFEC"><span class="fonte01"><? echo "$x[senha]"; ?></span></td>
    </tr>
    <tr>
      <td bgcolor="#F5FFEC">&nbsp;</td>
      <td colspan="2" bgcolor="#F5FFEC"><table width="614" border="0">
        <tr>
          <td width="120" align="center" class="links"><a href="parceiros_listar_alunos_andamento.php?id_parceiro=<? echo "$x[id_parceiro]" ?>" target="_self">Listar Alunos <br>
            deste Parceiro </a></td>
          <td width="137" align="center" class="links"><a href="parceiros_cadastrar_alunos_parceiros.php?id_parceiro=<? echo "$x[id_parceiro]" ?>" target="_self">Cadastrar Alunos <br>
            para  este Parceiro </a></td>
          <td width="153" align="center" class="links"><a href="parceiros_relatorio_editar_relatorio_financeiro.php?id_parceiro=<? echo "$x[id_parceiro]" ?>" target="_self">Editar Relat&oacute;rio<br> 
            Financeiro </a></td>
          <td width="77" align="center" class="links"><a href="parceiros_editar_dados_parceiro.php?id_parceiro=<? echo "$x[id_parceiro]" ?>">Editar <br>
            Dados </a></td>
          <td width="105" align="center" class="links"><a href="parceiros_ativar_desativar_parceiro.php?id_parceiro=<? echo "$x[id_parceiro]" ?>&funcao=desativar">Desativar <br>
            Este Parceiro </a></td>
        </tr>
      </table>        </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
  </table>
  <?php } ?>
  
  <?
mysql_close($link);
?>


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