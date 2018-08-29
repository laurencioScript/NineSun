<?php 

$keyword = $_POST['key'];

$keyword_especial = str_replace(" ","",$keyword);

echo "<button class=\"btn btn-warning btn-xs btn_divKeys\"
				type=\"button\"  
			  name=\"$keyword_especial\" 
			  onclick=\"autoDelete('keyword','#btn_$keyword_especial')\"  
			  id=\"btn_$keyword_especial\"> $keyword
			  <span class=\"glyphicon glyphicon-remove\">
				</span>";

?>