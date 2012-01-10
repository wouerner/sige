function formatar(src, mask) {
	var i = src.value.length;
	var saida = mask.substring(0,1);
	var texto = mask.substring(i)

	if (texto.substring(0,1) != saida) {
		src.value += texto.substring(0,1);
	}
}

function doDate(pStr)
{

 var reDate5 = /^((0[1-9]|[12]\d)\/(0[1-9]|1[0-2])|30\/(0[13-9]|1[0-2])|31\/(0[13578]|1[02]))\/\d{4}$/;

	if (reDate5.test(pStr)) {
		
	} else if (pStr != null && pStr != "") {
		alert("DATA DE NASCIMENTO não é válida!\n"+pStr);
		window.document.getElementById("tra_nascimento").value = "";
	} 
}

function marca(id){
	window.document.getElementById('cinza').className='cinza';
	window.document.getElementById('amarelo').className='amarelo';
	window.document.getElementById('azul').className='azul';
	window.document.getElementById('verde').className='verde';
	window.document.getElementById('rosa').className='rosa';
	window.document.getElementById(id).className=id+'Ativo';
}
function formFocus(id){
	if((document.getElementById(id).className) == "formInput2"){
		document.getElementById(id).className="formInput";
	}else{
		document.getElementById(id).className="formInput2";
	}
}
function formMultFocus(id){
	if((document.getElementById(id).className) == "formMulInput2"){
		document.getElementById(id).className="formMulInput";
	}else{
		document.getElementById(id).className="formMulInput2";
	}
}
function get_flash(arquivo, largura, altura, bgcolor, id, qualidade, alinhamento,transparente,pgphp) {
	obj = '<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="'+largura+'" height="'+altura+'" id="'+id+'" align="'+alinhamento+'">';
	obj+= '<param name="allowScriptAccess" value="sameDomain" />';
	obj+= '<param name="movie" value="'+arquivo+'" />';
	obj+= '<param name="quality" value="'+qualidade+'" />';
	if(transparente == true) {
		obj+= '<param name="wmode" value="transparent" />';
	}
	obj+= '<param name="bgcolor" value="'+bgcolor+'" />';
	// obj+= '<param name="FlashVars" value="pg='+pgphp+'" />';
	obj+= '<param name="FlashVars" value="pg='+pgphp+'" />';
	obj+= '<embed src="'+arquivo+'" '+((transparente==true)?'wmode="transparent"':'')+'" quality="'+qualidade+'" bgcolor="'+bgcolor+'" FlashVars="pg='+pgphp+'" width="'+largura+'" height="'+altura+'" name="'+id+'" align="'+alinhamento+'" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />';
	obj+= '</object>';
	document.write(obj);
}

function abre(id) {
	if(window.document.getElementById(id).style.display == 'none') { 
		window.document.getElementById(id).style.display = '';
		window.document.getElementById("img_"+id).src = '/checkup/imagens/seta_up.gif';
	} else { 
		window.document.getElementById(id).style.display = 'none'; 
		window.document.getElementById("img_"+id).src = '/checkup/imagens/seta_down.gif';
	}
}

function escondeAbasArgalit(){
	document.getElementById('qualidade').style.display = 'none';
	document.getElementById('diferenciais').style.display = 'none';
	//document.getElementById('ficha').style.display = 'none';
	document.getElementById('responsabilidade').style.display = 'none';
}

function mostraAbas(id){
	window.document.getElementById('qualidade').style.display = 'none';
	document.getElementById('qualidade_li').className = '';
	document.getElementById('diferenciais').style.display = 'none';
	document.getElementById('diferenciais_li').className = '';
	//document.getElementById('ficha').style.display = 'none';
	//document.getElementById('ficha_li').className = '';
	document.getElementById('responsabilidade').style.display = 'none';
	document.getElementById('responsabilidade_li').className = '';
	document.getElementById('apresentacao').style.display = 'none';
	document.getElementById('apresentacao_li').className = '';
	document.getElementById(id).style.display = '';
	document.getElementById(id+'_li').className = 'ativo';
}

function validaNews(){
	var msg = "";
	if((window.document.formNews.ds_nome.value == 'Nome completo') || (window.document.formNews.ds_nome.value == '')){
		msg = " - Seu nome!\n";
	}
	if((window.document.formNews.ds_email.value == 'E-mail') || (window.document.formNews.ds_email.value == '')){
		msg = msg + " - Seu email!\n";
	}
	
	if(msg == ""){
		return true;
	}else{
		alert("Preencha os campos corretamente.");
		return false;
	}
}


