<?php 
$keyword = $_POST['key'];
$array = is_array($keyword);
$txt ="";	
$max = sizeof($keyword)-1;

if($array==false){
	echo "<button 
				class=\"btn btn-warning btn-xs btn_divKeys\" 
				type=\"button\" 
				name=\"$keyword\" 
				onclick=\"autoDelete('keys_city','#btn_$keyword')\" 
				id=\"btn_$keyword\">
				$keyword
				<span class=\"glyphicon glyphicon-remove\">
				</span>
			</button>";

}
else{
for ($i = 0; $i <= $max; $i++) {
					
	$txt .="<button 
				class=\"btn btn-warning btn-xs btn_divKeys\" 
				type=\"button\" 
				name=\"$keyword[$i]\" 
				onclick=\"autoDelete('keys_city','#btn_$keyword[$i]')\" 
				id=\"btn_$keyword[$i]\">
				$keyword[$i]
				<span class=\"glyphicon glyphicon-remove\">
				</span>
			</button>";
	};
	
	echo "$txt";	  
}
?>