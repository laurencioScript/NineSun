<?php 
$keyword = $_POST['key'];
$name = $keyword;
$keyword_especial = $keyword;

while (strstr($keyword, '_') != false) {
	 $keyword_especial = str_replace("_"," ",$keyword);
}

while (strstr($name, ' ') != false) {
	 $name = str_replace(" ","_",$name);
	 $name = strtolower($name);
}




echo "<button 
		class=\"btn btn-warning btn-xs btn_divKeys\" 
		type=\"button\" 
		name=\"$name\" 
		id=\"btn_$keyword\">
		$keyword_especial
		<span class=\"glyphicon glyphicon-remove\">
		</span>
	</button>";


?>