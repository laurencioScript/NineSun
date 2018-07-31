<?php 
$keyword = $_POST['acomidades'];
$array = is_array($keyword);
$txt ="";	
$max = sizeof($keyword)-1;

if($array==false){
	$keyword_especial = str_replace(" ","",$keyword);
	echo "<button 
				class=\"btn btn-primary btn-xs btn_divKeys\" 
				type=\"button\" 
				name=\"$keyword\" 
				onclick=\"autoDelete('keys_acomodidades','#btn_$keyword_especial')\" 
				id=\"btn_$keyword\">
				$keyword
				<span class=\"glyphicon glyphicon-remove\">
				</span>
			</button>";

}
else{
for ($i = 0; $i <= $max; $i++) {
	$keyword_especial = str_replace(" ","",$keyword[$i]);
	$txt .="<button 
				class=\"btn btn-primary btn-xs btn_divKeys\" 
				type=\"button\" 
				name=\"$keyword[$i]\" 
				onclick=\"autoDelete('keys_acomodidades','#btn_$keyword_especial')\" 
				id=\"btn_$keyword_especial\">
				$keyword[$i]
				<span class=\"glyphicon glyphicon-remove\">
				</span>
			</button>";
	};
	
	echo "$txt";	  
}
?>