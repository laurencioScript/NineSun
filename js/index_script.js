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
	if(!value){}		
	else{
	$.ajax({
	url: 'php/busca_resultados_antecipado.php',		
	type: 'POST',
	dataType: 'html',
	data:{keyword : value},
	success: function(msg){ $("#keywords").html(function(){return msg});}});	
	}	 	
}

$('#input_key').focus(function(){

	$('#input_key').blur(function(){

		setTimeout(function(){
			$("#keywords").html(function(){return ""})
		},200);
		
	});
});

$('#input_key').keypress(function() {

	setTimeout(function(){ 
		busca_resultados_antecipado($("#input_key").val());},200); 
});

$('#input_key').keydown(function() {

	setTimeout(function(){ 
		busca_resultados_antecipado($("#input_key").val()); 
		limpa_div_keywords($("#input_key").val().length);
	},200); 
});

$('#btn_search').click(function(){

	var value = $("#input_key").val();
	if(value.length > 0)
		search(value);	
});

$('#btn_fale_conosco').click(function(){	

	window.location.href = "fale_conosco.php";
});

$('#btn_contato').click(function(){	

	window.location.href = "contato.php";
});

$('#btn_duvidas').click(function(){	

	window.location.href = "duvidas.php";
});


/*
$('#btn_sobre').click(function(){	
	window.location.href = "sobre.php";
});

*/

