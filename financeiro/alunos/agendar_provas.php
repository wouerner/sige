<?php
include "validacao_pagina_adm.php";
include "conexao_bd.php";

?>




<html><!-- InstanceBegin template="/Templates/pagina_principal_do_sistema.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<!-- InstanceBeginEditable name="doctitle" -->
<title>Gerenciamento</title>
<!-- InstanceEndEditable -->

<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate, post-check=0, pre-check=0">
<meta http-equiv="Pragma" content="no-cache, no-store">
<meta http-equiv="expires" content="0">
<meta name="robots" content="follow" />
<meta name="revisit-after" content="15 days" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	background-image: url(imagens/background.gif);
	background-repeat: repeat-y;
	background-color: #FFFFFF;
}
-->
</style>


<script type="text/javascript" language="JavaScript1.2" src="Resource/js/stmenu.js"></script>
<script type="text/javascript" language="JavaScript1.2">
<!--
window.onerror=function(m,u,l)
{
	window.status = "Java Script Error: "+m;
	return true;
}
//-->
</script>

<link href="estilo_sistema.css" rel="stylesheet" type="text/css">
<link href="css/estilo_sistema.css" rel="stylesheet" type="text/css">
<link href="css/css_formularios.css" rel="stylesheet" type="text/css">
<link href="css/css_links.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style1 {color: #3C4796}
-->
</style>
<!-- InstanceBeginEditable name="head" -->
<script>

		function ValidaFormulario2 () {

		if (document.formulario2.Nome_Completo.value==""){ 
		alert("Por favor, preencha o campo Nome"); 
		document.formulario2.Nome_Completo.focus(); 
		return false;
	}


		if (document.formulario2.cpf.value==""){ 
		alert("Por favor, preencha o campo CPF"); 
		document.formulario2.cpf.focus(); 
		return false;
	}


	
	
	return true;
}
// -->


</script>


<script type="text/javascript">


function formatar_mascara(src, mascara) {
	var campo = src.value.length;
	var saida = mascara.substring(0,1);
	var texto = mascara.substring(campo);
	var someros = mascara.substring(/\D/g,"");
	
	if(texto.substring(0,1) != saida) {
		src.value += texto.substring(0,1);
	}
}
</script>





<script> // tag JavaScript   -   ### OBS ### - Todas essas explica��es que est�o escritas ap�s ( // ) n�o s�o necess�rias para o funcionamento do c�digom, s�o apenas para explica��o do c�digo.

	// // Fun��o de valida��o do formul�rio
		function ValidaFormulario () {

	// Fun��o de valida��o do formul�rio - Nome
		if (document.formulario.cpf.value==""){ // O nome formulario se refere ao nome de seu formulario, caso queira alterar, basta mudar o nome de seu formul�rio e mudar todas as palavras desta tag com este nome.
		alert("Informe seu CPF"); // Mensagem que ser� exibida quando o campo n�o for preenchido 
		document.formulario.cpf.focus(); // O nome Nome se refere ao nome do campo do seu formul�rio, caso queira alterar, basta mudar o nome do respectivo campo as palavras desta tag correspondentes ao nome do campo.
	return false;
	}
  
   // Fun��o de valida��o do formul�rio - Assunto
		if (document.formulario.senha.value==""){ // O nome formulario se refere ao nome de seu formulario, caso queira alterar, basta mudar o nome de seu formul�rio e mudar todas as palavras desta tag com este nome.
		alert("Digite sua Senha"); // Mensagem que ser� exibida quando o campo n�o for preenchido
		document.formulario.senha.focus(); // O nome Nome se refere ao nome do campo do seu formul�rio, caso queira alterar, basta mudar o nome do respectivo campo as palavras desta tag correspondentes ao nome do campo.
		return false;
	}

	
	
	return true;
}
// -->

</script>




<script type="text/JavaScript">
<!--

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>



