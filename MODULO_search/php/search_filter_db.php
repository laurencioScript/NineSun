<?php 
include 'db_connection.php';
$tipo_search = $_POST['tipo'];
$keyword = $_POST['key'];
$max = sizeof($keyword)-1;

if($tipo_search==1){
	$data_reader = mysqli_query($connection,getQueryKeyword($keyword));
	exibirGrid($data_reader);
}
elseif ($tipo_search==2) {
	if(count($keyword)==1){	
		$keyword_bd = str_replace("_"," ",$keyword[0]);
		$data_reader = mysqli_query($connection,getQueryCity($keyword_bd));
		exibirGrid($data_reader);
		
	}else{
		for ($i = 0; $i <= $max; $i++){
			$keyword_bd = str_replace("_"," ",$keyword[$i]);
			$data_reader = mysqli_query($connection,getQueryCity($keyword_bd));
			exibirGrid($data_reader);}	
	}	
}
elseif ($tipo_search==3) {
	echo"oi3";
}
elseif ($tipo_search==4) {
	echo"oi4";
}

function exibirGrid($value){
	 
    while ($data = mysqli_fetch_row($value)){	
    	
    	$estrelas = getStar($data[5]);
		$txt =  "<div class=\"col-md-8 item_Grid\">
					<div class=\"row\">
						<div id=\"div_img\" class=\"col-md-4\">
							<img src=\"img/no_img.png\" class=\"img-responsive\">		
						</div>

						<div id=\"dados\" class=\"col-md-7\">
							<p class=\"label_NomeHotel\">$data[0]</p>
							<p class=\"labels_Grid\">Endereço: $data[1]</p>
							<p class=\"labels_Grid\">Telefone: $data[2]</p>
							<p class=\"labels_Grid\">Website: $data[3]</p>
							<p class=\"labels_Grid\">Cidade: $data[4]</p>
							<p class=\"labels_Grid\">Classificação: $estrelas </p>	
						</div>
					</div>					
				</div>";
		echo $txt;
	}
}

function getStar($value){
	$estrelas = "";
	if ($value == 0) {
		# code...
	}
	else{
		for ($i=0; $i < $value-1 ; $i++) { 
			$estrelas .= "<span class=\"glyphicon glyphicon-star\"></span>";
		}
	}
	
	return $estrelas;
}
	  
function getQueryCity($value){
	return "SELECT nome,endereco,telefone,website,cidade,classificao FROM hoteis join cidades ON id_cidade = cidades.id WHERE cidade = '$value' ;";
}

function getQueryKeyword($value){
	return "SELECT nome,endereco,telefone,website,cidade,classificao FROM hoteis join cidades ON id_cidade = cidades.id   WHERE cidade = '$value' OR nome = '$value' ;";
}


?>