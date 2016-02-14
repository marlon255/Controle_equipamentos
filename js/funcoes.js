//Função exibe Página
function exibePagina(pagServidor,idObjeto)
{

	xmlhttp = criaXMLHTTP();
	
	obj = document.getElementById(idObjeto);
	
		
	obj.style.display = 'block';
	
	xmlhttp.open('POST',pagServidor,true);
	
	xmlhttp.onreadystatechange = function()
	{
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			obj.innerHTML = xmlhttp.responseText;
		}
		
		if(xmlhttp.status == 404)
		{
			alert('Erro: '+xmlhttp.status+'\nO arquivo não pôde ser encontrado');	
		}
	}
	
	xmlhttp.send(null);
}//FIM função exibe Página




//Função monta string do formulário para validação
function montarString(objetoForm)
{
	var objForm = document.getElementById(objetoForm);
	aValida = document.getElementById("areaValida");
	
	
	var str = '';
	
	var submete = true;
	//loop que percorre todos os elementos do formulário objForm
	for(i = 0; i < objForm.elements.length; i++)
	{
		//verifica se existe campo em branco
		if(submete == true)
		{
			//se existir campos em branco
			valor = objForm.elements[i].value;		

			if(valor == '' && objForm.elements[i].alt != 'branco')
			{	
				aValida.style.display = 'block';
			
				aValida.innerHTML = "O campo <span style='color:#ff9900'>"+objForm.elements[i].title+"</span> está em branco!";
				objForm.elements[i].focus();
				submete = false;
			}
			else
			{				
				//verifica se o campo é do tipo 'radio', se for, pega apenas o campo marcado (checked) como 'true' 
				if(objForm.elements[i].type == 'radio')
				{
					if(objForm.elements[i].checked == true)
					{
						valorElemento = escape(objForm.elements[i].value);	
					}
				}
				else
				{
					valorElemento = escape(objForm.elements[i].value);
					valorElemento = valorElemento.replace(/\%0D\%0A/g,"");
					valorElemento = valorElemento.replace(/\%u201C/g,"'");
					valorElemento = valorElemento.replace(/\%u201D/g,"'");	
				}
				
				str += objForm.elements[i].name+"="+valorElemento+"&";
			}//fim se existir campos em branco
		}//FIM verifica se existe campo em branco
	}//FIM loop que percorre todos os elementos do formulário objForm
	
	//se existe algum campo em branco a variável submete estará com o valor 'false'
	if(submete == false)
	{
		return false;	
	}
	else
	{
		aValida.style.display = 'none'; //oculta a DIV de resposta de validação
		return str; //returna os dados do formulário para a chamada da função
	}//FIM se existe algum campo em branco a variável submete estará com o valor 'false'
	
}//Fim função monta string do formulário



function cadastrarDados(pagServidor, objForm, objetoJanela, atualizar, pagAtualizar, objAtualizar)
{	
	
	xmlhttp = criaXMLHTTP();
	

	/* Monta elementos do formulário e faz a validação */
	var str = montarString(objForm);
		
	var obj = document.getElementById(objetoJanela);
	if(str != false)
	{
		obj.style.position = 'relative';
		obj.style.top = '0px';
		obj.style.left = '0px';
		obj.style.display = 'block';
	}
	
	xmlhttp.open("POST",pagServidor,true);
	xmlhttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded; charset=iso-8859-1");
	xmlhttp.onreadystatechange = function()
	{
		if(xmlhttp.readyState == 1)
		{
			obj.innerHTML = "Processando... ";	
		}
		
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			obj.innerHTML = xmlhttp.responseText;
			//atualiza lista de administradores
			if(atualizar == 'sim')
			{
		 		exibePagina(pagAtualizar,objAtualizar);
			}//FIM atualiza lista de administradores
		}
	}
	
	
	if(str != false)
	{
		xmlhttp.send(str);	
	}

}//FIM função cadastrar no banco







//Função APAGA REGISTROS
/*
Explicação dos argumentos:
e 			-> evento do mouse
pagServidor -> página que será carregada na DIV do argumento 'objeto'
objeto		-> trata-se da DIV onde será carregada a página que está em 'pagServidor'
mover 		-> especifica se quer que a DIV 'areaComandos' abra onde clicar ou não
atualiza 	-> argumento que especifica se quer atualizar a DIV de registros ou não
pagAtualiza -> especifica qual DIV de lista deve ser atualizada
objAtualiza -> trata-se da DIV onde será recarregada para mostrar as alterações
*/
function apagaRegistro(e,pagServidor,objeto,mover,atualiza,pagAtualizar,objAtualiza)
{
	xmlhttp = criaXMLHTTP();
	obj = document.getElementById(objeto);
	
	obj.style.display = 'block';
		
	if(mover == 'moverSIM')
	{
		
		//PEGA RESOLUÇÃO
		/*var ie = /msie/i.test(navigator.userAgent);
     	var ieBox = ie && (document.compatMode == null || document.compatMode == "BackCompat");
		var canvasEl = ieBox ? document.body : document.documentElement;
		var w = window.innerWidth || canvasEl.clientWidth;
		var h = window.innerHeight || canvasEl.clientHeight;*/
		//FIM PEGA RESOLUÇÃO
		
		obj3 = document.getElementById("areaComandos");
		var posx = 0;
		var posy = 0;
		posx = e.clientX+document.documentElement.scrollLeft;
		posy = e.clientY+document.documentElement.scrollTop;
		obj3.style.position = 'absolute';

		//obj3.style.width = w/2 + "px";
		//obj3.style.height = h/2-250 + "px";
		obj3.style.left = posx+(-480)+"px";
		obj3.style.top = posy+(-100)+"px";
	}
	
	xmlhttp.open('POST',pagServidor,true);
	xmlhttp.onreadystatechange = function()
	{
		if(xmlhttp.readyState == 1)
		{
			obj.innerHTML = "carregando... ";	
		}
		
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			obj.innerHTML = xmlhttp.responseText;
			if(atualiza == 'sim')
			{
				exibePagina(pagAtualizar,objAtualiza); //atualiza a lista de registros
				document.getElementById("areaValida").style.display = 'none';
			}
		}
	}
	
	xmlhttp.send(null);
}//FIM função APAGA REGISTROS



//Função fechaPagina
function fechaPagina(objeto)
{
	obj = document.getElementById(objeto);
	obj.style.display = 'none';
}//FIM Função fechaPagina