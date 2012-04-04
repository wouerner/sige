jQuery(function($){
   $(".data").mask("99/99/9999");
   $(".cpf").mask("999.999.999-99");
   $(".telefone").mask("(99) 9999-9999");
   $("#cep").mask("99999-999");
   $("#data_cadastro").mask("99/99/9999");
   $("#termino_curso").mask("99/99/9999");


});


jQuery.validator.addMethod("verificaCPF", function(value, element) {
	value = value.replace('.','');
	value = value.replace('.','');
	cpf = value.replace('-','');
		while(cpf.length < 11) cpf = "0"+ cpf;
		var expReg = /^0+$|^1+$|^2+$|^3+$|^4+$|^5+$|^6+$|^7+$|^8+$|^9+$/;
		var a = [];
		var b = new Number;
		var c = 11;
		for (i=0; i<11; i++){
			a[i] = cpf.charAt(i);
				if (i < 9) b += (a[i] * --c);
				}
				if ((x = b % 11) < 2) { a[9] = 0 } else { a[9] = 11-x }
					b = 0;
					c = 11;
					for (y=0; y<10; y++) b += (a[y] * c--);
						if ((x = b % 11) < 2) { a[10] = 0; } else { a[10] = 11-x; }
					if ((cpf.charAt(9) != a[9]) || (cpf.charAt(10) != a[10]) || cpf.match(expReg)) return false;
					return true;
}, "Informe um CPF válido."); // Mensagem padrão




$(function(){  

        $("#form_cadastro_aluno").validate( { 
		    rules: {  
				nome_completo:{ required: true, minlength: 2   },
				data_nasc: 'required',
				cpf: {required: true, verificaCPF: true},
				rg: {required:true, minlength: 3	},
				rg_orgao: {required:true, minlength: 3	},
				expedicao: 'required',
				naturalidade: 'required',
		    		email: { 
		       			required: true,  
		    			email: true  
			    		},  
				logradouro: 'required',
				cidade: 'required',
				estado_uf: 'required',
				situacao_aluno: 'required',
				senha: 'required'
			    },  
		    messages: {  
			      nome_completo:{ required :'Falta!', minlength: 'Invalido' },
  			      data_nasc: 'Falta!',
			      cpf: {required:'Falta!', verificaCPF: 'Invalido'},
			      rg: {required: 'Falta!', minlength: 'Invalido'},
			      rg_orgao: {required: 'Falta!', minlength: 'Invalido'},
			      expedicao: 'Falta! ',
			      naturalidade: 'Falta!',
			      estado_uf: 'Falta!',
			      cidade: 'Falta!',
			      logradouro: 'Falta!',
			      senha: 'Falta!',
		      email: {  
		         required: 'Voc&ecirc; precisa preencher um e-mail',  
 	         	 email: 'Endere&ccedil;o de e-mail n&atilde;o v&aacute;lido'  
			         }  
		      }  ,
	submitHandler: function(form) {
			       			$('#enviar').onclick($(this).disable());
			      			form.submit();
					       		}	
		    });  
		      
		    });  


