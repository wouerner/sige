<script languague="javascript">function abrirPopup(url,width,height) {window.open(url,"_blank", "toolbar=no,location=no, directories=no,status=no,menubar=no, scrollbars=yes, resizable=no, width="+width+", height="+height+", screenX=0,left=100,screenY=0,top=200");}</script>

<?php include "validacao_pagina_adm.php"; 
include "conexao_bd.php";

$id_projeto = $HTTP_GET_VARS['id_projeto'];
$resultado= mysql_query ("SELECT * FROM tb_projeto_andamento WHERE id_projeto= $id_projeto");



$linhas = mysql_num_rows ($resultado);


?>

<link href="estilo_sistema.css" rel="stylesheet" type="text/css" />

<table border="0" align="center">
  <tr>
    <td align="center" class="titulo_principal">Editar Projeto em Andamento  </td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td height="160">
	
      <p>
        <?php	for($i=0; $i<$linhas; $i++)
{
$id_projeto = mysql_result ($resultado, $i, "id_projeto");
$nome_projeto = mysql_result ($resultado, $i, "nome_projeto");
$url_projeto = mysql_result ($resultado, $i, "url_projeto");
$data_inicio = mysql_result ($resultado, $i, "data_inicio");		
$ativo = mysql_result ($resultado, $i, "ativo");
}
?>    
</p>



<form method="post" action="projetoandamento_update_registro.php">


      <table width="616" height="411" border="0" align="center">
        <tr>
          <td width="111" align="right" class="fonte02"><strong>Nome do Projeto: </strong></td>
          <td class="fonte01"><label>
           
		   
		   <?php echo "<input type='hidden' name=id_projeto value='$id_projeto'>" ?>		   
		   
		   <?php echo "<input name='nome_projeto'  value='$nome_projeto'type='text' id='nome_projeto' size='70' maxlength='254'/>" ?>
            </label>          </td>
        </tr>
        <tr>
          <td align="right" class="fonte02"><span class="formulario"><strong>Url do Projeto: </strong></span></td>
          <td class="fonte01"><?php echo "<input name='url_projeto'  value='$url_projeto' type='text' id='$url_projeto' size='70' maxlength='254'/>" ?></td>
        </tr>
        <tr>
          <td align="right" class="fonte02"><span class="formulario"><strong> Data In&iacute;cio: </strong></span></td>
          <td class="fonte01">
		  
<?php echo "<input name='data_inicio'  value='$data_inicio' type='text' id='$data_inicio' size='70' maxlength='254'/>" ?>		  </td>
        </tr>
        <tr>
          <td align="right" class="fonte02"><strong>Ativo:</strong></td>
          <td class="fonte01">
		  
		    <select name="ativo" id="ativo">
    <option value="<?php echo "$ativo" ?>"><?php echo "$ativo" ?></option>
    <option value="Sim">Sim</option>
    <option value="Não">Não</option>
  </select>
		  
		  
		  </td>
        </tr>
        <tr>
          <td align="right">&nbsp;</td>
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
    <td align="center"><a href="javascript:window.close()" class="style5">Voltar para tela inicial</a></td>
  </tr>
</table>