<style type="text/css">
<!--
.fonte021 {color: #666666;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
	font-weight: bold;
}
-->
</style>
<!-- InstanceEndEditable -->
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- ImageReady Slices (LAYOUT DO MEU SISTEMA222.psd) -->
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td valign="top"><table width="100%" height="151" border="0" cellpadding="0" cellspacing="0" background="imagens/bg_01.gif">
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table></td>
    <td width="988" align="center" valign="top"><table width="988" border="0" align="center" cellpadding="0" cellspacing="0" id="Table_01">
      <tr>
        <td colspan="2" background="imagens/layoyt_a_01.jpg"><table width="987" height="161" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="375" height="39" valign="top">&nbsp;</td>
            <td width="638" align="center" valign="middle"><table width="96%" height="68" border="0">
              <tr>
                <td width="91%" align="center"><span class="titulo_principal style1">SISTEMA PARA GEST&Atilde;O FINANCEIRA E <br>
                  CONTROLE DE ALUNOS </span></td>
                <td width="9%" align="center"><a href="logout_adm.php"><img src="imagens/icone_cadeado.gif" alt="Fechar o Sistema" width="39" height="45" border="0" title="Fechar o Sistema"></a></td>
              </tr>
            </table>              </td>
          </tr>
          <tr>
            <td height="41">&nbsp;</td>
            <td align="center"><?php include "formulario_de_busca_de_alunos.php"; ?></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td width="149" valign="top">
		
		<?php
		
			
						if ($nivel == 'adm')
				{
				
				
				
				include "menu_lateral.php";
				
				
				}
				else
				{
				
				
				//direciona para a p�gina inicial dos usu�rios cadastrados
				
				include "menu_lateral_secretaria.php";
				
				}
		
		
		
		
		?> </td>
        <td width="839" align="center" valign="top"><!-- InstanceBeginEditable name="corpo_programacao_sistema" -->
          <table width="739" border="0" cellspacing="3" cellpadding="4">
            <tr>
              <td align="center"><span class="titulo_principal">Agendar Provas </span></td>
            </tr>
            <tr>
              <td><table width="100%" border="0" cellpadding="0" cellspacing="0" background="imagens/px_pontilhado.gif">
                  <tr>
                    <td><p><img src="imagens/px_pontilhado.gif" width="2" height="1"></p></td>
                  </tr>
              </table></td>
            </tr>
          </table>




          <table width="800" border="0" align="center">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><table width="742" border="0" align="center">
        <tr>
          <td height="50" align="center" class="style7"><p class="texto_corpo">&nbsp;</p>
            <table width="425" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td align="center" valign="top" class="titulos_das_paginas_02">&nbsp;</td>
              </tr>
              <tr>
                <td align="center" valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td align="center" valign="top"><form action="agendar_provas_Insert_bd.php" method="post">
                  <table width="396" height="190" border="0">
                      <tr>
                        <td><span class="fonte021">Escolha uma data dispon&iacute;vel:</span> <br />
                            <select name="data_escolhida" id="data_escolhida"  class="required">
                              <option value="">Escolha Uma Data</option>
                              <?php

