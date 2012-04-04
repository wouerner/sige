<form action="../alunos/clientes_busca_alunos.php" method="post" class = "form-horizontal" >
              <span class="sub_titulos">Buscar Alunos  </span>

                      <input name= "palavra"  id="palavra" maxlength="25"/>
                      <span class="sub_titulos">em</span>

                      <select name="tipo_aluno" id="tipo_aluno" class = "span2">
                        <option value="s" selected>Ativos</option>
                        <option value="cpf" >CPF</option>

		    <?php if($nivel == "adm") : ?> 
                       <option value="n">Gaveta</option>
	       <?php endif ; ?>
                </select>
              <input name="Submit" type="submit" class=" btn " value="Buscar" />
</form>
