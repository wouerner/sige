<?php
include "trabalhe_conosco_validacao_pagina.php";
include "financeiro/conexao_bd.php";



$inicio = $_POST['inicio'];
$fim = $_POST['fim'];

$data1 = implode("-", array_reverse(explode("/", $inicio)));
$data2 = implode("-", array_reverse(explode("/", $fim)));


$resultado= mysql_query ("SELECT * FROM tb_socios WHERE email = '$email_parceiro'");
$linhas = mysql_num_rows ($resultado);

for($i=0; $i<$linhas; $i++)
{
$id_parceiro = mysql_result ($resultado, $i, "id_parceiro");
$nome_completo = mysql_result ($resultado, $i, "nome_completo");
}

$SQL2 = "SELECT * FROM tb_socios_alunos WHERE data_cadastro BETWEEN '$data1' AND '$data2' AND id_parceiro = '$id_parceiro'  AND registro_ativo = 's' ORDER BY nome_completo";  
$query2 = mysql_query($SQL2);  
?>





<? 
$data_hoje = date("d/m/Y");
?>











<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Relat&oacute;rios Curso Mais Pr&aacute;tico</title>

<script type="text/javascript">


function formatar_mascara(src, mascara) {
	var campo = src.value.length;
	var saida = mascara.substring(0,1);
	var texto = mascara.substring(campo);
	var someros = mascara.substring(/\D/g,"");
	
	if(texto.substring(0,1) != saida) {
		src.value += texto.substring(0,1);
	}
}
</script>


<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #FFFFFF;
}
-->
</style>

<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-weight: bold;
	color: #000099;
}
.style4 {color: #000099}
.style5 {color: #FFFFFF}
.style3 {
	color: #FFFFFF;
	font-size: 9px;
	font-weight: bold;
}
-->
</style>


<link href="financeiro/css/estilo_sistema.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="871" height="128" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="28" align="center" ><span class="style1"><? echo $nome_completo ?> <br />
  Aqui voc&ecirc; pode fazer Relat&oacute;rios por per&iacute;odos indicado nos campos abaixo.</span></td>
  </tr>
  <tr>
    <td height="72" align="center"><table width="830" height="80" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center"><table width="297" height="67" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="225" height="20" align="center" bgcolor="#00FF00"><strong>POR DATA</strong> </td>
          </tr>
          <tr>
            <td align="center" bgcolor="#EAFFEA"><form name="formulario2" id="formulario2" onsubmit="return ValidaFormulario2()"  method="post">
                <table width="265" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="108" align="center">In&iacute;cio<br />
                        <input name="inicio" type="text" id="inicio" size="13" maxlength="10" onkeypress="formatar_mascara(this, '##/##/####')" onsubmit="return ValidaFormulario2();"/></td>
                    <td width="85" align="center">Fim<br />
                        <input name="fim" type="text" id="fim" size="13" maxlength="10" value="<?php echo $data_hoje ?>" onkeypress="formatar_mascara(this, '##/##/####')" onsubmit="return ValidaFormulario2();"/></td>
                    <td width="72" align="center" valign="bottom"><input name="submit" type="submit" value="ok" /></td>
                  </tr>
                </table>
            </form></td>
          </tr>
        </table></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"></td>
  </tr>
  <tr>
    <td><table width="953" height="19" border="0" cellpadding="0" cellspacing="2" bgcolor="#006600" onmouseover="this.className='fundo';" onmouseout="this.className='NULL';">
      <tr>
        <td align="center" class="menu_01"><span class="style3">NOME DO ALUNO </span></td>
        <td width="84" align="center" class="menu_01"><span class="style3"><strong>INCLUSO</strong></span></td>
        <td width="84" align="center" class="menu_01"><span class="style3"><strong>DOCUMENTOS</strong></span></td>
        <td width="98" align="center" class="menu_01"><span class="style3"><strong>PAGAMENTO</strong></span></td>
        <td width="84" align="center" class="menu_01"><span class="style3"><strong>HITORICO</strong></span></td>
        <td width="84" align="center" class="menu_01"><span class="style3"><strong>PUBLICA&Ccedil;&Atilde;O</strong></span></td>
        <td width="84" align="center" class="menu_01"><span class="style3"><strong>CERTIFICADO</strong></span></td>
        <td width="90" align="center" class="menu_01"><span class="style3"><strong>EMISS&Atilde;O</strong></span></td>
      </tr>
    </table>
      <?php

while($x2 = mysql_fetch_array($query2))  
{	
?>
      <table width="948" height="24" border="0" cellpadding="2" cellspacing="2">
        <tr>
          <td align="center"><table width="944" height="19" border="0" cellpadding="0" cellspacing="2" bgcolor="#F5FFF4" onmouseover="this.className='fundo';" onmouseout="this.className='NULL';" >
              <tr>
                <td class="fonte03"><strong><a href="trabalhe_conosco_detalhes_aluno.php?cod_aluno=<? echo "$x2[cod_aluno]"; ?>"><? echo "$x2[nome_completo]" ?></a></strong></td>
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
    <?php } ?></td>
  </tr>
</table>
</body>
</html>
