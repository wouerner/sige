<?php
#Evitando cache de arquivo
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Last Modified: '. gmdate('D, d M Y H:i:s') .' GMT');
header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
header('Pragma: no-cache');
header('Expires: 0');
include "../includes/validacao_pagina_adm.php";
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
<!-- InstanceBeginEditable name="head" -->
<style type="text/css">
<!--
.style2 {	font-size: 9px;
	font-weight: bold;
}
-->
</style>
<!-- InstanceEndEditable -->
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
				
				
				
				include "../includes/menu_lateral.php";
				
				
				}
				else
				{
				
				
				//direciona para a página inicial dos usuários cadastrados
				
				include "menu_lateral_secretaria.php";
				
				}
		
		
		
		
		?> </td>
        <td width="839" align="center" valign="top"><!-- InstanceBeginEditable name="corpo_programacao_sistema" -->

<?php
$id_aluno  = $HTTP_GET_VARS['id_aluno']; 

include "../includes/validacao_pagina_adm.php";  	
include('../includes/../includes/../includes/../includes/conexao_bd.php');


$resultado= mysql_query ("SELECT * FROM tb_alunos WHERE id_aluno = '$id_aluno'");
$linhas = mysql_num_rows ($resultado);

?>

<?php for($i=0; $i<$linhas; $i++)
{
$nome_completo = mysql_result ($resultado, $i, "nome_completo");
}
?>

        <table width="739" border="0" cellspacing="3" cellpadding="4">
          <tr>
            <td align="center" class="titulo_principal">Todos os Pagamentos de: <span class="fonte05"><?php echo "$nome_completo" ?></span></td>
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


