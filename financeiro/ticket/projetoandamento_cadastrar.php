<?php
include "validacao_pagina_adm.php";
?>
<link href="estilo_sistema.css" rel="stylesheet" type="text/css" />
<p>&nbsp;</p>
<p align="center" class="titulo_principal">Cadastro Projeto </p>
<table width="800" border="0" align="center">
  <tr>
    <td><form method="post" action="projetoandamento_inserir_projeto.php">
<table height="209" border="0" align="center">
  
  <tr>
    <td align="right" class="fonte01">Nome do Projeto:</td>
    <td colspan="3">
      <input name="nome_projeto" type="text" id="nome_projeto" size="100" maxlength="125" /></td>
    </tr>
  <tr>
    <td align="right" class="fonte01"><span class="formulario">Endere&ccedil;o do Projeto:</span></td>
    <td colspan="3"><input name="url_projeto" type="text" id="url_projeto" size="100" maxlength="254" value="http://"/></td>
    </tr>
  <tr>
    <td align="right" class="fonte01">Data de In&iacute;cio:</td>
    <td colspan="3"><input name="data_inicio" type="text" id="data_inicio" size="20" maxlength="254" value="<? echo date("d/m/Y"); ?>"/> </td>
    </tr>
  <tr>
    <td align="right"> <?php echo "<input type='hidden' name=ativo value='Sim'>" ?><?php echo "<input type='hidden' name=percentual value='0'>" ?></td>
    <td align="center"><label>
      <input type="submit" value="          CADASTRAR          " />
    </label></td>
    <td>&nbsp;</td>
    </tr>
</table>
</form></td>
  </tr>
  <tr>
    <td align="center"><p>&nbsp;</p>
    <p><a href="pagina_principal_02.php" class="style2">Voltar para tela inicial</a></p></td>
  </tr>
</table>
