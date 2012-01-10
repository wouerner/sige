<?php
include "validacao_pagina_adm.php";
include "conexao_bd.php";


$id_cli = $HTTP_GET_VARS['id_cli'];
$resultado= mysql_query ("SELECT * FROM clientes WHERE id_cli= $id_cli");
$linhas = mysql_num_rows ($resultado);

?>

<?php for($i=0; $i<$linhas; $i++)
{
$id_cli = mysql_result ($resultado, $i, "id_cli");
$nome_cli = mysql_result ($resultado, $i, "nome_cli");
}
?>    




<link href="estilo_sistema.css" rel="stylesheet" type="text/css" />
<p>&nbsp;</p>
<p align="center" class="titulo_principal">ABRIR TICKT MANUTEN&Ccedil;&Atilde;O  </p>
<table width="800" height="329" border="0" align="center">
  <tr>
    <td></td>
  </tr>
  <tr>
    <td align="center"></td>
  </tr>
  <tr>
    <td align="center"><table width="796" border="0" align="center">
      <tr>
        <td width="142" align="right" class="fonte01">Abrindo tickt para:</td>
        <td width="626" class="sub_titulos"><?php echo "$nome_cli"?></td>
      </tr>

    </table></td>
  </tr>
  <tr>
    <td align="center"><form method="post" action="tickt_inserir.php">
<table width="796" height="201" border="0" align="center">
  <tr>
    <td width="142" align="right" class="fonte01"><label for="checkbox_row_3"></label></td>
    <td colspan="2"><?php echo "<input type='hidden' name=id_cli value='$id_cli'>" ?><?php echo "<input type='hidden' name=status_tkt value='Aberto'>" ?>


	 
	
	</td>
  </tr>
  <tr>
    <td align="right" class="fonte01">Titulo do Tickt: </td>
    <td colspan="2"><input name="titulo_tkt" type="text" id="titulo_tkt" size="50" maxlength="100" /></td>
  </tr>
  <tr>
    <td align="right" class="fonte01">Data de Abertura:</td>
    <td colspan="2"><input name="data_abertura" type="text" id="data_abertura" size="50" maxlength="254" value="<? echo date("d/m/Y"); ?>"/></td>
  </tr>
  <tr>
    <td align="right" class="fonte01"><label for="checkbox_row_6">Nivel de prioridade:</label></td>
    <td colspan="2"><label>
      <select name="nivel_prio" id="nivel_prio">
        <option value="Baixo">Baixo</option>
        <option value="Medio">M&eacute;dio</option>
        <option value="Alto">Alto</option>
      </select>
    </label></td>
  </tr>
  <tr>
    <td align="right" valign="top" class="fonte01"><label for="checkbox_row_7">Descri&ccedil;&atilde;o:</label>      <label for="checkbox_row_8"></label></td>
    <td colspan="2" valign="top"><textarea name="descricao_tkt" cols="50" rows="4" id="descricao_tkt"></textarea></td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td width="426" align="center"><label>
      <input type="submit" value="          CADASTRAR          " />
    </label></td>
    <td width="200">&nbsp;</td>
    </tr>
</table>
</form></td>
  </tr>
  <tr>
    <td align="center"><p><a href="pagina_principal_02.php" class="style2">Voltar para tela inicial</a></p></td>
  </tr>
</table>
<?
mysql_close($link);
?>