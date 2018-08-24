<?php
	$estrelas = $_POST['estrelas'];
	$qtd = "";
	$txt ="";
	$max = sizeof($estrelas)-1;
	for ($i = 0; $i <= $max; $i++) {
		
		if($estrelas[$i]=='1'){
			$qtd = "<span class=\"glyphicon glyphicon-star\"></span>";};
		if($estrelas[$i]=='2'){
			$qtd = "<span class=\"glyphicon glyphicon-star\"></span><span class=\"glyphicon glyphicon-star\"></span>";};
		if($estrelas[$i]=='3'){
			$qtd = "<span class=\"glyphicon glyphicon-star\"></span><span class=\"glyphicon glyphicon-star\"></span><span class=\"glyphicon glyphicon-star\"></span>";};
		if($estrelas[$i]=='4'){
			$qtd = "<span class=\"glyphicon glyphicon-star\"></span><span class=\"glyphicon glyphicon-star\"></span><span class=\"glyphicon glyphicon-star\"></span><span class=\"glyphicon glyphicon-star\"></span>";};
		if($estrelas[$i]=='5'){
			$qtd = "<span class=\"glyphicon glyphicon-star\"></span><span class=\"glyphicon glyphicon-star\"></span><span class=\"glyphicon glyphicon-star\"></span><span class=\"glyphicon glyphicon-star\"></span><span class=\"glyphicon glyphicon-star\"></span>";};
			
		$txt .="<button class=\"btn btn-warning btn-xs btn_divKeys\" type=\"button\" name=\"$estrelas[$i]\" onclick=\"autoDelete('keys_class','#btn_$estrelas[$i]')\" id=\"btn_$estrelas[$i]\"> $qtd <span class=\"badge\">x</span></button>";
	};
	
	echo "$txt";	  
?>