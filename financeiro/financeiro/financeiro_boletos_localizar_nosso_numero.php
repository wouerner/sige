<?php
include "../includes/validacao_pagina_adm.php";
include "../includes/../includes/../includes/../includes/conexao_bd.php";
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
<?php include '../includes/css.inc.php' ; ?>

</head>

<body>
<div class = "container">
<?php include '../includes/cabecalho.inc.php' ; ?>


<div class = "row">


	<div class = "span3">	
		<?php
						if ($nivel == 'adm')
				{
				
				include "../includes/menu_lateral.php";
				
				}
				else
				{
				
				//direciona para a p�gina inicial dos usu�rios cadastrados
				
				include "menu_lateral_secretaria.php";
				}
		?> 
	</div>
	<div class = "span13">	
        <td width="839" align="center" valign="top">

<table width="800" border="0" align="center">
  
  <tr>
    <td height="97" colspan="2" align="center">
	
	
	<FORM method="post">
	  <table width="739" border="0" cellspacing="3" cellpadding="4">
        <tr>
          <td align="center"><span class="titulo_principal"><span class="titulo_principal">Digite o N&uacute;mero do Boleto que Deseja Localizar 
          </span></span></td>
        </tr>
      </table>
	  <p><span class="sub_titulos"> </span><INPUT name="palavra" class="css_form_02">
          <INPUT type="submit" class="css_form_01 btn" value="Buscar" >
        </p>
	  </FORM></td>
  </tr>
  <tr>
    <td width="528" height="160"><span class="fonte02"><?php

if(!empty($HTTP_POST_VARS["palavra"])) {

        $palavra = str_replace(" ", "%", $HTTP_POST_VARS[palavra]);

        /* Altera os espa�os adicionando no lugar o simbolo % */
        
        $qr = "SELECT * FROM tb_boletos_itau WHERE nosso_mumero LIKE '%".$palavra."%' ORDER BY id_boleto";
        
        // Executa a query no Banco de Dados
        $sql = mysql_query($qr);
        
        // Conta o total ded resultados encontrados
        $total = mysql_num_rows($sql);

        echo "Sua busca retornou '$total' resultados.";

        // Gera o Loop com os resultados
        while($r = mysql_fetch_array($sql)) {
		
?>

<?
//realiza query na tabela HIST�RICO FINANCEIRO
$resultado3= mysql_query ("SELECT * FROM tb_historico_financeiro WHERE id_boleto = $r[id_boleto]");
$linhas3 = mysql_num_rows ($resultado3);

for($i3=0; $i3<$linhas3; $i3++)
{
$id_cob = mysql_result ($resultado3, $i3, "id_cob");

}
?>

    </span><br>
      <br>
      <table width="735" height="337" border="0" align="center">
        <tr>
          <td colspan="2" valign="bottom" bgcolor="#F5FFF4" class="fonte02"><blockquote>
            <p class="links"><strong>O Boleto Encontrado pertence &agrave;:  </strong></p>
          </blockquote></td>
        </tr>
        <tr>
          <td width="98" align="right" bgcolor="#F5FFF4" class="fonte02">Nome do Aluno: </td>
          <td bgcolor="#F5FFF4" class="sub_titulos"><strong><? echo "$r[sacado]"; ?></strong></td>
        </tr>
        <tr>
          <td width="98" align="right" bgcolor="#F5FFF4" class="fonte02">CPF:</td>
          <td bgcolor="#F5FFF4" class="fonte01"><strong><? echo "$r[cpf]"; ?></strong></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#F5FFEC" class="fonte02">Endere&ccedil;o:</td>
          <td bgcolor="#F5FFEC" class="fonte01"><strong><? echo "$r[lagradouro]"; ?>, <? echo "$r[numero_casa]"; ?>, <? echo "$r[lagradouro]"; ?>, <? echo "$r[bairro]"; ?>, <? echo "$r[cidade]"; ?>, <? echo "$r[estado]"; ?>. CEP: <? echo "$r[cep]"; ?></strong></td>
        </tr>
        <tr>
          <td colspan="2" align="right" bgcolor="#F5FFF4" class="fonte02">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2" bgcolor="#F5FFEC" class="fonte02"><blockquote>
            <p class="links"><strong>Dados do Boleto </strong></p>
          </blockquote></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#F5FFEC" class="fonte02">Nosso N&uacute;mero </td>
          <td bgcolor="#F5FFEC" class="sub_titulos"><strong><? echo "$r[nosso_mumero]"; ?></strong></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#F5FFF4" class="fonte02">Data de Emiss&atilde;o:</td>
          <td bgcolor="#F5FFF4" class="fonte01"><strong><? echo "$r[data_emissao]"; ?></strong></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#F5FFEC" class="fonte02">Vencimento:</td>
          <td bgcolor="#F5FFEC" class="fonte01"><strong><? echo "$r[data_vencimento]"; ?></strong></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#F5FFF4" class="fonte02"><strong>Valor:</strong></td>
          <td bgcolor="#F5FFF4" class="fonte01"><strong class="sub_titulos"><? echo "$r[valor]"; ?></strong></td>
        </tr>
        <tr>
          <td align="right" valign="middle" bgcolor="#F5FFF4" class="fonte02"><strong>Status:</strong></td>
          <td bgcolor="#F5FFF4" class="fonte01"><span class="sub_titulos"><? echo "$r[fase_boleto]"; ?></span></td>
        </tr>
        <tr>
          <td height="39" bgcolor="#F5FFEC">&nbsp;</td>
          <td bgcolor="#F5FFEC"><table width="623" border="0">
              <tr>
                <td width="173" class="links"><span class="style10"><strong>
				
				
				<a href="financeiro_confirmar_antes_fechar_acresc_proximo.php?id_cob=<? echo "$id_cob" ?>&id_boleto=<? echo "$r[id_boleto]" ?>">FECHAR BOLETO  </a></strong></span></td>
                <td width="344" class="links">
				
				
				
				<a href="financeiro_editar_dados_boleto_pagamento.php?cod_boleto=<? echo "$r[cod_boleto]" ?>&id_aluno=<? echo "$r[id_aluno]" ?>&id_cob=<? echo "$id_cob" ?>"><strong>Editar Dados do Boleto</strong></a><strong> </strong></td>
                <td width="92" class="links">
				
				
				<a href="financeiro_Excuir_pagamento_boleto.php?id_boleto=<? echo "$r[id_boleto]" ?>&id_cob=<? echo "$id_cob" ?>&confirm=nao"><strong>Excluir Boleto   </strong></a></td>
              </tr>
          </table></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>

   <? } } ?></td>
    <td width="262" align="center">
      </td>
  </tr>
  <tr>
    <td colspan="2"><?
mysql_close($link);
?></td>
  </tr>
</table>

</table>
</body>
</html>
