<?php
#Evitando cache de arquivo
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Last Modified: '. gmdate('D, d M Y H:i:s') .' GMT');
header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
header('Pragma: no-cache');
header('Expires: 0');
include "../includes/../includes/validacao_pagina_adm.php";  	
include "../includes/../includes/conexao_bd.php";

// numeros de registro por pagina
$registros = isset($_GET["registros"]) ? $_GET['registros']: 10 ;

if(empty($_GET["registros"]))
{
$registros   = '10';
}

else
{
$registros   = $_GET["registros"];
}

//comandos para a paginação
$numreg = $registros; // Quantos registros por página vai ser mostrado
if (!isset($pg)) {
$pg = 0;
}

$inicial = $pg * $numreg;

$SQL = "SELECT * FROM tb_alunos WHERE registro_ativo = 's' ORDER BY nome_completo LIMIT $inicial, $numreg";  
$sql_conta = mysql_query("SELECT * FROM tb_alunos WHERE registro_ativo = 's' ORDER BY nome_completo");
$quantreg = mysql_num_rows($sql_conta); // Quantidade de registros pra paginação   


$query = mysql_query($SQL);  
// Conta o total de resultados encontrados
$total = "$quantreg"; // esta linha serve apenas para retornar o número de resultados da query.

?>

<html>
<head>
<title>Gerenciamento</title>
<script type="text/javascript" src="../js/jquery-1.js"></script>
<script type="text/ecmascript" src="../js/scripts.js"></script>

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


<script type="text/javascript" language="JavaScript1.2" src="../Resource/js/stmenu.js"></script>
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

<?php include '../includes/css.inc.php' ; ?>


