<?php 
$id = $_POST['key'];
$tipo = $_POST['tipo'];
$keyword = $_POST['content'];

if($tipo == "classificação"){
	$keyword = "";
	for ($i=1; $i <= $id; $i++) 
	{ 
		$keyword .= "<span class=\"glyphicon glyphicon-star\"></span>"; 
	}
}

?>

<button 
	class="btn btn-warning btn-xs btn_divKeys" 
	type="button" 
	name="<?php echo $tipo; ?>" 
	id="<?php echo $id; ?>">
	<?php echo $keyword; ?>
	
	<span class="glyphicon glyphicon-remove"></span>
</button>