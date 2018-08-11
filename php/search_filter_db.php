<?php 

include 'db_connection.php';

$keyword = $_POST['key'];
$array = is_array($keyword);
$txt ="";	
$max = sizeof($keyword)-1;

//print_r($keyword);
$view_search = "SELECT nome,endereco,telefone,website,cidade FROM hoteis  
join cidades ON id_cidade = cidades.id where cidade = '$keyword[0]' ;";



$data_reader = mysqli_query($connection,$view_search);

while ($data = mysqli_fetch_row($data_reader)) {

  	$txt =  "<div class=\"col-md-2 item_Grid\" >
					<img src=\"img/no_img.png\" class=\"img-responsive img_Grid\">		
					<p class=\"label_NomeHotel\">$data[0]</p>
					<p class=\"labels_Grid\">Endereço: $data[1]</p>
					<p class=\"labels_Grid\">Telefone:$data[2]</p>
					<p class=\"labels_Grid\">Website:$data[3]</p>	
				</div>";
	echo $txt;			
	};

	
/*
if($array==false){
	

}
else{

for ($i = 0; $i <= $max; $i++) {

	while ($data = mysqli_fetch_row($data_reader)) {

  		echo "<div class=\"col-md-2 item_Grid\" >
					<img src=\"img/no_img.png\" class=\"img-responsive img_Grid\">					
					<p class=\"label_NomeHotel\">Nome do Hotel</p>
					<p class=\"labels_Grid\">Endereço: </p>
					<p class=\"labels_Grid\">Telefone:</p>
					<p class=\"labels_Grid\">Email: </p>	
				</div>";
	}
}	  
*/
?>