<style type="text/css">
<!--
.style1 {color: #3C4796}
-->
</style>
<!-- InstanceBeginEditable name="head" -->
<script type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
</head>
<body>

<div class = "container">

<?php include '../includes/cabecalho.inc.php' ; ?>
<div class = "row">
	<div class = "span3" >		
		<?php
						if ($nivel == 'adm')
				{
				
				include "../includes/../includes/menu_lateral.php";
				
				}
				else
				{
				
				//direciona para a página inicial dos usuários cadastrados
				
				include "menu_lateral_secretaria.php";
				
				}
				?> 
</div>

<div class = "span13">

<table width="733" border="0" align="center">
    <tr>
      <td align="center" class="sub_titulos">

        <table width="739" border="0" cellspacing="3" cellpadding="4">
          <tr>
            <td align="center"><span class="titulo_principal">Listagem de  Alunos Ativos</span></td>
          </tr>
	</table>

	</td>
          </tr>

        </table>
      
<span class='fonte02'>Toda listagem possui <strong><?php echo $total ; ?> </strong> Alunos Ativos.</span>
</td>
    </tr>
  </table>

<table width="598" height="43" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="right" valign="bottom">  <form method="get" name="form1" class="fonte02" id="form1">
      Exibir 
      <select name="menu1" class="css_form_01" onChange="MM_jumpMenu('parent',this,0)">
        <option value="<?php echo $_SERVER["PHP_SELF"] ; ?>?registros=10" selected="selected"><? echo "$registros" ?></option>
        <option value="<?php echo $_SERVER["PHP_SELF"]; ?>?registros=10">10</option>
        <option value="<?php echo $_SERVER["PHP_SELF"]; ?>?registros=25">25</option>
        <option value="<?php echo $_SERVER["PHP_SELF"]; ?>?registros=50">50</option>
        <option value="<?php echo $_SERVER["PHP_SELF"]; ?>?registros=100">100</option>
        </select>
      Alunos por P&aacute;gina 
    </form></td>
    </tr>

</table>
<?  while($x = mysql_fetch_array($query)) : ?>
  </p>

  </blockquote>

  <table width="735" border="0" align="center" class = "bordered-table" >
    <tr>
      <td  width="119" align="right" bgcolor="#F5FFF4" class="fonte02">Nome do Cliente: </td>
      <td colspan = "5" width="379" bgcolor="#F5FFF4" class="sub_titulos"><strong class="fonte05"><a href="javascript:submenu2('<? echo "$x[id_aluno]" ?>')" class="link_005"><? echo "$x[nome_completo]"; ?></a></strong></td>
      <td width="143" bgcolor="#F5FFF4" class="sub_titulos"><span class="fonte02">Matricula:</span> <strong class="fonte05"><a href="javascript:submenu2('<? echo "$x[id_aluno]" ?>')" class="link_005"><? echo "$x[id_aluno]"; ?></a></strong></td>
      <td width="76" rowspan="5" align="center" valign="middle" bgcolor="#F5FFEC" class="sub_titulos"><a href="foto_form_confirmar_antes_upload_01.php?codigo_aluno=<? echo "$x[codigo_aluno]" ?>"><?php echo "<img src=../fotos_do_aluno_3x4/$x[url_foto] width='72' height='80' border='1' />" ?></a></td>

    </tr>
    <tr>
          <td colspan = "7" align="right" bgcolor="#F5FFF4" class="fonte02"><strong>Observa&ccedil;&atilde;o</strong>  <? echo "$x[descricao1]"; ?></td>
    </tr>

    <tr>
      <td align="right" bgcolor="#F5FFF4" class="fonte02">Fones:</td>
      <td colspan="6" bgcolor="#F5FFF4"><span class="fonte01">(<? echo "$x[ddd]"; ?>)  <? echo "$x[telefones]"; ?> / <? echo "$x[celular]"; ?></span></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFEC" class="fonte02">E-mail:</td>
      <td colspan="6" bgcolor="#F5FFEC"><span class="fonte01"><? echo "$x[email]"; ?></span></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFF4" class="fonte02">CPF:</td>
      <td colspan="6" bgcolor="#F5FFF4"><span class="fonte01"><? echo "$x[cpf]"; ?></span></td>
    </tr>
    <tr>
      <td colspan="8" align="left" valign="top" bgcolor="#F5FFEC">
	  
<div id="info_<? echo "$x[id_aluno]" ?>" class="areaDesc2" style="display: none;">
	  
        <table width="677" border="0" class = "bordered-table" >
        <tr>
          <td width="119" align="right" bgcolor="#F5FFEC" class="fonte02">RG:</td>
          <td width="548" bgcolor="#F5FFEC"><span class="fonte01"><? echo "$x[rg]"; ?></span></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#F5FFEC" class="fonte02">Data de Nascimento:</td>
          <td bgcolor="#F5FFEC"><span class="fonte01"><? echo "$x[data_nasc]"; ?></span></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#F5FFF4" class="fonte02">Expedi&ccedil;&atilde;o:</td>
          <td bgcolor="#F5FFF4"><span class="fonte01"><? echo "$x[expedicao]"; ?></span></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#F5FFF4" class="fonte02">Nome do Pai: </td>
          <td bgcolor="#F5FFF4"><span class="fonte01"><? echo "$x[nome_do_pai]"; ?></span></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#F5FFF4" class="fonte02">Nome da M&atilde;e </td>
          <td bgcolor="#F5FFF4"><span class="fonte01"><? echo "$x[nome_do_mae]"; ?></span></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#F5FFF4" class="fonte02">Data de Cadastro:</td>
          <td bgcolor="#F5FFF4"><span class="fonte01">
            <?
	  	  
	  $data_quebrada = explode('-', $x[data_cadastro]);
	  $data_cadastro2 = $data_quebrada[2].'/'.$data_quebrada[1].'/'.$data_quebrada[0];
	  echo "$data_cadastro2";
	  
	  ?>
          </span></td>
        </tr>

    <tr>
      <td width="119" align="right" bgcolor="#F5FFEC" class="fonte02">Endere&ccedil;o:</td>
      <td colspan="2" bgcolor="#F5FFEC" class="sub_titulos"><strong class="fonte01"><? echo "$x[lagradouro]"; ?>, <? echo "$x[numero_casa]"; ?>, <? echo "$x[bairro]"; ?>, <? echo "$x[cidade]"; ?>, <? echo "$x[estado_uf]"; ?>. <span class="fonte02">Cep:</span> <? echo "$x[cep]"; ?></strong></td>
    </tr>


        <tr>
          <td align="right" bgcolor="#F5FFF4" class="fonte02">In&iacute;cio do Curso:</td>
          <td bgcolor="#F5FFF4"><span class="fonte01"><? echo "$x[inicio_curso]"; ?></span></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#F5FFEC" class="fonte02">Tipo do Curso: </td>
          <td bgcolor="#F5FFEC"><span class="fonte01"><? echo "$x[tipo_curso]"; ?></span></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#F5FFEC" class="fonte02">Pagamento:</td>
          <td bgcolor="#F5FFEC"><span class="fonte01"><? echo "$x[situacao_aluno]"; ?></span></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#F5FFF4" class="fonte02">Polo:</td>
          <td bgcolor="#F5FFF4"><span class="fonte01"><? echo "$x[polo]"; ?></span></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#F5FFEC" class="fonte02">Senha login:</td>
          <td bgcolor="#F5FFEC"><span class="fonte01"><? echo "$x[senha]"; ?></span></td>
        </tr>

      </table>
		</div>	  </td>

      </tr>

	<?php include "clientes_busca_alunos_menu_opcoes_desativar.php"; ?>

    </tr>
  </table>
  <?php endwhile ;  ?>
  
  <?
mysql_close($link);
?>








<style type="text/css">
<!--
.pgoff {font-family: Verdana, Arial, Helvetica; font-size: 11px; color: #FF0000; text-decoration: none}
a.pg {font-family: Verdana, Arial, Helvetica; font-size: 11px; color: #003366; text-decoration: none}
a:hover.pg {font-family: Verdana, Arial, Helvetica; font-size: 11px; color: #0066cc; text-decoration:underline}
-->
</style>

<?php

	function paginar($quantreg,$numreg , $registros , $pg){
	
       $quant_pg = ceil($quantreg/$numreg);
        $quant_pg++;
        
        // Verifica se esta na primeira página, se nao estiver ele libera o link para anterior
        if ( $pg > 0) { 
                echo "<a href=".$_SERVER["PHP_SELF"]."?pg=".($pg-1)."&registros=".($registros)." class=pg><b>&laquo; anterior</b></a>";
        } else { 
                echo "<font color=#CCCCCC>&laquo; anterior</font>";
        }
        
        // Faz aparecer os numeros das página entre o ANTERIOR e PROXIMO
        for($i_pg=1;$i_pg<$quant_pg;$i_pg++) { 
                // Verifica se a página que o navegante esta e retira o link do número para identificar visualmente
                if ($pg == ($i_pg-1)) { 
                        echo " <span class=pgoff>[$i_pg]</span> ";
                } else {
                        $i_pg2 = $i_pg-1;
                        echo " <a href=".$_SERVER["PHP_SELF"]."?pg=$i_pg2&registros=$registros class=pg><b>$i_pg</b></a> ";
                }
        }
        
        // Verifica se esta na ultima página, se nao estiver ele libera o link para próxima
        if (($pg+2) < $quant_pg) { 
                echo "<a href=".$_SERVER["PHP_SELF"]."?pg=".($pg+1)."&registros=".($registros)." class=pg><b>próximo &raquo;</b></a>";
        } else { 
                echo "<font color=#CCCCCC>próximo &raquo;</font>";
	}
	
	}

 paginar($quantreg,$numreg , $registros , $pg)
?>






</td>
      </tr>
      <tr>
        </tr>
    </table></td>
    <td valign="top"><table width="100%" height="151" border="0" cellpadding="0" cellspacing="0">
      <tr>
      </tr>
    </table></td>
  </tr>
</table>
</div>
</div>
</body>
</html>