$SQL = "SELECT * FROM tb_historico_financeiro WHERE id_aluno = '$id_aluno' ORDER BY id_cob DESC";  
$query = mysql_query($SQL);  
while($x = mysql_fetch_array($query))  
{
?>
        
      
        <table width="100" cellpadding="0" cellspacing="0" bordercolor="#F7F7F7">
          <tr>
            <td><table width="604" height="117" border="0">
              <tr>
                <td width="93" align="right" bgcolor="#F5FFF4" class="fonte02">Forma de Pagt&ordm;: </td>
            <td bgcolor="#F5FFF4" class="sub_titulos"><strong><? echo "$x[forma_pagto]"; ?></strong></td>
            <td width="115" align="right" bgcolor="#F5FFF4" class="sub_titulos"><span class="fonte02">Nosso n&deg;:</span></td>
            <td bgcolor="#F5FFF4" class="sub_titulos">
			
<?
$resultado= mysql_query ("SELECT * FROM tb_boletos_itau WHERE id_boleto = '$x[id_boleto]'");
$linhas = mysql_num_rows ($resultado);

for($i=0; $i<$linhas; $i++)
{
$nosso_mumero = mysql_result ($resultado, $i, "nosso_mumero");
$cod_boleto = mysql_result ($resultado, $i, "cod_boleto");
}

echo "$nosso_mumero";
?></td>
            <td width="146" rowspan="5" align="center" bgcolor="#F5FFF4" class="sub_titulos"><table width="125" height="135" border="1" cellpadding="2" cellspacing="2" bordercolor="#E2FFDF">
              <tr>
                <td align="center"><?php
			if($x[status]==Aberto or Gaveta)
			{
			
			echo "<span class='links'><strong><a href='financeiro_confirmar_antes_fechar_acresc_proximo.php?id_cob=$x[id_cob]&id_boleto=$x[id_boleto]'>Fechar <br>
              Pagamento </a>";
			}
			else
			{
			
			}
			
			?></td>
              </tr>
              <tr>
                <td align="center"><span class="links">
                  
				  
				  
				  
<? 
if($x[status]==Aberto or Gaveta)
{
				  
		if($x[forma_pagto]==Boleto)
		{
		echo "<a href='boleto_itau/boleto_itau.php?cod_boleto=$cod_boleto&id_aluno=$id_aluno&id_cob=$x[id_cob]' class='links' target='_blank'>Imprimir/Enviar Cobrança</a>";
		}
		else
		{
		echo "<a href='financeiro_Enviar_lembrete_pagamento__outros_pagamentos_Confirmar_antes.php?id_aluno=$id_aluno&id_cob=$x[id_cob]&confirm=nao' class='links' target='_blank'>Enviar Cobrança</a>";
		}

}		
else
{
}		
?>
                </span></td>
              </tr>
              <tr>
                <td align="center"><span class="links">
				
				
<?

if($x[status]==Aberto or Gaveta)
{
 
		if($x[forma_pagto]==Boleto)
		{
		echo "<a href='financeiro_editar_dados_boleto_pagamento.php?cod_boleto=$cod_boleto&id_aluno=$id_aluno&id_cob=$x[id_cob]' class='links'>Editar Boleto </a>";
		}
		else
		{
		echo "<a href='financeiro_editar_dados_Pagamento_sem_boleto.php?id_aluno=$id_aluno&id_cob=$x[id_cob]' class='links'>Editar Pagamento </a>";
		}


}		
else
{
}		
?>
                </span></td>
              </tr>
              <tr>
                <td align="center"><span class="links">
                  <?php


				if($x[forma_pagto]==Boleto)
				
				{
									if($x[status]==Aberto or Gaveta)
									{
									
									echo "<a href='financeiro_Excuir_pagamento_boleto.php?id_boleto=$x[id_boleto]&id_cob=$x[id_cob]&confirm=nao' class='style2'>Excluir </a>";
									}
									else
									{
					
									}
				}
				
				else
				{
				
									if($x[status]==Aberto)
									{
									
									echo "<a href='financeiro_Excuir_pagamento_Somente_tb_historico.php?id_cob=$x[id_cob]&confirm=nao' class='style2'>Excluir </a>";
									}
									else
									{
					
									}
				
				
				}
									
				?>
                </span></td>
              </tr>
              
            </table>              </td>
              </tr>
              <tr>
                <td width="93" align="right" bgcolor="#F5FFEC" class="fonte02"> Vencimento:</td>
            <td width="104" bgcolor="#F5FFEC" class="sub_titulos"><strong class="fonte02"><? echo "$x[dia_venc]"; ?></strong></td>
            <td align="right" bgcolor="#F5FFEC" class="fonte02">Valor:</td>
            <td width="124" bgcolor="#F5FFEC" class="sub_titulos"><strong class="fonte01"><? echo "$x[valor]"; ?></strong></td>
            </tr>
              <tr>
                <td align="right" bgcolor="#F5FFF4" class="fonte02">Observa&ccedil;&atilde;o:</td>
            <td colspan="3" bgcolor="#F5FFF4"><span class="fonte01"><? echo "$x[observacao]"; ?></span></td>
            </tr>
              <tr>
                <td align="right" bgcolor="#F5FFF4" class="fonte02">
				
		<?		
		if($x[categoria]==Parcelas)
		{
		echo "Parcela";
		}
		else
		{
		echo "";
		}
		?>				</td>
                <td bgcolor="#F5FFF4"><span class="sub_titulos"><strong>
				
				
				
				
		<?		
		if($x[categoria]==Parcelas)
		{
		echo "$x[parcela_numero]/$x[numero_parcelas]";
		}
		else
		{
		echo "$x[categoria]";
		}
		?>	
		
		</strong></span></td>
                <td align="right" bgcolor="#F5FFF4">&nbsp;</td>
                <td bgcolor="#F5FFF4">&nbsp;</td>
                </tr>
              <tr>
                <td align="right" bgcolor="#F5FFF4" class="fonte02">Status:</td>
                <td bgcolor="#F5FFF4"><?php 
				if($x[status]==Aberto)
				{
				echo "<span class='links'><strong>$x[status]</strong></span>";
				}
				else
				{
				echo "<span class='links2'><strong>$x[status]</strong></span>";
				}
				?></td>
                <td align="right" bgcolor="#F5FFF4">&nbsp;</td>
                <td bgcolor="#F5FFF4">&nbsp;</td>
              </tr>
            </table></td>
      </tr>
          </table>
        <table width="619" border="0" cellspacing="3" cellpadding="4">
          
          <tr>
            <td><table width="100%" border="0" cellpadding="0" cellspacing="0" background="imagens/px_pontilhado.gif">
                <tr>
                  <td><p><img src="imagens/px_pontilhado.gif" width="2" height="1" /></p></td>
                </tr>
            </table></td>
          </tr>
        </table>
        <?php } ?>
		
		
		
		
		<?
mysql_close($link);
?>
        
      
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p><a href="pagina_principal.php" target="_self">
          <?php
				
						if ($nivel == 'adm')
				{
				
				
				
				include "botao_voltar.php";
				
				
				}
				else
				{
				
				
				//direciona para a p&aacute;gina inicial dos usu&aacute;rios cadastrados
				
				include "botao_voltar_secretaria.php";
				
				}
		
		
		
		
		?>
        </a></p>
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