function validaBusca(){
	var msg = "";
	if((window.document.formBusca.ds_busca.value == 'Palavra chave') || (window.document.formBusca.ds_busca.value == '')){
		msg = " - Seu nome!\n";
	}

	if(msg == ""){
		return true;
	}else{
		alert("Digite uma palavra chave.");
		return false;
	}
}


function ordena(pag, tipo, mod){
	document.location.href = "../produtos/?pg="+pag+"&mod="+mod+"&tipo="+tipo;
	marcaClasseProdutos(tipo);
}


function marcaClasseProdutos(tipo){
	document.getElementById("todos_li").className = "";
	document.getElementById("tintas_li").className = "";
	document.getElementById("solventes_li").className = "";
	document.getElementById("massa_li").className = "";
	document.getElementById("argamassa_li").className = "";
	document.getElementById(tipo+"_li").className = "ativo";
}

// Função Link da paginação (fiveedit linha:)
function Page(cd_sesit, p, tipo, pag, mod){
	document.location.href = "?cd_sesit="+cd_sesit+"&p="+p+"&tipo="+tipo+"&pg="+pag+"&mod="+mod;
}

// Função Link de matérias (fiveedit linha:)
function Url(url, cd_matia, cd_site){
	document.location.href = url+"?cd_matia="+cd_matia+"&cd_site="+cd_site;
}

function url(url){
	document.location.href = url;
}


function escondeAbasGuiaProd(){
	document.getElementById('cromoterapia').style.display = 'none';
	document.getElementById('cores_cor').style.display = 'none';
	document.getElementById('fengshui').style.display = 'none';
	document.getElementById('galeria').style.display = 'none';
	document.getElementById('duvidas').style.display = 'none';
}

function mostraAbasGuiaProd(id){
	document.getElementById('dicas').style.display = 'none';
	document.getElementById('dicas_li').className = '';
	document.getElementById('cromoterapia').style.display = 'none';
	document.getElementById('cromoterapia_li').className = '';
	document.getElementById('cores_cor').style.display = 'none';
	document.getElementById('cores_cor_li').className = '';
	document.getElementById('fengshui').style.display = 'none';
	document.getElementById('fengshui_li').className = '';
	document.getElementById('galeria').style.display = 'none';
	document.getElementById('galeria_li').className = '';
	document.getElementById('duvidas').style.display = 'none';
	document.getElementById('duvidas_li').className = '';
	document.getElementById(id).style.display = '';
	document.getElementById(id+'_li').className = 'ativo';
}

    
function dicasAbas(id){
	if(document.getElementById(id).style.display == 'none'){
		document.getElementById(id).style.display = '';
		document.getElementById(id+"_li").className = 'ativo';
	}else{
		document.getElementById(id).style.display = 'none';
		document.getElementById(id+"_li").className = '';
	}
}

function dicasAbasProd(id){
	if(document.getElementById(id).style.display == 'none'){
		document.getElementById(id+"_corpo").style.display = '';
		document.getElementById(id+"_li").className = 'ativo';
	}else{
		document.getElementById(id+"_corpo").style.display = 'none';
		document.getElementById(id+"_li").className = '';
	}
}

function Dicas(id){
	if(document.getElementById(id).style.display == ""){
		document.getElementById(id).style.display = "none";
		document.getElementById(id+"_tit").className = "barBtn";
	}else{
		document.getElementById(id).style.display = "";
		document.getElementById(id+"_tit").className = "barBtnAtivo";
	}
}

    
function ativaAbaCores(){
	document.getElementById('dicas').style.display = "none";
	document.getElementById('dicas_li').className = "";
	document.getElementById('cores_cor').style.display = "";
	document.getElementById('cores_cor_li').className = "ativo";
}  

    
function mudaAbaFaleConosco(id){
		window.document.getElementById("formContato").style.display = "none";
		window.document.getElementById("formContato_li").className = "";
		window.document.getElementById("formTrabalhe").style.display = "none";
		window.document.getElementById("formTrabalhe_li").className = "";
		window.document.getElementById(id).style.display = "";
		window.document.getElementById(id+"_li").className = "ativo";
} 

    
function abasClasses(id){
	if(document.getElementById(id).style.display == ''){
		document.getElementById(id+"_t").className = 'barBtn';
		document.getElementById(id).style.display = 'none';
	}else{	
		document.getElementById(id+"_t").className = 'barBtnAtivo';
		document.getElementById(id).style.display = '';
	}
} 