$id_aluno   = $_GET['id_aluno'];
$SQL = "SELECT * FROM tb_agenda_provas ";  
$query = mysql_query($SQL);  
while($x = mysql_fetch_array($query))  
{

$data_quebrada = explode('-', $x[data_disponivel]);

$data2 = $data_quebrada[2].'/'.$data_quebrada[1].'/'.$data_quebrada[0];

?>
                              <? echo "<option value='$x[data_disponivel]'>$data2</option>" ?>
                              <?php } ?>
                          </select></td>
                      </tr>
                      <tr>
                        <td><span class="fonte021">Escolha duas met&eacute;ria para realizar a prova no dia escolhido! </span><br />
                            <select name="materia01" id="materia01" onsubmit="return ValidaFormulario2();">
                              <option value="">Escolha uma Mat&eacute;ria</option>
                              <option value="Portugu&ecirc;s">Portugu&ecirc;s</option>
                              <option value="Geografia">Geografia</option>
                              <option value="Hist&oacute;ria">Hist&oacute;ria</option>
                              <option value="Artes">Artes</option>
                              <option value="Biologia">Biologia</option>
                              <option value="Qu&iacute;mica">Qu&iacute;mica</option>
                              <option value="F&iacute;sica">F&iacute;sica</option>
                              <option value="Matem&aacute;tica">Matem&aacute;tica</option>
                              <option value="Sociologia">Sociologia</option>
                              <option value="Filosofia">Filosofia</option>
                              <option value="Ingl&ecirc;s">Ingl&ecirc;s</option>
                              <option value="Educa&ccedil;&atilde;o F&iacute;sica">Educa&ccedil;&atilde;o F&iacute;sica</option>
                          </select></td>
                      </tr>
                      <tr>
                        <td><select name="materia02" id="materia02" onsubmit="return ValidaFormulario2();">
                            <option value="">Escolha uma Mat&eacute;ria</option>
                            <option value="Portugu&ecirc;s">Portugu&ecirc;s</option>
                            <option value="Geografia">Geografia</option>
                            <option value="Hist&oacute;ria">Hist&oacute;ria</option>
                            <option value="Artes">Artes</option>
                            <option value="Biologia">Biologia</option>
                            <option value="Qu&iacute;mica">Qu&iacute;mica</option>
                            <option value="F&iacute;sica">F&iacute;sica</option>
                            <option value="Matem&aacute;tica">Matem&aacute;tica</option>
                            <option value="Sociologia">Sociologia</option>
                            <option value="Filosofia">Filosofia</option>
                            <option value="Ingl&ecirc;s">Ingl&ecirc;s</option>
                            <option value="Educa&ccedil;&atilde;o F&iacute;sica">Educa&ccedil;&atilde;o F&iacute;sica</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td><input name="id_aluno"  type="hidden" value="<? echo $id_aluno  ?>" /></td>
                      </tr>
                      <tr>
                        <td align="center"><input name="submit" type="submit" value="Cadastrar" /></td>
                      </tr>
                    </table>
                </form></td>
              </tr>
            </table>            <a href="pagina_principal.php" target="_self"></a></td>
        </tr>
        <tr>
          <td height="112" align="center" valign="top"><span class="fonte_001"> </span></td>
        </tr>
        <tr>
	<td>
</td>
        </tr>
        <tr>
          <td align="center"><p><a href="pg_principal.php" class="textos01"></a></p></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td align="center"><a href="pagina_principal.php" target="_self">
      <?php
				
						if ($nivel == 'adm')
				{
				
				
				
			//	include "botao_voltar.php";
				
				
				}
				else
				{
				
				
				//direciona para a p&aacute;gina inicial dos usu&aacute;rios cadastrados
				
			//	include "botao_voltar_secretaria.php";
				
				}
		
		
		
		
		?>
    </a></td>

<?php
//busca nome completo para configurar o bot�o voltar.
$query_nome_aluno = "SELECT nome_completo FROM tb_alunos WHERE id_aluno = $id_aluno";


$nome_completo = mysql_query($query_nome_aluno)or die("n�o foi possivel!");


$nome_completo = mysql_fetch_assoc($nome_completo);
?>

<form action="clientes_busca_alunos.php" method = "post" > 
<input type="hidden" name = "palavra" value="<?php echo $nome_completo['nome_completo'] ; ?>"/>
<input type="hidden" name = "tipo_aluno" value="s"/>

<input type="submit" value="Voltar"/>
</form>

<?
mysql_close($link);
?>
  </tr>
</table>

<!-- InstanceEndEditable --></td>
      </tr>
      <tr>
        <td height="35" colspan="2" align="center" valign="middle"><?php include "roda_pe.php"; ?></td>
        </tr>
    </table></td>
    <td valign="top"><table width="100%" height="151" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
<!-- End ImageReady Slices -->
</body>
<!-- InstanceEnd --></html>
