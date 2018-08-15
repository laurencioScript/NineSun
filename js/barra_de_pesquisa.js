function limpa_div_keywords(value){
	if(value =='0')
		$("#keywords").html(function(){return ""});;
}

function search(value){

	var dataAtual = new Date();
	setCookie('keyword',value,dataAtual);
	window.location.href = "search.php";

}

function busca_resultados_antecipado(value){
	if(!value){

	}
	else{
	$.ajax({
	url: 'php/lista_De_Sugestao.php',		
	type: 'POST',
	dataType: 'html',
	data:{keyword : value},
	success: function(msg){ $("#keywords").html(function(){return msg});}});	
	}
	 	
}