function escondeAbas(){
	document.getElementById('produtos_relacionados').style.display = 'none';
	document.getElementById('duvidas_frequentes').style.display = 'none';
	document.getElementById('dicas').style.display = 'none';
	document.getElementById('rendimentos').style.display = 'none';
} 

function Voltar(){
	document.getElementById('matiaProximo_img').src = '/imagens/btn_prod_pro_off.gif';
	document.getElementById('matiaProximo').href = 'javascript:;';
	
}

function Ir(){
	document.getElementById('matiaProximo_img').src = '/imagens/btn_prod_pro.gif';
	document.getElementById('matiaAnterior').href = 'javascript:prodAnt();';
}

function Ir_ant(){
	document.getElementById('matiaAnterior_img').src = '/imagens/btn_prod_ant_off.gif';
	document.getElementById('matiaAnterior').href = 'javascript:;';
	//alert('ok');
}

function Voltar_ant(){
	document.getElementById('matiaAnterior_img').src = '/imagens/btn_prod_ant.gif';
	//document.getElementById('matiaProximo').href = 'javascript:prodProx();';
	
	//alert('ok');
}

function enviarFotos(){
	if(document.getElementById('enviarFotos').style.display == ""){
		document.getElementById('enviarFotos').style.display = "none";
	}else{
		document.getElementById('enviarFotos').style.display = "";
	}
}

function checaContato() {
	
	var msg = "";
	
		if(window.document.getElementById('nome').value == ""){
		msg = msg + " - Informe seu nome;\n";
	}
	
		if(window.document.getElementById('email').value == ""){
		msg = msg + " - Informe seu email;\n";
	}	

		if(window.document.getElementById('endereco').value == ""){
		msg = msg + " - Informe seu endereco;\n";
	}
	
		if(window.document.getElementById('telefone').value == ""){
		msg = msg + " - Informe seu telefone;\n";
	}
	

	if(window.document.getElementById('mensagem').value == ""){
		msg = msg + " - Digite sua mensagem.\n";
	}
	
	
	if(msg){
		alert("Atenção!\n\n" + msg);
		return false;
	}else{
		window.document.getElementById('nome_q').value = escape(window.document.getElementById('nome').value);
		window.document.getElementById('endereco_q').value = escape(window.document.getElementById('endereco').value);
		window.document.getElementById('mensagem_q').value = escape(window.document.getElementById('mensagem').value);
		document.formContato.submit();
	}
}


function checaNewsletter() {
	
	var msg = "";
	
	if((window.document.getElementById('webmail_nome').value == "") || (window.document.getElementById('webmail_nome').value == "nome")){
		msg = "Informe seu nome\n";
	}
	
	if((window.document.getElementById('webmail_email').value == "") || (window.document.getElementById('webmail_email').value == "e-mail")){
		msg = msg + "Informe seu e-mail\n";
	}
	
	
	if(msg){
		alert("Atenção, para receber o newsletter:\n\n" + msg);
		return false;
	}else{
		window.document.getElementById('webmail_nome').value = escape(window.document.getElementById('webmail_nome').value);
		window.document.getElementById('webmail_email').value = escape(window.document.getElementById('webmail_email').value);
		window.document.newsletterForm.submit();
		return true;
	}
}



function checaWebmail() {
	
	var msg = "";
	
	if((window.document.getElementById('webmail_nome').value == "") || (window.document.getElementById('webmail_nome').value == "nome")){
		msg = "Informe seu nome\n";
	}
	
	if((window.document.getElementById('webmail_email').value == "") || (window.document.getElementById('webmail_email').value == "e-mail")){
		msg = msg + "Informe seu e-mail\n";
	}
	
	
	if(msg){
		alert("Atenção, para entrar no webmail:\n\n" + msg);
		return false;
	}else{
		window.document.getElementById('webmail_nome').value = escape(window.document.getElementById('webmail_nome').value);
		window.document.getElementById('webmail_email').value = escape(window.document.getElementById('webmail_email').value);
		window.document.webmailForm.submit();
		return true;
	}
}



function LiberaCampo(valor){
	if(valor == "Sim"){
		document.getElementById('tiposCarteria').style.display = '';
	}else{
		document.getElementById('tiposCarteria').style.display = 'none';
	}
}

