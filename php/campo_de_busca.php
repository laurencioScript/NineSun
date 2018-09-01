<?php

include 'db_connection.php';

$keyword = $_POST['keyword'];

$view_search = "SELECT nome FROM hoteis WHERE nome LIKE '$keyword%' UNION SELECT cidade FROM hoteis join cidades ON id_cidade =cidades.id  WHERE cidade Like '$keyword%' LIMIT 5 ;";

$data_reader = mysqli_query($connection,$view_search);

while ($data = mysqli_fetch_row($data_reader)){

$keyword_especial = str_replace(" ","",$data[0]);

echo $data[0] . ";";
  
};	
  

?> 
	 

