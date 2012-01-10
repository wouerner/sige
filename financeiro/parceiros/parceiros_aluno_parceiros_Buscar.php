<?php
#Evitando cache de arquivo
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Last Modified: '. gmdate('D, d M Y H:i:s') .' GMT');
header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
header('Pragma: no-cache');
header('Expires: 0');
include "validacao_pagina_adm.php";
include "conexao_bd.php";
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
		
		
		
		
		?></td>
        <td width="839" align="center" valign="top"><!-- InstanceBeginEditable name="corpo_programacao_sistema" -->
<div id="tamanho">
<table width="800" border="0" align="center">
  
  <tr>
    <td height="97" colspan="2" align="center">
	
	
	<FORM method="post">
	  <p>&nbsp;</p>
	  <p><span class="titulo_principal">FA&Ccedil;A UMA BUSCA POR NOME OU CPF <br>
	    (SISTEMA PARCERIA)
</span> </p>
	  <p>
	    <INPUT name="palavra">
          <INPUT type="submit" value="Buscar">
        </p>
	</FORM></td>
  </tr>
  <tr>
    <td width="528" height="160"><span class="fonte02"><?php

if(!empty($HTTP_POST_VARS["palavra"])) {

        $palavra = str_replace(" ", "%", $HTTP_POST_VARS[palavra]);

        /* Altera os espaços adicionando no lugar o simbolo % */
        
        $qr = "SELECT * FROM tb_socios_alunos WHERE nome_completo LIKE '%".$palavra."%' OR cpf LIKE '%".$palavra."%'ORDER BY nome_completo";
        
        // Executa a query no Banco de Dados
        $sql = mysql_query($qr);
        
        // Conta o total ded resultados encontrados
        $total = mysql_num_rows($sql);

        echo "Sua busca retornou '$total' resultados.";

        // Gera o Loop com os resultados
        while($r = mysql_fetch_array($sql)) {
		
?>

<?
//realiza query na tabela HISTÓRICO FINANCEIRO
$resultado3= mysql_query ("SELECT * FROM tb_socios WHERE id_parceiro = $r[id_parceiro]");
$linhas3 = mysql_num_rows ($resultado3);

for($i3=0; $i3<$linhas3; $i3++)
{
$nome_completo = mysql_result ($resultado3, $i3, "nome_completo");
$email = mysql_result ($resultado3, $i3, "email");
$ddd = mysql_result ($resultado3, $i3, "ddd");
$telefone = mysql_result ($resultado3, $i3, "telefone");
$celular = mysql_result ($resultado3, $i3, "celular");
}

?>

    </span><br>
      <br>
      <table width="735" height="337" border="0" align="center">
        <tr>
          <td colspan="2" valign="bottom" bgcolor="#F5FFF4" class="fonte02"><blockquote>
            <p class="links"><strong>Este aluno pertende &agrave;:  </strong></p>
          </blockquote></td>
        </tr>
        <tr>
          <td width="134" align="right" bgcolor="#F5FFF4" class="fonte02">Parceiro: </td>
          <td width="591" bgcolor="#F5FFF4" class="sub_titulos"><strong><? echo "$nome_completo"; ?></strong></td>
        </tr>
        <tr>
          <td width="134" align="right" bgcolor="#F5FFF4" class="fonte02">Telefone:</td>
          <td bgcolor="#F5FFF4" class="fonte01"><strong>(<? echo "$ddd"; ?>) <? echo "$telefone"; ?> / <? echo "$celular"; ?></strong></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#F5FFEC" class="fonte02">E-mail:</td>
          <td bgcolor="#F5FFEC" class="fonte01"><strong><? echo "$email"; ?></strong></td>
        </tr>
        <tr>
          <td colspan="2" align="right" bgcolor="#F5FFF4" class="fonte02">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2" bgcolor="#F5FFEC" class="fonte02"><blockquote>
            <p class="links"><strong>Dados do Aluno </strong></p>
          </blockquote></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#F5FFEC" class="fonte02"><span class="fonte_00001">Nome Completo:</span></td>
          <td bgcolor="#F5FFEC" class="sub_titulos"><strong><? echo "$r[nome_completo]"; ?></strong></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#F5FFF4" class="fonte02"><span class="fonte_00001">CPF:</span></td>
          <td bgcolor="#F5FFF4" class="fonte01"><strong><? echo "$r[cpf]"; ?></strong></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#F5FFEC" class="fonte02"><span class="fonte_00001">Data de Nascimento: </span></td>
          <td bgcolor="#F5FFEC" class="fonte01"><strong><? echo "$r[data_nasc]"; ?></strong></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#F5FFF4" class="fonte02"><span class="fonte_00001">Curso:</span></td>
          <td bgcolor="#F5FFF4" class="fonte01"><strong class="sub_titulos"><? echo "$r[tipo_curso]"; ?></strong></td>
        </tr>
        <tr>
          <td align="right" valign="middle" bgcolor="#F5FFF4" class="fonte02"><span class="fonte_00001">Data de Cadastro:</span></td>
          <td bgcolor="#F5FFF4" class="fonte01"><span class="sub_titulos"><? echo "$r[data_cadastro]"; ?></span></td>
        </tr>
        <tr>
          <td align="right" valign="middle" bgcolor="#F5FFF4" class="fonte02"><span class="fonte_00001">Documentos:</span></td>
          <td bgcolor="#F5FFF4" class="fonte01"><span class="sub_titulos"><? echo "$r[documentos]"; ?></span></td>
        </tr>
        <tr>
          <td align="right" valign="middle" bgcolor="#F5FFF4" class="fonte02"><span class="fonte_00001">Pagamento:</span></td>
          <td bgcolor="#F5FFF4" class="fonte01"><span class="sub_titulos"><? echo "$r[pagamentos]"; ?></span></td>
        </tr>
        <tr>
          <td align="right" valign="middle" bgcolor="#F5FFF4" class="fonte02"><span class="fonte_00001">Hist&oacute;rico:</span></td>
          <td bgcolor="#F5FFF4" class="fonte01"><span class="sub_titulos"><? echo "$r[historico]"; ?></span></td>
        </tr>
        <tr>
          <td align="right" valign="middle" bgcolor="#F5FFF4" class="fonte02"><span class="fonte_00001">Publica&ccedil;&atilde;o</span></td>
          <td bgcolor="#F5FFF4" class="fonte01"><span class="sub_titulos"><? echo "$r[publicacao]"; ?></span></td>
        </tr>
        <tr>
          <td align="right" valign="middle" bgcolor="#F5FFF4" class="fonte02"><span class="fonte_00001">Certificado:</span></td>
          <td bgcolor="#F5FFF4" class="fonte01"><span class="sub_titulos"><? echo "$r[certificado]"; ?></span></td>
        </tr>
        <tr>
          <td align="right" valign="middle" bgcolor="#F5FFF4" class="fonte02"><span class="fonte_00001">Escola:</span></td>
          <td bgcolor="#F5FFF4" class="fonte01"><span class="sub_titulos"><? echo "$r[escola]"; ?></span></td>
        </tr>
        <tr>
          <td align="right" valign="middle" bgcolor="#F5FFF4" class="fonte02"><span class="fonte_00001">Obsrva&ccedil;&atilde;o:</span></td>
          <td bgcolor="#F5FFF4" class="fonte01"><span class="sub_titulos"><? echo "$r[observacao]"; ?></span></td>
        </tr>
        <tr>
          <td height="39" bgcolor="#F5FFEC">&nbsp;</td>
          <td bgcolor="#F5FFEC"><table width="562" border="0">
              <tr>
                <td class="links"><span class="style10"><strong>
				
				
				<a href="parceiros_editar_aluno_parceiro.php?cod_aluno=<? echo "$r[cod_aluno]"; ?>"><strong>EDITAR DADOS DESTE ALUNO </strong></a></td>
                </tr>
          </table></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>

   <? } } ?></td>
    <td width="262" align="center"><span class="style2">
      </span></td>
  </tr>
  <tr>
    <td colspan="2" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="center"><a href="pg_principal.php" class="style5"></a>    </td>
  </tr>
</table>






</div>
<script>
parent.document.getElementById("iframe").height = document.getElementById("tamanho").scrollHeight + 5;
</script>
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