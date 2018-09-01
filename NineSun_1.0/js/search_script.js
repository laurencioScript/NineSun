//AJAX

//Parametro: Path qual arquivo php usar e o Valor do cookie 
//função executa uma chamada ajax para adicionar uma key na div de keys_city
function add_keyCity(path,value){
		$.ajax({
			url: 'php/'+path,		
			type: 'POST',
			dataType: 'html',
			data:{key : value},
			success: function(msg){
				$("#keys_city").html(function(){return msg});
				
				$("#keys_city").ready(function(){
					searchDataBase(2);
				});
			} 	
});}

//faz uma chamada via ajax atualizando a div 'keyword' adicionando o Value digitado
function add_keyInput(value){
		$.ajax({
			url: 'php/div_keyword.php',		
			type: 'POST',
			dataType: 'html',
			data:{key : value},
			success: function(msg){ $("#keyword").html(function(){return msg});} 	
});}

// Passa os valores a serem atualizandos na div de Classificação
function add_keyClassificacao(value){
	$.ajax({
		url: 'php/btn_classificacao.php',		
		type: 'POST',
		dataType: 'html',
		data:{estrelas : value},
		success: function(msg){
			$("#keys_class").html(function(){return msg});
		}})}

function add_keyAcomidade(value){
	$.ajax({
		url: 'php/btn_acomidade.php',		
		type: 'POST',
		dataType: 'html',
		data:{acomidades : value},
		success: function(msg){
			$("#keys_acomodidades").html(function(){return msg});
		}})}			

//================================================================================

// Funções de Utilidades == codigo que se repetem

// Se o valor da Label for o mesmo que o Keyword ira acessar o Input e add o Value
function comparar_CheckBox(input,keyword){
	if($(input).val() == keyword)
		return true
	return false	
};

// Atraves do Id add a propriedade checked o value (true || false)
function set_CheckBox(id,value){
	document.querySelector(id).checked = value;
};

// Analisa-se o checkBox passado atraves da ID foi selecionado returnando true
function get_CheckBox(id){
	
	var checkBox = document.querySelector(id).checked;
	if(checkBox)
		return true
	return false
};

// Paramentro passado, um array que contenha as IDs dos checkBox
// Return os checkBoxs que foram selecionados
function get_Value_CheckBoxs(array){
	var inputs = array;
	var inputs_value = [];
	
	for (var i = 0; i <= (inputs.length)-1; i++) {
		
		var input = inputs[i];
		if(get_CheckBox(input)){
			inputs_value.push($(input).val());
		}
	}

	return inputs_value;
}

//================================================================================

//recebe o valor do cookie e passa para a função correta
function analzye_Cookie(keyword){
	if(keyword){
	$("#input_key").val(keyword);  
	add_keyInput(keyword);
	searchDataBase(1);
	deleteCookie("keyword");
	
	}

};

//
function add_Value_CheckBox_City(keyword,value){
	
	if(comparar_CheckBox("#ipt_bertioga",keyword))
		set_CheckBox("#ipt_bertioga",value);
	if(comparar_CheckBox("#ipt_cubatao",keyword)==true)
		set_CheckBox("#ipt_cubatao",value);
	if(comparar_CheckBox("#ipt_guaruja",keyword)==true)
		set_CheckBox("#ipt_guaruja",value);
	if(comparar_CheckBox("#ipt_itanhaem",keyword)==true)
		set_CheckBox("#ipt_itanhaem",value);
	if(comparar_CheckBox("#ipt_mongagua",keyword)==true)
		set_CheckBox("#ipt_mongagua",value);
	if(comparar_CheckBox("#ipt_peruibe",keyword)==true)
		set_CheckBox("#ipt_peruibe",value);
	if(comparar_CheckBox("#ipt_praia",keyword)==true)
		set_CheckBox("#ipt_praia",value);
	if(comparar_CheckBox("#ipt_santos",keyword)==true)
		set_CheckBox("#ipt_santos",value);
	if(comparar_CheckBox("#ipt_sao",keyword)==true)
		set_CheckBox("#ipt_sao",value);		
};

function add_Value_CheckBox_Classificacao(keyword,value){
	
	if(comparar_CheckBox("#cinco_estrelas",keyword)==true)
		set_CheckBox("#cinco_estrelas",value);
	if(comparar_CheckBox("#quatro_estrelas",keyword)==true)
		set_CheckBox("#quatro_estrelas",value);
	if(comparar_CheckBox("#tres_estrelas",keyword)==true)
		set_CheckBox("#tres_estrelas",value);
	if(comparar_CheckBox("#duas_estrelas",keyword)==true)
		set_CheckBox("#duas_estrelas",value);
	if(comparar_CheckBox("#uma_estrela",keyword)==true)
		set_CheckBox("#uma_estrela",value);
};

