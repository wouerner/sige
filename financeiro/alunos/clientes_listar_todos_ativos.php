<?php
include "../includes/validacao_pagina_adm.php";  	
include "../includes/conexao_bd.php";

// numeros de registro por pagina
$registros = isset($_GET["registros"]) ? $_GET['registros']: 10 ;

if(empty($_GET["registros"]))
{
$registros   = '10';
}

else
{
$registros   = $_GET["registros"];
}

//comandos para a pagina��o
$numreg = $registros; // Quantos registros por p�gina vai ser mostrado
if (!isset($pg)) {
$pg = 0;
}

$inicial = $pg * $numreg;

$SQL = "SELECT * FROM tb_alunos WHERE registro_ativo = 's' ORDER BY nome_completo LIMIT $inicial, $numreg";  
$sql_conta = mysql_query("SELECT * FROM tb_alunos WHERE registro_ativo = 's' ORDER BY nome_completo");
$quantreg = mysql_num_rows($sql_conta); // Quantidade de registros pra pagina��o   


$query = mysql_query($SQL);  
// Conta o total de resultados encontrados
$total = "$quantreg"; // esta linha serve apenas para retornar o n�mero de resultados da query.

?>

<html>
<head>
<title>Gerenciamento</title>
<script type="text/javascript" src="../js/jquery-1.js"></script>
<script type="text/ecmascript" src="../js/scripts.js"></script>

<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate, post-check=0, pre-check=0">
<meta http-equiv="Pragma" content="no-cache, no-store">
<meta http-equiv="expires" content="0">
<meta name="robots" content="follow" />
<meta name="revisit-after" content="15 days" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">


<script type="text/javascript" language="JavaScript1.2" src="../Resource/js/stmenu.js"></script>
<script type="text/javascript" language="JavaScript1.2">
<!--
window.onerror=function(m,u,l)
{
	window.status = "Java Script Error: "+m;
	return true;
}
//-->
</script>


<?php include '../includes/css.inc.php' ; ?>


<script type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>

</head>

<body>

<div class = "container">

<?php include '../includes/cabecalho.inc.php' ; ?>
<div class = "row">
	<div class = "span2" >		

					<?php include "../includes/menu_lateral.php" ; ?>
</div>

<div class = "span10">

            <h3>Listagem de  Alunos Ativos</h3>

      
<span class='fonte02'>Toda listagem possui <strong><?php echo $total ; ?> </strong> Alunos Ativos.</span>


<table >
  <tr>
    <td align="right" valign="bottom">  <form method="get" name="form1" class="fonte02" id="form1">
      Exibir 
      <select name="menu1" class="css_form_01" onChange="MM_jumpMenu('parent',this,0)">
        <option value="<?php echo $_SERVER["PHP_SELF"] ; ?>?registros=10" selected="selected"><? echo "$registros" ?></option>
        <option value="<?php echo $_SERVER["PHP_SELF"]; ?>?registros=10">10</option>
        <option value="<?php echo $_SERVER["PHP_SELF"]; ?>?registros=25">25</option>
        <option value="<?php echo $_SERVER["PHP_SELF"]; ?>?registros=50">50</option>
        <option value="<?php echo $_SERVER["PHP_SELF"]; ?>?registros=100">100</option>
        </select>
      Alunos por P&aacute;gina 
    </form></td>
    </tr>

</table>

<?  while($x = mysql_fetch_array($query)) : 

