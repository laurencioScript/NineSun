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
    while ($data = mysqli_fetch_row($value))
    {
		$txt =  "<div class=\"col-md-7 item_Grid\" >
					<div class=\"col-md-3\">
						<img src=\"img/no_img.png\" class=\"img-responsive img_Grid\">		
					</div>
					<div id=\"info\" class=\"col-md-6\">
						<h3><p class=\"label_NomeHotel\">$data[0] </p></h3>
						<p class=\"labels_Grid\">Endereço: $data[1]</p>
						<p class=\"labels_Grid\">Telefone:$data[2]</p>
						<p class=\"labels_Grid\">Website:$data[3]</p>						
					</div>	
				</div>";
		echo $txt;
	}
}
	  
function getQueryCity($value){
	return "SELECT nome,endereco,telefone,website,cidade FROM hoteis join cidades ON id_cidade = cidades.id WHERE cidade = '$value' ;";
}

function getQueryKeyword($value){
	return "SELECT nome,endereco,telefone,website,cidade FROM hoteis join cidades ON id_cidade = cidades.id   WHERE cidade = '$value' OR nome = '$value' ;";
}


?>