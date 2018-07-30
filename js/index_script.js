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

$('#input_key').keypress(function() {

	setTimeout(function(){ 
		var value = get_value("#input_key");
		search_keywords(value);},200); 
});

$('#input_key').keydown(function() {

	setTimeout(function(){ 
		var value = get_value("#input_key");
		limpa_div_keywords(value.length);
		},200); 
});

function search_keywords(value){
	
	$.ajax({
	url: 'php/search_keywords.php',		
	type: 'POST',
	dataType: 'html',
	data:{keyword : value},
	success: function(msg){set_html('#keywords',msg);} 	
});}


$('#input_key').focus(function(){
	
	$('#input_key').blur(function(){
		set_html('#keywords',"");});
});

$('#btn_search').click(function(){
	if(verifica_value(get_value("#input_key"))){
		var dataAtual = new Date();
		setCookie('cidade',false,dataAtual);
		setCookie('keyword',get_value('#input_key'),dataAtual);
		window.location.href = "http://localhost/baixada_Hoteis/search.php?";
	}

});

$('#btn_bertioga').click(function(){
	var dataAtual = new Date();
	setCookie('cidade',true,dataAtual);
	setCookie('keyword',get_textContent('#btn_bertioga'),dataAtual);
	window.location.href = "http://localhost/baixada_Hoteis/search.php?";
});

$('#btn_cubatao').click(function(){
	var dataAtual = new Date();
	setCookie('cidade',true,dataAtual);
	setCookie('keyword',get_textContent('#btn_cubatao'),dataAtual);
	window.location.href = "http://localhost/baixada_Hoteis/search.php?";
});

$('#btn_guaruja').click(function(){
	var dataAtual = new Date();
	setCookie('cidade',true,dataAtual);
	setCookie('keyword',get_textContent('#btn_guaruja'),dataAtual);
	window.location.href = "http://localhost/baixada_Hoteis/search.php?";
});

$('#btn_itanhaem').click(function(){
	var dataAtual = new Date();
	setCookie('cidade',true,dataAtual);
	setCookie('keyword',get_textContent('#btn_itanhaem'),dataAtual);
	window.location.href = "http://localhost/baixada_Hoteis/search.php?";
});

$('#btn_mongagua').click(function(){
	var dataAtual = new Date();
	setCookie('cidade',true,dataAtual);
	setCookie('keyword',get_textContent('#btn_mongagua'),dataAtual);
	window.location.href = "http://localhost/baixada_Hoteis/search.php?";
});

$('#btn_peruibe').click(function(){
	var dataAtual = new Date();
	setCookie('cidade',true,dataAtual);
	setCookie('keyword',get_textContent('#btn_peruibe'),dataAtual);
	window.location.href = "http://localhost/baixada_Hoteis/search.php?";
});

$('#btn_praia').click(function(){
	var dataAtual = new Date();
	setCookie('cidade',true,dataAtual);
	setCookie('keyword',get_textContent('#btn_praia'),dataAtual);
	window.location.href = "http://localhost/baixada_Hoteis/search.php?";
});

$('#btn_santos').click(function(){
	var dataAtual = new Date();
	setCookie('cidade',true,dataAtual);
	setCookie('keyword',get_textContent('#btn_santos'),dataAtual);
	window.location.href = "http://localhost/baixada_Hoteis/search.php?";
});

$('#btn_sao').click(function(){
	var dataAtual = new Date();
	setCookie('cidade',true,dataAtual);
	setCookie('keyword',get_textContent('#btn_sao'),dataAtual);
	window.location.href = "http://localhost/baixada_Hoteis/search.php?";
});