//---------------------------- FUNÇÃO FORM AREA RESTRITA E NEWSLETTER-------------------------------------------//
function arearestrita(divAtual) {
    var divs = new Array('AbaAreaRestrita','AbaNewsteller');
    for (div in divs) {
    	document.getElementById(divs[div]).style.display = 'none';
    }	
    document.getElementById(divAtual).style.display = 'block';
}

/*-------------------------- FUNÇÃO AUMENTA FONTE ---------------------------------*/

Comportamento = {
		
	zoomLetra: 
	
		function(classe, tipo){
			
			var tags = Array("p","h1","a","h2","strong","span");
			
			for (tag in tags) {
				size = new String($("."+classe+ " " + tags[tag]).css("font-size"));
				var fonte = size.replace('px', '');
				
				if (fonte == "") {
					fonte = "11";
				}
				
				fonte = parseInt(fonte);
				
				if ((tipo == "+") && (fonte < 16) && (tags[tag] == "p")) {
					fonte += 1;
					$(".Coluna4Texto p").css("font-size",fonte+"px");
					$(".Coluna4Texto p").css("line-height","1.4em");
					$(".Coluna4Texto a").css("font-size",fonte+"px");
					$(".Coluna4Texto a").css("line-height","1.4em");
					$(".Coluna4Texto h1").css("font-size",fonte+"px");
					$(".Coluna4Texto h1").css("line-height","1.4em");
					$(".Coluna4Texto h2").css("font-size",fonte+"px");
					$(".Coluna4Texto h2").css("line-height","1.4em");
					$(".Coluna4Texto strong").css("font-size",fonte+"px");
					$(".Coluna4Texto strong").css("line-height","1.4em");
					
					$(".link p").css("font-size",fonte+"px");
					$(".link p").css("line-height","1.4em");
					$(".link a").css("font-size",fonte+"px");
					$(".link a").css("line-height","1.4em");
					$(".link h1").css("font-size",fonte+"px");
					$(".link h1").css("line-height","1.4em");
					$(".link h2").css("font-size",fonte+"px");
					$(".link h2").css("line-height","1.4em");
					$(".link strong").css("font-size",fonte+"px");
					$(".link strong").css("line-height","1.4em");
				} else if ((tipo == "+") && (fonte < 27) && (tags[tag] != "p")) {
					fonte += 1;
					$(".Coluna4Texto"+tags[tag]).css("font-size",fonte+"px");
					$(".Coluna4Texto"+tags[tag]).css("line-height","1.4em");
					$(".link"+tags[tag]).css("font-size",fonte+"px");
					$(".link"+tags[tag]).css("line-height","1.4em");

				}
				
				if ((tipo == "-") && (fonte > 11) && (tags[tag] == "p")) {
					fonte -= 1;
					$(".Coluna4Texto p").css("font-size",fonte+"px");
					$(".Coluna4Texto p").css("line-height","1.4em");
					$(".Coluna4Texto a").css("font-size",fonte+"px");
					$(".Coluna4Texto a").css("line-height","1.4em");
					$(".Coluna4Texto h1").css("font-size",fonte+"px");
					$(".Coluna4Texto h1").css("line-height","1.4em");
					$(".Coluna4Texto h2").css("font-size",fonte+"px");
					$(".Coluna4Texto h2").css("line-height","1.4em");
					$(".Coluna4Texto strong").css("font-size",fonte+"px");
					$(".Coluna4Texto strong").css("line-height","1.4em");
					
					$(".link p").css("font-size",fonte+"px");
					$(".link p").css("line-height","1.4em");
					$(".link a").css("font-size",fonte+"px");
					$(".link a").css("line-height","1.4em");
					$(".link h1").css("font-size",fonte+"px");
					$(".link h1").css("line-height","1.4em");
					$(".link h2").css("font-size",fonte+"px");
					$(".link h2").css("line-height","1.4em");
					$(".link strong").css("font-size",fonte+"px");
					$(".link strong").css("line-height","1.4em");
				} else if ((tipo == "-") && (fonte > 22) && (tags[tag] != "p")) {
					fonte -= 1;
					$(".Coluna4Texto"+tags[tag]).css("font-size",fonte+"px");
					$(".Coluna4Texto"+tags[tag]).css("line-height","1.4em");
					$(".link"+tags[tag]).css("font-size",fonte+"px");
					$(".link"+tags[tag]).css("line-height","1.4em");
				}
				
			}
	}
	
};


