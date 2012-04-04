<table class = "table table-bordered" >  
<tr>
    <td >
	 <a class = "btn" href="alunos_checar_docs.php?id_aluno=<?php echo $id_aluno ; ?>&codigo_aluno=<?php echo $codigo_aluno ; ?>" title="Editar dados deste deste aluno">
				<i class="icon-file"></i>
		 Documentos
		</a>
    </td>  

	 <td>
			<a class = "btn" href="boletim_ver_adcionar_notas.php?id_aluno=<?php echo $id_aluno ; ?>&codigo_aluno=<?php echo $codigo_aluno ; ?>">

				<i class="icon-book"></i>
			Boletim
			</a>
	</td>

	 <?php if($nivel != "atm" ) : ?> 
			<td><a class = "btn" href="../financeiro/financeiro_lista_Todos_boletos_cada_aluno.php?id_aluno=<?php echo $id_aluno ?>" title="Verifcar Status Financeiro deste Aluno">
    <i class="icon-folder-open"></i>
	Financeiro</a>

	</td> <?php endif ; ?>

	 <td>
		<a class = "btn" href="../documentos/contrato_do_aluno.php?codigo_aluno=<? echo $codigo_aluno ?>" target="_blank" title="Clique para gerar um contrato">
						  <i class="icon-file"></i>
			Contrato

		</a>
	</td>

	 <td>
			<a class = "btn"  href="../documentos/index.php?codigo_aluno=<? echo $codigo_aluno ?>" target="_blank">
				<i class="icon-file"></i>
				Requerimentos
			
				</a>
	</td>

    <?php if($nivel == "adm") { ?> 
	<td>
		<a class = "btn" href="../financeiro/financeiro_form_criar_parcelas.php?id_aluno=<? echo $id_aluno ?>" target="_self" title="Gerar cobranças para este aluno">
				<i class="icon-file"></i>
			Gerar Pagamento
		</a> </td>  
    <?php } ?>

	 <td>
			<a class = "btn" href="clientes_editar_dados_aluno.php?id_aluno=<? echo $id_aluno ?>&codigo_aluno=<?php echo $codigo_aluno ; ?>" title="Editar dados deste deste aluno">
				<i class="icon-pencil"></i>
				Editar
			</a>
	</td>

    <td>
	<a class = "btn btn-danger" href="clientes_ativar_desativar_aluno.php?id_aluno=<?php echo $id_aluno ?>&amp;funcao=desativar" title="Enviar aluno para a gaveta">
				<i class="icon-remove"></i>
				Desativar
	</a>
	</td>

  </tr>

</table>
