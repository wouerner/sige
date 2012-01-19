  <tr>
    <td bgcolor="#F5FFEC">
    <a href="alunos_checar_docs.php?id_aluno=<?php echo "$x[id_aluno]" ; ?>&codigo_aluno=<?php echo "$x[codigo_aluno]" ; ?>" title="Editar dados deste deste aluno"><img src="../imagens/docs.gif"></a>
    </td>  

    <td bgcolor="#F5FFEC" class="links"><a href="boletim_ver_adcionar_notas.php?id_aluno=<?php echo "$x[id_aluno]" ; ?>"><img src="../imagens/ico_boletim.gif" width="43" height="44" border="0" /></a></td>

    <?php if($nivel == "adm") {?> <td  bgcolor="#F5FFEC" align="center" class="links"><a href="../financeiro/financeiro_lista_Todos_boletos_cada_aluno.php?id_aluno=<? echo "$x[id_aluno]" ?>" title="Verifcar Status Financeiro deste Aluno">
	<img src="../imagens/ico_status_financeiro.gif" width="60" height="44" border="0" /></a></td> <?php }?>

    <td  bgcolor="#F5FFEC" align="center" class="links"><a href="../contrato_do_aluno.php?codi/go_aluno=<? echo "$x[codigo_aluno]" ?>" target="_blank" title="Clique para gerar um contrato"><img src="../imagens/ico_gerar_contrato.gif" width="49" height="44" border="0" /></a></td>

    <td  bgcolor="#F5FFEC" align="center" class="links"><a href="../documentos/index.php?codigo_aluno=<? echo "$x[codigo_aluno]" ?>" target="_blank"><img src="../imagens/ico_requerimento.gif" width="73" height="42" border="0" /></a></td>

    <?php if($nivel == "adm") { ?> 
	<td  bgcolor="#F5FFEC" align="center" class="links">
		<a href="../financeiro/financeiro_form_criar_parcelas.php?id_aluno=<? echo "$x[id_aluno]" ?>" target="_self" title="Gerar cobranças para este aluno">
			<img src="../imagens/ico_gerar_pagamento.gif" width="63" height="49" border="0" />
		</a> </td>  
    <?php } ?>

    <td align="center"  bgcolor="#F5FFEC" class="links"><a href="clientes_editar_dados_aluno.php?id_aluno=<? echo "$x[id_aluno]" ?>&codigo_aluno=<?php echo "$x[codigo_aluno]" ; ?>" title="Editar dados deste deste aluno"><img src="../imagens/ico_editar_dadis.gif" width="37" height="46" border="0" /></a></td>

    <?php if($nivel == "adm") { ?> 
    <td  bgcolor="#F5FFEC" align="center" class="links">
	<p><a href="clientes_ativar_desativar_aluno.php?id_aluno=<? echo "$x[id_aluno]" ?>&amp;funcao=desativar" title="Enviar aluno para a gaveta">
		<img src="../imagens/ico_desativar_aluno.gif" width="64" height="48" border="0" />
	</a></p>    </td>
    <?php } ?>

  </tr>
