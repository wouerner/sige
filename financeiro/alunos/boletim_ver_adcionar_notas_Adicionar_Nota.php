<?php
include "../includes/validacao_pagina_adm.php";
include "../includes/conexao_bd.php";
$id_aluno   = $_GET['id_aluno'];

include '../includes/nome_aluno.inc.php' ; 

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


<script type="text/javascript" language="JavaScript1.2" src="../../js/jquery.js"></script>
<script type="text/javascript" language="JavaScript1.2" src="../../js/jquery.validate.js"></script>
<script type="text/javascript" language="JavaScript1.2" src="../../js/jquery.maskedinput.js"></script>

<script>
jQuery(function($){
	  $("#data").mask("99/99/9999");
	  $("#nota").mask("999.9");
	      });


$(document).ready(function(){
	        $('#cad_nota').validate({
			            rules:{
	                    data_avaliacao:{
	                        required: true
			                    },
                    nota: {
                        required: true
            }},
              messages:{
                data_avaliacao:{
              required: "Invalido"
                },
               nota: {
               required: "Invalido"
                }
               }
		 
		        });
    });



</script>


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
	<div class = "row" >
	<div class = "span3" >
		<?php
		
			
						if ($nivel == 'adm')
				{
				include "../includes/menu_lateral.php";
				
				
				}
				else
				{
				//direciona para a página inicial dos usuários cadastrados
				
				include "menu_lateral_secretaria.php";
				
				}
?> 

	</div>
	<div class = "span13" >

	<h3><?php echo $nome['nome_completo'] ; ?></h3>
              <td align="center"><span class="titulo_principal">Cadastrar Notas </span></td>
	
	
<?php


$SQL = "SELECT * FROM tb_boletim WHERE id_aluno = '$id_aluno'";  
$query = mysql_query($SQL);  

//seleciona o ensino medio
$query_materia = 'SELECT * FROM tb_materias WHERE tipo_ensino = 1';
$query_materia = mysql_query($query_materia);

//seleciona o ensino fundamental
$query_materia1 = 'SELECT * FROM tb_materias WHERE tipo_ensino = 2';
$query_materia1 = mysql_query($query_materia1);


$materia = $_GET['materia'];	


?>



            <form id ="cad_nota" action="boletim_ver_adcionar_notas_Adicionar_Nota_Insert_bd.php" method="post" class = "form-stacked" >

		

		<label>Tipo  Avaliação</label>
		<select name="tipo_avaliacao">
			<option value = "Prova">Prova</option>
			<option value = "Trabalho">Trabalho</option>
			<option value = "Simulado">Simulado/Outros</option>
		</select>
			
		<label>Data</label>
		<input id= "data" name="data_avaliacao" class = "span2" />
		
		<label>Nota</label>
                 <input name="nota" type="text" id="nota" class = "span2">
               
		<input type="hidden" name="materia" value = "<?php echo $materia; ?>"/>
		<input name="id_aluno"  type="hidden" value="<? echo $id_aluno  ?>" />
                <input class = "btn primary" name="submit" type="submit" value="Cadastrar" /></td>
            </form>

      <?php
$query_notas_lancadas ="SELECT *
	FROM tb_avaliacao
	WHERE tb_avaliacao.materia =".$materia;

		$resultado = mysql_query( $query_notas_lancadas);
		
?>
	<table>
	<caption><h3>Notas dessa materia</h3></caption>
	<thead>
		<tr><td>Tipo Avaliação</td> <td> Nota</td> <td>Data</td> <td>Ação</td>
		<tr>
	</thead>
	<?php while($resultados =mysql_fetch_assoc($resultado)){?>
	
	<tr>
	<td><?php echo $resultados['tipo_avaliacao']?></td>
	<td><?php echo $resultados['nota']?></td>
	<td><?php echo $resultados['data']?></td>
	<td><a class = "btn danger" href="avaliacao_deletar.php?avaliacao=<?php echo $resultados['id'] ;?>&materia=<?php echo $materia?>&id_aluno=<?php echo $id_aluno;?>">Deletar</a></td>
	</tr>	
		
	<?php }?>
	</table>
	<td>	<p><a class = "btn" href="boletim_ver_adcionar_notas.php?id_aluno=<?php echo $id_aluno ; ?>">Voltar</a></p><td>
</body>
</html>
