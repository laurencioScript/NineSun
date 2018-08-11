function get_textContent(id){
  
  return $(id).text();

}

function limpa_div_keywords(value){
	if(value=='0')
		document.querySelector('#keywords').innerHTML= "";
}

function verifica_value(value){
	if(value.length>0)
		return true;
	return false;
}

function search(value){

	var dataAtual = new Date();
	setCookie('keyword',value,dataAtual);
	window.location.href = "search.php";

}

function lista_De_Sugestao(value){
	
	$.ajax({
	url: 'php/lista_De_Sugestao.php',		
	type: 'POST',
	dataType: 'html',
	data:{keyword : value},
	success: function(msg){ $("#keywords").html(function(){return msg});} 	
});}