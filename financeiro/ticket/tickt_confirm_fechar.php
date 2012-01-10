<?php
include "validacao_pagina_adm.php";  	

$id_tkt  = $HTTP_GET_VARS['id_tkt']; 
?>






<link href="estilo_sistema.css" rel="stylesheet" type="text/css">
<body style="background-color: transparent">


  <table width="100%" border="0">
    <tr>
      <td align="center"><p class="titulo_principal">&nbsp;</p>
        <p class="titulo_principal">TEM CERTEZA </p>
        <p class="titulo_principal">que voc&ecirc; deseja fechar este tickt? </p>
      <p class="titulo_principal"><span class="sub_titulos"><strong><a href="tickt_fechar_registro.php?id_tkt=<? echo "$id_tkt"; ?>">SIM</a></strong></span> </p>
      <p class="sub_titulos"><a href="javascript:history.go(-1)">N&Atilde;O</a></p></td>
    </tr>
  </table>











      
      

  </p>
  </blockquote>

  </div>
</body>
