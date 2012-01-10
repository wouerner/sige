<?php
#Evitando cache de arquivo
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Last Modified: '. gmdate('D, d M Y H:i:s') .' GMT');
header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
header('Pragma: no-cache');
header('Expires: 0');

include '../includes/validacao_pagina_adm.php'; 
include '../includes/conexao_bd.php';
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
		
	<div class = "row" >

		<div class = "span3">
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
		
			?> 

		</div>
		<div class = "span13">
</td>
        <td width="839" align="center" valign="top"><!-- InstanceBeginEditable name="corpo_programacao_sistema" -->


<table width="800" border="0" align="center">
  
  <tr>
    <td width="528" height="160" align="center"><table width="739" border="0" cellspacing="3" cellpadding="4">
      <tr>
        <td align="center"><span class="titulo_principal">Resultado da Busca de Alunos </span></td>
      </tr>
      <tr>
        <td><table width="100%" border="0" cellpadding="0" cellspacing="0" background="imagens/px_pontilhado.gif">
            <tr>
              <td><p><img src="imagens/px_pontilhado.gif" width="2" height="1"></p></td>
            </tr>
        </table></td>
      </tr>
      </table>      <span class="fonte02">

<?php

$HTTP_POST_VARS['palavra'] = isset($HTTP_POST_VARS['palavra']) ? $HTTP_POST_VARS['palavra'] : '' ;

$tipo_aluno = $HTTP_POST_VARS["tipo_aluno"];
if(!empty($HTTP_POST_VARS['palavra'])) {


	//pesquisa ou por cpf ou pelo nome da pessoa,  tipo_pesso que define qual das pesquisas executar.
	if ($tipo_aluno == 'cpf'){

        $qr = "SELECT * FROM tb_alunos WHERE cpf = '$palavra' ORDER BY id_aluno";
	
        // Executa a query no Banco de Dados
        $sql = mysql_query($qr);
        
        // Conta o total ded resultados encontrados
        $total = mysql_num_rows($sql);
	
	
	}else{
	
	$palavra = str_replace(" ", "%", $HTTP_POST_VARS['palavra']);

        /* Altera os espaços adicionando no lugar o simbolo % */
        
        $qr = "SELECT * FROM tb_alunos WHERE nome_completo LIKE '%".$palavra."%' AND registro_ativo = '$tipo_aluno' ORDER BY id_aluno ";
        
        // Executa a query no Banco de Dados
        $sql = mysql_query($qr);
        
        // Conta o total ded resultados encontrados
        $total = mysql_num_rows($sql);
	}

        echo "<span class='fonte02'>Sua busca retornou <strong>'$total'</strong>  registro(s).</span>";

        // Gera o Loop com os resultados
        while($x = mysql_fetch_array($sql)) {
		
?>
    </span>
      
      <table >
        <tr>
          <td width="104" align="right" bgcolor="#F5FFF4" class="fonte02">Nome do Cliente: </td>
	  <td  bgcolor="#F5FFF4" colspan = "5" class="sub_titulos"><strong class="link_005">
	<a href="javascript:submenu2('<? echo "$x[id_aluno]" ?>')" class="link_005"><? echo "$x[nome_completo]"; ?></a></strong></td>
          <td width="139" bgcolor="#F5FFF4" class="sub_titulos"><span class="fonte02">Matricula:</span> <strong class="fonte05"><a href="javascript:submenu2('<? echo "$x[id_aluno]" ?>')" class="link_005"><? echo "$x[id_aluno]"; ?></a></strong></td>
          <td width="75" rowspan="5" align="center" valign="middle" bgcolor="#F5FFEC" class="sub_titulos"><a href="foto_form_confirmar_antes_upload_01.php?codigo_aluno=<? echo "$x[codigo_aluno]" ?>"><?php echo "<img src=../fotos_do_aluno_3x4/$x[url_foto] width='72' height='80' border='1' />" ?></a></td>
        </tr>
        <tr>
          <td width="104" align="right" bgcolor="#F5FFEC" class="fonte02">Endere&ccedil;o:</td>
          <td colspan="6" bgcolor="#F5FFEC" class="sub_titulos"><strong class="fonte01"><? echo "$x[lagradouro]"; ?>, <? echo "$x[numero_casa]"; ?>, <? echo "$x[bairro]"; ?>, <? echo "$x[cidade]"; ?>, <? echo "$x[estado_uf]"; ?>. <span class="fonte02">Cep:</span> <? echo "$x[cep]"; ?></strong></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#F5FFF4" class="fonte02">Fones:</td>
          <td colspan="6" bgcolor="#F5FFF4"><span class="fonte01">(<? echo "$x[ddd]"; ?>) <? echo "$x[telefones]"; ?> / <? echo "$x[celular]"; ?></span></td>
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
          <td colspan="8" align="right" valign="top" bgcolor="#F5FFF4" class="fonte02">
		  
            <div id="info_<? echo "$x[id_aluno]" ?>" class="areaDesc2" style="display: none;">
            <table width="735" border="0" align="center">

            <tr>
              <td width="103" align="right" bgcolor="#F5FFEC" class="fonte02">RG:</td>
              <td width="622" bgcolor="#F5FFEC"><span class="fonte01"><? echo "$x[rg]"; ?></span></td>
            </tr>
            <tr>
              <td align="right" bgcolor="#F5FFF4" class="fonte02">Expedi&ccedil;&atilde;o:</td>
              <td bgcolor="#F5FFF4"><span class="fonte01"><? echo "$x[expedicao]"; ?></span></td>
            </tr>
            <tr>
              <td align="right" bgcolor="#F5FFEC" class="fonte02">&nbsp;</td>
              <td bgcolor="#F5FFEC">&nbsp;</td>
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
            <tr>
              <td align="right" bgcolor="#F5FFF4" class="fonte02">Observa&ccedil;&atilde;o</td>
              <td bgcolor="#F5FFF4"><span class="fonte01"><? echo "$x[descricao1]"; ?></span></td>
            </tr>
            <tr>
              <td align="right" bgcolor="#F5FFF4" class="fonte02">Data de cadastro: </td>
              <td bgcolor="#F5FFF4"><span class="fonte01">
                <?
	  	  
	  $data_quebrada = explode('-', $x[data_cadastro]);
	  $data_cadastro2 = $data_quebrada[2].'/'.$data_quebrada[1].'/'.$data_quebrada[0];
	  echo "$data_cadastro2";
	  
	  ?>
	      </span>
		</td>
            </tr>
          </table>
	    </div>

		</td>
          </tr>

        <tr>

          <td colspan="3" align="right" bgcolor="#F5FFEC">
		  
		  
		  <?php if ($x['registro_ativo']== 's')
		  {
		  include "clientes_busca_alunos_menu_opcoes_desativar.php";
		  }
		  else
		  {
		  include "clientes_busca_alunos_menu_opcoes_ativar.php";
		  }
		  
		?>
	  </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td colspan="3" align="right">&nbsp;</td>
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
    <td colspan="2"><?
mysql_close($link);
?></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><a href="pg_principal.php" class="style5"></a>    </td>
  </tr>
</table>
</table>

</body>
</html>
