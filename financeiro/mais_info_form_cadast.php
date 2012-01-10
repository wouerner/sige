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
<p align="center" class="titulo_principal">ADCIONAR INFORMA&Ccedil;&Otilde;ES COMPLEMENTARES </p>
<table height="329" border="0" align="center">
  <tr>
    <td></td>
  </tr>
  <tr>
    <td align="center"></td>
  </tr>
  <tr>
    <td align="center"><table width="410" border="0" align="center">
      <tr>
        <td align="center" class="fonte01">Adcionar Informa&ccedil;&otilde;es para:<br />
          <span class="sub_titulos"><?php echo "$nome_cli"?></span></td>
        </tr>

    </table></td>
  </tr>
  <tr>
    <td align="center"><form method="post" action="mais_info_form_insert.php">
<table width="410" height="201" border="0" align="center">
  <tr>
    <td colspan="2"><?php echo "<input type='hidden' name=id_cli value='$id_cli'>" ?>	</td>
  </tr>
  <tr>
    <td colspan="2"><span class="fonte01">Titulo: </span><br />
    <input name="titulo_hist" type="text" id="titulo_hist" size="50" maxlength="100" /></td></tr>
  <tr>
    <td colspan="2"><span class="fonte01">Data de Abertura:</span><br />
    <input name="data_historico" type="text" id="data_historico" size="50" maxlength="254" value="<? echo date("d/m/Y"); ?>"/></td></tr>
  <tr>
    <td colspan="2" valign="top"><span class="fonte01">
      <label for="checkbox_row_7">Descri&ccedil;&atilde;o:</label>
      <label for="checkbox_row_8"></label>
    </span><br />
    <textarea name="descri_hist" cols="40" rows="4" id="descri_hist"></textarea></td></tr>
  <tr>
    <td width="426" align="center"><label>
      <input type="submit" value="          CADASTRAR          " />
    </label></td>
    <td width="200">&nbsp;</td>
    </tr>
</table>
</form></td>
  </tr>
  <tr>
    <td align="center"><p><a href="javascript:history.back(1)" class="links">Voltar para tela inicial</a></p></td>
  </tr>
</table>
<?
mysql_close($link);
?>