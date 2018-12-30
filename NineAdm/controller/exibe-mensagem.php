<?php session_start(); ?>
<?php
		function msg(){
			if(isset($_SESSION['msg']) && isset($_SESSION['tipo'])):
				$msg = $_SESSION['msg']; $tipo = $_SESSION['tipo'] ;
?>
			<div class="col-md-offset-4 col-md-4"><div class="alert alert-<?php echo $tipo;?>" role="alert"><?php echo $msg;?></div></div>
<?php
			unset($_SESSION['tipo']);
			unset($_SESSION['msg']);
			endif;
		
		}

		function write_msg($msg,$tipo){
			session_start();
			$_SESSION['msg'] = $msg;
			$_SESSION['tipo'] = $tipo;
		}
		
?>




