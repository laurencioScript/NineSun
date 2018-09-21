<?php 
include '../db_connection.php';
$cidade = $_GET['cidade'];
$classificacao = $_GET['classificacao'];
$acomodidade = $_GET['acomodidade'];
$keyword = $_GET['keyword'];


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
$cont = 0;
while($data = mysqli_fetch_row($datareader)){	
    	$link = $data[3];
    	$link = urlencode($link);
    	$link = str_replace("+","",$link);
<<<<<<< HEAD
    	$cont++;
=======

>>>>>>> fad09dc694cc2c5ba22d76b957c6c46d5fafad08

    	$estrelas = getStar($data[4]);
		$txt =  
		"<div id=\"row_grid\">
<<<<<<< HEAD
                    <div class=\"col-md-12\" id=\"$cont.Grid\">           
=======
                    <div class=\"col-md-12\" id=\"grid\">           
>>>>>>> fad09dc694cc2c5ba22d76b957c6c46d5fafad08
                        <div class=\"col-md-5\" id=\"img\">
                            <img src=\"img/hhhh.jpg\" >
                        </div>
                        <div class=\"col-md-6\" id=\"informacoes\" >
                            <div class=\"row\" id=\"title\" ><h4><i>$data[0]</i></h4></div>
                            <div class=\"row uma_info\"><b>Endereço:</b> $data[1]</div>
                            <div class=\"row uma_info\"> <b>Telefone:</b> $data[2] </div>
                            <div class=\"row uma_info\"><b>Site:</b>
                            <a target=\"_blanck\" href=\"http://$link\" >$data[0] </a>
                            </div>
                            <div class=\"row uma_info\" ><b>Classificação: $estrelas</b></div>
                            <div class=\"row uma_info\" id=\"last_row\">
<<<<<<< HEAD
                                <button type=\"button\" class=\"btn btn-link colo_btn\" id=\"$data[0]\" onclick=\"chamarSubMenu($data[0])\">Mais informações</button>
=======
                                <button type=\"button\" class=\"btn btn-link colo_btn\" id=\"$data[0]\">Mais informações</button>
>>>>>>> fad09dc694cc2c5ba22d76b957c6c46d5fafad08
                            </div>
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
		


