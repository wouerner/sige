<script LANGUAGE="Javascript">


        parent.scroll(0,0);

</script>


<div id="tamanho">

<?
include "validacao_pagina_adm.php";  
$cod_parceiro = $_GET['cod_parceiro'];

?>


<link href="../css_principal.css" rel="stylesheet" type="text/css" />
<link href="estilo_sistema.css" rel="stylesheet" type="text/css" />
<table width="419" height="186" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" class="titulo_principal"><p>&nbsp;</p>
    <p class="titulo_principal">VOC&Ecirc; TEM CERTEZA QUE DESEJA INSERIR UMA FOTO PARA ESTE PARCEIRO? </p></td>
  </tr>
  <tr>
    <td align="center">      </td>
  </tr>
  <tr>
    <td align="center"><table width="324" height="41" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center"><a href="parceiros_foto_form_upload.php?cod_parceiro=<? echo $cod_parceiro ?>" class="fundo"><strong>SIM</strong></a></td>
        <td align="center"><strong class="fundo"><a href="javascript:history.back(1)">N&Atilde;O</a></strong></td>
      </tr>
    </table>
      <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p></td>
  </tr>
</table>

</div>
<script>
parent.document.getElementById("iframe").height = document.getElementById("tamanho").scrollHeight + 5;
</script>
</body>
