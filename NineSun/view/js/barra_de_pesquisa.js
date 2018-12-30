function campoDeBusca(value){
	if(value){
		$.ajax({
			url: '../controller/campo_de_busca.php',
			type: 'POST',
			dataType: 'html',
			data:{keyword : value},
			success: function(msg){ 
				let palavras = msg.split(';');
				$("#input").autocomplete({source: palavras }); 
		}});	
	
	}//endif 	
}

$('#input').keypress(function() {
	setTimeout(function(){
		campoDeBusca($("#input").val())
	},200);
	;
});

$('#input').keydown(function() {
	setTimeout(function(){
		campoDeBusca($("#input").val());
	},200)
});



