<script LANGUAGE="Javascript">


        parent.scroll(0,0);

</script>


<div id="tamanho">


<link href="estilo_sistema.css" rel="stylesheet" type="text/css" />


<table width="419" height="186" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center">
	
	  <p>
<?php
include "validacao_pagina_adm.php";
include "foto_uploadjpeg.inc.php";
include "conexao_bd.php";

//pega o valor que vem da página anterior	
$cod_parceiro = $_GET['cod_parceiro'];


// Captura Valor do Hidem que esta mais abaixo. O campo Hidem traz o nome do arquivo que foi gerado pelas variáveis acima 
// Mantém o código do aluno para não dar erro na update  quando a página retornar para sí própria as as variáveis na forma "POST"
$cod_parceiro2 = $_POST['cod_parceiro'];
$cod_parceiro3 = "$cod_parceiro2.jpg";

// Faz uma atualuzação no campo com o nome da foto que era um Avatar, e coloca o nome real da foto do aluno.

$query = "Update tb_socios Set 

url_foto = '$cod_parceiro3'  

Where cod_parceiro = '$cod_parceiro2'";

$resultado = mysql_query($query)
or die ("Houve erro na gravação dos dados.");

?>




	    <br />
	    <br />
	    <br />
	    <span class="titulo_principal">Enviar Foto	    </span></p>
	  <p class="sub_titulos">Escolha o local onde esta localizada a foto que voc&ecirc; quer enviar para o site. </p>






<?




if($_FILES[arquivo]){
 
  

$up = uploadJPEG($_FILES[arquivo],"../fotos_dos_parceiros_3x4/$cod_parceiro3"); // Para o 3º e 4º parametros estou usando os valores default
switch($up){
case 1:
     
echo "<br><br>Upload bem sucedido!<br><br><img src='../fotos_dos_parceiros_3x4/$cod_parceiro3'><br><br>";

      break;
    case 2:
      echo "Arquivo não enviado!";
      break;
    case 3:
      echo "O arquivo não é do tipo JPEG!";
      break;
    case 4:
      echo "O arquivo é maior do que o permitido!";
      break;
    case 5:
      echo "Ocorreu algum erro durante o redimensionamento!";
  }
}
else{

?>

	  <form action="<? echo $PHP_SELF; ?>" method="post" enctype="multipart/form-data">
	  

	<input type="hidden" id="cod_parceiro" name="cod_parceiro" value="<? echo $cod_parceiro ?>">
	  
                <input type="file" name="arquivo" />
				

                <br />
                <br />
                <input name="submit" type="submit" value="   Enviar!   " />
      </form>
          <p>

<?
}
?>



<?
mysql_close($link);
?>

      </p>
          <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>

</div>
<script>
parent.document.getElementById("iframe").height = document.getElementById("tamanho").scrollHeight + 5;
</script>
</body>
