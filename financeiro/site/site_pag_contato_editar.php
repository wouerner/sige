<?php include "validacao_pagina_adm.php"; 

include "conexao_bd.php";

$resultado= mysql_query ("SELECT * FROM tb_dados_site WHERE id= '6'");



$linhas = mysql_num_rows ($resultado);


?>
<link href="../css_destaques.css" rel="stylesheet" type="text/css">



<table width="711" border="0" align="center">
  <tr>
    <td width="705" align="center" class="titilos02">Alterar Dados da P&aacute;gina Fale Conosco </td>
    </tr>
  <tr>
    <td align="center">&nbsp;</td>
    </tr>
  <tr>
    <td height="160">
      
      <p>
        <?php	for($i=0; $i<$linhas; $i++)
{
$id = mysql_result ($resultado, $i, "id");
$contato_tel_01 = mysql_result ($resultado, $i, "contato_tel_01");
$contato_email = mysql_result ($resultado, $i, "contato_email");		
$contato_sites = mysql_result ($resultado, $i, "contato_sites");


}
?>    
  </p>
  

  
<form method="post" action="site_pag_contato_update.php">
  
  
  <table width="633" height="411" border="0" align="center">
    <tr>
      <td width="210" align="right" class="texto_01"><strong>C&oacute;digo: </strong></td>
            <td colspan="3">
              
              
              <?php echo "$id"; ?></label></td>
          </tr>
    <tr>
      <td align="right" class="texto_01">Telefones:</td>
            <td colspan="3">
              
  <?php echo "<input name='contato_tel_01'  value='$contato_tel_01' type='text' id='$contato_tel_01' size='70' maxlength='254'/>" ?></td>
          </tr>
    <tr>
      <td align="right" class="texto_01">E-mail:</td>
            <td colspan="3"><?php echo "<input name='contato_email'  value='$contato_email' type='text' id='$contato_email' size='70' maxlength='254'/>" ?></td>
          </tr>
    <tr>
      <td align="right" class="texto_01">Url Links:</td>
            <td colspan="3"><?php echo "<textarea name='contato_sites' cols='35' rows='10' id='contato_sites'>$contato_sites</textarea>" ?></td>
          </tr>
    <tr>
      <td align="right">&nbsp;</td>
            <td width="169" align="center"><label>
              
              
              
              
  <input name="submit" type="submit" value="          ATUALIZARR          " />
              </label></td>
            <td width="240" colspan="2">&nbsp;</td>
          </tr>
    </table>   
	    </form>
	    
	  
	    
	     
      <p>&nbsp;      </p></td>
    </tr>
  <tr>
    <td>
      
      
      
  <?
mysql_close($link);
?></td>
    </tr>
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
</table></td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
</table>

