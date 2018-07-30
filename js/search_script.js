var cidade = getCookie('cidade');
var keyword = getCookie('keyword');

cookieVive(keyword);
//pega o valor do cookie e passa para outra fun correta
function cookieVive(keyword){
	if(!cidade){
		set_value('#input_key',keyword);
		search_key(keyword);
	}
	else{
		set_value('#input_key',keyword);
		search_key_city(keyword);
		check_citys(keyword);	
	}
};

//faz uma chamada via ajax atualizando a div acrescentando a keyword digitada
function search_key(value){
		$.ajax({
			url: 'php/div_keyword.php',		
			type: 'POST',
			dataType: 'html',
			data:{key : value},
			success: function(msg){document.querySelector('#keyword').innerHTML = msg;
			console.log()} 	
});}

function setCheck(id,value){
	document.querySelector(id).checked=value;
}

function check_id(label,keyword,input,value){
	if(get_textContent(label)==keyword){
		setCheck(input,value)
	}	
}

function check_citys(value){

	check_id("#lbl_bertioga",value,"#ipt_bertioga",true);
	check_id("#lbl_cubatao",value,"#ipt_cubatao",true);
	check_id("#lbl_guaruja",value,"#ipt_guaruja",true);
	check_id("#lbl_itanhaem",value,"#ipt_itanhaem",true);
	check_id("#lbl_mongagua",value,"#ipt_mongagua",true);
	check_id("#lbl_peruibe",value,"#ipt_peruibe",true);
	check_id("#lbl_praia",value,"#ipt_praia",true);
	check_id("#lbl_santos",value,"#ipt_santos",true);
	check_id("#lbl_sao",value,"#ipt_sao",true);
			

};

//faz uma chamada via ajax atualizando a div acrescentado a cidade escolhida
function search_key_city(value){
		$.ajax({
			url: 'php/div_keyword.php',		
			type: 'POST',
			dataType: 'html',
			data:{key : value},
			success: function(msg){document.querySelector('#keys_city').innerHTML = msg;
			console.log()} 	
});}

function filter_class(){
	var keys = ['#cinco_estrelas','#quatro_estrelas','#tres_estrelas','#duas_estrelas','#uma_estrela']
	var key_value = [];
	for (var i = 0; i <= 4; i++) {
		var key = keys[i];
		if(filter_classificacao(key)){
			key_value.push(document.querySelector(key).value);
		}
	}
	search_key_classificacao(key_value);

};

//filtra se o campo foi escolhido
function filter_classificacao(value){
	
	var estrelas = document.querySelector(value).checked;
	if(estrelas)
		return true
	return false
}

//faz uma chamada via ajax atualizando a div acrescentado a classificação escolhida
function search_key_classificacao(value){
	$.ajax({
		url: 'php/search_classificacao.php',		
		type: 'POST',
		dataType: 'html',
		data:{estrelas : value},
		success: function(msg){document.querySelector('#keys_class').innerHTML = msg;} 	
	});}






