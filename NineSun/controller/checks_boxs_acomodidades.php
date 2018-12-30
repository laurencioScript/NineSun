<?php require_once 'class/Acomodidade.php';

$lista  = Acomodidade::listar();
	for ($i=0; $i < count($lista); $i++) 
	{ 
?>

<li><div class="col-md-offset-2">
		<label class="customcheck"><?php echo $lista[$i][1]; ?>
			<input type="checkbox" id="<?php echo $lista[$i][0]; ?>" name="<?php echo $lista[$i][1]; ?>" value="<?php echo $lista[$i][0]; ?>">
			<span class="checkmark"></span>
		</label>
	</div>
</li>

<?php }//fim do for ?>