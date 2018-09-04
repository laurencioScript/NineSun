<?php 
include 'db_connection.php';
$keyword = $_POST['key'];
$max = sizeof($keyword)-1;

$query = "SELECT nome,endereco,telefone,website,classificao FROM hoteis join cidades ON id_cidade = cidades.id WHERE cidade = '$keyword' OR nome = '$keyword' ;"

$data_reader = mysqli_query($connection,$query));

	while ($data = mysqli_fetch_row($value)){	
    	
    	$estrelas = getStar($data[5]);

		$txt =  "<div class="row">
			<div class=\"col-md-offset-3 col-md-5\" id=\"grid\">			
				<div class=\"col-md-5\" id=\"img\">
					<img src=\"img/no_img.png\" >
				</div>
				<div class=\"col-md-6\" id=\"informacoes\" >
					<div class=\"row\" id=\"title\" ><h3><i>$data[0]</i></h3></div>
					<div class=\"row uma_info\"><b>Endereço:</b> $data[1]</div>
					<div class=\"row uma_info\"> <b>Telefone:</b> $data[2] </div>
					<div class=\"row uma_info\"><b>Site: </b><a>$data[3]</a></div>
					<div class=\"row uma_info\" id=\"last_row\"><b>Classficação: $estrelas</b> 5 estrelas</div>
				</div>
			</div>	
		</div>";
		echo $txt;
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
		



<style type="text/css">
#grid{border:1px solid; height: 250px; margin-top: 100px;
border:1px solid #b3b3b3; background-color:#DCDCDC ;}
#img{ margin-top:15px;}
#informacoes{
	margin-top:15px; 
	margin-left: 15px; 
	background-color:#DCDCDC;
	border: 2px solid #b3b3b3;
	border-radius: 15px; }
#title{text-align: center;}
#last_row{padding-bottom: 15px;}
.uma_info{padding-left: 20px; padding-top: 5px; padding-bottom: 5px;}
img{
height: 214px;
width: 230px;
border: 2px solid #b3b3b3;
border-radius: 20px;}
</style>	

</body>
</html>