function add_Value_CheckBox_Acomidade(keyword,value){

	if(comparar_CheckBox("#ipt_WifinosQuartos",keyword)==true)
		set_CheckBox("#ipt_WifinosQuartos",value);
	if(comparar_CheckBox("#ipt_WifinoLobby",keyword)==true)
		set_CheckBox("#ipt_WifinoLobby",value);
	if(comparar_CheckBox("#ipt_Piscina",keyword)==true)
		set_CheckBox("#ipt_Piscina",value);
	if(comparar_CheckBox("#ipt_Estacionamento",keyword)==true)
		set_CheckBox("#ipt_Estacionamento",value);
	if(comparar_CheckBox("#ipt_Academia",keyword)==true)
		set_CheckBox("#ipt_Academia",value);
	if(comparar_CheckBox("#ipt_Spa",keyword)==true)
		set_CheckBox("#ipt_Spa",value);
	if(comparar_CheckBox("#ipt_BarnoHotel",keyword)==true)
		set_CheckBox("#ipt_BarnoHotel",value);
	if(comparar_CheckBox("#ipt_Restaurante",keyword)==true)
		set_CheckBox("#ipt_Restaurante",value);
	if(comparar_CheckBox("#ipt_PetPermitido",keyword)==true)
		set_CheckBox("#ipt_PetPermitido",value);
};		

/* Se no minimo uma checkBox possuir valor 
a div City tera o value da checkBox, se não deixei a div City vazia*/
//Adiciona valor a div keys_city 
function add_Value_Div_City(){
	
	var inputs = ['#ipt_bertioga','#ipt_cubatao','#ipt_guaruja','#ipt_itanhaem','#ipt_mongagua'
					,'#ipt_peruibe','#ipt_praia','#ipt_santos','#ipt_sao'];
	
	var inputs_value = get_Value_CheckBoxs(inputs);

	if(inputs_value.length > 0)
		add_keyCity('btn_city.php',inputs_value);
	else
		 $('#keys_city').html(function(){return ""});
};

function add_Value_Div_Classificao(){
	
	var inputs = ['#cinco_estrelas','#quatro_estrelas','#tres_estrelas','#duas_estrelas','#uma_estrela']
	var inputs_value = get_Value_CheckBoxs(inputs);
	
	if(inputs_value.length>0)
		add_keyClassificacao(inputs_value);
	else
		$('#keys_class').html(function(){return ""});
};

function add_Value_Div_Acomidades(){
	
	var inputs = ['#ipt_WifinosQuartos','#ipt_WifinoLobby','#ipt_Piscina','#ipt_Estacionamento',
	'#ipt_Academia','#ipt_Spa','#ipt_BarnoHotel','#ipt_Restaurante','#ipt_PetPermitido'];
	
	var inputs_value = get_Value_CheckBoxs(inputs);
	
	if(inputs_value.length>0)
		add_keyAcomidade(inputs_value);
	else
		$('#keys_acomodidades').html(function(){return ""});
};

$(document).ready(function(){
	
	$('#btn_confirm_city').click(function(){	
		add_Value_Div_City();	
	});

	$('#btn_confirm_class').click(function(){
		add_Value_Div_Classificao();
	});
	$('#btn_confirm_acomidades').click(function(){
		add_Value_Div_Acomidades();
	});

	var keyword = getCookie('keyword');
	
	analzye_Cookie(keyword);
	
})

function autoDelete(local,id){
	
	var btn_name = document.querySelector(id).name;
	
	document.querySelector(id).remove();

	if(local=='keyword')
		$('#input_key').val("");
	if(local=='keys_city')
		add_Value_CheckBox_City(btn_name,false);		
	if(local=='keys_class')
		add_Value_CheckBox_Classificacao(btn_name,false)
	if(local=='keys_acomodidades')
		add_Value_CheckBox_Acomidade(btn_name,false)
		
}

function searchDataBase(value){
	var colecao;

	if(value==1){
		colecao = getCookie('keyword');
	}
	else if(value==2){
		colecao = document.getElementById("keys_city");
	}
	else if(value==3){
		colecao = document.getElementById("keys_class");
	}
	else if(value==4){
		colecao = document.getElementById("keys_acomodidades");
	}
	
	if(value!=1){
		colecao = returnColecao(colecao);
	}
	console.log(colecao)
	$.ajax({
		url: 'php/search_filter_db.php',		
		type: 'POST',
		dataType: 'html',
		data:{key : colecao,
			  tipo: value},
		success: function(msg){
			$('#coluna_grid').html(function(){return ""});
			$('#coluna_grid').html(function(){return msg});} 	
	});
}

function returnColecao(value){
	var x = value.children.length;
	x--;
	var colecao = [];
	for (var i = 0; i <= x; i++) {
		var palavra = value.children[i];
		palavra = palavra.name;
		colecao.push(palavra);
	}
	return colecao;
}

