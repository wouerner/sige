
<script languague="javascript">function abrirPopup(url,width,height) {window.open(url,"_blank", "toolbar=no,location=no, directories=no,status=no,menubar=no, scrollbars=yes, resizable=no, width="+width+", height="+height+", screenX=0,left=100,screenY=0,top=200");}</script>

<?php include "validacao_pagina_adm.php"; 
include "conexao_bd.php";



?>


<link href="estilo_sistema.css" rel="stylesheet" type="text/css">

<body>
<div id="tamanho">

<table width="800" border="0" align="center">
  
  <tr>
    <td width="528" height="160"><span class="fonte02"><?php

$tipo_aluno = $HTTP_POST_VARS["tipo_aluno"];
if(!empty($HTTP_POST_VARS["palavra"])) {

        $palavra = str_replace(" ", "%", $HTTP_POST_VARS[palavra]);

        /* Altera os espaços adicionando no lugar o simbolo % */
        
        $qr = "SELECT * FROM tb_alunos WHERE nome_completo LIKE '%".$palavra."%' AND registro_ativo = '$tipo_aluno' ORDER BY id_aluno ";
        
        // Executa a query no Banco de Dados
        $sql = mysql_query($qr);
        
        // Conta o total ded resultados encontrados
        $total = mysql_num_rows($sql);

        echo "Sua busca retornou '$total' resultados.";

        // Gera o Loop com os resultados
        while($x = mysql_fetch_array($sql)) {
		
?>
    </span><br>
      <br>
      <table width="735" border="0" align="center">
        <tr>
          <td width="106" align="right" bgcolor="#F5FFF4" class="fonte02">Nome do Cliente: </td>
          <td width="619" bgcolor="#F5FFF4" class="sub_titulos"><strong><? echo "$x[nome_completo]"; ?></strong></td>
        </tr>
        <tr>
          <td width="106" align="right" bgcolor="#F5FFEC" class="fonte02">Endere&ccedil;o:</td>
          <td bgcolor="#F5FFEC" class="sub_titulos"><strong class="fonte01"><? echo "$x[lagradouro]"; ?>, <? echo "$x[numero_casa]"; ?>, <? echo "$x[bairro]"; ?>, <? echo "$x[cidade]"; ?>, <? echo "$x[estado_uf]"; ?>. <span class="fonte02">Cep:</span> <? echo "$x[cep]"; ?></strong></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#F5FFF4" class="fonte02">Fones:</td>
          <td bgcolor="#F5FFF4"><span class="fonte01">(<? echo "$x[ddd]"; ?>) <? echo "$x[telefones]"; ?> / <? echo "$x[celular]"; ?></span></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#F5FFEC" class="fonte02">E-mail:</td>
          <td bgcolor="#F5FFEC"><span class="fonte01"><? echo "$x[email]"; ?></span></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#F5FFF4" class="fonte02">CPF:</td>
          <td bgcolor="#F5FFF4"><span class="fonte01"><? echo "$x[cpf]"; ?></span></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#F5FFEC" class="fonte02">RG:</td>
          <td bgcolor="#F5FFEC"><span class="fonte01"><? echo "$x[rg]"; ?></span></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#F5FFF4" class="fonte02">Expedi&ccedil;&atilde;o:</td>
          <td bgcolor="#F5FFF4"><span class="fonte01"><? echo "$x[expedicao]"; ?></span></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#F5FFEC" class="fonte02">&nbsp;</td>
          <td bgcolor="#F5FFEC">&nbsp;</td>
        </tr>
        <tr>
          <td align="right" bgcolor="#F5FFF4" class="fonte02">In&iacute;cio do Curso:</td>
          <td bgcolor="#F5FFF4"><span class="fonte01"><? echo "$x[inicio_curso]"; ?></span></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#F5FFEC" class="fonte02">Tipo do Curso: </td>
          <td bgcolor="#F5FFEC"><span class="fonte01"><? echo "$x[tipo_curso]"; ?></span></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#F5FFF4" class="fonte02">Polo:</td>
          <td bgcolor="#F5FFF4"><span class="fonte01"><? echo "$x[polo]"; ?></span></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#F5FFEC" class="fonte02">enha login:</td>
          <td bgcolor="#F5FFEC"><span class="fonte01"><? echo "$x[senha]"; ?></span></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#F5FFF4" class="fonte02">Observa&ccedil;&atilde;o</td>
          <td bgcolor="#F5FFF4"><span class="fonte01"><? echo "$x[descricao1]"; ?></span></td>
        </tr>
        <tr>
          <td bgcolor="#F5FFEC">&nbsp;</td>
          <td bgcolor="#F5FFEC"><table width="614" border="0">
            <tr>
              <td width="43" class="links">&nbsp;</td>
              <td width="44" class="links">&nbsp;</td>
              <td width="146" class="links"><a href="../contrato_do_aluno.php?codigo_aluno=<? echo "$x[codigo_aluno]" ?>" target="_blank">Gerar Contrato </a></td>
              <td width="125" class="links"><a href="financeiro_form_criar_parcelas.php?id_aluno=<? echo "$x[id_aluno]" ?>" target="_self">Gerar Pagamento </a></td>
              <td width="93" class="links"><a href="clientes_editar_dados_aluno.php?id_aluno=<? echo "$x[id_aluno]" ?>"></a></td>
              <td width="137" align="right" class="links"><a href="clientes_ativar_desativar_aluno.php?id_aluno=<? echo "$x[id_aluno]" ?>&funcao=desativar"></a></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
      <? } } ?></td>
    <td width="262" align="center"><span class="style2">
      </span></td>
  </tr>
  <tr>
    <td colspan="2" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><?
mysql_close($link);
?></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><a href="pg_principal.php" class="style5"></a>    </td>
  </tr>
</table>





</div>
<script>
parent.document.getElementById("iframe").height = document.getElementById("tamanho").scrollHeight + 5;
</script>
</body>
