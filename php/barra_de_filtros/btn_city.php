<?php 
$keyword = $_POST['key'];
$array = is_array($keyword);
$txt ="";	
$max = sizeof($keyword)-1;

echo "<button 
		class=\"btn btn-warning btn-xs btn_divKeys\" 
		type=\"button\" 
		name=\"$keyword\" 
		id=\"btn_$keyword\">
		$keyword
		<span class=\"glyphicon glyphicon-remove\">
		</span>
	</button>";


?>