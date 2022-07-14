function enviar(formDados) {
	console.log(formDados.nome);
	if (formDados.nome.value == "") {
		alert("Digite um valor para o campo \"Nome\".");
		formDados.nome.focus();
		return false;
	}
	if (formDados.telefone.value == "") {
		alert("Digite um valor para o campo \"Telefone\".");
		formDados.telefone.focus();
		return false;
	}else{
		if (isNaN(parseFloat(formDados.telefone.value))) 
		{
					alert("Digite somente numeros neste campo \"Telefone\".");
					formDados.telefone.focus();
					return false;
		}
	}
	if (formDados.cidade.value == "") {
		alert("Digite um valor para o campo \"Cidade\".");
		formDados.cidade.focus();
		return false;
	}
	var pag = false;
	for (var i = 0; i < formDados.formadepag.length; i++) {
		if (formDados.formadepag[i].checked) pag = true;
	}
	if (!pag) {
		alert("O campo \"Forma de Pagamento\" não está selecionado!\n\nPor favor selecione um item no campo.")
		formDados.formadepag[0].focus();
		return false;
	}
	else if (!formDados.concordo.checked) {
		alert("O campo \"Concordo com o site\" não está selecionado!\n\nEste campo deve ser selecionado")
		formDados.concordo.focus();
		return false;
	}
	return true;
	
}
 