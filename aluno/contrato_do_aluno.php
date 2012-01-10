<?php

include "../financeiro/conexao_bd.php";

$SQL = "SELECT * FROM corpo_contrato";
$query = mysql_query($SQL);  
while($x = mysql_fetch_array($query)) 
{  

$codigo_aluno  = $HTTP_GET_VARS['codigo_aluno']; 

$SQL2 = "SELECT * FROM tb_alunos WHERE codigo_aluno = '$codigo_aluno'";
$query2 = mysql_query($SQL2);  
while($x2 = mysql_fetch_array($query2)) {  
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Contrato</title>
<style type="text/css">
<!--
body {
	margin-top: 0px;
	background-color: #FFFFFF;
}
.style2 {
	font-size: 14px;
	font-family: Arial, Helvetica, sans-serif;
	text-align: justify;
}
.style3 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
}
.style5 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-weight: normal;
	color: #000000;
}
.style7 {
	font-size: 18px;
	font-weight: bold;
	color: #000000;
}
#Layer1 {
	position:absolute;
	left:26px;
	top:51px;
	width:532px;
	height:78px;
	z-index:1;
}
#Layer2 {
	position:absolute;
	left:789px;
	top:425px;
	width:90px;
	height:3px;
	z-index:2;
	background-color: #333333;
}
#Layer3 {
	position:absolute;
	left:743px;
	top:-5px;
	width:139px;
	height:137px;
	z-index:2;
}
.style9 {font-family: Arial, Helvetica, sans-serif; font-size: 13px; font-weight: bold; }
-->
</style>
</head>

<body>
<table width="717" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2" valign="top"><table width="715" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="77%" height="129" align="center" valign="top"><img src="imagens/topo_do_contrato.png" width="612" height="134" /></td>
        <td align="right" valign="top"><?php echo "<img src=fotos_do_aluno_3x4/$x2[url_foto] width='111' height='133' border='0' />" ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="2" valign="top"><table width="100%" border="1" cellpadding="2" cellspacing="0" bordercolor="#CCCCCC" bgcolor="#FFFFFF" class="style5">
      <tr>
        <td width="63%" align="left">Contratante: <strong><? echo "$x2[nome_completo]"; ?></strong></td>
        <td width="37%" align="left"><table width="318" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="58%">Nascimento: <strong><? echo "$x2[data_nasc]"; ?></strong></td>
              <td width="42%">Matr&iacute;cula.: <strong><? echo "$x2[id_aluno]"; ?></strong></td>
            </tr>
          </table></td>
      </tr>
      <tr>
        <td align="left">Endere&ccedil;o: <strong><? echo "$x2[lagradouro]"; ?>, <? echo "$x2[numero_casa]"; ?>, <? echo "$x2[bairro]"; ?></strong></td>
        <td align="left">Natural: <strong><? echo "$x2[naturalidade]"; ?></strong></td>
      </tr>
      <tr>
        <td align="left">Cidade:   &nbsp;<strong><? echo "$x2[cidade]"; ?> - <? echo "$x2[estado_uf]"; ?></strong> / Fone:<strong> (<? echo "$x2[ddd]"; ?>) <? echo "$x2[telefones]"; ?></strong></td>
        <td align="left">CPF: <strong><? echo "$x2[cpf]"; ?></strong></td>
      </tr>
      <tr>
        <td align="left">Pagamento: <strong><? echo "$x2[situacao_aluno]"; ?></strong></td>
        <td align="left"><table width="318" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="61%">RG.: <strong><? echo "$x2[rg]"; ?></strong></td>
            <td width="39%">Exp.: <strong><? echo "$x2[expedicao]"; ?></strong></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td align="left">Obs.: <strong><? echo "$x2[descricao1]"; ?></strong></td>
        <td align="left">Curso: <strong><? echo "$x2[tipo_curso]"; ?></strong></td>
      </tr>
    </table></td>
  </tr>
  
  <tr>
    <td colspan="2" valign="top"><table width="82%" border="0" cellpadding="0" cellspacing="0" class="style2">
      <tr>
        <td height="39"><p class="style7"><img src="imagens/regulamentos_e_condicoes.jpg" width="717" height="27" /></p></td>
      </tr>
      <tr>
        <td>.<? echo "$x[corpo_contrato]"; ?>.</td>
      </tr>
      <tr>
        <td height="39" align="right" valign="bottom">N&uacute;cleo Bandeirante , ______ de ________________ de _______ </td>
      </tr>
    </table>      </td>
  </tr>
  <tr>
    <td width="376" height="19"><table width="94%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="36" valign="bottom">____________________________________________</td>
      </tr>
      <tr>
        <td align="center"><strong><? echo "$x2[nome_completo]"; ?></strong></td>
      </tr>
    </table>      </td>
    <td width="341" align="right"><table width="57%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="36" align="right" valign="bottom">_________________________________________</td>
      </tr>
      <tr>
        <td align="center">Contratado</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td width="376" height="73" align="center"><table width="57%" height="67" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="39" align="right" valign="bottom">_________________________________________</td>
      </tr>
      <tr>
        <td align="center">Testemunha</td>
      </tr>
    </table>
    <br />
    <table width="57%" height="67" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="39" align="right" valign="bottom">_________________________________________</td>
      </tr>
      <tr>
        <td align="center">Testemunha</td>
      </tr>
    </table></td>
    <td align="right"><table width="57%" height="67" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="39" align="right" valign="bottom">_________________________________________</td>
      </tr>
      <tr>
        <td align="center">Testemunha</td>
      </tr>
    </table>
    <br />
    <table width="57%" height="67" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="39" align="right" valign="bottom">_________________________________________</td>
      </tr>
      <tr>
        <td align="center">Testemunha</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="31" colspan="2" align="center" valign="bottom">&nbsp;</td>
  </tr>
  <tr>
    <td height="27" colspan="2" valign="top"><a href="javascript:history.go(-1)"><img src="imagens/roda_pe_contrato.jpg" alt="Clique aqui para voltar a p&aacute;gina anterior" width="717" height="35" border="0" /></a></td>
  </tr>
</table>

<div id="Layer1">
  <table width="102%" height="72" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td align="center"><span class="style9"><? echo "$x[sub_titulo_01]"; ?></span></td>
    </tr>
    <tr>
      <td align="center"><span class="style3"><? echo "$x2[inicio_curso]"; ?></span></td>
    </tr>
    <tr>
      <td align="center"><span class="style9"><? echo "$x[sub_titulo_02]"; ?></span></td>
    </tr>
  </table>
</div>
<p><?php } ?>
</p>
<p>
  <?php } ?></p>
</body>
</html>
