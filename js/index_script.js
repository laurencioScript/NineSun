// Quando vc clicka no Input
$('#input_key').focus(function(){
	$('#input_key').blur(function(){
		setTimeout(function(){
			set_html('#keywords',"");
		},200);
		
	});
});

//Quando vc pressiona qualquer tecla
$('#input_key').keypress(function() {

	setTimeout(function(){ 
		var value = $("#input_key").val();
		lista_De_Sugestao(value);},200); 
});

//Quando vc pressiona somente letras e numeros
$('#input_key').keydown(function() {

	setTimeout(function(){ 
		var value = $("#input_key").val();
		lista_De_Sugestao(value);
		limpa_div_keywords(value.length);
		},200); 
});


//Quando vc clicka no BTN
$('#btn_search').click(function(){
	var value = $("#input_key").val();
	if(verifica_value(value))
		search(value);	
	
});





