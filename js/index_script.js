function get_value(id){
  return document.querySelector(id).value;
}

function set_value(id,key){
   document.querySelector(id).value = key;
}

function get_textContent(id){
  return document.querySelector(id).textContent;
}

function set_html(id,value){
  document.querySelector(id).innerHTML= value;
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

function sugestao_keywords(value){
	
	$.ajax({
	url: 'php/search_keywords.php',		
	type: 'POST',
	dataType: 'html',
	data:{keyword : value},
	success: function(msg){set_html('#keywords',msg);} 	
});}

//original
function search(id,value){

	$(id).click(function(){
		var dataAtual = new Date();
		setCookie('cidade',value,dataAtual);
		setCookie('keyword',get_textContent(id),dataAtual);
		window.location.href = "search.php?";
	});

}

function pesquisarLink(value){
	search(value,false);
}

search('#btn_bertioga',true);
search('#btn_cubatao',true);
search('#btn_guaruja',true);
search('#btn_itanhaem',true);
search('#btn_mongagua',true);
search('#btn_peruibe',true);
search('#btn_praia',true);
search('#btn_santos',true);
search('#btn_sao',true);

$('#input_key').keypress(function() {

	setTimeout(function(){ 
		var value = get_value("#input_key");
		sugestao_keywords(value);},200); 
});

$('#input_key').keydown(function() {

	setTimeout(function(){ 
		var value = get_value("#input_key");
		limpa_div_keywords(value.length);
		},200); 
});

$('#input_key').focus(function(){
	
	$('#input_key').blur(function(){
	//	set_html('#keywords',"");
	});
});

$('#btn_search').click(function(){
	var value = get_value("#input_key");
	if(verifica_value(value))
		search(value,false);	
	
});