
<link href="estilo_sistema.css" rel="stylesheet" type="text/css">
<body style="background-color: transparent">


  <table width="537" border="0">
    <tr>
      <td align="center"><span class="titulo_principal">Ticks Abertos Para: </span></td>
    </tr>
  </table>
<?php
include "validacao_pagina_adm.php";  	
include('conexao_bd.php');


$id_cli  = $HTTP_GET_VARS['id_cli']; 

$SQL = "SELECT * FROM tb_tickts WHERE id_cli = '$id_cli'";  
$query = mysql_query($SQL);  
while($x = mysql_fetch_array($query))  
{
?>









      
      
      
      <link href="css_destaques.css" rel="stylesheet" type="text/css" />
  </p>
  </blockquote>

  <table width="546" border="0">
    <tr>
      <td width="106" align="right" bgcolor="#F5FFF4" class="fonte02">Nome do Cliente: </td>
      <td width="619" bgcolor="#F5FFF4" class="sub_titulos"><strong><? echo "$x[titulo_tkt]"; ?></strong></td>
    </tr>
    <tr>
      <td width="106" align="right" bgcolor="#F5FFF4" class="fonte02">Url::</td>
      <td bgcolor="#F5FFF4" class="sub_titulos"><strong class="fonte01"><? echo "$x[url_cli]"; ?></strong></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFEC" class="fonte02">Fones:</td>
      <td bgcolor="#F5FFEC"><span class="fonte01"><? echo "$x[telefones]"; ?></span></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFF4" class="fonte02">Respons&aacute;vel</td>
      <td bgcolor="#F5FFF4"><span class="fonte01"><? echo "$x[responsavel]"; ?></span></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFEC" class="fonte02">E-mail:</td>
      <td bgcolor="#F5FFEC"><span class="fonte01"><? echo "$x[e_mail]"; ?></span></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFEC" class="fonte02">Senha login:</td>
      <td bgcolor="#F5FFEC"><span class="fonte01"><? echo "$x[senha_cli]"; ?></span></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFF4" class="fonte02">Endere&ccedil;o:</td>
      <td bgcolor="#F5FFF4"><span class="fonte01"><? echo "$x[endereco]"; ?></span></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFEC" class="fonte02">Cnpj/Cpf:</td>
      <td bgcolor="#F5FFEC"><span class="fonte01"><? echo "$x[cnpj_cpf]"; ?></span></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFF4" class="fonte02">N&uacute;mero Contrato: </td>
      <td bgcolor="#F5FFF4"><span class="fonte01"><? echo "$x[contrato_cli]"; ?></span></td>
    </tr>
    <tr>
      <td align="right" valign="top" bgcolor="#F5FFF4" class="fonte02">Outros Contatos :</td>
      <td bgcolor="#F5FFF4"><span class="fonte01"><? echo "$x[outros_contatos]"; ?></span></td>
    </tr>
    <tr>
      <td bgcolor="#F5FFEC">&nbsp;</td>
      <td bgcolor="#F5FFEC"><table width="436" border="0">
        <tr>
          <td width="188" class="links"><a href="tickt_abrir.php?id_cli=<? echo "$x[id_cli]" ?>"><span class="style10">Abrir Tickt Manuten&ccedil;&atilde;o </span></a></td>
          <td width="153" class="links"><a href="#">V&ecirc;r/Add Hist&oacute;rico</a></td>
          <td width="136" class="links"><a href="#">+ info </a></td>
          <td width="110" class="links"><a href="editar_cliente.php?id_cli=<? echo "$x[id_cli]" ?>">Editar Dados </a></td>
        </tr>
      </table>        </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <?php } ?>
  
  
  <?
mysql_close($link);
?>
  
</div>

</body>
