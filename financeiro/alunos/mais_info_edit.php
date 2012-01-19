<?php include "validacao_pagina_adm.php"; 
include "conexao_bd.php";

$id_hist = $HTTP_GET_VARS['id_hist'];
$resultado= mysql_query ("SELECT * FROM tb_historico WHERE id_hist= $id_hist");

$linhas = mysql_num_rows ($resultado);


?>

<link href="estilo_sistema.css" rel="stylesheet" type="text/css" />
<table width="420" border="0" align="center">
  <tr>
    <td align="center" class="titulo_principal">Editar dados do Registro </td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td height="160">
	
      <p>
        <?php	for($i=0; $i<$linhas; $i++)
{
$id_hist = mysql_result ($resultado, $i, "id_hist");
$titulo_hist = mysql_result ($resultado, $i, "titulo_hist");
$descri_hist = mysql_result ($resultado, $i, "descri_hist");		
}
?>    
</p>



<form method="post" action="mais_info_ed_update.php">


      <table width="420" height="226" border="0" align="center">
        <tr>
          <td height="99" class="fonte01"><label><strong class="fonte02">Nome do Cliente: </strong><br />
            <?php echo "<input type='hidden' name=id_hist value='$id_hist'>" ?>		   
		   
		   <?php echo "<input name='titulo_hist'  value='$titulo_hist'type='text' id='titulo_hist' size='70' maxlength='100'/>" ?>
            </label>          </td>
        </tr>
        <tr>
          <td class="fonte01"><strong class="fonte02">Url do Site: </strong><br />
            <?php echo "<textarea name='descri_hist' cols='35' rows='10' id='descri_hist'>$descri_hist</textarea>" ?></td>
        </tr>
        <tr>
          <td align="center"><label>




<input name="submit" type="submit" value="          ATUALIZAR          " />
          </label></td>
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
    <td align="center"><a href="javascript:window.close()" class="links">Voltar para tela inicial</a></td>
  </tr>
</table>

