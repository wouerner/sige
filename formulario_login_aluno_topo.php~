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







<style type="text/css">
<!--
body {
    margin-left: 0px;
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
    
}
.style1 {color: #FFFFFF}
-->
</style>

<link href="css/formularios.css" rel="stylesheet" type="text/css" />
<form name="formulario" id="formulario" method="POST" action="aluno/login_aluno.php">
<table width="234" border="0" cellspacing="0">
  
  <tr>
    <td width="175" align="center" valign="top"><input name="cpf" type="text" class="css_form_01" id="cpf" onfocus="if(this.value=='CPF do Aluno') {this.value='';}" onblur="if(this.value=='') {this.value='CPF do Aluno';}" onkeypress="formatar_mascara(this, '###.###.###-##')" value="CPF do Aluno" size="22" maxlength="14"  onsubmit="return ValidaFormulario();"/></td>
    <td width="85" align="center" valign="top"><input name="senha" type="password" class="css_form_01" id="senha" onfocus="if(this.value=='**********') {this.value='';}" onblur="if(this.value=='') {this.value='**********';}" value="**********" size="8" onsubmit="return ValidaFormulario();"/></td>
    <td width="42" align="left" valign="top"><input name="image" type="image" src="imagens/ico_ok.gif" /></td>
  </tr>
  <tr>
    <td colspan="3" align="right" valign="top"><a href="recuperar_senha.php" target="_self" class="link_001" >Esqueceu sua senha? </a></td>
  </tr>
</table>
</form>
