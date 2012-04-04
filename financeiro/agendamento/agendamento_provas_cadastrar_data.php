<?php
include "../includes/validacao_pagina_adm.php";
include "../includes/conexao_bd.php";
?>

<html>
<head>
<title>Gerenciamento</title>

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





<script> // tag JavaScript   -   ### OBS ### - Todas essas explicações que estão escritas após ( // ) não são necessárias para o funcionamento do códigom, são apenas para explicação do código.

	// // Função de validação do formulário
		function ValidaFormulario () {

	// Função de validação do formulário - Nome
		if (document.formulario.cpf.value==""){ // O nome formulario se refere ao nome de seu formulario, caso queira alterar, basta mudar o nome de seu formulário e mudar todas as palavras desta tag com este nome.
		alert("Informe seu CPF"); // Mensagem que será exibida quando o campo não for preenchido 
		document.formulario.cpf.focus(); // O nome Nome se refere ao nome do campo do seu formulário, caso queira alterar, basta mudar o nome do respectivo campo as palavras desta tag correspondentes ao nome do campo.
	return false;
	}
  
   // Função de validação do formulário - Assunto
		if (document.formulario.senha.value==""){ // O nome formulario se refere ao nome de seu formulario, caso queira alterar, basta mudar o nome de seu formulário e mudar todas as palavras desta tag com este nome.
		alert("Digite sua Senha"); // Mensagem que será exibida quando o campo não for preenchido
		document.formulario.senha.focus(); // O nome Nome se refere ao nome do campo do seu formulário, caso queira alterar, basta mudar o nome do respectivo campo as palavras desta tag correspondentes ao nome do campo.
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


	<?php include '../includes/css.inc.php' ; ?>
</head>

<body>
<div class = "container" >

<?php include '../includes/cabecalho.inc.php' ; ?>
<div class = "row">
<div class = "span2">
		
		<?php 	include "../includes/menu_lateral.php" ; ?>
</div>
<div class = "span10">
      <h2><span class="titulo_principal">Datas Cadastradas </span></h2>

    <?php

$SQL = "SELECT * FROM tb_agenda_provas";  
$query = mysql_query($SQL);  

?>
      <table width="742" border="0" align="center">
        <tr>
          <td height="50" align="center" class="style7"><a href="pagina_principal.php" target="_self">
            <?php
				
				echo"<span class='fonte_003'><span class='titulo_01'><strong><a href='agendamento_provas_cadastrar_data_Form_cadastrar_data.php' target='_self' class='links_001 btn'>ADCIONAR + DATAS</a></strong></span></span>";
				
				
		
		
		?>
            </a>
            </table>

		<table class = "table" >

              <?php  while($x2 = mysql_fetch_array($query)) : ?>
                
                <tr>
                  <td>Data:</td>
		  				<td>
						<strong>
				  
				  <?php
				  
				  $data_quebrada = explode('-', $x2['data_disponivel']);
				  $data2 = $data_quebrada[2].'/'.$data_quebrada[1].'/'.$data_quebrada[0];
				  
				  echo "$data2"; ?>
			</strong>
		</td>

		<td>
			<a class = "btn btn-danger " href="agendamento_provas_cadastrar_data_Deletar.php?id_data=<? echo "$x2[id_data]"; ?>&funcao=nao" target="_self" class="links_001">
                    Excluir 
		    </a>
		</td>

		<td> 
				<form action="../agendamento/ativar_agendamento.php" method="post">
				
				<button type = "submit" class = "btn">
					<?php echo $x2['ativo'] ? "desativar" : "ativar" ;?>
				</button>
					<input type = "hidden" name = "id_data" value = "<?php echo $x2['id_data']; ?>" >
					<input type = "hidden" name = "status" value = "<?php echo ($x2['ativo']) ? 0 : TRUE ;?>" >
				</form>
		</td>			
                </tr>

              <?php endwhile ; ?>
          </td>
        </tr>
          <td><?
mysql_close($link);
?></td>

</table>

<!-- InstanceEndEditable --></td>
</table>
</body>
</html>