/*------------------------------- GALERIA DE FOTOS --------------------------------------*/
$(document).ready(function() 
{
	$("#galeria").scrollable({ 
		size: 5,
		horizontal: true, 
		activeClass:'gActive', 		 
		items: '.gItems', 
		onSeek: null
	});
	$(".gNext").click(function () { 
		$("#galeria").scrollable("move", 5, 1000); 
	});
	$(".gPrev").click(function () { 
		$("#galeria").scrollable("move", -5, 1000); 
	});
});

/*------------------------------- SUBMENU --------------------------------------*/
function submenu(id){
	if(document.getElementById("info_"+id).style.display == ""){
		elem = $('.areaDesc');
		tam = elem.length;
		while(tam--){ elem[tam].style.display = 'none'; }
		document.getElementById("info_"+id).style.display = "none";
		atual = document.getElementById("info_"+id);
		classe = $('.areaMenos');
		tamClasse = classe.length;
		while(tamClasse--){ classe[tamClasse].className = 'areaMais'; }
		if(document.all){
			atual.previousSibling.previousSibling.className = 'areaMais';
		}else{
			atual.previousSibling.previousSibling.previousSibling.previousSibling.className = 'areaMais';
		}
	}else{
		elem = $('.areaDesc');
		tam = elem.length;
		while(tam--){ elem[tam].style.display = 'none'; }
		document.getElementById("info_"+id).style.display = "";
		atual = document.getElementById("info_"+id);
		classe = $('.areaMenos');
		tamClasse = classe.length;
		while(tamClasse--){ classe[tamClasse].className = 'areaMais'; }
		if(document.all){
			atual.previousSibling.previousSibling.className = 'areaMenos';
		}else{
			atual.previousSibling.previousSibling.previousSibling.previousSibling.className = 'areaMenos';
			//alert(atual.previousSibling.previousSibling.previousSibling.previousSibling.className);
		}
	}
}

/*------------------------------- SUBMENU 2--------------------------------------*/
function submenu2(id){
	if(document.getElementById("info_"+id).style.display == ""){
		elem = $('.areaDesc2');
		tam = elem.length;
		while(tam--){ elem[tam].style.display = 'none'; }
		document.getElementById("info_"+id).style.display = "none";
		atual = document.getElementById("info_"+id);
		classe = $('.areaMenos2');
		tamClasse = classe.length;
		while(tamClasse--){ classe[tamClasse].className = 'areaMais2'; }
		if(document.all){
			atual.previousSibling.previousSibling.className = 'areaMais2';
		}else{
			atual.previousSibling.previousSibling.previousSibling.previousSibling.className = 'areaMais2';
		}
	}else{
		elem = $('.areaDesc2');
		tam = elem.length;
		while(tam--){ elem[tam].style.display = 'none'; }
		document.getElementById("info_"+id).style.display = "";
		atual = document.getElementById("info_"+id);
		classe = $('.areaMenos2');
		tamClasse = classe.length;
		while(tamClasse--){ classe[tamClasse].className = 'areaMais2'; }
		if(document.all){
			atual.previousSibling.previousSibling.className = 'areaMenos2';
		}else{
			atual.previousSibling.previousSibling.previousSibling.previousSibling.className = 'areaMenos2';
			//alert(atual.previousSibling.previousSibling.previousSibling.previousSibling.className);
		}
	}
}

//---------------------------- FUNÇÃO ABRE ABA SIMPLES-------------------------------------------//
function abasimples(id){
	if(document.getElementById("aba_"+id).style.display == ""){
		document.getElementById("aba_"+id).style.display = "none";

	}else{
		document.getElementById("aba_"+id).style.display = "";
	}
}
//---------------------------- FUNÇÃO MOSTRA DIV ATUAL-------------------------------------------//
function mostradiv(divAtual) {
    var divs = new Array('1','2');
    for (div in divs) {
    	document.getElementById(divs[div]).style.display = 'none';
    }	
    document.getElementById(divAtual).style.display = 'block';
}
//---------------------------- FUNÇÃO ABRE DIV NA PÁGINA AREA DE ATUACAO-------------------------------------------//
function area(id){
	if(document.getElementById("info_"+id).style.display == ""){
		document.getElementById("info_"+id).style.display = "none";	
	}else{
		document.getElementById("info_"+id).style.display = "none";
		document.getElementById("info_"+id).style.display = "";	
	}
	
}
