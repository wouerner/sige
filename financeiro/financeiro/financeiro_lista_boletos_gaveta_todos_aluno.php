<?php
include "../includes/validacao_pagina_adm.php";  	
include "../includes/../includes/../includes/../includes/../includes/conexao_bd.php";
?>

<html>
<head>
<title>Gerenciamento</title>

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
<style type="text/css">
<!--
.style2 {
	font-size: 9px;
	font-weight: bold;
}
-->
</style>

<?php include '../includes/css.inc.php' ; ?>
</head>

<body>
<div class = "container" >
<?php include '../includes/cabecalho.inc.php' ; ?>


     
	<div class = "row">	
	<div class = "span3">	
		<?php
		
			
						if ($nivel == 'adm')
				{
				
				
				
				include ""../includes/menu_lateral.php"";
				
				
				}
				else
				{
				
				
				//direciona para a página inicial dos usuários cadastrados
				
				include "menu_lateral_secretaria.php";
				
				}
		
		
		
		
?> 
	</div>

<div class = "span13">

        <table width="739" border="0" cellspacing="3" cellpadding="4">
          <tr>
            <td align="center"><span class="titulo_principal">Todos Pagamentos na  Gaveta</span></td>
          </tr>
  	</table>

<?php
//$id_aluno  = $_GET['id_aluno']; 

$SQL = "SELECT * FROM tb_historico_financeiro WHERE status = 'Gaveta' ORDER BY id_cob DESC";  
$query = mysql_query($SQL);  

while($x = mysql_fetch_array($query))  
{

$resultado= mysql_query ("SELECT * FROM tb_historico_financeiro WHERE status = 'Gaveta' ORDER BY id_cob DESC");
$linhas = mysql_num_rows ($resultado);

?>

        <table>
          <tr>
            <td width="104" align="right" bgcolor="#F5FFF4" class="fonte02">Forma de Pagt&ordm;: </td>
            <td bgcolor="#F5FFF4" class="sub_titulos"><strong><? echo "$x[forma_pagto]"; ?></strong></td>
            <td align="right" bgcolor="#F5FFF4" class="sub_titulos"><span class="fonte02">Nosso n&deg;:</span></td>
            <td bgcolor="#F5FFF4" class="sub_titulos">
			
<?
$resultado= mysql_query ("SELECT * FROM tb_boletos_itau WHERE id_boleto = '$x[id_boleto]'");
$linhas = mysql_num_rows ($resultado);

for($i=0; $i<$linhas; $i++)
{
$nosso_mumero = mysql_result ($resultado, $i, "nosso_mumero");
}

echo "$nosso_mumero";
?>
			
			
			&nbsp;</td>
            <td align="center" bgcolor="#F5FFF4" class="sub_titulos"><span class="links"><strong><a href="financeiro_confirmar_antes_fechar_acresc_proximo.php?id_cob=<? echo "$x[id_cob]" ?>&id_boleto=<? echo "$x[id_boleto]" ?>">Fechar Boleto </a></strong></span></td>
              </tr>
              <tr>
                <td width="104" align="right" bgcolor="#F5FFEC" class="fonte02"> Vencimento:</td>
            <td width="116" bgcolor="#F5FFEC" class="sub_titulos"><strong class="fonte02"><? echo "$x[dia_venc]"; ?></strong></td>
            <td width="144" align="right" bgcolor="#F5FFEC" class="fonte02">Valor:</td>
            <td width="131" bgcolor="#F5FFEC" class="sub_titulos"><strong class="fonte01"><? echo "$x[valor]"; ?></strong></td>
            <td width="128" align="center" bgcolor="#F5FFEC" class="links"><a href="financeiro_Excuir_pagamento_boleto.php?id_boleto=<? echo "$x[id_boleto]" ?>&id_cob=<? echo "$x[id_cob]" ?>&confirm=nao" class="style2">Excluir </a></td>
          </tr>
              <tr>
                <td align="right" bgcolor="#F5FFF4" class="fonte02">Aluno:</td>
            <td colspan="4" bgcolor="#F5FFF4"><span class="titulo_principal"><span class="sub_titulos">

              <?
$resultado= mysql_query ("SELECT * FROM tb_alunos WHERE id_aluno = '$x[id_aluno]'");
$linhas = mysql_num_rows ($resultado);

for($i=0; $i<$linhas; $i++)
{
$nome_completo = mysql_result ($resultado, $i, "nome_completo");
}

echo "$nome_completo";
?>            </td>
          </tr>
            </table></td>
      </tr>
  </table>
        <?php } ?>
        
 <?
mysql_close($link);
?>    
      </tr>
    </table>
</table>

</body>
</html>