$id_aluno = $x['id_aluno'];
$codigo_aluno = $x['codigo_aluno'] ;
?>
  </p>

  </blockquote>

  <table class = "table table-bordered" >
    <tr>
      <td colspan = "5" >Nome do Cliente: 

		<strong class="fonte05">
			<a href="javascript:submenu2('<?php echo $id_aluno ; ?>')" class="link_005"><? echo "$x[nome_completo]"; ?></a></strong>
		</td>

		<td colspan = "2" >
			Matricula: <strong class="fonte05"><a href="javascript:submenu2('<? echo "$x[id_aluno]" ?>')" class="link_005"><? echo "$x[id_aluno]"; ?></a></strong>
		</td>
    </tr>

    <tr>
         <td colspan = "8" >Observa&ccedil;&atilde;o:  <?php echo $x['descricao1'] ; ?></td>
    </tr>

    <tr>
      <td colspan = "8" >Fones:(<?php echo $x['ddd'] ; ?>)  <? echo "$x[telefones]"; ?> / <? echo "$x[celular]"; ?></span></td>
    </tr>
    <tr>
      <td colspan = "8" >E-mail: <?php  echo $x['email'] ; ?></td>
    </tr>
    <tr>
      <td colspan = "8" >CPF: <?php echo $x['cpf'] ; ?></td>
    </tr>

    <tr>
      <td colspan="8">
	  
			<div id="info_<?php echo $x['id_aluno'] ?>" class="areaDesc2" style="display: none;">
	  
        <table class = "table bordered-table" >
        <tr>
          <td>RG: <?php echo $x['rg'] ; ?></td>
          <td>Expedi&ccedil;&atilde;o:<?php echo $x['expedicao']; ?></td>

          <td >Data de Nascimento: <?php echo $x['data_nasc']; ?></td>
          <td>Data de Cadastro:
            <?
	  	  
	  $data_quebrada = explode('-', $x['data_cadastro']);
	  $data_cadastro2 = $data_quebrada[2].'/'.$data_quebrada[1].'/'.$data_quebrada[0];
	  echo "$data_cadastro2";
	  
	  ?>
          </td>
        </tr>

        <tr>
          <td colspan = "8" >Nome do Pai: <?php echo $x['nome_do_pai']; ?></td>
        </tr>
        <tr>
          <td colspan = "8">Nome da M&atilde;e: <?php echo $x['nome_do_mae']; ?></span></td>
        </tr>
        <tr>
        </tr>

    <tr>
      <td colspan = "8" >Endere&ccedil;o:
		<?php echo $x['lagradouro']; ?>, <?php echo $x['numero_casa']; ?>, <?php echo $x['bairro']; ?>, <?php echo $x['cidade']; ?>, <?php echo $x['estado_uf']; ?>. Cep: <?php echo $x['cep']; ?>
		</td>
    </tr>

    <tr>
       <td colspan = "3" >In&iacute;cio do Curso:
          <?php echo $x['inicio_curso']; ?></span></td>
       
          <td colspan = "3" >Tipo do Curso: 
          <?php echo $x['tipo_curso']; ?></td>
    </tr>
    <tr>
          <td>Pagamento:
          <?php echo $x['situacao_aluno']; ?></td>

          <td>Polo:
          <?php echo $x['polo']; ?></td>
          <td colspan = "8" >Senha login: <?php echo $x['senha']; ?></td>
        </tr>

      </table>
		</div>	  </td>

      </tr>

	<?php include "../includes/menu_aluno.inc.php"; ?>

    </tr>
  </table>
  <?php endwhile ;  ?>
  
  <?
mysql_close($link);
?>
<?php

	function paginar($quantreg,$numreg , $registros , $pg){
	
       $quant_pg = ceil($quantreg/$numreg);
        $quant_pg++;
        
        // Verifica se esta na primeira p�gina, se nao estiver ele libera o link para anterior
        if ( $pg > 0) { 
                echo "<a href=".$_SERVER["PHP_SELF"]."?pg=".($pg-1)."&registros=".($registros)." class=pg><b>&laquo; anterior</b></a>";
        } else { 
                echo "<font color=#CCCCCC>&laquo; anterior</font>";
        }
        
        // Faz aparecer os numeros das p�gina entre o ANTERIOR e PROXIMO
        for($i_pg=1;$i_pg<$quant_pg;$i_pg++) { 
                // Verifica se a p�gina que o navegante esta e retira o link do n�mero para identificar visualmente
                if ($pg == ($i_pg-1)) { 
                        echo " <span class=pgoff>[$i_pg]</span> ";
                } else {
                        $i_pg2 = $i_pg-1;
                        echo " <a href=".$_SERVER["PHP_SELF"]."?pg=$i_pg2&registros=$registros class=pg><b>$i_pg</b></a> ";
                }
        }
        
        // Verifica se esta na ultima p�gina, se nao estiver ele libera o link para pr�xima
        if (($pg+2) < $quant_pg) { 
                echo "<a href=".$_SERVER["PHP_SELF"]."?pg=".($pg+1)."&registros=".($registros)." class=pg><b>pr�ximo &raquo;</b></a>";
        } else { 
                echo "<font color=#CCCCCC>pr�ximo &raquo;</font>";
	}
	
	}

 paginar($quantreg,$numreg , $registros , $pg)
?>

</td>
      </tr>
      <tr>
        </tr>
	 </table>
	</td>

      </tr>
    </table></td>
  </tr>
</table>
</div>
</div>
</body>
</html>
