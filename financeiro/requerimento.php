<?php

include "conexao_bd.php";

$SQL = "SELECT * FROM corpo_contrato";
$query = mysql_query($SQL);  
while($x = mysql_fetch_array($query)) 
{  

$codigo_aluno  = $HTTP_GET_VARS['codigo_aluno']; 

$SQL2 = "SELECT * , d.cpf AS cpf_doc, a.cpf AS cpf_aluno
	
	
	
	
	FROM tb_alunos AS a, tb_documentos AS d WHERE codigo_aluno = '$codigo_aluno' and d.id_aluno = a.id_aluno  limit 1";

$query2 = mysql_query($SQL2);  

if (mysql_num_rows($query2)==0) echo "Por favor, atualize os documentos deste aluno, caso contrario n�o ser� possivel fazer o requerimento"; 


while($x2 = mysql_fetch_array($query2)) {  
	$data_cadastro = $x2['data_cadastro'];
	$data_cadastro = explode("-",$data_cadastro);
	$data_cadastro = $data_cadastro[2]."/".$data_cadastro[1]."/".$data_cadastro[0];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ficha Individual do Aluno</title>

<link href="css/requerimento.css" rel="stylesheet" type="text/css">
</head>

<body>

<div id = "todo">
<table>
<tr><td><img src="imagens/cebanRequerimento.jpg" width="500"></td> <td width="20%"  align ="center" >FOTO</td></tr>
</table>

<table>
<tr><td align="center"><strong>FICHA INDIVIDUAL DO ALUNO</td></strong></tr>
</table>

<table>
      <tr>
        <td width="4%" rowspan="2" align="left" class="vertical">ALUNO</td>
        <td colspan="3" > <p class="nome">Aluno:</p> <p class= "nome"><strong><?php echo "$x2[nome_completo]"; ?> </strong></p> </td>
	</tr>

	<tr>
	<td width="20%" align="left">Matricula: <strong> <?php echo "$x2[id_aluno]"; ?></strong> </td>
        <td width="30%" align="left">Curso: <strong> <?php echo "$x2[tipo_curso]"; ?> </strong> </td>
	<td width="40%" align="left">Data Matricula:<strong> <?php echo $data_cadastro; ?></strong></td>
      </tr>
</table>


<table>
<tr>
	<td rowspan="5" class="vertical">DADOS PESSOAIS</td>
	<td > Email:<strong> <?php echo "$x2[email]";?> </strong></td>
	<td  colspan="2" >Data Nasc: <strong><?php echo "$x2[data_nasc]"; ?> </strong></td>
</tr>
<tr>
            <td width="50%">CPF: <strong><? echo "$x2[cpf_aluno]"; ?></strong></td>
            <td width="20%">RG: <strong><? echo "$x2[rg]"; ?></strong></td>
            <td colspan="4" width="20%">Data Exp <strong><? echo "$x2[expedicao]"; ?></strong></td>
</tr>

<tr>
        <td align="left">Natural: <strong><? echo "$x2[naturalidade]"; ?></strong></td>
	<td align="left">UF:<strong><?php echo "$x2[naturalidade_uf]"; ?></strong> </td>
        <td align="left">Org�o Exp: <strong><?php echo "$x2[rg_orgao]"; ?></strong></td>
</tr>

<tr>
        <td colspan="3" align="left">Pai: <strong><? echo "$x2[nome_do_pai]"; ?></strong></td>
</tr>

<tr>
        <td colspan="3" align="left">M&atilde;e: <strong><? echo "$x2[nome_do_mae]"; ?></strong></td>
</tr>

</table>

<table>
      <tr>
        <td  rowspan="3" colspan = "2"  align="left" class="vertical">ENDERE�O:</td>
        <td colspan="3" align="left">Endere&ccedil;o:<strong> <? echo "$x2[lagradouro]"; ?> <? echo "$x2[numero_casa]"; ?> <? echo "$x2[bairro]"; ?><strong></td>
      </tr>

      <tr>
        <td>Cidade:   &nbsp;<strong><? echo "$x2[cidade]"; ?></strong></td>
        <td>UF: <strong> <? echo "$x2[estado_uf]"; ?></strong></td>
        <td>CEP: <strong><? echo "$x2[cep]"; ?></strong></td>
      </tr>
      <tr>
        <td colspan = "3" >Fone: <strong>(<? echo "$x2[ddd]"; ?>) <? echo "$x2[telefones]"; ?></strong></td>
      </tr>
      
</table>



<table>
<tr border="0">

<td  colspan="4" border="0">DOCUMENTA��O</td>
<tr>

<tr>
<td>Quantidade</td>
<td>Tipo</td>
<td>Recebido</td>
<td width="35%">Descri��o</td>
</tr>

<tr>
<td></td>
	<td>Fotos 3 x 4 Colorida e atual</td>
	<td><strong><?php  echo ($x2['fotos']==true) ?  ("ok"): ("falta"); ?> </strong></td>
<td></td>
</tr>

<tr>
<td></td>
	<td>C�pia - CPF</td>
	<td><strong><?php  echo ($x2['cpf_doc']==true) ?  ("ok"): ("falta"); ?> </strong></td>
<td></td>
</tr>
<tr>
<td></td>
	<td>C�pia - RG</td>
	<td><strong><?php  echo ($x2['rg_certidao']==true) ?  ("ok"): ("falta"); ?> </strong></td>
<td></td>
</tr>
<tr>
<td></td>
	<td>C�pia - Comprovante de Resid�ncia</td>
	<td><strong><?php  echo ($x2['compr_residencia']==true) ?  ("ok"): ("falta"); ?> </strong></td>
<td></td>
<tr>
<td></td>
	<td>C�pia - Comprovante de Reservista
</td>
	<td><strong><?php  echo ($x2['reservista']==true) ?  ("ok"): ("falta"); ?> </strong></td>
<td></td>
</tr>
<tr>
<td></td>
	<td>C�pia - T�tulo de Eleitor
</td>
	<td><strong><?php  echo ($x2['titulo_eleitor']==true) ?  ("ok"): ("falta"); ?> </strong></td>
<td></td>
</tr>
<tr>
<td></td>
	<td>Certificado (Ens. Fundamental)
</td>
	<td><strong><?php  echo ($x2['historico_certificado']==true) ?  ("ok"): ("falta"); ?> </strong></td>
<td></td>
</tr>
</tr>
</table>

<table>
      <tr>
        <td width="50%" >DEFERIDO</td>
        <td width="50%"> INDEFERIDIO</td>
      </tr> 

      <tr>
        <td width ="50%">N�cleo Bandeirante - DF,____de_________de______  </td>
        <td width ="50%">N�cleo Bandeirante - DF,____de_________de______</td>
      </tr> 

      <tr height="100px">
        <td> </td>
        <td> </td>
      </tr>
      
</table>



<?php } ?>

<?php } ?>

</div>
</body>
</html>
