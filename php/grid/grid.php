<?php 
include '../db_connection.php';
$cidade = $_POST['cidade'];
$classificacao = $_POST['classificacao'];
$acomodidade = $_POST['acomodidade'];
$keyword = $_POST['keyword'];


$query = "SELECT nome,endereco,telefone,website,classificao FROM hoteis join cidades ON id_cidade = cidades.id join servicos ON id_servico = servicos.id WHERE ";

if(count($cidade) > 1){
	$query .= " cidade IN (";
	for ($i = 1; $i < count($cidade); $i++) { 
		$query .= $i > 1 ? ","  : "";
		$query.= "'$cidade[$i]' ";
	};
		$query.= ") ";
};

if(count($classificacao) > 1){
	if(count($cidade) > 1){
		$query.= " AND ";
	}
	$query .= " classificao IN (";
	for ($i = 1; $i < count($classificacao); $i++) { 
		$query .= $i > 1 ? ","  : "";
		$query.= "'$classificacao[$i]' ";
	};
		$query.= ")";
};

if(count($acomodidade) > 1){
	if(count($cidade) > 1){
		$query.= " AND ";
	}
	for ($i = 1; $i < count($acomodidade); $i++) { 
		$query .= ($i > 1) ? " AND" : "";
		$acomodidade[$i] = strtolower($acomodidade[$i]);
		$query.= " $acomodidade[$i] = '1' ";
	};
};

if(count($cidade) > 1 || count($acomodidade) > 1 || count($classificacao) > 1){
$datareader = mysqli_query($connection,$query);

while($data = mysqli_fetch_row($datareader)){	
    	
    	$estrelas = getStar($data[4]);
		$txt =  
		"<div class=\"row\" id=\"row_grid\">
			<div class=\"col-md-12\" id=\"grid\">			
				<div class=\"col-md-5\" id=\"img\">
					<img src=\"img/no_img.png\" >
				</div>
				<div class=\"col-md-6 teste\" id=\"informacoes\" >
					<div class=\"row\" id=\"title\" ><h4><i>$data[0]</i></h4></div>
					<div class=\"row uma_info\"><b>Endereço:</b> $data[1]</div>
					<div class=\"row uma_info\"> <b>Telefone:</b> $data[2] </div>
					<div class=\"row uma_info\"><b>Site: </b><a href=\"$data[3]\">$data[0] </a></div>
					<div class=\"row uma_info\" id=\"last_row\"><b>Classificação: $estrelas</b></div>
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
		for ($i=0; $i < $value ; $i++) { 
			$estrelas .= "<span class=\"glyphicon glyphicon-star\"></span>";
		}
	}
	
	return $estrelas;
}
		


