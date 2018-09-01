$('#input').keypress(function() {
	setTimeout(function(){ 
		campoDeBusca($("#input").val());},200); 
});

$('#input').keydown(function() {

	setTimeout(function(){ 
		campoDeBusca($("#input").val());},200); 
});

$('#btn_search').click(function(){
	var value = $("#input").val();
	if(value.length > 0)
		window.location.href = "search.php?tmpString="+value;	
});

function campoDeBusca(value){
	if(value){
		$.ajax({
	url: 'php/campo_de_busca.php',		
	type: 'POST',
	dataType: 'html',
	data:{keyword : value},
	success: function(msg){ 
		let palavras = msg.split(';');
		$("#input").autocomplete({
    	source: palavras }); 
		}});	
	}; 	
}
