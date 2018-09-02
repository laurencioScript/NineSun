<?php
	$estrelas = $_POST['key'];
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
			
		$txt .="<button class=\"btn btn-warning btn-xs btn_divKeys\" type=\"button\" name=\"$estrelas[$i]\" id=\"btn_$estrelas[$i]\"> $qtd <span class=\"glyphicon glyphicon-remove\">
		</span>";
	};
	
	echo "$txt";	  
?>