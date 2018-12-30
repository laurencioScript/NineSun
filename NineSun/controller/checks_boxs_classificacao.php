<?php 
	$cont = 0;
	for($cont=1;$cont<6;$cont++){ 
?>
		<li><div class="col-md-offset-2">
			<label class="customcheck">	
				<input type="checkbox" id="<?php echo $cont ?>" name="<?php echo $cont ?>" value="<?php echo $cont ?>">
<?php 
		for($x=1;$x<$cont+1;$x++){ 
?>		
				<span class="glyphicon glyphicon-star"></span>
<?php 
		};// fim do for 
?>
				<span class="checkmark"></span>
			</label>
		</div></li>
<?php 
		}; // fim do for 
?>